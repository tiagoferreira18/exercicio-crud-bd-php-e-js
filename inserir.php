<?php

require_once "src/Aluno.php";
$query = new Aluno;


if (isset($_POST['cadastrar-aluno'])) {
	$media = ($_POST['primeira'] + $_POST['segunda']) / 2;
	if ($media >= 7) {
		$situacao = "Aprovado";
	} else {
		$situacao = "Reprovado";
	}

	$query->setNome($_POST['nome']);
	$query->setPrimeira($_POST['primeira']);
	$query->setSegunda($_POST['segunda']);
	$query->setMedia($media);
	$query->setSituacao($situacao);

	$query->inserirAlunos();
	header("location: visualizar.php");
}


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastrar um novo aluno - Exercício CRUD com PHP e MySQL</title>
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
						<li class="nav-item">

						</li>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>



	<div class="container">
		<h1>Cadastrar um novo aluno </h1>
		<hr>

		<p>Utilize o formulário abaixo para cadastrar um novo aluno.</p>

		<form action="#" method="post">
			<p><label class="form-label" for="nome">Nome:</label>
				<input type="text" name="nome" id="nome" required>
			</p>

			<p><label for="primeira">Primeira nota:</label>
				<input type="number" name="primeira" id="primeira" step="0.1" min="0.0" max="10" required>
			</p>

			<p><label for="segunda">Segunda nota:</label>
				<input type="number" name="segunda" id="segunda" step="0.1" min="0.0" max="10" required>
			</p>

			<button class="btn btn-primary" name="cadastrar-aluno">Cadastrar aluno</button>
		</form>

	</div>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>