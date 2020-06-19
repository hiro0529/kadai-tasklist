<?php

require_once 'human.php';

class Main {
    static function start() {
        // インスタンスの生成
        $tanaka = new Human('田中 太郎', 25, "電車");
        $suzuki = new Human('鈴木 次郎', 30, '野球');
        $sato = new Human('佐藤 花子', 20, '映画');
        
        $tanaka->say().PHP_EOL;
        $tanaka->think().PHP_EOL;
        $suzuki->say().PHP_EOL;
        $suzuki->think().PHP_EOL;
        $sato->say().PHP_EOL;
        $sato->think().PHP_EOL;
    }
}

Main::start();
?>