<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Metas -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="title" content="Artı Mühendislik İnşaat">
    <meta name="description"
        content="Artı Mühendislik,İnşaat sizler için en iyi hizmeti veriyor.Asansör,Doğalgaz,İnşşat,Mühendislik alanında hizmet vermekteyiz.">
    <meta name="keywords" content="Artı Mühendislik,Artı İnşaat,Asansör,Doğalgaz,İnşaat,Mekanik Tesisat">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <!-- Title  -->
    <title>Artı Mühendislik İnşaat</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/artiimages/artilogo.jpeg') }}" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet" />

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>
    <!-- =====================================
    ==== Start Loading -->

    <div class="loading">
        <div class="gooey">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <!-- End Loading ====
    ======================================= -->



    @yield('content')

    <!-- =====================================
        ==== Start Footer -->

    <footer class="footer bg-img" data-overlay-dark="9" data-background="img/bg3.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="about mb-md50">
                        <div class="title">
                            <h5>Hakkımızda</h5>
                        </div>
                        <p>
                            Biz sizler için en iyi şekilde hizmet vermekte olan Çankırı'da
                            en tanınmış mühendislik ofislerinden biriyiz.Bize hemen ulaşın
                        </p>
                        <div class="social">
                            <span>Sosyal : </span>
                            <a href="#0" class="icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#0" class="icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#0" class="icon">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#0" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#0" class="icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="insta mb-md50">
                        <div class="title">
                            <h5>Küçük Resimler</h5>
                        </div>
                        <a href="#0">
                            <img src="{{ asset('img/artiimages/guncel1.jpeg') }}" alt="" />
                        </a>
                        <a href=" #0">
                            <img src="{{ asset('img/artiimages/guncel2.jpeg') }}" alt="" />
                        </a>
                        <a href="#0">
                            <img src="{{ asset('img/artiimages/guncel3.jpeg') }}" alt="" />
                        </a>
                        <a href="#0">
                            <img src="{{ asset('img/artiimages/guncel4.jpeg') }}" alt="" />
                        </a>
                        <a href="#0">
                            <img src="{{ asset('img/artiimages/guncel5.jpeg') }}" alt="" />
                        </a>
                        <a href="#0">
                            <img src="{{ asset('img/artiimages/guncel6.jpeg') }}" alt="" />
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="tags mb-sm50">
                        <div class="title">
                            <h5>Tag Cloud</h5>
                        </div>
                        <span><a href="#0">Artı Mühendislik</a></span>
                        <span><a href="#0">Asansör</a></span>
                        <span><a href="#0">Mekanik</a></span>
                        <span><a href="#0">İnşaar</a></span>
                        <span><a href="#0">Doğalgaz</a></span>
                        <span><a href="#0">Isıtma</a></span>
                        <span><a href="#0">Mühendislik</a></span>
                        <span><a href="#0">Artı</a></span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info">
                        <div class="title">
                            <h5>İletişim Bilgileri</h5>
                        </div>

                        <div class="item">
                            <i class="icon icofont-google-map"></i>
                            <h6>
                                Cumhuriyet Mah.Namık Kemal Parıltı Cad. No:16<br />
                                MERKEZ/ÇANKIRI
                            </h6>
                        </div>
                        <div class="item">
                            <i class="icon icofont-phone"></i>
                            <h6><span>Arayın : </span> 0376 212 12 10 / 0376 212 12 11</h6>
                        </div>
                        <div class="item">
                            <i class="icon icofont-email"></i>
                            <h6>
                                <a href="#0">
                                    <span>Email : </span> info@artimuhendislikinsaat.com.tr
                                </a>
                            </h6>
                        </div>
                        <div class="item mb-20">
                            <i class="icon icofont-clock-time"></i>
                            <h6><span>Çalışma Zamanı : </span> Pt-Cuma : 08:00 - 17:00</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sub-footer text-center">
            <div class="container">
                <p>&copy; 2022 <b>Eternity Web Geliştirme</b>. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- End Footer ====
            ======================================= -->

    <!-- jQuery -->
    <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>

    <!-- popper.min -->
    <script src="{{ asset('js/popper.min.js') }}"></script>

    <!-- bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- scrollIt -->
    <script src="{{ asset('js/scrollIt.min.js') }}"></script>

    <!-- jquery.waypoints.min -->
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>

    <!-- jquery.counterup.min -->
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>

    <!-- owl carousel -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

    <!-- jquery.magnific-popup js -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>

    <!-- stellar js -->
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>

    <!-- isotope.pkgd.min js -->
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>

    <!-- YouTubePopUp.jquery -->
    <script src="{{ asset('js/YouTubePopUp.jquery.js') }}"></script>

    <!-- Map -->
    <script src="{{ asset('js/map.js') }}"></script>

    <!-- validator js -->
    <script src="{{ asset('js/validator.js') }}"></script>

    <!-- custom scripts -->
    <script src="{{ asset('js/scripts.js') }}"></script>

    <!-- custom scripts -->
    <script src="{{ asset('js/owlarticle.js') }}"></script>

    <!-- google map api -->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBK7lXLHQgaGdP3IvMPi1ej0B9JHUbcqB0&callback=initMap"></script>
</body>

</html>
