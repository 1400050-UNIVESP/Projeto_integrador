<?php
session_start();
include_once 'conectar.php';

$sql = "SELECT id, username, email, nivel FROM users";
$result = $con->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8" />
	<title> Administrador</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo2.css" />
</head>

<body>
	<div id="interface">
		<header id="cabecalho">
			<hgroup>
				<h1>cadastro Usuários</h1>
			</hgroup>
			<nav id="menu">
				<h1>Menu Principal</h1>
				<ul>
					<li onmouseover="mudaFoto ()"><a onclick="cadastrarExtintor()">Cadastrar</a></li>
					<li onmouseover="mudaFoto ()"><a onclick="alterarExtintor()">Alterar</a></li>
					<li onmouseover="mudaFoto ()"><a onclick="deletarExtintor()">Deletar</a></li>
					<li onmouseover="mudaFoto ()"><a href="index.php">Voltar</a></li>
				</ul>
				</ul>
			</nav>
			<div class="tabela_extintores">
				<?php

				if ($result !== false && $result->num_rows > 0) {
					echo '
				<table border="1" cellspacing="2" cellpadding="3" style="width: 50%">
					<tr>
						<th>ID</th>
						<th>Local</th>
						<th>Tipo</th>
						<th>Capacidade</th>
						<th>Teste Hidrostático</th>
						<th>Recarga</th>
					</tr>
				';
					while ($row = $result->fetch_assoc()) {
						echo '
						<tr> 
							<td>' . $row['ext_ID'] . '</td> 
							<td>' . $row['ext_local'] . '</td> 
							<td>' . $row['tipo'] . '</td> 
							<td>' . $row['capacidade'] . '</td> 
							<td>' . $row['TH'] . '</td>
							<td>' . $row['recarga'] . '</td>							
						</tr>';
					}
					echo "</table>";
				} else {
					echo "Não há registros";
				}
				$con->close();

				?>
				<!-- INSERT -->
				<form class="row g-3" id="inserir_extintor_formulario" action="inserir_extintor.php" method="POST" style="display: none;">
					<div class="col-md-6">
						<input class="form-control" type="text" name="idExtintor" placeholder="ID">
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="localExtintor" placeholder="Local">
					</div>
					<div class="col-md-6">
						<textarea class="form-control" type="text" name="tipo" placeholder="Tipo"></textarea>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="capacidade" placeholder="Capacidade">
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="TH" placeholder="TH">
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="recarga" placeholder="Recarga">
					</div>
					<div class="col-md-6">
						<input class="botao cadastrar_extintor" type="submit" value="Cadastrar">
					</div>
				</form>
				<!-- UPDATE -->
				<form class="row g-3" id="alterar_extintor_formulario" action="alterar_extintor.php" method="POST" style="display: none;">
					<div class="col-md-6">
						<input class="form-control" type="text" name="idUpdate" placeholder="ID">
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="localUpdate" placeholder="Local">
					</div>
					<div class="col-md-6">
						<textarea class="form-control" type="text" name="tipoUpdate" placeholder="Tipo"></textarea>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="capacidadeUpdate" placeholder="Capacidade">
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="THUpdate" placeholder="TH">
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="recargaUpdate" placeholder="Recarga">
					</div>
					<div class="col-md-6">
						<input class="botao alterar_extintor" type="submit" value="Alterar">
					</div>
				</form>
				<!-- DELETE -->
				<form class="row g-3" id="deletar_extintor_formulario" action="deletar_extintor.php" method="POST" style="display: none;">
					<div class="col-md-6">
						<input class="form-control" type="text" name="consultadelete" placeholder="ID">
					</div>
					<div class="col-md-6">
						<input class="botao cadastrar_extintor" type="submit" value="Deletar">
					</div>
				</form>
			</div>
		</header>
		<figure class="foto-legenda">
			<footer id="rodape">
            <p>Copyright &copy; 2022 - by UNIVESP - Grupo 087 - Projeto Integrador 2 - Polo Avaré e São Vicente</p>
			</footer>
	</div>
	<script src="_javascript/funcoes.js"></script>
</body>

</html>