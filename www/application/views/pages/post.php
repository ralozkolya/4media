<!DOCTYPE html>
<html lang="<?php echo get_lang_code(get_lang()); ?>">
<head>
	<?php $this->load->view('elements/head'); ?>
	<link rel="stylesheet" href="<?php echo static_url('css/blog.css?v='.V) ?>">
</head>
<body>
	<?php $this->load->view('elements/menu'); ?>
	<div class="wrapper">
		<div class="container single-post">
			<div class="row">
				<h1 class="light-green text-center"><?php echo $post->title; ?></h1>
			</div>
			<div class="row">
				<div class="col-sm-5 left-column">
					<div>
						<img src="<?php echo static_url("uploads/posts/{$post->image}"); ?>" alt="<?php echo $post->title; ?>">
					</div>
					<br>
					<div>
						<a href="<?php echo $this->agent->referrer(); ?>" class="btn btn-primary btn-lg"><?php echo lang('back'); ?></a>
					</div>
				</div>
				<div class="col-sm-7">
					<h3 class="date"><?php echo date('d/m/Y', strtotime($post->modified)); ?></h3>
					<div><?php echo $post->body; ?></div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>