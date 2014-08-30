<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-21 01:28:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 51 ]
2014-05-21 01:28:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 51 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 51, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-21 01:28:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 51 ]
2014-05-21 01:28:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 51 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 51, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-21 01:28:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 51 ]
2014-05-21 01:28:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 51 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 51, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-21 01:29:33 --- ERROR: View_Exception [ 0 ]: The requested view languagetranslate/backend/languagetranslate_add could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-05-21 01:29:33 --- STRACE: View_Exception [ 0 ]: The requested view languagetranslate/backend/languagetranslate_add could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('languagetransla...')
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(30): Kohana_View->__construct('languagetransla...', NULL)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(106): Kohana_View::factory('languagetransla...')
#3 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-21 01:30:28 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 112 ]
2014-05-21 01:30:28 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 112 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(112): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 112, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-21 01:30:37 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 112 ]
2014-05-21 01:30:37 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 112 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(112): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 112, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-21 01:31:17 --- ERROR: ErrorException [ 1 ]: Call to undefined method View::auto_render() ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 113 ]
2014-05-21 01:31:17 --- STRACE: ErrorException [ 1 ]: Call to undefined method View::auto_render() ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 113 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-21 01:31:23 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Backend_LanguageTranslate::auto_render() ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 113 ]
2014-05-21 01:31:23 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Backend_LanguageTranslate::auto_render() ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 113 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-21 03:19:49 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 111 ]
2014-05-21 03:19:49 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(111): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 111, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-21 03:20:09 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 111 ]
2014-05-21 03:20:09 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(111): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 111, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-21 03:20:20 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 111 ]
2014-05-21 03:20:20 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(111): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 111, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-21 05:19:27 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 112 ]
2014-05-21 05:19:27 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 112 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(112): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 112, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-21 05:28:43 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 112 ]
2014-05-21 05:28:43 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 112 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(112): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 112, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-21 05:29:58 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 112 ]
2014-05-21 05:29:58 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 112 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(112): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 112, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-21 05:38:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: languages ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 19 ]
2014-05-21 05:38:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: languages ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 19 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 19, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadminblank.php(31): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadminblank.php(102): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdminBlank->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-05-21 05:39:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: languages ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 19 ]
2014-05-21 05:39:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: languages ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 19 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 19, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadminblank.php(31): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadminblank.php(102): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdminBlank->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-05-21 05:39:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: arr_status ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 22 ]
2014-05-21 05:39:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: arr_status ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 22 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 22, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadminblank.php(31): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadminblank.php(102): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdminBlank->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-05-21 05:39:28 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be of the type array, string given, called in /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php on line 22 and defined ~ SYSPATH/classes/kohana/form.php [ 252 ]
2014-05-21 05:39:28 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be of the type array, string given, called in /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php on line 22 and defined ~ SYSPATH/classes/kohana/form.php [ 252 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/form.php(252): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Volumes/Data/w...', 252, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(22): Kohana_Form::select('status', '1', '')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadminblank.php(31): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadminblank.php(102): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Themes_DefaultAdminBlank->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-05-21 05:39:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: arr_status ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 22 ]
2014-05-21 05:39:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: arr_status ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 22 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 22, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadminblank.php(31): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadminblank.php(102): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdminBlank->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-05-21 05:39:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: arr_status ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 24 ]
2014-05-21 05:39:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: arr_status ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 24 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 24, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadminblank.php(31): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadminblank.php(102): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdminBlank->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-05-21 05:40:46 --- ERROR: ErrorException [ 2 ]: ucfirst() expects parameter 1 to be string, object given ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 20 ]
2014-05-21 05:40:46 --- STRACE: ErrorException [ 2 ]: ucfirst() expects parameter 1 to be string, object given ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 20 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'ucfirst() expec...', '/Volumes/Data/w...', 20, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(20): ucfirst(Object(Model_Language))
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadminblank.php(31): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadminblank.php(102): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Themes_DefaultAdminBlank->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-05-21 05:42:06 --- ERROR: ErrorException [ 2 ]: ucfirst() expects parameter 1 to be string, object given ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 23 ]
2014-05-21 05:42:06 --- STRACE: ErrorException [ 2 ]: ucfirst() expects parameter 1 to be string, object given ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 23 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'ucfirst() expec...', '/Volumes/Data/w...', 23, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(23): ucfirst(Object(Model_Language))
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadminblank.php(31): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadminblank.php(102): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Themes_DefaultAdminBlank->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-05-21 05:43:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 7 ]
2014-05-21 05:43:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadminblank.php(31): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadminblank.php(102): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdminBlank->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-05-21 05:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL assets/images/languages/bec6305f820a223aabecfd8917560243a was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-21 05:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL assets/images/languages/bec6305f820a223aabecfd8917560243a was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-05-21 05:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL assets/images/languages/bec6305f820a223aabecfd8917560243a was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-21 05:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL assets/images/languages/bec6305f820a223aabecfd8917560243a was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-05-21 14:04:29 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 113 ]
2014-05-21 14:04:29 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 113 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(113): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 113, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}