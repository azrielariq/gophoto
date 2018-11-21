<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-body">
				<div class="isi">
					<form action="<?php echo(base_url('Home/fileupload')) ?>" class="dropzone" id="fileupload">
					</form> 
				</div>
			</div>
		</div>
	</div>
</div>
<div id="snap" class="modal fade" role="dialog">
	<div class="modal-dialog" style="width: 90%; margin: 60px auto">
		<!-- Modal content-->
		<div class="modal-content" style="border-radius: 0px;">
			<div class="modal-body" style="border-radius: 0px; padding: 0px">

				<img src="#" style="width: 65%;" id="imgdetailsnap">

				<div class="snapdetail" id="snapdetail" style="width: 35%;height:0px;float: right;padding: 50px;overflow-y: scroll;">
					<div class="publishdate" style="color: #C4C4C4; font-size: 12px">Published : 20 Jaunari 2018</div>
					<div class="profile" style="margin-top: 20px;">
						<div class="contentprofile" style="width: 85%;float: left">
							<div class="title-snap" style="font-size: 18px;font-weight: bold" id="title-snap">
								Slamet Mountain
							</div>
							<div class="author" id="author" style="color: #212121; font-size: 12px">
								@wakwaw
							</div>
						</div>
						<div class="photoprofile" style="width: 15%;float: right;">
							<img src="<?php echo base_url('uploads/'.md5($this->session->userdata('id')).'/avatar.jpg') ?>" class="contentphotoprofile img img-responsive img-circle" style="width: 37px; height:37px;object-fit: cover;margin-left: 5px;" alt="profile">
						</div>
					</div>
					<button class="btn" style="background-color: #2979FF;color: white;width: 100%;height: 40px;margin-top: 20px;">Follow</button>
					<div class="descriptionsnap" id="descriptionsnap" style="margin-top: 38px;color: #9E9E9E; font-size: 14px; line-height: 26px">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation .....</p>
					</div>
					<div class="tags" style="margin-top: 40px;">
						<div class="row" id="list-tag" style="margin: -5px">

						</div>
					</div>
					<div class="like-download" style="margin-top: 40px">
						<div class="row" style="margin: -5px">
							<div class="love" style="float: left; border: 1px solid #C4C4C4;border-radius: 4px; padding: 20px 20px; margin: 5px;">
								<img src="<?php echo base_url();?>_assets/img/love.png" style="float: left">
								<div class="love-sum" style="float: left">12</div>
							</div>
							<div class="download" style="float: left; border: 1px solid #C4C4C4;border-radius: 4px; padding: 20px 20px; margin: 5px;">
								<img src="<?php echo base_url();?>_assets/img/download.png">
							</div>
						</div>
					</div>
					<div class="comment" style="font-size: 14px;font-weight: bold;margin-top: 40px">
						Comments (20)
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<div id="fresh">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<p style="text-align: center; font-size: 24px; margin: 50px 0px 40px;"><b>Fresh Photo</b></p>
				<p style="text-align: center; color: #9e9e9e; margin-bottom: 40px;">Temukan foto-foto terbaru dengan tampilan segar dan epik sesuai dengan kategori yang tersedia dari<br>fotografer yang anda ikuti</p>
				<div class="row">
					<?php foreach ($fresh_snap as $fs) { ?>
						<div class="col-sm-4 col-md-4" style="margin-bottom: 40px;" data-toggle="modal" data-target="#snap" onclick="showDetail('<?php echo $fs->img ?>');">
							<img src="<?php echo base_url('uploads/'.md5($fs->id_user).'/'.$fs->img) ?>" class="img img-responsive" alt="thumbnail" style="border-top-left-radius: 4px; border-top-right-radius: 4px;width:100%;height: 220px; object-fit: cover;">
							<div class="col-sm-12 col-md-12" style="border: 1px solid #e0e0e0; background-color: #fafafa; border-bottom-left-radius: 4px; border-bottom-right-radius: 4px;">
								<img src="<?php echo base_url('uploads/'.md5($fs->id_user).'/') ?>avatar.jpg" class="img img-responsive img-circle" alt="avatar" style="width: 36px; float: left; margin: 22px 10px 22px 5px;">
								<p style="margin-top: 30px; font-size: 15px;"><?php echo $fs->name ?></p>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="event" style="margin-top: 30px;">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<h2 class="text-center" style="margin-bottom: 40px;">Event di Bulan Ini</h2>
				<p class="text-center" style="color: #9e9e9e; margin-bottom: 40px;">Dapatkan berbagai ilmu dengan mengikuti event yang anda inginkan berdasarkan ketertarikan dan<br>ketersediaan waktu yang anda miliki</p>
				<div class="row">
					<div class="col-sm-4 col-md-4">
						<img src="<?php echo base_url() ?>_assets/img/home/e1.jpg" class="img img-responsive" alt="thumbnail" style="border-top-left-radius: 4px; border-top-right-radius: 4px;">
						<div class="col-sm-2 col-md-2 text-center" style="background-color: #2979ff; border-radius: 5px; margin: 20px 0px;">
							<p style="color: #ffffff; margin: 10px 0;">26<br>AUG</p>
						</div>
						<div class="col-sm-10 col-md-10" style="margin: 20px 0px;">
							<h4 style="margin: 5px 0 10px;">Interior Design Workshop</h4>
							<p style="color: #c4c4c4;"><i class="fa fa-map-marker fa-lg" style="width: 20px;"></i>Jl. DI Panjaitan No.10 Purwokerto</p>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-12">
								<p style="color: #9e9e9e;">Do you think it's important to learn Interior Design<br>from the beginning in the era of Social Media where<br>everything seems so easy?</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4">
						<img src="<?php echo base_url() ?>_assets/img/home/e2.jpg" class="img img-responsive" alt="thumbnail" style="border-top-left-radius: 4px; border-top-right-radius: 4px;">
						<div class="col-sm-2 col-md-2 text-center" style="background-color: #2979ff; border-radius: 5px; margin: 20px 0px;">
							<p style="color: #ffffff; margin: 10px 0;">28<br>AUG</p>
						</div>
						<div class="col-sm-10 col-md-10" style="margin: 20px 0px;">
							<h4 style="margin: 5px 0 10px;">Telling Street Photography</h4>
							<p style="color: #c4c4c4;"><i class="fa fa-map-marker fa-lg" style="width: 20px;"></i>Gedung Maratula No.9</p>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-12">
								<p style="color: #9e9e9e;">Gathot Subroto is a practitioner and instructor<br>of photography based in Jakarta & Bali</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4">
						<img src="<?php echo base_url() ?>_assets/img/home/e3.jpg" class="img img-responsive" alt="thumbnail" style="border-top-left-radius: 4px; border-top-right-radius: 4px;">
						<div class="col-sm-2 col-md-2 text-center" style="background-color: #2979ff; border-radius: 5px; margin: 20px 0px;">
							<p style="color: #ffffff; margin: 10px 0;">30<br>AUG</p>
						</div>
						<div class="col-sm-10 col-md-10" style="margin: 20px 0px;">
							<h4 style="margin: 5px 0 10px;">Photography Festival Kompas</h4>
							<p style="color: #c4c4c4;"><i class="fa fa-map-marker fa-lg" style="width: 20px;"></i>Jl. Kebon Anggrek Baturaden</p>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-12">
								<p style="color: #9e9e9e;">In 2018 this is an important sporting moment<br>for the Indonesian people. For the second time since 1962</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="job" style="border-top: 1px solid #e0e0e0; background-color: #fafafa; margin: 80px 0 0;">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<h2 class="text-center" style="margin: 60px 0 40px;">Job Terbaru</h2>
				<p class="text-center" style="color: #9e9e9e;">Lihat dan temukan berbagai informasi lowongan pekerjaan yang tersedia di industri digital sesuai<br>kemampuan dan passion anda</p>
				<div class="row" style="margin-bottom: 60px;">
					<div class="col-sm-12 col-md-12">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
									<div class="row text-center">
										<div class="col-sm-6 col-md-6">
											<img src="<?php echo base_url() ?>_assets/img/avatar.jpg" class="img img-responsive img-circle" style="width: 36px;" alt="avatar">
											<h3>Studio Photo</h3>
											<p>Junior Photographer</p>
											<p style="color: #c4c4c4;"><i class="fa fa-map-marker fa-lg" style="width: 20px;"></i>Jl. Kebon Anggrek Baturaden</p>
										</div>
										<div class="col-sm-6 col-md-6"></div>
									</div>
								</div>

								<div class="item">
									<img src="chicago.jpg" alt="Chicago">
								</div>

								<div class="item">
									<img src="ny.jpg" alt="New York">
								</div>
							</div>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#myCarousel" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

