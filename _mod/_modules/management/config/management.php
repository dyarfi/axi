<?php defined('SYSPATH') OR die('No direct access allowed.');
$config['models'] = array(
    'Management',
    'ManagementFile'
);
$config['upload_path'] = DOCROOT.'uploads/managements/';
$config['upload_url'] = 'uploads/managements/';
$config['readable_mime'] = array(
    'image/gif',
    'image/jpg',
    'image/jpeg',
    'image/png',
    'video/x-flv',
    'video/flv',
    'audio/mpeg'
);
$config['mime_icon'] = array(
    'image/gif' => 'picture.png',
    'image/jpg' => 'picture.png',
    'image/jpeg' => 'picture.png',
    'image/png' => 'picture.png',
    'video/x-flv' => 'film.png',
    'video/flv' => 'film.png',
    'audio/mpeg' => 'sound.png'
);
$config['image'] = array(
    'ratio' => 'auto',
    'thumbnails' => array(
        '151x114',
		'123x139',
    ),
	'crop'	=> array(
			array(
				'151x114',
				'123x139',
				),
				'center'
			)
);
$config['management_fields'] = array(
	'show_quote' => FALSE,
    'show_biography' => FALSE,
    'show_upload' => TRUE,
    'uploads' => array(
        'image_1' => array(
            'label' => 'Image',
            'caption' => FALSE,
            'optional' => FALSE,
            'file_type' => 'gif,png,jpg,jpeg',
            'max_file_size' => '1M',
            'note' => 'Allowed file types are gif, png. Resolution is up to '.$config['image']['thumbnails'][0].'px and the best resolution result is '.$config['image']['thumbnails'][0].'px',
            'image_manipulation' => $config['image']
        )
    )
);
/**
 * Check gallery uploads field just have one field
 * and remove the other field if uploads field more than one
 ***/

//if (count($config['managements_fields']['uploads']) > 1) {
	//$keys	= array_keys($config['managements_fields']['uploads']);
	//$config['managements_fields']['uploads']	= array($keys[0]	=> $config['managements_fields']['uploads'][$keys[0]]);
//}

$config['module_menu'] = array(
    'management/index' => 'Management Listings'
);
$config['module_function'] = array(
    'management/index' => 'Management Listings',
    'management/add' => 'Add New Management',
    'management/view' => 'View Management Details',
    'management/edit' => 'Edit Management Details',
    'management/delete' => 'Delete Management',
	'management/change'	=> 'Update Management Status',
);

return array_merge_recursive (
	$config
);
