@extends('web.layouts.app')
@section('web.css')
    @yield('user.css')
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
                            <h2 class="wt-title">Candidate Dashboard</h2>
                        </div>
                    </div>
                    <!-- BREADCRUMB ROW -->

                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="index.html">Home</a></li>
                            <li>Candidate Chat</li>
                        </ul>
                    </div>

                    <!-- BREADCRUMB ROW END -->
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        <!-- OUR BLOG START -->
        <div class="section-full p-t120  p-b90 site-bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-12 rightSidebar m-b30">
                        <div class="side-bar-st-1">
                            <div class="twm-candidate-profile-pic">
                                <img src="{{ asset("site/images/user-avtar/pic4.jpg") }}" alt="">
                                <div class="upload-btn-wrapper">
                                    <div id="upload-image-grid"></div>
                                    <button class="site-button button-sm">Şəkilinizi yenilə</button>
                                    <input type="file" name="myfile" id="file-uploader" accept=".jpg, .jpeg, .png">
                                </div>
                            </div>
                            <div class="twm-mid-content text-center">
                                <a href="candidate-detail.html" class="twm-job-title">
                                    <h4>Randall Henderson </h4>
                                </a>
                                <p>IT Contractor</p>
                            </div>
                            <div class="twm-nav-list-1">
                                <ul>
                                    <li class="{{ Route::currentRouteName() === 'web.user.dashboard' ? 'active' : '' }}"><a href="{{ route('web.user.dashboard') }}"><i class="fa fa-tachometer-alt"></i> Hesabım</a></li>
                                    <li class="{{ Route::currentRouteName() === 'web.user.settings' ? 'active' : '' }}"><a href="{{ route('web.user.settings') }}"><i class="fa fa-user"></i> Ayarlar</a></li>
                                    <li class="{{ Route::currentRouteName() === 'web.user.jobs.list' ? 'active' : '' }}"><a href="{{ route('web.user.jobs.list') }}"><i class="fa fa-suitcase"></i> İş elanlarım</a></li>
                                    <li><a href="candidate-company-applied.html"><i class="fa fa-suitcase"></i> Şirkətlərim</a></li>
                                    <li><a href="candidate-my-resume.html"><i class="fa fa-receipt"></i> CV İdarəsi</a></li>
                                    <li><a href="candidate-saved-jobs.html"><i class="fa fa-file-download"></i> Seçilmiş vakansiyalar</a></li>
                                    <li><a href="candidate-cv-manager.html"><i class="fa fa-paperclip"></i> Müraciət edənlər</a></li>
                                    <li><a href="candidate-job-alert.html"><i class="fa fa-bell"></i> Yeni elanlar</a></li>
                                    <li><a href="candidate-chat.html"><i class="fa fa-share-square"></i>Çıxış</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @yield('user.section')
                </div>
            </div>
        </div>
        <!-- OUR BLOG END -->



    </div>
    <!-- CONTENT END -->
@endsection
@section('web.js')
@endsection





