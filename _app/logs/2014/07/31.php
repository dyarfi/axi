<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-31 01:16:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-31 01:16:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-31 06:43:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-31 06:43:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-31 07:13:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: class_name ~ MODPATH/_modules/setting/views/setting/backend/setting_index.php [ 131 ]
2014-07-31 07:13:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: class_name ~ MODPATH/_modules/setting/views/setting/backend/setting_index.php [ 131 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/setting/views/setting/backend/setting_index.php(131): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 131, Array)
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
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Setting))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-31 07:20:19 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Backend_Career::redirect() ~ MODPATH/_modules/career/classes/controller/backend/career.php [ 330 ]
2014-07-31 07:20:19 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Backend_Career::redirect() ~ MODPATH/_modules/career/classes/controller/backend/career.php [ 330 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-31 07:29:37 --- ERROR: View_Exception [ 0 ]: The requested view career/backend/careerapplicant_add could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-07-31 07:29:37 --- STRACE: View_Exception [ 0 ]: The requested view career/backend/careerapplicant_add could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('career/backend/...')
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(30): Kohana_View->__construct('career/backend/...', NULL)
#2 /Volumes/Data/www/axi/_mod/_modules/career/classes/controller/backend/careerapplicant.php(350): Kohana_View::factory('career/backend/...')
#3 [internal function]: Controller_Backend_CareerApplicant->action_add()
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_CareerApplicant))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#8 {main}
2014-07-31 07:31:55 --- ERROR: ErrorException [ 8 ]: Undefined index: ext_link1 ~ MODPATH/_modules/career/views/career/backend/career_add.php [ 112 ]
2014-07-31 07:31:55 --- STRACE: ErrorException [ 8 ]: Undefined index: ext_link1 ~ MODPATH/_modules/career/views/career/backend/career_add.php [ 112 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/career/views/career/backend/career_add.php(112): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 112, Array)
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
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-31 07:33:59 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Career::$ext_link1 ~ MODPATH/_modules/career/views/career/backend/career_view.php [ 75 ]
2014-07-31 07:33:59 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Career::$ext_link1 ~ MODPATH/_modules/career/views/career/backend/career_view.php [ 75 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/career/views/career/backend/career_view.php(75): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 75, Array)
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
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-31 07:35:30 --- ERROR: ErrorException [ 8 ]: Undefined index: ext_link1 ~ MODPATH/_modules/career/views/career/backend/career_edit.php [ 111 ]
2014-07-31 07:35:30 --- STRACE: ErrorException [ 8 ]: Undefined index: ext_link1 ~ MODPATH/_modules/career/views/career/backend/career_edit.php [ 111 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/career/views/career/backend/career_edit.php(111): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 111, Array)
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
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-31 08:04:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-31 08:04:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-31 08:56:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/grabbing.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-31 08:56:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/grabbing.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-31 18:12:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-31 18:12:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-31 18:12:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-31 18:12:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-31 18:45:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/languagetranslate/translate/news/12 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-31 18:45:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/languagetranslate/translate/news/12 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-31 18:45:52 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_News::$is_system ~ MODPATH/_modules/news/views/news/backend/news_index.php [ 100 ]
2014-07-31 18:45:52 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_News::$is_system ~ MODPATH/_modules/news/views/news/backend/news_index.php [ 100 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/news/views/news/backend/news_index.php(100): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 100, Array)
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
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_News))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-31 18:47:23 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_News::$is_system ~ MODPATH/_modules/news/views/news/backend/news_index.php [ 100 ]
2014-07-31 18:47:23 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_News::$is_system ~ MODPATH/_modules/news/views/news/backend/news_index.php [ 100 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/news/views/news/backend/news_index.php(100): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 100, Array)
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
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_News))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-31 21:52:57 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Arr::merge() must be of the type array, integer given, called in /Volumes/Data/www/axi/_sys/classes/kohana/config/file/reader.php on line 49 and defined ~ SYSPATH/classes/kohana/arr.php [ 419 ]
2014-07-31 21:52:57 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Arr::merge() must be of the type array, integer given, called in /Volumes/Data/www/axi/_sys/classes/kohana/config/file/reader.php on line 49 and defined ~ SYSPATH/classes/kohana/arr.php [ 419 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/arr.php(419): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Volumes/Data/w...', 419, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/config/file/reader.php(49): Kohana_Arr::merge(Array, 1)
#2 /Volumes/Data/www/axi/_sys/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('management')
#3 /Volumes/Data/www/axi/_app/classes/lib.php(24): Kohana_Config->load('management.revo...')
#4 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/modulelist.php(92): Lib::config('management.revo...')
#5 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/authentication.php(102): Model_ModuleList->module_check()
#6 [internal function]: Controller_Backend_Authentication->action_validate()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-07-31 21:54:52 --- ERROR: ErrorException [ 1 ]: Class 'Model_Management' not found ~ MODPATH/_modules/user/classes/model/modulelist.php [ 155 ]
2014-07-31 21:54:52 --- STRACE: ErrorException [ 1 ]: Class 'Model_Management' not found ~ MODPATH/_modules/user/classes/model/modulelist.php [ 155 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-31 21:57:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_ModelManagement' not found ~ MODPATH/_modules/user/classes/model/modulelist.php [ 155 ]
2014-07-31 21:57:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_ModelManagement' not found ~ MODPATH/_modules/user/classes/model/modulelist.php [ 155 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-31 21:58:36 --- ERROR: ErrorException [ 1 ]: Class 'User_Model' not found ~ MODPATH/_modules/management/classes/controller/backend/management.php [ 38 ]
2014-07-31 21:58:36 --- STRACE: ErrorException [ 1 ]: Class 'User_Model' not found ~ MODPATH/_modules/management/classes/controller/backend/management.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-31 22:02:52 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Management::$uri ~ MODPATH/_modules/management/classes/controller/backend/management.php [ 130 ]
2014-07-31 22:02:52 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Management::$uri ~ MODPATH/_modules/management/classes/controller/backend/management.php [ 130 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/classes/controller/backend/management.php(130): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 130, Array)
#1 [internal function]: Controller_Backend_Management->action_index()
#2 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Management))
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-31 22:03:18 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Management::$_upload_path ~ MODPATH/_modules/management/classes/controller/backend/management.php [ 187 ]
2014-07-31 22:03:18 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Management::$_upload_path ~ MODPATH/_modules/management/classes/controller/backend/management.php [ 187 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/classes/controller/backend/management.php(187): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 187, Array)
#1 [internal function]: Controller_Backend_Management->action_index()
#2 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Management))
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-31 22:03:32 --- ERROR: View_Exception [ 0 ]: The requested view admin-cp/management_index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-07-31 22:03:32 --- STRACE: View_Exception [ 0 ]: The requested view admin-cp/management_index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('admin-cp/manage...')
#1 /Volumes/Data/www/axi/_mod/_modules/management/classes/controller/backend/management.php(202): Kohana_View->__construct('admin-cp/manage...')
#2 [internal function]: Controller_Backend_Management->action_index()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Management))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-31 22:04:12 --- ERROR: View_Exception [ 0 ]: The requested view management/backend/management_index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-07-31 22:04:12 --- STRACE: View_Exception [ 0 ]: The requested view management/backend/management_index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('management/back...')
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(30): Kohana_View->__construct('management/back...', NULL)
#2 /Volumes/Data/www/axi/_mod/_modules/management/classes/controller/backend/management.php(202): Kohana_View::factory('management/back...')
#3 [internal function]: Controller_Backend_Management->action_index()
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Management))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#8 {main}
2014-07-31 22:04:58 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/_modules/management/views/management/backend/management_index.php [ 3 ]
2014-07-31 22:04:58 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/_modules/management/views/management/backend/management_index.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-31 22:05:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: module_menu ~ MODPATH/_modules/management/views/management/backend/management_index.php [ 3 ]
2014-07-31 22:05:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: module_menu ~ MODPATH/_modules/management/views/management/backend/management_index.php [ 3 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/views/management/backend/management_index.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 3, Array)
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
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Management))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-31 22:08:32 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Management::$_upload_path ~ MODPATH/_modules/management/classes/controller/backend/management.php [ 325 ]
2014-07-31 22:08:32 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Management::$_upload_path ~ MODPATH/_modules/management/classes/controller/backend/management.php [ 325 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/classes/controller/backend/management.php(325): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 325, Array)
#1 [internal function]: Controller_Backend_Management->action_add()
#2 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Management))
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#6 {main}