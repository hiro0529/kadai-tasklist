{"filter":false,"title":"main.php","tooltip":"/kadai-php-3/main.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":21,"column":2},"action":"insert","lines":["<?php","","require_once 'human.php';","","class Main {","    static function start() {","        // インスタンスの生成","        $tanaka = new Human('田中 太郎', 25, \"電車\");","        $suzuki = new Human('鈴木 次郎', 30, '野球');","        $sato = new Human('佐藤 花子', 20, '映画');","        ","        $tanaka->say().PHP_EOL;","        $tanaka->think().PHP_EOL;","        $suzuki->say().PHP_EOL;","        $suzuki->think().PHP_EOL;","        $sato->say().PHP_EOL;","        $sato->think().PHP_EOL;","    }","}","","Main::start();","?>"],"id":1}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":21,"column":2},"end":{"row":21,"column":2},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"hash":"cc351d67833d439c638b17c85abedf477845da42","timestamp":1591532418210}