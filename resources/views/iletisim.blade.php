@extends('layout')

@section('content')
    <!--İletişim Section !-->
    <div class="iletisimcontainer">
        <div class="adrescont">
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
        </div>
        <div class="ilbox">
            <div class="background">
                <div class="container">
                    <div class="screen">
                        <div class="screen-header">
                            <div class="screen-header-left">
                                <div class="screen-header-button close"></div>
                                <div class="screen-header-button maximize"></div>
                                <div class="screen-header-button minimize"></div>
                            </div>
                            <div class="screen-header-right">
                                <div class="screen-header-ellipsis"></div>
                                <div class="screen-header-ellipsis"></div>
                                <div class="screen-header-ellipsis"></div>
                            </div>
                        </div>
                        <div class="screen-body">
                            <div class="screen-body-item left">
                                <div class="app-title">
                                    <span>Bize</span>
                                    <span>Ulaşın!</span>
                                </div>
                                <div class="app-contact">İletişim Bilgisi : 0376 212 12 10</div>
                            </div>
                            <div class="screen-body-item">
                                <div class="app-form">
                                    <div class="app-form-group">
                                        <input class="app-form-control" placeholder="Adınız">
                                    </div>
                                    <div class="app-form-group">
                                        <input class="app-form-control" placeholder="E-Posta Adresiniz">
                                    </div>
                                    <div class="app-form-group">
                                        <input class="app-form-control" placeholder="Numaranız">
                                    </div>
                                    <div class="app-form-group message">
                                        <input class="app-form-control" placeholder="Mesajınızı Yazın.">
                                    </div>
                                    <div class="app-form-group buttons">
                                        <button class="app-form-button">VAZGEÇ</button>
                                        <button class="app-form-button">GÖNDER</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--İletişim Section Son !-->
@endsection
