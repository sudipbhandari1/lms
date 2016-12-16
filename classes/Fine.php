<?php

mysql_connect('localhost', 'root', '');
mysql_select_db('lms');

class Fine {

    private $fine_amount;



    public function setFineAmount($fine_amount)
    {
        $this->fine_amount = $fine_amount;
    }


    public function getFineAmount()
    {
        return $this->fine_amount;
    }


    function getFine(){

        $query =" SELECT `fine_amount` FROM fine WHERE fine_id=1";
        $result = mysql_query($query);
        return $result;

    }


    function updateFine(){

        $query ="UPDATE `fine` SET `fine_amount`=$this->fine_amount WHERE fine_id=1";
        $result = mysql_query($query);
        return $result;


    }

} 