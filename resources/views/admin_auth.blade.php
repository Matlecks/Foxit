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

<body class="fst-normal " style="background: #232323;">
    <form action="{{ route('AdminAuth') }}" method="post" class="col-3 mx-auto">
        @csrf
        <div class="mt-5">
            <label for="form-login" class="form-label title-over">Логин
                <span style="color: #F25353">*</span></label>
            <input class="form-control form-login-1 @error('login') is-invalid @enderror"
                type="text" id="form-login" name="login">
            <label for="form-password" class="form-label title-over mt-4">Пароль <span
                    style="color: #F25353">*</span></label>
            <input class="form-control form-login-1 @error('password') is-invalid @enderror"
                type="text" id="form-password" name="password">
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
</body>

</html>
