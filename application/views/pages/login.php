<div class="container">

	<!-- <form class="form-signin"> -->

	<?php 
	$attri = array('class'=> 'form-signin');
	echo form_open('raffle/log_me_in', $attri); ?>
		<h2 class="form-signin-heading">Login</h2>
		<?php echo validation_errors(); ?>
		<label for="inputEmail" class="sr-only"></label>
		<input type="name" id="inputEmail" class="form-control" placeholder="Username" required="" autofocus="" name="username">
		<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" name="password">
		<!-- <div class="checkbox">
			<label>
				<input type="checkbox" value="remember-me"> Remember me
			</label>
		</div> -->
		<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	</form>

</div>