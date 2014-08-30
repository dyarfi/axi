<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-21 02:25:42 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-21 02:25:42 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-21 02:27:30 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-21 02:27:30 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-21 03:13:59 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-21 03:13:59 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-21 03:16:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-21 03:16:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#3 {main}
2014-08-21 15:07:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-21 15:07:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#3 {main}
2014-08-21 15:23:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-21 15:23:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#3 {main}
2014-08-21 16:56:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_CareerFile' not found ~ MODPATH/_modules/user/classes/model/modulelist.php [ 155 ]
2014-08-21 16:56:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_CareerFile' not found ~ MODPATH/_modules/user/classes/model/modulelist.php [ 155 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-21 16:56:30 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/defaultadmin.php [ 65 ]
2014-08-21 16:56:30 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/defaultadmin.php [ 65 ]
--
#0 /Volumes/Data/www/axi/_app/views/themes/defaultadmin.php(65): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 65, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(108): Kohana_Controller_Template->after()
#5 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(63): Controller_Themes_DefaultAdmin->after()
#6 [internal function]: Controller_Backend_BaseAdmin->after()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_User))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#11 {main}
2014-08-21 17:06:33 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::clear_cache() ~ MODPATH/_modules/career/classes/model/career.php [ 176 ]
2014-08-21 17:06:33 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::clear_cache() ~ MODPATH/_modules/career/classes/model/career.php [ 176 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-21 17:06:45 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::clear_cache() ~ MODPATH/_modules/career/classes/model/career.php [ 176 ]
2014-08-21 17:06:45 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::clear_cache() ~ MODPATH/_modules/career/classes/model/career.php [ 176 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}