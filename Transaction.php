<?php

include 'includes/header.php'
?>

<div class="container" style="margin-top: 10px">


<div class="row">


<div class="col-lg-12">


<div class="panel panel-default">

<div class="panel-body">

<div class="page-header" style="margin-top: 0px">
    <div class="row">

        <div class="col-lg-12">

            <div class="col-lg-4">
                <h4> Transactions </h4>
            </div>

            <div class="col-lg-4">

                <?php

                include('classes/Transaction.php');

                $query = " SELECT `fine_amount` FROM fine WHERE fine_id=1";
                $result = mysql_query($query);
                $val = mysql_fetch_array($result);

                ?>

                <form action="fineEdit.php" method="post">
                    <div class="input-group">

                        <span class="input-group-addon">Edit Fine</span>
                        <input type="text" class="form-control" name="fine_amt" required="required"
                               placeholder="NRS <?php echo $val['fine_amount'] ?> / day" pattern="[0-9]*">

                                            <span class="input-group-btn">
                                                            <button class="btn btn-default" type="submit">Update</button>
                                              </span>


                    </div>

                </form>


            </div>

            <div class="col-lg-4">


                <?php


                if (isset($_SESSION['user_not_added']) &&
                    (time() - $_SESSION['user_not_added'] > 4)
                ) {

                    unset($_SESSION['user_not_added']);

                }

                if (isset($_SESSION['user_not_added'])) {
                    include('includes/adminNotadded.php');


                }



                if (isset($_SESSION['pw_changed']) &&
                    (time() - $_SESSION['pw_changed'] > 4)
                ) {

                    unset($_SESSION['pw_changed']);

                }

                if (isset($_SESSION['pw_changed'])) {

                    include('includes/pwChanged.php');


                }


                if (isset($_SESSION['pw_changed_err']) &&
                    (time() - $_SESSION['pw_changed_err'] > 4)
                ) {

                    unset($_SESSION['pw_changed_err']);

                }

                if (isset($_SESSION['pw_changed_err'])) {

                    include('includes/pwNotChanged.php');


                }




                if (isset($_SESSION['last_admin']) &&
                    (time() - $_SESSION['last_admin'] > 4)
                ) {

                    unset($_SESSION['last_admin']);

                }

                if (isset($_SESSION['last_admin'])) {
                    include('includes/lastAdmin.php');


                }


                if (isset($_SESSION['user_added']) &&
                    (time() - $_SESSION['user_added'] > 4)
                ) {

                    unset($_SESSION['user_added']);

                }

                if (isset($_SESSION['user_added'])) {
                    include('includes/adminAdded.php');


                }








                if (isset($_SESSION['most_recent_activity_transaction_edited']) &&
                    (time() - $_SESSION['most_recent_activity_transaction_edited'] > 4)
                ) {

                    unset($_SESSION['most_recent_activity_transaction_edited']);

                }

                if (isset($_SESSION['most_recent_activity_transaction_edited'])) {
                    include('includes/trnsEdited.php');


                }


                if (isset($_SESSION['backup_success']) &&
                    (time() - $_SESSION['backup_success'] > 10)
                ) {

                    unset($_SESSION['backup_success']);

                }

                if (isset($_SESSION['backup_success'])) {

                    include('includes/dbBackup.php');


                }


                if (isset($_SESSION['most_recent_activity_trns_del']) &&
                    (time() - $_SESSION['most_recent_activity_trns_del'] > 4)
                ) {

                    unset($_SESSION['most_recent_activity_trns_del']);

                }

                if (isset($_SESSION['most_recent_activity_trns_del'])) {
                    include('includes/trnsDltd.php');


                }





                ?>

            </div>


        </div>

    </div>


</div>


<div class="row">

    <div class="col-lg-12">

        <table id="example" class="table table-bordered table-striped" cellspacing="0" width="100%"
        ">
        <thead style="font-size: 20px; !important">
        <tr>
            <th>Student's ID</th>
            <th>Student's Name</th>
            <th>Book Title</th>
            <th>Issue Date</th>
            <th>Due Date</th>
            <th>Renew Date</th>
            <th>Return Date</th>
            <th>Fine</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Paid</th>

        </tr>
        </thead>


        <tbody>


        <?php




        $transaction = new Transaction();


        $data = $transaction->viewTransaction();
        $num = mysql_num_rows($data);

        for ($j = 0; $j < $num; $j++) {

            $row1 = mysql_fetch_array($data);

            $days = $transaction->calculateFineDays($row1['due_date'], $row1['return_date']);





            ?>

            <tr>

                <td><?php echo $row1['student_id'] ?></td>
                <td><?php echo $row1['student_name'] ?></td>
                <td><?php echo $row1['book_title'] ?></td>
                <td><?php echo $row1['issue_date'] ?></td>
                <td><?php echo $row1['due_date'] ?></td>
                <td><?php echo $row1['renew_date'] ?> </td>
                <td><?php echo $row1['return_date'] ?> </td>
                <td><?php

                    if ($days > 0) {

                        echo(" Rs" .$days * $val['fine_amount']);
                    } else {


                        echo(0);
                    }


                    ?> </td>
                <td class="center">
                    <a style="text-decoration: none;color:inherit"
                       href="editTransaction.php?t_id=<?php echo($row1['t_id']) ?>">

                        <span>Edit</span>
                    </a>


                </td>
                <td class="center">


                    <a title="delete this item" href="<?php echo $base_url.'del_transaction.php?id='.$row1['t_id']; ?>">
                        <span >Delete</span>
                    </a>


                </td>
                 <th>
                     <?php if($row1['paid'] == 0){ echo "Unpaid"; } else { echo "Paid"; } ?>
                     <br>
                     <label>Pay <input type="checkbox" data-id="<?= $row1['t_id'] ?>" id="paidunpaid" <?php if($row1['paid'] == '1'){ echo 'checked'; } ?>>
                     </label>
                 </th>
            </tr>

        <?php
        }

        ?>


        </tbody>
        </table>

    </div>

</div>


</div>


</div>


</div>


</div>

</div>


</body>

</html>

<script>
$(document).ready(function(){
   
    $(document).on("click","#paidunpaid",function(){
        var id = $(this).data("id");
        $.post("pay.php", {'id':id}, function(data, status){
            // alert("Data: " + data + "\nStatus: " + status);
            if(data == 1){
                location.reload();
            }
        });
         
    });
});
</script>