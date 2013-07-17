<?php
    $cn=mysql_connect("localhost","root")
					or die(mysql_error());
	$db=mysql_select_db("umang") or die(mysql_error());
	
	$eno=0;
	$ename="";
	$edate="";
	$cmd="";
	$message="";
	
	if(isset($_POST["cmd"])){
		$cmd = $_POST["cmd"];
	}
		
	if($cmd=="ADD"){
		$eno=0+$_POST["eno"];
		$ename=$_POST["ename"];
		$edate=$_POST["edate"];
	    $sql="insert into emp values($eno,'$ename','$edate')";
		$result=mysql_query($sql);
	if($result){
		$message="Empoly record added Sucesfulle";
    	}
	else{
		$massege="can not add empoly date ";
  	    }   
	  }
	if($cmd=="SEARCH"){
		$eno=0+$_POST["eno"];
		$sql="select * from emp where eno=$eno";
		$result=mysql_query($sql);
		if($result){
			if($row=mysql_fetch_array($result)){
				$eno=$row[0];
				$ename=$row[1];
				$edate=$row[2];
			}else{
				$message="empolyee not found";
			}
		}else{
			$message="empolyee not found";
		}
	}
?>
<form method="post">
	<br/>NO:<input type="text" name="eno" value="<?=$eno?>"/>
	<input type="submit" name="cmd" value="SEARCH"/>
	<br/>NAME:<input type="text" name="ename" value="<?=$ename?>"/>
	<br/>DATE:<input type="text" name="edate" value="<?=$edate?>"/>
	<br/><input type="submit" name="cmd" value="ADD"/>
	<input type="submit" name="cmd" value="DELETE"/>
	<input type="submit" name="cmd" value="UPDATE"/>
</form>
<p>
	<?=$message?>
</p>