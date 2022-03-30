<?php

print_r("WELCOME TO SMART CALCULATOR\n");
print_r("===========================\n");

$firstNum = (int)readline("Enter first number  : ");
$operator = readline("Enter operator like: (+,*,/,-)  : ");
switch($operator){
    case in_array($operator,['/','*','+','-']):
        break;
    default:
        echo "Invalid Operator <br>";
        return;
}
$secNum = (int)readline("Enter second number  : ");
if ($operator === '*'){
    $total = $firstNum * $secNum;
}
if ($operator === '+'){
    $total = $firstNum + $secNum;
}
if ($operator === '-'){
    $total = $firstNum - $secNum;
}
if ($operator === '/'){
    $total = $firstNum / $secNum;
}

print_r("Result is $total \n");


?>