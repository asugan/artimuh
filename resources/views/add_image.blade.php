@extends('layout')

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

@section('content')
    <!-- =====================================
                        ==== Start Navbar -->

    <nav class="navbar nav-fixed nav-transparent navbar-expand-lg">
        <div class="container">
            <!-- Logo -->
            <a class="logo" href="#"> </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active text-dark" href="/">Anasayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="/">Hizmetlerimiz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="/">Hakkımızda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="/">Portfolyomuz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="/">İletişim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="/">Tüm Çalışmalarımız</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- End Navbar ====
                                        ======================================= -->
    <div class="container">
        <div class="row">
            <form method="post" action="{{ route('images.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="image">
                    <label class="col-12 text-center mb-3">
                        <h4>Resimler</h4>
                    </label>
                    <input type="file" class="form-control mb-3" required name="basimage">
                    <input type="file" class="form-control mb-3" required name="image1">
                    <input type="file" class="form-control mb-3" required name="image2">
                    <input type="file" class="form-control mb-3" required name="image3">
                    <input type="file" class="form-control" required name="image4">
                    <label class="col-12 text-center mt-5 mb-3">
                        <h4>Kategori</h4>
                    </label>
                    <div class="form-group">
                        <select class="form-control" name="category">
                            <option value="">Kategori Seçin</option>
                            <option value="asansör">Asansör</option>
                            <option value="dogalgaz">Doğalgaz</option>
                            <option value="insaat">İnşaat</option>
                            <option value="mekanik">Mekanik</option>
                            <option value="diger">Diğer</option>
                        </select>
                    </div>
                    <label class="col-12 text-center mt-5 mb-3">
                        <h4>Başlık</h4>
                    </label>
                    <input class="col-12" type="text" id="lname" name="baslik">
                    <label class="col-12 text-center mt-5 mb-3">
                        <h4>Açıklama</h4>
                    </label>
                    <input class="col-12" type="text" id="lname" name="text">
                </div>

                <div class="post_button text-center mt-5">
                    <button type="submit" class="btn btn-success">Database'e Yükle</button>
                </div>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
@endsection
