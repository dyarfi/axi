<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-07 00:45:37 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Model_PageCategory::get_order(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php on line 330 and defined ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 357 ]
2014-05-07 00:45:37 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Model_PageCategory::get_order(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php on line 330 and defined ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 357 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(357): Kohana_Core::error_handler(2, 'Missing argumen...', '/Volumes/Data/w...', 357, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(330): Model_PageCategory->get_order('10')
#2 [internal function]: Controller_Backend_PageCategory->action_edit()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-07 00:48:11 --- ERROR: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 369 ]
2014-05-07 00:48:11 --- STRACE: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 369 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', '/Volumes/Data/w...', 369, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(369): implode(' ', '')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(330): Model_PageCategory->get_order('')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 00:48:25 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$parent_id ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 330 ]
2014-05-07 00:48:25 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$parent_id ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 330 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(330): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 330, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 00:49:17 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$parent_id ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 330 ]
2014-05-07 00:49:17 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$parent_id ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 330 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(330): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 330, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 00:49:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Expression::execute() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 373 ]
2014-05-07 00:49:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Expression::execute() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 373 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-07 00:49:36 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Expression::get() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 373 ]
2014-05-07 00:49:36 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Expression::get() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 373 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-07 00:49:56 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AS mycount' at line 1 [ SELECT COUNT(*)) AS mycount ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-07 00:49:56 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AS mycount' at line 1 [ SELECT COUNT(*)) AS mycount ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(373): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('', '0')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 00:50:05 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'order' in 'field list' [ SELECT `order` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-07 00:50:05 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'order' in 'field list' [ SELECT `order` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `order`', false, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(373): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('', '0')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 00:50:19 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'order' in 'field list' [ SELECT `order` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-07 00:50:19 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'order' in 'field list' [ SELECT `order` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `order`', false, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(373): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('', '0')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 00:50:20 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'order' in 'field list' [ SELECT `order` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-07 00:50:20 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'order' in 'field list' [ SELECT `order` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `order`', false, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(373): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('', '0')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 00:50:25 --- ERROR: Database_Exception [ 1096 ]: No tables used [ SELECT * ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-07 00:50:25 --- STRACE: Database_Exception [ 1096 ]: No tables used [ SELECT * ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT *', false, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(373): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('', '0')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 00:50:31 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::get() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 373 ]
2014-05-07 00:50:31 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::get() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 373 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-07 00:52:02 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_tbl_page_categories' doesn't exist [ SELECT * FROM `tbl_tbl_page_categories` WHERE `username` = 'john' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-07 00:52:02 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_tbl_page_categories' doesn't exist [ SELECT * FROM `tbl_tbl_page_categories` WHERE `username` = 'john' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(373): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('', '0')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 00:52:12 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 373 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
2014-05-07 00:52:12 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 373 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query/builder/where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', '/Volumes/Data/w...', 30, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(373): Kohana_Database_Query_Builder_Where->where('')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('', '0')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 00:53:10 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_tbl_page_categories' doesn't exist [ SELECT * FROM `tbl_tbl_page_categories` WHERE `username` = 'john' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-07 00:53:10 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_tbl_page_categories' doesn't exist [ SELECT * FROM `tbl_tbl_page_categories` WHERE `username` = 'john' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(376): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('', '0')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 00:53:20 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_tbl_page_categories' doesn't exist [ SELECT * FROM `tbl_tbl_page_categories` WHERE `username` = 'john' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-07 00:53:20 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_tbl_page_categories' doesn't exist [ SELECT * FROM `tbl_tbl_page_categories` WHERE `username` = 'john' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(376): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('', '0')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 00:53:21 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_tbl_page_categories' doesn't exist [ SELECT * FROM `tbl_tbl_page_categories` WHERE `username` = 'john' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-07 00:53:21 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_tbl_page_categories' doesn't exist [ SELECT * FROM `tbl_tbl_page_categories` WHERE `username` = 'john' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(376): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('', '0')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 00:53:48 --- ERROR: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 372 ]
2014-05-07 00:53:48 --- STRACE: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 372 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', '/Volumes/Data/w...', 372, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(372): implode(' ', '')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('', '0')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 00:55:00 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::merge() must be of the type array, string given, called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 366 and defined ~ SYSPATH/classes/kohana/arr.php [ 419 ]
2014-05-07 00:55:00 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::merge() must be of the type array, string given, called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 366 and defined ~ SYSPATH/classes/kohana/arr.php [ 419 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/arr.php(419): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Volumes/Data/w...', 419, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(366): Kohana_Arr::merge('', Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10', '0')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 00:55:52 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 372 ]
2014-05-07 00:55:52 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 372 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/Volumes/Data/w...', 372, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(372): explode(' ', Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10', '0')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 00:58:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '' '' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ')' ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 372 ]
2014-05-07 00:58:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '' '' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ')' ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 372 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-07 00:59:19 --- ERROR: ErrorException [ 2 ]: exp() expects exactly 1 parameter, 2 given ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 372 ]
2014-05-07 00:59:19 --- STRACE: ErrorException [ 2 ]: exp() expects exactly 1 parameter, 2 given ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 372 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'exp() expects e...', '/Volumes/Data/w...', 372, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(372): exp(' ', Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10', '0')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 00:59:32 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 372 ]
2014-05-07 00:59:32 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 372 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/Volumes/Data/w...', 372, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(372): explode(' ', Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10', '0')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 00:59:33 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 372 ]
2014-05-07 00:59:33 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 372 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/Volumes/Data/w...', 372, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(372): explode(' ', Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10', '0')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 00:59:37 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 372 ]
2014-05-07 00:59:37 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 372 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/Volumes/Data/w...', 372, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(372): explode(' ', Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10', '0')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 00:59:52 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 372 ]
2014-05-07 00:59:52 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 372 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/Volumes/Data/w...', 372, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(372): explode(' ', Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10', '0')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 00:59:55 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 372 ]
2014-05-07 00:59:55 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 372 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/Volumes/Data/w...', 372, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(372): explode(' ', Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10', '0')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:00:00 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 372 ]
2014-05-07 01:00:00 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 372 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/Volumes/Data/w...', 372, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(372): explode(' ', Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10', '0')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:00:02 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 372 ]
2014-05-07 01:00:02 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 372 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/Volumes/Data/w...', 372, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(372): explode(' ', Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10', '0')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:00:06 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 372 ]
2014-05-07 01:00:06 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 372 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/Volumes/Data/w...', 372, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(372): explode(' ', Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10', '0')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:02:11 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 376 ]
2014-05-07 01:02:11 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 376 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/Volumes/Data/w...', 376, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(376): explode(' ', Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:02:16 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 376 ]
2014-05-07 01:02:16 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 376 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/Volumes/Data/w...', 376, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(376): explode(' ', Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:02:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: asdf ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 378 ]
2014-05-07 01:02:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: asdf ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 378 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(378): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 378, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#2 [internal function]: Controller_Backend_PageCategory->action_edit()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-07 01:02:30 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 376 ]
2014-05-07 01:02:30 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 376 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/Volumes/Data/w...', 376, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(376): explode(' ', Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:05:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 368 ]
2014-05-07 01:05:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 368 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(368): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 368, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#2 [internal function]: Controller_Backend_PageCategory->action_edit()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-07 01:06:30 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 372 ]
2014-05-07 01:06:30 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 372 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/Volumes/Data/w...', 372, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(372): explode(',', Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:06:34 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 372 ]
2014-05-07 01:06:34 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 372 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/Volumes/Data/w...', 372, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(372): explode(',', Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:07:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 369 ]
2014-05-07 01:07:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 369 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(369): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 369, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#2 [internal function]: Controller_Backend_PageCategory->action_edit()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-07 01:07:31 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 378 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
2014-05-07 01:07:31 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 378 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query/builder/where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', '/Volumes/Data/w...', 30, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(378): Kohana_Database_Query_Builder_Where->where(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:07:48 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 378 ]
2014-05-07 01:07:48 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 378 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/Volumes/Data/w...', 378, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(378): explode(',', Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:07:54 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 378 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
2014-05-07 01:07:54 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 378 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query/builder/where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', '/Volumes/Data/w...', 30, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(378): Kohana_Database_Query_Builder_Where->where('10,12')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:08:16 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 378 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
2014-05-07 01:08:16 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 378 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query/builder/where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', '/Volumes/Data/w...', 30, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(378): Kohana_Database_Query_Builder_Where->where('10,12')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:08:27 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 378 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
2014-05-07 01:08:27 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 378 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query/builder/where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', '/Volumes/Data/w...', 30, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(378): Kohana_Database_Query_Builder_Where->where(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:08:32 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 378 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
2014-05-07 01:08:32 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 378 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query/builder/where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', '/Volumes/Data/w...', 30, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(378): Kohana_Database_Query_Builder_Where->where(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:08:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 369 ]
2014-05-07 01:08:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 369 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(369): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 369, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#2 [internal function]: Controller_Backend_PageCategory->action_edit()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-07 01:08:44 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 378 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
2014-05-07 01:08:44 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 378 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query/builder/where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', '/Volumes/Data/w...', 30, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(378): Kohana_Database_Query_Builder_Where->where(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:08:47 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 378 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
2014-05-07 01:08:47 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 378 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query/builder/where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', '/Volumes/Data/w...', 30, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(378): Kohana_Database_Query_Builder_Where->where(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:11:17 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 374 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
2014-05-07 01:11:17 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 374 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query/builder/where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', '/Volumes/Data/w...', 30, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(374): Kohana_Database_Query_Builder_Where->where('id = 10')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:11:35 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 374 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
2014-05-07 01:11:35 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 374 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query/builder/where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', '/Volumes/Data/w...', 30, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(374): Kohana_Database_Query_Builder_Where->where('id = 10')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:12:10 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 374 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
2014-05-07 01:12:10 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 374 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query/builder/where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', '/Volumes/Data/w...', 30, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(374): Kohana_Database_Query_Builder_Where->where(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:12:11 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 374 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
2014-05-07 01:12:11 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 374 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query/builder/where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', '/Volumes/Data/w...', 30, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(374): Kohana_Database_Query_Builder_Where->where(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:12:12 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 374 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
2014-05-07 01:12:12 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 374 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query/builder/where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', '/Volumes/Data/w...', 30, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(374): Kohana_Database_Query_Builder_Where->where(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:12:12 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 374 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
2014-05-07 01:12:12 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 374 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query/builder/where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', '/Volumes/Data/w...', 30, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(374): Kohana_Database_Query_Builder_Where->where(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:12:18 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 374 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
2014-05-07 01:12:18 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 374 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query/builder/where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', '/Volumes/Data/w...', 30, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(374): Kohana_Database_Query_Builder_Where->where(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:12:21 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 374 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
2014-05-07 01:12:21 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 374 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query/builder/where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', '/Volumes/Data/w...', 30, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(374): Kohana_Database_Query_Builder_Where->where(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:12:26 --- ERROR: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 374 ]
2014-05-07 01:12:26 --- STRACE: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 374 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', '/Volumes/Data/w...', 374, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(374): implode(',', 'id = 10')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:12:32 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 374 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
2014-05-07 01:12:32 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 374 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query/builder/where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', '/Volumes/Data/w...', 30, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(374): Kohana_Database_Query_Builder_Where->where()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:12:39 --- ERROR: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 372 ]
2014-05-07 01:12:39 --- STRACE: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 372 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', '/Volumes/Data/w...', 372, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(372): implode(',', 'id = 10')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:12:45 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 374 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
2014-05-07 01:12:45 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 374 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query/builder/where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', '/Volumes/Data/w...', 30, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(374): Kohana_Database_Query_Builder_Where->where()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:13:55 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 374 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
2014-05-07 01:13:55 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 374 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query/builder/where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', '/Volumes/Data/w...', 30, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(374): Kohana_Database_Query_Builder_Where->where()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:14:02 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 374 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
2014-05-07 01:14:02 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 374 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query/builder/where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', '/Volumes/Data/w...', 30, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(374): Kohana_Database_Query_Builder_Where->where()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:14:09 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 374 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
2014-05-07 01:14:09 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 374 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query/builder/where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', '/Volumes/Data/w...', 30, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(374): Kohana_Database_Query_Builder_Where->where('id=10')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:14:12 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 374 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
2014-05-07 01:14:12 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 374 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query/builder/where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', '/Volumes/Data/w...', 30, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(374): Kohana_Database_Query_Builder_Where->where('id=10')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:14:23 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 373 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
2014-05-07 01:14:23 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 373 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query/builder/where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', '/Volumes/Data/w...', 30, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(373): Kohana_Database_Query_Builder_Where->where('id=10')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:14:31 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 373 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
2014-05-07 01:14:31 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 373 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query/builder/where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', '/Volumes/Data/w...', 30, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(373): Kohana_Database_Query_Builder_Where->where('id = 10')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:14:42 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 373 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
2014-05-07 01:14:42 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 373 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query/builder/where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', '/Volumes/Data/w...', 30, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(373): Kohana_Database_Query_Builder_Where->where('id = 10')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:15:01 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= '10'' at line 1 [ SELECT `order` FROM `tbl_tbl_page_categories` WHERE = '10' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-07 01:15:01 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= '10'' at line 1 [ SELECT `order` FROM `tbl_tbl_page_categories` WHERE = '10' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `order` ...', true, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(373): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:15:05 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_tbl_page_categories' doesn't exist [ SELECT `order` FROM `tbl_tbl_page_categories` WHERE `id` = '10' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-07 01:15:05 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_tbl_page_categories' doesn't exist [ SELECT `order` FROM `tbl_tbl_page_categories` WHERE `id` = '10' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `order` ...', true, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(373): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:15:35 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 375 ]
2014-05-07 01:15:35 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 375 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(375): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 375, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#2 [internal function]: Controller_Backend_PageCategory->action_edit()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-07 01:15:55 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 375 ]
2014-05-07 01:15:55 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 375 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(375): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 375, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#2 [internal function]: Controller_Backend_PageCategory->action_edit()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-07 01:16:12 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 373 ]
2014-05-07 01:16:12 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 373 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-07 01:17:45 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$object ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 375 ]
2014-05-07 01:17:45 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$object ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 375 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(375): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 375, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#2 [internal function]: Controller_Backend_PageCategory->action_edit()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-07 01:19:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: string ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 373 ]
2014-05-07 01:19:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: string ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 373 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(373): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 373, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#2 [internal function]: Controller_Backend_PageCategory->action_edit()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-07 01:19:06 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/database/classes/kohana/database/expression.php [ 93 ]
2014-05-07 01:19:06 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/database/classes/kohana/database/expression.php [ 93 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/expression.php(93): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 93, Array)
#1 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/expression.php(124): Kohana_Database_Expression->value()
#2 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database.php(511): Kohana_Database_Expression->compile(Object(Database_MySQL))
#3 [internal function]: Kohana_Database->quote_column(Object(Database_Expression))
#4 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query/builder/select.php(352): array_map(Array, Array)
#5 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query.php(228): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#6 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(375): Kohana_Database_Query->execute()
#7 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('10')
#8 [internal function]: Controller_Backend_PageCategory->action_edit()
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#13 {main}
2014-05-07 01:19:26 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 336 ]
2014-05-07 01:19:26 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 336 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(336): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 336, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 01:19:56 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 336 ]
2014-05-07 01:19:56 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 336 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(336): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 336, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 01:20:04 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 336 ]
2014-05-07 01:20:04 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 336 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(336): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 336, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 01:20:21 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 336 ]
2014-05-07 01:20:21 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 336 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(336): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 336, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 01:20:29 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::current() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 376 ]
2014-05-07 01:20:29 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::current() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 376 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-07 01:20:32 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 336 ]
2014-05-07 01:20:32 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 336 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(336): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 336, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 01:24:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 335 ]
2014-05-07 01:24:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 335 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-07 01:32:43 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 335 ]
2014-05-07 01:32:43 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 335 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 335, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 01:33:35 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 335 ]
2014-05-07 01:33:35 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 335 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 335, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 01:37:43 --- ERROR: Database_Exception [ 1054 ]: Unknown column '0' in 'where clause' [ SELECT * FROM `tbl_page_categories` WHERE `0` = 'MAX(order)' AND `parent_id` = '2' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-07 01:37:43 --- STRACE: Database_Exception [ 1054 ]: Unknown column '0' in 'where clause' [ SELECT * FROM `tbl_page_categories` WHERE `0` = 'MAX(order)' AND `parent_id` = '2' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(283): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(374): Model_PageCategory->find(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('16', '2')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:37:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: result ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 378 ]
2014-05-07 01:37:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: result ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 378 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(378): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 378, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('16', '2')
#2 [internal function]: Controller_Backend_PageCategory->action_edit()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-07 01:38:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: result ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 378 ]
2014-05-07 01:38:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: result ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 378 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(378): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 378, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('16', '2')
#2 [internal function]: Controller_Backend_PageCategory->action_edit()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-07 01:40:13 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order) as order FROMpage_categories' at line 1 [ SELECT MAX(order) as order FROMpage_categories; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-07 01:40:13 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order) as order FROMpage_categories' at line 1 [ SELECT MAX(order) as order FROMpage_categories; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(397): Kohana_Database_MySQL->query(1, 'SELECT MAX(orde...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(374): Model_PageCategory->query('SELECT MAX(orde...')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('16', '2')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:40:51 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROMpage_categories GROUP BY `order`' at line 1 [ SELECT MAX(`order`) as `order` FROMpage_categories GROUP BY `order`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-07 01:40:51 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROMpage_categories GROUP BY `order`' at line 1 [ SELECT MAX(`order`) as `order` FROMpage_categories GROUP BY `order`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(397): Kohana_Database_MySQL->query(1, 'SELECT MAX(`ord...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(374): Model_PageCategory->query('SELECT MAX(`ord...')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('16', '2')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:40:58 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.page_categories' doesn't exist [ SELECT MAX(`order`) as `order` FROM page_categories GROUP BY `order`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-07 01:40:58 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.page_categories' doesn't exist [ SELECT MAX(`order`) as `order` FROM page_categories GROUP BY `order`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(397): Kohana_Database_MySQL->query(1, 'SELECT MAX(`ord...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(374): Model_PageCategory->query('SELECT MAX(`ord...')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('16', '2')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:41:23 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 335 ]
2014-05-07 01:41:23 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 335 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 335, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 01:41:44 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::execute() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 374 ]
2014-05-07 01:41:44 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::execute() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 374 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-07 01:41:48 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 335 ]
2014-05-07 01:41:48 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 335 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 335, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 01:41:55 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_Database_Result::get(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 374 and defined ~ MODPATH/database/classes/kohana/database/result.php [ 182 ]
2014-05-07 01:41:55 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_Database_Result::get(), called in /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php on line 374 and defined ~ MODPATH/database/classes/kohana/database/result.php [ 182 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/result.php(182): Kohana_Core::error_handler(2, 'Missing argumen...', '/Volumes/Data/w...', 182, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(374): Kohana_Database_Result->get()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('16', '2')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:42:01 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::execute() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 374 ]
2014-05-07 01:42:01 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::execute() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 374 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-07 01:42:04 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 335 ]
2014-05-07 01:42:04 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 335 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 335, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 01:42:08 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 335 ]
2014-05-07 01:42:08 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 335 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 335, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 01:42:11 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 335 ]
2014-05-07 01:42:11 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 335 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 335, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 01:42:17 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 376 ]
2014-05-07 01:42:17 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 376 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(376): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 376, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('16', '2')
#2 [internal function]: Controller_Backend_PageCategory->action_edit()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-07 01:42:47 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 376 ]
2014-05-07 01:42:47 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 376 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(376): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 376, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('16', '2')
#2 [internal function]: Controller_Backend_PageCategory->action_edit()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-07 01:42:52 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 335 ]
2014-05-07 01:42:52 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 335 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 335, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 01:43:02 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 335 ]
2014-05-07 01:43:02 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 335 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 335, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 01:43:08 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 335 ]
2014-05-07 01:43:08 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 335 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 335, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 01:43:09 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 335 ]
2014-05-07 01:43:09 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 335 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 335, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 01:43:16 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 335 ]
2014-05-07 01:43:16 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 335 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 335, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 01:43:25 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::current() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 376 ]
2014-05-07 01:43:25 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::current() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 376 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-07 01:43:38 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 376 ]
2014-05-07 01:43:38 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 376 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(376): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 376, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('16', '2')
#2 [internal function]: Controller_Backend_PageCategory->action_edit()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-07 01:44:35 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order) as `order` FROM tbl_page_categories GROUP BY `order`' at line 1 [ SELECT MAX(order) as `order` FROM tbl_page_categories GROUP BY `order`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-07 01:44:35 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order) as `order` FROM tbl_page_categories GROUP BY `order`' at line 1 [ SELECT MAX(order) as `order` FROM tbl_page_categories GROUP BY `order`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(389): Kohana_Database_MySQL->query(1, 'SELECT MAX(orde...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(366): Model_PageCategory->query('SELECT MAX(orde...', true)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('16', '2')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:44:42 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order FROM tbl_page_categories GROUP BY `order`' at line 1 [ SELECT MAX(`order`) as order FROM tbl_page_categories GROUP BY `order`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-07 01:44:42 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order FROM tbl_page_categories GROUP BY `order`' at line 1 [ SELECT MAX(`order`) as order FROM tbl_page_categories GROUP BY `order`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(389): Kohana_Database_MySQL->query(1, 'SELECT MAX(`ord...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(366): Model_PageCategory->query('SELECT MAX(`ord...', true)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('16', '2')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:48:39 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order FROM `tbl_page_categories` GROUP BY `order`' at line 1 [ SELECT MAX(`order`) as order FROM `tbl_page_categories` GROUP BY `order`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-07 01:48:39 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order FROM `tbl_page_categories` GROUP BY `order`' at line 1 [ SELECT MAX(`order`) as order FROM `tbl_page_categories` GROUP BY `order`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(389): Kohana_Database_MySQL->query(1, 'SELECT MAX(`ord...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(366): Model_PageCategory->query('SELECT MAX(`ord...', true)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('16', '2')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:49:31 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::commit() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 366 ]
2014-05-07 01:49:31 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::commit() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 366 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-07 01:49:54 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::commit() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 366 ]
2014-05-07 01:49:54 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::commit() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 366 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-07 01:55:45 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'parent_id =16 ORDER BY `order` DESC' at line 1 [ SELECT MAX( `order` ) AS `order` FROM `tbl_page_categories` GROUP BY `id` parent_id =16 ORDER BY `order` DESC; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-07 01:55:45 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'parent_id =16 ORDER BY `order` DESC' at line 1 [ SELECT MAX( `order` ) AS `order` FROM `tbl_page_categories` GROUP BY `id` parent_id =16 ORDER BY `order` DESC; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(392): Kohana_Database_MySQL->query(1, 'SELECT MAX( `or...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(369): Model_PageCategory->query('SELECT MAX( `or...', true)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('16', '2')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:56:08 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`parent_id` ='16' ORDER BY `order` DESC' at line 1 [ SELECT MAX( `order` ) AS `order` FROM `tbl_page_categories` GROUP BY `id` `parent_id` ='16' ORDER BY `order` DESC; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-07 01:56:08 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`parent_id` ='16' ORDER BY `order` DESC' at line 1 [ SELECT MAX( `order` ) AS `order` FROM `tbl_page_categories` GROUP BY `id` `parent_id` ='16' ORDER BY `order` DESC; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(392): Kohana_Database_MySQL->query(1, 'SELECT MAX( `or...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(369): Model_PageCategory->query('SELECT MAX( `or...', true)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('16', '2')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:56:42 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `parent_id` ='16' ORDER BY `order` DESC' at line 1 [ SELECT MAX( `order` ) AS `order` FROM `tbl_page_categories` GROUP BY `id` WHERE `parent_id` ='16' ORDER BY `order` DESC; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-07 01:56:42 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `parent_id` ='16' ORDER BY `order` DESC' at line 1 [ SELECT MAX( `order` ) AS `order` FROM `tbl_page_categories` GROUP BY `id` WHERE `parent_id` ='16' ORDER BY `order` DESC; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(392): Kohana_Database_MySQL->query(1, 'SELECT MAX( `or...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(369): Model_PageCategory->query('SELECT MAX( `or...', true)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('16', '2')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 01:57:19 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 371 ]
2014-05-07 01:57:19 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 371 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(371): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 371, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('16', '2')
#2 [internal function]: Controller_Backend_PageCategory->action_edit()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-07 01:57:38 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$last_query ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 371 ]
2014-05-07 01:57:38 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$last_query ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 371 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(371): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 371, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('16', '2')
#2 [internal function]: Controller_Backend_PageCategory->action_edit()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-07 01:58:53 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 365 ]
2014-05-07 01:58:53 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 365 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(365): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 365, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order('16', '2')
#2 [internal function]: Controller_Backend_PageCategory->action_edit()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-07 02:01:05 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 364 ]
2014-05-07 02:01:05 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 364 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(364): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 364, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(335): Model_PageCategory->get_order(2)
#2 [internal function]: Controller_Backend_PageCategory->action_edit()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-07 02:18:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: files ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 480 ]
2014-05-07 02:18:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: files ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 480 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(480): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 480, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 02:19:55 --- ERROR: ErrorException [ 8 ]: Undefined index: position ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 425 ]
2014-05-07 02:19:55 --- STRACE: ErrorException [ 8 ]: Undefined index: position ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 425 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(425): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 425, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 02:22:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: orders ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 483 ]
2014-05-07 02:22:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: orders ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 483 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(483): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 483, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 02:56:33 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$last_query ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 363 ]
2014-05-07 02:56:33 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$last_query ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 363 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(363): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 363, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(319): Model_PageCategory->get_order(1)
#2 [internal function]: Controller_Backend_PageCategory->action_edit()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-07 02:56:38 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::last_query() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 363 ]
2014-05-07 02:56:38 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::last_query() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 363 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-07 02:56:50 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::last_query() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 363 ]
2014-05-07 02:56:50 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::last_query() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 363 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-07 03:04:07 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''7' at line 1 [ SELECT MAX( `order` ) AS `order` FROM `tbl_page_categories` WHERE `order` ='' AND `id` ='7; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-07 03:04:07 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''7' at line 1 [ SELECT MAX( `order` ) AS `order` FROM `tbl_page_categories` WHERE `order` ='' AND `id` ='7; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(392): Kohana_Database_MySQL->query(1, 'SELECT MAX( `or...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(366): Model_PageCategory->query('SELECT MAX( `or...', true)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(319): Model_PageCategory->get_order(7)
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 03:05:09 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$order ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 319 ]
2014-05-07 03:05:09 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$order ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 319 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(319): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 319, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 03:15:33 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 266 ]
2014-05-07 03:15:33 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 266 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(266): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 266, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(359): Model_PageCategory->find(Array, 1)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(325): Model_PageCategory->get_order(10, 7)
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 03:15:41 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 266 ]
2014-05-07 03:15:41 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 266 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(266): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 266, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(359): Model_PageCategory->find(Array, 1)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(325): Model_PageCategory->get_order(10, 7)
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 03:15:43 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 266 ]
2014-05-07 03:15:43 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 266 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(266): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 266, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(359): Model_PageCategory->find(Array, 1)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(325): Model_PageCategory->get_order(10, 7)
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 03:28:14 --- ERROR: ErrorException [ 8 ]: Undefined index: parent_id ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 415 ]
2014-05-07 03:28:14 --- STRACE: ErrorException [ 8 ]: Undefined index: parent_id ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 415 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(415): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 415, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 03:37:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: fields ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 319 ]
2014-05-07 03:37:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: fields ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 319 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(319): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 319, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 03:39:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: _temp ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 365 ]
2014-05-07 03:39:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: _temp ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 365 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(365): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 365, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(417): Model_PageCategory->get_order('12', '5', '3')
#2 [internal function]: Controller_Backend_PageCategory->action_edit()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-07 03:57:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: result ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 373 ]
2014-05-07 03:57:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: result ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 373 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(373): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 373, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(417): Model_PageCategory->get_order('10', '12', '7')
#2 [internal function]: Controller_Backend_PageCategory->action_edit()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-07 03:58:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: result ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 373 ]
2014-05-07 03:58:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: result ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 373 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(373): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 373, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(417): Model_PageCategory->get_order('10', '12', '7')
#2 [internal function]: Controller_Backend_PageCategory->action_edit()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-07 03:58:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: result ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 374 ]
2014-05-07 03:58:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: result ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 374 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(374): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 374, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(417): Model_PageCategory->get_order('10', '12', '7')
#2 [internal function]: Controller_Backend_PageCategory->action_edit()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-07 04:00:52 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 373 ]
2014-05-07 04:00:52 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$order ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 373 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(373): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 373, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(417): Model_PageCategory->get_order('10', '12', '7')
#2 [internal function]: Controller_Backend_PageCategory->action_edit()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-07 04:01:06 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 373 ]
2014-05-07 04:01:06 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 373 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(373): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 373, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(417): Model_PageCategory->get_order('10', '12', '7')
#2 [internal function]: Controller_Backend_PageCategory->action_edit()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-07 04:11:06 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$id ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 109 ]
2014-05-07 04:11:06 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$id ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 109 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(109): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 109, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(365): Model_PageCategory->update()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(417): Model_PageCategory->get_order('10', '1', '9')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 04:11:46 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_PageCategory::id() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 363 ]
2014-05-07 04:11:46 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_PageCategory::id() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 363 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-07 04:11:57 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$id ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 109 ]
2014-05-07 04:11:57 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$id ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 109 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(109): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 109, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(365): Model_PageCategory->update()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(417): Model_PageCategory->get_order('10', '1', '9')
#3 [internal function]: Controller_Backend_PageCategory->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-07 04:12:43 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_PageCategory::order() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 365 ]
2014-05-07 04:12:43 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_PageCategory::order() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 365 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-07 04:24:20 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_PageCategory::id() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 362 ]
2014-05-07 04:24:20 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_PageCategory::id() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 362 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-07 04:25:16 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 365 ]
2014-05-07 04:25:16 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 365 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(365): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 365, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(417): Model_PageCategory->get_order('13', '4', '1')
#2 [internal function]: Controller_Backend_PageCategory->action_edit()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-07 04:25:31 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 364 ]
2014-05-07 04:25:31 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 364 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(364): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 364, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(417): Model_PageCategory->get_order('13', '4', '1')
#2 [internal function]: Controller_Backend_PageCategory->action_edit()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-07 05:45:38 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_PageCategoryFile::last_order() ~ MODPATH/_modules/page/views/page/backend/pagecategory_index.php [ 70 ]
2014-05-07 05:45:38 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_PageCategoryFile::last_order() ~ MODPATH/_modules/page/views/page/backend/pagecategory_index.php [ 70 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-07 05:45:53 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$type_id ~ MODPATH/_modules/page/views/page/backend/pagecategory_index.php [ 70 ]
2014-05-07 05:45:53 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$type_id ~ MODPATH/_modules/page/views/page/backend/pagecategory_index.php [ 70 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/views/page/backend/pagecategory_index.php(70): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 70, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(65): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-05-07 05:46:06 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_PageCategory::manual_query() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 377 ]
2014-05-07 05:46:06 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_PageCategory::manual_query() ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 377 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-07 05:58:38 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_DownloadFile::last_order() ~ MODPATH/_modules/download/views/download/backend/downloadfile_index.php [ 159 ]
2014-05-07 05:58:38 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_DownloadFile::last_order() ~ MODPATH/_modules/download/views/download/backend/downloadfile_index.php [ 159 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-07 06:01:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: sql ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 124 ]
2014-05-07 06:01:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: sql ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 124 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadfile.php(124): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 124, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_index.php(159): Model_DownloadFile->set_order('1', '', 'MAX')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#10 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(65): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#16 {main}
2014-05-07 06:10:41 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_PageCategory::last_order() ~ MODPATH/_modules/page/views/page/backend/pagecategory_index.php [ 70 ]
2014-05-07 06:10:41 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_PageCategory::last_order() ~ MODPATH/_modules/page/views/page/backend/pagecategory_index.php [ 70 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-07 06:11:57 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$type_id ~ MODPATH/_modules/page/views/page/backend/pagecategory_index.php [ 70 ]
2014-05-07 06:11:57 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$type_id ~ MODPATH/_modules/page/views/page/backend/pagecategory_index.php [ 70 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/views/page/backend/pagecategory_index.php(70): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 70, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(65): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-05-07 06:30:34 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'parent_id' in 'where clause' [ SELECT * FROM `tbl_download_files` WHERE `order` = '4' AND `parent_id` = '1' ORDER BY `order` asc LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-07 06:30:34 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'parent_id' in 'where clause' [ SELECT * FROM `tbl_download_files` WHERE `order` = '4' AND `parent_id` = '1' ORDER BY `order` asc LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadfile.php(214): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(790): Model_DownloadFile->find(Array, Array, 1)
#2 [internal function]: Controller_Backend_DownloadFile->action_order()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-07 06:31:05 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'parent_id' in 'where clause' [ SELECT * FROM `tbl_download_files` WHERE `order` = '4' AND `parent_id` = '1' ORDER BY `order` asc LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-07 06:31:05 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'parent_id' in 'where clause' [ SELECT * FROM `tbl_download_files` WHERE `order` = '4' AND `parent_id` = '1' ORDER BY `order` asc LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadfile.php(214): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(790): Model_DownloadFile->find(Array, Array, 1)
#2 [internal function]: Controller_Backend_DownloadFile->action_order()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-07 06:31:38 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadFile::$parent_id ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 794 ]
2014-05-07 06:31:38 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadFile::$parent_id ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 794 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(794): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 794, Array)
#1 [internal function]: Controller_Backend_DownloadFile->action_order()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 06:31:48 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadFile::$parent_id ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 794 ]
2014-05-07 06:31:48 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadFile::$parent_id ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 794 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(794): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 794, Array)
#1 [internal function]: Controller_Backend_DownloadFile->action_order()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 06:40:42 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order LIMIT 25' at line 1 [ SELECT * FROM `tbl_page_categories` WHERE `status` != 'deleted' ORDER BY `added` order LIMIT 25 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-07 06:40:42 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order LIMIT 25' at line 1 [ SELECT * FROM `tbl_page_categories` WHERE `status` != 'deleted' ORDER BY `added` order LIMIT 25 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(283): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(95): Model_PageCategory->find(Array, Array, 25, '')
#2 [internal function]: Controller_Backend_PageCategory->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-07 06:40:52 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order LIMIT 25' at line 1 [ SELECT * FROM `tbl_page_categories` WHERE `status` != 'deleted' ORDER BY `added` order LIMIT 25 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-07 06:40:52 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order LIMIT 25' at line 1 [ SELECT * FROM `tbl_page_categories` WHERE `status` != 'deleted' ORDER BY `added` order LIMIT 25 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(283): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(95): Model_PageCategory->find(Array, Array, 25, '')
#2 [internal function]: Controller_Backend_PageCategory->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-05-07 07:15:38 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_SolutionCategory::$id ~ MODPATH/_modules/solution/classes/controller/backend/solutioncategory.php [ 561 ]
2014-05-07 07:15:38 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_SolutionCategory::$id ~ MODPATH/_modules/solution/classes/controller/backend/solutioncategory.php [ 561 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/controller/backend/solutioncategory.php(561): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 561, Array)
#1 [internal function]: Controller_Backend_SolutionCategory->action_delete()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 07:15:53 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_add.php [ 30 ]
2014-05-07 07:15:53 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_add.php [ 30 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solutioncategory_add.php(30): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 30, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(65): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-05-07 07:17:25 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_edit.php [ 27 ]
2014-05-07 07:17:25 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_edit.php [ 27 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solutioncategory_edit.php(27): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 27, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(65): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-05-07 07:18:24 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_edit.php [ 33 ]
2014-05-07 07:18:24 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_edit.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-07 07:25:23 --- ERROR: ErrorException [ 8 ]: Undefined index: parent_id ~ MODPATH/_modules/solution/classes/controller/backend/solutioncategory.php [ 169 ]
2014-05-07 07:25:23 --- STRACE: ErrorException [ 8 ]: Undefined index: parent_id ~ MODPATH/_modules/solution/classes/controller/backend/solutioncategory.php [ 169 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/controller/backend/solutioncategory.php(169): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 169, Array)
#1 [internal function]: Controller_Backend_SolutionCategory->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 07:25:56 --- ERROR: ErrorException [ 8 ]: Undefined index: parent_id ~ MODPATH/_modules/solution/classes/controller/backend/solutioncategory.php [ 191 ]
2014-05-07 07:25:56 --- STRACE: ErrorException [ 8 ]: Undefined index: parent_id ~ MODPATH/_modules/solution/classes/controller/backend/solutioncategory.php [ 191 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/controller/backend/solutioncategory.php(191): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 191, Array)
#1 [internal function]: Controller_Backend_SolutionCategory->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 07:26:37 --- ERROR: ErrorException [ 8 ]: Undefined index: parent_id ~ MODPATH/_modules/solution/classes/controller/backend/solutioncategory.php [ 362 ]
2014-05-07 07:26:37 --- STRACE: ErrorException [ 8 ]: Undefined index: parent_id ~ MODPATH/_modules/solution/classes/controller/backend/solutioncategory.php [ 362 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/controller/backend/solutioncategory.php(362): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 362, Array)
#1 [internal function]: Controller_Backend_SolutionCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 07:46:11 --- ERROR: ErrorException [ 8 ]: Undefined index: parent_id ~ MODPATH/_modules/solution/classes/controller/backend/solutioncategory.php [ 198 ]
2014-05-07 07:46:11 --- STRACE: ErrorException [ 8 ]: Undefined index: parent_id ~ MODPATH/_modules/solution/classes/controller/backend/solutioncategory.php [ 198 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/controller/backend/solutioncategory.php(198): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 198, Array)
#1 [internal function]: Controller_Backend_SolutionCategory->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 07:48:32 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/solution/views/solution/backend/solution_index.php [ 63 ]
2014-05-07 07:48:32 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/solution/views/solution/backend/solution_index.php [ 63 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solution_index.php(63): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 63, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(65): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-05-07 08:58:56 --- ERROR: ErrorException [ 8 ]: Undefined index: parent_id ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 175 ]
2014-05-07 08:58:56 --- STRACE: ErrorException [ 8 ]: Undefined index: parent_id ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 175 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(175): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 175, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 09:00:17 --- ERROR: ErrorException [ 8 ]: Undefined index: order ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 183 ]
2014-05-07 09:00:17 --- STRACE: ErrorException [ 8 ]: Undefined index: order ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 183 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(183): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 183, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 09:03:07 --- ERROR: ErrorException [ 8 ]: Undefined index: parent_id ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 192 ]
2014-05-07 09:03:07 --- STRACE: ErrorException [ 8 ]: Undefined index: parent_id ~ MODPATH/_modules/page/classes/controller/backend/pagecategory.php [ 192 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(192): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 192, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 14:39:58 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '~' ~ MODPATH/_modules/site/views/site/home_page.php [ 64 ]
2014-05-07 14:39:58 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '~' ~ MODPATH/_modules/site/views/site/home_page.php [ 64 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-07 14:49:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/8048516ae1e86ab7daa62a2786ae1a7b_resize_300x183.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-07 14:49:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/8048516ae1e86ab7daa62a2786ae1a7b_resize_300x183.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-05-07 14:49:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/8048516ae1e86ab7daa62a2786ae1a7b_crop_300x135.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-07 14:49:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/8048516ae1e86ab7daa62a2786ae1a7b_crop_300x135.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-05-07 14:59:41 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$category_id ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 11 ]
2014-05-07 14:59:41 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$category_id ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 11 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_detail_page.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 11, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(151): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Solution))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-05-07 15:00:55 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 22 ]
2014-05-07 15:00:55 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 22 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_detail_page.php(22): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 22, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(151): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Solution))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-05-07 15:02:25 --- ERROR: ErrorException [ 8 ]: Undefined index:  page_category_fields ~ MODPATH/_modules/site/classes/controller/solution.php [ 36 ]
2014-05-07 15:02:25 --- STRACE: ErrorException [ 8 ]: Undefined index:  page_category_fields ~ MODPATH/_modules/site/classes/controller/solution.php [ 36 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(36): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 36, Array)
#1 [internal function]: Controller_Solution->before()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 15:02:48 --- ERROR: ErrorException [ 8 ]: Undefined index:  page_fields ~ MODPATH/_modules/site/classes/controller/solution.php [ 45 ]
2014-05-07 15:02:48 --- STRACE: ErrorException [ 8 ]: Undefined index:  page_fields ~ MODPATH/_modules/site/classes/controller/solution.php [ 45 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(45): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 45, Array)
#1 [internal function]: Controller_Solution->before()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 15:02:59 --- ERROR: ErrorException [ 8 ]: Undefined index:  fields ~ MODPATH/_modules/site/classes/controller/solution.php [ 45 ]
2014-05-07 15:02:59 --- STRACE: ErrorException [ 8 ]: Undefined index:  fields ~ MODPATH/_modules/site/classes/controller/solution.php [ 45 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(45): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 45, Array)
#1 [internal function]: Controller_Solution->before()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 15:03:07 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Solution::$solution_config ~ MODPATH/_modules/site/classes/controller/solution.php [ 45 ]
2014-05-07 15:03:07 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Solution::$solution_config ~ MODPATH/_modules/site/classes/controller/solution.php [ 45 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(45): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 45, Array)
#1 [internal function]: Controller_Solution->before()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 15:04:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 22 ]
2014-05-07 15:04:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-07 15:07:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: newsevent ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 27 ]
2014-05-07 15:07:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: newsevent ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 27 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_detail_page.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 27, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(151): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Solution))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-05-07 15:09:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_632x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-07 15:09:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_632x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-05-07 15:09:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_632x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-07 15:09:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_632x384.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-05-07 15:09:10 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 142 ]
2014-05-07 15:09:10 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 142 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(142): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 142, Array)
#1 [internal function]: Controller_Solution->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 15:10:58 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 142 ]
2014-05-07 15:10:58 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 142 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(142): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 142, Array)
#1 [internal function]: Controller_Solution->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-07 15:11:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Volumes/Data/www/offistarindo/uploads/solutions/cd68a885042890d13b22748a30c3c333.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-07 15:11:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Volumes/Data/www/offistarindo/uploads/solutions/cd68a885042890d13b22748a30c3c333.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-05-07 15:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_632x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-07 15:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_632x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-05-07 15:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_632x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-07 15:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_632x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-05-07 15:12:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_632x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-07 15:12:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_632x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-05-07 15:12:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_632x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-07 15:12:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_632x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-05-07 15:12:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_632x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-07 15:12:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_632x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-05-07 15:12:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_632x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-07 15:12:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_632x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-05-07 15:12:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_632x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-07 15:12:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_632x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-05-07 15:12:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_632x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-07 15:12:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_632x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-05-07 15:12:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_632x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-07 15:12:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_632x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-05-07 15:12:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_632x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-07 15:12:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_632x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-05-07 15:12:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_600x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-07 15:12:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_600x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-05-07 15:12:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_600x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-07 15:12:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_600x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-05-07 15:12:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_600x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-07 15:12:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_600x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-05-07 15:12:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_600x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-07 15:12:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_600x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-05-07 15:12:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_600x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-07 15:12:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_600x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-05-07 15:12:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_600x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-07 15:12:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_600x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}