<?php
	session_start();
	echo "Bem vindo, ". $_SESSION['usuarioEmail'];	
?>
<br>
<a href="sair.php">Sair</a>