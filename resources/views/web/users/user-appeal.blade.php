@extends('web.users.user-menu')
@section('user.css')
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="{{ asset('user/vendor/html5shiv.js') }}"></script>
    <script src="{{ asset('user/vendor/respond.js') }}"></script>
@endsection
@section('user.section')
    <div class="d-sm-flex align-items-center justify-content-between mb-40 lg-mb-30">
        <h2 class="main-title m0">Müraciət etdiklərim</h2>
    </div>
    <div class="bg-white card-box border-20">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="a1" role="tabpanel">
                <div class="table-responsive">
                    @if($jobs->isNotEmpty())
                        <table class="table job-alert-table">
                            <thead>
                            <tr>
                                <th scope="col">@lang('web.title')</th>
                                <th scope="col">Müraciət tarixi</th>
                                <th scope="col">@lang('web.created_at')</th>
                                <th scope="col">@lang('web.updated_at')</th>
                                <th scope="col">@lang('web.status')</th>
                                <th scope="col">@lang('web.settings')</th>
                            </tr>
                            </thead>
                            <tbody class="border-0">
                            @foreach($jobs as $key => $item)
                                <tr class="@if($item->status ==1) active @else expired @endif">
                                    <td>
                                        <div class="job-name fw-500">{{ json_decode($item->job, true)['title']['az'] }}</div>
                                        <div class="info1">{{ json_decode($item->company, true)['name']['az'] }} . {{ json_decode($item->city, true)['name']['az'] ?? null }}</div>
                                    </td>
                                    <td>{{ date('d.m.Y',strtotime($item->send_date)) }}</td>
                                    <td>{{ date('d.m.Y',strtotime($item->job->created_at)) }}</td>
                                    <td>{{ date('d.m.Y',strtotime($item->job->updated_at)) }}</td>
                                    <td>
                                        <div class="job-status">
                                            @if($item->status ==1)
                                                Baxılıb
                                            @else
                                                Baxılmayıb
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <div class="action-dots float-end">
                                            <button class="action-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span></span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="{{ route('web.job-details', $item->job_id) }}"><img src="{{ asset('user/images/lazy.svg') }}" data-src="{{ asset('user/userimage/icon/icon_19.svg') }}" alt="" class="lazy-img">Vakansiya</a></li>
                                                <li><a class="dropdown-item" href="{{ asset("uploads/job-contact/".$item->resume) }}"><img src="{{ asset('user/images/lazy.svg') }}" data-src="{{ asset('user/userimage/icon/icon_19.svg') }}" alt="" class="lazy-img">CV</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <div style="text-align: center;color: red;">
                            <h3>@lang('web.not_jobs_list')</h3>
                        </div>
                @endif
                <!-- /.table job-alert-table -->
                </div>
            </div>
        </div>
    </div>

    @if($jobs->isNotEmpty())
        {{ $jobs->links('web.users.pagination') }}
    @endif
@endsection
@section('user.js')
@endsection
