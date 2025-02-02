<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#244034">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#244034">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#244034">
    <title>İş Verən | @lang('web.dashboard')</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('web/assets/img/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/bootstrap.min.css') }}" media="all">
    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/style.min.css') }}" media="all">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/responsive.css') }}" media="all">
    <meta name="robots" content="noindex, nofollow">

    @yield('user.css')
</head>
<body>
<div class="main-page-wrapper">
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="icon"><img src="{{ asset('web/assets/img/logo.png') }}" alt="" class="m-auto d-block" width="60"></div>
            <div class="txt-loading">
                <span data-text-preloader="İ" class="letters-loading">İ</span>
                <span data-text-preloader="Ş" class="letters-loading">Ş</span>
                <span data-text-preloader="V" class="letters-loading">V</span>
                <span data-text-preloader="E" class="letters-loading">E</span>
                <span data-text-preloader="R" class="letters-loading">R</span>
                <span data-text-preloader="Ə" class="letters-loading">Ə</span>
                <span data-text-preloader="N" class="letters-loading">N</span>
            </div>
        </div>
    </div>
    <aside class="dash-aside-navbar">
        <div class="position-relative">
            <div class="logo text-md-center d-md-block d-flex align-items-center justify-content-between">
                <a href="{{ route('web.home') }}"><img src="{{ asset('web/assets/img/logo.png') }}" style="width: 160px;" alt="isveren.az"></a>
                <button class="close-btn d-block d-md-none"><i class="bi bi-x-lg"></i></button>
            </div>
            <div class="user-data">
                <div class="user-avatar online position-relative rounded-circle">
                    <img src="{{ asset('user/images/lazy.svg') }}" data-src="@if(isset(auth()->guard('web')->user()->image)) {{asset('uploads/user/image/'.auth()->guard('web')->user()->image) }} @else {{ asset('user/user.png') }} @endif" alt="{{auth()->guard('web')->user()->name}} {{auth()->guard('web')->user()->surname}}" class="lazy-img">
                </div>
                <!-- /.user-avatar -->
                <div class="user-name-data">
                    <button class="user-name" type="button" id="profile-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                        {{auth()->guard('web')->user()->name}} {{auth()->guard('web')->user()->surname}}
                    </button>
                </div>
            </div>
            <!-- /.user-data -->
            <nav class="dasboard-main-nav">
                <ul class="style-none">
                   {{-- <li>
                        <a href="{{ route('web.user.dashboard') }}" class="d-flex w-100 align-items-center {{ Route::currentRouteName() === 'web.user.dashboard' ? 'active' : '' }}">
                            <img src="{{ asset('user/images/lazy.svg') }}" data-src="{{ asset('user/userimage/icon/icon_1.svg') }}" alt="@lang('web.dashboard')" class="lazy-img">
                            <span>@lang('web.dashboard')</span>
                        </a>
                    </li>--}}
                    <li>
                        <a href="{{ route('web.user.settings',auth()->guard('web')->user()->id) }}" class="d-flex w-100 align-items-center {{ Route::currentRouteName() === 'web.user.settings' ? 'active' : '' }}">
                            <img src="{{ asset('user/images/lazy.svg') }}" data-src="{{ asset('user/userimage/icon/icon_2.svg') }}" alt="@lang('web.profile')" class="lazy-img">
                            <span>@lang('web.profile')</span>
                        </a>
                    </li>
                    @if(!empty(auth()->guard('web')->user()->userRole->role) && auth()->guard('web')->user()->userRole->role->slug == 'users')
                        <li>
                            <a href="{{ route('web.user.cv') }}" class="d-flex w-100 align-items-center {{ Route::currentRouteName() === 'web.user.cv' ? 'active' : '' }}">
                                <img src="{{ asset('user/images/lazy.svg') }}" data-src="{{ asset('user/userimage/icon/icon_3.svg') }}" alt="@lang('web.cv')" class="lazy-img">
                                <span>Cv</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('web.user.follower') }}" class="d-flex w-100 align-items-center {{ Route::currentRouteName() === 'web.user.follower' ? 'active' : '' }}">
                                <img src="{{ asset('user/images/lazy.svg') }}" data-src="{{ asset('user/userimage/icon/icon_3.svg') }}" alt="@lang('web.followers')" class="lazy-img">
                                <span>@lang('web.follower_list')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('web.user.appeal') }}" class="d-flex w-100 align-items-center {{ Route::currentRouteName() === 'web.user.appeal' ? 'active' : '' }}">
                                <img src="{{ asset('user/images/lazy.svg') }}" data-src="{{ asset('user/userimage/icon/icon_3.svg') }}" alt="@lang('web.followers')" class="lazy-img">
                                <span>Müraciət etdiklərim</span>
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('web.user.company.list') }}" class="d-flex w-100 align-items-center {{ Route::currentRouteName() === 'web.user.company.*' ? 'active' : '' }}">
                                <img src="{{ asset('user/images/lazy.svg') }}" data-src="{{ asset('user/userimage/icon/icon_3.svg') }}" alt="@lang('web.company')" class="lazy-img">
                                <span>@lang('web.companies')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('web.user.jobs.list') }}" class="d-flex w-100 align-items-center {{ Route::currentRouteName() === 'web.user.jobs.*' ? 'active' : '' }}">
                                <img src="{{ asset('user/images/lazy.svg') }}" data-src="{{ asset('user/userimage/icon/icon_3.svg') }}" alt="@lang('web.jobs')" class="lazy-img">
                                <span>@lang('web.jobs')</span>
                            </a>
                        </li>
                    @endif
                    <li>
                        <a href="{{ route('web.user.logout') }}" class="d-flex w-100 align-items-center" data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <img src="{{ asset('user/images/lazy.svg') }}" data-src="{{ asset('user/userimage/icon/icon_9.svg') }}" alt="@lang('web.logout')" class="lazy-img">
                            <span>@lang('web.logout')</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- /.dash-aside-navbar -->

    <!--
    =============================================
        Dashboard Body
    ==============================================
    -->
    <div class="dashboard-body">
        <div class="position-relative">
            <!-- ************************ Header **************************** -->
            <header class="dashboard-header">
                <div class="d-flex align-items-center justify-content-end">
                    <button class="dash-mobile-nav-toggler d-block d-md-none me-auto"><span></span></button>
                    {{--<div class="profile-notification ms-2 ms-md-5 me-4">
                        <button class="noti-btn dropdown-toggle" type="button" id="notification-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <img src="{{ asset('user/images/lazy.svg') }}" data-src="{{ asset('user/userimage/icon/icon_11.svg') }}" class="lazy-img">
                            <div class="badge-pill"></div>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="notification-dropdown">
                            <li>
                                <h4>Bildirişlər</h4>
                                <ul class="style-none notify-list">
                                    <li class="d-flex align-items-center unread">
                                        <img src="{{ asset('user/images/lazy.svg') }}" data-src="{{ asset('user/userimage/icon/icon_36.svg') }}" class="lazy-img icon">
                                        <div class="flex-fill ps-2">
                                            <h6>You have 3 new mails</h6>
                                            <span class="time">3 hours ago</span>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="{{ asset('user/images/lazy.svg') }}" data-src="{{ asset('user/userimage/icon/icon_37.svg') }}" class="lazy-img icon">
                                        <div class="flex-fill ps-2">
                                            <h6>Your job post has been approved</h6>
                                            <span class="time">1 day ago</span>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center unread">
                                        <img src="{{ asset('user/images/lazy.svg') }}" data-src="{{ asset('user/userimage/icon/icon_38.svg') }}" class="lazy-img icon">
                                        <div class="flex-fill ps-2">
                                            <h6>Your meeting is cancelled</h6>
                                            <span class="time">3 days ago</span>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>--}}
                    <div>
                        @if(!empty(auth()->guard('web')->user()->userRole->role) && auth()->guard('web')->user()->userRole->role->slug == 'users')
                            <a href="{{ route('web.user.cv') }}" class="job-post-btn tran3s">Yenilik əlavə et</a>
                        @else
                            <a href="{{ route('web.user.jobs.create') }}" class="job-post-btn tran3s">Yenilik əlavə et</a>
                        @endif
                    </div>
                </div>
            </header>
            <!-- End Header -->
            @yield('user.section')
        </div>
    </div>
    <!-- /.dashboard-body -->

    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen modal-dialog-centered">
            <div class="container">
                <div class="remove-account-popup text-center modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <img src="{{ asset('user/images/lazy.svg') }}" data-src="{{ asset('user/userimage/icon/icon_22.svg') }}" class="lazy-img m-auto">
                    <h2>Hesabınızdan çıxış etməyə əminsiz?</h2>
                    <p>Tezliklə gözləyirik əziz istifadəçi:)</p>
                    <div class="button-group d-inline-flex justify-content-center align-items-center pt-15">
                        <a href="{{ route('web.user.logout') }}" class="confirm-btn fw-500 tran3s me-3">Bəli</a>
                        <button type="button" class="btn-close fw-500 ms-3" data-bs-dismiss="modal" aria-label="Close">Xeyir</button>
                    </div>
                </div>
                <!-- /.remove-account-popup -->
            </div>
        </div>
    </div>
    <button class="scroll-top"><i class="bi bi-arrow-up-short"></i></button>
    <!-- jQuery -->
    <script src="{{ asset('user/vendor/jquery.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('user/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- WOW js -->
    <script src="{{ asset('user/vendor/wow/wow.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('user/vendor/slick/slick.min.js') }}"></script>
    <!-- Fancybox -->
    <script src="{{ asset('user/vendor/fancybox/dist/jquery.fancybox.min.js') }}"></script>
    <!-- Lazy -->
    <script src="{{ asset('user/vendor/jquery.lazy.min.js') }}"></script>
    <!-- js Counter -->
    <script src="{{ asset('user/vendor/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('user/vendor/jquery.waypoints.min.js') }}"></script>
    <!-- Nice Select -->
    <script src="{{ asset('user/vendor/nice-select/jquery.nice-select.min.js') }}"></script>
    <!-- validator js -->
    <script src="{{ asset('user/vendor/validator.js') }}"></script>

    <!-- Theme js -->
    <script src="{{ asset('user/js/theme.js') }}"></script>
    @yield('user.js')
</div> <!-- /.main-page-wrapper -->
</body>
</html>
