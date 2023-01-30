
<?php
include ("database.php");
$id = $_GET['id'] ?? "";

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->

    
  </head>
  <body>
    
    
    <div class="container">
      <h1 class="text-center"> Create Blog </h1>
      <form method="post" action="#" enctype="multipart/form-data">
        <?php
       
            // $query = "SELECT Blog.bid ,Blog.bname, Blog.bdesc,Blog.image, catogary.cname
            // FROM Blog
            // INNER JOIN catogary
            // ON Blog.c_id=catogary.cid
            // where bid = $id";
           


            $query = "select * from Blog where bid = $id";
            $query_run = mysqli_query($conn,$query);
            $row = mysqli_fetch_array($query_run);
        ?>

        <div class="form-group">
          <label for="text">Blog Name</label>
          <input type="text" name="blogname" class="form-control" id="blogname" value = "<?php if(isset($row)) echo $row[1] ?>" placeholder="Enter Blog Name" required>
        </div>
        <div class="form-group">
          <label for="text"> Blog Description</label><br>
          <textarea class="span6 container col-lg-12" name="blogdesc"  id="blogdesc" rows="3" placeholder="Enter Blog Discription" required><?php if(isset($row)) echo $row[2] ?></textarea>
        </div>
           
        <!-- <div class="form-group">
           <label for="text"> Choose Image</label>  
           <div class="d-flex justify-content-center mb-4">
            <img src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg"
            class="rounded-circle" alt="example placeholder" style="width: 200px;" />
        </div>
        <div class="d-flex justify-content-center">
            <div class="btn btn-primary btn-rounded">
                <label class="form-label text-white m-1" for="customFile2">Choose file</label>
                <input type="file" class="form-control d-none" id="customFile2" />
            </div>
        </div>  -->
  
        <div>
        <label class="form-label" for="customFile">Choose Image</label>
        <input type="file" name="imgdata"  value = "<?php echo $row['image'] ?>" class="form-control" id="imgdata"/>
        </div>
  
        <div class="form-group">
          <label class="form-label" for="customFile">Select catogary</label><br>
          <select name="selectitem" id="selectitem"   class="form-select form-select-lg col-lg-12" aria-label=".form-select-lg example" selectitem>
         
          <option>Select Catogary</option>
          <?php
              $getidsql = "select cid, cname from catogary";
              $result = mysqli_query($conn, $getidsql);
              while($row1 = mysqli_fetch_array($result)){
                if($row1[0] == $row['c_id']){
                 echo "<option value='$row1[0]' selected >".$row1[1]."</option>";
              }
              
                echo "<option value='$row1[0]' >".$row1[1]."</option>";
              
            }

          	?>
          </select>
        </div>
  
        <div class="checkbox col-lg-12">
          <label>
            <input type="checkbox"> Check me out
          </label>
        </div>

        
            
              <button type="submit" value="update" name ="edit" class="btn btn-success col-lg-12" >UPDATE</button>

      
      </form>
    </div>
    



  
    <script src="js/jquery.js" ></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js" ></script>
      <br><br>
    <!-- <div id="showdata">


    </div> -->
  </body>



</html>


<?php 
	 if (isset($_POST['edit'])) {
            
		$conn = mysqli_connect("localhost", "root", "ztlab117", "test");

		$blogname =  $_REQUEST['blogname'];

		$blogdesc = $_REQUEST['blogdesc'];
		
		$catid = $_REQUEST['selectitem'];
		echo $catid;
		$filename = $_FILES["imgdata"]["name"];
		$tempname = $_FILES["imgdata"]["tmp_name"];
		$folder = "images/".$filename;
	
	 
		// Get all the submitted data from the form
		
		// $update="update Blog set bname='".$blogname."',
		// 	bdesc='".$blogdesc."', image='".$folder."',
		// 	c_id='".$catid."' where bid='$id'";

      $update="update Blog set bname='".$blogname."',
			bdesc='".$blogdesc."',image = '".$folder."',c_id='".$catid."' where bid='$id'";

    //  if( $result = mysqli_query($conn, $update))
    //  {
     
    //  }
		// Execute query
   
    if (move_uploaded_file($tempname, $folder)) {
      $result = mysqli_query($conn, $update);
			header ("location: index.php");
		} else {
			echo "<h3>  Failed to upload image!</h3>";
		}
		//mysqli_close($conn);
	}

	
?>