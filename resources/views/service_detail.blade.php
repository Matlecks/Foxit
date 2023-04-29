@extends('index')

@php
    use App\Models\Review;
    use App\Models\User;
@endphp

@section('content')
    <div style="background: #ffffff;">
        <div class="mt-for-header mx-auto col-11 col-lg-9">
            <div class="col-lg-4 col-sm-6 col-md-10 pt-5 title">{{ $service->title }}</div>
            <div class="mt-2 mb-5 title-over">Главная — Услуги
            </div>
            <div class="{{-- mx-auto --}} col-11 d-flex pb-5">
                <div class="col-lg-9 col-12">
                    <div class="d-flex">
                        <div class="col-6">
                            <img src="/storage/{{ $service->details_image }}" class="px-5"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-5 title-preview" style="font-size: 14px; line-height: 24px">
                            <p>{{ $service->anounce_text }}</p>
                            <a href="" class="text-decoration-none"
                                style="border-bottom-style: dotted; border-width: 1px;">Подробности</a>
                            <hr>
                            @if (empty($user) == false)
                                <div
                                    class="d-flex justify-content-between row row-cols-lg-2 row-cols-md-2 row-cols-1">
                                    <div class="col-6" style="height: 50px;">
                                        @if ($user->logo != null)
                                            <img src="/storage/{{ $user->logo }}" class=""
                                                style="width: 100%; height: 100%; object-fit: contain;">
                                        @endif
                                    </div>
                                    <a href=""
                                        class="col-6 fs-13 text-decoration-none text-darkgrey">Все
                                        услуги исполнителя {{ $user->name }}</a>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="text-montserrat fs-15 mt-5" style="line-height: 25px; color: #555555;">
                        {!! $service->details_text !!}
                    </div>
                    @if ($reviews->isEmpty())
                    @else
                        <div class="mt-5">
                            <div class="text-roboto fs-22 fw-bold" style="color:#373737;">Отзывы</div>
                            @foreach ($reviews as $review)
                                <div class="border-custom p-4 mt-4">
                                    <div class="d-flex">
                                        <div class="rounded-circle" style="width: 60px; height: 60px;">
                                            <img src="/storage/{{ User::find($review->users_id)->avatar }}"
                                                class="rounded-circle"
                                                style="width: 100%; height: 100%; object-fit: cover;">
                                        </div>
                                        <div class="fw-bold text-roboto fs-18 ms-4">
                                            {{ User::find($review->users_id)->name }}
                                            {{ User::find($review->users_id)->surname }}</div>
                                        <div class=""></div>
                                    </div>
                                    <div class="text-montserrat fs-15 text-darkgrey text-truncate mt-4">
                                        {{ $review->review_text }}</div>
                                    <div class="mt-4"><button type="submit"
                                            class="rounded-1 fs-13 fw-bold text-montserrat p-2"
                                            style="border-style: solid; border-width: 1px; border-color: #365EDC; color: #365EDC; background: none;">Подробнее</button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                    @if (empty($user) == false)
                        <div class="mt-5">
                            <div class="text-roboto fs-22 fw-bold" style="color:#373737;">Сотрудники
                            </div>
                            <div class="border-custom p-4 mt-4">
                                <div class="d-flex">
                                    <div class="rounded-circle col-2"
                                        style="width: 120px; height: 120px;">
                                        <img src="/storage/{{ $user->avatar }}" class="rounded-circle"
                                            style="width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                    <div class="col-10 ps-4">
                                        <div class="fw-bold text-roboto fs-18">
                                            {{ $user->name }}
                                            {{ $user->surname }}</div>
                                        <div class="d-flex mt-4">
                                            <button type="submit"
                                                class="rounded-1 fs-13 fw-bold text-montserrat py-2 px-3"
                                                style="border-style: solid; border-width: 1px; border-color: #365EDC; color: #365EDC; background: none;">Написать
                                                сообщение</button>
                                            <div class="ms-5">
                                                <div style="title-over">Телефон</div>
                                                <a href="tel:{{ $user->phone }}"
                                                    class="text-decoration-none text-montserrat fs-15 text-darkgrey">{{ $user->phone }}</a>
                                            </div>
                                            <div class="ms-5">
                                                <div style="title-over">E-mail</div>
                                                <a href="tel:{{ $user->email }}"
                                                    class="text-decoration-none text-montserrat fs-15 text-darkgrey">{{ $user->email }}</a>
                                            </div>
                                        </div>
                                        <div class="text-montserrat fs-15 text-darkgrey mt-4">
                                            {!! $user->anounce_text !!}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-3 fs-15 fw-light text-montserrat">
                    <div class="border-type-1"
                        style="position: sticky; top: 50px; padding: 26px 32px 32px 32px;">
                        <div class="fw-bold fs-15 text-roboto">{{ $service->title }}</div>
                        <div class="fw-bold fs-24 text-montserrat mt-2">от 12 000 рублей</div>
                        <button type="submit"
                            class="btn btn-primary col-12 mt-3 text-montserrat fw-bold fs-15 px-3 py-2"
                            style="background: #365EDC; border-color:#365EDC;">Оформить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
