@extends('index')

@section('content')
    <div class="mt-for-header" style="background: #ffffff;">
        <div class="mx-auto col-11 col-lg-9">
            <div class="col-lg-4 col-sm-6 col-md-10 pt-5 title">Контакты</div>
            <div class="mt-2 mb-5 title-over">Главная — Контакты
            </div>
        </div>
        <div class="mx-auto col-11 col-lg-9 d-lg-flex row-col-lg-2 row-cols-1 pb-5">
            <div class="col-12 col-lg-9">
                <div class="bg-secondary rounded-1" style=" margin: 0; width: 100%; height: 500px;">
                    <div style="position:relative;overflow:hidden;"><a
                            href="https://yandex.ru/maps/172/ufa/?utm_medium=mapframe&utm_source=maps"
                            style="color:#eee;font-size:12px;position:absolute;top:0px;">Уфа</a><a
                            href="https://yandex.ru/maps/172/ufa/house/verkhnetorgovaya_ploshchad_1/YUwYfwNkSEIDQFtufXtzdXRgZw==/?indoorLevel=1&ll=55.944526%2C54.724902&utm_medium=mapframe&utm_source=maps&z=18"
                            style="color:#eee;font-size:12px;position:absolute;top:14px;">Верхнеторговая
                            площадь, 1 — Яндекс Карты</a><iframe
                            src="https://yandex.ru/map-widget/v1/?indoorLevel=1&ll=55.944526%2C54.724902&mode=poi&poi%5Bpoint%5D=55.944252%2C54.724755&z=18"
                            width=100% height="500" frameborder="1" allowfullscreen="true"
                            style="position:relative;"></iframe></div>
                </div>
                <div class="mt-5 title-preview">
                    <div class="text-montserrat fs-22 text-dark fw-bolder">Региональные
                        представительства</div>
                    <div class="mt-3">
                        Наша компания имеет широкую сеть региональных представительств и дилеров. Вы
                        можете обратиться в ближайший к Вам офис для получения дополнительных
                        консультаций.
                    </div>
                    <div class="text-roboto fs-22 text-dark fw-bolder mt-5 mb-4 d-none">Республика
                        Башкортостан
                    </div>
                    <div class="border-custom p-4 d-flex d-none">
                        <div class="col-2">
                            <div class="bg-secondary rounded-1"
                                style="width: 150px; height: 100px; background: url(https://allcorp3-demo.ru/upload/medialibrary/bf7/branch-2.jpg) no-repeat; max-width:100%;
                                max-height:100%; background-size: contain">
                            </div>
                        </div>
                        <div class="col-3 ms-4 text-dark">
                            <div class="fw-bold fs-17 text-roboto ">г. Уфа, ул.Энтузиастов,
                                30</div>
                            <div class="fw-light fs-14 mt-1">
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
                                <span>Пн - Пт: 9.00 - 18.00</span>
                            </div>
                            <div class="fw-light fs-14 mt-1">Сб - Вс: выходные</div>
                            <div class="fw-bold fs-16">
                                <img class=" lazyloaded"
                                    src="https://allcorp3-demo.ru/upload/uf/3d2/3d2c70da2941586617f544d9f1ae785f.svg"
                                    data-src="/upload/uf/3d2/3d2c70da2941586617f544d9f1ae785f.svg"
                                    alt="Наличные" height="20">
                                <img class="ms-2 lazyloaded"
                                    src="https://allcorp3-demo.ru/upload/uf/275/275bfcb11541e92677fc181207bf1c40.svg"
                                    data-src="/upload/uf/275/275bfcb11541e92677fc181207bf1c40.svg"
                                    alt="Карты МИР" height="10">
                            </div>
                        </div>
                        <div class="col-3 ms-5 text-montserrat fw-light fs-15 text-dark">
                            <div class="">+7 (000) 000-00-00</div>
                            <div class="">+7 (000) 000-00-01</div>
                            <div class="mt-2">info@site.ru</div>
                        </div>
                        <div class="col-2 text-primary text-center">На карте</div>
                        <div class="col-1 text-end">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                fill="#E5E5E5" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-group-vertical col-lg-3 col-12 h-50 fs-15 fw-light text-montserrat ps-lg-3 mt-md-4 mt-lg-0"
                style="position: sticky; top: 50px;">
                <div class="col-12">
                    <div
                        class="border rounded-1 flex-lg-column d-md-flex align-items-md-top p-lg-0 p-md-4 p-4">
                        <div class="col-lg-12 col-md-6 rounded-1 d-flex align-items-end"
                            style="height: 235px; background: url(https://allcorp3-demo.ru/upload/medialibrary/bf7/branch-2.jpg) no-repeat; max-width:100%;
                            max-height:100%; background-size: contain">
                            <div
                                class="text-white text-montserrat fw-light col-9 ps-4 py-3 d-md-none d-lg-block">
                                <div class="fs-13">Центральный офис</div>
                                <div class="fs-18">Москва,ул.Пушкина 21,3 этаж, офис 41</div>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-5 mx-auto py-lg-3 py-md-0">
                            <div
                                class="text-dark col-12 pb-3 d-lg-none d-md-block">
                                <div class="card-date">Центральный офис</div>
                                <div class="card-title fs-18">Москва, ул. Пушкина 21, 3 этаж, офис 41</div>
                            </div>
                            <div class="card-date mt-lg-3 mt-md-0" style="color: #999999">Режим работы
                            </div>
                            <div class="card-title-preview mt-1">Пн. – Пт.: с 9:00 до 18:00</div>
                            <div class="card-date mt-3" style="color: #999999">Телефон
                            </div>
                            <div class="card-title-preview mt-1">+7 000 000-00-22</div>
                            <div class="card-title-preview mt-1">+7 000 000-00-11</div>
                            <div class="card-date mt-3" style="color: #999999">E-mail
                            </div>
                            <div class="card-title-preview mt-1">no-reply@aspro-demo.ru</div>
                            <a href="#"
                                class="btn btn-outline-primary mt-4 mb-3 col-12 fw-bolder text-montserrat fs-14">Написать
                                сообщение</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
