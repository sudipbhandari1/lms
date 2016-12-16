<?php


class Database {

    private  $host;
    private  $username;
    private  $password;
    private  $connection;



    function __construct()
    {

        $this->host = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->database = "lms";
        $this->connection();

    }


    private  function connection(){

        $this->connection = mysql_connect($this->host, $this->username, $this->password)or die("Couldn't connect mysql database.");;
        mysql_select_db($this->database,$this->connection)or die("Couldn't select database.");
        return($this->connection);


    }



    function __destruct()
    {
        mysql_close($this->connection);
    }









}



?>