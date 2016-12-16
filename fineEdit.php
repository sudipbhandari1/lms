<?php
session_start();
include('classes/Fine.php');

$fine = new Fine();

$amount = $_POST['fine_amt'];

$fine->setFineAmount($amount);

$result = $fine-> updateFine();

if($result==true){

    $_SESSION['most_recent_activity_fine'] = time();

      header('location:Transaction.php');


}
else{


    $_SESSION['most_recent_activity_fine_err'] = time();

        header('location:Transaction.php?error=1');


}

?>