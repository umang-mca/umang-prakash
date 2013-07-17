<?php

 $name = "Rajesh";
 $date = "10-10-2002";

  $str = <<<'ABC'
Dear Sir $name

<p style="border:1px solid black">
 With reference to "your" advertisements
 on dated '$date'.
</p>
<p>
Thanking You,
</p>
<p style="color:red">
  <strong>Mr. ABC</strong>
</p>
ABC;

 
  echo $str;
?>
