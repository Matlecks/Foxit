@extends('index')

@section('content')
    <div class="mt-for-header" style="background: #ffffff;">
        <div class="mx-auto col-11 col-lg-10">
            <div class="col-lg-4 col-sm-6 col-md-10 pt-5 title">О компании</div>
            <div class="mt-2 mb-5 title-over">Главная — О
                компании
            </div>
        </div>
        <div class="mx-auto col-11 col-lg-10 d-flex pb-5">
            <div class="btn-group-vertical d-none d-md-none d-lg-block col-3 h-50 fs-15 fw-light text-montserrat"
                style="position: sticky; top: 50px;">
                <a href="{{ route('about') }}" type="button"
                    class="btn border-custom ps-3 py-3 text-start">О компании</a>
                <a href="{{ route('personal') }}" type="button"
                    class="btn border-custom ps-3 py-3 text-start">Сотрудники</a>
                <a href="{{ route('reviews') }}" type="button"
                    class="btn border-custom ps-3 py-3 text-start">Отзывы</a>
            </div>
            <div class="col-lg-9 col-12">
                <div class="ps-lg-5 px-0">
                    @yield('companycontent')
                </div>
            </div>
        </div>
    </div>
@endsection
