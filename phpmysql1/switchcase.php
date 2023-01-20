<?php

$choice = 1;

switch($choice){

    case 0:
		echo "$choice equals 0 ";
    break;
    case 1:
        echo "$choice equals 1 ";
    break;
    case 2:
        echo "$choice equals 2 ";
    break;
    default:
        echo "$choice not equals";
            
    }
    echo "<br>";

    $ch = "MCA";  
    switch ($ch)  
    {     
        case "BCA":   
            echo "BCA is 3 years course";  
            break;  
        case "Bsc":   
            echo "Bsc is 3 years course";  
            break;  
        case "MCA":   
            echo "MCA is 2 years course";  
            break;  
        case "B.Arch":   
            echo "B.Arch is 5 years course";  
            break;  
        default:   
            echo "Wrong Choice";  
            break;  
    } 
    

?>