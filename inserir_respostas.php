<?php

include "conectar2.php";

$idPergunta = $_POST['idInsert'];
$respostaInsert = $_POST['respostaInsert'];
$pergunta_idInsert = $_POST['pergunta_idInsert'];
$val_respostaInsert = $_POST['val_respostaInsert'];

mysqli_query($con, "INSERT INTO alternativas(idInsert, respostaInsert, pergunta_idInsert, val_respostaInsert) VALUES ('{$idPergunta}','{$respostaInsert}','{$pergunta_idInsert}','{$val_respostaInsert}')");
header('location:crud2.php');