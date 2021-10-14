<?php
	
	//Iniciando a variavel de sessao
	session_start();
	
	//Verificar se na variavel POST exite um usuario e senha
	if (isset($_POST['usuario'], $_POST['senha'])) {
		//fazendo a comparacao das senhas
		if (($_POST['usuario'] == "Fernando Gomes") && ($_POST['senha'] == "123")) {
			$_SESSION['usuario'] = $_POST['usuario'];
			//fara o login
			header('Location: home.php');
		}
	}

	if (isset($_GET['erro'])) {
		$erro = "E necessario logar no sistema";
	}

?>

<div style="background-color: coral; margin: 10px;">
	<?php echo $erro ?? ''; ?>
</div>

<form action="" method="post">
	<input type="text" name="usuario" placeholder="Usuario">
	<input type="text" name="senha" placeholder="Senha">
	<input type="submit" name="login" value="Login">
</form>