@section('footer')
    {{-- Футер --}}
    <div class="" style="background: #333333;">
        <div class="col-11 col-lg-9 mx-auto">
            <div class="d-flex justify-content-between py-5">
                {{-- Колонки --}}
                <div class="row row-cols-3 col-lg-9 col-md-9 col-6 navbar-expand-md">
                    <div class="col-lg-4 col-md-4 col-6 mb-3">
                        <h5 class="fw-bold text-white fs-18">Компания</h5>
                        <ul class="nav fs-15 flex-column fw-light text-white mt-4">
                            <li class="nav-item mb-2 "><a href="#"
                                    class="nav-link p-0 text-999 text-montserrat">О компании</a></li>
                            <li class="nav-item mb-2 "><a href="#"
                                    class="nav-link p-0 text-999 text-montserrat">Услуги</a></li>
                            <li class="nav-item mb-2 "><a href="#"
                                    class="nav-link p-0 text-999 text-montserrat">Работы</a></li>
                            <li class="nav-item mb-2 "><a href="#"
                                    class="nav-link p-0 text-999 text-montserrat">Новости</a></li>
                            <li class="nav-item mb-2 "><a href="#"
                                    class="nav-link p-0 text-999 text-montserrat">Контакты</a></li>
                        </ul>
                    </div>
                    <div class="collapse navbar-collapse col-8">
                        <div class="col-lg-6 col-md-6 col-4 mb-3">
                            <h5 class="fw-bold text-white fs-18">Работы
                            </h5>
                            <ul class="nav fs-15 flex-column fw-light text-muted mt-4">
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-999 text-montserrat">Строительство</a>
                                </li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-999 text-montserrat">Юриспруденция</a>
                                </li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-999 text-montserrat">Beauty</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-999 text-montserrat">Розница</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-999 text-montserrat">Авто</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-6 col-md-6 col-4 mb-3">
                            <h5 class="fw-bold text-white fs-18">Услуги
                            </h5>
                            <ul class="nav flex-column fw-light text-muted mt-4 fs-15">
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-999 text-montserrat">Корпоративные</a>
                                </li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-999 text-montserrat">Интернет-магазины</a>
                                </li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-999 text-montserrat">Сервисы</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-999 text-montserrat">Персональные</a>
                                </li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-999 text-montserrat">Лендинги</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-6 mb-3">
                    <div class="d-flex justify-content-md-between justify-content-lg-start col-12">
                        <div class="col-lg-1 col-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                fill="grey" class="bi bi-telephone" viewBox="0 0 16 16">
                                <path
                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg>
                        </div>
                        <div class="col-lg-6 col-10"><a href="tel:{{ $contacts->phone }}"
                                class="text-white fs-17"
                                style="text-decoration: none;">{{ $contacts->phone }}</a></div>
                    </div>
                    <div class="d-flex justify-content-md-between justify-content-lg-start col-12 mt-4">
                        <div class="col-lg-1 col-2 d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                fill="grey" class="bi bi-envelope" viewBox="0 0 16 16">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                            </svg>
                        </div>
                        <div class="col-lg-6 col-10"><a href="mailto:{{ $contacts->email }}"
                                class="text-white fs-17 ms-lg-2 ms-md-2 ms-0"
                                style="text-decoration: none;">{{ $contacts->email }}</a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start col-lg-6 col-12 mt-4">
                        @if ($contacts->inst != null)
                            <a href="{{ $contacts->inst }}" class="text-decoration-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"
                                    width="25" height="25" fill="#999999" class="mx-lg-3 mx-0">
                                    <path
                                        d="M 7.546875 0 C 3.390625 0 0 3.390625 0 7.546875 L 0 18.453125 C 0 22.609375 3.390625 26 7.546875 26 L 18.453125 26 C 22.609375 26 26 22.609375 26 18.453125 L 26 7.546875 C 26 3.390625 22.609375 0 18.453125 0 Z M 7.546875 2 L 18.453125 2 C 21.527344 2 24 4.46875 24 7.546875 L 24 18.453125 C 24 21.527344 21.53125 24 18.453125 24 L 7.546875 24 C 4.472656 24 2 21.53125 2 18.453125 L 2 7.546875 C 2 4.472656 4.46875 2 7.546875 2 Z M 20.5 4 C 19.671875 4 19 4.671875 19 5.5 C 19 6.328125 19.671875 7 20.5 7 C 21.328125 7 22 6.328125 22 5.5 C 22 4.671875 21.328125 4 20.5 4 Z M 13 6 C 9.144531 6 6 9.144531 6 13 C 6 16.855469 9.144531 20 13 20 C 16.855469 20 20 16.855469 20 13 C 20 9.144531 16.855469 6 13 6 Z M 13 8 C 15.773438 8 18 10.226563 18 13 C 18 15.773438 15.773438 18 13 18 C 10.226563 18 8 15.773438 8 13 C 8 10.226563 10.226563 8 13 8 Z" />
                                </svg></a>
                        @endif
                        @if ($contacts->whatsapp != null)
                            <a href="{{ $contacts->whatsapp }}" class="text-decoration-none ms-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                    fill="#999999" class="bi bi-whatsapp mx-lg-3 mx-0"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                </svg>
                            </a>
                        @endif
                        @if ($contacts->vk != null)
                            <a href="{{ $contacts->vk }}" class="text-decoration-none ms-4">
                                <img class="mx-lg-3 mx-0" src="/img/vk.png" height="32"></a>
                        @endif
                        @if ($contacts->tg != null)
                            <a href="{{ $contacts->tg }}" class="text-decoration-none ms-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                    fill="#999999" class="bi bi-telegram" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z" />
                                </svg>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
            {{-- Разделитель (полоска вместо <hr>) --}}
            <div class="" style="height: 1.5px; background: #484848;"></div>
            <div class="d-flex row row-cols-lg-4 row-cols-md-2 row-cols-sm-1 text-start py-4">
                <div class="col-lg-3 col-md-6 col-sm-12 my-2 my-md-2 my-lg-0 fw-light fs-17 text-999">
                    2023 © FoxIT Все права защищены
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 my-2 my-md-2 my-lg-0 fw-light fs-17 text-999">
                    Политика конфиденциальности</div>
                <div class="col-lg-3 col-md-6 col-sm-12 my-2 my-md-2 my-lg-0 fw-light fs-17 text-999">
                    Способы оплаты</div>
                <div
                    class="col-lg-3 col-md-6 col-sm-12 my-2 my-md-2 my-lg-0 fw-light fs-17 text-999 d-flex">
                    Разработано в <span class="fw-bold">
                        &nbsp;FoxIT
                    </span>
                </div>
            </div>
        </div>
    </div>
