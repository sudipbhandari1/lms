<?php

include 'includes/header.php';

?>



<div class="container" style="margin-top: 3%">

<div class="row">

<div class="col-lg-12">



<div class="col-lg-12">

    <div class="panel panel-default">

        <div class="panel-body">
            <div class="page-header" style="margin-top: 0px">
                <h4> Add Category</h4>
            </div>


            <form action="category_action.php" method="post">
                <div class="col-lg-6">

                    <div class="input-group" style="margin-bottom: 15px;">
                        <input class="form-control" name="c_name" type="text" placeholder="category name"
                               required="required">
                    </div>

                </div>


                <div class="col-lg-6">

                    <div class="input-group" style="margin-bottom: 15px;">
                        <input class="form-control" name="c_id" type="text" placeholder="category symbol eg:sci">
                    </div>
                </div>




                <div class="row">

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="message">Description<span class="help-required"></span></label>
                            <textarea rows="5" name="message" id="message" class="form-control required"
                                      role="textbox"></textarea>
                        </div>
                    </div>

                </div>

                <button type="submit"  class="btn btn-success btn-sm">
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