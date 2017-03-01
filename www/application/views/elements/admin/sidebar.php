<div class="sidebar">
	<div class="text-center">
		<img src="<?php echo static_url('img/logo.png'); ?>">
	</div>
	<ul class="navigation">
		<li>
			<?php
				$class = 'unstyled';
				if($highlighted === 'products') {
					$class .= ' active';
				}
			?>
			<a class="<?php echo $class; ?>" href="<?php echo base_url('admin/products'); ?>">
				<?php echo lang('products'); ?>
			</a>
		</li>
		<li>
			<?php
				$class = 'unstyled';
				if($highlighted === 'categories') {
					$class .= ' active';
				}
			?>
			<a class="<?php echo $class; ?>" href="<?php echo base_url('admin/categories'); ?>">
				<?php echo lang('categories'); ?>
			</a>
		</li>
		<li>
			<?php
				$class = 'unstyled';
				if($highlighted === 'pages') {
					$class .= ' active';
				}
			?>
			<a class="<?php echo $class; ?>" href="<?php echo base_url('admin/pages'); ?>">
				<?php echo lang('pages'); ?>
			</a>
		</li>
		<li>
			<?php
				$class = 'unstyled';
				if($highlighted === 'blog') {
					$class .= ' active';
				}
			?>
			<a class="<?php echo $class; ?>" href="<?php echo base_url('admin/blog'); ?>">
				<?php echo lang('blog'); ?>
			</a>
		</li>
		<li>
			<?php
				$class = 'unstyled';
				if($highlighted === 'projects') {
					$class .= ' active';
				}
			?>
			<a class="<?php echo $class; ?>" href="<?php echo base_url('admin/projects'); ?>">
				<?php echo lang('projects'); ?>
			</a>
		</li>
		<li>
			<?php
				$class = 'unstyled';
				if($highlighted === 'news') {
					$class .= ' active';
				}
			?>
			<a class="<?php echo $class; ?>" href="<?php echo base_url('admin/news'); ?>">
				<?php echo lang('news'); ?>
			</a>
		</li>
		<li>
			<?php
				$class = 'unstyled';
				if($highlighted === 'user') {
					$class .= ' active';
				}
			?>
			<a class="<?php echo $class; ?>" href="<?php echo base_url('admin/user'); ?>">
				<?php echo lang('user'); ?>
			</a>
		</li>
		<li>
			<a class="unstyled" href="<?php echo base_url('login/logout'); ?>">
				<?php echo lang('logout'); ?>
			</a>
		</li>
	</ul>
</div>