<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-06 02:15:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _mod/_modules/solution/classes/controller/backend/solution.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-06 02:15:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _mod/_modules/solution/classes/controller/backend/solution.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-05-06 13:25:47 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/newsevent_detail_page.php [ 50 ]
2014-05-06 13:25:47 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/newsevent_detail_page.php [ 50 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/newsevent_detail_page.php(50): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 50, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(151): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-05-06 13:26:38 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/newsevent_detail_page.php [ 51 ]
2014-05-06 13:26:38 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/newsevent_detail_page.php [ 51 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/newsevent_detail_page.php(51): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 51, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(151): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-05-06 13:26:46 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/newsevent_detail_page.php [ 51 ]
2014-05-06 13:26:46 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/newsevent_detail_page.php [ 51 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/newsevent_detail_page.php(51): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 51, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(151): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-05-06 13:26:47 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/newsevent_detail_page.php [ 51 ]
2014-05-06 13:26:47 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/newsevent_detail_page.php [ 51 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/newsevent_detail_page.php(51): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 51, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(151): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-05-06 13:27:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$file' (T_VARIABLE) ~ MODPATH/_modules/site/views/site/newsevent_detail_page.php [ 53 ]
2014-05-06 13:27:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$file' (T_VARIABLE) ~ MODPATH/_modules/site/views/site/newsevent_detail_page.php [ 53 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-06 13:27:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH/_modules/site/views/site/newsevent_detail_page.php [ 52 ]
2014-05-06 13:27:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH/_modules/site/views/site/newsevent_detail_page.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-06 13:27:32 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH/_modules/site/views/site/newsevent_detail_page.php [ 51 ]
2014-05-06 13:27:32 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH/_modules/site/views/site/newsevent_detail_page.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-06 13:27:40 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/newsevent_detail_page.php [ 51 ]
2014-05-06 13:27:40 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/newsevent_detail_page.php [ 51 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/newsevent_detail_page.php(51): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 51, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(151): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-05-06 13:28:07 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/newsevent_detail_page.php [ 51 ]
2014-05-06 13:28:07 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/newsevent_detail_page.php [ 51 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/newsevent_detail_page.php(51): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 51, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(151): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-05-06 13:28:55 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/newsevent_detail_page.php [ 52 ]
2014-05-06 13:28:55 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/newsevent_detail_page.php [ 52 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/newsevent_detail_page.php(52): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 52, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(151): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-05-06 13:29:08 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/newsevent_detail_page.php [ 52 ]
2014-05-06 13:29:08 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/newsevent_detail_page.php [ 52 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/newsevent_detail_page.php(52): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 52, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(151): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-05-06 20:20:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: sort ~ MODPATH/_modules/solution/classes/model/solutioncategory.php [ 154 ]
2014-05-06 20:20:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: sort ~ MODPATH/_modules/solution/classes/model/solutioncategory.php [ 154 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/model/solutioncategory.php(154): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 154, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/model/solutioncategory.php(72): Model_SolutionCategory->find(Array, '', 1)
#2 /Volumes/Data/www/offistarindo/_app/classes/acl.php(93): Model_SolutionCategory->load('sort')
#3 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(45): Acl->user_history('solutioncategor...', 'index')
#4 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/controller/backend/solutioncategory.php(18): Controller_Backend_BaseAdmin->before()
#5 [internal function]: Controller_Backend_SolutionCategory->before()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#10 {main}
2014-05-06 20:21:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: default_order ~ MODPATH/_modules/solution/classes/model/solutioncategory.php [ 168 ]
2014-05-06 20:21:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: default_order ~ MODPATH/_modules/solution/classes/model/solutioncategory.php [ 168 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/model/solutioncategory.php(168): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 168, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/model/solutioncategory.php(72): Model_SolutionCategory->find(Array, '', 1)
#2 /Volumes/Data/www/offistarindo/_app/classes/acl.php(93): Model_SolutionCategory->load('sort')
#3 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(45): Acl->user_history('solutioncategor...', 'index')
#4 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/controller/backend/solutioncategory.php(18): Controller_Backend_BaseAdmin->before()
#5 [internal function]: Controller_Backend_SolutionCategory->before()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#10 {main}