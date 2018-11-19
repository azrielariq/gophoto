<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Go Photo</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="<?php echo base_url() ?>_assets/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>_assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- font-awesome -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>_assets/font-awesome/css/font-awesome.min.css">
	<!-- font -->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/fonts/latofonts.css">
	<!-- custom css -->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/style.css">
</head>
<body>
	<nav class="navbar navbar-default" style="min-height: 60px;">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo base_url() ?>home"><img src="<?php echo base_url() ?>_assets/img/logo2.png" alt="logo"></a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="#" style="padding-top: 23px;">Snap</a></li>
				<li><a href="<?php echo base_url() ?>event" style="padding-top: 23px;">Event</a></li>
				<li><a href="<?php echo base_url() ?>job" style="padding-top: 23px;">Job</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php if ( $this->session->userdata('user') ): ?>
					<li><a href="#" class="btn btn-default" style="background-color: #2979ff; color: #ffffff; padding: 10px 15px; margin: 8px 30px 0 0;"><i class="fa fa-upload"></i> Upload</a></li>
					<li><a href="#" style="padding-top: 21px"><i class="fa fa-search fa-lg"></i></a></li>
					<li><a href="#" style="padding-top: 21px"><i class="fa fa-bell fa-lg"></i></a></li>
					<li><a href="#" style="padding-top: 21px"><i class="fa fa-envelope fa-lg"></i></a></li>
					<li><a href="<?php echo base_url() ?>profile"><?php echo $this->session->userdata('user')['avatar'] ?></a></li>
							
				<?php else: ?>
					<li><a href="<?php echo base_url() ?>login" style="padding-top: 23px;">Sign In</a></li>
					<li><a href="<?php echo base_url() ?>login/register" style="padding-top: 23px;">Sign Up</a></li>
				<?php endif; ?>
			</ul>
		</div>
	</nav>
