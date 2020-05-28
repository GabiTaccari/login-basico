<?php
	session_start();	

	include_once("conexao.php");	

	if((isset($_POST['email'])) && (isset($_POST['senha']))){
		$usuario = mysqli_real_escape_string($conn, $_POST['email']); //Previne SQL injection
		$senha = mysqli_real_escape_string($conn, $_POST['senha']);
		
			
		$result_usuario = "SELECT * FROM usuarios WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
		
		
		if(isset($resultado)){
			$_SESSION['usuarioId'] = $resultado['id'];
			$_SESSION['usuarioEmail'] = $resultado['email'];
			$_SESSION['usuarioSenha'] = $resultado['senha'];
			
				header("Location: paginaInicialUsuario.php");
			
		
		}else{	
			$_SESSION['loginErro'] = "Usuário ou senha Inválido";
			header("Location: index.php");
		}

	}else{
		$_SESSION['loginErro'] = "Usuário ou senha inválido";
		header("Location: index.php");
	}
?>