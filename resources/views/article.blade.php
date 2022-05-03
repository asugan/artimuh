@extends('layout')

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
    <section class="services2 section-padding pb-90" data-scroll-index="3">
        <div class="container">
            <div class="row">
                <div class="section-head text-center col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <h6>Çalışmamızı İnceleyin</h6>
                    <h4>{{ $post->baslik }}</h4>
                    <p>
                        {{ $post->text }}
                    </p>
                </div>

                <div class="owl-carousel owl-one owl-theme">
                    <div class="item"><img src="{{ url('Image/' . $post->image1) }}" alt="" />
                    </div>
                    <div class="item"><img src="{{ url('Image/' . $post->image2) }}" alt="" />
                    </div>
                    <div class="item"><img src="{{ url('Image/' . $post->image3) }}" alt="" />
                    </div>
                    <div class="item"><img src="{{ url('Image/' . $post->image4) }}" alt="" />
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
