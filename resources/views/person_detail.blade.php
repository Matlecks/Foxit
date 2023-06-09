@extends('company')
@php
    use App\Models\User;
@endphp
@section('companycontent')
    <div class="d-flex flex-wrap justify-content-between rounded-1 py-5 pe-lg-5 pe-md-5 pe-0"
        style="background: #FAFAFA; border: 1px solid #e5e5e5;">
        <div class="col-lg-8 col-md-6 col-12">
            <div class="d-flex flex-wrap justify-content-between col-12 ps-5">
                <div class="col-lg-8 col-12">
                    <div class="title-over">Должность</div>
                    <div class="fs-19 text-montserrat" style="color: #333333;">{{ $user->job }}</div>
                </div>
                <button type="submit"
                    class="col-lg-4 col-10 rounded-1 fs-14 fw-bold text-montserrat px-3 py-lg-1 py-2 mt-lg-0 mt-4"
                    style="border-style: solid; border-width: 1px; border-color: #365EDC; color: #365EDC; background: none;"
                    data-bs-toggle="modal" data-bs-target="#writemessage">Написать
                    сообщение</button>
            </div>
            <div class="mt-4" style="height: 1px; background: #e5e5e5"></div>
            <div class="d-flex flex-wrap justify-content-between ps-5 mt-4">
                <div class="col-lg-4 col-12">
                    <div class="title-over">Телефон</div>
                    <div class="fs-15 text-montserrat" style="color: #333333;">{{ $user->phone }}</div>
                </div>
                <div class="col-lg-4 col-12 mt-lg-0 mt-4">
                    <div class="title-over">E-mail</div>
                    <div class="fs-15 text-montserrat" style="color: #333333;">{{ $user->email }}</div>
                </div>
                <div class="col-lg-4 col-12 d-flex justify-content-start align-items-center mt-lg-0 mt-4"
                    style="color: #979797;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" width="20px"
                        height="20px" fill="currentColor" class="mx-lg-3 mx-0">
                        <path
                            d="M 7.546875 0 C 3.390625 0 0 3.390625 0 7.546875 L 0 18.453125 C 0 22.609375 3.390625 26 7.546875 26 L 18.453125 26 C 22.609375 26 26 22.609375 26 18.453125 L 26 7.546875 C 26 3.390625 22.609375 0 18.453125 0 Z M 7.546875 2 L 18.453125 2 C 21.527344 2 24 4.46875 24 7.546875 L 24 18.453125 C 24 21.527344 21.53125 24 18.453125 24 L 7.546875 24 C 4.472656 24 2 21.53125 2 18.453125 L 2 7.546875 C 2 4.472656 4.46875 2 7.546875 2 Z M 20.5 4 C 19.671875 4 19 4.671875 19 5.5 C 19 6.328125 19.671875 7 20.5 7 C 21.328125 7 22 6.328125 22 5.5 C 22 4.671875 21.328125 4 20.5 4 Z M 13 6 C 9.144531 6 6 9.144531 6 13 C 6 16.855469 9.144531 20 13 20 C 16.855469 20 20 16.855469 20 13 C 20 9.144531 16.855469 6 13 6 Z M 13 8 C 15.773438 8 18 10.226563 18 13 C 18 15.773438 15.773438 18 13 18 C 10.226563 18 8 15.773438 8 13 C 8 10.226563 10.226563 8 13 8 Z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                        fill="currentColor" class="bi bi-whatsapp mx-lg-3 mx-0 ms-4"
                        viewBox="0 0 16 16">
                        <path
                            d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                    </svg>
                    <img class="mx-lg-3 mx-0 ms-4" src="/img/vk.png" height="26">
                </div>
            </div>
            <div class="ps-5 pe-lg-0 pe-md-0 pe-5 mt-4 fs-15 text-montserrat text-darkgrey">
                {!! $user->details_text !!}
            </div>
        </div>
        <div class="rounded-1 col-lg-3 col-6 mx-lg-0 mx-md-0 mx-auto"
            style="height: 300px; width: 300px;">
            <img src="/storage/{{ $user->anounce_image }}" class="rounded-1"
                style="width: 100%; height: 100%; object-fit: cover;">
        </div>
    </div>
    @if ($projects->isEmpty())
    @else
        <div class="mt-5">
            <div class="text-roboto fs-22 fw-bold" style="color:#373737;">Проекты</div>
            @foreach ($projects as $project)
                <div class="border-custom p-4 mt-4">
                    <div class="d-flex flex-wrap">
                        <div class="rounded-1 col-lg-2 col-md-2" style="width: 150px; height: 100px;">
                            <img src="/storage/{{ $project->anounce_image }}" class="rounded-1"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-lg-10 col-md-9 ps-lg-4 ps-md-4 ps-0">
                            <div class="fw-bold text-roboto fs-18 mt-lg-0 mt-md-0 mt-4">
                                <a href="{{ route('ShowProjectDetailPage', $id = $project->id) }}"
                                    class="text-decoration-none text-black">{{ $project->title }}</a>
                            </div>
                            <div class="text-montserrat fs-15 text-darkgrey mt-4">
                                {!! $project->anounce_text !!}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
    @if ($services->isEmpty())
    @else
        <div class="mt-5">
            <div class="text-roboto fs-22 fw-bold" style="color:#373737;">Услуги</div>
            @foreach ($services as $service)
                <div class="border-custom p-4 mt-4">
                    <div class="d-flex">
                        <div class="rounded-1 col-2" style="width: 150px; height: 100px;">
                            <img src="/storage/{{ $service->anounce_image }}" class="rounded-1"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-10 ps-4">
                            <div class="fw-bold text-roboto fs-18">
                                {{ $service->title }}</div>
                            <div class="text-montserrat fs-15 text-darkgrey mt-4">
                                {{ $service->anounce_text }}</div>
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
@endsection
