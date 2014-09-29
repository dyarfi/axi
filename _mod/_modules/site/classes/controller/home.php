<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Home extends Controller_Themes_Default {
	protected $page_category;
	protected $id1;
	protected $id2;
	protected $id3;
	protected $id4;


	public function before () {
		parent::before();
		
        $this->id1 = Request::$current->param('id1');
        $this->id2 = Request::$current->param('id2');
        $this->id3 = Request::$current->param('id3');
		$this->id4 = Request::$current->param('id4');
        
		$this->page			= new Model_Page;
		
	}
    
	public function action_index () {
		
		// Load Captcha library, you can supply the name of the config group you would like to use.
		$captcha = Captcha::instance();
	
		$this->template->scripts = array(
										'https://maps.googleapis.com/maps/api/js?v=3.exp',
										'jquery_1.7.2.js',
										'scroll/jquery_wow.min.js',
										'jquery_bootstrap.min.js',
										'jquery_cycle.all.min.js',
										'scroll/jquery_scrollReveal.js',
										'jquery_fancybox.js',
										'jquery_TimeMax.js',
										'jquery_mousewheel.js',
										'jquery_jscrollpane.min.js',
										'jquery_owl.carousel.min.js',	
										'menu/jquery_bootstrap-collapse.js',
										'scroll/jquery_wow.min.js',
										'scroll/jquery_stellar.min.js',
										'scroll/jquery_waypoints.min.js',
										'scroll/jquery_easing.1.3.js',
										'jquery_function.js',
										'jquery_alert.js',
										'jquery_validate.js',
										'jquery_validate.additional.js',
										'jquery.lazyload.min.js'	
		);
		
		$this->template->page_js	= 'window.scrollReveal = new scrollReveal(); var bs_root = "/axi/"; new WOW().init();';
				
		$content_vars	= array(
							/*** MENUS - start ***/
							'MenuPath'	=> Lib::config('page')->menu_upload_path,				
							'MenuUrl'	=> Lib::config('page')->menu_upload_url,

							'MediaPath'	=> DOCROOT.'uploads/media_files/',
							'MediaUrl'	=>'uploads/media_files/',		

							'PagePath'	=> Lib::config('page')->upload_path,
							'PageUrl'	=> Lib::config('page')->upload_url,	

							'PageHome'	  	=> Model::factory('Page')->find(array('menu_id'=>1,'status'=>'publish'),array('order'=>'asc')),
							'MenuHome'	  	=> Model::factory('PageMenu')->load(1),
							'MenuHomeFile' 	=> Model::factory('PageMenuFile')->load_by_group(1,'image_1'),		

							'PageAxi'		=> Model::factory('Page')->find(array('menu_id'=>2,'status'=>'publish'),array('order'=>'asc')),
							'PageAxiFile'	=> Model::factory('PageFile')->load_by_group(5),
							'MenuAxi'		=> Model::factory('PageMenu')->load(2),
							'MenuAxiFile'	=> Model::factory('PageMenuFile')->load_by_group(2,'image_1'),

							'PageMan'		=> Model::factory('Page')->find(array('menu_id'=>2,'status'=>'publish'),array('order'=>'asc')),
							'PageManFile'	=> Model::factory('PageFile')->load_by_group(5),
							'MenuMan'		=> Model::factory('PageMenu')->load(3),
							'MenuManFile'	=> Model::factory('PageMenuFile')->load_by_group(3,'image_1'),

							'Management'	=> Model::factory('Management')->find(array('status'=>'publish'),array('added'=>'asc')),
							'ManFile'		=> Model::factory('ManagementFile'),
							'ManPath'		=> Lib::config('management')->upload_path,
							'ManUrl'		=> Lib::config('management')->upload_url,

							'MenuXprins'		=> Model::factory('PageMenu')->load(3),
							'MenuXprinsFile'	=> Model::factory('PageMenuFile')->load_by_group(3,'image_1'),
							'MenuXprinsLogo'	=> Model::factory('PageMenuFile')->load_by_group(3,'image_2'),
				
							'MenuLG'		=> Model::factory('PageMenu')->load(4),
							'MenuLGFile'	=> Model::factory('PageMenuFile')->load_by_group(4,'image_1'),
							'MenuLGLogo'	=> Model::factory('PageMenuFile')->load_by_group(4,'image_2'),				
							
							'MenuLGE'		=> Model::factory('PageMenu')->load(5),
							'MenuLGEFile'	=> Model::factory('PageMenuFile')->load_by_group(5,'image_1'),
							'MenuLGELogo'	=> Model::factory('PageMenuFile')->load_by_group(5,'image_2'),				
				
							'MenuNews'		=> Model::factory('PageMenu')->load(6),
							'MenuNewsFile'	=> Model::factory('PageMenuFile')->load_by_group(6,'image_1'),
							
							'MenuGrowWu'	=> Model::factory('PageMenu')->load(7),
							'MenuGrowWuFile'=> Model::factory('PageMenuFile')->load_by_group(7,'image_1'),
							'MenuGrowWuLogo'=> Model::factory('PageMenuFile')->load_by_group(7,'image_2'),							
							
							'MenuContact'	=> Model::factory('PageMenu')->load(8),
							'MenuContactFile'=> Model::factory('PageMenuFile')->load_by_group(8,'image_1'),
							
							
							'News'				=> Model::factory('News')->find(array('status'=>'publish')),
							'NewsFile'			=> Model::factory('NewsFile'),
							'news_upload_path'	=> Lib::config('news.upload_path'), 			
							'news_upload_url'	=> Lib::config('news.upload_url'),			
							'Career'		=> Model::factory('Career')->find(array('status'=>'publish')),
			
			
							'captcha' => $captcha,

							'Address'	=> $this->setting->load_by_parameter('contactus_address'),
							'Gmaps'		=> $this->data['gmaps'],
		
							
							/*** MENUS - end ***/		
						);
		
		$content		= View::factory('site/home_page');

		foreach ($content_vars as $var => $val) {
			$content->$var	= $val;
		}
		
		$this->template->page_title		= 'Home';
		$this->template->content		= $content; 
	}	
	
	public function action_download() {

		if (!$this->id1)
			return;
		
		
		$file = pathinfo(base64_decode($this->id1));
		$item = Model::factory('PageMenu');
		if (!empty($file['basename'])) {
			$tracks = Model::factory('PageMenu')->find(array('media'=>$file['basename']));
			foreach ($tracks as $track) {
				$item->id = $track->id;
				$item->load();
				$item->count++;
				$item->update();
			}
		}
		// Retrieve Raw File
		$fileraw = base64_decode($this->id1);
		// Set filename to original
		$filename = '';
		
		//return Lib::_download_file_force($filename,$fileraw);
		return Lib::_download($fileraw);
	}
	
	public function after() {
		parent::after();
		
	}

}
