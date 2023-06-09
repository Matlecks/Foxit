@extends('adminpage')

@section('admincontent')
    <div class="container-fluid px-3 d-flex justify-content-between align-items-center"
        style="height: 75px;">
        <div class="col-2 admin-title">Robots.txt</div>
        <div class="col-3 d-flex justify-content-end">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Контент</li>
                    <li class="breadcrumb-item active" aria-current="page">Robots.txt</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-fluid px-3">
        <div class="border-type-2 px-4" style="min-height: 500px;">
            <div class="d-flex row row-cols-2">
                <form action="{{route('UpdateRobots')}}" method="POST" class=" col-6 pt-4">
                    @csrf
                    <div class="form-group">
                        <textarea name="content" class="form-control" rows="30">{{ $content }}</textarea>
                    </div>
                    <button type="submit"
                    class="btn btn-primary py-2 mt-4 text-montserrat fw-bolder fs-15"
                    style="background: #5273E0" data-bs-dismiss="modal">Сохранить</button>
                </form>
                <div class="col-6 py-4 text-nunito fs-17" style="color: #6C757D;">
                    <h3>Пример robots.txt</h3>
                    User-agent: *
                    <br>
                    Disallow: /vendor/
                    <br>
                    Disallow: /storage/
                    <br>
                    Disallow: /bootstrap/
                    <br>
                    Disallow: /config/
                    <br>
                    Disallow: /database/
                    <br>
                    Disallow: /resources/
                    <br>
                    Disallow: /routes/
                    <br>
                    Disallow: /tests/
                    <br>
                    Disallow: /node_modules/
                    <br>
                    Disallow: /webpack.mix.js
                    <br>
                    Disallow: /package.json
                    <br>
                    Disallow: /yarn.lock
                    <br>
                    Disallow: /README.md
                    <br>
                    Disallow: /composer.json
                    <br>
                    Disallow: /composer.lock
                    <br>
                    Disallow: /phpunit.xml
                    <br>
                    Disallow: /phpunit.xml.dist
                    <br>
                    Disallow: /server.php
                    <br>
                    Disallow: /artisan
                    <br>
                    Disallow: /*.md$
                    <br>
                    Disallow: /*.lock$
                    <br>
                    Disallow: /*.json$
                    <br>
                    Disallow: /*.xml$
                    <br>
                    Sitemap: https://<yourdomain>/sitemap.xml
                </div>
            </div>
        </div>
    </div>
@endsection
