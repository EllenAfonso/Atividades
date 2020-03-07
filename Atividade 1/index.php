<?php
	include "cabecalho.php";
	//session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Formulário de Cadastro de Cliente</title>
    <link rel="stylesheet" href="estilos.css" />
</head>
<body>
	<?php
		if(empty($_POST)){
			$_SESSION["nomeJogador"] = 0;
			echo '<form action="index.php" method="POST">
			Ainda não há jogadores.
			<br />
			<br />
			Insira o nome do jogador 1 (X):
			<br />
			<br />
			<input type="text" name="nome" placeholder="Jogador 1..." />
			<br />
			<br />
			<input type="submit" value="Novo Jogador" />
			</form>';
		}else{
				if($_SESSION["nomeJogador"] == 0){
						$_SESSION["nome"][] = $_POST["nome"];
						$_SESSION["nomeJogador"] = 1;
						echo '<h3>Cliente cadastrado com sucesso!</h3>';
				}else{
					echo '<h3>Cliente já cadastrado!</h3>';
				}
			
			if($_SESSION["nomeJogador"] = 1){
			
				echo '<form action="listarJogadas.php" method="POST">
				<br />
				<br />
				Insira o nome do jogador 2 (O):
				<br />
				<br />
				<input type="text" name="nome" placeholder="Jogador 2..." />
				<br />
				<br />
				<input type="submit" value="Novo Jogador" />
				</form>';
			}else{
				if($_SESSION["nomeJogador"] == 1){
						$_SESSION["nome"][] = $_POST["nome"];
						echo '<h3>Cliente cadastrado com sucesso!</h3>';
						
				}else{
					echo '<h3>Cliente já cadastrado!</h3>';
				}
			}
		}
		


	?>
</body>
</html>