<!doctype html>

<style>
	.deleteBox{
		 background:#eee;
		 border:1px solid black;
		 padding:10px;
		 width:300px;
		 position: absolute;
		 left:20px;
		 top:20px;
	}
	input[type="submit"]{
		 background: orange;
		 padding:3px;
		 border-radius: 4px;
		 
	}
	thead
	{
		background:black;
		color:orange;
	}
	th{padding:10px;}
	table
	{
		border:1px solid black;
	}
</style>

<?php
  $cn = mysql_connect("localhost","root") or die(mysql_error());
  $db = mysql_select_db("prakashdb") or die(mysql_error());

  $cmd = "";
  
  if(isset($_POST["cmd"])){
  	 $cmd = $_POST["cmd"];
  }
  
  if($cmd == "Yes"){
  	 //Code to delete emp
  	  $eno = 0 + $_POST["eno"];
	 
  	 $sql = "delete from  emp  where eno=$eno";
	 $result = mysql_query($sql);
  }
?>

<table cellpadding="0" cellspacing="0">
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


<?php
  if($cmd == "Delete")
  {
  	$eno = $_POST["eno"];
  	?>
  	<div class="deleteBox">
  		
  	 <h4>Are you sure to delete? <?=$eno?> employee</h4>
  	 <form method="post">
  	 	<input type="hidden" name="eno" value="<?=$eno?>"/>
  	 	<input type="submit" name="cmd" value="Yes"/>
  	 	<input type="submit" name="cmd" value="No"/>
  	 </form>
  	 </div>
  	<?php
  }
?>
