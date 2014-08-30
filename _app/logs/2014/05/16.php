<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-16 02:36:16 --- ERROR: ErrorException [ 1 ]: Class 'Helper_Common' not found ~ MODPATH/_modules/language/views/language/backend/language_index.php [ 130 ]
2014-05-16 02:36:16 --- STRACE: ErrorException [ 1 ]: Class 'Helper_Common' not found ~ MODPATH/_modules/language/views/language/backend/language_index.php [ 130 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-16 02:36:54 --- ERROR: ErrorException [ 2 ]: strtotime() expects parameter 2 to be long, string given ~ MODPATH/_modules/language/views/language/backend/language_index.php [ 130 ]
2014-05-16 02:36:54 --- STRACE: ErrorException [ 2 ]: strtotime() expects parameter 2 to be long, string given ~ MODPATH/_modules/language/views/language/backend/language_index.php [ 130 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'strtotime() exp...', '/Volumes/Data/w...', 130, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/language_index.php(130): strtotime('56565656', 'd M Y')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Themes_DefaultAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Language))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-05-16 02:37:11 --- ERROR: ErrorException [ 2 ]: date() expects parameter 2 to be long, string given ~ MODPATH/_modules/language/views/language/backend/language_index.php [ 130 ]
2014-05-16 02:37:11 --- STRACE: ErrorException [ 2 ]: date() expects parameter 2 to be long, string given ~ MODPATH/_modules/language/views/language/backend/language_index.php [ 130 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'date() expects ...', '/Volumes/Data/w...', 130, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/language_index.php(130): date('56565656', 'd M Y')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Themes_DefaultAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Language))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-05-16 02:37:31 --- ERROR: ErrorException [ 1 ]: Class 'Helper_Common' not found ~ MODPATH/_modules/language/views/language/backend/language_index.php [ 87 ]
2014-05-16 02:37:31 --- STRACE: ErrorException [ 1 ]: Class 'Helper_Common' not found ~ MODPATH/_modules/language/views/language/backend/language_index.php [ 87 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-16 02:38:14 --- ERROR: ErrorException [ 1 ]: Class 'Helper_Common' not found ~ MODPATH/_modules/language/views/language/backend/language_index.php [ 87 ]
2014-05-16 02:38:14 --- STRACE: ErrorException [ 1 ]: Class 'Helper_Common' not found ~ MODPATH/_modules/language/views/language/backend/language_index.php [ 87 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-16 02:41:40 --- ERROR: ErrorException [ 8 ]: Use of undefined constant LANGUAGE - assumed 'LANGUAGE' ~ APPPATH/classes/controller/themes/default.php [ 44 ]
2014-05-16 02:41:40 --- STRACE: ErrorException [ 8 ]: Use of undefined constant LANGUAGE - assumed 'LANGUAGE' ~ APPPATH/classes/controller/themes/default.php [ 44 ]
--
#0 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(44): Kohana_Core::error_handler(8, 'Use of undefine...', '/Volumes/Data/w...', 44, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#2 [internal function]: Controller_Home->before()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-16 04:04:56 --- ERROR: ErrorException [ 8 ]: Undefined index: alias ~ MODPATH/_modules/language/classes/controller/backend/language.php [ 251 ]
2014-05-16 04:04:56 --- STRACE: ErrorException [ 8 ]: Undefined index: alias ~ MODPATH/_modules/language/classes/controller/backend/language.php [ 251 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/language.php(251): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 251, Array)
#1 [internal function]: Controller_Backend_Language->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Language))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-16 04:16:12 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Language::$id ~ MODPATH/_modules/language/classes/model/language.php [ 60 ]
2014-05-16 04:16:12 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Language::$id ~ MODPATH/_modules/language/classes/model/language.php [ 60 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/language.php(60): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 60, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(35): Model_Language->site_default()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#3 [internal function]: Controller_Home->before()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-16 04:16:49 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Language::$id ~ MODPATH/_modules/language/classes/model/language.php [ 60 ]
2014-05-16 04:16:49 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Language::$id ~ MODPATH/_modules/language/classes/model/language.php [ 60 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/language.php(60): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 60, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(35): Model_Language->site_default()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#3 [internal function]: Controller_Home->before()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-16 04:18:02 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/themes/default.php [ 35 ]
2014-05-16 04:18:02 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/themes/default.php [ 35 ]
--
#0 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(35): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 35, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#2 [internal function]: Controller_Home->before()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-16 04:18:45 --- ERROR: ErrorException [ 1 ]: Class 'Model_ContentMenu' not found ~ APPPATH/classes/lang.php [ 32 ]
2014-05-16 04:18:45 --- STRACE: ErrorException [ 1 ]: Class 'Model_ContentMenu' not found ~ APPPATH/classes/lang.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-16 04:20:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_ContentMenu' not found ~ APPPATH/classes/lang.php [ 32 ]
2014-05-16 04:20:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_ContentMenu' not found ~ APPPATH/classes/lang.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-16 04:21:35 --- ERROR: ErrorException [ 8 ]: Use of undefined constant LANGUAGE - assumed 'LANGUAGE' ~ APPPATH/classes/controller/themes/default.php [ 43 ]
2014-05-16 04:21:35 --- STRACE: ErrorException [ 8 ]: Use of undefined constant LANGUAGE - assumed 'LANGUAGE' ~ APPPATH/classes/controller/themes/default.php [ 43 ]
--
#0 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(43): Kohana_Core::error_handler(8, 'Use of undefine...', '/Volumes/Data/w...', 43, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#2 [internal function]: Controller_Home->before()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-16 04:21:36 --- ERROR: ErrorException [ 8 ]: Use of undefined constant LANGUAGE - assumed 'LANGUAGE' ~ APPPATH/classes/controller/themes/default.php [ 43 ]
2014-05-16 04:21:36 --- STRACE: ErrorException [ 8 ]: Use of undefined constant LANGUAGE - assumed 'LANGUAGE' ~ APPPATH/classes/controller/themes/default.php [ 43 ]
--
#0 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(43): Kohana_Core::error_handler(8, 'Use of undefine...', '/Volumes/Data/w...', 43, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#2 [internal function]: Controller_Home->before()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-16 04:23:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: languages ~ APPPATH/views/themes/default.php [ 95 ]
2014-05-16 04:23:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: languages ~ APPPATH/views/themes/default.php [ 95 ]
--
#0 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(95): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 95, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(168): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_Default->after()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#10 {main}
2014-05-16 04:26:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: languages ~ APPPATH/views/themes/default.php [ 95 ]
2014-05-16 04:26:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: languages ~ APPPATH/views/themes/default.php [ 95 ]
--
#0 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(95): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 95, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_Default->after()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#10 {main}
2014-05-16 04:26:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: languages ~ APPPATH/views/themes/default.php [ 95 ]
2014-05-16 04:26:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: languages ~ APPPATH/views/themes/default.php [ 95 ]
--
#0 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(95): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 95, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_Default->after()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#10 {main}
2014-05-16 04:27:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL en/home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-16 04:27:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL en/home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-05-16 04:27:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL in/home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-16 04:27:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL in/home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-05-16 04:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL en/home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-16 04:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL en/home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-05-16 04:30:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL en/home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-16 04:30:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL en/home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-05-16 04:37:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL in was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-16 04:37:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL in was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-05-16 04:38:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL in was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-16 04:38:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL in was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-05-16 04:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL in was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-16 04:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL in was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-05-16 04:39:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL in was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-16 04:39:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL in was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}