<?php include "Layouts/headerhtml.php" ?>
<nav class="navbar navbar-expand-md tm-navbar" id="tmNav" style="background-color: #66c0e2;">
    <div class="container">
        <div class="tm-next">
            <a href="/" class="navbar-brand">Controle Escolar</a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars navbar-toggler-icon"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link tm-nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link tm-nav-link" href="criar-aluno.php">Adicionar Estudantes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link tm-nav-link" aria-selected="true">Adicionar Turmas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link tm-nav-link" href="criar-escola.php">Adicionar Escolas</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section id="estudantes" class="tm-section-pad-top">
    <div class="container">
        <div class="row tm-content-box">
            <div class="col-lg-12 col-xl-12">
                <div class="tm-intro-text-container">
                    <h2 class="tm-text-primary mb-4 tm-section-title">Adicionar Turma</h2>
                </div>
            </div>
        </div>

        <div class="row tm-content-box">
            <div class="col-lg-12">
                <form>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Ano</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" placeholder="Ano" min="2010" max="2021" maxlength="4">
                        </div>
                        <label class="col-sm-2 col-form-label">N??vel</label>
                        <div class="col-sm-4">
                            <select class="form-control">
                                <option selected disabled>Escolher</option>
                                <option value="1">Fundamental</option>
                                <option value="2">M??dio</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">S??rie</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="S??rie">
                        </div>
                        <label class="col-sm-2 col-form-label">Turno</label>
                        <div class="col-sm-4">
                            <select class="form-control">
                                <option selected disabled>Escolher</option>
                                <option value="1">Matutino</option>
                                <option value="2">Vespertino</option>
                                <option value="3">Noturno</option>
                                <option value="4">Integral</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

</section>

<script src="Assets/js/jquery-1.9.1.min.js"></script>
<script src="Assets/slick/slick.min.js"></script>
<script src="Assets/js/easing.min.js"></script>
<script src="Assets/js/jquery.singlePageNav.min.js"></script>
<script src="Assets/js/bootstrap.min.js"></script>
</body>
</html>
