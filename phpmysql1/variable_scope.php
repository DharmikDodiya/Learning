<?php
    $name = "Dharmik";
    $num1 = 30;
    $num2 = 40;


    function Local_Variable(){
        $num = 24;
        echo "<br>"."Local Variable InSide The Function =".$num."</br>";
    }

    function Global_Variable(){
        global $name;
        echo "<br>"."Global Variable Insine The Function Using global Keyword =".$name."</br>";
    }

    function Global_Variable_Index(){
        $sum = $GLOBALS['num1'] + $GLOBALS['num2'];
        echo "<br>"."Using globals Keyword  = ".$sum."</br>";
    }

    function Static_Variable(){
        static $count = 0;
        $count++;
        echo "<br>"."Static variable Count Increment =".$count."</br>";
    }




Local_Variable();
Global_Variable();
echo "Global Variable Outside The Function =".$name;

Global_Variable_Index();

Static_Variable();

Static_Variable();

Static_Variable();
?>