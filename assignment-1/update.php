<?php 
    
   
           
       $conn = mysqli_connect("localhost", "root", "ztlab117", "test");
        $edid = $_REQUEST['edid'];
       $blogname =  $_REQUEST['blogname'];

       $blogdesc = $_REQUEST['blogdesc'];
       
       $catid = $_REQUEST['selectitem'];
    
       $filename = $_FILES["imgdata"]["name"];
       $tempname = $_FILES["imgdata"]["tmp_name"];
       $folder = "images/".$filename;
   
    
       // Get all the submitted data from the form
       
       // $update="update Blog set bname='".$blogname."',
       // 	bdesc='".$blogdesc."', image='".$folder."',
       // 	c_id='".$catid."' where bid='$id'";

     $update="update Blog set bname='".$blogname."',
           bdesc='".$blogdesc."',image = '".$folder."',c_id='".$catid."' where bid='$edid'";
        echo $update;
   //  if( $result = mysqli_query($conn, $update))
   //  {
    
   //  }
       // Execute query
  
   if (move_uploaded_file($tempname, $folder)) {
     $result = mysqli_query($conn, $update);
          // header ("location: index.php");
       } else {
     alert("please upload Image");
       }
       //mysqli_close($conn);
   

   
?>