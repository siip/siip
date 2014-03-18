<div class="container">
	<ul>
	<?php foreach ($users as $user):;
		echo '<li>';
		echo anchor('userController/read/'.$user -> getId(),$user -> getFirstname() . ' ' . $user -> getLastname(),'');
		echo ' : ' . $user -> getEmail();
		echo '</li>';
	endforeach ?>
	</ul>
	<p>
		<?php $hidden = array('userId' => '');
		echo anchor('userController/read/'.'','New User', $hidden)?>
	</p>
</div>