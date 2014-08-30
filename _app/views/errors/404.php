<?php defined('SYSPATH') OR die('No direct access allowed.'); 

// ===================== Setup Environment Data === START
// ===================== 404 - Page Not Found Error ===================== //

// Add default css and javascript
$styles		= array_reverse(Kohana::$config->load('site.css'));
$scripts	= array_reverse(Kohana::$config->load('site.js'));

// Add defaults to template variables.
//$this->template->styles  = array_reverse(array_merge($this->template->styles, $styles));
//$this->template->scripts = array_reverse(array_merge($this->template->scripts, $scripts));

// Get Site Counter 
$counter = Model_Setting::instance()->load_by_parameter('counter');
$data['counter']	= trim(strip_tags(@$counter->value),"\n\r\x00..\x1F");	

// Site Title Default
$titledefault = Model_Setting::instance()->load_by_parameter('title_default');
$data['title_default']	= trim(@strip_tags($titledefault->value),"\n\r\x00..\x1F");

// Set Site Copyright
$copyright = Model_Setting::instance()->load_by_parameter('copyright');
$copyright	= trim(strip_tags(@$copyright->value),"\n\r\x00..\x1F");	

// Set Site Copyright
$registered = Model_Setting::instance()->load_by_parameter('registered_mark');
$data['registered']	= trim(strip_tags(@$registered->value,'<br><em><strong>'),"\n\r\x00..\x1F");
// ========================================= Setup Environment Data === END

// Set Page Menu
$menus		= Model::factory('PageMenu')->find(array('status'=>'publish'));
//--- Set data (array) to be sent into view template ---//
// Social media data taken from setting table 
$socmed_facebook = Model::factory('Setting')->load_by_parameter('socmed_facebook');

$socmed_twitter = Model::factory('Setting')->load_by_parameter('socmed_twitter');

$socmed_linkedin = Model::factory('Setting')->load_by_parameter('socmed_linkedin');

// Define all css and js loads in site/config/site.php
$config = 'site';

