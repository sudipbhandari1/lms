<?php
session_start();
include('classes/Students.php');

$student_id =$_POST['ID'];
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$address =$_POST['address'];
$contact =$_POST['contact'];
$DoB= $_POST['DoB'];
$DoJ = $_POST['DoJ'];
$gender =$_POST['gender'];



$student = new Students();

$student->setStudentID($student_id);
$student->setFName($f_name);
$student->setLName($l_name);
$student->setAddress($address);
$student->setContact($contact);
$student->setDoB($DoB);
$student->setJoinedDate($DoJ);
$student->setGender($gender);




$result = $student->addStudents();

if($result==true){


    $_SESSION['most_recent_activity_student'] = time();
    unset ($_SESSION['most_recent_activity_student_error']);
    header('location:addStudents.php');


}
else{


    $_SESSION['most_recent_activity_student_error'] = time();
    unset ($_SESSION['most_recent_activity_student']);
    header('location:addStudents.php?error=1');


}

?>