<?php

  $cn = mysql_connect("localhost","root","")
            or die(mysql_error());
 
  $db = mysql_select_db("prakashdb")
            or die(mysql_error());

  
  $query = "select * from emp";
  $result = mysql_query($query);
  
  if($result){
  	  while(  $row =  mysql_fetch_row($result)){
  	  	  print_r($row);
  	  }
  }

   
?>