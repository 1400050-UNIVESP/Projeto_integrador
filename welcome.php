<?php
// Inicialize a sessão
session_start();
 
// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Bem vindo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
            @media only screen and (max-width: 600px) {
            .wrapper {
                flex-direction: column;
                align-items: center;
            }

            .wrapper .formulario_index {
                width: 80%;
            }

            .titulo_index {
                text-align: center;
                font-size: 25px;
                margin-top: 25px;
            }
        }
    </style>
</head>

<?php include "header.php"; ?>

<body>
<div class="container">
  <div class="row row-cols-auto justify-content-md-center mt-5">
    <div class="col col-lg-8">
        <p class="fs-2">Bem Vindo, <b><?php echo htmlspecialchars($_SESSION["username"]);?></b> ao Vestibular Descomplicado UNIVESP.</p>
        <br/>
        <p>Aqui você pode praticar seus conhecimentos antes da prova da UNIVESP, boa sorte!</p>

    </div>
    <div class="col justify-content-md-center">
        <div class="row row-cols-1 mx-auto">
            <div class="d-grid gap-2 mx-auto">
                <a href="simulador.php" class="btn btn-success">Testar conhecimento</a>
                <a href="reset-password.php" class="btn btn-outline-warning">Redefina sua senha</a>
                <a href="logout.php" class="btn btn-outline-danger">Sair da conta</a>
            </div>
        </div>
    </div>
  </div>
</div>

</body>

<?php include "footer.php"; ?>
