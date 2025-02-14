<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\UserCompany;
use Spatie\Analytics\Period;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test', function () {
    $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(1));
    dd($analyticsData);
});

Route::get('/cv/vacancies', 'HomeController@apiVacancy')->name('api.vacancy');


Route::get('/yandex_bc8fb0df268254a0.html', function () {
    return response()->view('yandex_verification')->header('Content-Type', 'text/html');
});

Route::post('/job/search', 'HomeController@search')->name('job.search');
Route::get('/job/search', 'HomeController@search');
Route::get('/coming-soon', 'HomeController@comingsoon');

Route::get('/sitemap.xml', 'SitemapController@index')->name('sitemap.index');
Route::get('/sitemap', 'SitemapController@dayResult')->name('sitemap.dayResult');
Route::get('/company.xml', 'SitemapController@company')->name('sitemap.company');
Route::get('/professions-sitemap.xml', 'SitemapController@profession')->name('sitemap.index');


Route::get('/sitemap-years.xml', 'SitemapController@years')->name('sitemap.years');
Route::get('/sitemap-months-{year}.xml', 'SitemapController@months')->name('sitemap.months');
Route::get('/sitemap-days-{year}-{month}.xml', 'SitemapController@days')->name('sitemap.days');

Route::get('/scrape/{website}', 'ScrapingController@data');

Route::get('/', 'HomeController@home')->name('web.home');
Route::get('/vacancies', 'HomeController@vacancy')->name('web.vacancy');
Route::get('/about', 'HomeController@about')->name('web.about');
Route::get('/rules', 'HomeController@rules')->name('web.rules');
Route::get('/advertising', 'HomeController@advertising')->name('web.advertising');
Route::get('/contact', 'HomeController@contact')->name('web.contact');
Route::post('/job-contact', 'Users\AuthController@jobContact')->name('web.jobContact');
Route::post('/contactform', 'HomeController@contactform')->name('web.contactform');

Route::get('/follower', 'HomeController@follower')->name('web.follower');
Route::get('/api', 'HomeController@home')->name('web.scroll');

Route::get('/job-details/{id}', 'HomeController@jobDetails')->name('web.job-details');
Route::post('/ho', 'HomeController@index')->name('web.search');


Route::get('/companies', 'HomeController@companies')->name('web.companies');
Route::get('/api-companies', 'HomeController@companies')->name('web.scrollCompanies');
Route::get('/company-details/{id}', 'HomeController@companyDetails')->name('web.company-details');

Route::get('/blogs', 'HomeController@blogs')->name('web.blogs');
Route::get('/api-blogs', 'HomeController@blogs')->name('web.scrollBlogs');
Route::get('/blog-details/{id}', 'HomeController@blogDetails')->name('web.blogs-details');

Route::get('/cv', 'HomeController@cv')->name('web.cv');
Route::get('/api-cv', 'HomeController@cv')->name('web.scrollCv');
Route::get('/cv-details/{id}', 'HomeController@cvDetails')->name('web.cv-details');
Route::get('/cv/download/{id}', 'HomeController@downloadCv')->name('web.cvPdf');

Route::get('/professions', 'HomeController@professions')->name('web.professions');
Route::get('/autocomplete', 'HomeController@autocomplete')->name('web.autocomplete');

Route::post('/interact', 'HomeController@interact');

//start login and register
Route::get('/captcha', 'Users\AuthController@generateCaptcha')->name( 'web.generateCaptcha');
Route::get('/register/user-activity/{id}', 'Users\AuthController@userStatus')->name('web.register.userStatus');
Route::get('/register/company-activity/{id}', 'Users\AuthController@companyStatus')->name('web.register.companyStatus');

Route::get('auth/company-google', 'Users\SocialController@redirectToCompanyGoogle');
Route::get('auth/company-google/callback', 'Users\SocialController@handleCompanyGoogleCallback');
Route::get('auth/user-google', 'Users\SocialController@redirectToUserGoogle');
Route::get('auth/user-google/callback', 'Users\SocialController@handleUserGoogleCallback');
Route::get('auth/facebook', 'Users\SocialController@redirectToFacebook');
Route::get('auth/facebook/callback', 'Users\SocialController@handleFacebookCallback');

Route::get('/register', 'Users\AuthController@register')->name('web.register');
Route::post('/user-register-accept', 'Users\AuthController@userRegisterAccept')->name('web.userRegisterAccept');
Route::post('/company-register-accept', 'Users\AuthController@companyRegisterAccept')->name('web.companyRegisterAccept');
Route::get('/login', 'Users\AuthController@login')->name('web.login');
Route::post('/user-login-accept', 'Users\AuthController@userLoginAccept')->name('web.userLoginAccept');
Route::post('/company-login-accept', 'Users\AuthController@companyLoginAccept')->name('web.companyLoginAccept');
//end login and register

Route::middleware([UserCompany::class])->group(function () {
    Route::get('/logout', 'Users\AuthController@logout')->name('web.user.logout');
    Route::get('/user/account', 'Users\UsersController@dashboard')->name('web.user.dashboard');
    Route::get('/user/settings', 'Users\UsersController@settings')->name('web.user.settings');
    Route::put('/user/settings_update/{id}', 'Users\UsersController@settings_update')->name('web.user.settings_update');

    //start company
    Route::get('/user/jobs/list', 'Users\JobController@index')->name('web.user.jobs.list');
    Route::get('/user/jobs/create', 'Users\JobController@create')->name('web.user.jobs.create');
    Route::post('/user/jobs/store', 'Users\JobController@store')->name('web.user.jobs.store');
    Route::get('/user/jobs/edit/{id}', 'Users\JobController@edit')->name('web.user.jobs.edit');
    Route::put('/user/jobs/update/{id}', 'Users\JobController@update')->name('web.user.jobs.update');

    Route::get('/user/company/list', 'Users\CompanyController@index')->name('web.user.company.list');
    Route::get('/user/company/create', 'Users\CompanyController@create')->name('web.user.company.create');
    Route::post('/user/company/store', 'Users\CompanyController@store')->name('web.user.company.store');
    Route::get('/user/company/edit/{id}', 'Users\CompanyController@edit')->name('web.user.company.edit');
    Route::put('/user/company/update/{id}', 'Users\CompanyController@update')->name('web.user.company.update');
    Route::get('/company/appeal', 'Users\UsersController@companyAppeal')->name('web.company.appeal');
    //end company

    //start user
    Route::get('/user/cv', 'Users\CvController@list')->name('web.user.cv');
    Route::post('/user/cv/store', 'Users\CvController@store')->name('web.user.cv.store');
    Route::put('/user/cv/update/{id}', 'Users\CvController@update')->name('web.user.cv.update');
    Route::get('/user/followers', 'Users\UsersController@follower')->name('web.user.follower');
    Route::get('/user/appeal', 'Users\UsersController@userAppeal')->name('web.user.appeal');
    //end user

    Route::get('/user/sub-category/{id}', 'Users\UsersController@subCategory')->name('web.sub-category');
});
