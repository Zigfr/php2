<?php
    require __DIR__ .'/autoload.php';

    $id = 5;
   // \App\Model::findById($id);
   $res = \App\Models\User::findById($id);
   var_dump($res);
/*
    $users = \App\Models\User::findAll();
    var_dump($users);
*/
?>