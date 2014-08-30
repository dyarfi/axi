<?php defined('SYSPATH') or die('No direct script access.');

/** Frontend Configs **/
$config['css'] = array(
		'bootstrap.css'=>'all',
		'bootstrap-responsive.css'=>'all',
		);
$config['js'] = array(
				'jquery-1.8.2.min.js',
				'library.js',
				);	

 return array_merge_recursive  (
	$config
 );
