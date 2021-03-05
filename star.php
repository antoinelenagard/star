<?php 

function star($n){

    $halflenght =  2 * $n + 1 + $n; 
    $horizontal = 2 * $n +1; 
    $tophalf = []; 

    if($n == 0){

        return NULL; 
    } 

    for($i = 0; $i < $n; $i++)
    {
        array_push($tophalf, str_repeat(" ", $horizontal) . str_repeat(" ", $n - $i - 1) . "*"); 
    }   
    
    array_push($tophalf, str_repeat("*", $horizontal));
    
    for($i = 0; $i <= $n - 1; $i++){

        array_push($tophalf, str_repeat(" ", $i +1) . "*"); 
    }

    for($i = 0; $i <= $n *2; $i++){

        $tophalf[$i] = str_pad($tophalf[$i], $halflenght, " "); 
    } 

    foreach($tophalf as $value){

        print_r($value . substr(strrev($value), 1) . "\n"); 
    } 
    
    for($i = $n * 2 - 1; $i >= 0; $i--){

        print_r($tophalf[$i] . substr(strrev($tophalf[$i]), 1) . "\n");

    }



}

star(5);    