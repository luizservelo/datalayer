<?php

require 'db_config.php';
require '../vendor/autoload.php';

use Wallygator\DataLayer\Connect;

/*
 * GET PDO instance AND errors
 */

$connect = Connect::getInstance();
$error = Connect::getError();

/*
 * CHECK connection/errors
 */
if ($error) {
    echo $error->getMessage();
    exit;
}

/*
 * FETCH DATA
 */
$users = $connect->query("SELECT * FROM app_test_int LIMIT 5");
var_dump($users->fetchAll());
