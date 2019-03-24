<?php
/**
 * find out no is even or odd
 * Input: 2 Ouput: even
 * Input: 18 Output: even
 * Input: 11 Output: odd
 *  
 */

 
 class eveni{
    function oddi($a){
        if($a%2==0){
            echo $a."is even";
        }
       
        else{
            echo $a."is odd";
        }

    }
 }               
$abc=new eveni();
$abc->oddi(2); 
$abc->oddi(18);
$abc->oddi(11);
   

?>