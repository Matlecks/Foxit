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
                <button type="button" class="btn fs-14 border-0 fw-bolder px-4 py-3"
                    style="border-color: #E5E5E5;">За все время</button>
                <button type="button" class="btn fs-14 border-0 fw-bold px-4 py-3 ms-1"
                    style="border-color: #E5E5E5;">2021</button>
                <button type="button" class="btn fs-14 border-0 fw-bold px-4 py-3 ms-1"
                    style="border-color: #E5E5E5;">2020</button>
                <button type="button" class="btn fs-14 border-0 fw-bold px-4 py-3 ms-1"
                    style="border-color: #E5E5E5;">2019</button>
            </div>
            <div class="row row-cols-lg-4 row-cols-md-2 row-cols-sm-1 pb-5">
                <div class="col-lg-6 col-md-6 col-12 mt-4">
                    <div class="px-2 bg-dark rounded-1 d-flex align-items-end"
                        style="height: 400px; background: url(https://i.pinimg.com/564x/90/00/b8/9000b81ffa06e691cf1bc2c7f17c4e71.jpg);">
                        <div class="col-10 mx-auto py-5">
                            <div class="mb-2 card-date">
                                15 февраля 2021 </div>
                            <div class="text-white fs-24 text-roboto">Расширяем границы — новый филиал в
                                Москве
                            </div>
                        </div>
                    </div>
                </div>
                @foreach ($posts as $post)
                    <a href="{{ route('new_detail',$id = $post->id) }}" class="col-lg-3 col-md-6 col-12 mt-lg-4 mt-md-0 mt-4 text-decoration-none">
                        <div class="border rounded-1 flex-column" style="height: 400px;">
                            <div class="col-12 rounded-1"
                                style="height: 233px; background: url(storage/{{$post->anounce_image}}) no-repeat; background-size: cover; background-position: center;">
                            </div>
                            <div class="col-10 mx-auto py-3">
                                <div class="card-title" style="color: #333333;">{{$post->title}}</div>
                                <div class="card-date mt-5"> {{$post->created_at}}
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
