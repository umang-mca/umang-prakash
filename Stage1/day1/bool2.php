<?php

  $no = 1;
  $str = "1";

  echo "compares value", $no == $str; 

  echo "compares value & type",$no === $str;


  $obj = null;

  echo "<br/>", $obj == false; //true
  echo "<br/>", $obj === false; //false

?>