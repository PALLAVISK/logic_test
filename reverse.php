<?php
/**
 * print numbers in reverse order
 * Input: 97574 Ouput: 47579
 * Input: 56343874 Output: 47834365
 * Input: 123 Output:321
 *  
 */

 
 class reverse{
    function num($a){
        while($a>1){
           $remi=$a%10;
           $rev = ($rev * 10) + $remi; 
           $a=$a/10; 
        }
        echo "Reverse no:". $rev;
    }
}
$var=new reverse();
$var->num(97574);
echo"<br>";
$var->num(56343874);
echo"<br>";
$var->num(123);

?>
