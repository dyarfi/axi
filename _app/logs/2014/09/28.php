<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-28 19:11:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-09-28 19:11:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#3 {main}
2014-09-28 21:47:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 39 ]
2014-09-28 21:47:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 39 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 39, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(181): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(160): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#15 {main}
2014-09-28 21:47:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 39 ]
2014-09-28 21:47:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 39 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 39, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(181): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(160): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#15 {main}
2014-09-28 21:47:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 39 ]
2014-09-28 21:47:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 39 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 39, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(181): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(160): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#15 {main}
2014-09-28 21:47:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 39 ]
2014-09-28 21:47:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 39 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 39, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(181): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(160): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#15 {main}
2014-09-28 21:47:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 39 ]
2014-09-28 21:47:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 39 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 39, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(181): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(160): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#15 {main}
2014-09-28 21:47:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 39 ]
2014-09-28 21:47:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 39 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 39, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(181): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(160): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#15 {main}
2014-09-28 21:47:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 39 ]
2014-09-28 21:47:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 39 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 39, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(181): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(160): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#15 {main}
2014-09-28 21:47:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 39 ]
2014-09-28 21:47:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 39 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 39, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(181): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(160): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#15 {main}
2014-09-28 21:47:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 39 ]
2014-09-28 21:47:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 39 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 39, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(181): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(160): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#15 {main}
2014-09-28 21:47:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 39 ]
2014-09-28 21:47:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 39 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 39, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(181): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(160): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#15 {main}
2014-09-28 21:47:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 39 ]
2014-09-28 21:47:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 39 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 39, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(181): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(160): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#15 {main}
2014-09-28 21:47:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 39 ]
2014-09-28 21:47:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 39 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 39, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(181): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(160): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#15 {main}
2014-09-28 21:48:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 54 ]
2014-09-28 21:48:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 54 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 54, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(181): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(160): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#15 {main}
2014-09-28 21:48:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 54 ]
2014-09-28 21:48:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 54 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 54, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(181): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(160): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#15 {main}
2014-09-28 21:48:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 54 ]
2014-09-28 21:48:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 54 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 54, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(181): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(160): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#15 {main}
2014-09-28 21:48:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 54 ]
2014-09-28 21:48:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 54 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 54, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(181): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(160): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#15 {main}
2014-09-28 21:48:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 54 ]
2014-09-28 21:48:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 54 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 54, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(181): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(160): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#15 {main}
2014-09-28 21:48:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 54 ]
2014-09-28 21:48:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 54 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 54, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(181): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(160): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#15 {main}
2014-09-28 21:48:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 54 ]
2014-09-28 21:48:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 54 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 54, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(181): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(160): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#15 {main}
2014-09-28 21:48:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 54 ]
2014-09-28 21:48:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 54 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 54, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(181): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(160): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#15 {main}
2014-09-28 21:48:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 54 ]
2014-09-28 21:48:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 54 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 54, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(181): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(160): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#15 {main}
2014-09-28 21:48:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 54 ]
2014-09-28 21:48:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 54 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 54, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(181): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(160): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#15 {main}
2014-09-28 21:48:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 54 ]
2014-09-28 21:48:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 54 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 54, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(181): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(160): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#15 {main}
2014-09-28 21:48:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 54 ]
2014-09-28 21:48:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 54 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 54, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(181): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(160): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#15 {main}
2014-09-28 21:49:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 54 ]
2014-09-28 21:49:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 54 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 54, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(181): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(160): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#15 {main}
2014-09-28 21:51:31 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:31 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('?????,')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('?????,')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:31 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '??,'' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = 'zfÞuú'µË,' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-09-28 21:51:31 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '??,'' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = 'zfÞuú'µË,' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/model/pagemenu.php(289): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Model_PageMenu->find(Array)
#2 [internal function]: Controller_Home->action_download()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-09-28 21:51:31 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:31 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('n?-?????,')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('n?-?????,')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:31 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:31 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('n?-????????????...')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('n?-????????????...')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:31 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ÚÌ›?,'' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = ''ÚÌ›£,' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-09-28 21:51:31 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ÚÌ›?,'' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = ''ÚÌ›£,' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/model/pagemenu.php(289): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Model_PageMenu->find(Array)
#2 [internal function]: Controller_Home->action_download()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-09-28 21:51:31 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:31 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('???y?,')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('???y?,')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:31 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:31 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????(?r?%???y?,')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????(?r?%???y?,')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:31 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:31 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('??\j?.??\?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('??\j?.??\?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:31 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:31 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('jx?j???')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('jx?j???')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:31 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:31 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????&?z?\?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????&?z?\?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:32 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:32 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('}??r???')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('}??r???')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:32 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:32 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????-{?;')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????-{?;')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:32 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:32 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:32 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:32 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????&???-??f?x?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????&???-??f?x?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:32 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:32 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:32 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '2rW??Y??;'' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = ''2rWš–Y¢ž;' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-09-28 21:51:32 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '2rW??Y??;'' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = ''2rWš–Y¢ž;' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/model/pagemenu.php(289): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Model_PageMenu->find(Array)
#2 [internal function]: Controller_Home->action_download()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-09-28 21:51:32 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ÚÌ›?' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = ''ÚÌ›£ì' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-09-28 21:51:32 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ÚÌ›?' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = ''ÚÌ›£ì' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/model/pagemenu.php(289): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Model_PageMenu->find(Array)
#2 [internal function]: Controller_Home->action_download()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-09-28 21:51:32 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:32 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????$?????;')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????$?????;')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:32 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:32 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????)????????')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????)????????')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:32 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:32 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????(?r?%???zh?...')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????(?r?%???zh?...')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:32 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:32 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????*0???????h?...')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????*0???????h?...')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:32 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:32 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('???')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('???')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:32 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:32 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:32 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:32 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:32 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:32 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:32 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '???b?x' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = ''îËb¢xì' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-09-28 21:51:32 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '???b?x' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = ''îËb¢xì' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/model/pagemenu.php(289): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Model_PageMenu->find(Array)
#2 [internal function]: Controller_Home->action_download()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-09-28 21:51:32 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:32 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????&?z?c')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????&?z?c')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:32 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Z??' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = '+Ú–'Zµèì' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-09-28 21:51:32 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Z??' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = '+Ú–'Zµèì' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/model/pagemenu.php(289): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Model_PageMenu->find(Array)
#2 [internal function]: Controller_Home->action_download()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-09-28 21:51:32 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Z???v+b?v??'' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = '+Ú–'Zµæv+b¢v¥Ž' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-09-28 21:51:32 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Z???v+b?v??'' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = '+Ú–'Zµæv+b¢v¥Ž' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/model/pagemenu.php(289): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Model_PageMenu->find(Array)
#2 [internal function]: Controller_Home->action_download()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-09-28 21:51:32 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:32 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????&???-??f?x?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????&???-??f?x?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:32 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:32 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('??^?&?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('??^?&?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:32 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:32 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('??^?&?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('??^?&?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:33 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:33 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:33 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:33 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:33 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:33 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:33 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:33 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:33 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '2rW??Y??;'' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = ''2rWš–Y¢ž;' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-09-28 21:51:33 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '2rW??Y??;'' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = ''2rWš–Y¢ž;' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/model/pagemenu.php(289): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Model_PageMenu->find(Array)
#2 [internal function]: Controller_Home->action_download()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-09-28 21:51:33 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:33 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:33 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:33 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:33 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:33 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:33 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:33 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:33 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:33 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:33 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:33 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:33 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:33 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:33 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:33 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:33 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:33 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:33 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:33 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:33 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:33 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:33 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:33 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:33 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:33 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:33 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ÚÌ›?' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = ''ÚÌ›£ì' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-09-28 21:51:33 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ÚÌ›?' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = ''ÚÌ›£ì' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/model/pagemenu.php(289): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Model_PageMenu->find(Array)
#2 [internal function]: Controller_Home->action_download()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-09-28 21:51:33 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:33 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:34 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:34 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:34 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:34 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:34 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:34 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('??^?&?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('??^?&?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:34 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:34 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????$?????;')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????$?????;')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:34 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:34 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????)????????')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????)????????')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:34 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:34 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????(?r?%???zh?...')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????(?r?%???zh?...')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:34 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:34 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????*0???????h?...')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????*0???????h?...')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:34 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:34 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('???')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('???')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:34 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:34 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:34 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:34 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:34 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:34 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:34 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:34 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:34 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '???b?x' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = ''îËb¢xì' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-09-28 21:51:34 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '???b?x' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = ''îËb¢xì' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/model/pagemenu.php(289): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Model_PageMenu->find(Array)
#2 [internal function]: Controller_Home->action_download()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-09-28 21:51:34 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:34 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????&?z?c')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????&?z?c')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:34 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Z??' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = '+Ú–'Zµèì' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-09-28 21:51:34 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Z??' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = '+Ú–'Zµèì' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/model/pagemenu.php(289): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Model_PageMenu->find(Array)
#2 [internal function]: Controller_Home->action_download()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-09-28 21:51:34 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Z???v+b?v??'' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = '+Ú–'Zµæv+b¢v¥Ž' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-09-28 21:51:34 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Z???v+b?v??'' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = '+Ú–'Zµæv+b¢v¥Ž' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/model/pagemenu.php(289): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Model_PageMenu->find(Array)
#2 [internal function]: Controller_Home->action_download()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-09-28 21:51:37 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:37 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('???y?,')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('???y?,')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:37 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:37 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('n?-????????????...')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('n?-????????????...')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:37 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '??,'' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = 'zfÞuú'µË,' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-09-28 21:51:37 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '??,'' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = 'zfÞuú'µË,' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/model/pagemenu.php(289): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Model_PageMenu->find(Array)
#2 [internal function]: Controller_Home->action_download()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-09-28 21:51:37 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:37 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('?????,')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('?????,')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:37 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:37 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('n?-?????,')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('n?-?????,')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:37 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ÚÌ›?,'' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = ''ÚÌ›£,' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-09-28 21:51:37 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ÚÌ›?,'' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = ''ÚÌ›£,' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/model/pagemenu.php(289): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Model_PageMenu->find(Array)
#2 [internal function]: Controller_Home->action_download()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-09-28 21:51:37 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:37 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????(?r?%???y?,')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????(?r?%???y?,')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:37 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:37 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('??\j?.??\?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('??\j?.??\?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:37 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:37 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('jx?j???')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('jx?j???')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:37 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:37 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????&?z?\?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????&?z?\?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:37 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:37 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:37 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '2rW??Y??;'' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = ''2rWš–Y¢ž;' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-09-28 21:51:37 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '2rW??Y??;'' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = ''2rWš–Y¢ž;' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/model/pagemenu.php(289): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Model_PageMenu->find(Array)
#2 [internal function]: Controller_Home->action_download()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-09-28 21:51:37 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:37 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????&???-??f?x?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????&???-??f?x?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:37 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:37 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????-{?;')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????-{?;')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:37 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ÚÌ›?' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = ''ÚÌ›£ì' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-09-28 21:51:37 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ÚÌ›?' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = ''ÚÌ›£ì' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/model/pagemenu.php(289): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Model_PageMenu->find(Array)
#2 [internal function]: Controller_Home->action_download()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-09-28 21:51:37 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:37 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:37 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:37 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????$?????;')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????$?????;')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:37 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:37 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????)????????')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????)????????')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:38 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:38 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????(?r?%???zh?...')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????(?r?%???zh?...')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:38 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:38 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????*0???????h?...')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????*0???????h?...')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:38 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:38 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('???')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('???')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:38 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:38 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:38 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:38 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:38 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:38 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:38 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '???b?x' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = ''îËb¢xì' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-09-28 21:51:38 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '???b?x' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = ''îËb¢xì' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/model/pagemenu.php(289): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Model_PageMenu->find(Array)
#2 [internal function]: Controller_Home->action_download()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-09-28 21:51:38 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:38 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????&?z?c')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????&?z?c')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:38 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Z??' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = '+Ú–'Zµèì' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-09-28 21:51:38 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Z??' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = '+Ú–'Zµèì' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/model/pagemenu.php(289): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Model_PageMenu->find(Array)
#2 [internal function]: Controller_Home->action_download()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-09-28 21:51:38 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Z???v+b?v??'' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = '+Ú–'Zµæv+b¢v¥Ž' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-09-28 21:51:38 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Z???v+b?v??'' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = '+Ú–'Zµæv+b¢v¥Ž' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/model/pagemenu.php(289): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Model_PageMenu->find(Array)
#2 [internal function]: Controller_Home->action_download()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-09-28 21:51:38 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:38 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:38 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:38 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('??^?&?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('??^?&?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:38 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:38 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('??^?&?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('??^?&?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:38 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:38 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:38 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:38 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:38 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:38 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:38 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:38 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:38 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:38 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????&???-??f?x?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????&???-??f?x?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:38 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:38 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:38 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:38 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:38 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:38 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:38 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:38 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:38 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:38 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:38 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:38 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:38 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:38 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:38 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:38 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:39 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:39 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:39 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:39 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:39 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:39 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:39 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:39 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:39 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '2rW??Y??;'' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = ''2rWš–Y¢ž;' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-09-28 21:51:39 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '2rW??Y??;'' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = ''2rWš–Y¢ž;' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/model/pagemenu.php(289): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Model_PageMenu->find(Array)
#2 [internal function]: Controller_Home->action_download()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-09-28 21:51:39 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:39 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:39 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:39 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:39 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:39 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r??z{')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('r??z{')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:39 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:39 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('??^?&?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('??^?&?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:39 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:39 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:39 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ÚÌ›?' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = ''ÚÌ›£ì' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-09-28 21:51:39 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ÚÌ›?' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = ''ÚÌ›£ì' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/model/pagemenu.php(289): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Model_PageMenu->find(Array)
#2 [internal function]: Controller_Home->action_download()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-09-28 21:51:39 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:39 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????$?????;')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????$?????;')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:39 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:39 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????)????????')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????)????????')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:39 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:39 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????(?r?%???zh?...')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????(?r?%???zh?...')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:39 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:39 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????*0???????h?...')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????*0???????h?...')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:39 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:39 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('???')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('???')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:39 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:39 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:39 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:39 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:39 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:39 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:39 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:39 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:39 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '???b?x' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = ''îËb¢xì' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-09-28 21:51:39 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '???b?x' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = ''îËb¢xì' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/model/pagemenu.php(289): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Model_PageMenu->find(Array)
#2 [internal function]: Controller_Home->action_download()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-09-28 21:51:40 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-09-28 21:51:40 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('????&?z?c')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(156): Lib::_download('????&?z?c')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-09-28 21:51:40 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Z??' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = '+Ú–'Zµèì' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-09-28 21:51:40 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Z??' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = '+Ú–'Zµèì' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/model/pagemenu.php(289): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Model_PageMenu->find(Array)
#2 [internal function]: Controller_Home->action_download()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-09-28 21:51:40 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Z???v+b?v??'' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = '+Ú–'Zµæv+b¢v¥Ž' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-09-28 21:51:40 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Z???v+b?v??'' at line 1 [ SELECT * FROM `tbl_page_menus` WHERE `media` = '+Ú–'Zµæv+b¢v¥Ž' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/model/pagemenu.php(289): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Model_PageMenu->find(Array)
#2 [internal function]: Controller_Home->action_download()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-09-28 22:17:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 247 ]
2014-09-28 22:17:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH/_modules/site/views/site/home_page.php [ 247 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(247): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 247, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(181): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(160): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#15 {main}