{"filter":false,"title":"human.php","tooltip":"/kadai-php-3/human.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":17,"column":2},"action":"insert","lines":["<?php","require_once 'animal.php';","require_once 'thinkable.php';","","class Human extends Animal  {","    use Thinkable;","    public $hobby;","    ","    function __construct($name,$age,$hobby) {","         parent::__construct($name,$age) ;","        $this->hobby = $hobby;","        }","    ","    function think() {","        print \"私は\".$this->hobby . \"について考えています。\".PHP_EOL;","    }","}","?>"],"id":1}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":17,"column":2},"end":{"row":17,"column":2},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"hash":"d8caf7d64c4cdd351cf00257b186f95354148e00","timestamp":1591532405746}