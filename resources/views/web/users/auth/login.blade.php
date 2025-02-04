<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content=""/>
    <meta name="author" content=""/>
    <meta name="robots" content=""/>
    <meta name="description" content=""/>
    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ asset("site/images/favicon.ico") }}" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset("site/images/favicon.png") }}"/>
    <!-- PAGE TITLE HERE -->
    <title>Jobzilla Template | Job List</title>
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset("site/css/bootstrap.min.css") }}"><!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset("site/css/font-awesome.min.css") }}"><!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset("site/css/feather.css") }}"><!-- FEATHER ICON SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset("site/css/owl.carousel.min.css") }}"><!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset("site/css/magnific-popup.min.css") }}"><!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset("site/css/lc_lightbox.css") }}"><!-- Lc light box popup -->
    <link rel="stylesheet" type="text/css" href="{{ asset("site/css/bootstrap-select.min.css") }}"><!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="{{ asset("site/css/dataTables.bootstrap5.min.css") }}"><!-- DATA table STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="{{ asset("site/css/select.bootstrap5.min.css") }}">
    <!-- DASHBOARD select bootstrap  STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="{{ asset("site/css/dropzone.css") }}"><!-- DROPZONE STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset("site/css/scrollbar.css") }}"><!-- CUSTOM SCROLL BAR STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset("site/css/datepicker.css") }}"><!-- DATEPICKER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset("site/css/flaticon.css") }}"> <!-- Flaticon -->
    <link rel="stylesheet" type="text/css" href="{{ asset("site/css/swiper-bundle.min.css") }}"><!-- Swiper Slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset("site/css/style.css") }}"><!-- MAIN STYLE SHEET -->

    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="{{ asset("site/css/skins-type/skin-6.css") }}">
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset("site/css/switcher.css") }}">
</head>
<body>
<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="wrapper">
            <div class="cssload-loader"></div>
        </div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->

