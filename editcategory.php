<?php



include('classes/Category.php');

$cat_id = $_GET['cat_id'];
$category_object = new Category();

$category_object->setCategoryID($cat_id);

$main_data = $category_object->fetchcategory();

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
    <h4> Edit Category </h4>
</div>



<form action="categoryeditaction.php" method="post">



<div class="row">


    <div class="col-lg-12">


        <div class="col-lg-4" style="display: none;">

            <div class="input-group">
               
                <input class="form-control" name="temp_ID" type="text" placeholder="Category ID"
                       required="required" value="<?php echo($res['id']) ?>">
            </div>


        </div>


        <div class="col-lg-4">

            <div class="input-group">
                Category ID
                <input class="form-control" name="ID" type="text" placeholder="Category ID"
                       required="required" value="<?php echo($res['id']) ?>">
            </div>


        </div>
        <div class="col-lg-4">

            <div class="input-group">
               Category Name
                <input class="form-control" name="category_name" type="text" placeholder="Category Name"
                       required="required" value="<?php echo($res['c_name']) ?>">
            </div>


        </div>

        <div class="col-lg-4">

            <div class="input-group">
              Category Symbol
                <input class="form-control" name="category_symbol" type="text" placeholder="Category Symbol"
                       required="required" value="<?php echo($res['c_symbol']) ?>">
            </div>


        </div>








    </div>


</div>

<!-- 
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
                <input class="form-control" name="DoB" type="date" min="2012-01-01" max="2013-01-01" type="date" placeholder="DoB (YYYY-MM-DD)"
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



                  



                </select>
            </div>


        </div>

    </div>

</div> -->



<div class="row" style="margin-top: 25px;margin-bottom: 35px;">


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