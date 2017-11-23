<html>
	<head>
		<title>Cadastro Task</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<!-- jQuery tablesorter plugin  -->
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.9.1/jquery.tablesorter.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<script type="text/javascript">
			$(document).ready(function(){
				$("body").css("padding-top", $(".navbar-fixed-top").height() + 10);
			});
			
			function validaCampos(){
				var erro = false;
				
				if ($("#nomeTask").val() == ""){
					$(".alertNomeTask").show(200);
					erro = true;
				} else {
					$(".alertNomeTask").hide(200);
				}
				
				if ($("#descricaoTask").val() == ""){
					$(".alertDescricaoTask").show(200);
					erro = true;
				} else {
					$(".alertDescricaoTask").hide(200);
				}
				
				if ($("#prioridade").val() == ""){
					$(".alertPrioridade").show(200);
					erro = true;
				} else {
					$(".alertPrioridade").hide(200)
				}
				
				if (erro){
					return false;
				}	
				
			}
		
		</script>
	</head>
	<body>
		<?php include "header.php" ?>
		<form class="form-block" action="saveTask.php" method="post" onsubmit="return validaCampos()">
			<div class="col-md-5 col-md-push-3">
				<h3>Cadastro de Task</h3>
				<br>
				<div class="input-group">
					<span class="input-group-addon">Nome da Task</span>
					<input class="form-control" type="text" name="nomeTask" id="nomeTask" placeholder="Nome da Task">
				</div>
				<div style="display:none" class="alert alert-danger alertNomeTask">
					Preencha o campo acima
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">Descrição da Task</span>
					<textarea class="form-control textarea" type="text" rows="5" cols="50" name="descricaoTask" id="descricaoTask" placeholder="Descrição da Task"></textarea>
				</div>
				<div style="display:none" class="alert alert-danger alertDescricaoTask">
					Preencha o campo acima
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">Prioridade</span>
					<input class="form-control" type="number" name="prioridade" id="prioridade" placeholder="Prioridade" min="1" max="5">
				</div>
				<div style="display:none" class="alert alert-danger alertPrioridade">
					Preencha o campo acima
				</div>
				<br>
				<button type="submit" class="btn btn-success" id="btnCadastrar">Cadastrar</button>
				<br>
				<br>
				<br>
			</div>
		</form>
		<?php include "footer.php" ?>
	</body>
</html>