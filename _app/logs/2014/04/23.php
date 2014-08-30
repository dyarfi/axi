<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-23 14:53:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-23 14:53:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-23 14:55:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-23 14:55:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-23 15:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _mod/_modules/user/views/user/authentication.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-23 15:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _mod/_modules/user/views/user/authentication.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-23 15:48:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _mod/_modules/user/classes/controller/backend/userlevel.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-23 15:48:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _mod/_modules/user/classes/controller/backend/userlevel.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-23 15:49:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH/_modules/user/views/user/backend/userlevel_edit.php [ 3 ]
2014-04-23 15:49:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH/_modules/user/views/user/backend/userlevel_edit.php [ 3 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/backend/userlevel_edit.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 3, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(65): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserLevel))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-23 15:49:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH/_modules/user/views/user/backend/userlevel_edit.php [ 3 ]
2014-04-23 15:49:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH/_modules/user/views/user/backend/userlevel_edit.php [ 3 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/backend/userlevel_edit.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 3, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(65): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserLevel))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-23 16:17:06 --- ERROR: ErrorException [ 1 ]: Call to undefined method Session_Native::set_once() ~ MODPATH/_modules/user/classes/controller/backend/authentication.php [ 98 ]
2014-04-23 16:17:06 --- STRACE: ErrorException [ 1 ]: Call to undefined method Session_Native::set_once() ~ MODPATH/_modules/user/classes/controller/backend/authentication.php [ 98 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}