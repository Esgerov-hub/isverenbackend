<!DOCTYPE html>
<html lang="az">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CV-nizi Onlayn Paylaşın - İdeal İş Təklifləri Üçün Şans Yaradın</title>


    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('web/assets/img/favicon.png') }}">

    <link href="{{ asset('web/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('web/assets/fonts/flaticon.css') }}">

    <link href="{{ asset('web/assets/css/style.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('web/assets/css/plugin.css') }}" rel="stylesheet" type="text/css">

    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="stylesheet" href="{{ asset('web/cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/assets/fonts/line-icons.css') }}" type="text/css">
    <meta http-equiv="content-language" content="az">
    <meta name="title" content="isveren.az - CV Yaratma və Yerləşdirmə | Azərbaycanda İşəgötürənlər üçün Ən Yaxşı Platforma">
    <meta name="description" content="isveren.az saytında CV yaradın və işəgötürənlərə çatdırın. Azərbaycanda ən son vakansiyalar üçün CV yerləşdirin və yeni iş imkanlarını kəşf edin." />
    <meta property="og:title" content="isveren.az - CV Yaratma və Yerləşdirmə | Azərbaycanda İşəgötürənlər üçün Ən Yaxşı Platforma" />
    <meta name="og:description" content="isveren.az saytında CV yaradın və işəgötürənlərə çatdırın. Azərbaycanda ən son vakansiyalar üçün CV yerləşdirin və yeni iş imkanlarını kəşf edin." />
    <meta property="og:url" content="https://isveren.az/cv" />
    <meta name="keywords" content="isveren.az, CV yaratma, CV yerləşdirmə, vakansiyalar, iş elanları, iş tapmaq" />
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

<style>
    .job-card {
        border: 1px solid #ddd;
        padding: 20px;
        border-radius: 10px;
        background-color: #fff;
        text-align: center;
        position: relative;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .job-card img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 50%;
        border: 2px solid #ddd; /* Kənar rəngsiz xətt */
        padding: 3px; /* Şəkil və xətt arasında boşluq */
    }


    .job-block-info h4 {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .job-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        justify-content: center;
        gap: 10px;
        flex-wrap: wrap;
    }

    .job-list li {
        background-color: #f0f0f0;
        border-radius: 20px;
        padding: 5px 10px;
        font-size: 14px;
    }

    .job-price {
        font-size: 16px;
        font-weight: bold;
        color: #5a5a5a;
    }

    .fa-map-marker {
        margin-right: 5px;
    }

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
        background-image: url("{{ asset('web/assets/images/heart-dislike.png') }}");
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
        background-image: url("{{ asset('web/assets/images/heart-like.png') }}");

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


<x-web.header />



<section class="breadcrumb-main" style="background-image:url({{ asset('web/assets/images/shape-1.png') }});">
    <div class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <div class="banner-content text-center w-85 mx-auto">
                    <h3>@lang('web.copyright')</h3>
                    <p class="mb-4">@lang('web.copyright_text')</p>
                    <div class="book-form box-shadow p-3 pb-0 bg-white rounded main_search">
                        <form action="{{ route('web.cv') }}" method="GET">
                            @csrf
                            <div class="row d-flex align-items-center justify-content-between">
                                <div class="col-lg-10 col-md-6 border-end  mb-2">
                                    <div class="form-group">
                                        <div class="input-box" style="display: flex;">
                                            <input type="text" name="q" class="border-0" placeholder="@lang('web.search')">
                                            <button type="submit" style="background: #fff;">
                                                <img src="{{ asset('web/assets/img/search.png') }}" style="width: 30px; height: 30px; margin-top: 10px;">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 mb-2">
                                    <div class="form-group text-center">
                                        <a href="#" type="submit" id="myLink" class="w-80">
                                            <img src="{{ asset('web/assets/img/filter.png') }}" style="width: 20px; margin-right: 5px;">
                                            @lang('web.read_more')
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="book-form box-shadow p-3 pb-0 bg-white rounded hidden" style="margin-top: 20px;" id="advanced_search">
                        <div class="s009">
                            <form action="{{ route('web.cv') }}" method="GET">
                                <div class="inner-form">
                                    <div class="advance-search">
                                        <div class="row">
                                            <div class="input-field">
                                                <div class="input-select">
                                                    <select id="categorySelect" name="categoryId">
                                                        <option  value="">@lang('web.categories')</option>
                                                        @if (!empty($categories))
                                                            @foreach ($categories as $key => $cat)
                                                                @if($cat->parent_id == null)
                                                                    <option value="{{ $cat->id }}" @if(!empty($_GET['categoryId']) && $_GET['categoryId']==$cat->id) selected @endif> {!! json_decode($cat, true)['name']['az'] !!}</option>
                                                                    @foreach ($cat->subcategory as $sub => $subcategory)
                                                                        <option value="{{ $subcategory->id }}"  @if(!empty($_GET['categoryId']) && $_GET['categoryId']==$subcategory->id) selected @endif>
                                                                            --- {!! json_decode($subcategory, true)['name']['az'] !!}</option>
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="input-field">
                                                <div class="input-select">
                                                    <select id="jobTypeSelect" name="jobTypeId">
                                                        <option placeholder=""
                                                                value="">@lang('web.job_type')</option>
                                                        @if (!empty($jobType))
                                                            @foreach ($jobType as $key => $type)
                                                                <option value="{{ $type->id }}" @if(!empty($_GET['jobTypeId']) && $_GET['jobTypeId']==$type->id) selected @endif>
                                                                    {!! json_decode($type, true)['name']['az'] !!}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="input-field">
                                                <div class="input-select">
                                                    <select id="citySelect"  name="citySelect">
                                                        <option placeholder="" value="">Şəhər</option>
                                                        @if (!empty($cities))
                                                            @foreach ($cities as $key => $city)
                                                                <option value="{{ $city->id }}"  @if(!empty($_GET['citySelect']) && $_GET['citySelect']==$city->id) selected @endif>
                                                                    {!! json_decode($city, true)['name']['az'] !!}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row second">
                                            <div class="input-field">
                                                <div class="input-select">
                                                    <select data-trigger="" id="saleSelect" name="saleSelect">
                                                        <option value="">Maaş</option>
                                                        <option value="0-500" @if(!empty($_GET['saleSelect']) && $_GET['saleSelect']=='0-500') selected @endif>0-500</option>
                                                        <option value="500-1000" @if(!empty($_GET['saleSelect']) && $_GET['saleSelect']=='500-1000') selected @endif>500-1000</option>
                                                        <option value="1000-2000" @if(!empty($_GET['saleSelect']) && $_GET['saleSelect']=='1000-2000') selected @endif>1000-2000</option>
                                                        <option value="2000-5000" @if(!empty($_GET['saleSelect']) && $_GET['saleSelect']=='2000-5000') selected @endif>2000-5000</option>
                                                        <option value="5000+" @if(!empty($_GET['saleSelect']) && $_GET['saleSelect']=='5000+') selected @endif>5000+</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row third">
                                            <div class="input-field">
                                                <div class="result-count">
                                                    <span id="count"></span>
                                                </div>
                                                <div class="group-btn">
                                                    <button class="btn-search">AXTAR</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dot-overlay" style="margin-top: -50px;"></div>
