<?php
/**
 * compare two no and find out it is greator,less or equal
 * Input: 2,34 Ouput: 34 is less than 2
 * Input: 91,18 Output: 91 is greator than 18
 * Input: 10,10 Output: both are equal
 *  
 */

 
 class compare{
    function comp($a,$b){
        if($a>$b){
            echo $a."is greator than".$b;
        }
        elseif($a<$b){
            echo $b."is less than".$a;
        }
        else{
            echo "both equal";
        }

    }
 }               
$compi=new compare();
$compi->comp(2,34); 
$compi->comp(91,18);
$compi->comp(10,10);
   

?>