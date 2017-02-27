<!DOCTYPE html>
<html lang="<?php echo get_lang_code(get_lang()); ?>">
<head>
	<?php $this->load->view('elements/head'); ?>
	<link rel="stylesheet" href="<?php echo static_url('css/blog.css?v='.V) ?>">
</head>
<body>
	<div id="fb-root"></div>
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
					<br>
					<div class="fb-like" data-layout="button" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
					<br>
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