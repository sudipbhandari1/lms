<?php
session_start();

include ('classes/AdminUser.php');

$username = $_POST['username'];
$password = $_POST['password'];

$admin = new AdminUser();

$admin->setUsername($username);
$admin->setPassword($password);

$result = $admin->addNewAdmin();

if ($result==true){

    $_SESSION['user_added']=time();
    header('location:Transaction.php');
}

else{


    $_SESSION['user_not_added']=time();
    header('location:Transaction.php?err=1');
}