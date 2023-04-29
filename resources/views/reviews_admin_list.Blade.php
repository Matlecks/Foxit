@extends('adminpage')

@section('admincontent')
    <div class="container-fluid px-3 d-flex justify-content-between align-items-center"
        style="height: 75px;">
        <div class="col-2 admin-title">Отзывы</div>
        <div class="col-3 d-flex justify-content-end">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Контент</li>
                    <li class="breadcrumb-item active" aria-current="page">Отзывы</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-fluid px-3">
        <div class="border-type-2">
            {{-- Меню --}}
            <div class="container-fluid px-4 d-flex justify-content-between align-items-center"
                style="height: 80px;">
                <div class="col-6">
                    <form class="col-12 d-flex">
                        <input type="text" class="form-search-2 col-3" placeholder="Поиск...">
                        <div class="text-nunito fs-16  mx-3 mt-2" style="color: #6C757D;">Статус</div>
                        <select class="form-search-2 col-3" aria-label="Default select example">
                            <option selected>Выберите</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>

                        <button class="btn-search-2 ms-3" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                </path>
                            </svg>
                        </button>
                    </form>

                </div>
                <div class="col-4 d-flex justify-content-end">
                    <a href="{{ route('AddPageReview', $title = 'Отзыв') }}"><button
                            class="btn-add px-4 me-3" type="button" data-bs-target="#AddEdit"
                            data-bs-toggle="modal">Добавить Отзыв</button></a>
                    <button class="btn-export">Export</button>
                </div>
            </div>
            {{-- Таблица --}}
            <div class="container-fluid px-4">
                <table class="table table-hover">
                    <tr style="background: #EEF2F7;">
                        <td class="col th-type-1">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckDefault">
                        </td>
                        <td class="col th-type-1"></td>
                        <td class="col th-type-1">ID</td>
                        <td class="col th-type-1">Название</td>
                        <td class="col th-type-1">Активность</td>
                        <td class="col th-type-1">Рейтинг</td>
                        <td class="col th-type-1">Опубликован</td>
                        <td class="col th-type-1">Статус</td>
                    </tr>
                    @foreach ($reviews as $review)
                        <tr class="">
                            <td class="col th-type-1"><input class="form-check-input" type="checkbox"
                                    value="" id="flexCheckDefault"></td>
                            <td class="col th-type-1 dropdown">
                                <button type="button" data-bs-toggle="dropdown" aria-expanded="false"
                                    style="background: none; border-style: solid; border-width: 0px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-list"
                                        viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                    </svg>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="{{ route('EditPageReview', $review->id) }}">Изменить</a>
                                    </li>
                                    <li>
                                        <form action="{{ route('ReviewRestore', $review->id) }}"
                                            method="post">
                                            {{-- @method('PUT') --}}
                                            @csrf
                                            <button type="submit" class="dropdown-item"
                                                style="background:none; border-style: solid; border-width: 0px; border-color: none;">Активировать</button>
                                        </form>
                                    </li>
                                    <li>
                                        <form action="{{ route('ReviewDelete', $review->id) }}"
                                            method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item"
                                                style="background:none; border-style: solid; border-width: 0px; border-color: none;">Деактивировать</button>
                                        </form>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Удалить</a></li>
                                </ul>
                            </td>
                            <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-bolder">{{ $review->id }}</td>
                            <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-light">Установка
                                на хостинг
                            </td>
                            <td class="col th-type-1 text-grey-3 text-nunito fs-15 fw-bolder">
                                @if ($review->trashed())
                                    Нет
                                @else
                                    Да
                                @endif
                            </td>
                            <td class="col th-type-1 text-grey-3 text-nunito fs-15 fw-bolder">* * * * *
                            </td>
                            <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-light">{{ $review->created_at }}
                            </td>
                            <td class="col th-type-1">
                                @if ($review->status == 'На модерации')
                                    <div class="rounded-2 text-center fs-12 fw-bolder col-9"
                                        style="background-color: rgba(255, 195, 90, 0.18); color: rgb(255, 195, 90)">
                                        На модерации
                                    </div>
                                @else
                                    <div class="rounded-2 text-center fs-12 fw-bolder col-9"
                                        style="background-color: rgba(10,207,151,.18); color: rgb(10, 207, 151)">
                                        Опубликовано
                                    </div>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
