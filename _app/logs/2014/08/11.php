<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-11 11:54:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-11 11:54:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-11 13:20:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-11 13:20:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-11 13:45:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: news ~ MODPATH/_modules/news/views/news/backend/news_form.php [ 211 ]
2014-08-11 13:45:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: news ~ MODPATH/_modules/news/views/news/backend/news_form.php [ 211 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/news/views/news/backend/news_form.php(211): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 211, Array)
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
2014-08-11 13:49:09 --- ERROR: ErrorException [ 8 ]: Undefined index: added ~ MODPATH/_modules/news/views/news/backend/news_form.php [ 207 ]
2014-08-11 13:49:09 --- STRACE: ErrorException [ 8 ]: Undefined index: added ~ MODPATH/_modules/news/views/news/backend/news_form.php [ 207 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/news/views/news/backend/news_form.php(207): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 207, Array)
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
2014-08-11 13:56:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/grabbing.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-11 13:56:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/grabbing.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-11 14:06:50 --- ERROR: ErrorException [ 8 ]: Undefined index: show_position ~ MODPATH/_modules/page/classes/controller/backend/pagemenu.php [ 78 ]
2014-08-11 14:06:50 --- STRACE: ErrorException [ 8 ]: Undefined index: show_position ~ MODPATH/_modules/page/classes/controller/backend/pagemenu.php [ 78 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/controller/backend/pagemenu.php(78): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 78, Array)
#1 [internal function]: Controller_Backend_PageMenu->action_index()
#2 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageMenu))
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#6 {main}
2014-08-11 14:07:02 --- ERROR: ErrorException [ 8 ]: Undefined index: show_position ~ MODPATH/_modules/page/classes/controller/backend/pagemenu.php [ 78 ]
2014-08-11 14:07:02 --- STRACE: ErrorException [ 8 ]: Undefined index: show_position ~ MODPATH/_modules/page/classes/controller/backend/pagemenu.php [ 78 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/controller/backend/pagemenu.php(78): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 78, Array)
#1 [internal function]: Controller_Backend_PageMenu->action_index()
#2 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageMenu))
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#6 {main}
2014-08-11 14:08:02 --- ERROR: ErrorException [ 8 ]: Undefined index: show_position ~ MODPATH/_modules/page/classes/controller/backend/pagemenu.php [ 78 ]
2014-08-11 14:08:02 --- STRACE: ErrorException [ 8 ]: Undefined index: show_position ~ MODPATH/_modules/page/classes/controller/backend/pagemenu.php [ 78 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/controller/backend/pagemenu.php(78): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 78, Array)
#1 [internal function]: Controller_Backend_PageMenu->action_index()
#2 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageMenu))
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#6 {main}
2014-08-11 14:08:07 --- ERROR: ErrorException [ 8 ]: Undefined index: show_position ~ MODPATH/_modules/page/classes/controller/backend/pagemenu.php [ 78 ]
2014-08-11 14:08:07 --- STRACE: ErrorException [ 8 ]: Undefined index: show_position ~ MODPATH/_modules/page/classes/controller/backend/pagemenu.php [ 78 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/controller/backend/pagemenu.php(78): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 78, Array)
#1 [internal function]: Controller_Backend_PageMenu->action_index()
#2 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageMenu))
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#6 {main}
2014-08-11 14:08:56 --- ERROR: ErrorException [ 8 ]: Undefined index: show_position ~ MODPATH/_modules/page/classes/controller/backend/pagemenu.php [ 78 ]
2014-08-11 14:08:56 --- STRACE: ErrorException [ 8 ]: Undefined index: show_position ~ MODPATH/_modules/page/classes/controller/backend/pagemenu.php [ 78 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/controller/backend/pagemenu.php(78): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 78, Array)
#1 [internal function]: Controller_Backend_PageMenu->action_index()
#2 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageMenu))
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#6 {main}
2014-08-11 14:16:49 --- ERROR: ErrorException [ 8 ]: Undefined index: is_system ~ MODPATH/_modules/page/views/page/backend/pagemenu_form.php [ 31 ]
2014-08-11 14:16:49 --- STRACE: ErrorException [ 8 ]: Undefined index: is_system ~ MODPATH/_modules/page/views/page/backend/pagemenu_form.php [ 31 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/pagemenu_form.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 31, Array)
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
2014-08-11 14:17:59 --- ERROR: ErrorException [ 8 ]: Undefined index: is_system ~ MODPATH/_modules/page/views/page/backend/pagemenu_form.php [ 31 ]
2014-08-11 14:17:59 --- STRACE: ErrorException [ 8 ]: Undefined index: is_system ~ MODPATH/_modules/page/views/page/backend/pagemenu_form.php [ 31 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/pagemenu_form.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 31, Array)
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
2014-08-11 15:37:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-11 15:37:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-11 15:37:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-11 15:37:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-11 15:39:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/admin/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-11 15:39:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/admin/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-11 15:39:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/admin/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-11 15:39:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/admin/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-11 23:39:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-11 23:39:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-11 23:44:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/grabbing.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-11 23:44:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/grabbing.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}