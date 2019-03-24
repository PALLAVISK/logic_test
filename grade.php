<?php
/**
 * accept the roll no  marks of three subjects and find out total and avg of marks.
 * Input: 18 45,65,35 Ouput: total 145 avg 48.33
 * Input: 45 223,88,34 Output: total 345 avg 115
 * Input: 7 34,76,24 Output: total 134 avg 44.66
 *  
 */
class grade{
  function details($rno,$s1,$s2,$s3){
      $total=$s1+$s2+$s3;
      $avg=$total/3;
      echo"student roll no is:".$rno;
      echo"<br>";
      echo"mark1:".$s1;
      echo"mark2:".$s2;
      echo"mark3:".$s3;
      echo"totalmks:".$total;
      echo"avg is:".$avg;
    
    if($avg>=60){
        echo"grade A";
    }
    else if(($avg>=50)&&($avg<60)){
        echo"grade B";
    }
    else if(($avg>=40)&&($avg<50)){
        echo"grade C";
    }
    else{
        echo"grade F";
    }
}
  }
  $stud=new grade();
  $stud->details(18,45,65,35);
  $stud->details(45,223,88,34);
  $stud->details(7,34,76,24);
?>