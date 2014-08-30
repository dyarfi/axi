<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-28 02:49:08 --- ERROR: ErrorException [ 8 ]: Undefined index: order ~ MODPATH/_modules/reseller/views/reseller/backend/reseller_add.php [ 52 ]
2014-04-28 02:49:08 --- STRACE: ErrorException [ 8 ]: Undefined index: order ~ MODPATH/_modules/reseller/views/reseller/backend/reseller_add.php [ 52 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/views/reseller/backend/reseller_add.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 52, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-28 03:18:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: order ~ MODPATH/_modules/reseller/views/reseller/backend/reseller_view.php [ 142 ]
2014-04-28 03:18:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: order ~ MODPATH/_modules/reseller/views/reseller/backend/reseller_view.php [ 142 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/views/reseller/backend/reseller_view.php(142): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 142, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-28 03:21:05 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Controller_Backend_Reseller' does not have a method '_unique_filename' ~ SYSPATH/classes/kohana/validation.php [ 377 ]
2014-04-28 03:21:05 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Controller_Backend_Reseller' does not have a method '_unique_filename' ~ SYSPATH/classes/kohana/validation.php [ 377 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/Volumes/Data/w...', 377, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/validation.php(377): call_user_func_array(Array, Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(216): Kohana_Validation->check()
#3 [internal function]: Controller_Backend_Reseller->action_add()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-04-28 03:22:06 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Controller_Backend_Reseller' does not have a method '_unique_filename' ~ SYSPATH/classes/kohana/validation.php [ 377 ]
2014-04-28 03:22:06 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Controller_Backend_Reseller' does not have a method '_unique_filename' ~ SYSPATH/classes/kohana/validation.php [ 377 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/Volumes/Data/w...', 377, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/validation.php(377): call_user_func_array(Array, Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(216): Kohana_Validation->check()
#3 [internal function]: Controller_Backend_Reseller->action_add()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-04-28 03:23:18 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Controller_Backend_Reseller' does not have a method '_unique_filename' ~ SYSPATH/classes/kohana/validation.php [ 377 ]
2014-04-28 03:23:18 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Controller_Backend_Reseller' does not have a method '_unique_filename' ~ SYSPATH/classes/kohana/validation.php [ 377 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/Volumes/Data/w...', 377, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/validation.php(377): call_user_func_array(Array, Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(216): Kohana_Validation->check()
#3 [internal function]: Controller_Backend_Reseller->action_add()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-04-28 03:24:36 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Controller_Backend_Reseller' does not have a method '_unique_filename' ~ SYSPATH/classes/kohana/validation.php [ 377 ]
2014-04-28 03:24:36 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Controller_Backend_Reseller' does not have a method '_unique_filename' ~ SYSPATH/classes/kohana/validation.php [ 377 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/Volumes/Data/w...', 377, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/validation.php(377): call_user_func_array(Array, Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(216): Kohana_Validation->check()
#3 [internal function]: Controller_Backend_Reseller->action_add()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-04-28 03:26:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: files ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 491 ]
2014-04-28 03:26:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: files ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 491 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(491): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 491, Array)
#1 [internal function]: Controller_Backend_Reseller->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-28 03:27:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: files ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 491 ]
2014-04-28 03:27:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: files ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 491 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(491): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 491, Array)
#1 [internal function]: Controller_Backend_Reseller->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-28 03:27:58 --- ERROR: ErrorException [ 1 ]: Call to undefined method Validation::add_rules() ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 360 ]
2014-04-28 03:27:58 --- STRACE: ErrorException [ 1 ]: Call to undefined method Validation::add_rules() ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 360 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 03:28:07 --- ERROR: ReflectionException [ 0 ]: Method Upload::type[gif,jpg,png]() does not exist ~ SYSPATH/classes/kohana/validation.php [ 407 ]
2014-04-28 03:28:07 --- STRACE: ReflectionException [ 0 ]: Method Upload::type[gif,jpg,png]() does not exist ~ SYSPATH/classes/kohana/validation.php [ 407 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/validation.php(407): ReflectionMethod->__construct('upload', 'type[gif,jpg,pn...')
#1 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(374): Kohana_Validation->check()
#2 [internal function]: Controller_Backend_Reseller->action_edit()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-28 03:28:11 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Validation::rules() must be of the type array, string given, called in /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php on line 360 and defined ~ SYSPATH/classes/kohana/validation.php [ 238 ]
2014-04-28 03:28:11 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Validation::rules() must be of the type array, string given, called in /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php on line 360 and defined ~ SYSPATH/classes/kohana/validation.php [ 238 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/validation.php(238): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Volumes/Data/w...', 238, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(360): Kohana_Validation->rules('image_1', 'upload::type[gi...')
#2 [internal function]: Controller_Backend_Reseller->action_edit()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-28 03:28:14 --- ERROR: ReflectionException [ 0 ]: Method Upload::type[gif,jpg,png]() does not exist ~ SYSPATH/classes/kohana/validation.php [ 407 ]
2014-04-28 03:28:14 --- STRACE: ReflectionException [ 0 ]: Method Upload::type[gif,jpg,png]() does not exist ~ SYSPATH/classes/kohana/validation.php [ 407 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/validation.php(407): ReflectionMethod->__construct('upload', 'type[gif,jpg,pn...')
#1 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(374): Kohana_Validation->check()
#2 [internal function]: Controller_Backend_Reseller->action_edit()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-28 03:28:32 --- ERROR: ReflectionException [ 0 ]: Method Upload::type[gif,jpg,png]() does not exist ~ SYSPATH/classes/kohana/validation.php [ 407 ]
2014-04-28 03:28:32 --- STRACE: ReflectionException [ 0 ]: Method Upload::type[gif,jpg,png]() does not exist ~ SYSPATH/classes/kohana/validation.php [ 407 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/validation.php(407): ReflectionMethod->__construct('Upload', 'type[gif,jpg,pn...')
#1 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(374): Kohana_Validation->check()
#2 [internal function]: Controller_Backend_Reseller->action_edit()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-28 03:28:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: files ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 492 ]
2014-04-28 03:28:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: files ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 492 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(492): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 492, Array)
#1 [internal function]: Controller_Backend_Reseller->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-28 03:28:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: files ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 492 ]
2014-04-28 03:28:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: files ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 492 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(492): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 492, Array)
#1 [internal function]: Controller_Backend_Reseller->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-28 03:29:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: files ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 492 ]
2014-04-28 03:29:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: files ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 492 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(492): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 492, Array)
#1 [internal function]: Controller_Backend_Reseller->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-28 03:29:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: files ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 493 ]
2014-04-28 03:29:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: files ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 493 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(493): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 493, Array)
#1 [internal function]: Controller_Backend_Reseller->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-28 03:29:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: files ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 493 ]
2014-04-28 03:29:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: files ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 493 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(493): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 493, Array)
#1 [internal function]: Controller_Backend_Reseller->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-28 03:30:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: files ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 495 ]
2014-04-28 03:30:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: files ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 495 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(495): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 495, Array)
#1 [internal function]: Controller_Backend_Reseller->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-28 03:30:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: files ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 495 ]
2014-04-28 03:30:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: files ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 495 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(495): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 495, Array)
#1 [internal function]: Controller_Backend_Reseller->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-28 04:17:14 --- ERROR: ErrorException [ 2 ]: print_r() expects at least 1 parameter, 0 given ~ MODPATH/_modules/site/views/site/home_page.php [ 74 ]
2014-04-28 04:17:14 --- STRACE: ErrorException [ 2 ]: print_r() expects at least 1 parameter, 0 given ~ MODPATH/_modules/site/views/site/home_page.php [ 74 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'print_r() expec...', '/Volumes/Data/w...', 74, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(74): print_r()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(151): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Themes_Default->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-28 04:17:24 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$videoid' (T_VARIABLE) ~ MODPATH/_modules/site/views/site/home_page.php [ 71 ]
2014-04-28 04:17:24 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$videoid' (T_VARIABLE) ~ MODPATH/_modules/site/views/site/home_page.php [ 71 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 04:17:52 --- ERROR: ErrorException [ 2 ]: print_r() expects at least 1 parameter, 0 given ~ MODPATH/_modules/site/views/site/home_page.php [ 73 ]
2014-04-28 04:17:52 --- STRACE: ErrorException [ 2 ]: print_r() expects at least 1 parameter, 0 given ~ MODPATH/_modules/site/views/site/home_page.php [ 73 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'print_r() expec...', '/Volumes/Data/w...', 73, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(73): print_r()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(151): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Themes_Default->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-28 04:17:56 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/_modules/site/views/site/home_page.php [ 77 ]
2014-04-28 04:17:56 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/_modules/site/views/site/home_page.php [ 77 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 04:23:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: testimoni ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 159 ]
2014-04-28 04:23:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: testimoni ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 159 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/views/testimonial/backend/testimonial_view.php(159): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 159, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-28 04:23:48 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 159 ]
2014-04-28 04:23:48 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 159 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/views/testimonial/backend/testimonial_view.php(159): Kohana_Core::error_handler(2, 'Creating defaul...', '/Volumes/Data/w...', 159, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-28 04:24:36 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 159 ]
2014-04-28 04:24:36 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 159 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/views/testimonial/backend/testimonial_view.php(159): Kohana_Core::error_handler(2, 'Creating defaul...', '/Volumes/Data/w...', 159, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-28 04:25:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: testimoni ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 165 ]
2014-04-28 04:25:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: testimoni ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 165 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/views/testimonial/backend/testimonial_view.php(165): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 165, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-28 04:26:49 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 160 ]
2014-04-28 04:26:49 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 160 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/views/testimonial/backend/testimonial_view.php(160): Kohana_Core::error_handler(2, 'Creating defaul...', '/Volumes/Data/w...', 160, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-28 04:26:58 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 160 ]
2014-04-28 04:26:58 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 160 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/views/testimonial/backend/testimonial_view.php(160): Kohana_Core::error_handler(2, 'Creating defaul...', '/Volumes/Data/w...', 160, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-28 04:27:05 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 159 ]
2014-04-28 04:27:05 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 159 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/views/testimonial/backend/testimonial_view.php(159): Kohana_Core::error_handler(2, 'Creating defaul...', '/Volumes/Data/w...', 159, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-28 04:28:02 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 157 ]
2014-04-28 04:28:02 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 157 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/views/testimonial/backend/testimonial_view.php(157): Kohana_Core::error_handler(2, 'Creating defaul...', '/Volumes/Data/w...', 157, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-28 04:34:47 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 163 ]
2014-04-28 04:34:47 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/views/testimonial/backend/testimonial_view.php(163): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 163, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-28 04:35:25 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 162 ]
2014-04-28 04:35:25 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 162 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/views/testimonial/backend/testimonial_view.php(162): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 162, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-28 04:35:36 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 162 ]
2014-04-28 04:35:36 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 162 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/views/testimonial/backend/testimonial_view.php(162): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 162, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-28 04:35:49 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 163 ]
2014-04-28 04:35:49 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/views/testimonial/backend/testimonial_view.php(163): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 163, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-28 04:48:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 185 ]
2014-04-28 04:48:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 185 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 04:48:58 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 185 ]
2014-04-28 04:48:58 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 185 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 04:50:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: testimoni ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 160 ]
2014-04-28 04:50:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: testimoni ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 160 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/views/testimonial/backend/testimonial_view.php(160): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 160, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-28 04:50:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: testimoni ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 160 ]
2014-04-28 04:50:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: testimoni ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 160 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/views/testimonial/backend/testimonial_view.php(160): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 160, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-28 04:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/testimonial/view/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-28 04:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/testimonial/view/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-28 04:50:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: testimoni ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 162 ]
2014-04-28 04:50:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: testimoni ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 162 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/views/testimonial/backend/testimonial_view.php(162): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 162, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-28 04:51:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: testimoni ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 165 ]
2014-04-28 04:51:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: testimoni ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 165 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/views/testimonial/backend/testimonial_view.php(165): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 165, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-28 04:51:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '/' ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 171 ]
2014-04-28 04:51:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '/' ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 171 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 04:55:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/_modules/site/views/site/home_page.php [ 72 ]
2014-04-28 04:55:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/_modules/site/views/site/home_page.php [ 72 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 04:56:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ MODPATH/_modules/site/views/site/home_page.php [ 111 ]
2014-04-28 04:56:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ MODPATH/_modules/site/views/site/home_page.php [ 111 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 06:02:15 --- ERROR: ErrorException [ 2 ]: preg_replace(): Compilation failed: unrecognized character after (? or (?- at offset 2 ~ MODPATH/_modules/site/views/site/home_page.php [ 67 ]
2014-04-28 06:02:15 --- STRACE: ErrorException [ 2 ]: preg_replace(): Compilation failed: unrecognized character after (? or (?- at offset 2 ~ MODPATH/_modules/site/views/site/home_page.php [ 67 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Volumes/Data/w...', 67, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(67): preg_replace('#(?http://)?(?:...', '<center><iframe...', 'www.youtube.com...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(151): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Themes_Default->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-28 06:02:32 --- ERROR: ErrorException [ 2 ]: preg_replace(): Compilation failed: nothing to repeat at offset 0 ~ MODPATH/_modules/site/views/site/home_page.php [ 67 ]
2014-04-28 06:02:32 --- STRACE: ErrorException [ 2 ]: preg_replace(): Compilation failed: nothing to repeat at offset 0 ~ MODPATH/_modules/site/views/site/home_page.php [ 67 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Volumes/Data/w...', 67, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(67): preg_replace('#?(?http://)?(?...', '<center><iframe...', 'www.youtube.com...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(151): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Themes_Default->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-28 06:02:35 --- ERROR: ErrorException [ 2 ]: preg_replace(): Compilation failed: nothing to repeat at offset 0 ~ MODPATH/_modules/site/views/site/home_page.php [ 67 ]
2014-04-28 06:02:35 --- STRACE: ErrorException [ 2 ]: preg_replace(): Compilation failed: nothing to repeat at offset 0 ~ MODPATH/_modules/site/views/site/home_page.php [ 67 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Volumes/Data/w...', 67, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(67): preg_replace('#?(http://)?(?:...', '<center><iframe...', 'www.youtube.com...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(151): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Themes_Default->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-28 06:02:39 --- ERROR: ErrorException [ 2 ]: preg_replace(): Compilation failed: nothing to repeat at offset 0 ~ MODPATH/_modules/site/views/site/home_page.php [ 67 ]
2014-04-28 06:02:39 --- STRACE: ErrorException [ 2 ]: preg_replace(): Compilation failed: nothing to repeat at offset 0 ~ MODPATH/_modules/site/views/site/home_page.php [ 67 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Volumes/Data/w...', 67, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(67): preg_replace('#?(http://)(?:w...', '<center><iframe...', 'www.youtube.com...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(151): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Themes_Default->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-28 06:02:57 --- ERROR: ErrorException [ 2 ]: preg_replace(): Compilation failed: unrecognized character after (? or (?- at offset 2 ~ MODPATH/_modules/site/views/site/home_page.php [ 67 ]
2014-04-28 06:02:57 --- STRACE: ErrorException [ 2 ]: preg_replace(): Compilation failed: unrecognized character after (? or (?- at offset 2 ~ MODPATH/_modules/site/views/site/home_page.php [ 67 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Volumes/Data/w...', 67, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(67): preg_replace('#(?http://?:www...', '<center><iframe...', 'www.youtube.com...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(151): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Themes_Default->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-28 06:04:57 --- ERROR: ErrorException [ 2 ]: preg_replace(): Compilation failed: missing ) at offset 121 ~ MODPATH/_modules/site/views/site/home_page.php [ 67 ]
2014-04-28 06:04:57 --- STRACE: ErrorException [ 2 ]: preg_replace(): Compilation failed: missing ) at offset 121 ~ MODPATH/_modules/site/views/site/home_page.php [ 67 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Volumes/Data/w...', 67, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(67): preg_replace('#(?:((https?://...', '<center><iframe...', 'www.youtube.com...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(151): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Themes_Default->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-28 06:05:11 --- ERROR: ErrorException [ 2 ]: preg_replace(): Unknown modifier '/' ~ MODPATH/_modules/site/views/site/home_page.php [ 67 ]
2014-04-28 06:05:11 --- STRACE: ErrorException [ 2 ]: preg_replace(): Unknown modifier '/' ~ MODPATH/_modules/site/views/site/home_page.php [ 67 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Volumes/Data/w...', 67, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(67): preg_replace('/(?:((https?://...', '<center><iframe...', 'www.youtube.com...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(151): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Themes_Default->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-28 06:45:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/f6f119956583106d9a7a2d12027f6f05_crop_640x421.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-28 06:45:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/f6f119956583106d9a7a2d12027f6f05_crop_640x421.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-28 06:45:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/f6f119956583106d9a7a2d12027f6f05_crop_640x421.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-28 06:45:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/f6f119956583106d9a7a2d12027f6f05_crop_640x421.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-28 06:46:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/f6f119956583106d9a7a2d12027f6f05_crop_602x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-28 06:46:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/f6f119956583106d9a7a2d12027f6f05_crop_602x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-28 06:46:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/f6f119956583106d9a7a2d12027f6f05_crop_602x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-28 06:46:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/f6f119956583106d9a7a2d12027f6f05_crop_602x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-28 06:46:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/f6f119956583106d9a7a2d12027f6f05_crop_602x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-28 06:46:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/f6f119956583106d9a7a2d12027f6f05_crop_602x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-28 06:46:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/f6f119956583106d9a7a2d12027f6f05_crop_602x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-28 06:46:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/f6f119956583106d9a7a2d12027f6f05_crop_602x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-28 06:46:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/f6f119956583106d9a7a2d12027f6f05_crop_602x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-28 06:46:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/f6f119956583106d9a7a2d12027f6f05_crop_602x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-28 06:46:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/f6f119956583106d9a7a2d12027f6f05_crop_602x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-28 06:46:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/f6f119956583106d9a7a2d12027f6f05_crop_602x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-28 06:46:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/f6f119956583106d9a7a2d12027f6f05_crop_602x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-28 06:46:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/f6f119956583106d9a7a2d12027f6f05_crop_602x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-28 06:46:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/f6f119956583106d9a7a2d12027f6f05_crop_602x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-28 06:46:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/f6f119956583106d9a7a2d12027f6f05_crop_602x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-28 06:47:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/f6f119956583106d9a7a2d12027f6f05_crop_602x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-28 06:47:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/f6f119956583106d9a7a2d12027f6f05_crop_602x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-28 06:47:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/f6f119956583106d9a7a2d12027f6f05_crop_602x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-28 06:47:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/f6f119956583106d9a7a2d12027f6f05_crop_602x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-28 06:47:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/f6f119956583106d9a7a2d12027f6f05_crop_622x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-28 06:47:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/f6f119956583106d9a7a2d12027f6f05_crop_622x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-28 06:47:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/f6f119956583106d9a7a2d12027f6f05_crop_622x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-28 06:47:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/f6f119956583106d9a7a2d12027f6f05_crop_622x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-28 06:47:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/f6f119956583106d9a7a2d12027f6f05_crop_622x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-28 06:47:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/f6f119956583106d9a7a2d12027f6f05_crop_622x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-28 06:47:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/f6f119956583106d9a7a2d12027f6f05_crop_622x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-28 06:47:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/f6f119956583106d9a7a2d12027f6f05_crop_622x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-28 06:47:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/f6f119956583106d9a7a2d12027f6f05_crop_622x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-28 06:47:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/f6f119956583106d9a7a2d12027f6f05_crop_622x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-28 06:47:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/f6f119956583106d9a7a2d12027f6f05_crop_622x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-28 06:47:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/f6f119956583106d9a7a2d12027f6f05_crop_622x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-28 06:47:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/f6f119956583106d9a7a2d12027f6f05_crop_622x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-28 06:47:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/f6f119956583106d9a7a2d12027f6f05_crop_622x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-28 06:48:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/f6f119956583106d9a7a2d12027f6f05_crop_622x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-28 06:48:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/f6f119956583106d9a7a2d12027f6f05_crop_622x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-28 06:48:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/f6f119956583106d9a7a2d12027f6f05_crop_622x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-28 06:48:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/f6f119956583106d9a7a2d12027f6f05_crop_622x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-28 06:48:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/f6f119956583106d9a7a2d12027f6f05_crop_622x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-28 06:48:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/f6f119956583106d9a7a2d12027f6f05_crop_622x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-28 06:48:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/f6f119956583106d9a7a2d12027f6f05_crop_622x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-28 06:48:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/f6f119956583106d9a7a2d12027f6f05_crop_622x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-28 06:48:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/f6f119956583106d9a7a2d12027f6f05_crop_622x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-28 06:48:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/f6f119956583106d9a7a2d12027f6f05_crop_622x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-28 06:48:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/f6f119956583106d9a7a2d12027f6f05_crop_622x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-28 06:48:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/f6f119956583106d9a7a2d12027f6f05_crop_622x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-28 07:09:20 --- ERROR: ErrorException [ 8 ]: Undefined property: Acl::$session ~ APPPATH/classes/acl.php [ 82 ]
2014-04-28 07:09:20 --- STRACE: ErrorException [ 8 ]: Undefined property: Acl::$session ~ APPPATH/classes/acl.php [ 82 ]
--
#0 /Volumes/Data/www/offistarindo/_app/classes/acl.php(82): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 82, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(45): Acl->user_history('userhistory', 'index')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userhistory.php(11): Controller_Backend_BaseAdmin->before()
#3 [internal function]: Controller_Backend_UserHistory->before()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_UserHistory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-04-28 07:10:18 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_ModuleList::$name ~ APPPATH/classes/acl.php [ 82 ]
2014-04-28 07:10:18 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_ModuleList::$name ~ APPPATH/classes/acl.php [ 82 ]
--
#0 /Volumes/Data/www/offistarindo/_app/classes/acl.php(82): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 82, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(45): Acl->user_history('user', 'index')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/user.php(16): Controller_Backend_BaseAdmin->before()
#3 [internal function]: Controller_Backend_User->before()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-04-28 07:11:09 --- ERROR: ErrorException [ 8 ]: Undefined property: Acl::$id1 ~ APPPATH/classes/acl.php [ 84 ]
2014-04-28 07:11:09 --- STRACE: ErrorException [ 8 ]: Undefined property: Acl::$id1 ~ APPPATH/classes/acl.php [ 84 ]
--
#0 /Volumes/Data/www/offistarindo/_app/classes/acl.php(84): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 84, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(45): Acl->user_history('user', 'index')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/user.php(16): Controller_Backend_BaseAdmin->before()
#3 [internal function]: Controller_Backend_User->before()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-04-28 07:13:00 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /Volumes/Data/www/offistarindo/_app/classes/acl.php on line 84 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
2014-04-28 07:13:00 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /Volumes/Data/www/offistarindo/_app/classes/acl.php on line 84 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Volumes/Data/w...', 43, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/acl.php(84): Kohana_Controller->__construct()
#2 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(45): Acl->user_history('user', 'edit')
#3 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/user.php(16): Controller_Backend_BaseAdmin->before()
#4 [internal function]: Controller_Backend_User->before()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#9 {main}
2014-04-28 07:14:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ''Model_'' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/acl.php [ 84 ]
2014-04-28 07:14:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ''Model_'' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/acl.php [ 84 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:15:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: history_content ~ APPPATH/classes/acl.php [ 90 ]
2014-04-28 07:15:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: history_content ~ APPPATH/classes/acl.php [ 90 ]
--
#0 /Volumes/Data/www/offistarindo/_app/classes/acl.php(90): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 90, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(45): Acl->user_history('user', 'edit')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/user.php(16): Controller_Backend_BaseAdmin->before()
#3 [internal function]: Controller_Backend_User->before()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-04-28 07:15:39 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::edit() ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 07:15:39 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::edit() ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:15:55 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'instances' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH/classes/acl.php [ 86 ]
2014-04-28 07:15:55 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'instances' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH/classes/acl.php [ 86 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:15:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'instance' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH/classes/acl.php [ 86 ]
2014-04-28 07:15:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'instance' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH/classes/acl.php [ 86 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:16:02 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::edit() ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 07:16:02 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::edit() ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:17:57 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::edit() ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 07:17:57 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::edit() ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:18:26 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::edit() ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 07:18:26 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::edit() ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:18:35 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_User::$edit ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 07:18:35 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_User::$edit ~ APPPATH/classes/acl.php [ 88 ]
--
#0 /Volumes/Data/www/offistarindo/_app/classes/acl.php(88): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 88, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(45): Acl->user_history('user', 'edit')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/user.php(16): Controller_Backend_BaseAdmin->before()
#3 [internal function]: Controller_Backend_User->before()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-04-28 07:19:01 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::edit() ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 07:19:01 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::edit() ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:20:17 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::eval() ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 07:20:17 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::eval() ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:20:18 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::eval() ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 07:20:18 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::eval() ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:20:18 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::eval() ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 07:20:18 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::eval() ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:20:56 --- ERROR: ErrorException [ 1 ]: Method name must be a string ~ APPPATH/classes/acl.php [ 90 ]
2014-04-28 07:20:56 --- STRACE: ErrorException [ 1 ]: Method name must be a string ~ APPPATH/classes/acl.php [ 90 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:21:01 --- ERROR: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH/classes/acl.php [ 90 ]
2014-04-28 07:21:01 --- STRACE: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH/classes/acl.php [ 90 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:21:23 --- ERROR: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH/classes/acl.php [ 90 ]
2014-04-28 07:21:23 --- STRACE: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH/classes/acl.php [ 90 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:21:48 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects exactly 2 parameters, 1 given ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 07:21:48 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects exactly 2 parameters, 1 given ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/Volumes/Data/w...', 88, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/acl.php(88): call_user_func_array('edit')
#2 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(45): Acl->user_history('user', 'edit')
#3 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/user.php(16): Controller_Backend_BaseAdmin->before()
#4 [internal function]: Controller_Backend_User->before()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#9 {main}
2014-04-28 07:22:57 --- ERROR: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH/classes/acl.php [ 90 ]
2014-04-28 07:22:57 --- STRACE: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH/classes/acl.php [ 90 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:23:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/classes/acl.php(88) : eval()'d code [ 1 ]
2014-04-28 07:23:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/classes/acl.php(88) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:23:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/classes/acl.php(88) : eval()'d code [ 1 ]
2014-04-28 07:23:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/classes/acl.php(88) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:23:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/classes/acl.php(88) : eval()'d code [ 1 ]
2014-04-28 07:23:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/classes/acl.php(88) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:24:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/classes/acl.php(88) : eval()'d code [ 1 ]
2014-04-28 07:24:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/classes/acl.php(88) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:24:18 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/classes/acl.php(88) : eval()'d code [ 1 ]
2014-04-28 07:24:18 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/classes/acl.php(88) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:24:25 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::edit() ~ APPPATH/classes/acl.php(88) : eval()'d code [ 1 ]
2014-04-28 07:24:25 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::edit() ~ APPPATH/classes/acl.php(88) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:25:05 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::edit() ~ APPPATH/classes/acl.php(88) : eval()'d code [ 1 ]
2014-04-28 07:25:05 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::edit() ~ APPPATH/classes/acl.php(88) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:25:06 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::edit() ~ APPPATH/classes/acl.php(88) : eval()'d code [ 1 ]
2014-04-28 07:25:06 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::edit() ~ APPPATH/classes/acl.php(88) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:25:06 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::edit() ~ APPPATH/classes/acl.php(88) : eval()'d code [ 1 ]
2014-04-28 07:25:06 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::edit() ~ APPPATH/classes/acl.php(88) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:25:23 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH/classes/acl.php(88) : eval()'d code [ 1 ]
2014-04-28 07:25:23 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH/classes/acl.php(88) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:25:31 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::edit() ~ APPPATH/classes/acl.php(88) : eval()'d code [ 1 ]
2014-04-28 07:25:31 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::edit() ~ APPPATH/classes/acl.php(88) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:26:06 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH/classes/acl.php(88) : eval()'d code [ 1 ]
2014-04-28 07:26:06 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH/classes/acl.php(88) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:26:10 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::edit() ~ APPPATH/classes/acl.php(88) : eval()'d code [ 1 ]
2014-04-28 07:26:10 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::edit() ~ APPPATH/classes/acl.php(88) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:28:05 --- ERROR: ErrorException [ 8 ]: Use of undefined constant index - assumed 'index' ~ APPPATH/classes/acl.php(88) : eval()'d code [ 1 ]
2014-04-28 07:28:05 --- STRACE: ErrorException [ 8 ]: Use of undefined constant index - assumed 'index' ~ APPPATH/classes/acl.php(88) : eval()'d code [ 1 ]
--
#0 /Volumes/Data/www/offistarindo/_app/classes/acl.php(88) : eval()'d code(1): Kohana_Core::error_handler(8, 'Use of undefine...', '/Volumes/Data/w...', 1, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/acl.php(88): eval()
#2 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(45): Acl->user_history('user', 'edit')
#3 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/user.php(16): Controller_Backend_BaseAdmin->before()
#4 [internal function]: Controller_Backend_User->before()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#9 {main}
2014-04-28 07:28:33 --- ERROR: ErrorException [ 1 ]: Undefined class constant 'instances' ~ APPPATH/classes/acl.php [ 86 ]
2014-04-28 07:28:33 --- STRACE: ErrorException [ 1 ]: Undefined class constant 'instances' ~ APPPATH/classes/acl.php [ 86 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:28:35 --- ERROR: ErrorException [ 1 ]: Undefined class constant 'instance' ~ APPPATH/classes/acl.php [ 86 ]
2014-04-28 07:28:35 --- STRACE: ErrorException [ 1 ]: Undefined class constant 'instance' ~ APPPATH/classes/acl.php [ 86 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:28:50 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::instances() ~ APPPATH/classes/acl.php(88) : eval()'d code [ 1 ]
2014-04-28 07:28:50 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::instances() ~ APPPATH/classes/acl.php(88) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:28:53 --- ERROR: ErrorException [ 8 ]: Use of undefined constant index - assumed 'index' ~ APPPATH/classes/acl.php(88) : eval()'d code [ 1 ]
2014-04-28 07:28:53 --- STRACE: ErrorException [ 8 ]: Use of undefined constant index - assumed 'index' ~ APPPATH/classes/acl.php(88) : eval()'d code [ 1 ]
--
#0 /Volumes/Data/www/offistarindo/_app/classes/acl.php(88) : eval()'d code(1): Kohana_Core::error_handler(8, 'Use of undefine...', '/Volumes/Data/w...', 1, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/acl.php(88): eval()
#2 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(45): Acl->user_history('user', 'edit')
#3 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/user.php(16): Controller_Backend_BaseAdmin->before()
#4 [internal function]: Controller_Backend_User->before()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#9 {main}
2014-04-28 07:29:49 --- ERROR: ErrorException [ 1 ]: Call to undefined method User::instance() ~ APPPATH/classes/acl.php [ 84 ]
2014-04-28 07:29:49 --- STRACE: ErrorException [ 1 ]: Call to undefined method User::instance() ~ APPPATH/classes/acl.php [ 84 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:30:00 --- ERROR: ErrorException [ 1 ]: Call to undefined method User::instance() ~ APPPATH/classes/acl.php [ 84 ]
2014-04-28 07:30:00 --- STRACE: ErrorException [ 1 ]: Call to undefined method User::instance() ~ APPPATH/classes/acl.php [ 84 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:30:11 --- ERROR: ErrorException [ 1 ]: Call to undefined method User::instance() ~ APPPATH/classes/acl.php [ 84 ]
2014-04-28 07:30:11 --- STRACE: ErrorException [ 1 ]: Call to undefined method User::instance() ~ APPPATH/classes/acl.php [ 84 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:30:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/acl.php [ 94 ]
2014-04-28 07:30:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/acl.php [ 94 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 07:32:38 --- ERROR: ErrorException [ 4096 ]: Object of class Model_Page could not be converted to string ~ APPPATH/classes/acl.php [ 106 ]
2014-04-28 07:32:38 --- STRACE: ErrorException [ 4096 ]: Object of class Model_Page could not be converted to string ~ APPPATH/classes/acl.php [ 106 ]
--
#0 /Volumes/Data/www/offistarindo/_app/classes/acl.php(106): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 106, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(45): Acl->user_history('page', 'view')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/page.php(16): Controller_Backend_BaseAdmin->before()
#3 [internal function]: Controller_Backend_Page->before()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-04-28 07:32:59 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/acl.php [ 106 ]
2014-04-28 07:32:59 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/acl.php [ 106 ]
--
#0 /Volumes/Data/www/offistarindo/_app/classes/acl.php(106): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 106, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(45): Acl->user_history('page', 'view')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/page.php(16): Controller_Backend_BaseAdmin->before()
#3 [internal function]: Controller_Backend_Page->before()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-04-28 07:33:03 --- ERROR: ErrorException [ 4096 ]: Object of class Model_Page could not be converted to string ~ APPPATH/classes/acl.php [ 106 ]
2014-04-28 07:33:03 --- STRACE: ErrorException [ 4096 ]: Object of class Model_Page could not be converted to string ~ APPPATH/classes/acl.php [ 106 ]
--
#0 /Volumes/Data/www/offistarindo/_app/classes/acl.php(106): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 106, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(45): Acl->user_history('page', 'view')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/page.php(16): Controller_Backend_BaseAdmin->before()
#3 [internal function]: Controller_Backend_Page->before()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-04-28 07:42:19 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Page::$id ~ MODPATH/_modules/page/classes/model/page.php [ 77 ]
2014-04-28 07:42:19 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Page::$id ~ MODPATH/_modules/page/classes/model/page.php [ 77 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(77): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 77, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/acl.php(88): Model_Page->load(NULL)
#2 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(45): Acl->user_history('page', 'index')
#3 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/page.php(16): Controller_Backend_BaseAdmin->before()
#4 [internal function]: Controller_Backend_Page->before()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#9 {main}
2014-04-28 08:02:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_authentication' not found ~ APPPATH/classes/acl.php [ 86 ]
2014-04-28 08:02:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_authentication' not found ~ APPPATH/classes/acl.php [ 86 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:02:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_authentication' not found ~ APPPATH/classes/acl.php [ 86 ]
2014-04-28 08:02:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_authentication' not found ~ APPPATH/classes/acl.php [ 86 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:04:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 08:04:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:05:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 08:05:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:05:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 08:05:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:05:51 --- ERROR: ErrorException [ 1 ]: Call to undefined function is_function_callable() ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 08:05:51 --- STRACE: ErrorException [ 1 ]: Call to undefined function is_function_callable() ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:05:56 --- ERROR: ErrorException [ 1 ]: Call to undefined function is_function() ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 08:05:56 --- STRACE: ErrorException [ 1 ]: Call to undefined function is_function() ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:06:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 08:06:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:06:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 08:06:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:06:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 08:06:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:06:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 08:06:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:06:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 08:06:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:06:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 08:06:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:06:52 --- ERROR: ErrorException [ 1 ]: Class 'Model_Authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 08:06:52 --- STRACE: ErrorException [ 1 ]: Class 'Model_Authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:07:25 --- ERROR: ErrorException [ 1 ]: Call to undefined function is_class() ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 08:07:25 --- STRACE: ErrorException [ 1 ]: Call to undefined function is_class() ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:07:43 --- ERROR: ErrorException [ 1 ]: Class 'Model_Authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 08:07:43 --- STRACE: ErrorException [ 1 ]: Class 'Model_Authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:07:43 --- ERROR: ErrorException [ 1 ]: Class 'Model_Authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 08:07:43 --- STRACE: ErrorException [ 1 ]: Class 'Model_Authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:07:44 --- ERROR: ErrorException [ 1 ]: Class 'Model_Authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 08:07:44 --- STRACE: ErrorException [ 1 ]: Class 'Model_Authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:08:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_Backend_Authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 08:08:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_Backend_Authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:08:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_Authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 08:08:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_Authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:08:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_Authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 08:08:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_Authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:09:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_Baseadmin' not found ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 08:09:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_Baseadmin' not found ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:09:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_Authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 08:09:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_Authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:09:53 --- ERROR: ErrorException [ 1 ]: Class 'Model_Authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 08:09:53 --- STRACE: ErrorException [ 1 ]: Class 'Model_Authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:09:53 --- ERROR: ErrorException [ 1 ]: Class 'Model_Authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 08:09:53 --- STRACE: ErrorException [ 1 ]: Class 'Model_Authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:09:53 --- ERROR: ErrorException [ 1 ]: Class 'Model_Authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 08:09:53 --- STRACE: ErrorException [ 1 ]: Class 'Model_Authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:11:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_Authentication' not found ~ APPPATH/classes/acl.php [ 89 ]
2014-04-28 08:11:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_Authentication' not found ~ APPPATH/classes/acl.php [ 89 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:11:57 --- ERROR: ErrorException [ 1 ]: Class 'Model_Authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 08:11:57 --- STRACE: ErrorException [ 1 ]: Class 'Model_Authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:12:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_Authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 08:12:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_Authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:12:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_Authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 08:12:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_Authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:12:32 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '@' ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 08:12:32 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '@' ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:12:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_Authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
2014-04-28 08:12:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_Authentication' not found ~ APPPATH/classes/acl.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:22:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/_modules/user/views/user/backend/userhistory_index.php [ 33 ]
2014-04-28 08:22:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/_modules/user/views/user/backend/userhistory_index.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:22:17 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/_modules/user/views/user/backend/userhistory_index.php [ 24 ]
2014-04-28 08:22:17 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/_modules/user/views/user/backend/userhistory_index.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:44:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: newsevent ~ MODPATH/_modules/site/views/site/newsevent_page.php [ 28 ]
2014-04-28 08:44:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: newsevent ~ MODPATH/_modules/site/views/site/newsevent_page.php [ 28 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/newsevent_page.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 28, Array)
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
2014-04-28 08:44:47 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_News::$person ~ MODPATH/_modules/site/views/site/testimonial_page.php [ 29 ]
2014-04-28 08:44:47 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_News::$person ~ MODPATH/_modules/site/views/site/testimonial_page.php [ 29 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/testimonial_page.php(29): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 29, Array)
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
2014-04-28 08:54:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL testimonial/read/file-upload-widget-with-multiple-file-selection was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-28 08:54:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL testimonial/read/file-upload-widget-with-multiple-file-selection was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-28 08:55:01 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Testimonial::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 549 ]
2014-04-28 08:55:01 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Testimonial::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 549 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:55:28 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Testimonial::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 549 ]
2014-04-28 08:55:28 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Testimonial::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 549 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:55:45 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Testimonial::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 548 ]
2014-04-28 08:55:45 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Testimonial::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 548 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:56:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: about_page ~ MODPATH/_modules/site/classes/controller/company.php [ 565 ]
2014-04-28 08:56:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: about_page ~ MODPATH/_modules/site/classes/controller/company.php [ 565 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(565): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 565, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(458): Controller_Company->_read_testimonial('file-upload-wid...')
#2 [internal function]: Controller_Company->action_testimonial()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-28 08:57:14 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Testimonial::$text ~ MODPATH/_modules/site/classes/controller/company.php [ 589 ]
2014-04-28 08:57:14 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Testimonial::$text ~ MODPATH/_modules/site/classes/controller/company.php [ 589 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(589): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 589, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(458): Controller_Company->_read_testimonial('file-upload-wid...')
#2 [internal function]: Controller_Company->action_testimonial()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-28 08:57:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Testimonial::load_by_group() ~ MODPATH/_modules/site/views/site/testimonial_detail_page.php [ 47 ]
2014-04-28 08:57:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Testimonial::load_by_group() ~ MODPATH/_modules/site/views/site/testimonial_detail_page.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:57:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: newsevent ~ MODPATH/_modules/site/views/site/testimonial_detail_page.php [ 47 ]
2014-04-28 08:57:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: newsevent ~ MODPATH/_modules/site/views/site/testimonial_detail_page.php [ 47 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/testimonial_detail_page.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 47, Array)
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
2014-04-28 08:57:49 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Testimonial::load_by_group() ~ MODPATH/_modules/site/views/site/testimonial_detail_page.php [ 50 ]
2014-04-28 08:57:49 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Testimonial::load_by_group() ~ MODPATH/_modules/site/views/site/testimonial_detail_page.php [ 50 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:57:58 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Testimonial::load_by_group() ~ MODPATH/_modules/site/views/site/testimonial_detail_page.php [ 53 ]
2014-04-28 08:57:58 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Testimonial::load_by_group() ~ MODPATH/_modules/site/views/site/testimonial_detail_page.php [ 53 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-28 08:58:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: newsevent ~ MODPATH/_modules/site/views/site/testimonial_detail_page.php [ 58 ]
2014-04-28 08:58:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: newsevent ~ MODPATH/_modules/site/views/site/testimonial_detail_page.php [ 58 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/testimonial_detail_page.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 58, Array)
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
2014-04-28 08:59:01 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Testimonial::$text ~ MODPATH/_modules/site/views/site/testimonial_detail_page.php [ 58 ]
2014-04-28 08:59:01 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Testimonial::$text ~ MODPATH/_modules/site/views/site/testimonial_detail_page.php [ 58 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/testimonial_detail_page.php(58): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 58, Array)
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
2014-04-28 08:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/testimonial/1f4ff3e280695b675b0899179db87099_crop_632x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-28 08:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/testimonial/1f4ff3e280695b675b0899179db87099_crop_632x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-28 08:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/testimonial/1f4ff3e280695b675b0899179db87099_crop_632x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-28 08:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/testimonial/1f4ff3e280695b675b0899179db87099_crop_632x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-28 08:59:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/testimonial/1f4ff3e280695b675b0899179db87099_crop_632x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-28 08:59:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/testimonial/1f4ff3e280695b675b0899179db87099_crop_632x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-28 08:59:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/testimonial/1f4ff3e280695b675b0899179db87099_crop_632x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-28 08:59:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/testimonial/1f4ff3e280695b675b0899179db87099_crop_632x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-28 08:59:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/testimonial/1f4ff3e280695b675b0899179db87099_crop_632x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-28 08:59:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/testimonial/1f4ff3e280695b675b0899179db87099_crop_632x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-28 08:59:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/testimonial/1f4ff3e280695b675b0899179db87099_crop_632x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-28 08:59:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/testimonial/1f4ff3e280695b675b0899179db87099_crop_632x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-28 08:59:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/testimonial/1f4ff3e280695b675b0899179db87099_crop_632x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-28 08:59:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/testimonial/1f4ff3e280695b675b0899179db87099_crop_632x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-28 08:59:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/1f4ff3e280695b675b0899179db87099.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-28 08:59:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/1f4ff3e280695b675b0899179db87099.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-28 09:06:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: testimoni ~ MODPATH/_modules/site/views/site/testimonial_detail_page.php [ 63 ]
2014-04-28 09:06:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: testimoni ~ MODPATH/_modules/site/views/site/testimonial_detail_page.php [ 63 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/testimonial_detail_page.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 63, Array)
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
2014-04-28 20:00:29 --- ERROR: ErrorException [ 2 ]: preg_replace(): Unknown modifier '/' ~ MODPATH/_modules/site/views/site/home_page.php [ 66 ]
2014-04-28 20:00:29 --- STRACE: ErrorException [ 2 ]: preg_replace(): Unknown modifier '/' ~ MODPATH/_modules/site/views/site/home_page.php [ 66 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Volumes/Data/w...', 66, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(66): preg_replace('/((https?://)|(...', '<center><iframe...', 'www.youtube.com...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(151): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Themes_Default->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-28 20:24:47 --- ERROR: ErrorException [ 2 ]: preg_replace(): Compilation failed: missing ) at offset 127 ~ MODPATH/_modules/site/views/site/home_page.php [ 74 ]
2014-04-28 20:24:47 --- STRACE: ErrorException [ 2 ]: preg_replace(): Compilation failed: missing ) at offset 127 ~ MODPATH/_modules/site/views/site/home_page.php [ 74 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Volumes/Data/w...', 74, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(74): preg_replace('%((https|http):...', '<center><iframe...', 'www.youtube.com...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(151): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Themes_Default->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-28 20:26:31 --- ERROR: ErrorException [ 2 ]: preg_replace(): Compilation failed: unmatched parentheses at offset 98 ~ MODPATH/_modules/site/views/site/home_page.php [ 75 ]
2014-04-28 20:26:31 --- STRACE: ErrorException [ 2 ]: preg_replace(): Compilation failed: unmatched parentheses at offset 98 ~ MODPATH/_modules/site/views/site/home_page.php [ 75 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Volumes/Data/w...', 75, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(75): preg_replace('%(?:http(?:s)?:...', '<center><iframe...', 'www.youtube.com...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(151): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Themes_Default->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-28 20:53:10 --- ERROR: ErrorException [ 2 ]: preg_replace(): Compilation failed: unmatched parentheses at offset 214 ~ MODPATH/_modules/site/views/site/home_page.php [ 66 ]
2014-04-28 20:53:10 --- STRACE: ErrorException [ 2 ]: preg_replace(): Compilation failed: unmatched parentheses at offset 214 ~ MODPATH/_modules/site/views/site/home_page.php [ 66 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Volumes/Data/w...', 66, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(66): preg_replace('~(?:http|https|...', '<center><iframe...', 'www.youtube.com...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(151): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Themes_Default->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-28 20:53:29 --- ERROR: ErrorException [ 2 ]: preg_replace(): Compilation failed: unmatched parentheses at offset 214 ~ MODPATH/_modules/site/views/site/home_page.php [ 66 ]
2014-04-28 20:53:29 --- STRACE: ErrorException [ 2 ]: preg_replace(): Compilation failed: unmatched parentheses at offset 214 ~ MODPATH/_modules/site/views/site/home_page.php [ 66 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Volumes/Data/w...', 66, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(66): preg_replace('~(?:http|https|...', '<center><iframe...', 'www.youtube.com...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(151): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Themes_Default->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-28 20:55:30 --- ERROR: ErrorException [ 2 ]: preg_replace(): Compilation failed: nothing to repeat at offset 207 ~ MODPATH/_modules/site/views/site/home_page.php [ 66 ]
2014-04-28 20:55:30 --- STRACE: ErrorException [ 2 ]: preg_replace(): Compilation failed: nothing to repeat at offset 207 ~ MODPATH/_modules/site/views/site/home_page.php [ 66 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Volumes/Data/w...', 66, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(66): preg_replace('~(?:http|https|...', '<center><iframe...', 'www.youtube.com...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(151): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Themes_Default->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-28 20:56:37 --- ERROR: ErrorException [ 2 ]: preg_replace(): Compilation failed: nothing to repeat at offset 217 ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 59 ]
2014-04-28 20:56:37 --- STRACE: ErrorException [ 2 ]: preg_replace(): Compilation failed: nothing to repeat at offset 217 ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 59 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Volumes/Data/w...', 59, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_view.php(59): preg_replace('~(?:http|https|...', '<iframe width="...', '<iframe width="...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#10 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(65): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#16 {main}
2014-04-28 20:56:42 --- ERROR: ErrorException [ 2 ]: preg_replace(): Compilation failed: nothing to repeat at offset 216 ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 59 ]
2014-04-28 20:56:42 --- STRACE: ErrorException [ 2 ]: preg_replace(): Compilation failed: nothing to repeat at offset 216 ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 59 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Volumes/Data/w...', 59, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_view.php(59): preg_replace('~(?:http|https|...', '<iframe width="...', '<iframe width="...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#10 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(65): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#16 {main}
2014-04-28 21:04:28 --- ERROR: ErrorException [ 2 ]: preg_replace(): Compilation failed: nothing to repeat at offset 169 ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 59 ]
2014-04-28 21:04:28 --- STRACE: ErrorException [ 2 ]: preg_replace(): Compilation failed: nothing to repeat at offset 169 ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 59 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Volumes/Data/w...', 59, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_view.php(59): preg_replace('~(?:http|https|...', '<iframe width="...', '<iframe width="...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#10 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(65): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#16 {main}
2014-04-28 21:04:36 --- ERROR: ErrorException [ 2 ]: preg_replace(): Compilation failed: nothing to repeat at offset 170 ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 59 ]
2014-04-28 21:04:36 --- STRACE: ErrorException [ 2 ]: preg_replace(): Compilation failed: nothing to repeat at offset 170 ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 59 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Volumes/Data/w...', 59, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_view.php(59): preg_replace('~(?:http|https|...', '<iframe width="...', '<iframe width="...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#10 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(65): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#16 {main}
2014-04-28 21:04:40 --- ERROR: ErrorException [ 2 ]: preg_replace(): Compilation failed: nothing to repeat at offset 171 ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 59 ]
2014-04-28 21:04:40 --- STRACE: ErrorException [ 2 ]: preg_replace(): Compilation failed: nothing to repeat at offset 171 ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 59 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Volumes/Data/w...', 59, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_view.php(59): preg_replace('~(?:http|https|...', '<iframe width="...', '<iframe width="...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#10 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(65): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#16 {main}
2014-04-28 21:04:46 --- ERROR: ErrorException [ 2 ]: preg_replace(): Compilation failed: nothing to repeat at offset 1 ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 59 ]
2014-04-28 21:04:46 --- STRACE: ErrorException [ 2 ]: preg_replace(): Compilation failed: nothing to repeat at offset 1 ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 59 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Volumes/Data/w...', 59, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_view.php(59): preg_replace('~|?:src(?:http|...', '<iframe width="...', '<iframe width="...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#10 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(65): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#16 {main}
2014-04-28 21:04:52 --- ERROR: ErrorException [ 2 ]: preg_replace(): Compilation failed: nothing to repeat at offset 0 ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 59 ]
2014-04-28 21:04:52 --- STRACE: ErrorException [ 2 ]: preg_replace(): Compilation failed: nothing to repeat at offset 0 ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 59 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Volumes/Data/w...', 59, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_view.php(59): preg_replace('~?:src|(?:http|...', '<iframe width="...', '<iframe width="...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#10 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(65): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#16 {main}
2014-04-28 21:04:57 --- ERROR: ErrorException [ 2 ]: preg_replace(): Compilation failed: nothing to repeat at offset 0 ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 59 ]
2014-04-28 21:04:57 --- STRACE: ErrorException [ 2 ]: preg_replace(): Compilation failed: nothing to repeat at offset 0 ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 59 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Volumes/Data/w...', 59, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_view.php(59): preg_replace('~?:iframe|(?:ht...', '<iframe width="...', '<iframe width="...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#10 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(65): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#16 {main}
2014-04-28 21:20:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: products ~ MODPATH/_modules/product/views/product/backend/product_edit.php [ 249 ]
2014-04-28 21:20:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: products ~ MODPATH/_modules/product/views/product/backend/product_edit.php [ 249 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_edit.php(249): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 249, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-28 21:30:56 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 19 ]
2014-04-28 21:30:56 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}