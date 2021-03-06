<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('elements/admin/head'); ?>
</head>
<body>
	<?php $this->load->view('elements/admin/sidebar'); ?>
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<h1><?php echo lang('news_post'); ?></h1>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12">
					<?php $this->load->view('elements/messages'); ?>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6">
					<h3><?php echo lang('existing_news'); ?></h3>
					<?php echo admin_table('News_post', $items, [
						'image', 
					], static_url('uploads/news/')); ?>
				</div>
				<div class="col-sm-6">
					<h3><?php echo lang('add_news'); ?></h3>
					<form method="post" enctype="multipart/form-data">
						<?php
							$fields = [
								['name' => 'ka_desc', 'type' => 'textarea', 'value' => set_value('ka_desc')],
								['name' => 'en_desc', 'type' => 'textarea', 'value' => set_value('en_desc')],
								['name' => 'link', 'value' => set_value('link')],
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