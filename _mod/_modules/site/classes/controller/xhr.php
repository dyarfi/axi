<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Xhr extends Controller_Themes_DefaultBlank {

	protected $id1;
	protected $id2;
	protected $id3;
	protected $id4;
	public $template = 'themes/defaultblank';

	public function before () {
		parent::before();

        $this->id1 = Request::$current->param('id1');
        $this->id2 = Request::$current->param('id2');
        $this->id3 = Request::$current->param('id3');
		$this->id4 = Request::$current->param('id4');
				
	}
    
	public function action_index () { }
	
	public function action_read_news () {
		
		$_upload_path		= (Lib::config('news.upload_path') !== NULL) ? Lib::config('news.upload_path') : array();
		
		$_upload_url		= (Lib::config('news.upload_url') !== NULL) ? Lib::config('news.upload_url') : array();
				
		$news				= Model::factory('News')->load_by_name($this->id1);
		$newsfile			= Model::factory('NewsFile')->load_by_group($news->id);
		
		$news_view = Model::factory('News');
		$news_view->id = $news->id;
		$news_view->load();
		$news_view->count++;
		$news_view->update();
		
		/** Views **/

		$content_vars		= array(
								'News'	=> $news,
								'NewsFile' => $newsfile,
								'upload_path' => $_upload_path,			
								'upload_url' => $_upload_url,
								);
		
		$content			= View::factory('site/news_page');

		foreach ($content_vars as $var => $val) {
			$content->$var	= $val;
		}
		
		$this->template->content		= $content; 
				
	}
	
	public function action_contact() {
		
		// Default value 
		$result = '';
		
		$this->setting	= Model_Setting::instance();
				
		// Load Captcha library, you can supply the name of the config group you would like to use.
		$captcha = Captcha::instance();
		
		// Don't show Captcha anymore after the user has given enough valid
		// responses. The "enough" count is set in the captcha config.
		// Ban bots (that accept session cookies) after 90 invalid responses.
		// Be careful not to ban real people though! Set the threshold high enough.
		
		if ($captcha->invalid_count() > 89)
			exit('Bye! your a bot.');
		
		// Set Contact address with email
		$email_contact	= $this->setting->load_by_parameter('email_info');
		
		$name_to		= '';
		$send_to		= '';
		
		$fields	= array(
					// Personal Form
					'name'		=> '',
					'email'		=> '',
					'phone'		=> '',
					'message'	=> '',					
					'captcha'	=> ''
				);
		
		$errors	= $fields;		

		if ($_POST) {
			$post	= new Validation($_POST);						
				
			$post->rule('name', 'not_empty');
			$post->rule('name', 'min_length', array(':value', 4));				
			$post->rule('name', 'regex', array(':value', '/^[0-9a-z_.\s\-]++$/iD'));

			$post->rule('message', 'not_empty');
			$post->rule('message', 'min_length', array(':value', 4));
			$post->rule('message', 'regex', array(':value', '/^[0-9a-z_.\s\-]++$/iD'));

			$post->rule('email', 'Valid::email');
			$post->rule('email', 'not_empty');
			$post->rule('email', 'min_length', array(':value', 4));

			$post->rule('phone', 'not_empty');
			$post->rule('phone', 'regex', array(':value', '/^\d/'));

			$name_to = trim(strip_tags(ucfirst($email_contact->alias))); 
			$send_to = trim(strip_tags($email_contact->value));
	
			// Captcha
			$post->rule('captcha', 'not_empty');
			$post->rule('captcha', 'Captcha::valid', array(':value'));
			
			// Posts checking				
			if ($post->check() && Captcha::valid($post['captcha'])) {
					$fields	= $post->as_array();

					
					$content_vars	= array(
									'name'		 => $fields['name'],
									'email'		 => $fields['email'],
									'phone'		 => $fields['phone'],
									'message'	 => $fields['message'],
									'site_name'  => $this->data['title_name'],
									'registered_mark' => $this->data['registered'],
									);
						
					//----------- Admin data email template -----------
					$email_view		= View::factory('email/contact_form_admin');					
					
					foreach ($content_vars as $var => $val) {
						$email_view->$var	= $val;
					}		

					$_name	= $name_to; 
					$_mail	= $send_to;

					$to			= array($_mail, $_name);  // Address can also be array('to@example.com', 'Name')
					//$to		= $_mail;  // Address can also be array('to@example.com', 'Name')
					$from		= str_replace('http://', '',Lib::config('site.email_address'));
					$subject	= Lib::config('site.email_contact_subject');

					$message	= $email_view->render();	
					
					// To send HTML mail, the Content-type header must be set
					$headers  = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

					// Additional headers
					$headers .= 'To: '.$_name.' <'.$_mail.'>' . "\r\n";
					$headers .= 'From: '.$subject.' <'.$from.'>' . "\r\n";
					$headers .= 'Bcc: defrian.yafi@gmail.com' . "\r\n";
					
					// Mail it
					if(mail($_mail, $subject, $message, $headers)) {
					//if (Email::send($to, $from, $subject, $message, TRUE)) {
					//if(Email::send('default', $subject, $message, $from, $to, TRUE)) {						
					
						//----------- Public data email template -----------
						$email_view		= View::factory('email/contact_form_public');

						foreach ($content_vars as $var => $val) {
							$email_view->$var	= $val;
						}

						//$to		= $fields['email'];  // Address can also be array('to@example.com', 'Name')
						//$to		= array($fields['email'], $fields['name']);  // Address can also be array('to@example.com', 'Name')
						$to			= (!empty($fields['email'])) ? strip_tags($fields['email']) : strip_tags($fields['corporateemail']);
						//$from		= preg_replace('#^https?://#', '',Lib::config('site.email_address'));
						$from		= str_replace('http://', '',Lib::config('site.email_address'));					
						$subject	= Lib::config('site.email_contact_subject');

						$message	= $email_view->render();

						/*** Using Email library with headers manipulation ***/
						
						// To send HTML mail, the Content-type header must be set
						$headers  = 'MIME-Version: 1.0' . "\r\n";
						$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

						// Additional headers
						$headers .= 'To: '.$to.' <'.$to.'>' . "\r\n";
						$headers .= 'From: '.$subject.' <'.$from.'>' . "\r\n";
						$headers .= 'Bcc: defrian.yafi@gmail.com' . "\r\n";
										
						// The real email function
						//Email::send($to, $from, $subject, $message, TRUE);					
						//Email::send('default', $subject, $message, $from, $to, TRUE);						
						mail($to, $subject, $message, $headers);					
					}

					// set flash session data
					//$this->session->set('result', __('thanks_email'));

					$result['result']	= 'sent'; 
					
			} else {
					
					$errors 	= Arr::overwrite($errors, $post->errors('validation'));
					$buffers	= $errors;
					
					foreach ($errors as $row_key => $row_val) {
						if ($row_val != '') {
							$buffers[$row_key]	= Lib::config('site.error_field_open').ucfirst($row_val).Lib::config('site.error_field_close');
						} else {
							$buffers[$row_key]	= $row_val;
						}
					}
					$result['errors']		= $buffers;
					$result['result']		= __('check_form');
			}
		}
		//usleep('200000');
		echo json_encode($result);
		//exit;
	}

	public function action_captcha_reload() {
		
		$captcha = Captcha::instance();
		//$captcha->render();
		echo $captcha->render(TRUE);
		exit();
	}
	
	public function after() {
		parent::after();
	}
	
}
