<?php
session_start();

include "conectar2.php";

if ($con->connect_error) {
	die("A conexão falhou: " . $con->connect_error);
}

$sql = "SELECT * FROM alternativas";
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
				<h1>Respostas</h1>
			</hgroup>
			<nav id="menu">
				<h1>Menu Principal</h1>
				<ul>
                    <li><a onclick="iserirRespostas()">Inserir</a></li>
					<li><a onclick="alterarRespostas()">Alterar</a></li>
					<li><a onclick="deletarRespostas()">Deletar</a></li>
					<li><a href="welcome2.php">Voltar</a></li>
				</ul>
				</ul>
			</nav>
			<div class="tabela_perguntas">
				<?php

				if ($result !== false && $result->num_rows > 0) {
					echo '
				<table border="1" cellspacing="2" cellpadding="3" style="width: 100%">
					<tr>
						<th>Id</th>
                        <th>Respostas</th>
						<th>Id Pergunta</th>
						<th>Correta=1 - Errada=2</th>
					</tr>
				';
					while ($row = $result->fetch_assoc()) {
						echo '
						<tr> 
							<td>' . $row['id'] . '</td> 
							<td>' . $row['resposta'] . '</td> 
							<td>' . $row['pergunta_id'] . '</td>
							<td>' . $row['val_resposta'] . '</td> 																	
 																	
						</tr>';
					}
					echo "</table>";
				} else {
					echo "Não há registros";
				}
				$con->close();
				
				?>
				<!-- INSERT -->
				<form class="row g-3" id="inserir_perguntas_formulario" action="inserir_perguntas.php" method="POST" style="display: none;">
					<div class="col-md-6">
						<input class="form-control" type="text" name="idInsert" placeholder="ID">
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="questaoInsert" placeholder="questao">
					</div>
					<div class="col-md-6">
						<input class="botao cadastrar_pergunta" type="submit" value="Cadastrar">
					</div>
				</form>
				<!-- UPDATE -->
				<form class="row g-3" id="alterar_usuario_formulario" action="alterar_usuario.php" method="POST" style="display: none;">
					<div class="col-md-6">
						<input class="form-control" type="text" name="idUpdate" placeholder="Id">
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="usernameUpdate" placeholder="Usuário">
					</div>
					<div class="col-md-6">
						<textarea class="form-control" type="text" name="nivelUpdate" placeholder="Usuário - Administrador"></textarea>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="emailUpdate" placeholder="e-mail">
					</div>
					<div class="col-md-6">
						<input class="botao alterar_usuario" type="submit" value="Alterar">
					</div>
				</form>
				<!-- DELETE -->
				<form class="row g-3" id="deletar_usuario_formulario" action="deletar_usuario.php" method="POST" style="display: none;">
					<div class="col-md-6">
						<input class="form-control" type="text" name="consultadelete" placeholder="Id">
					</div>
					<div class="col-md-6">
						<input class="botao cadastrar_usuario" type="submit" value="Deletar">
					</div>
				</form>
			</div>
		</header>
	</div>
	<script>
		function inserirUsuario() {
			var usuarioForm = document.getElementById("inserir_usuario_formulario");
			usuarioForm.classList.toggle("visible");

			if (usuarioForm.classList.contains("visible")) {
				usuarioForm.style.display = 'inherit';
			} else {
				usuarioForm.style.display = 'none';
			}
		}
		function alterarUsuario() {
			var usuarioForm = document.getElementById("alterar_usuario_formulario");
			usuarioForm.classList.toggle("visible");

			if (usuarioForm.classList.contains("visible")) {
				usuarioForm.style.display = 'inherit';
			} else {
				usuarioForm.style.display = 'none';
			}
		}

		function deletarUsuario() {
			var usuarioForm = document.getElementById("deletar_usuario_formulario");
			usuarioForm.classList.toggle("visible");

			if (usuarioForm.classList.contains("visible")) {
				usuarioForm.style.display = 'inherit';
			} else {
				usuarioForm.style.display = 'none';
			}
		}
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
	</div>
</html>