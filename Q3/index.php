<?php
/**
 * Gets the unique values of a randomly generated array
 * @param int $min Minimum value of the random numbers
 * @param int $max Maximum value of the random numbers
 * @param int $array_size size of the random values array
 */
function GetUniquesInRandom($min=1, $max=100, $array_size=10):void{
    //Populates the random values array
    $random = array();
    foreach(range(1,$array_size) as $i){
        array_push($random, rand($min, $max));
    }
    //Counts the occurrences of each value of the array
    $count_values = array_count_values($random);
    //Gets the values that are unique
    $uniques = array();
    foreach ($count_values as $key => $value){
        if($value==1){
            array_push($uniques, $key);
        }
    }
    //Sorts the unique values array
    sort($uniques);
    //Print answer
    echo "Array sorteado = [".implode(",",$random)."]<br>";
    if(count($uniques)==0){
        echo "Todos os números se repetiram.";
    }
    else if(count($uniques)==1){
        echo "Apenas o número ".implode("",$uniques)." não se repetiu.";
    }
    else{
        echo "Os números que não se repetem são o ".preg_replace('/,(?=[^,]*$)/',' e ',implode(",",$uniques)).".";
    }
}

//Run function
GetUniquesInRandom();