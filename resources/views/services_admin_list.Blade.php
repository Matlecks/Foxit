@extends('adminpage')

@section('admincontent')
    <div class="container-fluid px-3 d-flex justify-content-between align-items-center"
        style="height: 75px;">
        <div class="col-2 admin-title">Услуги</div>
        <div class="col-3 d-flex justify-content-end">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Контент</li>
                    <li class="breadcrumb-item active" aria-current="page">Услуги</li>
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
                    <div class="btn-group" role="group">
                        <a href="{{ route('AddPageService', $title = 'Услуга') }}"><button
                                class="btn-add px-4 " type="button" data-bs-target="#AddEdit"
                                data-bs-toggle="modal">Добавить Услугу</button></a>
                        <div class="dropdown">
                            <button class=" btn-addsection px-4 me-3" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item"
                                        href="{{ route('AddPageSection') }}">Добавить раздел</a></li>
                            </ul>
                        </div>
                    </div>
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
                        <td class="col th-type-1">Категория</td>
                        <td class="col th-type-1">Опубликовано</td>
                        <td class="col th-type-1">Статус</td>
                    </tr>
                    @if (isset($sections))
                        @foreach ($sections as $section)
                            <tr class="">
                                <td class="col th-type-1"><input class="form-check-input"
                                        type="checkbox" value="" id="flexCheckDefault"></td>
                                <td class="col th-type-1 dropdown">
                                    <button type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"
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
                                                href="{{ route('EditPageServiceSection', $section->id) }}">Изменить</a>
                                        </li>
                                        <li>
                                            <form
                                                action="{{ route('SectionServiceRestore', $section->id) }}"
                                                method="post">
                                                @csrf
                                                <button type="submit" class="dropdown-item"
                                                    style="background:none; border-style: solid; border-width: 0px; border-color: none;">Активировать</button>
                                            </form>
                                        </li>
                                        <li>
                                            <form
                                                action="{{ route('SectionServiceDelete', $section->id) }}"
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
                                <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-bolder">
                                    {{ $section->id }}</td>
                                <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-light">
                                    <a href="{{ route('ShowTableServicesSubsections', $id = $section->id) }}"
                                        class="d-flex align-items-center text-decoration-none text-grey-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                            height="20" fill="currentColor" class="bi bi-folder2"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v7a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 12.5v-9zM2.5 3a.5.5 0 0 0-.5.5V6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5zM14 7H2v5.5a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5V7z" />
                                        </svg>
                                        {{ $section->title }}</a>
                                </td>
                                <td class="col th-type-1 text-grey-3 text-nunito fs-15 fw-bolder">
                                    @if ($section->trashed())
                                        Нет
                                    @else
                                        Да
                                    @endif
                                </td>
                                <td class="col th-type-1 text-grey-3 text-nunito fs-15 fw-bolder">
                                    Андрей
                                    Андреевич
                                </td>
                                <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-light">
                                    {{ $section->created_at }}
                                </td>
                                <td class="col th-type-1">
                                    <div class="rounded-2 text-center fs-12 fw-bolder col-8"
                                        style="background-color: rgba(57,175,209,.18); color: #39AFD1">
                                        Без
                                        автора
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        @if ($services != null)
                            @foreach ($services as $service)
                                <tr class="">
                                    <td class="col th-type-1"><input class="form-check-input"
                                            type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                    <td class="col th-type-1 dropdown">
                                        <button type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false"
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
                                                    href="{{ route('EditPageService', $service->id) }}">Изменить</a>
                                            </li>
                                            <li>
                                                <form
                                                    action="{{ route('ServiceRestore', $service->id) }}"
                                                    method="post">
                                                    @csrf
                                                    <button type="submit" class="dropdown-item"
                                                        style="background:none; border-style: solid; border-width: 0px; border-color: none;">Активировать</button>
                                                </form>
                                            </li>
                                            <li>
                                                <form
                                                    action="{{ route('ServiceDelete', $service->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item"
                                                        style="background:none; border-style: solid; border-width: 0px; border-color: none;">Деактивировать</button>
                                                </form>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Удалить</a>
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-bolder">
                                        {{ $service->id }}</td>
                                    <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-light">
                                        <a {{-- href="{{ route('ShowTableServices', $id = $service->id) }}" --}}>
                                            {{ $service->title }}</a>
                                    </td>
                                    <td class="col th-type-1 text-grey-3 text-nunito fs-15 fw-bolder">
                                        @if ($service->trashed())
                                            Нет
                                        @else
                                            Да
                                        @endif
                                    </td>
                                    <td class="col th-type-1 text-grey-3 text-nunito fs-15 fw-bolder">
                                        Андрей
                                        Андреевич
                                    </td>
                                    <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-light">
                                        {{ $service->created_at }}
                                    </td>
                                    <td class="col th-type-1">
                                        <div class="rounded-2 text-center fs-12 fw-bolder col-8"
                                            style="background-color: rgba(57,175,209,.18); color: #39AFD1">
                                            Без
                                            автора
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    @elseif($subsections)
                        @foreach ($subsections as $subsection)
                            <tr class="">
                                <td class="col th-type-1"><input class="form-check-input"
                                        type="checkbox" value="" id="flexCheckDefault"></td>
                                <td class="col th-type-1 dropdown">
                                    <button type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"
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
                                                href="{{ route('EditPageServiceSection', $subsection->id) }}">Изменить</a>
                                        </li>
                                        <li>
                                            <form
                                                action="{{ route('SectionServiceRestore', $subsection->id) }}"
                                                method="post">
                                                @csrf
                                                <button type="submit" class="dropdown-item"
                                                    style="background:none; border-style: solid; border-width: 0px; border-color: none;">Активировать</button>
                                            </form>
                                        </li>
                                        <li>
                                            <form
                                                action="{{ route('SectionServiceDelete', $subsection->id) }}"
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
                                <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-bolder">
                                    {{ $subsection->id }}</td>
                                <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-light">
                                    <a href="{{ route('ShowTableServicesSubsections', $id = $subsection->id) }}"
                                        class="d-flex align-items-center text-decoration-none text-grey-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                            height="20" fill="currentColor" class="bi bi-folder2"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v7a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 12.5v-9zM2.5 3a.5.5 0 0 0-.5.5V6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5zM14 7H2v5.5a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5V7z" />
                                        </svg>
                                        {{ $subsection->title }}
                                    </a>
                                </td>
                                <td class="col th-type-1 text-grey-3 text-nunito fs-15 fw-bolder">
                                    @if ($subsection->trashed())
                                        Нет
                                    @else
                                        Да
                                    @endif
                                </td>
                                <td class="col th-type-1 text-grey-3 text-nunito fs-15 fw-bolder">
                                    Андрей
                                    Андреевич
                                </td>
                                <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-light">
                                    {{ $subsection->created_at }}
                                </td>
                                <td class="col th-type-1">
                                    <div class="rounded-2 text-center fs-12 fw-bolder col-8"
                                        style="background-color: rgba(57,175,209,.18); color: #39AFD1">
                                        Без
                                        автора
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        @if ($services != null)
                            @foreach ($services as $service)
                                <tr class="">
                                    <td class="col th-type-1"><input class="form-check-input"
                                            type="checkbox" value="" id="flexCheckDefault">
                                    </td>
                                    <td class="col th-type-1 dropdown">
                                        <button type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false"
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
                                                    href="{{ route('EditPageService', $service->id) }}">Изменить</a>
                                            </li>
                                            <li>
                                                <form
                                                    action="{{ route('ServiceRestore', $service->id) }}"
                                                    method="post">
                                                    @csrf
                                                    <button type="submit" class="dropdown-item"
                                                        style="background:none; border-style: solid; border-width: 0px; border-color: none;">Активировать</button>
                                                </form>
                                            </li>
                                            <li>
                                                <form
                                                    action="{{ route('ServiceDelete', $service->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item"
                                                        style="background:none; border-style: solid; border-width: 0px; border-color: none;">Деактивировать</button>
                                                </form>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Удалить</a>
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-bolder">
                                        {{ $service->id }}</td>
                                    <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-light">
                                        <a {{-- href="{{ route('ShowTableServices', $id = $service->id) }}" --}}>
                                            {{ $service->title }}</a>
                                    </td>
                                    <td class="col th-type-1 text-grey-3 text-nunito fs-15 fw-bolder">
                                        @if ($service->trashed())
                                            Нет
                                        @else
                                            Да
                                        @endif
                                    </td>
                                    <td class="col th-type-1 text-grey-3 text-nunito fs-15 fw-bolder">
                                        Андрей
                                        Андреевич
                                    </td>
                                    <td class="col th-type-1 text-grey-3 text-nunito fs-14 fw-light">
                                        {{ $service->created_at }}
                                    </td>
                                    <td class="col th-type-1">
                                        <div class="rounded-2 text-center fs-12 fw-bolder col-8"
                                            style="background-color: rgba(57,175,209,.18); color: #39AFD1">
                                            Без
                                            автора
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    @endif
                </table>
            </div>
        </div>
    </div>
@endsection
