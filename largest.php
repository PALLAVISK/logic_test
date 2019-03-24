<?php
/**
 * find out the greator from two numbers.
 * Input: 2,34 Ouput: 34
 * Input: 8,34 Output: 34
 * Input: 3,66 Output: 66
 *  
 */

 
 class largest{
    function maxi($a,$b){
        if($a>$b){
            echo $a."is greator";
        }
        else{
            echo $b."is greator";
        }

    }
 }               
$largi=new largest();
$largi->maxi(2,34); 
$largi->maxi(8,34);
$largi->maxi(3,66);
   

?>