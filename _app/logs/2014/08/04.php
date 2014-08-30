<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-04 17:59:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-04 17:59:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-04 18:42:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: setting ~ MODPATH/_modules/user/views/user/backend/userlevel_view.php [ 34 ]
2014-08-04 18:42:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: setting ~ MODPATH/_modules/user/views/user/backend/userlevel_view.php [ 34 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/views/user/backend/userlevel_view.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 34, Array)
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
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserLevel))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-04 18:42:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: setting ~ MODPATH/_modules/user/views/user/backend/userlevel_view.php [ 34 ]
2014-08-04 18:42:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: setting ~ MODPATH/_modules/user/views/user/backend/userlevel_view.php [ 34 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/views/user/backend/userlevel_view.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 34, Array)
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
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserLevel))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-04 18:45:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH/_modules/career/views/career/backend/career_view.php [ 110 ]
2014-08-04 18:45:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH/_modules/career/views/career/backend/career_view.php [ 110 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/career/views/career/backend/career_view.php(110): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 110, Array)
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
2014-08-04 18:48:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: class_name ~ MODPATH/_modules/page/views/page/backend/pagemenu_view.php [ 151 ]
2014-08-04 18:48:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: class_name ~ MODPATH/_modules/page/views/page/backend/pagemenu_view.php [ 151 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/pagemenu_view.php(151): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 151, Array)
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
2014-08-04 18:48:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: class_name ~ MODPATH/_modules/page/views/page/backend/pagemenu_view.php [ 151 ]
2014-08-04 18:48:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: class_name ~ MODPATH/_modules/page/views/page/backend/pagemenu_view.php [ 151 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/pagemenu_view.php(151): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 151, Array)
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
2014-08-04 18:49:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: class_name ~ MODPATH/_modules/page/views/page/backend/pagemenu_view.php [ 3 ]
2014-08-04 18:49:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: class_name ~ MODPATH/_modules/page/views/page/backend/pagemenu_view.php [ 3 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/pagemenu_view.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 3, Array)
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
2014-08-04 18:49:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: _class_name ~ MODPATH/_modules/page/views/page/backend/pagemenu_view.php [ 119 ]
2014-08-04 18:49:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: _class_name ~ MODPATH/_modules/page/views/page/backend/pagemenu_view.php [ 119 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/pagemenu_view.php(119): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 119, Array)
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