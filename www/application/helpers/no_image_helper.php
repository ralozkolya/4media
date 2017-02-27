<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function image_exists($image, $path) {

	if(!empty($image) && file_exists($path . $image)) {

		$prefix = str_replace('static/', '', $path);

		return static_url($prefix.$image);
	}
	
	return static_url('img/no_image.png');
}

function image_dimensions($image, $path) {

	if(!empty($image) && file_exists($path . $image)) {

		$dimensions = getimagesize($path.$image);

		if($dimensions[0] && $dimensions[1]) {
			return [
				'width' => $dimensions[0],
				'height' => $dimensions[1],
			];
		}
	}
	
	return NULL;
}

/* End of file no_image_helper.php */
/* Location: ./application/helpers/no_image_helper.php */