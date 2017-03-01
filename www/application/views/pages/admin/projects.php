<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('elements/admin/head'); ?>
	<script>
		config.type = 'projects';
	</script>
</head>
<body>
	<?php $this->load->view('elements/admin/sidebar'); ?>
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<h1><?php echo lang('projects'); ?></h1>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12">
					<?php $this->load->view('elements/messages'); ?>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6">
					<h3><?php echo lang('existing_projects'); ?></h3>
					<div class="text-center">
						<?php echo $this->pagination->create_links(); ?>
					</div>
					<?php echo admin_table('Project', $items, [
						'name',
					]); ?>
					<div class="text-center">
						<?php echo $this->pagination->create_links(); ?>
					</div>
				</div>
				<div class="col-sm-6">
					<h3><?php echo lang('add_project'); ?></h3>
					<form method="post" enctype="multipart/form-data">
						<?php
							$fields = [
								['name' => 'ka_name', 'value' => set_value('ka_name')],
								['name' => 'en_name', 'value' => set_value('en_name')],
								['name' => 'type', 'type' => 'simple_select', 'value' => $types],
								['name' => 'link', 'value' => set_value('link')],
								['name' => 'priority', 'value' => set_value('priority')],
								['name' => 'image', 'type' => 'file'],
								['type' => 'submit', 'value' => lang('add')],
							];

							$form = form_fields($fields);

							foreach($form as $f) {
								echo $f;
							}
						?>
					</form>
				</div>
			</div>	
		</div>
	</div>
</body>
</html>