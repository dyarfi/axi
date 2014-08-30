<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-01 01:57:15 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'asd LIMIT 16' at line 1 [ SELECT * FROM `tbl_download_files` WHERE `type_id` = '1' AND `status` = 'publish' ORDER BY `order` asd LIMIT 16 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-01 01:57:15 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'asd LIMIT 16' at line 1 [ SELECT * FROM `tbl_download_files` WHERE `type_id` = '1' AND `status` = 'publish' ORDER BY `order` asd LIMIT 16 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadfile.php(224): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/download.php(208): Model_DownloadFile->find(Array, Array, 16, '')
#2 [internal function]: Controller_Download->action_type()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Download))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-01 02:21:24 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/download.php [ 303 ]
2014-05-01 02:21:24 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/download.php [ 303 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/download.php(303): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 303, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/download.php(265): Controller_Download->_count_downloads('?w^~)?')
#2 [internal function]: Controller_Download->action_file()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Download))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-01 02:21:47 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/download.php [ 303 ]
2014-05-01 02:21:47 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/download.php [ 303 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/download.php(303): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 303, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/download.php(265): Controller_Download->_count_downloads('?w^~)?')
#2 [internal function]: Controller_Download->action_file()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Download))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-01 02:23:21 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/download.php [ 303 ]
2014-05-01 02:23:21 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/download.php [ 303 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/download.php(303): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 303, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/download.php(265): Controller_Download->_count_downloads('?w^~)?')
#2 [internal function]: Controller_Download->action_file()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Download))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-01 04:52:02 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$parent_id ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 513 ]
2014-05-01 04:52:02 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$parent_id ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 513 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(513): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 513, Array)
#1 [internal function]: Controller_Backend_ProductCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-01 04:54:21 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$name ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 514 ]
2014-05-01 04:54:21 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$name ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 514 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(514): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 514, Array)
#1 [internal function]: Controller_Backend_ProductCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}