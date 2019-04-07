<?php
/**
* fibonacci of a given number.
 * Input: 5, Ouput: 15
 * Input: 6 Output: 
 * Input: 9 Output: 
 *  
*/

class Fibonacci{
    function test($n){
    $previous=1;
    $current=1;
	for($i=3;$i<=$n;$i++)
		{
		 $temp=$current;
		 $current=$previous+$current;
		 $previous=$temp;
		 echo $current;
		}
    }
}
$fibbo= new Fibonacci();
$fibbo->test(5);
