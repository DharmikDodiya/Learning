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
    <title>Blog table</title>

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
      

          <form <?php if($id!=""){ ?>id="formdata" <?php }else{?> id="form-data" <?php }?>>
          
      
      
        <?php
           if($id !=""){
            // $query = "SELECT Blog.bid ,Blog.bname, Blog.bdesc,Blog.image, catogary.cname
            // FROM Blog
            // INNER JOIN catogary
            // ON Blog.c_id=catogary.cid
            // where bid = $id";
            // $query_run = mysqli_query($conn,$query);
            // $row = mysqli_fetch_array($query_run);
            $query = "select * from Blog where bid = $id";
            $query_run = mysqli_query($conn,$query);
            $row = mysqli_fetch_array($query_run);
           }
        ?>

        <div class="form-group">
          <label for="text">Blog Name</label>
          <input type="text" name="blogname" class="form-control" id="blogname" value = "<?php if(isset($row)) echo $row[1] ?>" placeholder="Enter Blog Name" required>
        </div>
        <div class="form-group">
          <label for="text"> Blog Description</label><br>
          <textarea class="span6 container col-lg-12" name="blogdesc"  id="blogdesc" rows="3" placeholder="Enter Blog Discription" required><?php if(isset($row)) echo $row[2] ?></textarea>
        </div>
           
        <div class="form-group">  
        <label class="form-label" for="customFile">Choose Image</label>
        <input type="file" name="imgdata"  value = "<?php echo $row['image'] ?>" class="form-control" id="imgdata" required/>
        </div>
  
        <div class="form-group">
          <label class="form-label" for="customFile">Select catogary</label><br>
          <?php
                  $getidquery = "SELECT cid , cname form catogary";
                  $queryrun = mysqli_query($conn,$getidquery);
          ?>
          <select name="selectitem" id="selectitem"  class="form-select form-select-lg col-lg-12" aria-label=".form-select-lg example" required>
         
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
            <?php
              if($id != ""){
            ?>
             <input type="submit" id="edbtn" value="Update" name ="upsubmit"  class="btn btn-success col-lg-12" />
            <?php
              }else{
            ?>
              <input type="submit" id="save" value="SAVE" name ="submit" class="btn btn-primary col-lg-12" />
            <?php  
          
              }
            ?>
            </div>
      </form>
    </div>
    <div id="table-data">
    </div>

    <div id="model">
      <div id="model-form"> 
            <h2>Edit Form</h2>
      </div>

    </div>
   



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js" ></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js" ></script>
  
    <script>

      $(document).ready(function(){
        
        // ======================dispaly data with ajax========================
        function loadData(){
          $.ajax({
            url : "display.php",
            type : "POST",
            success : function(data){
              $("#table-data").html(data);
            }
          });
        }
        loadData();

        // ===================save data with ajax======================


        $("#form-data").on("submit",function(e)
        {
        e.preventDefault();
        var formdata = new FormData(this);
        $.ajax({
            url: "insert.php",
            type:"POST",
            data : formdata,
            contentType : false,
            processData : false,
            success : function(data){
              $('#form-data').trigger('reset');
              loadData();
        }});
      });

      // =======================delete data using ajax=======================

      $(document).on('click',"#deletebtn",function(){
          var blogid = $(this).data("id");
          if(confirm("Are You Sure")){;
         $.ajax({
            url : "delete.php",
            type : "POST",
            data : {id : blogid},
            success : function(data){
              loadData();
            }
          })
        }else{
          return false;
        }
      });


      //=========================Edit Rescord Using Ajax======================


    $("#edbtn").on("submit",function(e)
        {
        e.preventDefault();
        var formdata = new FormData("form-data");
        $.ajax({
            url: "edit.php",
            type:"POST",
            data : formdata,
            contentType : false,
            processData : false,
            success : function(data){
              $('#form-data').trigger('reset');
              loadData();
        }});
      });

   
});




    

</script>

  </body>
</html>

