<?php
$title = "Welcome";
include "header.php";

$message = "";
$cmd = "";
$categoryName = "";

if(isset($_POST["cmd"])){
	$cmd = $_POST["cmd"];
}

if($cmd == "Submit"){
	 $categoryName = $_POST["categoryName"];
	 $cn = mysql_connect("localhost", "root") or die(mysql_error());
	 $db = mysql_select_db("prakashdb") or die(mysql_error());
	 $query = "insert into category (CategoryName) values ('$categoryName')";
	 $result  = mysql_query($query);
	 if($result)
	  $message = "Category added successfully";
	 else
	 	$message = "Cannot add category";
		
}

?>
<div class="form">
	<h2>Category</h2>
	 <form method="post">
	 	<p><label>Category Name</label></p>
	 	<p><input type="text" name="categoryName"></p>
	 	<p><?=$message?></p>
	 	<p>
	 		<input type="submit" name="cmd" value="Submit"/>
	 	</p>
	 </form>
</div>
<?php
include "footer.php";
?>