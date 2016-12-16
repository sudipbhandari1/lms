<?php

mysql_connect('localhost', 'root', '');
mysql_select_db('lms');


class Transaction
{
    private $studentID;
    private $studentName;
    private $book_title;
    private $book_isbn;
    private $issue_date;
    private $due_date;
    private $renew_date;
    private $return_date;
    private $fine_amount;

private $transaction_ID;


    public function setTransactionID($transaction_ID)
    {
        $this->transaction_ID = $transaction_ID;
    }

    public function getTransactionID()
    {
        return $this->transaction_ID;
    }


    public function setBookIsbn($book_isbn)
    {
        $this->book_isbn = $book_isbn;
    }


    public function getBookIsbn()
    {
        return $this->book_isbn;
    }


    public function setBookTitle($book_title)
    {
        $this->book_title = $book_title;
    }


    public function getBookTitle()
    {
        return $this->book_title;
    }


    public function setDueDate($due_date)
    {
        $this->due_date = $due_date;
    }

    public function getDueDate()
    {
        return $this->due_date;
    }


    public function setFineAmount($fine_amount)
    {
        $this->fine_amount = $fine_amount;
    }

    public function getFineAmount()
    {
        return $this->fine_amount;
    }


    public function setIssueDate($issue_date)
    {
        $this->issue_date = $issue_date;
    }


    public function getIssueDate()
    {
        return $this->issue_date;
    }


    public function setRenewDate($renew_date)
    {
        $this->renew_date = $renew_date;
    }


    public function getRenewDate()
    {
        return $this->renew_date;
    }


    public function setReturnDate($return_date)
    {
        $this->return_date = $return_date;
    }


    public function getReturnDate()
    {
        return $this->return_date;
    }


    public function setStudentID($studentID)
    {
        $this->studentID = $studentID;
    }


    public function getStudentID()
    {
        return $this->studentID;
    }


    public function setStudentName($studentName)
    {
        $this->studentName = $studentName;
    }


    public function getStudentName()
    {
        return $this->studentName;
    }


    public function calculateFineDays($d1 ,$d2)
    {

        $date1 = new DateTime($d1);
        $date2 = new DateTime($d2);
        $interval = $date1->diff($date2);

        if($d2=="0000-00-00"){
            return 0;
        }else{

            return $interval->days;

        }

    }


    function addTransaction()
    {

        $query = "INSERT INTO `transaction`( `student_id`, `student_name`, `book_title`, `issue_date`, `due_date`,
        `book_isbn`,`renew_date`, `return_date`) VALUES
        ('$this->studentID','$this->studentName',
        '$this->book_title','$this->issue_date','$this->due_date','$this->book_isbn','$this->renew_date','$this->return_date')";

        $result=mysql_query($query);
        return $result;

    }


    function viewTransaction(){

        $query ="SELECT * FROM transaction";
        $result = mysql_query($query);
        return $result;
    }


    function updateTransaction(){


        $query="UPDATE `transaction` SET
                     `issue_date`='$this->issue_date',
                             `due_date`='$this->due_date',`renew_date`='$this->renew_date',
                                `return_date`='$this->return_date'
                                     WHERE `t_id`=$this->transaction_ID ";


       $result=  mysql_query($query);
        return $result;
    }

    function  viewSpcfTransaction(){

        $query ="SELECT * FROM transaction WHERE `t_id`=$this->transaction_ID";

        $result = mysql_query($query);
        return $result;
    }

    function deleteTransaction(){

      
        $query="DELETE FROM `transaction` WHERE `t_id`=$this->transaction_ID";
        $result = mysql_query($query);
        return $result;

    }


}