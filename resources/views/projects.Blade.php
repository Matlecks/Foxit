@extends('index')

@section('content')
    <div class="mt-for-header" style="background: #ffffff;">
        <div class="mx-auto col-11 col-lg-9">
            <div class=" col-lg-4 col-sm-6 col-md-10 pt-5 title">Проекты</div>
            <div class="mt-2 mb-5 title-over">Главная — Проекты
            </div>
            <div class="pb-5 text-montserrat d-flex ">
                <button type="button" class="btn-custom">За все время</button>
                <button type="button" class="btn-custom ms-1">2021</button>
                <button type="button" class="btn-custom ms-1">2020</button>
                <button type="button" class="btn-custom ms-1">2019</button>

            </div>
            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-1 pb-5">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="px-2 bg-dark rounded-1 d-flex align-items-end"
                        style="height: 320px; background: url(https://i.pinimg.com/564x/90/00/b8/9000b81ffa06e691cf1bc2c7f17c4e71.jpg);">
                        <div class="col-10 mx-auto py-5">
                            <div class="card-title-over mb-2">
                                Системы вентиляции</div>
                            <div class="card-title text-white">Система очищения воздуха для
                                кондитерской
                                фабрики "Слада"</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mt-lg-0 mt-md-0 mt-4">
                    <div class="px-2 bg-dark rounded-1 d-flex align-items-end"
                        style="height: 320px; background: url(https://i.pinimg.com/564x/69/25/e8/6925e8def54ac2b0ce7923af047d5dc9.jpg);">
                        <div class="col-10 mx-auto py-5">
                            <div class="card-title-over">Автоматизация</div>
                            <div class="card-title text-white">Автоматизация отдела продаж в ООО
                                "Калифорния"</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mt-lg-0 mt-md-0 mt-4">
                    <div class="px-2 bg-dark rounded-1 d-flex align-items-end"
                        style="height: 320px; background: url(https://i.pinimg.com/564x/01/12/7b/01127bdc0c53f43553fa0ff1ad36e858.jpg);">
                        <div class="col-10 mx-auto py-5">
                            <div class="card-title-over">Охранные системы</div>
                            <div class="card-title text-white">Контроль доступа на заводе "ГранитСтрой"
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
