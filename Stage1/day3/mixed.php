<?php
  $isLogin = true;
?>

<?php
  if($isLogin){
?>

<h1>Welcome to the web</h1>

<?php
  }else{
?>

<form>
	<p>Username</p>
	<p><input type="text" name="username"/></p>
	<p>Password</p>
	<p><input type="password" name="password"/></p>
	<p>
		<input type="submit"/>
	</p>
</form>

<?php
  }
?>