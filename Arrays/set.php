<?php

 $ar = [];

 $ar[10]=100; //insert at 10th index
 $ar["no"] = 10; // associative element
 $ar["city"] = "Mehsana";
 $ar[10]=30; // will insert at 11th index (Last Index + 1)
 
 print_r($ar);
?>