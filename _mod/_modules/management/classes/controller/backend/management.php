<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Backend_Management extends Controller_Backend_BaseAdmin {
	protected $_module_name;
	protected $_class_name;
	protected $_search_keys;
	protected $_uid;
	protected $_users;
	protected $_prefs;

	protected $management;
	protected $file;
	protected $statuses;
	protected $type;

	public function before () {
		// Get parent before method
        parent::before();	

		$file					= new Model_ManagementFile;
		$buffers				= array();
		
		$this->_prefilter_keys	= array('id');
		
		$this->_module_name 	= 'management';		
		$this->_class_name 		= $this->controller;
		$this->_module_menu		= $this->acl->module_menu;
		
		$this->_prefs			= (Lib::config($this->_class_name.'.'.$this->_class_name.'_fields') !== NULL) ? Lib::config($this->_class_name.'.'.$this->_class_name.'_fields') : array();
		
		$this->_upload_path		= (Lib::config($this->_class_name.'.upload_path') !== NULL) ? Lib::config($this->_class_name.'.upload_path') : array();
		
		$this->_upload_url		= (Lib::config($this->_class_name.'.upload_url') !== NULL) ? Lib::config($this->_class_name.'.upload_url') : array();
		
		$this->_search_keys		= array('name'			=> 'Name',
										'position'		=> 'Position',
										'biography'		=> 'Biography',
										'quote'			=> 'Testimony',
										'message'		=> 'Message',
										'status'		=> 'Status');

		$this->management		= new Model_Management;
		$this->file				= new Model_ManagementFile;
		$this->user				= new Model_User;
		
		$users					= $this->user->find();
		
		$users_arr				= array();
		foreach ($users as $user){
			$users_arr[$user->id] = $user;
		}
		$this->_users			= $users_arr;

		$this->statuses			= array('publish',
										'unpublish');

		$this->show			= array(0 => 'No', 1 => 'Yes');
		
		//-- User id from user login session 'user_id'
		$this->_uid = $this->session->get('user_id');
		
		unset($buffers);
	}

	public function action_index () {
		$where_cond	= array('status !='	=> 'deleted');

			/** Find & Multiple change status **/
			if ($_POST) {
				$post	= new Validation($_POST);
				if (isset($post['field']) || isset($post['keyword'])) {
					$post->rule('field', array($this, '_valid_search_key'), array(':validation', 'field'));
					$post->rule('keyword', 'regex', array(':value', '/^[a-z0-9_.\s\-]++$/iD'));
					if ($post->check()) {
						$where_cond[$post['field'] . ' LIKE']	= $post['keyword'] . '%';
						$filters	= array('f'	=> $post['field'],
											'q'	=> $post['keyword']);
						$this->session->set($this->_class_name.'_filter', serialize($filters));
					} else if (isset($post['find'])) {
						$this->session->delete($this->_class_name.'_filter');
					}
				}
				if ($this->session->get($this->_class_name.'_filter') !== FALSE) {
					$filters	= unserialize($this->session->get($this->_class_name.'_filter'));
					if (in_array($filters['f'], array_keys($this->_search_keys)) && $filters['q'] != '')
						$where_cond[$filters['f'] . ' LIKE']	= '%' . $filters['q'] . '%';
				}
			}

		$_files  = $this->file->find();
		$buffers = array();
		foreach ($_files as $_file){
			$buffers[$_file->management_id] = $_file;
		}
		$files = $buffers;

		/** Table sorting **/

		$params		= Request::$current->param();
		
		$sorts		= array('asc', 'desc');

		$sort		= isset($params['id2']) ? $this->id2 : 'name';
		$order		= isset($params['id4']) ? $this->id4 : $sorts[0];
		$order_by	= array($sort 	=> $order);
		
		$page_index	= isset($_GET['page']) ? $_GET['page'] - 1: 0;
		//$page_index	= isset($params['no']) ? $params['no'] - 1: 0;

		$per_page	= Lib::config('admin.item_per_page');
		//$per_page	= 4;
		$page_url	= isset($_GET['page']) ? '?page='.$_GET['page'] : '';
		$base_url	= ADMIN.$this->_class_name;
		$offset		= ($page_index == 0) ? '' : $page_index * $per_page;

		$table_headers	= array('name'			=> 'Name',
								'position'		=> 'Position',
								'status'		=> 'Status',
								'added'			=> 'Added',
								'modified'		=> 'Modified');

		if (isset($params['sort']) && isset($params['order'])) {
			$headers	= array_keys($table_headers);

			$sort		= (isset($params['sort']) && in_array(strtolower($params['sort']), $headers)) ? strtolower($params['sort']) : $headers[0];
			$order		= (isset($params['order']) && in_array(strtolower($params['order']), $sorts)) ? strtolower($params['order']) : $sorts[0];

			$order_by	= array($sort	=> $order);

			$base_url	= ADMIN.$this->_class_name.'/index/sort/' . $params['sort'] . '/order/' . $params['order'] . '/page/';
		}

		/** Execute list query **/

		$field		= isset($filters['f']) ? $filters['f'] : '';
		$keyword	= isset($filters['q']) ? $filters['q'] : '';

		$where_cond	= isset($where_cond) ? $where_cond : '';

		$total_rows	= count($this->management->find($where_cond));
		$total_record 	= $total_rows;	
		$listings	= $this->management->find($where_cond, $order_by, $per_page, $offset);

		$config		= array('base_url'			=> $base_url,
							'total_items'		=> $total_rows,
							'items_per_page'	=> $per_page,
							'uri_segment'		=> 'page');

		$pagination	= new Pagination($config);
		
		/** Views **/

		$content_vars		= array('listings'		=> $listings,
									'table_headers'	=> $table_headers,
									'total_record' => $total_record,
									'class_name'	=> $this->_class_name,			
									'module_name'	=> $this->_module_name,
									'module_menu'	=> $this->_module_menu,
									'upload_path'	=> $this->_upload_path,
									'upload_url'	=> $this->_upload_url,
									'statuses'		=> $this->statuses,
									'search_keys'	=> $this->_search_keys,
									'users'			=> $this->_users,
									'files'			=> $files,
									'show'			=> $this->show,
									'field'			=> $field,
									'keyword'		=> $keyword,
									'order'			=> $order,
									'sort'			=> $sort,
									'page_url'		=> $page_url,
									'page_index'	=> $page_index,
									'params'		=> $params,
									'pagination'	=> $pagination);

		$content			= View::factory($this->_class_name.'/backend/'.$this->_class_name.'_index');

		foreach ($content_vars as $var => $val) {
			$content->$var	= $val;
		}
		
		$this->template->content		= $content; 
	
	}

	public function action_add () {
		$fields	= array('name'				=> '',
						'position'			=> '',
						'biography'			=> '',
						'quote'				=> '',
						'message'			=> '',
						'show'				=> '',
						'status'			=> '');

		if (isset($this->_prefs['show_upload']) && $this->_prefs['show_upload'] && isset($this->_prefs['uploads'])) {
			foreach ($this->_prefs['uploads'] as $row_name => $row_params) {
				$fields[$row_name]	= '';

				if (isset($row_params['caption']) && $row_params['caption'])
					$fields[$row_name.'_caption']	= '';
			}
		}

		$errors	= $fields;

		if ($_POST) {
			if ($_FILES) 
				$post	= Validation::factory(array_merge($_POST,$_FILES));
			else
				$post	= Validation::factory($_POST);
			
                $post->rule('name', 'not_empty');
                $post->rule('name', 'min_length', array(':value', 4));
                $post->rule('position', 'not_empty');
                $post->rule('position', 'min_length', array(':value', 4));
                $post->rule('status', 'not_empty');
                
                $post->rule('name', array($this, '_unique_name'), array(':validation', 'name'));
            
			if (isset($this->_prefs['show_upload']) && $this->_prefs['show_upload'] && isset($this->_prefs['uploads'])) {
				foreach ($this->_prefs['uploads'] as $row_name => $row_params) {
					// Set if this is optional or not, return true
					if (isset($row_params['optional'])) {
						$post->rule($row_name, 'Upload::not_empty');
					}
					
					// Set if this is not the right file type, return true
					if (isset($row_params['file_type'])) {
						$post->rule($row_name, 'Upload::type', array(':value', explode(",", $row_params['file_type'])));
					} 

					// Set if this is not the right max file size, return true
					if (isset($row_params['max_file_size'])) {
						$post->rule($row_name, 'Upload::size', array(':value', $row_params['max_file_size']));
					} 
					
					// Set if this file has valid name in database, return true
					//if (isset($post[$row_name]['name'])) {
						//$post->rule($row_name, array($this, '_unique_filename'), array(':validation', $row_name));
					//}
				}
			}
			
			if ($post->check()) {
				$fields	= $post->as_array();
	
				$params	= array('name'		=> isset($fields['name']) ? $fields['name'] : '',
								'position'	=> isset($fields['position']) ? $fields['position'] : '',
								'biography'	=> isset($fields['biography']) ? $fields['biography'] : '',
								'quote'		=> isset($fields['quote']) ? $fields['quote'] : '',
								'message'	=> isset($fields['message']) ? $fields['message'] : '',
								'show'		=> isset($fields['show']) ? $fields['show'] : 0,
								'status'	=> $fields['status']);

				$id		= $this->management->add($params);
				
				if ($id !== FALSE && isset($this->_prefs['show_upload']) && $this->_prefs['show_upload'] && isset($this->_prefs['uploads'])) {
					foreach ($this->_prefs['uploads'] as $row_name => $row_params) {
						
						if (!File::exts_by_mime($post[$row_name]['type']))
							continue;
						
						$file_hash	= md5(time() + rand(100, 999));
						$file_data	= pathinfo($post[$row_name]['name']);
						
						$file_name	= Lib::_upload_to($post[$row_name], $file_hash.'.'.$file_data['extension'], $this->_upload_path,0777);
								
						$file_data	= pathinfo($file_name);
						$file_mime	= $post[$row_name]['type'];

						if ($file_name != '' && isset($this->_prefs['uploads'][$row_name]['image_manipulation'])) {
							$params = array('management_id'	 => $id,
											'field_name' => $row_name,
											'file_name'	 => $file_data['basename'],
											'file_type'	 => $file_mime,
											'caption'	 => isset($fields[$row_name.'_caption']) ? $fields[$row_name.'_caption'] : '');

							$this->file->add($params);
						}
					}
				}

				if (isset($_POST['add_another'])) {
					$this->request->redirect(ADMIN.$this->_class_name.'/add');
					return;
				}

				$this->request->redirect(ADMIN.$this->_class_name.'/view/'.$id);
				return;
			} else {
				$fields		= Arr::overwrite($fields, $post->as_array());
				$errors 	= Arr::overwrite($errors, $post->errors('validation'));
				$buffers	= $errors;
				foreach ($errors as $row_key => $row_val) {
					if ($row_val != '') {
						$buffers[$row_key]	= Lib::config('admin.error_field_open').ucfirst($row_val).Lib::config('admin.error_field_close');
					} else {
						$buffers[$row_key]	= $row_val;
					}
				}
				$errors		= $buffers;
			}
		}
		
		/** Views **/

		$content_vars		= array('action'	=> 'add',
									'param'		=> $this->id1,
									'errors'	=> $errors,
									'fields'	=> $fields,
									'statuses'	=> $this->statuses,
									'class_name' 	=> $this->_class_name,
									'module_menu'	=> $this->_module_menu);
		
		$content_vars		= array_merge($content_vars, $this->_prefs);

		$content			= View::factory($this->_class_name.'/backend/'.$this->_class_name.'_form');

		foreach ($content_vars as $var => $val) {
			$content->$var	= $val;
		}
		
		$this->template->content		= $content;    
	}

	public function action_view () {
		$this->management->id	= $this->id1;

		if (!$this->management->load()) {
			$this->request->redirect(ADMIN.$this->_class_name.'/error/invalid_request');
			return;
		}

		/** Views **/

		$where_cond			= array('management_id'	=> $this->management->id);
		$files				= $this->file->find($where_cond);
		$buffers			= array();

		foreach ($files as $row) {
			$buffers[$row->field_name]	= $row;
		}

		$files				= $buffers;

		unset($buffers);

		/** Generate Thumbnails **/

		Lib::_auto_image_manipulation($this->_upload_path, $this->file, $this->_prefs);

		$content_vars		= array(
									'module_name'	=> $this->_module_name,
									'class_name'	=> $this->_class_name,
									'module_menu'	=> $this->_module_menu,
									'management'	=> $this->management,
									'files'			=> $files,
									'show'			=> $this->show,
									'readable_mime'	=> Lib::config($this->_module_name.'.readable_mime'));

		$content_vars		= array_merge($content_vars, $this->_prefs);

		$content			= View::factory($this->_class_name.'/backend/'.$this->_class_name.'_view');

		foreach ($content_vars as $var => $val) {
			$content->$var	= $val;
		}
		
		$this->template->content		= $content;   

	}

	public function action_edit () {
		$this->management->id	= $this->id1;
		
		if (!$this->management->load()) {
			$this->request->redirect(ADMIN.$this->_class_name.'/error/invalid_request');
			return;
		}
		
		$fields	= array(
						'name'				=> '',
						'position'			=> '',
						'quote'				=> '',
						'biography'			=> '',
						'message'			=> '',
						'show'				=> '',
						'status'			=> '');

		if (isset($this->_prefs['show_upload']) && $this->_prefs['show_upload'] && isset($this->_prefs['uploads'])) {
			foreach ($this->_prefs['uploads'] as $row_name => $row_params) {
				$fields[$row_name]	= '';

				if (isset($row_params['caption']) && $row_params['caption'])
					$fields[$row_name.'_caption']	= '';
			}
		}

		$errors	= $fields;

		if ($_POST) {
			if ($_FILES) 
				$post	= Validation::factory(array_merge($_POST,$_FILES));
			else
				$post	= Validation::factory($_POST);
			
                $post->rule('name', 'not_empty');
                $post->rule('name', 'min_length', array(':value', 4));
                $post->rule('position', 'not_empty');
                $post->rule('position', 'min_length', array(':value', 4));
                $post->rule('status', 'not_empty');
                
                $post->rule('name', array($this, '_unique_name'), array(':validation', 'name'));
            
			if (isset($this->_prefs['show_upload']) && $this->_prefs['show_upload'] && isset($this->_prefs['uploads'])) {
				foreach ($this->_prefs['uploads'] as $row_name => $row_params) {
					if (isset($row_params['optional']) && !$row_params['optional']) {
						//$post->add_rules($row_name, 'upload::required');
						//$post->rule($row_name, 'upload::valid');
					}					
					if (Upload::type($post[$row_name],explode(',',$row_params['file_type'])) !== 1)
						continue;
				}
			}
			
			if ($post->check()) {
				$fields	= $post->as_array();
				
				$params	= array('name'		=> isset($fields['name']) ? $fields['name'] : '',
								'position'	=> isset($fields['position']) ? $fields['position'] : '',
								'biography'	=> isset($fields['biography']) ? $fields['biography'] : '',
								'quote'		=> isset($fields['quote']) ? $fields['quote'] : '',
								'message'	=> isset($fields['message']) ? $fields['message'] : '',
								'show'		=> isset($fields['show']) ? $fields['show'] : 0,
								'status'	=> $fields['status']);

				foreach ($params as $var => $val) {
					$this->management->$var	= $val;
				}

				$this->management->update();

				if (isset($this->_prefs['show_upload']) && $this->_prefs['show_upload'] && isset($this->_prefs['uploads'])) {
					$where_cond			= array('management_id'	=> $this->management->id);
					$files				= $this->file->find($where_cond);
					$buffers			= array();

					foreach ($files as $row) {
						$buffers[$row->field_name]	= $row;
					}

					$files				= $buffers;

					unset($buffers);

					foreach ($this->_prefs['uploads'] as $row_name => $row_params) {
						if (isset($fields['delete_'.$row_name]) && $fields['delete_'.$row_name] == 1 && isset($files[$row_name])) {
							$this->file->id	= $files[$row_name]->id;
							$this->file->load();
							$this->file->delete();
						}
						
						if($row_params['caption'] == true && empty($_FILES[$row_name]['size']) && !empty($files[$row_name]->id)) {
							$this->file->id	= $files[$row_name]->id;
							$this->file->load();
							$this->file->caption = ($this->file->caption == $fields[$row_name.'_caption']) ? $this->file->caption : $fields[$row_name.'_caption']; 								
							$this->file->update();
						}
						
						//! Upload::valid($image) OR
						//! Upload::not_empty($image) OR
						//! Upload::type($image, array('jpg', 'jpeg', 'png', 'gif')))
						
						/*
						if (!isset($_FILES[$row_name]) || (isset($_FILES[$row_name]) && !Upload::type($_FILES[$row_name],explode(',',$row_params['file_type'])) || !Upload::valid($_FILES[$row_name])))
							continue;
						*/
						
						if (!Upload::not_empty($post[$row_name]) || !Upload::type($post[$row_name],explode(',',$row_params['file_type'])) || !Upload::valid($post[$row_name]))
							continue;
						
						$file_hash	= md5(time() + rand(100, 999));
						$file_data	= pathinfo($post[$row_name]['name']);
						
						$file_name	= Lib::_upload_to($post[$row_name], $file_hash.'.'.$file_data['extension'], $this->_upload_path,0777);
						$file_data	= pathinfo($file_name);
						$file_mime	= $post[$row_name]['type'];
						
						if (!isset($files[$row_name])) {
							$params			= array('management_id'		=> $this->management->id,
													'field_name'	=> $row_name,
													'file_name'		=> $file_data['basename'],
													'file_type'		=> $file_mime,
													'caption'		=> isset($fields[$row_name.'_caption']) ? $fields[$row_name.'_caption'] : '');
							
							$this->file->add($params);
						} else {
						
							$this->file->id	= $files[$row_name]->id;
							$this->file->load();

							$params			= array('management_id'		=> $this->management->id,
													'field_name'	=> $row_name,
													'file_name'		=> $file_data['basename'],
													'file_type'		=> $file_mime,
													'caption'		=> isset($fields[$row_name.'_caption']) ? $fields[$row_name.'_caption'] : '');
							
							foreach ($params as $var => $val) {
								$this->file->$var	= $val;
							}

							$this->file->update();
						}

					}
				}

				$this->request->redirect(ADMIN.$this->_class_name.'/view/'.$this->management->id);
				return;
			} else {
				$fields		= arr::overwrite($fields, $post->as_array());
				$errors 	= arr::overwrite($errors, $post->errors());
				$buffers	= $errors;

				foreach ($errors as $row_key => $row_val) {
					if ($row_val != '')
						$buffers[$row_key]	= Lib::config('site.error_field_open').Kohana::lang('validation.'.$errors[$row_key]).Lib::config('site.error_field_close');
					else
						$buffers[$row_key]	= $row_val;
				}

				$errors		= $buffers;
			}
		} else {
			$fields	= array(
							'name'				=> $this->management->name,
							'position'			=> $this->management->position,
							'quote'				=> $this->management->quote,
							'biography'			=> $this->management->biography,
							'message'			=> $this->management->message,
							'show'				=> $this->management->show,
							'status'			=> $this->management->status);

			$where_cond			= array('management_id'	=> $this->management->id);
			$files				= $this->file->find($where_cond);
			$buffers			= array();

			foreach ($files as $row) {
				$buffers[$row->field_name]	= $row;
			}

			$files				= $buffers;

			unset($buffers);

			if (isset($this->_prefs['show_upload']) && $this->_prefs['show_upload'] && isset($this->_prefs['uploads'])) {
				foreach ($this->_prefs['uploads'] as $row_name => $row_params) {
					$fields[$row_name]	= '';

					if (isset($row_params['caption']) && $row_params['caption'])
						$fields[$row_name.'_caption']	= (isset($files[$row_name])) ? $files[$row_name]->caption : '';
				}
			}
		}

		/** Views **/
		
		$content_vars		= array('action'		=> 'edit',
									'param'			=> $this->id1,
									'module_name'	=> $this->_module_name,
									'class_name'	=> $this->_class_name,
									'module_menu'	=> $this->_module_menu,
									'errors'		=> $errors,
									'fields'		=> $fields,
									'management'	=> $this->management,
									'files'			=> !empty($files) ? $files : '' ,
									'types'			=> $this->type,
									'statuses'		=> $this->statuses,
									'readable_mime'	=> Lib::config($this->_module_name.'.readable_mime'));

		$content_vars		= array_merge($content_vars, $this->_prefs);

		$content			= View::factory($this->_class_name.'/backend/'.$this->_class_name.'_form');

		foreach ($content_vars as $var => $val) {
			$content->$var	= $val;
		}
		
		$this->template->content		= $content;
	}

	public function action_delete () {
		$this->management->id	= $this->id1;

		if (!$this->management->load()) {
			$this->request->redirect(ADMIN.$this->_class_name.'/index');
			return;
		}		
		
		// This is used for only Ajax Request		
		if ($this->request->is_ajax()) {
				
			if($this->management->delete($this->id1)) {
				echo 1;
			}	
			else {
				echo 0;	
			}					
			
		} else {
			$this->request->redirect(ADMIN.$this->request->controller());
		}

		exit();
	}

	// Action for update item status
	public function action_change() {
		if ($this->request->post() && $this->request->post('check') !='') {
			$rows	= $this->request->post('check');
			foreach ($rows as $row) {
				$this->management->id	= $row;
				if (!$this->management->load())
					continue;
				$this->management->status	= $this->request->post('select_action');
				$this->management->update();
			}
			$redirect_url	= (strstr($this->acl->previous_url,ADMIN)) ? $this->acl->previous_url : ADMIN.$this->_class_name.'/index';
			//$this->request->redirect($redirect_url);
			$this->request->redirect(ADMIN.$this->_class_name);
		} else {
			$this->request->redirect(ADMIN.$this->_class_name);
		}
	}
	
	public function download ($file_name = '') {
		$where_cond	= array('file_name'	=> $file_name);

		$files		= $this->file->find($where_cond);

		foreach ($files as $row) {
			download::force(Lib::config($this->_module_name.'.upload_url').$row->file_name);
		}
	}

	public function _remove_tag($name = '') {
		if($name == '')
			return $name;
			
		$tag_to_remove	= array(' '	=> '_', 
								'/'	=> '-',
								'&'	=> '&amp;');
		
		foreach($tag_to_remove as $row => $replace) {
			$name	= str_replace($row, $replace, $name);
		}
		
		return $name;
	}

	/** CALLBACKS **/

	public function _unique_name (Validation $array, $field) {
		if (isset($this->management->name) && $this->management->name == $array[$field])
			return;

		$where_cond		= array('name'	=> $array[$field]);
		$name_exists	= ($this->management->find_count($where_cond) != 0);

		if ($name_exists)
			$array->error($field, 'name_exists');
	}

	/** PRE FILTER **/

	public function _reverse_date ($value = '') {
		if (strpos($value, '/') != 0)
			return (implode('-', array_reverse(explode('/', $value))));
		else
			return (implode('/', array_reverse(explode('-', $value))));
	}
	
	public function _valid_search_key (Validation $array, $field) {
		if (!isset($this->_search_keys)) {
			$array->error($field, 'invalid_search_key');
			return;
		}
		$keys			= array_keys($this->_search_keys);
		if (!in_array($array[$field], $keys))
			$array->error($field, 'invalid_search_key');
	}
}
