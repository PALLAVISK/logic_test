<?php
/**
*  1/2! + 2/3! + 3/4! + 4/5! + 5/6! + ………

*/

class Series{
    function test($n){
        $sum=0;
        $fact=1;
        for($i=1;$i<=$n;$i++)
        {
        $fact=1;
        for($j=1;$j<=$i+1;$j++){
            $fact=$fact*$j;
        }
        $sum=$sum+$i/$fact;
        }
        echo $sum;
    }
}
$ser= new Series();
$ser->test(5);
	