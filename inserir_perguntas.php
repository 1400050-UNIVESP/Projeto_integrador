<?php

include "conectar2.php";

$idPergunta = $_POST['idInsert'];
$questao = $_POST['questaoInsert'];
$Imagem = file_get_contents($_FILES['ImagemInsert']["tmp_name"]);



//mysqli_query($con, "INSERT INTO perguntas(id,questao,Imagem) VALUES ('[$idPergunta]','[$questao]','[$Imagem]')");
header('location:crud.php');