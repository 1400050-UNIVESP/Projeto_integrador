<?php
session_start();

include "conectar2.php";

if ($con->connect_error) {
	die("A conexão falhou: " . $con->connect_error);
}

$sql = "SELECT * FROM respostas";
$result = $con->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8" />
	<title> Cadastro de Respostas</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo2.css" />
</head>

<body>
	<div id="interface">
		<header id="cabecalho">
			<hgroup>
				<h1>Cadastro de Respostas</h1>
			</hgroup>
			<nav id="menu">
				<h1>Menu Principal</h1>
				<ul>
                    <li><a onclick="inserirRespostas()">Inserir</a></li>
					<li><a onclick="alterarRespostas()">Alterar</a></li>
					<li><a onclick="deletarRespostas()">Deletar</a></li>
					<li><a href="welcome2.php">Voltar</a></li>
				</ul>
				</ul>
			</nav>
				<!-- INSERT -->
				<form class="row g-3" id="inserir_respostas_formulario" action="inserir_respostas.php" method="POST" style="display: none;">
					<div class="col-md-6">
						<input class="form-control" type="text" name="respostaInsert" placeholder="resposta">
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="pergunta_idInsert" placeholder="resposta_id">
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="val_respostaInsert" placeholder="val_resposta">
					</div>
					<div class="col-md-6">
						<input class="botao cadastrar_resposta" type="submit" value="Cadastrar">
					</div>
				</form>
				<!-- UPDATE -->
				<form class="row g-3" id="alterar_respostas_formulario" action="alterar_respostas.php" method="POST" style="display: none;">
					<div class="col-md-6">
						<label>Digite o ID:</label>
						<input class="form-control" type="text" name="idUpdate" placeholder="">
					</div>
					<div class="col-md-6">
						<label>Resposta:</label>
						<input class="form-control" type="text" name="respostaUpdate" placeholder="">
					</div>
					<div class="col-md-6">
						<label>ID da Pergunta:</label>
						<input class="form-control" type="text" name="pergunta_idUpdate" placeholder="">
					</div>
					<div class="col-md-6">
						<label>Correta=1 - Errada=2:</label>
						<input class="form-control" type="text" name="val_respostaUpdate" placeholder="">
					</div>
					<div class="col-md-6">
						<input class="botao alterar_resposta" type="submit" value="Alterar">
					</div>
				</form>
				<!-- DELETE -->
				<form class="row g-3" id="deletar_respostas_formulario" action="deletar_respostas.php" method="POST" style="display: none;">
					<div class="col-md-6">
						<label>Digite o ID da Resposta que quer apagar:</label>
						<input class="form-control" type="text" name="consultadelete" placeholder="">
					</div>
					<div class="col-md-6">
						<label>Tem certeza que quer Apagar?</label>
						<input class="botao deletar_resposta" type="submit" value="Deletar">
					</div>
				</form>
			</div>
		</header>
	</div>
	<script>
		function inserirRespostas() {
			var crudForm = document.getElementById("inserir_respostas_formulario");
			crudForm.classList.toggle("visible");

			if (crudForm.classList.contains("visible")) {
				crudForm.style.display = 'inherit';
			} else {
				crudForm.style.display = 'none';
			}
		}
		function alterarRespostas() {
			var crudForm = document.getElementById("alterar_respostas_formulario");
			crudForm.classList.toggle("visible");

			if (crudForm.classList.contains("visible")) {
				crudForm.style.display = 'inherit';
			} else {
				crudForm.style.display = 'none';
			}
		}

		function deletarRespostas() {
			var crudForm = document.getElementById("deletar_respostas_formulario");
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