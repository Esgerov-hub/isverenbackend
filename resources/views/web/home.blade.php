@extends('web.layouts.app')
@section('web.css')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .job-list {
            max-width: 800px;
            margin: 20px auto;
            padding: 0;
            list-style: none;
        }

        @media (max-width: 767px) {
            .job-item {
                padding: 10px 15px !important;
            }

            .job-stats {
                transform: translate(0px, 0px) !important;

            }

            .job-title {
                font-size: 16px !important;
                max-width: 200px;
            }

            .premium-job {
                padding-top: 30px; /* Mobilde ekstra üst boşluk */
            }

            .premium-job::before {
                top: 0 !important;; /* Etiketi resmin üst kısmına hizala */
                font-size: 10px !important; /* Küçük yazı boyutu */
                padding: 1px 6px; /* Etiketin boyutunu küçült */
                right: 10px !important;
            }
            .new-job {
                padding-top: 30px; /* Mobilde ekstra üst boşluk */
            }

            .new-job::before {
                top: 0 !important;; /* Etiketi resmin üst kısmına hizala */
                font-size: 10px !important; /* Küçük yazı boyutu */
                padding: 1px 6px; /* Etiketin boyutunu küçült */
                right: 10px !important;
            }

        }

        .job-item {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 6px;
            display: flex;
            align-items: center;
            padding: 18px 25px;
            transition: box-shadow 0.3s;
        }

        .job-item:hover {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .job-logo {
            flex: 0 0 50px;
            margin-right: 15px;
        }

        .job-logo img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }

        .job-details {
            flex: 1;
            display: flex;
            flex-direction: column;
            overflow: hidden; /* Taşmayı engelle */
        }

        .job-title {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin: 0 0 5px;
            white-space: nowrap; /* Taşmayı engelle */
            overflow: hidden; /* Fazlalıkları gizle */
            text-overflow: ellipsis; /* Üç nokta ekle */

        }

        .job-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            white-space: nowrap;
        }

        .job-company {
            font-size: 14px;
            color: #555;
            margin: 0;
            white-space: nowrap; /* Taşmayı engelle */
            overflow: hidden; /* Fazlalıkları gizle */
            text-overflow: ellipsis; /* Üç nokta ekle */
        }

        .job-stats {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 12px;
            color: #777;
            white-space: nowrap; /* Tek satırda tut */
            transform: translate(0px, -12px);

        }

        .views {
            display: flex;
            align-items: center;
            font-size: 14px;
            color: #555;
            gap: 5px;
        }

        .premium-job {
            border: 2px solid #28a745; /* Yeşil sınır */
            position: relative; /* "Premium" etiketi için */
        }

        .premium-job::before {
            content: "Premium";
            position: absolute;
            top: 0;
            right: 23px;
            background-color: #28a745;
            color: white;
            font-size: 12px;
            font-weight: bold;
            padding: 2px 8px;
            border-radius: 5px;
            text-transform: uppercase;
        }

        .new-job {
            /*border: 2px solid deepskyblue;*/
            position: relative;
        }

        .new-job::before {
            content: "Yeni";
            position: absolute;
            top: 0;
            right: 23px;
            background-color: #ff5c5c;
            color: white;
            font-size: 12px;
            font-weight: bold;
            padding: 2px 8px;
            border-radius: 5px;
            text-transform: uppercase;
        }
        @media (max-width: 767px) {
            .wt-bnr-inr {
                height: 380px;
                margin-top: -45px;
            }
        }

    </style>
    <style>
        /*.search-container {*/
        /*    display: flex;*/
        /*    align-items: center;*/
        /*    background: #ffffff;*/
        /*    border: 2px solid #e0e0e0;*/
        /*    border-radius: 50px;*/
        /*    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);*/
        /*    overflow: hidden;*/
        /*    width: 100%;*/
        /*    padding: 5px 15px;*/
        /*}*/

        .search-container .input-group {
            flex: 1;
            display: flex;
            align-items: center;
            gap: 10px; /* Aradaki boşluk */
        }

        .search-container .input-group .input-group-text {
            background: none;
            border: none;
            padding: 0;
            color: #6c757d;
            font-size: 1.2rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-control {
            border: none;
            outline: none;
            box-shadow: none;
            height: 40px;
        }

        .form-control:focus {
            outline: none;
            box-shadow: none;
        }

        .select2-container--default .select2-selection--single {
            border: none;
            height: 40px;
            outline: none;
            display: flex;
            align-items: center;
        }

        .select2-selection__arrow {
            margin-right: 10px;
        }

        .btn-search {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 50px;
            padding: 10px 20px;
        }

        .search-container {
            display: flex;
            gap: 15px;
            background-color: white;
            padding: 10px;
            border-radius: 50px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
        }

        .input-group-text {
            background-color: #f8f9fa;
            border: none;
        }

        .form-control, .form-select {
            border: none;
            box-shadow: none;
            outline: none;
            padding: 10px 15px;
            font-size: 1rem;
        }

        .btn-search {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 50px;
            cursor: pointer;
        }

        .btn-search:hover {
            background-color: #0056b3;
        }

        /* Custom dropdown for select */
        #custom-dropdown {
            position: absolute;
            top: calc(100% + 5px);
            left: 0;
            right: 0;
            background-color: white;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            max-height: 150px;
            overflow-y: auto;
            z-index: 1000;
            display: none;
        }

        #mobile-custom-dropdown {
            position: absolute;
            top: calc(100% + 5px);
            left: 0;
            right: 0;
            background-color: white;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            max-height: 150px;
            overflow-y: auto;
            z-index: 1000;
            display: none;
        }

        #custom-dropdown.open {
            display: block;
        }

        #mobile-custom-dropdown.open {
            display: block;
        }


        .custom-dropdown-item {
            padding: 10px;
            cursor: pointer;
            color: #6c757d;
        }

        .mobile-custom-dropdown-item {
            padding: 10px;
            cursor: pointer;
            color: #6c757d;
        }

        .custom-dropdown-item:hover {
            background-color: #007bff;
            color: white;
        }

        .mobile-custom-dropdown-item:hover {
            background-color: #007bff;
            color: white;
        }

        .mobile-search-container {
            display: none;
        }

        @media (max-width: 768px) {
            .side-desktop {
                display: none;
            }


            /* Genel Arama Kutusu Tasarımı */
            .search-container {
                display: flex;
                flex-direction: column;
                gap: 15px;
                width: 100%;
                max-width: 800px;
                background-color: white;
                padding: 15px;
                border-radius: 12px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            }

            .input-group {
                display: flex;
                align-items: center;
                background-color: white;
                border: 1px solid #ddd;
                border-radius: 8px;
                padding: 8px 15px;
                position: relative;
            }

            .input-group i, .input-group .input-group-text {
                font-size: 1.2rem;
                color: #6c757d;
                margin-right: 10px;
            }

            .form-control, .form-select {
                border: none;
                padding: 0;
                flex: 1;
                font-size: 1rem;
                color: #495057;
                background: none;
                outline: none;
            }

            .form-control::placeholder, .form-select::placeholder {
                color: #adb5bd;
            }

            .form-select {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
            }

            .btn-search {
                background-color: #007bff;
                color: white;
                border: none;
                padding: 10px 20px;
                font-size: 1rem;
                border-radius: 50px;
                cursor: pointer;
                text-align: center;
            }

            .btn-search:hover {
                background-color: #0056b3;
            }

            /* Mobilde Görünen Tasarım */
            .mobile-search-container {
                display: none; /* Varsayılan olarak gizlenir */
            }


            .desktop-search-container {
                display: none; /* Mobilde masaüstü tasarımı gizle */
            }

            .mobile-search-container {
                display: flex; /* Mobilde mobil tasarımı göster */
                flex-direction: column;
                gap: 15px;
                width: 100%;
                max-width: 400px;
            }

        }
    </style>
