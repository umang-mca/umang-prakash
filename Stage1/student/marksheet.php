<!DOCTYPE html>
<head>
	<link href="css/style.css" rel="stylesheet" />
</head>
</html>
<?php

$studs=array();
$studs[]=array("no"=>10,"name"=>"prakash",99,99,99);
$studs[]=array("no"=>20,"name"=>"raj",66,77,99);
$studs[]=array("no"=>30,"name"=>"ronak",88,87,79);
$studs[]=array("no"=>40,"name"=>"dipak",66,55,99);
$studs[]=array("no"=>50,"name"=>"rahul",66,88,69);
$studs[]=array("no"=>60,"name"=>"vijay",43,77,99);
$studs[]=array("no"=>70,"name"=>"ajay",66,77,59);
?>
<table cellpadding="0" cellspacing="0">
	<caption><h1>MarkSheet</h1></caption>
	<thead>
		<tr>
			<th>No</th>
			<th>name</th>
			<th>english</th>
			<th>maths</th>
			<th>science</th>
			<th>total</th>
			<th>percentage</th>
			<th>grade</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach($studs as $s)
		{
			$total=$s[0]+$s[1]+$s[2];
			$per=$total/3;
			$grade="";
			
			if($per>=70)
			   $grade = "A";
			else
                        if($per>=60)
				$grade = "B";
			else
				$grade = "C";
			
			?>
			<tr>
				<td><?=$s["no"]?></td>
				<td><?=$s["name"]?></td>
				<td><?=$s[0]?></td>
				<td><?=$s[1]?></td>
				<td><?=$s[2]?></td>
				<td><?=$total?></td>
				<td><?=round($per)?>%</td>
				<td><?=$grade?></td>
			</tr>
		<?php
		}
		?>
	</tbody>
</table>