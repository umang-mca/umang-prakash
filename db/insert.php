<?php

  $cn = mysql_connect("localhost","root","")
            or die(mysql_error());
 
  $db = mysql_select_db("prakashdb")
            or die(mysql_error());

  //define insert query

  $query = "insert into emp values  (1,'Tarun','23-2-2003')";

  //execute query

  $result = mysql_query($query);

  if($result){
      echo "Employee record added succesfullt";
  }else{
      echo mysql_error();
  }
?>