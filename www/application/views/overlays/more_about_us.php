<div class="header-section">
	<h2 class="light-green"><?php echo $more->title; ?></h2>
	<br>
	<?php if(!empty($more->image)) { ?>
		<img
			class="overlay-image"
			data-src="<?php echo image_exists($more->image, 'static/uploads/pages/'); ?>"
			alt="More about us">
		<br>
		<br>
	<?php } ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<?php echo $more->body; ?>
			</div>
		</div>
	</div>
</div>
