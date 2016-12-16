<?php
session_start();
include('classes/Transaction.php');

$trans = new Transaction();

$id = $_GET['id'];
$trans->setTransactionID($id);

$result =  $trans->deleteTransaction();

if($result==true){

    $_SESSION['most_recent_activity_trns_del'] = time();

    header('location:Transaction.php');


}
else{


    $_SESSION['most_recent_activity_trns_del_er'] = time();

    header('location:Transaction.php?error=1');


}

?>