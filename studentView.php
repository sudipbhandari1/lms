<?php

include 'includes/header.php';

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
                <h4> Students </h4>
            </div>

            <div class="col-lg-4">

            </div>

            <div class="col-lg-4">


                <?php

                if (isset($_SESSION['most_recent_activity_del_student']) &&
                    (time() -   $_SESSION['most_recent_activity_del_student'] > 4)) {

                    unset($_SESSION['most_recent_activity_del_student']);

                }

                if (isset($_SESSION['most_recent_activity_del_student'])){
                    include('includes/studentDeleted.php');


                }


                if (isset($_SESSION['most_recent_activity_del_error_student']) &&
                    (time() -   $_SESSION['most_recent_activity_del_error_student'] > 4)) {

                    unset($_SESSION['most_recent_activity_del_error_student']);

                }

                if (isset($_SESSION['most_recent_activity_del_error_student'])){
                    include('includes/studentnAd.php');


                }


                if (isset($_SESSION['most_recent_activity_student_edited']) &&
                    (time() -   $_SESSION['most_recent_activity_student_edited'] > 4)) {

                    unset($_SESSION['most_recent_activity_student_edited']);

                }

                if (isset($_SESSION['most_recent_activity_student_edited'])){
                    include('includes/studentEdited.php');


                }


                if (isset($_SESSION['most_recent_activity_student_error']) &&
                    (time() -   $_SESSION['most_recent_activity_student_error'] > 4)) {

                    unset($_SESSION['most_recent_activity_student_error']);

                }

                if (isset($_SESSION['most_recent_activity_student_error'])){
                    include('includes/studentNotEdited.php');


                }



                ?>

            </div>


        </div>

    </div>


</div>


<div class="row">

    <div class="col-lg-12">

        <table id="example" class="table table-bordered table-striped" cellspacing="0" width="100%"">
            <thead>
            <tr>
                <th>Sudent ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Gender</th>
                <th>DoB</th>
                <th>Joined Date</th>
                <th>Edit</th>
                <th>Delete</th>



            </tr>
            </thead>







            <tbody>





            <?php

            include ('classes/Students.php');

            $student = new Students();


            $data= $student->viewStudets();
            $num = mysql_num_rows($data);

            for ($j = 0; $j < $num; $j++) {

                $row1 = mysql_fetch_array($data);







                ?>

                <tr>
                    <td><?php echo $row1['student_id'] ?></td>
                    <td><?php echo $row1['f_name']." ".$row1['l_name'] ?></td>
                    <td><?php echo $row1['adress']?></td>
                    <td><?php echo $row1['contact'] ?></td>
                    <td><?php echo $row1['gender'] ?></td>
                    <td><?php echo $row1['DoB'] ?> </td>
                    <td><?php echo $row1['joined_date'] ?> </td>
                    <td class="center">
                        <a style="text-decoration: none;color:inherit"
                           href="editStudent.php?std_id=<?php echo($row1['student_id']) ?>">
                            Edit
                        </a>


                    </td>
                    <td class="center">


                        <a title="delete this item" href="<?php echo $base_url.'deleteStudents.php?id='.$row1['student_id']; ?>">
                        <span >Delete</span>
                    </a>
                        



                    </td>

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