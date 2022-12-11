<?php
$testArr = array(1,2,2,1,3,5,5,6,7,8,8,9);
function arrryRemoveDublicated(array $arr) :array{
    $holder = [];
    for ($i = 0 ; $i < count($arr); $i++){
        if (!in_array($arr[$i],$holder)){
            $holder[] = $arr[$i];
        }
    }
    return $holder;
}
var_dump(arrryRemoveDublicated($testArr));
/* ====== Output will be ======
array(8) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
  [3]=>
  int(5)
  [4]=>
  int(6)
  [5]=>
  int(7)
  [6]=>
  int(8)
  [7]=>
  int(9)
}
*/