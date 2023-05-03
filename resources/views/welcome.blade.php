<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CV Rehberi, kullanıcıların özgeçmişlerini yükleyip ChatGPT API servisleri kullanarak analiz ettikleri bir
            platformdur. Siteye yüklenen özgeçmiş dosyası, ChatGPT API tarafından analiz edilir ve kullanıcıya analiz
            sonucu paylaşılır. CV Rehberi, kullanıcıların özgeçmişlerindeki güçlü ve zayıf yönleri keşfetmelerine ve bu
            doğrultuda kendilerini geliştirmelerine yardımcı olmayı hedefler.">
    <meta name="author" content="Tarık KAMAT">
    <meta name="generator" content="Hugo 0.88.1">
    <title>CV Rehberi | Güçlü özgeçmişe sahip ol!</title>


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"
          integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
</head>
<body class="h-100 text-center">

<div class="cover-container d-flex flex-column h-100 mx-auto">
        <div class="row mt-5 pt-5">
            <div class="col-sm-12">
                <h1>CV Rehberi</h1>
            </div>
            <div class="col-sm-12">
                <p class="lead">
                    CV Rehberi, kullanıcıların özgeçmişlerini yükleyip ChatGPT API servisleri kullanarak analiz ettikleri bir
                    platformdur. Siteye yüklenen özgeçmiş dosyası, ChatGPT API tarafından analiz edilir ve kullanıcıya analiz
                    sonucu paylaşılır. CV Rehberi, kullanıcıların özgeçmişlerindeki güçlü ve zayıf yönleri keşfetmelerine ve bu
                    doğrultuda kendilerini geliştirmelerine yardımcı olmayı hedefler.
                </p>
            </div>
            <div class="col-sm-12">
                <p class="lead">
                <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" id="file" class="form-control mb-3">
                    <button type="submit" class="btn btn-lg btn-primary fw-bold border-white">Analiz Et</button>
                </form>
                </p>
            </div>
            <div class="col-sm-12">
                <h6 class="mt-5">Bu uygulamayı kullanarak <a href="{{ route('user-agreement') }}" target="_blank" class="text-primary">KULLANICI SÖZLEŞMESİNİ</a> okumuş ve onaylamış sayılırsınız.</h6>
            </div>
        </div>

    <footer class="mt-auto text-dark">
        <p>coding by <a href="https://github.com/tarikkamat" class="text-primary">@tarikkamat</a>, theme by <a
                    href="https://twitter.com/mdo" class="text-primary">@mdo</a>.</p>
    </footer>
</div>

@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
</body>
</html>
