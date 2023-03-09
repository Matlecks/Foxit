@extends('adminpage')

@section('admincontent')
    <div class="container-fluid px-3 d-flex justify-content-between align-items-center"
        style="height: 75px;">
        <div class="col-2 admin-title">Пользователи</div>
        <div class="col-3 d-flex justify-content-end">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Контент</li>
                    <li class="breadcrumb-item active" aria-current="page">Пользователи</li>
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
                    <button class="btn-add px-4 me-3">Добавить Пользователя</button>
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
                        <td class="col th-type-1">ID</td>
                        <td class="col th-type-1">Фамилия</td>
                        <td class="col th-type-1">Имя</td>
                        <td class="col th-type-1">Роль</td>
                        <td class="col th-type-1">Создан</td>
                        <td class="col th-type-1">Статус</td>
                        <td class="col th-type-1">Действия</td>
                    </tr>
                    <tr class="">
                        <td class="col th-type-1"><input class="form-check-input" type="checkbox"
                                value="" id="flexCheckDefault"></td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-bolder">1</td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-light">Иванович
                        </td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-15 fw-bolder">Иван
                        </td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-15 fw-bolder">Клиент
                        </td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-light">04 марта 2023
                        </td>
                        <td class="col th-type-1">
                            <div class="rounded-2 text-center fs-12 fw-bolder col-7"
                                style="background-color: rgba(255, 195, 90, 0.18); color: rgb(255, 195, 90)">Забанен
                            </div>
                        </td>
                        <td class="col th-type-1 d-flex justify-content-start" style="color:#6C757D;">
                            <div class="ms-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                            </div>
                            <div class="ms-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                </svg>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col th-type-1"><input class="form-check-input" type="checkbox"
                                value="" id="flexCheckDefault"></td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-bolder">2</td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-light">Алексей
                        </td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-15 fw-bolder">Владимирович
                        </td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-15 fw-bolder">Сотрудник
                        </td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-light">21 февраля 2023
                        </td>
                        <td class="col th-type-1">
                            <div class="rounded-2 text-center fs-12 fw-bolder col-6"
                                style="background-color: rgba(250, 92, 124, 0.25); color: rgb(250, 92, 124)">Удален
                            </div>
                        </td>
                        <td class="col th-type-1 d-flex justify-content-start" style="color:#6C757D;">
                            <div class="ms-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-pencil-square"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                            </div>
                            <div class="ms-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-trash3-fill"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                </svg>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col th-type-1"><input class="form-check-input" type="checkbox"
                                value="" id="flexCheckDefault"></td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-bolder">3</td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-light">Александр
                        </td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-15 fw-bolder">Петрович
                        </td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-15 fw-bolder">Админ</td>
                        <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-light">12 января 2023
                        </td>
                        <td class="col th-type-1">
                            <div class="rounded-2 text-center fs-12 fw-bolder col-8"
                                style="background-color: rgba(10,207,151,.18); color: #0acf97">Активен
                            </div>
                        </td>
                        <td class="col th-type-1 d-flex justify-content-start" style="color:#6C757D;">
                            <div class="ms-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-pencil-square"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                            </div>
                            <div class="ms-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-trash3-fill"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                </svg>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
