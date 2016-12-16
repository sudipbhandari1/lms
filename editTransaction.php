<?php

include('classes/Transaction.php');

$tid=$_GET['t_id'];
$transaction = new Transaction();
$transaction->setTransactionID($tid);

$data =  $transaction ->viewSpcfTransaction();
$row = mysql_fetch_array($data);

include 'includes/header.php';

?>



<div class="container " style="margin-top: 10px">


<div class="row">


<div class="col-lg-9 col-lg-push-2">


<div class="panel panel-default">

<div class="panel-body">

<div class="page-header" style="margin-top: 0px">
    <div class="row">

        <div class="col-lg-12">

            <div class="col-lg-3">
                <h6>Edit Transactions </h6>
            </div>

            <div class="col-lg-2">
            </div>



        </div>

    </div>


</div>
<form action="transaction_edit_action.php" method="post">

<div class="row center">

<div class="row" style="margin-top:5px;">


    <div class="col-lg-12">


        <div class="col-lg-4">


            <div class="input-group">
                Student's ID
                <input type="text" class="form-control"
                       name="student_name" title="student_name"
                       placeholder="Issue Date" required="required" value="<?php echo($row['student_id']) ?>" disabled>



            </div>


        </div>


        <div class="col-lg-4">


            <div class="input-group">
            Book Title
                 <input type="text" class="form-control"  value="<?php echo($row['book_title']) ?>"
                       name="book_title"  required="required" title="Title" disabled>



            </div>


        </div>


        <div class="col-lg-4">



            <div class="input-group">
             ISBN
                <input type="text" class="form-control"  value="<?php echo($row['book_isbn']) ?>"
                       name="ISBN"  title="ISBN" disabled>



            </div>



        </div>


    </div>


</div>






<div class="row" style="margin-top: 25px;">


    <div class="col-lg-12">


        <div class="col-lg-4">


            <div class="input-group">
                    Issue date
                <input type="date" class="form-control"
                       name="issue_date" title="Issue Date"
                       placeholder="Issue Date" required="required" value="<?php echo($row['issue_date']) ?>">



            </div>


        </div>


        <div class="col-lg-4">


            <div class="input-group">
               Due Date
                <input type="date" class="form-control"  value="<?php echo($row['due_date']) ?>"
                       name="due_date" placeholder="Due Date" required="required" title="Due Date">



            </div>


        </div>


        <div class="col-lg-4">



            <div class="input-group">
                Renew Date
                <input type="date" class="form-control"  value="<?php echo($row['renew_date']) ?>"
                       name="renew_date" placeholder="Renew Date" title="renew date" >



            </div>



        </div>


    </div>


</div>





<div class="row" style="margin-top: 25px;margin-bottom: 5px;">


    <div class="col-lg-12">


        <div class="col-lg-4">

            <div class="input-group">
            Return Date
                <input type="date" class="form-control"  value="<?php echo($row['return_date']) ?>"
                       name="return_date" placeholder="Return Date" title="return date">



            </div>


        </div>


        <div class="col-lg-4" style="display: none">


            <div class="input-group">
                <span class="input-group-addon">T_id</span>
                <input type="text" class="form-control"  value="<?php echo($row['t_id']) ?>"
                       name="t_id" placeholder="Return Date" title="return date">



            </div>






        </div>


        <div class="col-lg-4">







        </div>


</div>









<div class="row" style="padding: 10px; ">

    <div class="col-lg-3" style="margin-top: 25px; margin-bottom: 20px">


        <button type="submit" class="btn btn-success btn-sm ">
      Submit

        </button>




    </div>

</div>

</div>


</div>
</form>
</div>


</div>


</div>


</div>


</div>




</body>
</html>