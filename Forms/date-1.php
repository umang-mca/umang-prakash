<?php
  $months = array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
  
  $day = 0;
  $year = 0;
  $month = "";
  if(isset($_POST["day"]))
     $day = $_POST["day"];
  
  if(isset($_POST["year"]))
     $year = $_POST["year"];
  
  if(isset($_POST["month"]))
     $month = $_POST["month"];
  
  
   $strdate = "";
   
   if(!empty($day) && !empty($month) && !empty($year)){
      $strdate = "$day-$month-$year";
	   echo $strdate;
   }
?>

<form method="post">
	Select birth date :
	<select name="day">
		<option value="0">Day</option>
		<?php
		  for($i=1;$i<=31;$i++)
		  {
		  	if($i == $day)
		  	   echo "<option selected='selected'>$i</option>";
			else
			  echo "<option>$i</option>";
		  }
		?>
	</select>
	<select name="month">
		<option value="0">Month</option>
		<?php
		  foreach ($months as $m) {
			  if($m == $month)
			    echo "<option selected='selected'>$m</option>";
			  else
			  	echo "<option>$m</option>"; 
		  }
		?>
		
	</select>
	
	<select name="year">
		<option value="0"> Year</option>
		<?php
		  for($i=2001;$i<=2031;$i++)
		  {
		  	if($i == $year)
		  	   echo "<option selected='selected'>$i</option>";
			else
			  echo "<option>$i</option>";
		  }
		?>
	</select>	
	<input type="submit" name="cmd" value="Submit"/>
</form>
