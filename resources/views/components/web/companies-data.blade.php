{{--<style>
    .company-pro img {
        max-width: 60px !important;
    }

    @media (max-width: 768px) {
        .job-sidecontent {
            display: block !important;
        }

        .job-rate {
            justify-content: center !important;
        }

        .company-pro {
            padding-left: 0 !important;
        }

        .job-list {
            text-align: center;
            padding-left: 0 !important;
        }

        .job-title {
            text-align: center;
            padding-left: 0 !important;
        }

    }
</style>--}}
@foreach ($companies as $data)
    <div class="job-card box-shadow p-4 pb-1 rounded bg-white position-relative mb-4 text-center text-md-start">
        <div class="row align-items-center">
            <div class="col-lg-2 col-md-2">
                <div class="image-box bg-white pb-2 text-center rounded d-inline-block">
                    @if($data['logo'] && $data['logo']!='null.png')
                        <img alt="" src="{{ asset("uploads/companies/logo/".$data['logo']) }}"
                             style="width: 100px !important; border-radius: 0%;">
                    @else
                        <?php
                        $company_name = json_decode($data, true)['name']['az'] ?? "$";
                        $first = substr(trim($company_name),0,1);
                        if ($first == '"'){ $first = substr(trim($company_name),1,2);}
                        ?>
                        <div class="vacancies__icon" data-color="#4B21F3">
                            <div class="vc_icon_back" style="background-color:#4B21F3;"></div>
                            <span style="color:#4B21F3 !important;"> {{$first}} </span>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <h4 class="mb-2"><a class="name-job" href="{{ route('web.company-details',$data['id']) }}">{!! json_decode($data, true)['name']['az'] !!}</a></h4>
                {{--                <ul class="job-list">--}}
                {{--                    <li class="job-cats small">{!! json_decode($data, true)['description']['az'] !!}</li>--}}
                {{--                </ul>--}}
                {{-- <div class="rating-main d-md-flex align-items-center mb-2">
                     <div class="rating me-2">
                         <span class="fa fa-star checked"></span>
                         <span class="fa fa-star checked"></span>
                         <span class="fa fa-star checked"></span>
                         <span class="fa fa-star checked"></span>
                         <span class="fa fa-star checked"></span>
                     </div>
                     <span class="mb-0">210 rates(5.0)</span>
                 </div>--}}
                {{-- <ul class="job-list mb-2">
                     <li class="job-cats small rounded p-2 px-3 fulltime">Fulltime</li>
                     <li class="job-cats small rounded p-2 px-3 private">Private</li>
                     <li class="job-cats small rounded p-2 px-3 urgent">Urgent</li>
                 </ul>--}}
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="job-sidecontent text-md-end text-center">
                    <ul class="d-lg-flex {{-- float-lg-end--}}">
                        {{--                        <li class="d-inline-block me-lg-4" style="margin-right: 0rem !important;"><i class="fa fa-map-marker"></i> {!! json_decode($data, true)['address']['az'] !!} </li>--}}
                        {{--<li class="d-inline-block"><i class="fa fa-briefcase"></i> Software</li>--}}
                    </ul>
                    <a href="{{ route('web.company-details',$data['id']) }}" class="job-btn btn1 d-inline-block" style="background: #22ca46;!important;">{{$data['job_count']}} @lang('web.jobs')</a>
                </div>
            </div>
        </div>
    </div>
@endforeach
