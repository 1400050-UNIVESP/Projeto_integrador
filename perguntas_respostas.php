<?php
session_start();

include "conectar2.php";

if ($con->connect_error) {
	die("A conexão falhou: " . $con->connect_error);
}

// $sql = "SELECT * FROM perguntas, alternativas";
$sql = "SELECT * FROM alternativas a INNER JOIN perguntas p ON a.pergunta_id = p.id";
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
				<h1>Perguntas</h1>
			</hgroup>
			<nav id="menu">
				<h1>Menu Principal</h1>
				<ul>
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
						<th>(Instituição,ano,P nº)</th>
						<th>Imagem</th>
						<th>Respostas</th>
						<th>Correta=1 - Errada=2</th>
					</tr>
				';
					while ($row = $result->fetch_assoc()) {
						echo '
						<tr> 
							<td>' . $row['id'] . '</td> 
							<td>' . $row['questao'] . '</td>
							<td><img src="data:image/jpeg;base64,'.base64_decode(base64_encode($row['Imagem'])) .'" width="50%" height="50%"/>
							<td>' . $row['resposta'] . '</td>
							<td>' . $row['val_resposta'] . '</td> 																	
 																	
						</tr>';
					}
					echo "</table>";
				} else {
					echo "Não há registros";
				}
				$con->close();
				
				?>				
		</header>
	</div>
	<script>		
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
	</div>
</html>