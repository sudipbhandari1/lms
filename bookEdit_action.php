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
$id= $_GET['id'];






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
$books->setId($id);




$result = $books->updateBooks();
if($result==true){

    $_SESSION['most_recent_activity_edit'] = time();
    unset ($_SESSION['most_recent_activity_error_edit']);

 header('location:booklistform.php');
}
else
{
    unset ($_SESSION['most_recent_activity_edit']);
    $_SESSION['most_recent_activity_error_edit'] = time();

   header('location:booklistform.php?err=1');
}
?>