<?php


function phone_number($number){
    $number = intval($number); //to numeric
    $number = "$number"; // to string
    $isValid = TRUE;

    if(str_starts_with($number, '7') && strlen($number) === 9){
        $number = "254$number";
    }else if(str_starts_with($number, '254') && strlen($number) === 12){
        $number = "$number";
    }else if(str_starts_with($number, '1') && strlen($number) === 9){
        $number = "254$number";
    }else if(str_starts_with($number, '01') && strlen($number) === 10){
        $number = "254".substr($number, 1);
    }else{
        $isValid = false;
    }

    return ['isValid' => $isValid, 'phone' => $number];
}


$phone = phone_number("0129443338");

print_r($phone);

?>