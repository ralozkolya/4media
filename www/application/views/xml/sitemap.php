<?php echo '<?xml version="1.0" encoding="UTF-8" ?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<url>
		<loc><?php echo base_url(); ?></loc> 
		<priority>1.0</priority>
	</url>
	<url>
		<loc><?php echo base_url('ka-GE'); ?></loc> 
		<priority>0.5</priority>
	</url>
	<url>
		<loc><?php echo base_url('en-US'); ?></loc> 
		<priority>0.5</priority>
	</url>

	<?php foreach($posts as $p): ?>
		<url>
			<loc><?php echo base_url('ka-GE/product/'.$p->id.'/'.$p->slug); ?></loc>
			<priority>0.5</priority>
		</url>
		<url>
			<loc><?php echo base_url('en-US/product/'.$p->id.'/'.$p->slug); ?></loc>
			<priority>0.5</priority>
		</url>
	<?php endforeach; ?>

</urlset>