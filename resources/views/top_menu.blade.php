@php
$elements = [['title'=>'КОМПАНИЯ', 'link'=>'about', '100'], ['title'=>'УСЛУГИ', 'link'=>'services', '200'], ['title'=>'ПРОЕКТЫ', 'link'=>'projects', '300'], ['title'=>'НОВОСТИ', 'link'=>'news', '400'], ['title'=>'КОНТАКТЫ', 'link'=>'contacts', '500']];
@endphp
<div class="text-center fw-bolder fs-12 text-montserrat text-white py-2 justify-content-center align-items-center collapse navbar-collapse"
    style="letter-spacing: 0.96px; min-height: 66px;">

@foreach ($elements as $element)
{{-- @dd($element) --}}
    <a class="col-2 text-white" style="text-decoration: none;" href="/{{$element['link']}}">
        <div class="col-12">{{$element['title']}}</div>
    </a>
@endforeach
</div>

