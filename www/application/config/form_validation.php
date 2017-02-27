<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$id = [
	'field' => 'id',
	'label' => 'lang:id',
	'rules' => 'required|is_natural',
];

$ka_name = [
	'field' => 'ka_name',
	'label' => 'lang:ka_name',
	'rules' => 'required',
];

$en_name = [
	'field' => 'en_name',
	'label' => 'lang:en_name',
	'rules' => 'required',
];

$ka_desc = [
	'field' => 'ka_desc',
	'label' => 'lang:ka_desc',
	'rules' => 'required',
];

$en_desc = [
	'field' => 'en_desc',
	'label' => 'lang:en_desc',
	'rules' => 'required',
];

$ka_title = [
	'field' => 'ka_title',
	'label' => 'lang:ka_title',
	'rules' => 'required',
];

$en_title = [
	'field' => 'en_title',
	'label' => 'lang:en_title',
	'rules' => 'required',
];

$ka_body = [
	'field' => 'ka_body',
	'label' => 'lang:ka_body',
	'rules' => 'required',
];

$en_body = [
	'field' => 'en_body',
	'label' => 'lang:en_body',
	'rules' => 'required',
];

$priority = [
	'field' => 'priority',
	'label' => 'lang:priority',
	'rules' => 'is_numeric',
];

$pinned = [
	'field' => 'pinned',
	'label' => 'lang:pinned',
	'rules' => 'regex_match[/0|1/]',
];

$password = [
	'field' => 'password',
	'label' => 'lang:password',
	'rules' => 'required|min_length[6]',
];

$password_repeat = [
	'field' => 'password_repeat',
	'label' => 'lang:password_repeat',
	'rules' => 'required|matches[password]',
];

$parent = [
	'field' => 'parent',
	'label' => 'lang:parent',
	'rules' => 'is_natural|differs[id]',
];

$type = [
	'field' => 'type',
	'label' => 'lang:type',
	'rules' => 'required',
];

$config['add_Post_image'] = [
	[
		'field' => 'item',
		'label' => 'lang:item',
		'rules' => 'required|is_natural',
	],
];

$config['add_Project_image'] = [
	[
		'field' => 'item',
		'label' => 'lang:item',
		'rules' => 'required|is_natural',
	],
];

$config['edit_Page'] = [
	$id, $ka_title, $en_title,
];

$config['add_Post'] = [
	$ka_title, $en_title,
	$ka_body, $en_body,
	$pinned, $priority,
];

$config['add_Project'] = [
	$ka_name, $en_name,
	$ka_desc, $en_desc,
	$pinned, $priority,
	$type,
];

$config['edit_Post'] = [
	$id,
	$ka_title, $en_title,
	$ka_body, $en_body,
	$pinned, $priority,
];

$config['edit_Project'] = [
	$id,
	$ka_name, $en_name,
	$ka_desc, $en_desc,
	$pinned, $priority,
	$type,
];

$config['edit_User'] = [
	[
		'field' => 'password',
		'label' => 'lang:password',
		'rules' => 'required|min_length[5]'
	],
	[
		'field' => 'password_repeat',
		'label' => 'lang:password_repeat',
		'rules' => 'required|matches[password]'
	],
];

$config['send_mail'] = [
	[
		'field' => 'name',
		'label' => 'lang:name',
		'rules' => 'required',
	],
	[
		'field' => 'email',
		'label' => 'lang:email',
		'rules' => 'required|valid_email',
	],
	[
		'field' => 'subject',
		'label' => 'lang:subject',
		'rules' => 'required',
	],
	[
		'field' => 'message',
		'label' => 'lang:message',
		'rules' => 'required',
	],
];