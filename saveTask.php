<?php include "conexao.php" ?>

<?php

$nome = $_POST["nomeTask"];
$descricao = $_POST["descricaoTask"];
$prioridade = $_POST["prioridade"];

$sql = "INSERT INTO tb_task (nome, descricao, prioridade) values ('" . $nome . "','" . $descricao . "', '" . $prioridade . "')";

$resultado = mysqli_query($conexao, $sql) or die("Não foi possível executar a query: ". mysqli_error($conexao));

?>

<html>
	<head>
		<title>-</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div class="container">
		<?php
		
		if ($resultado === True){
			echo "<div class='alert alert-success'>";
			echo "Task criada com <strong>sucesso</strong>!";
			echo "</div>";
			header("Refresh:2;url=viewTasks.php" );
		} else {
			echo "<div class='alert alert-dangerous'>";
			echo "<strong>Erro</strong> ao criar task!";
			echo "</div>";
		}
		
		?>
		</div>
	</body>
</html>