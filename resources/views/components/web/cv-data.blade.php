@if(!empty($cv))
    @foreach($cv as $data)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="job-card border-all p-4 rounded bg-white position-relative">
                <div class="mb-3 text-center">
                    <img src="{{ !empty($data['image']) ? asset('uploads/cv/'.$data['image']) : asset('user/user.png') }}"
                         alt="{{ $data['name'] }} {{ $data['surname'] }}"
                         class="rounded-circle"
                         style="width: 100px; height: 100px; object-fit: cover; border: 2px solid #ddd; padding: 3px;">
                </div>
                <div class="job-block-info text-center">
                    <h4 class="mb-2">
                        <a class="name-job text-dark font-weight-bold"
                           href="{{ route('web.cv-details', $data['id']) }}">
                            {{ $data['name'] }} {{ $data['surname'] }}
                        </a>
                    </h4>
                    <ul class="job-list mb-3">
                        <li class="job-cats small text-muted">
                            @if(!empty(json_decode($data->profession, true)['name']['az']))
                            {{ json_decode($data->profession, true)['title']['az']}}
                            @else
                            {{json_decode($data->category, true)['name']['az']}}
                            @endif
                        </li>
                    </ul>
                    <ul class="d-flex flex-wrap justify-content-center gap-2 mb-3">
                        @foreach($data['work_skills'] as $index => $skill)
                            @if($index < 3)
                                <li>
                                    <span class="bg-light rounded px-3 py-1 small">
                                        {{ $skill }}
                                    </span>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-6 text-start">
                            <span>
                                <i class="fa fa-map-marker text-secondary me-1"></i>
                                {{ json_decode($data->city, true)['name']['az'] }}
                            </span>
                        </div>
                        <div class="col-6 text-end">
                            <span class="job-price fw-bold text-success">
                                {{ $data['min_salary'] }} {{ !empty($data['max_salary']) ? '-' . $data['max_salary'] : '' }} AZN
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif
