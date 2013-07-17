<?php
  print_r($_POST);
?>

<form method="post">
  <br/>Text : <input type="text" name="name"/>
  <br/>Password : <input type="password" name="password"/>
  <br/>Radio: <input type="radio" value="Male" name="gender"/>
  <br/>Checkbox <input type="checkbox" value="One" name="one"/>
  <br/><input type="checkbox"  value="Two" name="two"/>
  <br/>Email: <input type="email" name="email"/>
  <br/>Date: <input type="date" name="date"/>
  <br/>Number: <input type="number" name="num"/>
  <br/> DropDown
   <select name="country">
      <option value="IN">India</option>
      <option value="US">United States Of America</option>
      <option value="UK">United Kingdom</option>
   </select>
<br/> ListBox
 <select name="states" size="5">
      <option value="IN">India</option>
      <option value="US">United States Of America</option>
      <option value="UK">United Kingdom</option>
   </select>
  <br/>TextArea : <textarea name="address"></textarea>
  <br/>Hidden: <input type="hidden" value="1" name="hidden"/>
  <br/>Color: <input type="color" name="color"/>
  <br/>Datetime: <input type="datetime" name="dt"/>
  <br/>Range: <input type="range" name="range"/>
  <br/>Month: <input type="month"  name="month"/>
  <br/>Week : <input type="week" name="week"/>
  <br/>Tel: <input type="tel" name="tel" />
  <br/>Time: <input type="time" name="time" />
  <br/>Search : <input type="search" name="search" />
  
  <br/><input type="submit" name="cmd"/>
  <br/><input type="image" src="aaa.png" name="cmd"/>
  <br/><input type="button" value="one" name="button"/>  


</form>