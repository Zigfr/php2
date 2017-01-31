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
//$users = \App\Models\User::findAll();

$view = new \App\View;
$view->title = 'My cool site!';
$view->users = \App\Models\User::findAll();
//$view->desk = 'Smth'; for count()
//echo $view->render(__DIR__ .'/App/templates/index.php');
echo count($view);
die;
//include __DIR__ .'/App/templates/index.php';

?>