<?php
	// подключение библиотек
	require "inc/lib.inc.php";
	require "inc/config.inc.php";

	$id = clearInt($_GET['id']);

	if($id) {
	    add2basket($id);
    }

    header("Location: catalog.php");
	exit;