<!-- Class And Object Program -->
<?php
class myclass{
    private $name = "Hello PHP";
    public function Dispaly(){
        echo $this->name;
    }
}

$obj1 = new myclass();
$obj1->Dispaly();
?>

