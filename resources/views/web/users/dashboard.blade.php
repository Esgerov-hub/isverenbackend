@extends('web.users.user-menu')
@section('user.css')
@endsection
@section('user.section')
    <h2 class="main-title">@lang('web.dashboard')</h2>
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="dash-card-one bg-white border-30 position-relative mb-15">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <div class="icon rounded-circle d-flex align-items-center justify-content-center order-sm-1">
                        <img src="{{ asset('user/images/lazy.svg') }}" data-src="{{ asset('user/userimage/icon/icon_12.svg') }}" alt="" class="lazy-img"></div>
                    <div class="order-sm-0">
                        <div class="value fw-500">07</div>
                        <span>Posted Job</span>
                    </div>
                </div>
            </div>
            <!-- /.dash-card-one -->
        </div>
        <div class="col-lg-3 col-6">
            <div class="dash-card-one bg-white border-30 position-relative mb-15">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <div class="icon rounded-circle d-flex align-items-center justify-content-center order-sm-1"><img src="{{ asset('user/images/lazy.svg') }}" data-src="{{ asset('user/userimage/icon/icon_13.svg') }}" alt="" class="lazy-img"></div>
                    <div class="order-sm-0">
                        <div class="value fw-500">03</div>
                        <span>Shortlisted</span>
                    </div>
                </div>
            </div>
            <!-- /.dash-card-one -->
        </div>
        <div class="col-lg-3 col-6">
            <div class="dash-card-one bg-white border-30 position-relative mb-15">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <div class="icon rounded-circle d-flex align-items-center justify-content-center order-sm-1"><img src="{{ asset('user/images/lazy.svg') }}" data-src="{{ asset('user/userimage/icon/icon_14.svg') }}" alt="" class="lazy-img"></div>
                    <div class="order-sm-0">
                        <div class="value fw-500">1.7k</div>
                        <span>Application</span>
                    </div>
                </div>
            </div>
            <!-- /.dash-card-one -->
        </div>
        <div class="col-lg-3 col-6">
            <div class="dash-card-one bg-white border-30 position-relative mb-15">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <div class="icon rounded-circle d-flex align-items-center justify-content-center order-sm-1"><img src="{{ asset('user/images/lazy.svg') }}" data-src="{{ asset('user/userimage/icon/icon_15.svg') }}" alt="" class="lazy-img"></div>
                    <div class="order-sm-0">
                        <div class="value fw-500">04</div>
                        <span>Save Candidate</span>
                    </div>
                </div>
            </div>
            <!-- /.dash-card-one -->
        </div>
    </div>

@endsection
@section('user.js')
@endsection
