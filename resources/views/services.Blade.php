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
                {{-- @if ($services != null)
                    @foreach ($services as $service)
                        {{ $service->title }}
                    @endforeach
                @endif --}}
            @elseif(isset($subsections))
                <div class="{{-- d-flex justify-content-between --}} {{-- row row-cols-lg-4 row-cols-md-2 row-cols-sm-1 --}}"
                    style="display: grid; grid-gap: 20px; grid-template-columns: repeat(auto-fill,minmax(310px,1fr));">
                    @foreach ($subsections as $subsection)
                        <div class="{{-- col-lg-3 col-md-6 --}} col-12  mb-4">
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
                <div class="{{-- d-flex justify-content-between row row-cols-lg-1 row-cols-md-2 --}} services_list" {{-- style="display: grid; grid-gap: 20px; grid-template-columns: 1fr;" --}}>
                    @if ($services != null)
                        @foreach ($services as $service)
                            <div
                                class="border-custom text-decoration-none col-12 d-flex flex-wrap p-4 justify-content-between">
                                <div class="col-lg-4 col-md-4 col-12 services-element-img-container">
                                    <img src="/storage/{{ $service->anounce_image }}" class=""
                                        style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                                <div
                                    class="col-lg-7 col-md-5 col-12 mt-lg-0 mt-md-0 mt-5 text px-lg-3 px-md-3">
                                    <div class="title-over mb-1">
                                        {{ Services_tree::find($service->section_id)->title }}</div>
                                    <a href="{{ route('ShowDetailPage', $id = $service->id) }}"
                                        class="card-title text-decoration-none"
                                        style="color:#000000; font-size: 18px;">
                                        {{ $service->title }}
                                    </a>
                                    <div class="title-preview mt-3"
                                        style="font-size: 13px; line-height: 20px">
                                        {{ $service->anounce_text }}
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-12 mt-lg-0 mt-md-0 mt-4">
                                    <div class="fw-bold fs-17 text-montserrat">от {{ $service->cost }}
                                        рублей
                                    </div>
                                    <button type="submit"
                                        class="btn btn-primary text-montserrat fs-14 fw-bold col-12 px-5 py-2 mt-lg-4 mt-md-4 mt-2"
                                        style="background: #365EDC; border-color: #365EDC;">Оформить</button>

                                </div>
                            </div>
                        @endforeach
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
