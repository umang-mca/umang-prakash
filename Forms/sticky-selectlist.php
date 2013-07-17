<?php
$countries = array("India", "Nepal", "Usa", "UK", "Pak", "Iran", "Iraq", "SA");
$country = "";

if (isset($_POST["cmd"])) {
	$country = $_POST["country"];
	print_r($country);
}
?>

<form method="post">
	<br/>
	Country
	<select size="5" multiple="multiple"   name="country[]">

		<?php
		foreach ($countries as $c) {
			$isfound=false;
			foreach ($country as $s) {
				if($c == $s)
				  $isfound=true;
			}
				if ($isfound)
					echo "<option selected='selected'>$c</option>";
				else
					echo "<option>$c</option>";
			
		}
		?>
	</select>
	<br/>
	<input type="submit"  name="cmd" value="Add"/>

</form>
