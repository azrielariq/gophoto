<!-- <img src="<?php echo base_url('uploads/'.$dir.'/'.$img) ?>" style="max-width: 300px; height: auto">
<form action="<?php echo base_url('home/uploaddetail') ?>" method="POST">
	<input type="text" name="title" placeholder="Title" required="">
	<input type="text" name="tags" placeholder="Tags">
	<textarea name="description" placeholder="Description"></textarea>
	<button type="submit" value="Upload">Upload !</button>
</form> -->
<div id="upload" style="margin-bottom: 120px;">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<p style="text-align: center; color: #c4c4c4; font-size: 18px; margin: 20px 0 40px;">Home >> Upload</p>
				<div class="row">
					<div class="col-sm-4 col-md-4" style="border: 1px solid #e0e0e0; background-color: #fafafa; border-radius: 4px;">
						<img src="<?php echo base_url('uploads/'.$dir.'/'.$img) ?>" class="img img-responsive" style="border-radius: 4px; padding: 20px 5px;" alt="snap">
					</div>
					<div class="col-sm-7 col-md-7" style="margin-left: 40px; background-color: #fafafa; border: 1px solid #e0e0e0; border-radius: 4px;">
						<div class="row">
							<div class="col-sm-12 col-md-12" style="padding: 60px;">
								<form action="<?php echo base_url('home/uploaddetail') ?>" method="POST">
								<div class="form-group" style="margin-bottom: 40px;">
									<label class="control-label" for="title">Title</label>
									<input class="form-control" type="text" name="title" value="" id="title" placeholder="Put your title here...">
								</div>
								<div class="form-group" style="margin-bottom: 40px;">
									<label class="control-label" for="tags">Tags</label>
									<input class="form-control" type="text" name="tags" value="" id="tags" placeholder="Culture, Tech, Healt, etc...">
								</div>
								<div class="form-group" style="margin-bottom: 40px;">
									<label class="control-label" for="description">Description</label>
									<textarea class="form-control" name="description" placeholder="Put your description here..." rows="7"></textarea>
								</div>
								<div class="form-group" style="float: right; margin: 0">
									<input type="submit" name="publish" id="publish" class="btn btn-default" style="padding: 21px 20px; background-color: #2979ff; color: #ffffff; margin-right: 20px;" value="Publish Now">
									<input type="button" name="cancel" id="cancel" class="btn btn-default" style="padding: 21px 38px; border: 1px solid #2979ff; background-color: #ffffff; color: #2979ff;" value="Cancel">
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