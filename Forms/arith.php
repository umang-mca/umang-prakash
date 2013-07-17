<?php
 $cmd = ""; 
 $no1 = 0;
 $no2 = 0;
 
 $message = "";

 if(isset($_POST["cmd"]))
   {
    $cmd = $_POST["cmd"];
    $no1 = 0 + $_POST["no1"];
    $no2 = 0 + $_POST["no2"];
    }

 if($cmd == "Add")
     $message = $no1 + $no2;
 else
 if($cmd == "Sub")
     $message = $no1 - $no2;
 else
 if($cmd == "Mul")
      $message = $no1 * $no2;

?>

<form method="post">
<p>No</p>
<p><input type="text" name="no1"/></p>
<p>No</p>
<p><input type="text" name="no2"/></p>


  <input type="submit"
         name="cmd"
         value="Add"/>
  <input type="submit"
         name="cmd"
         value="Sub"/>
  <input type="submit"
         name="cmd"
         value="Mul"/>
</form>

<p><?=$message?></p>