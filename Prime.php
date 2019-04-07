<?php
/**
*  given number is prime or not.
 * Input: 5, Ouput: prime
 * Input: 8 Output: not prime
 * Input: 6 Output: not prime
 *  
*/

class Prime{
    function test($n){
        for($i=2;$i<=$n/2;$i++)
        {
            if($n%$i==0)
            {
            echo("Not Prime");

            exit(0);
            }
        }
        echo("Prime ");
    }
}
$pri= new Prime();
$pri->test(5);
echo"<br>";
echo "\n"; 
$pri->test(8);
echo"<br>";
echo "\n"; 
$pri->test(6);

