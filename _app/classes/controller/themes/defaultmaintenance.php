<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Themes_DefaultMaintenance extends Controller_Template {

	public $auto_render = TRUE;
	public $template = 'themes/defaultmaintenance';
	public $is_mobile = '';
	public $is_maintenance = FALSE;
	public $member;
	public $data;

	/**
		* Initialize properties before running the controller methods (actions),
		* so they are available to our action.
	**/

	public function before() {
		
		/** Load Session Class **/
		$this->session		= Session::instance('native');					
		
		/** Set Initialize Variable **/
		$maintenance_mode	= Model_Configuration::instance()->load('maintenance');
		
		/** Load Setting Models **/
		$this->setting		= Model_Setting::instance();
		
		/** Load Page Menu Models **/
		$this->menu			= Model::factory('PageMenu');		
			
		/** Set language default **/
		I18n::$lang = 'en';		
		
		// Check if robots is accessing the site 
		if ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET['lang']) && Cookie::get('language') == '') {
			// Set cookies for language
			Cookie::set('language', $_GET['lang']);
			I18n::$lang = Cookie::get('language');
			$redirect = ($this->request->url()) ? $this->request->url() : URL::site();
			$this->request->redirect($redirect);
		} 		
		
		/** SET MAINTENANCE MODE template **/
		if (!empty($maintenance_mode->value)) {
			/** Set redirect for maintenance **/
			$this->is_maintenance = TRUE;
		}	
		
		/** Checking ajax requests **/
		if ($this->request->is_ajax()) {
			
			$this->auto_render = FALSE;
            $this->template    = 'ajaxdefault';
				
		} else {

			// Run anything that need ot run before this after checking ajax requested
			parent::before();
			
			// Set Site Counter
			if (!Session_Cookie::instance()->get('session')) $this->setting->count_visitor();
						
			$this->data['page_title']			= i18n::get('page_title') != 'page_title' ? i18n::get('page_title') : 'Welcome to Kohana';
			$this->data['meta_keywords']		= '';
			$this->data['meta_description']		= '';
			$this->data['meta_copyright']		= i18n::get('meta_copyright') != 'meta_copyright' ? i18n::get('meta_copyright') : 'Kohana Developer Team';
								
			// Get Email Info 
			$emailadmin= $this->setting->load_by_parameter('email_info');
			$this->data['email_info']	= Lib::_trim_strip(@$emailadmin->value);	
			
			// Get Site Counter 
			$counter = $this->setting->load_by_parameter('counter');
			$this->data['counter']	= Lib::_trim_strip(@$counter->value);	
			
			// Site Title Default
			$titledefault = $this->setting->load_by_parameter('title_default');
			$this->data['title_default']	= Lib::_trim_strip(@$titledefault->value);
			
			// Site Title Name Default
			$titlename = $this->setting->load_by_parameter('title_name');
			$this->data['title_name']	= Lib::_trim_strip(@$titlename->value);
						
			// Site Quote Default
			$sitequote = $this->setting->load_by_parameter('site_quote');
			$this->data['site_quote']	= Lib::_trim_strip(@$sitequote->value);
			
			// Set Site Copyright
			$copyright = $this->setting->load_by_parameter('copyright');
			$this->data['copyright']	= Lib::_trim_strip(@$copyright->value);	
			
			// Set Site Copyright
			$registered = $this->setting->load_by_parameter('registered_mark');
			$this->data['registered']	= Lib::_trim_strip(@$registered->value);
			
			// Set Page Menu
			$this->data['menus']		= $this->menu->find(array('status'=>'publish'));
			
			// Set initialize site counter
			$this->setting->counter();						
			
			//--- Set data (array) to be sent into view template ---//
			// Social media data taken from setting table 
			$where_cond   = array('status'=>'publish', 'parameter LIKE' => '%socmed_%');
			$social_media =	$this->setting->find($where_cond);
			$buffers = array();
			foreach ($social_media as $socmed) {
				$socmed->value = strip_tags($socmed->value);
				$buffers[$socmed->parameter] = $socmed;
			}
			
//--- Menu Social Media In Header home center ---//
			$this->data				= array_merge($this->data,$buffers);		

			// Define all css and js loads in site/config/site.php
			$config = 'maintenance_site';
	
			// Define defaults css and js load
			// Add defaults styles and scripts to template variables.
			$this->data['css']	= Lib::config($config.'.css');
			$this->data['js']	= Lib::config($config.'.js');

			//--- Set data (array) to be sent into view template ---//
			foreach ($this->data as $var => $val) {
				$this->template->$var	= $val;
			}
			

			//--- Set additional CSS and JS Assets for Controller
			$this->template->styles				= array();
			$this->template->scripts			= array();
			
			//--- Set additional in page CSS and JS Assets for Controller
			$this->template->page_js			= '';
			$this->template->page_css			= '';
			
			unset($buffers);

		}

	}

	/* 
		* Fill in default values for our properties before rendering the output.
	*/

	public function after() {
		
		if ($this->request->is_ajax()) {
			$this->template->render();
			exit;
		} else {

			if($this->auto_render) :

			endif;

		}

		// Run to clean sessions, anything that needs to run after this.
		
		//Session::instance()->set('flash','');
		//Session::instance()->set('result','');
		//Session::instance()->set('register_info','');
		//Session::instance()->set('auth_error','');
		
		// Run anything that needs to run after this.
		parent::after();

	}

}
