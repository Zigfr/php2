<?php
    use App\Model;
    use App\Models\User;
    require __DIR__ .'/autoload.php';

    $users = \App\Models\User::findAll();
    function sendEmail(User $user, string $massage)
    {
        echo 'Почта уходит на ' . $user->email;
    }
    sendEmail($users[0], 'Hello!');

?>