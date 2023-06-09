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
            <div class="d-flex flex-wrap border-custom col-12" style="min-height: 500px;">
                <div class="col-lg-6 col-12" style="height: 100%;">
                    <img src="/storage/{{ $project->details_image }}"
                        style="width: 100%; height: 100%; object-fit: cover; border-top-left-radius: 4px; border-bottom-left-radius: 4px;">
                </div>
                <div class="col-lg-6 col-12 p-lg-5 p-md-5 p-4">
                    <div class="d-flex flex-wrap mt-lg-5 mt-md-5 mt-0">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="">
                                <div class="title-over" style="color: #999999">
                                    {{ $project->created_at = date('d.F.y') }}</div>
                                <div class="text-montserrat fs-18" style="color: #333333">
                                    {{ $project->title }}
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="title-over" style="color: #999999">Сайт</div>
                                <a href="{{ $project->link }}" target="_blank"
                                    class="text-montserrat fs-15 text-decoration-none"
                                    style="color: #333333">{{ $project->link }}
                                </a>
                            </div>
                            <div class="mt-4">
                                <div class="title-over" style="color: #999999">Сфера</div>
                                <div class="text-montserrat fs-15" style="color: #333333">
                                    {{ $project->sphere }}
                                </div>
                            </div>
                            {{-- @if ($user != null)
                                <div class="col-12">
                                    <div class="title-over">Автор</div>
                                    <div class="fs-15 text-montserrat" style="color: #333333;">
                                        {{ $user->name }} {{ $user->surname }}</div>
                                </div>
                            @endif --}}
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-lg-0 mt-md-0 mt-5">
                            <button type="submit"
                                class="col-12 rounded-1 fs-14 fw-bold text-montserrat px-3 py-3 text-white"
                                style="border-style: solid; border-width: 1px; border-color: #365EDC; color: #365EDC; background: #365EDC;">Заказать
                                проект</button>
                            <button type="submit"
                                class="col-12 rounded-1 fs-14 fw-bold text-montserrat px-3 py-3 mt-3"
                                style="border-style: solid; border-width: 1px; border-color: #365EDC; color: #365EDC; background: none;"
                                data-bs-toggle="modal" data-bs-target="#askquestion">Задать
                                вопрос</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-12 mx-auto mt-5 text-montserrat fs-15 text-darkgrey"
                style="line-height: 25px;">
                {!! $project->details_text !!}
            </div>
            <div class="col-lg-9 col-12 mx-auto mt-5">
                @if (empty($users) == false)
                    <div class="mt-5">
                        <div class="text-roboto fs-22 fw-bold" style="color:#373737;">Сотрудники
                        </div>
                        @foreach ($users as $user)
                            <div class="border-custom p-4 mt-4">
                                <div class="d-flex flex-wrap">
                                    <div class="rounded-circle col-lg-2 col-2"
                                        style="width: 120px; height: 120px;">
                                        <img src="/storage/{{ $user->avatar }}" class="rounded-circle"
                                            style="width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                    <div
                                        class="col-col-10 col-md-9 col-12 ps-lg-4 ps-md-4 ps-0 mt-lg-0 mt-md-0 mt-4">
                                        <div class="fw-bold text-roboto fs-18">
                                            <a href="{{ route('personal_detail', $id = $user->id) }}"
                                                class="text-decoration-none text-black">{{ $user->name }}
                                                {{ $user->surname }}</a>
                                        </div>
                                        <div class="d-flex flex-wrap mt-4">
                                            {{-- <div class="col-12"> --}}
                                            <button type="submit"
                                                class="rounded-1 fs-13 fw-bold text-montserrat py-3 px-3"
                                                style="border-style: solid; border-width: 1px; border-color: #365EDC; color: #365EDC; background: none;"
                                                data-bs-toggle="modal"
                                                data-bs-target="#writemessage">Написать
                                                сообщение</button>
                                            {{-- </div> --}}
                                            <div
                                                class="col-lg-3 col-md-3 col-12 ms-lg-5 ms-md-3 ms-0 mt-lg-0 mt-md-0 mt-3">
                                                <div style="title-over">Телефон</div>
                                                <a href="tel:{{ $user->phone }}"
                                                    class="text-decoration-none text-montserrat fs-15 text-darkgrey">{{ $user->phone }}</a>
                                            </div>
                                            <div
                                                class="col-lg-3 col-md-3 col-12 ms-lg-2 ms-md-2 ms-0 mt-lg-0 mt-md-0 mt-3">
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
