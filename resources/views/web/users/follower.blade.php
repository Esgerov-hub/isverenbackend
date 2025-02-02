@extends('web.users.user-menu')
@section('user.css')
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="{{ asset('web/vendor/html5shiv.js') }}"></script>
    <script src="{{ asset('web/vendor/respond.js') }}"></script>
    <style>
        .active-like {
            display: flex;
            align-items: center;
            justify-content: end;
            padding-top: 2px;
            margin-left: 25px;
            border-radius: 12px;
            color: #061e40;
            width: 40px;
            height: 40px;
            /*margin-right: 9px;*/
            /*background-color: #f3f6f9;*/
            /*position: absolute;*/
            /*right: 25px;*/
            /*bottom: 15px;*/
        }

        .active-like {
            background-position: center;
            background-repeat: no-repeat;
            border-radius: 8px;
            background-image: url("{{ asset('web/assets/images/heart-dislike.png') }}");

            background-size: 18px;
            opacity: 1;
        }

        .active-dislike {
            display: flex;
            align-items: center;
            justify-content: end;
            padding-top: 2px;
            margin-left: 25px;
            border-radius: 12px;
            color: #061e40;
            width: 40px;
            height: 40px;
            /*margin-right: 9px;*/
            /*background-color: #f3f6f9;*/
            /*position: absolute;*/
            /*right: 25px;*/
            /*bottom: 15px;*/
        }

        .active-dislike {
            background-position: center;
            background-repeat: no-repeat;
            border-radius: 8px;
            background-image: url("{{ asset('web/assets/images/heart-like.png') }}");

            background-size: 18px;
            opacity: 1;
        }


    </style>
@endsection
@section('user.section')
    <div class="d-flex align-items-center justify-content-between mb-40 lg-mb-30">
        <h2 class="main-title m0">@lang('web.followers')</h2>
    </div>
    <div class="wrapper">
        @foreach($jobs as $key => $item)
        <div class="job-list-one style-two position-relative mb-20">
            <div class="row justify-content-between align-items-center">
                <div class="col-xxl-3 col-lg-4">
                    <div class="job-title d-flex align-items-center">
                        @if(json_decode($item->company, true)['logo'] && json_decode($item->company, true)['logo'] !='null.png')
                            <a href="{{ route('web.job-details', $item->job_id) }}" class="logo">
                                <img src="{{ asset('user/userimage/images/lazy.svg') }}" data-src="{{ asset("uploads/companies/logo/".json_decode($item->company, true)['logo']) }}" alt="" class="lazy-img m-auto">
                            </a>
                        @endif
                        <a href="{{ route('web.job-details', $item->job_id) }}" class="title fw-500 tran3s">{!! json_decode($item, true)['title']['az'] ?? null !!}</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 ms-auto">
                    <a href="{{ route('web.job-details', $item->job_id) }}" class="job-duration fw-500">{{ json_decode($item->jobType, true)['name']['az'] ?? null }}</a>
                    <div class="job-salary"><span class="fw-500 text-dark">{!! $item->price ?? '-' !!}</span></div>
                </div>
                <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6 ms-auto xs-mt-10">
                    <div class="job-location">
                        <a href="{{ route('web.job-details', $item->job_id) }}">{{ json_decode($item->city, true)['name']['az'] ?? null }}</a>
                    </div>
                    <div class="job-category">
                        <a href="{{ route('web.job-details', $item->job_id) }}">{!! json_decode($item->company, true)['name']['az'] ?? null !!},</a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="action-dots float-end">
                        <ul class="list-unstyled hstack gap-1 mb-0">
                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Beyenmeden cixar">
                                @php
                                    $userInteraction = auth('web')
                                        ->user()
                                        ->followers()
                                        ->where('job_id', $item->job_id)
                                        ->first();

                                    $defaultInteractionType = $userInteraction->interaction_type ?? null;
                                @endphp
                                <a href="javascript:void(0)" data-job-id="{{ $item->job_id }}"
                                   class="interaction-button {{ $defaultInteractionType === 'like' ? 'active-dislike' : 'active-like' }}"
                                   data-job-id="{{ $item->job_id }}" id="test"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @if($jobs->isNotEmpty())
        {{ $jobs->links('web.users.pagination') }}
    @endif
@endsection
@section('user.js')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.interaction-button').on('click', function() {

                let button = $(this);
                let jobId = button.data('job-id');
                let interactionType = '';

                if (button.hasClass('active-like')) {
                    interactionType = 'like';
                } else if (button.hasClass('active-dislike')) {
                    interactionType = 'dislike';
                }

                disablePost = true;

                $.ajax({
                    type: 'POST',
                    url: '/interact',
                    data: {
                        job_id: jobId,
                        interaction: interactionType,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(data) {
                        console.log(data);
                        let interactionType = data.interaction;
                        console.log(interactionType);

                        button.removeClass('active-like active-dislike');

                        if (interactionType === 'like') {
                            button.attr('class', 'interaction-button active-dislike');
                        } else if (interactionType === 'dislike') {
                            button.attr('class', 'interaction-button active-like');
                        }

                        disablePost = false;
                    }
                });
            });
        });
    </script>
@endsection
