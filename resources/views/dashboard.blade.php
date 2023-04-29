@extends('adminpage')

@section('admincontent')
    <div class="container-fluid px-3 d-flex justify-content-start align-items-center"
        style="height: 75px;">
        <div class="col-2 admin-title">Рабочий стол</div>
    </div>
    <div class="d-flex justify-content-center container-fluid">
        <div class="col-5 row row-cols-2">
            {{-- Рост посетителей --}}
            <div class="col-6 px-3">
                <div class="bg-white rounded-1 p-4">
                    <div class="d-flex justify-content-between">
                        <div class="text-nunito fs-17" style="color: #6C757D;">Посетители</div>
                        <div class="rounded-1 pt-2 pb-3 px-3" style="background: #DCDEFC;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="#727CF5" class="bi bi-people-fill" viewBox="0 0 16 16"
                                style="transform: scaleX(-1);">
                                <path
                                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="col-12 fs-24 fw-bolder" style="color: #6C757D;">36.245</div>
                    <div class="d-flex justify-content-start mt-3">
                        <div class="text-nunito fs-14 d-flex align-items-center"
                            style="color: #0ACF97;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-capslock-fill" viewBox="0 0 16 16">
                                <path
                                    d="M7.27 1.047a1 1 0 0 1 1.46 0l6.345 6.77c.6.638.146 1.683-.73 1.683H11.5v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1H1.654C.78 9.5.326 8.455.924 7.816L7.27 1.047zM4.5 13.5a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1z" />
                            </svg>
                            <span class="ms-1">5.27%</span>
                        </div>
                        <div class="ps-3 text-nunito fs-14">С прошлого месяца</div>
                    </div>
                </div>
            </div>
            {{-- Рост новых пользователей --}}
            <div class="col-6 px-3">
                <div class="bg-white rounded-1 p-4">
                    <div class="d-flex justify-content-between">
                        <div class="text-nunito fs-17" style="color: #6C757D;">Новый пользователей</div>
                        <div class="rounded-1 pt-2 pb-3 px-3" style="background: #DCDEFC;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="#727CF5" class="bi bi-people-fill" viewBox="0 0 16 16"
                                style="transform: scaleX(-1);">
                                <path
                                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="col-12 fs-24 fw-bolder" style="color: #6C757D;">36.245</div>
                    <div class="d-flex justify-content-start mt-3">
                        <div class="text-nunito fs-14 d-flex align-items-center"
                            style="color: #0ACF97;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-capslock-fill" viewBox="0 0 16 16">
                                <path
                                    d="M7.27 1.047a1 1 0 0 1 1.46 0l6.345 6.77c.6.638.146 1.683-.73 1.683H11.5v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1H1.654C.78 9.5.326 8.455.924 7.816L7.27 1.047zM4.5 13.5a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1z" />
                            </svg>
                            <span class="ms-1">5.27%</span>
                        </div>
                        <div class="ps-3 text-nunito fs-14">С прошлого месяца</div>
                    </div>
                </div>
            </div>
            {{-- Средний возраст --}}
            <div class="col-6 pt-4 px-3">
                <div class="bg-white rounded-1 p-4">
                    <div class="d-flex justify-content-between">
                        <div class="text-nunito fs-17" style="color: #6C757D;">Средний возраст</div>
                        <div class="rounded-1 pt-2 pb-3 px-3" style="background: #DCDEFC;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="#727CF5" class="bi bi-people-fill" viewBox="0 0 16 16"
                                style="transform: scaleX(-1);">
                                <path
                                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="col-12 fs-24 fw-bolder" style="color: #6C757D;">36.245</div>
                    <div class="d-flex justify-content-start mt-3">
                        <div class="text-nunito fs-14 d-flex align-items-center"
                            style="color: #0ACF97;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-capslock-fill" viewBox="0 0 16 16">
                                <path
                                    d="M7.27 1.047a1 1 0 0 1 1.46 0l6.345 6.77c.6.638.146 1.683-.73 1.683H11.5v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1H1.654C.78 9.5.326 8.455.924 7.816L7.27 1.047zM4.5 13.5a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1z" />
                            </svg>
                            <span class="ms-1">5.27%</span>
                        </div>
                        <div class="ps-3 text-nunito fs-14">С прошлого месяца</div>
                    </div>
                </div>
            </div>
            {{-- Заявок --}}
            <div class="col-6 pt-4 px-3">
                <div class="bg-white rounded-1 p-4">
                    <div class="d-flex justify-content-between">
                        <div class="text-nunito fs-17" style="color: #6C757D;">Заявок</div>
                        <div class="rounded-1 pt-2 pb-3 px-3" style="background: #DCDEFC;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="#727CF5" class="bi bi-people-fill" viewBox="0 0 16 16"
                                style="transform: scaleX(-1);">
                                <path
                                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="col-12 fs-24 fw-bolder" style="color: #6C757D;">36.245</div>
                    <div class="d-flex justify-content-start mt-3">
                        <div class="text-nunito fs-14 d-flex align-items-center"
                            style="color: #0ACF97;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-capslock-fill" viewBox="0 0 16 16">
                                <path
                                    d="M7.27 1.047a1 1 0 0 1 1.46 0l6.345 6.77c.6.638.146 1.683-.73 1.683H11.5v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1H1.654C.78 9.5.326 8.455.924 7.816L7.27 1.047zM4.5 13.5a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1z" />
                            </svg>
                            <span class="ms-1">5.27%</span>
                        </div>
                        <div class="ps-3 text-nunito fs-14">С прошлого месяца</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col ps-4">
            <div class="bg-white rounded-1 p-4">
                <div class="text-nunito fs-14 fw-bolder pb-2" style="color: #6C757D;">ТОП ГОРОДОВ</div>
                <table class="table table-hover pb-5">
                    <tr class="">
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14">Город
                        </td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-light">Посетителей
                        </td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-15 fw-bolder">
                            Заявок
                        </td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-light">Доход
                        </td>
                    </tr>
                    <tr class="">
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14">Москва
                        </td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-light">5,000
                        </td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-15 fw-bolder">
                            82
                        </td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-light">$6,518.18
                            Amount
                        </td>
                    </tr>
                    <tr class="">
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14">Санкт-Питербург</td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-light">3,000
                        </td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-15 fw-bolder">
                            82
                        </td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-light">$6,518.18
                            Amount
                        </td>
                    </tr>
                    <tr class="">
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14">Уфа</td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-light">1,500
                        </td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-15 fw-bolder">
                            82
                        </td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-light">$6,518.18
                            Amount
                        </td>
                    </tr>
                    <tr class="">
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14">Сочи</td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-light">1,500
                        </td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-15 fw-bolder">
                            82
                        </td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-light">$6,518.18
                            Amount
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="row-cols-3 justify-content-between container-fluid px-3 py-4">
        {{-- График соц сетей --}}
        <div class="col-4 bg-white py-1 rounded-2">
            <div class="container-fluid px-4 py-3 d-flex justify-content-between align-items-center">
                <div class="text-nunito fs-14 fw-bolder" style="color: #6C757D;">ТРАФИК СОЦ СЕТЕЙ
                </div>
                <div class="col-3 p-1 d-flex justify-content-around align-items-center rounded-1"
                    style="background: #EEF2F7;">Выгрузить<svg xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" fill="currentColor"
                        class="bi bi-capslock ms-2" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M7.27 1.047a1 1 0 0 1 1.46 0l6.345 6.77c.6.638.146 1.683-.73 1.683H11.5v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1H1.654C.78 9.5.326 8.455.924 7.816L7.27 1.047zM14.346 8.5 8 1.731 1.654 8.5H4.5a1 1 0 0 1 1 1v1h5v-1a1 1 0 0 1 1-1h2.846zm-9.846 5a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1zm6 0h-5v1h5v-1z" />
                    </svg></div>
            </div>
            <div class="container-fluid px-4">
                <table class="table table-hover">
                    <tr style="background: #EEF2F7;">
                        <td class="col-3 th-type-1 fs-14 fw-bolder">Соц сеть</td>
                        <td class="col-3 th-type-1 fs-14 fw-bolder">Посещений</td>
                        <td class="col-6 th-type-1"></td>
                    </tr>
                    <tr class="">
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14">Instagram</td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-light">2,250
                        </td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-15 fw-bolder">
                            <div class="progress rounded-1 mt-2"
                                style="background: #F6F7FB; height:5px;">
                                <div class="progress-bar" role="progressbar"
                                    aria-label="Basic example"
                                    style="width: 33.33%;background: #727CF5;" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14">Вконтакте</td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-light">3,000
                        </td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-15 fw-bolder">
                            <div class="progress rounded-1 mt-2"
                                style="background: #F6F7FB; height:5px;">
                                <div class="progress-bar" role="progressbar"
                                    aria-label="Basic example"
                                    style="width: 44.44%;background: #727CF5;" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14">Яндекс Дзен</td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-light">1,500
                        </td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-15 fw-bolder">
                            <div class="progress rounded-1 mt-2"
                                style="background: #F6F7FB; height:5px;">
                                <div class="progress-bar" role="progressbar"
                                    aria-label="Basic example"
                                    style="width: 22.22%;background: #727CF5;" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    {{-- Топ продаваемых продуктов --}}
    <div class="container-fluid pb-5">
        <div class="col-12 bg-white py-1 rounded-2">
            <div class="container-fluid px-4 py-3 d-flex justify-content-between align-items-center">
                <div class="text-nunito fs-14 fw-bolder" style="color: #6C757D;">ТОП ПРОДАВАЕМЫХ
                    ПРОДУКТОВ
                </div>
                <div class="col-1 p-1 d-flex justify-content-around align-items-center rounded-1"
                    style="background: #EEF2F7;">Выгрузить<svg xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" fill="currentColor"
                        class="bi bi-capslock ms-2" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M7.27 1.047a1 1 0 0 1 1.46 0l6.345 6.77c.6.638.146 1.683-.73 1.683H11.5v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1H1.654C.78 9.5.326 8.455.924 7.816L7.27 1.047zM14.346 8.5 8 1.731 1.654 8.5H4.5a1 1 0 0 1 1 1v1h5v-1a1 1 0 0 1 1-1h2.846zm-9.846 5a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1zm6 0h-5v1h5v-1z" />
                    </svg></div>
            </div>
            <div class="container-fluid px-4">
                <table class="table table-hover">
                    <tr class="">
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14">Лендинг под ключ</td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-light">$79.49
                            Price
                        </td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-15 fw-bolder">
                            82
                            Quantity
                        </td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-light">$6,518.18
                            Amount
                        </td>
                    </tr>
                    <tr class="">
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14">Вконтакте</td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-light">3,000
                        </td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-15 fw-bolder">
                            <div class="progress rounded-1 mt-2"
                                style="background: #F6F7FB; height:5px;">
                                <div class="progress-bar" role="progressbar"
                                    aria-label="Basic example"
                                    style="width: 44.44%;background: #727CF5;" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14">Яндекс Дзен</td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-light">1,500
                        </td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-15 fw-bolder">
                            <div class="progress rounded-1 mt-2"
                                style="background: #F6F7FB; height:5px;">
                                <div class="progress-bar" role="progressbar"
                                    aria-label="Basic example"
                                    style="width: 22.22%;background: #727CF5;" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
