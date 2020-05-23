<?php 
	session_start();	
	if(isset($_SESSION['sessao'])){
		include("cabecalho.php");
		include("rodape.php");
	}
	else{
		header("Location: index.html");
	}
?>
