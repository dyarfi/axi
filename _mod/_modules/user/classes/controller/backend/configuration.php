<?php defined('SYSPATH') OR die('No direct access allowed.');class Controller_Configuration extends Controller_Backend_BaseAdmin {		protected $_module_name;	protected $_class_name;	protected $_search_keys;	protected $_prefs;	protected $module;	protected $modules;	protected $statuses;		public function before() {		// Get parent before method        parent::before();				$this->_class_name		= 'configuration';		$this->_class_name		= strtolower(str_replace('Controller_', '', get_class($this)));		$this->_prefs			= (Lib::config($this->_class_name.'.'.$this->_class_name.'_fields') !== NULL) ? Lib::config($this->_class_name.'.'.$this->_class_name.'_fields') : array();			}		public function action_index () { }		public function action_add () { }		public function action_view ($id = '') { }		public function action_edit ($id = '') { }		public function action_delete ($id = '') { }	}