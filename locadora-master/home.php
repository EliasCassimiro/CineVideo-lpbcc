<?php 
session_start();
if (!isset($_SESSION['user'])) 
   Header("Location: ./login.html");
?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/style.css" />
<title>CineVideo</title>
<link href="img/logo_cab1.jpg" rel="shortcut icon">
</head>
<body>
<div class="menu-bar">
	<img src="img/logo2.jpg" align="left" alt="some text" width="400" height="80">
		<header>
		<ul> 
				<li><i class="fas fa-home"></i><a href="direita.php"target="iframe"> Home</a></li> 
				</li>
				<li><i class="fas fa-user-plus"></i><a> Cadastros</a>
						<div class="sub-menu-1">
							<ul>
								<li><a href="filme/lstFilme.php" target="iframe">Filmes</a></li>
								<li><a href="emprestimo/lstEmprestimo.php"target="iframe">Emprestimos</a></li>
								<li><a href="categoria/lstCategoria.php"target="iframe">Categorias</a></li>
								<li><a href="cliente/lstCliente.php"target="iframe">Clientes</a></li> 
                			</ul> 
                		</div>     
				</li>
				<li><a href="logout.php" target="_parent">Sair</a></li>
				
		</ul>
		</header>
	</div>
	<div  class="homeCentral">
		<iframe width="100%" height="500px" frameborder="0px" name="iframe"></iframe>
	</div>
	<br><div class="rodape">
                        <font align="left">FEMA - 2020<br>
                        2ºBCC - Linguagem de Programação / Profº Almir Camolesi<br>
                        ©Copyright - Otávio Vicente Lourenço & Elias de Oliveira Cassimiro</font>
                    <br>
</body>
</html>
