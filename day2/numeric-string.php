<?php
 
  echo "<br/>", "10" + "3";
  echo "<br/>", 1.3 + "3rd lane";
  echo "<br/>", "10 apples" + "3 bananas";
  
  $m = "10 apples" + "3 bananas";
  echo "<br/>", is_int($m),$m;

  $str = "29";
  $n = 0 + $str;
  if(is_int($n))
    echo "<br/> $n";

   $m = 10000.33;
   echo "<br/>$m";
?>