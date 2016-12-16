<?php
include ('classes/Database.php');

class publisher extends Database {


    private $publisherID;
    private $p_name;
    private $temp_PublisherID;
    


    public function setTempPublisherID($temp_PublisherID)
    {
        $this->temp_PublisherID = $temp_PublisherID;
    }


    public function getTempPublisherID()
    {
        return $this->temp_PublisherID;
    }


    public function setPublisherName($p_name)
    {
        $this->p_name = $p_name;
    }


    public function getPublisherName()
    {
        return $this->p_name;
    }

    
    public function setPublisherID($publisherID)
    {
        $this->publisherID = $publisherID;
    }


    public function getPublisherID()
    {
        return $this->publisherID;
    }



    function addPublisher(){

        $query ="INSERT INTO `publisher`(`publisher_id`, `p_name`)
                VALUES ('$this->publisherID','$this->p_name')";

       $result = mysql_query($query);
        return $result;

    }



    function  viewPublisher(){

        $query ="SELECT * FROM publisher";
        $result = mysql_query($query);
         return $result;


    }


    function deletePublisher(){

        $query ="DELETE FROM `publisher` where publisher_id='$this->publisherID'";
        $result = mysql_query($query);
        return $result;


    }


    function editPublisher(){


        $query ="UPDATE `publisher` SET `publisher_id`='$this->publisherID',`p_name`='$this->p_name'";
        $result = mysql_query($query);
        return $result;


    }




    function fetchPublisher(){
        $query ="SELECT * FROM publisher where publisher_id = '$this->publisherID'";
        $result = mysql_query($query);
        return $result;
    }



} 