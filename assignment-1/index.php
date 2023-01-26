

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
      <form action="insert.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="text">Blog Name</label>
          <input type="text" name="bname" class="form-control" id="blogname" placeholder="Enter Blog Name" required>
        </div>
        <div class="form-group">
          <label for="text"> Blog Description</label><br>
          <textarea class="span6 container col-lg-12" name="bdes" id="blogdesc" rows="3" placeholder="Enter Blog Discription" required></textarea>
        </div>
  
        <div class="form-group">
           <!-- <label for="text"> Choose Image</label>  -->
          <!-- <div class="d-flex justify-content-center mb-4">
            <img src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg"
            class="rounded-circle" alt="example placeholder" style="width: 200px;" />
        </div>
        <div class="d-flex justify-content-center">
            <div class="btn btn-primary btn-rounded">
                <label class="form-label text-white m-1" for="customFile2">Choose file</label>
                <input type="file" class="form-control d-none" id="customFile2" />
            </div>
        </div> --> 
  
        
        <label class="form-label" for="customFile">Choose Image</label>
        <input type="file" name="imgfile" class="form-control" id="imgdata" required/>
        </div>
  
        <div class="form-group">
          <label class="form-label" for="customFile">Select catogary</label><br>
          <select name="selectitm" id="selectitem" class="form-select form-select-lg col-lg-12" aria-label=".form-select-lg example" required>
            <option >Select Catogary</option>
            <option value="1">Helth And Fitness</option>
            <option value="10">Trevel</option>
            <option value="4">Personal</option>
            <option value="2">Sports</option>
            <option value="5">News</option>
            <option value="6">Movie</option>
            <option value="7">Political</option>
            <option value="8">Music</option>
            <option value="3">Business</option>
            <option value="9">Religion</option>
          </select>
        </div>
  
        <div class="checkbox col-lg-12">
          <label>
            <input type="checkbox"> Check me out
          </label>
        </div>
        <button type="submit" name="insert" class="btn btn-primary col-lg-12">Submit</button>
      </form>
    </div>
   



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js" ></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js" ></script>
      <br><br>
    
  </body>


  <?php
  include_once ("display.php");
  ?>
</html>


<script>
    // $(document).ready(function(){
    //     function fetch_data(){
    //         var action = "fetch";
    //         $.ajax({
    //             url : "insert.php";
    //             method : "POST";
    //             data : {action:insert},
    //             success : function(data)
    //             {
    //               $("#blogname").html(data);
    //               $("#blogdesc").html(data);
    //               $("#imgdata").html(data);
    //               $("#selectitem").html(data);
    //             }

    //         })
    //     }
    // });
</script>

