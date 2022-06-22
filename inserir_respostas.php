<?php

include "conectar2.php";


//AUTOINCREMENTO - Localizar o Ultimo ID
$sql = "SELECT * FROM alternativas ORDER BY id DESC";
$sql = $con->query($sql);
$row = $sql->fetch_assoc();;

//Proximo ID (Ultimo ID +1)
$idResposta = $row['id']+1;

$respostaInsert = $_POST['respostaInsert'];
$pergunta_idInsert = $_POST['pergunta_idInsert'];
$val_respostaInsert = $_POST['val_respostaInsert'];

mysqli_query($con, "INSERT INTO alternativas(id, resposta, pergunta_id, val_resposta) VALUES ('{$idResposta}','{$respostaInsert}','{$pergunta_idInsert}','{$val_respostaInsert}')");
header('location:crud2.php');