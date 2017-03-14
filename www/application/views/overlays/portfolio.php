<div class="header-section">
	<h2 class="light-green"><?php echo $portfolio->title; ?></h2>
</div>
<br>
<div class="text-center">
	<button class="gradient-button overlay-type-button active" data-type="all"><?php echo lang('all'); ?></button>
	<?php foreach($project_types as $t) { ?>
		<button class="gradient-button overlay-type-button" data-type="<?php echo $t->type; ?>">
			<?php echo lang($t->type); ?>
		</button>
	<?php } ?>
</div>
<br>
<div class="nano text-center">
	<div class="nano-content">
		<div class="container-fluid">
			<div class="row">
				<?php foreach($projects as $p) { ?>
					<div class="overlay-project col-sm-6" data-type="<?php echo $p->type; ?>">
						<?php $url = $p->link ? $p->link : '#'; ?>
						<a class="unstyled" href="<?php echo $url; ?>" target="_blank">
							<img src="<?php echo static_url("uploads/projects/{$p->image}"); ?>"
								alt="<?php echo $p->name; ?>">
						</a>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
