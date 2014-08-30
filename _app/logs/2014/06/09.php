<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-09 16:08:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication/redirect was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-09 16:08:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication/redirect was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-09 16:08:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication/redirect was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-09 16:08:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication/redirect was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-09 19:05:28 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Translation::$value ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 224 ]
2014-06-09 19:05:28 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Translation::$value ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 224 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(224): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 224, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-09 19:05:29 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Translation::$value ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 224 ]
2014-06-09 19:05:29 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Translation::$value ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 224 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(224): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 224, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-09 19:05:40 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Translation::$value ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 224 ]
2014-06-09 19:05:40 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Translation::$value ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 224 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(224): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 224, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->action_translate()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}