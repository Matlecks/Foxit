<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
        crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500&display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800&display=swap"
        rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="/css/style.css" rel="stylesheet">
    <title></title>
</head>

<body class="fst-normal" style="background: #232323;">
    @include('Includes.header')
    @include('Includes.body')
    @include('Includes.footer')


    {{-- Модалка авторизации --}}
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-5" style="border-radius: 4px;">
                <div class="d-flex justify-content-between align-items-center ">
                    <h1 class="modal-title fs-24 fw-bolder text-montserrat"
                        id="staticBackdropLabel">Вход в личный кабинет</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form action="{{ route('UserAuth') }}" method="post">
                    @csrf
                    <div class="mt-5">
                        <label for="form-login" class="form-label title-over">Логин
                            <span style="color: #F25353">*</span></label>
                        <input class="form-control form-login-1 @error('login') is-invalid @enderror" type="text" id="form-login"
                            name="login">
                        <label for="form-password" class="form-label title-over mt-4">Пароль <span
                                style="color: #F25353">*</span></label>
                        <input class="form-control form-login-1 @error('password') is-invalid @enderror" type="text" id="form-password"
                            name="password">
                        <div class="d-flex justify-content-between mt-4">
                            <div class="col-5">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckDefault">
                                <label class="form-check-label card-date ms-2"
                                    for="flexCheckDefault">
                                    Запомнить меня
                                </label>
                            </div>
                            <div class="col-4">
                                Забыли пароль?
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mt-5">
                        <div class="col-6 pe-2">
                            <button type="submit"
                                class="btn btn-primary col-12 py-3 text-montserrat fw-bolder fs-15"
                                style="background: #5273E0" data-bs-dismiss="modal">Войти</button>
                        </div>
                        <div class="col-6 ps-2"><a href="{{ route('registrate_page') }}">
                                <button type="button"
                                    class="btn btn-outline-primary col-12 py-3">Регистрация</button></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    {{-- Модалка Подать заявку --}}
    <div class="modal fade" id="takerequest" data-bs-backdrop="static" data-bs-keyboard="false"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-5" style="border-radius: 4px;">
                <div class="d-flex justify-content-between align-items-center ">
                    <h1 class="modal-title fs-24 fw-bolder text-montserrat"
                        id="staticBackdropLabel">Заказать продукт</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <form action="{{ route('takerequest') }}" method="post">
                    @csrf
                    <div class="mt-4">
                        <label for="form-login" class="form-label title-over">Ваше имя
                            <span style="color: #F25353">*</span></label>
                        <input class="form-control form-login-1" type="text" id="form-login"
                            name="name">
                        <label for="form-password" class="form-label title-over mt-4">Телефон
                            <span style="color: #F25353">*</span></label>
                        <input class="form-control form-login-1" type="text"
                            id="form-password" name="phone">
                        <label for="form-password"
                            class="form-label title-over mt-4">E-mail</label>
                        <input class="form-control form-login-1" type="text"
                            id="form-password" name="email">
                        <label for="form-password" class="form-label title-over mt-4">Продукт</label>
                        <input class="form-control form-login-1" type="text"
                            id="form-password" name="interesting">
                        <label for="form-password"
                            class="form-label title-over mt-4">Сообщение</label>
                        <textarea class="form-control form-login-1" style="min-height: 100px;" id="form-password"
                            name="message"></textarea>
                        <div class="mt-4">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckDefault">
                            <label class="form-check-label card-date ms-2" for="flexCheckDefault">
                                Я согласен на обработку персональных данных
                            </label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mt-5">
                        <div class="col-6 pe-2">
                            <button type="submit"
                                class="btn btn-primary col-12 py-3 text-montserrat fw-bolder fs-15"
                                style="background: #5273E0"
                                data-bs-dismiss="modal">Отправить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Модалка Задать вопрос --}}
    <div class="modal fade" id="askquestion" data-bs-backdrop="static" data-bs-keyboard="false"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-5" style="border-radius: 4px;">
                <div class="d-flex justify-content-between align-items-center ">
                    <h1 class="modal-title fs-24 fw-bolder text-montserrat"
                        id="staticBackdropLabel">Задать вопрос</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="title-preview fs-16 mt-3">
                    Менеджеры компании с радостью ответят на ваши вопросы и произведут расчет
                    стоимости услуг и подготовят индивидуальное коммерческое предложение.
                </div>
                <form action="{{ route('askquestion') }}" method="post">
                    @csrf
                    <div class="mt-4">
                        <label for="form-login" class="form-label title-over">Ваше имя
                            <span style="color: #F25353">*</span></label>
                        <input class="form-control form-login-1" type="text" id="form-login"
                            name="name">
                        <label for="form-password" class="form-label title-over mt-4">Телефон
                            <span style="color: #F25353">*</span></label>
                        <input class="form-control form-login-1" type="text"
                            id="form-password" name="phone">
                        <label for="form-password"
                            class="form-label title-over mt-4">E-mail</label>
                        <input class="form-control form-login-1" type="text"
                            id="form-password" name="email">
                        <label for="form-password" class="form-label title-over mt-4">Интересующая
                            услуга</label>
                        <input class="form-control form-login-1" type="text"
                            id="form-password" name="interesting">
                        <label for="form-password"
                            class="form-label title-over mt-4">Сообщение</label>
                        <textarea class="form-control form-login-1" style="min-height: 100px;" id="form-password"
                            name="message"></textarea>
                        <div class="mt-4">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckDefault">
                            <label class="form-check-label card-date ms-2" for="flexCheckDefault">
                                Я согласен на обработку персональных данных
                            </label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mt-5">
                        <div class="col-6 pe-2">
                            <button type="submit"
                                class="btn btn-primary col-12 py-3 text-montserrat fw-bolder fs-15"
                                style="background: #5273E0"
                                data-bs-dismiss="modal">Отправить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Модалка Написать сотруднику --}}
    <div class="modal fade" id="writemessage" data-bs-backdrop="static" data-bs-keyboard="false"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-5" style="border-radius: 4px;">
                <div class="d-flex justify-content-between align-items-center ">
                    <h1 class="modal-title fs-24 fw-bolder text-montserrat"
                        id="staticBackdropLabel">Написать сотруднику</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form action="{{ route('writemessage') }}" method="post">
                    @csrf
                    <div class="mt-4">
                        <label for="form-login" class="form-label title-over">Ваше имя
                            <span style="color: #F25353">*</span></label>
                        <input class="form-control form-login-1" type="text" id="form-login"
                            name="name">
                        <label for="form-password" class="form-label title-over mt-4">Телефон
                            <span style="color: #F25353">*</span></label>
                        <input class="form-control form-login-1" type="text"
                            id="form-password" name="phone">
                        <label for="form-password"
                            class="form-label title-over mt-4">E-mail</label>
                        <input class="form-control form-login-1" type="text"
                            id="form-password" name="email">
                        <label for="form-password" class="form-label title-over mt-4">Сотрудник</label>
                        <input class="form-control form-login-1" type="text"
                            id="form-password" name="interesting">
                        <label for="form-password"
                            class="form-label title-over mt-4">Сообщение</label>
                        <textarea class="form-control form-login-1" style="min-height: 100px;" id="form-password"
                            name="message"></textarea>
                        <div class="mt-4">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckDefault">
                            <label class="form-check-label card-date ms-2" for="flexCheckDefault">
                                Я согласен на обработку персональных данных
                            </label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mt-5">
                        <div class="col-6 pe-2">
                            <button type="submit"
                                class="btn btn-primary col-12 py-3 text-montserrat fw-bolder fs-15"
                                style="background: #5273E0"
                                data-bs-dismiss="modal">Отправить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
