<?php
$title = "List the categories";
include "header.php";
?>
<div class="form">
	<h2>Product</h2>
	<a class="my-button" href="new-product.php">New Product</a>
	<table cellpadding="0"  cellspacing="0" class="table">
		<thead>
			<tr>
				<th>Cateogry</th>
				<th>Product ID</th>
				<th>Product Name</th>
				<th>Price (Rs)</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Pen</td>
				<td>1</td>
				<td>Natraj Pencil Hb 6</td>
				<td>5.00</td>
				<td></td>
			</tr>
	 
		</tbody>
	</table>
</div>
<?php
include "footer.php";
?>