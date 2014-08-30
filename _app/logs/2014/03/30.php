<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-30 11:43:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 11:43:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 11:47:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 11:47:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 12:20:54 --- ERROR: ErrorException [ 1 ]: Call to a member function load_by_group() on a non-object ~ MODPATH/_modules/site/views/site/download_page.php [ 20 ]
2014-03-30 12:20:54 --- STRACE: ErrorException [ 1 ]: Call to a member function load_by_group() on a non-object ~ MODPATH/_modules/site/views/site/download_page.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-30 12:21:43 --- ERROR: ErrorException [ 1 ]: Call to a member function load_by_group() on a non-object ~ MODPATH/_modules/site/views/site/download_page.php [ 20 ]
2014-03-30 12:21:43 --- STRACE: ErrorException [ 1 ]: Call to a member function load_by_group() on a non-object ~ MODPATH/_modules/site/views/site/download_page.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-30 12:21:59 --- ERROR: ErrorException [ 1 ]: Call to a member function load_by_group() on a non-object ~ MODPATH/_modules/site/views/site/download_page.php [ 20 ]
2014-03-30 12:21:59 --- STRACE: ErrorException [ 1 ]: Call to a member function load_by_group() on a non-object ~ MODPATH/_modules/site/views/site/download_page.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-30 12:27:15 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ MODPATH/_modules/site/views/site/download_page.php [ 41 ]
2014-03-30 12:27:15 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ MODPATH/_modules/site/views/site/download_page.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-30 12:27:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_types/4e7a0bae702989b9e7f77edefb77cc1c.jpgthemes/content/brochure.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 12:27:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_types/4e7a0bae702989b9e7f77edefb77cc1c.jpgthemes/content/brochure.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 12:27:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_types/4e7a0bae702989b9e7f77edefb77cc1c.jpgthemes/content/brochure.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 12:27:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_types/4e7a0bae702989b9e7f77edefb77cc1c.jpgthemes/content/brochure.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 12:35:54 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Download::$downloadtypefiles ~ MODPATH/_modules/site/classes/controller/download.php [ 225 ]
2014-03-30 12:35:54 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Download::$downloadtypefiles ~ MODPATH/_modules/site/classes/controller/download.php [ 225 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/download.php(225): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 225, Array)
#1 [internal function]: Controller_Download->action_type()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Download))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-03-30 12:43:32 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadFile::$desctiption ~ MODPATH/_modules/site/views/site/download_page.php [ 27 ]
2014-03-30 12:43:32 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadFile::$desctiption ~ MODPATH/_modules/site/views/site/download_page.php [ 27 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/download_page.php(27): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 27, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(218): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Download))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-03-30 12:50:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 12:50:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 12:50:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 12:50:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 12:50:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 12:50:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 12:50:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 12:50:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 12:50:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 12:50:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 12:50:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 12:50:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 12:50:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 12:50:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 12:50:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 12:50:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 14:26:32 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/download_page.php [ 21 ]
2014-03-30 14:26:32 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/download_page.php [ 21 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/download_page.php(21): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 21, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(218): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Download))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-03-30 14:29:43 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '@' ~ MODPATH/_modules/site/views/site/download_page.php [ 21 ]
2014-03-30 14:29:43 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '@' ~ MODPATH/_modules/site/views/site/download_page.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-30 14:30:32 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/download_page.php [ 22 ]
2014-03-30 14:30:32 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/download_page.php [ 22 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/download_page.php(22): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 22, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(218): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Download))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-03-30 14:30:45 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/download_page.php [ 22 ]
2014-03-30 14:30:45 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/download_page.php [ 22 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/download_page.php(22): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 22, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(218): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Download))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-03-30 14:30:45 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/download_page.php [ 22 ]
2014-03-30 14:30:45 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/download_page.php [ 22 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/download_page.php(22): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 22, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(218): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Download))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-03-30 14:31:10 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/download_page.php [ 21 ]
2014-03-30 14:31:10 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/download_page.php [ 21 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/download_page.php(21): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 21, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(218): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Download))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-03-30 14:32:31 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/download_page.php [ 21 ]
2014-03-30 14:32:31 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/download_page.php [ 21 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/download_page.php(21): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 21, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(218): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Download))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-03-30 14:32:44 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/download_page.php [ 22 ]
2014-03-30 14:32:44 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/download_page.php [ 22 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/download_page.php(22): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 22, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(218): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Download))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-03-30 14:32:45 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/download_page.php [ 22 ]
2014-03-30 14:32:45 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/download_page.php [ 22 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/download_page.php(22): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 22, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(218): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Download))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-03-30 14:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 14:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 14:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 14:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 14:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 14:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 14:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 14:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 14:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 14:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 14:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 14:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 14:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 14:39:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 14:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 14:39:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 14:46:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 14:46:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 14:46:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 14:46:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 14:46:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 14:46:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 14:46:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 14:46:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 14:46:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 14:46:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 14:46:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 14:46:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 14:47:39 --- ERROR: ErrorException [ 8 ]: Undefined index: phone ~ MODPATH/_modules/site/views/site/contact_page.php [ 33 ]
2014-03-30 14:47:39 --- STRACE: ErrorException [ 8 ]: Undefined index: phone ~ MODPATH/_modules/site/views/site/contact_page.php [ 33 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/contact_page.php(33): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 33, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(218): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Contact))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-03-30 14:47:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 14:47:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 14:47:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 14:47:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 14:48:59 --- ERROR: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Form::textarea() must be of the type array, string given, called in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/contact_page.php on line 39 and defined ~ SYSPATH/classes/kohana/form.php [ 227 ]
2014-03-30 14:48:59 --- STRACE: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Form::textarea() must be of the type array, string given, called in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/contact_page.php on line 39 and defined ~ SYSPATH/classes/kohana/form.php [ 227 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/form.php(227): Kohana_Core::error_handler(4096, 'Argument 3 pass...', '/Volumes/Data/w...', 227, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/contact_page.php(39): Kohana_Form::textarea('message', '', '', true)
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(218): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Themes_Default->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Contact))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-03-30 14:49:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 14:49:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 14:49:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 14:49:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 14:49:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 14:49:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 14:49:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 14:49:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 14:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 14:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 14:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 14:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 14:52:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 14:52:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 14:52:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 14:52:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 14:52:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 14:52:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 14:52:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 14:52:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 14:56:11 --- ERROR: ErrorException [ 8 ]: Undefined index: corporate_name ~ MODPATH/_modules/site/views/site/contact_page.php [ 74 ]
2014-03-30 14:56:11 --- STRACE: ErrorException [ 8 ]: Undefined index: corporate_name ~ MODPATH/_modules/site/views/site/contact_page.php [ 74 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/contact_page.php(74): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 74, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(218): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Contact))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-03-30 14:57:29 --- ERROR: ErrorException [ 8 ]: Undefined index: corporate_mobile ~ MODPATH/_modules/site/views/site/contact_page.php [ 80 ]
2014-03-30 14:57:29 --- STRACE: ErrorException [ 8 ]: Undefined index: corporate_mobile ~ MODPATH/_modules/site/views/site/contact_page.php [ 80 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/contact_page.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 80, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(218): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Contact))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-03-30 14:57:43 --- ERROR: ErrorException [ 8 ]: Undefined index: corporate_phone.phone ~ MODPATH/_modules/site/views/site/contact_page.php [ 86 ]
2014-03-30 14:57:43 --- STRACE: ErrorException [ 8 ]: Undefined index: corporate_phone.phone ~ MODPATH/_modules/site/views/site/contact_page.php [ 86 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/contact_page.php(86): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 86, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(218): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Contact))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-03-30 14:58:22 --- ERROR: ErrorException [ 8 ]: Undefined index: corporate_phone.phone ~ MODPATH/_modules/site/views/site/contact_page.php [ 86 ]
2014-03-30 14:58:22 --- STRACE: ErrorException [ 8 ]: Undefined index: corporate_phone.phone ~ MODPATH/_modules/site/views/site/contact_page.php [ 86 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/contact_page.php(86): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 86, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(218): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Contact))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-03-30 14:58:23 --- ERROR: ErrorException [ 8 ]: Undefined index: corporate_phone.phone ~ MODPATH/_modules/site/views/site/contact_page.php [ 86 ]
2014-03-30 14:58:23 --- STRACE: ErrorException [ 8 ]: Undefined index: corporate_phone.phone ~ MODPATH/_modules/site/views/site/contact_page.php [ 86 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/contact_page.php(86): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 86, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(218): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Contact))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-03-30 14:58:24 --- ERROR: ErrorException [ 8 ]: Undefined index: corporate_phone.phone ~ MODPATH/_modules/site/views/site/contact_page.php [ 86 ]
2014-03-30 14:58:24 --- STRACE: ErrorException [ 8 ]: Undefined index: corporate_phone.phone ~ MODPATH/_modules/site/views/site/contact_page.php [ 86 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/contact_page.php(86): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 86, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(218): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Contact))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-03-30 14:58:54 --- ERROR: ErrorException [ 8 ]: Undefined index: corporate_phone[phone] ~ MODPATH/_modules/site/views/site/contact_page.php [ 86 ]
2014-03-30 14:58:54 --- STRACE: ErrorException [ 8 ]: Undefined index: corporate_phone[phone] ~ MODPATH/_modules/site/views/site/contact_page.php [ 86 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/contact_page.php(86): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 86, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(218): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Contact))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-03-30 14:59:18 --- ERROR: ErrorException [ 8 ]: Undefined index: corporate_email ~ MODPATH/_modules/site/views/site/contact_page.php [ 97 ]
2014-03-30 14:59:18 --- STRACE: ErrorException [ 8 ]: Undefined index: corporate_email ~ MODPATH/_modules/site/views/site/contact_page.php [ 97 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/contact_page.php(97): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 97, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(218): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Contact))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-03-30 14:59:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 14:59:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-03-30 14:59:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-30 14:59:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}