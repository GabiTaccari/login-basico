<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Formulário de Login</title>
  </head>

  <body>

      <form method="POST" action="valida.php">
        <h2>Área Restrita</h2>
        <label>Email</label> <br>
        <input type="email" name="email" id="inputEmail"placeholder="Email" required autofocus>

        <label for="inputPassword">Senha</label>
        <input type="password" name="senha" id="inputPassword"placeholder="Senha" required>
        <button type="submit">Acessar</button>
      </form>
    </div> 

     <p>
            <?php if(isset($_SESSION['loginErro'])){
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
            }?>
        </p>
        <p>
            <?php 
            if(isset($_SESSION['logindeslogado'])){
                echo $_SESSION['logindeslogado'];
                unset($_SESSION['logindeslogado']);
            }
            ?>


    
  </body>
</html>
