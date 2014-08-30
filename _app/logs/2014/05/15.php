<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-15 20:52:13 --- ERROR: ErrorException [ 8 ]: Use of undefined constant LANGUAGE - assumed 'LANGUAGE' ~ APPPATH/classes/controller/themes/default.php [ 44 ]
2014-05-15 20:52:13 --- STRACE: ErrorException [ 8 ]: Use of undefined constant LANGUAGE - assumed 'LANGUAGE' ~ APPPATH/classes/controller/themes/default.php [ 44 ]
--
#0 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(44): Kohana_Core::error_handler(8, 'Use of undefine...', '/Volumes/Data/w...', 44, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#2 [internal function]: Controller_Home->before()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}