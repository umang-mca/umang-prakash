<?php

  $ar = array();
  $ar[] = array(10,20,30);
  $ar[] = array(33,4,5,6,7,8);
  $ar[] = array("Meh","Pat");

  foreach($ar as $a)
   {
      echo "<br/>";
      foreach($a as $v)
        {
          echo $v;
        }
    }

  print_r($ar);
?>
