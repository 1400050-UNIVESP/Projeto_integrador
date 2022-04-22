<?php

include "conectar2.php";

$idUpdate = $_POST['idUpdate'];
$questaoUpdate = $_POST['questaoUpdate'];
$imagemUpdate = $_POST['ImagemUpdate'];

mysqli_query($con, "UPDATE perguntas SET id = '{$idUpdate}', questao = '{$questaoUpdate}', Imagem = '{$imagemUpdate}' WHERE id = '$idUpdate'");
header('location:crud.php');