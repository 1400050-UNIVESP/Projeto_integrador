<?php

include "conectar2.php";

$consultadelete = $_POST['consultadelete'];

mysqli_query($con, "DELETE FROM users WHERE id = '$consultadelete'");
header('location:administracao.php');