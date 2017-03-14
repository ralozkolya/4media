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
			<div class="col-sm-6 col-sm-offset-3">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
		</div>
	</div>
</div>
