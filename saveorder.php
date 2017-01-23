<?php
	require "inc/lib.inc.php";
	require "inc/config.inc.php";

	global $basket;

	$name = clearInt($_POST['name']);
	$email = clearInt($_POST['email']);
	$phone = clearInt($_POST['phone']);
	$address = clearInt($_POST['address']);
	$orderId = $basket['orderid'];
	$dt = time();

	$order = "$name|$email|$phone|$address|$orderId|$dt\n";

    file_put_contents("admin/".$ORDERS_LOG, $order, FILE_APPEND);

    saveOrder($dt);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Сохранение данных заказа</title>
</head>
<body>
	<p>Ваш заказ принят.</p>
	<p><a href="catalog.php">Вернуться в каталог товаров</a></p>
</body>
</html>