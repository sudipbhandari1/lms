<?php
session_start();
include('classes/category.php');


$cat_id = $_GET['id'];
//print_r($_GET);
$category_object = new category();

$category_object->setTempCategoryID($cat_id);
//print_r($book);


$result = $category_object->deletecategory();

if($result==true){


    $_SESSION['most_recent_activity_del'] = time();
    unset ($_SESSION['most_recent_activity_del_error']);
    header('location:categoryview.php');


}
else{


    $_SESSION['most_recent_activity_del_error'] = time();
    unset ($_SESSION['most_recent_activity_del']);
    header('location:categoryview.php?error=1');


}

?>