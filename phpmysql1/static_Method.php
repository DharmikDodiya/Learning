<?php


class Myclass{
    static $count=0;
    function __construct(){
       self::$count++;
    }
    static function showcount(){
       echo "count = " . self::$count;
    }
 }
 $a=new Myclass();
 $b=new Myclass();
 $c=new Myclass();
 Myclass::showcount();

?>