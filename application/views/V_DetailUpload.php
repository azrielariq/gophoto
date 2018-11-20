<img src="<?php echo base_url('uploads/'.$dir.'/'.$img) ?>" style="max-width: 300px; height: auto">
<form action="<?php echo base_url('home/uploaddetail') ?>" method="POST">
	<input type="text" name="title" placeholder="Title" required="">
	<input type="text" name="tags" placeholder="Tags">
	<textarea name="description" placeholder="Description"></textarea>
	<button type="submit" value="Upload">Upload !</button>
</form>