<?php

session_start();

$username = $_SESSION['login'];

include 'classes/AdminUser.php';

$user = new AdminUser();

$user->setUsername($username);

$res = $user->deleteAccount();

if ($res== true){

    unset($_SESSION['login']);
    $_SESSION['deleted']=time();
    header('location:index.php');

}

else{

    $_SESSION['last_admin']=time();
    header('location:Transaction.php?error=1');

    }


