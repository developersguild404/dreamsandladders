<?php

	session_start();
	unset($_SESSION["user_id"]);
	unset($_SESSION["user_nickname"]);
	header("Location: home_page.php");
	session_destroy();
	
?>