<?php

	session_start();

	//verificando se a session existe
	if (!isset($_SESSION['usuario'])) {
		//se nao existe, retoma a tela de login
		header('Location: index.php?erro=true');
		exit();	//para sair do arquivo
	}
	echo "<body style='background-color: Lightblue'> 
				<h1>Logado com sucesso</h1>
				<a href=logout.php>Sair</a>
		   </body>";

?>