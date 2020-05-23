<?php 
	if(isset($_COOKIE['usuario'])){
		include("cabecalho.php");
		include("rodape.php");
	}
	else{
		header("Location: index.html");
	}
?>
