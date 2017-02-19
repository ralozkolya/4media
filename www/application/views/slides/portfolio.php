<div class="slide city" id="portfolio">
	<div class="header-section">
		<h2><?php echo lang('portfolio'); ?></h2>
		<br>
		<div>
			<?php foreach($project_types as $t) { ?>
				<button class="gradient-button"><?php echo lang($t->type); ?></button>
			<?php } ?>
		</div>
	</div>
	<div class="projects text-center">
		<?php foreach($projects as $p) { ?>
			<div class="project">
				<img src="<?php echo static_url("uploads/projects/{$p->image}"); ?>"
					alt="<?php echo $p->name; ?>">
			</div>
		<?php } ?>
	</div>
	<div class="projects-pagination">
		<a class="unstyled projects-pagination-arrow left" href="#">
			<span class="fa fa-chevron-left"></span>
		</a>
		<a class="unstyled projects-pagination-arrow right" href="#">
			<span class="fa fa-chevron-right"></span>
		</a>
	</div>
</div>