<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-07 00:58:35 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/default.php [ 65 ]
2014-08-07 00:58:35 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/default.php [ 65 ]
--
#0 /Volumes/Data/www/axi/_app/views/themes/default.php(65): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 65, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#5 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(87): Controller_Themes_Default->after()
#6 [internal function]: Controller_Home->after()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-08-07 00:59:16 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'MenuPath' ~ MODPATH/_modules/site/views/site/home_page.php [ 6 ]
2014-08-07 00:59:16 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'MenuPath' ~ MODPATH/_modules/site/views/site/home_page.php [ 6 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(6): Kohana_Core::error_handler(2, 'Illegal string ...', '/Volumes/Data/w...', 6, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(87): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-07 00:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 00:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 01:02:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/themes/default.php [ 112 ]
2014-08-07 01:02:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/themes/default.php [ 112 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-07 01:05:52 --- ERROR: View_Exception [ 0 ]: The requested view management/backend/management_add could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-08-07 01:05:52 --- STRACE: View_Exception [ 0 ]: The requested view management/backend/management_add could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('management/back...')
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(30): Kohana_View->__construct('management/back...', NULL)
#2 /Volumes/Data/www/axi/_mod/_modules/management/classes/controller/backend/management.php(303): Kohana_View::factory('management/back...')
#3 [internal function]: Controller_Backend_Management->action_add()
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Management))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#8 {main}
2014-08-07 01:06:14 --- ERROR: View_Exception [ 0 ]: The requested view management/backend/management_add could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-08-07 01:06:14 --- STRACE: View_Exception [ 0 ]: The requested view management/backend/management_add could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('management/back...')
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(30): Kohana_View->__construct('management/back...', NULL)
#2 /Volumes/Data/www/axi/_mod/_modules/management/classes/controller/backend/management.php(303): Kohana_View::factory('management/back...')
#3 [internal function]: Controller_Backend_Management->action_add()
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Management))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#8 {main}
2014-08-07 01:07:07 --- ERROR: View_Exception [ 0 ]: The requested view management/backend/management_add could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-08-07 01:07:07 --- STRACE: View_Exception [ 0 ]: The requested view management/backend/management_add could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('management/back...')
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(30): Kohana_View->__construct('management/back...', NULL)
#2 /Volumes/Data/www/axi/_mod/_modules/management/classes/controller/backend/management.php(305): Kohana_View::factory('management/back...')
#3 [internal function]: Controller_Backend_Management->action_add()
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Management))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#8 {main}
2014-08-07 01:07:10 --- ERROR: View_Exception [ 0 ]: The requested view management/backend/management_add could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-08-07 01:07:10 --- STRACE: View_Exception [ 0 ]: The requested view management/backend/management_add could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('management/back...')
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(30): Kohana_View->__construct('management/back...', NULL)
#2 /Volumes/Data/www/axi/_mod/_modules/management/classes/controller/backend/management.php(305): Kohana_View::factory('management/back...')
#3 [internal function]: Controller_Backend_Management->action_add()
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Management))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#8 {main}
2014-08-07 03:55:54 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH/_modules/site/classes/controller/home.php [ 71 ]
2014-08-07 03:55:54 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH/_modules/site/classes/controller/home.php [ 71 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(71): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 71, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#6 {main}
2014-08-07 03:57:05 --- ERROR: ErrorException [ 8 ]: Undefined offset: 2 ~ MODPATH/_modules/site/classes/controller/home.php [ 71 ]
2014-08-07 03:57:05 --- STRACE: ErrorException [ 8 ]: Undefined offset: 2 ~ MODPATH/_modules/site/classes/controller/home.php [ 71 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(71): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 71, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#6 {main}
2014-08-07 03:58:48 --- ERROR: ErrorException [ 8 ]: Undefined offset: 2 ~ MODPATH/_modules/site/classes/controller/home.php [ 71 ]
2014-08-07 03:58:48 --- STRACE: ErrorException [ 8 ]: Undefined offset: 2 ~ MODPATH/_modules/site/classes/controller/home.php [ 71 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(71): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 71, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#6 {main}
2014-08-07 04:01:28 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ']' ~ MODPATH/_modules/site/classes/controller/home.php [ 72 ]
2014-08-07 04:01:28 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ']' ~ MODPATH/_modules/site/classes/controller/home.php [ 72 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-07 04:06:53 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Management::$person ~ MODPATH/_modules/site/views/site/home_page.php [ 57 ]
2014-08-07 04:06:53 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Management::$person ~ MODPATH/_modules/site/views/site/home_page.php [ 57 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(57): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 57, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(170): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(93): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-07 04:09:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: i ~ MODPATH/_modules/site/views/site/home_page.php [ 58 ]
2014-08-07 04:09:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: i ~ MODPATH/_modules/site/views/site/home_page.php [ 58 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 58, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(170): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(93): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-07 11:49:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 11:49:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 13:34:08 --- ERROR: ErrorException [ 1 ]: Call to undefined method Validation::add_error() ~ MODPATH/_modules/management/classes/controller/backend/management.php [ 638 ]
2014-08-07 13:34:08 --- STRACE: ErrorException [ 1 ]: Call to undefined method Validation::add_error() ~ MODPATH/_modules/management/classes/controller/backend/management.php [ 638 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-07 13:35:06 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::lang() ~ MODPATH/_modules/management/classes/controller/backend/management.php [ 284 ]
2014-08-07 13:35:06 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::lang() ~ MODPATH/_modules/management/classes/controller/backend/management.php [ 284 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-07 13:39:19 --- ERROR: ErrorException [ 2 ]: trim() expects parameter 1 to be string, object given ~ SYSPATH/classes/kohana/url.php [ 110 ]
2014-08-07 13:39:19 --- STRACE: ErrorException [ 2 ]: trim() expects parameter 1 to be string, object given ~ SYSPATH/classes/kohana/url.php [ 110 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'trim() expects ...', '/Volumes/Data/w...', 110, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/url.php(110): trim(Object(Model_ManagementFile), '/')
#2 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(63): Kohana_URL::site(Object(Model_ManagementFile))
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#4 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#6 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#8 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#9 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#10 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(170): Kohana_Controller_Template->after()
#11 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(97): Controller_Themes_Default->after()
#12 [internal function]: Controller_Home->after()
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#14 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#17 {main}
2014-08-07 13:40:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ddb190a56710453106da43ec0f8984ef.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 13:40:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ddb190a56710453106da43ec0f8984ef.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 13:40:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 64f4e0e179e08786fb15cef16bca3ec9.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 13:40:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 64f4e0e179e08786fb15cef16bca3ec9.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 13:40:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1a97068b2feaa95e884203f21a9bbed5.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 13:40:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1a97068b2feaa95e884203f21a9bbed5.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 13:40:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 06c7909c2c29e2e375b85ea7d1bce901.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 13:40:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 06c7909c2c29e2e375b85ea7d1bce901.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 13:40:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 4a1a89055dda11386b4f5ea1f8cc42eb.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 13:40:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 4a1a89055dda11386b4f5ea1f8cc42eb.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 13:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 64f4e0e179e08786fb15cef16bca3ec9.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 13:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 64f4e0e179e08786fb15cef16bca3ec9.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 13:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1a97068b2feaa95e884203f21a9bbed5.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 13:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 4a1a89055dda11386b4f5ea1f8cc42eb.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 13:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 4a1a89055dda11386b4f5ea1f8cc42eb.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 13:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1a97068b2feaa95e884203f21a9bbed5.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 13:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ddb190a56710453106da43ec0f8984ef.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 13:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ddb190a56710453106da43ec0f8984ef.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 13:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 06c7909c2c29e2e375b85ea7d1bce901.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 13:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 06c7909c2c29e2e375b85ea7d1bce901.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 13:40:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 64f4e0e179e08786fb15cef16bca3ec9.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 13:40:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 64f4e0e179e08786fb15cef16bca3ec9.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 13:40:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 06c7909c2c29e2e375b85ea7d1bce901.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 13:40:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 06c7909c2c29e2e375b85ea7d1bce901.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 13:40:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1a97068b2feaa95e884203f21a9bbed5.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 13:40:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1a97068b2feaa95e884203f21a9bbed5.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 13:40:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 4a1a89055dda11386b4f5ea1f8cc42eb.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 13:40:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 4a1a89055dda11386b4f5ea1f8cc42eb.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 13:40:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ddb190a56710453106da43ec0f8984ef.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 13:40:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ddb190a56710453106da43ec0f8984ef.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 13:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 4a1a89055dda11386b4f5ea1f8cc42eb.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 13:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 4a1a89055dda11386b4f5ea1f8cc42eb.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 13:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 64f4e0e179e08786fb15cef16bca3ec9.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 13:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 64f4e0e179e08786fb15cef16bca3ec9.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 13:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1a97068b2feaa95e884203f21a9bbed5.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 13:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1a97068b2feaa95e884203f21a9bbed5.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 13:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 06c7909c2c29e2e375b85ea7d1bce901.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 13:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 06c7909c2c29e2e375b85ea7d1bce901.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 13:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ddb190a56710453106da43ec0f8984ef.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 13:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ddb190a56710453106da43ec0f8984ef.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 13:40:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 64f4e0e179e08786fb15cef16bca3ec9.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 13:40:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 64f4e0e179e08786fb15cef16bca3ec9.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 13:40:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 06c7909c2c29e2e375b85ea7d1bce901.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 13:40:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 06c7909c2c29e2e375b85ea7d1bce901.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 13:40:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 4a1a89055dda11386b4f5ea1f8cc42eb.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 13:40:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 4a1a89055dda11386b4f5ea1f8cc42eb.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 13:40:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1a97068b2feaa95e884203f21a9bbed5.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 13:40:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1a97068b2feaa95e884203f21a9bbed5.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 13:40:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ddb190a56710453106da43ec0f8984ef.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 13:40:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ddb190a56710453106da43ec0f8984ef.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 13:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ddb190a56710453106da43ec0f8984ef.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 13:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ddb190a56710453106da43ec0f8984ef.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 13:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 4a1a89055dda11386b4f5ea1f8cc42eb.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 13:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 4a1a89055dda11386b4f5ea1f8cc42eb.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 13:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 64f4e0e179e08786fb15cef16bca3ec9.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 13:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 06c7909c2c29e2e375b85ea7d1bce901.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 13:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 06c7909c2c29e2e375b85ea7d1bce901.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 13:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1a97068b2feaa95e884203f21a9bbed5.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 13:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1a97068b2feaa95e884203f21a9bbed5.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 13:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 64f4e0e179e08786fb15cef16bca3ec9.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 13:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 13:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 14:03:19 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageMenu::$text ~ MODPATH/_modules/site/views/site/home_page.php [ 93 ]
2014-08-07 14:03:19 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageMenu::$text ~ MODPATH/_modules/site/views/site/home_page.php [ 93 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(93): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 93, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(170): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(100): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-07 14:24:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/6fbaaaec4fb092ee99325d553cf86e74.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-07 14:24:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/6fbaaaec4fb092ee99325d553cf86e74.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-07 14:24:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/6fbaaaec4fb092ee99325d553cf86e74.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-07 14:24:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/6fbaaaec4fb092ee99325d553cf86e74.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-07 14:25:29 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageMenu::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 93 ]
2014-08-07 14:25:29 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageMenu::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 93 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(93): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 93, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(170): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(100): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-07 14:25:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/6fbaaaec4fb092ee99325d553cf86e74.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-07 14:25:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/6fbaaaec4fb092ee99325d553cf86e74.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-07 14:25:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/6fbaaaec4fb092ee99325d553cf86e74.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-07 14:25:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/6fbaaaec4fb092ee99325d553cf86e74.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-07 14:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/6fbaaaec4fb092ee99325d553cf86e74.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-07 14:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/6fbaaaec4fb092ee99325d553cf86e74.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-07 14:26:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/6fbaaaec4fb092ee99325d553cf86e74.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-07 14:26:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/6fbaaaec4fb092ee99325d553cf86e74.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-07 14:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/6fbaaaec4fb092ee99325d553cf86e74.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-07 14:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/6fbaaaec4fb092ee99325d553cf86e74.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-07 14:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/6fbaaaec4fb092ee99325d553cf86e74.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-07 14:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/6fbaaaec4fb092ee99325d553cf86e74.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-07 14:33:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/6fbaaaec4fb092ee99325d553cf86e74.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-07 14:33:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/6fbaaaec4fb092ee99325d553cf86e74.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-07 14:34:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/6fbaaaec4fb092ee99325d553cf86e74.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-07 14:34:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/6fbaaaec4fb092ee99325d553cf86e74.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-07 14:34:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/6fbaaaec4fb092ee99325d553cf86e74.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-07 14:34:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/6fbaaaec4fb092ee99325d553cf86e74.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-07 14:34:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/6fbaaaec4fb092ee99325d553cf86e74.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-07 14:34:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/6fbaaaec4fb092ee99325d553cf86e74.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-07 14:35:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/6fbaaaec4fb092ee99325d553cf86e74.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-07 14:35:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/6fbaaaec4fb092ee99325d553cf86e74.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-07 17:47:12 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageMenu::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 93 ]
2014-08-07 17:47:12 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageMenu::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 93 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(93): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 93, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(170): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(100): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-07 18:07:39 --- ERROR: ErrorException [ 8 ]: Undefined index: url ~ MODPATH/_modules/page/views/page/backend/pagemenu_form.php [ 34 ]
2014-08-07 18:07:39 --- STRACE: ErrorException [ 8 ]: Undefined index: url ~ MODPATH/_modules/page/views/page/backend/pagemenu_form.php [ 34 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/pagemenu_form.php(34): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 34, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/defaultadmin.php(96): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(108): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(63): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageMenu))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-07 18:08:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL guide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 18:08:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL guide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 18:19:20 --- ERROR: ErrorException [ 8 ]: Undefined index: media ~ MODPATH/_modules/page/views/page/backend/pagemenu_form.php [ 42 ]
2014-08-07 18:19:20 --- STRACE: ErrorException [ 8 ]: Undefined index: media ~ MODPATH/_modules/page/views/page/backend/pagemenu_form.php [ 42 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/pagemenu_form.php(42): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 42, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/defaultadmin.php(96): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(108): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(63): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageMenu))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-07 18:24:14 --- ERROR: ErrorException [ 8 ]: Undefined index: download ~ MODPATH/_modules/page/views/page/backend/pagemenu_form.php [ 45 ]
2014-08-07 18:24:14 --- STRACE: ErrorException [ 8 ]: Undefined index: download ~ MODPATH/_modules/page/views/page/backend/pagemenu_form.php [ 45 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/pagemenu_form.php(45): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/defaultadmin.php(96): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(108): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(63): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageMenu))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-07 19:21:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 19:21:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 23:15:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 23:15:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 23:26:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-07 23:26:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-07 23:45:42 --- ERROR: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
2014-08-07 23:45:42 --- STRACE: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/controller/backend/pagemenu.php(383): Kohana_Validation->offsetSet('media', '/AdMob Ad Specs...')
#1 [internal function]: Controller_Backend_PageMenu->action_edit()
#2 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageMenu))
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#6 {main}
2014-08-07 23:47:05 --- ERROR: ErrorException [ 8 ]: Undefined property: Validation::$media ~ MODPATH/_modules/page/classes/controller/backend/pagemenu.php [ 383 ]
2014-08-07 23:47:05 --- STRACE: ErrorException [ 8 ]: Undefined property: Validation::$media ~ MODPATH/_modules/page/classes/controller/backend/pagemenu.php [ 383 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/controller/backend/pagemenu.php(383): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 383, Array)
#1 [internal function]: Controller_Backend_PageMenu->action_edit()
#2 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageMenu))
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#6 {main}