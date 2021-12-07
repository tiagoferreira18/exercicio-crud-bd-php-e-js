<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício CRUD com PHP e MySQL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">


</head>

<body>


    <header class="sticky-top border-bottom border-dark">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <h1 class="navbar-brand">LISTA DE ALUNOS </h1>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="visualizar.php">Visualizar Alunos</a>
                        <li class="nav-item">
                            <a class="nav-link" href="inserir.php">Inserir Alunos</a>
                        </li>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>




    <div class="container bg-light my-4">
        <div class="container">
            <h1>Exercício - CRUD com PHP e MySQL</h1>
            <hr>
            <h2>Gerenciamento de alunos, notas, médias e aprovação/reprovação</h2>
            <hr>
            <p><a class="btn btn-primary" href="visualizar.php">Visualizar Alunos</a>

                <a class="btn btn-primary" href="inserir.php">Inserir Alunos</a>
            </p>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>