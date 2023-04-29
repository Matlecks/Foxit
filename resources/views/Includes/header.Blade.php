@section('header')
    {{-- Верхнее меню --}}
    <div class="header mx-auto col-12 col-lg-9 navbar-expand-lg">
        <div class="d-flex justify-content-lg-center justify-content-md-between align-items-center text-center text-white navbar-expand-lg"
            style="min-height: 66px;">
            {{-- Бургер --}}
            <div class="d-flex justify-content-center d-lg-none col-lg-1 col-md-1 col-2 " type="button"
                data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
                aria-controls="offcanvasDarkNavbar">
                <div class="col-lg-4 col-md-2 col-sm-12">
                    <svg width="16" height="7" viewBox="0 0 16 7" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1 0C0.447716 0 0 0.447716 0 1C0 1.55228 0.447716 2 1 2H15C15.5523 2 16 1.55228 16 1C16 0.447716 15.5523 0 15 0H1Z"
                            fill="#333333"></path>
                        <path
                            d="M1 5C0.447716 5 0 5.44772 0 6C0 6.55228 0.447716 7 1 7H9C9.55228 7 10 6.55228 10 6C10 5.44772 9.55228 5 9 5H1Z"
                            fill="#333333"></path>
                    </svg>
                </div>
            </div>
            {{-- Выпадающее меню --}}
            <div class="offcanvas offcanvas-start bg-dark text-white collapse" tabindex="-1"
                id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header mt-4 mx-4">
                    <a href="{{ route('main') }}" class="col-10 d-flex align-items-center"
                        style="text-decoration: none;">
                        <img src="/img/logo.png" height="50" width="50">
                        <div class="ms-3 fw-bold text-roboto" style="font-size: 30px; color:#aa3a24;">
                            FOXIT</div>
                    </a>
                    <button type="button" class="btn-close btn-close-white col-2"
                        data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body text-start mx-4">
                    <ul class="navbar-nav">
                        <li class="nav-item mt-4">
                            <div class="accordion-item">
                                <button
                                    class="accordion-button p-0 collapsed fw-bolder bg-dark text-white text-monserrat fs-18"
                                    type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Компания
                                </button>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body mt-2">
                                        {{-- О компании --}}
                                        <a class="text-decor-none" href="{{ route('company') }}">
                                            <div class="d-flex text-nunito col-10 ps-3 py-2"
                                                style="color: #BCCEE4;">
                                                <div class="col-8 text-nunito fs-15 fw-light">О компании
                                                </div>
                                                <div
                                                    class="col-2 d-flex justify-content-end align-items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16"
                                                        fill="currentColor" class="bi bi-chevron-right"
                                                        viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </a>
                                        {{-- Сотрудники --}}
                                        <a class="text-decor-none" href="">
                                            <div class="d-flex text-nunito col-10 ps-3 py-2"
                                                style="color: #BCCEE4;">
                                                <div class="col-8 text-nunito fs-15 fw-light">Сотрудники
                                                </div>
                                                <div
                                                    class="col-2 d-flex justify-content-end align-items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16"
                                                        fill="currentColor" class="bi bi-chevron-right"
                                                        viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </a>
                                        {{-- Отзывы --}}
                                        <a class="text-decor-none" href="">
                                            <div class="d-flex text-nunito col-10 ps-3 py-2"
                                                style="color: #BCCEE4;">
                                                <div class="col-8 text-nunito fs-15 fw-light">Отзывы
                                                </div>
                                                <div
                                                    class="col-2 d-flex justify-content-end align-items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16"
                                                        fill="currentColor" class="bi bi-chevron-right"
                                                        viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item mt-4">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <a href="{{ route('servicessections') }}"
                                        class="text-decoration-none text-white"><button
                                            class="accordion-button p-0 collapsed fw-bolder bg-dark text-white text-monserrat fs-18"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                            aria-controls="flush-collapseTwo">
                                            Услуги
                                        </button></a>
                                </h2>
                                {{-- <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this
                                        accordion, which is intended to demonstrate the
                                        <code>.accordion-flush</code> class. This is the third
                                        item's accordion body. Nothing more exciting happening here
                                        in terms of content, but just filling up the space to make
                                        it look, at least at first glance, a bit more representative
                                        of how this would look in a real-world application.
                                    </div>
                                </div> --}}
                            </div>
                        </li>
                        <li class="nav-item mt-4">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <a href="{{ route('projects') }}"
                                        class="text-decoration-none text-white"><button
                                            class="accordion-button p-0 collapsed fw-bolder bg-dark text-white text-monserrat fs-18"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            Проекты
                                        </button></a>
                                </h2>
                                {{-- <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this
                                        accordion, which is intended to demonstrate the
                                        <code>.accordion-flush</code> class. This is the third
                                        item's accordion body. Nothing more exciting happening here
                                        in terms of content, but just filling up the space to make
                                        it look, at least at first glance, a bit more representative
                                        of how this would look in a real-world application.
                                    </div>
                                </div> --}}
                            </div>
                        </li>
                        <li class="nav-item mt-4">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFore">
                                    <a href="{{ route('news') }}"
                                        class="text-decoration-none text-white"><button
                                            class="accordion-button p-0 collapsed fw-bolder bg-dark text-white text-monserrat fs-18"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseFore" aria-expanded="false"
                                            aria-controls="flush-collapseFore">
                                            Новости
                                        </button></a>
                                </h2>
                                {{-- <div id="flush-collapseFore" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFore"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this
                                        accordion, which is intended to demonstrate the
                                        <code>.accordion-flush</code> class. This is the third
                                        item's accordion body. Nothing more exciting happening here
                                        in terms of content, but just filling up the space to make
                                        it look, at least at first glance, a bit more representative
                                        of how this would look in a real-world application.
                                    </div>
                                </div> --}}
                            </div>
                        </li>
                        <a href="{{ route('contacts') }}" class="text-decoration-none text-white">
                            <li class="nav-item fw-bolder text-monserrat fs-18 mt-4">Контакты</li>
                        </a>
                    </ul>
                    <button type="button" class="btn btn-primary border-0 col-12 fw-bold my-5"
                        style="background: #365EDC;">Подать заявку</button>
                    {{-- Разделитель (полоска вместо <hr>) --}}
                    <div class="row" style="height: 1px; background: #E5E5E5;"></div>
                    {{-- Контактная инфа --}}
                    <div class="mt-5">
                        <div class="col-12 text-montserrat fw-light fs-18">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                <path
                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg>
                            <span>+7 (000)
                                000-00-00</span>
                        </div>
                        <div class="fw-light fs-15 text-montserrat mt-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="#E5E5E5" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                <path
                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                <path
                                    d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                            <span>г. Уфа, ул.Энтузиастов,
                                30</span>
                        </div>
                        <div class="col-12 text-montserrat fw-light fs-15 mt-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="#E5E5E5" class="bi bi-envelope" viewBox="0 0 16 16">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                            </svg>
                            <span>info@site.ru</span>
                        </div>
                        <div class="mt-4">
                            <svg viewBox="0 0 24 24" fill="none" width="20" height="20"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                    stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                                        stroke="#bdc1c6" stroke-width="2"></path>
                                    <path
                                        d="M12 7L12 11.5L12 11.5196C12 11.8197 12.15 12.1 12.3998 12.2665V12.2665L15 14"
                                        stroke="#bdc1c6" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </g>
                            </svg>
                            <span class="fw-light text-montserrat fs-15">Пн - Пт: 9.00 -
                                18.00</span>
                        </div>
                    </div>
                </div>

            </div>
            {{-- Номер --}}
            <div class="col-lg-2 col-md-3 collapse navbar-collapse fw-15">
                +7 000 000-00-00
            </div>
            {{-- Логотип --}}
            <div
                class="col-lg-6 col-md-11 col-10 d-flex justify-content-lg-center justify-content-md-start justify-content-start">
                <a href="{{ route('main') }}"
                    class="col-md-11 col-lg-5 col-7 d-flex align-items-center justify-content-lg-center justify-content-md-center justify-content-end"
                    style="text-decoration: none;">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="40" height="40" viewBox="0 0 295 295">
                        <defs>
                            <style>
                                .cls-1,
                                .cls-3 {
                                    fill: #902306;
                                }

                                .cls-2 {
                                    fill: url(#Безымянный_градиент_24);
                                }

                                .cls-3 {
                                    stroke: #aa3a24;
                                    stroke-miterlimit: 10;
                                }

                                .cls-4 {
                                    fill: url(#Безымянный_градиент_26);
                                }

                                .cls-5 {
                                    fill: #f3fdfc;
                                }

                                .cls-6 {
                                    fill: url(#Безымянный_градиент_33);
                                }

                                .cls-7 {
                                    fill: url(#Безымянный_градиент_32);
                                }

                                .cls-8 {
                                    fill: #882118;
                                }

                                .cls-9 {
                                    opacity: 0.2;
                                }

                                .cls-10 {
                                    fill: #fff13e;
                                    opacity: 0.4;
                                }
                            </style>
                            <linearGradient id="Безымянный_градиент_24" x1="150.81" y1="295"
                                x2="150.81" gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#f15a24"></stop>
                                <stop offset="1" stop-color="#fbb03b"></stop>
                            </linearGradient>
                            <linearGradient id="Безымянный_градиент_26" x1="189.29" y1="287.16"
                                x2="162.75" y2="54.51" gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#902306"></stop>
                                <stop offset="1" stop-color="#f48f14"></stop>
                            </linearGradient>
                            <linearGradient id="Безымянный_градиент_33" x1="225" y1="280.32"
                                x2="122.85" y2="69.9" gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#fa6c00"></stop>
                                <stop offset="1" stop-color="#fff473"></stop>
                            </linearGradient>
                            <linearGradient id="Безымянный_градиент_32" x1="111.64" y1="150.32"
                                x2="177.68" y2="150.32" gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#fa6c00"></stop>
                                <stop offset="0.12" stop-color="#fb8919"></stop>
                                <stop offset="0.3" stop-color="#fcaf39"></stop>
                                <stop offset="0.49" stop-color="#fecd52"></stop>
                                <stop offset="0.66" stop-color="#fee364"></stop>
                                <stop offset="0.84" stop-color="#fff06f"></stop>
                                <stop offset="1" stop-color="#fff473"></stop>
                            </linearGradient>
                        </defs>
                        <g id="Слой_2" data-name="Слой 2">
                            <g id="Слой_1-2" data-name="Слой 1">
                                <path class="cls-1"
                                    d="M294.09,131.22s0,0,0,.06q-.19-1.72-.42-3.45c-.3-2.29-.65-4.57-1.07-6.82-.2-1.08-.41-2.16-.62-3.24s-.5-2.32-.76-3.47q-.75-3.33-1.68-6.6c-.31-1.09-.62-2.18-.95-3.26s-.67-2.15-1-3.22q-1.57-4.81-3.49-9.47c-.42-1-.86-2.06-1.3-3.09s-.91-2-1.37-3q-1.4-3-2.94-6-3.06-5.91-6.65-11.5c-.6-.93-1.2-1.86-1.82-2.77s-1.12-1.65-1.69-2.46l-.3-.44q-1.84-2.62-3.82-5.15c-.67-.87-1.35-1.74-2.05-2.59s-1.26-1.55-1.9-2.31q-1.17-1.38-2.37-2.73c-.72-.81-1.44-1.61-2.18-2.41l-.07-.07c-.73-.79-1.48-1.58-2.24-2.36s-1.5-1.54-2.26-2.29-1.64-1.6-2.47-2.39l-2-1.83-.41-.37-1.58-1.4-2-1.73-.81-.68-.6-.5c-.64-.53-1.28-1-1.93-1.56s-1.29-1-2-1.53a147.68,147.68,0,0,0-13.66-9.35l-2.5-1.48-2.81-1.58c-.76-.42-1.52-.83-2.29-1.23s-1.72-.9-2.59-1.33c-2.29-1.15-4.62-2.25-7-3.28l-1.4-.6c-1.27-.54-2.55-1.06-3.83-1.57-1-.39-2-.76-3-1.13l-.17-.06c-.53-.2-1.05-.39-1.58-.57L195,7.82l-1-.35-1.64-.53c-2.86-.92-5.76-1.74-8.69-2.48l-1.44-.36-1.38-.32L179,3.38,177.23,3c-.6-.13-1.21-.25-1.81-.36-1.39-.27-2.79-.51-4.2-.74L170,1.7l-2.16-.31c-1-.15-2.09-.28-3.14-.4L163.31.84Q158.3.3,153.2.11q-.94,0-1.89-.06c-1.27,0-2.54,0-3.81,0s-2.69,0-4,.06l-1.2,0-1.09.05c-.64,0-1.29,0-1.93.09l-.69,0L138,.3l-.31,0L136.4.41c-2.94.22-5.86.53-8.74.92l-1.41.19c-1.15.17-2.3.35-3.44.54l-.57.09-.85.15-.73.14-2.45.47-.44.09q-6.42,1.32-12.63,3.18l-.56.16-1.51.47c-2.2.7-4.39,1.44-6.55,2.24l-.65.24-1.15.44-1.31.5-.73.3-1.45.58-.58.25q-6.7,2.81-13.06,6.24l-.78.43c-2,1.07-3.92,2.2-5.84,3.36l-1.47.9-.51.32-1.4.9-1.34.87-.4.27q-3,2-5.95,4.18l-.87.65-.29.22-.57.43-.3.24c-1,.8-2.07,1.62-3.09,2.45l-1.12.89-.78.64L52.1,35A147.91,147.91,0,0,0,39.56,47c-.49.52-1,1-1.46,1.59L36.66,50.2l-.36.41-.28.32-.23.28c-.15.16-.28.32-.42.48l-.19.22c-.44.52-.88,1-1.31,1.57l-.52.63q-.27.31-.51.63l-.34.41c-.38.45-.74.91-1.09,1.37l-.25.32c-.85,1.09-1.69,2.19-2.51,3.31-.47.62-.92,1.25-1.36,1.88s-1,1.35-1.42,2c-1,1.38-1.9,2.79-2.79,4.21s-1.8,2.86-2.65,4.31c-.43.73-.85,1.46-1.27,2.2L17.93,77c-.85,1.56-1.67,3.15-2.47,4.75-.16.31-.31.63-.47,1-.65,1.34-1.29,2.69-1.91,4.06-.13.29-.27.59-.4.89q-1.06,2.4-2.06,4.85l0,0A147.62,147.62,0,0,0,79.21,278.27,146,146,0,0,0,117,291.84c1.16.25,2.33.48,3.5.69s2.19.39,3.29.57,2.21.35,3.32.5c3.18.44,6.4.78,9.64,1l.9.07.36,0,2.59.14c1,.05,2,.09,3.07.11h.62c1.06,0,2.12,0,3.19,0a147.3,147.3,0,0,0,27.73-2.61h0a146.46,146.46,0,0,0,52.68-21.22,148.07,148.07,0,0,0,54.08-63,147.18,147.18,0,0,0,13-60.64A148.44,148.44,0,0,0,294.09,131.22Zm-47.86,89.65a123.1,123.1,0,0,1-12.91,14.73c-.32-15.87-3.56-29.14-5.53-32.29-3.53,28-7.56,37.59-14.14,47.9q-1.59,1-3.21,2c5.76-20.62,17-45.36-3.37-72.71a93,93,0,0,0-13.76-14.56c-15.07-13.06-28.38-3.07-45,9.31s-36.45,27.16-64.63,23.63c-1.49-.19-3-.42-4.55-.73a86.16,86.16,0,0,1-16.65-5q.1.78.24,1.53c.13.74.29,1.47.46,2.17s.37,1.37.58,2c.15.43.3.86.45,1.27.32.84.67,1.63,1,2.38.19.37.39.74.59,1.1.41.71.85,1.39,1.31,2a16.18,16.18,0,0,0,1.49,1.8c.26.29.52.56.8.83s.55.52.84.77.57.49.87.72.6.46.92.68l.8.53.23.14c.25.16.51.31.76.45l.21.11c.31.18.62.34.94.49l.8.38.51.22.69.27c.29.13.59.23.89.33s.49.18.75.25l.45.14c.22.07.45.14.68.19s.68.19,1,.27.54.13.82.18c.91.2,1.85.36,2.81.49l.94.11c.42.05.85.09,1.28.12l1.29.08c15.36.79,34.47-5.6,48.25-11.43,5.77,13-19.71,38.92-37.62,56.65a123.42,123.42,0,0,1-54.42-46.1l-.09-.13a124.38,124.38,0,0,1-7.49-13.35c-.26-.54-.51-1.07-.76-1.61s-.39-.85-.58-1.27-.36-.79-.53-1.19L34,195.07c-.25-.61-.51-1.22-.75-1.84s-.54-1.35-.8-2-.51-1.36-.75-2c-.1-.26-.19-.53-.28-.79-.34-1-.66-1.9-1-2.85-.06-.18-.11-.36-.17-.53-.22-.69-.44-1.38-.64-2.07s-.42-1.4-.61-2.11-.4-1.42-.58-2.13-.33-1.27-.49-1.92a2.25,2.25,0,0,0-.05-.22c-.15-.63-.3-1.26-.44-1.89-.19-.81-.36-1.62-.52-2.43s-.29-1.46-.43-2.19c-.27-1.46-.52-2.93-.73-4.41-.11-.73-.21-1.47-.31-2.21-.14-1.11-.27-2.21-.38-3.33q-.09-.78-.15-1.56c-.06-.62-.11-1.24-.15-1.87s-.1-1.4-.14-2.1q-.19-3.5-.2-7.05a123,123,0,0,1,245.78-7.44q.23,3.69.22,7.44A122.48,122.48,0,0,1,246.23,220.87Z">
                                </path>
                                <path class="cls-2"
                                    d="M295,147.5A147.5,147.5,0,0,1,175.24,292.39h0A147.3,147.3,0,0,1,147.5,295c-1.07,0-2.13,0-3.19,0h-.62c-1,0-2.05-.06-3.07-.11L138,294.7l-.36,0-.9-.07c-3.24-.23-6.46-.57-9.64-1-1.11-.15-2.22-.32-3.32-.5s-2.2-.37-3.29-.57a63.16,63.16,0,0,0,3.21-6.43A55.29,55.29,0,0,0,128.21,269l2.36.35c1.58.22,3.17.41,4.77.56l1.89.17.81.07.37,0c.58,0,1.17.09,1.76.12q1.22.08,2.43.12c.57,0,1.14,0,1.72.06h1.31c.62,0,1.24,0,1.87,0,1.93,0,3.85,0,5.76-.13q4.8-.22,9.51-.81a122.22,122.22,0,0,0,47.67-16.37q1.62-1,3.21-2A123,123,0,0,0,270.5,147.5q0-3.75-.22-7.44A123,123,0,0,0,24.5,147.5q0,3.56.2,7.05c0,.7.08,1.4.14,2.1s.09,1.25.15,1.87.09,1,.15,1.56c.11,1.12.24,2.22.38,3.33.1.74.2,1.48.31,2.21.21,1.48.46,2.95.73,4.41.14.73.28,1.46.43,2.19s.33,1.62.52,2.43c.14.63.29,1.26.44,1.89a2.25,2.25,0,0,1,.05.22c.16.65.32,1.29.49,1.92s.38,1.42.58,2.13.4,1.41.61,2.11.42,1.38.64,2.07c.06.17.11.35.17.53.31.95.63,1.9,1,2.85.09.26.18.53.28.79.24.68.5,1.36.75,2s.53,1.36.8,2,.5,1.23.75,1.84l.72,1.68c.17.4.35.79.53,1.19s.38.85.58,1.27.5,1.07.76,1.61a124.38,124.38,0,0,0,7.49,13.35C31.2,194.89,26,186.83,18.84,164.72c-2,8.48,2.68,30.89,9.63,47.31C22,200.28,0,185.88,8.56,97.91A147.25,147.25,0,0,1,17.93,77l1.23-2.21c.42-.74.84-1.47,1.27-2.2q1.29-2.17,2.65-4.31t2.79-4.21L27.31,62h0c.43-.62.88-1.24,1.33-1.85.82-1.12,1.66-2.22,2.51-3.31l.25-.32.29-.36,1.14-1.42q.24-.32.51-.63l.52-.63c.49-.6,1-1.2,1.5-1.79.14-.16.27-.32.42-.48l.23-.28.28-.32c.59-.68,1.19-1.35,1.8-2s1-1.07,1.46-1.59A147.91,147.91,0,0,1,52.1,35l.78-.66.78-.64Q55.33,32.33,57,31l1.14-.88.57-.43.29-.22.87-.65q2.93-2.16,5.95-4.18l.4-.27,1.34-.87,1.4-.9c.14-.09.28-.18.43-.26l.08-.06,1.47-.9c1.92-1.16,3.86-2.29,5.84-3.36l.78-.43q6.34-3.44,13.06-6.24l.58-.25,1.45-.58.73-.3,1.31-.5,1.15-.44.65-.24c2.16-.8,4.35-1.54,6.55-2.24l1.51-.47.56-.16Q111.35,4.32,117.77,3l.44-.09,2.45-.47.73-.14.32,0,.14,0,1-.17c1.14-.19,2.29-.37,3.44-.54l1.41-.19c2.88-.39,5.8-.7,8.74-.92l1.32-.09.31,0,.53,0,.69,0c.64,0,1.29-.07,1.93-.09l1.09-.05,1.2,0c1.34,0,2.68-.06,4-.06s2.54,0,3.81.05q.94,0,1.89.06,5.1.2,10.11.73l1.35.15c1.05.12,2.1.25,3.14.4L170,1.7l1.26.2c1.41.23,2.81.47,4.2.74.6.11,1.21.23,1.81.36l1.79.38,1.79.4,1.38.32,1.44.36c2.93.74,5.83,1.56,8.69,2.48l1.64.53,1,.35,1.6.55c.53.18,1.05.37,1.58.57l.17.06c1,.37,2,.74,3,1.13,1.28.51,2.56,1,3.83,1.57l1.4.6c2.36,1,4.69,2.13,7,3.28.87.43,1.73.88,2.59,1.33s1.53.81,2.29,1.23l2.81,1.58,2.5,1.48a147.68,147.68,0,0,1,13.66,9.35c.66.5,1.3,1,2,1.53s1.29,1,1.93,1.56l.6.5.81.68,2,1.73,1.58,1.4.41.37,2,1.83c.83.79,1.65,1.59,2.47,2.39s1.52,1.52,2.26,2.29,1.51,1.57,2.24,2.36l.07.07c.74.8,1.46,1.6,2.18,2.41s1.59,1.81,2.37,2.73c.64.76,1.28,1.53,1.9,2.31s1.38,1.72,2.05,2.59q2,2.52,3.82,5.15l.3.44c.57.81,1.14,1.63,1.69,2.46s1.22,1.84,1.82,2.77q3.59,5.58,6.65,11.5,1.54,3,2.94,6c.46,1,.92,2,1.37,3s.88,2.06,1.3,3.09q1.92,4.65,3.49,9.47c.36,1.07.7,2.15,1,3.22s.64,2.17.95,3.26q.93,3.27,1.68,6.6c.26,1.15.52,2.31.76,3.47s.42,2.16.62,3.24c.42,2.25.77,4.53,1.07,6.82q.22,1.72.42,3.45s0,0,0-.06A148.44,148.44,0,0,1,295,147.5Z">
                                </path>
                                <path class="cls-3"
                                    d="M122.44,109.14c-6.84-8.38-5.34-35.62-1.91-51.43.84-3.87,5.44-6.92,8.66-4.61C135.49,57.61,142.82,65,150.24,73c6.33,6.89,1.21,17.84.06,20C144.36,104.27,128,115.92,122.44,109.14Z">
                                </path>
                                <path class="cls-4"
                                    d="M292.51,174.62A147.09,147.09,0,0,1,248,255.47a148.47,148.47,0,0,1-20.08,15.7,146.46,146.46,0,0,1-52.68,21.22h0A147.3,147.3,0,0,1,147.5,295c-1.07,0-2.13,0-3.19,0h-.62c-1,0-2.05-.06-3.07-.11L138,294.7l-.36,0-.9-.07c-3.24-.23-6.46-.57-9.64-1-1.11-.15-2.22-.32-3.32-.5s-2.2-.37-3.29-.57-2.34-.44-3.5-.69a146,146,0,0,1-37.81-13.57l.13-.11,1.18-1c1.69-1.44,3.52-3,5.47-4.76l.91-.83c1.9-1.71,3.91-3.57,6-5.63l1.08-1c.72-.7,1.47-1.42,2.22-2.17l2.38-2.35c17.91-17.73,43.39-43.69,37.62-56.65C122.47,209.58,103.36,216,88,215.18l-1.29-.08c-.43,0-.86-.07-1.28-.12l-.94-.11c-1-.13-1.9-.29-2.81-.49-.28,0-.55-.11-.82-.18s-.7-.17-1-.27-.46-.12-.68-.19l-.45-.14c-.26-.07-.5-.16-.75-.25s-.6-.2-.89-.33l-.69-.27-.51-.22-.8-.38c-.32-.15-.63-.31-.94-.49l-.21-.11c-.25-.14-.51-.29-.76-.45l-.23-.14-.8-.53c-.32-.22-.62-.44-.92-.68s-.59-.47-.87-.72-.57-.5-.84-.77-.54-.54-.8-.83a16.18,16.18,0,0,1-1.49-1.8,20.12,20.12,0,0,1-1.31-2c-.2-.36-.4-.73-.59-1.1a21.36,21.36,0,0,1-1-2.38c-.15-.41-.3-.84-.45-1.27-.21-.66-.4-1.33-.58-2s-.33-1.43-.46-2.17q-.13-.75-.24-1.53c-.12-.77-.2-1.56-.27-2.37a3.05,3.05,0,0,1,0-.8,2.5,2.5,0,0,1,0-.29c0-.1,0-.2.07-.3l.09-.29.12-.3c0-.1.09-.19.14-.29s.1-.2.16-.3a2.38,2.38,0,0,1,.18-.3,6.52,6.52,0,0,1,.42-.59,11.9,11.9,0,0,1,.84-1l.25-.25q.3-.31.66-.63l.36-.33c4.3-3.79,12.42-8.54,22.57-16.71l.88-.71c.51-.41,1-.83,1.54-1.27l.91-.76,1.26-1.07.8-.7q3.24-2.82,6.67-6.13c-5.18-21.86,7.19-39.09,20.72-50.93a139.64,139.64,0,0,1,25.28-17.07,41.57,41.57,0,0,1,4-16.74,80.92,80.92,0,0,1,17.54-24.36,6.22,6.22,0,0,1,8.37-.16c9.87,8.84,23.41,36,20.76,58.57,6.05-8,4.36-12.32,3.34-20.31,12.33,7.46,44.35,23,70,53.31A151.94,151.94,0,0,1,292.51,174.62Z">
                                </path>
                                <path class="cls-5"
                                    d="M209.73,244c-.22.07-7.11-23.48-12.38-23,3.05,7.79,3.82,23.52-1.18,39.49-3.57,11.46-10.12,23.05-20.93,31.9h0A147.3,147.3,0,0,1,147.5,295c-1.07,0-2.13,0-3.19,0h-.62c-1,0-2.05-.06-3.07-.11L138,294.7l-.36,0-.9-.07c-3.24-.23-6.46-.57-9.64-1-1.11-.15-2.22-.32-3.32-.5s-2.2-.37-3.29-.57-2.34-.44-3.5-.69q3.53-2.79,6.71-5.74a133.21,133.21,0,0,0,14.67-15.93h0a149.94,149.94,0,0,0,16-25.38c.36-.72.7-1.42,1-2.08.11-.22.21-.44.31-.65,1.2-2.56,2-4.59,2.57-5.92.09-.23.17-.45.24-.64l.24-.66.06-.18a1.15,1.15,0,0,0,.07-.26c-.09-.09-16.86,22.4-23.24,19.45,20.27-21.35,15.16-42.19,14.4-52.3.41-.31.82-.61,1.24-.89s.65-.45,1-.65c.51-.33,1-.65,1.55-.95s.86-.48,1.3-.7c.87-.45,1.74-.87,2.62-1.24l1.31-.55c.95-.37,1.89-.7,2.83-1,.31-.1.61-.2.9-.28,1.58-.48,3.13-.86,4.61-1.17l1.21-.24c1.79-.34,3.47-.58,5-.77l1-.11c1.43-.16,2.67-.27,3.67-.38l.63-.07.55-.07.24,0,.43-.07c.51-.11.79-.24.79-.41h0c-11.31-8.13-32.34-1.89-37.64-4.8,6.72-4.86,10.08-6.37,9.6-8.33-4.13,1.38-42.06,28.56-62,28.56l-.87,0-.68,0-.42,0a15.19,15.19,0,0,1-2.21-.39l-.62-.18-.65-.23c-.25-.09-.49-.2-.73-.31l0,0A9,9,0,0,1,82,204.21l-.33-.37a4.16,4.16,0,0,1-.32-.39,10.88,10.88,0,0,1-1.52-2.83,15.26,15.26,0,0,1-.68-2.49,31,31,0,0,1,.2-10.23c33.35-4.09,97.26-59.87,130.36-16.42,2.18,2.87-10.19-10.35-16.42-5.56a47.74,47.74,0,0,1,13.76,14.56C223.25,207.15,210,243.87,209.73,244Z">
                                </path>
                                <path class="cls-6"
                                    d="M288.72,190.23c-6.39-6.2-15.88-23.6-16.56-24.75A171.81,171.81,0,0,1,282,208.14a148,148,0,0,1-34,47.33h0a231.53,231.53,0,0,0-1.75-34.6c-2.94-24-10.16-53.74-26.9-73.89,16.42,2.78,30.63,24.5,38.55,35.59,2.85-2.33-31-61.68-58.26-70.2-.63,4.92-.44,9.47-5.05,19.7.44-12.31-.85-23.07-4-23.49-.38,3.28-2.27,9.34-9.6,18.94,2.78-16.42,16.93-59.11-10.61-73-2.17-1.09-14.26,8.94-17.12,25h0a38.74,38.74,0,0,0-.59,7.42h0a40.69,40.69,0,0,0,1,8.47,70.85,70.85,0,0,1-7.91,4.15h0c-6.89,3.22-14.75,6.43-20.61,11.3a24.51,24.51,0,0,0-6.83,8.55c.47,1.09,15.66-2,24.25-5.31-3.9,4.75-52,22-34.36,47.5C92.45,170,75.57,188.16,62.28,190a2.5,2.5,0,0,1,0-.29c0-.1,0-.2.07-.3l.09-.29.12-.3c0-.1.09-.19.14-.29s.1-.2.16-.3a2.38,2.38,0,0,1,.18-.3,6.52,6.52,0,0,1,.42-.59,11.9,11.9,0,0,1,.84-1l.25-.25q.3-.31.66-.63l.36-.33c4.3-3.79,12.42-8.54,22.57-16.71l.88-.71c.51-.41,1-.83,1.54-1.27l.91-.76,1.26-1.07.8-.7q3.24-2.82,6.67-6.13c-5.18-21.86,7.19-39.09,20.72-50.93a139.64,139.64,0,0,1,25.28-17.07,41.57,41.57,0,0,1,4-16.74,80.92,80.92,0,0,1,17.54-24.36,6.22,6.22,0,0,1,8.37-.16c9.87,8.84,23.41,36,20.76,58.57,6.05-8,4.36-12.32,3.34-20.31,12.33,7.46,44.35,23,70,53.31a151.94,151.94,0,0,1,22.23,34.56A146.79,146.79,0,0,1,288.72,190.23Z">
                                </path>
                                <path class="cls-1"
                                    d="M168.27,61.26c-10.21,8.6-13.05,20.93-14.63,34.18a70.85,70.85,0,0,1-7.91,4.15h0c-2.19,1-4.48,2-6.78,3.13,13.7-3.78,21.76-1.44,28.79-.21.85-10.7.71-17.33,3.22-19.7-.85,2.51,1.8,11.93,5.68,17C179.54,73.46,173.1,62.72,168.27,61.26Z">
                                </path>
                                <path class="cls-7"
                                    d="M111.64,158c5.44-6.65,52.2-26.05,66-7.77C160.15,138.42,123.08,154.35,111.64,158Z">
                                </path>
                                <path class="cls-8"
                                    d="M111.64,158c22.74-27.47,40.17-40,49.65-25-4-3-11.75-5.31-17.06,8.34-.59,1.53,4.29,1.26,13.17,1.26C139.47,146.15,127.62,149.5,111.64,158Z">
                                </path>
                                <path class="cls-9"
                                    d="M182.7,240c3.05-1.62,4.73-40.24-1.77-48,.11,1.41-17.74-.31-30.82,9.6.76,10.11,5.87,31-14.4,52.3,6.38,3,23.15-19.54,23.24-19.45a76.76,76.76,0,0,1-4.5,10.39c3.94-5.62,7.16-10.36,8.45-9.64,4,2.24-11.47,42.16-17.84,52.8,4.65-2.64,26.27-15.37,31.57-65.68C179.29,227.19,181.18,228.8,182.7,240Z">
                                </path>
                                <path class="cls-9"
                                    d="M209.73,244c-.22.07-7.11-23.48-12.38-23,3.05,7.79,3.82,23.52-1.18,39.49-3.57,11.46-10.12,23.05-20.93,31.9h0A147.3,147.3,0,0,1,147.5,295c-1.07,0-2.13,0-3.19,0h-.62c-1,0-2.05-.06-3.07-.11L138,294.7l-.36,0-.9-.07c-3.24-.23-6.46-.57-9.64-1-1.11-.15-2.22-.32-3.32-.5s-2.2-.37-3.29-.57-2.34-.44-3.5-.69q3.53-2.79,6.71-5.74a133.21,133.21,0,0,0,14.67-15.93h0a149.94,149.94,0,0,0,16-25.38c.36-.72.7-1.42,1-2.08.11-.22.21-.44.31-.65,1.2-2.56,2-4.59,2.57-5.92.09-.23.17-.45.24-.64l.24-.66.06-.18a1.15,1.15,0,0,0,.07-.26c-.09-.09-16.86,22.4-23.24,19.45,20.27-21.35,15.16-42.19,14.4-52.3.41-.31.82-.61,1.24-.89s.65-.45,1-.65c.51-.33,1-.65,1.55-.95s.86-.48,1.3-.7c.87-.45,1.74-.87,2.62-1.24l1.31-.55c.95-.37,1.89-.7,2.83-1,.31-.1.61-.2.9-.28,1.58-.48,3.13-.86,4.61-1.17l1.21-.24c1.79-.34,3.47-.58,5-.77l1-.11c1.43-.16,2.67-.27,3.67-.38l.63-.07.55-.07.24,0,.43-.07c.51-.11.79-.24.79-.41h0c-11.31-8.13-32.34-1.89-37.64-4.8,6.72-4.86,10.08-6.37,9.6-8.33-4.13,1.38-42.06,28.56-62,28.56l-.87,0-.68,0-.42,0a15.19,15.19,0,0,1-2.21-.39l-.62-.18-.65-.23c-.25-.09-.49-.2-.73-.31l0,0A20.28,20.28,0,0,1,82,204.21l-.33-.37a4.16,4.16,0,0,1-.32-.39,10.88,10.88,0,0,1-1.52-2.83l3.87-1.76c27-12.28,48.21-20.87,64.63-23.63,12.17-2,21.71-.89,29,4.34,1.61-6.9-7-14.15-6.31-14.15C185.73,165.4,216.8,195,209.73,244Z">
                                </path>
                                <path class="cls-10"
                                    d="M147.5,0A147.3,147.3,0,0,0,27.29,62C126-29.06,253.92,9.88,294.11,131.28A147.52,147.52,0,0,0,147.5,0Z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <div class="ms-3 fw-bold text-roboto" style="font-size: 30px; color:#aa3a24;">
                        FOXIT</div>
                </a>
            </div>
            {{-- Группа кнопок --}}
            <div class="col-lg-3 col-md-5 collapse navbar-collapse">
                <div class="col-lg-2 col-md-1 d-flex align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                        fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </div>
                @if (Auth::check())
                    <a href="{{ route('cabinet') }}" class="text-decoration-none text-white">
                        <div class="col-lg-12 col-md-1 d-flex align-items-center justify-content-center"
                            type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path
                                    d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z" />
                            </svg>
                        </div>
                    </a>
                @else
                    <div class="col-lg-2 col-md-1 d-flex align-items-center justify-content-center"
                        type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                            fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path
                                d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z" />
                        </svg>
                    </div>
                @endif
                <div class="col-lg-8 col-md-8 d-flex justify-content-end">
                    <button type="button" class="btn btn-primary border-0 col-10 fw-bold"
                        style="background: #365EDC;">Подать заявку</button>
                </div>
            </div>
        </div>
        {{-- Разделы меню --}}
        @include('top_menu')
        {{-- <div class="text-center fw-bolder fs-12 text-montserrat text-white py-2 justify-content-center align-items-center collapse navbar-collapse"
            style="letter-spacing: 0.96px; min-height: 66px;">
            <a class="col-2 text-white" style="text-decoration: none;" href="{{ route('company') }}">
                <div class="col-12">КОМПАНИЯ</div>
            </a>
            <a class="col-2 text-white" style="text-decoration: none;"
                href="{{ route('services') }}">
                <div class="col-12">УСЛУГИ</div>
            </a>
            <a class="col-2 text-white" style="text-decoration: none;"
                href="{{ route('projects') }}">
                <div class="col-12">ПРОЕКТЫ</div>
            </a>
            <a class="col-2 text-white" style="text-decoration: none;" href="{{ route('news') }}">
                <div class="col-12">НОВОСТИ</div>
            </a>
            <a class="col-2 text-white" style="text-decoration: none;"
                href="{{ route('contacts') }}">
                <div class="col-12">КОНТАКТЫ</div>
            </a>
        </div> --}}
        {{-- Модалка логина/регистрации --}}
        {{-- <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" id="">
            ...
        </div> --}}

        {{-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Understood</button>
                </div>
              </div>
            </div>
          </div> --}}




    </div>
