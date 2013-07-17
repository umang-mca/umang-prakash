<?php
  /*  Connect and select database */
 
  $cn = mysql_connect("localhost","root") or die(mysql_error());
  $db = mysql_select_db("prakashdb") or die(mysql_error());

  $eno  = 0;
  $ename  = "";
  $edate = "";
  $cmd = "";
  $message = "";
  $found = false;
  
  if(isset($_POST["cmd"])){
  	 $cmd = $_POST["cmd"];
  }
  
  /* Eno number wise search */
  if($cmd == "Search" || $cmd == "Select"){
   	$eno = 0  + $_POST["eno"];
	$sql = "select * from emp where eno=$eno";  
	
	$result = mysql_query($sql);
	if($result){
		if($row  = mysql_fetch_array($result)){
			$eno = $row[0];
			$ename = $row[1];
			$edate = $row[2];
			$found = true;
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
  
  
   /* Update Emp Record */
  if($cmd == "Update"){
  	 $eno = 0 + $_POST["eno"];
	 $ename = $_POST["ename"];
	 $edate = $_POST["edate"]; 
  	 $sql = "update emp set ename = '$ename', edate='$edate' where eno=$eno";
	  $found = true;
	 $result = mysql_query($sql);
	 if(mysql_affected_rows()){
	 	$message = "Employee has been updated successfully.";
	 }else{
	 	$message = "Cannot uodate employee." ;
	 }
  }
  
   /* Delete Emp Record */
  if($cmd == "Delete"){
  	 $eno = 0 + $_POST["eno"];
	 
  	 $sql = "delete from  emp  where eno=$eno";
	 $result = mysql_query($sql);
	 $eno = 0;
	 if(mysql_affected_rows()){
	 	$message = "Employee has been deleted successfully.";
	 }else{
	 	$message = "Cannot delete employee." ;
	 }
  }

?>

<form method="post">
	<br/>No: <input type="text" name="eno" value="<?=$eno?>"/>
	     <input type="submit" name="cmd" value="Search"/>
	<br/>Name: <input type="text" name="ename" value="<?=$ename?>"/>
	<br/>Date: <input type="text" name="edate" value="<?=$edate?>"/>
	<br/><input type="submit" name="cmd" value="Add"/>
	
 <?php
   if($found)
   {
   	?>	
	<input type="submit" name="cmd" value="Update"/>
	<input type="submit" name="cmd" value="Delete"/>
	<?php 
   }
   ?>
	
</form>
<p><?=$message?></p>

<hr/>
<table>
	<thead>
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Date</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php
		  $sql = "select * from emp";
		  $result = mysql_query($sql);
		  
		  if($result)
		  {
		  	while($row = mysql_fetch_row($result))
		  	{
		  		?>
		  		<tr>
		  			<td><?=$row[0]?></td>
		  			<td><?=$row[1]?></td>
		  			<td><?=$row[2]?></td>
		  			<td>
		  				<form method="post">
		  					<input type="hidden"  name="eno" value="<?=$row[0]?>"/>
		  					<input type="submit" name="cmd" value="Select"/>
		  					<input type="submit" name="cmd" value="Delete"/>
		  				</form>
		  				
		  			</td>
		  		</tr>
		  		
		  		<?php
		  	}
		  }
		?>
	</tbody>
	
</table>




