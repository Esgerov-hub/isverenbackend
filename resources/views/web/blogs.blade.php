<!DOCTYPE html>
<html lang="az">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>İş Elanları və Karyera Məsləhətləri - 2025 Blog</title>


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
    <meta name="title" content="Karyera Məsləhətləri və İş Elanları - isveren.az Blog | 2024">
    <meta name="description" content="Ən son iş elanları, karyera məsləhətləri və peşəkar inkişaf haqqında faydalı məqalələr. 2024-cü il üçün yeniliklər və tövsiyələr.">
    <meta property="og:title" content="Karyera Məsləhətləri və İş Elanları - isveren.az Blog | 2024">
    <meta name="og:description" content="Ən son iş elanları, karyera məsləhətləri və peşəkar inkişaf haqqında faydalı məqalələr. 2024-cü il üçün yeniliklər və tövsiyələr.">
    <meta property="og:url" content="https://isveren.az/blog">
    <meta name="keywords" content="karyera məsləhətləri, iş elanları, peşəkar inkişaf, məqalələr, 2024">
    <meta name="og:image" content="{{ asset('web/assets/img/favicon.png') }}">
    @yield('meta_tags')

    @yield('web.css')


</head>

<x-web.header />


<section class="breadcrumb-main" style="background-image:url({{ asset('web/assets/images/shape-1.png') }});">
    <div class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <div class="banner-content text-center w-85 mx-auto">
                    <h3>@lang('web.copyright')</h3>
                    <p class="mb-4">@lang('web.copyright_text')</p>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="find-job bg-lgrey" style="padding-top: 80px;">
    <div class="container">
        <div class="listing-inner">
            <div class="row data-blog">
                <x-web.blogs-data :blogs="$blogs"/>
            </div>
            <div class="auto-load text-center" style="display: none;">
                <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="60" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                        <path fill="#000" d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                            <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s" from="0 50 50" to="360 50 50" repeatCount="indefinite"/>
                        </path>
                    </svg>
            </div>
        </div>
    </div>
</section>

<x-web.footer />
<script>
    var ENDPOINT = "{{ route('web.scrollBlogs') }}";
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
        var ajaxUrl = "http://vacancy.test/blogs?page=" + page;//"http://" + window.location.host + "?page=" + page;
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
        }).done(function (response) {
            if (response.blogs.data == '') {
                $('.auto-load').html("Əlavə məlumat yoxdur :(");
                return;
            }

            $('.auto-load').hide();
            $(".data-blog").append(response.html);
        }).fail(function (jqXHR, ajaxOptions, thrownError) {
        }).always(function () {
            loading = false;
        });
    }


</script>




