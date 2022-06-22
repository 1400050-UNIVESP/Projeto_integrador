<?php

include "conectar2.php";

$consultadelete = $_POST['consultadelete'];

mysqli_query($con, "DELETE FROM perguntas WHERE id = '$consultadelete'");
header('location:crud.php');