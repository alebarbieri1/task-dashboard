<?php

// ip, usuário, senha, nome do banco
$conexao = mysqli_connect("127.0.0.1:3306", "root" , "" , "task-dashboard-db");

mysqli_set_charset($conexao, "utf8");

if (mysqli_connect_errno()) {
	echo "Não foi possível conectar: " . mysqli_connect_error();
}

?>