@endsection
@section('web.section')
    <!-- CONTENT START -->
    <div class="page-content">

        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{ asset("site/images/banner/1.jpg") }});">
            <div class="overlay-main site-bg-white opacity-01"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <div class="banner-title-outer">
                        <div class="banner-title-name">
                            <h2 class="wt-title">The Most Exciting Jobs</h2>
                        </div>
                    </div>
                    <!-- BREADCRUMB ROW -->

                    <div class="search-container desktop-search-container">
                        <!-- Search Input -->
                        <div class="input-group">
            <span class="input-group-text">
                <i class="bi bi-search"></i>
            </span>
                            <input type="text" class="form-control" placeholder="Search for jobs">
                        </div>

                        <!-- Custom City Selector -->
                        <div class="input-group position-relative">
            <span class="input-group-text">
                <i class="bi bi-geo-alt"></i>
            </span>
                            <input type="text" id="custom-input" class="form-control"
                                   placeholder="Type or select a city">
                            <div id="custom-dropdown" class="custom-dropdown">
                                <div class="custom-dropdown-item" data-value="newyork">New York</div>
                                <div class="custom-dropdown-item" data-value="losangeles">Los Angeles</div>
                                <div class="custom-dropdown-item" data-value="chicago">Chicago</div>
                                <div class="custom-dropdown-item" data-value="houston">Houston</div>
                            </div>
                        </div>

                        <!-- Search Button -->
                        <button class="btn btn-search">
                            Search
                        </button>
                    </div>

                    <select id="city-select" class="d-none">
                        <option value="newyork">New York</option>
                        <option value="losangeles">Los Angeles</option>
                        <option value="chicago">Chicago</option>
                        <option value="houston">Houston</option>
                    </select>
                    <!-- BREADCRUMB ROW END -->

                    <div class="search-container mobile-search-container">
                        <div class="input-group">
                            <i class="bi bi-search"></i>
                            <input type="text" class="form-control" placeholder="Vakansiya adı">
                            <!--                            <i class="fas fa-filter" data-bs-toggle="modal" data-bs-target="#infoModal"></i>-->
                            <img src="{{ asset("site/img/filter.png") }}" style="width:19px; height: 19px" data-bs-toggle="modal" data-bs-target="#infoModal" />
                        </div>

                        <div class="input-group position-relative">
            <span class="input-group-text">
                <i class="bi bi-geo-alt"></i>
            </span>
                            <input type="text" id="mobile-custom-input" class="form-control"
                                   placeholder="Type or select a city">
                            <div id="mobile-custom-dropdown" class="mobile-custom-dropdown">
                                <div class="mobile-custom-dropdown-item" data-value="newyork">New York</div>
                                <div class="mobile-custom-dropdown-item" data-value="losangeles">Los Angeles</div>
                                <div class="mobile-custom-dropdown-item" data-value="chicago">Chicago</div>
                                <div class="mobile-custom-dropdown-item" data-value="houston">Houston</div>
                            </div>
                        </div>

                    </div>


                </div>

            </div>
        </div>
        <!-- INNER PAGE BANNER END -->


        <!-- OUR BLOG START -->
        <div class="section-full p-t120  p-b90 site-bg-white">


            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-12 rightSidebar">

                        <div class="side-bar side-desktop">

                            <div class="sidebar-elements sidebar-desktop search-bx">

                                <form>

                                    <div class="form-group mb-4">
                                        <h4 class="section-head-small mb-4">Category</h4>
                                        <select class="wt-select-bar-large selectpicker" data-live-search="true"
                                                data-bv-field="size">
                                            <option>All Category</option>
                                            <option>Web Designer</option>
                                            <option>Developer</option>
                                            <option>Acountant</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-4">
                                        <h4 class="section-head-small mb-4">Keyword</h4>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Job Title or Keyword">
                                            <button class="btn" type="button"><i class="feather-search"></i></button>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <h4 class="section-head-small mb-4">Location</h4>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search location">
                                            <button class="btn" type="button"><i class="feather-map-pin"></i></button>
                                        </div>
                                    </div>

                                    <div class="twm-sidebar-ele-filter">
                                        <h4 class="section-head-small mb-4">Job Type</h4>
                                        <ul>
                                            <li>
                                                <div class=" form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label"
                                                           for="exampleCheck1">Freelance</label>
                                                </div>
                                                <span class="twm-job-type-count">09</span>
                                            </li>

                                            <li>
                                                <div class=" form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                    <label class="form-check-label" for="exampleCheck2">Full
                                                        Time</label>
                                                </div>
                                                <span class="twm-job-type-count">07</span>
                                            </li>

                                            <li>
                                                <div class=" form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck3">
                                                    <label class="form-check-label"
                                                           for="exampleCheck3">Internship</label>
                                                </div>
                                                <span class="twm-job-type-count">15</span>
                                            </li>

                                            <li>
                                                <div class=" form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck4">
                                                    <label class="form-check-label" for="exampleCheck4">Part
                                                        Time</label>
                                                </div>
                                                <span class="twm-job-type-count">20</span>
                                            </li>

                                            <li>
                                                <div class=" form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck5">
                                                    <label class="form-check-label"
                                                           for="exampleCheck5">Temporary</label>
                                                </div>
                                                <span class="twm-job-type-count">22</span>
                                            </li>

                                            <li>
                                                <div class=" form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck6">
                                                    <label class="form-check-label"
                                                           for="exampleCheck6">Volunteer</label>
                                                </div>
                                                <span class="twm-job-type-count">25</span>
                                            </li>

                                        </ul>
                                    </div>

                                    <div class="twm-sidebar-ele-filter">
                                        <h4 class="section-head-small mb-4">Date Posts</h4>
                                        <ul>
                                            <li>
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="exampleradio1">
                                                    <label class="form-check-label" for="exampleradio1">Last
                                                        hour</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="exampleradio2">
                                                    <label class="form-check-label" for="exampleradio2">Last 24
                                                        hours</label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="exampleradio3">
                                                    <label class="form-check-label" for="exampleradio3">Last 7
                                                        days</label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="exampleradio4">
                                                    <label class="form-check-label" for="exampleradio4">Last 14
                                                        days</label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="exampleradio5">
                                                    <label class="form-check-label" for="exampleradio5">Last 30
                                                        days</label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="exampleradio6">
                                                    <label class="form-check-label" for="exampleradio6">All</label>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>

                                    <div class="twm-sidebar-ele-filter">
                                        <h4 class="section-head-small mb-4">Type of employment</h4>
                                        <ul>
                                            <li>
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="Freelance1">
                                                    <label class="form-check-label" for="Freelance1">Freelance</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="FullTime1">
                                                    <label class="form-check-label" for="FullTime1">Full Time</label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="Intership1">
                                                    <label class="form-check-label" for="Intership1">Intership</label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="Part-Time1">
                                                    <label class="form-check-label" for="Part-Time1">Part Time</label>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>

                                </form>

                            </div>

                        </div>

                        <!--                           Mobile modal-->
                        <div class="side-bar-mobile side-mobile">

                            <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoModalLabel">Search Filters</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="sidebar-elements search-bx">
                                                <form>

                                                    <div class="form-group mb-4">
                                                        <h4 class="section-head-small mb-4">Category</h4>
                                                        <select class="wt-select-bar-large selectpicker"
                                                                data-live-search="true"
                                                                data-bv-field="size">
                                                            <option>All Category</option>
                                                            <option>Web Designer</option>
                                                            <option>Developer</option>
                                                            <option>Acountant</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group mb-4">
                                                        <h4 class="section-head-small mb-4">Keyword</h4>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control"
                                                                   placeholder="Job Title or Keyword">
                                                            <button class="btn" type="button"><i
                                                                    class="feather-search"></i></button>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-4">
                                                        <h4 class="section-head-small mb-4">Location</h4>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control"
                                                                   placeholder="Search location">
                                                            <button class="btn" type="button"><i
                                                                    class="feather-map-pin"></i></button>
                                                        </div>
                                                    </div>

                                                    <div class="twm-sidebar-ele-filter">
                                                        <h4 class="section-head-small mb-4">Job Type</h4>
                                                        <ul>
                                                            <li>
                                                                <div class=" form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                           id="exampleCheck1">
                                                                    <label class="form-check-label"
                                                                           for="exampleCheck1">Freelance</label>
                                                                </div>
                                                                <span class="twm-job-type-count">09</span>
                                                            </li>

                                                            <li>
                                                                <div class=" form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                           id="exampleCheck2">
                                                                    <label class="form-check-label" for="exampleCheck2">Full
                                                                        Time</label>
                                                                </div>
                                                                <span class="twm-job-type-count">07</span>
                                                            </li>

                                                            <li>
                                                                <div class=" form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                           id="exampleCheck3">
                                                                    <label class="form-check-label"
                                                                           for="exampleCheck3">Internship</label>
                                                                </div>
                                                                <span class="twm-job-type-count">15</span>
                                                            </li>

                                                            <li>
                                                                <div class=" form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                           id="exampleCheck4">
                                                                    <label class="form-check-label" for="exampleCheck4">Part
                                                                        Time</label>
                                                                </div>
                                                                <span class="twm-job-type-count">20</span>
                                                            </li>

                                                            <li>
                                                                <div class=" form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                           id="exampleCheck5">
                                                                    <label class="form-check-label"
                                                                           for="exampleCheck5">Temporary</label>
                                                                </div>
                                                                <span class="twm-job-type-count">22</span>
                                                            </li>

                                                            <li>
                                                                <div class=" form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                           id="exampleCheck6">
                                                                    <label class="form-check-label"
                                                                           for="exampleCheck6">Volunteer</label>
                                                                </div>
                                                                <span class="twm-job-type-count">25</span>
                                                            </li>

                                                        </ul>
                                                    </div>

                                                    <div class="twm-sidebar-ele-filter">
                                                        <h4 class="section-head-small mb-4">Date Posts</h4>
                                                        <ul>
                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input"
                                                                           id="exampleradio1">
                                                                    <label class="form-check-label" for="exampleradio1">Last
                                                                        hour</label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input"
                                                                           id="exampleradio2">
                                                                    <label class="form-check-label" for="exampleradio2">Last
                                                                        24
                                                                        hours</label>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input"
                                                                           id="exampleradio3">
                                                                    <label class="form-check-label" for="exampleradio3">Last
                                                                        7
                                                                        days</label>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input"
                                                                           id="exampleradio4">
                                                                    <label class="form-check-label" for="exampleradio4">Last
                                                                        14
                                                                        days</label>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input"
                                                                           id="exampleradio5">
                                                                    <label class="form-check-label" for="exampleradio5">Last
                                                                        30
                                                                        days</label>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input"
                                                                           id="exampleradio6">
                                                                    <label class="form-check-label" for="exampleradio6">All</label>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>

                                                    <div class="twm-sidebar-ele-filter">
                                                        <h4 class="section-head-small mb-4">Type of employment</h4>
                                                        <ul>
                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input"
                                                                           id="Freelance1">
                                                                    <label class="form-check-label" for="Freelance1">Freelance</label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input"
                                                                           id="FullTime1">
                                                                    <label class="form-check-label" for="FullTime1">Full
                                                                        Time</label>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input"
                                                                           id="Intership1">
                                                                    <label class="form-check-label" for="Intership1">Intership</label>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input"
                                                                           id="Part-Time1">
                                                                    <label class="form-check-label" for="Part-Time1">Part
                                                                        Time</label>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div style="display: flex; justify-content: center">
                                                        <button class="btn btn-search">
                                                            Search
                                                        </button>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!--                            <div class="widget tw-sidebar-tags-wrap">-->
                        <!--                                <h4 class="section-head-small mb-4">Tags</h4>-->

                        <!--                                <div class="tagcloud">-->
                        <!--                                    <a href="job-list.html">General</a>-->
                        <!--                                    <a href="job-list.html">Jobs </a>-->
                        <!--                                    <a href="job-list.html">Payment</a>-->
                        <!--                                    <a href="job-list.html">Application </a>-->
                        <!--                                    <a href="job-list.html">Work</a>-->
                        <!--                                    <a href="job-list.html">Recruiting</a>-->
                        <!--                                    <a href="job-list.html">Employer</a>-->
                        <!--                                    <a href="job-list.html">Income</a>-->
                        <!--                                    <a href="job-list.html">Tips</a>-->
                        <!--                                </div>-->
                        <!--                            </div>-->


                        <!--                        <div class="twm-advertisment" style="background-image:url(images/add-bg.jpg);">-->
                        <!--                            <div class="overlay"></div>-->
                        <!--                            <h4 class="twm-title">Recruiting?</h4>-->
                        <!--                            <p>Get Best Matched Jobs On your <br>-->
                        <!--                                Email. Add Resume NOW!</p>-->
                        <!--                            <a href="about-1.html" class="site-button white">Read More</a>-->
                        <!--                        </div>-->

                    </div>



                    <div class="col-lg-8 col-md-12">
                        <!--Filter Short By-->
                        <div class="product-filter-wrap d-flex justify-content-between align-items-center m-b30">
                            <span class="woocommerce-result-count-left">Showing 2,150 jobs</span>

                            <form class="woocommerce-ordering twm-filter-select" method="get">
                                <span class="woocommerce-result-count">Short By</span>
                                <select class="wt-select-bar-2 selectpicker" data-live-search="true"
                                        data-bv-field="size">
                                    <option>Most Recent</option>
                                    <option>Freelance</option>
                                    <option>Full Time</option>
                                    <option>Internship</option>
                                    <option>Part Time</option>
                                    <option>Temporary</option>
                                </select>
                                <select class="wt-select-bar-2 selectpicker" data-live-search="true"
                                        data-bv-field="size">
                                    <option>Show 10</option>
                                    <option>Show 20</option>
                                    <option>Show 30</option>
                                    <option>Show 40</option>
                                    <option>Show 50</option>
                                    <option>Show 60</option>
                                </select>
                            </form>

                        </div>

                        <div class="twm-jobs-list-wrap">
                            <ul class="job-list">
                                <li class="job-item premium-job">
                                    <div class="job-logo">
                                        <img src="https://isveren.az/uploads/companies/logo/%22adore-kompani%22-mmc.webp"
                                             alt="Company Logo">
                                    </div>
                                    <div class="job-details">
                                        <p class="job-title">Ərazi nümayəndəsi (Yevlax və Goranboy)</p>
                                        <div class="job-meta">
                                            <p class="job-company">“BK Azərbaycan”MMC- Burger King restoranlar
                                                şəbəkəsi</p>
                                            <div class="job-stats">
                                                <span class="views">👁️‍🗨️ 1400</span>
                                                <span>|</span>
                                                <span class="views">🕒 16 mart</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="job-item  premium-job">
                                    <div class="job-logo">
                                        <img src="https://isveren.az/uploads/companies/logo/azertexnolayn-mmc.png"
                                             alt="Company Logo">
                                    </div>
                                    <div class="job-details">
                                        <p class="job-title">Loyallıq İdarəsi/Biznesin İnkişafı Şöbəsi</p>
                                        <div class="job-meta">
                                            <p class="job-company">
                                                “BK Azərbaycan”MMC- Burger King restoranlar şəbəkəsi</p>
                                            <div class="job-stats">
                                                <span class="views">👁️‍🗨️ 280</span>
                                                <span>|</span>
                                                <span class="views">🕒 Dünən</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="job-item new-job">
                                    <div class="job-logo">
                                        <img src="https://isveren.az/uploads/companies/logo/azertexnolayn-mmc.png"
                                             alt="Company Logo">
                                    </div>
                                    <div class="job-details">
                                        <p class="job-title">Satici</p>
                                        <div class="job-meta">
                                            <p class="job-company">
                                                Azerpoct</p>
                                            <div class="job-stats">
                                                <span class="views">👁️‍🗨️ 280</span>
                                                <span>|</span>
                                                <span class="views">🕒 Dünən</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>

                        <div class="pagination-outer" style="display: flex; justify-content: center">
                            <div class="pagination-style1">
                                <ul class="clearfix">
                                    <li class="prev"><a href="javascript:;"><span> <i
                                                    class="fa fa-angle-left"></i> </span></a></li>
                                    <li><a href="javascript:;">1</a></li>
                                    <li class="active"><a href="javascript:;">2</a></li>
                                    <li><a href="javascript:;">3</a></li>
                                    <li><a class="javascript:;" href="javascript:;"><i class="fa fa-ellipsis-h"></i></a>
                                    </li>
                                    <li><a href="javascript:;">5</a></li>
                                    <li class="next"><a href="javascript:;"><span> <i
                                                    class="fa fa-angle-right"></i> </span></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- OUR BLOG END -->


    </div>
    <!-- CONTENT END -->
@endsection
@section('web.js')

@endsection




