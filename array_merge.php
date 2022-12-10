<?php
//Implementing function like array_merge()
$arr1 = array('first', 'second', 'third', 'forth');
$arr2 = array('The first one', 'second','The second one', 'The third one ', 'The forth one','Another Str');
function arrayMerge(...$arrays) :array|string
{
    $result = [];
    $count = count($arrays);
    for ($count = 0; $count< count($arrays) ; $count++) {
        if (empty($arrays[$count])){
            return "Array number ".($count+1)." is Empty";
        }
        for ($i = 0; $i < count($arrays[$count]); $i++) {
            if (in_array($arrays[$count][$i],$result))
                continue;
            $result[] = $arrays[$count][$i];
        }
    }

    return $result;
}
//Test Array 
//var_dump(arrayMerge($arr1,$arr2));
//var_dump(arrayMerge($arr1,$arr2,array(1.2.3.4.5));
