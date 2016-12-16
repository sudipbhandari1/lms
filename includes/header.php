<?php
include "includes/config.php";
session_start();

if (!isset($_SESSION['login'])) {
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

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.css">


    <style type="text/css" class="init">

        body {
            font-size: 140%;
        }

    </style>
    <script type="text/javascript" language="javascript" src="js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
    <script type="text/javascript" language="javascript" src="js/dataTables.bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>


    <script type="text/javascript" language="javascript" class="init">

        $(document).ready(function () {
            $('#example').dataTable();
        });

    </script>


</head>


<body style="margin-bottom: 70px;">


<!-- Modal change password -->

<div class="modal fade" id="myModal_pswd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel_admin"
     aria-hidden="true">
    <div class="modal-dialog" style="padding-top: 15% !important">
        <div class="modal-content">
            <form action="changePassword.php" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Change Password</h4>
                </div>
                <div class="modal-body">



                    <div class="row">


                        <div class="col-lg-12">

                            <div class="col-lg-6">




                                <div class="input-group">
                                    <span class="input-group-addon">pswd</span>
                                    <input class="form-control" name="old" type="text" placeholder="old password"
                                           required="required">
                                </div>


                            </div>


                            <div class="col-lg-6">




                                <div class="input-group">
                                    <span class="input-group-addon">Password</span>
                                    <input class="form-control" name="new" type="password" placeholder="new password"
                                           required="required">
                                </div>


                            </div>


                        </div>


                    </div>











                    <!--  Are you sure you want to delete this Transaction? This action cannot be undone!

                      <input type="text" name="bookId" id="bookId" value="" style="display: none;"/>-->
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">change</button>
                </div>

            </form>

        </div>
    </div>
</div>

<!-- Modal delete student -->
<div class="modal fade" id="myModal_del_student" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="padding-top: 15% !important">
        <div class="modal-content">
            <form action="deleteStudents.php" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Delete Student</h4>
                </div>
                <div class="modal-body">

                    Are you sure you want to delete this student?

                    <input type="text" name="bookId" id="bookId" value="" style="display: none;"/>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">Delete</button>
                </div>

            </form>

        </div>
    </div>
</div>






<!-- Modal delete book -->
<div class="modal fade" id="myModal_del_book" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="padding-top: 15% !important">
        <div class="modal-content">
            <form action="deleteBook.php" method="GET">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Delete Book</h4>
                </div>
                <div class="modal-body">

                    Are you sure you want to delete this book?

                    <input type="text" name="bookId" id="bookId" value="" style="display: none;"/>

                </div>  
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" name="btnSubmit" class="btn btn-primary btn-sm">Delete</button>
                </div>

            </form>

        </div>
    </div>
</div>

<!-- Modal delete category -->
<div class="modal fade" id="myModal_del_category" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="padding-top: 15% !important">
        <div class="modal-content">
            <form action="deletecategory.php" method="GET">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Delete Category</h4>
                </div>
                <div class="modal-body">

                    Are you sure you want to delete this category?

                    <input type="text" name="categoryId" id="categoryId" value="" style="display: none;"/>

                </div>  
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" name="btnSubmit" class="btn btn-primary btn-sm">Delete</button>
                </div>

            </form>

        </div>
    </div>
</div>












<!-- Modal admin_delete-->
<div class="modal fade" id="myModal_delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel_delete" aria-hidden="true">
    <div class="modal-dialog" style="padding-top: 15% !important">
        <div class="modal-content">
            <form action="deleteAdmin.php" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Delete your account</h4>
                </div>
                <div class="modal-body">

                    Are you sure you want to delete your account?

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">Delete</button>
                </div>

            </form>

        </div>
    </div>
</div>


<!-- Modal transaction_delete -->
<div class="modal fade" id="myModal_del_trans" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="padding-top: 15% !important">
        <div class="modal-content">
            <form action="del_transaction.php" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Delete Transaction</h4>
                </div>
                <div class="modal-body">

                    Are you sure you want to delete this Transaction?

                    <input type="text" name="bookId" id="bookId" value="" style="display: none;"/>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" id="delete_transaction" class="btn btn-primary btn-sm">Delete</button>
                </div>

            </form>

        </div>
    </div>
</div>


<!-- Modal add_admin -->
<div class="modal fade" id="myModal_admin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel_admin"
     aria-hidden="true">
    <div class="modal-dialog" style="padding-top: 15% !important">
        <div class="modal-content">
            <form action="addAdmin.php" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add Admin</h4>
                </div>
                <div class="modal-body">



                    <div class="row">


                        <div class="col-lg-12">

                            <div class="col-lg-6">




                                <div class="input-group">
                                    <span class="input-group-addon">Username</span>
                                    <input class="form-control" name="username" type="text" placeholder=""
                                           required="required">
                                </div>


                            </div>


                            <div class="col-lg-6">




                                <div class="input-group">
                                    <span class="input-group-addon">Password</span>
                                    <input class="form-control" name="password" type="password" placeholder=""
                                           required="required">
                                </div>


                            </div>


                        </div>


                    </div>











                    <!--  Are you sure you want to delete this Transaction? This action cannot be undone!

                      <input type="text" name="bookId" id="bookId" value="" style="display: none;"/>-->
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">Add</button>
                </div>

            </form>

        </div>
    </div>
</div>


<nav id="myNavbar1" class="navbar navbar-inverse  navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand" style="margin-top: 10px;color: #ffffFF">
                &nbsp;&nbsp;Library Management
                System</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarCollapse1">
            <div class="nav navbar-nav navbar-right">
                <div class="row">


                    <div class="col-lg-12" style="margin: 10px 0px;">

                        <div class="col-lg-4 col-lg-push-1" style="margin: 10px;">

                            <div class="btn-group"
                            ">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <i></i>&nbsp;&nbsp; <?php echo($_SESSION['login']); ?>  &nbsp;&nbsp;
                                <span class="fa fa-caret-down"></span></a>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#" data-toggle="modal" data-target="#myModal_pswd">Change password</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#myModal_delete">Delete account</a></li>
                                <li><a href="includes/backdatabase.php">Backup Database</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="#" data-toggle="modal" data-target="#myModal_admin"> Add
                                        Admin</a></li>
                            </ul>
                        </div>


                    </div>

                    <div class="col-lg-4 col-lg-push-1 " style="margin: 10px;">

                        <form action="LogoutAction.php">

                            <div class="btn-group">
                                <button type="submit" class="btn btn-default ">
                                    Logout &nbsp;&nbsp;

                                </button>


                            </div>


                        </form>
                    </div>

                    <div class="col-lg-4">


                    </div>


                </div>


            </div>
        </div>
    </div>
</nav>


<nav id="myNavbar" class="navbar navbar-default  " role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div style="margin-top: 35px;">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarCollapse">

            <div class="container">

                <ul class="nav navbar-nav navbar-left">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">&nbsp;
                            Category <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="category.php"> Enter New Category</a></li>
                            <li><a href="categoryview.php"> List category</a></li>

                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">&nbsp;
                            Book <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="AddBook.php"> Enter New Book </a></li>
                            <li><a href="booklistform.php">Data of Books &nbsp;&nbsp;</a></li>
                        </ul>
                    </li>


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">&nbsp;
                            Students <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="addStudents.php">Add new students&nbsp;&nbsp;</a></li>
                            <li><a href="studentView.php"> Data of Students &nbsp;&nbsp;
                                   </a>
                            </li>
                        </ul>
                    </li>

 <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">&nbsp; Publisher <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="addpublisher.php">Add new Publisher&nbsp;&nbsp;</a></li>
                            
                            </li>
                        </ul>
                    </li> -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">&nbsp; Transaction <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="newTransactions.php">Add new Transaction&nbsp;&nbsp;</a></li>
                            <li><a href="Transaction.php">Data of Transactions &nbsp;&nbsp;</a>
                            </li>
                        </ul>
                    </li>



                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">&nbsp;
                            Help <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="help.php"> How to use this system</a></li>

                        </ul>
                    </li>

                </ul>

            </div>


        </div>
    </div>
</nav>
