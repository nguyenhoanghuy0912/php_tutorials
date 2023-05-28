<?php
// 1
$str = 'abcdef';
echo strlen($str) . "\n";

// 2
echo str_word_count($str) . "\n";

// 3
echo strrev($str) . "\n";

// 4
echo strpos($str, 'b') . "\n";

// 5
$old_string = 'cd';
$new_string = 'yz';
echo str_replace($old_string, $new_string, $str) . "\n";

// 6
$sub_str = 'a';
echo strncmp($str, $sub_str, strlen($sub_str)) . "\n";

// 7
echo strtoupper($str) . "\n";

// 8
$str_1 = 'THIS IS MY CODE';
echo strtolower($str_1) . "\n";

// 9
echo ucwords($str) . "\n";

// 10
$str_2 = ' 1111 ';
echo trim($str_2) . "\n";

// 11
$str_3 = 'nice';
echo ltrim($str_3, $str_3[0]) . "\n";

// 12
$trimmedStr = rtrim($str_3, substr($str_3, -1));
echo $trimmedStr . "\n";

// 13
$str_4 = "apple,banana,orange,grape";
$delimiter = ",";
$arr = explode($delimiter, $str_4);
print_r($arr);
echo "\n";

// 14
$new_arr = ['dog', 'chicken', 'snake'];
echo implode($delimiter, $new_arr) . "\n";

// 15
$pad_string = 'hello';
echo str_pad($pad_string, strlen($pad_string) + 1, "*", STR_PAD_LEFT) . "\n";
echo str_pad($pad_string, strlen($pad_string) + 1, "*", STR_PAD_RIGHT) . "\n";

// 16
echo strrchr('how are you', 'you') . "\n";

// 17
echo strstr('My name is Huy!', 'name') . "\n";

// 18
$str_5 = "Hello 123 World!";
$pattern = '/[^a-zA-Z0-9]/'; 
$replacement = '*'; 
echo preg_replace($pattern, $replacement, $str_5) . "\n";

// 19
$str_6 = 999;
if (is_int($str_6)) {
    echo 'yes' . "\n";
} else {
    echo 'no' . "\n";
}

// 20
$email = "example@example.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Chuỗi là một email hợp lệ." . "\n";
} else {
    echo "Chuỗi không phải là một email hợp lệ." . "\n";
}

function convertToLower($str){
    return strtolower($str);
}

echo convertToLower('HELLO');

function capitalizeWords($str){
    return ucwords($str);
}

echo capitalizeWords('hi');

function removeLastCharacter($str) {
    $lastChar = substr($str, -1);
    return rtrim($str, $lastChar);
}
$str_3 ='abc';
$trimmedStr = removeLastCharacter($str_3);
echo $trimmedStr . "\n";
?>


<!-- Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords(). -->

