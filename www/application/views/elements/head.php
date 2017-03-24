<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php echo $title; ?></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo static_url('css/main.css?v='.V); ?>">

<link rel="icon" type="image/png" href="<?php echo static_url('img/favicon.png'); ?>">

<script>
	
var URL = {
	base: '<?php echo base_url(); ?>',
	locale: '<?php echo locale_url(); ?>',
	static: '<?php echo static_url(); ?>',
};

var LANG = {
	send: '<?php echo lang('send'); ?>',
	sending: '<?php echo lang('sending'); ?>',
	sent: '<?php echo lang('sent'); ?>',
};

</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="<?php echo static_url('js/general.js?v='.V); ?>"></script>