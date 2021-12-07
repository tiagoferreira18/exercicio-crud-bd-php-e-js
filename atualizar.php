<?php
require_once "src/Aluno.php";
$aluno = new Aluno;

$aluno->setId($_GET['id']);
$dados = $aluno->lerUmAluno();

if (isset($_POST['atualizar-dados'])) {

    $media = ($_POST['primeira'] + $_POST['segunda']) / 2;
    if ($media >= 7) {
        $situacao = "Aprovado";
    } else {
        $situacao = "Reprovado";
    }
    $aluno->setNome($_POST['nome']);
    $aluno->setPrimeira($_POST['primeira']);
    $aluno->setSegunda($_POST['segunda']);
    $aluno->setMedia($media);
    $aluno->setSituacao($situacao);

    $aluno->atualizarAlunos();
    header("location:visualizar.php");
}


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atualizar dados - Exercício CRUD com PHP e MySQL</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <h1>Atualizar dados do aluno </h1>
        <hr>

        <p>Utilize o formulário abaixo para atualizar os dados do aluno.</p>

        <form action="#" method="post">

            <p class="input-group mb-3 "><label for="nome">Nome: </label>
                <input class="form-control ml-3" value="<?= $dados['nome'] ?>" type=" text" name="nome" id="nome" required>
            </p>

            <p class="input-group mb-3 "><label for="primeira">Primeira nota:</label>
                <input class="form-control ml-3 primeira" value="<?= $dados['primeira'] ?>" name=" primeira" type="number" id="primeira" step="0.1" min="0.0" max="10" required>
            </p>

            <p class="input-group mb-3 "><label for="segunda">Segunda nota:</label>
                <input class="form-control ml-3 segunda " value="<?= $dados['segunda'] ?>" name="segunda" type="number" id="segunda" step="0.1" min="0.0" max="10" required>
            </p>

            <p class="input-group mb-3 ">
                <!-- Campo somente leitura e desabilitado para edição.
        Usado apenas para exibição do valor da média -->
                <label for="media">Média:</label>
                <input class="form-control ml-3 media" value="<?= $dados['media'] ?>" name="media" type="number" id="media" step="0.1" min="0.0" max="10" readonly disabled>
            </p>

            <p class="input-group mb-3 ">
                <!-- Campo somente leitura e desabilitado para edição 
        Usado apenas para exibição do texto da situação -->
                <label for="situacao">Situação:</label>
                <input class="form-control ml-3 situacao" value="<?= $dados['situacao'] ?>" type="text" name="situacao" id="situacao" readonly disabled>
            </p>

            <button class="btn btn-primary" name="atualizar-dados">Atualizar dados do aluno</button>
        </form>


        <hr>
        <p><a href="visualizar.php">Voltar à lista de alunos</a></p>

    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="atualizar.js"></script>

</body>

</html>