<?php
 $code = '
 &lt;?php
 
   echo "Hello World";
 
 ?&gt;
 ';
 		  
?>

<!DCOTYPE html>

<html lang="en">
	<head>
		<title>First layout</title>
		<link href="css/style.css" rel="stylesheet"/>
	</head>
	<body>
		<div id="container">
			<div id="header">
				<h1>Site Title</h1>
			</div>
			<div id="nav-bar">
				<a href="index.php">Home</a>
				<a href="about.php">About us</a>
			</div>
			<div id="content">
				<h3>About us</h3>
				<table class="info-table" cellpadding="0" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>Birth Date</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>10</td>
							<td>Mr. Rajendra prashad</td>
							<td>1<sup>st</sup> Jan 1872</td>
						</tr>
						<tr>
							<td>20</td>
							<td>Mr. Manamohan Desai</td>
							<td>2<sup>nd</sup> Jan 1772</td>
						</tr>
						<tr>
							<td>30</td>
							<td>Mr. Manamohan Desai</td>
							<td>2<sup>nd</sup> Jan 1772</td>
						</tr>
						<tr>
							<td>30</td>
							<td>Mr. Manamohan Desai</td>
							<td>2<sup>nd</sup> Jan 1772</td>
						</tr>
						<tr>
							<td>30</td>
							<td>Mr. Manamohan Desai</td>
							<td>2<sup>nd</sup> Jan 1772</td>
						</tr>
						<tr>
							<td>30</td>
							<td>Mr. Manamohan Desai</td>
							<td>2<sup>nd</sup> Jan 1772</td>
						</tr>
					</tbody>

				</table>

<div>
	<pre>
		<?=$code?>
		&lt;p&gt;
		
		
	</pre>
	
</div>				 
				 
				
			</div>
			<div id="footer">
				<p>
					&copy; SiteName - 2013
				</p>
				<p>
					<a href="#">Home</a>
					<a href="#">About us</a>
					<a href="#">Contact us</a>
					<a href="#">Policy</a>
					<a href="#">FAQ</a>

				</p>
			</div>
		</div>
	</body>
</html>
