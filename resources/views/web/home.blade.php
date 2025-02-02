@extends('web.layouts.app')
@section('web.css')
    <style>
        /* Hide by default */
        .isverenik_m {
            display: none;
        }

        /* Display on mobile devices */
        @media (max-width: 768px) { /* Adjust max-width as needed for your breakpoint */
            .isverenik_m {
                display: block;
            }

            .vac_title {
                font-size: 18px !important;
            }
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
            background-image: url('https://isveren.az/web/assets/images/heart-like.png');
            background-size: 18px;
            opacity: 1;
        }

        @media (max-width: 992px) {
            .vac_title {
                font-size: 20px !important;
            }
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
@endsection
@section('web.section')
    <section class="breadcrumb-main" style="background-image:url({{ asset('web/assets/images/shape-1.png') }});">
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <div class="banner-content text-center w-85 mx-auto">
                        <h1 class="vac_title" style="color: #17233e; font-size: 28px;">@lang('web.copyright')</h1>
                        <p class="mb-4">@lang('web.copyright_text')</p>
                        <div class="book-form box-shadow p-3 pb-0 bg-white rounded main_search">
                            <form action="{{ route('web.home') }}" method="GET">
                                @csrf
                                <div class="row d-flex align-items-center justify-content-between">
                                    <div class="col-lg-10 col-md-6 border-end  mb-2">
                                        <div class="form-group">
                                            <div class="input-box" style="display: flex;">
                                                <input type="text" name="q" class="border-0"
                                                       placeholder="@lang('web.search')">
                                                <button type="submit" style="background: #fff;">
                                                    <img src="{{ asset('web/assets/img/search.png') }}" alt="Axtarış simvolu"
                                                         style="width: 30px; height: 30px; margin-top: 10px;">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 mb-2">
                                        <div class="form-group text-center">
                                            <a href="#" type="submit" id="myLink" class="w-80">
                                                <img src="{{ asset('web/assets/img/filter.png') }}"
                                                     style="width: 20px; margin-right: 5px;">
                                                @lang('web.read_more')
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <div class="book-form box-shadow p-3 pb-0 bg-white rounded hidden" style="margin-top: 20px;"
                             id="advanced_search">
                            <div class="s009">
                                <form action="{{ route('job.search') }}" method="POST">
                                    <div class="inner-form">
                                        <div class="advance-search">
                                            <div class="row">
                                                <div class="input-field">
                                                    <div class="input-select">
                                                        <select id="categorySelect" name="categoryId">
                                                            <option value="">@lang('web.categories')</option>
                                                            @if (!empty($categories))
                                                                @foreach ($categories as $key => $cat)
                                                                    @if($cat->parent_id == null)
                                                                        <option value="{{ $cat->id }}"> {!! json_decode($cat, true)['name']['az'] !!}</option>
                                                                        @foreach ($cat->subcategory as $sub => $subcategory)
                                                                            <option value="{{ $subcategory->id }}">
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
                                                                    <option value="{{ $type->id }}">
                                                                        {!! json_decode($type, true)['name']['az'] !!}</option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="input-field">
                                                    <div class="input-select">
                                                        <select id="citySelect" name="citySelect">
                                                            <option placeholder="" value="">Şəhər</option>
                                                            @if (!empty($cities))
                                                                @foreach ($cities as $key => $city)
                                                                    <option value="{{ $city->id }}">
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
                                                            <option value="0-500">0-500</option>
                                                            <option value="500-1000">500-1000</option>
                                                            <option value="1000-2000">1000-2000</option>
                                                            <option value="2000-5000">2000-5000</option>
                                                            <option value="5000+">5000+</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row third">
                                                <div class="input-field">
                                                    <div class="result-count">
                                                        <span id="count">0 </span>Vakansiya
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
    <section class="find-job bg-lgrey" style="padding-top: 80px;">
        <div class="container">
            <div class="row flex-row-reverse flr">
                <div class="col-lg-4 pe-lg-4 isverenik">
                    <a href="https://viplife.az/" target="_blank">
                        <img src="{{ asset("reklams/viplife_pc.jpg") }}" alt="İş verən" class="w-100" style="animation: fadeIn 5s ease-in-out;!important;">
                    </a>
                </div>
                <div class="col-lg-4 pe-lg-4 isverenik_m">
                    <a href="https://viplife.az/" target="_blank">
                        <img src="{{ asset("reklams/viplife_m.jpg") }}" alt="İş verən" class="w-100" style="animation: fadeIn 5s ease-in-out;!important;">
                    </a>
                    <br><br><br>
                </div>
                <div class="col-lg-8">
                    <div class="job-box">
                        <div class="row ">
                            <div class="data-wrapper">
                                <x-web.job-data :jobs="$jobs"/>
                            </div>
                            <div class="auto-load text-center" style="display: none;">
                                <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="60"
                                     viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                                    <path fill="#000"
                                          d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                                        <animateTransform attributeName="transform" attributeType="XML" type="rotate"
                                                          dur="1s" from="0 50 50" to="360 50 50"
                                                          repeatCount="indefinite"/>
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('web.js')
    <script>
        $(document).on('change', '#categorySelect, #jobTypeSelect, #citySelect, #saleSelect', function () {
            categoryId = $('#categorySelect').val();
            jobTypeId = $('#jobTypeSelect').val();
            citySelect = $('#citySelect').val();
            saleSelect = $('#saleSelect').val();
            var page = 1;
            var loading = false;

            var url = '/' + "?page=" + page;
            if (jobTypeId != null || categoryId != null || citySelect != null || saleSelect != null) {
                page = 1;
                url = '/' + "?page=" + page + "&categoryId=" + categoryId + "&jobTypeId=" + jobTypeId + "&citySelect=" + citySelect + "&saleSelect=" + saleSelect;
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
                        $("#count").empty().append(data.jobCount);
                    }
                }
            }).fail(function (jqXHR, ajaxOptions, thrownError) {
            }).always(function () {
                loading = false;
            });
        });
    </script>
    <script>
        var ENDPOINT = "{{ route('web.home') }}";
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

            var ajaxUrl = "https://" + window.location.host + "?page=" + page;
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
                    if (response.jobs.data == '') {
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
        console.warn = function() {};
        console.error = function() {};

    </script>
@endsection




