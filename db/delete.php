<?php

  $cn = mysql_connect("localhost","root","")
            or die(mysql_error());
 
  $db = mysql_select_db("prakashdb")
            or die(mysql_error());

  //define update

  $query = "delete from emp where eno=1";

  //execute query

  $result = mysql_query($query);

  if(mysql_affected_rows())
      echo "Delettion successfully.";
  else {
       echo "Cannot delete " . mysql_error();
  }
?>