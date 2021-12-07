<?php
require_once "src/Aluno.php";

$excluir = new Aluno;
$excluir->setId($_GET['id']);
$excluir->excluirAlunos();
header("location: visualizar.php");
