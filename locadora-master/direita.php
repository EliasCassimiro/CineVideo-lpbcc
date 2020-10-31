<?php 
session_start();
if (!isset($_SESSION['user'])) 
   Header("Location: ./login.html");
?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
<meta charset="utf-8"/>
	<link href="css/direita.css" rel="stylesheet">  <!--faz referencia do css certo     -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="img/logo_cab1.jpg" rel="shortcut icon">
</head>
<body> 
<br><br><br><br>
<h1> <span class="badge badge-white" >Seja Bem Vindo!</span></h1>
<p> <span class="badge badge-white" ></span></p>
<p> <span class="badge badge-white" >Site de gerenciamento da Locadora de Filme CineVideo. <br></span></p>
	</td>
</body>
</html>
