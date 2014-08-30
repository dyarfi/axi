<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-05 02:47:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-05 02:47:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-05 03:03:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: class_name ~ MODPATH/_modules/page/views/page/backend/page_view.php [ 191 ]
2014-08-05 03:03:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: class_name ~ MODPATH/_modules/page/views/page/backend/page_view.php [ 191 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/page_view.php(191): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 191, Array)
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
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 03:04:35 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/views/page/backend/page_view.php [ 191 ]
2014-08-05 03:04:35 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/views/page/backend/page_view.php [ 191 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/page_view.php(191): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 191, Array)
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
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 03:04:41 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/views/page/backend/page_view.php [ 191 ]
2014-08-05 03:04:41 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/views/page/backend/page_view.php [ 191 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/page_view.php(191): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 191, Array)
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
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 03:05:16 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/views/page/backend/page_view.php [ 191 ]
2014-08-05 03:05:16 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/views/page/backend/page_view.php [ 191 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/page_view.php(191): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 191, Array)
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
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 03:05:52 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/views/page/backend/page_view.php [ 191 ]
2014-08-05 03:05:52 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/views/page/backend/page_view.php [ 191 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/page_view.php(191): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 191, Array)
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
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 03:06:05 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/views/page/backend/page_view.php [ 191 ]
2014-08-05 03:06:05 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/views/page/backend/page_view.php [ 191 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/page_view.php(191): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 191, Array)
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
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 03:06:12 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/views/page/backend/page_view.php [ 191 ]
2014-08-05 03:06:12 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/views/page/backend/page_view.php [ 191 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/page_view.php(191): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 191, Array)
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
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 03:06:36 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/views/page/backend/page_view.php [ 191 ]
2014-08-05 03:06:36 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/views/page/backend/page_view.php [ 191 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/page_view.php(191): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 191, Array)
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
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 14:29:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-05 14:29:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-05 14:37:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: categories ~ MODPATH/_modules/page/views/page/backend/page_edit.php [ 21 ]
2014-08-05 14:37:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: categories ~ MODPATH/_modules/page/views/page/backend/page_edit.php [ 21 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/page_edit.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 21, Array)
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
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 14:40:08 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageMenu::$subject ~ MODPATH/_modules/page/views/page/backend/page_edit.php [ 22 ]
2014-08-05 14:40:08 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageMenu::$subject ~ MODPATH/_modules/page/views/page/backend/page_edit.php [ 22 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/page_edit.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 22, Array)
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
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 14:53:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: categories ~ MODPATH/_modules/page/views/page/backend/page_add.php [ 29 ]
2014-08-05 14:53:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: categories ~ MODPATH/_modules/page/views/page/backend/page_add.php [ 29 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/page_add.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 29, Array)
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
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 14:53:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: categories ~ MODPATH/_modules/page/views/page/backend/page_add.php [ 29 ]
2014-08-05 14:53:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: categories ~ MODPATH/_modules/page/views/page/backend/page_add.php [ 29 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/page_add.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 29, Array)
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
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 15:00:29 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_PageMenu::deleted() ~ MODPATH/_modules/page/classes/controller/backend/pagemenu.php [ 104 ]
2014-08-05 15:00:29 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_PageMenu::deleted() ~ MODPATH/_modules/page/classes/controller/backend/pagemenu.php [ 104 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-05 15:14:20 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageMenu::$categories ~ MODPATH/_modules/page/views/page/backend/pagemenu_index.php [ 94 ]
2014-08-05 15:14:20 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageMenu::$categories ~ MODPATH/_modules/page/views/page/backend/pagemenu_index.php [ 94 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/pagemenu_index.php(94): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 94, Array)
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
2014-08-05 15:14:37 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageMenu::$category_id ~ MODPATH/_modules/page/views/page/backend/pagemenu_index.php [ 94 ]
2014-08-05 15:14:37 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageMenu::$category_id ~ MODPATH/_modules/page/views/page/backend/pagemenu_index.php [ 94 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/pagemenu_index.php(94): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 94, Array)
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
2014-08-05 15:14:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: categories ~ MODPATH/_modules/page/views/page/backend/pagemenu_index.php [ 94 ]
2014-08-05 15:14:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: categories ~ MODPATH/_modules/page/views/page/backend/pagemenu_index.php [ 94 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/pagemenu_index.php(94): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 94, Array)
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
2014-08-05 15:14:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: menus ~ MODPATH/_modules/page/views/page/backend/pagemenu_index.php [ 94 ]
2014-08-05 15:14:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: menus ~ MODPATH/_modules/page/views/page/backend/pagemenu_index.php [ 94 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/pagemenu_index.php(94): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 94, Array)
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
2014-08-05 15:14:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ MODPATH/_modules/page/views/page/backend/pagemenu_index.php [ 94 ]
2014-08-05 15:14:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ MODPATH/_modules/page/views/page/backend/pagemenu_index.php [ 94 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/pagemenu_index.php(94): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 94, Array)
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
2014-08-05 15:15:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: parent ~ MODPATH/_modules/page/views/page/backend/pagemenu_index.php [ 94 ]
2014-08-05 15:15:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: parent ~ MODPATH/_modules/page/views/page/backend/pagemenu_index.php [ 94 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/pagemenu_index.php(94): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 94, Array)
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
2014-08-05 15:28:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: parent ~ MODPATH/_modules/page/views/page/backend/pagemenu_index.php [ 94 ]
2014-08-05 15:28:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: parent ~ MODPATH/_modules/page/views/page/backend/pagemenu_index.php [ 94 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/pagemenu_index.php(94): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 94, Array)
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
2014-08-05 15:30:03 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/views/page/backend/pagemenu_index.php [ 94 ]
2014-08-05 15:30:03 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/views/page/backend/pagemenu_index.php [ 94 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/pagemenu_index.php(94): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 94, Array)
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
2014-08-05 15:30:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: row ~ MODPATH/_modules/page/views/page/backend/pagemenu_index.php [ 2 ]
2014-08-05 15:30:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: row ~ MODPATH/_modules/page/views/page/backend/pagemenu_index.php [ 2 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/pagemenu_index.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 2, Array)
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
2014-08-05 15:30:40 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/views/page/backend/pagemenu_index.php [ 77 ]
2014-08-05 15:30:40 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/views/page/backend/pagemenu_index.php [ 77 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/pagemenu_index.php(77): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 77, Array)
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
2014-08-05 15:30:56 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/views/page/backend/pagemenu_index.php [ 96 ]
2014-08-05 15:30:56 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/views/page/backend/pagemenu_index.php [ 96 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/pagemenu_index.php(96): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 96, Array)
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
2014-08-05 15:31:07 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/views/page/backend/pagemenu_index.php [ 96 ]
2014-08-05 15:31:07 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/views/page/backend/pagemenu_index.php [ 96 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/pagemenu_index.php(96): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 96, Array)
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
2014-08-05 15:31:18 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/views/page/backend/pagemenu_index.php [ 96 ]
2014-08-05 15:31:18 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/views/page/backend/pagemenu_index.php [ 96 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/pagemenu_index.php(96): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 96, Array)
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
2014-08-05 15:31:43 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/views/page/backend/pagemenu_index.php [ 77 ]
2014-08-05 15:31:43 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/views/page/backend/pagemenu_index.php [ 77 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/pagemenu_index.php(77): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 77, Array)
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
2014-08-05 15:31:47 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/views/page/backend/pagemenu_index.php [ 77 ]
2014-08-05 15:31:47 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/views/page/backend/pagemenu_index.php [ 77 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/pagemenu_index.php(77): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 77, Array)
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
2014-08-05 15:31:56 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageMenu::$id ~ MODPATH/_modules/page/classes/model/pagemenu.php [ 65 ]
2014-08-05 15:31:56 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageMenu::$id ~ MODPATH/_modules/page/classes/model/pagemenu.php [ 65 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/model/pagemenu.php(65): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 65, Array)
#1 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/pagemenu_index.php(77): Model_PageMenu->load(0)
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/axi/_app/views/themes/defaultadmin.php(96): Kohana_View->__toString()
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(108): Kohana_Controller_Template->after()
#10 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(63): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageMenu))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#16 {main}
2014-08-05 15:32:02 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageMenu::$id ~ MODPATH/_modules/page/classes/model/pagemenu.php [ 65 ]
2014-08-05 15:32:02 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageMenu::$id ~ MODPATH/_modules/page/classes/model/pagemenu.php [ 65 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/model/pagemenu.php(65): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 65, Array)
#1 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/pagemenu_index.php(77): Model_PageMenu->load(0)
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/axi/_app/views/themes/defaultadmin.php(96): Kohana_View->__toString()
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(108): Kohana_Controller_Template->after()
#10 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(63): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageMenu))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#16 {main}
2014-08-05 15:32:09 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageMenu::$id ~ MODPATH/_modules/page/classes/model/pagemenu.php [ 65 ]
2014-08-05 15:32:09 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageMenu::$id ~ MODPATH/_modules/page/classes/model/pagemenu.php [ 65 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/model/pagemenu.php(65): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 65, Array)
#1 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/pagemenu_index.php(77): Model_PageMenu->load(0)
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/axi/_app/views/themes/defaultadmin.php(96): Kohana_View->__toString()
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(108): Kohana_Controller_Template->after()
#10 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(63): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageMenu))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#16 {main}
2014-08-05 15:54:26 --- ERROR: ErrorException [ 1 ]: Class 'Cache' not found ~ APPPATH/classes/controller/themes/default.php [ 112 ]
2014-08-05 15:54:26 --- STRACE: ErrorException [ 1 ]: Class 'Cache' not found ~ APPPATH/classes/controller/themes/default.php [ 112 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-05 15:54:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: menus ~ APPPATH/classes/controller/themes/default.php [ 112 ]
2014-08-05 15:54:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: menus ~ APPPATH/classes/controller/themes/default.php [ 112 ]
--
#0 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(112): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 112, Array)
#1 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#2 [internal function]: Controller_Home->before()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#7 {main}
2014-08-05 15:54:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: menus ~ APPPATH/classes/controller/themes/default.php [ 112 ]
2014-08-05 15:54:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: menus ~ APPPATH/classes/controller/themes/default.php [ 112 ]
--
#0 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(112): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 112, Array)
#1 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#2 [internal function]: Controller_Home->before()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#7 {main}
2014-08-05 15:54:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: menus ~ APPPATH/classes/controller/themes/default.php [ 112 ]
2014-08-05 15:54:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: menus ~ APPPATH/classes/controller/themes/default.php [ 112 ]
--
#0 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(112): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 112, Array)
#1 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#2 [internal function]: Controller_Home->before()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#7 {main}
2014-08-05 15:55:01 --- ERROR: Cache_Exception [ 0 ]: Failed to load Kohana Cache group: default ~ MODPATH/cache/classes/kohana/cache.php [ 127 ]
2014-08-05 15:55:01 --- STRACE: Cache_Exception [ 0 ]: Failed to load Kohana Cache group: default ~ MODPATH/cache/classes/kohana/cache.php [ 127 ]
--
#0 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(112): Kohana_Cache::instance('default')
#1 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#2 [internal function]: Controller_Home->before()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#7 {main}
2014-08-05 15:55:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: menus ~ APPPATH/classes/controller/themes/default.php [ 112 ]
2014-08-05 15:55:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: menus ~ APPPATH/classes/controller/themes/default.php [ 112 ]
--
#0 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(112): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 112, Array)
#1 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#2 [internal function]: Controller_Home->before()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#7 {main}
2014-08-05 15:55:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: menus ~ APPPATH/classes/controller/themes/default.php [ 112 ]
2014-08-05 15:55:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: menus ~ APPPATH/classes/controller/themes/default.php [ 112 ]
--
#0 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(112): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 112, Array)
#1 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#2 [internal function]: Controller_Home->before()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#7 {main}
2014-08-05 15:56:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: menus ~ APPPATH/views/themes/default.php [ 63 ]
2014-08-05 15:56:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: menus ~ APPPATH/views/themes/default.php [ 63 ]
--
#0 /Volumes/Data/www/axi/_app/views/themes/default.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 63, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(170): Kohana_Controller_Template->after()
#5 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(67): Controller_Themes_Default->after()
#6 [internal function]: Controller_Home->after()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-08-05 16:15:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH/views/themes/default.php [ 67 ]
2014-08-05 16:15:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH/views/themes/default.php [ 67 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-05 16:19:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-05 16:19:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-05 16:20:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-05 16:20:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-05 16:36:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/themes/default.php [ 154 ]
2014-08-05 16:36:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/themes/default.php [ 154 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-05 16:37:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/themes/default.php [ 153 ]
2014-08-05 16:37:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/themes/default.php [ 153 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-05 16:43:25 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/themes/default.php [ 156 ]
2014-08-05 16:43:25 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/themes/default.php [ 156 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-05 16:43:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/themes/default.php [ 155 ]
2014-08-05 16:43:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/themes/default.php [ 155 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-05 16:43:48 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/themes/default.php [ 155 ]
2014-08-05 16:43:48 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/themes/default.php [ 155 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-05 16:47:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/themes/default.php [ 81 ]
2014-08-05 16:47:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/themes/default.php [ 81 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-05 16:49:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: k ~ APPPATH/views/themes/default.php [ 71 ]
2014-08-05 16:49:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: k ~ APPPATH/views/themes/default.php [ 71 ]
--
#0 /Volumes/Data/www/axi/_app/views/themes/default.php(71): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 71, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#5 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(73): Controller_Themes_Default->after()
#6 [internal function]: Controller_Home->after()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-08-05 16:49:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: k ~ APPPATH/views/themes/default.php [ 71 ]
2014-08-05 16:49:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: k ~ APPPATH/views/themes/default.php [ 71 ]
--
#0 /Volumes/Data/www/axi/_app/views/themes/default.php(71): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 71, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#5 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(73): Controller_Themes_Default->after()
#6 [internal function]: Controller_Home->after()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-08-05 16:49:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: k ~ APPPATH/views/themes/default.php [ 77 ]
2014-08-05 16:49:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: k ~ APPPATH/views/themes/default.php [ 77 ]
--
#0 /Volumes/Data/www/axi/_app/views/themes/default.php(77): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 77, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#5 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(73): Controller_Themes_Default->after()
#6 [internal function]: Controller_Home->after()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-08-05 16:49:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: k ~ APPPATH/views/themes/default.php [ 77 ]
2014-08-05 16:49:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: k ~ APPPATH/views/themes/default.php [ 77 ]
--
#0 /Volumes/Data/www/axi/_app/views/themes/default.php(77): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 77, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#5 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(73): Controller_Themes_Default->after()
#6 [internal function]: Controller_Home->after()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-08-05 16:52:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: k ~ APPPATH/views/themes/default.php [ 73 ]
2014-08-05 16:52:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: k ~ APPPATH/views/themes/default.php [ 73 ]
--
#0 /Volumes/Data/www/axi/_app/views/themes/default.php(73): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 73, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#5 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(73): Controller_Themes_Default->after()
#6 [internal function]: Controller_Home->after()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-08-05 17:00:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: content_home ~ MODPATH/_modules/site/views/site/home_page.php [ 11 ]
2014-08-05 17:00:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: content_home ~ MODPATH/_modules/site/views/site/home_page.php [ 11 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 11, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(74): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 17:01:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: content_home ~ MODPATH/_modules/site/views/site/home_page.php [ 11 ]
2014-08-05 17:01:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: content_home ~ MODPATH/_modules/site/views/site/home_page.php [ 11 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 11, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(70): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 17:01:37 --- ERROR: ErrorException [ 8 ]: Undefined index: home ~ MODPATH/_modules/site/views/site/home_page.php [ 11 ]
2014-08-05 17:01:37 --- STRACE: ErrorException [ 8 ]: Undefined index: home ~ MODPATH/_modules/site/views/site/home_page.php [ 11 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(11): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 11, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(70): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 17:03:50 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Page::$title ~ MODPATH/_modules/site/views/site/home_page.php [ 13 ]
2014-08-05 17:03:50 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Page::$title ~ MODPATH/_modules/site/views/site/home_page.php [ 13 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 13, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(70): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 17:16:43 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',' ~ MODPATH/_modules/site/views/site/home_page.php [ 21 ]
2014-08-05 17:16:43 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',' ~ MODPATH/_modules/site/views/site/home_page.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-05 17:42:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_PageMenus' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2014-08-05 17:42:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_PageMenus' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-05 17:44:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: pagemenu ~ MODPATH/_modules/site/views/site/home_page.php [ 7 ]
2014-08-05 17:44:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: pagemenu ~ MODPATH/_modules/site/views/site/home_page.php [ 7 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(72): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 17:44:32 --- ERROR: ErrorException [ 8 ]: Undefined index: pagemenu ~ MODPATH/_modules/site/views/site/home_page.php [ 7 ]
2014-08-05 17:44:32 --- STRACE: ErrorException [ 8 ]: Undefined index: pagemenu ~ MODPATH/_modules/site/views/site/home_page.php [ 7 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(7): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(72): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 17:45:48 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_PageMenu::load_by_title() ~ MODPATH/_modules/site/views/site/home_page.php [ 7 ]
2014-08-05 17:45:48 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_PageMenu::load_by_title() ~ MODPATH/_modules/site/views/site/home_page.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-05 17:48:18 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 7 ]
2014-08-05 17:48:18 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 7 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(7): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(72): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 17:48:40 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/site/views/site/home_page.php [ 7 ]
2014-08-05 17:48:40 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/site/views/site/home_page.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-05 18:02:36 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 7 ]
2014-08-05 18:02:36 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 7 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(7): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(72): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 18:03:02 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 7 ]
2014-08-05 18:03:02 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 7 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(7): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(72): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 18:03:24 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 7 ]
2014-08-05 18:03:24 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 7 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(7): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(72): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 18:03:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: class_name ~ MODPATH/_modules/page/views/page/backend/page_form.php [ 6 ]
2014-08-05 18:03:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: class_name ~ MODPATH/_modules/page/views/page/backend/page_form.php [ 6 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/page_form.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 6, Array)
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
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 18:04:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: param ~ MODPATH/_modules/page/views/page/backend/page_form.php [ 6 ]
2014-08-05 18:04:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: param ~ MODPATH/_modules/page/views/page/backend/page_form.php [ 6 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/page_form.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 6, Array)
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
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 18:05:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: param ~ MODPATH/_modules/page/views/page/backend/page_form.php [ 6 ]
2014-08-05 18:05:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: param ~ MODPATH/_modules/page/views/page/backend/page_form.php [ 6 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/page_form.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 6, Array)
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
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 18:05:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: param ~ MODPATH/_modules/page/views/page/backend/page_form.php [ 6 ]
2014-08-05 18:05:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: param ~ MODPATH/_modules/page/views/page/backend/page_form.php [ 6 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/page_form.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 6, Array)
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
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 18:06:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: category ~ MODPATH/_modules/page/views/page/backend/page_view.php [ 16 ]
2014-08-05 18:06:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: category ~ MODPATH/_modules/page/views/page/backend/page_view.php [ 16 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/page_view.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 16, Array)
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
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 18:07:02 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 7 ]
2014-08-05 18:07:02 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 7 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(7): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(72): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 18:10:37 --- ERROR: ErrorException [ 8 ]: Undefined index: Home ~ MODPATH/_modules/site/views/site/home_page.php [ 14 ]
2014-08-05 18:10:37 --- STRACE: ErrorException [ 8 ]: Undefined index: Home ~ MODPATH/_modules/site/views/site/home_page.php [ 14 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(14): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 14, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(74): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 18:12:14 --- ERROR: ErrorException [ 8 ]: Undefined index:  upload_path ~ MODPATH/_modules/site/classes/controller/home.php [ 55 ]
2014-08-05 18:12:14 --- STRACE: ErrorException [ 8 ]: Undefined index:  upload_path ~ MODPATH/_modules/site/classes/controller/home.php [ 55 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(55): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 55, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#6 {main}
2014-08-05 18:12:48 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 55 ]
2014-08-05 18:12:48 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 55 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(55): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 55, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#6 {main}
2014-08-05 18:15:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/site/views/site/home_page.php [ 7 ]
2014-08-05 18:15:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/site/views/site/home_page.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-05 18:16:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 511e5f051fbbf02633382b1add250585_crop_1920x760.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-05 18:16:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 511e5f051fbbf02633382b1add250585_crop_1920x760.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-05 18:16:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 511e5f051fbbf02633382b1add250585_crop_1920x760.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-05 18:16:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 511e5f051fbbf02633382b1add250585_crop_1920x760.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-05 18:17:19 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageMenuFile::$upload_url ~ MODPATH/_modules/site/views/site/home_page.php [ 6 ]
2014-08-05 18:17:19 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageMenuFile::$upload_url ~ MODPATH/_modules/site/views/site/home_page.php [ 6 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(6): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 6, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(76): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 18:17:24 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageMenuFile::$upload_url ~ MODPATH/_modules/site/views/site/home_page.php [ 6 ]
2014-08-05 18:17:24 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageMenuFile::$upload_url ~ MODPATH/_modules/site/views/site/home_page.php [ 6 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(6): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 6, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(76): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 18:54:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/page_menus/769abd9ba0a79ef9a8a8868e6bfe4b66_resize_1920x760.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-05 18:54:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/page_menus/769abd9ba0a79ef9a8a8868e6bfe4b66_resize_1920x760.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-05 21:09:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-05 21:09:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-05 21:19:17 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_group() ~ MODPATH/_modules/site/classes/controller/home.php [ 65 ]
2014-08-05 21:19:17 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_group() ~ MODPATH/_modules/site/classes/controller/home.php [ 65 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-05 21:20:09 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 49 ]
2014-08-05 21:20:09 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 49 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(49): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 49, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(86): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 21:20:27 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 49 ]
2014-08-05 21:20:27 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 49 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(49): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 49, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(86): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 21:20:45 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 49 ]
2014-08-05 21:20:45 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 49 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(49): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 49, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(86): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 21:21:40 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 49 ]
2014-08-05 21:21:40 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 49 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(49): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 49, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(86): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 21:37:05 --- ERROR: ErrorException [ 8 ]: Undefined index: PageMan ~ MODPATH/_modules/site/classes/controller/home.php [ 67 ]
2014-08-05 21:37:05 --- STRACE: ErrorException [ 8 ]: Undefined index: PageMan ~ MODPATH/_modules/site/classes/controller/home.php [ 67 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(67): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 67, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#6 {main}
2014-08-05 21:37:12 --- ERROR: ErrorException [ 8 ]: Undefined index: PageMan ~ MODPATH/_modules/site/views/site/home_page.php [ 47 ]
2014-08-05 21:37:12 --- STRACE: ErrorException [ 8 ]: Undefined index: PageMan ~ MODPATH/_modules/site/views/site/home_page.php [ 47 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(47): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 47, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(84): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-05 21:41:43 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 49 ]
2014-08-05 21:41:43 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 49 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(49): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 49, Array)
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
2014-08-05 21:45:33 --- ERROR: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be of the type array, string given, called in /Volumes/Data/www/axi/_mod/_modules/management/classes/controller/backend/management.php on line 241 and defined ~ SYSPATH/classes/kohana/validation.php [ 211 ]
2014-08-05 21:45:33 --- STRACE: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be of the type array, string given, called in /Volumes/Data/www/axi/_mod/_modules/management/classes/controller/backend/management.php on line 241 and defined ~ SYSPATH/classes/kohana/validation.php [ 211 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/validation.php(211): Kohana_Core::error_handler(4096, 'Argument 3 pass...', '/Volumes/Data/w...', 211, Array)
#1 /Volumes/Data/www/axi/_mod/_modules/management/classes/controller/backend/management.php(241): Kohana_Validation->rule('trim', 'name', 'position', 'biography', 'quote')
#2 [internal function]: Controller_Backend_Management->action_add()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Management))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#7 {main}
2014-08-05 21:46:01 --- ERROR: ErrorException [ 1 ]: Call to undefined method Validation::validate() ~ MODPATH/_modules/management/classes/controller/backend/management.php [ 262 ]
2014-08-05 21:46:01 --- STRACE: ErrorException [ 1 ]: Call to undefined method Validation::validate() ~ MODPATH/_modules/management/classes/controller/backend/management.php [ 262 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-05 21:46:07 --- ERROR: ErrorException [ 8 ]: Undefined index: biography ~ MODPATH/_modules/management/classes/controller/backend/management.php [ 269 ]
2014-08-05 21:46:07 --- STRACE: ErrorException [ 8 ]: Undefined index: biography ~ MODPATH/_modules/management/classes/controller/backend/management.php [ 269 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/classes/controller/backend/management.php(269): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 269, Array)
#1 [internal function]: Controller_Backend_Management->action_add()
#2 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Management))
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#6 {main}
2014-08-05 21:47:00 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Management::$title ~ MODPATH/_modules/management/views/management/backend/management_index.php [ 79 ]
2014-08-05 21:47:00 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Management::$title ~ MODPATH/_modules/management/views/management/backend/management_index.php [ 79 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/views/management/backend/management_index.php(79): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 79, Array)
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
2014-08-05 21:49:22 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Management::$title ~ MODPATH/_modules/management/views/management/backend/management_index.php [ 79 ]
2014-08-05 21:49:22 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Management::$title ~ MODPATH/_modules/management/views/management/backend/management_index.php [ 79 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/views/management/backend/management_index.php(79): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 79, Array)
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
2014-08-05 21:49:29 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Management::$person ~ MODPATH/_modules/management/views/management/backend/management_index.php [ 79 ]
2014-08-05 21:49:29 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Management::$person ~ MODPATH/_modules/management/views/management/backend/management_index.php [ 79 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/views/management/backend/management_index.php(79): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 79, Array)
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
2014-08-05 21:49:43 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Management::$person ~ MODPATH/_modules/management/views/management/backend/management_index.php [ 90 ]
2014-08-05 21:49:43 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Management::$person ~ MODPATH/_modules/management/views/management/backend/management_index.php [ 90 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/views/management/backend/management_index.php(90): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 90, Array)
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
2014-08-05 21:50:07 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Management::$show_cover ~ MODPATH/_modules/management/views/management/backend/management_index.php [ 91 ]
2014-08-05 21:50:07 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Management::$show_cover ~ MODPATH/_modules/management/views/management/backend/management_index.php [ 91 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/views/management/backend/management_index.php(91): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 91, Array)
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
2014-08-05 21:51:00 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Management::$default ~ MODPATH/_modules/management/views/management/backend/management_index.php [ 95 ]
2014-08-05 21:51:00 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Management::$default ~ MODPATH/_modules/management/views/management/backend/management_index.php [ 95 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/views/management/backend/management_index.php(95): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 95, Array)
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
2014-08-05 21:51:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: total_record ~ MODPATH/_modules/management/views/management/backend/management_index.php [ 127 ]
2014-08-05 21:51:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: total_record ~ MODPATH/_modules/management/views/management/backend/management_index.php [ 127 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/views/management/backend/management_index.php(127): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 127, Array)
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
2014-08-05 21:51:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: total_record ~ MODPATH/_modules/management/views/management/backend/management_index.php [ 127 ]
2014-08-05 21:51:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: total_record ~ MODPATH/_modules/management/views/management/backend/management_index.php [ 127 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/views/management/backend/management_index.php(127): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 127, Array)
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
2014-08-05 21:53:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: total_record ~ MODPATH/_modules/management/views/management/backend/management_index.php [ 127 ]
2014-08-05 21:53:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: total_record ~ MODPATH/_modules/management/views/management/backend/management_index.php [ 127 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/views/management/backend/management_index.php(127): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 127, Array)
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
2014-08-05 21:53:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: total_records ~ MODPATH/_modules/management/views/management/backend/management_index.php [ 127 ]
2014-08-05 21:53:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: total_records ~ MODPATH/_modules/management/views/management/backend/management_index.php [ 127 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/views/management/backend/management_index.php(127): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 127, Array)
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
2014-08-05 22:22:30 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Management::$_upload_path ~ MODPATH/_modules/management/classes/controller/backend/management.php [ 361 ]
2014-08-05 22:22:30 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Management::$_upload_path ~ MODPATH/_modules/management/classes/controller/backend/management.php [ 361 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/classes/controller/backend/management.php(361): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 361, Array)
#1 [internal function]: Controller_Backend_Management->action_view()
#2 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Management))
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#6 {main}
2014-08-05 22:22:38 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Management::$_upload_path ~ MODPATH/_modules/management/classes/controller/backend/management.php [ 361 ]
2014-08-05 22:22:38 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Management::$_upload_path ~ MODPATH/_modules/management/classes/controller/backend/management.php [ 361 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/classes/controller/backend/management.php(361): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 361, Array)
#1 [internal function]: Controller_Backend_Management->action_view()
#2 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Management))
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#6 {main}
2014-08-05 22:23:59 --- ERROR: View_Exception [ 0 ]: The requested view admin-cp/management_view could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-08-05 22:23:59 --- STRACE: View_Exception [ 0 ]: The requested view admin-cp/management_view could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('admin-cp/manage...')
#1 /Volumes/Data/www/axi/_mod/_modules/management/classes/controller/backend/management.php(374): Kohana_View->__construct('admin-cp/manage...')
#2 [internal function]: Controller_Backend_Management->action_view()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Management))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#7 {main}
2014-08-05 22:25:02 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/_modules/management/views/management/backend/management_view.php [ 3 ]
2014-08-05 22:25:02 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/_modules/management/views/management/backend/management_view.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-05 22:25:10 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/_modules/management/views/management/backend/management_view.php [ 3 ]
2014-08-05 22:25:10 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/_modules/management/views/management/backend/management_view.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-05 22:26:27 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/_modules/management/views/management/backend/management_view.php [ 3 ]
2014-08-05 22:26:27 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/_modules/management/views/management/backend/management_view.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-05 22:26:46 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/_modules/management/views/management/backend/management_view.php [ 5 ]
2014-08-05 22:26:46 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/_modules/management/views/management/backend/management_view.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-05 22:28:34 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/_modules/management/views/management/backend/management_view.php [ 163 ]
2014-08-05 22:28:34 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/_modules/management/views/management/backend/management_view.php [ 163 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-05 22:29:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH/_modules/management/views/management/backend/management_view.php [ 171 ]
2014-08-05 22:29:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH/_modules/management/views/management/backend/management_view.php [ 171 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/views/management/backend/management_view.php(171): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 171, Array)
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
2014-08-05 22:36:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: this ~ MODPATH/_modules/management/views/management/backend/management_add.php [ 2 ]
2014-08-05 22:36:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: this ~ MODPATH/_modules/management/views/management/backend/management_add.php [ 2 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/views/management/backend/management_add.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 2, Array)
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
2014-08-05 22:36:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: show_upload ~ MODPATH/_modules/management/views/management/backend/management_add.php [ 2 ]
2014-08-05 22:36:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: show_upload ~ MODPATH/_modules/management/views/management/backend/management_add.php [ 2 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/views/management/backend/management_add.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 2, Array)
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
2014-08-05 22:36:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: show_uploads ~ MODPATH/_modules/management/views/management/backend/management_add.php [ 2 ]
2014-08-05 22:36:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: show_uploads ~ MODPATH/_modules/management/views/management/backend/management_add.php [ 2 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/views/management/backend/management_add.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 2, Array)
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
2014-08-05 22:36:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: show_upload ~ MODPATH/_modules/management/views/management/backend/management_add.php [ 2 ]
2014-08-05 22:36:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: show_upload ~ MODPATH/_modules/management/views/management/backend/management_add.php [ 2 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/views/management/backend/management_add.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 2, Array)
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
2014-08-05 22:42:04 --- ERROR: View_Exception [ 0 ]: The requested view admin-cp/management_edit could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-08-05 22:42:04 --- STRACE: View_Exception [ 0 ]: The requested view admin-cp/management_edit could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('admin-cp/manage...')
#1 /Volumes/Data/www/axi/_mod/_modules/management/classes/controller/backend/management.php(572): Kohana_View->__construct('admin-cp/manage...')
#2 [internal function]: Controller_Backend_Management->action_edit()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Management))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#7 {main}
2014-08-05 22:42:12 --- ERROR: View_Exception [ 0 ]: The requested view admin-cp/management_edit could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-08-05 22:42:12 --- STRACE: View_Exception [ 0 ]: The requested view admin-cp/management_edit could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('admin-cp/manage...')
#1 /Volumes/Data/www/axi/_mod/_modules/management/classes/controller/backend/management.php(572): Kohana_View->__construct('admin-cp/manage...')
#2 [internal function]: Controller_Backend_Management->action_edit()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Management))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#7 {main}
2014-08-05 22:43:01 --- ERROR: ErrorException [ 1 ]: Call to undefined method Validation::add_rules() ~ MODPATH/_modules/management/classes/controller/backend/management.php [ 245 ]
2014-08-05 22:43:01 --- STRACE: ErrorException [ 1 ]: Call to undefined method Validation::add_rules() ~ MODPATH/_modules/management/classes/controller/backend/management.php [ 245 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-05 22:51:37 --- ERROR: ErrorException [ 8 ]: Undefined index: extension ~ MODPATH/_modules/management/classes/controller/backend/management.php [ 278 ]
2014-08-05 22:51:37 --- STRACE: ErrorException [ 8 ]: Undefined index: extension ~ MODPATH/_modules/management/classes/controller/backend/management.php [ 278 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/classes/controller/backend/management.php(278): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 278, Array)
#1 [internal function]: Controller_Backend_Management->action_add()
#2 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Management))
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#6 {main}
2014-08-05 22:52:36 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/_modules/management/views/management/backend/management_view.php [ 53 ]
2014-08-05 22:52:36 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/_modules/management/views/management/backend/management_view.php [ 53 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-05 22:53:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH/_modules/management/views/management/backend/management_view.php [ 53 ]
2014-08-05 22:53:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH/_modules/management/views/management/backend/management_view.php [ 53 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/views/management/backend/management_view.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 53, Array)
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
2014-08-05 22:54:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH/_modules/management/views/management/backend/management_view.php [ 53 ]
2014-08-05 22:54:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH/_modules/management/views/management/backend/management_view.php [ 53 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/views/management/backend/management_view.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 53, Array)
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
2014-08-05 22:55:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH/_modules/management/views/management/backend/management_view.php [ 53 ]
2014-08-05 22:55:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH/_modules/management/views/management/backend/management_view.php [ 53 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/views/management/backend/management_view.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 53, Array)
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
2014-08-05 22:55:58 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/_modules/management/views/management/backend/management_view.php [ 141 ]
2014-08-05 22:55:58 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/_modules/management/views/management/backend/management_view.php [ 141 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-05 23:16:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: upload_url ~ MODPATH/_modules/management/views/management/backend/management_index.php [ 86 ]
2014-08-05 23:16:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: upload_url ~ MODPATH/_modules/management/views/management/backend/management_index.php [ 86 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/views/management/backend/management_index.php(86): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 86, Array)
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
2014-08-05 23:26:55 --- ERROR: View_Exception [ 0 ]: The requested view admin-cp/management_edit could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-08-05 23:26:55 --- STRACE: View_Exception [ 0 ]: The requested view admin-cp/management_edit could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('admin-cp/manage...')
#1 /Volumes/Data/www/axi/_mod/_modules/management/classes/controller/backend/management.php(557): Kohana_View->__construct('admin-cp/manage...')
#2 [internal function]: Controller_Backend_Management->action_edit()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Management))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#7 {main}
2014-08-05 23:27:47 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/_modules/management/views/management/backend/management_edit.php [ 3 ]
2014-08-05 23:27:47 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/_modules/management/views/management/backend/management_edit.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-05 23:30:33 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/_modules/management/views/management/backend/management_edit.php [ 3 ]
2014-08-05 23:30:33 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/_modules/management/views/management/backend/management_edit.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-05 23:30:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: action ~ MODPATH/_modules/management/views/management/backend/management_form.php [ 7 ]
2014-08-05 23:30:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: action ~ MODPATH/_modules/management/views/management/backend/management_form.php [ 7 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/views/management/backend/management_form.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 7, Array)
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
2014-08-05 23:32:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ MODPATH/_modules/management/classes/controller/backend/management.php [ 545 ]
2014-08-05 23:32:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ MODPATH/_modules/management/classes/controller/backend/management.php [ 545 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/classes/controller/backend/management.php(545): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 545, Array)
#1 [internal function]: Controller_Backend_Management->action_edit()
#2 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Management))
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#6 {main}
2014-08-05 23:32:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: param ~ MODPATH/_modules/management/views/management/backend/management_form.php [ 7 ]
2014-08-05 23:32:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: param ~ MODPATH/_modules/management/views/management/backend/management_form.php [ 7 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/views/management/backend/management_form.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 7, Array)
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
2014-08-05 23:32:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: ceo ~ MODPATH/_modules/management/views/management/backend/management_form.php [ 201 ]
2014-08-05 23:32:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: ceo ~ MODPATH/_modules/management/views/management/backend/management_form.php [ 201 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/views/management/backend/management_form.php(201): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 201, Array)
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
2014-08-05 23:33:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: ceo ~ MODPATH/_modules/management/views/management/backend/management_form.php [ 201 ]
2014-08-05 23:33:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: ceo ~ MODPATH/_modules/management/views/management/backend/management_form.php [ 201 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/views/management/backend/management_form.php(201): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 201, Array)
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
2014-08-05 23:35:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: ceo ~ MODPATH/_modules/management/views/management/backend/management_form.php [ 225 ]
2014-08-05 23:35:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: ceo ~ MODPATH/_modules/management/views/management/backend/management_form.php [ 225 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/views/management/backend/management_form.php(225): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 225, Array)
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
2014-08-05 23:37:25 --- ERROR: ErrorException [ 8 ]: Undefined index: added ~ MODPATH/_modules/management/views/management/backend/management_form.php [ 225 ]
2014-08-05 23:37:25 --- STRACE: ErrorException [ 8 ]: Undefined index: added ~ MODPATH/_modules/management/views/management/backend/management_form.php [ 225 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/views/management/backend/management_form.php(225): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 225, Array)
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
2014-08-05 23:39:42 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/_modules/management/views/management/backend/management_form.php [ 55 ]
2014-08-05 23:39:42 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/_modules/management/views/management/backend/management_form.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-05 23:40:14 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/_modules/management/views/management/backend/management_form.php [ 55 ]
2014-08-05 23:40:14 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/_modules/management/views/management/backend/management_form.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-05 23:40:28 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/_modules/management/views/management/backend/management_form.php [ 143 ]
2014-08-05 23:40:28 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/_modules/management/views/management/backend/management_form.php [ 143 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}