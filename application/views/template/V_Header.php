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
	<link href='<?= base_url() ?>_assets/dropzonejs/dropzone.css' type='text/css' rel='stylesheet'>
	<script src='<?= base_url() ?>_assets/dropzonejs/dropzone.js' type='text/javascript'></script>
	<style>
	.isi{
		width: 100%;
		padding: 5px;
		margin: 0 auto;
	}
	.isi span{
		width: 250px;
	}
	.dz-message{
		text-align: center;
		font-size: 14px;
		font-weight: bold;
		position: absolute;
		top: 45%;
		left: 50%;
		transform: translate(-50%,-50%);
	}

	.dz-message p{
		color: #E0E0E0;
		font-weight: normal;

	}

	.dropzone{
		height: 320px;
	}
</style>
<script>
    // Add restrictions
    Dropzone.options.fileupload = {
    	init: function() {
    		this.on("success", function(file, responseText) {
      		// Jika file berhasil diupload
      		window.location = "<?php echo base_url('home/detailupload') ?>";
  			});
    	},
    	acceptedFiles: 'image/*',
	    maxFilesize: 10, // MB
	    addRemoveLinks : true,
	    dictDefaultMessage : 'Choose a file or drag it here <p> The image has to to </p>',
	    dictResponseError : 'Gagal'
  };
</script>
</head>
<body>
	<nav class="navbar navbar-default" style="min-height: 60px;">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>_assets/img/logo2.png" alt="logo"></a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="#" style="padding-top: 23px;">Snap</a></li>
				<li><a href="<?php echo base_url() ?>event" style="padding-top: 23px;">Event</a></li>
				<li><a href="<?php echo base_url() ?>job" style="padding-top: 23px;">Job</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php if ( $this->session->userdata('isLogin') == TRUE ): ?>
					<li><a class="btn btn-default" style="background-color: #2979ff; color: #ffffff; padding: 10px 15px; margin: 8px 30px 0 0;" <?php if($this->session->userdata('isOnUploadSnap') == FALSE ) { ?>data-toggle="modal" data-target="#myModal" <?php }else{?> href="home/detailupload" <?php } ?>><i class="fa fa-upload"></i> Upload</a></li>
					<li><a href="#" style="padding-top: 21px"><i class="fa fa-search fa-lg"></i></a></li>
					<li><a href="#" style="padding-top: 21px"><i class="fa fa-bell fa-lg"></i></a></li>
					<li><a href="#" style="padding-top: 21px"><i class="fa fa-envelope fa-lg"></i></a></li>
					<li><a href="<?php echo base_url() ?>profile"><img src="<?php echo base_url('uploads/'.md5($this->session->userdata('id')).'/avatar.jpg') ?>" class="img img-responsive img-circle" style="width: 28px; height:28px;object-fit: cover;margin-left: 5px;" alt="profile"></a></li>
					<?php else: ?>
						<li><a href="<?php echo base_url() ?>login" style="padding-top: 23px;">Sign In</a></li>
						<li><a href="<?php echo base_url() ?>login/register" style="padding-top: 23px;">Sign Up</a></li>
					<?php endif; ?>
				</ul>
			</div>
		</nav>