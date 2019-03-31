<?php
/**
 * print first n even numbers
 * Input: 2,12 Ouput: 2,4,6,8,10,12
 * Input: 2,12 Output: 2,4,6,8,10,12,14,16,18
 * Input: 2,22 Output: 2,4,6,8,10,12,14,16,18,20,22
 *  
 */

 
 class even{
    function oddi($i=2,$a){
        while($i<=$a){
            echo $i;
            $i=$i+2;
        }
    }
 }               
$abc=new even();
$abc->oddi(2,12); 
echo"<br>";
$abc->oddi(2,18);
echo"<br>";
$abc->oddi($i,22);
   

?>