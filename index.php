<?php
error_reporting(E_ALL);
require "vendor/autoload.php";

$config = [
    "driver" => 'Mysql',
    'username' => 'root',
    'password' => '',
    'name' => 'example'
];

$db = new \Donny\Database($config);

$query = <<<SQL
SELECT * FROM `notes`;
SQL;

var_dump($db->query($query)->fetchAll(PDO::FETCH_OBJ));