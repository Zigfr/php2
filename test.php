<?php
require __DIR__ .'/autoload.php';

$config = App\Config::instance();
$res = $config->data['host'];
var_dump($res);

/*
$data = new App\Models\User();
$data->email = 'mail.ru';
$data->name = 'g';
//$data->id = 0;
$data->insert();
//var_dump($data);
*/