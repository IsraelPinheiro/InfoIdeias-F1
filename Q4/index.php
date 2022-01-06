<?php
/**
 * Receives an array of integers as a parameter and checks if it is possible to obtain 
 * an increasing sequence by removing only one element of the array. 
 * @param array $array
 */
function isGrowing($array){
    $is_possible = false;
    if(count($array)==2){
        $is_possible = true;
    }
    else{
        foreach($array as $key =>$number){
            //Copy the original array
            $temp_array = $array;
            //Unset the value at $key position
            unset($temp_array[$key]);
            //Check if the previous number is allways smaller than the current one
            $result = array_reduce($temp_array, function (array $carry, $num){
                return [$carry[0] && $num > $carry[1], $num];
            },[true, PHP_INT_MIN])[0];
            //Update the control variable
            if($result){
                if($is_possible==false){
                    $is_possible = true;
                } 
            };
        }
    }
    //Print the answer
    echo "[".implode(",",$array)."] ";
    echo $is_possible ? "true<br>" : "false<br>";
}

//Tests
isGrowing(array(1,3,2,1));
isGrowing(array(1,3,2));
isGrowing(array(1,2,1,2));
isGrowing(array(3,6,5,8,10,20,15));
isGrowing(array(1,1,2,3,4,4));
isGrowing(array(1,4,10,4,2));
isGrowing(array(10,1,2,3,4,5));
isGrowing(array(1,1,1,2,3));
isGrowing(array(0,-2,5,6));
isGrowing(array(1,2,3,4,5,3,5,6));
isGrowing(array(40,50,60,10,20,30));
isGrowing(array(1,1));
isGrowing(array(1,2,5,3,5));
isGrowing(array(1,2,5,5,5));
isGrowing(array(10,1,2,3,4,5,6,1));
isGrowing(array(1,2,3,4,3,6));
isGrowing(array(1,2,3,4,99,5,6));
isGrowing(array(123,-17,-5,1,2,3,12,43,45));
isGrowing(array(3,5,67,98,3));