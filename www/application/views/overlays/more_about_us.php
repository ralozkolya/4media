<div class="header-section">
	<h2 class="light-green"><?php echo $more->title; ?></h2>
	<br>
	<img src="<?php echo image_exists($more->image, 'static/uploads/pages/'); ?>" alt="Other">
	<br>
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<?php echo $more->body; ?>
			</div>
		</div>
	</div>
</div>
