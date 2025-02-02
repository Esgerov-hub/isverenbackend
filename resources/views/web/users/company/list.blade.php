@extends('web.users.user-menu')
@section('user.css')
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="{{ asset('web/vendor/html5shiv.js') }}"></script>
    <script src="{{ asset('web/vendor/respond.js') }}"></script>
@endsection
@section('user.section')
    <div class="d-flex align-items-center justify-content-between mb-40 lg-mb-30">
        <h2 class="main-title m0">@lang('web.companies')</h2>
        <a class="new-message-compose rounded-circle" href="{{ route('web.user.company.create') }}">+</a>
    </div>
    <div class="wrapper">
        @foreach($companies as $key => $item)
            <div class="job-list-one style-two position-relative mb-20">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xxl-3 col-lg-4">
                        <div class="job-title d-flex align-items-center">
                            @if(!empty($item['logo']) && $item['logo'] != 'null.png')
                            <a class="logo"><img src="{{ asset('user/images/lazy.svg') }}" data-src="{{ asset("uploads/companies/logo/".$item['logo']) }}" alt="" class="lazy-img m-auto"></a>
                            @endif
                            <a class="title fw-500 tran3s">{!! json_decode($item, true)['name']['az'] ?? null !!}</a>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6 ms-auto xs-mt-10">
                        <div class="job-location">
                            <a >{!! json_decode($item, true)['address']['az'] ?? null !!}</a>
                        </div>
                        <div class="job-category">
                            <a >{!! json_decode($item, true)['description']['az'] ?? null !!}</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 ms-auto">
                        <div class="job-location">
                            <a  class="job-duration fw-500">{{ ($item['status'] ==1)? 'Aktiv': 'Aktiv deyil' }}</a>
                        </div>
                    </div>
                  {{--  <div class="col-lg-2 col-md-4">
                        <div class="action-dots float-end">
                            <button class="action-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="{{ route('web.job-details',$item->id) }}"><img src="../images/lazy.svg" data-src="images/icon/icon_20.svg" alt="" class="lazy-img"> Edit</a></li>
                                <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_21.svg" alt="" class="lazy-img"> Delete</a></li>
                            </ul>
                        </div>
                    </div>--}}
                </div>
            </div>
        @endforeach
    </div>
    @if($companies->isNotEmpty())
        {{ $companies->links('web.users.pagination') }}
    @endif
@endsection
@section('user.js')
@endsection