// Define defaults css and js load
// Add defaults styles and scripts to template variables.
$css	= Lib::config($config.'.css');
$js	= Lib::config($config.'.js');
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8" lang="<?php echo I18n::$lang;?>"/>
<link rel="alternate" href="<?php echo URL::site('?lang='.I18n::$lang);?>" hreflang="<?php echo I18n::$lang;?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width">
<link rel="shortcut icon" href="<?php echo BS_URL;?>favicon.ico" type="image/x-icon">
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<meta name="keywords" content="<?php echo $meta_keywords; ?>">
<meta name="description" content="<?php echo $meta_description;?>">
<meta name="copyright" content="<?php echo $meta_copyright;?>">
<meta name="robots" content="all,index,follow">
<meta name="googlebot" content="all,index,follow">
<meta name="allow-search" content="yes">
<meta name="audience" content="all">
<meta name="revisit" content="2 days">
<meta name="revisit-after" content="2 days">
<meta name="author" content="Web Architect">
<meta name="creator" content="Web Architect indonesia">
<meta http-equiv="Reply-to" content="info@webarq.com">
<meta name="distribution" content="global">
<meta name="document-classification" content="general">
<meta name="rating" content="general">
<meta http-equiv="Reply-to" content="info@webarq.com"/>
<!--
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Developed by <?php echo DEVELOPER_NAME;?> ( <?php echo DEVELOPER_URL;?> )
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ 
Generated : <?php echo date('d/m/Y H:m:s') . "\n";?>
-->
<script type="text/javascript"> var base_URL = '<?php echo BS_URL; ?>';</script>
<?php foreach($styles as $file => $type) { echo HTML::style(CSS.$file, array('media' => $type)), "\n"; }?>
<!--[if IE 7]> <link href="<?php echo ASSETS;?>css/styleIE7.css" rel="stylesheet" type="text/css"> <![endif]-->
<!--[if IE 8]> <link href="<?php echo ASSETS;?>css/styleIE8.css" rel="stylesheet" type="text/css"> <![endif]-->
<!--[if IE 9]> <link href="<?php echo ASSETS;?>css/styleIE9.css" rel="stylesheet" type="text/css"> <![endif]-->
<?php foreach($scripts as $file) { echo HTML::script(JS.$file, NULL, TRUE), "\n"; }?>
<title><?php echo !empty($page_title) ? $page_title : ''; ?> | <?php echo !empty($title_name) ? $title_name : ''; ?></title>
</head>
<body>
<section id="container">
   <header>
	  <div class="navbar navbar-fixed-top" role="navigation">
		 <div class="navbar-inner">
			<div class="container">
			   <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
			   </button>
				<a class="brand" href="<?php echo URL::site();?>"><img class="logo_a" src="<?php echo ASSETS;?>images/material/logo-a.png" alt="" /><img class="logo_b" style="display: none;" src="<?php echo ASSETS;?>images/material/logo-b.png" alt=""/></a>
			   <div class="nav-collapse collapse">
				  <ul class="nav">
						<?php 
						$i = 2; $k = 2;
						foreach ($menus as $menu) { 
							$menu->title = $menu->name == 'home' ? '' : $menu->title;
							$menu->name = $menu->name == 'home' ? '/' : $menu->name;	
							if ($menu->name !== '/') {
								if ($i >= 3) { $k = $i + 1; }	
								if ($k >= 9) { $k = 10; } ?>
								<li data-slide="<?php echo $k;?>"><a href="#<?php echo $menu->name;?>"><?php echo $menu->title;?></a></li>
								<?php							
							$i++;
							}
						} ?>
					</ul>
			   </div><!--/.nav-collapse -->
			</div>
		 </div>
	  </div>
   </header>
	<div id="middle" class="row-fluid">
   <div id="sectionMaintenance">
	   <?php //echo isset($content) ? $content : '';?>	
	   <div class="maintenance">
		   <h1>Page Not Found</h1>
		   <h3><a href="<?php echo URL::site();?>">Return to the website</a></h3>
	   </div>
   </div>
	</div>	
	<footer id="footer" class="wrapper">
	   <div class="section_skew">
		  <div class="img_bg">
			 <img src="<?php echo ASSETS;?>images/material/section_footer.jpg" alt="" data-stellar-ratio=".005" data-stellar-horizontal-offset="10"/>
		  </div>
	   </div>
	   <div class="foo_inside wrapper">
		  <div class="footer_social">			  
			 <a class="fb wow pulse animated" data-wow-duration="1500ms" data-wow-iteration="infinite" href="<?php echo $socmed_facebook->value;?>">Facebook</a>
			 <a class="tw wow pulse animated" data-wow-duration="1600ms" data-wow-iteration="infinite" href="<?php echo $socmed_twitter->value;?>">Twitter</a>
			 <a class="lk wow pulse animated" data-wow-duration="1700ms" data-wow-iteration="infinite" href="<?php echo $socmed_linkedin->value;?>">Linkin</a>
		  </div>
		  <div class="text_center f_11 wow bounceIn animated">			  
			<?php echo $copyright;?> Design by WEBARQ.
		  </div>
	   </div>
	</footer>
</section><!-- end container -->
<?php foreach($css as $c => $f) { echo HTML::style(CSS.$c, array('media'=>$f), TRUE, TRUE), "\n"; }?>
<?php foreach($js as $j) { echo HTML::script(JS.$j, NULL, TRUE), "\n"; }?>
<script type="text/javascript">	
$(document).ready(function() { 
<?php if (Session::instance()->get("result") != '') {?> 
	jAlert("<?php echo Session::instance()->get_once("result",'default'); ?>", "");
<?php } ?>
<?php if (Session::instance()->get("flash") != '') {?> 
	jAlert("<?php echo Session::instance()->get_once("flash",'default'); ?>", "");
<?php } ?>
<?php if (Session::instance()->get("register_info") != '') {?> 
	jAlert("<?php echo Session::instance()->get_once("register_info",'default'); ?>", ""); 
<?php } ?>
<?php if (Session::instance()->get("auth_error") != '') {?> 
	jAlert("<?php echo Session::instance()->get_once("auth_error",'default'); ?>", "");
<?php } ?>
});	
</script>
<?php 
/** For loading the js in page controller **/
if(!empty($page_js)) {?><script type="text/javascript"><?php echo $page_js;?></script><?php }?>
<?php 
/** For loading google analytics from setting module **/
if(!empty($analytics)) {?><script type="text/javascript"><?php echo $analytics;?></script><?php }?>
</body>
</html>