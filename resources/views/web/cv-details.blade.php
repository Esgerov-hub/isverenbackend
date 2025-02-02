<!DOCTYPE html>
<html lang="az">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>İş elanları 2024 - Vakansiyalar</title>


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
    <meta name="title" content="isveren.az - {{ $data['name'] }} {{ $data['surname'] }} CV | Azərbaycanda İşəgötürənlər üçün Ən Yaxşı Platforma">
    <meta name="description" content="{{ $data['name'] }} {{ $data['surname'] }} - {{ json_decode($data->profession, true)['title']['az'] ?? '' }}. Təcrübə, təhsil və digər məlumatlar isveren.az saytında." />
    <meta property="og:title" content="isveren.az - {{ $data['name'] }} {{ $data['surname'] }} CV | Azərbaycanda İşəgötürənlər üçün Ən Yaxşı Platforma" />
    <meta name="og:description" content="{{ $data['name'] }} {{ $data['surname'] }} - {{ json_decode($data->profession, true)['title']['az'] ?? '' }}. Təcrübə, təhsil və digər məlumatlar isveren.az saytında." />
    <meta property="og:url" content="https://isveren.az/cv/{{ $data['id'] }}" />
    <meta name="keywords" content="{{ $data['name'] }} {{ $data['surname'] }}, CV, isveren.az, {{ json_decode($data->profession, true)['title']['az'] ?? '' }}, vakansiyalar, iş elanları, iş tapmaq" />

    <meta name="og:image" content="{{ asset('web/assets/img/favicon.png') }}">


</head>

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

<!-- <div id="preloader">
    <div id="status"></div>
</div> -->

<x-web.header/>

