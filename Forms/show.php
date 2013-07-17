<?php

 //define variable to store input value

 $no = 0;
 $name = "";

 //Verify the keys of $_POST

 if(isset($_POST["no"], $_POST["name"]))
  {
    //verify the values of keys
    if(!empty($_POST["no"]) && !empty($_POST["name"]))
      {
        $no = 0 + $_POST["no"];
        $name = $_POST["name"];
        echo "Valid data are $no and $name";
       }
    else
      {
        echo "Invalid data";
       }
   }
 else
  {
    echo "Invalid keys";
   }
?>
<a href="emp1.php">Back</a>