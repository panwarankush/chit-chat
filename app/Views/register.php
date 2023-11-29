<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v10 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
		<div class="wrapper">
			<div class="inner">
				<img src="images/image-1.png" alt="" class="image-1">
				<form method="post" action="<?php echo base_url() . 'register';?>">
					<h3>New Account? </h3>
					<!-- <h5 style="color:#ff4c4c; margin-left:17px">
						<?php //if (isset($validation)): ?>
							<?php //echo \Config\Services::validation()->listErrors(); ?>
						<?php //endif; ?>
					</h5>  -->
					<?php $validation = \config\Services::validation(); ?>

					<p class="form-error"><?= $validation->getError('first'); ?></p>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" name="first" placeholder="First Name" value="<?= set_value('first'); ?>">
					</div>

					<p class="form-error"><?= $validation->getError('last'); ?></p>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" name="last" placeholder="Last Name" value="<?= set_value('last'); ?>">
					</div>

					<p class="form-error"><?= $validation->getError('phone'); ?></p>
					<div class="form-holder">
						<span class="lnr lnr-phone-handset"></span>
						<input type="text" class="form-control" name="phone"  placeholder="Phone Number" value="<?= set_value('phone'); ?>">
					</div>

					<p class="form-error"><?= $validation->getError('email'); ?></p>
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="email" class="form-control" name="email"  placeholder="Email" value="<?= set_value('email'); ?>">
					</div>

					<p class="form-error"><?= $validation->getError('password'); ?></p>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" name="password"  placeholder="Password" value="<?= set_value('password'); ?>">
					</div>

					<p style="color:#ff4c4c"><?= $validation->getError('gender'); ?></p>
					<div class="form-holder">
						 
						<input type="radio" name="gender" value="Male">
						<label for="html">Male</label>
						<input type="radio"  name="gender" value="Female">
						<label for="css">Female</label>
						
					</div>
					<button style="margin-bottom: 10px;">
						<span>Register</span>
					</button>
					Already Registered? <a href="/">Login Here</a>

				</form>
				<img src="images/image-2.png" alt="" class="image-2">
			</div>
			
		</div>
	</body>
</html>