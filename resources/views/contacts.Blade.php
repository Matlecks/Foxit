@extends('index')

@section('content')
    <div class="mt-for-header" style="background: #ffffff;">
        <div class="mx-auto col-11 col-lg-10">
            <div class="col-lg-4 col-sm-6 col-md-10 pt-5 title">Контакты</div>
            <div class="mt-2 mb-5 title-over">Главная — Контакты
            </div>
        </div>
        <div class="mx-auto col-11 col-lg-10 d-lg-flex row-col-lg-2 row-cols-1 pb-5">
            <div class="col-12 col-lg-9">
                <div class="bg-secondary rounded-1" style=" margin: 0; width: 100%; height: 500px;">
                    <div style="position:relative;overflow:hidden;"><a
                            href="https://yandex.ru/maps/org/kvartal/49212933977/?utm_medium=mapframe&utm_source=maps"
                            style="color:#eee;font-size:12px;position:absolute;top:0px;">Квартал</a><a
                            href="https://yandex.ru/maps/239/sochi/category/business_center/184107509/?utm_medium=mapframe&utm_source=maps"
                            style="color:#eee;font-size:12px;position:absolute;top:14px;">Бизнес-центр в
                            Сочи</a><iframe
                            src="https://yandex.ru/map-widget/v1/?ll=39.725189%2C43.590309&mode=search&oid=49212933977&ol=biz&sctx=ZAAAAAgBEAAaKAoSCe%2FjaI6s3ENAESgMyjSaykVAEhIJhCugUE8f0j8R18OXiSKkvj8iBgABAgMEBSgKOABA8YAHSAFiIGFkZF9zbmlwcGV0PXBob3RvX2VtYmVkZGluZ3MvMi54YiNyZW1vdmVfc25pcHBldD1waG90b19lbWJlZGRpbmdzLzEueGIzcmVhcnI9c2NoZW1lX0xvY2FsL0dlby9Db2xsZWN0aW9ucy9FbmFibGVkTWl4PWZhbHNlagJydZ0BzcxMPaABAKgBAL0BXIL%2B3MIBBtmOx6q3AeoBAPIBAPgBAIICE9Cx0YYg0LrQstCw0YDRgtCw0LuKAgCSAgCaAgxkZXNrdG9wLW1hcHM%3D&sll=39.725189%2C43.590309&sspn=0.003353%2C0.001417&text=%D0%B1%D1%86%20%D0%BA%D0%B2%D0%B0%D1%80%D1%82%D0%B0%D0%BB&z=19.2"
                            width=100% height="500" frameborder="1" allowfullscreen="true"
                            style="position:relative;"></iframe></div>
                </div>
                <div class="mt-5 title-preview">
                    <div class="text-montserrat fs-22 text-dark fw-bolder">Расположение</div>
                    <div class="mt-3">
                        В нашей компании все сотрудники работают удаленно из разных городов России и мы
                        не располагаемся в офисе. Если вам необходимо встретиться лично, то встречи
                        проводятся по уговоренному адресу города Сочи
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
                            <div class=""><a href="tel:+79279358355">+7 (927) 935-83-55</a></div>
                            {{-- <div class="">+7 (000) 000-00-01</div> --}}
                            <div class="mt-2"><a
                                    href="mailto:damir-khaybulin@mail.ru">damir-khaybulin@mail.ru</a>
                            </div>
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
                            style="height: 235px; background: url(https://avatars.mds.yandex.net/get-altay/5587495/2a0000017de42ee855d1753692701dbc33a2/XXXL) no-repeat; max-width:100%;
                            max-height:100%; background-size: cover">
                            <div
                                class="text-white text-montserrat fw-light col-9 ps-4 py-4 d-md-none d-lg-block">
                                <div class="fs-13">Центральный офис</div>
                                <div class="fs-18">Сочи, ул. Навагинская 13/1, микрорайон Центральный</div>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-5 mx-auto py-lg-3 py-md-0">
                            <div class="text-dark col-12 pb-3 d-lg-none d-md-block">
                                <div class="card-date">Центральный офис</div>
                                <div class="card-title fs-18">Сочи, ул. Навагинская 13/1, микрорайон Центральный
                                </div>
                            </div>
                            <div class="card-date mt-lg-3 mt-md-0" style="color: #999999">Режим работы
                            </div>
                            <div class="card-title-preview mt-1">Пн. – Пт.: с 9:00 до 18:00</div>
                            <div class="card-date mt-3" style="color: #999999">Телефон
                            </div>
                            <div class="card-title-preview mt-1"><a href="tel:+79279358355" class="card-title-preview text-decoration-none text-dark">+7 (927) 935-83-55</a></div>
                            {{-- <div class="card-title-preview mt-1">+7 000 000-00-11</div> --}}
                            <div class="card-date mt-3" style="color: #999999">E-mail
                            </div>
                            <div class="card-title-preview mt-1"><a
                                href="mailto:damir-khaybulin@mail.ru" class="card-title-preview text-decoration-none text-dark">damir-khaybulin@mail.ru</a></div>
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
