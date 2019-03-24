<?php
/**
 * find out no is divisible by 5 or not
 * Input: 10 Ouput: divisible by 5
 * Input: 18 Output:  not divisible by 5
 * Input: 35 Output: divisible by 5
 *  
 */

 
 class divisible{
    function divi($a){
        if($a%5==0){
            echo $a."divisible by 5";
        }
    
        else{
            echo $a."not divisible by 5";
        }

    }
}               
$divis=new divisible();
$divis->divi(10); 
$divis->divi(18);
$divis->divi(35);
   

?>