@extends('web.users.user-menu')
@section('user.css')
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="{{ asset('user/vendor/html5shiv.js') }}"></script>
    <script src="{{ asset('user/vendor/respond.js') }}"></script>
@endsection
@section('user.section')
    <h2 class="main-title">@lang('web.settings')</h2>
    @include('components.web.error')
    <div class="bg-white card-box border-20">
        <form action="{{ route('web.user.settings_update',$user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-lg-6">
                    <div class="dash-input-wrapper mb-20">
                        <label for="name">@lang('web.name')</label>
                        <input id="name" name="name" type="text" placeholder="@lang('web.name')" value="{{ $user->name }}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="dash-input-wrapper mb-20">
                        <label for="parent">@lang('web.parent')</label>
                        <input id="parent" name="parent" type="text" placeholder="@lang('web.parent')" value="{{ $user->parent }}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="dash-input-wrapper mb-20">
                        <label for="surname">@lang('web.surname')</label>
                        <input id="surname" name="surname" type="text" placeholder="@lang('web.surname')" value="{{ $user->surname }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="dash-input-wrapper mb-20">
                        <label for="email">@lang('web.email')</label>
                        <input id="email" name="email" type="email" placeholder="@lang('web.email')" value="{{ $user->email }}">
                    </div>
                    <!-- /.dash-input-wrapper -->
                </div>
                <div class="col-6">
                    <div class="dash-input-wrapper mb-20">
                        <label for="phone">@lang('web.phone')</label>
                        <input id="phone" name="phone" type="text" placeholder="@lang('web.phone')" value="{{ $user->phone }}">
                    </div>
                    <!-- /.dash-input-wrapper -->
                </div>
                <div class="col-6">
                    <div class="dash-input-wrapper mb-20">
                        <label for="password">@lang('web.password')</label>
                        <input id="password" name="password" type="password" placeholder="*****">
                    </div>
                    <!-- /.dash-input-wrapper -->
                </div>
                <div class="col-6">
                    <div class="dash-input-wrapper mb-20">
                        <label for="re_password">@lang('web.re_password')</label>
                        <input id="re_password" name="re_password" type="password" placeholder="*****">
                    </div>
                </div>
                <div class="col-6">
                    <div class="dash-input-wrapper mb-20">
                        <div class="button-group d-inline-flex align-items-center mt-30">
                            <button type="submit" class="dash-btn-two tran3s me-3 rounded-3">@lang('web.save')</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('user.js')
@endsection
