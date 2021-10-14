<?php
	
	session_start();

	//destruino a sessao
	session_destroy();

	//retoma a tela de login
	header('Location: index.php')

?>