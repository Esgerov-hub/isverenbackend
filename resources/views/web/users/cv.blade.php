@extends('web.users.user-menu')
@section('user.css')
    <link rel="stylesheet" type="text/css" href="{{ asset('site/css/resume.css') }}">
@endsection
@section('user.section')
    <div class="col-xl-9 col-lg-8 col-md-12 m-b30">
        <div class="twm-right-section-panel site-bg-gray">

            <!--Resume Headline-->
            <div class="panel panel-default mb-3">
                <div class="panel-heading wt-panel-heading p-a20 panel-heading-with-btn ">
                    <h4 class="panel-tittle m-a0">CV Başlıqı</h4>
                    <a data-bs-toggle="modal" href="#Resume_Headline" role="button" title="Edit" class="site-text-primary">
                        <span class="fa fa-edit"></span>
                    </a>
                </div>
                <div class="panel-body wt-panel-body p-a20 ">
                    <div class="twm-panel-inner">
                        <p>Senior UI / UX Designer and Developer at Google INC</p>
                    </div>
                </div>
                <!--Modal Popup -->
                <div class="modal fade twm-saved-jobs-view" id="Resume_Headline" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form>

                                <div class="modal-header">
                                    <h2 class="modal-title">Başlıq qeyd edin</h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group twm-textarea-full">
                                                <textarea class="form-control" placeholder="PHP Developer, Ofis Meneceri və s."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="site-button" data-bs-dismiss="modal">Bağla</button>
                                    <button type="button" class="site-button">Qeyd et</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default mb-3">
                <div class="panel-heading wt-panel-heading p-a20 panel-heading-with-btn ">
                    <h4 class="panel-tittle m-a0">Öz cv-nizi əlavə edin</h4>
                </div>
                <div class="panel-body wt-panel-body p-a20 ">
                    <div class="twm-panel-inner">
                        <div class="dashboard-cover-pic">
                            <form action="https://thewebmax.org/jobzilla/upload.php" class="dropzone"></form>
                            <p>Upload Resume File size is 3 MB</p>
                        </div>

                    </div>
                </div>

            </div>
            <!--Personal Details-->
            <div class="panel panel-default mb-3">
                <div class="panel-heading wt-panel-heading p-a20 panel-heading-with-btn ">
                    <h4 class="panel-tittle m-a0">Ümumi haqqınızda</h4>
                    <a data-bs-toggle="modal" href="#Personal_Details" role="button" title="Edit" class="site-text-primary">
                        <span class="fa fa-edit"></span>
                    </a>
                </div>
                <div class="panel-body wt-panel-body p-a20 ">
                    <div class="twm-panel-inner">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="twm-s-detail-section">
                                    <div class="twm-title">Doğum tarixi</div>
                                    <span class="twm-s-info-discription">31 July 1998</span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="twm-s-detail-section">
                                    <div class="twm-title">Cins</div>
                                    <span class="twm-s-info-discription">Male</span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="twm-s-detail-section">
                                    <div class="twm-title">Subay/Evli/Dul</div>
                                    <span class="twm-s-info-discription">Single / unmarried</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="twm-s-detail-section">
                                    <div class="twm-title">Vətəndaşlıq</div>
                                    <span class="twm-s-info-discription">USA</span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="twm-s-detail-section">
                                    <div class="twm-title">Rəsmi Ünvan</div>
                                    <span class="twm-s-info-discription">Add Permanent Address</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="twm-s-detail-section">
                                    <div class="twm-title">Faktiki Ünvan</div>
                                    <span class="twm-s-info-discription">Add Permanent Address</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="twm-s-detail-section">
                                    <div class="twm-title">Əlaqə vasitəsi</div>
                                    <span class="twm-s-info-discription">+123 456 7890</span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="twm-s-detail-section">
                                    <div class="twm-title">E-poçt</div>
                                    <span class="twm-s-info-discription">UK</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!--Personal Details Modal -->
                <div class="modal fade twm-saved-jobs-view" id="Personal_Details" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form>

                                <div class="modal-header">
                                    <h2 class="modal-title">Haqqınızda məlumat əlavə et</h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <div class="row">
                                        <!--Birth Date-->
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <label>Doğum tarixi</label>
                                                <div class="ls-inputicon-box">
                                                    <input class="form-control datepicker" data-provide="datepicker" name="company_since" type="text" placeholder="mm/dd/yyyy">
                                                    <i class="fs-input-icon far fa-calendar"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <label>Cins</label>
                                                <div class="row twm-form-radio-inline">

                                                    <div class="col-md-6">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="S_male">
                                                        <label class="form-check-label" for="S_male">
                                                            Male
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="S_female" checked>
                                                        <label class="form-check-label" for="S_female">
                                                            Female
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <label>Evlilik statusu</label>
                                                <div class="ls-inputicon-box">
                                                    <select class="wt-select-box selectpicker"  data-live-search="true" title=""  data-bv-field="size">
                                                        <option class="bs-title-option" value="">Select Category</option>
                                                        <option>Married</option>
                                                        <option>Single</option>
                                                    </select>
                                                    <i class="fs-input-icon fa fa-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group mb-0">
                                                <label>Vətəndaşlıq</label>
                                                <div class="ls-inputicon-box">
                                                    <select class="wt-select-box selectpicker"  data-live-search="true" title=""  data-bv-field="size">
                                                        <option class="bs-title-option" value="">Country</option>
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
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <label>Rəsmi ünvan</label>
                                                <div class="ls-inputicon-box">
                                                    <input class="form-control"  type="text" placeholder="Enter Permanent Address">
                                                    <i class="fs-input-icon fa fa-map-marker-alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <label>Faktiki ünvan</label>
                                                <div class="ls-inputicon-box">
                                                    <input class="form-control"  type="text" placeholder="Enter Permanent Address">
                                                    <i class="fs-input-icon fa fa-map-marker-alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <label>Əlaqə vasitəsi</label>
                                                <div class="ls-inputicon-box">
                                                    <input class="form-control"  type="text" placeholder="Enter Pincode">
                                                    <i class="fs-input-icon fa fa-map-pin"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <label>E-poçt</label>
                                                <div class="ls-inputicon-box">
                                                    <input class="form-control" type="text" placeholder="Enter Passport Number">
                                                    <i class="fs-input-icon fa flaticon-email"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Özünüz haqqında qısa məlumat</label>
                                                <textarea class="form-control" rows="3" placeholder="Describe"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="site-button" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="site-button">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

            <!--Desired Career Profile-->
            <div class="panel panel-default mb-3">
                <div class="panel-heading wt-panel-heading p-a20 panel-heading-with-btn ">
                    <h4 class="panel-tittle m-a0">Əlavə məlumatlar</h4>
                    <a data-bs-toggle="modal" href="#Desired_Career" role="button" title="Edit" class="site-text-primary">
                        <span class="fa fa-edit"></span>
                    </a>
                </div>
                <div class="panel-body wt-panel-body p-a20 ">
                    <div class="twm-panel-inner">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="twm-s-detail-section">
                                    <div class="twm-title">Sahəniz</div>
                                    <span class="twm-s-info-discription">IT-Software/Software Services</span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="twm-s-detail-section">
                                    <div class="twm-title">İş saatı</div>
                                    <span class="twm-s-info-discription">permanent</span>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="twm-s-detail-section">
                                    <div class="twm-title">İstədyiniz əmək haqqı</div>
                                    <span class="twm-s-info-discription">1 Lakhs</span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="twm-s-detail-section">
                                    <div class="twm-title">İstədiyiniz ünvan</div>
                                    <span class="twm-s-info-discription">Add Desired Location</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!--Desired Career Profile -->
                <div class="modal fade twm-saved-jobs-view" id="Desired_Career" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form>

                                <div class="modal-header">
                                    <h2 class="modal-title">Əlavə məlumat yarat</h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">

                                    <div class="row">
                                        <!--Industry-->
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <label>Sahəniz</label>
                                                <div class="ls-inputicon-box">
                                                    <select class="wt-select-box selectpicker"  data-live-search="true" title=""  data-bv-field="size">
                                                        <option>Accounting / Finance</option>
                                                        <option>Banking / Financial Services / Broking</option>
                                                        <option>Education / Teaching / Training</option>
                                                        <option>IT-Hardware / Networking</option>
                                                        <option>Other</option>
                                                    </select>
                                                    <i class="fs-input-icon fa fa-industry"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Employment Type-->
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <label>İş saatı</label>
                                                <div class="row twm-form-radio-inline">

                                                    <div class="col-md-6">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="Full_Time">
                                                        <label class="form-check-label" for="Full_Time">
                                                            Full Time
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="part_Time" checked>
                                                        <label class="form-check-label" for="part_Time">
                                                            Part Time
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <label>E-poçt</label>
                                                <div class="ls-inputicon-box">
                                                    <input class="form-control" type="text" placeholder="Enter Passport Number">
                                                    <i class="fs-input-icon fa flaticon-email"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Expected Salary-->
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="form-group">
                                                <label>İstədiyiniz maaş</label>
                                                <input class="form-control" type="number" name="US_Dollars">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="form-group">
                                                <label>İstədiyiniz maaş</label>
                                                <input class="form-control" type="number" name="US_Dollars">
                                            </div>
                                        </div>


                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <label>İstədiyiniz ünvan</label>
                                                <input class="form-control" type="text" name="US_Dollars">
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="site-button" data-bs-dismiss="modal">Bağla</button>
                                    <button type="button" class="site-button">Qeyd et</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!--Key Skills-->
            <div class="panel panel-default mb-3">
                <div class="panel-heading wt-panel-heading p-a20 panel-heading-with-btn ">
                    <h4 class="panel-tittle m-a0">Billiklər</h4>
                    <div class="knowledge-group">
                        <label>Hər hansı billik var?</label>
                        <div>
                            <input class="form-check-input" type="radio" name="knowledge" id="yesKnowledge">
                            <label for="yesKnowledge">Bəli</label>
                            <input class="form-check-input" type="radio" name="knowledge" id="noKnowledge">
                            <label class="form-check-label" for="noKnowledge">Xeyir</label>
                            <a data-bs-toggle="modal" href="#Key_Skills" role="button" id="knowledgeAdd" title="Edit" class="site-text-primary">
                                <span class="fa fa-edit"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel-body wt-panel-body p-a20">
                    <div class="tw-sidebar-tags-wrap">
                        <div class="tagcloud">
                            <span class="tag">Finance <button class="remove-tag">×</button></span>
                            <span class="tag">Sales <button class="remove-tag">×</button></span>
                            <span class="tag">Part-time <button class="remove-tag">×</button></span>
                            <span class="tag">Administration <button class="remove-tag">×</button></span>
                            <span class="tag">Retail <button class="remove-tag">×</button></span>
                            <span class="tag">Engineering <button class="remove-tag">×</button></span>
                            <span class="tag">Developer <button class="remove-tag">×</button></span>
                            <span class="tag">Work from home <button class="remove-tag">×</button></span>
                            <span class="tag">IT Consulting <button class="remove-tag">×</button></span>
                            <span class="tag">Manufacturing <button class="remove-tag">×</button></span>
                        </div>
                    </div>
                </div>
                <script>
                    document.querySelectorAll('.remove-tag').forEach(button => {
                        button.addEventListener('click', function() {
                            this.parentElement.remove();
                        });
                    });
                </script>

                <!--Modal popup -->
                <div class="modal fade twm-saved-jobs-view" id="Key_Skills" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form>

                                <div class="modal-header">
                                    <h2 class="modal-title">Billik qeyd  et</h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input class="form-control"  type="text" value="PHP, Java, SMM, Devops və s">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="site-button" data-bs-dismiss="modal">Bağla</button>
                                    <button type="button" class="site-button">Qeyd et</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!--Dill Skills-->
            <div class="panel panel-default mb-3">
                <div class="panel-heading wt-panel-heading p-a20 panel-heading-with-btn ">
                    <h4 class="panel-tittle m-a0">Dil Billiklər</h4>
                    <div class="knowledge-group">
                        <label>Hər hansı dil billik var?</label>
                        <div>
                            <input class="form-check-input" type="radio" name="lang" id="yesLang">
                            <label for="yesLang">Bəli</label>
                            <input class="form-check-input" type="radio" name="lang" id="noLang">
                            <label class="form-check-label" for="noLang">Xeyir</label>
                            <a data-bs-toggle="modal" href="#Key_Lang" role="button" id="langAdd" title="Edit" class="site-text-primary">
                                <span class="fa fa-edit"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel-body wt-panel-body p-a20">
                    <div class="tw-sidebar-tags-wrap">
                        <div class="tagcloud">
                            <span class="tag">Azərbaycan <button class="remove-tag">×</button></span>
                            <span class="tag">Rus <button class="remove-tag">×</button></span>
                            <span class="tag">Türk <button class="remove-tag">×</button></span>
                        </div>
                    </div>
                </div>

                <!--Modal popup -->
                <div class="modal fade twm-saved-jobs-view" id="Key_Lang" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form>

                                <div class="modal-header">
                                    <h2 class="modal-title">Dil biliyinnizi qeyd  et</h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control"  type="text" value="Azərbaycan dili">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="form-group">
                                            <label>Hansı səviyə</label>
                                            <div class="row twm-form-radio-inline">
                                                <div class="col-md-4">
                                                    <input class="form-check-input" type="radio" name="currentlyWorked">
                                                    <label class="form-check-label" for="yesCurrentlyWorked">
                                                        Zəif
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <input class="form-check-input" type="radio" name="currentlyWorked">
                                                    <label class="form-check-label" for="noCurrentlyWorked">
                                                        Orta
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <input class="form-check-input" type="radio" name="currentlyWorked">
                                                    <label class="form-check-label" for="noCurrentlyWorked">
                                                        Əla
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="site-button" data-bs-dismiss="modal">Bağla</button>
                                    <button type="button" class="site-button">Qeyd et</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!--Employment-->
            <div class="panel panel-default mb-3">
                <div class="panel-heading wt-panel-heading p-a20 panel-heading-with-btn ">
                    <h4 class="panel-tittle m-a0">İş təcrübəsi</h4>
                    <div class="employment-group">
                        <label>İş təcrübəsi var? </label>
                        <div>
                            <input class="form-check-input" type="radio" name="employment" id="yesEmployment">
                            <label for="yesEmployment">Bəli</label>
                            <input class="form-check-input" type="radio" name="employment" id="noEmployment">
                            <label class="form-check-label" for="noEmployment">Xeyir</label>
                            <a data-bs-toggle="modal" href="#Employment" role="button" id="employmentAdd" title="Edit" class="site-text-primary">
                                <span class="fa fa-edit"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel-body wt-panel-body p-a20 ">
                    <div class="twm-panel-inner">
                        <p><b>Senior UI / UX Designer and Developer</b><button class="remove-tag">×</button></p>
                        <p>Google INC</p>
                        <p>Experience (6 Year)</p>
                        <p>Available to join in 1 Months</p>
                    </div>
                </div>

                <!--Employment -->
                <div class="modal fade twm-saved-jobs-view" id="Employment" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form>
                                <div class="modal-header">
                                    <h2 class="modal-title">İş təcrübəsi əlavə et</h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <label>Şirkət adı</label>
                                                <div class="ls-inputicon-box">
                                                    <input class="form-control"  type="text" name="company" placeholder="İş Verən Consulting">
                                                    <i class="fs-input-icon fa fa-address-card"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <label>Vəzifə</label>
                                                <div class="ls-inputicon-box">
                                                    <input class="form-control" type="text" name="position" placeholder="Backend Developer">
                                                    <i class="fs-input-icon fa fa-building"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Start Date-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Başlama tarixi</label>
                                                <div class="ls-inputicon-box">
                                                    <input class="form-control datepicker" data-provide="datepicker" name="skill_start_date" type="text" placeholder="mm/dd/yyyy">
                                                    <i class="fs-input-icon far fa-calendar"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <label>Hal-hazırda işləyirsiz?</label>
                                                <div class="row twm-form-radio-inline">
                                                    <div class="col-md-6">
                                                        <input class="form-check-input" type="radio" name="currentlyWorked" id="yesCurrentlyWorked">
                                                        <label class="form-check-label" for="yesCurrentlyWorked">
                                                            Bəli
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input class="form-check-input" type="radio" name="currentlyWorked" id="noCurrentlyWorked">
                                                        <label class="form-check-label" for="noCurrentlyWorked">
                                                            Xeyir
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12" id="workedDateField">
                                            <div class="form-group">
                                                <label>Çıxma tarixi</label>
                                                <div class="ls-inputicon-box">
                                                    <input class="form-control datepicker" data-provide="datepicker" name="skill_start_date" type="text" placeholder="mm/dd/yyyy">
                                                    <i class="fs-input-icon far fa-calendar"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12" id="workedNoteField">
                                            <div class="form-group mb-0">
                                                <label>Fəaliyyətiniz haqqda qısa məlumat</label>
                                                <textarea class="form-control" rows="3"  name="skill_text" placeholder="...."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="site-button" data-bs-dismiss="modal">Bağla</button>
                                    <button type="button" class="site-button">Qeyd et</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

            <!--Education-->
            <div class="panel panel-default mb-3">
                <div class="panel-heading wt-panel-heading p-a20 panel-heading-with-btn ">
                    <h4 class="panel-tittle m-a0">Təhsil</h4>
                    <div class="studying-group">
                        <label>Təhsiliniz var? </label>
                        <div>
                            <input class="form-check-input" type="radio" name="studying" id="yesStudying">
                            <label for="yesStudying">Bəli</label>
                            <input class="form-check-input" type="radio" name="studying" id="noStudying">
                            <label class="form-check-label" for="noStudying">Xeyir</label>
                            <a data-bs-toggle="modal" href="#Education" role="button" id="educationAdd" title="Edit" class="site-text-primary">
                                <span class="fa fa-edit"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel-body wt-panel-body p-a20 ">
                    <div class="twm-panel-inner">
                        <p><b>BCA - Bachelor of Computer Applications</b><button class="remove-tag">×</button></p>
                        <p>2006 to 2008</p>
                        <p><b>MCA - Master of Computer Application</b><button class="remove-tag">×</button></p>
                        <p>2008 to 20011</p>
                    </div>
                </div>

                <!--Education -->
                <div class="modal fade twm-saved-jobs-view" id="Education" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form>

                                <div class="modal-header">
                                    <h2 class="modal-title">Təhsil haqqında</h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <div class="row">

                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <label>Təhsil dərəcəsi</label>
                                                <div class="ls-inputicon-box">
                                                    <select class="wt-select-box selectpicker"  data-live-search="true" title="" data-bv-field="size">
                                                        <option class="bs-title-option" value="">-Zəhmət olmasa təhsil dərəcəsi seçin</option>
                                                        <option>Ümumi Orta Təhsil</option>
                                                        <option>Orta İxtisas Təhsili</option>
                                                        <option>Bakalavr</option>
                                                        <option>Magistratura</option>
                                                        <option>Doktorantura</option>
                                                    </select>
                                                    <i class="fs-input-icon fa fa-user-graduate"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <label>Təhsil müəsəssi</label>
                                                <div class="ls-inputicon-box">
                                                    <input class="form-control"  type="text" placeholder="Təhsil müəssəsinin adını qeyd edin">
                                                    <i class="fs-input-icon fa fa-book-reader"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <label>İxtisasınız</label>
                                                <div class="ls-inputicon-box">
                                                    <input class="form-control"  type="text" placeholder="İxtisasınızı qeyd edin">
                                                    <i class="fs-input-icon fa fa-book"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <label>Başlama tarixi</label>
                                                <div class="ls-inputicon-box">
                                                    <input class="form-control datepicker" data-provide="datepicker" name="skill_start_date" type="text" placeholder="mm/dd/yyyy">
                                                    <i class="fs-input-icon far fa-calendar"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <label>Hal-hazırda təhsil alırsız?</label>
                                                <div class="row twm-form-radio-inline">
                                                    <div class="col-md-6">
                                                        <input class="form-check-input" type="radio" name="currentlyStudying" id="yesCurrentlyStudying">
                                                        <label class="form-check-label" for="yesCurrentlyStudying">
                                                            Bəli
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input class="form-check-input" type="radio" name="currentlyStudying" id="noCurrentlyStudying">
                                                        <label class="form-check-label" for="noCurrentlyStudying">
                                                            Xeyir
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12" id="graduationDateField">
                                            <div class="form-group">
                                                <label>Bitirmə tarixi</label>
                                                <div class="ls-inputicon-box">
                                                    <input class="form-control datepicker" data-provide="datepicker" name="skill_start_date" type="text" placeholder="mm/dd/yyyy">
                                                    <i class="fs-input-icon far fa-calendar"></i>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="site-button" data-bs-dismiss="modal">Bağla</button>
                                    <button type="button" class="site-button">Qeyd et</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

            <!--Project-->
            <div class="panel panel-default mb-3">
                <div class="panel-heading wt-panel-heading p-a20 panel-heading-with-btn ">
                    <h4 class="panel-tittle m-a0">Lahiyələr</h4>
                    <div class="employment-group">
                        <label>Lahiyəniz var? </label>
                        <div>
                            <input class="form-check-input" type="radio" name="project" id="yesProject">
                            <label for="yesProject">Bəli</label>
                            <input class="form-check-input" type="radio" name="project" id="noProject">
                            <label class="form-check-label" for="noProject">Xeyir</label>
                            <a data-bs-toggle="modal" href="#Pro_ject" role="button" id="projectAdd" title="Edit" class="site-text-primary">
                                <span class="fa fa-edit"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel-body wt-panel-body p-a20 ">
                    <div class="twm-panel-inner">
                        <p><b>Jobzilla</b></p>
                        <p>Google INC</p>
                        <p>January 2023 to Present</p>
                        <p>Jobjilla Template</p>
                    </div>
                </div>

                <!--Project -->
                <div class="modal fade twm-saved-jobs-view" id="Pro_ject" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form>

                                <div class="modal-header">
                                    <h2 class="modal-title">Lahiyənizi əlavə edin</h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">

                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <label>Lahiyə adı</label>
                                                <div class="ls-inputicon-box">
                                                    <input class="form-control"  type="text" placeholder="İş verən Consulting">
                                                    <i class="fs-input-icon fa fa-address-card"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <label>Lahiyə kimindir?</label>
                                                <div class="ls-inputicon-box">
                                                    <select class="wt-select-box selectpicker"  data-live-search="true" title=""  data-bv-field="size">
                                                        <option class="bs-title-option" value="">-Seçin</option>
                                                        <option>Öz lahiyəm</option>
                                                        <option>Müşdəri lahiyəsi</option>
                                                    </select>
                                                    <i class="fs-input-icon fa fa-user-graduate"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Start Date-->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Başlama tarixi</label>
                                                <div class="ls-inputicon-box">
                                                    <input class="form-control datepicker" data-provide="datepicker" name="skill_start_date" type="text" placeholder="mm/dd/yyyy">
                                                    <i class="fs-input-icon far fa-calendar"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <label>Hal-hazırda işləyirsiz?</label>
                                                <div class="row twm-form-radio-inline">
                                                    <div class="col-md-6">
                                                        <input class="form-check-input" type="radio" name="currentlyProject" id="yesCurrentlyProject">
                                                        <label class="form-check-label" for="yesCurrentlyProject">
                                                            Bəli
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input class="form-check-input" type="radio" name="currentlyProject" id="noCurrentlyProject">
                                                        <label class="form-check-label" for="noCurrentlyProject">
                                                            Xeyir
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12" id="projectDateField">
                                            <div class="form-group">
                                                <label>Çıxma tarixi</label>
                                                <div class="ls-inputicon-box">
                                                    <input class="form-control datepicker" data-provide="datepicker" name="skill_start_date" type="text" placeholder="mm/dd/yyyy">
                                                    <i class="fs-input-icon far fa-calendar"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group mb-0">
                                                <label>Fəaliyyətiniz haqqda qısa məlumat</label>
                                                <textarea class="form-control" rows="3"  name="skill_text" placeholder="...."></textarea>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="site-button" data-bs-dismiss="modal">Bağla</button>
                                    <button type="button" class="site-button">Qeyd et</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

            <!--Dill Skills-->
            <div class="panel panel-default mb-3">
                <div class="panel-heading wt-panel-heading p-a20 panel-heading-with-btn ">
                    <h4 class="panel-tittle m-a0">Hobbiniz</h4>
                    <div class="knowledge-group">
                        <label>Hər hansı hobbiniz var?</label>
                        <div>
                            <input class="form-check-input" type="radio" name="hobby" id="yesHobby">
                            <label for="yesHobby">Bəli</label>
                            <input class="form-check-input" type="radio" name="hobby" id="noHobby">
                            <label class="form-check-label" for="noHobby">Xeyir</label>
                            <a data-bs-toggle="modal" href="#Key_Hobby" role="button" id="hobbyAdd" title="Edit" class="site-text-primary">
                                <span class="fa fa-edit"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel-body wt-panel-body p-a20">
                    <div class="tw-sidebar-tags-wrap">
                        <div class="tagcloud">
                            <span class="tag">Qacmaq <button class="remove-tag">×</button></span>
                            <span class="tag">Gemzey <button class="remove-tag">×</button></span>
                            <span class="tag">Kitab oxumaq <button class="remove-tag">×</button></span>
                        </div>
                    </div>
                </div>

                <!--Modal popup -->
                <div class="modal fade twm-saved-jobs-view" id="Key_Hobby" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form>

                                <div class="modal-header">
                                    <h2 class="modal-title">Hobinizi qeyd  et</h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control"  type="text" placeholder="Kitab oxumaq">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="site-button" data-bs-dismiss="modal">Bağla</button>
                                    <button type="button" class="site-button">Qeyd et</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <!--Social-->
            <div class="panel panel-default mb-3">
                <div class="panel-heading wt-panel-heading p-a20 panel-heading-with-btn ">
                    <h4 class="panel-tittle m-a0">Sosial şəbəkə</h4>
                    <div class="knowledge-group">
                        <label>Hər hansı Sosial şəbəkəniz var?</label>
                        <div>
                            <input class="form-check-input" type="radio" name="social" id="yesSocial">
                            <label for="yesSocial">Bəli</label>
                            <input class="form-check-input" type="radio" name="social" id="noSocial">
                            <label class="form-check-label" for="noSocial">Xeyir</label>
                            <a data-bs-toggle="modal" href="#Key_Social" role="button" id="socialAdd" title="Edit" class="site-text-primary">
                                <span class="fa fa-edit"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel-body wt-panel-body p-a20">
                    <div class="tw-sidebar-tags-wrap">
                        <div class="tagcloud">
                            <span class="tag">Linkedin <button class="remove-tag">×</button></span>
                            <span class="tag">Facebook <button class="remove-tag">×</button></span>
                            <span class="tag">Github <button class="remove-tag">×</button></span>
                        </div>
                    </div>
                </div>

                <!--Modal popup -->
                <div class="modal fade twm-saved-jobs-view" id="Key_Social" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form>

                                <div class="modal-header">
                                    <h2 class="modal-title">Sosial şəbəkənizi qeyd edin</h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="form-group">
                                            <label>Hansı sosial şəbəkə?</label>
                                            <div class="ls-inputicon-box">
                                                <select class="wt-select-box selectpicker"  data-live-search="true" title="" data-bv-field="size">
                                                    <option class="bs-title-option" value="">-Zəhmət olmasa sosial şəbəkə seçin</option>
                                                    <option>Linkedin</option>
                                                    <option>Facebook</option>
                                                </select>
                                                <i class="fs-input-icon fa fa-user-graduate"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <label>Link</label>
                                        <div class="form-group">
                                            <input class="form-control"  type="text" placeholder="https://linkedin.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="site-button" data-bs-dismiss="modal">Bağla</button>
                                    <button type="button" class="site-button">Qeyd et</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <!--Profile Summary-->
            <div class="panel panel-default mb-3">
                <div class="panel-heading wt-panel-heading p-a20 panel-heading-with-btn ">
                    <h4 class="panel-tittle m-a0">Motivasiya məktubu</h4>
                    <a data-bs-toggle="modal" href="#Profile_Summary" role="button" title="Edit" class="site-text-primary">
                        <span class="fa fa-edit"></span>
                    </a>
                </div>
                <div class="panel-body wt-panel-body p-a20 ">
                    <div class="twm-panel-inner">
                        <p>Your Profile Summary should mention the highlights of your career and education, what your professional interests are, and what kind of a career you are looking for. Write a meaningful summary of more than 50 characters.</p>
                    </div>
                </div>
                <!--Modal Popup -->
                <div class="modal fade twm-saved-jobs-view" id="Profile_Summary" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form>

                                <div class="modal-header">
                                    <h2 class="modal-title">Motivasiya məktubu</h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <p>Your Profile Summary should mention the highlights of your career and education, what your professional interests are, and what kind of a career you are looking for. Write a meaningful summary of more than 50 characters.</p>

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group twm-textarea-full">
                                                <textarea class="form-control" placeholder="Detail of Project"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="modal-footer">

                                    <button type="button" class="site-button" data-bs-dismiss="modal">Bağla</button>
                                    <button type="button" class="site-button">Qeyd et</button>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('user.js')
    <script  src="{{ asset('site/js/resume.js') }}"></script><!-- SHORTCODE FUCTIONS  -->
@endsection
