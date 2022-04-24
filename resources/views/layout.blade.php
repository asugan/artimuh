<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/other.css') }}">
    <link rel="stylesheet" href="{{ asset('css/calismalar.css') }}">
    <title>{{ config('app.name') }}</title>
</head>

<body>
    <!--Navbar-->

    <nav class="navbar">
        <!-- LOGO -->
        <div class="logo"></div>
        <!-- NAVIGATION MENU -->
        <ul class="nav-links">
            <!-- USING CHECKBOX HACK -->
            <input type="checkbox" id="checkbox_toggle" />
            <label for="checkbox_toggle" class="hamburger">&#9776;</label>
            <!-- NAVIGATION MENUS -->
            <div class="menu">
                <li><a href="/">Anasayfa</a></li>
                <li><a href="/hakkimizda">Hakkımızda</a></li>
                <li><a href="/calismalarimiz">Çalışmalarımız</a></li>
                <li><a href="/belgeler">Belgelerimiz</a></li>
                <li><a href="/iletisim">İletişim</a></li>
            </div>
        </ul>
    </nav>

    @yield('content')


    <div class="footer">
        <div class="f1">
            <img src="{{ asset('images/logo.jpeg') }}" alt="" class="imgfooter2">
        </div>
        <div class="f2">
            <div class="footerimg">
                <img src={{ asset('images/logosite.svg') }} alt="" class="imgfooter">
            </div>
            <div class="footertext">
                @Copyright Eternity Web-Tasarım Ofisi
            </div>
        </div>
        <div class="f3">
            <div class="ilbox">
                <div><a href="twitter.com"><i class="i fa-brands fa-twitter fa-3x"></i></a></div>
                <div><a href="twitter.com"><i class="i fa-brands fa-facebook fa-3x"></i></a></div>
                <div><a href="twitter.com"><i class="i fa-brands fa-instagram-square fa-3x"></i></a></div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
