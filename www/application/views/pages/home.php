<!DOCTYPE html>
<html lang="<?php echo get_lang_code(get_lang()); ?>">
<head>
	<?php $this->load->view('elements/head'); ?>
	<link rel="stylesheet" href="<?php echo static_url('css/nanoScroller.css?v='.V); ?>">
	<link rel="stylesheet" href="<?php echo static_url('slick/slick.css?v='.V); ?>">
	<link rel="stylesheet" href="<?php echo static_url('css/home.css?v='.V); ?>">
	<script src="<?php echo static_url('js/nanoscroller.min.js?V='.V); ?>"></script>
	<script src="<?php echo static_url('slick/slick.min.js?V='.V); ?>"></script>
	<script src="<?php echo static_url('js/home.js?V='.V); ?>"></script>
</head>
<body>
	<?php $this->load->view('elements/menu'); ?>
	<div class="wrapper">
		<?php $this->load->view('slides/main'); ?>
		<?php $this->load->view('slides/our_team'); ?>
		<?php $this->load->view('slides/portfolio'); ?>
		<?php $this->load->view('slides/contact'); ?>
		<?php $this->load->view('elements/overlays'); ?>
	</div>
</body>
</html>