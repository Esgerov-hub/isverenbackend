@extends('web.users.user-menu')
@section('user.css')
@endsection
@section('user.section')
    <div class="col-xl-9 col-lg-8 col-md-12 m-b30">
        <!--Filter Short By-->
        <div class="twm-right-section-panel site-bg-gray">
            <div class="twm-dash-b-blocks">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 mb-3">
                        <div class="panel panel-default">
                            <div class="panel-body wt-panel-body dashboard-card-2 block-gradient">
                                <div class="wt-card-wrap-2">
                                    <div class="wt-card-icon-2"><i class="flaticon-job"></i></div>
                                    <div class="wt-card-right wt-total-active-listing counter ">25</div>
                                    <div class="wt-card-bottom-2 ">
                                        <h4 class="m-b0">Vakansiyalarim</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 mb-3">
                        <div class="panel panel-default">
                            <div class="panel-body wt-panel-body dashboard-card-2 block-gradient-2">
                                <div class="wt-card-wrap-2">
                                    <div class="wt-card-icon-2"><i class="flaticon-resume"></i></div>
                                    <div class="wt-card-right  wt-total-listing-view counter ">435</div>
                                    <div class="wt-card-bottom-2">
                                        <h4 class="m-b0">Muraciet etdiyim vakansiyalar</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 mb-3">
                        <div class="panel panel-default">
                            <div class="panel-body wt-panel-body dashboard-card-2 block-gradient-3">
                                <div class="wt-card-wrap-2">
                                    <div class="wt-card-icon-2"><i class="flaticon-envelope"></i></div>
                                    <div class="wt-card-right wt-total-listing-review counter ">28</div>
                                    <div class="wt-card-bottom-2">
                                        <h4 class="m-b0">Muraciet edenler</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 mb-3">
                        <div class="panel panel-default">
                            <div class="panel-body wt-panel-body dashboard-card-2 block-gradient-4">
                                <div class="wt-card-wrap-2">
                                    <div class="wt-card-icon-2"><i class="flaticon-job-search"></i></div>
                                    <div class="wt-card-right wt-total-listing-bookmarked counter ">18</div>
                                    <div class="wt-card-bottom-2">
                                        <h4 class="m-b0">Beyendiyim vakansiyalar</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="twm-pro-view-chart-wrap">
                <div class="row">
                    <div class="col-lg-12 col-md-12 mb-4">
                        <div class="panel panel-default site-bg-white m-t30">
                            <div class="panel-heading wt-panel-heading p-a20">
                                <h4 class="panel-tittle m-a0"><i class="far fa-bell"></i>Bildirişlər</h4>
                            </div>
                            <div class="panel-body wt-panel-body">

                                <div class="dashboard-list-box list-box-with-icon">
                                    <ul>
                                        <li>
                                            <i class="fa fa-envelope text-success list-box-icon"></i> <a href="#" class="text-success">Ənvər Əsgərov</a> paylaşdıqınız vakansiya müraciət etdi
                                            <a href="#" class="close-list-item color-lebel clr-red">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="fa fa-suitcase text-primary list-box-icon"></i>
                                            <a href="#" class="text-primary">PHP Developer </a> vakansiyanız
                                            aktiv edildi
                                            <a href="#" class="close-list-item color-lebel clr-red">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <i class="fa fa-bookmark text-warning list-box-icon"></i>
                                            Əsgərov Ənvər tərəfindən
                                            <a href="#" class="text-warning">SEO </a>
                                            vakansiyanız yadda saxlanıldı
                                            <a href="#" class="close-list-item color-lebel clr-red">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </li>
                                    </ul>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('user.js')
@endsection
