<?php
require_once "src/Aluno.php";
$query = new Aluno;

$listaAlunos = $query->lerAlunos();


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de alunos - Exercício CRUD com PHP e MySQL</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

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
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>




    <div class="container mt-4">
        <h1>Lista de alunos</h1>
        <hr>


        <table>
            <caption>Lista de alunos </caption>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Primeira Nota</th>
                    <th>Segunda Nota</th>
                    <th>Média</th>
                    <th>Situação</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listaAlunos as $DadosAlunos) {
                ?>
                    <?php
                    if ($DadosAlunos['situacao'] == 'Aprovado') {
                    ?>
                        <tr <?php echo 'class="cor"' ?>>

                        <?php } else { ?>
                        <tr <?php echo 'class="corred"' ?>>
                        <?php } ?>

                        <td><?= $DadosAlunos['nome'] ?></td>
                        <td><?= $DadosAlunos['primeira'] ?></td>
                        <td><?= $DadosAlunos['segunda'] ?></td>
                        <td><?= $DadosAlunos['media'] ?></td>
                        <td> <?= $DadosAlunos['situacao'] ?> </td>



                        <td> <a class="btn btn-warning" href="atualizar.php?id=<?= $DadosAlunos['id'] ?>"> Atualizar </a> </td>


                        <td> <a class="btn btn-danger excluir" href="excluir.php?id=<?= $DadosAlunos['id'] ?>"> Excluir</td> </a>
                        </tr>
                    <?php } ?>
            </tbody>




        </table>


        <p><a class="btn btn-primary" href="inserir.php">Inserir novo aluno</a></p>

        <!-- Aqui você deverá criar o HTML que quiser e o PHP necessários
para exibir a relação de alunos existentes no banco de dados.

Obs.: não se esqueça de criar também os links dinâmicos para
as páginas de atualização e exclusão. -->


    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="confirmar.js"></script>



</body>

</html>