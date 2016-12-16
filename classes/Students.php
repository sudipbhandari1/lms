<?php
include ('classes/Database.php');

class Students extends Database {


    private  $studentID;
    private $f_name;
    private $l_name;
    private $address;
    private $contact;
    private  $gender;
    private  $DoB;
    private  $joinedDate;
    private  $temp_studentID;


    public function setTempStudentID($temp_studentID)
    {
        $this->temp_studentID = $temp_studentID;
    }


    public function getTempStudentID()
    {
        return $this->temp_studentID;
    }


    public function setDoB($DoB)
    {
        $this->DoB = $DoB;
    }


    public function getDoB()
    {
        return $this->DoB;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }


    public function getAddress()
    {
        return $this->address;
    }


    public function setContact($contact)
    {
        $this->contact = $contact;
    }


    public function getContact()
    {
        return $this->contact;
    }


    public function setFName($f_name)
    {
        $this->f_name = $f_name;
    }


    public function getFName()
    {
        return $this->f_name;
    }


    public function setGender($gender)
    {
        $this->gender = $gender;
    }


    public function getGender()
    {
        return $this->gender;
    }


    public function setJoinedDate($joinedDate)
    {
        $this->joinedDate = $joinedDate;
    }


    public function getJoinedDate()
    {
        return $this->joinedDate;
    }


    public function setLName($l_name)
    {
        $this->l_name = $l_name;
    }


    public function getLName()
    {
        return $this->l_name;
    }


    public function setStudentID($studentID)
    {
        $this->studentID = $studentID;
    }


    public function getStudentID()
    {
        return $this->studentID;
    }



    function addStudents(){

        $query ="INSERT INTO `students`(`student_id`, `f_name`, `l_name`, `adress`, `contact`, `DoB`, `joined_date`, `gender`)
                VALUES ('$this->studentID','$this->f_name','$this->l_name','$this->address','$this->contact','$this->DoB',
                '$this->joinedDate','$this->gender')";

       $result = mysql_query($query);
        return $result;

    }



    function  viewStudets(){

        $query ="SELECT * FROM students";
        $result = mysql_query($query);
         return $result;


    }


    function deleteStudents(){

        $query ="DELETE FROM `students` where student_id='$this->studentID'";
        $result = mysql_query($query);
        return $result;


    }


    function editStudents(){


        $query ="UPDATE `students` SET `student_id`='$this->studentID',`f_name`='$this->f_name',
        `l_name`='$this->l_name',`adress`='$this->address',`contact`='$this->contact',`DoB`='$this->DoB',
        `joined_date`='$this->joinedDate',`gender`='$this->gender' WHERE `student_id`='$this->temp_studentID'";
        $result = mysql_query($query);
        return $result;


    }




    function fetchStudent(){
        $query ="SELECT * FROM students where student_id = '$this->studentID'";
        $result = mysql_query($query);
        return $result;
    }



} 