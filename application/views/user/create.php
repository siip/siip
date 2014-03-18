<div class="container">
	<div id="signup_form">
		<p class="heading">
			New User Signup
		</p>
		<?php echo form_open('userController/create'); ?>
			<p>
				<?php echo form_error('firstname'); ?>
				<?php echo form_label('Prénom :', 'firstname');
				$data = array('name' => 'firstname', 'maxlength' => '5', 'value' => $user -> getFirstname());
				echo form_input($data);
				?>
			</p>
			<p>
				<?php echo form_error('lastname'); ?>
				<label for="lastname">Nom : </label>
				<input type="text" name="lastname" value="<?php echo $user -> getLastname(); ?>"  />
			</p>
			<p>
				<?php echo form_error('email'); ?>
				<label for="email">E-mail: </label>
				<input type="text" name="email" value="<?php echo $user -> getEmail(); ?>" />
			</p>
			<p>
				<?php echo form_error('password'); ?>
				<label for="password">Password: </label>
				<input type="password" name="password" value="" />
			</p>
			<p>
				<?php echo form_error('passconf'); ?>
				<label for="passconf">Confirm Password: </label>
				<input type="password" name="passconf" value="" />
			</p>
			<p>
				<input type="submit" name="submit" value="Valider" />
			</p>
		</form>
		<p>
			<?php echo anchor('home','Home', '')?>
		</p>
	</div>
</div>