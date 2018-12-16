<!DOCTYPE html>
<html lang="pt-br" charset="utf-8">
<head>
    <title>SANTA ORT</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <!-- CSS LANDING PAGE -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- FONTS LANDING PAGE -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500" rel="stylesheet">
</head>
<script>
    $(document).ready(function() {
       $('.music').html('<audio autoplay loop> <source src="assets/song/joey.mp3"  type="audio/mpeg"> </audio>');
    }); 
</script>
<body>
    <div class="wrapper-home">
        <div class="menu animated fadeIn">
            <div class="menu-inner">
                <div class="menu-logo"><img src="assets/img/murylohenrique.png" width="100" height="auto" /></div>
                <ul class="menu-ul">
                    <a href=""><li>Home</li></a>
                    <a href=""><li>Sobre</li></a>
                    <a href=""><li>Projetos</li></a>
                    <a href=""><li>Clientes</li></a>
                    <a href=""><li>Contato</li></a>
                </ul>
            </div>
        </div>
        <div class="container-photo">
            <div class="box-photo animated fadeIn"></div>
        </div>
        <div class="container-profile animated fadeIn">
            <div class="profile-name">Murylo Henrique</div>
            <div class="profile-dev">Dev Fullstack</div>
            <div class="profile-desc">
                <div class="box-desc">
                    <p>Currently I work <span style="color: #02d871;">designing</span> some awesome interfaces<br /> on Getty.io, a Software Boutique Company.</p>
                </div>
            </div>
        </div>
        <div class="container-player animated fadeIn">
            <div class="box-player"></div>
            <div class="row-player"></div>
        </div>
        <div class="container-redes animated fadeIn">
            <ul class="redes-ul">
                <a href=""><li class="icon-facebook"></li></a>
                <a href=""><li class="icon-twitter"></li></a>
                <a href=""><li class="icon-linkedin"></li></a>
                <a href=""><li class="icon-behance"></li></a>
            </ul>
        </div>
    </div>
<div class="music" style="display: none; opacity: 0;"></div>
</body>
</html>