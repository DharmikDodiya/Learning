<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['id'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM info WHERE bid=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$blogname =  $_REQUEST['bname'];
            $blogdesc = $_REQUEST['bdes'];
           
            $catid = $_REQUEST['selectitm'];
            $folder = "images/".$filename;

            

		}
	}
?>