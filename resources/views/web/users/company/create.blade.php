@extends('web.users.user-menu')
@section('user.css')
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="{{ asset('user/vendor/html5shiv.js') }}"></script>
    <script src="{{ asset('user/vendor/respond.js') }}"></script>
@endsection
@section('user.section')
    <h2 class="main-title">Şirkət əlavə et</h2>
    @include('components.web.error')
    <div class="bg-white card-box border-20">
        <form action="{{ route('web.user.company.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="dash-input-wrapper mb-20">
                        <label for="name">@lang('web.name')</label>
                        <input id="name" name="name[az]" type="text" placeholder="Şirkət adı">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="dash-input-wrapper mb-20">
                        <label for="address">Ünvan</label>
                        <input id="address"  name="address[az]"  type="text" placeholder="Şirkət ünvanı">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="dash-input-wrapper mb-20">
                        <label for="surname">@lang('web.description')</label>
                        <textarea name="description[az]" rows="3" placeholder="Şirkət haqqında"></textarea>
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
