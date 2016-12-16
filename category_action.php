<?php
session_start();
include ('classes/Category.php');

$category = new Category();


$c_name = $_POST['c_name'];
$c_id   = $_POST['c_id'];



$category->setCategoryName($c_name);
$category->setCategorySymbol($c_id);



$result= $category->addCategory();



if($result==true){

    $_SESSION['c_added']="true";

    header('location:category.php?success=1');


}
    else
        {
    $_SESSION['c_notAdded']='true';


    header('location:category.php?err=1');

        }








?>