<?php
$marks=78;      
    if ($marks<33){    
        echo "fail";    
    }    
    else if ($marks>=34 && $marks<45) {    
        echo "D grade";    
    }    
    else if ($marks>=45 && $marks<60) {    
       echo "C grade";   
    }    
    else if ($marks>=60 && $marks<80) {    
        echo "<h1>"."B grade"."</h1>";   
    }    
    else if ($marks>=80 && $marks<90) {    
        echo "A grade";    
    }  
    else if ($marks>=90 && $marks<100) {    
        echo "A+ grade";   
    }  
   else {    
        echo "Invalid input";    
    }    

?>