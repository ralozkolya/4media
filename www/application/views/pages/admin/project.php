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
					<h1><?php echo $item->ka_name; ?></h1>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12">
					<?php $this->load->view('elements/messages'); ?>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6">
					<form method="post" enctype="multipart/form-data">
						<?php
							$fields = [
								['name' => 'id', 'type' => 'hidden', 'value' => $item->id],
								['name' => 'ka_name', 'value' => $item->ka_name],
								['name' => 'en_name', 'value' => $item->en_name],
								['name' => 'type', 'type' => 'simple_select', 'value' => $types],
								['name' => 'link', 'value' => $item->link],
								['name' => 'priority', 'value' => $item->priority],
								['name' => 'image', 'type' => 'file'],
								['type' => 'submit', 'value' => lang('change')],
							];

							$form = form_fields($fields);

							foreach($form as $f) {
								echo $f;
							}
						?>
					</form>
				</div>
				<div class="col-sm-6">
					<h3><?php echo lang('image'); ?></h3>
						<img src="<?php echo image_exists($item->image, 'static/uploads/projects/'); ?>" alt="Image">
				</div>
			</div>	
		</div>
	</div>
</body>
</html>