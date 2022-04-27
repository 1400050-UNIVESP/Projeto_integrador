<?php
session_start();
include_once 'conectar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="_css/estilo2.css" />
	<title>Simulador Vestibular</title>
</head>
<body>
	<div id="interface">
		<?php
			$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
			
			if(!empty($dados['valResposta'])){

				$query_val_resposta = "SELECT id AS id_resposta, resposta, pergunta_id, val_resposta FROM alternativas WHERE id=:id_resposta LIMIT 1";
				$result_val_resposta = $conn->prepare($query_val_resposta);
				$result_val_resposta->bindParam(':id_resposta', $dados['id_resposta'], PDO::PARAM_INT);
				$result_val_resposta->execute();
				$row_val_resposta = $result_val_resposta->fetch(PDO::FETCH_ASSOC);
				if($row_val_resposta['val_resposta'] == 1){
					$_SESSION['msg'] = "<p style='color:green; margin-left: -42px;'>Resposta Correta</p>";
				}else{
					$_SESSION['msg'] = "<p style='color:red; margin-left: -42px;'>Resposta Incorreta</p>";
				}

				
				$query_pergunta = "SELECT id, questao, Imagem FROM perguntas WHERE id=:id LIMIT 1";
				$result_pergunta = $conn->prepare($query_pergunta);
				$result_pergunta->bindParam(':id', $dados['id_pergunta'], PDO::PARAM_INT);
				$result_pergunta->execute();
			}else{
				
				$query_pergunta = "SELECT id, questao, Imagem FROM perguntas ORDER BY RAND() LIMIT 1";
				$result_pergunta = $conn->prepare($query_pergunta);
				$result_pergunta->execute();
			}    

			if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
			}
		?>
		<h1>Vestibular Descomplicado</h1>
		<form action="" method="POST">
			<div style="display: flex; justify-content: space-evenly">
		<?php
			if(($result_pergunta) AND $result_pergunta->rowCount() != 0){
				$row_pergunta = $result_pergunta->fetch(PDO::FETCH_ASSOC);
				extract($row_pergunta);
				echo "<div style='display: flex; flex-direction: column;'>" . $questao . "<br><br>";
				echo "<input type='hidden' name='id_pergunta' value='$id'>";
				//Transformando STRING para Base64 e depois para imagem
				echo '<img src="data:image/jpeg;base64,'.base64_decode(base64_encode($row_pergunta['Imagem'])).'"/>';
				echo "</div>";
				echo "<div style='display: flex; flex-direction: column;'>";
				echo "<label>Alternativas:</label><br><br>";

				$query_resposta = "SELECT id AS id_resposta, resposta FROM alternativas WHERE pergunta_id = $id ORDER BY id ASC";
				$result_resposta = $conn->prepare($query_resposta);
				$result_resposta->execute();
				while($row_resposta = $result_resposta->fetch(PDO::FETCH_ASSOC)){
					extract($row_resposta);
					//echo $resposta . "<br>";

					if(isset($dados['id_resposta']) AND (!empty($dados['id_resposta'])) AND $id_resposta == $dados['id_resposta']){
						$selecionado = "checked";
					}else{
						$selecionado = "";
					}
					echo "<div><input type='radio' name='id_resposta' value='$id_resposta' $selecionado>$resposta</div><br>";
				}
					}else{
						echo "Pergunta não encontrada!";
					}

				echo "</div>";
			?>
			</div>
			<input type="submit" name="valResposta" value="Enviar">			      
		</form>
		<hr>
		<a href="simulador2.php"><button>Próxima</a>
		<a href="welcome2.php"><button>Sair</a>
	</div>
	<figure class="foto-legenda">
		<footer id="rodape">
			<p>Copyright &copy; 2022 - by UNIVESP - Grupo 087 - Projeto Integrador 2 - Polo Avaré, Vila Curuçá e São Vicente</p>
		</footer>
	</figure>
	</div>

	<script src="_javascript/funcoes.js"></script>
</body>
</html>