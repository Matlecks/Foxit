@extends('index')

@section('content')
    <div class="mt-for-header" style="background: #ffffff;">
        <div class="mx-auto col-11 col-lg-9">
            <div class="col-lg-4 col-sm-6 col-md-10 pt-5 title">Личный кабинет</div>
            <div class="mt-2 mb-5 title-over">Главная — Личный кабинет
            </div>
        </div>
        <div class="mx-auto col-11 col-lg-9 d-flex pb-5">
            <div class="btn-group-vertical d-none d-md-none d-lg-block col-3 h-50 fs-15 fw-light text-montserrat"
                style="position: sticky; top: 50px;">
                <button type="button" class="btn border-custom ps-3 py-3 text-start">Личные данные</button>
                <button type="button"
                    class="btn border-custom ps-3 py-3 text-start">Мои заказы</button>
                <button type="button" class="btn border-custom ps-3 py-3 text-start">Корзина</button>
                <button type="button" class="btn border-custom ps-3 py-3 text-start">Подписки</button>
            </div>
            <div class="col-lg-9 col-12 row-cols-3 px-3" style="display: flex; flex-wrap: wrap;">
                {{-- Личные данные --}}
                <div class="col-4 px-2">
                    <div class="py-4"
                        style="background: #FCFBFC; border-style: solid; border-width: 1px; border-color: #F6F6F6;">
                        <div class="col-12 text-center">
                            <svg fill="#365CDD" width="120" height="120"
                                viewBox="0 0 256.00 256.00" id="Flat"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                    stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M228,128A100,100,0,1,0,60.71,201.90967a3.97048,3.97048,0,0,0,.842.751,99.79378,99.79378,0,0,0,132.8982-.00195,3.96558,3.96558,0,0,0,.83813-.74756A99.76267,99.76267,0,0,0,228,128ZM36,128a92,92,0,1,1,157.17139,64.87207,75.616,75.616,0,0,0-44.50782-34.04053,44,44,0,1,0-41.32714,0,75.61784,75.61784,0,0,0-44.50782,34.04A91.70755,91.70755,0,0,1,36,128Zm92,28a36,36,0,1,1,36-36A36.04061,36.04061,0,0,1,128,156ZM68.86475,198.417a68.01092,68.01092,0,0,1,118.27.00049,91.80393,91.80393,0,0,1-118.27-.00049Z">
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <div class="col-12 text-center title-preview">Личные данные</div>
                    </div>
                </div>
                {{-- Мои заказы --}}
                <div class="col-4 px-2">
                    <div class="py-4"
                        style="background: #FCFBFC; border-style: solid; border-width: 1px; border-color: #F6F6F6;">
                        <div class="col-12 text-center">
                            <svg fill="#365CDD" width="120" height="120" viewBox="0 0 256 256"
                                id="Flat" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                    stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M216,44H40A12.01312,12.01312,0,0,0,28,56V216a4.001,4.001,0,0,0,5.78906,3.57812L64,204.47168l30.21094,15.10644a4.0044,4.0044,0,0,0,3.57812,0L128,204.47168l30.21094,15.10644a4.0044,4.0044,0,0,0,3.57812,0L192,204.47168l30.21094,15.10644A4.001,4.001,0,0,0,228,216V56A12.01312,12.01312,0,0,0,216,44Zm4,165.52832-26.21094-13.10644a4.0044,4.0044,0,0,0-3.57812,0L160,211.52832l-30.21094-15.10644a4.00436,4.00436,0,0,0-3.57812,0L96,211.52832,65.78906,196.42188a4.0044,4.0044,0,0,0-3.57812,0L36,209.52832V56a4.004,4.004,0,0,1,4-4H216a4.004,4.004,0,0,1,4,4ZM196,112a4.0002,4.0002,0,0,1-4,4H144a4,4,0,0,1,0-8h48A4.0002,4.0002,0,0,1,196,112Zm0,32a4.0002,4.0002,0,0,1-4,4H144a4,4,0,0,1,0-8h48A4.0002,4.0002,0,0,1,196,144ZM112,92H64a4.0002,4.0002,0,0,0-4,4v64a4.0002,4.0002,0,0,0,4,4h48a4.0002,4.0002,0,0,0,4-4V96A4.0002,4.0002,0,0,0,112,92Zm-4,64H68V100h40Z">
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <div class="col-12 text-center title-preview">Мои заказы</div>
                    </div>
                </div>
                {{-- Корзина --}}
                <div class="col-4 px-2">
                    <div class="py-4"
                        style="background: #FCFBFC; border-style: solid; border-width: 1px; border-color: #F6F6F6;">
                        <div class="col-12 text-center">
                            <svg fill="#365CDD" width="120" height="120" viewBox="0 0 256 256"
                                id="Flat" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                    stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M207.77832,131.57764l12.15723-66.86231A3.99966,3.99966,0,0,0,216,60H51.33838l-5.481-30.14648A11.994,11.994,0,0,0,34.05078,20H16a4,4,0,0,0,0,8H34.05078a3.99779,3.99779,0,0,1,3.93555,3.28418L65.86572,184.62036A24.00308,24.00308,0,1,0,97.86914,188h68.26172A23.98659,23.98659,0,1,0,184,180H73.15625l-5.81787-32H188.10156A19.98932,19.98932,0,0,0,207.77832,131.57764ZM96,204a16,16,0,1,1-16-16A16.01833,16.01833,0,0,1,96,204Zm104,0a16,16,0,1,1-16-16A16.01833,16.01833,0,0,1,200,204ZM52.793,68H211.207l-11.2998,62.147A11.99336,11.99336,0,0,1,188.10156,140H65.88379Z">
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <div class="col-12 text-center title-preview">Корзина</div>
                    </div>
                </div>
                {{-- Подписки --}}
                <div class="col-4 px-2 mt-3">
                    <div class="py-4"
                        style="background: #FCFBFC; border-style: solid; border-width: 1px; border-color: #F6F6F6;">
                        <div class="col-12 text-center">
                            <svg fill="#365CDD" width="120" height="120" viewBox="0 0 256 256"
                                id="Flat" xmlns="http://www.w3.org/2000/svg" stroke="#365CDD">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                    stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M228.646,34.7676a11.96514,11.96514,0,0,0-12.21778-2.0752L31.87109,105.19729a11.99915,11.99915,0,0,0,2.03467,22.93457L84,138.15139v61.833a11.8137,11.8137,0,0,0,7.40771,11.08593,12.17148,12.17148,0,0,0,4.66846.94434,11.83219,11.83219,0,0,0,8.40918-3.5459l28.59619-28.59619L175.2749,217.003a11.89844,11.89844,0,0,0,7.88819,3.00195,12.112,12.112,0,0,0,3.72265-.59082,11.89762,11.89762,0,0,0,8.01319-8.73925L232.5127,46.542A11.97177,11.97177,0,0,0,228.646,34.7676ZM32.2749,116.71877a3.86572,3.86572,0,0,1,2.522-4.07617L203.97217,46.18044,87.07227,130.60769,35.47461,120.28811A3.86618,3.86618,0,0,1,32.2749,116.71877Zm66.55322,86.09375A3.99976,3.99976,0,0,1,92,199.9844V143.72048l35.064,30.85669ZM224.71484,44.7549,187.10107,208.88772a4.0003,4.0003,0,0,1-6.5415,2.10937l-86.1543-75.8164,129.66309-93.645A3.80732,3.80732,0,0,1,224.71484,44.7549Z">
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <div class="col-12 text-center title-preview">Подписки</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
