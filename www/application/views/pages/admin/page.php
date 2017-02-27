<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('elements/admin/head'); ?>
	<script>
		config.type = 'pages';
	</script>
</head>
<body>
	<?php $this->load->view('elements/admin/sidebar'); ?>
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<h1><?php echo $item->ka_title; ?></h1>
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
								[
									'name' => 'id',
									'value' => $item->id,
									'type' => 'hidden',
								],
								[
									'name' => 'ka_title',
									'value' => $item->ka_title,
								],
								[
									'name' => 'en_title',
									'value' => $item->en_title,
								],
							];

							if($item->editable) {
								$fields[] = [
									'name' => 'ka_body',
									'value' => $item->ka_body,
									'type' => 'ckeditor'
								];
								$fields[] = [
									'name' => 'en_body',
									'value' => $item->en_body,
									'type' => 'ckeditor'
								];
							}

							if($item->with_image) {
								$fields[] = [
									'name' => 'image',
									'type' => 'file'
								];
							}

							$fields[] = [
								'value' => lang('change'),
								'type' => 'submit',
							];

							$form = form_fields($fields);

							foreach($form as $f) {
								echo $f;
							}
						?>
					</form>
				</div>
				<?php if($item->with_image) { ?>
					<div class="col-sm-6">
						<h3><?php echo lang('image'); ?></h3>
						<img src="<?php echo image_exists($item->image, 'static/uploads/pages/'); ?>" alt="Image">
					</div>
				<?php } ?>
			</div>	
		</div>
	</div>
</body>
</html>