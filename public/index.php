<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Infinite Loop - Bootstrap 4.0 HTML Template</title>
    <link rel="stylesheet" href="assets/fontawesome-5.5/css/all.min.css" />
    <link rel="stylesheet" href="assets/slick/slick.css">
    <link rel="stylesheet" href="assets/slick/slick-theme.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/tooplate-infinite-loop.css" />
</head>
<body>
<!-- Hero section -->
<section id="infinite" class="text-white tm-font-big tm-parallax">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-md tm-navbar" id="tmNav" style="background-color: #66c0e2;">
        <div class="container">
            <div class="tm-next">
                <a href="#infinite" class="navbar-brand">Controle Escolar</a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars navbar-toggler-icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link tm-nav-link" href="#infinite">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tm-nav-link" href="#estudantes">Adicionar Estudantes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tm-nav-link" href="#turmas">Adicionar Turmas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tm-nav-link" href="#escolas">Adicionar Escolas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="text-center tm-hero-text-container">
        <div class="tm-hero-text-container-inner">
            <h2 class="tm-hero-title">Bem vindo a plataforma Estuda!</h2>
            <p class="tm-hero-subtitle">
                Faça seu controle de estudantes
                <br>Pela nossa plataforma!
            </p>
        </div>
    </div>

    <div class="tm-next tm-intro-next">
        <a href="#estudantes" class="text-center tm-down-arrow-link">
            <i class="fas fa-2x fa-arrow-down tm-down-arrow"></i>
        </a>
    </div>
</section>

<section id="estudantes" class="tm-section-pad-top">
    <div class="container">
        <div class="row tm-content-box">
            <div class="col-lg-12 col-xl-12">
                <div class="tm-intro-text-container">
                    <h2 class="tm-text-primary mb-4 tm-section-title">Adicionar Estudantes</h2>
                    <p class="mb-4 tm-intro-text">
                        Adicione aqui os estudantes que deseja vincular na plataforma.</p>
                </div>
            </div>
        </div>

        <div class="row tm-content-box"><!-- second row -->
            <div class="col-lg-1">
                <i class="far fa-3x fa-chart-bar text-center tm-icon"></i>
            </div>
            <div class="col-lg-5">
                <div class="tm-intro-text-container">

                </div>
            </div>

            <div class="col-lg-1">
                <i class="far fa-3x fa-comment-alt text-center tm-icon"></i>
            </div>
            <div class="col-lg-5">
                <div class="tm-intro-text-container">

                </div>
            </div>

        </div>
    </div>

</section>

<section id="turmas" class="tm-section-pad-top" style="background-color: #66c0e2">
    <div class="container">
        <div class="row tm-content-box">
            <div class="col-lg-12 col-xl-12">
                <div class="tm-intro-text-container">
                    <h2 class="tm-text-second mb-4 tm-section-title">Adicionar Turmas</h2>
                    <p class="mb-4 tm-second-text">
                        Adicione aqui as turmas que deseja vincular na plataforma.</p>
                </div>
            </div>
        </div>

        <div class="row tm-content-box"><!-- second row -->
            <div class="col-lg-1">
                <i class="far fa-3x fa-chart-bar text-center tm-icon"></i>
            </div>
            <div class="col-lg-5">
                <div class="tm-intro-text-container">

                </div>
            </div>

            <div class="col-lg-1">
                <i class="far fa-3x fa-comment-alt text-center tm-icon"></i>
            </div>
            <div class="col-lg-5">
                <div class="tm-intro-text-container">

                </div>
            </div>

        </div>
    </div>

</section>

