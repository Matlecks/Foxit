@extends('index')

@php
    use App\Models\Services_tree;
@endphp
@section('content')
    <div style="background: #ffffff;">
        <div class="mt-for-header mx-auto col-11 col-lg-10">
            <div class="col-lg-4 col-sm-6 col-md-10 pt-5 title">Услуги</div>
            <div class="mt-2 mb-5 title-over">Главная — Услуги
            </div>
            @if (isset($sections))
                <div class="d-flex justify-content-between row row-cols-lg-2 row-cols-md-1">
                    @foreach ($sections as $section)
                        <div class="col-lg-6 col-12 px-3 mb-4">
                            <div class="border-custom">
                                <div class="p-5 d-lg-flex d-md-flex">
                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="rounded-circle" style="height: 100px; width: 100px;">
                                            <img src="/storage/{{ $section->anounce_image }}"
                                                class="rounded-circle"
                                                style="width: 100%; height: 100%; object-fit: cover;">
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-12 mt-lg-0 mt-md-0 mt-5">
                                        <a href="{{ route('servicessubsections', $section->id) }}"
                                            class="text-decoration-none" style="color:#000000">
                                            <div class="card-title">{{ $section->title }}</div>
                                        </a>
                                        <div class="text-primary py-2">Landing Page - Сайт визитка -
                                            Персональный
                                            сайт
                                        </div>
                                        <div class="title-preview mt-3 w-75">
                                            {{ $section->anounce_text }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @if ($services != null)
                    <div class="d-flex justify-content-between">
                        <div class="col-3 d-none d-md-none d-lg-block">
                            <div style="position: sticky; top: 50px;">
                                <div class="btn-group-vertical col-12 h-50 fs-15 fw-light text-montserrat my-4"
                                    style="position: sticky; top: 50px;">
                                    @foreach ($sections as $section)
                                        <a href="" type="button"
                                            class="btn border-custom ps-3 py-3 text-start">{{ $section->title }}</a>
                                    @endforeach
                                    <a href="" type="button"
                                        class="btn border-custom ps-3 py-3 text-start">фывыфв</a>
                                    <a href="" type="button"
                                        class="btn border-custom ps-3 py-3 text-start">фывыфвфыв</a>
                                </div>
                                <div class="col-12 rounded-2"
                                    style="min-height: 450px; background: #fafafa url(https://i.pinimg.com/564x/b6/ba/85/b6ba855d3f51f5fb3b5aba54c571aca3.jpg);background-size: cover;
                                    background-position: center;
                                    background-repeat: no-repeat;">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-12 d-flex flex-wrap">
                            @foreach ($services as $service)
                                <div class="col-lg-4 col-md-6 col-sm-12 my-4 px-lg-3 px-md-2 px-0">
                                    <div class="border-custom bg-white">
                                        <div class=""
                                            style="height: 235px; background: #fafafa;border-top-left-radius: 4px; border-top-right-radius: 4px;">
                                            <img class=""
                                                style="width: 100%; height: 100%; object-fit: cover; border-top-left-radius: 4px; border-top-right-radius: 4px;"
                                                src="/storage/{{ $service->anounce_image }}"
                                                height="235">
                                        </div>
                                        <div class="col-9 mx-auto text-montserrat">
                                            <div class="pt-5 card-title-over">
                                                @if (Services_tree::find($service->section_id)->id == 1)
                                                @else
                                                    {{ Services_tree::find($service->section_id)->title }}
                                                @endif
                                            </div>
                                            <div class="my-3 card-title"><a
                                                    href="{{ route('ShowDetailPage', $id = $service->id) }}"
                                                    class="text-decoration-none text-black">{{ $service->title }}</a>
                                            </div>

                                            <div class="title-preview">{!! $service->anounce_text !!}
                                            </div>

                                            <div class="my-4">от {{ $service->cost }}</div>
                                            <a href="#"
                                                class="btn btn-outline-primary mt-3 mb-4 col-12 fw-bolder text-montserrat fs-14">Заказать</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            @elseif(isset($subsections))
                <div class=""
                    style="display: grid; grid-gap: 20px; grid-template-columns: repeat(auto-fill,minmax(310px,1fr));">
                    @foreach ($subsections as $subsection)
                        <div class="col-12  mb-4">
                            <div class="border-custom text-decoration-none">
                                <div class="px-3 py-3 d-lg-flex d-md-flex align-items-center">
                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="rounded-circle" style="height: 50px; width: 50px;">
                                            <img src="/storage/{{ $subsection->anounce_image }}"
                                                class="rounded-circle"
                                                style="width: 100%; height: 100%; object-fit: cover;">
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-12 mt-lg-0 mt-md-0 mt-5 text">
                                        <a href="{{ route('servicessubsections', $subsection->id) }}"
                                            class="card-title text-decoration-none"
                                            style="color:#000000">
                                            {{ $subsection->title }}
                                        </a>
                                        <div class="title-preview mt-3">{{ $subsection->anounce_text }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="services_list">
                    @if ($services != null)
                        <div
                            class="my-5 d-flex justify-content-between row row-cols-lg-4 row-cols-md-2 row-cols-sm-1">
                            @foreach ($services as $service)
                                <div class="col-lg-3 col-md-6 col-sm-12 my-4">
                                    <div class="border-custom bg-white">
                                        <div class=""
                                            style="height: 235px; background: #fafafa;border-top-left-radius: 4px; border-top-right-radius: 4px;">
                                            <img class=""
                                                style="width: 100%; height: 100%; object-fit: cover; border-top-left-radius: 4px; border-top-right-radius: 4px;"
                                                src="/storage/{{ $service->anounce_image }}"
                                                height="235">
                                        </div>
                                        <div class="col-9 mx-auto text-montserrat">
                                            <div class="pt-5 card-title-over">
                                                @if (Services_tree::find($service->section_id)->id == 1)
                                                @else
                                                    {{ Services_tree::find($service->section_id)->title }}
                                                @endif
                                            </div>
                                            <div class="my-3 card-title"><a
                                                    href="{{ route('ShowDetailPage', $id = $service->id) }}"
                                                    class="text-decoration-none text-black">{{ $service->title }}</a>
                                            </div>

                                            <div class="title-preview">{!! $service->anounce_text !!}
                                            </div>

                                            <div class="my-4">от {{ $service->cost }}</div>
                                            <a href="#"
                                                class="btn btn-outline-primary mt-3 mb-4 col-12 fw-bolder text-montserrat fs-14">Заказать</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endif
        </div>
        {{-- Текст раздела --}}
        <div class="text-start col-lg-9 col-md-11 col-11 mx-auto py-5 title-preview">
            Решаем задачи вашего бизнеса — от консультаций по маркетингу и веб-разработке до
            создания сложных сайтов с различными интеграциями. Предлагаем
            услуги разной степени сложности для интернет-магазинов и корпоративных сайтов.
            Выстраиваем
            коммуникацию с вами и помогаем сделать правильный выбор.
            <br><br>
            К нам обращаются, чтобы бизнес работал как часы. Виртуальный хостинг предназначен для
            размещения онлайн-проектов: от промо-страниц до корпоративных сайтов. На виртуальном
            сервере
            публикуются крупные сайты и интернет-магазины, которые требуют больше ресурсов, чем на
            виртуальном хостинге. FOXIT включает в себя создание лендингов, персональных сайтов,
            сайтов визиток,
            корпоративные сайты и интернет-магазины. FOXIT — это компани, которая разработает сайт
            индивидуально под вас.
            <br><br>
            Чтобы узнать подробную информацию по услугам, свяжитесь с нами по почте или телефону.
            Проконсультируем и ответим на вопросы.

        </div>
    </div>
@endsection
