<?php
$title = "Add new product";
include "header.php";

 
?>
<div class="form">
	<h2>Product</h2>
	 <form method="post">
	 	<p><label>Category</label></p>
	 	<p>
	 		<select name="category">
	 			<option value="0">***Select***</option>
	 		</select>
	 	</p>
	 	<p><label>Product Name</label></p>
	 	<p><input type="text" class="w300" name="productName"></p>
	 	
	 	<p><label>Product Price (Rs)</label></p>
	 	<p><input type="text" name="productPrice"></p>
	 	
	 	<p> </p>
	 	<p>
	 		<input type="submit" name="cmd" value="Submit"/>
	 	</p>
	 </form>
</div>
<?php
include "footer.php";
?>