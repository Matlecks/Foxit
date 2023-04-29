@extends('company')

@section('companycontent')
    <div class="">
        <b class="fs-26 text-dark text-roboto">Команда</b>
        <div class="personal-list mt-5">
            @foreach ($users as $user)
                <a href="{{ route('personal_detail',$id = $user->id )}}"class="text-decoration-none">
                    <div class="border rounded-2"
                        style="background: #fafafa url('/storage/{{ $user->anounce_image }}');background-size: cover;
                        background-position: center;
                        background-repeat: no-repeat;">
                        <div class="col-10 mx-auto my-4 d-flex align-items-end" style="height: 410px;">
                            <div class="">
                                <div class="col-12 card-title-over fs-13">
                                    Веб-разработчик</div>
                                <div class="col-12 mb-3 mt-1 card-title text-white fs-18">
                                    {{ $user->name }} {{ $user->surname }}
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
