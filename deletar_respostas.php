<?php

include "conectar2.php";

$consultadelete = $_POST['consultadelete'];

mysqli_query($con, "DELETE FROM alternativas WHERE id = '$consultadelete'");

header('location:crud2.php');