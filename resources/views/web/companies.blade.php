@extends('web.layouts.app')

@section('web.css')
    <style>
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
@endsection
@section('web.section')
    <section class="breadcrumb-main" style="background-image:url({{ asset('web/assets/images/shape-1.png') }});">
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <div class="banner-content text-center w-85 mx-auto">
                        <h3>@lang('web.copyright')</h3>
                        <p class="mb-4">@lang('web.copyright_text')</p>
                        <div class="book-form box-shadow p-3 pb-0 bg-white rounded main_search">
                            <form action="{{ route('web.companies') }}" method="GET">
                                @csrf
                                <div class="row d-flex align-items-center justify-content-between">

                                    <div class="col-lg-13 col-md-13 border-end  mb-2">
                                        <div class="form-group">
                                            <div class="input-box" style="display: flex;">
                                                <input type="text" name="q" class="border-0"
                                                       placeholder="@lang('web.search')">
                                                <button type="submit" style="background: #fff;">
                                                    <img src="{{ asset('web/assets/img/search.png') }}"
                                                         style="width: 30px; height: 30px; margin-top: 10px;">
                                                </button>
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
                            <div class="companies-data-wrapper">
                                <x-web.companies-data :companies="$companies"/>
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
        var ENDPOINT = "{{ route('web.scrollCompanies') }}";
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
            var ajaxUrl = "https://isveren.az/companies?page=" + page;
            var token = getParameterByName('_token');
            if (token) {
                $('.auto-load').html("Əlavə məlumat yoxduraa :(");
                return;
            }

            $.ajax({
                url: ajaxUrl,
                datatype: "html",
                type: "get",
                beforeSend: function () {
                    $('.auto-load').show();
                }
            }) .done(function (response) {
                if (response.companies.data == '') {
                    $('.auto-load').html("Əlavə məlumat yoxdur:(");
                    return;
                }

                $('.auto-load').hide();
                $(".companies-data-wrapper").append(response.html);
            }).fail(function (jqXHR, ajaxOptions, thrownError) {
                console.log('Server error occurred');
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
    </script>
@endsection
