<?php
session_start();
include('classes/Transaction.php');



$t_id = $_POST['t_id'];
$issue_date=$_POST['issue_date'];
$renew_date = $_POST['renew_date'];
$due_date =$_POST['due_date'];
$return_date=$_POST['return_date'];


$transaction = new Transaction();

$transaction->setTransactionID($t_id);
$transaction->setIssueDate($issue_date);
$transaction->setDueDate($due_date);
$transaction->setRenewDate($renew_date);
$transaction->setReturnDate($return_date);



$result = $transaction->updateTransaction();

if($result==true){


    $_SESSION['most_recent_activity_transaction_edited'] = time();

    header('location:Transaction.php');


}
else{


    $_SESSION['most_recent_activity_transaction_edited_error'] = time();

    header('location:Transaction.php?error=1');


}

?>