<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-27 00:00:42 --- ERROR: Database_Exception [ 1066 ]: Not unique table/alias: 'tbl_page_content' [ SELECT * FROM `tbl_page_content` LEFT JOIN `tbl_page_content` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` LEFT JOIN `tbl_page_files` ON `tbl_pages`.`id` = `tbl_page_files`.`page_id` WHERE `tbl_page_content`.`lang_id` ='1'AND `tbl_page_content`.`text` LIKE '%Dengan%' OR `tbl_page_content`.`subject` LIKE '%Dengan%' OR `tbl_page_content`.`synopsis` LIKE '%Dengan%' OR `tbl_pages`.`title` LIKE '%Dengan%' AND `tbl_pages`.`status` ='publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-27 00:00:42 --- STRACE: Database_Exception [ 1066 ]: Not unique table/alias: 'tbl_page_content' [ SELECT * FROM `tbl_page_content` LEFT JOIN `tbl_page_content` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` LEFT JOIN `tbl_page_files` ON `tbl_pages`.`id` = `tbl_page_files`.`page_id` WHERE `tbl_page_content`.`lang_id` ='1'AND `tbl_page_content`.`text` LIKE '%Dengan%' OR `tbl_page_content`.`subject` LIKE '%Dengan%' OR `tbl_page_content`.`synopsis` LIKE '%Dengan%' OR `tbl_pages`.`title` LIKE '%Dengan%' AND `tbl_pages`.`status` ='publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(97): Model_Search->manual_query('SELECT * FROM `...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-27 00:01:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$db_result2' (T_VARIABLE) ~ MODPATH/_modules/site/classes/controller/search.php [ 97 ]
2014-06-27 00:01:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$db_result2' (T_VARIABLE) ~ MODPATH/_modules/site/classes/controller/search.php [ 97 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-27 00:01:09 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$title ~ MODPATH/_modules/site/classes/controller/search.php [ 205 ]
2014-06-27 00:01:09 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$title ~ MODPATH/_modules/site/classes/controller/search.php [ 205 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(205): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 205, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-27 00:01:23 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$title ~ MODPATH/_modules/site/classes/controller/search.php [ 206 ]
2014-06-27 00:01:23 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$title ~ MODPATH/_modules/site/classes/controller/search.php [ 206 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(206): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 206, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-27 00:27:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '.' ~ MODPATH/_modules/site/classes/controller/search.php [ 100 ]
2014-06-27 00:27:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '.' ~ MODPATH/_modules/site/classes/controller/search.php [ 100 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-27 00:27:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '.' ~ MODPATH/_modules/site/classes/controller/search.php [ 100 ]
2014-06-27 00:27:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '.' ~ MODPATH/_modules/site/classes/controller/search.php [ 100 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-27 00:27:08 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND `tbl_page_content`.`text` LIKE '%Dengan%' OR `tbl_page_content`.`subject` LI' at line 1 [ SELECT * FROM `tbl_page_content` AND `tbl_page_content`.`text` LIKE '%Dengan%' OR `tbl_page_content`.`subject` LIKE '%Dengan%' OR `tbl_page_content`.`synopsis` LIKE '%Dengan%' AND `tbl_page_content`.`lang_id` ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-27 00:27:08 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND `tbl_page_content`.`text` LIKE '%Dengan%' OR `tbl_page_content`.`subject` LI' at line 1 [ SELECT * FROM `tbl_page_content` AND `tbl_page_content`.`text` LIKE '%Dengan%' OR `tbl_page_content`.`subject` LIKE '%Dengan%' OR `tbl_page_content`.`synopsis` LIKE '%Dengan%' AND `tbl_page_content`.`lang_id` ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(105): Model_Search->manual_query('SELECT * FROM `...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-27 00:27:13 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND `tbl_page_content`.`text` LIKE '%Dengan%' OR `tbl_page_content`.`subject` LI' at line 1 [ SELECT * FROM `tbl_page_content` AND `tbl_page_content`.`text` LIKE '%Dengan%' OR `tbl_page_content`.`subject` LIKE '%Dengan%' AND `tbl_page_content`.`lang_id` ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-27 00:27:13 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND `tbl_page_content`.`text` LIKE '%Dengan%' OR `tbl_page_content`.`subject` LI' at line 1 [ SELECT * FROM `tbl_page_content` AND `tbl_page_content`.`text` LIKE '%Dengan%' OR `tbl_page_content`.`subject` LIKE '%Dengan%' AND `tbl_page_content`.`lang_id` ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(104): Model_Search->manual_query('SELECT * FROM `...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-27 00:27:21 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$title ~ MODPATH/_modules/site/classes/controller/search.php [ 213 ]
2014-06-27 00:27:21 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$title ~ MODPATH/_modules/site/classes/controller/search.php [ 213 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(213): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 213, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-27 00:27:39 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$file_name ~ MODPATH/_modules/site/classes/controller/search.php [ 216 ]
2014-06-27 00:27:39 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$file_name ~ MODPATH/_modules/site/classes/controller/search.php [ 216 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(216): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 216, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-27 00:28:20 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `tbl_page_content`.`subject` LIKE '%Dengan%' AND `tbl_page_content`.`lang_' at line 1 [ SELECT * FROM `tbl_page_content` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` LEFT JOIN `tbl_page_files` ON `tbl_pages`.`id` = `tbl_page_files`.`page_id` WHERE `tbl_page_content`.`text` LIKE '%Dengan%' WHERE `tbl_page_content`.`subject` LIKE '%Dengan%' AND `tbl_page_content`.`lang_id` ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-27 00:28:20 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `tbl_page_content`.`subject` LIKE '%Dengan%' AND `tbl_page_content`.`lang_' at line 1 [ SELECT * FROM `tbl_page_content` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` LEFT JOIN `tbl_page_files` ON `tbl_pages`.`id` = `tbl_page_files`.`page_id` WHERE `tbl_page_content`.`text` LIKE '%Dengan%' WHERE `tbl_page_content`.`subject` LIKE '%Dengan%' AND `tbl_page_content`.`lang_id` ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(104): Model_Search->manual_query('SELECT * FROM `...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-27 00:31:13 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `tbl_page_files` ON `tbl_pages`.`id` = `tbl_page_files`.`page_id` AND ' at line 1 [ SELECT * FROM `tbl_page_content` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` WHERE `tbl_page_content`.`synopsis` LIKE '%dari%' LEFT JOIN `tbl_page_files` ON `tbl_pages`.`id` = `tbl_page_files`.`page_id` AND `tbl_page_content`.`subject` LIKE '%dari%' WHERE `tbl_page_content`.`text` LIKE '%dari%' AND `tbl_page_content`.`lang_id` ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-27 00:31:13 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `tbl_page_files` ON `tbl_pages`.`id` = `tbl_page_files`.`page_id` AND ' at line 1 [ SELECT * FROM `tbl_page_content` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` WHERE `tbl_page_content`.`synopsis` LIKE '%dari%' LEFT JOIN `tbl_page_files` ON `tbl_pages`.`id` = `tbl_page_files`.`page_id` AND `tbl_page_content`.`subject` LIKE '%dari%' WHERE `tbl_page_content`.`text` LIKE '%dari%' AND `tbl_page_content`.`lang_id` ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(105): Model_Search->manual_query('SELECT * FROM `...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-27 00:33:40 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM `tbl_page_content` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_co' at line 1 [ SELECT *, `tbl_pages`.`title`,`tbl_pages`.`id`, FROM `tbl_page_content` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` AND `tbl_page_content`.`subject` LIKE '%pro%' WHERE `tbl_page_content`.`text` LIKE '%pro%' AND `tbl_page_content`.`lang_id` ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-27 00:33:40 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM `tbl_page_content` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_co' at line 1 [ SELECT *, `tbl_pages`.`title`,`tbl_pages`.`id`, FROM `tbl_page_content` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` AND `tbl_page_content`.`subject` LIKE '%pro%' WHERE `tbl_page_content`.`text` LIKE '%pro%' AND `tbl_page_content`.`lang_id` ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(105): Model_Search->manual_query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-27 00:33:44 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM `tbl_page_content` AND `tbl_page_content`.`subject` LIKE '%pro%' WHERE `tbl' at line 1 [ SELECT *, `tbl_pages`.`title`,`tbl_pages`.`id`, FROM `tbl_page_content` AND `tbl_page_content`.`subject` LIKE '%pro%' WHERE `tbl_page_content`.`text` LIKE '%pro%' AND `tbl_page_content`.`lang_id` ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-27 00:33:44 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM `tbl_page_content` AND `tbl_page_content`.`subject` LIKE '%pro%' WHERE `tbl' at line 1 [ SELECT *, `tbl_pages`.`title`,`tbl_pages`.`id`, FROM `tbl_page_content` AND `tbl_page_content`.`subject` LIKE '%pro%' WHERE `tbl_page_content`.`text` LIKE '%pro%' AND `tbl_page_content`.`lang_id` ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(105): Model_Search->manual_query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-27 00:33:47 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM `tbl_page_content` WHERE `tbl_page_content`.`text` LIKE '%pro%' AND `tbl_pa' at line 1 [ SELECT *, `tbl_pages`.`title`,`tbl_pages`.`id`, FROM `tbl_page_content` WHERE `tbl_page_content`.`text` LIKE '%pro%' AND `tbl_page_content`.`lang_id` ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-27 00:33:47 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM `tbl_page_content` WHERE `tbl_page_content`.`text` LIKE '%pro%' AND `tbl_pa' at line 1 [ SELECT *, `tbl_pages`.`title`,`tbl_pages`.`id`, FROM `tbl_page_content` WHERE `tbl_page_content`.`text` LIKE '%pro%' AND `tbl_page_content`.`lang_id` ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(105): Model_Search->manual_query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-27 00:33:55 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tbl_pages.title' in 'field list' [ SELECT *, `tbl_pages`.`title`,`tbl_pages`.`id` FROM `tbl_page_content` WHERE `tbl_page_content`.`text` LIKE '%pro%' AND `tbl_page_content`.`lang_id` ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-27 00:33:55 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tbl_pages.title' in 'field list' [ SELECT *, `tbl_pages`.`title`,`tbl_pages`.`id` FROM `tbl_page_content` WHERE `tbl_page_content`.`text` LIKE '%pro%' AND `tbl_page_content`.`lang_id` ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(105): Model_Search->manual_query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-27 00:34:15 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tbl_pages.title' in 'field list' [ SELECT *, `tbl_pages`.`title`,`tbl_pages`.`id` FROM `tbl_page_content` WHERE `tbl_page_content`.`text` LIKE '%pro%' AND `tbl_page_content`.`lang_id` ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-27 00:34:15 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tbl_pages.title' in 'field list' [ SELECT *, `tbl_pages`.`title`,`tbl_pages`.`id` FROM `tbl_page_content` WHERE `tbl_page_content`.`text` LIKE '%pro%' AND `tbl_page_content`.`lang_id` ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(105): Model_Search->manual_query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-27 00:34:20 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tbl_pages.id' in 'on clause' [ SELECT *, `tbl_pages`.`title`,`tbl_pages`.`id` FROM `tbl_page_content` LEFT JOIN `tbl_page_files` ON `tbl_pages`.`id` = `tbl_page_files`.`page_id` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` WHERE `tbl_page_content`.`text` LIKE '%pro%' AND `tbl_page_content`.`lang_id` ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-27 00:34:20 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tbl_pages.id' in 'on clause' [ SELECT *, `tbl_pages`.`title`,`tbl_pages`.`id` FROM `tbl_page_content` LEFT JOIN `tbl_page_files` ON `tbl_pages`.`id` = `tbl_page_files`.`page_id` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` WHERE `tbl_page_content`.`text` LIKE '%pro%' AND `tbl_page_content`.`lang_id` ='1'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(105): Model_Search->manual_query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-27 00:34:32 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tbl_pages.id' in 'on clause' [ SELECT *, `tbl_pages`.`title`,`tbl_pages`.`id` FROM `tbl_page_content` LEFT JOIN `tbl_page_files` ON `tbl_pages`.`id` = `tbl_page_files`.`page_id` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` WHERE `tbl_page_content`.`text` LIKE '%pro%' AND `tbl_page_content`.`lang_id` ='1' OR `tbl_pages`.`title` LIKE '%pro%' AND `tbl_pages`.`status` ='publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-27 00:34:32 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tbl_pages.id' in 'on clause' [ SELECT *, `tbl_pages`.`title`,`tbl_pages`.`id` FROM `tbl_page_content` LEFT JOIN `tbl_page_files` ON `tbl_pages`.`id` = `tbl_page_files`.`page_id` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` WHERE `tbl_page_content`.`text` LIKE '%pro%' AND `tbl_page_content`.`lang_id` ='1' OR `tbl_pages`.`title` LIKE '%pro%' AND `tbl_pages`.`status` ='publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(105): Model_Search->manual_query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-27 00:34:36 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tbl_pages.id' in 'on clause' [ SELECT *, `tbl_pages`.`title`,`tbl_pages`.`id` FROM `tbl_page_content` LEFT JOIN `tbl_page_files` ON `tbl_pages`.`id` = `tbl_page_files`.`page_id` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` WHERE `tbl_page_content`.`text` LIKE '%pro%' AND `tbl_page_content`.`lang_id` ='1' OR `tbl_pages`.`title` LIKE '%pro%' AND `tbl_pages`.`status` ='publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-27 00:34:36 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tbl_pages.id' in 'on clause' [ SELECT *, `tbl_pages`.`title`,`tbl_pages`.`id` FROM `tbl_page_content` LEFT JOIN `tbl_page_files` ON `tbl_pages`.`id` = `tbl_page_files`.`page_id` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` WHERE `tbl_page_content`.`text` LIKE '%pro%' AND `tbl_page_content`.`lang_id` ='1' OR `tbl_pages`.`title` LIKE '%pro%' AND `tbl_pages`.`status` ='publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(104): Model_Search->manual_query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-27 00:34:44 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tbl_pages.id' in 'on clause' [ SELECT *, `tbl_pages`.`title`,`tbl_pages`.`id` FROM `tbl_page_content` LEFT JOIN `tbl_page_files` ON `tbl_pages`.`id` = `tbl_page_files`.`page_id` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` WHERE `tbl_page_content`.`text` LIKE '%pro%' AND `tbl_page_content`.`synopsis` LIKE '%pro%' AND `tbl_page_content`.`subject` LIKE '%pro%' AND `tbl_page_content`.`lang_id` ='1' OR `tbl_pages`.`title` LIKE '%pro%' AND `tbl_pages`.`status` ='publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-27 00:34:44 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tbl_pages.id' in 'on clause' [ SELECT *, `tbl_pages`.`title`,`tbl_pages`.`id` FROM `tbl_page_content` LEFT JOIN `tbl_page_files` ON `tbl_pages`.`id` = `tbl_page_files`.`page_id` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` WHERE `tbl_page_content`.`text` LIKE '%pro%' AND `tbl_page_content`.`synopsis` LIKE '%pro%' AND `tbl_page_content`.`subject` LIKE '%pro%' AND `tbl_page_content`.`lang_id` ='1' OR `tbl_pages`.`title` LIKE '%pro%' AND `tbl_pages`.`status` ='publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(104): Model_Search->manual_query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-27 00:35:07 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tbl_pages.id' in 'on clause' [ SELECT *, `tbl_pages`.`title`,`tbl_pages`.`id` FROM `tbl_page_content` LEFT JOIN `tbl_page_files` ON `tbl_pages`.`id` = `tbl_page_files`.`page_id` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` WHERE `tbl_page_content`.`text` LIKE '%pro%' AND `tbl_page_content`.`synopsis` LIKE '%pro%' AND `tbl_page_content`.`subject` LIKE '%pro%' AND `tbl_page_content`.`lang_id` ='1' AND `tbl_pages`.`title` LIKE '%pro%' AND `tbl_pages`.`status` ='publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-27 00:35:07 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tbl_pages.id' in 'on clause' [ SELECT *, `tbl_pages`.`title`,`tbl_pages`.`id` FROM `tbl_page_content` LEFT JOIN `tbl_page_files` ON `tbl_pages`.`id` = `tbl_page_files`.`page_id` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` WHERE `tbl_page_content`.`text` LIKE '%pro%' AND `tbl_page_content`.`synopsis` LIKE '%pro%' AND `tbl_page_content`.`subject` LIKE '%pro%' AND `tbl_page_content`.`lang_id` ='1' AND `tbl_pages`.`title` LIKE '%pro%' AND `tbl_pages`.`status` ='publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(104): Model_Search->manual_query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-27 00:35:25 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tbl_pages.id' in 'on clause' [ SELECT *, `tbl_pages`.`title`,`tbl_pages`.`id` FROM `tbl_page_content` LEFT JOIN `tbl_page_files` ON `tbl_pages`.`id` = `tbl_page_files`.`page_id` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` WHERE `tbl_page_content`.`lang_id` ='1' AND `tbl_page_content`.`text` LIKE '%pro%' AND `tbl_page_content`.`synopsis` LIKE '%pro%' AND `tbl_page_content`.`subject` LIKE '%pro%' OR `tbl_pages`.`title` LIKE '%pro%' AND `tbl_pages`.`status` ='publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-27 00:35:25 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tbl_pages.id' in 'on clause' [ SELECT *, `tbl_pages`.`title`,`tbl_pages`.`id` FROM `tbl_page_content` LEFT JOIN `tbl_page_files` ON `tbl_pages`.`id` = `tbl_page_files`.`page_id` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` WHERE `tbl_page_content`.`lang_id` ='1' AND `tbl_page_content`.`text` LIKE '%pro%' AND `tbl_page_content`.`synopsis` LIKE '%pro%' AND `tbl_page_content`.`subject` LIKE '%pro%' OR `tbl_pages`.`title` LIKE '%pro%' AND `tbl_pages`.`status` ='publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(104): Model_Search->manual_query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-27 00:35:38 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tbl_pages.id' in 'on clause' [ SELECT *, `tbl_pages`.`title`,`tbl_pages`.`id` FROM `tbl_page_content` LEFT JOIN `tbl_page_files` ON `tbl_pages`.`id` = `tbl_page_files`.`page_id` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` WHERE `tbl_page_content`.`lang_id` ='1' AND `tbl_page_content`.`text` LIKE '%pro%' AND `tbl_page_content`.`synopsis` LIKE '%pro%' AND `tbl_page_content`.`subject` LIKE '%pro%' OR `tbl_pages`.`title` LIKE '%pro%' AND `tbl_pages`.`status` ='publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-27 00:35:38 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tbl_pages.id' in 'on clause' [ SELECT *, `tbl_pages`.`title`,`tbl_pages`.`id` FROM `tbl_page_content` LEFT JOIN `tbl_page_files` ON `tbl_pages`.`id` = `tbl_page_files`.`page_id` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` WHERE `tbl_page_content`.`lang_id` ='1' AND `tbl_page_content`.`text` LIKE '%pro%' AND `tbl_page_content`.`synopsis` LIKE '%pro%' AND `tbl_page_content`.`subject` LIKE '%pro%' OR `tbl_pages`.`title` LIKE '%pro%' AND `tbl_pages`.`status` ='publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(104): Model_Search->manual_query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-27 00:35:49 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tbl_pages.id' in 'on clause' [ SELECT *, `tbl_pages`.`title`,`tbl_pages`.`id` FROM `tbl_page_content` LEFT JOIN `tbl_page_files` ON `tbl_pages`.`id` = `tbl_page_files`.`page_id` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` WHERE `tbl_page_content`.`lang_id` ='1' AND `tbl_page_content`.`text` LIKE '%pro%' AND `tbl_page_content`.`synopsis` LIKE '%pro%' AND `tbl_page_content`.`subject` LIKE '%pro%' OR `tbl_pages`.`title` LIKE '%pro%' AND `tbl_pages`.`status` ='publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-27 00:35:49 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tbl_pages.id' in 'on clause' [ SELECT *, `tbl_pages`.`title`,`tbl_pages`.`id` FROM `tbl_page_content` LEFT JOIN `tbl_page_files` ON `tbl_pages`.`id` = `tbl_page_files`.`page_id` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` WHERE `tbl_page_content`.`lang_id` ='1' AND `tbl_page_content`.`text` LIKE '%pro%' AND `tbl_page_content`.`synopsis` LIKE '%pro%' AND `tbl_page_content`.`subject` LIKE '%pro%' OR `tbl_pages`.`title` LIKE '%pro%' AND `tbl_pages`.`status` ='publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(104): Model_Search->manual_query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-27 00:36:33 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tbl_pages.id' in 'on clause' [ SELECT *, `tbl_pages`.`title`,`tbl_pages`.`id` FROM `tbl_page_content` LEFT JOIN `tbl_page_files` ON `tbl_pages`.`id` = `tbl_page_files`.`page_id` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` WHERE `tbl_page_content`.`lang_id` ='1' AND `tbl_page_content`.`text` LIKE '%pro%' AND `tbl_page_content`.`synopsis` LIKE '%pro%' AND `tbl_page_content`.`subject` LIKE '%pro%' AND `tbl_pages`.`title` LIKE '%pro%' AND `tbl_pages`.`status` ='publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-27 00:36:33 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tbl_pages.id' in 'on clause' [ SELECT *, `tbl_pages`.`title`,`tbl_pages`.`id` FROM `tbl_page_content` LEFT JOIN `tbl_page_files` ON `tbl_pages`.`id` = `tbl_page_files`.`page_id` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` WHERE `tbl_page_content`.`lang_id` ='1' AND `tbl_page_content`.`text` LIKE '%pro%' AND `tbl_page_content`.`synopsis` LIKE '%pro%' AND `tbl_page_content`.`subject` LIKE '%pro%' AND `tbl_pages`.`title` LIKE '%pro%' AND `tbl_pages`.`status` ='publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(104): Model_Search->manual_query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-27 00:36:59 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tbl_pages.id' in 'on clause' [ SELECT *, `tbl_pages`.`title`,`tbl_pages`.`id` FROM `tbl_page_content` LEFT JOIN `tbl_page_files` ON `tbl_pages`.`id` = `tbl_page_files`.`page_id` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` WHERE `tbl_page_content`.`lang_id` =1 AND `tbl_page_content`.`text` LIKE '%pro%' AND `tbl_page_content`.`synopsis` LIKE '%pro%' AND `tbl_page_content`.`subject` LIKE '%pro%' AND `tbl_pages`.`title` LIKE '%pro%' AND `tbl_pages`.`status` ='publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-27 00:36:59 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tbl_pages.id' in 'on clause' [ SELECT *, `tbl_pages`.`title`,`tbl_pages`.`id` FROM `tbl_page_content` LEFT JOIN `tbl_page_files` ON `tbl_pages`.`id` = `tbl_page_files`.`page_id` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` WHERE `tbl_page_content`.`lang_id` =1 AND `tbl_page_content`.`text` LIKE '%pro%' AND `tbl_page_content`.`synopsis` LIKE '%pro%' AND `tbl_page_content`.`subject` LIKE '%pro%' AND `tbl_pages`.`title` LIKE '%pro%' AND `tbl_pages`.`status` ='publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(104): Model_Search->manual_query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-27 00:37:40 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tbl_pages.id' in 'on clause' [ SELECT *, `tbl_pages`.`title`,`tbl_pages`.`id` FROM `tbl_page_content` LEFT JOIN `tbl_page_files` ON `tbl_pages`.`id` = `tbl_page_files`.`page_id` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` WHERE `tbl_page_content`.`lang_id` =1 AND `tbl_page_content`.`text` LIKE '%pro%' AND `tbl_page_content`.`synopsis` LIKE '%pro%' AND `tbl_page_content`.`subject` LIKE '%pro%' AND `tbl_pages`.`title` LIKE '%pro%' AND `tbl_pages`.`status` ='publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-27 00:37:40 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tbl_pages.id' in 'on clause' [ SELECT *, `tbl_pages`.`title`,`tbl_pages`.`id` FROM `tbl_page_content` LEFT JOIN `tbl_page_files` ON `tbl_pages`.`id` = `tbl_page_files`.`page_id` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` WHERE `tbl_page_content`.`lang_id` =1 AND `tbl_page_content`.`text` LIKE '%pro%' AND `tbl_page_content`.`synopsis` LIKE '%pro%' AND `tbl_page_content`.`subject` LIKE '%pro%' AND `tbl_pages`.`title` LIKE '%pro%' AND `tbl_pages`.`status` ='publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(104): Model_Search->manual_query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-27 00:39:33 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tbl_pages.id' in 'on clause' [ SELECT *, `tbl_pages`.`title`,`tbl_pages`.`id` FROM `tbl_page_content` LEFT JOIN `tbl_page_files` ON `tbl_pages`.`id` = `tbl_page_files`.`page_id` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` WHERE `tbl_page_content`.`lang_id` ='1' OR `tbl_page_content`.`text` LIKE '%pro%' OR `tbl_page_content`.`synopsis` LIKE '%pro%' OR `tbl_page_content`.`subject` LIKE '%pro%' AND `tbl_pages`.`title` LIKE '%pro%' AND `tbl_pages`.`status` ='publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-27 00:39:33 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tbl_pages.id' in 'on clause' [ SELECT *, `tbl_pages`.`title`,`tbl_pages`.`id` FROM `tbl_page_content` LEFT JOIN `tbl_page_files` ON `tbl_pages`.`id` = `tbl_page_files`.`page_id` LEFT JOIN `tbl_pages` ON `tbl_pages`.`id` = `tbl_page_content`.`page_id` WHERE `tbl_page_content`.`lang_id` ='1' OR `tbl_page_content`.`text` LIKE '%pro%' OR `tbl_page_content`.`synopsis` LIKE '%pro%' OR `tbl_page_content`.`subject` LIKE '%pro%' AND `tbl_pages`.`title` LIKE '%pro%' AND `tbl_pages`.`status` ='publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(104): Model_Search->manual_query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-27 02:05:33 --- ERROR: ErrorException [ 8 ]: Undefined index: show_cover ~ MODPATH/_modules/testimonial/classes/controller/backend/testimonial.php [ 236 ]
2014-06-27 02:05:33 --- STRACE: ErrorException [ 8 ]: Undefined index: show_cover ~ MODPATH/_modules/testimonial/classes/controller/backend/testimonial.php [ 236 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/controller/backend/testimonial.php(236): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 236, Array)
#1 [internal function]: Controller_Backend_Testimonial->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-27 02:10:04 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$file_name ~ MODPATH/_modules/site/views/site/home_page.php [ 160 ]
2014-06-27 02:10:04 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$file_name ~ MODPATH/_modules/site/views/site/home_page.php [ 160 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(160): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 160, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(98): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(190): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(88): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-27 02:11:00 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$file_name ~ MODPATH/_modules/site/views/site/home_page.php [ 161 ]
2014-06-27 02:11:00 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$file_name ~ MODPATH/_modules/site/views/site/home_page.php [ 161 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(161): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 161, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(98): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(190): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(88): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-27 02:15:29 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$file_name ~ MODPATH/_modules/site/views/site/home_page.php [ 162 ]
2014-06-27 02:15:29 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$file_name ~ MODPATH/_modules/site/views/site/home_page.php [ 162 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(162): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 162, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(98): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(190): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(88): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-27 02:15:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'exit' (T_EXIT) ~ MODPATH/_modules/site/views/site/home_page.php [ 161 ]
2014-06-27 02:15:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'exit' (T_EXIT) ~ MODPATH/_modules/site/views/site/home_page.php [ 161 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-27 02:15:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'exit' (T_EXIT) ~ MODPATH/_modules/site/views/site/home_page.php [ 161 ]
2014-06-27 02:15:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'exit' (T_EXIT) ~ MODPATH/_modules/site/views/site/home_page.php [ 161 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-27 02:54:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/product/check_title/Language Test Product was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-27 02:54:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/product/check_title/Language Test Product was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-27 02:55:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/solution/check_title/cbcvbvbcvb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-27 02:55:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/solution/check_title/cbcvbvbcvb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-27 12:29:20 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/solution_page.php [ 6 ]
2014-06-27 12:29:20 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/solution_page.php [ 6 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php(6): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 6, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(98): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(190): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Solution))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-27 12:29:32 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/solution_page.php [ 6 ]
2014-06-27 12:29:32 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/solution_page.php [ 6 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php(6): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 6, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(98): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(190): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Solution))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-27 12:35:59 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to __() must be of the type array, string given, called in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php on line 26 and defined ~ SYSPATH/classes/kohana/i18n.php [ 155 ]
2014-06-27 12:35:59 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to __() must be of the type array, string given, called in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php on line 26 and defined ~ SYSPATH/classes/kohana/i18n.php [ 155 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/i18n.php(155): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Volumes/Data/w...', 155, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php(26): __('our', 'Paket Solusi')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(98): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(190): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Themes_Default->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-27 13:11:59 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_PageCategory as array ~ MODPATH/_modules/site/classes/controller/download.php [ 165 ]
2014-06-27 13:11:59 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_PageCategory as array ~ MODPATH/_modules/site/classes/controller/download.php [ 165 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-27 13:13:15 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/download.php [ 83 ]
2014-06-27 13:13:15 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/download.php [ 83 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/download.php(83): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 83, Array)
#1 [internal function]: Controller_Download->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Download))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-27 13:14:50 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_PageCategory as array ~ MODPATH/_modules/site/classes/controller/download.php [ 253 ]
2014-06-27 13:14:50 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_PageCategory as array ~ MODPATH/_modules/site/classes/controller/download.php [ 253 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-27 13:17:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: current_page ~ APPPATH/views/themes/default.php [ 44 ]
2014-06-27 13:17:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: current_page ~ APPPATH/views/themes/default.php [ 44 ]
--
#0 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 44, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(190): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_Default->after()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Download))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#10 {main}
2014-06-27 14:35:07 --- ERROR: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/_modules/site/views/site/about_page.php [ 6 ]
2014-06-27 14:35:07 --- STRACE: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/_modules/site/views/site/about_page.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}