<?php defined('SYSPATH') OR die('No direct access allowed.');
// Setting for using dashboard or not value True or False
$config['show_dashboard'] = TRUE;

// This is supposed to be redirection to edit profile view 
$config['default_page']	  = ($config['show_dashboard'] == TRUE) 
							// Redirect to user profile 
							? ADMIN . 'userdashboard/index'
							// Redirect to user dashboard
							: ADMIN . 'user/view/{admin_id}';
// Model List							
$config['models']			= array('User',/*'UserLevel',*/'UserProfile','History',/*'ModulePermission',*/'UserDashboard'/*,'Setting'*/);
// Module Menu List
$config['module_menu']		= array('userdashboard/index'	=> 'Dashboard Panel',
									'user/index'			=> 'User Listings',
									/*'userlevel/index'		=> 'User Levels Listings',*/
									/*'history/index'		=> 'User History Listings',*/
									);
/* MODULE FUNCTION
 * 
 * Currently is only set to user and and setting
 * Accessed by administrators only
 */
$config['module_function']	= array(
									'userdashboard/add'		=> 'Add New Dashboard',
									'userdashboard/view'	=> 'View Dashboard Details',
									'userdashboard/edit'	=> 'Edit Dashboard Details',
									'userdashboard/delete'	=> 'Delete Dashboard',
									'user/edit'  => 'Edit User Details',
									'user/view'  => 'View User Details',
									'setting/view'	  => 'View Setting Details',
									'setting/edit'    => 'Edit Setting Details',
									'setting/delete'  => 'Delete Setting Details',
                                    );
// Loading CSS
$config['css']				= array(
									'bootstrap/css/bootstrap.min.css' => 'all',	
									'jquery/jquery-ui-1.9.1/jquery.ui.all.css'=>'all',										
									'tipsy.css'=>'all',
									'jquery.superfish.css' => 'all',
									'jquery.alerts.css' => 'all',
									'colorbox.css' => 'all',									
									'helper.css' => 'all',						
									'admin.css' => 'screen'																					
									);
// Loading Javascript
$config['js']				= array(
									'jquery-1.8.2.min.js',
									'bootstrap/js/bootstrap.min.js',
									/*'jquery.color.js',*/
									'jquery.validate.min.js',	
									'jquery.alerts.js',
									'jquery.superfish-min.js',
									'jquery.pngFix.js',
									'jquery.fancyzoom-min.js',
									'jquery.colorbox.js',
									 'jwplayer/jwplayer.js',
									'jquery.ui/jquery-ui-1.9.1/jquery.ui.core.min.js',
									'jquery.ui/jquery-ui-1.9.1/jquery-ui.custom.min.js',
									'ckeditor/ckeditor.js',
									'ckeditor/adapters/jquery.js',
									'jquery.iframe-transport.js',	
									'jquery.fileupload.js',	
									'jquery.fileupload-process.js',	
									//'jquery.fileupload-video.js',
									//'jquery.fileupload-audio.js',
									//'jquery.fileupload-image.js',
									'jquery.fileupload-validate.js',	
									//'jquery.fileupload-ui.js',
	
									/*	
									<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
									<script src="js/jquery.iframe-transport.js"></script>
									<!-- The basic File Upload plugin -->
									<script src="js/jquery.fileupload.js"></script>
									<!-- The File Upload processing plugin -->
									<script src="js/jquery.fileupload-process.js"></script>
									<!-- The File Upload image preview & resize plugin -->
									<script src="js/jquery.fileupload-image.js"></script>
									<!-- The File Upload audio preview plugin -->
									<script src="js/jquery.fileupload-audio.js"></script>
									<!-- The File Upload video preview plugin -->
									<script src="js/jquery.fileupload-video.js"></script>
									<!-- The File Upload validation plugin -->
									<script src="js/jquery.fileupload-validate.js"></script>
									<!-- The File Upload user interface plugin -->
									<script src="js/jquery.fileupload-ui.js"></script>
									*/																			
									/*'extend/jquery.combo.js',*/																	
									//'extend/jquery.shadowbox.js',			
									'extend/jquery.char.counter.js',
									'extend/jquery.autonumeric.js',
									'extend/jquery.alphanumeric.js',
									'uploadify/swfobject.js',
									'jquery.tipsy.js',	
									'jquery.cookie.js',	
									'admin.js'	
                                    );

/** File Manager path and key access **/
$config['filemanager_path'] = URL::site() . 'filemanager/dialog.php?field_id=fileName&amp;akey='.sha1($_SERVER['HTTP_HOST'].date('dMY'));
/** Administration Control Panel Title **/
$config['title']		  = 'Administration Control Panel';
$config['show_developed'] = TRUE;
$config['item_per_page']  = 25;
/** Text Formats **/
$config['date_format']		= 'd M Y H:i:s';
$config['date_hours']		= 'd/m/Y H:i:s';
/** Error Fields **/
$config['error_field_open']	 = '<div class="form_row error">';
$config['error_field_close'] = '</div>';
$config['default'] = array ('view' => 'admin/default');
 return array_merge_recursive (
	$config 
 );
