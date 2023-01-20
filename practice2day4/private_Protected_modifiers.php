<?php
class Fruits {
  public $name;
  public $color;
  public $weight;

  function set_name($n) { 
     $this->name = $n;
     echo $this->name;
  }
  protected function set_color($n) { 
    $this->color = $n;
  }
  private function set_weight($n) { 
    $this->weight = $n;
  }
}

$mango = new Fruits();
$mango->set_name('Mango'); // OK
// $mango->set_color('Yellow'); // ERROR
// $mango->set_weight('300'); // ERROR
?>