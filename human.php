<?php
require_once 'animal.php';
require_once 'thinkable.php';

class Human extends Animal  {
    use Thinkable;
    public $hobby;
    
    function __construct($name,$age,$hobby) {
         parent::__construct($name,$age) ;
        $this->hobby = $hobby;
        }
    
    function think() {
        print "私は".$this->hobby . "について考えています。".PHP_EOL;
    }
}
?>