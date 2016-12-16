<?php

session_start();

if (!isset($_SESSION['login'])) {
    header('location:index.php');
}



?>


<!DOCTYPE html>
<html>
<head>

    <title>Library Management System</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link href="css/style.css" rel="stylesheet"/>
    <link rel="stylesheet" href="font-awesome-4.1.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href= "css/dataTables.bootstrap.css">
    <style type="text/css" class="init">

        body { font-size: 140%; }

    </style>
    <script type="text/javascript" language="javascript" src="js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
    <script type="text/javascript" language="javascript" src="js/dataTables.bootstrap.js"></script>

    <script type="text/javascript" language="javascript" class="init">

        $(document).ready(function() {
            $('#example').dataTable();
        } );

    </script>
</head>

<body >
<div class="container">




<table id="example" class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%">
<thead>
<tr>
    <th>Name</th>
    <th>Position</th>
    <th>Office</th>
    <th>Age</th>
    <th>Start date</th>
    <th>Salary</th>
</tr>
</thead>

<tfoot>
<tr>
    <th>Name</th>
    <th>Position</th>
    <th>Office</th>
    <th>Age</th>
    <th>Start date</th>
    <th>Salary</th>
</tr>
</tfoot>

<tbody>
<tr>
    <td>Tiger Nixon</td>
    <td>System Architect</td>
    <td>Edinburgh</td>
    <td>61</td>
    <td>2011/04/25</td>
    <td>$320,800</td>
</tr>

</tbody>
</table>


</div>


</body>
</html>