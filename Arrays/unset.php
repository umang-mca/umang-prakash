<?php

 $ar = array(10,20,30,"no"=>10);

 print_r($ar);

 unset($ar[1]); // remove 20
 unset($ar["no"]); // remove 10

 
 print_r($ar);
?>
