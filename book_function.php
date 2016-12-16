<?php

include('classes/Books.php');

$category = $_POST['category'];

$books = new Books();


if ($category != 'All') {

    $books->setCategory($category);

}
include 'includes/header.php';

?>







<div class="container" >

<div class="row">


<div class="col-lg-12">


<div class="col-lg-12">


<div class="panel panel-default">

<div class="panel-heading">Search Results</div>
<div class="panel-body" style="padding: 10px;">

<div class="row">

    <div class="col-lg-12" style="margin-bottom: 10px;">

        <div class="col-lg-4">



                        <span>Category Name :   <?php if ($category == 'All') {
                                echo "--";
                            } else {
                                echo($category);
                            }

                            ?></span>

        </div>


        <div class="col-lg-4">


            No of Books :


                            <span class="badge"> <?php if ($category == 'All') {

                                    $data = $books->allBook();
                                    $num = mysql_num_rows($data);
                                    echo $num;

                                } else {

                                    $data = $books->bookList();
                                    $num = mysql_num_rows($data);
                                    echo $num;
                                }
                                ?>   </span>


        </div>


        <div class="col-lg-4" style="padding-top: 5px;">



                                    <span class="label label-info">
                                   <a href="booklistform.php" style="text-decoration: none; color: white;">Return to
                                       previous menu</a>

                                   </span>


        </div>


    </div>

</div>


<table class="table">
    <thead>
    <tr>
        <th>Sn.</th>
        <th>Title</th>
        <th>Author</th>
        <th>year</th>
        <th>Edition</th>
        <th>Publisher</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>

    <?php

    if ($category == 'All') {

        $data = $books->allBook();
        $num = mysql_num_rows($data);
        for ($j = 0; $j < $num; $j++) {

            $row1 = mysql_fetch_array($data);

            ?>


            <tr>
                <td> <?php echo($j + 1); ?>  </td>
                <td><?php echo($row1['title']); ?></td>
                <td><?php echo($row1['author']); ?></td>
                <td><?php echo($row1['Year']); ?></td>
                <td><?php echo($row1['Edition']); ?></td>
                <td><a style="text-decoration: none;color:inherit"
                       href="editbook.php?book_id=<?php echo($row1['book_id']) ?>">

                        Edit
                    </a>
                </td>
                <td>



                    <a title="delete this item" href="<?php echo $base_url.'deleteBook.php?id='.$row1['book_id']; ?>">
                        <span >Delete</span>
                    </a>


                </td>

            </tr>

        <?php
        }


    }



    ?>



    <?php

    if ($category != 'All') {

        $data = $books->bookList();
        $num = mysql_num_rows($data);
        for ($j = 0; $j < $num; $j++) {

            $row2 = mysql_fetch_array($data);

            ?>





            <tr>
                <td> <?php echo($j + 1); ?>  </td>
                <td><?php echo($row2['title']); ?></td>
                <td><?php echo($row2['author']); ?></td>
                <td><?php echo($row2['Year']); ?></td>
                <td><?php echo($row2['Edition']); ?></td>
                <td><?= $row2['Publisher'] ?></td>
                <td>&nbsp;&nbsp;<a style="text-decoration: none;color:inherit"
                                   href="editbook.php?book_id=<?php echo($row2['book_id']) ?>">

                       Edit
                    </a>


                </td>
                <td>  &nbsp;&nbsp;<a style="text-decoration: none;color:inherit"
                                   href="deletebook.php?book_id=<?php echo($row2['book_id']) ?>">
                        Delete
                    </a>

                </td>

            </tr>

        <?php
        }


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

</body>

</html>