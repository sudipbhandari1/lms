<?php

$student_id = $_GET['std_id'];

include('classes/Students.php');


$student = new Students();

$student->setStudentID($student_id);

$main_data = $student->fetchStudent();

$res = mysql_fetch_array($main_data);

include 'includes/header.php';

?>


<div class="container" style="margin-top: 30px">

<div class="row">


<div class="col-lg-12">

<div class="col-lg-12">



<div class="panel panel-default">

<div class="panel-body">

<div class="page-header" style="margin-top: 0px">
    <h4> Edit Students </h4>
</div>



<form action="studentEditAction.php" method="post">



<div class="row">


    <div class="col-lg-12">


        <div class="col-lg-4" style="display: none;">

            <div class="input-group">
               
                <input class="form-control" name="temp_ID" type="text" placeholder="Student ID"
                       required="required" value="<?php echo($res['student_id']) ?>">
            </div>


        </div>


        <div class="col-lg-4">

            <div class="input-group">
                Student's ID
                <input class="form-control" name="ID" type="text" placeholder="Student ID"
                       required="required" value="<?php echo($res['student_id']) ?>">
            </div>


        </div>
        <div class="col-lg-4">

            <div class="input-group">
               First Name
                <input class="form-control" name="f_name" type="text" placeholder="First Name"
                       required="required" value="<?php echo($res['f_name']) ?>">
            </div>


        </div>

        <div class="col-lg-4">

            <div class="input-group">
              Last Name
                <input class="form-control" name="l_name" type="text" placeholder="Last Name"
                       required="required" value="<?php echo($res['l_name']) ?>">
            </div>


        </div>








    </div>













</div>


<div class="row" style="margin-top: 10px;">


    <div class="col-lg-12">

        <div class="col-lg-4">

            <div class="input-group">
            Address
                <input class="form-control" name="address" type="text" placeholder="Address"
                       required="required" value="<?php echo($res['adress']) ?>">
            </div>


        </div>
        <div class="col-lg-4">

            <div class="input-group">
             Contact
                <input class="form-control" name="contact" type="text" pattern="[0-9]*" placeholder="Contact"
                       required="required" value="<?php echo($res['contact']) ?>">
            </div>


        </div>

        <div class="col-lg-4">

            <div class="input-group">
              Date of Birth
                <input class="form-control" name="DoB" type="date" min="1900-01-01" max="2020-01-01" type="date" placeholder="DoB (YYYY-MM-DD)"
                       required="required" value="<?php echo($res['DoB']) ?>" >
            </div>


        </div>








    </div>













</div>




<div class="row" style="margin-top: 10px;">


    <div class="col-lg-12">

        <div class="col-lg-4">

            <div class="input-group">
Joined Date
                <input class="form-control" name="DoJ" type="text" placeholder="Joined Date"
                       required="required" value="<?php echo($res['joined_date']) ?>">
            </div>


        </div>
        <div class="col-lg-4">
            Gender
            <div class="input-group">
              
                <select class="form-control" name="gender" >



                    <?php

                    if($res['gender']=='male'){
                        $a = 'selected="selected"';

                      echo " <option $a>".$res['gender']."</option>";
                      echo "<option>female</option>";
                    }
                    else{
                        $a = 'selected="selected"';
                        echo "<option $a >female</option>";
                        echo "<option>male</option>";

                    }



                    ?>



                </select>
            </div>


        </div>










    </div>













</div>



<div class="row" style="margin-top: 25px;margin-bottom: 25px;">


    <div class="col-lg-12">

        <div class="col-lg-4">

            <button type="submit" class="btn btn-success btn-sm ">
                Submit

            </button>



        </div>

        <div class="col-lg-4">

        </div>


        <div class="col-lg-4">


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


</div>



</body>

</html>