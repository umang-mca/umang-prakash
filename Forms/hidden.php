<?php
  $name = "";
  $rate = 0;
  $qty = 0;
  $message = "";

   if(isset($_POST["qty"]))
    {
        $qty = 0 + $_POST["qty"];
        $rate = 0 + $_POST["rate"];
        $name = $_POST["name"];
        $amount = $qty * $rate;
        $message = "Product $name@$rate with $qty of amount Rs $amount is added to cart";
          
     }

echo $message;
?>


<form method="post">
  <p>Pencil Rs 5</p>
   <img src="images/back-1.png"/>
  <input type="hidden" name="name" value="Pencil"/>
  <input type="hidden" name="rate" value="5"/>
  <p>Quantity : <input type="text" value="1" name="qty"/>
   
   <input src="images/del.png" type="image" name="cmd" />
</form>


<form method="post">
  <p>Rotomac Pen @Rs 7</p>
<input type="hidden" name="name" value="Rotomac Pen"/>
  <input type="hidden" name="rate" value="7"/>
  <p>Quantity : <input type="text" name="qty"/>
  <input type="submit" name="cmd" value="Add to cart"/>
</form>

<form method="post">
  <p>Navneet book@ Rs 50</p>
<input type="hidden" name="name" value="Navneet book"/>
  <input type="hidden" name="rate" value="50"/>
  <p>Quantity : <input type="text" name="qty"/>
  <input type="submit" name="cmd" value="Add to cart"/>
</form>