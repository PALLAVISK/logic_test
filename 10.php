<?php

/**
 * Input: 15,17 Ouput: 17,15
 * Input: 97,35 Output: 35,97
 * Input: 33,4 Output: 4,33
 *  
 */
$a = 15;
$b = 27;
echo "no before swap:\n";
echo "No a =".$a." and b=".$b;

$temp = $a;
$a = $b;
$b = $temp;
 
echo "no after swap:\n";
echo "No a =".$a." and b=".$b."\n";

$a = 97;
$b = 35;
echo "no before swap:\n";
echo "No a =".$a." and b=".$b;

$temp = $a;
$a = $b;
$b = $temp;
 
echo "no after swap:\n";
echo "No a =".$a." and b=".$b."\n";

$a = 33;
$b = 4;
echo "no before swap:\n";
echo "No a =".$a." and b=".$b;

$temp = $a;
$a = $b;
$b = $temp;
 
echo "no after swap:\n";
echo "No a =".$a." and b=".$b."\n";
?>