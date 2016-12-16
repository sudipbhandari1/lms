<?php

session_start();

$username = $_SESSION['login'];
$old_pswd=$_POST['old'];
$new_pswd =$_POST['new'];

include 'classes/AdminUser.php';

$user = new AdminUser();

$user->setUsername($username);
$user->setPassword($old_pswd);
$user->setNewPswd($new_pswd);

$res = $user->changePassword();

if ($res== true){


    $_SESSION['pw_changed']=time();
    header('location:Transaction.php');

}

else{

    $_SESSION['pw_changed_err']=time();
    header('location:Transaction.php?error=1');

}


