<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-21 02:59:25 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Home::redirect() ~ APPPATH/classes/controller/themes/default.php [ 54 ]
2014-06-21 02:59:25 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Home::redirect() ~ APPPATH/classes/controller/themes/default.php [ 54 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-21 03:00:43 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 03:00:43 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 03:00:54 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 03:00:54 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 03:00:55 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 03:00:55 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 03:00:56 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 03:00:56 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 03:01:10 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ APPPATH/views/themes/default.php [ 79 ]
2014-06-21 03:01:10 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ APPPATH/views/themes/default.php [ 79 ]
--
#0 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(79): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 79, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(184): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_Default->after()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Download))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#10 {main}
2014-06-21 03:01:40 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 03:01:40 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 03:02:14 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 03:02:14 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 03:02:23 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 03:02:23 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 03:02:32 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 03:02:32 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 03:03:19 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/controller/themes/default.php [ 35 ]
2014-06-21 03:03:19 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/controller/themes/default.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-21 03:03:39 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 03:03:39 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 03:03:40 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 03:03:40 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 03:03:55 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 03:03:55 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 03:05:09 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 03:05:09 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 03:05:18 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 03:05:18 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 03:05:28 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 03:05:28 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 03:05:33 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 03:05:33 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 03:07:44 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 03:07:44 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 03:07:53 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 03:07:53 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 03:07:58 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 03:07:58 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 03:08:06 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 03:08:06 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 03:09:57 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 03:09:57 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 03:10:16 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 03:10:16 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 03:10:27 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 03:10:27 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 03:11:13 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 03:11:13 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 15:16:11 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 15:16:11 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 15:16:52 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 15:16:52 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 15:23:29 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/themes/default.php [ 38 ]
2014-06-21 15:23:29 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/themes/default.php [ 38 ]
--
#0 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(38): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 38, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#2 [internal function]: Controller_Home->before()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-21 15:23:42 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/themes/default.php [ 38 ]
2014-06-21 15:23:42 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/themes/default.php [ 38 ]
--
#0 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(38): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 38, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#2 [internal function]: Controller_Home->before()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-21 15:23:56 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/themes/default.php [ 38 ]
2014-06-21 15:23:56 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/themes/default.php [ 38 ]
--
#0 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(38): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 38, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#2 [internal function]: Controller_Home->before()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-21 15:23:57 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/themes/default.php [ 38 ]
2014-06-21 15:23:57 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/themes/default.php [ 38 ]
--
#0 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(38): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 38, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#2 [internal function]: Controller_Home->before()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-21 15:24:13 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/themes/default.php [ 38 ]
2014-06-21 15:24:13 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/themes/default.php [ 38 ]
--
#0 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(38): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 38, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#2 [internal function]: Controller_Home->before()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-21 15:24:25 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/themes/default.php [ 38 ]
2014-06-21 15:24:25 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/themes/default.php [ 38 ]
--
#0 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(38): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 38, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#2 [internal function]: Controller_Home->before()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-21 15:24:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '&&' (T_BOOLEAN_AND) ~ APPPATH/classes/controller/themes/default.php [ 38 ]
2014-06-21 15:24:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '&&' (T_BOOLEAN_AND) ~ APPPATH/classes/controller/themes/default.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-21 15:59:32 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 15:59:32 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 15:59:34 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 15:59:34 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 15:59:34 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 15:59:34 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 15:59:35 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 15:59:35 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 15:59:36 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 15:59:36 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 15:59:39 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 15:59:39 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 16:01:24 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 16:01:24 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 16:01:24 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 16:01:24 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 16:01:25 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 16:01:25 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 16:01:25 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 16:01:25 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 16:01:26 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 16:01:26 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 16:02:01 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 16:02:01 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 16:02:04 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 16:02:04 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 16:02:12 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 16:02:12 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 16:02:32 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 16:02:32 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 16:04:20 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 16:04:20 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-21 16:04:21 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-21 16:04:21 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}