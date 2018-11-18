<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Go Photo</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="<?php echo base_url() ?>_assets/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>_assets/jquery/jquery.min.js"></script>
	<!-- font-awesome -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>_assets/font-awesome/css/font-awesome.min.css">
	<!-- font -->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/fonts/latofonts.css">
</head>
<body>
	<div id="signin">
		<div class="container">
			<div class="row text-center">
				<div class="col-sm-12 col-md-12">
					<a href="<?php echo base_url() ?>home"><img src="<?php echo base_url() ?>_assets/img/logo.png" style="margin: 60px 0px 40px 0px; alt="logo"></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-login">
						<div class="panel-heading" style="padding-bottom: 0px; border-bottom: 1px solid #e0e0e0">
							<div class="row text-center">
								<div class="col-sm-6 col-md-6">
									<a href="<?php echo base_url() ?>" id="login-form-link" style="text-decoration: none; color: #9e9e9e;">Sign In</a>
								</div>
								<div class="col-sm-6 col-md-6">
									<b><a href="<?php echo base_url() ?>login/register" id="register-form-link" style="text-decoration: none; color: #2979ff;">Register</a></b>
								</div>
							</div>
							<hr>
						</div>
						<div class="panel-body" style="padding-top: 0px;">
							<div class="row" id="register-form">
								<div class="col-sm-12 col-md-12">
									<div class="row">
										<div class="col-sm-12 col-md-12">
											<a href="#" class="btn btn-default col-md-12" style="padding: 10px 12px; margin-bottom: 20px; background-color: #3b5998; color: white;">
												<i class="fa fa-facebook"></i> Sign In With Facebook
											</a>
											<a href="#" class="btn btn-default col-md-12" style="padding: 10px 12px; margin-bottom: 20px; background-color: #00aced; color: white;">
												<i class="fa fa-twitter"></i> Sign In With Twitter
											</a>
											<a href="#" class="btn btn-default col-md-12" style="padding: 10px 12px; margin-bottom: 40px; background-color: #4885ed; color: #fff">
												<i class="fa fa-google"></i> Sign In With Google
											</a>
										</div>
									</div><hr>
									<div class="row" style="margin-top: 40px;">
										<div class="col-sm-12 col-md-12">
											<form action="" method="get" accept-charset="utf-8">
												<div class="form-group">
													<label class="control-label" for="name">Name</label>
													<input class="form-control" type="text" name="name" value="" id="name" placeholder="Name">
												</div>
												<div class="form-group" style="margin-top: 20px;">
													<label class="control-label" for="username">Username</label>
													<input class="form-control" type="text" name="username" value="" id="username" placeholder="Username">
												</div>
												<div class="form-group" style="margin-top: 20px;">
													<label class="control-label" for="email">Email</label>
													<input class="form-control" type="email" name="email" value="" id="email" placeholder="Email">
												</div>
												<div class="form-group" style="margin-top: 20px;">
													<label class="control-label" for="password">Password</label>
													<input class="form-control" type="password" name="password" value="" id="password" placeholder="Password">
												</div>
												<div class="form-group">
													<p style="font-size: 13px; color: #c4c4c4;"><input type="checkbox" name="accept" value="accept"> Dengan ini anda setuju dengan <b>kebijakan privasi</b> dan <b>peraturan</b> yang ada</p>
												</div>
												<div class="form-group" style="margin-top: 24px;">
													<button type="submit" name="register-submit" class="btn btn-info col-md-12" style="padding: 10px 0; margin-bottom: 20px; background-color: #2979ff; color: #fff">Create Account</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>