<?php
 $countries = array("India","Nepal","Usa","UK");
 $country = "";
 
 if(isset($_POST["cmd"])){
 	$country = $_POST["country"];
	  
 }
 
?>

<form method="post">
<br/>Country
<select   name="country">
	<option>***Select***</option> 
	<?php
	 foreach ($countries as $c) {
	 	if($c == $country)
		   echo "<option selected='selected'>$c</option>";
		else 
			echo "<option>$c</option>";
		}
	?> 	
</select>                   
<br/><input type="submit"  name="cmd" value="Add"/>	

</form>
