@extends('layout')

@section('content')
    <!--İletişim Section !-->
    <div class="iletisimcontainer">
        <div class="adrescont">
            <div class="iletisim">
                <div class="hiztextcont">
                    <h1 class="hiztext">İletisim</h1>
                </div>
                <div class="ilkdivler">
                    <div class="mektupdiv">
                        <i class="fa fa-envelope fa-3x"></i>
                    </div>
                    <div class="maildiv">
                        <h3>info@artimuhendislikinsaat.com.tr</h3>
                        <h3>artimuhendislikinsaat@gmail.com</h3>
                    </div>
                </div>
                <div class="ilkdivler">
                    <div class="mektupdiv">
                        <i class="fa fa-phone fa-3x"></i>
                    </div>
                    <div class="maildiv">
                        <h3>0376 212 12 10</h3>
                        <h3>Fax : 0376 212 12 11</h3>
                    </div>
                </div>
                <div class="ilkdivler">
                    <div class="mektupdiv">
                        <i class="fa fa-map-marker fa-4x"></i>
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
                <div class="socialcont">
                    <div class="ilbox">
                        <div><a href="twitter.com"><i class="i fa-brands fa-twitter fa-2x"></i></a></div>
                        <div><a href="https://www.facebook.com/artimuhensislikinsaat/"><i
                                    class="i fa-brands fa-facebook fa-2x"></i></a></div>
                        <div><a href="https://www.instagram.com/artimuhendislikasansorinsaat/"><i
                                    class="i fa-brands fa-instagram-square fa-2x"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="harita">
            <div class="hiztextcont">
                <h1 class="hiztext">Haritada Bulun</h1>
            </div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3029.321727072301!2d33.614647515401565!3d40.60072477934416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4083c48228f083f7%3A0xd8e5705a8ffe98ac!2zQXJ0xLEgTcO8aGVuZGlzbGlrICs!5e0!3m2!1str!2str!4v1650028981595!5m2!1str!2str"
                width="500" height="350" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
        </div>
    </div>


    <!--İletişim Section Son !-->
@endsection
