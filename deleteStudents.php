<?php
session_start();
include('classes/Students.php');

$student_ID = $_GET['id'];

$student = new Students();

$student->setStudentID($student_ID);


$result = $student->deleteStudents();

if($result==true){


    $_SESSION['most_recent_activity_del_student'] = time();
    unset ($_SESSION['most_recent_activity_del_error_student']);
    header('location:studentView.php');


}
else{


    $_SESSION['most_recent_activity_del_error_student'] = time();
    unset ($_SESSION['most_recent_activity_del_student']);
    header('location:studentView.php?error=1');


}

?>