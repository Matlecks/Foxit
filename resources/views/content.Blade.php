@extends('index')

@php
    use App\Models\Services_tree;
@endphp

@section('content')
    <div class="" style="background: #F8F8F8; z-index: 9;">
        {{-- Баннер --}}
        <div class="navbar-expand-md"
            style="background: #FBFBF3 url(https://allcorp3-demo.ru/upload/iblock/20b/20bb5bf8d068f3bf4444b375e9b94a1b.jpg) no-repeat; background-size: cover; min-height: 280px;">

            {{-- Баннер --}}
            <div class="mx-auto col-lg-10 col-12 justify-content-between collapse navbar-collapse"
                style="padding-top: ; height: 936px;">
                {{-- Текст --}}
                <div class="ms-lg-0 ms-md-5 col-8 text-light" style="z-index: 5;">
                    <div class="fs-10 fw-lighter" style="letter-spacing: 0.96px;">
                        Услуги</div>
                    <div class="fw-bold display-3 mt-2" style="">Создаем<br>уникальные сайты
                    </div>
                    <div class="d-flex justify-content-start mt-2">
                        <div class="">
                            <div class="fw-bold" style="font-size: 30px;"></div>
                            <div class="" style="font-size: 14 px; font-weight: 500"></div>
                        </div>
                        <div class="ms-5">
                            <div class="fw-bold" style="font-size: 30px;"></div>
                            <div class="" style="font-size: 14 px; font-weight: 500">
                            </div>
                        </div>
                        <div class="ms-5">
                            <div class="fw-bold" style="font-size: 30px;"></div>
                            <div class="" style="font-size: 14 px; font-weight: 500"></div>
                        </div>
                    </div>
                    <div class="col-6 d-flex justify-content-start mt-5" style="">
                        <a href="{{ route('about') }}" type="button" class="btn btn-primary fw-bold "
                            style="background: #365EDC; font-size: 16px; font-weight: 700; padding: 17px 26px 17px 26px">Подробнее</a>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#askquestion"
                            class="btn btn-light fw-bold text-blue ms-3"
                            style="color: #365EDC; background: #ffffff; font-size: 16px; font-weight: 700; padding: 17px 26px 17px 26px">Задать
                            вопрос</button>
                    </div>
                </div>
                {{-- Активная картинка --}}
                <div class="active-img">
                    <img src="https://allcorp3-demo.ru/upload/iblock/bbe/bbefcd51d981f4c65c9c821d2f5397b2.png"
                        class="img ">
                </div>
            </div>
        </div>
        {{-- Тизеры --}}
        <div style="background: #ffffff">
            <div class="mx-auto col-lg-10 col-11 row align-items-center py-5">
                {{-- Тизер 1 --}}
                <div
                    class="d-flex col-12 col-md-6 col-lg-3 my-3 justify-content-lg-center justify-content-md-start px-0">
                    <div class="d-flex align-items-center justify-content-lg-center justify-content-md-start col-lg-3 col-md-3 col-2"
                        style="height: 72px;">
                        <img src="img/Client.png" height="50" width="50">
                    </div>
                    <div class="col-md-7 col-lg-9 col-10">
                        <div class="fw-bold fs-17 text-roboto">Клиентоориентированность</div>
                        <div class="mt-2 text-muted fs-14 text-montserrat">
                            Создаем сайт индивидуально под каждого клиента, чтобы помочь вам быть
                            лучшими среди конкурентов</div>
                    </div>
                </div>
                {{-- Тизер 2 --}}
                <div class="d-flex col-12 col-md-6 col-lg-3 my-3 justify-content-lg-center justify-content-md-start px-0"
                    style="">
                    <div class="d-flex align-items-center justify-content-lg-center justify-content-md-start col-lg-3 col-md-3 col-2"
                        style="height: 72px;">
                        <img src="img/Cost.png" height="50" width="50">
                    </div>
                    <div class="col-md-7 col-lg-9 col-10">
                        <div class="fw-bold fs-17 text-roboto">Ценообразование</div>
                        <div class="mt-2 text-muted fs-14 text-montserrat">Расчитать стоимость и
                            подобрать необходимый функционал для вашего сайта вы можете в ПРАЙСЕ</div>
                    </div>
                </div>
                {{-- Тизер 3 --}}
                <div class="d-flex col-12 col-md-6 col-lg-3 my-3 justify-content-lg-center justify-content-md-start px-0"
                    style="">
                    <div class="d-flex align-items-center justify-content-lg-center justify-content-md-start col-lg-3 col-md-3 col-2"
                        style="height: 72px;">
                        <img src="img/Tech.png" height="50" width="50">
                    </div>
                    <div class="col-md-7 col-lg-9 col-10">
                        <div class="fw-bold fs-17 text-roboto">Обслуживание</div>
                        <div class="mt-2 text-muted fs-14 text-montserrat">
                            По окончанию разработки сайта и сдачи вам, мы бесплатно обслуживаем вас в
                            течении месяца</div>
                    </div>
                </div>
                {{-- Тизер 4 --}}
                <div class="d-flex col-12 col-md-6 col-lg-3 my-3 justify-content-lg-center justify-content-md-start px-0"
                    style="">
                    <div class="d-flex align-items-center justify-content-lg-center justify-content-md-start col-lg-3 col-md-3 col-2"
                        style="height: 72px;">
                        <img src="img/Study.png" height="50" width="50">
                    </div>
                    <div class="col-md-7 col-lg-9 col-10">
                        <div class="fw-bold fs-17 text-roboto">Обучение персонала</div>
                        <div class="mt-2 text-muted fs-14 text-montserrat">
                            После сдачи вам сайта мы обучим, покажем и расскажем вам и вашему персоналу
                            как работать с сайтом</div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Разделитель (полоска вместо <hr>) --}}
        <div class="col-12" style="height: 1.5px; background: #E5E5E5;"></div>
        {{-- Услуги --}}
        <div class="mx-auto col-11 col-lg-10" style="background: #F8F8F8;">
            <div class="d-flex justify-content-between align-items-center mt-5">
                <div class="col-lg-4 col-sm-6 col-md-10 title">Услуги</div>
                <a href="{{ route('servicessections') }}"
                    class="col-lg-1 col-sm-6 col-md-2 mt-1 title-link text-decoration-none">Все
                    услуги
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16"
                        style="transform: rotate(-90deg);">
                        <path fill-rule="evenodd"
                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                    </svg>
                </a>
            </div>
            <div class="mt-4 col-lg-8 col-md-12 title-preview">
                Решаем задачи вашего
                бизнеса — от выбора хостинга до интеграции CRM систем и систем складского учета.
                Предлагаем сайты разной степени сложности от лендингов до интернет-магазинов и
                корпоративных сайтов. Помогаем сделать правильный выбор.
            </div>
            <div
                class="my-5 d-flex justify-content-between row row-cols-lg-4 row-cols-md-2 row-cols-sm-1">
                @if ($services != null)
                    @foreach ($services as $service)
                        <div class="col-lg-3 col-md-6 col-sm-12 my-4">
                            <div class="border-custom bg-white">
                                <div class=""
                                    style="height: 235px; background: #fafafa;border-top-left-radius: 4px; border-top-right-radius: 4px;">
                                    <img class=""
                                        style="width: 100%; height: 100%; object-fit: cover; border-top-left-radius: 4px; border-top-right-radius: 4px;"
                                        src="/storage/{{ $service->anounce_image }}" height="235">
                                </div>
                                <div class="col-9 mx-auto text-montserrat">
                                    <div class="pt-5 card-title-over">
                                        {{ Services_tree::find($service->section_id)->title }}</div>
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
                @endif
            </div>
        </div>
        {{-- Разделитель (полоска вместо <hr>) --}}
        <div class="col-12" style="height: 1.5px; background: #E5E5E5;"></div>
        {{-- Блог --}}
        <div class="col-11 col-lg-10 mx-auto">
            <div class="mt-5 title-over">Блог</div>
            <div class="d-flex justify-content-between align-items-center mt-1">
                <div class="col-lg-4 col-sm-6 col-md-10 title">Все самое
                    интересное</div>
                <a href="{{ route('news') }}"
                    class="col-lg-1 col-sm-6 col-md-2 mt-1 title-link text-decoration-none">Все
                    статьи
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16"
                        style="transform: rotate(-90deg);">
                        <path fill-rule="evenodd"
                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                    </svg>
                </a>
            </div>
            <div class="mt-4 col-lg-8 col-md-12 title-preview">Мы постоянно развиваемся и помогаем
                развиваться вам и вашему бизнесу. В блоге мы публикуем статьи с новостями нашей
                компании, а также собираем для вас интересный материал и пишем на самые актуальные темы
                из e-commerce сферы
            </div>
            {{-- Вывод новостей --}}
            <div
                class="my-5 d-flex justify-content-between row row-cols-lg-4 row-cols-md-2 row-cols-sm-1">
                {{-- Карта 1 --}}
                @if ($posts != null)
                    @foreach ($posts as $post)
                        <div class="col-lg-3 col-md-6 col-sm-12 my-4">
                            <div class="border-custom bg-white" style="min-height: 420px;">
                                <div class=""
                                    style="height: 235px; background: #fafafa url('/storage/{{ $post->anounce_image }}') no-repeat; background-size: cover;">
                                </div>
                                <div class="col-10 mx-auto my-4 text-montserrat">
                                    <div class="d-flex justify-content-start">
                                        {{-- <div
                                            class="border rounded-1 bg-light py-1 px-3 card-title-over">
                                            Дизайн
                                        </div> --}}
                                    </div>
                                    <div class="my-3 card-title"><a
                                            href="{{ route('new_detail', $id = $post->id) }}"
                                            class="text-decoration-none text-black">{{ $post->title }}</a>
                                    </div>
                                    <div class="mt-5 card-date">
                                        {{ $post->created_at = date('d.F.y') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        {{-- Разделитель (полоска вместо <hr>) --}}
        <div class="col-12" style="height: 1.5px; background: #E5E5E5;"></div>
        {{-- Команда --}}
        <div class="bg-white">
            <div class="col-11 col-lg-10 mx-auto">
                <div class="text-muted pt-5 title-over">Главное преимущество нашей компании</div>
                <div class="d-flex justify-content-between align-items-center mt-1">
                    <div class="col-lg-4 col-sm-6 col-md-10 title">Команда
                    </div>
                    <a href="{{ route('personal') }}"
                        class="col-lg-1 col-sm-6 col-md-2 mt-1 title-link text-decoration-none">Вся
                        команда
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16"
                            style="transform: rotate(-90deg);">
                            <path fill-rule="evenodd"
                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </a>
                </div>
                <div class="text-muted mt-4 col-lg-8 col-md-12 title-preview">Сотрудники — ключевое
                    звено нашей компании. У нас работают специалисты узкого и широкого профиля, что
                    позволяет обеспечить комплексный подход к решению ваших задач. Они знают, в каком
                    направлении двигаться для достижения нужного результата. Свяжитесь с сотрудниками по
                    контактам из карточек специалистов. Начните действовать уже сегодня!
                </div>
                {{-- Вывод новостей --}}
                <div
                    class="py-5 d-flex justify-content-between row row-cols-lg-4 row-cols-md-2 row-cols-sm-1">
                    @if ($users != null)
                        @foreach ($users as $user)
                            <div class="col-lg-3 col-md-6 col-sm-12 my-4">
                                <div class="border rounded-2"
                                    style="background: #fafafa url(/storage/{{ $user->anounce_image }});

                        background-size: cover;
                        background-position: center;
                        background-repeat: no-repeat;">
                                    <div class="col-10 mx-auto my-4 d-flex align-items-end"
                                        style="height: 450px;">
                                        <div class="">
                                            <div class="col-12 card-title-over">
                                                {{ $user->job }}</div>
                                            <div class="col-12 mb-3 mt-1 card-title">
                                                <a href="{{ route('personal_detail', $id = $user->id) }}"
                                                    class="text-decoration-none text-black">{{ $user->name }}
                                                    {{ $user->surname }}</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        {{-- Разделитель (полоска вместо <hr>) --}}
        <div class="col-12" style="height: 1.5px; background: #E5E5E5;"></div>
        {{-- Блок Отзывов --}}
        <div class="bg-white">
            <div class="col-11 col-lg-10 mx-auto text-center py-5">
                <div class="col-12 title-over mt-5">
                    Исполнительный директор танцевальной студии "Квинс" - 22 сентября 2020
                </div>
                <div class="col-12 my-2 fs-22 fw-bolder text-roboto">
                    Марина Крауч
                </div>
                <div class="col-12 my-3">
                    * * * * *
                </div>
                <div class="col-12">
                    <div class="col-lg-7 col-md-12 mx-auto title-preview">
                        В нашем танцевальном зале часто ломали оборудование и даже разбивали зеркала. Мы
                        никак
                        не могли найти нарушителей и были в отчаянии. Обратились в FoxIT, чтобы
                        установить
                        систему видеонаблюдения. Оборудование привезли в этот же ...
                    </div>
                </div>
            </div>
        </div>
        {{-- Разделитель (полоска вместо <hr>) --}}
        <div class="col-12" style="height: 1.5px; background: #E5E5E5;"></div>
        {{-- Работы --}}
        <div style="background: #ffffff">
            <div class="col-11 col-lg-10 mx-auto py-5">
                <div class=" title-over">Проекты</div>
                <div class="d-flex justify-content-between align-items-center mt-1">
                    <div class="col-lg-6 col-sm-6 col-md-10 title">
                        Результат нашей работы</div>
                    <a href="{{ route('projects') }}"
                        class="col-lg-1 col-sm-6 col-md-2 mt-1 title-link text-decoration-none">Все
                        проекты
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16"
                            style="transform: rotate(-90deg);">
                            <path fill-rule="evenodd"
                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </a>
                </div>
                <div class="mt-4 col-lg-8 col-md-12 title-preview">Реализованные проекты
                    —
                    визитная карточка каждой компании. В этом разделе публикуем выполненные работы и
                    рассказываем о том, как это было. Планы и задачи, процесс реализации и результаты
                    работы
                    специалистов. Смотрите, изучайте и пишите вопросы нам на почту.
                </div>
                {{-- Вывод проектов --}}
                <div
                    class="my-5 d-flex justify-content-between row row-cols-lg-3 row-cols-md-2 row-cols-sm-1">
                    @if ($projects != null)
                        @foreach ($projects as $project)
                            <div class="col-lg-4 col-md-6 col-sm-12 my-4">
                                <div class="border-custom"
                                    style="background: #fafafa url(/storage/{{ $project->anounce_image }});background-size: cover;">
                                    <div class="col-10 mx-auto my-4 d-flex align-items-end"
                                        style="height: 250px;">
                                        <div class="">
                                            {{-- <div class="col-12 card-title-over">
                                                Название работы</div> --}}
                                            <div class="col-12 mb-3 mt-1 card-title rounded-2 py-2 px-4"
                                                style="background: #ffffff;">
                                                <div class="card-title-over">{{ $project->sphere }}
                                                </div>
                                                <a href="{{ route('ShowProjectDetailPage', $id = $project->id) }}"
                                                    class="text-decoration-none text-black">{{ $project->title }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            {{-- Разделитель (полоска вместо <hr>) --}}
            <div class="col-12" style="height: 1.5px; background: #E5E5E5;"></div>
            {{-- Блок О компании --}}
            <div class="bg-white">
                <div class="col-11 col-lg-10 mx-auto py-5 row row-cols-lg-2 row-cols-md-1">
                    {{-- Первая половина --}}
                    <div class="col-lg-6 col-12">
                        <div style="position: sticky; top: 50px;">
                            <div class="title-over">О
                                компании
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-1">
                                <div class="title">Ключ к успешному
                                    бизнесу
                                </div>
                            </div>
                            <div class="mt-4 col-11 title-preview">
                                Управленчские решения предпринимателей, руководителей, менеджеров
                                накопленные в опыте наших сотрудников при работе с нашими клиентами и
                                свежий взгляд, отслеживнаие последних тенденций в сайтопроизводстве,
                                которые помогают дать вам наилучший
                                вариант решения нужд вашего бизнеса в сайте.
                            </div>
                            <div class="mt-5">
                                <a href="{{ route('about') }}" type="button"
                                    class="btn btn-outline-primary px-5 py-2 fw-bolder text-montserrat fs-14">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    {{-- Вторая половина --}}
                    <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                        {{-- Картинка --}}
                        <div class="col-12 rounded-2" style="height: 500px; background: #fafafa;">
                            <img class="rounded-1"
                                style="width: 100%; height: 100%; object-fit: cover;"
                                src="https://images.wallpaperscraft.ru/image/single/macbook_appele_klavishi_161213_1920x1080.jpg">
                        </div>
                        {{-- Текст --}}
                        <div class="mt-5 title-preview">
                            FoxIT — молодая компания с амбициозными, целеустремленными, горящими своими
                            идеями сотрудниками. Мы адаптируемся к изменениям на рынке,
                            применяем в работе актуальные инструменты, технологии, дизайн, маркетинговые
                            решения.
                            Берем в работу только те проекты, которые выполним на 100%.
                            <br><br>
                            <ul>
                                <li>Благодаря четко выстроенному процессу работе с клиентом и проектом с
                                    нами работать легко и просто</li>
                                <li>Рассказываем и показываем как работать с сайтом уже с самого начала
                                    разработки. Обучаем сотрудников работе
                                    на сайте, даже
                                    если они в первый раз знакомятся с компьютером.</li>
                                <li>Рассказываем полностью каждый шаг: почему выбрано то или иное
                                    техническое решение. К сдаче сайта вы станете гуру
                                </li>
                            </ul>
                            <br>
                            Развивайте бизнес, масштабируйте и выстраивайте крепкие отношения с
                            клиентами благодаря удобному сайту.
                        </div>
                        <div class="row row-cols-lg-2 row-cols-md-2 row-cols-1 my-lg-5 mt-md-5 mt-5"
                            style="min-height: 300px;">
                            <div class="col md-lg-0 mb-md-0 mb-5">
                                <div class="fw-bold text-primary text-roboto fs-22">
                                    Клиентоориентированность</div>
                                <div class="title-preview mt-3">Создаем сайт индивидуально под каждого
                                    клиента, чтобы помочь вам быть лучшими среди конкурентов</div>
                            </div>
                            <div class="col md-lg-0 mb-md-0 mb-5">
                                <div class="fw-bold text-primary text-roboto fs-22">Ценообразование
                                </div>
                                <div class="title-preview mt-3">Расчитать стоимость и подобрать
                                    необходимый функционал для вашего сайта вы можете в ПРАЙСЕ</div>
                            </div>
                            <div class="col md-lg-0 mb-md-0 mb-5">
                                <div class="fw-bold text-primary text-roboto fs-22">Обслуживание
                                </div>
                                <div class="title-preview mt-3">По окончанию разработки сайта и сдачи
                                    вам, мы бесплатно обслуживаем вас в течении месяца</div>
                            </div>
                            <div class="col md-lg-0 mb-md-0">
                                <div class="fw-bold text-primary text-roboto fs-22">Обучение
                                    персонала</div>
                                <div class="title-preview mt-3">После сдачи вам сайта мы обучим,
                                    покажем и расскажем вам и вашему персоналу как работать с сайтом
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Разделитель (полоска вместо <hr>) --}}
            <div class="col-12" style="height: 1.5px; background: #E5E5E5;"></div>
            {{-- Блок обратной связи --}}
            <div class="d-flex align-items-center pt-5 pt-lg-0"
                style="min-height: 683px; background: url(https://allcorp3-demo.ru/upload/CAllcorp3/623/623f79835b25f993eec6a18e522c8422.jpg) no-repeat; background-size: cover;">
                <div
                    class="col-11 col-lg-10 mx-auto d-flex justify-content-center row row-cols-lg-2 row-cols-md-1">
                    {{-- Первая половина --}}
                    <div class="col-lg-6 col-12">
                        <div class="title-over">
                            Контакты
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-1">
                            <div class="title">Оставьте заявку
                            </div>
                        </div>
                        <div class="col-11 mt-4 title-preview">
                            Перезвоним в течение 1 часа. Обсудим задачи, найдем оптимальное
                            решение и
                            запланируем работы. Ответим на вопросы и расскажем подробнее о
                            действующих
                            акциях.
                            Будем на связи!
                        </div>
                    </div>
                    {{-- Вторая половина с формой обратной связи --}}
                    <div class="col-lg-6 col-12 mt-3 mb-lg-0 mb-5 mt-lg-0">
                        <form action="{{ route('takerequest') }}" method="post">
                            @csrf
                            <div class="my-4">
                                <label for="exampleFormControlInput1"
                                    class="form-label title-over">Ваше имя
                                    *</label>
                                <input type="text" class="form-control rounded-1"
                                    id="exampleFormControlInput1"
                                    style="background: #F8F8F8; height: 48px;">
                            </div>

                            <div class="my-4">
                                <label for="exampleFormControlInput1"
                                    class="form-label title-over">Телефон *</label>
                                <input type="text" class="form-control rounded-1"
                                    id="exampleFormControlInput1"
                                    style="background: #F8F8F8; height: 48px;">
                            </div>

                            <div class="my-4">
                                <label for="exampleFormControlInput1"
                                    class="form-label title-over">Email *</label>
                                <input type="email" class="form-control rounded-1"
                                    id="exampleFormControlInput1" name="email"
                                    style="background: #F8F8F8; height: 48px;">
                            </div>

                            <div class="my-4">
                                <div class="mb-2 title-over">Введите текст
                                    с
                                    картинки *
                                </div>
                                <div class="d-flex justyfy-content-center">
                                    <div class="bg-dark col-lg-3 col-5 me-4" style="height: 48px;">
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <input type="email" class="form-control rounded-1"
                                            id="exampleFormControlInput1"
                                            style="background: #F8F8F8; height: 48px;">
                                    </div>
                                </div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input rounded-1" type="checkbox"
                                    value="" id="flexCheckDefault">
                                <label class="form-check-label title-over" for="flexCheckDefault">
                                    Я согласен на обработку персональных данных
                                </label>
                            </div>
                            <button type="submit"
                                class="btn btn-primary fw-bolder text-montserrat fs-14 px-5 py-2 mt-5">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
