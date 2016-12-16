<?php

include 'includes/header.php';


?>


<div class="container" style="margin-top: 30px">

<div class="row">


<div class="col-lg-12">


<?php

if (isset($_SESSION['most_recent_activity_student']) &&
    (time() - $_SESSION['most_recent_activity_student'] > 4)
) {

    unset($_SESSION['most_recent_activity_student']);

}

if (isset($_SESSION['most_recent_activity_student'])) {
    include('includes/studentAd.php');


}


if (isset($_SESSION['most_recent_activity_student_error']) &&
    (time() - $_SESSION['most_recent_activity_student_error'] > 4)
) {

    unset($_SESSION['most_recent_activity_student_error']);

}

if (isset($_SESSION['most_recent_activity_student_error'])) {
    include('includes/studentnAd.php');


}

?>









<div class="col-lg-12">


<div class="panel panel-default">

<div class="panel-body">

<div class="page-header" style="margin-top: 0px">
    <h4> Add Students </h4>
</div>


<form action="student_function.php" method="post">


<div class="row">


    <div class="col-lg-12">

        <!-- <div class="col-lg-4">

            <div class="input-group">
        
                <input class="form-control" name="ID" type="text" placeholder="Student ID"
                       required="required">
            </div>


        </div> -->
        <div class="col-lg-4">

            <div class="input-group">
        
                <input class="form-control" name="f_name" type="text" placeholder="First Name"
                       required="required">
            </div>


        </div>

        <div class="col-lg-4">

            <div class="input-group">
        
                <input class="form-control" name="l_name" type="text" placeholder="Last Name"
                       required="required">
            </div>


        </div>


    </div>


</div>


<div class="row" style="margin-top: 10px;">


    <div class="col-lg-12">

        <div class="col-lg-4">

            <div class="input-group">
              
                <input class="form-control" name="address" type="text" placeholder="Address"
                       required="required">
            </div>


        </div>
        <div class="col-lg-4">

            <div class="input-group">
              
                <input class="form-control" name="contact" type="text" pattern="[0-9]*" placeholder="Contact"
                       required="required">
            </div>


        </div>

        <div class="col-lg-4">

            <div class="input-group">
               
                <input class="form-control" name="DoB" type="date" min="1900-01-01" max="2020-01-01" type="date"
                       placeholder="Date of birth"
                       required="required">
            </div>


        </div>


    </div>


</div>


<div class="row" style="margin-top: 10px;">


    <div class="col-lg-12">

        <div class="col-lg-4">

            <div class="input-group">
            
                <input class="form-control" name="DoJ" type="date" min="2012-01-01" max="2020-01-01" type="date"
                       placeholder="joined date"
                       required="required">
            </div>


        </div>
        <div class="col-lg-4">

            <div class="input-group">
             
                <select class="form-control" name="gender">

                    <option>male</option>
                    <option>female</option>
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