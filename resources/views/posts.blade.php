@extends('index')

@section('content')
    <div class="mt-for-header" style="background: #ffffff;">
        <div class="mx-auto col-11 col-lg-10">
            <div class="col-lg-4 col-sm-6 col-md-10 pt-5 title">Новости</div>
            <div class="mt-2 mb-5 title-over">Главная — Новости
            </div>

            <div class="my-4 title-preview">Специализируемся на
                услугах различных
                направлений — от проектирования инженерных систем
                и монтажа металлоконструкций до аренды спецтехники и поставок медицинского
                оборудования.
                Хотите узнать подробнее об условиях сотрудничества? Свяжитесь с нами по почте или
                телефону. Проконсультируем, ответим на вопросы и подготовим индивидуальные условия
                сотрудничества.</div>
            <div class="mt-4 border-custom text-montserrat">
                <a href="{{route('news')}}" class="btn fs-14 border-0 fw-bolder px-4 py-3"
                    style="border-color: #E5E5E5;">За все время</a>
                @foreach ($years as $year)
                    <a href="{{ route('news_filter', $date = $year->year) }}"
                        class="btn fs-14 border-0 fw-bold px-4 py-3 ms-1"
                        style="border-color: #E5E5E5;">{{ $year->year }}</a>
                @endforeach
            </div>
            <div class="row row-cols-lg-4 row-cols-md-2 row-cols-sm-1 pb-5">
                @foreach ($posts as $post)
                    <a href="{{ route('new_detail', $id = $post->id) }}"
                        class="col-lg-3 col-md-6 col-12 mt-lg-4 mt-md-0 mt-4 text-decoration-none">
                        <div class="border rounded-1 flex-column" style="height: 400px;">
                            <div class="col-12 rounded-1"
                                style="height: 233px; background: url(/storage/{{ $post->anounce_image }}) no-repeat; background-size: cover; background-position: center;">
                            </div>
                            <div class="col-10 mx-auto py-3">
                                <div class="card-title" style="color: #333333;">{{ $post->title }}
                                </div>
                                <div class="card-date mt-5"> {{ $post->created_at = date('d.F.y') }}
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
