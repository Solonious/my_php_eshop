<?php
	// подключение библиотек
	require "secure/session.inc.php";
	require "../inc/lib.inc.php";
	require "../inc/config.inc.php";

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
	    $title = clearInt($_POST['title']);
	    $author = clearInt($_POST['author']);
	    $pubyear = clearInt($_POST['pubyear']);
	    $price = clearInt($_POST['price']);
    }

        $result = addItemToCatalog($title, $author, $pubyear, $price);

if(!$result){
    echo 'Произошла ошибка при добавлении товара в каталог';
}else{
    header("Location: add2cat.php");
    exit;
}