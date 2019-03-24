<?php
/**
 * find out no is multiple of 7 or not.
 * Input: 14 Ouput: multiple of 7
 * Input: 26 Output:  not  multiple of 7
 * Input: 35 Output:  multiple of 7
 *  
 */

 
 class multiple{
    function multi($a){
        if($a%7==0){
            echo $a." multiple of 7";
        }
    
        else{
            echo $a."not  multiple of 7";
        }

    }
}               
$multis=new multiple();
$multis->multi(14); 
$multis->multi(26);
$multis->multi(35);
   

?>