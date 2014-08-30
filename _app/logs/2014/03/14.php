<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-14 12:46:56 --- ERROR: ErrorException [ 1 ]: Class 'Model_ArticleCategory' not found ~ APPPATH/classes/controller/themes/default.php [ 98 ]
2014-03-14 12:46:56 --- STRACE: ErrorException [ 1 ]: Class 'Model_ArticleCategory' not found ~ APPPATH/classes/controller/themes/default.php [ 98 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-14 12:48:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_ArticleCategory' not found ~ APPPATH/classes/controller/themes/default.php [ 98 ]
2014-03-14 12:48:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_ArticleCategory' not found ~ APPPATH/classes/controller/themes/default.php [ 98 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-14 12:48:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_ArticleCategory' not found ~ APPPATH/classes/controller/themes/default.php [ 98 ]
2014-03-14 12:48:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_ArticleCategory' not found ~ APPPATH/classes/controller/themes/default.php [ 98 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-14 12:48:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_ArticleCategory' not found ~ APPPATH/classes/controller/themes/default.php [ 98 ]
2014-03-14 12:48:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_ArticleCategory' not found ~ APPPATH/classes/controller/themes/default.php [ 98 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-14 12:48:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_ArticleCategory' not found ~ APPPATH/classes/controller/themes/default.php [ 98 ]
2014-03-14 12:48:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_ArticleCategory' not found ~ APPPATH/classes/controller/themes/default.php [ 98 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-14 12:49:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_MediaRelease' not found ~ APPPATH/classes/controller/themes/default.php [ 126 ]
2014-03-14 12:49:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_MediaRelease' not found ~ APPPATH/classes/controller/themes/default.php [ 126 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-14 12:49:36 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Home::$articles ~ MODPATH/_modules/site/classes/controller/home.php [ 53 ]
2014-03-14 12:49:36 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Home::$articles ~ MODPATH/_modules/site/classes/controller/home.php [ 53 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(53): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 53, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#6 {main}
2014-03-14 12:50:16 --- ERROR: ErrorException [ 8 ]: Undefined index: socmed_facebook ~ APPPATH/views/themes/default.php [ 189 ]
2014-03-14 12:50:16 --- STRACE: ErrorException [ 8 ]: Undefined index: socmed_facebook ~ APPPATH/views/themes/default.php [ 189 ]
--
#0 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(189): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 189, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_Default->after()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#10 {main}
2014-03-14 13:19:30 --- ERROR: ErrorException [ 8 ]: Undefined index: socmed_facebook ~ APPPATH/views/themes/default.php [ 189 ]
2014-03-14 13:19:30 --- STRACE: ErrorException [ 8 ]: Undefined index: socmed_facebook ~ APPPATH/views/themes/default.php [ 189 ]
--
#0 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(189): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 189, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_Default->after()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#10 {main}
2014-03-14 13:25:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-14 13:25:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#3 {main}
2014-03-14 13:32:59 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$controller ~ APPPATH/views/themes/default.php [ 45 ]
2014-03-14 13:32:59 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$controller ~ APPPATH/views/themes/default.php [ 45 ]
--
#0 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(45): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_Default->after()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#10 {main}
2014-03-14 14:38:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:38:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:38:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:38:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:38:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:38:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:38:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:38:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:38:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg_footer.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:38:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg_footer.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:38:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:38:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:38:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:38:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:38:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:38:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:38:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:38:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg_footer.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg_footer.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg_footer.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg_footer.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg_footer.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg_footer.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:39:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:39:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:39:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:39:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:39:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:39:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:39:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:39:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:39:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:39:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:39:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:39:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:39:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:39:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:39:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:39:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:39:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg_footer.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:39:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg_footer.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/HelveticaNeueLTCom-Lt/helveticaneueltcom-lt.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/HelveticaNeueLTCom-Lt/helveticaneueltcom-lt.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/HelveticaNeueLTCom-Bd/helveticaneueltcom-bd.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/HelveticaNeueLTCom-Bd/helveticaneueltcom-bd.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/HelveticaNeueLTCom-Lt/helveticaneueltcom-lt.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/HelveticaNeueLTCom-Lt/helveticaneueltcom-lt.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/HelveticaNeueLTCom-Bd/helveticaneueltcom-bd.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/HelveticaNeueLTCom-Bd/helveticaneueltcom-bd.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/bg_body.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/bg_body.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-h3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-h3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/btn-search.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/btn-search.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/line-menu.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/line-menu.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/bg-menu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/bg-menu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.ad-gallery.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.ad-gallery.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/HelveticaNeueLTCom-Bd/helveticaneueltcom-bd.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/HelveticaNeueLTCom-Bd/helveticaneueltcom-bd.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/HelveticaNeueLTCom-Lt/helveticaneueltcom-lt.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/HelveticaNeueLTCom-Lt/helveticaneueltcom-lt.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/HelveticaNeueLTCom-Lt/helveticaneueltcom-lt.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/HelveticaNeueLTCom-Lt/helveticaneueltcom-lt.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/HelveticaNeueLTCom-Bd/helveticaneueltcom-bd.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/HelveticaNeueLTCom-Bd/helveticaneueltcom-bd.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.ad-gallery.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.ad-gallery.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/bg_body.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/bg_body.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/bg-menu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/bg-menu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/btn-search.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/btn-search.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-h3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-h3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/line-menu.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/line-menu.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/HelveticaNeueLTCom-Bd/helveticaneueltcom-bd.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/HelveticaNeueLTCom-Bd/helveticaneueltcom-bd.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/HelveticaNeueLTCom-Lt/helveticaneueltcom-lt.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/HelveticaNeueLTCom-Lt/helveticaneueltcom-lt.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/HelveticaNeueLTCom-Lt/helveticaneueltcom-lt.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/HelveticaNeueLTCom-Lt/helveticaneueltcom-lt.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/HelveticaNeueLTCom-Bd/helveticaneueltcom-bd.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/HelveticaNeueLTCom-Bd/helveticaneueltcom-bd.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/bg_body.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/bg_body.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/btn-search.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/btn-search.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-h3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-h3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/line-menu.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/line-menu.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/bg-menu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/bg-menu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/bg_body.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/bg_body.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:44:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/line-menu.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:44:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/line-menu.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:44:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/btn-search.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:44:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/btn-search.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:44:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-h3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:44:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-h3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:44:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/bg-menu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:44:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/bg-menu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:44:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:44:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:44:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:44:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/bg_body.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/bg_body.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/bg-menu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/bg-menu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/btn-search.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/btn-search.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-h3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-h3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/btn-search.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/btn-search.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/line-menu.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/line-menu.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/bg_body.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/bg_body.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg_body.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg_body.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/btn-search.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/btn-search.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-h3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-h3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-menu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-menu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/line-menu.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/line-menu.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg_body.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg_body.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/btn-search.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/btn-search.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/line-menu.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/line-menu.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-menu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-menu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-h3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-h3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/btn-search.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/btn-search.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/line-menu.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/line-menu.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-menu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-menu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:46:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:46:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg_body.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg_body.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-menu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-menu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/line-menu.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/line-menu.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-h3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-h3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/btn-search.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/btn-search.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:48:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:48:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:48:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:48:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:48:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:48:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:48:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:48:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:48:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg_body.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:48:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg_body.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:48:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:48:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/content/img-widget.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:48:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:48:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/content/home-banner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:48:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:48:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/content/img-widget-14.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:48:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:48:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/content/banner-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:48:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-menu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:48:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-menu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:48:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/line-menu.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:48:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/line-menu.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:48:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/btn-search.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:48:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/btn-search.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:48:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-h3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:48:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-h3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:48:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:48:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:48:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:48:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg_body.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg_body.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/line-menu.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/line-menu.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/btn-search.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/btn-search.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-h3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-h3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-menu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-menu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg_body.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg_body.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/line-menu.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/line-menu.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/btn-search.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/btn-search.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-menu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-menu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-h3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-h3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg_body.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg_body.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-menu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-menu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:49:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg_body.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:49:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg_body.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/btn-search.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/btn-search.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-menu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-menu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/line-menu.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/line-menu.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-h3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-h3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-menu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-menu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/line-menu.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/line-menu.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:50:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-menu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:50:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-menu.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/line-menu.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/line-menu.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-h3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-h3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/btn-search.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/btn-search.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/btn-search.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/btn-search.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-h3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-h3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:50:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:50:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:50:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:50:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:50:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-h3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:50:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-h3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:50:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:50:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:50:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-h3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:50:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-h3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:50:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:50:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/icon-download.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:50:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:50:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 14:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 14:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/bg-header.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 17:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-14 17:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#3 {main}
2014-03-14 17:46:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 17:46:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 17:53:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 17:53:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 17:53:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 17:53:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 22:04:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-14 22:04:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#1 {main}
2014-03-14 22:10:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL testimonial.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-14 22:10:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL testimonial.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#3 {main}