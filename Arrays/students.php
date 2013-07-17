<!doctype html>

<head>
  <link rel="stylesheet" type="text/css"
        href="css/style.css"/>
</head>

<?php

  $stds=array();

  $stds[] = array("no"=>10,"name"=>"Raj",55,66,77);
  $stds[] = array("no"=>20,"name"=>"Mohan",85,76,97);
$stds[] = array("no"=>20,"name"=>"Mohan",85,76,97);
$stds[] = array("no"=>20,"name"=>"Mohan",85,76,97);
$stds[] = array("no"=>20,"name"=>"Mohan",85,76,97);
$stds[] = array("no"=>20,"name"=>"Mohan",85,76,97);
$stds[] = array("no"=>20,"name"=>"Mohan",85,76,97);
$stds[] = array("no"=>20,"name"=>"Mohan",85,76,97);
?>

<table cellspacing="0" cellpadding="0">
 <thead>
  <tr>
   <th>No</th>
   <th>Name</th>
   <th>English</th>
   <th>Maths</th>
   <th>Gujarati</th>
   <th>Total</th>   
   <th>Percent</th>
   <th>Grade</th>
  </tr>
 </thead>

 <tbody>
  <?php
     foreach($stds as $s)
     {
       $total = $s[0] + $s[1] + $s[2];
       $per = $total / 3;
       $grade = "";

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
         <td><?=$per?></td>
         <td><?=$grade?></td>
       </tr>

   <?php
      }
   ?>
 </tbody>
</table>
 

