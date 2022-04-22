@extends('layout')

@section('content')
    <!-- 2li Tanıtım Bölümü -->

    <div class="tancontainer">
        <div class="soldiv">
            <img src="{{ asset('images/sol.jpeg') }}" alt="" class="img1" />
        </div>

        <div class="sagdiv">
            <div class="soldiv">
                <img src="{{ asset('images/sağresim.png') }}" alt="" class="img2" />
            </div>
        </div>
    </div>

    <!--2li Tanıtım Bitişi-->

    <!--Projeler Başlangıç-->

    <div class="hiztextcont">
        <h1 class="hiztext">Hizmetlerimiz</h1>
    </div>

    <div class="projcontainer">
        <div class="card">
            <i class="fa fa-elevator fa-5x pampim"></i>
            <h1>Asansör</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad in dolorem
                officia vel, impedit explicabo tempore illum earum praesentium amet.
            </p>
        </div>
        <div class="card">
            <i class="fa fa-fire-flame-simple fa-5x pampim"></i>
            <h1>Doğalgaz</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse magnam
                quia quos facere accusantium enim excepturi, cum laudantium ut labore?
            </p>
        </div>
        <div class="card">
            <i class="fa fa-building fa-5x pampim"></i>
            <h1>İnşaat</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse magnam
                quia quos facere accusantium enim excepturi, cum laudantium ut labore?
            </p>
        </div>
        <div class="card">
            <i class="fa fa-wrench fa-5x pampim"></i>
            <h1>Mekanik Tesisat</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse magnam
                quia quos facere accusantium enim excepturi, cum laudantium ut labore?
            </p>
        </div>
    </div>

    <!--Projeler Bitiş-->

    <!-- Güncel Çalışmalar Bölümü Başlangıç -->

    <div class="güncelcontainer">
        <div class="hiztextcont">
            <h1 class="hiztext">Güncel Çalışmalarımız</h1>
        </div>
        <!-- Set up your HTML -->
        <div class="owl-carousel owl-one owl-theme">
            <div><img src="{{ asset('images/güncel1.jpeg') }}" alt="" class="güncelitem" /></div>
            <div><img src="{{ asset('images/güncel2.jpeg') }}" alt="" class="güncelitem" /></div>
            <div><img src="{{ asset('images/güncel3.jpeg') }}" alt="" class="güncelitem" /></div>
            <div><img src="{{ asset('images/güncel4.jpeg') }}" alt="" class="güncelitem" /></div>
            <div><img src="{{ asset('images/güncel5.jpeg') }}" alt="" class="güncelitem" /></div>
            <div><img src="{{ asset('images/güncel6.jpeg') }}" alt="" class="güncelitem" /></div>
        </div>
    </div>

    <!-- Güncel Çalışmalar Bölümü Bişiti-->

    <!-- Güncel Çalışmalar Bölümü Başlangıç -->

    <div class="güncelcontainer">
        <div class="hiztextcont">
            <h1 class="hiztext">Referanslarımız</h1>
        </div>
        <!-- Set up your HTML -->
        <div class="owl-carousel owl-two owl-theme">
            <div class="items">
                <img src="{{ asset('images/Asset 3@72x-8.png') }}" alt="" class="refimage" />
            </div>
            <div class="items">
                <img src="{{ asset('images/Asset 8@72x-8.png') }}" alt="" class="refimage" />
            </div>
            <div class="items">
                <img src="{{ asset('images/çb logo@72x-8.png') }}" alt="" class="refimage" />
            </div>
            <div class="items">
                <img src="{{ asset('images/yunus logo@72x-8.png') }}" alt="" class="refimage" />
            </div>
            <div class="items">
                <img src="{{ asset('images/çb logo@72x-8.png') }}" alt="" class="refimage" />
            </div>
        </div>
    </div>

    <!-- Güncel Çalışmalar Bölümü Bişiti-->

    <!-- İletişim Başlangıç-->

    <div class="iletisimdiv">
        <div class="iletisim">
            <div class="hiztextcont">
                <h1 class="hiztext">İletişim</h1>
            </div>
            <div class="ilkdivler">
                <div class="mektupdiv">
                    <i class="fa fa-envelope fa-4x"></i>
                </div>
                <div class="maildiv">
                    <h3>info@artimuhendislikinsaat.com.tr</h3>
                    <h3>artimuhendislikinsaat@gmail.com</h3>
                </div>
            </div>
            <div class="ilkdivler">
                <div class="mektupdiv">
                    <i class="fa fa-phone fa-5x"></i>
                </div>
                <div class="maildiv">
                    <h3>0376 212 12 10</h3>
                    <h3>Fax : 0376 212 12 11</h3>
                </div>
            </div>
            <div class="ilkdivler">
                <div class="mektupdiv">
                    <i class="fa fa-map-marker fa-5x"></i>
                </div>
                <div class="maildiv">
                    <h3>
                        Cumhuriyet Mah.Namık Kemal Parıltı Cad. No:16 (İş Bankası Üstü)
                        <br />
                        <br />
                        MERKEZ/ÇANKIRI
                    </h3>
                </div>
            </div>
        </div>
        <div class="harita">
            <div class="hiztextcont">
                <h1 class="hiztext">Haritada Bulun</h1>
            </div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3029.321727072301!2d33.614647515401565!3d40.60072477934416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4083c48228f083f7%3A0xd8e5705a8ffe98ac!2zQXJ0xLEgTcO8aGVuZGlzbGlrICs!5e0!3m2!1str!2str!4v1650028981595!5m2!1str!2str"
                width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
        </div>
    </div>

    <!-- İletişim Bitiş-->

    <!-- Footer Başlangıç -->

    <!-- Footer Bitiş -->
@endsection
