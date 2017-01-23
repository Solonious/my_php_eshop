<?php
const DB_HOST = '127.0.0.1';
const DB_LOGIN = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'eshop';

$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);

if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

const ORDERS_LOG = 'orders.log';

$basket = [];
$count = 0;

basketInit();