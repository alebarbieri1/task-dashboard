<?php
header("Content-Type: text/html; charset=utf-8");

include "conexao.php";

$sql = "SELECT id, nome, descricao, prioridade FROM tb_task ORDER BY 1 asc";
$resultado = mysqli_query($conexao, $sql) or die("Não foi possível executar a query: ". mysqli_error($conexao));

?>
<html>
	<head>
		<title>Home</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="shortcut icon" href="#" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<!-- jQuery tablesorter plugin  -->
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.9.1/jquery.tablesorter.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<script>
			$(document).ready(function(){
				$("body").css("padding-top", $(".navbar-fixed-top").height() + 10);
				$('[data-toggle="tooltip"]').tooltip();
			});
			
			
		</script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style type="text/css">
			
		</style>
	</head>
	<body>
	<?php include "header.php" ?>
		<div class="container-fluid">
			<?php
				echo "<div class='row'>";
				echo "<div class='col-md-8 col-md-push-2'>";
				while ($row = mysqli_fetch_array($resultado)) {
					echo "<div class='card'>";
					echo "<div class='card-block'>";
					echo "<h4 class='card-title'>Task #" . $row[0] . "</h4>";
					echo "<h6 class='card-subtitle mb-2 text-muted'>" . $row[1] . "</h6>";
					echo "<p class='card-text'>" . $row[2] . "</p>";
					echo "<a class='card-link' href='deleteTask.php?id=" . $row[0] . "' data-toggle='tooltip' data-placement='top' title='Remover'><i class='fa fa-trash fa-2x'></i></a>";
					echo "&nbsp;&nbsp;&nbsp;&nbsp;";
					echo "<a class='card-link' href='updateTask.php?id=" . $row[0] . "' data-toggle='tooltip' data-placement='top' title='Editar'><i class='fa fa-pencil fa-2x'></i></a>";
					echo "</div>";
					echo "</div>";
				}
				echo "</div>";
				echo "</div>";
				
				//ini_set("default_charset", "utf-8");
			?>
		</div>
		<?php include "footer.php" ?>
	</body>
</html>
