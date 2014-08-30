<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-08 00:49:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH/views/themes/default.php [ 38 ]
2014-08-08 00:49:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH/views/themes/default.php [ 38 ]
--
#0 /Volumes/Data/www/axi/_app/views/themes/default.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 38, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(170): Kohana_Controller_Template->after()
#5 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(102): Controller_Themes_Default->after()
#6 [internal function]: Controller_Home->after()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-08-08 00:49:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH/views/themes/default.php [ 38 ]
2014-08-08 00:49:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH/views/themes/default.php [ 38 ]
--
#0 /Volumes/Data/www/axi/_app/views/themes/default.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 38, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(170): Kohana_Controller_Template->after()
#5 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(102): Controller_Themes_Default->after()
#6 [internal function]: Controller_Home->after()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-08-08 01:22:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ MODPATH/_modules/site/views/site/home_page.php [ 6 ]
2014-08-08 01:22:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ MODPATH/_modules/site/views/site/home_page.php [ 6 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 6, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(170): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(102): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-08 01:23:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: MenuPath ~ MODPATH/_modules/site/views/site/home_page.php [ 4 ]
2014-08-08 01:23:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: MenuPath ~ MODPATH/_modules/site/views/site/home_page.php [ 4 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 4, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(170): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(102): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-08 01:23:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: MenuPath ~ MODPATH/_modules/site/views/site/home_page.php [ 4 ]
2014-08-08 01:23:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: MenuPath ~ MODPATH/_modules/site/views/site/home_page.php [ 4 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 4, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(170): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(102): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-08 01:23:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ MODPATH/_modules/site/views/site/home_page.php [ 4 ]
2014-08-08 01:23:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ MODPATH/_modules/site/views/site/home_page.php [ 4 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 4, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(170): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(102): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-08 01:33:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: PageAxi ~ MODPATH/_modules/site/classes/controller/home.php [ 66 ]
2014-08-08 01:33:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: PageAxi ~ MODPATH/_modules/site/classes/controller/home.php [ 66 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 66, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#6 {main}
2014-08-08 01:34:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ MODPATH/_modules/site/views/site/home_page.php [ 4 ]
2014-08-08 01:34:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ MODPATH/_modules/site/views/site/home_page.php [ 4 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 4, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(170): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(96): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-08 01:35:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ MODPATH/_modules/site/views/site/home_page.php [ 15 ]
2014-08-08 01:35:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ MODPATH/_modules/site/views/site/home_page.php [ 15 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 15, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(170): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(96): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-08 01:35:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ MODPATH/_modules/site/views/site/home_page.php [ 49 ]
2014-08-08 01:35:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ MODPATH/_modules/site/views/site/home_page.php [ 49 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 49, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(170): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(96): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-08 01:36:44 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 49 ]
2014-08-08 01:36:44 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 49 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(49): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 49, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(170): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(96): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-08 01:37:00 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 49 ]
2014-08-08 01:37:00 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 49 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(49): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 49, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(170): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(96): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-08 01:37:26 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 5 ]
2014-08-08 01:37:26 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 5 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(5): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 5, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(170): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(96): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-08 01:37:31 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 54 ]
2014-08-08 01:37:31 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 54 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(54): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 54, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(170): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(96): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-08 01:39:26 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 54 ]
2014-08-08 01:39:26 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 54 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(54): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 54, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(170): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(96): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-08 01:39:33 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 54 ]
2014-08-08 01:39:33 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 54 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(54): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 54, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(170): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(96): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-08 01:39:55 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Model_PageFile::load_by_group(), called in /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php on line 66 and defined ~ MODPATH/_modules/page/classes/model/pagefile.php [ 77 ]
2014-08-08 01:39:55 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Model_PageFile::load_by_group(), called in /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php on line 66 and defined ~ MODPATH/_modules/page/classes/model/pagefile.php [ 77 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/model/pagefile.php(77): Kohana_Core::error_handler(2, 'Missing argumen...', '/Volumes/Data/w...', 77, Array)
#1 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(66): Model_PageFile->load_by_group()
#2 [internal function]: Controller_Home->action_index()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#7 {main}
2014-08-08 02:51:53 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageMenu::$text ~ MODPATH/_modules/site/views/site/home_page.php [ 132 ]
2014-08-08 02:51:53 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageMenu::$text ~ MODPATH/_modules/site/views/site/home_page.php [ 132 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(132): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 132, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(170): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(102): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-08 03:06:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/grabbing.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-08 03:06:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/grabbing.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-08 03:14:43 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_News::$title ~ MODPATH/_modules/site/views/site/home_page.php [ 202 ]
2014-08-08 03:14:43 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_News::$title ~ MODPATH/_modules/site/views/site/home_page.php [ 202 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(202): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 202, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(170): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(112): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-08-08 03:15:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/grabbing.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-08 03:15:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/grabbing.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-08 14:06:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-08 14:06:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-08 15:01:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-08 15:01:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-08 15:17:27 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Career::$qualification ~ MODPATH/_modules/site/views/site/home_page.php [ 258 ]
2014-08-08 15:17:27 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Career::$qualification ~ MODPATH/_modules/site/views/site/home_page.php [ 258 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(258): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 258, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(170): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(112): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}