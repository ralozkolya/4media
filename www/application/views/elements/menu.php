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
			<?php foreach($navigation as $n) { ?>
				<?php if($menu === 'relative') { ?>
					<li>
						<a href="<?php echo "#{$n->slug}"; ?>"><?php echo $n->title; ?></a>
					</li>
				<?php } else { ?>
					<li>
						<a href="<?php echo locale_url("#{$n->slug}"); ?>"><?php echo $n->title; ?></a>
					</li>
				<?php } ?>
			<?php } ?>
		</ul>
	</div>
	<br>
	<?php if(!empty($news)) { ?>
		<?php $link = empty($news->link) ? '#' : $news->link; ?>
		<a href="<?php echo $link; ?>" class="unstyled">
			<div class="menu-news">
				<?php if(!empty($news->image)) { ?>
					<div>
						<img src="<?php echo static_url("uploads/news/thumbs/{$news->image}"); ?>" alt="Offer">
					</div>
				<?php } ?>
				<div class="description">
					<?php echo $news->desc; ?>
				</div>
			</div>
		</a>
	<?php } ?>
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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92564734-1', 'auto');
  ga('send', 'pageview');

</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-1641374881307784",
    enable_page_level_ads: true
  });
</script>