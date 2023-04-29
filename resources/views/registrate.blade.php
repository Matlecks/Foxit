@extends('index')

@section('content')
    <div class="mt-for-header" style="background: #ffffff;">
        <form action="{{ route('UserAdd') }}" method="post">
            @csrf
            <div class="mx-auto col-11 col-lg-4">
                <div class="pt-5 title text-center">Регистрация</div>
                <div class="mt-2 mb-5 title-over text-center">Главная — Регистрация
                </div>
                <label for="form-name" class="form-label title-over">Имя<span
                        style="color: #F25353">*</span></label>
                <input class="form-control form-login-1 col-6" type="text" id="form-name"
                    name="name">


                <label for="form-mail" class="form-label title-over mt-4">E-mail<span
                        style="color: #F25353">*</span></label>
                <input class="form-control form-login-1 col-6" type="text" id="form-mail"
                    name="email">
                <label for="form-mail" class="form-label title-over">Является также логином для входа на
                    сайт<span style="color: #F25353">*</span></label>
                <br>
                <label for="form-phone" class="form-label title-over mt-4">Телефон<span
                        style="color: #F25353">*</span></label>
                <input class="form-control form-login-1 col-6" type="text" id="form-phone"
                    name="phone">


                <label for="form-password" class="form-label title-over mt-4"
                    name="password">Пароль<span style="color: #F25353">*</span></label>
                <input class="form-control form-login-1 col-6" type="password" id="form-password" name="password">


                <label for="form-login" class="form-label title-over mt-4" name="confirm">Подтверждение
                    пароля<span style="color: #F25353">*</span></label>
                <input class="form-control form-login-1 col-6" type="password" id="form-login"
                    name="confirm">
                <div class="mt-4">
                    <input class="form-check-input" type="checkbox" value=""
                        id="flexCheckDefault">
                    <label class="form-check-label card-date ms-2" for="flexCheckDefault">
                        Я согласен на обработку персональных данных
                    </label>
                </div>
                <div class="d-flex justify-content-center pb-5">
                    <button type="submit"
                        class="btn btn-primary col-5 py-3 text-montserrat fw-bolder fs-15 mt-5 "
                        style="background: #5273E0" data-bs-dismiss="modal">Войти</button>
                </div>
            </div>
        </form>
    </div>
@endsection
