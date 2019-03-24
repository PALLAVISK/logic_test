<?php
/**
 * find out no is greator than less than or equal to 10.
 * Input: 2 Ouput: less than 10
 * Input: 18 Output: greator than 10
 * Input: 10 Output: equal to 10
 *  
 */

 
 class greator{
    function grt($a){
        if($a>10){
            echo $a."is greator than 10";
        }
        elseif($a<10){
            echo $a."is less than 10";
        }
        else{
            echo $a."is equal to 10";
        }

    }
 }               
$grtt=new greator();
$grtt->grt(2); 
$grtt->grt(18);
$grtt->grt(10);
   

?>