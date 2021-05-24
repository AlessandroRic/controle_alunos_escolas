<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Teste Estuda</title>
    <link rel="stylesheet" href="Assets/fontawesome-5.5/css/all.min.css" />
    <link rel="stylesheet" href="Assets/slick/slick.css">
    <link rel="stylesheet" href="Assets/slick/slick-theme.css">
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="Assets/css/tooplate-infinite-loop.css" />
</head>
<body>
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
                        <a class="nav-link tm-nav-link" aria-selected="true">Adicionar Estudantes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tm-nav-link" href="criar-turma.php">Adicionar Turmas</a>
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
                    <h2 class="tm-text-primary mb-4 tm-section-title">Adicionar Estudantes</h2>
                </div>
            </div>
        </div>

        <div class="row tm-content-box">
            <div class="col-lg-12">
                <form>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nome</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Nome Completo" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-4">
                            <input type="email" class="form-control" placeholder="Email" required>
                        </div>
                        <label class="col-sm-2 col-form-label">Telefone</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="Telefone de contato">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Data de Nascimento</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" placeholder="Data de Nascimento" required>
                        </div>
                        <label class="col-sm-2 col-form-label">Genero</label>
                        <div class="col-sm-4">
                            <select class="form-control">
                                <option selected disabled>Escolher</option>
                                <option value="1">Masculino</option>
                                <option value="2">Feminino</option>
                                <option value="3">Não desejo indicar</option>
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
