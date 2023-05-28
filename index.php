<?php
function getStringLength($str) {
    return strlen($str);
}

function getWordCount($str) {
    return str_word_count($str);
}

function reverseString($str) {
    return strrev($str);
}

function findSubstring($str, $substring) {
    return strpos($str, $substring);
}

function replaceSubstring($str, $old_string, $new_string) {
    return str_replace($old_string, $new_string, $str);
}

function compareSubstring($str, $sub_str) {
    return strncmp($str, $sub_str, strlen($sub_str));
}

function convertToUpper($str) {
    return strtoupper($str);
}

function convertToLower($str) {
    return strtolower($str);
}

function capitalizeWords($str) {
    return ucwords($str);
}

function removeWhitespace($str) {
    return trim($str);
}

function removeFirstCharacter($str) {
    $firstChar = $str[0];
    return ltrim($str, $firstChar);
}

function removeLastCharacter($str) {
    $lastChar = substr($str, -1);
    return rtrim($str, $lastChar);
}

function splitString($str, $delimiter) {
    return explode($delimiter, $str);
}

function joinArray($arr, $delimiter) {
    return implode($delimiter, $arr);
}

function padString($str, $length, $pad_char, $pad_side) {
    return str_pad($str, $length, $pad_char, $pad_side);
}

function findLastOccurrence($str, $substring) {
    return strrchr($str, $substring);
}

function findFirstOccurrence($str, $substring) {
    return strstr($str, $substring);
}

function replaceNonAlphanumeric($str, $pattern, $replacement) {
    return preg_replace($pattern, $replacement, $str);
}

function checkInteger($str) {
    return is_int($str);
}

function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}


$str = 'abcdef';
echo getStringLength($str) . "\n";
echo getWordCount($str) . "\n";
echo reverseString($str) . "\n";
echo findSubstring($str, 'b') . "\n";
$old_string = 'cd';
$new_string = 'yz';
echo replaceSubstring($str, $old_string, $new_string) . "\n";
$sub_str = 'a';
echo compareSubstring($str, $sub_str) . "\n";
echo convertToUpper($str) . "\n";
$str_1 = 'THIS IS MY CODE';
echo convertToLower($str_1) . "\n";
echo capitalizeWords($str) . "\n";
$str_2 = ' 1111 ';
echo removeWhitespace($str_2) . "\n";
$str_3 = 'nice';
echo removeFirstCharacter($str_3) . "\n";
$trimmedStr = removeLastCharacter($str_3);
echo $trimmedStr . "\n";
$str_4 = "apple,banana,orange,grape";
$delimiter = ",";
$arr = splitString($str_4, $delimiter);
print_r($arr);
echo "\n";
$new_arr = ['dog', 'chicken', 'snake'];
echo joinArray($new_arr, $delimiter) . "\n";
$pad_string = 'hello';
echo padString($pad_string, strlen($str), "*", STR_PAD_LEFT) . "\n";
echo padString($pad_string, strlen($str), "*", STR_PAD_RIGHT) . "\n";
echo findLastOccurrence('how are you', 'you') . "\n";
echo findFirstOccurrence('My name is Huy!', 'name') . "\n";
$str_5 = "Hello 123 World!";
$pattern = '/[^a-zA-Z0-9]/';
$replacement = '*';
echo replaceNonAlphanumeric($str_5, $pattern, $replacement) . "\n";
$str_6 = 999;
if (checkInteger($str_6)) {
    echo 'yes' . "\n";
} else {
    echo 'no' . "\n";
}
$email = "example@example.com";
if (validateEmail($email)) {
    echo "The string is a valid email." . "\n";
} else {
    echo "The string is not a valid email." . "\n";
}
?>
