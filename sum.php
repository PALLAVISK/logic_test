<?php
/**
 * print sum of digits
 * Input: 975 Ouput: 21
 * Input: 56343874 Output: 40
 * Input: 123 Output:6
 *  
 */

 
 class sum{
    function num($a){
        while($a>0){
           $remi=$a%10;
           $sum=$sum+$remi;
           $a=$a/10; 
        }
        echo "sum:". $sum;
    }
}
$var=new sum();
$var->num(975);
echo"<br>";
$var->num(56343874);
echo"<br>";
$var->num(123);

?>
