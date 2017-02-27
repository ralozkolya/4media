<div class="header-section">
	<h2 class="light-green"><?php echo $other->title; ?></h2>
	<br>
	<img src="<?php echo image_exists($other->image, 'static/uploads/pages/'); ?>" alt="Other">
	<br>
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<?php echo $other->body; ?>
			</div>
		</div>
	</div>
</div>
