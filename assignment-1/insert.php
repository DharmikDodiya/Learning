
<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
   
        <?php
 
 $conn = mysqli_connect("localhost", "root", "ztlab117", "test");
         
           $blogname =  $_REQUEST['blogname'];
            $blogdesc = $_REQUEST['blogdesc'];
            $catid = $_REQUEST['selectitem'];
           
            $filename = $_FILES["imgdata"]["name"];
            $tempname = $_FILES["imgdata"]["tmp_name"];
           
            $folder = "images/".$filename;
        
            $sql = "INSERT INTO Blog VALUES (null,'$blogname','$blogdesc','$folder','$catid')";
            // Execute query
          
            if (move_uploaded_file($tempname, $folder)) {
               if( mysqli_query($conn, $sql))
                echo 1;
             else {
                echo $folder;
            }
        }
        ?>
 
</body>

</html>








