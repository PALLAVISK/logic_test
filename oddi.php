<?php
/**
 * print first n odd numbers
 * Input: 1,15 Ouput: 1,3,5,7,9,11,13,15
 * Input: 1,19 Output: 1,3,5,7,9,11,13,15,17,19
 * Input: 1,23 Output:1,3,5,7,9,11,13,15,17,19,21,23
 *  
 */

 
 class oddi{
    function num($i=1,$a){
        while($i<=$a){
            echo $i;
            $i=$i+2;
        }
    }
 }               
$abc=new oddi();
$abc->num(1,15); 
echo"<br>";
$abc->num(1,19);
echo"<br>";
$abc->num(1,23);
   

?>