<section class="breadcrumb-main pt-10 pb-10"
         style="background-image:url({{ asset('web/assets/images/shape-1.png') }});">
    <div class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content text-start">
                <h3 class="mb-1">{{$data['name']}} {{$data['surname']}}</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('web.home') }}">@lang('web.home')</a></li>
                    <li class="breadcrumb-item">{{ json_decode($data->profession,true)['title']['az'] ?? json_decode($data->category,true)['name']['az'] }}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="job-single bg-lgrey">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
{{--                <div class="job-single-featuredimage overflow-hidden position-relative rounded mb-2">--}}
{{--                    <img src="{{ asset('web/assets/images/logo.png') }}" alt class>--}}
{{--                    <div class="to-bottom-overlay"></div>--}}
{{--                </div>--}}
                <div class="candidate-brief">
                    <div class="candidate-brief-item">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-md-2 col-sm-2 mb-2">
                                <img src="{{ !empty($data['image']) ? asset('uploads/cv/'.$data['image']) : asset('user/user.png') }}"
                                     alt="{{ $data['name'] }} {{ $data['surname'] }}"
                                     class="rounded-circle"
                                     style="width: 100px; height: 100px; object-fit: cover; border: 2px solid #ddd; padding: 3px;">
                            </div>
                            <div class="col-lg-7 col-md-6 col-sm-6 p-md-0 mb-2">
                                <div class="company-brief-content">
                                    <div class="candidate-loc d-flex align-items-baseline">
                                        <h4 class="mb-0 me-4">{{$data['name']}} {{$data['surname']}}</h4>
                                    </div>
                                    <small>{{ json_decode($data->profession,true)['title']['az'] ?? '' }}</small>
                                    <div class="rating-main d-flex align-items-center mb-2">
                                        <i class="fa fa-eye"> </i>
                                        <span class="float-end"
                                              style="padding: 4px;!important;"> {{$data['reads']}}</span>
                                    </div>
                                </div>
                            </div>
                            @if(!empty($data['cv_file']))
                                <div class="col-lg-3 col-md-4 col-sm-4 mb-2">
                                    <a href="{{asset('uploads/cv/'.$data['cv_file'])}}" target="_blank"
                                       class="job-btn1 btn1 d-inline-block">CV-ni yüklə</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="single-content border-t mt-2 pt-4">
                    @if(!empty($data['description']['az']))
                    <div class="job-description mb-2">
                        <h4>Haqqında</h4>
                        <p class="mb-0">{!! $data['description']['az'] ?? '' !!}</p>
                    </div>
                    @endif


                        <div class="job-description mb-2 border-all p-4 pb-2 rounded mb-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="job-description mb-2">
                                        <h4>İş bilikləri</h4>
                                        <div class="job-progress">
                                            <div class="row">
                                                <ul class="mb-0">
                                                    @if(!empty($data['work_skills']))
                                                        @foreach($data['work_skills'] as $index => $skill)
                                                            <li>
                                                                <a class="bg-grey rounded p-2 px-3 small mb-1 d-inline-block">{!! $skill !!}</a>
                                                            </li>
                                                        @endforeach
                                                    @else
                                                        <li>İş bilikləri yoxdur</li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="job-description mb-2">
                                        <h4>Dil bilikləri</h4>
                                        <div class="job-progress">
                                            <div class="row">
                                                <ul class="mb-0">
                                                    @if(!empty($data['language_skills'][0]['lang']))
                                                        @foreach($data['language_skills'] as $index => $skill)
                                                            <li>
                                                                <a class="bg-grey rounded p-2 px-3 small mb-1 d-inline-block">
                                                                    @if($skill['lang'] == 1)
                                                                        Azərbaycan dili
                                                                    @elseif($skill['lang'] == 2)
                                                                        Rus dili
                                                                    @elseif($skill['lang'] == 3)
                                                                        İngilis dili
                                                                    @elseif($skill['lang'] == 4)
                                                                        Türk dili
                                                                    @elseif($skill['lang'] == 5)
                                                                        Alman dili
                                                                    @elseif($skill['lang'] == 6)
                                                                        Fransız dili
                                                                    @elseif($skill['lang'] == 7)
                                                                        İspan dili
                                                                    @elseif($skill['lang'] == 8)
                                                                        Çin dili (Mandarin)
                                                                    @elseif($skill['lang'] == 9)
                                                                        Ərəb dili
                                                                    @elseif($skill['lang'] == 10)
                                                                        Portuqal dili
                                                                    @endif
                                                                    @if($skill['levels'] == 1)
                                                                        - Zəif
                                                                    @elseif($skill['levels'] == 2)
                                                                        - Orta
                                                                    @elseif($skill['levels'] == 3)
                                                                        - Yaxşı
                                                                    @elseif($skill['levels'] == 4)
                                                                        - Əla
                                                                    @endif
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    @else
                                                        <li>Dil bilikləri yoxdur</li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="job-description mb-2 border-all p-4 pb-2 rounded mb-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="job-description mb-2">
                                        <h4>İş təcrübəsi</h4>
                                        <ul class="list-group ps-3">
                                            @if(!empty($data['work_experience']))
                                                @foreach($data['work_experience'] as $indexExperience => $experience)
                                                    <li>{!! $experience['company'] !!} - {!! $experience['position'] !!}
                                                        | {{date('d.m.Y',strtotime($experience['start_date']))}}
                                                        - {{!empty($experience['end_date'])? date('d.m.Y',strtotime($experience['end_date'])): 'Hal-hazırda işləyir'}}</li>
                                                @endforeach
                                            @else
                                                <li>İş təcrübəsi yoxdur</li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="job-description-list mb-2">
                                        <h4>Təhsil</h4>
                                        <ul class="list-group ps-3">
                                            @if(!empty($data['education']))
                                                @foreach($data['education'] as $indexEducation => $education)
                                                    <li>{!! $education['name'] !!} - {!! $education['specialty_name'] !!}
                                                        ({{date('Y',strtotime($education['start_date']))}}
                                                        - {{!empty($education['end_date'])? date('Y',strtotime($education['end_date'])): 'Hal-hazırda oxuyur'}}
                                                        )
                                                    </li>
                                                @endforeach
                                            @else
                                                <li> Təhsili yoxdur</li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="job-description mb-2 border-all p-4 pb-2 rounded mb-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="job-description-list mb-2">
                                    <h4>Diplom və ya sertifikatlar</h4>
                                    <ul class="list-group ps-3">
                                        @if(!empty($data['diploma_certificate']))
                                            @foreach($data['diploma_certificate'] as $indexDiplomaCertificate => $diploma_certificate)
                                                <li>{!! $diploma_certificate['certificates_name'] !!}
                                                    ({{date('Y',strtotime($diploma_certificate['certificates_date']))}})
                                                </li>
                                            @endforeach
                                        @else
                                            <li>Heç bir naliyyəti yoxdur</li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="job-description-list mb-2">
                                    <h4>Sürücülük vəsiqəsi</h4>
                                    <ul class="list-group ps-3">
                                        @if(!empty($data['driving_license']))
                                            @if(!empty($data['']) && in_array("A",$data['driving_license']))
                                                A
                                            @endif
                                            @if(!empty($data['driving_license']) && in_array("B",$data['driving_license']))
                                                B
                                            @endif
                                            @if(!empty($data['driving_license']) && in_array("C",$data['driving_license']))
                                                C
                                            @endif
                                            @if(!empty($data['driving_license']) && in_array("D",$data['driving_license']))
                                                D
                                            @endif
                                            @if(!empty($data['driving_license']) && in_array("E",$data['driving_license']))
                                                E
                                            @endif
                                            @if(!empty($data['driving_license']) && in_array("personal_car",$data['driving_license']))
                                                - Şəxsi avtomobilim var
                                            @endif

                                        @else
                                            <li>Şəxsi avtomobilim və Sürücülük vəsiqəsi yoxdur</li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 ps-xl-4">
                <div class="sidebar-sticky sticky1">
                    <div class="sidebar-list bg-grey p-4 rounded">
                        <div class="job-information bg-white p-4 rounded mb-4">
                            <h4 class="mb-2">Əlavə məlumatlar</h4>
                            <ul class="job-information-list">
                                <li class="d-block border-b mb-2 pb-2">
                                    @if(!empty($data['created_at']))
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
                                        <i class="fa fa-calendar"></i> Yaradılması tarixi
                                        <span class="float-end"> {{$created_at}}</span>
                                    @elseif(!empty($data['updated_at']))
                                        <?php
                                        $datePosted = isset($data->updated_at) ? date('Y-m-d',strtotime($data->updated_at)) : \Carbon\Carbon::now();
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
                                        <i class="fa fa-calendar"></i> Yeniləmə tarixi
                                        <span class="float-end"> {{ $updated_at }}</span>
                                    @endif
                                </li>
                                <li class="d-block border-b mb-2 pb-2">
                                    <i class="fa fa-child"></i> Ailə vəziyyəti
                                    <span class="float-end">{{ $data['marriage'] == 1? "Evli": "Subay" }}</span>
                                </li>
                                <li class="d-block border-b mb-2 pb-2">
                                    <i class="fa fa-map-marker"></i> Şəhər
                                    <span class="float-end">{{ json_decode($data->city,true)['name']['az'] }}</span>
                                </li>
                                <li class="d-block border-b mb-2 pb-2">
                                    <i class="fa fa-money-check"></i> Maaş
                                    <span class="float-end">{{$data['min_salary']}} {{!empty($data['max_salary'])? '-'.$data['max_salary']:''}} AZN</span>
                                </li>
                                <li class="d-block border-b mb-2 pb-2">
                                    <i class="fa fa-layer-group"></i> Təcrübə
                                    <span class="float-end">
                                            @if(!empty($data['work_exp']) && $data['work_exp'] == 0)
                                            Yoxdur
                                        @elseif(!empty($data['work_exp']) && $data['work_exp'] == 1)
                                            1 ildən az
                                        @elseif(!empty($data['work_exp']) && $data['work_exp'] == 2)
                                            1 ildən 3 ilə qədər
                                        @elseif(!empty($data['work_exp']) && $data['work_exp'] == 3)
                                            3 ildən 5 ilə qədər
                                        @elseif(!empty($data['work_exp']) && $data['work_exp'] == 4)
                                            5 ildən yüksək
                                        @endif
                                        </span>
                                </li>
                                <li class="d-block border-b mb-2 pb-2">
                                    <i class="fa fa-user-graduate"></i> Təhsil
                                    <span class="float-end">
                                            @if(!empty($data['education_type']) && $data['education_type'] == 0)
                                            Yoxdur
                                        @elseif(!empty($data['education_type']) && $data['education_type'] == 2)
                                            Ali
                                        @elseif(!empty($data['education_type']) && $data['education_type'] == 3)
                                            Natamam ali
                                        @elseif(!empty($data['education_type']) && $data['education_type'] == 4)
                                            Orta
                                        @endif
                                        </span>
                                </li>
                                <li class="d-block">
                                    <i class="fa fa-clock-o"></i> İş rejimi
                                    <span class="float-end">
                                            @if(!empty($data->type))
                                            {{ json_decode($data->type,true)['name']['az'] }}
                                        @endif
                                        </span>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-contact bg-white p-4 rounded">
                            <h4 class="small-heading">Əlaqə vasitəsi</h4>
                            <div class="info-address">
                                <ul>
                                    <li class="d-block border-b mb-1 pb-1">
                                        <i class="fa fa-phone me-1"></i> {{$data['phone']}}
                                    </li>
                                    <li class="d-block border-b mb-2 pb-2 d-flex align-items-center justify-content-between" style="display: flex; align-items: center; justify-content: space-between; margin-right: 10px;!important;">
                                        <i class="fa fa-envelope"></i>
                                        <span style="flex-grow: 1; text-align: right;!important;">
                                            <a href="mailto:{{$data['email']}}">{{$data['email']}}</a>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


<script>
    // Helper function to get query parameters from the URL
    function getParameterByName(name) {
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
        var results = regex.exec(location.search);
        return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }


    // Click category show and none
    $(document).ready(function() {
        $("#myLink").on("click", function(e) {
            e.preventDefault();

            var currentId = $(this).attr("id");
            if (currentId === "new") {
                $(this).attr("id", "showLink");
                $("#advanced_search").addClass("hidden");
            } else {
                $("#advanced_search").removeClass("hidden");
                $(this).attr("id", "new");
            }
        });
    });
</script>
<x-web.footer />



<script src="{{ asset('web/assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('web/assets/js/main.js') }}"></script>
