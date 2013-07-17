<?php
 $no =0;
 $name = "";
 
 if(isset($_POST["cmd"])){
 	$no = 0 + $_POST["no"];
	 $name = $_POST["name"];
 }
?>

<form method="post">
<br/>No : <input type="text"
                 value = "<?=$no?>" 
                 name="no"/>
<br/>Name : <input type="text" 
                   value = "<?=$name?>"
                   name="name"/>
<br/><input type="submit"  name="cmd" value="Add"/>	

</form>
