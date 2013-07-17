<?php
$title = "List the categories";
include "header.php";
?>
<div class="form">
	<h2>Category</h2>
	<a class="my-button" href="new-category.php">New Category</a>
	<table cellpadding="0"  cellspacing="0" class="table">
		<thead>
			<tr>
				<th>Category ID</th>
				<th>Category Name</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>

			<?php
		$cn = mysql_connect("localhost", "root") or die(mysql_error());
		$db = mysql_select_db("prakashdb") or die(mysql_error());

		$sql = "select * from category";
		$result = mysql_query($sql);

		if ($result) {
			while($row = mysql_fetch_array($result)){
			?>
			<tr>
				<td><?=$row[0] ?></td>
				<td><?=$row["CategoryName"] ?></td>
				<td></td>
			</tr>
			<?php
			}
			}
			?>
		</tbody>
	</table>
</div>
<?php
include "footer.php";
?>