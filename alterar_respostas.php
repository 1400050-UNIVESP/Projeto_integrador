<?php

include "conectar2.php";

$idUpdate = $_POST['idUpdate'];
$respostaUpdate = $_POST['respostaUpdate'];
$pergunta_idUpdate = $_POST['pergunta_idUpdate'];
$val_respostaUpdate = $_POST['val_respostaUpdate'];

mysqli_query($con, "UPDATE alternativas SET id = '{$idUpdate}', resposta = '{$respostaUpdate}', pergunta_id = '{$pergunta_idUpdate}', val_resposta = '{$val_respostaUpdate}' WHERE id = '$idUpdate'");
header('location:crud2.php');