<div class="page-wraper">
    <!-- CONTENT START -->
    <div class="page-content">
        <!-- Login Section Start -->
        <div class="section-full site-bg-white">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-4 col-md-3 twm-log-reg-media-wrap">
                        <div class="twm-log-reg-media">
                            <div class="twm-l-media">
                                <img src="{{ asset("site/images/login-bg.png") }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-8 col-md-9">
                        <div class="twm-log-reg-form-wrap">
                            <div class="twm-log-reg-logo-head">
                                <a href="index.html">
                                    <img src="{{ asset("site/images/logo-dark.png") }}" alt="" class="logo">
                                </a>
                            </div>

                            <ul class="nav nav-tabs" style="text-align: center; display: contents;!important;">
                                <!--Login Employer-->
                                <li class="nav-item">
                                    <a href="register.html" class="nav-link" style="background-color: #1967d2 !important;color: #fff;!important;    width: 33%;
    margin: 0 auto;
    padding: 10px 20px;
    border-radius: 10px;!important;"><i class="fas fa-users"></i> Qeydiyyat</a>
                                </li>
                            </ul>
                            <div class="twm-log-reg-inner">
                                <div class="twm-log-reg-head">
                                    <div class="twm-log-reg-logo">
                                        <span class="log-reg-form-title">Log In</span>
                                    </div>
                                </div>
                                <div class="twm-tabs-style-2">

                                    <ul class="nav nav-tabs" id="myTab2" role="tablist">

                                        <!--Login Candidate-->
                                        <li class="nav-item">
                                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#twm-login-candidate" type="button"><i class="fas fa-user-tie"></i>İstifadəçi</button>
                                        </li>
                                        <!--Login Employer-->
                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#twm-login-Employer" type="button"><i class="fas fa-building"></i>Şirkət</button>
                                        </li>

                                    </ul>

                                    <div class="tab-content" id="myTab2Content">
                                        <!--Login Candidate Content-->
                                        <div class="tab-pane fade show active" id="twm-login-candidate">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="username" type="text" required="" class="form-control" placeholder="E-poçt və əlaqə nömrəniz*">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="email" type="text" class="form-control" required="" placeholder="Şifrəniz*">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="twm-forgot-wrap">
                                                        <div class="form-group mb-3">
                                                            <div class="form-check">
                                                                <label class="form-check-label rem-forgot" for="Password4">
                                                                    <i class="fas fa-user-tie"></i><a href="javascript:;" class="site-text-primary"> Şifrənizi unutmusuz?</a></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="site-button">Daxil ol</button>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <span class="center-text-or">Və ya</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <button type="submit" class="log_with_facebook">
                                                            <i class="fab fa-facebook"></i>
                                                            Facebook ilə daxil ol
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <button type="submit" class="log_with_google">
                                                            <img src="{{ asset("site/images/google-icon.png") }}" alt="">
                                                            Google ilə daxil ol
                                                        </button>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <!--Login Employer Content-->
                                        <div class="tab-pane fade" id="twm-login-Employer">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="username" type="text" required="" class="form-control" placeholder="E-poçt və əlaqə nömrəniz*">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="email" type="text" class="form-control" required="" placeholder="Şifrəniz*">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="twm-forgot-wrap">
                                                        <div class="form-group mb-3">
                                                            <div class="form-check">
                                                                <label class="form-check-label rem-forgot" for="Password4">
                                                                    <i class="fas fa-user-tie"></i><a href="javascript:;" class="site-text-primary"> Şifrənizi unutmusuz?</a></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="site-button">Daxil ol</button>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <span class="center-text-or">Və ya</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <button type="submit" class="log_with_facebook">
                                                            <i class="fab fa-facebook"></i>
                                                            Facebook ilə daxil ol
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <button type="submit" class="log_with_google">
                                                            <img src="{{ asset("site/images/google-icon.png") }}" alt="">
                                                            Google ilə daxil ol
                                                        </button>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Login Section End -->



    </div>
    <!-- CONTENT END -->

    <!-- BUTTON TOP START -->
    <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

    <!--Model Popup Section Start-->
    <!--Signup popup -->
    <div class="modal fade twm-sign-up" id="sign_up_popup" aria-hidden="true" aria-labelledby="sign_up_popupLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form>

                    <div class="modal-header">
                        <h2 class="modal-title" id="sign_up_popupLabel">Sign Up</h2>
                        <p>Sign Up and get access to all the features of Jobzilla</p>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="twm-tabs-style-2">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">

                                <!--Signup Candidate-->
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#sign-candidate" type="button"><i class="fas fa-user-tie"></i>Candidate</button>
                                </li>
                                <!--Signup Employer-->
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#sign-Employer" type="button"><i class="fas fa-building"></i>Employer</button>
                                </li>

                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <!--Signup Candidate Content-->
                                <div class="tab-pane fade show active" id="sign-candidate">
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="phone" type="text" class="form-control" required="" placeholder="Email*">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="phone" type="text" class="form-control" required="" placeholder="Phone*">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <div class=" form-check">
                                                    <input type="checkbox" class="form-check-input" id="agree1">
                                                    <label class="form-check-label" for="agree1">I agree to the <a href="javascript:;">Terms and conditions</a></label>
                                                    <p>Already registered?
                                                        <button class="twm-backto-login" data-bs-target="#sign_up_popup2" data-bs-toggle="modal" data-bs-dismiss="modal">Log in here</button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="site-button">Sign Up</button>
                                        </div>

                                    </div>
                                </div>
                                <!--Signup Employer Content-->
                                <div class="tab-pane fade" id="sign-Employer">
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="phone" type="text" class="form-control" required="" placeholder="Email*">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="phone" type="text" class="form-control" required="" placeholder="Phone*">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <div class=" form-check">
                                                    <input type="checkbox" class="form-check-input" id="agree2">
                                                    <label class="form-check-label" for="agree2">I agree to the <a href="javascript:;">Terms and conditions</a></label>
                                                    <p>Already registered?
                                                        <button class="twm-backto-login" data-bs-target="#sign_up_popup2" data-bs-toggle="modal" data-bs-dismiss="modal">Log in here</button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="site-button">Sign Up</button>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <span class="modal-f-title">Login or Sign up with</span>
                        <ul class="twm-modal-social">
                            <li><a href="javascript.html" class="facebook-clr"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="javascript.html" class="twitter-clr"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="javascript.html" class="linkedin-clr"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="javascript.html" class="google-clr"><i class="fab fa-google"></i></a></li>
                        </ul>
                    </div>

                </form>
            </div>
        </div>

    </div>
    <!--Login popup -->
    <div class="modal fade twm-sign-up" id="sign_up_popup2" aria-hidden="true" aria-labelledby="sign_up_popupLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <form>
                    <div class="modal-header">
                        <h2 class="modal-title" id="sign_up_popupLabel2">Login</h2>
                        <p>Login and get access to all the features of Jobzilla</p>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="twm-tabs-style-2">
                            <ul class="nav nav-tabs" id="myTab2" role="tablist">

                                <!--Login Candidate-->
                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#login-candidate" type="button"><i class="fas fa-user-tie"></i>Candidate</button>
                                </li>
                                <!--Login Employer-->
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#login-Employer" type="button"><i class="fas fa-building"></i>Employer</button>
                                </li>

                            </ul>

                            <div class="tab-content" id="myTab2Content">
                                <!--Login Candidate Content-->
                                <div class="tab-pane fade show active" id="login-candidate">
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                            </div>
                                        </div>


                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <div class=" form-check">
                                                    <input type="checkbox" class="form-check-input" id="Password3">
                                                    <label class="form-check-label rem-forgot" for="Password3">Remember me <a href="javascript:;">Forgot Password</a></label>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="site-button">Log in</button>
                                            <div class="mt-3 mb-3">Don't have an account ?
                                                <button class="twm-backto-login" data-bs-target="#sign_up_popup" data-bs-toggle="modal" data-bs-dismiss="modal">Sign Up</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!--Login Employer Content-->
                                <div class="tab-pane fade" id="login-Employer">
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                            </div>
                                        </div>


                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <div class=" form-check">
                                                    <input type="checkbox" class="form-check-input" id="Password4">
                                                    <label class="form-check-label rem-forgot" for="Password4">Remember me <a href="javascript:;">Forgot Password</a></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <button type="submit" class="site-button">Log in</button>
                                            <div class="mt-3 mb-3">Don't have an account ?
                                                <button class="twm-backto-login" data-bs-target="#sign_up_popup" data-bs-toggle="modal" data-bs-dismiss="modal">Sign Up</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <span class="modal-f-title">Login or Sign up with</span>
                        <ul class="twm-modal-social">
                            <li><a href="javascript.html" class="facebook-clr"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="javascript.html" class="twitter-clr"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="javascript.html" class="linkedin-clr"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="javascript.html" class="google-clr"><i class="fab fa-google"></i></a></li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Model Popup Section End-->

