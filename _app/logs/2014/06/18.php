<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-18 00:04:20 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadFile::$update ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 845 ]
2014-06-18 00:04:20 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadFile::$update ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 845 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(845): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 845, Array)
#1 [internal function]: Controller_Backend_DownloadFile->action_order()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-18 00:11:06 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadFile::$update ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 845 ]
2014-06-18 00:11:06 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadFile::$update ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 845 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(845): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 845, Array)
#1 [internal function]: Controller_Backend_DownloadFile->action_order()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-18 01:22:31 --- ERROR: ErrorException [ 4096 ]: Object of class Model_DownloadFile could not be converted to string ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 196 ]
2014-06-18 01:22:31 --- STRACE: ErrorException [ 4096 ]: Object of class Model_DownloadFile could not be converted to string ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 196 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadfile.php(196): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 196, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadfile.php(68): Model_DownloadFile->find(Array, '', 1)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(765): Model_DownloadFile->load(Object(Model_DownloadFile))
#3 [internal function]: Controller_Backend_DownloadFile->action_delete()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-18 01:43:32 --- ERROR: ErrorException [ 8 ]: Use of undefined constant type_id - assumed 'type_id' ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 745 ]
2014-06-18 01:43:32 --- STRACE: ErrorException [ 8 ]: Use of undefined constant type_id - assumed 'type_id' ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 745 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(745): Kohana_Core::error_handler(8, 'Use of undefine...', '/Volumes/Data/w...', 745, Array)
#1 [internal function]: Controller_Backend_DownloadFile->action_delete()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-18 18:24:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication/redirect was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-18 18:24:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication/redirect was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-18 19:36:58 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 772 ]
2014-06-18 19:36:58 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 772 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(772): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 772, Array)
#1 [internal function]: Controller_Backend_DownloadFile->action_delete()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-18 23:56:45 --- ERROR: ErrorException [ 2 ]: preg_match(): Unknown modifier 'r' ~ APPPATH/classes/acl.php [ 52 ]
2014-06-18 23:56:45 --- STRACE: ErrorException [ 2 ]: preg_match(): Unknown modifier 'r' ~ APPPATH/classes/acl.php [ 52 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): U...', '/Volumes/Data/w...', 52, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/acl.php(52): preg_match('/admin-cp/resel...', 'admin-cp/')
#2 /Volumes/Data/www/offistarindo/_app/classes/acl.php(17): Acl->__construct()
#3 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(18): Acl::instance()
#4 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#5 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(23): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Reseller->before()
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#11 {main}
2014-06-18 23:57:38 --- ERROR: ErrorException [ 2 ]: preg_match(): Unknown modifier '/' ~ APPPATH/classes/acl.php [ 52 ]
2014-06-18 23:57:38 --- STRACE: ErrorException [ 2 ]: preg_match(): Unknown modifier '/' ~ APPPATH/classes/acl.php [ 52 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): U...', '/Volumes/Data/w...', 52, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/acl.php(52): preg_match('/^admin-cp//', '/admin-cp/resel...')
#2 /Volumes/Data/www/offistarindo/_app/classes/acl.php(17): Acl->__construct()
#3 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(18): Acl::instance()
#4 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#5 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(23): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Reseller->before()
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#11 {main}
2014-06-18 23:57:40 --- ERROR: ErrorException [ 2 ]: preg_match(): Unknown modifier '/' ~ APPPATH/classes/acl.php [ 52 ]
2014-06-18 23:57:40 --- STRACE: ErrorException [ 2 ]: preg_match(): Unknown modifier '/' ~ APPPATH/classes/acl.php [ 52 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): U...', '/Volumes/Data/w...', 52, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/acl.php(52): preg_match('/^admin-cp//', '/admin-cp/resel...')
#2 /Volumes/Data/www/offistarindo/_app/classes/acl.php(17): Acl->__construct()
#3 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(18): Acl::instance()
#4 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#5 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(23): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Reseller->before()
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#11 {main}
2014-06-18 23:57:53 --- ERROR: ErrorException [ 2 ]: preg_match(): Unknown modifier '/' ~ APPPATH/classes/acl.php [ 52 ]
2014-06-18 23:57:53 --- STRACE: ErrorException [ 2 ]: preg_match(): Unknown modifier '/' ~ APPPATH/classes/acl.php [ 52 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): U...', '/Volumes/Data/w...', 52, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/acl.php(52): preg_match('/^admin-cp///', '/admin-cp/resel...')
#2 /Volumes/Data/www/offistarindo/_app/classes/acl.php(17): Acl->__construct()
#3 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(18): Acl::instance()
#4 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#5 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(23): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Reseller->before()
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#11 {main}