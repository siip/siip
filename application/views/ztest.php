<div class="container">
	<div id="signup_form">
		<p class="heading">
			New User Signup
		</p>
		<form action="http://localhost/siip/index.php/welcome/test" method="post">
			<p>
				<label for="firstname">Prénom : </label>
				<input type="text" name="firstname" value="" />
			</p>
			<p>
				<label for="lastname">Nom : </label>
				<input type="text" name="lastname" value="" />
			</p>
			<p>
				<label for="password">Password: </label>
				<input type="password" name="password" value="" />
			</p>
			<p>
				<label for="passconf">Confirm Password: </label>
				<input type="password" name="passconf" value="" />
			</p>
			<p>
				<label for="email">E-mail: </label>
				<input type="text" name="email" value="" />
			</p>
			<p>
				<input type="submit" name="submit" value="Create my account" />
			</p>
		</form>
	</div>
</div>