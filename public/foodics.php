<?php

/* 
//foodics demo test: 
    $arr = [-3, -1];


    //1- know the range:
    $min = min($arr);
    $max = max($arr);

    if($max <= 0){
        echo 1;
    }else{
        //2- make complete array with this range: 
        $completeArr = range($min, $max);


        //3- get the different array: 
        $diff = array_diff($completeArr, $arr);

        //print_r ($diff);


        //4- get the smallest element of the array: 
        if(count($diff) > 0){
            $result = min($diff);
            echo $result;
        }else{
            $result = $max + 1;
            echo $result;
        }
    }

*/

//---------------------------------------------------------------------
//                          Foodics Test
//---------------------------------------------------------------------

$a = 2;
$b = 2; 

$a = $a + $b;
$b = 2 * $a; 
$a = $a + $a;

//echo $a;
//echo $b;


//------------------------------------------

// $a infinit increment 0>1>2>0>1>2>0>1>2>....

$a = 0;

$n = 5;

$result = "";

for($x=0; $x<5; $x++){
    if($a == 0){
        $result = $result . '+';
    }else{
        $result = $result . '-';
    }
    if($a < 2){
        $a++;
    }else{
        $a = 0;
    }

}
return $result;
// if $a==0 append +, otherwise return -
// if 









