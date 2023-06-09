<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
        crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500&display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800&display=swap"
        rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="/css/style.css" rel="stylesheet">
    <title></title>
</head>

<body class="fst-normal" style="background: #F8F8F8;">
    <div class="col-12 d-flex">
        {{-- Меню слева --}}
        <div class="col-2 justify-content-center" style="background: #313A46;">
            <a href="{{ route('main') }}"
                class="d-flex justify-content-center align-items-center py-4"
                style="text-decoration: none;">
                <img src="/img/logo.png" height="30" width="30">
                <div class="ms-3 fw-bold text-roboto" style="font-size: 30px; color:#aa3a24;">
                    FOXIT</div>
            </a>
            {{-- Контент --}}
            <div class="">
                {{-- Рабочий стол --}}
                <div class="col-10 ps-3 pt-4 accordion-item" style="color: #BCCEE4;">
                    {{-- Кнопка раскрытия списка --}}
                    <button class="accordion-button p-0 collapsed text-nunito"
                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                        aria-expanded="false" aria-controls="flush-collapseOne">Рабочий
                        стол</button>
                    {{-- Внутренний список --}}
                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            {{-- Рабочий стол --}}
                            <a class="text-decor-none" href="{{ route('dashboard') }}">
                                <div class="d-flex text-nunito col-10 ps-3 pt-4 pb-4"
                                    style="color: #BCCEE4;">
                                    <div
                                        class="col-2 d-flex justify-content-start align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor"
                                            class="bi bi-briefcase" viewBox="0 0 16 16">
                                            <path
                                                d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z" />
                                        </svg>
                                    </div>
                                    <div class="col-8 text-nunito fs-15 fw-light">Рабочий стол</div>
                                    <div
                                        class="col-2 d-flex justify-content-end align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor"
                                            class="bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Контент --}}
                <div class="col-10 ps-3 pt-4 accordion-item" style="color: #BCCEE4;">
                    {{-- Кнопка раскрытия списка --}}
                    <button class="accordion-button p-0 collapsed text-nunito"
                        data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                        aria-expanded="false" aria-controls="flush-collapseTwo">Контент</button>
                    {{-- Внутренний список --}}
                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            {{-- Проекты --}}
                            <a class="text-decor-none"
                                href="{{ route('ShowTable', $title = 'Проект') }}">
                                <div class="d-flex text-nunito col-10 ps-3 pt-4 pb-4"
                                    style="color: #BCCEE4;">
                                    <div
                                        class="col-2 d-flex justify-content-start align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor"
                                            class="bi bi-briefcase" viewBox="0 0 16 16">
                                            <path
                                                d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z" />
                                        </svg>
                                    </div>
                                    <div class="col-8 text-nunito fs-15 fw-light">Проекты</div>
                                    <div
                                        class="col-2 d-flex justify-content-end align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor"
                                            class="bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            {{-- Услуги --}}
                            <a class="text-decor-none"
                                href="{{ route('ShowTableServicesSections', $id = 0) }}">
                                <div class="d-flex text-nunito col-10 ps-3 pb-4"
                                    style="color: #BCCEE4;">
                                    <div
                                        class="col-2 d-flex justify-content-start align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor"
                                            class="bi bi-cart4" viewBox="0 0 16 16">
                                            <path
                                                d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                        </svg>
                                    </div>
                                    <div class="col-8 text-nunito fs-15 fw-light">Услуги</div>
                                    <div
                                        class="col-2 d-flex justify-content-end align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor"
                                            class="bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            {{-- Блог --}}
                            <a class="text-decor-none" href="{{ route('ShowTablePosts') }}">
                                <div class="d-flex text-nunito col-10 ps-3 pb-4"
                                    style="color: #BCCEE4;">
                                    <div
                                        class="col-2 d-flex justify-content-start align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor"
                                            class="bi bi-journal-text" viewBox="0 0 16 16">
                                            <path
                                                d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                            <path
                                                d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                            <path
                                                d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                                        </svg>
                                    </div>
                                    <div class="col-8 text-nunito fs-15 fw-light">Блог</div>
                                    <div
                                        class="col-2 d-flex justify-content-end align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor"
                                            class="bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Сервисы --}}
                <div class="col-10 ps-3 pt-4 accordion-item" style="color: #BCCEE4;">
                    {{-- Кнопка раскрытия списка --}}
                    <button class="accordion-button p-0 collapsed text-nunito"
                        data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                        aria-expanded="false" aria-controls="flush-collapseThree">Сервисы</button>
                    {{-- Внутренний список --}}
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingThree"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            {{-- Письма с почты --}}
                            <div class="d-flex text-nunito col-10 ps-3 pt-4 pb-4"
                                style="color: #BCCEE4;">
                                <div class="col-2 d-flex justify-content-start align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-envelope"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                    </svg>
                                </div>
                                <div class="col-8 text-nunito fs-15 fw-light text-muted">Email
                                </div>
                                <div class="col-2 d-flex justify-content-end align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor"
                                        class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                </div>
                            </div>
                            {{-- Отзывы --}}
                            <a class="text-decor-none" href="{{ route('ShowTableReviews') }}">
                                <div class="d-flex text-nunito col-10 ps-3 pb-4"
                                    style="color: #BCCEE4;">
                                    <div
                                        class="col-2 d-flex justify-content-start align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor"
                                            class="bi bi-envelope" viewBox="0 0 16 16">
                                            <path
                                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                        </svg>
                                    </div>
                                    <div class="col-8 text-nunito fs-15 fw-light">Отзывы</div>
                                    <div
                                        class="col-2 d-flex justify-content-end align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor"
                                            class="bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Маркетинг --}}
                <div class="col-10 ps-3 pt-4 accordion-item" style="color: #BCCEE4;">
                    {{-- Кнопка раскрытия списка --}}
                    <button class="accordion-button p-0 collapsed text-nunito"
                        data-bs-toggle="collapse" data-bs-target="#flush-collapseFore"
                        aria-expanded="false"
                        aria-controls="flush-collapseFore">Маркетинг</button>
                    {{-- Внутренний список --}}
                    <div id="flush-collapseFore" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingFore"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            {{-- Seo --}}
                            <a class="text-decor-none" href="{{ route('seo_index') }}">
                                <div class="d-flex text-nunito col-10 ps-3 pt-4 pb-4"
                                    style="color: #BCCEE4;">
                                    <div
                                        class="col-2 d-flex justify-content-start align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor"
                                            class="bi bi-briefcase" viewBox="0 0 16 16">
                                            <path
                                                d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z" />
                                        </svg>
                                    </div>
                                    <div class="col-8 text-nunito fs-15 fw-light">
                                        SEO-оптимизация</div>
                                    <div
                                        class="col-2 d-flex justify-content-end align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor"
                                            class="bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            {{-- Контекст --}}
                            <div class="d-flex text-nunito col-10 ps-3 pb-4"
                                style="color: #BCCEE4;">
                                <div class="col-2 d-flex justify-content-start align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor"
                                        class="bi bi-briefcase" viewBox="0 0 16 16">
                                        <path
                                            d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z" />
                                    </svg>
                                </div>
                                <div class="col-8 text-nunito fs-15 fw-light text-muted">Контекст
                                </div>
                                <div class="col-2 d-flex justify-content-end align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor"
                                        class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                </div>
                            </div>
                            {{-- Email-маркетинг --}}
                            <div class="d-flex text-nunito col-10 ps-3 pb-4"
                                style="color: #BCCEE4;">
                                <div class="col-2 d-flex justify-content-start align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor"
                                        class="bi bi-briefcase" viewBox="0 0 16 16">
                                        <path
                                            d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z" />
                                    </svg>
                                </div>
                                <div class="col-8 text-nunito fs-15 fw-light text-muted">
                                    Email-маркетинг</div>
                                <div class="col-2 d-flex justify-content-end align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor"
                                        class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                </div>
                            </div>
                            {{-- Метрики --}}
                            <div class="d-flex text-nunito col-10 ps-3 pb-4"
                                style="color: #BCCEE4;">
                                <div class="col-2 d-flex justify-content-start align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor"
                                        class="bi bi-briefcase" viewBox="0 0 16 16">
                                        <path
                                            d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z" />
                                    </svg>
                                </div>
                                <div class="col-8 text-nunito fs-15 fw-light text-muted">Метрики
                                </div>
                                <div class="col-2 d-flex justify-content-end align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor"
                                        class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                </div>
                            </div>
                            {{-- Внутренняя реклама --}}
                            <a class="text-decor-none" href="{{ route('bid_admin_list') }}">
                                <div class="d-flex text-nunito col-10 ps-3 pb-4"
                                    style="color: #BCCEE4;">
                                    <div
                                        class="col-2 d-flex justify-content-start align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor"
                                            class="bi bi-briefcase" viewBox="0 0 16 16">
                                            <path
                                                d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z" />
                                        </svg>
                                    </div>
                                    <div class="col-8 text-nunito fs-15 fw-light">
                                        Внутренняя реклама
                                    </div>
                                    <div
                                        class="col-2 d-flex justify-content-end align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor"
                                            class="bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Магазин --}}
                <div class="col-10 ps-3 pt-4 accordion-item" style="color: #BCCEE4;">
                    {{-- Кнопка раскрытия списка --}}
                    <button class="accordion-button p-0 collapsed text-nunito"
                        data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                        aria-expanded="false" aria-controls="flush-collapseFive">Магазин</button>
                    {{-- Внутренний список --}}
                    <div id="flush-collapseFive" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingFive"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            {{-- Заявки --}}
                            <a class="text-decor-none" href="{{ route('bid_admin_list') }}">
                                <div class="d-flex text-nunito col-10 ps-3 pt-4 pb-4"
                                    style="color: #BCCEE4;">
                                    <div
                                        class="col-2 d-flex justify-content-start align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor"
                                            class="bi bi-briefcase" viewBox="0 0 16 16">
                                            <path
                                                d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z" />
                                        </svg>
                                    </div>
                                    <div class="col-8 text-nunito fs-15 fw-light">Заявки</div>
                                    <div
                                        class="col-2 d-flex justify-content-end align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor"
                                            class="bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            {{-- Заказы --}}
                            <a class="text-decor-none" href="{{ route('orders_admin_list') }}">
                                <div class="d-flex text-nunito col-10 ps-3 pb-4"
                                    style="color: #BCCEE4;">
                                    <div
                                        class="col-2 d-flex justify-content-start align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor"
                                            class="bi bi-briefcase" viewBox="0 0 16 16">
                                            <path
                                                d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z" />
                                        </svg>
                                    </div>
                                    <div class="col-8 text-nunito fs-15 fw-light">Заказы</div>
                                    <div
                                        class="col-2 d-flex justify-content-end align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor"
                                            class="bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Настройки --}}
                <div class="col-10 ps-3 pt-4 accordion-item" style="color: #BCCEE4;">
                    {{-- Кнопка раскрытия списка --}}
                    <button class="accordion-button p-0 collapsed text-nunito"
                        data-bs-toggle="collapse" data-bs-target="#flush-collapseSix"
                        aria-expanded="false" aria-controls="flush-collapseSix">Настройки</button>
                    {{-- Внутренний список --}}
                    <div id="flush-collapseSix" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingSix"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            {{-- Пользователи --}}
                            <a class="text-decor-none" href="{{ route('ShowTableUsers') }}">
                                <div class="d-flex text-nunito col-10 ps-3 pt-4 pb-4"
                                    style="color: #BCCEE4;">
                                    <div
                                        class="col-2 d-flex justify-content-start align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor"
                                            class="bi bi-envelope" viewBox="0 0 16 16">
                                            <path
                                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                        </svg>
                                    </div>
                                    <div class="col-8 text-nunito fs-15 fw-light">Пользователи
                                    </div>
                                    <div
                                        class="col-2 d-flex justify-content-end align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor"
                                            class="bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            {{-- Контакты --}}
                            <a class="text-decor-none" href="{{ route('ShowContacts') }}">
                                <div class="d-flex text-nunito col-10 ps-3 pt-2 pb-4"
                                    style="color: #BCCEE4;">
                                    <div
                                        class="col-2 d-flex justify-content-start align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor"
                                            class="bi bi-envelope" viewBox="0 0 16 16">
                                            <path
                                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                        </svg>
                                    </div>
                                    <div class="col-8 text-nunito fs-15 fw-light">Контакты
                                    </div>
                                    <div
                                        class="col-2 d-flex justify-content-end align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor"
                                            class="bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            {{-- Ссылки на соцсети --}}
                            <a class="text-decor-none" href="{{ route('ShowSocseti') }}">
                                <div class="d-flex text-nunito col-10 ps-3 pt-2 pb-4"
                                    style="color: #BCCEE4;">
                                    <div
                                        class="col-2 d-flex justify-content-start align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor"
                                            class="bi bi-envelope" viewBox="0 0 16 16">
                                            <path
                                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                        </svg>
                                    </div>
                                    <div class="col-8 text-nunito fs-15 fw-light">Ссылки на соцсети
                                    </div>
                                    <div
                                        class="col-2 d-flex justify-content-end align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor"
                                            class="bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Рабочая область --}}
        <div class="col-10" style="background: #F3F5F8; min-height: 1000px;">
            {{-- Верхнее меню --}}
            <div class="col-12 d-flex align-items-center justify-content-between"
                style="background: #ffffff; height: 70px;">
                {{-- Поиск --}}
                <form class="col-2 ms-5">
                    <div class="input-group">
                        <span class="input-group-text img-search-1" id="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                </path>
                            </svg>
                        </span>
                        <input type="text" class="form-control form-search-1"
                            placeholder="Search...">
                        <button class="btn-search-1" type="submit">Search</button>
                    </div>
                </form>
                {{-- Правое меню --}}
                <div class="col-6 d-flex align-items-center justify-content-end">
                    {{-- Настройки --}}
                    <div class=" col-1 px-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                            fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                            <path
                                d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                            <path
                                d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                        </svg>
                    </div>
                    {{-- Авторизованный админ --}}
                    <div class="admin-auth-name me-2 d-flex align-items-center justify-content-between col-3"
                        style="height: 70px">
                        <div class="d-flex align-items-center justify-content-center col-4">
                            <div class="bg-dark rounded-circle" style="height:32px; width:32px;">
                            </div>
                        </div>
                        <div class="text-nunito col-8" style="color: #6C757D;">
                            <div class="fs-15 fw-bolder">Дамир Хайбулин</div>
                            <div class="fs-12">Админ</div>
                        </div>
                    </div>
                </div>
            </div>
            @yield('admincontent')
        </div>
    </div>
    {{-- <div class="modal fade" id="AddEdit" data-bs-backdrop="static" data-bs-keyboard="false"
        aria-labelledby="AddEditLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered col-8"
            style="max-width: 66.66666667% !important;">
            <div class="modal-content p-5" style="border-radius: 4px;">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="modal-title fs-24 fw-bolder text-montserrat" id="AddEditLabel">
                        Добавить {{ $title }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form action="" method="post">
                    @csrf
                    <div class="mt-5 accordion accordion-flush" id="accordionFlushExample">
                        <div class="card-header border-bottom">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="accordion-item nav-item">
                                    <button
                                        class="nav-link accordion-button  collapsed h-100 w-100 px-3 rounded-top"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-element" aria-expanded="false"
                                        aria-controls="collapse-element">{{ $title }}</button>
                                </li>
                                <li class="accordion-item nav-item">
                                    <button
                                        class="nav-link accordion-button p-0 collapsed h-100 w-100 px-3 rounded-top"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-element-anounce"
                                        aria-expanded="false"
                                        aria-controls="collapse-element-anounce">Анонс</button>
                                </li>
                                <li class="accordion-item nav-item">
                                    <button
                                        class="nav-link accordion-button p-0 collapsed h-100 w-100 px-3 rounded-top"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-element-details"
                                        aria-expanded="false"
                                        aria-controls="collapse-element-details">Подробно</button>
                                </li>
                                <li class="accordion-item nav-item">
                                    <button
                                        class="nav-link accordion-button p-0 collapsed h-100 w-100 px-3 rounded-top"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-element-SEO"
                                        aria-expanded="false"
                                        aria-controls="collapse-element-SEO">SEO</button>
                                </li>
                                <li class="accordion-item nav-item">
                                    <button
                                        class="nav-link accordion-button p-0 collapsed h-100 w-100 px-3 rounded-top"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-element-relations"
                                        aria-expanded="false"
                                        aria-controls="collapse-element-relations">Связи</button>
                                </li>
                            </ul>
                        </div>

                        <div id="collapse-element" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body mt-2">
                                <label for="form-login"
                                    class="form-label title-over mt-5">Название</label>
                                <input class="form-control form-login-1" type="text"
                                    id="form-login" name="login">
                            </div>
                        </div>
                        <div id="collapse-element-anounce" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body mt-2">
                                <label for="AononceImg"
                                    class="form-label title-over mt-5">Картинка анонса</label>
                                <input class="form-control" type="file" id="AononceImg">
                                <label for="AnounceText"
                                    class="form-label title-over mt-4">Описание анонса</label>
                                <textarea class="form-control" id="AnounceText" rows="3"></textarea>
                            </div>
                        </div>
                        <div id="collapse-element-details" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body mt-2">
                                <label for="DetailsImg"
                                    class="form-label title-over mt-5">Детальная картинка</label>
                                <input class="form-control" type="file" id="DetailsImg">
                                <label for="DetailsText"
                                    class="form-label title-over mt-4">Детальное описание</label>
                                <textarea class="form-control" id="DetailsText" rows="3"></textarea>
                            </div>
                        </div>
                        <div id="collapse-element-SEO" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body mt-2">
                                <div class="fs-15 text-nunito text-lightgrey fw-bolder mt-3">SEO
                                    элемента</div>
                                <label for="SEOTitle" class="form-label title-over mt-3">META
                                    TITLE</label>
                                <input class="form-control form-login-1" type="text"
                                    id="SEOTitle" name="login">
                                <label for="SEOKeys" class="form-label title-over mt-4">META
                                    KEYWORDS</label>
                                <input class="form-control form-login-1" type="text"
                                    id="SEOKeys" name="text">
                                <label for="SEODescription"
                                    class="form-label title-over mt-4">META
                                    SESCRIPTION</label>
                                <input class="form-control form-login-1" type="text"
                                    id="SEODescription" name="text">
                                <div class="fs-15 text-nunito text-lightgrey fw-bolder mt-5">SEO
                                    картинок анонса</div>
                                <label for="ALTAnounceImg"
                                    class="form-label title-over mt-3">ALT</label>
                                <input class="form-control form-login-1" type="text"
                                    id="ALTAnounceImg" name="text">
                                <label for="TITLEAnounceImg"
                                    class="form-label title-over mt-4">TITLE</label>
                                <input class="form-control form-login-1" type="text"
                                    id="TITLEAnounceImg" name="text">
                                <label for="FileNameAnounceImg"
                                    class="form-label title-over mt-4">Имя
                                    файла</label>
                                <input class="form-control form-login-1" type="text"
                                    id="FileNameAnounceImg" name="text">
                                <div class="fs-15 text-nunito text-lightgrey fw-bolder mt-5">SEO
                                    картинок детальных картинок</div>
                                <label for="ALTDetailsImg"
                                    class="form-label title-over mt-3">ALT</label>
                                <input class="form-control form-login-1" type="text"
                                    id="ALTDetailsImg" name="text">
                                <label for="TITLEDetailsImg"
                                    class="form-label title-over mt-4">TITLE</label>
                                <input class="form-control form-login-1" type="text"
                                    id="TITLEDetailsImg" name="text">
                                <label for="FileNameDetailsImg"
                                    class="form-label title-over mt-4">Имя
                                    файла</label>
                                <input class="form-control form-login-1" type="text"
                                    id="FileNameDetailsImg" name="text">
                                <div class="fs-15 text-nunito text-lightgrey fw-bolder mt-5">
                                    Дополнительно</div>
                                <label for="TAGS"
                                    class="form-label title-over mt-3">Теги</label>
                                <input class="form-control form-login-1" type="text"
                                    id="TAGS" name="text">
                            </div>
                        </div>
                        <div id="collapse-element-relations" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body mt-2">
                                <label class="form-label title-over mt-5">Сотрудники</label>
                                <select class="form-select" multiple
                                    aria-label="multiple select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <label class="form-label title-over mt-4">Отзывы</label>
                                <select class="form-select" multiple
                                    aria-label="multiple select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-5">
                    <div class="d-flex justify-content-start mt-5">
                        <div class="col-3 pe-2">
                            <button type="submit"
                                class="btn btn-primary col-12 py-3 text-montserrat fw-bolder fs-15"
                                style="background: #5273E0" data-bs-dismiss="modal">Сохранить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
</body>

</html>
