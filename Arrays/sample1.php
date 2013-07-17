<?php

 $cities = array("Mehsana","Patan","Rajkot");

 /* Print elements */

 echo "<br/>", $cities[0]; //prints Mehsana

 echo "<br/>", $cities[2]; //prints Rajkot


 /* foreach loop to print all elements */

 foreach($cities as $city)
  {
      echo "<br/>", $city;
   } 

 /* foreach with key=>value syntax */

 foreach($cities as $index=>$city)
  {
    echo "<br/>", $index, $city;
  }
?>