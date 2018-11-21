	<div id="footer" style="background-color: #212121;">
		<div class="container">
			<div class="row" style="border-bottom: 1px solid #ffffff">
				<div class="col-sm-6 col-md-6">
					<a href="#" style="float: left; margin: 38px 34px 38px 0;"><img src="<?php echo base_url() ?>_assets/img/logo2.png" alt="logo"></a>
					<ul class="list-inline" style="margin-top: 45px;">
						<li><a href="#" style="color: #ffffff; text-decoration: none; padding-right: 20px;">About</a></li>
						<li><a href="#" style="color: #ffffff; text-decoration: none; padding-right: 20px;">Help</a></li>
						<li><a href="#" style="color: #ffffff; text-decoration: none; padding-right: 20px;">Contact</a></li>
						<li><a href="#" style="color: #ffffff; text-decoration: none;">FAQ</a></li>
					</ul>
				</div>
				<div class="col-sm-6 col-md-6">
					<ul class="list-inline" style="float: right; margin-top: 45px;">
						<li><a href="#" style="color: #ffffff; text-decoration: none; padding-right: 20px;"><i class="fa fa-twitter fa-lg"></i></a></li>
						<li><a href="#" style="color: #ffffff; text-decoration: none; padding-right: 20px;"><i class="fa fa-instagram fa-lg"></i></a></li>
						<li><a href="#" style="color: #ffffff; text-decoration: none;"><i class="fa fa-facebook fa-lg"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="row" style="margin-top: 30px; margin-bottom: 30px; color: #ffffff">
				<div class="col-sm-6 col-md-6">
					<span>Copyright &copy 2018 GoPhoto All Right Reserved</span>
				</div>
				<div class="col-sm-6 col-md-6">
					<ul class="list-inline" style="float: right;">
						<li><a href="#" style="color: #ffffff; text-decoration: none;">Terms and Condition</a></li>
						<li><p> | </p></li>
						<li><a href="#" style="color: #ffffff; text-decoration: none;">Privacy</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

</body>
<script type="text/javascript">
	function showDetail(imgname){
		$.ajax({
			url		: '<?php echo base_url()?>home/getDataSnap',
		//mengirimkan username dan password ke script login.php
		data	: 'imgname='+imgname, 
		//Method pengiriman
		type	: 'POST',
		//Data yang akan diambil dari script pemroses
		dataType: 'JSON',
		//Respon jika data berhasil dikirim
		success	: function(pesan){
			var jumlah = pesan.length;
			console.log(pesan.dir);
			var img = document.getElementById('imgdetailsnap');
			var description = document.getElementById('descriptionsnap');
			img.setAttribute("src","uploads/"+pesan.dir+"/"+pesan.img);
			description.innerHTML = '<p>'+pesan.description;
			var tags = document.getElementById('list-tag');
			var tagslength = pesan.tags.length;
			tags.innerHTML = "";
			for (var i = 1; i < tagslength;i++){
				tags.innerHTML += '<div class="tag" style="background-color: #C4C4C4; color: white; font-size: 12px; padding:13px 20px 13px 20px; float: left; margin: 5px;border-radius: 4px">'+pesan.tags[i];
			}
			var author = document.getElementById('author');
			author.innerHTML = '@'+pesan.author;
			var title_snap = document.getElementById('title-snap');
			title_snap.innerHTML = pesan.title;
			
		},
	});

		setTimeout(function() {
			var img = document.getElementById('imgdetailsnap');
            var detailsnapcontent = document.getElementById('snapdetail');
			var height = img.clientHeight;
			detailsnapcontent.style.height = height+"px";
			console.log(height);
        }, 1000)

	}

</script>
</html>