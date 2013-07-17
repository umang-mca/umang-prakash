<?php

  $cn = mysql_connect("localhost","root","")
            or die(mysql_error());
 
  $db = mysql_select_db("prakashdb")
            or die(mysql_error());

  //define update

  $query = "update emp set ename='Manish', edate='2004-3-2' where eno=1";

  //execute query

  $result = mysql_query($query);

  if(mysql_affected_rows())
      echo "Update successfully.";
  else {
       echo "Cannot update " . mysql_error();
  }
?>