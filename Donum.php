<?php
/**
 * print numbers n to 1 using  do while loop. 
 * Input: 1,9 Ouput: 1 2 3 4 5 6 7 8 9
 * Input: 45,48 Output: 45 46 47 48
 * Input: 7,12 Output: 7 8 9 10 11 12
 *  
 */
class Donum{
  function num($no,$i){
      do{
        echo $no;
        $no--;
      }
      while($no<=$i);
          
        
    }
}
$var=new Donum();
$var->num(9,1);
echo"<br>";
$var->num(45,48);
echo"<br>";
$var->num(7,12);
?>