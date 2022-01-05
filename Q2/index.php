<?php 
/**
 * Check if a range of numbers between the given start and finisho values are prime
 * @param int $start Start of the range
 * @param int $finish End of the range
 * 
*/
function PrimesBetween($start, $finish):void{
    $found_primes = array();
    //Check if both Start and Finish values are integers and throws a TypeError if not 
    if(!(is_int($start) && is_int($finish))){
        throw new TypeError();
    }
    //Swap values if Start value is bigger than Finish
    if($start>$finish){
        $tmp=$start;
        $start=$finish;
        $finish=$tmp;
    }
    //Check if the numbers are prime
    for ($i=$start+1; $i < $finish; $i++) { 
        if(isPrime($i)){
            //If prime, push it into the array
            array_push($found_primes, $i);
        }
    }
    //Print the answer
    if(count($found_primes)>0){
        echo "Numero Inicial = {$start}<br>";
        echo "Numero Final = {$finish}<br>";
        echo "Resposta: Encontrados ".count($found_primes)." números primos, são eles: ".implode(',',$found_primes);
    }
    //Alternative answer in case no primes are found
    else{
        echo "Numero Inicial = {$start}<br>";
        echo "Numero Final = {$finish}<br>";
        echo "Resposta: Não foram encontrados números primos entre esses valores.";
    }
}

/**
 * Check if a given number is prime
 * @param int $number The value to be checked
 */
function isPrime($number):bool{
    if($number == 1){
        return false;
    }
    for ($i = 2; $i <= $number/2; $i++){
        if ($number % $i == 0){
            return false;
        }
    }
    return true;
}

PrimesBetween(100, 100);