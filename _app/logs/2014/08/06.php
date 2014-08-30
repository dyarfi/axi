<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-06 03:02:03 --- ERROR: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be of the type array, string given, called in /Volumes/Data/www/axi/_mod/_modules/management/classes/controller/backend/management.php on line 392 and defined ~ SYSPATH/classes/kohana/validation.php [ 211 ]
2014-08-06 03:02:03 --- STRACE: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be of the type array, string given, called in /Volumes/Data/www/axi/_mod/_modules/management/classes/controller/backend/management.php on line 392 and defined ~ SYSPATH/classes/kohana/validation.php [ 211 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/validation.php(211): Kohana_Core::error_handler(4096, 'Argument 3 pass...', '/Volumes/Data/w...', 211, Array)
#1 /Volumes/Data/www/axi/_mod/_modules/management/classes/controller/backend/management.php(392): Kohana_Validation->rule('trim', 'name', 'position', 'quote', 'biography')
#2 [internal function]: Controller_Backend_Management->action_edit()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Management))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#7 {main}
2014-08-06 03:09:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/closebox.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-06 03:09:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/closebox.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-06 03:09:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/tm.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-06 03:09:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/tm.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-06 03:09:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/tl.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-06 03:09:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/tl.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-06 03:09:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/mr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-06 03:09:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/mr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-06 03:09:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/bl.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-06 03:09:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/bl.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-06 03:09:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/tr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-06 03:09:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/tr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-06 03:09:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/ml.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-06 03:09:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/ml.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-06 03:09:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/br.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-06 03:09:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/br.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-06 03:09:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/bm.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-06 03:09:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/bm.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-06 03:09:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/closebox.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-06 03:09:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/closebox.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-06 03:09:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/tl.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-06 03:09:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/tl.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-06 03:09:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/tr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-06 03:09:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/tr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-06 03:09:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/ml.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-06 03:09:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/ml.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-06 03:09:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/mr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-06 03:09:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/mr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-06 03:09:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/bl.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-06 03:09:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/bl.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-06 03:09:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/tm.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-06 03:09:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/tm.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-06 03:09:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/bm.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-06 03:09:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/bm.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-06 03:09:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/br.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-06 03:09:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/br.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-06 03:09:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/closebox.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-06 03:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/closebox.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-06 03:09:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/bl.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-06 03:09:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/bl.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-06 03:09:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/tr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-06 03:09:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/tm.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-06 03:09:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/tr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-06 03:09:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/tm.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-06 03:09:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/mr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-06 03:09:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/mr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-06 03:09:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/tl.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-06 03:09:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/tl.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-06 03:09:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/ml.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-06 03:09:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/ml.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-06 03:09:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/bm.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-06 03:09:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/bm.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-06 03:09:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/br.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-08-06 03:09:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/fancy_zoom/br.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-08-06 15:38:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-06 15:38:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-08-06 15:58:35 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/default.php [ 65 ]
2014-08-06 15:58:35 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/default.php [ 65 ]
--
#0 /Volumes/Data/www/axi/_app/views/themes/default.php(65): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 65, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#5 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(87): Controller_Themes_Default->after()
#6 [internal function]: Controller_Home->after()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-08-06 15:59:25 --- ERROR: ErrorException [ 1 ]: Class 'Cache' not found ~ APPPATH/classes/controller/themes/default.php [ 112 ]
2014-08-06 15:59:25 --- STRACE: ErrorException [ 1 ]: Class 'Cache' not found ~ APPPATH/classes/controller/themes/default.php [ 112 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-06 15:59:25 --- ERROR: ErrorException [ 1 ]: Class 'Cache' not found ~ APPPATH/classes/controller/themes/default.php [ 112 ]
2014-08-06 15:59:25 --- STRACE: ErrorException [ 1 ]: Class 'Cache' not found ~ APPPATH/classes/controller/themes/default.php [ 112 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-06 16:00:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: menus ~ APPPATH/views/themes/default.php [ 65 ]
2014-08-06 16:00:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: menus ~ APPPATH/views/themes/default.php [ 65 ]
--
#0 /Volumes/Data/www/axi/_app/views/themes/default.php(65): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 65, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#5 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(87): Controller_Themes_Default->after()
#6 [internal function]: Controller_Home->after()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}