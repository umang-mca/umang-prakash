<?php

 $output = "";
 
 for($i=1; $i<=10; $i++)
  {
    $output .= "<option>$i</option>";
   }
?>


<p>
 Select your luck number
</p>

<p>
<select>
  <?=$output?>
</select>
</p>

<p>Choose code</p>
<p>
  <select>
    <?=$output?>
  </select>
</p>
  
<p>ListBox</p>
<p>
	<select size="4">
		<?=$output?>		
	</select>	
</p>

<p>ListBox</p>
<p>
	<select size="4" multiple="multiple">
		<?=$output?>		
	</select>	
</p>
