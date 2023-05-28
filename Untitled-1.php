<?php

// function isArmstrongNumber($number) {
//     $originalNumber = $number;
//     $sum = 0;
//     $digits = strlen($number);
    
//     while ($number > 0) {
//         $digit = $number % 10;
//         $sum += pow($digit, $digits);
//         $number = (int)($number / 10);
//     }
    
//     return $sum === $originalNumber;
// }

// // Test chương trình
// $numbers = array(153, 370, 371, 407, 123, 456);
// foreach ($numbers as $number) {
//     if (isArmstrongNumber($number)) {
//         echo "$number là số Armstrong"."\n";
//     } else {
//         echo "$number không phải là số Armstrong"."\n";
//     }
// }



function isArmstrongNumber($number) {
    $originalNumber = $number;
    $sum = 0;
    $digits = strlen($number);
    
    while ($number > 0) {
        $digit = $number % 10;
        $sum += pow($digit, $digits);
        $number = (int)($number / 10);
    }
    
    return $sum === $originalNumber;
}

$number = 153;

if (isArmstrongNumber($number)) {
    echo "$number là số Armstrong";
} else {
    echo "$number không phải là số Armstrong";
}


echo 6 % 4;