<div class="slide city" id="main">
	<div class="header-section logo-section">
		<a href="<?php echo locale_url(); ?>" class="unstyled">
			<img class="logo" src="<?php echo static_url('img/logo.png'); ?>" alt="Logo">
		</a>
	</div>
	<div class="text-center">
		<a href="#" class="unstyled open-overlay" data-opens=".sites">
			<div class="section-button make-sites">
				<div class="name"><?php echo $sites->title; ?></div>
			</div>
		</a>
		<a href="#" class="unstyled open-overlay" data-opens=".social_media">
			<div class="section-button social-media">
				<div class="name"><?php echo $social_media->title; ?></div>
			</div>
		</a>
		<a href="#" class="unstyled open-overlay" data-opens=".more_about_us">
			<div class="section-button about-us">
				<div class="name"><?php echo $more->title; ?></div>
			</div>
		</a>
		<br class="hidden-xs">
		<a href="#" class="unstyled open-overlay" data-opens=".sense">
			<div class="section-button google">
				<div class="name"><?php echo $sense->title; ?></div>
			</div>
		</a>
		<a href="<?php echo locale_url('blog'); ?>" class="unstyled">
			<div class="section-button blog">
				<div class="name"><?php echo lang('blog'); ?></div>
			</div>
		</a>
		<a href="#" class="unstyled open-overlay" data-opens=".other">
			<div class="section-button searching-for-other">
				<div class="name"><?php echo $other->title; ?></div>
			</div>
		</a>
	</div>
</div>