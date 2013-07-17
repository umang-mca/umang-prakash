<?php
 $no =0;
 $name = "";
 $address = "";
 if(isset($_POST["cmd"])){
 	$no = 0 + $_POST["no"];
	 $name = $_POST["name"];
	 $address = $_POST["address"];
 }
?>

<form method="post">
<br/>No : <input type="text"
                 value = "<?=$no?>" 
                 name="no"/>
<br/>Name : <input type="text" 
                   value = "<?=$name?>"
                   name="name"/>
<br/>Address: <textarea rows="10" cols="50" name="address"><?=$address?></textarea>                   
<br/><input type="submit"  name="cmd" value="Add"/>	

</form>
