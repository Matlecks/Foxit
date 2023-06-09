@extends('adminpage')

@section('admincontent')
    <div class="container-fluid px-3 d-flex justify-content-between align-items-center"
        style="height: 75px;">
        <div class="col-2 admin-title">Ссылки на соцсети</div>
        <div class="col-3 d-flex justify-content-end">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Контент</li>
                    <li class="breadcrumb-item active" aria-current="page">Ссылки на соцсети</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-fluid px-3">
        <div class="border-type-2 px-4">
            <form action="{{ route('UpdateSocseti') }}" method="">
                @csrf
                <label for="form-login" class="form-label title-over mt-4">ВКонтакте</label>
                <input class="form-control form-login-1 w-25" type="text" id="form-login"
                    value="{{ $contacts->vk }}" name="vk">
                <label for="form-login" class="form-label title-over mt-5">Instagram</label>
                <input class="form-control form-login-1 w-25" type="text" id="form-login"
                    value="{{ $contacts->inst }}" name="inst">
                <label for="form-login" class="form-label title-over mt-5">WhatsApp</label>
                <input class="form-control form-login-1 w-25" type="text" id="form-login"
                    value="{{ $contacts->whatsapp }}" name="whatsapp">
                <label for="form-login" class="form-label title-over mt-5">Telegramm</label>
                <input class="form-control form-login-1 mb-4 w-25" type="text" id="form-login"
                    value="{{ $contacts->tg }}" name="tg">
                <button
                    class="btn btn-outline-primary mt-4 mb-3 col-12 fw-bolder text-montserrat fs-14 w-25"
                    data-bs-toggle="modal" data-bs-target="#writemessage">Сохранить</button>
            </form>
        </div>
    </div>
@endsection
