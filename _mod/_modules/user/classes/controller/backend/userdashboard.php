<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Backend_UserDashboard extends Controller_Backend_BaseAdmin {
    
    protected $dashboard;
    protected $admin;
	protected $modules;
	
	public function before () {
		// Get parent before method
        parent::before();	
    
		$this->_class_name		= $this->controller;
		$this->_module_name		= 'user';		
		$this->_module_menu		= $this->acl->module_menu;
		
		$this->_prefs			= (Lib::config($this->_class_name.'.'.$this->_class_name.'_fields') !== NULL) ? Lib::config($this->_class_name.'.'.$this->_class_name.'_fields') : array();
		
		//$this->statuses			= array('publish','unpublish');
		
		$this->template->css		= array('jquery.jqplot.min.css'=>'all');
		$this->template->js	= array(
									'jquery.jqplot.1.0.4/jquery.jqplot.min.js',
									'jquery.jqplot.1.0.4/plugins/jqplot.pointLabels.min.js',
									'jquery.jqplot.1.0.4/plugins/jqplot.categoryAxisRenderer.min.js',
									'jquery.jqplot.1.0.4/plugins/jqplot.canvasAxisTickRenderer.min.js',
									'jquery.jqplot.1.0.4/plugins/jqplot.canvasTextRenderer.min.js',
									'jquery.jqplot.1.0.4/plugins/jqplot.barRenderer.min.js',
									'jquery.jqplot.1.0.4/plugins/jqplot.pieRenderer.min.js',
									'jquery.jqplot.1.0.4/plugins/jqplot.donutRenderer.min.js'											
									);
		

    }
     
    public function action_index() {       
				
		$top_ten_downloads = array(
						'table'    => 'page_menus',
						'fields'   => array('media, MAX(`count`) as `hits`','title'),
						'where_cond' => array('status'=>'publish','is_system'=> 1),
						'group_by' => array('title'),
						'order_by' => array('count'=>'DESC'),
						'limit'	   => array(0,10),
					  );
		
		$download_top_ten = Model_UserDashboard::instance()->find_top_count($top_ten_downloads);
		
		$top_ten_news	= array(
						'table'    => 'news',
						'fields'   => array('MAX(`count`) as `hits`','name'),
						'where_cond' => array('status'=>'publish'),
						'group_by' => array('name'),
						'order_by' => array('count'=>'DESC'),
						'limit'	   => array(0,10),
					  );
		
		$news_top_ten = Model_UserDashboard::instance()->find_top_count($top_ten_news);
		/*
		$top_ten_solution	= array(
						'table'    => 'solutions',
						'fields'   => array('MAX(`count`) AS hits','title'),
						'group_by' => array('title'),
						'order_by' => array('count'=>'DESC'),
						'limit'	   => array(0,10),
					  );
		
		$solution_top_ten		= Model_UserDashboard::instance()->find_top_count($top_ten_solution);
		*/

		
		/*
		$item_media = array(
						'table'    => 'media',
						'fields'   => array('MAX( count ) AS views', 'subject','description'),
						'group_by' => array('count','subject'),
						'order_by' => array('views'=>'DESC'),
						'limit'	   => array(0,10),
					  );
		
		
		$sql2= 'SELECT COUNT(`user_agent`) as `count`, `user_agent` '
			  .'FROM `wus_url_logs` '
			  .'GROUP BY `user_agent` '
			  .'LIMIT 0 , 10;';
		
		$news_top_ten = Model_UserDashboard::instance()->query($sql2, TRUE);
		
		$sql3= 'SELECT COUNT(`ip_address`) AS `count`, `ip_address` '
			  .'FROM `wus_url_logs` '
			  .'GROUP BY `ip_address` '
			  .'ORDER BY `count` DESC '
			  .'LIMIT 0 , 10;';
		
		$solution_top_ten = Model_UserDashboard::instance()->query($sql3, TRUE);
	
		*/
		
		//print_r($url_top_ten_click);
		//print_r($news_top_ten);
		//print_r($solution_top_ten);
		
		/** Views **/
		
		$content_vars		= array(
									//'dashboard_data'	=> $dashboard_data,	
									
									'download_top_ten'		=> $download_top_ten,
									'news_top_ten'			=> $news_top_ten,
									//'solution_top_ten'		=> $solution_top_ten,	
			
									//'url_top_ten_browser' => '',
									//'solution_top_ten'	=> '',	
			
									'module_menu'		=> $this->_module_menu,
									'class_name'		=> $this->_class_name,
									'module_name'		=> $this->_module_name,
									'widget'			=> Widget::instance(),
									);
		
		$content_vars		= array_merge($content_vars, $this->_prefs);

		$content			= View::factory('user/backend/'.$this->_class_name.'_index');

		foreach ($content_vars as $var => $val) {
			$content->$var	= $val;
		}
		
		$this->template->content		= $content; 
		
	}
} // End Dashboard