<select>
	<option>Mehsana</option>
	<option>Patan</option>
</select>

<?php
 echo "<select>";
  for($day = 1;$day<=31;$day++){
  	echo "<option>$day</option>";
  }
 echo "</select>";
 
 echo "<select>";
  for($mon = 1;$mon<=12;$mon++){
  	echo "<option>$mon</option>";
  }
 echo "</select>";
 
 echo "<select>";
  for($day = 2001;$day<=2031;$day++){
  	echo "<option>$day</option>";
  }
 echo "</select>";
?>