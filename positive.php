<?php
/**
 * find out given no is positive or negative.
 * Input: 2 Ouput: possitive
 * Input: 8 Output: possitive
 * Input: -3 Output: negative
 *  
 */

 
 class positive{
    function num($a){
        if($a>0){
            echo $a."is possitive";
        }
        else{
            echo $a."is negative";
        }

    }
 }               
$posii=new positive();
$posii->num(2); 
$posii->num(8);
$posii->num(-3);
   

?>