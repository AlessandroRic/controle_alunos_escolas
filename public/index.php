<?php include "Layouts/headerhtml.php" ?>

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
            <div class="col-lg-5 my-auto">
                <div class="tm-intro-text-container">
                    <a href="criar-aluno.php"><h2>Adicionar Estudantes</h2></a>
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
                    <a href="criar-turma.php"><h2>Adicionar Turmas</h2></a>
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
                    <a href="criar-escola.php"><h2>Adicionar Escolas</h2></a>
                </div>
            </div>

        </div>
    </div>

</section>

<script src="Assets/js/jquery-1.9.1.min.js"></script>
<script src="Assets/slick/slick.min.js"></script>
<script src="Assets/js/easing.min.js"></script>
<script src="Assets/js/jquery.singlePageNav.min.js"></script>
<script src="Assets/js/bootstrap.min.js"></script>
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

    $(function(){
        // Hero Section - Background Parallax
        background_image_parallax($(".tm-parallax"), 0.30, false);
        background_image_parallax_2($("#contact"), 0.80);
        background_image_parallax_2($("#testimonials"), 0.80);

        // Handle window resize
        window.addEventListener('resize', function(){
            background_image_parallax($(".tm-parallax"), 0.30, true);
        }, true);
    });
</script>
</body>
</html>
