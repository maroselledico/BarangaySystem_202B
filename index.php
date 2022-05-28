<?php
	session_start();
	session_destroy();
	session_start();
	if(!isset($_SESSION['username'])){
		header ('Location: main/index.php');
	}
?>