<section id="escolas" class="tm-section-pad-top">
    <div class="container">
        <div class="row tm-content-box">
            <div class="col-lg-12 col-xl-12">
                <div class="tm-intro-text-container">
                    <h2 class="tm-text-primary mb-4 tm-section-title">Adicionar Escolas</h2>
                    <p class="mb-4 tm-intro-text">
                        Adicione aqui as escolas que deseja vincular na plataforma.</p>
                </div>
            </div>
        </div>

        <div class="row tm-content-box"><!-- second row -->
            <div class="col-lg-1">
                <i class="far fa-3x fa-chart-bar text-center tm-icon"></i>
            </div>
            <div class="col-lg-5">
                <div class="tm-intro-text-container">

                </div>
            </div>

            <div class="col-lg-1">
                <i class="far fa-3x fa-comment-alt text-center tm-icon"></i>
            </div>
            <div class="col-lg-5">
                <div class="tm-intro-text-container">

                </div>
            </div>

        </div>
    </div>

</section>

<script src="assets/js/jquery-1.9.1.min.js"></script>
<script src="assets/slick/slick.min.js"></script>
<script src="assets/js/easing.min.js"></script>
<script src="assets/js/jquery.singlePageNav.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script>

    function getOffSet(){
        var _offset = 450;
        var windowHeight = window.innerHeight;

        if(windowHeight > 500) {
            _offset = 400;
        }
        if(windowHeight > 680) {
            _offset = 300
        }
        if(windowHeight > 830) {
            _offset = 210;
        }

        return _offset;
    }

    function setParallaxPosition($doc, multiplier, $object){
        var offset = getOffSet();
        var from_top = $doc.scrollTop(),
            bg_css = 'center ' +(multiplier * from_top - offset) + 'px';
        $object.css({"background-position" : bg_css });
    }

    // Parallax function
    // Adapted based on https://codepen.io/roborich/pen/wpAsm
    var background_image_parallax = function($object, multiplier, forceSet){
        multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
        multiplier = 1 - multiplier;
        var $doc = $(document);
        // $object.css({"background-attatchment" : "fixed"});

        if(forceSet) {
            setParallaxPosition($doc, multiplier, $object);
        } else {
            $(window).scroll(function(){
                setParallaxPosition($doc, multiplier, $object);
            });
        }
    };

    var background_image_parallax_2 = function($object, multiplier){
        multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
        multiplier = 1 - multiplier;
        var $doc = $(document);
        $object.css({"background-attachment" : "fixed"});

        $(window).scroll(function(){
            if($(window).width() > 768) {
                var firstTop = $object.offset().top,
                    pos = $(window).scrollTop(),
                    yPos = Math.round((multiplier * (firstTop - pos)) - 186);

                var bg_css = 'center ' + yPos + 'px';

                $object.css({"background-position" : bg_css });
            } else {
                $object.css({"background-position" : "center" });
            }
        });
    };

    $(function(){
        // Hero Section - Background Parallax
        background_image_parallax($(".tm-parallax"), 0.30, false);
        background_image_parallax_2($("#contact"), 0.80);
        background_image_parallax_2($("#testimonials"), 0.80);

        // Handle window resize
        window.addEventListener('resize', function(){
            background_image_parallax($(".tm-parallax"), 0.30, true);
        }, true);

        // Detect window scroll and update navbar
        $(window).scroll(function(e){
            if($(document).scrollTop() > 120) {
                $('.tm-navbar').addClass("scroll");
            } else {
                $('.tm-navbar').removeClass("scroll");
            }
        });

        // Close mobile menu after click
        $('#tmNav a').on('click', function(){
            $('.navbar-collapse').removeClass('show');
        })

        // Scroll to corresponding section with animation
        $('#tmNav').singlePageNav({
            'easing': 'easeInOutExpo',
            'speed': 600
        });

        // Add smooth scrolling to all links
        // https://www.w3schools.com/howto/howto_css_smooth_scroll.asp
        $("a").on('click', function(event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;

                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 600, 'easeInOutExpo', function(){
                    window.location.hash = hash;
                });
            } // End if
        });

    });
</script>
</body>
</html>


<?php

//Teste de conexao ao banco de dados Docker
$pdo = null;

try {
    $pdo = new PDO('mysql:host=mysql;dbname=database', 'user', '12345678');
} catch (PDOException $e) {
    print $e->getMessage();
    die();
}

var_dump($pdo);
