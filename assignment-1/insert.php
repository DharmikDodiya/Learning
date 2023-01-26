
<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
   
        <?php
 
        
         
        // Check connection
        if (isset($_POST['insert'])) {
 
            $conn = mysqli_connect("localhost", "root", "ztlab117", "test");

            $blogname =  $_REQUEST['bname'];
            $blogdesc = $_REQUEST['bdes'];
           
            $catid = $_REQUEST['selectitm'];
            echo $catid;
            $filename = $_FILES["imgfile"]["name"];
            $tempname = $_FILES["imgfile"]["tmp_name"];
            $folder = "images/".$filename;
         
          
         
            // Get all the submitted data from the form
            
            $sql = "INSERT INTO Blog  VALUES (null,'$blogname',
            '$blogdesc','$folder','$catid')";
            // Execute query
           
         
            
            if (move_uploaded_file($tempname, $folder)) {
                mysqli_query($conn, $sql);
                echo "<h3>  Image uploaded successfully!</h3>";
            } else {
                echo "<h3>  Failed to upload image!</h3>";
            }
        }
       mysqli_close($conn);

        // Performing insert query execution
        // here our table name is college
       
         
        // if(mysqli_query($conn, $sql)){
        //     echo "<h3>data stored in a database successfully."
        //         . " Please browse your localhost php my admin"
        //         . " to view the updated data</h3>";
 
        //     echo nl2br("\n$blogname\n $blogdesc\n "
        //         . "$bimg\n $catid");
        // } else{
        //     echo "ERROR: Hush! Sorry $sql. "
        //         . mysqli_error($conn);
        // }
         
        // Close connection

        // if (isset($_POST['edit'])) {
        //     // $id = $_POST['id'];
        //     // $name = $_POST['name'];
        //     // $address = $_POST['address'];
        
        //     mysqli_query($conn, "UPDATE info SET bname='$blogname', bdes='$blogdesc', bimgWHERE id=$id");
        //     $_SESSION['message'] = "Address updated!"; 
        //     header('location: index.php');
        // }

        header ("location: index.php")
        ?>
 
</body>

</html>








