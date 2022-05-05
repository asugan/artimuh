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
                        <a class="nav-link active" href="#" data-scroll-nav="0">Anasayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="3">Hizmetlerimiz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="1">Hakkımızda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="2">Portfolyomuz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="4">İletişim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="6">Tüm Çalışmalarımız</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- End Navbar ====
                                                                                                                                                                                                                            ======================================= -->
    <!-- =====================================
                                                                                                                                                                                                                                                                                                                ==== Start Header -->

    <header class="header slider-fade" data-scroll-index="0">
        <div class="owl-carousel owl-theme">
            <div class="item bg-img" data-overlay-dark="5" data-background="{{ asset('img/bg_11_11zon.webp') }}">
                <div class="v-middle caption mt-30">
                    <div class="container">
                        <h4>Artı Mühendislik</h4>
                        <h1>
                            Mühendislik ve İnşaat<br />
                            İşlerindeki Kalite...
                        </h1>
                        <a href="#0" class="butn butn-bg mt-30" data-scroll-nav="6">
                            <span>Tüm Çalışmalarımızı İnceleyin.</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="item bg-img" data-overlay-dark="5" data-background="{{ asset('img/bg2_12_11zon.webp') }}">
                <div class="text-center v-middle caption mt-30">
                    <div class="container">
                        <h4>Artı Mühendislik</h4>
                        <h1>
                            Mühendislik ve İnşaat<br />
                            İşlerindeki Kalite...
                        </h1>
                        <a href="#0" class="butn butn-bg mt-30" data-scroll-nav="6">
                            <span>Tüm Çalışmalarımızı İnceleyin.</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="item bg-img" data-overlay-dark="5" data-background="{{ asset('img/bg3_13_11zon.webp') }}">
                <div class="text-right v-middle caption mt-30">
                    <div class="container">
                        <h4>Artı</h4>
                        <h1>
                            Mühendislik ve İnşaat<br />
                            İşlerindeki Kalite...
                        </h1>
                        <a href="#0" class="butn butn-bg mt-30" data-scroll-nav="6">
                            <span>Tüm Çalışmalarımızı İnceleyin.</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- End Header ====
                                                                                                                                                                                                                                                                                                                ======================================= -->

    <!-- =====================================
                                                                                                                                                                                                                                                                                                                ==== Start Hero2 -->

    <!-- =====================================
                                                                                                                                                                                                                                                                                                                ==== Start Services2 -->

    <section class="services2 section-padding pb-90" data-scroll-index="3">
        <div class="container">
            <div class="row">
                <div class="section-head text-center col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <h6>Neler Yaparız ?</h6>
                    <h4>Hizmetlerimiz</h4>
                    <p>
                        Sizler için en kaliteli şekilde mühendislik hizmetleri
                        sağlamaktayız.
                    </p>
                </div>

                <div class="col-lg-4">
                    <div class="item">
                        <div class="img">
                            <img src="{{ asset('img/1_27_11zon.webp') }}" alt="" />
                        </div>
                        <div class="cont">
                            <span class="icon"><i class="icofont-paint-brush"></i></span>
                            <h6>Asansör Hizmetleri</h6>
                            <p>
                                Tecrübeli mühendislerimizle,asansör kurulumlarını,bakım onarım ve servislerini yapmaktayız.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="img">
                            <img src="{{ asset('img/2_28_11zon.webp') }}" alt="" />
                        </div>
                        <div class="cont">
                            <span class="icon"><i class="icofont-architecture-alt"></i></span>
                            <h6>Doğalgaz Hizmetleri</h6>
                            <p>
                                Doğalgaz sistemlerinin kurulumu,bakım ve onarımları.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="img">
                            <img src="{{ asset('img/3_29_11zon.webp') }}" alt="" />
                        </div>
                        <div class="cont">
                            <span class="icon"><i class="icofont-energy-oil"></i></span>
                            <h6>İnşaat Hizmetleri</h6>
                            <p>
                                İnşaat,mühendislik orta ve büyük ölçekli hizmetler.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="img">
                            <img src="{{ asset('img/bg_4_11zon.webp') }}" alt="" />
                        </div>
                        <div class="cont">
                            <span class="icon"><i class="icofont-energy-oil"></i></span>
                            <h6>Güneş Enerjisi Sistemleri</h6>
                            <p>
                                Güneş enerji panellerinin kurulumu,bakım ve onarımları.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="img">
                            <img src="{{ asset('img/bg1_5_11zon.webp') }}" alt="" />
                        </div>
                        <div class="cont">
                            <span class="icon"><i class="icofont-energy-oil"></i></span>
                            <h6>Mekanik Tesisat Hizmetleri</h6>
                            <p>
                                Mekanik tesisat sistemlerin kurulumu ve bakımı.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="img">
                            <img src="{{ asset('img/2_1_11zon.webp') }}" alt="" />
                        </div>
                        <div class="cont">
                            <span class="icon"><i class="icofont-energy-oil"></i></span>
                            <h6>Sıhhi ve Pis Su Sistemleri</h6>
                            <p>
                                Su sistemleri için kurulum bakım ve onarım.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Services2 ====
                                                                                                                                                                                                                                                                                                                    ======================================= -->

    <section class="hero2 section-padding" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="why-us col-lg-12 mt-70">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="cont mb-md50">
                                <h4>Neden Bizi Seçmelisiniz ?</h4>
                                <div class="feat">
                                    <span class="icon"><i class="icofont-thumbs-up"></i></span>
                                    <div class="bulk">
                                        <h6>Güvenilirlik</h6>
                                        <p>
                                            Firmamız Çankırı'da tanınıp,en güvenilir şekilde hizmet
                                            vermektedir.
                                        </p>
                                    </div>
                                </div>
                                <div class="feat">
                                    <span class="icon"><i class="icofont-engineer"></i></span>
                                    <div class="bulk">
                                        <h6>Uzmanlık</h6>
                                        <p>
                                            Alanında uzman mühendislerimiz,işlerinin en iyileridir.
                                        </p>
                                    </div>
                                </div>
                                <div class="feat">
                                    <span class="icon"><i class="icofont-help-robot"></i></span>
                                    <div class="bulk">
                                        <h6>Kalite</h6>
                                        <p>Uzmanlık aynı zamanda kaliteli işler demektir.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="img">
                                <img src="{{ asset('img/2_2_11zon.webp') }}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Hero2 ====
                                                                                                                                                                                                                                                                                                                ======================================= -->

    <!-- =====================================
                                                                                                                                                                                                                                                                                                                ==== Start Clients -->

    <div class="clients text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 owl-carousel owl-theme">
                    <div class="client-logo">
                        <a href="#0">
                            <img src="{{ asset('img/cblogo_14_11zon.webp') }}" alt="" />
                        </a>
                    </div>
                    <div class="client-logo">
                        <a href="#0">
                            <img src="{{ asset('img/Asset 3@72x-8_9_11zon.webp') }}" alt="" />
                        </a>
                    </div>
                    <div class="client-logo">
                        <a href="#0">
                            <img src="{{ asset('img/Asset 8@72x-8_10_11zon.webp') }}" alt="" />
                        </a>
                    </div>
                    <div class="client-logo">
                        <a href="#0">
                            <img src="{{ asset('img/ilgaz-belediyesi-logo_21_11zon.webp') }}" alt="" />
                        </a>
                    </div>
                    <div class="client-logo">
                        <a href="#0">
                            <img src="{{ asset('img/logo_22_11zon.webp') }}" alt="" />
                        </a>
                    </div>
                    <div class="client-logo">
                        <a href="#0">
                            <img src="{{ asset('img/yunus logo@72x-8_23_11zon.webp') }}" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Clients ====
                                                                                                                                                                                                                                                                                                                ======================================= -->

    <!-- =====================================
                                                                                                                                                                                                                                                                                                                ==== Start Blog -->

    <section class="blog section-padding" data-scroll-index="6">
        <div class="container">
            <div class="row">
                <div class="section-head text-center col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <h6>Çalışmalarımızı İnceleyin.</h6>
                    <h4>Tüm Çalışmalarımız</h4>
                    <p>Bütün çalışmalarımızı sizler için topladık.</p>
                </div>
                <div class="col-12 text-center mt-5 mb-5">
                    <div class="row">
                        <div class="col-lg-3"><a href="kategori/asansör"
                                class="butn butn-bg mt-5 mb-5"><span>Asansör</span></a>
                        </div>
                        <div class="col-lg-3"><a href="kategori/dogalgaz"
                                class="butn butn-bg mt-5 mb-5"><span>Doğalgaz</span></a>
                        </div>
                        <div class="col-lg-3"><a href="kategori/insaat"
                                class="butn butn-bg mt-5 mb-5"><span>İnşaat</span></a>
                        </div>
                        <div class="col-lg-3"><a href="kategori/mekanik"
                                class="butn butn-bg mt-5 mb-5"><span>Mekanik
                                    Tesisat</span></a></div>
                    </div>
                </div>
                @foreach ($postdata as $data)
                    <div class="col-lg-4">
                        <div class="item mb-md50">
                            <div class="post-img">
                                <a href="{{ url($data->id) }}">
                                    <img src="{{ url('Image/' . $data->basimage) }}" alt="" />
                                </a>
                            </div>
                            <div class="post-cont">
                                <a href="{{ url($data->id) }}"><span
                                        class="tag">{{ $data->category }}</span></a>
                                <h5>
                                    <a href="{{ url($data->id) }}">{{ $data->baslik }}</a>
                                </h5>
                                <div class="info">
                                    <a href="{{ url($data->id) }}">{{ $data->text }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-12 text-center mt-5">
                    <a href="/calismalarimiz" class="butn butn-bg mt-5"><span>Tüm Çalışmaları Görün.</span></a>
                </div>
            </div>
        </div>
    </section>

    <!-- End Blog ====
                                                                                                                                                                                                                                                                                                                ======================================= -->

    <!-- =====================================
                                                                                                                                                                                                                                                                                                                ==== Start Portfolio -->

    <section class="portfolio section-padding" data-scroll-index="2" data-overlay-dark="9"
        data-background="{{ asset('img/bg_4_11zon.webp') }}">
        <div class="container">
            <div class="row">
                <div class="section-head text-center col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <h6>En Son Projelerimiz</h6>
                    <h4>Projelerimizi İnceleyin</h4>
                    <p>Sizler için sunduğumuz en son proje örneklerimizi inceleyin.</p>
                </div>

                <!-- filter links -->
                <div class="filtering text-center full-width">
                    <div class="filter">
                        <span data-filter="*" class="active">Hepsi</span>
                        <span data-filter=".brand">Asansör</span>
                        <span data-filter=".web">Doğalgaz</span>
                        <span data-filter=".graphic">İnşaat</span>
                    </div>
                </div>

                <!-- gallery -->
                <div class="gallery full-width">
                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items graphic">
                        <div class="item-img">
                            <img src="{{ asset('img/guncel1_15_11zon.webp') }}" alt="image" class="img-item" />
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <div class="cont">
                                        <h6>Building</h6>
                                        <p>Work Description</p>
                                    </div>
                                    <a href="{{ asset('img/guncel1.jpeg') }}" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items web">
                        <div class="item-img">
                            <img src="{{ asset('img/guncel2_16_11zon.webp') }}" alt="image" class="img-item" />
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <div class="cont">
                                        <h6>Building</h6>
                                        <p>Work Description</p>
                                    </div>
                                    <a href="img/guncel2.jpeg" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items brand">
                        <div class="item-img">
                            <img src="{{ asset('img/guncel3_17_11zon.webp') }}" alt="image" class="img-item') }}" />
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <div class="cont">
                                        <h6>Building</h6>
                                        <p>Work Description</p>
                                    </div>
                                    <a href="{{ asset('img/portfolio/3.jpg') }}" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items graphic">
                        <div class="item-img">
                            <img src="{{ asset('img/guncel4_18_11zon.webp') }}" alt="image" class="img-item" />
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <div class="cont">
                                        <h6>Building</h6>
                                        <p>Work Description</p>
                                    </div>
                                    <a href="{{ asset('img/portfolio/4.jpg') }}" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items web">
                        <div class="item-img">
                            <img src="{{ asset('img/guncel5_19_11zon.webp') }}" alt="image" class="img-item" />
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <div class="cont">
                                        <h6>Building</h6>
                                        <p>Work Description</p>
                                    </div>
                                    <a href="{{ asset('img/portfolio/5.jpg') }}" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items brand">
                        <div class="item-img">
                            <img src="{{ asset('img/guncel6_20_11zon.webp') }}" alt="image" class="img-item" />
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <div class="cont">
                                        <h6>Building</h6>
                                        <p>Work Description</p>
                                    </div>
                                    <a href="{{ asset('img/portfolio/3.jpg') }}" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items graphic">
                        <div class="item-img">
                            <img src="{{ asset('img/guncel6_20_11zon.webp') }}" alt="image" class="img-item" />
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <div class="cont">
                                        <h6>Building</h6>
                                        <p>Work Description</p>
                                    </div>
                                    <a href="{{ asset('img/portfolio/4.jpg') }}" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items web">
                        <div class="item-img">
                            <img src="{{ asset('img/guncel6_20_11zon.webp') }}" alt="image" class="img-item" />
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <div class="cont">
                                        <h6>Building</h6>
                                        <p>Work Description</p>
                                    </div>
                                    <a href="{{ asset('img/portfolio/5.jpg') }}" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Portfolio ====
                                                                                                                                                                                                                                                                                                                ======================================= -->

    <!-- =====================================
                                                                                                                                                                                                                                                                                                                ==== Start Contact -->

    <section class="contact section-padding" data-scroll-index="4">
        <div class="container">
            <div class="row">
                <div class="section-head text-center col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <h6>Etkileşimde Kalın!</h6>
                    <h4>İletişime Geçin</h4>
                    <p>Aşağıdaki formu doldurarak bizimle iletişime geçebilirsiniz.</p>
                </div>

                <div class="col-lg-7">
                    <form class="form mb-md50" id="contact-form" method="post" action="{{ route('contact.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="messages"></div>

                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_name" type="text" name="name" placeholder="Adınız"
                                            required="required" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_email" type="email" name="email" placeholder="E-Posta"
                                            required="required" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_phone" type="text" name="phone" placeholder="Telefon"
                                            required="required" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_subject" type="text" name="subject" placeholder="Konu" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea id="form_message" name="message" placeholder="Mesajınız" rows="4" required="required"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="butn butn-bg">
                                        <span>Gönder</span>
                                    </button>
                                </div>
                                @if (session()->has('success'))
                                    <div class="alert alert-success">
                                        @if (is_array(session('success')))
                                            <ul>
                                                @foreach (session('success') as $message)
                                                    <li>{{ $message }}</li>
                                                @endforeach
                                            </ul>
                                        @else
                                            {{ session('success') }}
                                        @endif
                                    </div>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-5">
                    <div class="contact-info">
                        <div class="fork">
                            <div class="fork-title">
                                <h5>Çankırı</h5>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p>
                                        Cumhuriyet Mah.Namık Kemal Parıltı Cad. No:16 (İş Bankası
                                        Üstü)
                                    </p>
                                </div>
                                <div class="col-sm-6">
                                    <p>0376 212 12 10 / 0376 212 12 11</p>
                                    <p>info@artimuhendislikinsaat.com.tr</p>
                                </div>
                            </div>
                        </div>
                        <div class="fork">
                            <div class="fork-title">
                                <h5>Haritada Bulun!</h5>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6058.643434145402!2d33.616836!3d40.600725!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd8e5705a8ffe98ac!2zQXJ0xLEgTcO8aGVuZGlzbGlrICs!5e0!3m2!1str!2str!4v1651585038054!5m2!1str!2str"
                                        width="400" height="300" style="border: 0" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Contact ====
                                                                                                                                                                                                                                                                                                                ======================================= -->
@endsection
