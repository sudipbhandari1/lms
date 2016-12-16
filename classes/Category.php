<?php

mysql_connect('localhost','root','');
mysql_select_db('lms');

class Category{

    private $cat_id;
    private $categoryName;
    private $categorySymbol;
    private $temp_catid;

    //  public function setTempCategoryID($temp_catid)
    // {
    //     return $this->temp_catid = $temp_catid;
    // }


    // public function getTempCategoryID()
    // {
    //     return $this->temp_catid;
    // }

public function setTempCategoryID($temp_catid)
{
    $this->temp_catid = $temp_catid;
}

public function getTempCategoryID($temp_catid)
{
    return $this->temp_catid;
}

public function setCategoryID($cat_id)
    {
        $this->cat_id = $cat_id;
    }


    public function getCategoryID()
    {
        return $this->cat_id;
    }

   

    public function setCategorySymbol($categorySymbol)
    {
        $this->categorySymbol = $categorySymbol;
    }


    public function getCategorySymbol()
    {
        return $this->categorySymbol;
    }

    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
    }

    public function getCategoryName()
    {
        return $this->categoryName;
    }

    function addCategory(){


        $query="select * from category where c_name='$this->categoryName'  ";

            $data=mysql_query($query);
            $num=mysql_num_rows($data);

        if($num>0){

           return false;

        }else{

            $query="INSERT INTO `category`(`c_name`,`c_symbol`) VALUES ('$this->categoryName','$this->categorySymbol')";

            return  mysql_query($query);
        }



    }



    function categoryValue(){

        $query ="SELECT `c_name` FROM category";
         $result = mysql_query($query);
        return $result;

    }
    function viewcategory(){
        $query ="SELECT * FROM category";
         $result = mysql_query($query);
        return $result;

    }




    function deletecategory(){
       
        $query ="DELETE FROM `category` where id=".$this->temp_catid;
        $result = mysql_query($query);
        return $result;


    }

    function fetchcategory()
{
    $query ="SELECT * FROM category where id = '$this->cat_id'";
        $result = mysql_query($query);
        return $result;

}

function editcategory(){


        $query ="UPDATE `category` SET `c_name`='".$this->categoryName ."',
        `c_symbol`='".$this->categorySymbol."' WHERE `id`='".$this->temp_catid."'";
       

        $result = mysql_query($query);
       
        return $result;


    }



}



