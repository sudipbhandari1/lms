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
                <h4> Categories </h4>
            </div>

            <div class="col-lg-4">

            </div>

            <div class="col-lg-4">


                <?php

                if (isset($_SESSION['most_recent_activity_del_category']) &&
                    (time() -   $_SESSION['most_recent_activity_del_category'] > 4)) {

                    unset($_SESSION['most_recent_activity_del_category']);

                }

                if (isset($_SESSION['most_recent_activity_del_category'])){
                    include('includes/categoryDeleted.php');


                }


                if (isset($_SESSION['most_recent_activity_del_error_category']) &&
                    (time() -   $_SESSION['most_recent_activity_del_error_category'] > 4)) {

                    unset($_SESSION['most_recent_activity_del_error_category']);

                }

                if (isset($_SESSION['most_recent_activity_del_error_category'])){
                    include('includes/categorynAd.php');


                }


                if (isset($_SESSION['most_recent_activity_category_edited']) &&
                    (time() -   $_SESSION['most_recent_activity_category_edited'] > 4)) {

                    unset($_SESSION['most_recent_activity_category_edited']);

                }

                if (isset($_SESSION['most_recent_activity_category_edited'])){
                    include('includes/categoryEdited.php');


                }


                if (isset($_SESSION['most_recent_activity_category_error']) &&
                    (time() -   $_SESSION['most_recent_activity_category_error'] > 4)) {

                    unset($_SESSION['most_recent_activity_category_error']);

                }

                if (isset($_SESSION['most_recent_activity_category_error'])){
                    include('includes/categoryNotEdited.php');


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
                <th>Category ID</th>
                <th>Category Name</th>
                <th>Category Symbol</th>
                <th>Edit</th>
                <th>Delete</th>



            </tr>
            </thead>







            <tbody>





            <?php

            include ('classes/category.php');

            $categoryview_object = new category();


            $data= $categoryview_object->viewcategory();
            $num = mysql_num_rows($data);

            for ($j = 0; $j < $num; $j++) {

                $row1 = mysql_fetch_array($data);







                ?>

                <tr>
                    <td><?php echo $row1['id'] ?></td>
                    <td><?php echo $row1['c_name']?></td>
                    <td><?php echo $row1['c_symbol'] ?></td>
                    
                    <td class="center">
                        <a style="text-decoration: none;color:inherit"
                           href="editcategory.php?cat_id=<?php echo($row1['id']) ?>">
                            Edit
                        </a>


                    </td>
                    <td class="center">


                        <a title="delete this item" href="<?php echo $base_url.'deletecategory.php?id='.$row1['id']; ?>">
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