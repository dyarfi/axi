<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-23 00:41:36 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 189 ]
2014-05-23 00:41:36 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 189 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(189): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 189, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 00:42:20 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 189 ]
2014-05-23 00:42:20 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 189 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(189): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 189, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 01:17:56 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Translation::$lang_id ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 172 ]
2014-05-23 01:17:56 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Translation::$lang_id ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 172 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(172): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 172, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 01:23:25 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 63 ]
2014-05-23 01:23:25 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 63 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(63): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 63, Array)
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
2014-05-23 01:23:32 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 63 ]
2014-05-23 01:23:32 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 63 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(63): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 63, Array)
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
2014-05-23 01:24:31 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 63 ]
2014-05-23 01:24:31 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 63 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(63): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 63, Array)
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
2014-05-23 01:27:58 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 68 ]
2014-05-23 01:27:58 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 68 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(68): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 68, Array)
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
2014-05-23 01:28:08 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 68 ]
2014-05-23 01:28:08 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 68 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(68): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 68, Array)
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
2014-05-23 01:28:11 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 68 ]
2014-05-23 01:28:11 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 68 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(68): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 68, Array)
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
2014-05-23 01:28:19 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 68 ]
2014-05-23 01:28:19 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 68 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(68): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 68, Array)
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
2014-05-23 01:28:23 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 68 ]
2014-05-23 01:28:23 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 68 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(68): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 68, Array)
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
2014-05-23 01:31:11 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Translation as array ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 62 ]
2014-05-23 01:31:11 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Translation as array ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 62 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-23 01:31:45 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 63 ]
2014-05-23 01:31:45 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 63 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(63): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 63, Array)
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
2014-05-23 01:31:58 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 64 ]
2014-05-23 01:31:58 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 64 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(64): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 64, Array)
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
2014-05-23 01:32:18 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 62 ]
2014-05-23 01:32:18 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 62 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(62): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 62, Array)
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
2014-05-23 01:32:40 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 62 ]
2014-05-23 01:32:40 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 62 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(62): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 62, Array)
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
2014-05-23 01:33:44 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 66 ]
2014-05-23 01:33:44 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 66 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(66): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 66, Array)
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
2014-05-23 01:37:21 --- ERROR: Kohana_Exception [ 0 ]: Config group must be a string ~ SYSPATH/classes/kohana/config.php [ 97 ]
2014-05-23 01:37:21 --- STRACE: Kohana_Exception [ 0 ]: Config group must be a string ~ SYSPATH/classes/kohana/config.php [ 97 ]
--
#0 /Volumes/Data/www/offistarindo/_app/classes/lib.php(24): Kohana_Config->load(Object(Model_TranslationTable))
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(100): Lib::config(Object(Model_TranslationTable))
#2 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-23 01:39:28 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Translation as array ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 172 ]
2014-05-23 01:39:28 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Translation as array ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 172 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-23 01:40:01 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Translation::$subject ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 177 ]
2014-05-23 01:40:01 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Translation::$subject ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 177 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(177): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 177, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 01:40:18 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Translation as array ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 176 ]
2014-05-23 01:40:18 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Translation as array ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 176 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-23 01:42:16 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Translation::$subject ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 179 ]
2014-05-23 01:42:16 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Translation::$subject ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 179 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(179): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 179, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 01:42:39 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Translation::$subject ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 180 ]
2014-05-23 01:42:39 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Translation::$subject ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 180 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(180): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 180, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 01:42:47 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Translation::$subject ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 180 ]
2014-05-23 01:42:47 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Translation::$subject ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 180 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(180): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 180, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 01:43:26 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Translation::$subject ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 180 ]
2014-05-23 01:43:26 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Translation::$subject ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 180 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(180): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 180, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 01:43:54 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Translation::$subject ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 180 ]
2014-05-23 01:43:54 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Translation::$subject ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 180 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(180): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 180, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 01:44:04 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Translation::$subject ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 180 ]
2014-05-23 01:44:04 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Translation::$subject ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 180 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(180): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 180, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 01:45:02 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Translation::$subject ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 180 ]
2014-05-23 01:45:02 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Translation::$subject ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 180 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(180): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 180, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 01:45:08 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Translation::$subject ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 180 ]
2014-05-23 01:45:08 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Translation::$subject ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 180 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(180): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 180, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 01:45:15 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Translation::$subject ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 180 ]
2014-05-23 01:45:15 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Translation::$subject ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 180 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(180): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 180, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 01:54:32 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 69 ]
2014-05-23 01:54:32 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 69 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(69): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 69, Array)
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
2014-05-23 01:59:53 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 183 ]
2014-05-23 01:59:53 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 183 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(183): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 183, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 02:00:00 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 183 ]
2014-05-23 02:00:00 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 183 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(183): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 183, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 02:04:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: params ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 188 ]
2014-05-23 02:04:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: params ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 188 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(188): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 188, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 02:04:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: params ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 188 ]
2014-05-23 02:04:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: params ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 188 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(188): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 188, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 02:23:08 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 189 ]
2014-05-23 02:23:08 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 189 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(189): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Volumes/Data/w...', 189, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 02:29:41 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 77 ]
2014-05-23 02:29:41 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 77 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(77): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 77, Array)
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
2014-05-23 02:39:40 --- ERROR: ErrorException [ 8 ]: Undefined index: field ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 77 ]
2014-05-23 02:39:40 --- STRACE: ErrorException [ 8 ]: Undefined index: field ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 77 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(77): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 77, Array)
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
2014-05-23 02:39:56 --- ERROR: ErrorException [ 8 ]: Undefined index: field ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 77 ]
2014-05-23 02:39:56 --- STRACE: ErrorException [ 8 ]: Undefined index: field ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 77 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(77): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 77, Array)
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
2014-05-23 02:40:07 --- ERROR: ErrorException [ 8 ]: Undefined index: field ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 77 ]
2014-05-23 02:40:07 --- STRACE: ErrorException [ 8 ]: Undefined index: field ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 77 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(77): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 77, Array)
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
2014-05-23 02:47:39 --- ERROR: Database_Exception [ 1054 ]: Unknown column '0' in 'where clause' [ SELECT * FROM `tbl_language_translations` WHERE `table_id` = '2' AND `field_id` = '11' AND `0` = 'la' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-23 02:47:39 --- STRACE: Database_Exception [ 1054 ]: Unknown column '0' in 'where clause' [ SELECT * FROM `tbl_language_translations` WHERE `table_id` = '2' AND `field_id` = '11' AND `0` = 'la' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/translation.php(199): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(168): Model_Translation->find(Array)
#2 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-23 02:47:52 --- ERROR: Database_Exception [ 1054 ]: Unknown column '0' in 'where clause' [ SELECT * FROM `tbl_language_translations` WHERE `table_id` = '2' AND `field_id` = '11' AND `0` = 'la' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-23 02:47:52 --- STRACE: Database_Exception [ 1054 ]: Unknown column '0' in 'where clause' [ SELECT * FROM `tbl_language_translations` WHERE `table_id` = '2' AND `field_id` = '11' AND `0` = 'la' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/translation.php(199): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(168): Model_Translation->find(Array)
#2 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-23 02:48:05 --- ERROR: Database_Exception [ 1054 ]: Unknown column '0' in 'where clause' [ SELECT * FROM `tbl_language_translations` WHERE `table_id` = '2' AND `field_id` = '11' AND `0` = 'la' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-23 02:48:05 --- STRACE: Database_Exception [ 1054 ]: Unknown column '0' in 'where clause' [ SELECT * FROM `tbl_language_translations` WHERE `table_id` = '2' AND `field_id` = '11' AND `0` = 'la' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/translation.php(199): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(168): Model_Translation->find(Array)
#2 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-23 02:48:48 --- ERROR: Database_Exception [ 1054 ]: Unknown column '0' in 'where clause' [ SELECT * FROM `tbl_language_translations` WHERE `table_id` = '2' AND `field_id` = '11' AND `0` = 'la' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-23 02:48:48 --- STRACE: Database_Exception [ 1054 ]: Unknown column '0' in 'where clause' [ SELECT * FROM `tbl_language_translations` WHERE `table_id` = '2' AND `field_id` = '11' AND `0` = 'la' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/translation.php(199): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(168): Model_Translation->find(Array)
#2 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-23 02:48:52 --- ERROR: Database_Exception [ 1054 ]: Unknown column '0' in 'where clause' [ SELECT * FROM `tbl_language_translations` WHERE `table_id` = '2' AND `field_id` = '11' AND `0` = 'la' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-23 02:48:52 --- STRACE: Database_Exception [ 1054 ]: Unknown column '0' in 'where clause' [ SELECT * FROM `tbl_language_translations` WHERE `table_id` = '2' AND `field_id` = '11' AND `0` = 'la' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/translation.php(199): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(168): Model_Translation->find(Array)
#2 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-23 02:49:09 --- ERROR: Database_Exception [ 1054 ]: Unknown column '0' in 'where clause' [ SELECT * FROM `tbl_language_translations` WHERE `table_id` = '2' AND `field_id` = '11' AND `0` = 'la' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-23 02:49:09 --- STRACE: Database_Exception [ 1054 ]: Unknown column '0' in 'where clause' [ SELECT * FROM `tbl_language_translations` WHERE `table_id` = '2' AND `field_id` = '11' AND `0` = 'la' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/translation.php(199): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(168): Model_Translation->find(Array)
#2 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-23 02:49:15 --- ERROR: Database_Exception [ 1054 ]: Unknown column '0' in 'where clause' [ SELECT * FROM `tbl_language_translations` WHERE `table_id` = '2' AND `field_id` = '11' AND `0` = 'la' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-23 02:49:15 --- STRACE: Database_Exception [ 1054 ]: Unknown column '0' in 'where clause' [ SELECT * FROM `tbl_language_translations` WHERE `table_id` = '2' AND `field_id` = '11' AND `0` = 'la' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/translation.php(199): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(168): Model_Translation->find(Array)
#2 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-23 02:53:02 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'language_id' in 'where clause' [ SELECT * FROM `tbl_languages` WHERE `status` = '1' AND `default` != '1' AND `language_id` IN ('2') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-23 02:53:02 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'language_id' in 'where clause' [ SELECT * FROM `tbl_languages` WHERE `status` = '1' AND `default` != '1' AND `language_id` IN ('2') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/language.php(211): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(88): Model_Language->find(Array)
#2 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-23 03:00:31 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 170 ]
2014-05-23 03:00:31 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 170 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-23 03:00:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 170 ]
2014-05-23 03:00:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 170 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-23 03:00:49 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 191 ]
2014-05-23 03:00:49 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 191 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(191): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 191, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 03:00:54 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 191 ]
2014-05-23 03:00:54 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 191 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(191): Kohana_Core::error_handler(2, 'Creating defaul...', '/Volumes/Data/w...', 191, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 03:01:36 --- ERROR: ErrorException [ 1 ]: Call to undefined function object() ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 170 ]
2014-05-23 03:01:36 --- STRACE: ErrorException [ 1 ]: Call to undefined function object() ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 170 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-23 03:01:39 --- ERROR: ErrorException [ 8 ]: Use of undefined constant object - assumed 'object' ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 170 ]
2014-05-23 03:01:39 --- STRACE: ErrorException [ 8 ]: Use of undefined constant object - assumed 'object' ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 170 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(170): Kohana_Core::error_handler(8, 'Use of undefine...', '/Volumes/Data/w...', 170, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 03:01:43 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 191 ]
2014-05-23 03:01:43 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 191 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(191): Kohana_Core::error_handler(2, 'Creating defaul...', '/Volumes/Data/w...', 191, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 03:01:56 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 191 ]
2014-05-23 03:01:56 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 191 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(191): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 191, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 03:03:24 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Translation as array ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 69 ]
2014-05-23 03:03:24 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Translation as array ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 69 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-23 03:03:31 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Translation as array ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 69 ]
2014-05-23 03:03:31 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Translation as array ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 69 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-23 03:15:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: i ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 87 ]
2014-05-23 03:15:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: i ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(87): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 87, Array)
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
2014-05-23 03:15:28 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 87 ]
2014-05-23 03:15:28 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(87): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 87, Array)
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
2014-05-23 03:15:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: i ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 123 ]
2014-05-23 03:15:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: i ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 123 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(123): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 123, Array)
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
2014-05-23 03:16:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: detail ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 87 ]
2014-05-23 03:16:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: detail ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(87): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 87, Array)
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
2014-05-23 03:16:46 --- ERROR: ErrorException [ 1 ]: Cannot use [] for reading ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 87 ]
2014-05-23 03:16:46 --- STRACE: ErrorException [ 1 ]: Cannot use [] for reading ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 87 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-23 03:16:52 --- ERROR: ErrorException [ 8 ]: Undefined index:  ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 87 ]
2014-05-23 03:16:52 --- STRACE: ErrorException [ 8 ]: Undefined index:  ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(87): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 87, Array)
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
2014-05-23 03:17:30 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 67 ]
2014-05-23 03:17:30 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 67 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(67): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 67, Array)
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
2014-05-23 03:17:50 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 67 ]
2014-05-23 03:17:50 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 67 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(67): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 67, Array)
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
2014-05-23 03:18:22 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 67 ]
2014-05-23 03:18:22 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 67 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(67): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 67, Array)
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
2014-05-23 03:18:28 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 67 ]
2014-05-23 03:18:28 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 67 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(67): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 67, Array)
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
2014-05-23 03:19:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: detail ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 87 ]
2014-05-23 03:19:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: detail ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(87): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 87, Array)
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
2014-05-23 03:20:32 --- ERROR: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 88 ]
2014-05-23 03:20:32 --- STRACE: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 88 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(88): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 88, Array)
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
2014-05-23 03:21:22 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'type' ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 89 ]
2014-05-23 03:21:22 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'type' ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 89 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(89): Kohana_Core::error_handler(2, 'Illegal string ...', '/Volumes/Data/w...', 89, Array)
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
2014-05-23 03:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/admin-cp/language/aupdate_all/2/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 03:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/admin-cp/language/aupdate_all/2/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-05-23 03:48:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/admin-cp/language/aupdate_all/3/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 03:48:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/admin-cp/language/aupdate_all/3/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-05-23 03:52:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/admin-cp/language/aupdate_all/3/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 03:52:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/admin-cp/language/aupdate_all/3/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-05-23 03:52:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/admin-cp/language/aupdate_all/3/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 03:52:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/admin-cp/language/aupdate_all/3/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-05-23 03:52:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/admin-cp/language/view/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 03:52:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/admin-cp/language/view/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-05-23 03:52:42 --- ERROR: ErrorException [ 1 ]: Class 'Helper_Common' not found ~ MODPATH/_modules/language/views/language/backend/language_view.php [ 24 ]
2014-05-23 03:52:42 --- STRACE: ErrorException [ 1 ]: Class 'Helper_Common' not found ~ MODPATH/_modules/language/views/language/backend/language_view.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-23 03:53:05 --- ERROR: ErrorException [ 2 ]: date() expects parameter 2 to be long, string given ~ MODPATH/_modules/language/views/language/backend/language_view.php [ 24 ]
2014-05-23 03:53:05 --- STRACE: ErrorException [ 2 ]: date() expects parameter 2 to be long, string given ~ MODPATH/_modules/language/views/language/backend/language_view.php [ 24 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'date() expects ...', '/Volumes/Data/w...', 24, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/language_view.php(24): date('56565656', 'd F Y')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Themes_DefaultAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Language))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-05-23 03:53:28 --- ERROR: ErrorException [ 2 ]: date() expects parameter 2 to be long, string given ~ MODPATH/_modules/language/views/language/backend/language_view.php [ 24 ]
2014-05-23 03:53:28 --- STRACE: ErrorException [ 2 ]: date() expects parameter 2 to be long, string given ~ MODPATH/_modules/language/views/language/backend/language_view.php [ 24 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'date() expects ...', '/Volumes/Data/w...', 24, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/language_view.php(24): date('116331281608', 'd F Y')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Themes_DefaultAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Language))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-05-23 03:55:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/admin-cp/language/aupdate_all/1/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 03:55:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/admin-cp/language/aupdate_all/1/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-05-23 03:55:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/admin-cp/language/aupdate_all/1/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 03:55:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/admin-cp/language/aupdate_all/1/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-05-23 03:59:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: params2 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 121 ]
2014-05-23 03:59:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: params2 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 121 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(121): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 121, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 04:11:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: details ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 143 ]
2014-05-23 04:11:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: details ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 143 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(143): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 143, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 04:14:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: details ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 143 ]
2014-05-23 04:14:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: details ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 143 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(143): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 143, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 04:20:09 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 144 ]
2014-05-23 04:20:09 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 144 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(144): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Volumes/Data/w...', 144, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 04:24:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: params ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 221 ]
2014-05-23 04:24:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: params ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 221 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(221): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 221, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 04:25:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: params ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 221 ]
2014-05-23 04:25:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: params ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 221 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(221): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 221, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 04:41:11 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 92 ]
2014-05-23 04:41:11 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 92 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(92): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 92, Array)
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
2014-05-23 04:42:46 --- ERROR: ErrorException [ 8 ]: Undefined offset: 4 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 92 ]
2014-05-23 04:42:46 --- STRACE: ErrorException [ 8 ]: Undefined offset: 4 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 92 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(92): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 92, Array)
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
2014-05-23 04:44:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 101 ]
2014-05-23 04:44:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 101 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-23 04:50:19 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 70 ]
2014-05-23 04:50:19 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 70 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(70): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 70, Array)
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
2014-05-23 04:51:40 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 71 ]
2014-05-23 04:51:40 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 71 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(71): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 71, Array)
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
2014-05-23 04:53:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 138 ]
2014-05-23 04:53:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 138 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-23 04:55:12 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 88 ]
2014-05-23 04:55:12 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 88 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(88): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 88, Array)
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
2014-05-23 05:04:52 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 87 ]
2014-05-23 05:04:52 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(87): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 87, Array)
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
2014-05-23 05:19:24 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 170 ]
2014-05-23 05:19:24 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 170 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-23 05:22:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: params2 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 170 ]
2014-05-23 05:22:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: params2 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 170 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(170): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 170, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 05:22:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: params2 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 169 ]
2014-05-23 05:22:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: params2 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 169 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(169): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 169, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 05:23:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: params2 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 169 ]
2014-05-23 05:23:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: params2 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 169 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(169): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 169, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 05:24:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: params2 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 183 ]
2014-05-23 05:24:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: params2 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 183 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(183): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 183, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 05:24:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: params2 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 183 ]
2014-05-23 05:24:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: params2 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 183 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(183): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 183, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 05:25:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: params2 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 183 ]
2014-05-23 05:25:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: params2 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 183 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(183): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 183, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 05:25:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: params2 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 183 ]
2014-05-23 05:25:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: params2 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 183 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(183): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 183, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 05:26:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: obj ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 172 ]
2014-05-23 05:26:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: obj ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 172 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(172): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 172, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 05:26:21 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ INSERT INTO `tbl_language_translations` (`language_id`, `table_id`, `field`, `value`, `added`, `modified`, `subject`, `id`, `synopsis`, `text`) VALUES ('1', '', 0, '', 1400797581, 0, 'Test English', '91', '\n	Test English\n', '\n	&nbsp;&nbsp;&nbsp;Test English\n') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-23 05:26:21 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ INSERT INTO `tbl_language_translations` (`language_id`, `table_id`, `field`, `value`, `added`, `modified`, `subject`, `id`, `synopsis`, `text`) VALUES ('1', '', 0, '', 1400797581, 0, 'Test English', '91', '\n	Test English\n', '\n	&nbsp;&nbsp;&nbsp;Test English\n') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `tb...', false, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/translation.php(117): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(172): Model_Translation->add(Array)
#3 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-23 05:41:19 --- ERROR: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 171 ]
2014-05-23 05:41:19 --- STRACE: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 171 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(171): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 171, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 05:41:43 --- ERROR: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 171 ]
2014-05-23 05:41:43 --- STRACE: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 171 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(171): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 171, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 05:45:55 --- ERROR: ErrorException [ 8 ]: Undefined index: table_id ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 168 ]
2014-05-23 05:45:55 --- STRACE: ErrorException [ 8 ]: Undefined index: table_id ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 168 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(168): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 168, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 05:46:11 --- ERROR: ErrorException [ 8 ]: Undefined index: table_id ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 168 ]
2014-05-23 05:46:11 --- STRACE: ErrorException [ 8 ]: Undefined index: table_id ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 168 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(168): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 168, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 05:46:25 --- ERROR: ErrorException [ 8 ]: Undefined index: table_id ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 168 ]
2014-05-23 05:46:25 --- STRACE: ErrorException [ 8 ]: Undefined index: table_id ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 168 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(168): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 168, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 05:46:47 --- ERROR: ErrorException [ 8 ]: Undefined index: field ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 170 ]
2014-05-23 05:46:47 --- STRACE: ErrorException [ 8 ]: Undefined index: field ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 170 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(170): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 170, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 05:47:16 --- ERROR: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 171 ]
2014-05-23 05:47:16 --- STRACE: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 171 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(171): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 171, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 05:49:41 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ INSERT INTO `tbl_language_translations` (`language_id`, `table_id`, `field`, `value`, `added`, `modified`, `id`, `subject`, `synopsis`, `text`) VALUES ('1', '', 0, '', 1400798981, 0, '', 'Test English 11', '\n	Test English 11\n', '\n	Test English 11\n') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-23 05:49:41 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ INSERT INTO `tbl_language_translations` (`language_id`, `table_id`, `field`, `value`, `added`, `modified`, `id`, `subject`, `synopsis`, `text`) VALUES ('1', '', 0, '', 1400798981, 0, '', 'Test English 11', '\n	Test English 11\n', '\n	Test English 11\n') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `tb...', false, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/translation.php(117): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(174): Model_Translation->add(Array)
#3 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-23 05:52:01 --- ERROR: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 163 ]
2014-05-23 05:52:01 --- STRACE: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(163): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 05:53:56 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ INSERT INTO `tbl_language_translations` (`language_id`, `table_id`, `field`, `value`, `added`, `modified`, `id`, `subject`, `synopsis`, `text`) VALUES ('1', '', 0, '', 1400799236, 0, '', 'Test English 11', '\n	Test English 11\n', '\n	Test English 11\n') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-23 05:53:56 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ INSERT INTO `tbl_language_translations` (`language_id`, `table_id`, `field`, `value`, `added`, `modified`, `id`, `subject`, `synopsis`, `text`) VALUES ('1', '', 0, '', 1400799236, 0, '', 'Test English 11', '\n	Test English 11\n', '\n	Test English 11\n') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `tb...', false, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/translation.php(117): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(178): Model_Translation->add(Array)
#3 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-23 05:54:53 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ INSERT INTO `tbl_language_translations` (`language_id`, `table_id`, `field`, `value`, `added`, `modified`, ``) VALUES (0, '', 0, '', 1400799293, 0, ((NULL, NULL, '2', '11', 'subject', NULL))) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-23 05:54:53 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ INSERT INTO `tbl_language_translations` (`language_id`, `table_id`, `field`, `value`, `added`, `modified`, ``) VALUES (0, '', 0, '', 1400799293, 0, ((NULL, NULL, '2', '11', 'subject', NULL))) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `tb...', false, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/translation.php(117): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(187): Model_Translation->add(Array)
#3 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-23 05:55:07 --- ERROR: Database_Exception [ 1048 ]: Column 'language_id' cannot be null [ INSERT INTO `tbl_language_translations` (`language_id`, `table_id`, `field`, `value`, `added`, `modified`, `id`, `field_id`) VALUES (NULL, '2', 'subject', NULL, 1400799307, 0, NULL, '11') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-23 05:55:07 --- STRACE: Database_Exception [ 1048 ]: Column 'language_id' cannot be null [ INSERT INTO `tbl_language_translations` (`language_id`, `table_id`, `field`, `value`, `added`, `modified`, `id`, `field_id`) VALUES (NULL, '2', 'subject', NULL, 1400799307, 0, NULL, '11') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `tb...', false, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/translation.php(117): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(187): Model_Translation->add(Array)
#3 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-23 05:55:16 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ INSERT INTO `tbl_language_translations` (`language_id`, `table_id`, `field`, `value`, `added`, `modified`, `0`) VALUES (0, '', 0, '', 1400799316, 0, (NULL, NULL, '2', '11', 'subject', NULL)) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-23 05:55:16 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ INSERT INTO `tbl_language_translations` (`language_id`, `table_id`, `field`, `value`, `added`, `modified`, `0`) VALUES (0, '', 0, '', 1400799316, 0, (NULL, NULL, '2', '11', 'subject', NULL)) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `tb...', false, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/translation.php(117): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(187): Model_Translation->add(Array)
#3 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-23 05:55:32 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ INSERT INTO `tbl_language_translations` (`language_id`, `table_id`, `field`, `value`, `added`, `modified`, `0`) VALUES (0, '', 0, '', 1400799332, 0, ('', '1', '2', '11', 'subject', 'Test English 11')) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-23 05:55:32 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ INSERT INTO `tbl_language_translations` (`language_id`, `table_id`, `field`, `value`, `added`, `modified`, `0`) VALUES (0, '', 0, '', 1400799332, 0, ('', '1', '2', '11', 'subject', 'Test English 11')) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `tb...', false, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/translation.php(117): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(187): Model_Translation->add(Array)
#3 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-23 12:18:05 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `tbl_language_translations` SET `id` = '115', `language_id` = '1', `table_id` = '2', `field` = ('1', '115', 'Test English 14', '\n	Test English 14\n', '\n	Test English 14\n'), `value` = 'Test English 14', `added` = 0, `modified` = 1400822285 WHERE `id` = '115' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-23 12:18:05 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `tbl_language_translations` SET `id` = '115', `language_id` = '1', `table_id` = '2', `field` = ('1', '115', 'Test English 14', '\n	Test English 14\n', '\n	Test English 14\n'), `value` = 'Test English 14', `added` = 0, `modified` = 1400822285 WHERE `id` = '115' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `tbl_lan...', false, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/translation.php(133): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(122): Model_Translation->update()
#3 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-23 12:20:56 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `tbl_language_translations` SET `id` = '121', `language_id` = '1', `table_id` = '2', `field` = ('1', '121', 'Test English 14 Subject', '\n	Test English 14 Synopsis\n', '\n	Test English 14 Text\n'), `value` = 'Test English 14 Subject', `added` = 0, `modified` = 1400822456 WHERE `id` = '121' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-23 12:20:56 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `tbl_language_translations` SET `id` = '121', `language_id` = '1', `table_id` = '2', `field` = ('1', '121', 'Test English 14 Subject', '\n	Test English 14 Synopsis\n', '\n	Test English 14 Text\n'), `value` = 'Test English 14 Subject', `added` = 0, `modified` = 1400822456 WHERE `id` = '121' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `tbl_lan...', false, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/translation.php(133): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(122): Model_Translation->update()
#3 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-23 12:21:58 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ']' ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 120 ]
2014-05-23 12:21:58 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ']' ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 120 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-23 12:33:25 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Translation::$id ~ MODPATH/_modules/language/classes/model/translation.php [ 133 ]
2014-05-23 12:33:25 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Translation::$id ~ MODPATH/_modules/language/classes/model/translation.php [ 133 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/translation.php(133): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 133, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(140): Model_Translation->update(Array)
#2 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-23 12:34:00 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Translation::$id ~ MODPATH/_modules/language/classes/model/translation.php [ 133 ]
2014-05-23 12:34:00 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Translation::$id ~ MODPATH/_modules/language/classes/model/translation.php [ 133 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/translation.php(133): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 133, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(143): Model_Translation->update(Array)
#2 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-23 12:35:49 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'id' ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 136 ]
2014-05-23 12:35:49 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'id' ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 136 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(136): Kohana_Core::error_handler(2, 'Illegal string ...', '/Volumes/Data/w...', 136, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 12:36:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: array ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 136 ]
2014-05-23 12:36:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: array ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 136 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(136): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 136, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 12:37:46 --- ERROR: ErrorException [ 8 ]: Undefined offset: 121 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 137 ]
2014-05-23 12:37:46 --- STRACE: ErrorException [ 8 ]: Undefined offset: 121 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 137 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(137): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 137, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 12:37:50 --- ERROR: ErrorException [ 8 ]: Undefined offset: 121 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 137 ]
2014-05-23 12:37:50 --- STRACE: ErrorException [ 8 ]: Undefined offset: 121 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 137 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(137): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 137, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 12:38:20 --- ERROR: ErrorException [ 8 ]: Undefined offset: 121 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 137 ]
2014-05-23 12:38:20 --- STRACE: ErrorException [ 8 ]: Undefined offset: 121 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 137 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(137): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 137, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 12:38:35 --- ERROR: ErrorException [ 8 ]: Undefined offset: 121 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 137 ]
2014-05-23 12:38:35 --- STRACE: ErrorException [ 8 ]: Undefined offset: 121 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 137 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(137): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 137, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 12:38:45 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 137 ]
2014-05-23 12:38:45 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 137 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(137): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 137, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 12:45:55 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 69 ]
2014-05-23 12:45:55 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 69 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(69): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 69, Array)
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
2014-05-23 12:46:07 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 69 ]
2014-05-23 12:46:07 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 69 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(69): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 69, Array)
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
2014-05-23 12:46:24 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 69 ]
2014-05-23 12:46:24 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 69 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(69): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 69, Array)
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
2014-05-23 12:46:35 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 69 ]
2014-05-23 12:46:35 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 69 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(69): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 69, Array)
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
2014-05-23 12:46:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 72 ]
2014-05-23 12:46:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 72 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-23 12:52:20 --- ERROR: ErrorException [ 8 ]: Use of undefined constant parray - assumed 'parray' ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 139 ]
2014-05-23 12:52:20 --- STRACE: ErrorException [ 8 ]: Use of undefined constant parray - assumed 'parray' ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 139 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(139): Kohana_Core::error_handler(8, 'Use of undefine...', '/Volumes/Data/w...', 139, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 12:55:09 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Translation::$id ~ MODPATH/_modules/language/classes/model/translation.php [ 133 ]
2014-05-23 12:55:09 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Translation::$id ~ MODPATH/_modules/language/classes/model/translation.php [ 133 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/translation.php(133): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 133, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(148): Model_Translation->update(Array)
#2 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-23 12:55:27 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Translation::$id ~ MODPATH/_modules/language/classes/model/translation.php [ 133 ]
2014-05-23 12:55:27 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Translation::$id ~ MODPATH/_modules/language/classes/model/translation.php [ 133 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/translation.php(133): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 133, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(148): Model_Translation->update(Array)
#2 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-23 12:55:43 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Translation::$id ~ MODPATH/_modules/language/classes/model/translation.php [ 133 ]
2014-05-23 12:55:43 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Translation::$id ~ MODPATH/_modules/language/classes/model/translation.php [ 133 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/translation.php(133): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 133, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(148): Model_Translation->update(Array)
#2 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-23 13:15:22 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ']' ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 113 ]
2014-05-23 13:15:22 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ']' ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 113 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-23 13:15:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: _fields ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 124 ]
2014-05-23 13:15:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: _fields ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 124 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(124): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 124, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 13:16:56 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 113 ]
2014-05-23 13:16:56 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 113 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(113): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Volumes/Data/w...', 113, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 13:20:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: _fields ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 129 ]
2014-05-23 13:20:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: _fields ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 129 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(129): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 129, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 13:20:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: _fields ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 129 ]
2014-05-23 13:20:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: _fields ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 129 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(129): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 129, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 13:21:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: _fields ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 129 ]
2014-05-23 13:21:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: _fields ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 129 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(129): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 129, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-23 13:25:56 --- ERROR: ErrorException [ 8 ]: Undefined index: field ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 129 ]
2014-05-23 13:25:56 --- STRACE: ErrorException [ 8 ]: Undefined index: field ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 129 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(129): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 129, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}