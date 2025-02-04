<!-- FOOTER START -->
<footer class="footer-dark" style="background-image: url({{ asset("site/images/f-bg.jpg") }});">
    <div class="container">

        <!-- NEWS LETTER SECTION START -->
        <div class="ftr-nw-content">
            <div class="row">
                <div class="col-md-5">
                    <div class="ftr-nw-title">
                        Join our email subscription now to get updates
                        on new jobs and notifications.
                    </div>
                </div>
                <div class="col-md-7">
                    <form>
                        <div class="ftr-nw-form">
                            <input name="news-letter" class="form-control" placeholder="Enter Your Email"
                                   type="text">
                            <button class="ftr-nw-subcribe-btn">Subscribe Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- NEWS LETTER SECTION END -->
        <!-- FOOTER BLOCKES START -->
        <div class="footer-top">
            <div class="row">

                <div class="col-lg-3 col-md-12">

                    <div class="widget widget_about">
                        <div class="logo-footer clearfix">
                            <a href="index.html"><img src="{{ asset("site/images/logo-light.png") }}" alt=""></a>
                        </div>
                        <p>Many desktop publishing packages and web page editors now.</p>
                        <ul class="ftr-list">
                            <li><p><span>Address :</span>65 Sunset CA 90026, USA </p></li>
                            <li><p><span>Email :</span>example@max.com</p></li>
                            <li><p><span>Call :</span>555-555-1234</p></li>
                        </ul>
                    </div>

                </div>

                <div class="col-lg-9 col-md-12">
                    <div class="row">

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget widget_services ftr-list-center">
                                <h3 class="widget-title">For Candidate</h3>
                                <ul>
                                    <li><a href="dashboard.html">User Dashboard</a></li>
                                    <li><a href="dash-resume-alert.html">Alert resume</a></li>
                                    <li><a href="candidate-grid.html">Candidates</a></li>
                                    <li><a href="blog-list.html">Blog List</a></li>
                                    <li><a href="blog-single.html">Blog single</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget widget_services ftr-list-center">
                                <h3 class="widget-title">For Employers</h3>
                                <ul>
                                    <li><a href="dash-post-job.html">Post Jobs</a></li>
                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="job-list.html">Jobs Listing</a></li>
                                    <li><a href="job-detail.html">Jobs details</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget widget_services ftr-list-center">
                                <h3 class="widget-title">Helpful Resources</h3>
                                <ul>
                                    <li><a href="faq.html">FAQs</a></li>
                                    <li><a href="employer-detail.html">Employer detail</a></li>
                                    <li><a href="dash-my-profile.html">Profile</a></li>
                                    <li><a href="error-404.html">404 Page</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget widget_services ftr-list-center">
                                <h3 class="widget-title">Quick Links</h3>
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about-1.html">About us</a></li>
                                    <li><a href="dash-bookmark.html">Bookmark</a></li>
                                    <li><a href="job-grid.html">Jobs</a></li>
                                    <li><a href="employer-list.html">Employer</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
        <!-- FOOTER COPYRIGHT -->
        <div class="footer-bottom">

            <div class="footer-bottom-info">

                <div class="footer-copy-right">
                    <span class="copyrights-text">Copyright © 2023 by thewebmax All Rights Reserved.</span>
                </div>
                <ul class="social-icons">
                    <li><a href="javascript:void(0);" class="fab fa-facebook-f"></a></li>
                    <li><a href="javascript:void(0);" class="fab fa-twitter"></a></li>
                    <li><a href="javascript:void(0);" class="fab fa-instagram"></a></li>
                    <li><a href="javascript:void(0);" class="fab fa-youtube"></a></li>
                </ul>

            </div>

        </div>

    </div>

</footer>
<!-- FOOTER END -->

<!-- BUTTON TOP START -->
<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>
</div>

<script>
    const customInput = document.getElementById('custom-input');
    const customDropdown = document.getElementById('custom-dropdown');
    const customDropdownItems = customDropdown.querySelectorAll('.custom-dropdown-item');
    const customSelect = document.getElementById('city-select');

    // Show dropdown on focus
    customInput.addEventListener('focus', () => {
        customDropdown.classList.add('open');
    });

    // Close dropdown on blur
    customInput.addEventListener('blur', () => {
        setTimeout(() => customDropdown.classList.remove('open'), 200);
    });

    // Filter dropdown items as user types
    customInput.addEventListener('input', () => {
        const query = customInput.value.toLowerCase();
        customDropdownItems.forEach(item => {
            if (item.textContent.toLowerCase().includes(query)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    });

    // Handle dropdown item click
    customDropdownItems.forEach(item => {
        item.addEventListener('click', () => {
            const value = item.dataset.value;
            const text = item.textContent;

            // Set input value
            customInput.value = text;

            // Set select value
            customSelect.value = value;

            // Close dropdown
            customDropdown.classList.remove('open');
        });
    });
</script>

<script>
    const mobileCustomInput = document.getElementById('mobile-custom-input');
    const mobileCustomDropdown = document.getElementById('mobile-custom-dropdown');
    const mobileCustomDropdownItems = mobileCustomDropdown.querySelectorAll('.mobile-custom-dropdown-item');
    const mobileCustomSelect = document.getElementById('mobile-city-select');

    // Show dropdown on focus
    mobileCustomInput.addEventListener('focus', () => {
        mobileCustomDropdown.classList.add('open');
    });

    // Close dropdown on blur
    mobileCustomInput.addEventListener('blur', () => {
        setTimeout(() => mobileCustomDropdown.classList.remove('open'), 200);
    });

    // Filter dropdown items as user types
    mobileCustomInput.addEventListener('input', () => {
        const query = mobileCustomInput.value.toLowerCase();
        mobileCustomDropdownItems.forEach(item => {
            if (item.textContent.toLowerCase().includes(query)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    });

    // Handle dropdown item click
    mobileCustomDropdownItems.forEach(item => {
        item.addEventListener('click', () => {

            const valueMobile = item.dataset.value;
            console.log(valueMobile)
            const textMobile = item.textContent;

            // Set input value
            mobileCustomInput.value = textMobile;

            // Set select value
            mobileCustomSelect.value = valueMobile;

            // Close dropdown
            mobileCustomDropdown.classList.remove('open');
        });
    });
</script>


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
@yield('web.js')
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
            <li><a class="theme-skin skin-1" href="job-lista39b.html?theme=css/skin/skin-1"></a></li>
            <li><a class="theme-skin skin-2" href="job-list61e7.html?theme=css/skin/skin-2"></a></li>
            <li><a class="theme-skin skin-3" href="job-listcce5.html?theme=css/skin/skin-3"></a></li>
            <li><a class="theme-skin skin-4" href="job-list13f7.html?theme=css/skin/skin-4"></a></li>
            <li><a class="theme-skin skin-5" href="job-list19a6.html?theme=css/skin/skin-5"></a></li>
            <li><a class="theme-skin skin-6" href="job-listfe5c.html?theme=css/skin/skin-6"></a></li>
            <li><a class="theme-skin skin-7" href="job-listab47.html?theme=css/skin/skin-7"></a></li>
            <li><a class="theme-skin skin-8" href="job-list5f8d.html?theme=css/skin/skin-8"></a></li>
            <li><a class="theme-skin skin-9" href="job-list5663.html?theme=css/skin/skin-9"></a></li>
            <li><a class="theme-skin skin-10" href="job-list28ac.html?theme=css/skin/skin-10"></a></li>

        </ul>

    </div>
</div>
<!-- STYLE SWITCHER END ==== -->

</body>
</html>
