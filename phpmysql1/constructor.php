
<?php
class Employee {

    public $name;
    public $position;

    function __construct($name,$position){
        $this->name = $name;
        $this->position = $position;

    }

    function Dispaly(){

        echo $this->name.":";
        echo "Your Psition Is ".$this->position."\n";

    }
}
$emp1 = new Employee("Dharmik","Manager");
$emp2 = new Employee("Sarman","Clarke");
$emp1->Dispaly();
$emp2->Dispaly();
?>