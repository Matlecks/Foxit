@extends('index')
@php
    use App\Models\User;
@endphp
@section('content')
    <div class="mt-for-header" style="background: #ffffff;">
        <div class="mx-auto col-11 col-lg-10">
            <div class="col-lg-12 col-sm-6 col-md-10 pt-5 title">{{ $project->title }}</div>
            <div class="mt-2 mb-5 title-over">Главная — О
                компании
            </div>
        </div>
        <div class="mx-auto col-11 col-lg-10 pb-5">
            <div class="d-flex border-custom col-12" style="height: 500px;">
                <div class="col-lg-6 col-md-3 col-2" style="height: 100%;">
                    <img src="/storage/{{ $project->details_image }}"
                        style="width: 100%; height: 100%; object-fit: cover; border-top-left-radius: 4px; border-bottom-left-radius: 4px;">
                </div>
                <div class="col-6 p-5">
                    <div class="">
                        <div class="title-over" style="color: #999999">{{ $project->created_at }}</div>
                        <div class="text-montserrat fs-18" style="color: #333333">{{ $project->title }}
                        </div>
                    </div>
                    <div class="d-flex mt-5">
                        <div class="col-6">
                            {{-- @if ($user != null)
                                <div class="col-12">
                                    <div class="title-over">Автор</div>
                                    <div class="fs-15 text-montserrat" style="color: #333333;">
                                        {{ $user->name }} {{ $user->surname }}</div>
                                </div>
                            @endif --}}
                        </div>
                        <div class="col-6">
                            <button type="submit"
                                class="col-12 rounded-1 fs-14 fw-bold text-montserrat px-3 py-3 text-white"
                                style="border-style: solid; border-width: 1px; border-color: #365EDC; color: #365EDC; background: #365EDC;">Заказать
                                проект</button>
                            <button type="submit"
                                class="col-12 rounded-1 fs-14 fw-bold text-montserrat px-3 py-3 mt-3"
                                style="border-style: solid; border-width: 1px; border-color: #365EDC; color: #365EDC; background: none;">Задать
                                вопрос</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9 mx-auto mt-5 text-montserrat fs-15 text-darkgrey"
                style="line-height: 25px;">
                {!! $project->details_text !!}
            </div>
            <div class="col-9 mx-auto mt-5">
                @if (empty($users) == false)
                    <div class="mt-5">
                        <div class="text-roboto fs-22 fw-bold" style="color:#373737;">Сотрудники
                        </div>
                        @foreach ($users as $user)
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
                        @endforeach
                    </div>
                @endif
                @if ($reviews->isEmpty())
                @else
                    <div class="mt-5">
                        <div class="text-roboto fs-22 fw-bold" style="color:#373737;">Отзывы</div>
                        @foreach ($reviews as $review)
                            <div class="border-custom p-4 mt-4">
                                <div class="d-flex">
                                    <div class="rounded-circle" style="width: 60px; height: 60px;"><img
                                            src="/storage/{{ User::find($review->users_id)->avatar }}"
                                            class="rounded-circle"
                                            style="width: 100%; height: 100%; object-fit: cover;"></div>
                                    <div class="fw-bold text-roboto fs-18 ms-4">
                                        {{ User::find($review->users_id)->name }}
                                        {{ User::find($review->users_id)->surname }}</div>
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
            </div>
        </div>
    </div>
@endsection
