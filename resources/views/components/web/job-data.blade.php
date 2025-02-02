<style>
    .company-pro img {
        max-width: 60px !important;
    }

    @media (max-width: 768px) {
        .job-sidecontent {
            display: block !important;
        }

        .job-rate {
            justify-content: center !important;
        }

        .company-pro {
            padding-left: 0 !important;
        }

        .job-list {
            text-align: center;
            padding-left: 0 !important;
        }

        .job-title {
            text-align: center;
            padding-left: 0 !important;
        }

    }
</style>
@foreach ($jobs as $data)
    <div class="job-card box-shadow p-2 rounded bg-white position-relative mb-4  text-md-start">
        <div class="row align-items-center">
            <a  href="{{ route('web.job-details', $data->id) }}" class="col-lg-1 col-md-1">
                <div class="company-pro" style="display: flex; justify-content: center; padding-left: 49px;">
                    <div class="image-box bg-white  p-3 px-4 rounded d-inline-block">
                        @if(json_decode($data->company, true)['logo'] && json_decode($data->company, true)['logo'] !='null.png')
                        <img alt="" src="{{ asset("uploads/companies/logo/".json_decode($data->company, true)['logo']) }}"
                            style="width: 100px !important; border-radius: 0%;">
                        @else
                            <?php
                                $company_name = json_decode($data->company, true)['name']['az'] ?? "$";
                                $first = substr(trim($company_name),0,1);
                                if ($first == '"'){ $first = substr(trim($company_name),1,2);}
                            ?>
                            <div class="vacancies__icon" data-color="#4B21F3">
                                <div class="vc_icon_back" style="background-color:#4B21F3;"></div>
                                <span style="color:#4B21F3 !important;"> {{$first}} </span>
                            </div>
                        @endif
                    </div>
                </div>
             </a>
            <a href="{{ route('web.job-details', $data->id) }}" class="col-lg-6 col-md-6">
                <h5 style="font-size: 16px !important;  padding-left: 38px;" class="mt-1 job-title">{{ json_decode($data, true)['title']['az'] }}
                </h5>
                <p style="font-size: 13px; padding-left: 38px;" style="" class="job-list">
                    {{ json_decode($data->company, true)['name']['az'] ?? null }}</p>
                </a>
            <div  class="col-lg-5 col-md-5">
             <a href="{{ route('web.job-details', $data->id) }}">
                <div class="job-sidecontent text-center" style="display: flex; justify-content: end;">
                    <div class="job-rate" style="display: flex; justify-content: center;">

                        <p class=""
                            style="margin-right:15px; padding-top: 5px; font-weight: 500; font-size: 15px;">
                            {{ $data->price }}
                            @php
                                $user = auth('web')->user();
                                $userInteraction = !empty($user)
                                    ? $user
                                        ->followers()
                                        ->where('job_id', $data->id)
                                        ->first()
                                    : null;

                                $defaultInteractionType = $userInteraction->interaction_type ?? null;
                            @endphp

                        </p>
                        @if(!empty($data->created_at))
                            <?php
                            $datePosted = isset($data->created_at) ? date('Y-m-d',strtotime($data->created_at)) : \Carbon\Carbon::now();
                            $date = new DateTime($datePosted);
                            $months = [
                                1 => "Yanvar",
                                2 => "Fevral",
                                3 => "Mart",
                                4 => "Aprel",
                                5 => "May",
                                6 => "İyun",
                                7 => "İyul",
                                8 => "Avqust",
                                9 => "Sentyabr",
                                10 => "Oktyabr",
                                11 => "Noyabr",
                                12 => "Dekabr"
                            ];
                            $created_at = $date->format('d ') . $months[(int)$date->format('m')] . $date->format(' Y');

                            ?>
                        <span style="margin-right:15px;  padding-top: 5px; font-size:14px;">{{ $created_at }}</span>@endif

                    </div>

                    <a href="javascript:void(0)" data-job-id="{{ $data->id }}"
                        class="interaction-button {{ $defaultInteractionType === 'like' ? 'active-dislike' : 'active-like' }}"
                        data-job-id="{{ $data->id }}" id="test"><span
                            style="visibility: hidden;">{{ $defaultInteractionType === 'like' ? 'Unlike' : 'Like' }}</a>

                </div>
             </a>

            </div>
        </div>

    </div>

    @php
    if ($data) {
        $title = isset(json_decode($data, true)['title']['az']) ? json_decode($data, true)['title']['az'] : null;
        $description = isset(json_decode($data, true)['description']['az']) ? json_decode($data, true)['description']['az'] : null;
        $companyName = isset(json_decode($data->company, true)['name']['az']) ? json_decode($data->company, true)['name']['az'] : null;
        $cityName = isset(json_decode($data->city, true)['name']['az']) ? json_decode($data->city, true)['name']['az'] : null;

        $shortenedDescription = mb_substr($description, 0, 200);
        $cleanedDescription = strip_tags($shortenedDescription);

        $datePosted = isset($data->created_at) ? date('Y-m-d',strtotime($data->created_at)) : null;
        $validThrough = isset($data->updated_at) ? date('Y-m-d',strtotime($data->updated_at)) : null;
    } else {
        $title = null;
        $cleanedDescription = null;
        $companyName = null;
        $cityName = null;
        $datePosted = null;
        $validThrough = null;
    }
    @endphp

    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "JobPosting",
            "title": "{{ $title }}",
            "description": "{!! $cleanedDescription !!}",
            "datePosted": "{{ $datePosted }}",
            "validThrough": "{{ $validThrough }}",
            "hiringOrganization": {
                "@type": "Organization",
                "name": "{{ $companyName }}"
            },
            "jobLocation": {
                "@type": "Place",
                "address": {
                    "@type": "PostalAddress",
                    "addressLocality": "{{ $cityName }}",
                }
            }
        }
        </script>
@endforeach
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function() {
        $('.interaction-button').on('click', function() {


            if (disablePost) {
                return;
            }
            let button = $(this);
            let jobId = button.data('job-id');
            let interactionType = '';
            // console.log(button.hasClass('active-like'));

            if (button.hasClass('active-like')) {
                interactionType = 'like';
            } else if (button.hasClass('active-dislike')) {
                interactionType = 'dislike';
            }

            disablePost = true;

            $.ajax({
                type: 'POST',
                url: '/interact',
                data: {
                    job_id: jobId,
                    interaction: interactionType,
                    _token: '{{ csrf_token() }}'
                },
                success: function(data) {
                    let interactionType = data.interaction;
                    // button.removeClass('active-like active-dislike');

                    if (interactionType === 'like') {
                        console.log('zzz')

                        button.attr('class', 'interaction-button active-dislike');
                    } else if (interactionType === 'dislike') {
                        button.attr('class', 'interaction-button active-like');
                    }

                    disablePost = false;
                }
            });
        });
    });
</script>
