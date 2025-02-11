@extends('web.users.user-menu')
@section('user.css')
@endsection
@section('user.section')
    <div class="col-xl-9 col-lg-8 col-md-12 m-b30">
        <!--Filter Short By-->
        <div class="twm-right-section-panel site-bg-gray">
            <form>
                <!--Basic Information-->
                <div class="panel panel-default">
                    <div class="panel-body wt-panel-body p-a20 m-b30 ">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>Ad</label>
                                    <div class="ls-inputicon-box">
                                        <input class="form-control" name="name" type="text" placeholder="Adınız">
                                        <i class="fs-input-icon fa fa-user "></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>Soyad</label>
                                    <div class="ls-inputicon-box">
                                        <input class="form-control" name="surname" type="text" placeholder="Soyadınız">
                                        <i class="fs-input-icon fa fa-user "></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>Əlaqə nömrəsi</label>
                                    <div class="ls-inputicon-box">
                                        <input class="form-control" name="phone" type="text" placeholder="+99499 702 70 93">
                                        <i class="fs-input-icon fa fa-phone-alt"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>E-poçt ünvanı</label>
                                    <div class="ls-inputicon-box">
                                        <input class="form-control" name="email" type="email" placeholder="isveren.consulting@gmail.com">
                                        <i class="fs-input-icon fas fa-at"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6  col-md-12">
                                <div class="form-group">
                                    <label>Cari şifrə</label>
                                    <div class="ls-inputicon-box">
                                        <input class="form-control wt-form-control" name="current_password" type="password" placeholder="*****">
                                        <i class="fs-input-icon fa fa-asterisk "></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-md-12">
                                <div class="form-group">
                                    <label>Yeni şifrə</label>
                                    <div class="ls-inputicon-box">
                                        <input class="form-control wt-form-control" name="password" type="password" placeholder="*****">
                                        <i class="fs-input-icon fa fa-asterisk"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-md-12">
                                <div class="form-group">
                                    <label>Yeni şirfə təkrarı</label>
                                    <div class="ls-inputicon-box">
                                        <input class="form-control wt-form-control" name="re_password" type="password" placeholder="*****">
                                        <i class="fs-input-icon fa fa-asterisk"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="text-left">
                                    <button type="submit" class="site-button">Yadda saxla</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('user.js')
@endsection
