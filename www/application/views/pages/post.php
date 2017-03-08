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
			<div class="bordered">
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
						<h3 class="date"><strong><?php echo date('d/m/Y', strtotime($post->modified)); ?></strong></h3>
					</div>
					<div class="col-xs-6">
						<div class="fb-like" data-layout="button" data-action="like" data-size="large"
							data-show-faces="true" data-share="true"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="body"><?php echo $post->body; ?></div>
					</div>
				</div>
				<div class="text-right">
					<div class="fb-like" data-layout="button" data-action="like" data-size="large"
						data-show-faces="true" data-share="true"></div>
				</div>
			</div>
			<div class="bordered">
				<div class="container-fluid">
					<h3 class="light-green"><?php echo lang('similar_posts'); ?></h3>
					<br>
					<div class="row text-center">
						<?php foreach($posts as $i => $p) { ?>
							<a href="<?php echo locale_url("post/{$p->id}/{$p->slug}"); ?>" class="unstyled">
								<div class="col-sm-4 col-md-3 post">
									<?php $url = image_exists($p->image, 'static/uploads/posts/thumbs/'); ?>
									<div class="image"
										style="background-image: url('<?php echo $url; ?>');"></div>
									<br>
									<div><?php echo $p->title; ?></div>
								</div>
							</a>
							<?php if($i > 2) break; ?>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="bordered">
				<div class="fb-comments" data-width="100%" data-numposts="5"></div>
			</div>
			<div class="text-center">
				<div>
					<a href="<?php echo locale_url('blog'); ?>" class="btn btn-primary btn-lg"><?php echo lang('back'); ?></a>
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
	  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>
</body>
</html>