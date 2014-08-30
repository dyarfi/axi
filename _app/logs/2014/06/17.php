<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-17 01:20:30 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'status' in 'where clause' [ SELECT * FROM `tbl_page_category_content` WHERE MATCH (subject,synopsis,text) AGAINST ('asasas*' IN BOOLEAN MODE) AND status ='publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-17 01:20:30 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'status' in 'where clause' [ SELECT * FROM `tbl_page_category_content` WHERE MATCH (subject,synopsis,text) AGAINST ('asasas*' IN BOOLEAN MODE) AND status ='publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(45): Model_Search->manual_query('SELECT * FROM `...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-17 01:35:38 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/classes/controller/search.php [ 110 ]
2014-06-17 01:35:38 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/classes/controller/search.php [ 110 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(110): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 110, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 01:36:08 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$title ~ MODPATH/_modules/site/classes/controller/search.php [ 109 ]
2014-06-17 01:36:08 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$title ~ MODPATH/_modules/site/classes/controller/search.php [ 109 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(109): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 109, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 01:36:25 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/classes/controller/search.php [ 109 ]
2014-06-17 01:36:25 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/classes/controller/search.php [ 109 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(109): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 109, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 01:36:33 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/classes/controller/search.php [ 110 ]
2014-06-17 01:36:33 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/classes/controller/search.php [ 110 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(110): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 110, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 01:37:44 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/classes/controller/search.php [ 109 ]
2014-06-17 01:37:44 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/classes/controller/search.php [ 109 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(109): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 109, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 01:37:59 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/classes/controller/search.php [ 109 ]
2014-06-17 01:37:59 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/classes/controller/search.php [ 109 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(109): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 109, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 01:38:01 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/classes/controller/search.php [ 110 ]
2014-06-17 01:38:01 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/classes/controller/search.php [ 110 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(110): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 110, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 01:38:03 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/classes/controller/search.php [ 200 ]
2014-06-17 01:38:03 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/classes/controller/search.php [ 200 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(200): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 200, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 02:07:58 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_page' doesn't exist [ SELECT * FROM `tbl_page_content` LEFT JOIN `tbl_page` ON `tbl_page`.`id` = `tbl_page_content`.`page_id` WHERE MATCH (subject,synopsis,text) AGAINST ('Monotonectally*' IN BOOLEAN MODE) AND lang_id ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-17 02:07:58 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_page' doesn't exist [ SELECT * FROM `tbl_page_content` LEFT JOIN `tbl_page` ON `tbl_page`.`id` = `tbl_page_content`.`page_id` WHERE MATCH (subject,synopsis,text) AGAINST ('Monotonectally*' IN BOOLEAN MODE) AND lang_id ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(71): Model_Search->manual_query('SELECT * FROM `...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-17 02:08:12 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_product_category' doesn't exist [ SELECT * FROM `tbl_product_category_content` LEFT JOIN `tbl_product_category` ON `tbl_product_category`.`id` = `tbl_product_category_content`.`category_id` WHERE MATCH (subject,text) AGAINST ('Monotonectally*' IN BOOLEAN MODE) AND lang_id ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-17 02:08:12 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_product_category' doesn't exist [ SELECT * FROM `tbl_product_category_content` LEFT JOIN `tbl_product_category` ON `tbl_product_category`.`id` = `tbl_product_category_content`.`category_id` WHERE MATCH (subject,text) AGAINST ('Monotonectally*' IN BOOLEAN MODE) AND lang_id ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(77): Model_Search->manual_query('SELECT * FROM `...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-17 02:08:28 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_product' doesn't exist [ SELECT * FROM `tbl_product_content` LEFT JOIN `tbl_product` ON `tbl_product`.`id` = `tbl_product_content`.`product_id` WHERE MATCH (subject,text,overview,features,specification) AGAINST ('Monotonectally*' IN BOOLEAN MODE) AND lang_id ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-17 02:08:28 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_product' doesn't exist [ SELECT * FROM `tbl_product_content` LEFT JOIN `tbl_product` ON `tbl_product`.`id` = `tbl_product_content`.`product_id` WHERE MATCH (subject,text,overview,features,specification) AGAINST ('Monotonectally*' IN BOOLEAN MODE) AND lang_id ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(84): Model_Search->manual_query('SELECT * FROM `...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-17 02:08:38 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_solution_category' doesn't exist [ SELECT * FROM `tbl_solution_category_content` LEFT JOIN `tbl_solution_category` ON `tbl_solution_category`.`id` = `tbl_solution_category_content`.`category_id` WHERE MATCH (subject,text) AGAINST ('Monotonectally*' IN BOOLEAN MODE) AND lang_id ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-17 02:08:38 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_solution_category' doesn't exist [ SELECT * FROM `tbl_solution_category_content` LEFT JOIN `tbl_solution_category` ON `tbl_solution_category`.`id` = `tbl_solution_category_content`.`category_id` WHERE MATCH (subject,text) AGAINST ('Monotonectally*' IN BOOLEAN MODE) AND lang_id ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(97): Model_Search->manual_query('SELECT * FROM `...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-17 02:08:51 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_solution' doesn't exist [ SELECT * FROM `tbl_solution_content` LEFT JOIN `tbl_solution` ON `tbl_solution`.`id` = `tbl_solution_content`.`solution_id` WHERE MATCH (subject,synopsis,text,combination1,combination2,combination3) AGAINST ('Monotonectally*' IN BOOLEAN MODE) AND lang_id ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-17 02:08:51 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_solution' doesn't exist [ SELECT * FROM `tbl_solution_content` LEFT JOIN `tbl_solution` ON `tbl_solution`.`id` = `tbl_solution_content`.`solution_id` WHERE MATCH (subject,synopsis,text,combination1,combination2,combination3) AGAINST ('Monotonectally*' IN BOOLEAN MODE) AND lang_id ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(104): Model_Search->manual_query('SELECT * FROM `...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-17 02:09:57 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/products.php [ 317 ]
2014-06-17 02:09:57 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/products.php [ 317 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(317): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 317, Array)
#1 [internal function]: Controller_Products->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 02:12:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: sql3 ~ MODPATH/_modules/site/classes/controller/search.php [ 79 ]
2014-06-17 02:12:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: sql3 ~ MODPATH/_modules/site/classes/controller/search.php [ 79 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 79, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 02:13:28 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/classes/controller/search.php [ 149 ]
2014-06-17 02:13:28 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/classes/controller/search.php [ 149 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(149): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 149, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 02:49:19 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tbl_page_category_content.subject' in 'where clause' [ SELECT * FROM `tbl_page_content` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` WHERE MATCH (`tbl_page_category_content`.`subject`,`tbl_page_category_content`.`synopsis`,`tbl_page_category_content`.`text`) AGAINST ('SINCE*' IN BOOLEAN MODE) AND `tbl_page_category_content`.`lang_id` ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-17 02:49:19 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tbl_page_category_content.subject' in 'where clause' [ SELECT * FROM `tbl_page_content` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` WHERE MATCH (`tbl_page_category_content`.`subject`,`tbl_page_category_content`.`synopsis`,`tbl_page_category_content`.`text`) AGAINST ('SINCE*' IN BOOLEAN MODE) AND `tbl_page_category_content`.`lang_id` ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(70): Model_Search->manual_query('SELECT * FROM `...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-17 02:50:14 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tbl_page_category_content.lang_id' in 'where clause' [ SELECT * FROM `tbl_page_content` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` WHERE MATCH (`tbl_page_content`.`subject`,`tbl_page_content`.`synopsis`,`tbl_page_content`.`text`) AGAINST ('SINCE*' IN BOOLEAN MODE) AND `tbl_page_category_content`.`lang_id` ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-17 02:50:14 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tbl_page_category_content.lang_id' in 'where clause' [ SELECT * FROM `tbl_page_content` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` WHERE MATCH (`tbl_page_content`.`subject`,`tbl_page_content`.`synopsis`,`tbl_page_content`.`text`) AGAINST ('SINCE*' IN BOOLEAN MODE) AND `tbl_page_category_content`.`lang_id` ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(70): Model_Search->manual_query('SELECT * FROM `...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-17 02:55:30 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'text`) AGAINST ('hentinya*' IN BOOLEAN MODE) AND `tbl_testimonial_content`.`lang' at line 1 [ SELECT * FROM `tbl_testimonial_content` LEFT JOIN `tbl_testimonials` ON `tbl_testimonials`.`id` = `tbl_testimonial_content`.`testimonial_id` WHERE MATCH (`tbl_testimonial_content`.`subject`,`tbl_testimonial_content'.`text`) AGAINST ('hentinya*' IN BOOLEAN MODE) AND `tbl_testimonial_content`.`lang_id` ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-17 02:55:30 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'text`) AGAINST ('hentinya*' IN BOOLEAN MODE) AND `tbl_testimonial_content`.`lang' at line 1 [ SELECT * FROM `tbl_testimonial_content` LEFT JOIN `tbl_testimonials` ON `tbl_testimonials`.`id` = `tbl_testimonial_content`.`testimonial_id` WHERE MATCH (`tbl_testimonial_content`.`subject`,`tbl_testimonial_content'.`text`) AGAINST ('hentinya*' IN BOOLEAN MODE) AND `tbl_testimonial_content`.`lang_id` ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(113): Model_Search->manual_query('SELECT * FROM `...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-17 02:56:49 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/classes/controller/search.php [ 204 ]
2014-06-17 02:56:49 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/classes/controller/search.php [ 204 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(204): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 204, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 02:57:37 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/classes/controller/search.php [ 256 ]
2014-06-17 02:57:37 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/classes/controller/search.php [ 256 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(256): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 256, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 02:58:13 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 166 ]
2014-06-17 02:58:13 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 166 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(166): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 166, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 02:58:45 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/classes/controller/search.php [ 191 ]
2014-06-17 02:58:45 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/classes/controller/search.php [ 191 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(191): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 191, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 02:59:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL news/read/test-one was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-17 02:59:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL news/read/test-one was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-17 03:00:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL download/test-123456-sdfsd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-17 03:00:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL download/test-123456-sdfsd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-17 03:33:54 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 193 ]
2014-06-17 03:33:54 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 193 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(193): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 193, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 03:35:58 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/_modules/site/classes/controller/search.php [ 198 ]
2014-06-17 03:35:58 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/_modules/site/classes/controller/search.php [ 198 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-17 03:36:07 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_NewsFile::$file_name ~ MODPATH/_modules/site/classes/controller/search.php [ 197 ]
2014-06-17 03:36:07 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_NewsFile::$file_name ~ MODPATH/_modules/site/classes/controller/search.php [ 197 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(197): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 197, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 03:36:29 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 196 ]
2014-06-17 03:36:29 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 196 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(196): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 196, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 03:38:08 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 196 ]
2014-06-17 03:38:08 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 196 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(196): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 196, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 03:38:16 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 196 ]
2014-06-17 03:38:16 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 196 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(196): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 196, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 03:38:28 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 196 ]
2014-06-17 03:38:28 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 196 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(196): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 196, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 03:38:39 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 198 ]
2014-06-17 03:38:39 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 198 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(198): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 198, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 03:40:37 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 196 ]
2014-06-17 03:40:37 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 196 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(196): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 196, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 03:40:56 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 196 ]
2014-06-17 03:40:56 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 196 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(196): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 196, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 03:41:01 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 196 ]
2014-06-17 03:41:01 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 196 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(196): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 196, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 03:41:09 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 196 ]
2014-06-17 03:41:09 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 196 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(196): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 196, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 03:42:40 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 193 ]
2014-06-17 03:42:40 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 193 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(193): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 193, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 03:43:16 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 193 ]
2014-06-17 03:43:16 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 193 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(193): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 193, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 03:43:36 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 193 ]
2014-06-17 03:43:36 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 193 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(193): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 193, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 03:43:48 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 193 ]
2014-06-17 03:43:48 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 193 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(193): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 193, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 03:43:51 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 193 ]
2014-06-17 03:43:51 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 193 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(193): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 193, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 03:44:15 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/site/classes/controller/search.php [ 198 ]
2014-06-17 03:44:15 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/site/classes/controller/search.php [ 198 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(198): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 198, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 03:44:49 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/site/classes/controller/search.php [ 198 ]
2014-06-17 03:44:49 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/site/classes/controller/search.php [ 198 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(198): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 198, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 03:44:57 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/site/classes/controller/search.php [ 198 ]
2014-06-17 03:44:57 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/site/classes/controller/search.php [ 198 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(198): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 198, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 03:45:07 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 193 ]
2014-06-17 03:45:07 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 193 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(193): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 193, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 03:45:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: image ~ MODPATH/_modules/site/classes/controller/search.php [ 198 ]
2014-06-17 03:45:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: image ~ MODPATH/_modules/site/classes/controller/search.php [ 198 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(198): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 198, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 03:46:01 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 195 ]
2014-06-17 03:46:01 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 195 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(195): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 195, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 03:59:44 --- ERROR: Database_Exception [ 1066 ]: Not unique table/alias: 'tbl_download_files' [ SELECT * FROM `tbl_download_file_content` LEFT JOIN `tbl_download_files` ON `tbl_download_files`.`id` = `tbl_download_file_content`.`file_id` LEFT JOIN `tbl_download_files` ON `tbl_download_files`.`download_id` = `tbl_downloads`.`id` WHERE MATCH (`tbl_download_file_content`.`subject`,`tbl_download_file_content`.`text`) AGAINST ('test*' IN BOOLEAN MODE) AND `tbl_download_file_content`.`lang_id` ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-17 03:59:44 --- STRACE: Database_Exception [ 1066 ]: Not unique table/alias: 'tbl_download_files' [ SELECT * FROM `tbl_download_file_content` LEFT JOIN `tbl_download_files` ON `tbl_download_files`.`id` = `tbl_download_file_content`.`file_id` LEFT JOIN `tbl_download_files` ON `tbl_download_files`.`download_id` = `tbl_downloads`.`id` WHERE MATCH (`tbl_download_file_content`.`subject`,`tbl_download_file_content`.`text`) AGAINST ('test*' IN BOOLEAN MODE) AND `tbl_download_file_content`.`lang_id` ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(133): Model_Search->manual_query('SELECT * FROM `...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-17 04:00:40 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tbl_downloads.id' in 'on clause' [ SELECT * FROM `tbl_download_file_content` LEFT JOIN `tbl_download_files` ON `tbl_download_files`.`id` = `tbl_download_file_content`.`file_id` LEFT JOIN `tbl_download_file_files` ON `tbl_download_file_files`.`download_id` = `tbl_downloads`.`id` WHERE MATCH (`tbl_download_file_content`.`subject`,`tbl_download_file_content`.`text`) AGAINST ('test*' IN BOOLEAN MODE) AND `tbl_download_file_content`.`lang_id` ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-17 04:00:40 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tbl_downloads.id' in 'on clause' [ SELECT * FROM `tbl_download_file_content` LEFT JOIN `tbl_download_files` ON `tbl_download_files`.`id` = `tbl_download_file_content`.`file_id` LEFT JOIN `tbl_download_file_files` ON `tbl_download_file_files`.`download_id` = `tbl_downloads`.`id` WHERE MATCH (`tbl_download_file_content`.`subject`,`tbl_download_file_content`.`text`) AGAINST ('test*' IN BOOLEAN MODE) AND `tbl_download_file_content`.`lang_id` ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(133): Model_Search->manual_query('SELECT * FROM `...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-17 04:10:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '''' (T_CONSTANT_ENCAPSED_STRING) ~ MODPATH/_modules/site/classes/controller/search.php [ 310 ]
2014-06-17 04:10:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '''' (T_CONSTANT_ENCAPSED_STRING) ~ MODPATH/_modules/site/classes/controller/search.php [ 310 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-17 04:11:02 --- ERROR: ErrorException [ 8 ]: Undefined index: image ~ MODPATH/_modules/site/classes/controller/search.php [ 310 ]
2014-06-17 04:11:02 --- STRACE: ErrorException [ 8 ]: Undefined index: image ~ MODPATH/_modules/site/classes/controller/search.php [ 310 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(310): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 310, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 04:12:19 --- ERROR: ErrorException [ 8 ]: Undefined index: image ~ MODPATH/_modules/site/classes/controller/search.php [ 311 ]
2014-06-17 04:12:19 --- STRACE: ErrorException [ 8 ]: Undefined index: image ~ MODPATH/_modules/site/classes/controller/search.php [ 311 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(311): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 311, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 04:14:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/testimonial/85b0a198ac4e5de18162be1559b6479e.jpg alt= ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-17 04:14:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/testimonial/85b0a198ac4e5de18162be1559b6479e.jpg alt= ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-06-17 04:14:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/testimonial/85b0a198ac4e5de18162be1559b6479e.jpg alt= ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-17 04:14:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/testimonial/85b0a198ac4e5de18162be1559b6479e.jpg alt= ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-06-17 04:14:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/testimonial/85b0a198ac4e5de18162be1559b6479e.jpg alt= ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-17 04:14:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/testimonial/85b0a198ac4e5de18162be1559b6479e.jpg alt= ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-06-17 04:15:30 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/products.php [ 317 ]
2014-06-17 04:15:30 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/products.php [ 317 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(317): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 317, Array)
#1 [internal function]: Controller_Products->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 04:17:58 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/solution_page.php [ 10 ]
2014-06-17 04:17:58 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/solution_page.php [ 10 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php(10): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 10, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Solution))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-17 04:18:08 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 205 ]
2014-06-17 04:18:08 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 205 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(205): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 205, Array)
#1 [internal function]: Controller_Solution->action_category()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 04:33:09 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 583 ]
2014-06-17 04:33:09 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 583 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(583): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 583, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(458): Controller_Company->_read_testimonial('[A-Za-z0-9\-\s\...')
#2 [internal function]: Controller_Company->action_testimonial()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-17 04:44:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL download/github-for-macosx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-17 04:44:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL download/github-for-macosx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-17 04:44:15 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/products.php [ 317 ]
2014-06-17 04:44:15 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/products.php [ 317 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(317): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 317, Array)
#1 [internal function]: Controller_Products->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 04:45:08 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 141 ]
2014-06-17 04:45:08 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 141 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(141): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 141, Array)
#1 [internal function]: Controller_Solution->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 04:45:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL download/test-123456-sdfsd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-17 04:45:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL download/test-123456-sdfsd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-17 04:54:19 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_ProductCategory::load_by_name() ~ MODPATH/_modules/site/classes/controller/products.php [ 199 ]
2014-06-17 04:54:19 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_ProductCategory::load_by_name() ~ MODPATH/_modules/site/classes/controller/products.php [ 199 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-17 04:57:51 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 583 ]
2014-06-17 04:57:51 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 583 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(583): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 583, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(458): Controller_Company->_read_testimonial('[A-Za-z0-9\-\s\...')
#2 [internal function]: Controller_Company->action_testimonial()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-17 13:22:45 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tbl_products.product_id' in 'on clause' [ SELECT * FROM `tbl_products` LEFT JOIN `tbl_product_content` ON `tbl_product_content`.`id` = `tbl_products`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_product_files`.`product_id` = `tbl_products`.`id` WHERE MATCH (`tbl_product_content`.`subject`,`tbl_product_content`.`text`,`tbl_product_content`.`overview`,`tbl_product_content`.`features`,`tbl_product_content`.`specification`) AGAINST ('pro*' IN BOOLEAN MODE) AND `tbl_products`.`status` ='publish' AND `tbl_product_content`.`lang_id` ='1' LIMIT 0,1; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-17 13:22:45 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tbl_products.product_id' in 'on clause' [ SELECT * FROM `tbl_products` LEFT JOIN `tbl_product_content` ON `tbl_product_content`.`id` = `tbl_products`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_product_files`.`product_id` = `tbl_products`.`id` WHERE MATCH (`tbl_product_content`.`subject`,`tbl_product_content`.`text`,`tbl_product_content`.`overview`,`tbl_product_content`.`features`,`tbl_product_content`.`specification`) AGAINST ('pro*' IN BOOLEAN MODE) AND `tbl_products`.`status` ='publish' AND `tbl_product_content`.`lang_id` ='1' LIMIT 0,1; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(91): Model_Search->manual_query('SELECT * FROM `...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-17 16:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/delete/13 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-17 16:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/delete/13 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-17 16:43:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 770 ]
2014-06-17 16:43:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 770 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-17 16:49:29 --- ERROR: ErrorException [ 4096 ]: Object of class Model_DownloadFile could not be converted to string ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 197 ]
2014-06-17 16:49:29 --- STRACE: ErrorException [ 4096 ]: Object of class Model_DownloadFile could not be converted to string ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 197 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadfile.php(197): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 197, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadfile.php(68): Model_DownloadFile->find(Array, '', 1)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadfile.php(160): Model_DownloadFile->load(Object(Model_DownloadFile))
#3 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(733): Model_DownloadFile->delete('14')
#4 [internal function]: Controller_Backend_DownloadFile->action_delete()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#9 {main}
2014-06-17 16:51:35 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 162 ]
2014-06-17 16:51:35 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 162 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadfile.php(162): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 162, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(733): Model_DownloadFile->delete('14')
#2 [internal function]: Controller_Backend_DownloadFile->action_delete()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-17 16:51:46 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 162 ]
2014-06-17 16:51:46 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 162 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadfile.php(162): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 162, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(733): Model_DownloadFile->delete('14')
#2 [internal function]: Controller_Backend_DownloadFile->action_delete()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-17 16:51:57 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 163 ]
2014-06-17 16:51:57 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadfile.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(733): Model_DownloadFile->delete('14')
#2 [internal function]: Controller_Backend_DownloadFile->action_delete()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-17 16:55:10 --- ERROR: ErrorException [ 1 ]: Call to a member function update() on a non-object ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 163 ]
2014-06-17 16:55:10 --- STRACE: ErrorException [ 1 ]: Call to a member function update() on a non-object ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 163 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-17 16:55:21 --- ERROR: ErrorException [ 1 ]: Call to a member function update() on a non-object ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 162 ]
2014-06-17 16:55:21 --- STRACE: ErrorException [ 1 ]: Call to a member function update() on a non-object ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 162 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-17 16:55:27 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 152 ]
2014-06-17 16:55:27 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 152 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadfile.php(152): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 152, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(758): Model_DownloadFile->delete('14')
#2 [internal function]: Controller_Backend_DownloadFile->action_delete()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-17 16:55:48 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 152 ]
2014-06-17 16:55:48 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 152 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadfile.php(152): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 152, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(758): Model_DownloadFile->delete('15')
#2 [internal function]: Controller_Backend_DownloadFile->action_delete()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-17 16:56:14 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 152 ]
2014-06-17 16:56:14 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 152 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadfile.php(152): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 152, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(758): Model_DownloadFile->delete('51')
#2 [internal function]: Controller_Backend_DownloadFile->action_delete()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-17 16:56:26 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 152 ]
2014-06-17 16:56:26 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 152 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadfile.php(152): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 152, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(758): Model_DownloadFile->delete('17')
#2 [internal function]: Controller_Backend_DownloadFile->action_delete()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-17 16:56:35 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 152 ]
2014-06-17 16:56:35 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 152 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadfile.php(152): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 152, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(758): Model_DownloadFile->delete('16')
#2 [internal function]: Controller_Backend_DownloadFile->action_delete()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-17 16:57:49 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 152 ]
2014-06-17 16:57:49 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 152 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadfile.php(152): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 152, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(758): Model_DownloadFile->delete('47')
#2 [internal function]: Controller_Backend_DownloadFile->action_delete()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-17 16:57:56 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 152 ]
2014-06-17 16:57:56 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 152 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadfile.php(152): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 152, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(758): Model_DownloadFile->delete('52')
#2 [internal function]: Controller_Backend_DownloadFile->action_delete()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-17 16:58:21 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 154 ]
2014-06-17 16:58:21 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 154 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadfile.php(154): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 154, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(758): Model_DownloadFile->delete('11')
#2 [internal function]: Controller_Backend_DownloadFile->action_delete()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-17 16:58:47 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 154 ]
2014-06-17 16:58:47 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 154 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadfile.php(154): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 154, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(758): Model_DownloadFile->delete('7')
#2 [internal function]: Controller_Backend_DownloadFile->action_delete()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-17 18:17:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: update_order ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 835 ]
2014-06-17 18:17:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: update_order ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 835 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(835): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 835, Array)
#1 [internal function]: Controller_Backend_DownloadFile->action_order()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 18:17:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: update_order ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 835 ]
2014-06-17 18:17:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: update_order ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 835 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(835): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 835, Array)
#1 [internal function]: Controller_Backend_DownloadFile->action_order()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 18:18:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: update_order ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 835 ]
2014-06-17 18:18:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: update_order ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 835 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(835): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 835, Array)
#1 [internal function]: Controller_Backend_DownloadFile->action_order()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 18:18:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: update_order ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 835 ]
2014-06-17 18:18:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: update_order ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 835 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(835): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 835, Array)
#1 [internal function]: Controller_Backend_DownloadFile->action_order()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 18:19:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: update_order ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 835 ]
2014-06-17 18:19:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: update_order ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 835 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(835): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 835, Array)
#1 [internal function]: Controller_Backend_DownloadFile->action_order()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 18:20:30 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_download_types` WHERE `name` = 'sort' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-17 18:20:30 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_download_types` WHERE `name` = 'sort' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(326): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(100): Model_DownloadType->find_count(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(141): Model_DownloadType->load_by_name('sort')
#3 [internal function]: Controller_Backend_DownloadFile->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-17 22:16:14 --- ERROR: ErrorException [ 2 ]: print_r() expects at least 1 parameter, 0 given ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 826 ]
2014-06-17 22:16:14 --- STRACE: ErrorException [ 2 ]: print_r() expects at least 1 parameter, 0 given ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 826 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'print_r() expec...', '/Volumes/Data/w...', 826, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(826): print_r()
#2 [internal function]: Controller_Backend_DownloadFile->action_order()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-17 22:16:28 --- ERROR: ErrorException [ 2 ]: print_r() expects at least 1 parameter, 0 given ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 826 ]
2014-06-17 22:16:28 --- STRACE: ErrorException [ 2 ]: print_r() expects at least 1 parameter, 0 given ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 826 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'print_r() expec...', '/Volumes/Data/w...', 826, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(826): print_r()
#2 [internal function]: Controller_Backend_DownloadFile->action_order()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-17 23:19:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: order_default ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 834 ]
2014-06-17 23:19:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: order_default ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 834 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(834): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 834, Array)
#1 [internal function]: Controller_Backend_DownloadFile->action_order()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-17 23:59:33 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_DownloadFile::$id31 ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 835 ]
2014-06-17 23:59:33 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_DownloadFile::$id31 ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 835 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(835): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 835, Array)
#1 [internal function]: Controller_Backend_DownloadFile->action_order()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}