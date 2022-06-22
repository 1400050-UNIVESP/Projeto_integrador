<?php

include "conectar2.php";

$idUpdate = $_POST['idUpdate'];
$questaoUpdate = $_POST['questaoUpdate'];
$videox = $_POST['videoxUpdate'];


//Transformando Imagem para a base64
$data = file_get_contents($_FILES['ImagemUpdate']["tmp_name"]);
$Imagem = base64_encode($data);

mysqli_query($con, "UPDATE perguntas SET id = '{$idUpdate}', questao = '{$questaoUpdate}', Imagem = '{$imagemUpdate}', videox = '{$videoxUpdate}' WHERE id = '$idUpdate'");
header('location:crud.php');