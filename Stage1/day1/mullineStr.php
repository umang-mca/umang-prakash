<?php

 $roll = 10;
 $name = "Rajesh";

 $info = "
Dear $name,
<p>
  I'm you class teacher
  </p>
<p>and I've assign $roll
to you.</p>";

 echo $info;


$loginForm = '
<form method="post">
  <p>
   Username : <input type="text"/>
  </p>
  <p>
   Password : <input type="password"/>
  </p>
</form>';

echo $loginForm;
?>