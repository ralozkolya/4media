<div class="<?php echo "overlay-page {$view}"; ?>">
	<div class="sidebar">
		<button class="menu-close">
			<img src="<?php echo static_url('img/close.png'); ?>" alt="Close menu">
		</button>
	</div>
	<div class="content">
		<?php $this->load->view("overlays/{$view}"); ?>
	</div>
</div>
