<?php

 $emp = array("no"=>10, "name"=>"Mahesh",                "salary"=>23399.33);
 
 echo "<br/>No : " . $emp["no"];
 echo "<br/>Name : " . $emp["name"];
 echo  "<br/>Salary : " . $emp["salary"];


 /* or foreach loop */

 foreach($emp as $k=>$v)
  {
    echo "<br/>$k : $v";
   }
?>