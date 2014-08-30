<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-09 16:56:37 --- ERROR: Kohana_Exception [ 0 ]: Directory DOCROOT/uploads/reseller/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
2014-07-09 16:56:37 --- STRACE: Kohana_Exception [ 0 ]: Directory DOCROOT/uploads/reseller/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(251): Kohana_Upload::save(Array, 'e3738daf693e561...', '/Volumes/Data/w...', 493)
#1 [internal function]: Controller_Backend_Reseller->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-09 17:36:01 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadFile::$id ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 144 ]
2014-07-09 17:36:01 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadFile::$id ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 144 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadfile.php(144): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 144, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(775): Model_DownloadFile->update()
#2 [internal function]: Controller_Backend_DownloadFile->action_delete()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-09 17:36:11 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 211 ]
2014-07-09 17:36:11 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 211 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(211): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 211, Array)
#1 [internal function]: Controller_Backend_DownloadFile->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}