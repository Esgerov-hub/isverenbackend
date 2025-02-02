@extends('web.layouts.app')
@section('web.css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .center {
            position: absolute;
            top: 105%;
            left: 52%;
            transform: translate(-50%, -50%);
        }
    </style>
@endsection
@section('web.section')
    <section class="contact-main pb-8">
        <div class="container">
            <div class="overflow-hidden rounded" style="width: 100%">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d194473.18588939894!2d49.8549596!3d40.394592499999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d6bd6211cf9%3A0x343f6b5e7ae56c6b!2sBaku!5e0!3m2!1sen!2saz!4v1700761016091!5m2!1sen!2saz"  height="500"></iframe>
            </div>
            <div class="contact-info-main mt-8">
                <div class="contact-info">
                    <div class="section-title mb-6 w-75 mx-auto text-center">
                        <h2 class="mb-1">@lang('web.contact_us')</h2>
                    </div>
                    <div class="contact-info-content row mb-1">

                        {{--<div class="col-xl-6 col-lg-6 col-md-6 mb-4">
                            <div class="info-item bg-lgrey px-4 border-all d-flex align-items-center rounded">
                                <div class="info-icon me-4 bg-theme1 rounded p-4">
                                    <i class="fa fa-phone white fs-4"></i>
                                </div>
                                <div class="info-content">
                                    <h4 class="mb-1">@lang('web.phone_number')</h4>
                                    <p class="m-0">+977-444-666-888</p>
                                </div>
                            </div>
                        </div>--}}
                        <div class="col-xl-6 col-lg-6 col-md-6 mb-4 center">
                            <div class="info-item bg-lgrey px-4 border-all  d-flex align-items-center rounded">
                                <div class="info-icon me-4 bg-theme1 rounded p-4">
                                    <i class="fa fa-envelope white fs-4"></i>
                                </div>
                                <div class="info-content">
                                    <h4 class="mb-1">@lang('web.email')</h4>
                                    <p class="m-0">
                                        <a href="mailto:isveren.consulting@gmail.com" class="__cf_email__" >
                                            isveren.consulting@gmail.com
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="call-to-action bg-lgrey border-t" style="top: 27px;!important;">
        <div class="container">
            <div class="reservation-main mx-auto w-75">
                {{--                <div class="section-title mb-6 w-75 mx-auto text-center">--}}
                <div class="message"></div>
                {{--                </div>--}}
                <form id="contactForm" action="{{ route('web.contactform') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group mb-2">
                                <label>@lang('web.full_name')</label>
                                <input type="text" id="fullname" name="full_name">
                                @error('full_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group mb-2">
                                <label>@lang('web.phone')</label>
                                <input type="text" id="phone" name="phone">
                                @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group mb-2">
                                <label>@lang('web.email')</label>
                                <input type="email" id="email" name="email">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group mb-2">
                                <label>İstifadəçi tipi</label>
                                <select  id="type" name="type">
                                    <option value="company">Şirkət</option>
                                    <option value="users">İş axtaran</option>
                                </select>
                                @error('type')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mb-2">
                                <label>@lang('web.message')</label>
                                <textarea name="messages" id="comments"></textarea>
                                @error('message')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="comment-btn text-center" style="margin-bottom: 30px;">
                        <input type="submit" class="job-btn btn1 d-inline-block" id="submit2" value="@lang('web.send')">
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
@section('web.js')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            // Handle form submission with AJAX
            $('#contactForm').submit(function(e) {
                e.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response.success == true)
                        {
                            $(".message").append('<div class="btn-success" style="text-align: center;">'+response.message+'</div>');
                            $(".contactForm")[0].reset();
                            // $('#message').html(response.message);
                        }else{
                            // $(".message").append('<div class="btn-danger">'+response.error+'</div>');
                            $(".message").empty(); // Clear existing errors
                            $.each(response.error, function(index, value) {
                                $(".message").append('<div class="btn-danger" style="text-align: center;">' + value + '</div>');
                            });
                        }

                        // Handle success (e.g., show a success message)
                    },
                    error: function(error) {
                        $(".message").append('<div class="btn-danger" style="text-align: center;">'+error+'</div>');
                        $(".contactForm")[0].reset();
                        // Handle errors (e.g., show an error message)
                    }
                });
            });
        });
    </script>
@endsection


