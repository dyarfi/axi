<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-22 14:44:36 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 54 ]
2014-05-22 14:44:36 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 54 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(54): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 54, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 14:45:52 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 55 ]
2014-05-22 14:45:52 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 55 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(55): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Volumes/Data/w...', 55, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 15:55:59 --- ERROR: ErrorException [ 8 ]: Undefined index: status ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 119 ]
2014-05-22 15:55:59 --- STRACE: ErrorException [ 8 ]: Undefined index: status ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 119 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 119, Array)
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
2014-05-22 15:56:02 --- ERROR: ErrorException [ 8 ]: Undefined index: status ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 119 ]
2014-05-22 15:56:02 --- STRACE: ErrorException [ 8 ]: Undefined index: status ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 119 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 119, Array)
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
2014-05-22 15:56:32 --- ERROR: ErrorException [ 8 ]: Undefined index: status ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 119 ]
2014-05-22 15:56:32 --- STRACE: ErrorException [ 8 ]: Undefined index: status ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 119 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 119, Array)
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
2014-05-22 16:19:05 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 37 ]
2014-05-22 16:19:05 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 37 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(37): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 37, Array)
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
2014-05-22 16:19:20 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 37 ]
2014-05-22 16:19:20 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 37 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(37): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 37, Array)
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
2014-05-22 16:44:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: type ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 47 ]
2014-05-22 16:44:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: type ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 47 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 47, Array)
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
2014-05-22 17:08:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(' ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 54 ]
2014-05-22 17:08:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(' ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 54 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-22 17:46:09 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'textarea' ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 71 ]
2014-05-22 17:46:09 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'textarea' ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 71 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(71): Kohana_Core::error_handler(2, 'Illegal string ...', '/Volumes/Data/w...', 71, Array)
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
2014-05-22 18:12:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: model ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 55 ]
2014-05-22 18:12:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: model ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 55 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 55, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 18:12:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '.' ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 53 ]
2014-05-22 18:12:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '.' ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 53 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-22 18:14:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: language ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 55 ]
2014-05-22 18:14:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: language ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 55 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 55, Array)
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
2014-05-22 18:27:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: table ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 53 ]
2014-05-22 18:27:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: table ~ MODPATH/_modules/language/views/language/backend/languagetranslate_add.php [ 53 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/views/language/backend/languagetranslate_add.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 53, Array)
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
2014-05-22 18:32:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 46 ]
2014-05-22 18:32:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 46 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 46, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 18:42:39 --- ERROR: ErrorException [ 8 ]: Undefined index: detail ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 47 ]
2014-05-22 18:42:39 --- STRACE: ErrorException [ 8 ]: Undefined index: detail ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 47 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(47): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 47, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 18:43:46 --- ERROR: ErrorException [ 2 ]: array_keys() expects parameter 1 to be array, string given ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 47 ]
2014-05-22 18:43:46 --- STRACE: ErrorException [ 2 ]: array_keys() expects parameter 1 to be array, string given ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_keys() ex...', '/Volumes/Data/w...', 47, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(47): array_keys('')
#2 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-22 18:43:52 --- ERROR: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, string given ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 47 ]
2014-05-22 18:43:52 --- STRACE: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, string given ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_values() ...', '/Volumes/Data/w...', 47, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(47): array_values('')
#2 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-22 18:44:56 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 47 ]
2014-05-22 18:44:56 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 47 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(47): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 47, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 18:45:16 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 47 ]
2014-05-22 18:45:16 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 47 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(47): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 47, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 18:45:34 --- ERROR: ErrorException [ 2 ]: array_keys() expects parameter 1 to be array, string given ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 47 ]
2014-05-22 18:45:34 --- STRACE: ErrorException [ 2 ]: array_keys() expects parameter 1 to be array, string given ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_keys() ex...', '/Volumes/Data/w...', 47, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(47): array_keys('')
#2 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-22 18:45:51 --- ERROR: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, string given ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 47 ]
2014-05-22 18:45:51 --- STRACE: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, string given ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_values() ...', '/Volumes/Data/w...', 47, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(47): array_values('')
#2 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-22 18:46:22 --- ERROR: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, string given ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 46 ]
2014-05-22 18:46:22 --- STRACE: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, string given ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 46 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_values() ...', '/Volumes/Data/w...', 46, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(46): array_values('table_id')
#2 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-22 18:46:31 --- ERROR: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, string given ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 46 ]
2014-05-22 18:46:31 --- STRACE: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, string given ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 46 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_values() ...', '/Volumes/Data/w...', 46, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(46): array_values('table_id')
#2 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-22 18:46:37 --- ERROR: ErrorException [ 2 ]: array_keys() expects parameter 1 to be array, string given ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 46 ]
2014-05-22 18:46:37 --- STRACE: ErrorException [ 2 ]: array_keys() expects parameter 1 to be array, string given ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 46 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_keys() ex...', '/Volumes/Data/w...', 46, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(46): array_keys('table_id')
#2 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-22 18:47:04 --- ERROR: ErrorException [ 2 ]: array_keys() expects parameter 1 to be array, string given ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 47 ]
2014-05-22 18:47:04 --- STRACE: ErrorException [ 2 ]: array_keys() expects parameter 1 to be array, string given ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_keys() ex...', '/Volumes/Data/w...', 47, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(47): array_keys('table_id')
#2 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-22 18:48:18 --- ERROR: ErrorException [ 2 ]: array_keys() expects parameter 1 to be array, string given ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 48 ]
2014-05-22 18:48:18 --- STRACE: ErrorException [ 2 ]: array_keys() expects parameter 1 to be array, string given ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 48 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_keys() ex...', '/Volumes/Data/w...', 48, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(48): array_keys('')
#2 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-22 18:48:23 --- ERROR: ErrorException [ 2 ]: array_keys() expects parameter 1 to be array, string given ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 48 ]
2014-05-22 18:48:23 --- STRACE: ErrorException [ 2 ]: array_keys() expects parameter 1 to be array, string given ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 48 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_keys() ex...', '/Volumes/Data/w...', 48, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(48): array_keys('')
#2 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-22 18:48:38 --- ERROR: ErrorException [ 2 ]: array_keys() expects parameter 1 to be array, string given ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 48 ]
2014-05-22 18:48:38 --- STRACE: ErrorException [ 2 ]: array_keys() expects parameter 1 to be array, string given ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 48 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_keys() ex...', '/Volumes/Data/w...', 48, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(48): array_keys('')
#2 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-22 18:48:47 --- ERROR: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, string given ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 48 ]
2014-05-22 18:48:47 --- STRACE: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, string given ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 48 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_values() ...', '/Volumes/Data/w...', 48, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(48): array_values('')
#2 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-22 18:50:48 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/classes/model/translationtable.php [ 158 ]
2014-05-22 18:50:48 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/classes/model/translationtable.php [ 158 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/translationtable.php(158): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 158, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/translationtable.php(53): Model_TranslationTable->find(Array, '', 1)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(45): Model_TranslationTable->load(Array)
#3 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-22 18:52:00 --- ERROR: ErrorException [ 1 ]: Cannot access protected property Model_TranslationTable::$table ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 44 ]
2014-05-22 18:52:00 --- STRACE: ErrorException [ 1 ]: Cannot access protected property Model_TranslationTable::$table ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-22 18:52:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: table ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 46 ]
2014-05-22 18:52:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: table ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 46 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 46, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 18:52:39 --- ERROR: ErrorException [ 1 ]: Cannot access protected property Model_TranslationTable::$table ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 45 ]
2014-05-22 18:52:39 --- STRACE: ErrorException [ 1 ]: Cannot access protected property Model_TranslationTable::$table ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-22 18:54:00 --- ERROR: ErrorException [ 8 ]: Undefined index: table_id ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 43 ]
2014-05-22 18:54:00 --- STRACE: ErrorException [ 8 ]: Undefined index: table_id ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 43 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(43): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 43, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 18:54:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: table ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 47 ]
2014-05-22 18:54:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: table ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 47 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 47, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 18:54:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: table ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 47 ]
2014-05-22 18:54:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: table ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 47 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 47, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 18:55:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: translate_table ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 45 ]
2014-05-22 18:55:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: translate_table ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 45 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 45, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 18:55:23 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 45 ]
2014-05-22 18:55:23 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 45 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(45): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 45, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 18:55:29 --- ERROR: ErrorException [ 8 ]: Undefined index:  table_translate ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 47 ]
2014-05-22 18:55:29 --- STRACE: ErrorException [ 8 ]: Undefined index:  table_translate ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 47 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(47): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 47, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 18:56:12 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_TranslationTable::$translate ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 43 ]
2014-05-22 18:56:12 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_TranslationTable::$translate ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 43 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(43): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 43, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 18:56:35 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 52 ]
2014-05-22 18:56:35 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 52 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(52): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 52, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 18:56:49 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 52 ]
2014-05-22 18:56:49 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 52 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(52): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 52, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 18:57:02 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 52 ]
2014-05-22 18:57:02 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 52 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(52): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 52, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 18:57:13 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 52 ]
2014-05-22 18:57:13 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 52 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(52): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 52, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 18:57:24 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 53 ]
2014-05-22 18:57:24 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 53 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(53): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 53, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 18:57:28 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 53 ]
2014-05-22 18:57:28 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 53 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(53): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 53, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 18:57:35 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 52 ]
2014-05-22 18:57:35 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 52 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(52): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 52, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 18:58:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: keys ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 52 ]
2014-05-22 18:58:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: keys ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 52 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 52, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 18:58:42 --- ERROR: ErrorException [ 8 ]: Undefined index: detail ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 54 ]
2014-05-22 18:58:42 --- STRACE: ErrorException [ 8 ]: Undefined index: detail ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 54 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(54): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 54, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 18:59:03 --- ERROR: ErrorException [ 8 ]: Undefined index: detail ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 54 ]
2014-05-22 18:59:03 --- STRACE: ErrorException [ 8 ]: Undefined index: detail ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 54 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(54): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 54, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 19:00:48 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 51 ]
2014-05-22 19:00:48 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 51 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(51): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 51, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 19:06:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: test ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 53 ]
2014-05-22 19:06:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: test ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 53 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 53, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 19:06:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: test ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 53 ]
2014-05-22 19:06:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: test ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 53 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 53, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 19:08:34 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 52 ]
2014-05-22 19:08:34 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 52 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(52): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 52, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 19:25:30 --- ERROR: ErrorException [ 1 ]: Call to undefined function array_value() ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 53 ]
2014-05-22 19:25:30 --- STRACE: ErrorException [ 1 ]: Call to undefined function array_value() ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 53 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-22 19:34:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: _fields ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 54 ]
2014-05-22 19:34:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: _fields ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 54 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 54, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 19:38:03 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 52 ]
2014-05-22 19:38:03 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 52 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(52): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Volumes/Data/w...', 52, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 19:41:41 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 54 ]
2014-05-22 19:41:41 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 54 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(54): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Volumes/Data/w...', 54, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 19:42:28 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 52 ]
2014-05-22 19:42:28 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 52 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(52): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Volumes/Data/w...', 52, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 19:42:33 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 52 ]
2014-05-22 19:42:33 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 52 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(52): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Volumes/Data/w...', 52, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 19:42:49 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 52 ]
2014-05-22 19:42:49 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 52 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(52): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Volumes/Data/w...', 52, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 19:42:56 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 52 ]
2014-05-22 19:42:56 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 52 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(52): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Volumes/Data/w...', 52, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 19:43:06 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 53 ]
2014-05-22 19:43:06 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 53 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(53): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Volumes/Data/w...', 53, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 19:44:15 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'print_r' (T_STRING) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 54 ]
2014-05-22 19:44:15 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'print_r' (T_STRING) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 54 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-22 19:44:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 54 ]
2014-05-22 19:44:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 54 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-22 19:45:42 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 53 ]
2014-05-22 19:45:42 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 53 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(53): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Volumes/Data/w...', 53, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 19:45:59 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 53 ]
2014-05-22 19:45:59 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 53 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(53): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Volumes/Data/w...', 53, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 19:47:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(string)' (string) (T_STRING_CAST) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 52 ]
2014-05-22 19:47:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(string)' (string) (T_STRING_CAST) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-22 19:47:06 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 52 ]
2014-05-22 19:47:06 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 52 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(52): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 52, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 19:47:10 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 52 ]
2014-05-22 19:47:10 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 52 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(52): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 52, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-22 19:47:58 --- ERROR: ErrorException [ 2 ]: array_combine(): Both parameters should have an equal number of elements ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 52 ]
2014-05-22 19:47:58 --- STRACE: ErrorException [ 2 ]: array_combine(): Both parameters should have an equal number of elements ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 52 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_combine()...', '/Volumes/Data/w...', 52, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(52): array_combine(Array, Array)
#2 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-22 19:48:19 --- ERROR: ErrorException [ 2 ]: array_keys() expects parameter 1 to be array, object given ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 48 ]
2014-05-22 19:48:19 --- STRACE: ErrorException [ 2 ]: array_keys() expects parameter 1 to be array, object given ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 48 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_keys() ex...', '/Volumes/Data/w...', 48, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(48): array_keys(Object(Config_Group))
#2 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-22 19:48:32 --- ERROR: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 52 ]
2014-05-22 19:48:32 --- STRACE: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 52 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge(): ...', '/Volumes/Data/w...', 52, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(52): array_merge(Array, Object(Config_Group))
#2 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-22 19:51:52 --- ERROR: ErrorException [ 1 ]: Call to undefined function array_key() ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 56 ]
2014-05-22 19:51:52 --- STRACE: ErrorException [ 1 ]: Call to undefined function array_key() ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-22 23:48:47 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ INSERT INTO `tbl_language_translations` (`language_id`, `table_id`, `field`, `value`, `added`, `modified`, `0`) VALUES (0, '', 0, '', 1400777327, 0, ('2', '2', '11', 'subject', 'asdasdasd indonesia')) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-22 23:48:47 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ INSERT INTO `tbl_language_translations` (`language_id`, `table_id`, `field`, `value`, `added`, `modified`, `0`) VALUES (0, '', 0, '', 1400777327, 0, ('2', '2', '11', 'subject', 'asdasdasd indonesia')) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `tb...', false, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/translation.php(117): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(60): Model_Translation->add(Array)
#3 [internal function]: Controller_Backend_LanguageTranslate->action_add()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-22 23:56:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 118 ]
2014-05-22 23:56:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 118 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-22 23:56:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$post' (T_VARIABLE) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 120 ]
2014-05-22 23:56:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$post' (T_VARIABLE) ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 120 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}