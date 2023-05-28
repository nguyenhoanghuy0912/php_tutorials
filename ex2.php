<?php
// 1
function isEven($number) {
    if ($number % 2 == 0) {
        return true;
    } else {
        return false;
    }
}
echo isEven(2)."\n";

// 2
function calculateSum($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}
echo calculateSum(4)."\n";

// 3
function printMultiplicationTable() {
    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= 10; $j++) {
            echo $i . " x " . $j . " = " . ($i * $j) . "\n";
        }
        echo "\n";
    }
}
printMultiplicationTable();

// 4
function containsWord($string, $word) {
    if (strpos($string, $word) !== false) {
        return true;
    } else {
        return false;
    }
}
echo containsWord('nguyen hoang huy', 'huy') . "\n";

// 5
function findMax($arr){
    return max($arr);
}
echo findMax([1,3,2,6,10])."\n";


// 6
function sortArr($arr){
    sort($arr);
    return $arr;
}
echo implode(' ',sortArr([1, 3, 2, 6, 10]))."\n";


// 7
function caculateFactorial($n){
    $factorial = 1;
    for ($i = 1; $i <= $n; $i++){
        $factorial *= $i;
    }
    return $factorial;
}
echo caculateFactorial(3)."\n";


// 8
function isPrime($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function findPrimes($arr) {
    $primes = array();
    for ($i = 0; $i < count($arr); $i++) {
        if (isPrime($arr[$i])) {
            $primes[] = $arr[$i];
        }
    }
    return $primes;
}

echo implode(" ", findPrimes([1, 3, 4, 5]))."\n";


// 9
function sumArray($arr){
    $s = 0;
    for ($i = 0; $i < count($arr); $i++){
        $s += $arr[$i];
    }
    return $s;
}
echo sumArray([1, 2, 3])."\n";

// 10
function printFibonacci($n) {
    $a = 0;
    $b = 1;

    while ($a <= $n) {
        echo $a . " ";
        $nextFibonacci = $a + $b;
        $a = $b;
        $b = $nextFibonacci;
    }
}
printFibonacci(50);

// 11
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


// 12
function insertElement($array, $element, $position) {
    array_splice($array, $position, 0, $element);
    return $array;
}
echo implode(' ',insertElement([1, 2, 3, 4, 5], 10, 2))."\n";


// 13
function removeDuplicates($array) {
    return array_unique($array);
}

echo implode(' ', removeDuplicates([1, 2, 3, 2, 4, 1, 5, 3]))."\n";

// 14
function findElementPosition($array, $element) {
    $position = array_search($element, $array);
    return $position !== false ? $position : "Element not found";
}

echo findElementPosition([1, 2, 3, 4, 5], 3)."\n";

// 15
function reverseString($string) {
    return strrev($string);
}
echo reverseString('huy')."\n";

// 16
function countElements($array) {
    return count($array);
}
echo countElements([1, 2, 3, 4])."\n";

// 17
function isPalindrome($str) {
    $rev = strrev($str);
    return $str == $rev;
  }
  
  $str = "madam";
  
  if (isPalindrome($str)) {
    echo "The string $str is a palindrome."."\n";
  } else {
    echo "The string $str is not a palindrome."."\n";
  }

// 18
function countOccurrences($array, $element) {
    $counts = array_count_values($array);
    return isset($counts[$element]) ? $counts[$element] : 0;
}
echo countOccurrences([1, 2, 3, 2, 4, 1, 5, 3], 2)."\n";

// 19
function sortDescending($array) {
    rsort($array);
    return $array;
}

echo implode(' ',sortDescending([5, 2, 9, 1, 7]))."\n";

// 20
function arrayUnshift($arr){
    array_unshift($arr, 0);
    return $arr;
}
echo implode(' ', arrayUnshift([1, 2, 3, 4]))."\n";

// 21
function arrayPush($arr){
    array_push($arr, 5);
    return $arr;
}
echo implode(' ', arrayPush([1, 2, 3, 4]))."\n";

// 22
function gcd($a, $b) {
    $a = abs($a);
    $b = abs($b);
    if ($b == 0) {
      return $a;
    } else {
      return gcd($b, $a % $b);
    }
  }
  function lcm($a, $b){
    return ($a * $b)/gcd($a, $b);
  }

echo gcd(4, 8)."\n";
echo lcm(15, 40)."\n";

// 23
function isPerfectNumber($number){
    $sum = 0;
    for($i = 1; $i < $number; $i++){
        if($number % $i == 0){
            $sum += $i;
        }
    }
    return $sum == $number;
}
$number = 3;
if(isPerfectNumber($number)){
    echo "yes"."\n";
}
else{
    echo "no"."\n";
}

// 24
function findLargestOddNumber($array) {
    $largestOddNumber = -1;
    foreach ($array as $number) {
      if ($number % 2 != 0 && $number > $largestOddNumber) {
        $largestOddNumber = $number;
      }
    }
  
    return $largestOddNumber;
  }
  
echo findLargestOddNumber([1, 2, 6, 9, 10 ,99])."\n";

// 25
function isPrimeNumber($number) {
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false; 
        }
    }
    
    return true; 
}
if (isPrimeNumber(17)) {
    echo "yes"."\n";
} else {
    echo "no"."\n";
}

// 26
function findLargestPositiveNumber($array) {
  $largestNumber = 0;

  foreach ($array as $number) {
    if ($number > 0 && $number > $largestNumber) {
      $largestNumber = $number;
    }
  }

  return $largestNumber;
}
echo findLargestPositiveNumber([1, 3, 2, 6, 100])."\n";


// 27
function findLargestNegativeNumber($array) {
    $largestNegativeNumber = null;
    
    foreach ($array as $number) {
        if ($number < 0 && $number > $largestNegativeNumber) {
            $largestNegativeNumber = $number;
        }
    }
    
    return $largestNegativeNumber;
}
echo findLargestNegativeNumber([-3, 5, -10, 7, -8, 0, -12])."\n";


// 28
function sumOdd($n){
    $sum = 0;
    for($i = 1; $i <= $n; $i++){
        if($i % 2 != 0){
            $sum += $i;
        }
    }
    return $sum;
}
echo sumOdd(3)."\n";

// 29
function findSquareNumber($array){
    $squareNumber = [];
    for($i = 0; $i < count($array); $i++){
        if (sqrt($array[$i]) * sqrt($array[$i]) == $array[$i]){
            $squareNumber[] = $array[$i]; 
        }
    }
    return $squareNumber;
}
echo implode(' ', findSquareNumber([2, 4, 5, 64]))."\n";

// 30
function isSubstring($haystack, $needle) {
    $pos = strpos($haystack, $needle);
  
    return $pos !== false;
  }
  
  $haystack = "This is a string";
  $needle = "string";
  
  if (isSubstring($haystack, $needle)) {
    echo "The string $needle is a substring of $haystack";
  } else {
    echo "The string $needle is not a substring of $haystack";
  }
?>
 


