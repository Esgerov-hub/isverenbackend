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
                            <label>Şirkət adı</label>
                            <div class="ls-inputicon-box">
                                <input class="form-control"name="name[az]" type="text" placeholder="İş Verən Consulting">
                                <i class="fs-input-icon fa fa-address-card"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Şirkət ünvanı</label>
                            <div class="ls-inputicon-box">
                                <div class="ls-inputicon-box">
                                    <input class="form-control" name="address[az]" type="text" placeholder="Type Address">
                                    <i class="fs-input-icon fa fa-map-marker-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Description-->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Şirkət haqqında daha ətraflı məlumat</label>
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
