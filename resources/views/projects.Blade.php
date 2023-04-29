@extends('index')

@section('content')
    <div class="mt-for-header" style="background: #ffffff;">
        <div class="mx-auto col-11 col-lg-10">
            <div class=" col-lg-4 col-sm-6 col-md-10 pt-5 title">Проекты</div>
            <div class="mt-2 mb-5 title-over">Главная — Проекты
            </div>
            <div class="text-montserrat d-flex pb-2">
                <button type="button" class="btn-custom">За все время</button>
                <button type="button" class="btn-custom ms-1">2021</button>
                <button type="button" class="btn-custom ms-1">2020</button>
                <button type="button" class="btn-custom ms-1">2019</button>

            </div>
            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-1 pb-5">
                @foreach ($projects as $project)
                    <a href="{{ route('ShowProjectDetailPage',$id = $project->id)}}" class="col-lg-4 col-md-6 col-12 pt-4 text-decoration-none">
                        <div class="px-2 bg-dark rounded-1 d-flex align-items-end"
                            style="height: 320px; background: url(storage/{{$project->anounce_image}}) no-repeat; background-size: cover;">
                            <div class="col-10 mx-auto py-5">
                                <div class="card-title-over mb-2">
                                    Системы вентиляции</div>
                                <div class="card-title text-white">{{ $project->title }}</div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
