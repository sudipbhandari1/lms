<?php

session_start();
if(!isset($_SESSION['login'])){
    header('location:index.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <title>Library Management System</title>
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
<div class="navbar navbar-inverse navbar-fixed-top" >


    <div class="container">

        <div class="row">

            <div class="col-lg-12" style="margin: 18px;">

                <div class="col-lg-4 " style="color: #ffffFF;">

                    <i class="fa fa-book fa-3x" style="color: #d98500"> LMS </i>

                </div>

                <div class="col-lg-4">

                </div>
                <div class="col-lg-4" style="color: #ffffFF; padding-left: 10%">





                        <div class="btn-group" style="float: left">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user fa-fw"></i>&nbsp;&nbsp; <?php echo ( $_SESSION['login']); ?>  &nbsp;&nbsp;
                                <span class="fa fa-caret-down"></span></a>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#"><i class="fa fa-pencil fa-fw"></i>Change password</a></li>
                                <li><a href="#"><i class="fa fa-trash-o fa-fw"></i>Delete account</a></li>
                                <li><a href="#"><i class="fa fa-save fa-fw"></i>Backup Database</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="i"></i> Add Admin</a></li>
                            </ul>
                        </div>
						<a href="LogoutAction.php" class="btn btn-default "> <i class="fa fa-sign-out fa-fw"></i> Logout &nbsp;&nbsp;</a>
                      <!--   <form action="LogoutAction.php" >

                            <div class="btn-group" style="margin-left: 2%">
                                <button type="submit" class="btn btn-default " >
                                    <i class="fa fa-sign-out fa-fw"></i> Logout &nbsp;&nbsp;

                                </button>


                            </div>


                        </form> -->












                </div>



            </div>

        </div>

    </div>


</div>





<div class="container" style="margin-top: 5%">

<div class="row">


    <div class="col-lg-12">


        <div class="col-lg-3">

            <div class="list-group">


                <div class="list-group-item">

                 <h4 class="list-group-item-heading center" style="margin-bottom: 10px;">Actions</h4>


                </div>



                <a href="category.php" class="list-group-item">

                    <div class="list-group-item-text" style="padding-top: 10px;text-align: center">

                        <i class="fa fa-bars fa-2x" style="font-size: 18px;"> &nbsp;&nbsp; Enter New Category </i>

                    </div>

                </a>

                <a href="AddBook.php" class="list-group-item">

                    <div class="list-group-item-text" style="padding-top: 10px;text-align: center">

                        <i class="fa fa-book fa-2x" style="font-size: 18px;"> &nbsp;&nbsp; Enter New Book &nbsp;&nbsp; &nbsp;&nbsp;</i>

                    </div>

                </a>



            </div>
        </div>


    </div>


</div>




</div>





<!-- Scripts at end for faster page loads -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>



</body>

</html>