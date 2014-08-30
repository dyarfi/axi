<?php defined('SYSPATH') or die('No direct script access.');
$config['models'] = array(
    'page',
    'pageFile',
    'pageMenu',
	'pageMenuFile'
);
$config['upload_path'] = DOCROOT.'uploads/pages/';
$config['upload_url'] = 'uploads/pages/';
$config['menu_upload_path'] = DOCROOT.'uploads/page_menus/';
$config['menu_upload_url'] = 'uploads/page_menus/';
$config['readable_mime'] = array(
    'image/gif',
    'image/jpg',
    'image/jpeg',
    'image/png',
    'application/x-sh'
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
		'300x183',
		'1920x760'// New Image
    ),
	'crop'	=> array(
			array(
				'300x183',        
				'1920x760'),
				'center'
			)
);
$config['page_fields'] = array(
    'show_menu' => TRUE,
    'show_synopsis' => FALSE,
    'show_publish_date' => FALSE,
	'show_attribute' => FALSE,
    'show_unpublish_date' => FALSE,
    'show_allow_comment' => FALSE,
	'show_cover' => FALSE,    
    'show_tags' => FALSE,
    'show_order' => FALSE,
    'show_upload' => FALSE,
    'uploads' => array(
        'image_1' => array(
            'label' => 'Thumb Image',
            'caption' => FALSE,
            'optional' => TRUE,
            'file_type' => 'gif,jpg,png',
            'max_file_size' => '1M',
            'note' => 'Allowed file types are gif, jpg ,png. Best Resolution is up to '.$config['image']['thumbnails'][1].'px',
            'image_manipulation' => $config['image']
        )
    )
);
$config['page_menu_fields'] = array(
	'show_url' => TRUE,
    'show_media' => TRUE,    
    'show_position' => FALSE,
	'show_order' => FALSE,	
	'show_enable_edit' => FALSE,
	'show_enable_delete' => FALSE,
	'show_enable_add' => FALSE,
    'show_menu_upload' => TRUE,
    'uploads' => array(
        'image_1' => array(
            'label' => 'Background',
            'caption' => FALSE,
            'optional' => TRUE,
            'file_type' => 'gif,jpg,png',
            'max_file_size' => '1M',
            'note' => 'Allowed file types are gif, jpg ,png. Best Resolution is '.$config['image']['thumbnails'][1].'px',
            'image_manipulation' => $config['image'],
        ),
		'image_2' => array(
            'label' => 'Image',
            'caption' => FALSE,
            'optional' => TRUE,
            'file_type' => 'gif,jpg,png',
            'max_file_size' => '1M',
            'note' => 'Allowed file types are gif, jpg ,png. Best Resolution is up to '.$config['image']['thumbnails'][1].'px',
            'image_manipulation' => $config['image']
        )
    )
);
$config['module_menu'] = array(
    'pagemenu/index' => 'Page Menu Listings',
    'page/index' => 'Page Listings'
);
$config['module_function'] = array(
    'page/add' => 'Add New Page',
    'page/view' => 'View Page Details',
    'page/edit' => 'Edit Page Details',
    'page/delete' => 'Delete Page',
	'page/change' => 'Update Page Status',
    'pagemenu/add' => 'Add New Menu',
    'pagemenu/view' => 'View Menu Details',
    'pagemenu/edit' => 'Edit Menu Details',
    'pagemenu/delete' => 'Delete Menu',
	'pagemenu/change' => 'Update Menu Status',
);
		
 return array_merge_recursive (
	$config
 );