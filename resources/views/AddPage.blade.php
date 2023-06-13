@extends('adminpage')

@section('admincontent')
    <div class="container-fluid px-3 d-flex justify-content-between align-items-center"
        style="height: 75px;">
        <div class="col-2 admin-title">Добавить {{ $title }}</div>
        <div class="col-3 d-flex justify-content-end">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Контент</li>
                    <li class="breadcrumb-item active" aria-current="page">Проекты</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-fluid px-3">
        @if ($title == 'Проект')
            <form action="{{ route('AddProject') }}" method="post" enctype="multipart/form-data">
            @elseif($title == 'Пост')
                <form action="{{ route('AddPost') }}" method="post" enctype="multipart/form-data">
                @elseif($title == 'Услуга')
                    <form action="{{ route('AddService') }}" method="post"
                        enctype="multipart/form-data">
                    @elseif($title == 'Отзыв')
                        <form action="{{ route('AddReview') }}" method="post">
                        @elseif($title == 'Пользователь')
                            <form action="{{ route('UserAdd', $title = 'Пользователь') }}"
                                method="post" enctype="multipart/form-data">
                            @elseif($title == 'Раздел')
                                <form action="{{ route('AddSection', $title = 'Раздел') }}"
                                    method="post" enctype="multipart/form-data">
        @endif
        @csrf
        <div class="mt-5 accordion accordion-flush" id="accordionFlushExample">
            <div class="card-header border-bottom">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="accordion-item nav-item bg-none border rounded-top">
                        <button
                            class="nav-link accordion-button  collapsed h-100 w-100 px-3 rounded-top"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapse-element"
                            aria-expanded="false"
                            aria-controls="collapse-element">{{ $title }}</button>
                    </li>
                    @if ($title == 'Отзыв')
                    @else
                        <li class="accordion-item nav-item bg-none border rounded-top ms-2">
                            <button
                                class="nav-link accordion-button p-0 collapsed h-100 w-100 px-3 rounded-top"
                                type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-element-anounce" aria-expanded="false"
                                aria-controls="collapse-element-anounce">Анонс</button>
                        </li>
                        <li class="accordion-item nav-item bg-none border rounded-top ms-2">
                            <button
                                class="nav-link accordion-button p-0 collapsed h-100 w-100 px-3 rounded-top"
                                type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-element-details" aria-expanded="false"
                                aria-controls="collapse-element-details">Подробно</button>
                        </li>
                        <li class="accordion-item nav-item bg-none border rounded-top ms-2">
                            <button
                                class="nav-link accordion-button p-0 collapsed h-100 w-100 px-3 rounded-top"
                                type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-element-SEO" aria-expanded="false"
                                aria-controls="collapse-element-SEO">SEO</button>
                        </li>
                    @endif
                    <li class="accordion-item nav-item bg-none border rounded-top ms-2">
                        <button
                            class="nav-link accordion-button p-0 collapsed h-100 w-100 px-3 rounded-top"
                            type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-element-relations" aria-expanded="false"
                            aria-controls="collapse-element-relations">Связи</button>
                    </li>
                </ul>
            </div>

            <div id="collapse-element" class="accordion-collapse collapse show"
                data-bs-parent="#accordionFlushExample">
                @if ($title == 'Отзыв')
                    <label for="review_text" class="form-label title-over mt-4">Текст отзыва</label>
                    <textarea class="form-control" id="review_text" rows="3" name="review_text"></textarea>
                    <label for="status" class="form-label title-over mt-4">Статус</label>
                    <select class="form-select w-25" id="status" aria-label="Default select example"
                        name="status">
                        <option value="На модерации">На модерации</option>
                        <option value="Опубликовано">Опубликовано</option>
                    </select>
                @elseif($title == 'Пользователь')
                    <div class="accordion-body mt-2">
                        <label for="form-login" class="form-label title-over mt-5">Имя</label>
                        <input
                            class="form-control form-login-1 w-25 @error('name') is-invalid @enderror"
                            type="text" id="form-login" name="name">
                        <label for="form-login" class="form-label title-over mt-5">Фамилия</label>
                        <input
                            class="form-control form-login-1 w-25 @error('surname') is-invalid @enderror"
                            type="text" id="form-login" name="surname">
                        <label for="job" class="form-label title-over mt-5">Должность</label>
                        <input class="form-control form-login-1 w-25" type="text" id="job"
                            name="job">
                        <label for="avatar" class="form-label title-over mt-5">Аватар</label>
                        <input class="form-control w-25 @error('avatar') is-invalid @enderror"
                            type="file" id="avatar" name="avatar">
                        <label for="logo" class="form-label title-over mt-5">Логотип</label>
                        <input class="form-control w-25 @error('logo') is-invalid @enderror" type="file" id="logo"
                            name="logo">
                        <label for="form-login" class="form-label title-over mt-5">Группа</label>
                        <select class="form-select w-25 @error('name') is-invalid @enderror"
                            name="role">
                            @foreach ($roles as $role)
                                <option value="{{ $role->role }}">{{ $role->title }}</option>
                            @endforeach
                        </select>

                        <label for="form-login" class="form-label title-over mt-5">Номер
                            телефона</label>
                        <input
                            class="form-control form-login-1 w-25 @error('phone') is-invalid @enderror"
                            type="text" id="form-login" name="phone">
                        <label for="form-login" class="form-label title-over mt-5">Email</label>
                        <input
                            class="form-control form-login-1 w-25 @error('email') is-invalid @enderror"
                            type="text" id="form-login" value="{{ old('title') }}"
                            name="email">
                        @error('email')
                            <span class="form-label title-over mt-1" style="color: #dc3545;">Email-адрес
                                занят
                                или имеет некорректное значение</span>
                            <br>
                        @enderror
                        <label for="form-login" class="form-label title-over mt-5">Логин</label>
                        <input
                            class="form-control form-login-1 w-25 @error('login') is-invalid @enderror"
                            type="text" id="form-login" name="login">
                        <label for="form-login" class="form-label title-over mt-5">Новый
                            пароль</label>
                        <input class="form-control form-login-1 w-25" type="text" id="form-login"
                            name="password">
                        <label for="form-login" class="form-label title-over mt-5">Подтверждение
                            нового
                            пароля</label>
                        <input class="form-control form-login-1 w-25" type="text" id="form-login"
                            name="confirm">
                    </div>
                @elseif($title == 'Раздел')
                    <div class="accordion-body mt-2">
                        <label for="form-login" class="form-label title-over mt-5">Название</label>
                        <input class="form-control form-login-1 @error('title') is-invalid @enderror" type="text" id="form-login"
                            name="title">
                        <label for="form-login" class="form-label title-over mt-5">Группа</label>
                        <select class="form-select w-25" name="section">
                            @foreach ($sections as $section)
                                <option value="{{ $section->id }}">{{ $section->title }}</option>
                            @endforeach
                        </select>
                    </div>
                @elseif($title == 'Услуга')
                    <div class="accordion-body mt-2">
                        <label for="form-login" class="form-label title-over mt-5">Название</label>
                        <input class="form-control form-login-1 @error('title') is-invalid @enderror" type="text" id="form-login"
                            name="title">
                        <label for="form-login" class="form-label title-over mt-5">Группа</label>
                        <select class="form-select w-25" name="section">
                            @foreach ($sections as $section)
                                <option value="{{ $section->id }}">{{ $section->title }}</option>
                            @endforeach
                        </select>
                        <label for="form-login" class="form-label title-over mt-5">Цена</label>
                        <input class="form-control form-login-1 w-25" type="text" id="form-login"
                            name="cost">
                        <label for="form-login" class="form-label title-over mt-5">Категория</label>
                        <input class="form-control form-login-1 w-25" type="text" id="form-login"
                            name="category">
                    </div>
                @elseif($title == 'Проект')
                    <div class="accordion-body mt-2">
                        <label for="form-login" class="form-label title-over mt-5">Название</label>
                        <input class="form-control form-login-1 @error('title') is-invalid @enderror" type="text" id="form-login"
                            name="title">
                        <label for="form-login" class="form-label title-over mt-5">Сфера</label>
                        <input class="form-control form-login-1" type="text" id="form-login"
                            name="sphere">
                        <label for="form-login" class="form-label title-over mt-5">Ссылка на
                            сайт</label>
                        <input class="form-control form-login-1" type="text" id="form-login"
                            name="link">
                    </div>
                @else
                    <div class="accordion-body mt-2">
                        <label for="form-login" class="form-label title-over mt-5">Название</label>
                        <input class="form-control form-login-1 @error('title') is-invalid @enderror" type="text" id="form-login"
                            name="title">
                    </div>
                @endif
            </div>
            <div id="collapse-element-anounce" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body mt-2">
                    <label for="AononceImg" class="form-label title-over mt-5">Картинка
                        анонса</label>
                    <input class="form-control @error('anounce_image') is-invalid @enderror" type="file" id="AononceImg" name="anounce_image">
                    <label for="AnounceText" class="form-label title-over mt-4">Описание
                        анонса</label>
                    <textarea class="form-control" id="AnounceText" rows="3" name="anounce_text"></textarea>
                </div>
            </div>
            <div id="collapse-element-details" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body mt-2">
                    <label for="DetailsImg" class="form-label title-over mt-5">Детальная
                        картинка</label>
                    <input class="form-control  @error('details_image') is-invalid @enderror" type="file" id="DetailsImg" name="details_image">
                    <label for="DetailsText" class="form-label title-over mt-4">Детальное
                        описание</label>
                    <textarea class="form-control" id="DetailsText" rows="3" name="details_text"></textarea>
                </div>
            </div>
            <div id="collapse-element-SEO" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body mt-2">
                    <div class="fs-15 text-nunito text-lightgrey fw-bolder mt-3">SEO
                        элемента</div>
                    <label for="SEOTitle" class="form-label title-over mt-3">META
                        TITLE</label>
                    <input class="form-control form-login-1" type="text" id="SEOTitle"
                        name="SEOTitle">
                    <label for="SEOKeys" class="form-label title-over mt-4">META
                        KEYWORDS</label>
                    <input class="form-control form-login-1" type="text" id="SEOKeys"
                        name="SEOKeys">
                    <label for="SEODescription" class="form-label title-over mt-4">META
                        SESCRIPTION</label>
                    <input class="form-control form-login-1" type="text" id="SEODescription"
                        name="SEODescription">
                    <div class="fs-15 text-nunito text-lightgrey fw-bolder mt-5">SEO
                        картинок анонса</div>
                    <label for="ALTAnounceImg" class="form-label title-over mt-3">ALT</label>
                    <input class="form-control form-login-1" type="text" id="ALTAnounceImg"
                        name="ALTAnounceImg">
                    <label for="TITLEAnounceImg" class="form-label title-over mt-4">TITLE</label>
                    <input class="form-control form-login-1" type="text" id="TITLEAnounceImg"
                        name="TITLEAnounceImg">
                    <label for="FileNameAnounceImg" class="form-label title-over mt-4">Имя
                        файла</label>
                    <input class="form-control form-login-1" type="text" id="FileNameAnounceImg"
                        name="FileNameAnounceImg">
                    <div class="fs-15 text-nunito text-lightgrey fw-bolder mt-5">SEO
                        картинок детальных картинок</div>
                    <label for="ALTDetailsImg" class="form-label title-over mt-3">ALT</label>
                    <input class="form-control form-login-1" type="text" id="ALTDetailsImg"
                        name="ALTDetailsImg">
                    <label for="TITLEDetailsImg" class="form-label title-over mt-4">TITLE</label>
                    <input class="form-control form-login-1" type="text" id="TITLEDetailsImg"
                        name="TITLEDetailsImg">
                    <label for="FileNameDetailsImg" class="form-label title-over mt-4">Имя
                        файла</label>
                    <input class="form-control form-login-1" type="text" id="FileNameDetailsImg"
                        name="FileNameDetailsImg">
                    <div class="fs-15 text-nunito text-lightgrey fw-bolder mt-5">
                        Дополнительно</div>
                    <label for="TAGS" class="form-label title-over mt-3">Теги</label>
                    <input class="form-control form-login-1" type="text" id="TAGS"
                        name="TAGS">
                </div>
            </div>
            <div id="collapse-element-relations" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body mt-2">
                    @if (isset($users))
                        <label for="form-login" class="form-label title-over mt-5">Сотрудник</label>
                        <select multiple class="form-select w-25 @error('users_id') is-invalid @enderror" name="users_id">
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}
                                    {{ $user->surname }}</option>
                            @endforeach
                        </select>
                    @endif
                    @if (isset($projects))
                        <label for="form-login" class="form-label title-over mt-5">Сотрудник</label>
                        <select multiple class="form-select w-25" name="projects_id[]">
                            @foreach ($projects as $project)
                                <option value="{{ $project->id }}">{{ $project->title }}</option>
                            @endforeach
                        </select>
                    @endif
                    @if (isset($reviews))
                        <label for="form-login" class="form-label title-over mt-5">Отзывы</label>
                        <select class="form-select w-25" name="reviews_id">
                            @foreach ($reviews as $review)
                                <option value="{{ $review->id }}">{{ $review->id }}</option>
                            @endforeach
                        </select>
                    @endif
                </div>
            </div>
        </div>
        <hr class="mt-5">

        <div class="d-flex justify-content-start mt-5">
            <div class="col-3 pe-2">
                <button type="submit"
                    class="btn btn-primary col-12 py-3 text-montserrat fw-bolder fs-15"
                    style="background: #5273E0" data-bs-dismiss="modal">Сохранить</button>
            </div>
        </div>
        </form>

    </div>
@endsection
