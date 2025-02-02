<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Goutte\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class CheckVacancies extends Command
{
    protected $signature = 'scrape:test';
    protected $description = 'Check new job vacancies and send them to Telegram';

    private $vacancyUrl = 'https://isveren.az/vacancies';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->info('Checking for new vacancies...');
        $client = new Client();
        $crawler = $client->request('GET', $this->vacancyUrl);

        $jobs = $crawler->filter('.job-card');
        $this->info("Number of job cards found: " . $jobs->count());

        if ($jobs->count() === 0) {
            $this->info('No vacancies found.');
            return;
        }

        $newJobs = [];
        $jobs->each(function ($job) use (&$newJobs) {
            $jobTitle = $job->filter('h5')->text('No Title Found');
            $companyName = $job->filter('p')->text('No Company Found');
            $salary = $job->filter('.job-rate p')->text('No Salary Info Found');
            $jobLink = $job->filter('a')->link()->getUri();

            if (empty($jobTitle) || empty($companyName) || empty($salary) || empty($jobLink)) {
                $this->info("Skipping job due to missing information.");
                return;
            }

            // Check if the jobLink is already in the cache
            if (!Cache::has('job_' . md5($jobLink))) {
                // Store the job link in cache for a day (or set a suitable expiration)
                Cache::forever('job_' . md5($jobLink), true);

                $newJobs[] = "💼 {$jobTitle}\n🏢 {$companyName}\n🔗 {$jobLink}\n💵 {$salary}";
            }
        });

        if (!empty($newJobs)) {
            $message = "🔔 " . count($newJobs) . " yeni vakansiya:\n\n" . implode("\n\n", $newJobs);
            $this->sendToTelegram($message);
        } else {
            $this->info('No new vacancies.');
        }
    }

    private function sendToTelegram($message)
    {
        $botToken = env('TELEGRAM_BOT_TOKEN');
        $channelUsername = env('TELEGRAM_CHANNEL_USERNAME');
        $url = "https://api.telegram.org/bot{$botToken}/sendMessage";

        $response = Http::post($url, [
            'chat_id' => $channelUsername,
            'text' => $message,
        ]);

        if ($response->successful()) {
            $this->info('Message sent to Telegram.');
        } else {
            $this->error('Failed to send message to Telegram.');
            dd($response);  // Yanıtı görme
        }
    }
}
