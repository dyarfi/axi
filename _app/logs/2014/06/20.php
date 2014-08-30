<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-20 01:08:31 --- ERROR: ErrorException [ 8 ]: Undefined index: page ~ MODPATH/_modules/site/classes/controller/sitemap.php [ 33 ]
2014-06-20 01:08:31 --- STRACE: ErrorException [ 8 ]: Undefined index: page ~ MODPATH/_modules/site/classes/controller/sitemap.php [ 33 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/sitemap.php(33): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 33, Array)
#1 [internal function]: Controller_Sitemap->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Sitemap))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-20 01:09:06 --- ERROR: ErrorException [ 8 ]: Undefined index: pageCategoryContent ~ MODPATH/_modules/site/classes/controller/sitemap.php [ 33 ]
2014-06-20 01:09:06 --- STRACE: ErrorException [ 8 ]: Undefined index: pageCategoryContent ~ MODPATH/_modules/site/classes/controller/sitemap.php [ 33 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/sitemap.php(33): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 33, Array)
#1 [internal function]: Controller_Sitemap->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Sitemap))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-20 01:09:13 --- ERROR: ErrorException [ 8 ]: Undefined index: pageCategoryContent ~ MODPATH/_modules/site/classes/controller/sitemap.php [ 33 ]
2014-06-20 01:09:13 --- STRACE: ErrorException [ 8 ]: Undefined index: pageCategoryContent ~ MODPATH/_modules/site/classes/controller/sitemap.php [ 33 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/sitemap.php(33): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 33, Array)
#1 [internal function]: Controller_Sitemap->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Sitemap))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-20 01:09:19 --- ERROR: ErrorException [ 8 ]: Undefined index: pageCategoryChild ~ MODPATH/_modules/site/classes/controller/sitemap.php [ 33 ]
2014-06-20 01:09:19 --- STRACE: ErrorException [ 8 ]: Undefined index: pageCategoryChild ~ MODPATH/_modules/site/classes/controller/sitemap.php [ 33 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/sitemap.php(33): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 33, Array)
#1 [internal function]: Controller_Sitemap->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Sitemap))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-20 01:13:54 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '__' (T_STRING) ~ MODPATH/_modules/site/views/site/sitemap_page.php [ 5 ]
2014-06-20 01:13:54 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '__' (T_STRING) ~ MODPATH/_modules/site/views/site/sitemap_page.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-20 01:19:27 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ',' or ';' ~ MODPATH/_modules/site/views/site/sitemap_page.php [ 14 ]
2014-06-20 01:19:27 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ',' or ';' ~ MODPATH/_modules/site/views/site/sitemap_page.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-20 01:20:13 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ MODPATH/_modules/site/views/site/sitemap_page.php [ 10 ]
2014-06-20 01:20:13 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ MODPATH/_modules/site/views/site/sitemap_page.php [ 10 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/sitemap_page.php(10): Kohana_Core::error_handler(2, 'Creating defaul...', '/Volumes/Data/w...', 10, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Sitemap))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-20 01:20:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: category ~ MODPATH/_modules/site/views/site/sitemap_page.php [ 14 ]
2014-06-20 01:20:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: category ~ MODPATH/_modules/site/views/site/sitemap_page.php [ 14 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/sitemap_page.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 14, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Sitemap))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-20 01:20:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: category ~ MODPATH/_modules/site/views/site/sitemap_page.php [ 14 ]
2014-06-20 01:20:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: category ~ MODPATH/_modules/site/views/site/sitemap_page.php [ 14 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/sitemap_page.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 14, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Sitemap))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-20 01:26:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_ModelPages' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2014-06-20 01:26:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_ModelPages' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-20 01:26:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2014-06-20 01:26:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-20 01:26:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2014-06-20 01:26:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-20 01:36:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: attributes ~ MODPATH/_modules/site/views/site/sitemap_page.php [ 17 ]
2014-06-20 01:36:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: attributes ~ MODPATH/_modules/site/views/site/sitemap_page.php [ 17 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/sitemap_page.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 17, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Sitemap))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-20 01:38:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL offistarindo/company/test-three was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-20 01:38:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL offistarindo/company/test-three was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-20 01:39:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL offistarindo/company/read/test-three was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-20 01:39:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL offistarindo/company/read/test-three was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-20 01:39:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL offistarindo/company/read/history was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-20 01:39:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL offistarindo/company/read/history was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-20 01:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL offistarindo/company/read/history was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-20 01:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL offistarindo/company/read/history was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-20 01:52:04 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Sitemap::$page ~ MODPATH/_modules/site/classes/controller/sitemap.php [ 36 ]
2014-06-20 01:52:04 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Sitemap::$page ~ MODPATH/_modules/site/classes/controller/sitemap.php [ 36 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/sitemap.php(36): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 36, Array)
#1 [internal function]: Controller_Sitemap->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Sitemap))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-20 01:52:48 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Sitemap::$page ~ MODPATH/_modules/site/classes/controller/sitemap.php [ 35 ]
2014-06-20 01:52:48 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Sitemap::$page ~ MODPATH/_modules/site/classes/controller/sitemap.php [ 35 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/sitemap.php(35): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 35, Array)
#1 [internal function]: Controller_Sitemap->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Sitemap))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-20 01:53:13 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/page/classes/model/page.php [ 233 ]
2014-06-20 01:53:13 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/page/classes/model/page.php [ 233 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(233): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 233, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(325): Model_Page->find(Array, 1, '', '')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/sitemap.php(35): Model_Page->find_detail(Array, 1)
#3 [internal function]: Controller_Sitemap->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Sitemap))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-20 02:04:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: _download ~ MODPATH/_modules/site/classes/controller/sitemap.php [ 44 ]
2014-06-20 02:04:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: _download ~ MODPATH/_modules/site/classes/controller/sitemap.php [ 44 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/sitemap.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 44, Array)
#1 [internal function]: Controller_Sitemap->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Sitemap))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-20 02:05:30 --- ERROR: ErrorException [ 8 ]: Use of undefined constant downloadType - assumed 'downloadType' ~ MODPATH/_modules/site/views/site/sitemap_page.php [ 28 ]
2014-06-20 02:05:30 --- STRACE: ErrorException [ 8 ]: Use of undefined constant downloadType - assumed 'downloadType' ~ MODPATH/_modules/site/views/site/sitemap_page.php [ 28 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/sitemap_page.php(28): Kohana_Core::error_handler(8, 'Use of undefine...', '/Volumes/Data/w...', 28, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Sitemap))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-20 02:08:20 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$subject ~ MODPATH/_modules/site/views/site/sitemap_page.php [ 23 ]
2014-06-20 02:08:20 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$subject ~ MODPATH/_modules/site/views/site/sitemap_page.php [ 23 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/sitemap_page.php(23): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 23, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Sitemap))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-20 02:08:43 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$subject ~ MODPATH/_modules/site/views/site/sitemap_page.php [ 23 ]
2014-06-20 02:08:43 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$subject ~ MODPATH/_modules/site/views/site/sitemap_page.php [ 23 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/sitemap_page.php(23): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 23, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Sitemap))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-20 02:15:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_Products' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2014-06-20 02:15:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_Products' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-20 02:24:39 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_ProductCategory::load_by_name() ~ MODPATH/_modules/site/classes/controller/products.php [ 199 ]
2014-06-20 02:24:39 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_ProductCategory::load_by_name() ~ MODPATH/_modules/site/classes/controller/products.php [ 199 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-20 02:53:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: solution ~ MODPATH/_modules/site/views/site/sitemap_page.php [ 35 ]
2014-06-20 02:53:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: solution ~ MODPATH/_modules/site/views/site/sitemap_page.php [ 35 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/sitemap_page.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 35, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Sitemap))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-20 03:06:58 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Banner::set_order() ~ MODPATH/_modules/banner/views/banner/backend/banner_index.php [ 85 ]
2014-06-20 03:06:58 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Banner::set_order() ~ MODPATH/_modules/banner/views/banner/backend/banner_index.php [ 85 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-20 03:15:20 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$subject ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 349 ]
2014-06-20 03:15:20 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$subject ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 349 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(349): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 349, Array)
#1 [internal function]: Controller_Backend_Product->action_view()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-20 03:16:23 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$subject ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 349 ]
2014-06-20 03:16:23 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$subject ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 349 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(349): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 349, Array)
#1 [internal function]: Controller_Backend_Product->action_view()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-20 03:16:29 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$subject ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 349 ]
2014-06-20 03:16:29 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$subject ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 349 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(349): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 349, Array)
#1 [internal function]: Controller_Backend_Product->action_view()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-20 03:16:35 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$subject ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 349 ]
2014-06-20 03:16:35 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$subject ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 349 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(349): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 349, Array)
#1 [internal function]: Controller_Backend_Product->action_view()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-20 03:16:45 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 349 ]
2014-06-20 03:16:45 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 349 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(349): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 349, Array)
#1 [internal function]: Controller_Backend_Product->action_view()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-20 03:16:53 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 349 ]
2014-06-20 03:16:53 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 349 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(349): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 349, Array)
#1 [internal function]: Controller_Backend_Product->action_view()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-20 03:16:56 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 349 ]
2014-06-20 03:16:56 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 349 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(349): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 349, Array)
#1 [internal function]: Controller_Backend_Product->action_view()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-20 03:19:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 337 ]
2014-06-20 03:19:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 337 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-20 03:19:42 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 338 ]
2014-06-20 03:19:42 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 338 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(338): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 338, Array)
#1 [internal function]: Controller_Backend_Product->action_view()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-20 03:19:53 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 338 ]
2014-06-20 03:19:53 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 338 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(338): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 338, Array)
#1 [internal function]: Controller_Backend_Product->action_view()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-20 03:20:00 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 338 ]
2014-06-20 03:20:00 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 338 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(338): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 338, Array)
#1 [internal function]: Controller_Backend_Product->action_view()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-20 03:20:07 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 338 ]
2014-06-20 03:20:07 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 338 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(338): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 338, Array)
#1 [internal function]: Controller_Backend_Product->action_view()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-20 03:20:10 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH/classes/kohana/html.php [ 66 ]
2014-06-20 03:20:10 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH/classes/kohana/html.php [ 66 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/html.php(66): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 66, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_view.php(108): Kohana_HTML::chars(Array, true)
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#10 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#16 {main}
2014-06-20 03:21:48 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 338 ]
2014-06-20 03:21:48 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 338 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(338): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 338, Array)
#1 [internal function]: Controller_Backend_Product->action_view()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-20 03:22:22 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 338 ]
2014-06-20 03:22:22 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 338 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(338): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 338, Array)
#1 [internal function]: Controller_Backend_Product->action_view()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-20 03:24:34 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$subject ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 338 ]
2014-06-20 03:24:34 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$subject ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 338 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(338): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 338, Array)
#1 [internal function]: Controller_Backend_Product->action_view()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-20 03:25:01 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 338 ]
2014-06-20 03:25:01 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 338 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(338): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 338, Array)
#1 [internal function]: Controller_Backend_Product->action_view()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-20 03:39:48 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ MODPATH/_modules/site/views/site/home_page.php [ 207 ]
2014-06-20 03:39:48 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ MODPATH/_modules/site/views/site/home_page.php [ 207 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-20 09:16:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/product/check_title/sadf was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-20 09:16:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/product/check_title/sadf was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-20 09:18:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/product/check_title/fasdfadfasdf was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-20 09:18:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/product/check_title/fasdfadfasdf was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-20 11:19:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 189 ]
2014-06-20 11:19:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 189 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-20 11:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/product/check_title/Test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-20 11:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/product/check_title/Test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-20 11:24:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/product/check_title/popopopopop was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-20 11:24:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/product/check_title/popopopopop was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-20 11:26:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/product/check_title/testset was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-20 11:26:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/product/check_title/testset was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}