</div>


<!-- JAVASCRIPT  FILES ========================================= -->
<script src="{{ asset("site/js/jquery-3.6.0.min.js") }}"></script><!-- JQUERY.MIN JS -->
<script src="{{ asset("site/js/popper.min.js") }}"></script><!-- POPPER.MIN JS -->
<script src="{{ asset("site/js/bootstrap.min.js") }}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset("site/js/magnific-popup.min.js") }}"></script><!-- MAGNIFIC-POPUP JS -->
<script src="{{ asset("site/js/waypoints.min.js") }}"></script><!-- WAYPOINTS JS -->
<script src="{{ asset("site/js/counterup.min.js") }}"></script><!-- COUNTERUP JS -->
<script src="{{ asset("site/js/waypoints-sticky.min.js") }}"></script><!-- STICKY HEADER -->
<script src="{{ asset("site/js/isotope.pkgd.min.js") }}"></script><!-- MASONRY  -->
<script src="{{ asset("site/js/imagesloaded.pkgd.min.js") }}"></script><!-- MASONRY  -->
<script src="{{ asset("site/js/owl.carousel.min.js") }}"></script><!-- OWL  SLIDER  -->
<script src="{{ asset("site/js/theia-sticky-sidebar.js") }}"></script><!-- STICKY SIDEBAR  -->
<script src="{{ asset("site/js/lc_lightbox.lite.js") }}"></script><!-- IMAGE POPUP -->
<script src="{{ asset("site/js/bootstrap-select.min.js") }}"></script><!-- Form js -->
<script src="{{ asset("site/js/dropzone.js") }}"></script><!-- IMAGE UPLOAD  -->
<script src="{{ asset("site/js/jquery.scrollbar.js") }}"></script><!-- scroller -->
<script src="{{ asset("site/js/bootstrap-datepicker.js") }}"></script><!-- scroller -->
<script src="{{ asset("site/js/jquery.dataTables.min.js") }}"></script><!-- Datatable -->
<script src="{{ asset("site/js/dataTables.bootstrap5.min.js") }}"></script><!-- Datatable -->
<script src="{{ asset("site/js/chart.js") }}"></script><!-- Chart -->
<script src="{{ asset("site/js/bootstrap-slider.min.js") }}"></script><!-- Price range slider -->
<script src="{{ asset("site/js/swiper-bundle.min.js") }}"></script><!-- Swiper JS -->
<script src="{{ asset("site/js/custom.js") }}"></script><!-- CUSTOM FUCTIONS  -->
<script src="{{ asset("site/js/switcher.js") }}"></script><!-- SHORTCODE FUCTIONS  -->

<!-- STYLE SWITCHER  ======= -->
<div class="styleswitcher">

    <div class="switcher-btn-bx">
        <a class="switch-btn">
            <span class="fa fa-cog fa-spin"></span>
        </a>
    </div>

    <div class="styleswitcher-inner">

        <h6 class="switcher-title">Color Skin</h6>
        <ul class="color-skins">
            <li><a class="theme-skin skin-1" href="logina39b.html?theme=css/skin/skin-1"></a></li>
            <li><a class="theme-skin skin-2" href="login61e7.html?theme=css/skin/skin-2"></a></li>
            <li><a class="theme-skin skin-3" href="logincce5.html?theme=css/skin/skin-3"></a></li>
            <li><a class="theme-skin skin-4" href="login13f7.html?theme=css/skin/skin-4"></a></li>
            <li><a class="theme-skin skin-5" href="login19a6.html?theme=css/skin/skin-5"></a></li>
            <li><a class="theme-skin skin-6" href="loginfe5c.html?theme=css/skin/skin-6"></a></li>
            <li><a class="theme-skin skin-7" href="loginab47.html?theme=css/skin/skin-7"></a></li>
            <li><a class="theme-skin skin-8" href="login5f8d.html?theme=css/skin/skin-8"></a></li>
            <li><a class="theme-skin skin-9" href="login5663.html?theme=css/skin/skin-9"></a></li>
            <li><a class="theme-skin skin-10" href="login28ac.html?theme=css/skin/skin-10"></a></li>

        </ul>

    </div>
</div>
</body>
</html>
