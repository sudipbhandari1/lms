<?php

include 'includes/header.php';

include('classes/Category.php');

?>




<div class="container" style="margin-top:30px">

<div class="row">


<div class="col-lg-12">


<?php

if (isset($_SESSION['most_recent_activity_del']) &&
    (time() -   $_SESSION['most_recent_activity_del'] > 4)) {

    unset($_SESSION['most_recent_activity_del']);

}

if (isset($_SESSION['most_recent_activity_del'])){
    include('includes/deleted.php');


}

if (isset($_SESSION['most_recent_activity_del_error']) &&
    (time() -   $_SESSION['most_recent_activity_del_error'] > 4)) {

    unset($_SESSION['most_recent_activity_del_error']);

}

if (isset($_SESSION['most_recent_activity_del_error'])){
    include('includes/notDeleted.php');


}

?>









<div class="col-lg-12">



    <div class="panel panel-default">

        <div class="panel-body">

            <div class="page-header" style="margin-top: 0px">
                <h4> Book list by category </h4>
            </div>







            <form action="book_function.php" method="post">
<div class="row">

    <div class="col-lg-12">
        <p>Search Books by Category</p>

    </div>
</div>


                <div class="row">

                    <div class="col-lg-12">



                        <div class="col-lg-12 input-group" style="margin-bottom: 15px;">


                            <div class="input-group">

                                <select name="category" class="form-control" style="width: 200%">
                                    <option> All </option>

                                    <?php


                                    $data = new Category();

                                    $temp = $data->categoryValue();

                                    $num = mysql_num_rows($temp);


                                    for ($j = 0; $j < $num; $j++) {

                                        $row1 = mysql_fetch_array($temp);

                                        ?>

                                        <option> <?php  echo($row1['c_name']); ?></option>;

                                    <?php

                                    }

                                    ?>
                                </select>






                            </div>

                        </div>




                    </div>

                </div>


                <div class="row">

                    <div class="col-lg-12">



                            <button type="submit" class="btn btn-success btn-sm">
                                Search
                            </button>




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