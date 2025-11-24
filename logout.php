<?php 

	session_start();

	$_SESSION = array();

	if (isset($_COOKIE[session_name()])) {
		setcookie(session_name(), '', time()-86400, '/');
	}

	session_destroy();

	// redirige a la página de inicio de sesión
	header('Location: login.php?action=logout');

 ?>