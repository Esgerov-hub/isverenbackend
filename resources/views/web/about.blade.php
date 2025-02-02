@extends('web.layouts.app')
@section('web.css')
@endsection
@section('web.section')
<section class="breadcrumb-main" style="background-image:url({{ asset('web/assets/images/shape-1.png') }});">
    <div class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content text-start">
                <h3 class="mb-1">@lang('web.about_us')</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('web.home') }}">@lang('web.home')</a>
                    </li>
                    <li class="breadcrumb-item">@lang('web.about_us')</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="about-us pb-8">
    <div class="container">
        <div class="about-image-box">
            <div class="row d-flex align-items-center justify-content-between">
                <div class="col-lg-7 mb-4 pe-lg-5">
                    <h2 class="border-b mb-2 pb-1" style="text-align: center;">{!! !empty($static_pages)? json_decode($static_pages, true)['title']['az']: '' !!}</h2>
                    <div class="about-content text-center text-lg-start ps-lg-2">
                        {!! !empty($static_pages)? json_decode($static_pages, true)['text']['az']: '' !!}
                        <br> </br>
                        <div class="about-btn d-flex align-items-center">
                            <a href="{{ route('web.home') }}" class="job-btn btn1 d-inline-block me-4" style="display: block !important;">@lang('web.jobs')</a>
                            <a href="{{ route('web.contact') }}"><u>@lang('web.contact_us')</u></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mb-4 ps-lg-4 position-relative">
                    <div class="about-image overflow-hidden">
                        <img src="{{ !empty($static_pages)? asset('uploads/static-pages/'.$static_pages['image']): '' }}" alt>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="counter border-t pt-5 mt-1">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4">
                                <div class="counter-item border-end pe-4 d-flex align-items-center">
                                    <i class="icon-folder bg-theme2 p-3 rounded me-3 white fs-3"></i>
                                    <div class="counter-content">
                                        <h2 class="value mb-0 lh-sm">{{ isset($category_count)? $category_count: 0 }}</h2>
                                        <span class="m-0">@lang('web.job_categories')</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4">
                                <div class="counter-item border-end border-lg-0 pe-4 d-flex align-items-center">
                                    <i class="icon-briefcase bg-theme2 p-3 rounded me-3 white fs-3"></i>
                                    <div class="counter-content">
                                        <h2 class="value mb-0 lh-sm">{{ isset($job_count)? $job_count: 0 }}</h2>
                                        <span class="m-0">@lang('web.jobs')</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4">
                                <div class="counter-item border-end pe-4 d-flex align-items-center">
                                    <i class="icon-user-following bg-theme2 p-3 rounded me-3 white fs-3"></i>
                                    <div class="counter-content">
                                        <h2 class="value mb-0 lh-sm">{{ !isset($user_count)? $user_count: 500 }}+</h2>
                                        <span class="m-0">@lang('web.customers')</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4">
                                <div class="counter-item d-flex align-items-center">
                                    <i class="icon-trophy bg-theme2 p-3 rounded me-3 white fs-3"></i>
                                    <div class="counter-content">
                                        <h2 class="value mb-0 lh-sm">{{ !isset($follower_count)? $follower_count: 100 }}+</h2>
                                        <span class="m-0">@lang('web.followers')</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="white-overlay"></div>
