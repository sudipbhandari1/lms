<?php

include_once('classes/Books.php');

$bookId = $_GET['book_id'];
$book = new Books();

$book->setId($bookId);

$main_data = $book->editFetch();

$res = mysql_fetch_array($main_data);

include'includes/header.php';

?>



<div class="container" style="margin-top:30px">

<div class="row">


<div class="col-lg-12">



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
                <h4> Edit Books</h4>
            </div>







            <form action="bookEdit_action.php?id=<?php echo ($res['book_id']); ?>" method="post">
                <div class="col-lg-4">

                    <div class="input-group" style="margin-bottom: 15px;">
                      Title
                        <input class="form-control" name="title" type="text" placeholder="Title"
                               required="required" value="<?php echo ($res['title']); ?>">
                    </div>

                </div>


                <div class="col-lg-4">


                    <div class="input-group" style="margin-bottom: 15px;">
                       Author
                        <input class="form-control" name="author" type="text" placeholder="Author"
                               required="required" value="<?php echo ($res['author']); ?>">
                    </div>
                </div>


                <div class="col-lg-4" style="margin-bottom: 15px;">


                    <div class="input-group">
                      Publisher
                        <input class="form-control" name="publisher" type="text" placeholder="publisher"
                               required="required"  value="<?php echo ($res['Publisher']); ?>" >
                    </div>
                </div>


                <div class="row">

                    <div class="col-lg-12">


                        <div class="col-lg-4" style="margin-bottom: 15px;">


                            <div class="input-group">
                              Year
                                <input class="form-control" name="year" type="text" placeholder="Year"
                                       value="<?php echo ($res['Year']); ?>"required="required">
                            </div>
                        </div>


                        <div class="col-lg-4" style="margin-bottom: 15px;">


                            <div class="input-group">
                              Edition
                                <input class="form-control" name="edition" type="text" placeholder="Edition"
                                       value="<?php echo ($res['Edition']); ?>"    required="required">
                            </div>
                        </div>


                        <div class="col-lg-4" style="margin-bottom: 15px;">


                            <div class="input-group">
                              ISBN
                                <input class="form-control" name="ISBN" type="text" placeholder="ISBN"
                                  value="<?php echo ($res['ISBN']); ?>"  >
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


                                    $query ="SELECT `c_name` FROM category";
                                    $result = mysql_query($query);
                                    $num = mysql_num_rows($result);

                                    for ($j = 0; $j < $num; $j++) {

                                        $row1 = mysql_fetch_array($result);

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
                          Pages
                                <input class="form-control" name="pageNo" type="text" placeholder="page numbers"
                                       value="<?php echo ($res['pages']); ?>" >
                            </div>

                        </div>


                        <div class="col-lg-4" style="margin-bottom: 15px;">


                            <div class="input-group">
                          Web Link
                                <input class="form-control" name="weblink" type="text" placeholder="Weblink"
                                       value="<?php echo ($res['weblink']); ?>"   >
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="message">Summary<span class="help-required"></span></label>
                            <textarea rows="5" name="message" id="message" class="form-control required"
                                      role="textbox" aria-required="true" required="required"><?php echo ($res['summary']); ?>
                                      </textarea>
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

</div>


</div>


</div>


</body>

</html>