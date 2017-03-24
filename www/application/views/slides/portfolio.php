<div class="slide city" id="portfolio">
	<div class="header-section">
		<h2><?php echo $portfolio->title; ?></h2>
		<br>
		<div>
			<button class="gradient-button type-button active" data-type="all"><?php echo lang('all'); ?></button>
			<?php foreach($project_types as $t) { ?>
				<button class="gradient-button type-button" data-type="<?php echo $t->type; ?>">
					<?php echo lang($t->type); ?>
				</button>
			<?php } ?>
		</div>
	</div>
	<div class="projects text-center">
		<?php foreach($projects as $p) { ?>
			<div class="project" data-type="<?php echo $p->type; ?>">
				<?php $url = $p->link ? $p->link : '#'; ?>
				<a class="unstyled" href="<?php echo $url; ?>" target="_blank">
					<div class="image"
						style="background-image: url('<?php echo static_url("uploads/projects/{$p->image}"); ?>');"></div>
				</a>
			</div>
		<?php } ?>
	</div>
	<div class="text-center">
		<button class="btn btn-primary open-overlay portfolio-button" data-opens=".portfolio"><?php echo lang('show_all'); ?></button>
	</div>
	<br>
	<div class="projects-pagination hidden-xs">
		<a class="unstyled projects-pagination-arrow left" href="#">
			<span class="fa fa-chevron-left"></span>
		</a>
		<a class="unstyled projects-pagination-arrow right" href="#">
			<span class="fa fa-chevron-right"></span>
		</a>
	</div>
</div>