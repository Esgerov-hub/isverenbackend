<!DOCTYPE html>
<html lang="az">
<head>
    @php
        $htmlContent = SEOMeta::getDescription();
        $decodedContent = htmlspecialchars_decode($htmlContent);
        // HTML etiketlerini kaldırmak için strip_tags fonksiyonunu kullanabiliriz.
        $plainTextContent = strip_tags($decodedContent);

        // Metni belirli bir uzunlukta sınırla
        $maxLength = 160; // Örnek olarak 160 karakter
        $plainTextContent = substr($plainTextContent, 0, $maxLength);
    @endphp

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>


    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('web/assets/img/favicon.png') }}">

    <link href="{{ asset('web/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('web/assets/fonts/flaticon.css') }}">

    <link href="{{ asset('web/assets/css/style.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('web/assets/css/plugin.css') }}" rel="stylesheet" type="text/css">

    <link rel="canonical" href="{{ url()->current() }}">

    {{-- <link href="{{ asset('web/assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('web/assets/css/all.min.css') }}" rel="stylesheet" type="text/css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('web/assets/fonts/line-icons.css') }}" type="text/css">
    <meta http-equiv="content-language" content="az">
    <meta name="keywords" content="isveren.az,iş elanları,vakansiyalar,iw elanlari,Is elanlari 2024">
    <meta name="og:image" content="{{ asset('web/assets/img/favicon.png') }}">

    <meta name="title" content="{{ $title }}"/>
    <meta name="description" content="{{ $plainTextContent }}">
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="{{ $title }}"/>
    <meta property="og:description" content="{{ $plainTextContent }}"/>
    <meta property="og:keyword"
          content="{{ json_decode($job->jobSeo ?? null, true)['meta_keyword']['az'] ?? null }}">
    <meta property="og:url" content="{{ route('web.job-details', $job->id) }}">

    <x-web.header/>

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
    <style>
        .active-like {
            border-radius: 12px;
            color: #061e40;
            width: 40px;
            height: 40px;
            margin-right: 9px;
            background-color: #f3f6f9;
        }

        .active-like {
            background-position: center;
            background-repeat: no-repeat;
            border-radius: 8px;
            background-image: url('https://isveren.az/web/assets/images/heart-dislike.png');
            background-size: 18px;
            opacity: 1;
        }

        .active-dislike {
            border-radius: 12px;
            color: #061e40;
            width: 40px;
            height: 40px;
            margin-right: 9px;
            background-color: #f3f6f9;

        }

        .active-dislike {
            background-position: center;
            background-repeat: no-repeat;
            border-radius: 8px;
            background-image: url('https://isveren.az/web/assets/images/heart-dislike.png');
            background-size: 18px;
            opacity: 1;
        }

        @media (max-width: 992px) {
            .white {
                display: none;
            }

            .me-4 {
                display: none;
            }

            .wishlist {
                display: none !important;
            }

            .job-top-item {
                display: none !important;
            }
        }
    </style>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7H9FKE7N5B"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-7H9FKE7N5B');
    </script>


<body>

<section class="job-single bg-lgrey border-t">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="single-content">
                    <div class="job-single-title">
                        <div class="row align-items-center text-center text-lg-start">
                            <div class="col-lg-7 mb-2">
                                <h3 class="mb-0">{{ json_decode($job, true)['title']['az'] }}</h3>
                                <small>{{ date('d M Y', strtotime($job->created_at)) }}</small>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="job-single-featuredimage overflow-hidden mb-2 rounded">
                        <img alt="" src=" --}}{{-- {{ asset('user/user.png') }} --}}{{-- {{ (!empty(json_decode($job->company, true)['logo']) && json_decode($job->company, true)['logo'] !='null.png') ? asset("uploads/companies/logo/".json_decode($job->company, true)['logo']):asset('web/assets/img/favicon.png')}}"
                             style="width: 192px; border-radius: 0%;">
                    </div> --}}
                    <div class="job-description mb-2">
                        {!! json_decode($job, true)['description']['az'] !!}
                    </div>
                    @if(!empty(auth()->guard('web')->user()->userRole->role) && (auth()->guard('web')->user()->userRole->role->slug == 'users' || auth()->guard('web')->user()->userRole->role->slug == 'admin'))
                        <a href="#" data-bs-toggle="modal" data-bs-target="#job-contact" class="job-btn btn1 d-inline-block">Müraciət et</a>
                    @else
                        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal1" class="job-btn btn1 d-inline-block">Müraciət et</a>
                    @endif
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 ps-xl-4">
                <div class="sidebar-sticky sticky1">
                    <div class="sidebar-list bg-grey p-1 rounded">
                        <div class="job-information bg-white p-4 rounded mb-4">
                            <ul class="job-information-list">

                                <li class="d-block border-b mb-2 pb-2">
                                    <i class="fa fa-eye"></i> Baxış sayı
                                    <span class="float-end"> {!! !empty($job->reads) ? $job->reads : 0 !!}</span>
                                </li>
                                @if (!empty($job->email))
                                    <li class="d-block border-b mb-2 pb-2">
                                        <i class="fa fa-mail-bulk"></i> @lang('web.email')
                                        @if (\Illuminate\Support\Str::startsWith($job->email, 'https'))
                                            <a href="{!! $job->email !!}" class="float-end">Muraciet et</a>
                                        @else
                                            <span class="float-end">{!! $job->email !!}</span>
                                        @endif
                                    </li>
                                @endif
                                @if (!empty($job->phone))
                                    <li class="d-block border-b mb-2 pb-2">
                                        <i class="fa fa-phone"></i> @lang('web.phone')
                                        <span class="float-end"> {!! json_decode($job, true)['phone'] !!}</span>
                                    </li>
                                @endif
                                @if (!empty($job->created_at))
                                    <?php
                                    $datePosted = isset($job->created_at) ? date('Y-m-d',strtotime($job->created_at)) : \Carbon\Carbon::now();
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
                                    <li class="d-block border-b mb-2 pb-2">
                                        <i class="fa fa-calendar"></i> Əlavə edilmə tarixi
                                        <span class="float-end">
                                                {{ $created_at }}</span>
                                    </li>
                                @endif
                                @if (!empty($job->updated_at) && date('Y-m-d',strtotime($job->updated_at))  > date('Y-m-d',strtotime($job->created_at)))
                                    <?php
                                    $datePosted = isset($job->updated_at) ? date('Y-m-d',strtotime($job->updated_at)) : null;
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
                                    $updated_at = $date->format('d ') . $months[(int)$date->format('m')] . $date->format(' Y');

                                    ?>
                                <li class="d-block border-b mb-2 pb-2">
                                    <i class="fa fa-redo"></i> @lang('web.updated_at')
                                    <span class="float-end"> {{ $updated_at }}</span>
                                </li>
                                @endif
                                @if (!empty($job->city))
                                    <li class="d-block border-b mb-2 pb-2">
                                        <i class="fa fa-map-marker"></i> @lang('web.location')
                                        <span class="float-end">
                                                {{ json_decode($job->city, true)['name']['az'] ?? null }}</span>
                                    </li>
                                @endif
                                @if (!empty($job->price))
                                    <li class="d-block border-b mb-2 pb-2">
                                        <i class="fa fa-money-check"></i> @lang('web.salary')
                                        <span class="float-end">{{ $job->price }}</span>
                                    </li>
                                @endif
                                @if (!empty($job->jobcategory->category))
                                    <li class="d-block border-b mb-2 pb-2">
                                        <i class="fa fa-layer-group"></i> @lang('web.category')
                                        <span
                                                class="float-end">{{ json_decode($job->jobcategory->category ?? null, true)['name']['az'] ?? null }}</span>
                                    </li>
                                @endif
                                @if (!empty($job->jobType))
                                    <li class="d-block">
                                        <i class="fa fa-layer-group"></i> @lang('web.type')
                                        <span
                                                class="float-end">{{ json_decode($job->jobType, true)['name']['az'] }}</span>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    <!-- @if (isset($job->jobUser))
                        <div class="sidebar-contact bg-white p-4 rounded" >
                                                        <h4 class="small-heading">@lang('web.contact_info')</h4>
                                <img src="@if (isset($job->jobUser->image)) {{ asset('uploads/user/image/' . $job->jobUser->image) }} @else '' @endif"  style="max-width: 34%; !important;" alt class="rounded mb-2 w-100">
                                <div class="info-address">
                                    <ul>
                                        <li class="d-block border-b mb-1 pb-1">
                                            <i class="fa fa-phone me-1"></i> {{ isset($job->jobUser->phone) ? $job->jobUser->phone : null }}
                                </li>
                                <li class="d-block border-b mb-1 pb-1">
                                    <i class="fa fa-envelope me-1"></i>
                                    <a class="__cf_email__" data-cfemail="bad9d5d4cedbd9cefaf0d5d8dfdf94d9d5d7">{{ isset($job->jobUser->email) ? $job->jobUser->email : null }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
@endif -->
                    </div>
                </div>


            </div>

            <div class="related-job mt-4 border-t pt-4 text-center text-lg-start">
                <div class="section-title mb-4">
                    <h3 class="mb-1">@lang('web.some_type')</h3>
                </div>
                @if (!empty($datas))
                    @foreach ($datas as $data)
                        <div
                                class="job-card box-shadow p-4 rounded bg-white position-relative mb-4  text-center text-md-start">
                            <div class="row align-items-center">
                                <div class="col-lg-1 col-md-1">
                                    <div class="company-pro"
                                         style="display: flex; justify-content: center; padding-left: 49px;">
                                        <div class="image-box bg-white border-all p-3 px-4 rounded d-inline-block">
                                            {{-- <img alt="" src=" --}}{{-- {{ asset('user/user.png') }} --}}{{-- {{ (!empty(json_decode($data->company, true)['logo']) && json_decode($data->company, true)['logo'] !='null.png') ? asset("uploads/companies/logo/".json_decode($data->company, true)['logo']):asset('web/assets/img/favicon.png')}}"
                                                     style="width: 40px; border-radius: 0%;"> --}}
                                            @if (json_decode($data->company, true)['logo'] && json_decode($data->company, true)['logo'] != 'null.png')
                                                <img alt=""
                                                     src="{{ asset('uploads/companies/logo/' . json_decode($data->company, true)['logo']) }}"
                                                     style="width: 40px !important; border-radius: 0%;">
                                            @else
                                                <?php
                                                $company_name = json_decode($data->company, true)['name']['az'] ?? "$";
                                                $first = substr(trim($company_name), 0, 1);
                                                if ($first == '"') {
                                                    $first = substr(trim($company_name), 1, 2);
                                                }
                                                ?>
                                                <div class="vacancies__icon" data-color="#4B21F3">
                                                    <div class="vc_icon_back" style="background-color:#4B21F3;">
                                                    </div>
                                                    <span style="color:#4B21F3 !important;"> {{ $first }}
                                                        </span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <h5 style="font-size: 16px !important;  padding-left: 38px;"
                                        class="mt-1 job-title"><a
                                                href="{{ route('web.job-details', $data->id) }}">{{ json_decode($data, true)['title']['az'] }}</a>
                                    </h5>
                                    <p style="font-size: 13px; padding-left: 38px;" style=""
                                       class="job-list">
                                        {{ json_decode($data->company, true)['name']['az'] ?? null }}</p>
                                </div>
                                <div class="col-lg-5 col-md-5">
                                    <div class="job-sidecontent text-center"
                                         style="display: flex; justify-content: end;">
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
                                            @if (!empty($data->created_at))
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
                                                $createdAt = $date->format('d ') . $months[(int)$date->format('m')] . $date->format(' Y');

                                                ?>
                                                <span
                                                        style="margin-right:15px;  padding-top: 5px; font-size:14px;">{{ $createdAt }}</span>
                                            @endif

                                        </div>

                                        <a href="javascript:void(0)" data-job-id="{{ $data->id }}"
                                           class="interaction-button {{ $defaultInteractionType === 'like' ? 'active-dislike' : 'active-like' }}"
                                           data-job-id="{{ $data->id }}" id="test"><span
                                                    style="visibility: hidden;">{{ $defaultInteractionType === 'like' ? 'Unlike' : 'Like' }}</a>

                                    </div>

                                </div>
                            </div>

                        </div>
                    @endforeach
                @endif
                <a href="{{ route('web.home') }}" class="job-btn btn1 d-inline-block">@lang('web.read_more')</a>
            </div>
        </div>
    </div>
</section>
@if(!empty(auth()->guard('web')->user()->userRole->role) && (auth()->guard('web')->user()->userRole->role->slug == 'users' || auth()->guard('web')->user()->userRole->role->slug == 'admin'))
    @include('web.layouts.modal.job-contact')
@endif

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function () {
        let disablePost = false; // Declare the variable here

        $('.interaction-button').on('click', function () {
            if (disablePost) {
                return;
            }
            let button = $(this);
            let jobId = button.data('job-id');
            let interactionType = '';

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
                success: function (data) {
                    let interactionType = data.interaction;
                    button.removeClass('active-like active-dislike');
                    if (interactionType === 'like') {
                        button.attr('class', 'interaction-button active-dislike');
                    } else if (interactionType === 'dislike') {
                        button.attr('class', 'interaction-button active-like');
                    }
                    disablePost = false; // Re-enable posting
                }
            });
        });
    });

</script>
</body>

<x-web.footer/>
