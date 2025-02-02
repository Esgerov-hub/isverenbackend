@extends('web.users.user-menu')
@section('user.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/style.min.css') }}" media="all">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/responsive.css') }}" media="all">
@endsection
@section('user.section')
    <h2 class="main-title">@lang('web.jobs_add')</h2>
    @include('components.web.error')
    <div class="bg-white card-box border-20">
        <form action="{{ route('web.user.jobs.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-4">
                    <div class="dash-input-wrapper mb-20">
                        <label for="title">@lang('web.title')</label>
                        <input id="title" name="title[az]" type="text" placeholder="@lang('web.title')" required>
                    </div>
                </div>
                <div class="col-lg-14">
                    <div class="dash-input-wrapper mb-20">
                        <label for="description">@lang('web.description')</label>
                        <textarea class="summernote-height form-control" name="description[az]" rows="3" id="description" placeholder="@lang('web.description')"></textarea>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="dash-input-wrapper mb-20">
                        <label for="min_salary">@lang('web.min_salary')</label>
                        <input type="number" id="min_salary" placeholder="@lang('web.min_salary')" name="min_salary" />
                    </div>
                </div>
                <div class="col-6">
                    <div class="dash-input-wrapper mb-20">
                        <label for="max_salary">@lang('web.max_salary')</label>
                        <input type="number"  id="max_salary" placeholder="@lang('web.max_salary')" name="max_salary" />
                    </div>
                    <!-- /.dash-input-wrapper -->
                </div>
                <div class="col-6">
                    <div class="dash-input-wrapper mb-20">
                        <label for="category_id">@lang('web.category')</label>
                        <select style="height: 55px; line-height: 55px; letter-spacing: -0.16px; border: 1px solid #e5e5e5;border-radius: 7px; padding: 0 380px 0 20px; !important;" name="category_id" id="category_id" required>
                            <option value="">Əsas kateqoriyanı seç</option>
                            @if (!empty($categories))
                                @foreach ($categories as $key => $cat)
                                    @if ($cat->parent_id == null)
                                        <option value="{{ $cat->id }}"> {!! json_decode($cat, true)['name']['az'] !!}</option>
                                    @endif
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <!-- /.dash-input-wrapper -->
                </div>
                <div class="col-6">
                    <div class="dash-input-wrapper mb-30">
                        <label>Kateqorya</label>
                        <select style="height: 55px; line-height: 55px; letter-spacing: -0.16px; border: 1px solid #e5e5e5;border-radius: 7px; padding: 0 428px 0 20px; !important;" name="sub_category_id">
                            <option value="">Kateqoriyanı seç</option>
                            <option value=""></option>
                        </select>
                    </div>
                    <!-- /.dash-input-wrapper -->
                </div>
                <div class="col-6">
                    <div class="dash-input-wrapper mb-20">
                        <label for="city_id">@lang('web.city_choose')</label>
                        <select style="height: 55px; line-height: 55px; letter-spacing: -0.16px; border: 1px solid #e5e5e5;border-radius: 7px; padding: 0 380px 0 20px; !important;"  name="city_id" id="city_id" required>
                            <option value="">@lang('web.city_choose')</option>
                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}">{{ json_decode($city, true)['name']['az'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="dash-input-wrapper mb-20">
                        <label for="job_type_id">@lang('web.type_choose')</label>
                        <select class="select2" style="height: 55px; line-height: 55px; letter-spacing: -0.16px; border: 1px solid #e5e5e5;border-radius: 7px; padding: 0 380px 0 20px; !important;" name="job_type_id" id="job_type_id" required>
                            <option value="">@lang('web.type_choose')</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}">{{ json_decode($type, true)['name']['az'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="dash-input-wrapper mb-20">
                        <label for="company_id">@lang('web.companies')</label>
                        <select class="select2" style="height: 55px; line-height: 55px; letter-spacing: -0.16px; border: 1px solid #e5e5e5;border-radius: 7px; padding: 0 380px 0 20px; !important;" name="company_id" id="company_id" required>
                            <option value="">@lang('web.company_choose')</option>
                            @foreach ($companies as $company)
                                <option value="{{ $company->id }}"> {{ json_decode($company, true)['name']['az'] }}</option>
                            @endforeach
                        </select>
                        <a href="{{route(('web.user.company.create'))}}" style="padding-left: 35px; padding-top: 6px; font-size: 15px; color: #061e40 ">Əlavə et</a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="dash-input-wrapper mb-20">
                        <label for="email">@lang('web.email')</label>
                        <input type="text" id="email" placeholder="@lang('web.email')" name="email"/>
                    </div>
                </div>
                <div class="col-6">
                    <div class="dash-input-wrapper mb-20">
                        <label for="phone">@lang('web.phone')</label>
                        <input type="text" id="phone" placeholder="@lang('web.phone')" name="phone"/>
                    </div>
                </div>
                <div class="col-6">
                    <div class="dash-input-wrapper mb-20">
                        <label for="created_at">Əlavə edilmə tarixi</label>
                        <input type="datetime-local" id="phone" placeholder="Əlavə edilmə tarixi" name="created_at"/>
                    </div>
                </div>
                <div class="col-6">
                    <div class="dash-input-wrapper mb-20">
                        <label for="updated_at">Bitmə tarixi</label>
                        <input type="datetime-local" id="updated_at" placeholder="Bitmə tarixi" name="updated_at"/>
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
    <script>
        $(document).ready(function() {
            $('#category_id').change(function() {
                var id = $(this).find(":selected").attr('value');
                $.ajax({
                    url: window.location.protocol + '//isveren.az/user/sub-category/' + id,
                    type: 'GET',
                    dataType: 'json',

                }).done(function(data) {
                    var select = $('select[name=sub_category_id]');
                    select.empty();
                    $.each(data, function(key, value) {
                        select.append('<option value=' + value.id + '>' +
                            decodeURIComponent(value.name['az']) + '</option>');

                        console.log(select)
                    });
                })
            });
        });
    </script>
    <!-- bootstrap datepicker -->

    <!-- WOW js -->
    <script src="{{ asset('user/vendor/wow/wow.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('user/vendor/slick/slick.min.js') }}"></script>
    <!-- Fancybox -->
    <script src="{{ asset('user/vendor/fancybox/dist/jquery.fancybox.min.js') }}"></script>
    <!-- Lazy -->
    <script src="{{ asset('user/vendor/jquery.lazy.min.js') }}"></script>
    <!-- js Counter -->
    <script src="{{ asset('user/vendor/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('user/vendor/jquery.waypoints.min.js') }}"></script>
    <!-- Nice Select -->
    <script src="{{ asset('user/vendor/nice-select/jquery.nice-select.min.js') }}"></script>
    <!-- validator js -->
    <script src="{{ asset('user/vendor/validator.js') }}"></script>
    <!-- Theme js -->
{{--    <script src="{{ asset('user/js/theme.js') }}"></script>--}}
    <script src="{{ asset('summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('summernote/editor_summernote.js') }}"></script>
@endsection
