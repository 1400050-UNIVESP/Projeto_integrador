<?php

include "conectar2.php";

$idUpdate = $_POST['idUpdate'];
$usernameUpdate = $_POST['usernameUpdate'];
$nivelUpdate = $_POST['nivelUpdate'];
$emailUpdate = $_POST['emailUpdate'];

mysqli_query($con, "UPDATE users SET id = '{$idUpdate}', username = '{$usernameUpdate}', nivel = '{$nivelUpdate}', email = '{$emailUpdate}' WHERE id = '$idUpdate'");
header('location:administracao.php');