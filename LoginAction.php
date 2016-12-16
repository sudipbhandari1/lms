<?php
session_start();

include('classes/AdminUser.php');

$adminUser = new AdminUser();

$username = $_POST['username'];
$password = $_POST['password'];

$adminUser->setUsername($username);
$adminUser->setPassword($password);

$result = $adminUser->login();

if ($result == true) {
    $_SESSION['login'] = "$username";
    unset($_SESSION['invalid']);
    header('location:Transaction.php');


} else {
    $_SESSION['invalid']='true';
    unset($_SESSION['login']);
    header('location:index.php?err=1');


}




