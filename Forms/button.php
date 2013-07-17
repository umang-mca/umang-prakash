<?php
 $cmd = ""; 
 $message = "";

 if(isset($_POST["cmd"]))
   {
    $cmd = $_POST["cmd"];
    }

 if($cmd == "Add")
     $message = "Add is pressed";
 else
 if($cmd == "Sub")
     $message = "Sub is pressed";
 else
 if($cmd == "Mul")
      $message = "Mul is pressed";

?>

<form method="post">
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