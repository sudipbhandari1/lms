<?php


include('classes/Students.php');
include('classes/Books.php');

$students = new Students();
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

                        <div class="page-header" style="margin-top: 0px">
                            <h4> Add new Transactions </h4>
                        </div>
                                <div class="col-lg-7">

                                    <?php


                                    if (isset($_SESSION['isbn_mismatch']) &&
                                        (time() -   $_SESSION['isbn_mismatch'] > 4)) {

                                        unset($_SESSION['isbn_mismatch']);

                                    }

                                    if (isset($_SESSION['isbn_mismatch'])){
                                        include('includes/isbn_mismatch.php');


                                    }

                                    ?>
                                    </div>




                            </div>

                        </div>


                    </div>
                    <form action="transaction_action.php" method="post">

                    <!-- <div class="row center"> -->
                    <div class="row" style="margin-top: 25px;margin-bottom: 45px;">

<!--                         <div class="col-lg-12">


                            <div class="row"> -->


                                <div class="col-lg-12">


                                    <div class="col-lg-4">

                                        <div class="input-group">
                                            <select class="form-control" name="std_id">

                                            <option  disabled selected>Student ID</option>


                                                <?php

                                                $query = $students->viewStudets();

                                                $num = mysql_num_rows($query);

                                                for ($j = 0; $j < $num; $j++) {

                                                    $row1 = mysql_fetch_array($query);

                                                    ?>

                                                    <option> <?php echo($row1['student_id']); ?></option>;

                                                <?php

                                                }

                                                ?>


                                            </select>
                                        </div>


                                    </div>


                                    <div class="col-lg-4">

                                        <div class="input-group">
                                         
                                            <select class="form-control" name="book_title">

                                                <option  disabled selected>Book Title</option>


                                                <?php
                                                $books = new Books();

                                                $query = $books->allBook();

                                                $num = mysql_num_rows($query);

                                                for ($j = 0; $j < $num; $j++) {

                                                    $row1 = mysql_fetch_array($query);

                                                    ?>

                                                    <option> <?php echo($row1['title']) ?></option>;

                                                <?php

                                                }

                                                ?>


                                            </select>
                                        </div>


                                    </div>

</div>
</div>
                                   

                           <div class="row" style="margin-top: 25px;margin-bottom: 45px;">


                                <div class="col-lg-12">


                                    <div class="col-lg-4">

                                        <div class="input-group">
                                            <input type="date" class="form-control"
                                                   name="issue_date" placeholder="Issue Date" required="required">



                                        </div>


                                    </div>


                                    <div class="col-lg-4">

                                        <div class="input-group">
                                         <input type="date" class="form-control"
                                                   name="due_date" placeholder="Due Date" required="required">



                                        </div>




                                    </div>




                                </div>


                            </div>

<div class="row" style="margin-top: 25px;margin-bottom: 45px;">


                                <div class="col-lg-12">


                                    <div class="col-lg-4">



            <div class="input-group">
            
                <input type="date" class="form-control"  value="<?php echo($row['renew_date']) ?>"
                       name="renew_date" placeholder="Renew Date" title="renew date" >



            </div>
            </div>

            <div class="col-lg-4">

 <div class="input-group">
            
                <input type="date" class="form-control"  value="<?php echo($row['return_date']) ?>"
                       name="return_date" placeholder="Return Date" title="return date">



            </div>


        </div>

        </div>


   


</div>







           



                            <div class="row" style=" ">

                                <div class="col-lg-3" style="margin-top: 20px; margin-bottom: 20px">


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

</div>


</body>
</html>