<?php
  /*
    use App\Models\User;
    require __DIR__ .'/autoload.php';

$user = new User();

    $user->name = 'Ki2';
    $user->email = 'r.mail';
    $user->id = '3';
    $user->insert();

var_dump($user);
*/
require __DIR__ .'/autoload.php';

$users = \App\Models\User::findAll();

include __DIR__ .'/App/templates/index.php';

?>