<?php
session_start();
include('classes/Books.php');


$book_id = $_GET['book_id'];
// print_r($_GET);
$book = new Books();

$book->setId($book_id);
// print_r($book);


$result = $book->deleteBook($book_id);
// echo $result;
if($result==true){


    $_SESSION['most_recent_activity_del'] = time();
    unset ($_SESSION['most_recent_activity_del']);
    header('location:booklistform.php');


}
else{


    $_SESSION['most_recent_activity_del_error'] = time();
    unset ($_SESSION['most_recent_activity_del_error']);
    header('location:booklistform.php?error=1');


}

?>