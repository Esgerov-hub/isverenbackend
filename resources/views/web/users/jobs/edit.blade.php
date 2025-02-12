@extends('web.users.user-menu')
@section('user.css')

@endsection
@section('user.section')
    <div class="col-xl-9 col-lg-8 col-md-12 m-b30">
        <!--Filter Short By-->
        <div class="twm-right-section-panel site-bg-gray">
            <form>
                <div class="row">
                    <!--Job title-->
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Başlıq</label>
                            <div class="ls-inputicon-box">
                                <input class="form-control" name="title[az]" type="text" placeholder="Proqramçı, Menecer və s.">
                                <i class="fs-input-icon fa fa-address-card"></i>
                            </div>
                        </div>
                    </div>

                    <!--Job Category-->
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="form-group city-outer-bx has-feedback">
                            <label>Əsas kateqorya</label>
                            <div class="ls-inputicon-box">
                                <select class="wt-select-box selectpicker"  data-live-search="true" title="" id="j-category" data-bv-field="size" name="category_id">
                                    <option disabled selected value="">Select Category</option>
                                    <option>Accounting and Finance</option>
                                    <option>Clerical &amp; Data Entry</option>
                                    <option>Counseling</option>
                                    <option>Court Administration</option>
                                    <option>Human Resources</option>
                                    <option>Investigative</option>
                                    <option>IT and Computers</option>
                                    <option>Law Enforcement</option>
                                    <option>Management</option>
                                    <option>Miscellaneous</option>
                                    <option>Public Relations</option>
                                </select>
                                <i class="fs-input-icon fa fa-border-all"></i>
                            </div>

                        </div>
                    </div>
                    <!--Job Category-->
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="form-group city-outer-bx has-feedback">
                            <label>Kateqorya</label>
                            <div class="ls-inputicon-box">
                                <select class="wt-select-box selectpicker"  data-live-search="true" title="" id="j-sub-category" data-bv-field="size" name="sub_category_id">
                                    <option disabled selected value="">Select Category</option>
                                    <option>Accounting and Finance</option>
                                    <option>Clerical &amp; Data Entry</option>
                                    <option>Counseling</option>
                                    <option>Court Administration</option>
                                    <option>Human Resources</option>
                                    <option>Investigative</option>
                                    <option>IT and Computers</option>
                                    <option>Law Enforcement</option>
                                    <option>Management</option>
                                    <option>Miscellaneous</option>
                                    <option>Public Relations</option>
                                </select>
                                <i class="fs-input-icon fa fa-border-all"></i>
                            </div>

                        </div>
                    </div>

                    <!--Job Type-->
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>İş rejimi</label>
                            <div class="ls-inputicon-box">
                                <select class="wt-select-box selectpicker"  data-live-search="true" title="" id="s-job-type" data-bv-field="size" name="job_type_id">
                                    <option class="bs-title-option" value="">Select Category</option>
                                    <option>Full Time</option>
                                    <option>Freelance</option>
                                    <option>Part Time</option>
                                    <option>Internship</option>
                                    <option>Temporary</option>
                                </select>
                                <i class="fs-input-icon fa fa-file-alt"></i>
                            </div>
                        </div>
                    </div>

                    <!--City-->
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Şəhər</label>
                            <div class="ls-inputicon-box">
                                <select class="wt-select-box selectpicker"  data-live-search="true" title="" id="s-city" name="city_id" data-bv-field="size">
                                    <option class="bs-title-option" value="">Şəhər</option>
                                    <option>Afghanistan</option>
                                    <option>Albania</option>
                                    <option>Algeria</option>
                                    <option>Andorra</option>
                                    <option>Angola</option>
                                    <option>Antigua and Barbuda</option>
                                    <option>Argentina</option>
                                    <option>Armenia</option>
                                    <option>Australia</option>
                                    <option>Austria</option>
                                    <option>Azerbaijan</option>
                                    <option>The Bahamas</option>
                                    <option>Bahrain</option>
                                    <option>Bangladesh</option>
                                    <option>Barbados</option>
                                </select>
                                <i class="fs-input-icon fa fa-globe-americas"></i>
                            </div>
                        </div>
                    </div>
                    <!--Company-->
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Şirkət</label>
                            <div class="ls-inputicon-box">
                                <select class="wt-select-box selectpicker"  data-live-search="true" title="" id="company" name="company_id" data-bv-field="size">
                                    <option class="bs-title-option" value="">Şirkət</option>
                                    <option>Afghanistan</option>
                                    <option>Albania</option>
                                    <option>Algeria</option>
                                    <option>Andorra</option>
                                    <option>Angola</option>
                                    <option>Antigua and Barbuda</option>
                                    <option>Argentina</option>
                                    <option>Armenia</option>
                                    <option>Australia</option>
                                    <option>Austria</option>
                                    <option>Azerbaijan</option>
                                    <option>The Bahamas</option>
                                    <option>Bahrain</option>
                                    <option>Bangladesh</option>
                                    <option>Barbados</option>
                                </select>
                                <i class="fs-input-icon fa fa-globe-americas"></i>
                            </div>
                            <div class="twm-nav-btn-right">
                                <a href="dash-post-job.html" class="twm-nav-post-a-job">
                                    <i class="feather-briefcase"></i> Yeni şirkət əlavə et
                                </a>
                            </div>
                        </div>

                    </div>

                    <!--Experience-->
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Minumum Maaş</label>
                            <div class="ls-inputicon-box">
                                <input class="form-control" name="min_salary" type="number" placeholder="300">
                                <i class="fs-input-icon fa fa-dollar-sign"></i>
                            </div>
                        </div>
                    </div>

                    <!--Experience-->
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Maxumum Maaş</label>
                            <div class="ls-inputicon-box">
                                <input class="form-control" name="max_salary" type="number" placeholder="800">
                                <i class="fs-input-icon fa fa-dollar-sign"></i>
                            </div>
                        </div>
                    </div>


                    <!--Email Address-->
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>E-poçt</label>
                            <div class="ls-inputicon-box">
                                <input class="form-control" name="email" type="email" placeholder="isveren.consulting@gmail.com">
                                <i class="fs-input-icon fas fa-at"></i>
                            </div>
                        </div>
                    </div>

                    <!--Email Address-->
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Əlaqə nömrəsi</label>
                            <div class="ls-inputicon-box">
                                <input class="form-control" name="phone" type="text" placeholder="+99499 702 70 93">
                                <i class="fs-input-icon fas fa-phone"></i>
                            </div>
                        </div>
                    </div>
                    <!--Start Date-->
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Əlavə edilmə tarixi</label>
                            <div class="ls-inputicon-box">
                                <input class="form-control datepicker" data-provide="datepicker" name="created_at" type="text" placeholder="mm/dd/yyyy">
                                <i class="fs-input-icon far fa-calendar"></i>
                            </div>
                        </div>
                    </div>

                    <!--End Date-->
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Bitmə tarixi</label>
                            <div class="ls-inputicon-box">
                                <input class="form-control datepicker" data-provide="datepicker" name="updated_at" type="text" placeholder="mm/dd/yyyy">
                                <i class="fs-input-icon far fa-calendar"></i>
                            </div>
                        </div>
                    </div>
                    <!--Description-->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Daha ətraflı məlumat</label>
                            <textarea class="form-control" rows="3" name="description[az]"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="text-left">
                            <button type="submit" class="site-button m-r5">Yadda saxla</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('user.js')
@endsection
