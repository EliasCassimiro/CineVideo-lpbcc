﻿<?php 
session_start();
if (!isset($_SESSION['user'])) 
   Header("Location: ./login.html");
?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
<!--<meta http-equiv="Content-Type"content="text/html; charset=utf-8">-->
<meta charset="utf-8"/>
<base TARGET="direita">
<title>Menu do Topo</title>
		
<link rel="stylesheet" href="css/style.css" />
</head>
<body background = "img/logo2.jpg" width="70" height="100">
	<nav class="menu"> <!-- nav melhor para criar menus barras laterais-->
			<ul> 
				<!--<li><a href="duvidas.html">Dúvidas</a></li>-->
				<li><a href="logout.php" target="_parent">Sair</a></li>
				<li><a href="filme/lstFilme.php" target="framed">Filmes</a></li>
				<li><a href="emp/lstEmprestimo.php"target="framed">Emprestimos</a></li>
				<li><a href="cat/lstCategoria.php"target="framed">Categorias</a></li>
				<li><a href="cliente/lstCliente.php"target="framed">Clientes</a></li>
				<li><a href="direita.php"target="framed">Home</a></li>
				
			</ul>
	</nav>
</base>		
</body>

</html>
