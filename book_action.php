<?php
session_start();
include('classes/Books.php');

$books = new Books();


$title = ($_POST['title']);
$author = ($_POST['author']);
$publisher = ($_POST['publisher']);
$year = ($_POST['year']);
$edition = ($_POST['edition']);
$ISBN = ($_POST['ISBN']);
$pages = ($_POST['pageNo']);
$weblink = ($_POST['weblink']);
$message = ($_POST['message']);
$category =$_POST['category'];






 $books->setTitle($title);
 $books->setAuthor($author);
 $books->setPublisher($publisher);
 $books->setYear($year);
 $books->setEdition($edition);
 $books->setISBN($ISBN);
 $books->setPages($pages);
 $books->setWeblink($weblink);
$books->setSummary($message);
$books->setCategory($category);




$result = $books->addBooks();
if($result==true){

    $_SESSION['most_recent_activity'] = time();
    unset ($_SESSION['most_recent_activity_error']);
    header('location:AddBook.php');
}
else
{
    unset ($_SESSION['most_recent_activity']);
    $_SESSION['most_recent_activity_error'] = time();

    header('location:AddBook.php?err=1');
}
?>