<?php
session_start();
include('classes/Category.php');

$cat_id =($_POST['ID']);
$c_name = ($_POST['category_name']);
$c_symbol =($_POST['category_symbol']);
$temp_ID = ($_POST['temp_ID']);


$category_object = new Category();

$category_object->setCategoryID($cat_id);
$category_object->setTempCategoryID($temp_ID);
$category_object->setCategoryName($c_name);
$category_object->setCategorySymbol($c_symbol);

//var_dump($category_object);

$result = $category_object->editcategory();

if($result==true){


    $_SESSION['most_recent_activity_edited'] = time();
    unset ($_SESSION['most_recent_activity_edited']);
    header('location:categoryview.php');
//echo true;

}
else{


    $_SESSION['most_recent_activity_edited_error'] = time();
    unset ($_SESSION['most_recent_activity_edited_error']);
    header('location:categoryview.php?err=1');
    // echo false;


}

?>