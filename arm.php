<?php
/**
 * check armstrong no or not
 * Input: 153 Ouput: armstrong
 * Input: 56 Output: not armstrong
 * Input: 407 Output:armstrong
 *  
 */

 class arm{
    function num($a){
        $temp=$a;
        while($a>0){
           $remi=$a%10;
           $sum=$sum+$remi*$remi*$remi; 
           $a=$a/10; 
        }
        if ($temp == $sum){
            echo"Armstrong Number"; 
        }
        else{
            echo("not an Armstrong Number");
        }
    }
   
}
$var=new arm();
$var->num(153);
echo"<br>";
$var->num(56);
echo"<br>";
$var->num(407);

?>
