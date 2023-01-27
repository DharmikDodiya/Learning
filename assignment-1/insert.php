
<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
   
        <?php
 
 $conn = mysqli_connect("localhost", "root", "ztlab117", "test");
         
        // Check connection
        //if (isset($_POST['submit'])) {
            if(isset($_POST['save'])){
            
            $blogname =  $_REQUEST['blog_name'];
            $blogdesc = $_REQUEST['blog_desc'];
            $catid = $_REQUEST['select_item'];
            // echo $catid;
            // $filename = $_FILES["img_data"]["name"];
            // $tempname = $_FILES["img_data"]["tmp_name"];
            // echo "<script>
            //     console.log($filename);
            // </script>"
            // $folder = "images/".$filename;
            // $folder = "images/pjp.jpg"; 
            // Get all the submitted data from the form
            // echo $sql = "INSERT INTO Blog(bname,bdesc,image,c_id) VALUES ('$blogname','$blogdesc','$folder','$catid')";
            // Execute query
            echo $sql = "INSERT INTO Blog(bname,bdesc,c_id) VALUES ('$blogname','$blogdesc','$catid')";
            $qry =mysqli_query($conn, $sql);
        }else{
            echo "not inserted";
        }
        //    {
        //     echo 1;
        //    }
        //    else
        //    {
        //     echo 0;
        //    }
            
            // if (move_uploaded_file($tempname, $folder)) {
            //     $qry =mysqli_query($conn, $sql);
            //     echo "<h3>  Image uploaded successfully!</h3>";
            // } else {
            //     echo "<h3>  Failed to upload image!</h3>";
            // }
        ?>
 
</body>

</html>








