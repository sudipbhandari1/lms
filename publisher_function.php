<?php
session_start();
include('classes/publisher.php');

$publisher_id =$_POST['ID'];
$p_name = $_POST['publisher_name'];

$publisher = new publisher();

$publisher->setPublisherID($publisher_id);
$publisher->setPublisherName($p_name);


$result = $publisher->addpublisher();

if($result==true){


    $_SESSION['most_recent_activity_student'] = time();
    unset ($_SESSION['most_recent_activity_student_error']);
    header('location:addpublisher.php');


}
else{


    $_SESSION['most_recent_activity_student_error'] = time();
    unset ($_SESSION['most_recent_activity_student']);
    header('location:addpublisher.php?error=1');


}

?>