</section>
 {{--   <section class="how-it-works p-0">
        <div class="container">
            <div class="section-title text-center w-75 mx-auto mb-12 pb-2">
                <h2 class="mb-1">How It <span class="display-5 theme1">Works</span></h2>
                <p class="mb-0">Labore et dolore magna aliqua. Quis ipsum suspendisse ultrices</p>
            </div>
            <div class="how-it-work-main">
                <div class="row ps-2">
                    <div class="col-lg-4 mb-4">
                        <div class="work-list px-5">
                            <div class="work-list-item d-flex bg-theme1 rounded p-3 align-items-center mb-5">
                                <i class="flaticon-accounting bg-white theme1 rounded p-4 py-1 me-4 box-shadow"></i>
                                <h4 class="mb-0 white">Register Your Account</h4>
                            </div>
                            <p class="mb-0">You need to create an account to find the best & preferred job.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="work-list px-5 work-arrow">
                            <div class="work-list-item d-flex bg-theme2 rounded p-3 align-items-center mb-5">
                                <i class="flaticon-consultation bg-white theme2 rounded p-4 py-1 me-4 box-shadow"></i>
                                <h4 class="mb-0 white">Apply for dream job</h4>
                            </div>
                            <p class="mb-0">You need to create an account to find the best & preferred job.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="work-list px-5">
                            <div class="work-list-item d-flex bg-theme rounded p-3 align-items-center mb-5">
                                <i class="flaticon-computer bg-white theme rounded p-4 py-1 me-4 box-shadow"></i>
                                <h4 class="mb-0 white">Upload Your resume</h4>
                            </div>
                            <p class="mb-0">You need to create an account to find the best & preferred job.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section-box pt-8">
        <div class="container">
            <div class="section-box-main rounded p-5 pt-7 pb-0">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-7">
                        <div class="section-box-info pe-3 pb-5 text-lg-start text-center">
                            <h2 class="white">See right away whether <span
                                    class="display-5">candidates are the right fit</span></h2>
                            <p class="mb-3 white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet
                                rutrum quam, id faucibus erat interdum a. Curabitur eget tortor a nulla interdum semper.</p>
                            <a class="job-btn1 btn1 d-inline-block" href="job-list.html">All Job Offers</a>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="section-box-image position-relative text-center">
                            <img src="images/ceo1.png" alt class="position-relative z-index1 w-60 text-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="our-team pb-8 pt-0">
        <div class="container">
            <div class="section-title text-center w-75 mx-auto mb-6">
                <h2 class="mb-1">Top <span class="display-5 theme1">Candidates</span> To Hire Works</h2>
                <p class="mb-0">Labore et dolore magna aliqua. Quis ipsum suspendisse ultrices</p>
            </div>

            <div class="job-box">
                <div class="row item-slider1">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="job-card border-all p-4 rounded bg-white position-relative">
                            <div class="mb-2 text-center">
                                <div class="image-box bg-white box-shadow rounded d-inline-block p-1">
                                    <img src="images/reviewer/1.jpg" alt class="rounded">
                                </div>
                            </div>
                            <div class="job-block-info text-center">
                                <h4 class="mb-0"><a class="name-job" href="candidate-single.html">Robert Fox</a></h4>
                                <ul class="job-list mb-2">
                                    <li class="job-cats small">UI/UX Designer</li>
                                </ul>
                                <p class="mb-2">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                    eu</p>
                                <ul class="border-b mb-2 pb-2">
                                    <li><a class="bg-grey rounded p-2 px-3 small mb-1 d-inline-block" href="job-grid.html">Adobe
                                            XD</a></li>
                                    <li><a class="bg-grey rounded p-2 px-3 small mb-1 d-inline-block" href="job-grid.html">Figma</a>
                                    </li>
                                    <li><a class="bg-grey rounded p-2 px-3 small mb-1 d-inline-block" href="job-grid.html">Photoshop</a>
                                    </li>
                                </ul>
                                <div class="row d-flex align-items-center justify-content-between">
                                    <div class="col-lg-5 col-5 text-start">
                                        <span><i class="fa fa-map-marker"></i> Chicago, US</span>
                                    </div>
                                    <div class="col-lg-7 col-7 text-end">
                                        <span class="job-price fw-bold theme2 fs-5">$50-$60</span>
                                        <span class="text-muted">|hr</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="job-card border-all p-4 rounded bg-white position-relative">
                            <div class="mb-2 text-center">
                                <div class="image-box bg-white box-shadow rounded d-inline-block p-1">
                                    <img src="images/reviewer/2.jpg" alt class="rounded">
                                </div>
                            </div>
                            <div class="job-block-info text-center">
                                <h4 class="mb-0"><a class="name-job" href="candidate-single.html">Neil Henk</a></h4>
                                <ul class="job-list mb-2">
                                    <li class="job-cats small">Java developer</li>
                                </ul>
                                <p class="mb-2">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                    eu</p>
                                <ul class="border-b mb-2 pb-2">
                                    <li><a class="bg-grey rounded p-2 px-3 small mb-1 d-inline-block" href="job-grid.html">Java</a>
                                    </li>
                                    <li><a class="bg-grey rounded p-2 px-3 small mb-1 d-inline-block" href="job-grid.html">Figma</a>
                                    </li>
                                    <li><a class="bg-grey rounded p-2 px-3 small mb-1 d-inline-block" href="job-grid.html">Photoshop</a>
                                    </li>
                                </ul>
                                <div class="row d-flex align-items-center justify-content-between">
                                    <div class="col-lg-5 col-5 text-start">
                                        <span><i class="fa fa-map-marker"></i> Chicago, US</span>
                                    </div>
                                    <div class="col-lg-7 col-7 text-end">
                                        <span class="job-price fw-bold theme2 fs-5">$50-$60</span>
                                        <span class="text-muted">|hr</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="job-card border-all p-4 rounded bg-white position-relative">
                            <div class="mb-2 text-center">
                                <div class="image-box bg-white box-shadow rounded d-inline-block p-1">
                                    <img src="images/reviewer/3.jpg" alt class="rounded">
                                </div>
                            </div>
                            <div class="job-block-info text-center">
                                <h4 class="mb-0"><a class="name-job" href="candidate-single.html">Lobster Sau</a></h4>
                                <ul class="job-list mb-2">
                                    <li class="job-cats small">Frontend Developer</li>
                                </ul>
                                <p class="mb-2">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                    eu</p>
                                <ul class="border-b mb-2 pb-2">
                                    <li><a class="bg-grey rounded p-2 px-3 small mb-1 d-inline-block" href="job-grid.html">Adobe
                                            XD</a></li>
                                    <li><a class="bg-grey rounded p-2 px-3 small mb-1 d-inline-block" href="job-grid.html">Figma</a>
                                    </li>
                                    <li><a class="bg-grey rounded p-2 px-3 small mb-1 d-inline-block" href="job-grid.html">Photoshop</a>
                                    </li>
                                </ul>
                                <div class="row d-flex align-items-center justify-content-between">
                                    <div class="col-lg-5 col-5 text-start">
                                        <span><i class="fa fa-map-marker"></i> Chicago, US</span>
                                    </div>
                                    <div class="col-lg-7 col-7 text-end">
                                        <span class="job-price fw-bold theme2 fs-5">$50-$60</span>
                                        <span class="text-muted">|hr</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="job-card border-all p-4 rounded bg-white position-relative">
                            <div class="mb-2 text-center">
                                <div class="image-box bg-white box-shadow rounded d-inline-block p-1">
                                    <img src="images/reviewer/4.jpg" alt class="rounded">
                                </div>
                            </div>
                            <div class="job-block-info text-center">
                                <h4 class="mb-0"><a class="name-job" href="candidate-single.html">Saul Penk</a></h4>
                                <ul class="job-list mb-2">
                                    <li class="job-cats small">Java developer</li>
                                </ul>
                                <p class="mb-2">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                    eu</p>
                                <ul class="border-b mb-2 pb-2">
                                    <li><a class="bg-grey rounded p-2 px-3 small mb-1 d-inline-block" href="job-grid.html">Java</a>
                                    </li>
                                    <li><a class="bg-grey rounded p-2 px-3 small mb-1 d-inline-block" href="job-grid.html">Figma</a>
                                    </li>
                                    <li><a class="bg-grey rounded p-2 px-3 small mb-1 d-inline-block" href="job-grid.html">Photoshop</a>
                                    </li>
                                </ul>
                                <div class="row d-flex align-items-center justify-content-between">
                                    <div class="col-lg-5 col-5 text-start">
                                        <span><i class="fa fa-map-marker"></i> Chicago, US</span>
                                    </div>
                                    <div class="col-lg-7 col-7 text-end">
                                        <span class="job-price fw-bold theme2 fs-5">$50-$60</span>
                                        <span class="text-muted">|hr</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="pricing-all p-0 mx-md-5">
        <div class="bg-color px-md-5 rounded pt-8 pb-11">
            <div class="container">
                <div class="section-title mb-6 w-75 mx-auto text-center">
                    <h2 class="mb-1">Our Affordable <span class="display-5 theme1">Pricing Plans</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="price-list-wrap p-4 bg-white box-shadow rounded text-center mt-2">
                            <div class="price-top mb-3">
                                <div class="pricing-icon rounded p-4 py-2 bg-grey d-inline-block border-all">
                                    <i class="flaticon-wrench-and-screwdriver-in-cross fs-1"></i>
                                </div>
                                <h2 class="my-3"><i class="fas fa-dollar-sign fs-6"></i>5.99<span class="fs-6">/Month</span>
                                </h2>
                                <h3 class="mb-1 text-uppercase">starter</h3>
                                <p class="mb-0">For most businesses that want to otpimize web queries</p>
                            </div>
                            <ul class="list-package-feature mb-4">
                                <li>30 job posting</li>
                                <li>3 featured job</li>
                                <li>Job displayed for 15 days</li>
                                <li>Premium Support 24/7</li>
                                <li>Unlimited users</li>
                            </ul>
                            <button class="job-btn btn1 d-inline-block">Buy</button>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="price-list-wrap p-4 py-5 bg-theme1 rounded text-center">
                            <div class="price-top mb-3">
                                <div class="pricing-icon rounded p-4 py-2 bg-white d-inline-block">
                                    <i class="flaticon-auction fs-1 theme1"></i>
                                </div>
                                <h2 class="my-3 white"><i class="fas fa-dollar-sign fs-6"></i>15.99<span
                                        class="fs-6">/Month</span></h2>
                                <h3 class="mb-1 text-uppercase white">Professional</h3>
                                <p class="mb-0 white">For most businesses that want to otpimize web queries</p>
                            </div>
                            <ul class="list-package-feature mb-4">
                                <li class="white">40 job posting</li>
                                <li class="white">5 featured job</li>
                                <li class="white">Job displayed for 30 days</li>
                                <li class="white">Premium Support 24/7</li>
                                <li class="white">Unlimited users</li>
                            </ul>
                            <button class="job-btn1 btn1 d-inline-block">Buy</button>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="price-list-wrap p-4 bg-white box-shadow rounded text-center mt-2">
                            <div class="price-top mb-3">
                                <div class="pricing-icon rounded p-4 py-2 bg-grey d-inline-block border-all">
                                    <i class="flaticon-accounting fs-1"></i>
                                </div>
                                <h2 class="my-3"><i class="fas fa-dollar-sign fs-6"></i>25.99<span
                                        class="fs-6">/Month</span></h2>
                                <h3 class="mb-1 text-uppercase">Premium</h3>
                                <p class="mb-0">For most businesses that want to otpimize web queries</p>
                            </div>
                            <ul class="list-package-feature mb-4">
                                <li>50 job posting</li>
                                <li>10 featured job</li>
                                <li>Job displayed for 60 days</li>
                                <li>Premium Support 24/7</li>
                                <li>Unlimited users</li>
                            </ul>
                            <button class="job-btn btn1 d-inline-block">Buy</button>
                        </div>
                    </div>
                </div>
                <div class="short-info cl-blue border-0 text-center">
                    <p>If you have difficulty understanding our work process. <a href="about.html"
                                                                                 class="text-decoration-underline theme">
                            Please contact us for better information.</a></p>
                </div>
            </div>
        </div>
    </section>


    <section class="testimonial1 pb-8" style="background-image:url(images/testi-bg.png);">
        <div class="container">
            <div class="testimonial-main w-50 mx-auto">
                <div class="section-title text-center mb-2">
                    <h2 class="mb-1">Good Reviews By <span class="display-5 theme1">Clients</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
                <div class="row about-slider">
                    <div class="col-sm-4 my-4">
                        <div class="testimonial-item bg-white p-5 rounded box-shadow-sm text-center">
                            <div class="author-info mb-4">
                                <img src="images/testimonial/img1.jpg" alt class="d-inline-block mb-2">
                                <div class="author-title">
                                    <h5 class="m-0 theme">Jared Erondu</h5>
                                    <span>Supervisor</span>
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="details">
                                <p class="m-0"><i class="fa fa-quote-left me-2 fs-1 theme2 opacity-75"></i>Lorem Ipsum is
                                    simply dummy
                                    text of the printing andypesetting industry. Lorem ipsum a simple Lorem Ipsum
                                    has been the industry's standard dummy hic et quidem. Dignissimos maxime velit
                                    unde inventore quasi vero dolorem.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 my-4">
                        <div class="testimonial-item bg-white p-5 rounded box-shadow-sm text-center">
                            <div class="author-info mb-4">
                                <img src="images/testimonial/img3.jpg" alt class="d-inline-block mb-2">
                                <div class="author-title">
                                    <h5 class="m-0 theme">Jared Erondu</h5>
                                    <span>Supervisor</span>
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="details">
                                <p class="m-0"><i class="fa fa-quote-left me-2 fs-1 theme2 opacity-75"></i>Lorem Ipsum is
                                    simply dummy
                                    text of the printing andypesetting industry. Lorem ipsum a simple Lorem Ipsum
                                    has been the industry's standard dummy hic et quidem. Dignissimos maxime velit
                                    unde inventore quasi vero dolorem.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 my-4">
                        <div class="testimonial-item bg-white p-5 rounded box-shadow-sm text-center">
                            <div class="author-info mb-4">
                                <img src="images/testimonial/img2.jpg" alt class="d-inline-block mb-2">
                                <div class="author-title">
                                    <h5 class="m-0 theme">Jared Erondu</h5>
                                    <span>Supervisor</span>
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="details">
                                <p class="m-0"><i class="fa fa-quote-left me-2 fs-1 theme2 opacity-75"></i>Lorem Ipsum is
                                    simply dummy
                                    text of the printing andypesetting industry. Lorem ipsum a simple Lorem Ipsum
                                    has been the industry's standard dummy hic et quidem. Dignissimos maxime velit
                                    unde inventore quasi vero dolorem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="white-overlay"></div>
    </section>


    <section class="clients-section pb-8 pt-0">
        <div class="container">
            <div class="section-title text-center mb-6 w-75 mx-auto">
                <h2 class="mb-1">Join <span class="display-5 theme1">2700+ Clients</span> who’ve reached Featured Jobs</h2>
                <p class="mb-0">Keep Your worth and find the job quality your life</p>
            </div>
            <div class="row text-center justify-content-center mx-5">
                <div class="col-lg-2 col-md-4 mb-4">
                    <div class="client-image border-0 box-shadow p-4"><img src="images/clients/1.svg" alt
                                                                           class="filter-none"></div>
                </div>
                <div class="col-lg-2 col-md-4 mb-4">
                    <div class="client-image border-0 box-shadow p-4"><img src="images/clients/2.svg" alt class="w-75">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-4">
                    <div class="client-image border-0 box-shadow p-4"><img src="images/clients/3.svg" alt></div>
                </div>
                <div class="col-lg-2 col-md-4 mb-4">
                    <div class="client-image border-0 box-shadow p-4"><img src="images/clients/4.svg" alt></div>
                </div>
                <div class="col-lg-2 col-md-4 mb-4">
                    <div class="client-image border-0 box-shadow p-4"><img src="images/clients/5.svg" alt></div>
                </div>
                <div class="col-lg-2 col-md-4 mb-4">
                    <div class="client-image border-0 box-shadow p-4"><img src="images/clients/6.svg" alt></div>
                </div>
                <div class="col-lg-2 col-md-4 mb-4">
                    <div class="client-image border-0 box-shadow p-4"><img src="images/clients/2.svg" alt></div>
                </div>
                <div class="col-lg-2 col-md-4 mb-4">
                    <div class="client-image border-0 box-shadow p-4"><img src="images/clients/4.svg" alt></div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer-newsletter bg-grey py-5">
        <div class="container">
            <div class="newsletter-main">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h3 class="mb-1 theme">Subscribe Our Newsletter</h3>
                        <p class="mb-0">Join our community of over 200,000 global readers who receives emails
                            filled with news, promotions, and other good stuff.</p>
                    </div>
                    <div class="col-lg-6">
                        <form action="#" method="get" accept-charset="utf-8"
                              class="border-0 rounded bg-white d-flex align-items-center overflow-hidden">
                            <input type="text" placeholder="Email Address" class="border-0">
                            <button class="job-btn btn1 ms-2 rounded-end rounded-0" style="padding:18px 40px 18px 24px;">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}


@endsection


