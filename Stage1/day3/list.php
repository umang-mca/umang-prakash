<ol>
	<li>Item1</li>
	<li>Item2</li>
</ol>

<?php

  $i=1;
  $str = "";
  while($i<=10){
  	  $str .= "<li>Item$i</li>";
	  $i++;
  }
?>

<ol>
	<?=$str?>
</ol>

<ul>
	<?=$str?>
</ul>


<?php
 for($i=1;$i<=6;$i++){
 	echo "<h$i>Head$i</h$i>";
 }

?>