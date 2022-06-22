<?php
session_start();

include "conectar2.php";

if ($con->connect_error) {
	die("A conexão falhou: " . $con->connect_error);
}

$sql = "SELECT * FROM perguntas";
$result = $con->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8" />
	<title> Cadastro de Perguntas</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo2.css" />
</head>

<body>
	<div id="interface">
		<header id="cabecalho">
			<hgroup>
				<h1>Cadastro de Perguntas</h1>
			</hgroup>
			<nav id="menu">
				<h1>Menu Principal</h1>
				<ul>
                    <li><a onclick="inserirPerguntas()">Inserir</a></li>
					<li><a onclick="alterarPerguntas()">Alterar</a></li>
					<li><a onclick="deletarPerguntas()">Deletar</a></li>
					<li><a href="welcome2.php">Voltar</a></li>
				</ul>
				</ul>
			</nav>
			
				<!-- INSERT -->
				<form class="row g-3" id="inserir_perguntas_formulario" action="inserir_perguntas.php" method="POST" enctype="multipart/form-data" style="display: none;">
					<div class="col-md-6">
						<label>Digite Vestibular (SIGLA UNIVERSIDADE,ANO,PERGUNTA Nº):</label>
						<input class="form-control" type="text" name="questaoInsert" placeholder="">
					</div>
					<div class="col-md-6">
						<label>Insira link do Vídeo (Youtube):</label>
						<input class="form-control" type="text" name="videoxInsert" placeholder="">
					</div>
					<div class="col-md-6">
						<label>Inserir Imagem (JPEG):</label>
						<form method="POST" action="" enctype="multipart/form-data">
						<input class="form-control" name="ImagemInsert" type="file">
					</div>
					<div class="col-md-6">
						<label>Deseja Inserir?</label>
						<input class="botao inserir_pergunta" type="submit" value="Inserir">
					</div>
				</form>
				<!-- UPDATE -->
				<form class="row g-3" id="alterar_perguntas_formulario" action="alterar_perguntas.php" enctype="multipart/form-data" method="POST" style="display: none;">
					<div class="col-md-6">
						<label>Digite o ID:</label>
						<input class="form-control" type="text" name="idUpdate" placeholder="">
					</div>
					<div class="col-md-6">
					 <label>Digite Vestibular (SIGLA UNIVERSIDADE,ANO,PERGUNTA Nº):</label>
						<input class="form-control" type="text" name="questaoUpdate" placeholder="">
					</div>
					<div class="col-md-6">
						<label>Insira link do Vídeo (Youtube):</label>
						<input class="form-control" type="text" name="videoxUpdate" placeholder="">
					</div>
					<div class="col-md-6">
						<label>Inserir Imagem (JPEG):</label>
						<form method="POST" action="" enctype="multipart/form-data">
						<input class="form-control" name="ImagemUpdate" type="file">
					</div>
					<div class="col-md-6">
						<label>Deseja Alterar?</label>
						<input class="botao alterar_pergunta" type="submit" value="Alterar">
					</div>
				</form>
				<!-- DELETE -->
				<form class="row g-3" id="deletar_perguntas_formulario" action="deletar_perguntas.php" method="POST" style="display: none;">
					<div class="col-md-6">
						<label>Digite o ID da Pergunta que quer apagar:</label>
						<input class="form-control" type="text" name="consultadelete" placeholder="">
					</div>
					<div class="col-md-6">
						<label>Tem certeza que quer Apagar?</label>
						<input class="botao deletar_pergunta" type="submit" value="Deletar">
					</div>
				</form>
			</div>
		</header>
	</div>
	<script>
		function inserirPerguntas() {
			var crudForm = document.getElementById("inserir_perguntas_formulario");
			crudForm.classList.toggle("visible");

			if (crudForm.classList.contains("visible")) {
				crudForm.style.display = 'inherit';
			} else {
				crudForm.style.display = 'none';
			}
		}
		function alterarPerguntas() {
			var crudForm = document.getElementById("alterar_perguntas_formulario");
			crudForm.classList.toggle("visible");

			if (crudForm.classList.contains("visible")) {
				crudForm.style.display = 'inherit';
			} else {
				crudForm.style.display = 'none';
			}
		}

		function deletarPerguntas() {
			var crudForm = document.getElementById("deletar_perguntas_formulario");
			crudForm.classList.toggle("visible");

			if (crudForm.classList.contains("visible")) {
				crudForm.style.display = 'inherit';
			} else {
				crudForm.style.display = 'none';
			}
		}
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
	</div>
</html>