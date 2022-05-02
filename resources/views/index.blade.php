@extends('layout')

@section('content')
    <!-- 2li Tanıtım Bölümü -->

    <div class="tancontainer">
        <div class="soldiv">
            <img src="{{ asset('images/resimsoll.png') }}" alt="" class="img1" />
        </div>

        <div class="sagdiv">
            <div class="card">
                <div class="cardinner">
                    <a href="/kategori/asansör" class="aclass"><i class="fa fa-elevator fa-5x pampim"></i></a>
                    <a href="/kategori/asansör" class="aclass">
                        <h1>Asansör</h1>
                    </a>
                    <a href="/kategori/asansör" class="stretched-link"></a>
                </div>
            </div>
            <div class="card1">
                <div class="cardinner">
                    <a href="/kategori/dogalgaz" class="aclass"><i
                            class="fa fa-fire-flame-simple fa-5x pampim"></i></a>
                    <a href="/kategori/dogalgaz" class="aclass">
                        <h1>Doğalgaz</h1>
                    </a>
                    <a href="/kategori/dogalgaz" class="stretched-link"></a>
                </div>
            </div>
            <div class="card2">
                <div class="cardinner">
                    <a href="/kategori/insaat" class="aclass"><i class="fa fa-building fa-5x pampim"></i></a>
                    <a href="/kategori/insaat" class="aclass">
                        <h1>İnşaat</h1>
                    </a>
                    <a href="/kategori/insaat" class="stretched-link"></a>
                </div>
            </div>
            <div class="card3">
                <div class="cardinner">
                    <a href="/kategori/mekanik" class="aclass"><i class="fa fa-wrench fa-5x pampim"></i></a>
                    <a href="/kategori/mekanik" class="aclass">
                        <h1>Mekanik Tesisat</h1>
                    </a>
                    <a href="/kategori/mekanik" class="stretched-link"></a>
                </div>
            </div>
        </div>
    </div>

    <!--2li Tanıtım Bitişi-->

    <!-- Referanslar Bölümü Başlangıç -->

    <div class="güncelcontainer">
        <div class="hiztextcont">
            <h1 class="hiztext res">Referanslarımız</h1>
        </div>
        <!-- Set up your HTML -->
        <div class="owlcont2">
            <div class="owl-carousel owl-two owl-theme">
                <div class="items">
                    <img src="{{ asset('images/Asset 3@72x-8.png') }}" alt="" class="refimage" />
                </div>
                <div class="items">
                    <img src="{{ asset('images/Asset 8@72x-8.png') }}" alt="" class="refimage" />
                </div>
                <div class="items">
                    <img src="{{ asset('images/cblogo.png') }}" alt="" class="refimage" />
                </div>
                <div class="items">
                    <img src="{{ asset('images/yunus logo@72x-8.png') }}" alt="" class="refimage" />
                </div>
                <div class="items">
                    <img src="{{ asset('images/logo.png') }}" alt="" class="refimage" />
                </div>
            </div>
        </div>
    </div>

    <!-- Referanslar Bölümü Bişiti-->

    <!-- Güncel Çalışmalar Bölümü Başlangıç -->

    <div class="güncelcontainer">
        <div class="hiztextcont">
            <h1 class="hiztext res">Güncel Çalışmalarımız</h1>
        </div>
        <!-- Set up your HTML -->
        <div class="owlcont">
            <div class="owl-carousel owl-one owl-theme">
                <div><img src="{{ asset('images/güncel1.jpeg') }}" alt="" class="güncelitem" /></div>
                <div><img src="{{ asset('images/güncel2.jpeg') }}" alt="" class="güncelitem" /></div>
                <div><img src="{{ asset('images/güncel3.jpeg') }}" alt="" class="güncelitem" /></div>
                <div><img src="{{ asset('images/güncel4.jpeg') }}" alt="" class="güncelitem" /></div>
                <div><img src="{{ asset('images/güncel5.jpeg') }}" alt="" class="güncelitem" /></div>
                <div><img src="{{ asset('images/güncel6.jpeg') }}" alt="" class="güncelitem" /></div>
            </div>
        </div>
    </div>

    <!-- Güncel Çalışmalar Bölümü Bişiti-->

    <!-- Footer Başlangıç -->

    <!-- Footer Bitiş -->
@endsection
