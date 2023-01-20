<?php
class Myclass
    {
 
        function __construct()
        {
            echo "In constructor, ";
            $this->name = "Class object! ";
        }
 
        function __destruct()
        {
            echo "destroying " . $this->name . "\n";
        }
    }
$obj1 = new Myclass();

?>