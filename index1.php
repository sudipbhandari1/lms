<?php
session_start();
if(isset($_SESSION['login'])){
  header('location:home.php');
}



?>


<html>

<head>

    <title>
        Library Management System
    </title>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link href="css/style.css" rel="stylesheet"/>
    <link rel="stylesheet" href="font-awesome-4.1.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/social-buttons.css">






</head>

<body>


<div class="container">
    <div class="row">

        <?php


        if(isset($_SESSION['invalid'])){


            include('includes/loginerror.php');


        }



        if (isset($_SESSION['deleted']) &&
            (time() - $_SESSION['deleted'] > 4)
        ) {

            unset($_SESSION['deleted']);

        }

        if (isset($_SESSION['deleted'])) {
            include('includes/accountDeleted.php');


        }



        ?>




        <div class="col-sm-6 col-md-4 col-md-offset-4">

            <div  class="list-group" style="padding:2% 10%;background-color: #ffffFF;" style="width='10000px;'">

            <h4 class="center">Library Management System</h4>
                <h5 class="center">Librarian Login</h5>


                <div class="center">

                    <img class="img-rounded img-thumbnail center" src="images/login.jpg" height="480" width="480" style="margin: 10px;">

                </div>





                    <form action="LoginAction.php" method="post">


                        <div class="input-group" style="margin-bottom: 15px;">
                           
                            <input class="form-control" name="username" type="text" placeholder="Username"
                                required="required">
                        </div>

                        <div class="input-group">
                           
                            <input class="form-control" name="password" type="password" placeholder="Password"
                                required="required">
                        </div>





    <div class="btn-group open" style="margin:15px 0px;">
        <div style="margin-left: 50px">
            
        

        <button type="submit" class="btn btn-success" >
            <i class="fa fa-location-arrow fa-fw"></i> Sign in
        </button>
</div>



</div>

     </form>




            </div>



        </div>
    </div>
</div>




<!-- Scripts at end for faster page loads -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>




</body>

</html>
