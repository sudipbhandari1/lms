<?php

session_start();

include('classes/Transaction.php');
include('classes/Books.php');
include('classes/Students.php');


$books = new Books();
$trns = new Transaction();
$student = new Students();

$student_id = $_POST['std_id'];
$book_title = $_POST['book_title'];
$isbn = $_POST['isbn'];
if($isbn=='NULL'){
    $isbn='';
}
$issue_date = $_POST['issue_date'];
$due_date = $_POST['due_date'];
$renew_date = $_POST['renew_date'];
$return_date = $_POST['return_date'];


$books->setTitle($book_title);
$books->setISBN($isbn);
$student->setStudentID($student);



$query ="SELECT * FROM students where student_id = '$student_id'";
$result = mysql_query($query);
$res = mysql_fetch_array($result);
$fullName = $res['f_name']." ".$res['l_name'];




$result_check=$books->checkISBN();
if($result_check==true){

    $trns ->setStudentID($student_id);
    $trns ->setBookTitle($book_title);
    $trns ->setIssueDate($issue_date);
    $trns->setBookIsbn($isbn);
    $trns ->setDueDate($due_date);
    $trns->setStudentName($fullName);
    $trns->setRenewDate($renew_date);
    $trns->setReturnDate($return_date);

   $result = $trns ->addTransaction();

    if($result==true){



        $_SESSION['most_recent_activity_transaction'] = time();

            header('location:Transaction.php?sucss=1');


    }


    else{

        $_SESSION['most_recent_activity_transaction_error'] = time();

        header('location:Transaction.php?err=1');

    }



   }
else{


    $_SESSION['isbn_mismatch']=time();
    header ('location:newTransactions.php?error=1');


}









