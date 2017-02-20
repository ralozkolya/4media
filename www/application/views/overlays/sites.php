<div class="header-section">
	<h2 class="light-green text-left"><?php echo lang('make_sites'); ?></h2>
	<br>
	<img src="<?php echo static_url('uploads/pages/sites.png'); ?>" alt="Other">
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-5 col-sm-offset-1">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
					<button class="btn btn-primary btn-block open-overlay" data-opens=".portfolio"><?php echo lang('show_all'); ?></button>
				</div>
			</div>
		</div>
	</div>
</div>