</section>
</br>
<section class="find-job bg-lgrey">
    <div class="container">
        <div class="job-box">
            <div class="row data-wrapper">
                <x-web.cv-data :cv="$cv"/>
                <div class="auto-load text-center" style="display: none;">
                    <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="60" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                                    <path fill="#000" d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                                        <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s" from="0 50 50" to="360 50 50" repeatCount="indefinite"/>
                                    </path>
                                </svg>
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

<script>
    $(document).on('change', '#categorySelect, #jobTypeSelect, #citySelect, #saleSelect', function () {
        categoryId = $('#categorySelect').val();
        jobTypeId = $('#jobTypeSelect').val();
        citySelect = $('#citySelect').val();
        saleSelect = $('#saleSelect').val();
        var page = 1;
        var loading = false;

        var url = '/cv' + "?page=" + page;
        if (jobTypeId != null || categoryId != null || citySelect != null || saleSelect != null) {
            page = 1;
            url = '/cv' + "?page=" + page + "&categoryId=" + categoryId + "&jobTypeId=" + jobTypeId + "&citySelect=" + citySelect + "&saleSelect=" + saleSelect;
        }
//page=1&categoryId=364&jobTypeId=&citySelect=&saleSelect=
        //page=2
        var scrollTimeout;
        $.ajax({
            url: url,
            type: 'GET',
            data: {
                categoryId: categoryId,
                jobTypeId: jobTypeId,
                citySelect: citySelect,
                saleSelect: saleSelect // Include the selected price range
            },
            success: function (data) {
                if (page === 1) {
                    $("#count").empty().append(data.cvCount);
                }
            }
        }).fail(function (jqXHR, ajaxOptions, thrownError) {
        }).always(function () {
            loading = false;
        });
    });
</script>
<script>
    var ENDPOINT = "{{ route('web.cv') }}";
    var page = 1;
    var loading = false;
    var scrollTimeout;

    var disablePost = false;

    $(window).scroll(function () {
        if (!loading && !disablePost && $(window).scrollTop() + $(window).height() >= ($(document).height() -
            1620)) {
            if (scrollTimeout) {
                clearTimeout(scrollTimeout);
            }
            scrollTimeout = setTimeout(function () {
                loading = true;
                page++;
                infinteLoadMore(page);
            }, 100);
        }
    });

    function infinteLoadMore(page) {

        var endpointWithPage = ENDPOINT + "?page=" + page;
        // Check if a search query is present, and if so, include it in the endpoint
        if (getParameterByName('q')) {
            endpointWithPage += "&q=" + getParameterByName('q');
        }

        var ajaxUrl = "https://" + window.location.host + "/cv?page=" + page;
        var token = getParameterByName('_token');

        if (token) {
            $('.auto-load').html("Əlavə məlumat yoxdur :(");
            return;
        }

        $.ajax({
            url: ajaxUrl,
            datatype: "html",
            type: "get",
            beforeSend: function () {
                $('.auto-load').show();
            }
        })
            .done(function (response) {
                if (response.cv.data == '') {
                    $('.auto-load').html("Əlavə məlumat yoxdur :(");
                    return;
                }

                $('.auto-load').hide();
                $(".data-wrapper").append(response.html);
            })
            .fail(function (jqXHR, ajaxOptions, thrownError) {
            })
            .always(function () {
                loading = false;
            });
    }

    // Helper function to get query parameters from the URL
    function getParameterByName(name) {
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
        var results = regex.exec(location.search);
        return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }


    // Click category show and none
    $(document).ready(function () {
        $("#myLink").on("click", function (e) {
            e.preventDefault();

            var currentId = $(this).attr("id");
            if (currentId === "new") {
                $("#advanced_search").addClass("none");
            } else {
                $("#advanced_search").addClass("hidden");
                // $(this).attr("id", "new");
            }
        });
    });
</script>

<x-web.footer />

