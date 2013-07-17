<?php
  $gender  = "";
  
  if(isset($_POST["gender"]))
    $gender = $_POST["gender"];
  
  echo $gender;
?>

<form method="post">
	Male  <input type="radio"
	            name="gender"
	 <?=($gender == "Male" ? "checked='checked'" : '') ?>           
	            value="Male"/>
	            
	Female <input type="radio"
	            name="gender"
 <?=($gender == "Female" ? 'checked="checked"' : '') ?>  	            
	            value="Female"/>
	            
	 <input type="submit"/>           
</form>
