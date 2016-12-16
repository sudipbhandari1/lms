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
$temp_ID = $_POST['temp_ID'];



$student = new Students();

$student->setStudentID($student_id);
$student->setTempStudentID($temp_ID);
$student->setFName($f_name);
$student->setLName($l_name);
$student->setAddress($address);
$student->setContact($contact);
$student->setDoB($DoB);
$student->setJoinedDate($DoJ);
$student->setGender($gender);




$result = $student->editStudents();

if($result==true){


    $_SESSION['most_recent_activity_student_edited'] = time();
    unset ($_SESSION['most_recent_activity_student_edited_error']);
    header('location:studentView.php');


}
else{


    $_SESSION['most_recent_activity_student_edited_error'] = time();
    unset ($_SESSION['most_recent_activity_student_edited']);
    header('location:studentView.php?error=1');


}

?>