<!DOCTYPE html>
<html lang="<?php echo get_lang_code(get_lang()); ?>">
<head>
	<?php $this->load->view('elements/head'); ?>

	<?php
		$image_url = image_exists($post->image, 'static/uploads/posts/');
		$dimensions = image_dimensions($post->image, 'static/uploads/posts/');
	?>

	<meta property="og:url" content="<?php echo locale_url("post/{$post->id}/{$post->slug}"); ?>">
	<meta property="og:type" content="article">
	<meta property="og:title" content="<?php echo $post->title; ?>">
	<meta property="og:description" content="<?php echo strip_tags($post->body); ?>">
	<meta property="og:image" content="<?php echo $image_url; ?>">

	<?php if($dimensions) { ?>
		<meta property="og:image:width" content="<?php echo $dimensions['width']; ?>">
		<meta property="og:image:height" content="<?php echo $dimensions['height']; ?>">
	<?php } ?>

	<link rel="stylesheet" href="<?php echo static_url('css/blog.css?v='.V) ?>">
	<script src="<?php echo static_url('js/post.js?v='.V); ?>"></script>
</head>
<body>
	<div id="fb-root"></div>
	<?php $this->load->view('elements/menu'); ?>
	<div class="wrapper">
		<div class="container single-post">
			<h1 class="light-green text-center"><?php echo $post->title; ?></h1>
			<?php if(!empty($post->image)) { ?>
				<div class="row">
					<div class="col-xs-12 text-center">
						<img src="<?php echo $image_url; ?>"
							alt="<?php echo $post->title; ?>">
					</div>
				</div>
				<br>
			<?php } ?>
			<div class="row">
				<div class="col-xs-6 text-right">
					<h3 class="date"><?php echo date('d/m/Y', strtotime($post->modified)); ?></h3>
				</div>
				<div class="col-xs-6">
					<div class="fb-like" data-layout="button" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="body"><?php echo $post->body; ?></div>
				</div>
			</div>
			<div class="text-center">
				
				<br>
				<br>
				<div>
					<a href="<?php echo $this->agent->referrer(); ?>" class="btn btn-primary btn-lg"><?php echo lang('back'); ?></a>
				</div>
				<br>
				<br>
			</div>
		</div>
	</div>
	<script>
	(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=1533521776920889";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>
</body>
</html>