<div class="menu-button">
	<div>
		<button class="menu-toggle">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<div class="hidden-xs">
		<a href="<?php echo lang_link(get_other_lang()); ?>" class="lang-link"><?php echo get_lang_label(get_other_lang()) ?></a>
	</div>
</div>
<div class="menu">
	<div class="container-fluid">
		<div class="row menu-header">
			<div class="col-xs-4">
				<button class="menu-close">
					<img src="<?php echo static_url('img/close.png'); ?>" alt="Close menu">
				</button>
			</div>
			<div class="col-xs-4">
				<img src="<?php echo static_url('img/logo.png'); ?>" alt="Logo">
			</div>
			<div class="col-xs-4">
				<a href="<?php echo lang_link(get_other_lang()); ?>" class="lang-link"><?php echo get_lang_label(get_other_lang()) ?></a>
			</div>
		</div>
	</div>
	<br>
	<br>
	<div id="navigation-container">
		<ul class="nav nav-pills nav-stacked navigation">
			<?php if($menu === 'relative') { ?>
				<li>
					<a href="#main"><?php echo lang('main'); ?></a>
				</li>
				<li>
					<a href="#our-team"><?php echo lang('our_team'); ?></a>
				</li>
				<li>
					<a href="#portfolio"><?php echo lang('portfolio'); ?></a>
				</li>
				<li>
					<a href="#contact"><?php echo lang('contact'); ?></a>
				</li>
			<?php } else { ?>
				<li>
					<a href="<?php echo locale_url('#main'); ?>"><?php echo lang('main'); ?></a>
				</li>
				<li>
					<a href="<?php echo locale_url('#our-team'); ?>"><?php echo lang('our_team'); ?></a>
				</li>
				<li>
					<a href="<?php echo locale_url('#portfolio'); ?>"><?php echo lang('portfolio'); ?></a>
				</li>
				<li>
					<a href="<?php echo locale_url('#contact'); ?>"><?php echo lang('contact'); ?></a>
				</li>
			<?php } ?>
		</ul>
	</div>
	<br>
	<div>
		<a class="unstyled" target="_blank" href="https://www.facebook.com/4MEDIA.GE/">
			<div class="social">
				<span class="fa fa-facebook"></span>
			</div>
		</a>
		<a class="unstyled" target="_blank" href="#">
			<div class="social">
				<span class="fa fa-twitter"></span>
			</div>
		</a>
		<a class="unstyled" target="_blank" href="#">
			<div class="social">
				<span class="fa fa-instagram"></span>
			</div>
		</a>
	</div>
</div>