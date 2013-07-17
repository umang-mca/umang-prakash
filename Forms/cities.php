<?php
  $cities = array("Meh","Pat","Raj","Sur","Palanpur");
  $i=0;
  $cmd = "";
  
  if(isset($_POST["cmd"]))
    $cmd = $_POST["cmd"];
  
  if(isset($_POST["counter"]))
     $i = 0 + $_POST["counter"];
  
  if($cmd == "Next")
      $i++;
  else
  if($cmd == "Prev")
     $i--;
  
  if($i>=count($cities))
    $i=0;
  
  if($i<0)
     $i = count($cities)-1;
  
  echo $cities[$i];
?>

<form method="post">
	<input type="hidden" name="counter" value="<?=$i?>"/>
	<input type="submit" name="cmd" value="Prev"/>
	<input type="submit" name="cmd" value="Next"/>
</form>
