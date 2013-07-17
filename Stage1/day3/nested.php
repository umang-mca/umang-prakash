<?php
  echo "<table border='1'>";
  
  $rows = 10;
  $cols = 10;
  
  for($r=1;$r<=$rows;$r++){
  	  echo "<tr>";
	  
	  for($c=1; $c<=$cols;$c++){
	  	 echo "<td>", $r * $c ,"</td>";
	  }
	  
	  echo "</tr>";
  }
  
  echo "</table>";
?>