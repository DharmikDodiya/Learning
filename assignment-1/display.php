<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body >

    <div class="container">
        <div class="text-center">
        <h1>Show Data</h1>
        </div>
        <h1></h1>
    <form action="" method="POST" enctype="multipart/form-data">
    <table class="table table-hover table-responsive table-striped">
            <thead>
                <tr class="text text-center">
                  
                    <th>BLOG NAME</th>
                    <th>BLOG DESCRIPTION</th>
                    <th>IMAGES</th>
                    <th>CATOGARY NAME</th>
                    <th>EDIT </th>
                    <th>DELETE</th>

                </tr>
            </thead>
            <tbody>
                    <?php

                    $conn = mysqli_connect("localhost", "root", "ztlab117", "test");

                    $query = "SELECT Blog.bid, Blog.bname, Blog.bdesc,Blog.image, catogary.cname
                    FROM Blog
                    INNER JOIN catogary
                    ON Blog.c_id=catogary.cid";
                    $query_run = mysqli_query($conn,$query);

                    while($row = mysqli_fetch_array($query_run))
                    {
                        ?>
                        <tr>
                           
                            <td><?php echo($row['bname']) ?></td>
                            <td><?php echo($row['bdesc']) ?></td>
                            <td> <img src="/../<?php echo $row[3] ?>" alt="" heigth="50px" width="50px"> </td>
                            <td><?php echo($row['cname']) ?></td>
                            <!-- <td><button type="button" id="editbtn" name="edit" class="btn btn-primary" data-id="<?php echo $row['bid'] ?>" >Edit</button></td> -->
                            <td><button type="button" id="deletebtn" name="delete" data-id="<?php echo $row['bid'] ?>" class="btn btn-danger glyphicon glyphicon-trash ">Delete</button></td>  

                            <td>
                            <!-- <button type="button" id="editbtn" name="edit" data-id="<?php echo $row['bid'] ?>" class="btn btn-success">Edit</button> -->
                            <a href="edit.php?id=<?php echo $row['bid'];?>" id="editbtn" class="glyphicon glyphicon-pencil btn btn-success" >Edit</a>

                            <!-- <a href="index.php" class="btn btn-primary edit" data-id="<?php echo $row['bid']?>">Edit</a> -->
                            </td>

                            <!-- <td>
                            <a href="edit.php?id=<?php echo $row['bid']; ?>">Edit</a>
                            </td> -->
                            <!-- <td>
                            <a href="delete.php?id=<?php echo $row["bid"]; ?>">Delete</a>
                            </td>  -->

                            <!-- <td>
                                <button class="btn-danger" id="deletebtn" data-id = "{$row['bid']}">Delete</button>
                            </td> -->

                    </tr>

                        <?php
                    }
                    ?>          
   
            </tbody>
    </table>
    </form>

    </div>
    <script src="js/jquery.js" ></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js" ></script>

   
</body>


</html>