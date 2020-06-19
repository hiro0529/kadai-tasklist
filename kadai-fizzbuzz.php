<?php
// 関数の定義
function FizzBuzz($i){
    if ($i % 3 === 0 && $i % 5 === 0) {
    return "FizzBuzz" ;
  } elseif ($i % 5 === 0) {
    return "Buzz" ;
  } elseif ($i % 3 === 0) {
    return "Fizz" ;
  } else {
    return $i;
  }
}
 $max = 100;
for ($i = 1; $i <= $max; $i++) {
  $result = FizzBuzz($i);
  print $result. PHP_EOL;
}
?>