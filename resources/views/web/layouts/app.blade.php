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
    <meta name="title" content="isveren.az - vakansiya saytı | Azərbaycanın böyük vakansiya saytı. 2024-cü il iş elanları">
    <meta name="description" content="Bakıda və regionlarda son vakansiyalar, təcrübə proqramları, part-time işlər olan yeni iş elanlari saytı." />
    <meta property="og:title" content="isveren.az - vakansiya saytı | Azərbaycanın böyük vakansiya saytı. 2024-cü il iş elanları" />
    <meta name="og:description" content="Bakıda və regionlarda son vakansiyalar, təcrübə proqramları, part-time işlər olan yeni iş elanlari saytı." />
    <meta property="og:url" content="https://isveren.az" />
    <meta name="keywords" content="isveren.az,iş elanları,vakansiyalar,iş elanlari, iş elanlari 2024">
    <meta name="og:image" content="{{ asset('web/assets/img/favicon.png') }}">
    @yield('web.css')

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(98152479, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/98152479" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
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

    <x-web.header />


    @yield('web.section')

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


    <!-- <script>
        $(document).on('change', '#categorySelect, #jobTypeSelect, #citySelect, #saleSelect', function() {
            categoryId = $('#categorySelect').val();
            jobTypeId = $('#jobTypeSelect').val();
            citySelect = $('#citySelect').val();
            saleSelect = $('#saleSelect').val();
            console.log(saleSelect);

            $(window).off('scroll');

            var page = 1;
            var loading = false;

            if (jobTypeId != null || categoryId != null || citySelect != null || saleSelect != null) {
                console.log(5);
                page = 1;
                $(".data-wrapper").empty();
            }

            console.log(categoryId);
            console.log(jobTypeId);

            var scrollTimeout;

            $.ajax({
                url: '/' + "?page=" + page,
                type: 'GET',
                data: {
                    categoryId: categoryId,
                    jobTypeId: jobTypeId,
                    citySelect: citySelect,
                    saleSelect: saleSelect // Include the selected price range
                },
                success: function(data) {
                    console.log(data);
                    $(".data-wrapper").append(data.html);
                    if (page === 1) {
                        $("#count").empty().append(data.jobCount);
                    }
                }
            }).fail(function(jqXHR, ajaxOptions, thrownError) {
                console.log('Server error occurred');
            }).always(function() {
                loading = false;
            });
        });
    </script> -->



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
