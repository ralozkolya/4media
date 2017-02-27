<div class="header-section">
	<h2 class="light-green text-left"><?php echo $sites->title; ?></h2>
	<br>
	<img src="<?php echo image_exists($sites->image, 'static/uploads/pages/'); ?>" alt="Other">
	<br>
	<br>
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-5 col-sm-offset-1">
				<?php echo $sites->body; ?>
			</div>
			<div class="col-sm-5 col-sm-offset-1">
				<div>
					<?php if(!empty($projects)) { ?>
						<?php $p = $projects[0]; ?>
						<div class="overlay-project" data-type="<?php echo $p->type; ?>">
							<img src="<?php echo static_url("uploads/projects/{$p->image}"); ?>"
								alt="<?php echo $p->name; ?>">
						</div>
					<?php } ?>
				</div>
				<div>
					<button class="btn btn-primary btn-block open-overlay"
						data-opens=".portfolio"><?php echo lang('show_all'); ?></button>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
</div>
