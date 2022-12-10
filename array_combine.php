<?php
//Functions similar to php builtin function array_combine()
$keys = array('first', 'second', 'third', 'forth');
$values = array('The first one','The second one', 'The third one ', 'The forth one');

function arrayCombine(array $keys,array $values) :array|string {
    $result = [];
    //Test if the 2 arrays have the same length or not
    if (count($keys) !== count($values)){
        return "The 2 Arrays must have the same length";
    }
    for ($i = 0; $i < count($keys); $i++){
        //check if keys values is number and string only;
        if (is_string($keys[$i]) != 1 || !is_numeric($keys[$i]) != 1){
            return "Keys must be string and numbers only";
        }
        $result[$keys[$i]] =$values[$i];
    }
    return $result;
}
var_dump(arrayCombine($keys,$values));

