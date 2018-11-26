<?php

function Palindrome($string){
    if(strrev($string) == $string)
        return true;
    }

$result = [
    '10' => '10 11',
    '122' => '1221',
    '97' => '97 176 847 1595 7546 14003 44044',
    '546273' => '546273 918918 1738737 9117108 17134227 89377398'
];
foreach ($result as $N => $testResult) {
    $n = $N;
    if($n >= 10){
        $return = $n;
        while (!Palindrome($n)){
            $n += strrev($n);
            if($n > pow(10,18)){
                echo " not avalaible ";
            }else{
                $return .= " " . $n;
            }
        }
    }
    echo "{$return}\n";
}