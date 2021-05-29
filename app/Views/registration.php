<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/css/login.css'); ?>">
    <title>Document</title>
</head>
<body>
    <div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="<?php echo base_url('public/assets/image/log_logo.jpg'); ?>" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="<?= base_url('user/save'); ?>" method="post">
					<?= csrf_field() ?>
					<?php if(!empty(session()->getFlashdata('fail'))) : ?>
						<div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
					<?php endif; ?>

					<?php if(!empty(session()->getFlashdata('success'))) : ?>
						<div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
					<?php endif; ?>
					<span style="" class="text-danger"><b><?= isset($validation) ? display_error($validation , 'name') : '' ?></span></b>
                        <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="name" class="form-control input_user" value="<?= set_value('name') ?>" placeholder="Enter username">
						</div>
					<span style="" class="text-danger"><b><?= isset($validation) ? display_error($validation , 'email') : '' ?></span></b>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="email" class="form-control input_user" value="<?= set_value('email') ?>" placeholder="Enter email">
						</div>
					<span style="" class="text-danger"><b><?= isset($validation) ? display_error($validation , 'password') : '' ?></span></b>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" value="<?= set_value('password') ?>" placeholder="Enter password">
						</div>
					<span style="" class="text-danger"><b><?= isset($validation) ? display_error($validation , 'cpassword') : '' ?></span></b>	
                        <div class="input-group d-flex justify-content-center mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="cpassword" class="form-control input_pass" value="<?= set_value('cpassword') ?>" placeholder="Re-enter password">
						</div>

						<!--<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>-->
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit"  class="btn login_btn">Registration</button>
				   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Don have an account? <a href="<?php echo base_url('user/'); ?>" class="ml-2">Sign In</a>
					</div>
                <!--<div class="d-flex justify-content-center links">
						<a href="#">Forgot your password?</a>
					</div>-->
				</div>
			</div>
		</div>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="<?php echo base_url('public/assets/js/bootstrap.min.js'); ?>"></script>
   <script src="<?php echo base_url('public/assets/js/bootstrap.bundle.min.js'); ?>"></script>
   <script src="<?php echo base_url('public/assets/js/jquery.min.js'); ?>"></script>
</body>
</html>