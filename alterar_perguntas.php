<?php

include "conectar2.php";

$idUpdate = $_POST['idUpdate'];
$questaoUpdate = $_POST['questaoUpdate'];

//Transformando Imagem para a base64
$data = file_get_contents($_FILES['ImagemUpdate']["tmp_name"]);
$Imagem = base64_encode($data);

mysqli_query($con, "UPDATE perguntas SET id = '{$idUpdate}', questao = '{$questaoUpdate}', Imagem = '{$imagemUpdate}' WHERE id = '$idUpdate'");
header('location:crud.php');