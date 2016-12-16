<?php

include ('includes/header.php');

include('classes/Category.php');

?>



<div class="container ">

<?php

if (isset($_SESSION['most_recent_activity']) &&
    (time() -   $_SESSION['most_recent_activity'] > 4)) {

    unset($_SESSION['most_recent_activity']);

}

if (isset($_SESSION['most_recent_activity'])){
    include('includes/bookadded.php');


}


if (isset($_SESSION['most_recent_activity_error']) &&
    (time() -   $_SESSION['most_recent_activity_error'] > 4)) {

    unset($_SESSION['most_recent_activity_error']);

}

if (isset($_SESSION['most_recent_activity_error'])){
    include('includes/bookNotadded.php');


}




?>
<div class="col-lg-12">


    <div class="panel panel-default">

        <div class="panel-body">

            <div class="page-header" style="margin-top: 0px">
                <h4> Add Books</h4>
            </div>







            <form action="book_action.php" method="post">
                <div class="col-lg-4">

                    <div class="input-group" style="margin-bottom: 15px;">
                        <input class="form-control" name="title" type="text" placeholder="Title"
                               required="required">
                    </div>

                </div>


                <div class="col-lg-4">


                    <div class="input-group" style="margin-bottom: 15px;">
                       
                        <input class="form-control" name="author" type="text" placeholder="Author"
                               required="required">
                    </div>
                </div>


                <div class="col-lg-4" style="margin-bottom: 15px;">


                    <div class="input-group">
                       
                        <input class="form-control" name="publisher" type="text" placeholder="publisher"
                               required="required">
                    </div>
                </div>


                <div class="row">

                    <div class="col-lg-12">


                        <div class="col-lg-4" style="margin-bottom: 15px;">


                            <div class="input-group">
                                
                                <input class="form-control" name="year" type="text" placeholder="Year"
                                       required="required">
                            </div>
                        </div>


                        <div class="col-lg-4" style="margin-bottom: 15px;">


                            <div class="input-group">
                               
                                <input class="form-control" name="edition" type="text" placeholder="Edition"
                                       required="required">
                            </div>
                        </div>


                        <div class="col-lg-4" style="margin-bottom: 15px;">


                            <div class="input-group">
                               
                                <input class="form-control" name="ISBN" type="text" placeholder="ISBN"
                                    >
                            </div>
                        </div>


                    </div>

                </div>


                <div class="row">

                    <div class="col-lg-12">



                        <div class="col-lg-4" style="margin-bottom: 15px;">


                            <div class="input-group" style="float: left">

                                <select name="category" class="form-control">
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
                            <label for="input" style="margin-left: 10%;padding-top: 5px;">Category</label>
                        </div>


                        <div class="col-lg-4" style="margin-bottom: 15px;">


                            <div class="input-group">
                              
                                <input class="form-control" name="pageNo" type="text" placeholder="page numbers"
                                    >
                            </div>

                        </div>


                        <div class="col-lg-4" style="margin-bottom: 15px;">


                            <div class="input-group">
                              
                                <input class="form-control" name="weblink" type="text" placeholder="Weblink"
                                    >
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="message">Summary</label>
                            <textarea rows="5" name="message" id="message" class="form-control required"
                                      role="textbox" aria-required="true" required="required"></textarea>
                        </div>


                    </div>

                </div>

                <button type="submit" class="btn btn-success btn-sm">
                   Submit

                </button>

            </form>


        </div>


    </div>


</div>





</div>




</body>

</html>