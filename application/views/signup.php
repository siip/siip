<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!--link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="all"-->
	<title>Signup Form</title>
</head>
<body>

<div id="signup_form">

	<p class="heading">New User Signup</p>

	<form action="http://localhost/siip/index.php/welcome/test" method="post">

	<p>
		<label for="username">Username: </label>
		<input type="text" name="username" value=""  />	</p>
	<p>
		<label for="password">Password: </label>
		<input type="password" name="password" value=""  />	</p>
	<p>

		<label for="passconf">Confirm Password: </label>
		<input type="password" name="passconf" value=""  />	</p>
	<p>
		<label for="email">E-mail: </label>
		<input type="text" name="email" value=""  />	</p>
	<p>
		<input type="submit" name="submit" value="Create my account"  />	</p>
	</form>

</div>

</body>
</html>
