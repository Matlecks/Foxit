@extends('company')
@php
    use App\Models\User;
@endphp
@section('companycontent')
    <div class="">
        <div class="d-flex justify-content-between p-5"
            style="border: 1px solid #E5E5E5; border-radius: 4px;">
            <div class="col-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#365EDC"
                    class="bi bi-chat-right-quote" style="transform: scale(-1, 1)" viewBox="0 0 16 16">
                    <path
                        d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1H2zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z" />
                    <path
                        d="M7.066 4.76A1.665 1.665 0 0 0 4 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112zm4 0A1.665 1.665 0 0 0 8 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112z" />
                </svg>
            </div>
            <div class="text-montserrat fs-15 text-darkgrey col-8" style="line-height: 25px;">Мы
                благодарны
                нашим клиентам за оказанное доверие и положительные отзывы
                о совместной работе. Если хотите, можем помочь и вам: наладим работу отдела продаж,
                установим системы видеонаблюдения и автоматизации, разработаем дизайн интерьера под
                любой стиль и бюджет. Просто свяжитесь с нами! </div>
            <div class="col-3 text-end">
                <button type="submit"
                    class="rounded-1 fs-14 fw-bold text-montserrat px-3 py-2 text-white"
                    style="border-style: solid; border-width: 1px; border-color: #365EDC; color: #365EDC; background: #365EDC;">Оставить
                    свой отзыв</button>
            </div>
        </div>
    </div>

    @foreach ($reviews as $review)
        <div class="p-5 mt-5" style="border: 1px solid #E5E5E5; border-radius: 4px;">
            <div class="d-flex justify-content-between">
                <div class="rounded-circle" style="width: 60px; height: 60px;"><img
                        src="/storage/{{ User::find($review->users_id)->avatar }}"
                        class="rounded-circle" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="col-10 ms-3">
                    <div class="title-over">{{ User::find($review->users_id)->job }}
                    </div>
                    <div class="">{{ User::find($review->users_id)->name }}
                        {{ User::find($review->users_id)->surname }}</div>
                </div>
                <div class="d-flex justify-content-between col-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="#E5C45B" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="#E5C45B" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="#E5C45B" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="#E5C45B" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="#E5C45B" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                </div>
            </div>
            <div class="text-montserrat fs-15 text-darkgrey mt-3" style="line-height: 25px;">
                {{ $review->review_text }}
            </div>
        </div>
    @endforeach
@endsection
