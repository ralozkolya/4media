<div class="header-section">
	<h2 class="light-green"><?php echo $other->title; ?></h2>
	<br>
	<?php if(!empty($other->image)) { ?>
		<img
			class="overlay-image"
			data-src="<?php echo image_exists($other->image, 'static/uploads/pages/'); ?>"
			alt="Other">
		<br>
		<br>
	<?php } ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<?php echo $other->body; ?>
			</div>
		</div>
	</div>
</div>
