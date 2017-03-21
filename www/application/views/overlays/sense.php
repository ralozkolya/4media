<div class="header-section">
	<h2 class="light-green"><?php echo $sense->title; ?></h2>
	<br>
	<?php if(!empty($sense->image)) { ?>
		<img
			class="overlay-image"
			data-src="<?php echo image_exists($sense->image, 'static/uploads/pages/'); ?>"
			alt="Adwords/Adsense">
		<br>
		<br>
	<?php } ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<?php echo $sense->body; ?>
			</div>
		</div>
	</div>
</div>
