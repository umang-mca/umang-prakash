<?php

 $dayNo = 1;
 
 switch($dayNo)
 {
   case 1:
          echo "Monday";
          break;
   case 2:
          echo "Tuesday";
          break;
   default:
          echo "Other";
          break;               
 }
 
 $monthName = 'Feb';
 
 switch($monthName)
 {
   case 'Jan':
   case 'Mar':
   case 'May':
          echo "31 days";
          break;
   case 'Feb':
          echo "28 to 29 days";
          break;
   default:
          echo "Other";
          break;               
 }
 
?>