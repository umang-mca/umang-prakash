<?php
  /*  Connect and select database */
 
  $cn = mysql_connect("localhost","root") or die(mysql_error());
  $db = mysql_select_db("prakashdb") or die(mysql_error());

  $eno  = 0;
  $ename  = "";
  $edate = "";
  $cmd = "";
  $message = "";
  
  if(isset($_POST["cmd"])){
  	 $cmd = $_POST["cmd"];
  }
  
  /* Insert Emp Record */
  if($cmd == "Add"){
  	 $eno = 0 + $_POST["eno"];
	 $ename = $_POST["ename"];
	 $edate = $_POST["edate"]; 
  	 $sql = "insert into emp values ($eno,'$ename','$edate')";
	  
	 $result = mysql_query($sql);
	 if($result){
	 	$message = "Employee has been added.";
	 }else{
	 	$message = "Cannot add employee. Might be duplicate employee code " ;
	 }
  }

?>

<form method="post" action="emp-add.php">
	<br/>No: <input type="text" name="eno" value="<?=$eno?>"/>
	<br/>Name: <input type="text" name="ename" value="<?=$ename?>"/>
	<br/>Date: <input type="text" name="edate" value="<?=$edate?>"/>
	<br/><input type="submit" name="cmd" value="Add"/>
</form>
<p><?=$message?></p>
