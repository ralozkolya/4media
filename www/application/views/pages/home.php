<!DOCTYPE html>
<html lang="<?php echo get_lang_code(get_lang()); ?>">
<head>
	<?php $this->load->view('elements/head'); ?>
	<link rel="stylesheet" href="<?php echo static_url('css/home.css?v='.V); ?>">
	<script src="<?php echo static_url('js/home.js?V='.V); ?>"></script>
</head>
<body>
	<?php $this->load->view('elements/menu'); ?>
	<div class="wrapper">
		<div class="slide city">
			<div class="header-section logo-section">
				<a href="<?php echo locale_url(); ?>" class="unstyled">
					<img class="logo" src="<?php echo static_url('img/logo.png'); ?>" alt="Logo">
				</a>
			</div>
			<div class="text-center">
				<a href="#" class="unstyled">
					<div class="section-button">
						<div><span class="fa fa-television"></span></div>
						<div class="name"><?php echo lang('make_sites'); ?></div>
					</div>
				</a>
				<a href="#" class="unstyled">
					<div class="section-button">
						<div><span class="fa fa-globe"></span></div>
						<div class="name"><?php echo lang('social_media'); ?></div>
					</div>
				</a>
				<a href="#" class="unstyled">
					<div class="section-button">
						<div><span class="fa fa-users"></span></div>
						<div class="name"><?php echo lang('about_us'); ?></div>
					</div>
				</a>
				<br class="hidden-xs">
				<a href="#" class="unstyled">
					<div class="section-button">
						<div><span class="fa fa-google"></span></div>
						<div class="name"><?php echo lang('adwords'); ?></div>
					</div>
				</a>
				<a href="#" class="unstyled">
					<div class="section-button">
						<div><span class="fa fa-bold"></span></div>
						<div class="name"><?php echo lang('blog'); ?></div>
					</div>
				</a>
				<a href="#" class="unstyled">
					<div class="section-button">
						<div><span class="fa fa-paper-plane-o"></span></div>
						<div class="name"><?php echo lang('searching_for_other'); ?></div>
					</div>
				</a>
			</div>
		</div>
		<div class="slide">
			<div class="header-section">
				<h2 class="light-green"><?php echo lang('our_team'); ?></h2>
			</div>
			<div class="text-center">
				<img src="<?php echo static_url('img/team.png?v='.V); ?>" alt="Team">
			</div>
		</div>
		<div class="slide city">
			<div class="header-section">
				<h2><?php echo lang('portfolio'); ?></h2>
				<br>
				<div>
					<?php foreach($project_types as $t) { ?>
						<button class="gradient-button"><?php echo lang($t->type); ?></button>
					<?php } ?>
				</div>
			</div>
			<div class="projects text-center">
				<?php foreach($projects as $p) { ?>
					<div class="project">
						<img src="<?php echo static_url("uploads/projects/{$p->image}"); ?>"
							alt="<?php echo $p->name; ?>">
					</div>
				<?php } ?>
			</div>
			<div class="projects-pagination">
				<a class="unstyled projects-pagination-arrow left" href="#">
					<span class="fa fa-chevron-left"></span>
				</a>
				<a class="unstyled projects-pagination-arrow right" href="#">
					<span class="fa fa-chevron-right"></span>
				</a>
			</div>
		</div>
		<div class="slide">
			<div class="header-section">
				<h1 class="light-green"><?php echo lang('what_are_you_waiting_for'); ?></h1>
			</div>
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1489.0317590074542!2d44.80144315865896!3d41.71914819870219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40440d322a6fe587%3A0x624fd30a69fa079!2s7+Tsotne+Dadiani+St%2C+Tbilisi!5e0!3m2!1sen!2sge!4v1486853535815" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</body>
</html>