<?php

include('Database.php');
class AdminUser extends Database
{
    private $username;
    private $password;
    private $user_id;
    private $new_pswd;


    public function getNewPswd()
    {
        return $this->new_pswd;
    }


    public function setNewPswd($new_pswd)
    {
        $this->new_pswd = $new_pswd;
    }


    function getUserIid()
    {

        return $this->user_id;

    }

    function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    function getUsername()
    {
        return $this->username;
    }

    function setUsername($username)
    {
        $this->username = $username;
    }

    function getPassword()
    {
        return $this->password;
    }

    function setPassword($password)
    {
        $this->password = $password;
    }


    function login()
    {
        $query = "select * from admin where
                  username='$this->username'
                  AND password='$this->password'";
        $result = mysql_query($query);
        $num = mysql_num_rows($result);


        if ($num > 0) {
            $data = mysql_fetch_array($result);

            return true;
        }

        else {


            return false;


        }


    }


    function addNewAdmin(){
        $query ="select * from admin where
                 username ='$this->username'";
        $result = mysql_query($query);
        $num = mysql_num_rows($result);


        if ($num > 0) {
            $data = mysql_fetch_array($result);

            return false;
        }

        else {


            $query = "INSERT INTO `admin`
                 ( `username`, `password`) VALUES
            ('$this->username','$this->password')";
            $result =mysql_query($query);
            return $result;


        }




    }



    function changePassword(){

        $query ="SELECT password from admin where username='$this->username'";
        $result = mysql_query($query);
        $data= mysql_fetch_array($result);
        $real_password = $data['password'];



        if($real_password!=$this->password){

            return false;
        }
        else{


            $query="UPDATE `admin` SET
                    `password`='$this->new_pswd' WHERE
                                                 `username`='$this->username'";



            $result =  mysql_query($query);
            return $result;


        }


    }


    function deleteAccount(){


        $query = "SELECT * from admin";
        $result = mysql_query($query);
        $num = mysql_num_rows($result);

        if ($num==1){

            return false;
        }

        else {

            $query = "DELETE from admin where username='$this->username'";
            $result = mysql_query($query);
            return $result;



        }

    }



}