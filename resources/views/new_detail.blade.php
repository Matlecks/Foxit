@extends('index')

@section('content')
    <div style="background: #ffffff;">
        <div class="mt-for-header mx-auto col-11 col-lg-9">
            <div class="col-lg-12 col-sm-6 col-md-10 pt-5 title">{{ $post->title }}</div>
            <div class="mt-2 mb-5 title-over">Главная — Новости
            </div>
            <div class="col-lg-12 col-md-3 col-2" style="height: 100%;">
                @if ($post->details_image != null)
                    <img src="/storage/{{ $post->details_image }}"
                        style="width: 100%; height: 100%; object-fit: cover; border-top-left-radius: 4px; border-bottom-left-radius: 4px;">
                @else
                    <div style="width: 100%; height: 500px; background: #fafafa; border-top-left-radius: 4px; border-bottom-left-radius: 4px;">
                    </div>
                @endif
            </div>
            <div class="card-date fs-15 mt-5">{{ $post->created_at = date('d.m.y') }}</div>
            <div class="d-flex justify-content-between p-5 mt-5"
                style="border: 1px solid #E5E5E5; border-radius: 4px; background: #FAFAFA;">
                <div class="col-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="#365EDC"
                        class="bi bi-file-text" viewBox="0 0 16 16">
                        <path
                            d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                        <path
                            d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                    </svg>
                </div>
                <div class="col-8 text-montserrat fs-18" style="color: #333333; line-height: 28px;">
                    Оформите заявку на сайте, мы свяжемся с вами в ближайшее время и
                    ответим на все интересующие вопросы.
                </div>
                <div class="text-end">
                    <button type="submit"
                        class="rounded-1 fs-14 fw-bold text-montserrat px-4 py-3 text-white"
                        style="border-style: solid; border-width: 1px; border-color: #365EDC; color: #365EDC; background: #365EDC;">Задать
                        вопрос</button>
                </div>
            </div>
            <div class="mt-5 pb-5 text-montserrat fs-15 text-darkgrey" style="line-height: 25px;">
                {!! $post->details_text !!}
            </div>
        </div>
    </div>
    </div>
@endsection
