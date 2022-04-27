<?php

include "conectar2.php";

//AUTOINCREMENTO - Localizar o Ultimo ID
$sql = "SELECT * FROM perguntas ORDER BY id DESC";
$sql = $con->query($sql);
$row = $sql->fetch_assoc();;

//Proximo ID (Ultimo ID +1)
$idPergunta = $row['id']+1;

$questao = $_POST['questaoInsert'];

//Transformando Imagem para a base64
$data = file_get_contents($_FILES['ImagemInsert']["tmp_name"]);
$Imagem = base64_encode($data);

mysqli_query($con, "INSERT INTO perguntas(id, questao, Imagem) VALUES ('{$idPergunta}','{$questao}','{$Imagem}')");
header('location:crud.php');