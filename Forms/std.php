<?php
 $no = 0;
 $name = "";
 
 if(isset($_POST["no"],$_POST["name"]))
 { 
  $no = 0 + $_POST["no"]; 
  $name = $_POST["name"];
  echo $no, $name;
 }
?>

<form method="post" action="std.php">
 <br/>No : <input type="text" name="no"/>
 <br/>Name : <input type="text" name="name"/>
 
 <br/><input type="submit"/>
</form>
