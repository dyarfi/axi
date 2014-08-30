<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-10 02:58:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: _fields ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 122 ]
2014-06-10 02:58:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: _fields ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 122 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(122): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 122, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 03:19:44 --- ERROR: ErrorException [ 1 ]: [] operator not supported for strings ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 125 ]
2014-06-10 03:19:44 --- STRACE: ErrorException [ 1 ]: [] operator not supported for strings ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 125 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-10 03:43:55 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/_modules/language/views/language/backend/languagetranslate_form.php [ 68 ]
2014-06-10 03:43:55 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/_modules/language/views/language/backend/languagetranslate_form.php [ 68 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_form.php(68): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 68, Array)
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
2014-06-10 03:51:15 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_form.php [ 68 ]
2014-06-10 03:51:15 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_form.php [ 68 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_form.php(68): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 68, Array)
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
2014-06-10 03:51:18 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_form.php [ 68 ]
2014-06-10 03:51:18 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_form.php [ 68 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_form.php(68): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 68, Array)
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
2014-06-10 03:51:33 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_form.php [ 68 ]
2014-06-10 03:51:33 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_form.php [ 68 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_form.php(68): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 68, Array)
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
2014-06-10 03:51:34 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_form.php [ 68 ]
2014-06-10 03:51:34 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_form.php [ 68 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_form.php(68): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 68, Array)
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
2014-06-10 03:52:00 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_form.php [ 68 ]
2014-06-10 03:52:00 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_form.php [ 68 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_form.php(68): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 68, Array)
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
2014-06-10 04:02:43 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_form.php [ 71 ]
2014-06-10 04:02:43 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/language/views/language/backend/languagetranslate_form.php [ 71 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_form.php(71): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 71, Array)
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
2014-06-10 04:03:04 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/views/language/backend/languagetranslate_form.php [ 73 ]
2014-06-10 04:03:04 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/views/language/backend/languagetranslate_form.php [ 73 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_form.php(73): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 73, Array)
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
2014-06-10 04:03:16 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/views/language/backend/languagetranslate_form.php [ 73 ]
2014-06-10 04:03:16 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/views/language/backend/languagetranslate_form.php [ 73 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_form.php(73): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 73, Array)
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
2014-06-10 04:03:36 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/views/language/backend/languagetranslate_form.php [ 73 ]
2014-06-10 04:03:36 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/views/language/backend/languagetranslate_form.php [ 73 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_form.php(73): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 73, Array)
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
2014-06-10 04:04:30 --- ERROR: ErrorException [ 8 ]: Undefined index: content ~ MODPATH/_modules/language/views/language/backend/languagetranslate_form.php [ 73 ]
2014-06-10 04:04:30 --- STRACE: ErrorException [ 8 ]: Undefined index: content ~ MODPATH/_modules/language/views/language/backend/languagetranslate_form.php [ 73 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_form.php(73): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 73, Array)
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
2014-06-10 04:11:57 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ']' ~ MODPATH/_modules/language/views/language/backend/languagetranslate_form.php [ 71 ]
2014-06-10 04:11:57 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ']' ~ MODPATH/_modules/language/views/language/backend/languagetranslate_form.php [ 71 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-10 04:13:14 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/_modules/language/views/language/backend/languagetranslate_form.php [ 77 ]
2014-06-10 04:13:14 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/_modules/language/views/language/backend/languagetranslate_form.php [ 77 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_form.php(77): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 77, Array)
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
2014-06-10 04:15:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: i ~ MODPATH/_modules/language/views/language/backend/languagetranslate_form.php [ 126 ]
2014-06-10 04:15:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: i ~ MODPATH/_modules/language/views/language/backend/languagetranslate_form.php [ 126 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_form.php(126): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 126, Array)
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
2014-06-10 04:26:28 --- ERROR: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 177 ]
2014-06-10 04:26:28 --- STRACE: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 177 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(177): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 177, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 04:27:45 --- ERROR: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 177 ]
2014-06-10 04:27:45 --- STRACE: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 177 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(177): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 177, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 04:27:50 --- ERROR: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 177 ]
2014-06-10 04:27:50 --- STRACE: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 177 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(177): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 177, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 04:27:56 --- ERROR: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 177 ]
2014-06-10 04:27:56 --- STRACE: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 177 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(177): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 177, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 04:28:30 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 128 ]
2014-06-10 04:28:30 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 128 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(128): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 128, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 04:32:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: i ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 121 ]
2014-06-10 04:32:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: i ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 121 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(121): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 121, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 04:38:08 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'id' ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 133 ]
2014-06-10 04:38:08 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'id' ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 133 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(133): Kohana_Core::error_handler(2, 'Illegal string ...', '/Volumes/Data/w...', 133, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 04:38:36 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'id' ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 133 ]
2014-06-10 04:38:36 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'id' ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 133 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(133): Kohana_Core::error_handler(2, 'Illegal string ...', '/Volumes/Data/w...', 133, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 04:38:59 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'id' ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 132 ]
2014-06-10 04:38:59 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'id' ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 132 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(132): Kohana_Core::error_handler(2, 'Illegal string ...', '/Volumes/Data/w...', 132, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 04:40:08 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'id' ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 132 ]
2014-06-10 04:40:08 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'id' ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 132 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(132): Kohana_Core::error_handler(2, 'Illegal string ...', '/Volumes/Data/w...', 132, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 04:41:40 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ']' ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 130 ]
2014-06-10 04:41:40 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ']' ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 130 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-10 04:48:57 --- ERROR: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 126 ]
2014-06-10 04:48:57 --- STRACE: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 126 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(126): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 126, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 04:49:01 --- ERROR: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 126 ]
2014-06-10 04:49:01 --- STRACE: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 126 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(126): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 126, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 04:50:03 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 127 ]
2014-06-10 04:50:03 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 127 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(127): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 127, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 04:50:33 --- ERROR: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 127 ]
2014-06-10 04:50:33 --- STRACE: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 127 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(127): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 127, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 04:50:38 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 127 ]
2014-06-10 04:50:38 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 127 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(127): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 127, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 04:51:23 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 128 ]
2014-06-10 04:51:23 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 128 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(128): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 128, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 04:53:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: col ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 138 ]
2014-06-10 04:53:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: col ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 138 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(138): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 138, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 04:53:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: col ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 138 ]
2014-06-10 04:53:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: col ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 138 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(138): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 138, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 04:54:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: col ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 138 ]
2014-06-10 04:54:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: col ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 138 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(138): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 138, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 04:54:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: col ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 138 ]
2014-06-10 04:54:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: col ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 138 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(138): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 138, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 04:58:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: col ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 138 ]
2014-06-10 04:58:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: col ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 138 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(138): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 138, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 04:58:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: col ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 138 ]
2014-06-10 04:58:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: col ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 138 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(138): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 138, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 05:16:31 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'print_r' (T_STRING) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 100 ]
2014-06-10 05:16:31 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'print_r' (T_STRING) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 100 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-10 05:19:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: table ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 182 ]
2014-06-10 05:19:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: table ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 182 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(182): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 182, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 05:20:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 213 ]
2014-06-10 05:20:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 213 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(213): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 213, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 05:20:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 213 ]
2014-06-10 05:20:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 213 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(213): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 213, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 05:21:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 214 ]
2014-06-10 05:21:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 214 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(214): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 214, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 05:21:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: table_fields ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 216 ]
2014-06-10 05:21:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: table_fields ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 216 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(216): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 216, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 05:22:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 217 ]
2014-06-10 05:22:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 217 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(217): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 217, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 05:22:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 218 ]
2014-06-10 05:22:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 218 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(218): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 218, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 05:22:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 218 ]
2014-06-10 05:22:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 218 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(218): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 218, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 05:22:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 218 ]
2014-06-10 05:22:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 218 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(218): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 218, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 05:22:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 218 ]
2014-06-10 05:22:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 218 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(218): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 218, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 05:22:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 218 ]
2014-06-10 05:22:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 218 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(218): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 218, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 05:22:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 218 ]
2014-06-10 05:22:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 218 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(218): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 218, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 05:23:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 218 ]
2014-06-10 05:23:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 218 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(218): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 218, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 05:23:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 217 ]
2014-06-10 05:23:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 217 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(217): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 217, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 05:23:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 218 ]
2014-06-10 05:23:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 218 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(218): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 218, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 05:24:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 218 ]
2014-06-10 05:24:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 218 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(218): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 218, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 05:29:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 215 ]
2014-06-10 05:29:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 215 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(215): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 215, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 05:29:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 215 ]
2014-06-10 05:29:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 215 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(215): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 215, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 05:29:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 215 ]
2014-06-10 05:29:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 215 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(215): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 215, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 05:33:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 217 ]
2014-06-10 05:33:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 217 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(217): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 217, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 05:34:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 217 ]
2014-06-10 05:34:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 217 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(217): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 217, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 05:34:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 217 ]
2014-06-10 05:34:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 217 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(217): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 217, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 05:34:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 217 ]
2014-06-10 05:34:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 217 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(217): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 217, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 05:34:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 217 ]
2014-06-10 05:34:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 217 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(217): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 217, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 05:34:49 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_News::$id ~ MODPATH/_modules/news/classes/model/news.php [ 82 ]
2014-06-10 05:34:49 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_News::$id ~ MODPATH/_modules/news/classes/model/news.php [ 82 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/model/news.php(82): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 82, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(102): Model_News->load()
#2 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-10 05:34:57 --- ERROR: ErrorException [ 1 ]: Function name must be a string ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 101 ]
2014-06-10 05:34:57 --- STRACE: ErrorException [ 1 ]: Function name must be a string ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 101 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-10 05:35:03 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_News::$id ~ MODPATH/_modules/news/classes/model/news.php [ 82 ]
2014-06-10 05:35:03 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_News::$id ~ MODPATH/_modules/news/classes/model/news.php [ 82 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/model/news.php(82): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 82, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(102): Model_News->load()
#2 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-10 05:35:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 217 ]
2014-06-10 05:35:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 217 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(217): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 217, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 05:36:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 218 ]
2014-06-10 05:36:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 218 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(218): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 218, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 05:37:07 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 103 ]
2014-06-10 05:37:07 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 103 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(103): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 103, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 05:37:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 218 ]
2014-06-10 05:37:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 218 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(218): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 218, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 05:37:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$content_vars' (T_VARIABLE), expecting function (T_FUNCTION) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 217 ]
2014-06-10 05:37:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$content_vars' (T_VARIABLE), expecting function (T_FUNCTION) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 217 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-10 05:37:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$content_vars' (T_VARIABLE), expecting function (T_FUNCTION) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 217 ]
2014-06-10 05:37:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$content_vars' (T_VARIABLE), expecting function (T_FUNCTION) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 217 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-10 05:37:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$content_vars' (T_VARIABLE), expecting function (T_FUNCTION) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 215 ]
2014-06-10 05:37:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$content_vars' (T_VARIABLE), expecting function (T_FUNCTION) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 215 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-10 05:38:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$content_vars' (T_VARIABLE), expecting function (T_FUNCTION) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 215 ]
2014-06-10 05:38:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$content_vars' (T_VARIABLE), expecting function (T_FUNCTION) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 215 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-10 05:38:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$content_vars' (T_VARIABLE), expecting function (T_FUNCTION) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 215 ]
2014-06-10 05:38:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$content_vars' (T_VARIABLE), expecting function (T_FUNCTION) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 215 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-10 05:38:43 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$content_vars' (T_VARIABLE), expecting function (T_FUNCTION) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 215 ]
2014-06-10 05:38:43 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$content_vars' (T_VARIABLE), expecting function (T_FUNCTION) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 215 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-10 05:38:43 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$content_vars' (T_VARIABLE), expecting function (T_FUNCTION) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 215 ]
2014-06-10 05:38:43 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$content_vars' (T_VARIABLE), expecting function (T_FUNCTION) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 215 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-10 05:38:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$content_vars' (T_VARIABLE), expecting function (T_FUNCTION) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 215 ]
2014-06-10 05:38:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$content_vars' (T_VARIABLE), expecting function (T_FUNCTION) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 215 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-10 05:38:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$content_vars' (T_VARIABLE), expecting function (T_FUNCTION) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 215 ]
2014-06-10 05:38:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$content_vars' (T_VARIABLE), expecting function (T_FUNCTION) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 215 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-10 05:38:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$content_vars' (T_VARIABLE), expecting function (T_FUNCTION) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 215 ]
2014-06-10 05:38:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$content_vars' (T_VARIABLE), expecting function (T_FUNCTION) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 215 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-10 05:39:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$content_vars' (T_VARIABLE), expecting function (T_FUNCTION) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 213 ]
2014-06-10 05:39:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$content_vars' (T_VARIABLE), expecting function (T_FUNCTION) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 213 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-10 05:39:09 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$content_vars' (T_VARIABLE), expecting function (T_FUNCTION) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 213 ]
2014-06-10 05:39:09 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$content_vars' (T_VARIABLE), expecting function (T_FUNCTION) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 213 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-10 06:02:14 --- ERROR: ErrorException [ 4096 ]: Object of class Model_News could not be converted to string ~ MODPATH/_modules/language/views/language/backend/languagetranslate_form.php [ 23 ]
2014-06-10 06:02:14 --- STRACE: ErrorException [ 4096 ]: Object of class Model_News could not be converted to string ~ MODPATH/_modules/language/views/language/backend/languagetranslate_form.php [ 23 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_form.php(23): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 23, Array)
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
2014-06-10 06:45:35 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 183 ]
2014-06-10 06:45:35 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 183 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(183): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 183, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 06:45:55 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 183 ]
2014-06-10 06:45:55 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 183 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(183): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 183, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 06:46:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 213 ]
2014-06-10 06:46:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 213 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(213): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 213, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 06:47:24 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 182 ]
2014-06-10 06:47:24 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 182 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(182): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 182, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 06:48:14 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 182 ]
2014-06-10 06:48:14 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 182 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(182): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 182, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 06:48:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 182 ]
2014-06-10 06:48:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 182 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-10 06:50:40 --- ERROR: ErrorException [ 8 ]: Undefined index:  translate ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 114 ]
2014-06-10 06:50:40 --- STRACE: ErrorException [ 8 ]: Undefined index:  translate ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 114 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(114): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 114, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 06:50:57 --- ERROR: ErrorException [ 1 ]: Call to a member function load() on a non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 109 ]
2014-06-10 06:50:57 --- STRACE: ErrorException [ 1 ]: Call to a member function load() on a non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 109 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-10 06:53:19 --- ERROR: ErrorException [ 8 ]: Undefined index:  translate ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 113 ]
2014-06-10 06:53:19 --- STRACE: ErrorException [ 8 ]: Undefined index:  translate ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 113 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(113): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 113, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-10 07:04:32 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_Cookie::get(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php on line 13 and defined ~ SYSPATH/classes/kohana/cookie.php [ 55 ]
2014-06-10 07:04:32 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_Cookie::get(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php on line 13 and defined ~ SYSPATH/classes/kohana/cookie.php [ 55 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/cookie.php(55): Kohana_Core::error_handler(2, 'Missing argumen...', '/Volumes/Data/w...', 55, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(13): Kohana_Cookie::get()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(19): Model_Page->__construct()
#3 [internal function]: Controller_Home->before()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-10 07:04:54 --- ERROR: ErrorException [ 8 ]: Use of undefined constant Cookie - assumed 'Cookie' ~ MODPATH/_modules/page/classes/model/page.php [ 13 ]
2014-06-10 07:04:54 --- STRACE: ErrorException [ 8 ]: Use of undefined constant Cookie - assumed 'Cookie' ~ MODPATH/_modules/page/classes/model/page.php [ 13 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(13): Kohana_Core::error_handler(8, 'Use of undefine...', '/Volumes/Data/w...', 13, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(19): Model_Page->__construct()
#2 [internal function]: Controller_Home->before()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-10 07:06:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: this ~ MODPATH/_modules/page/classes/model/page.php [ 39 ]
2014-06-10 07:06:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: this ~ MODPATH/_modules/page/classes/model/page.php [ 39 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 39, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(25): Model_Page::instance()
#2 [internal function]: Controller_Home->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-10 07:06:16 --- ERROR: ErrorException [ 8 ]: Use of undefined constant self - assumed 'self' ~ MODPATH/_modules/page/classes/model/page.php [ 39 ]
2014-06-10 07:06:16 --- STRACE: ErrorException [ 8 ]: Use of undefined constant self - assumed 'self' ~ MODPATH/_modules/page/classes/model/page.php [ 39 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(39): Kohana_Core::error_handler(8, 'Use of undefine...', '/Volumes/Data/w...', 39, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(25): Model_Page::instance()
#2 [internal function]: Controller_Home->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-10 07:06:18 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ MODPATH/_modules/page/classes/model/page.php [ 39 ]
2014-06-10 07:06:18 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ MODPATH/_modules/page/classes/model/page.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-10 07:06:40 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/_modules/page/classes/model/page.php [ 39 ]
2014-06-10 07:06:40 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/_modules/page/classes/model/page.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-10 07:14:40 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Page::$id ~ MODPATH/_modules/page/classes/model/page.php [ 39 ]
2014-06-10 07:14:40 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Page::$id ~ MODPATH/_modules/page/classes/model/page.php [ 39 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 39, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Model_Page->__destruct()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#4 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#5 {main}
2014-06-10 07:14:44 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Page::$id ~ MODPATH/_modules/page/classes/model/page.php [ 39 ]
2014-06-10 07:14:44 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Page::$id ~ MODPATH/_modules/page/classes/model/page.php [ 39 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 39, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Model_Page->__destruct()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#4 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#5 {main}
2014-06-10 07:15:05 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/classes/model/page.php [ 39 ]
2014-06-10 07:15:05 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/classes/model/page.php [ 39 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(39): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 39, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(0): Model_Page->__destruct()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#3 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#4 {main}
2014-06-10 07:15:14 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/page/classes/model/page.php [ 39 ]
2014-06-10 07:15:14 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/page/classes/model/page.php [ 39 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 39, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Model_Page->__destruct()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#4 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#5 {main}
2014-06-10 07:15:21 --- ERROR: ErrorException [ 8 ]: Use of undefined constant name - assumed 'name' ~ MODPATH/_modules/page/classes/model/page.php [ 39 ]
2014-06-10 07:15:21 --- STRACE: ErrorException [ 8 ]: Use of undefined constant name - assumed 'name' ~ MODPATH/_modules/page/classes/model/page.php [ 39 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(39): Kohana_Core::error_handler(8, 'Use of undefine...', '/Volumes/Data/w...', 39, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(0): Model_Page->__destruct()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#3 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#4 {main}
2014-06-10 07:15:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: name ~ MODPATH/_modules/page/classes/model/page.php [ 39 ]
2014-06-10 07:15:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: name ~ MODPATH/_modules/page/classes/model/page.php [ 39 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 39, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(0): Model_Page->__destruct()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#3 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#4 {main}
2014-06-10 07:15:29 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/page/classes/model/page.php [ 39 ]
2014-06-10 07:15:29 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/page/classes/model/page.php [ 39 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 39, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Model_Page->__destruct()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#4 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#5 {main}
2014-06-10 07:15:40 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/page/classes/model/page.php [ 39 ]
2014-06-10 07:15:40 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/page/classes/model/page.php [ 39 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 39, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Model_Page->__destruct()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#4 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#5 {main}
2014-06-10 07:15:47 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/page/classes/model/page.php [ 39 ]
2014-06-10 07:15:47 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/page/classes/model/page.php [ 39 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 39, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Model_Page->__destruct()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#4 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#5 {main}
2014-06-10 07:15:49 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/page/classes/model/page.php [ 39 ]
2014-06-10 07:15:49 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/page/classes/model/page.php [ 39 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 39, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Model_Page->__destruct()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#4 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#5 {main}
2014-06-10 07:15:57 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/page/classes/model/page.php [ 39 ]
2014-06-10 07:15:57 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/page/classes/model/page.php [ 39 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 39, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Model_Page->__destruct()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#4 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#5 {main}
2014-06-10 07:16:00 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/page/classes/model/page.php [ 39 ]
2014-06-10 07:16:00 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/page/classes/model/page.php [ 39 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 39, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Model_Page->__destruct()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#4 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#5 {main}
2014-06-10 07:18:07 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/page/classes/model/page.php [ 40 ]
2014-06-10 07:18:07 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/page/classes/model/page.php [ 40 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(40): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 40, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Model_Page->__destruct()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#4 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#5 {main}
2014-06-10 07:18:17 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/page/classes/model/page.php [ 40 ]
2014-06-10 07:18:17 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/page/classes/model/page.php [ 40 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(40): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 40, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Model_Page->__destruct()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#4 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#5 {main}
2014-06-10 07:18:19 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/page/classes/model/page.php [ 40 ]
2014-06-10 07:18:19 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/page/classes/model/page.php [ 40 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(40): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 40, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Model_Page->__destruct()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#4 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#5 {main}
2014-06-10 07:18:22 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/page/classes/model/page.php [ 40 ]
2014-06-10 07:18:22 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/page/classes/model/page.php [ 40 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(40): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 40, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Model_Page->__destruct()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#4 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#5 {main}
2014-06-10 07:18:28 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/page/classes/model/page.php [ 40 ]
2014-06-10 07:18:28 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/page/classes/model/page.php [ 40 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(40): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 40, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Model_Page->__destruct()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#4 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#5 {main}
2014-06-10 07:18:30 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/page/classes/model/page.php [ 40 ]
2014-06-10 07:18:30 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/page/classes/model/page.php [ 40 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(40): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 40, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Model_Page->__destruct()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#4 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#5 {main}
2014-06-10 07:18:36 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/page/classes/model/page.php [ 40 ]
2014-06-10 07:18:36 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/page/classes/model/page.php [ 40 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(40): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 40, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Model_Page->__destruct()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#4 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#5 {main}
2014-06-10 07:19:58 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/page/classes/model/page.php [ 41 ]
2014-06-10 07:19:58 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/page/classes/model/page.php [ 41 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(41): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 41, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(0): Model_Page->__destruct()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#3 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#4 {main}
2014-06-10 07:21:27 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '{' ~ MODPATH/_modules/page/classes/model/page.php [ 41 ]
2014-06-10 07:21:27 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '{' ~ MODPATH/_modules/page/classes/model/page.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-10 07:21:47 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/classes/model/page.php [ 42 ]
2014-06-10 07:21:47 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/classes/model/page.php [ 42 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(42): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 42, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(0): Model_Page->__destruct()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#3 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#4 {main}
2014-06-10 07:26:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: val ~ MODPATH/_modules/page/classes/model/page.php [ 45 ]
2014-06-10 07:26:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: val ~ MODPATH/_modules/page/classes/model/page.php [ 45 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(0): Model_Page->__destruct()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#3 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#4 {main}
2014-06-10 07:26:33 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Page::$subject ~ MODPATH/_modules/page/classes/model/page.php [ 48 ]
2014-06-10 07:26:33 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Page::$subject ~ MODPATH/_modules/page/classes/model/page.php [ 48 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(48): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 48, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Model_Page->__destruct()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#4 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#5 {main}
2014-06-10 07:26:36 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Page::$subject ~ MODPATH/_modules/page/classes/model/page.php [ 48 ]
2014-06-10 07:26:36 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Page::$subject ~ MODPATH/_modules/page/classes/model/page.php [ 48 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(48): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 48, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Model_Page->__destruct()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#4 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#5 {main}
2014-06-10 07:27:57 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'print_r' (T_STRING) ~ MODPATH/_modules/page/classes/model/page.php [ 52 ]
2014-06-10 07:27:57 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'print_r' (T_STRING) ~ MODPATH/_modules/page/classes/model/page.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-10 07:29:20 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/page/classes/model/page.php [ 50 ]
2014-06-10 07:29:20 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/page/classes/model/page.php [ 50 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(50): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 50, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(0): Model_Page->__destruct()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#3 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#4 {main}
2014-06-10 07:31:22 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Page::array_keys() ~ MODPATH/_modules/page/classes/model/page.php [ 51 ]
2014-06-10 07:31:22 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Page::array_keys() ~ MODPATH/_modules/page/classes/model/page.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-10 07:32:58 --- ERROR: ErrorException [ 2 ]: array_merge(): Argument #1 is not an array ~ MODPATH/_modules/page/classes/model/page.php [ 52 ]
2014-06-10 07:32:58 --- STRACE: ErrorException [ 2 ]: array_merge(): Argument #1 is not an array ~ MODPATH/_modules/page/classes/model/page.php [ 52 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge(): ...', '/Volumes/Data/w...', 52, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(52): array_merge(Object(Model_Page), Array)
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(0): Model_Page->__destruct()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#4 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#5 {main}
2014-06-10 07:34:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '0' (T_LNUMBER), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ MODPATH/_modules/page/classes/model/page.php [ 45 ]
2014-06-10 07:34:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '0' (T_LNUMBER), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ MODPATH/_modules/page/classes/model/page.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-10 13:36:17 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Model_Page::$objects ~ MODPATH/_modules/page/classes/model/page.php [ 123 ]
2014-06-10 13:36:17 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Model_Page::$objects ~ MODPATH/_modules/page/classes/model/page.php [ 123 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-10 13:37:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: test ~ MODPATH/_modules/page/classes/model/page.php [ 51 ]
2014-06-10 13:37:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: test ~ MODPATH/_modules/page/classes/model/page.php [ 51 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 51, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(123): Model_Page->translate(Object(Model_Page))
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(25): Model_Page->load_by_name('about-us')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-10 13:37:37 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 51 ]
2014-06-10 13:37:37 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 51 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(51): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 51, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(74): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(80): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-10 13:40:29 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 51 ]
2014-06-10 13:40:29 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 51 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(51): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 51, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(74): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(80): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}