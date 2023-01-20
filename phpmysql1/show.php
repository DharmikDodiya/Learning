<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  // collect value of input field
  $fname = $_REQUEST['name'];
  if (empty($fname)) {
    echo "Name is empty";
  } else {
    echo $fname;
  }
}
?>