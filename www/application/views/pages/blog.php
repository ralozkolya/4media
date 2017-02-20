<!DOCTYPE html>
<html lang="<?php echo get_lang_code(get_lang()); ?>">
<head>
	<?php $this->load->view('elements/head'); ?>
	<link rel="stylesheet" href="<?php echo static_url('css/blog.css?v='.V) ?>">
</head>
<body>
	<?php $this->load->view('elements/menu'); ?>
	<div class="wrapper">
		<div class="header-section logo-section">
			<h1 class="light-green"><?php echo lang('blog'); ?></h1>
		</div>
		<div class="container">
			<?php foreach($posts as $p) { ?>
				<div class="row post">
					<div class="col-sm-4 col-sm-offset-1">
						<a href="<?php echo locale_url("post/{$p->id}/{$p->slug}"); ?>">
							<img src="<?php echo static_url("uploads/posts/thumbs/{$p->image}"); ?>" alt="<?php echo $p->title; ?>">
						</a>
					</div>
					<div class="col-sm-7">
						<a class="unstyled" href="<?php echo locale_url("post/{$p->id}/{$p->slug}"); ?>">
							<h2 class="list-header light-green"><strong><?php echo $p->title; ?></strong></h2>
						</a>
						<h3><?php echo date('d/m/Y', strtotime($p->modified)); ?></h3>
						<div><?php echo mb_substr($p->body, 0, 500); ?>...</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</body>
</html>