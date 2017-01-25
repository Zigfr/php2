<?php
require __DIR__ .'/../autoload.php';

$data = new \App\Db();


$sql = 'INSERT INTO `users`( `email`, `name`) VALUES (:email, :name)';
$data->mass = [':email' => 'metropoliten17@mail.ru',
               ':name' => 'Zegfried'];
$res = $data->execute($sql);
var_dump($res);
/*
$sql = 'UPDATE `users` SET `email`= "shats_10@mail.ru" WHERE `name` = :name';
$data->mass = [':name' => 'Zegfried'];
$res = $data->execute($sql);
var_dump($res);


$sql = 'DELETE FROM `users` WHERE `email`= :email';
$data->mass = [':email' => 'shats_10@mail.ru'];
$res = $data->execute($sql);
var_dump($res);
*/

