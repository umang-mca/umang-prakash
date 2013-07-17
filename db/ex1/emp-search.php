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
  
  /* Eno number wise search */
  if($cmd == "Search"){
   	$eno = 0  + $_POST["eno"];
	$sql = "select * from emp where eno=$eno";  
	
	$result = mysql_query($sql);
	if($result){
		if($row  = mysql_fetch_array($result)){
			$eno = $row[0];
			$ename = $row[1];
			$edate = $row[2];
		}else{
			$message = "Employee not found";
		}
	}else{
		$message = "Employee not found";
	}
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

<form method="post">
	<br/>No: <input type="text" name="eno" value="<?=$eno?>"/>
	     <input type="submit" name="cmd" value="Search"/>
	<br/>Name: <input type="text" name="ename" value="<?=$ename?>"/>
	<br/>Date: <input type="text" name="edate" value="<?=$edate?>"/>
	<br/><input type="submit" name="cmd" value="Add"/>
</form>
<p><?=$message?></p>
