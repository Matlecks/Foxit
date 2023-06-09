@extends('index')

@section('content')
    <div class="mt-for-header" style="background: #ffffff;">
        <div class="mx-auto col-11 col-lg-10">
            <div class=" col-lg-4 col-sm-6 col-md-10 pt-5 title">Проекты</div>
            <div class="mt-2 mb-5 title-over">Главная — Проекты
            </div>
            <div class="text-montserrat d-flex pb-2">
                <a href="{{route('projects')}}" class="btn-custom text-decoration-none">За все время</a>
                @foreach ($years as $year)
                    <a href="{{route('projects_filter',$date = $year->year)}}" class="btn-custom ms-1">{{ $year->year }}</a>
                @endforeach
            </div>
            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-1 pb-5">
                @foreach ($projects as $project)
                    <a href="{{ route('ShowProjectDetailPage', $id = $project->id) }}"
                        class="col-lg-4 col-md-6 col-12 pt-4 text-decoration-none">
                        <div class="px-2 bg-dark border-custom rounded-1 d-flex align-items-end justify-content-start"
                            style="height: 320px; background: url(/storage/{{ $project->anounce_image }}) no-repeat; background-size: cover;">
                            <div class="ms-5 py-2 px-4 rounded-2 mb-5{{-- rounded-2 py-2 px-4 --}}"
                                style="background: #ffffff;">
                                <div class="card-title-over" style="background: #ffffff;">
                                    {{ $project->sphere }}</div>
                                <div class="card-title text-black" style="background: #ffffff;">
                                    {{ $project->title }}</div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
