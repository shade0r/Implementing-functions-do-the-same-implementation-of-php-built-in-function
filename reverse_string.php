<?php
$str = "Tarek";
function reversStr(string $str) :string
{
    //We already define the argument type the function should accept but this for more handel
    if (!is_string($str)){
        return $str." not a string";
    }
$strReversed = "";
for ($i = strlen($str) -1 ;$i>=0 ; $i--){
    $strReversed.= $str[$i];
}
return $strReversed;
}
echo reversStr($str);
//output will be "keraT"
