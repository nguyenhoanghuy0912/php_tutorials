<?php
function removeLastCharacter($str) {
    $lastChar = substr($str, -1);
    return rtrim($str, $lastChar);
}
$str_3 ='abc';
$trimmedStr = removeLastCharacter($str_3);
echo $trimmedStr . "\n";