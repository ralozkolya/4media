<div class="header-section">
	<h2 class="light-green"><?php echo $social_media->title; ?></h2>
	<br>
	<?php if(!empty($social_media->image)) { ?>
		<img
			class="overlay-image"
			data-src="<?php echo image_exists($social_media->image, 'static/uploads/pages/'); ?>"
			alt="Social">
		<br>
		<br>
	<?php } ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<?php echo $social_media->body; ?>
			</div>
		</div>
	</div>
</div>
