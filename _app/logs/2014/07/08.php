<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-08 01:07:59 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `tbl_products`.`status` !='publish' GROUP BY `tbl_products`.`id`' at line 1 [ SELECT *, `tbl_products`.`title`,`tbl_products`.`id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%' WHERE `tbl_products`.`status` !='publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 01:07:59 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `tbl_products`.`status` !='publish' GROUP BY `tbl_products`.`id`' at line 1 [ SELECT *, `tbl_products`.`title`,`tbl_products`.`id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%' WHERE `tbl_products`.`status` !='publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(79): Model_Search->query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 01:08:07 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `tbl_products`.`status` ='publish' GROUP BY `tbl_products`.`id`' at line 1 [ SELECT *, `tbl_products`.`title`,`tbl_products`.`id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%' WHERE `tbl_products`.`status` ='publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 01:08:07 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `tbl_products`.`status` ='publish' GROUP BY `tbl_products`.`id`' at line 1 [ SELECT *, `tbl_products`.`title`,`tbl_products`.`id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%' WHERE `tbl_products`.`status` ='publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(79): Model_Search->query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 01:08:58 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'publish' in 'where clause' [ SELECT *, `tbl_products`.`title`,`tbl_products`.`id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%' AND `tbl_products`.`status` =`publish` GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 01:08:58 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'publish' in 'where clause' [ SELECT *, `tbl_products`.`title`,`tbl_products`.`id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%' AND `tbl_products`.`status` =`publish` GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(79): Model_Search->query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 01:22:26 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE' at line 1 [ SELECT *, `tbl_products`.`title`,`tbl_products`.`id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_products`.`status` ='publish'WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 01:22:26 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE' at line 1 [ SELECT *, `tbl_products`.`title`,`tbl_products`.`id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_products`.`status` ='publish'WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(80): Model_Search->query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 01:28:24 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT `tbl_products`.`title`,`tbl_products`.`id` FROM `tbl_products` WHERE `tbl_products`.`id` IN (SELECT * FROM `tbl_product_content` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%') AND `tbl_products`.`status` ='publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 01:28:24 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT `tbl_products`.`title`,`tbl_products`.`id` FROM `tbl_products` WHERE `tbl_products`.`id` IN (SELECT * FROM `tbl_product_content` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%') AND `tbl_products`.`status` ='publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT `tbl_pro...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(91): Model_Search->query('SELECT `tbl_pro...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 01:28:56 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$db_result4' (T_VARIABLE) ~ MODPATH/_modules/site/classes/controller/search.php [ 91 ]
2014-07-08 01:28:56 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$db_result4' (T_VARIABLE) ~ MODPATH/_modules/site/classes/controller/search.php [ 91 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-08 01:29:05 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT `tbl_products`.`title`,`tbl_products`.`id` FROM `tbl_products` WHERE `tbl_products`.`id` IN ( SELECT * FROM `tbl_product_content` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%'); ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 01:29:05 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT `tbl_products`.`title`,`tbl_products`.`id` FROM `tbl_products` WHERE `tbl_products`.`id` IN ( SELECT * FROM `tbl_product_content` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%'); ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT `tbl_pro...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(91): Model_Search->query('SELECT `tbl_pro...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 01:29:20 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT `tbl_products`.`title`,`tbl_products`.`id` FROM `tbl_products` WHERE `id` IN ( SELECT * FROM `tbl_product_content` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%'); ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 01:29:20 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT `tbl_products`.`title`,`tbl_products`.`id` FROM `tbl_products` WHERE `id` IN ( SELECT * FROM `tbl_product_content` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%'); ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT `tbl_pro...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(91): Model_Search->query('SELECT `tbl_pro...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 01:29:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$db_result4' (T_VARIABLE) ~ MODPATH/_modules/site/classes/controller/search.php [ 88 ]
2014-07-08 01:29:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$db_result4' (T_VARIABLE) ~ MODPATH/_modules/site/classes/controller/search.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-08 01:29:41 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT `tbl_products`.`title`,`tbl_products`.`id` FROM `tbl_products` WHERE `tbl_products`.`id` IN ( SELECT * FROM `tbl_product_content` WHERE `tbl_product_content`.`lang_id` ='2'); ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 01:29:41 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT `tbl_products`.`title`,`tbl_products`.`id` FROM `tbl_products` WHERE `tbl_products`.`id` IN ( SELECT * FROM `tbl_product_content` WHERE `tbl_product_content`.`lang_id` ='2'); ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT `tbl_pro...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(88): Model_Search->query('SELECT `tbl_pro...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 01:32:29 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tbl_product.id' in 'group statement' [ SELECT *, `tbl_products`.`title`,`tbl_products`.`id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%' AND `tbl_products`.`status` ='publish' GROUP BY `tbl_product`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 01:32:29 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tbl_product.id' in 'group statement' [ SELECT *, `tbl_products`.`title`,`tbl_products`.`id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%' AND `tbl_products`.`status` ='publish' GROUP BY `tbl_product`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(79): Model_Search->query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 01:34:15 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subje' at line 1 [ SELECT *, `tbl_products`.`title`,`tbl_products`.`id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' WHERE `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%' AND `tbl_products`.`status` ='publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 01:34:15 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subje' at line 1 [ SELECT *, `tbl_products`.`title`,`tbl_products`.`id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' WHERE `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%' AND `tbl_products`.`status` ='publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(79): Model_Search->query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 01:35:46 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' GROUP BY `tbl_products`.`id`' at line 1 [ SELECT *, `tbl_products`.`title`,`tbl_products`.`id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%' AND `tbl_products`.`status` =publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 01:35:46 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' GROUP BY `tbl_products`.`id`' at line 1 [ SELECT *, `tbl_products`.`title`,`tbl_products`.`id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%' AND `tbl_products`.`status` =publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(79): Model_Search->query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 01:45:48 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' GROUP BY `tbl_products`.`id`' at line 1 [ SELECT *, `tbl_products`.`title`,`tbl_products`.`id`,`tbl_products`.`status` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%' AND `tbl_products`.`status` =publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 01:45:48 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' GROUP BY `tbl_products`.`id`' at line 1 [ SELECT *, `tbl_products`.`title`,`tbl_products`.`id`,`tbl_products`.`status` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%' AND `tbl_products`.`status` =publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(79): Model_Search->query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 01:47:11 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`.`subject` `tbl_products`.`title`,`tbl_products`.`id`,`tbl_products`.`status` F' at line 1 [ SELECT `tbl_product_content`.`lang_id`,`tbl_product_content`.`text,`tbl_product_content`.`subject` `tbl_products`.`title`,`tbl_products`.`id`,`tbl_products`.`status` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%' AND `tbl_products`.`status` ='publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 01:47:11 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`.`subject` `tbl_products`.`title`,`tbl_products`.`id`,`tbl_products`.`status` F' at line 1 [ SELECT `tbl_product_content`.`lang_id`,`tbl_product_content`.`text,`tbl_product_content`.`subject` `tbl_products`.`title`,`tbl_products`.`id`,`tbl_products`.`status` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%' AND `tbl_products`.`status` ='publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT `tbl_pro...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(79): Model_Search->query('SELECT `tbl_pro...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 01:47:16 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`.`subject`, `tbl_products`.`title`,`tbl_products`.`id`,`tbl_products`.`status` ' at line 1 [ SELECT `tbl_product_content`.`lang_id`,`tbl_product_content`.`text,`tbl_product_content`.`subject`, `tbl_products`.`title`,`tbl_products`.`id`,`tbl_products`.`status` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%' AND `tbl_products`.`status` ='publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 01:47:16 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`.`subject`, `tbl_products`.`title`,`tbl_products`.`id`,`tbl_products`.`status` ' at line 1 [ SELECT `tbl_product_content`.`lang_id`,`tbl_product_content`.`text,`tbl_product_content`.`subject`, `tbl_products`.`title`,`tbl_products`.`id`,`tbl_products`.`status` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%' AND `tbl_products`.`status` ='publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT `tbl_pro...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(79): Model_Search->query('SELECT `tbl_pro...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 01:47:33 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`.`subject`, `tbl_products`.`title`,`tbl_products`.`id`,`tbl_products`.`status` ' at line 1 [ SELECT `tbl_product_content`.`lang_id`,`tbl_product_content`.`text,`tbl_product_content`.`subject`, `tbl_products`.`title`,`tbl_products`.`id`,`tbl_products`.`status` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%' AND `tbl_products`.`status` ='publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 01:47:33 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`.`subject`, `tbl_products`.`title`,`tbl_products`.`id`,`tbl_products`.`status` ' at line 1 [ SELECT `tbl_product_content`.`lang_id`,`tbl_product_content`.`text,`tbl_product_content`.`subject`, `tbl_products`.`title`,`tbl_products`.`id`,`tbl_products`.`status` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%' AND `tbl_products`.`status` ='publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT `tbl_pro...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(79): Model_Search->query('SELECT `tbl_pro...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 01:48:24 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$file_name ~ MODPATH/_modules/site/classes/controller/search.php [ 209 ]
2014-07-08 01:48:24 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$file_name ~ MODPATH/_modules/site/classes/controller/search.php [ 209 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(209): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 209, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-08 01:49:18 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.`file_name`,`tbl_product_files`.`product_id` FROM `tbl_product_content` LEFT JO' at line 1 [ SELECT `tbl_product_content`.`lang_id`,`tbl_product_content`.`text`, `tbl_product_content`.`subject`, `tbl_products`.`title`,`tbl_products`.`id`,`tbl_products`.`status` `tbl_product_files`.`file_name`,`tbl_product_files`.`product_id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%' AND `tbl_products`.`status` ='publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 01:49:18 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.`file_name`,`tbl_product_files`.`product_id` FROM `tbl_product_content` LEFT JO' at line 1 [ SELECT `tbl_product_content`.`lang_id`,`tbl_product_content`.`text`, `tbl_product_content`.`subject`, `tbl_products`.`title`,`tbl_products`.`id`,`tbl_products`.`status` `tbl_product_files`.`file_name`,`tbl_product_files`.`product_id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%' AND `tbl_products`.`status` ='publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT `tbl_pro...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(82): Model_Search->query('SELECT `tbl_pro...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 01:49:36 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' GROUP BY `tbl_products`.`id`' at line 1 [ SELECT `tbl_product_content`.`lang_id`,`tbl_product_content`.`text`, `tbl_product_content`.`subject`, `tbl_products`.`title`,`tbl_products`.`id`,`tbl_products`.`status`, `tbl_product_files`.`file_name`,`tbl_product_files`.`product_id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%' AND `tbl_products`.`status` =publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 01:49:36 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' GROUP BY `tbl_products`.`id`' at line 1 [ SELECT `tbl_product_content`.`lang_id`,`tbl_product_content`.`text`, `tbl_product_content`.`subject`, `tbl_products`.`title`,`tbl_products`.`id`,`tbl_products`.`status`, `tbl_product_files`.`file_name`,`tbl_product_files`.`product_id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%' AND `tbl_products`.`status` =publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT `tbl_pro...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(82): Model_Search->query('SELECT `tbl_pro...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 01:51:36 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'publish' in 'where clause' [ SELECT `tbl_product_content`.`lang_id`,`tbl_product_content`.`text`, `tbl_product_content`.`subject`, `tbl_products`.`title`,`tbl_products`.`id`,`tbl_products`.`status`, `tbl_product_files`.`file_name`,`tbl_product_files`.`product_id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%' AND `tbl_products`.`status` = publish GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 01:51:36 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'publish' in 'where clause' [ SELECT `tbl_product_content`.`lang_id`,`tbl_product_content`.`text`, `tbl_product_content`.`subject`, `tbl_products`.`title`,`tbl_products`.`id`,`tbl_products`.`status`, `tbl_product_files`.`file_name`,`tbl_product_files`.`product_id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%' AND `tbl_products`.`status` = publish GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT `tbl_pro...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(82): Model_Search->query('SELECT `tbl_pro...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 01:51:51 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `tbl_products`.`status` ='publish' GROUP BY `tbl_products`.`id`' at line 1 [ SELECT `tbl_product_content`.`lang_id`,`tbl_product_content`.`text`, `tbl_product_content`.`subject`, `tbl_products`.`title`,`tbl_products`.`id`,`tbl_products`.`status`, `tbl_product_files`.`file_name`,`tbl_product_files`.`product_id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%' WHERE `tbl_products`.`status` ='publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 01:51:51 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `tbl_products`.`status` ='publish' GROUP BY `tbl_products`.`id`' at line 1 [ SELECT `tbl_product_content`.`lang_id`,`tbl_product_content`.`text`, `tbl_product_content`.`subject`, `tbl_products`.`title`,`tbl_products`.`id`,`tbl_products`.`status`, `tbl_product_files`.`file_name`,`tbl_product_files`.`product_id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%' WHERE `tbl_products`.`status` ='publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT `tbl_pro...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(82): Model_Search->query('SELECT `tbl_pro...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 01:52:14 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE' at line 1 [ SELECT `tbl_product_content`.`lang_id`,`tbl_product_content`.`text`, `tbl_product_content`.`subject`, `tbl_products`.`title`,`tbl_products`.`id`,`tbl_products`.`status`, `tbl_product_files`.`file_name`,`tbl_product_files`.`product_id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_products`.`status` ='publish' WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 01:52:14 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE' at line 1 [ SELECT `tbl_product_content`.`lang_id`,`tbl_product_content`.`text`, `tbl_product_content`.`subject`, `tbl_products`.`title`,`tbl_products`.`id`,`tbl_products`.`status`, `tbl_product_files`.`file_name`,`tbl_product_files`.`product_id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_products`.`status` ='publish' WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT `tbl_pro...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(83): Model_Search->query('SELECT `tbl_pro...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 01:52:57 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= '%publish' AND `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.' at line 1 [ SELECT `tbl_product_content`.`lang_id`,`tbl_product_content`.`text`, `tbl_product_content`.`subject`, `tbl_products`.`title`,`tbl_products`.`id`,`tbl_products`.`status`, `tbl_product_files`.`file_name`,`tbl_product_files`.`product_id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_products`.`status` LIKE = '%publish' AND `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 01:52:57 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= '%publish' AND `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.' at line 1 [ SELECT `tbl_product_content`.`lang_id`,`tbl_product_content`.`text`, `tbl_product_content`.`subject`, `tbl_products`.`title`,`tbl_products`.`id`,`tbl_products`.`status`, `tbl_product_files`.`file_name`,`tbl_product_files`.`product_id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_products`.`status` LIKE = '%publish' AND `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%vivi%' OR `tbl_product_content`.`subject` LIKE '%vivi%' OR `tbl_products`.`title` LIKE '%vivi%' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT `tbl_pro...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(83): Model_Search->query('SELECT `tbl_pro...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 01:56:23 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`tbl_products`.`status` = 'publish' AND `tbl_product_content`.`text` LIKE '%lume' at line 1 [ SELECT `tbl_product_content`.`lang_id`,`tbl_product_content`.`text`, `tbl_product_content`.`subject`, `tbl_products`.`title`,`tbl_products`.`id`,`tbl_products`.`status`, `tbl_product_files`.`file_name`,`tbl_product_files`.`product_id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' ,`tbl_products`.`status` = 'publish' AND `tbl_product_content`.`text` LIKE '%lumens%' OR `tbl_product_content`.`subject` LIKE '%lumens%' OR `tbl_products`.`title` LIKE '%lumens%' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 01:56:23 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`tbl_products`.`status` = 'publish' AND `tbl_product_content`.`text` LIKE '%lume' at line 1 [ SELECT `tbl_product_content`.`lang_id`,`tbl_product_content`.`text`, `tbl_product_content`.`subject`, `tbl_products`.`title`,`tbl_products`.`id`,`tbl_products`.`status`, `tbl_product_files`.`file_name`,`tbl_product_files`.`product_id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' ,`tbl_products`.`status` = 'publish' AND `tbl_product_content`.`text` LIKE '%lumens%' OR `tbl_product_content`.`subject` LIKE '%lumens%' OR `tbl_products`.`title` LIKE '%lumens%' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT `tbl_pro...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(82): Model_Search->query('SELECT `tbl_pro...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 01:56:57 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' AND `tbl_product_content`.`text` LIKE '%vivite%' OR `tbl_product_content`.`sub' at line 1 [ SELECT `tbl_product_content`.`lang_id`,`tbl_product_content`.`text`, `tbl_product_content`.`subject`, `tbl_products`.`title`,`tbl_products`.`id`,`tbl_products`.`status`, `tbl_product_files`.`file_name`,`tbl_product_files`.`product_id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND`tbl_products`.`status` = publish' AND `tbl_product_content`.`text` LIKE '%vivite%' OR `tbl_product_content`.`subject` LIKE '%vivite%' OR `tbl_products`.`title` LIKE '%vivite%' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 01:56:57 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' AND `tbl_product_content`.`text` LIKE '%vivite%' OR `tbl_product_content`.`sub' at line 1 [ SELECT `tbl_product_content`.`lang_id`,`tbl_product_content`.`text`, `tbl_product_content`.`subject`, `tbl_products`.`title`,`tbl_products`.`id`,`tbl_products`.`status`, `tbl_product_files`.`file_name`,`tbl_product_files`.`product_id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND`tbl_products`.`status` = publish' AND `tbl_product_content`.`text` LIKE '%vivite%' OR `tbl_product_content`.`subject` LIKE '%vivite%' OR `tbl_products`.`title` LIKE '%vivite%' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT `tbl_pro...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(82): Model_Search->query('SELECT `tbl_pro...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 02:00:17 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'OE `tbl_products`.`title` LIKE '%viv%' AND `tbl_products`.`status` ='publish'' at line 1 [ SELECT *, `tbl_products`.`title`,`tbl_products`.`id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%viv%' OR `tbl_product_content`.`subject` LIKE '%viv%' OE `tbl_products`.`title` LIKE '%viv%' AND `tbl_products`.`status` ='publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 02:00:17 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'OE `tbl_products`.`title` LIKE '%viv%' AND `tbl_products`.`status` ='publish'' at line 1 [ SELECT *, `tbl_products`.`title`,`tbl_products`.`id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%viv%' OR `tbl_product_content`.`subject` LIKE '%viv%' OE `tbl_products`.`title` LIKE '%viv%' AND `tbl_products`.`status` ='publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(79): Model_Search->query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 02:03:08 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''publish'' at line 1 [ SELECT *, `tbl_products`.`title`,`tbl_products`.`id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%viv%' OR `tbl_product_content`.`subject` LIKE '%viv%' OR `tbl_products`.`title` LIKE '%viv%' AND `tbl_products`.`status` IS NOT 'publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 02:03:08 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''publish'' at line 1 [ SELECT *, `tbl_products`.`title`,`tbl_products`.`id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%viv%' OR `tbl_product_content`.`subject` LIKE '%viv%' OR `tbl_products`.`title` LIKE '%viv%' AND `tbl_products`.`status` IS NOT 'publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(79): Model_Search->query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 02:04:00 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'publish' at line 1 [ SELECT *, `tbl_products`.`title`,`tbl_products`.`id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%viv%' OR `tbl_product_content`.`subject` LIKE '%viv%' OR `tbl_products`.`title` LIKE '%viv%' AND `tbl_products`.`status` IS NOT publish; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 02:04:00 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'publish' at line 1 [ SELECT *, `tbl_products`.`title`,`tbl_products`.`id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%viv%' OR `tbl_product_content`.`subject` LIKE '%viv%' OR `tbl_products`.`title` LIKE '%viv%' AND `tbl_products`.`status` IS NOT publish; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(79): Model_Search->query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 02:04:01 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'publish' at line 1 [ SELECT *, `tbl_products`.`title`,`tbl_products`.`id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%viv%' OR `tbl_product_content`.`subject` LIKE '%viv%' OR `tbl_products`.`title` LIKE '%viv%' AND `tbl_products`.`status` IS NOT publish; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 02:04:01 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'publish' at line 1 [ SELECT *, `tbl_products`.`title`,`tbl_products`.`id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%viv%' OR `tbl_product_content`.`subject` LIKE '%viv%' OR `tbl_products`.`title` LIKE '%viv%' AND `tbl_products`.`status` IS NOT publish; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(79): Model_Search->query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 02:06:40 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' GROUP BY `tbl_products`.`id`' at line 1 [ SELECT *, `tbl_products`.`title`,`tbl_products`.`id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%viv%' OR `tbl_product_content`.`subject` LIKE '%viv%' OR `tbl_products`.`title` LIKE '%viv%' AND `tbl_products`.`status` =publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 02:06:40 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' GROUP BY `tbl_products`.`id`' at line 1 [ SELECT *, `tbl_products`.`title`,`tbl_products`.`id` FROM `tbl_product_content` LEFT JOIN `tbl_products` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`text` LIKE '%viv%' OR `tbl_product_content`.`subject` LIKE '%viv%' OR `tbl_products`.`title` LIKE '%viv%' AND `tbl_products`.`status` =publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(79): Model_Search->query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 02:14:00 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `tbl_product_content` ON `tbl_products`.`id` = `tbl_product_content`.`' at line 1 [ SELECT *, `tbl_products`.`title`,`tbl_products`.`id` FROM `tbl_products` WHERE `tbl_products`.`status` ='publish' LEFT JOIN `tbl_product_content` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` AND `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`subject` LIKE '%viv%' OR `tbl_products`.`title` LIKE '%viv%' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 02:14:00 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `tbl_product_content` ON `tbl_products`.`id` = `tbl_product_content`.`' at line 1 [ SELECT *, `tbl_products`.`title`,`tbl_products`.`id` FROM `tbl_products` WHERE `tbl_products`.`status` ='publish' LEFT JOIN `tbl_product_content` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` AND `tbl_product_content`.`lang_id` ='2' AND `tbl_product_content`.`subject` LIKE '%viv%' OR `tbl_products`.`title` LIKE '%viv%' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(80): Model_Search->query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 02:46:38 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tbl_page_content.lang_id' in 'where clause' [ SELECT * FROM `tbl_products` LEFT JOIN `tbl_product_content` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_products`.`id` IN (SELECT `product_id` FROM `tbl_product_content` WHERE `tbl_page_content`.`lang_id` ='2' AND `tbl_product_content`.`subject` LIKE '%bxb%'OR `tbl_product_content`.`text` LIKE '%bxb%' )AND `tbl_products`.`status` = 'publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 02:46:38 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tbl_page_content.lang_id' in 'where clause' [ SELECT * FROM `tbl_products` LEFT JOIN `tbl_product_content` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_products`.`id` IN (SELECT `product_id` FROM `tbl_product_content` WHERE `tbl_page_content`.`lang_id` ='2' AND `tbl_product_content`.`subject` LIKE '%bxb%'OR `tbl_product_content`.`text` LIKE '%bxb%' )AND `tbl_products`.`status` = 'publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(79): Model_Search->query('SELECT * FROM `...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 02:49:04 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `tbl_products` LEFT JOIN `tbl_product_content` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_products`.`id` IN (SELECT `product_id` FROM `tbl_product_content` WHERE MATCH (`tbl_download_type_content`.`subject`,`tbl_download_type_content`.`text`) AGAINST ('bxb*' IN BOOLEAN MODE)AND `lang_id` ='2' AND `tbl_products`.`status` = 'publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 02:49:04 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `tbl_products` LEFT JOIN `tbl_product_content` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_products`.`id` IN (SELECT `product_id` FROM `tbl_product_content` WHERE MATCH (`tbl_download_type_content`.`subject`,`tbl_download_type_content`.`text`) AGAINST ('bxb*' IN BOOLEAN MODE)AND `lang_id` ='2' AND `tbl_products`.`status` = 'publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(81): Model_Search->query('SELECT * FROM `...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 02:49:15 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `tbl_products` LEFT JOIN `tbl_product_content` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_products`.`id` IN (SELECT `product_id` FROM `tbl_product_content` WHERE MATCH (`tbl_product_content`.`subject`,`tbl_product_content`.`text`) AGAINST ('bxb*' IN BOOLEAN MODE)AND `lang_id` ='2' AND `tbl_products`.`status` = 'publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 02:49:15 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `tbl_products` LEFT JOIN `tbl_product_content` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_products`.`id` IN (SELECT `product_id` FROM `tbl_product_content` WHERE MATCH (`tbl_product_content`.`subject`,`tbl_product_content`.`text`) AGAINST ('bxb*' IN BOOLEAN MODE)AND `lang_id` ='2' AND `tbl_products`.`status` = 'publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(81): Model_Search->query('SELECT * FROM `...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 02:49:30 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `tbl_products` LEFT JOIN `tbl_product_content` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_products`.`id` IN (SELECT `product_id` FROM `tbl_product_content` WHERE MATCH (`tbl_product_content`.`subject`,`tbl_product_content`.`text`) AGAINST ('bxb*' IN BOOLEAN MODE) AND `lang_id` ='2' AND `tbl_products`.`status` = 'publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 02:49:30 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `tbl_products` LEFT JOIN `tbl_product_content` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_products`.`id` IN (SELECT `product_id` FROM `tbl_product_content` WHERE MATCH (`tbl_product_content`.`subject`,`tbl_product_content`.`text`) AGAINST ('bxb*' IN BOOLEAN MODE) AND `lang_id` ='2' AND `tbl_products`.`status` = 'publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(81): Model_Search->query('SELECT * FROM `...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 02:50:30 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND `lang_id` ='2' )AND `tbl_product_content`.`subject` LIKE '%bxb%'AND `tbl_pro' at line 1 [ SELECT * FROM `tbl_products` LEFT JOIN `tbl_product_content` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_products`.`id` IN (SELECT `product_id` FROM `tbl_product_content` AND `lang_id` ='2' )AND `tbl_product_content`.`subject` LIKE '%bxb%'AND `tbl_products`.`status` = 'publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 02:50:30 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND `lang_id` ='2' )AND `tbl_product_content`.`subject` LIKE '%bxb%'AND `tbl_pro' at line 1 [ SELECT * FROM `tbl_products` LEFT JOIN `tbl_product_content` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_products`.`id` IN (SELECT `product_id` FROM `tbl_product_content` AND `lang_id` ='2' )AND `tbl_product_content`.`subject` LIKE '%bxb%'AND `tbl_products`.`status` = 'publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(81): Model_Search->query('SELECT * FROM `...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 02:50:37 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND `lang_id` ='2'AND `tbl_product_content`.`subject` LIKE '%bxb%'OR `tbl_produc' at line 1 [ SELECT * FROM `tbl_products` LEFT JOIN `tbl_product_content` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_products`.`id` IN (SELECT `product_id` FROM `tbl_product_content` AND `lang_id` ='2'AND `tbl_product_content`.`subject` LIKE '%bxb%'OR `tbl_product_content`.`text` LIKE '%bxb%' )AND `tbl_products`.`status` = 'publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 02:50:37 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND `lang_id` ='2'AND `tbl_product_content`.`subject` LIKE '%bxb%'OR `tbl_produc' at line 1 [ SELECT * FROM `tbl_products` LEFT JOIN `tbl_product_content` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_products`.`id` IN (SELECT `product_id` FROM `tbl_product_content` AND `lang_id` ='2'AND `tbl_product_content`.`subject` LIKE '%bxb%'OR `tbl_product_content`.`text` LIKE '%bxb%' )AND `tbl_products`.`status` = 'publish' GROUP BY `tbl_products`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(81): Model_Search->query('SELECT * FROM `...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 02:53:45 --- ERROR: Database_Exception [ 1235 ]: This version of MySQL doesn't yet support 'LIMIT & IN/ALL/ANY/SOME subquery' [ SELECT * FROM `tbl_products` LEFT JOIN `tbl_product_content` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_products`.`id` IN (SELECT `product_id` FROM `tbl_product_content` WHERE `lang_id` ='2' AND `subject` LIKE '%bxb%' OR `text` LIKE '%bxb%' LIMIT 0,1)AND `tbl_products`.`status` = 'publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 02:53:45 --- STRACE: Database_Exception [ 1235 ]: This version of MySQL doesn't yet support 'LIMIT & IN/ALL/ANY/SOME subquery' [ SELECT * FROM `tbl_products` LEFT JOIN `tbl_product_content` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_products`.`id` IN (SELECT `product_id` FROM `tbl_product_content` WHERE `lang_id` ='2' AND `subject` LIKE '%bxb%' OR `text` LIKE '%bxb%' LIMIT 0,1)AND `tbl_products`.`status` = 'publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(79): Model_Search->query('SELECT * FROM `...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 02:53:49 --- ERROR: Database_Exception [ 1235 ]: This version of MySQL doesn't yet support 'LIMIT & IN/ALL/ANY/SOME subquery' [ SELECT * FROM `tbl_products` LEFT JOIN `tbl_product_content` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_products`.`id` IN (SELECT `product_id` FROM `tbl_product_content` WHERE `lang_id` ='2' AND `subject` LIKE '%bxb%' OR `text` LIKE '%bxb%' LIMIT 1)AND `tbl_products`.`status` = 'publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 02:53:49 --- STRACE: Database_Exception [ 1235 ]: This version of MySQL doesn't yet support 'LIMIT & IN/ALL/ANY/SOME subquery' [ SELECT * FROM `tbl_products` LEFT JOIN `tbl_product_content` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_products`.`id` IN (SELECT `product_id` FROM `tbl_product_content` WHERE `lang_id` ='2' AND `subject` LIKE '%bxb%' OR `text` LIKE '%bxb%' LIMIT 1)AND `tbl_products`.`status` = 'publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(79): Model_Search->query('SELECT * FROM `...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 02:54:24 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `lang_id` ='2')AND `tbl_products`.`status` = 'publish'' at line 1 [ SELECT * FROM `tbl_products` LEFT JOIN `tbl_product_content` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_products`.`id` IN (SELECT `product_id` FROM `tbl_product_content` WHERE `subject` LIKE '%bxb%' OR `text` LIKE '%bxb%' WHERE `lang_id` ='2')AND `tbl_products`.`status` = 'publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 02:54:24 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `lang_id` ='2')AND `tbl_products`.`status` = 'publish'' at line 1 [ SELECT * FROM `tbl_products` LEFT JOIN `tbl_product_content` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_products`.`id` IN (SELECT `product_id` FROM `tbl_product_content` WHERE `subject` LIKE '%bxb%' OR `text` LIKE '%bxb%' WHERE `lang_id` ='2')AND `tbl_products`.`status` = 'publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(79): Model_Search->query('SELECT * FROM `...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 02:55:34 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`tbl_product_content`.`lang_id` ='2'AND `tbl_products`.`status` = 'publish'' at line 1 [ SELECT * FROM `tbl_products` LEFT JOIN `tbl_product_content` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_products`.`id` IN (SELECT `product_id` FROM `tbl_product_content` WHERE `subject` LIKE '%bxb%' OR `text` LIKE '%bxb%' )`tbl_product_content`.`lang_id` ='2'AND `tbl_products`.`status` = 'publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 02:55:34 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`tbl_product_content`.`lang_id` ='2'AND `tbl_products`.`status` = 'publish'' at line 1 [ SELECT * FROM `tbl_products` LEFT JOIN `tbl_product_content` ON `tbl_products`.`id` = `tbl_product_content`.`product_id` LEFT JOIN `tbl_product_files` ON `tbl_products`.`id` = `tbl_product_files`.`product_id` WHERE `tbl_products`.`id` IN (SELECT `product_id` FROM `tbl_product_content` WHERE `subject` LIKE '%bxb%' OR `text` LIKE '%bxb%' )`tbl_product_content`.`lang_id` ='2'AND `tbl_products`.`status` = 'publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(80): Model_Search->query('SELECT * FROM `...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 02:59:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL products/read was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-07-08 02:59:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL products/read was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-08 03:39:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/6fbfe01c74d8e0053e4af18b2c439b50_crop_248x158.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-08 03:39:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/6fbfe01c74d8e0053e4af18b2c439b50_crop_248x158.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-08 03:49:48 --- ERROR: Database_Exception [ 1066 ]: Not unique table/alias: 'tbl_page_categories' [ SELECT *, `tbl_page_categories`.`title`, `tbl_page_categories`.`id` FROM `tbl_page_categories` LEFT JOIN `tbl_page_categories` ON `tbl_page_categories`.`id` = `tbl_page_category_content`.`category_id` WHERE `tbl_page_categories`.`id` IN (SELECT `category_id FROM `tbl_page_category_content` WHERE `subject` LIKE '%established%' OR `text` LIKE '%established%' )AND `tbl_page_categories`.`status` ='publish' AND `tbl_page_categories`.`title` !='home' GROUP BY `tbl_page_categories`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 03:49:48 --- STRACE: Database_Exception [ 1066 ]: Not unique table/alias: 'tbl_page_categories' [ SELECT *, `tbl_page_categories`.`title`, `tbl_page_categories`.`id` FROM `tbl_page_categories` LEFT JOIN `tbl_page_categories` ON `tbl_page_categories`.`id` = `tbl_page_category_content`.`category_id` WHERE `tbl_page_categories`.`id` IN (SELECT `category_id FROM `tbl_page_category_content` WHERE `subject` LIKE '%established%' OR `text` LIKE '%established%' )AND `tbl_page_categories`.`status` ='publish' AND `tbl_page_categories`.`title` !='home' GROUP BY `tbl_page_categories`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(54): Model_Search->query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 03:50:30 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '` WHERE `subject` LIKE '%established%' OR `text` LIKE '%established%' )AND `tbl_' at line 1 [ SELECT *, `tbl_page_categories`.`title`, `tbl_page_categories`.`id` FROM `tbl_page_categories` LEFT JOIN `tbl_page_category_content` ON `tbl_page_categories`.`id` = `tbl_page_category_content`.`category_id` WHERE `tbl_page_categories`.`id` IN (SELECT `category_id FROM `tbl_page_category_content` WHERE `subject` LIKE '%established%' OR `text` LIKE '%established%' )AND `tbl_page_categories`.`status` ='publish' AND `tbl_page_categories`.`title` !='home' GROUP BY `tbl_page_categories`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 03:50:30 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '` WHERE `subject` LIKE '%established%' OR `text` LIKE '%established%' )AND `tbl_' at line 1 [ SELECT *, `tbl_page_categories`.`title`, `tbl_page_categories`.`id` FROM `tbl_page_categories` LEFT JOIN `tbl_page_category_content` ON `tbl_page_categories`.`id` = `tbl_page_category_content`.`category_id` WHERE `tbl_page_categories`.`id` IN (SELECT `category_id FROM `tbl_page_category_content` WHERE `subject` LIKE '%established%' OR `text` LIKE '%established%' )AND `tbl_page_categories`.`status` ='publish' AND `tbl_page_categories`.`title` !='home' GROUP BY `tbl_page_categories`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(54): Model_Search->query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 05:13:15 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'OR `subject` LIKE '%[a-zA-Z0-9\-\_\.]++%' OR `text` LIKE '%[a-zA-Z0-9\-\_\.]++%'' at line 1 [ SELECT *, `tbl_solution_categories`.`id`,`tbl_solution_categories`.`title` FROM `tbl_solution_categories` LEFT JOIN `tbl_solution_category_content` ON `tbl_solution_categories`.`id` = `tbl_solution_category_content`.`category_id` LEFT JOIN `tbl_solution_category_files` ON `tbl_solution_categories`.`id` = `tbl_solution_category_files`.`category_id` WHERE `tbl_solution_category`.`id` IN (SELECT `category_id` FROM `tbl_solution_category_content` WHERE `subject` LIKE OR `subject` LIKE '%[a-zA-Z0-9\-\_\.]++%' OR `text` LIKE '%[a-zA-Z0-9\-\_\.]++%' )AND `tbl_solution_category_content`.`lang_id` = '2'AND `tbl_solution_categories`.`status` ='publish' GROUP BY `tbl_solution_categories`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 05:13:15 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'OR `subject` LIKE '%[a-zA-Z0-9\-\_\.]++%' OR `text` LIKE '%[a-zA-Z0-9\-\_\.]++%'' at line 1 [ SELECT *, `tbl_solution_categories`.`id`,`tbl_solution_categories`.`title` FROM `tbl_solution_categories` LEFT JOIN `tbl_solution_category_content` ON `tbl_solution_categories`.`id` = `tbl_solution_category_content`.`category_id` LEFT JOIN `tbl_solution_category_files` ON `tbl_solution_categories`.`id` = `tbl_solution_category_files`.`category_id` WHERE `tbl_solution_category`.`id` IN (SELECT `category_id` FROM `tbl_solution_category_content` WHERE `subject` LIKE OR `subject` LIKE '%[a-zA-Z0-9\-\_\.]++%' OR `text` LIKE '%[a-zA-Z0-9\-\_\.]++%' )AND `tbl_solution_category_content`.`lang_id` = '2'AND `tbl_solution_categories`.`status` ='publish' GROUP BY `tbl_solution_categories`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(111): Model_Search->query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 05:13:30 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tbl_solution_category.id' in 'IN/ALL/ANY subquery' [ SELECT *, `tbl_solution_categories`.`id`,`tbl_solution_categories`.`title` FROM `tbl_solution_categories` LEFT JOIN `tbl_solution_category_content` ON `tbl_solution_categories`.`id` = `tbl_solution_category_content`.`category_id` LEFT JOIN `tbl_solution_category_files` ON `tbl_solution_categories`.`id` = `tbl_solution_category_files`.`category_id` WHERE `tbl_solution_category`.`id` IN (SELECT `category_id` FROM `tbl_solution_category_content` WHERE `subject` LIKE '%[a-zA-Z0-9\-\_\.]++%' OR `subject` LIKE '%[a-zA-Z0-9\-\_\.]++%' OR `text` LIKE '%[a-zA-Z0-9\-\_\.]++%' )AND `tbl_solution_category_content`.`lang_id` = '2'AND `tbl_solution_categories`.`status` ='publish' GROUP BY `tbl_solution_categories`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 05:13:30 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tbl_solution_category.id' in 'IN/ALL/ANY subquery' [ SELECT *, `tbl_solution_categories`.`id`,`tbl_solution_categories`.`title` FROM `tbl_solution_categories` LEFT JOIN `tbl_solution_category_content` ON `tbl_solution_categories`.`id` = `tbl_solution_category_content`.`category_id` LEFT JOIN `tbl_solution_category_files` ON `tbl_solution_categories`.`id` = `tbl_solution_category_files`.`category_id` WHERE `tbl_solution_category`.`id` IN (SELECT `category_id` FROM `tbl_solution_category_content` WHERE `subject` LIKE '%[a-zA-Z0-9\-\_\.]++%' OR `subject` LIKE '%[a-zA-Z0-9\-\_\.]++%' OR `text` LIKE '%[a-zA-Z0-9\-\_\.]++%' )AND `tbl_solution_category_content`.`lang_id` = '2'AND `tbl_solution_categories`.`status` ='publish' GROUP BY `tbl_solution_categories`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(111): Model_Search->query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 05:14:34 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tbl_solution_category.id' in 'IN/ALL/ANY subquery' [ SELECT *, `tbl_solution_categories`.`id`,`tbl_solution_categories`.`title` FROM `tbl_solution_categories` LEFT JOIN `tbl_solution_category_content` ON `tbl_solution_categories`.`id` = `tbl_solution_category_content`.`category_id` LEFT JOIN `tbl_solution_category_files` ON `tbl_solution_categories`.`id` = `tbl_solution_category_files`.`category_id` WHERE `tbl_solution_category`.`id` IN (SELECT `category_id` FROM `tbl_solution_category_content` WHERE `subject` LIKE '%[a-zA-Z0-9\-\_\.]++%' OR `subject` LIKE '%[a-zA-Z0-9\-\_\.]++%' OR `text` LIKE '%[a-zA-Z0-9\-\_\.]++%' )AND `tbl_solution_category_content`.`lang_id` = '2'AND `tbl_solution_categories`.`status` ='publish' GROUP BY `tbl_solution_categories`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 05:14:34 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tbl_solution_category.id' in 'IN/ALL/ANY subquery' [ SELECT *, `tbl_solution_categories`.`id`,`tbl_solution_categories`.`title` FROM `tbl_solution_categories` LEFT JOIN `tbl_solution_category_content` ON `tbl_solution_categories`.`id` = `tbl_solution_category_content`.`category_id` LEFT JOIN `tbl_solution_category_files` ON `tbl_solution_categories`.`id` = `tbl_solution_category_files`.`category_id` WHERE `tbl_solution_category`.`id` IN (SELECT `category_id` FROM `tbl_solution_category_content` WHERE `subject` LIKE '%[a-zA-Z0-9\-\_\.]++%' OR `subject` LIKE '%[a-zA-Z0-9\-\_\.]++%' OR `text` LIKE '%[a-zA-Z0-9\-\_\.]++%' )AND `tbl_solution_category_content`.`lang_id` = '2'AND `tbl_solution_categories`.`status` ='publish' GROUP BY `tbl_solution_categories`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(111): Model_Search->query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 05:14:35 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tbl_solution_category.id' in 'IN/ALL/ANY subquery' [ SELECT *, `tbl_solution_categories`.`id`,`tbl_solution_categories`.`title` FROM `tbl_solution_categories` LEFT JOIN `tbl_solution_category_content` ON `tbl_solution_categories`.`id` = `tbl_solution_category_content`.`category_id` LEFT JOIN `tbl_solution_category_files` ON `tbl_solution_categories`.`id` = `tbl_solution_category_files`.`category_id` WHERE `tbl_solution_category`.`id` IN (SELECT `category_id` FROM `tbl_solution_category_content` WHERE `subject` LIKE '%[a-zA-Z0-9\-\_\.]++%' OR `subject` LIKE '%[a-zA-Z0-9\-\_\.]++%' OR `text` LIKE '%[a-zA-Z0-9\-\_\.]++%' )AND `tbl_solution_category_content`.`lang_id` = '2'AND `tbl_solution_categories`.`status` ='publish' GROUP BY `tbl_solution_categories`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 05:14:35 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tbl_solution_category.id' in 'IN/ALL/ANY subquery' [ SELECT *, `tbl_solution_categories`.`id`,`tbl_solution_categories`.`title` FROM `tbl_solution_categories` LEFT JOIN `tbl_solution_category_content` ON `tbl_solution_categories`.`id` = `tbl_solution_category_content`.`category_id` LEFT JOIN `tbl_solution_category_files` ON `tbl_solution_categories`.`id` = `tbl_solution_category_files`.`category_id` WHERE `tbl_solution_category`.`id` IN (SELECT `category_id` FROM `tbl_solution_category_content` WHERE `subject` LIKE '%[a-zA-Z0-9\-\_\.]++%' OR `subject` LIKE '%[a-zA-Z0-9\-\_\.]++%' OR `text` LIKE '%[a-zA-Z0-9\-\_\.]++%' )AND `tbl_solution_category_content`.`lang_id` = '2'AND `tbl_solution_categories`.`status` ='publish' GROUP BY `tbl_solution_categories`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(111): Model_Search->query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 05:14:35 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tbl_solution_category.id' in 'IN/ALL/ANY subquery' [ SELECT *, `tbl_solution_categories`.`id`,`tbl_solution_categories`.`title` FROM `tbl_solution_categories` LEFT JOIN `tbl_solution_category_content` ON `tbl_solution_categories`.`id` = `tbl_solution_category_content`.`category_id` LEFT JOIN `tbl_solution_category_files` ON `tbl_solution_categories`.`id` = `tbl_solution_category_files`.`category_id` WHERE `tbl_solution_category`.`id` IN (SELECT `category_id` FROM `tbl_solution_category_content` WHERE `subject` LIKE '%[a-zA-Z0-9\-\_\.]++%' OR `subject` LIKE '%[a-zA-Z0-9\-\_\.]++%' OR `text` LIKE '%[a-zA-Z0-9\-\_\.]++%' )AND `tbl_solution_category_content`.`lang_id` = '2'AND `tbl_solution_categories`.`status` ='publish' GROUP BY `tbl_solution_categories`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 05:14:35 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tbl_solution_category.id' in 'IN/ALL/ANY subquery' [ SELECT *, `tbl_solution_categories`.`id`,`tbl_solution_categories`.`title` FROM `tbl_solution_categories` LEFT JOIN `tbl_solution_category_content` ON `tbl_solution_categories`.`id` = `tbl_solution_category_content`.`category_id` LEFT JOIN `tbl_solution_category_files` ON `tbl_solution_categories`.`id` = `tbl_solution_category_files`.`category_id` WHERE `tbl_solution_category`.`id` IN (SELECT `category_id` FROM `tbl_solution_category_content` WHERE `subject` LIKE '%[a-zA-Z0-9\-\_\.]++%' OR `subject` LIKE '%[a-zA-Z0-9\-\_\.]++%' OR `text` LIKE '%[a-zA-Z0-9\-\_\.]++%' )AND `tbl_solution_category_content`.`lang_id` = '2'AND `tbl_solution_categories`.`status` ='publish' GROUP BY `tbl_solution_categories`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(111): Model_Search->query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 05:23:33 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND `tbl_testimonial_content`.`text` LIKE '%Aha%' AND `tbl_testimonial_content`.' at line 1 [ SELECT *, `tbl_testimonials`.`id`, `tbl_testimonials`.`title` FROM `tbl_testimonials` LEFT JOIN `tbl_testimonial_content` ON `tbl_testimonials`.`id` = `tbl_testimonial_content`.`testimonial_id` LEFT JOIN `tbl_testimonial_files` ON `tbl_testimonial_files`.`testimonial_id` = `tbl_testimonials`.`id` WHERE `tbl_testimonials`.`id` IN (AND `tbl_testimonial_content`.`text` LIKE '%Aha%' AND `tbl_testimonial_content`.`subject` LIKE '%Aha%' OR `tbl_testimonials`.`title` LIKE '%Aha%' OR `tbl_testimonials`.`person` LIKE '%Aha%' AND `tbl_testimonials`.`status` ='publish' GROUP BY `tbl_testimonials`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 05:23:33 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND `tbl_testimonial_content`.`text` LIKE '%Aha%' AND `tbl_testimonial_content`.' at line 1 [ SELECT *, `tbl_testimonials`.`id`, `tbl_testimonials`.`title` FROM `tbl_testimonials` LEFT JOIN `tbl_testimonial_content` ON `tbl_testimonials`.`id` = `tbl_testimonial_content`.`testimonial_id` LEFT JOIN `tbl_testimonial_files` ON `tbl_testimonial_files`.`testimonial_id` = `tbl_testimonials`.`id` WHERE `tbl_testimonials`.`id` IN (AND `tbl_testimonial_content`.`text` LIKE '%Aha%' AND `tbl_testimonial_content`.`subject` LIKE '%Aha%' OR `tbl_testimonials`.`title` LIKE '%Aha%' OR `tbl_testimonials`.`person` LIKE '%Aha%' AND `tbl_testimonials`.`status` ='publish' GROUP BY `tbl_testimonials`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(137): Model_Search->query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 05:25:07 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND `subject` LIKE '%Aha%' AND `text` LIKE '%Aha%' OR `tbl_testimonials`.`title`' at line 1 [ SELECT *, `tbl_testimonials`.`id`, `tbl_testimonials`.`title` FROM `tbl_testimonials` LEFT JOIN `tbl_testimonial_content` ON `tbl_testimonials`.`id` = `tbl_testimonial_content`.`testimonial_id` LEFT JOIN `tbl_testimonial_files` ON `tbl_testimonial_files`.`testimonial_id` = `tbl_testimonials`.`id` WHERE `tbl_testimonials`.`id` IN (SELECT `testimonial_id` FROM `tbl_testimonial_content`AND `subject` LIKE '%Aha%' AND `text` LIKE '%Aha%' OR `tbl_testimonials`.`title` LIKE '%Aha%' OR `tbl_testimonials`.`person` LIKE '%Aha%' AND `tbl_testimonials`.`status` ='publish' GROUP BY `tbl_testimonials`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 05:25:07 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND `subject` LIKE '%Aha%' AND `text` LIKE '%Aha%' OR `tbl_testimonials`.`title`' at line 1 [ SELECT *, `tbl_testimonials`.`id`, `tbl_testimonials`.`title` FROM `tbl_testimonials` LEFT JOIN `tbl_testimonial_content` ON `tbl_testimonials`.`id` = `tbl_testimonial_content`.`testimonial_id` LEFT JOIN `tbl_testimonial_files` ON `tbl_testimonial_files`.`testimonial_id` = `tbl_testimonials`.`id` WHERE `tbl_testimonials`.`id` IN (SELECT `testimonial_id` FROM `tbl_testimonial_content`AND `subject` LIKE '%Aha%' AND `text` LIKE '%Aha%' OR `tbl_testimonials`.`title` LIKE '%Aha%' OR `tbl_testimonials`.`person` LIKE '%Aha%' AND `tbl_testimonials`.`status` ='publish' GROUP BY `tbl_testimonials`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(138): Model_Search->query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 05:26:54 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tbl_testimonials.lang_id' in 'where clause' [ SELECT *, `tbl_testimonials`.`id`, `tbl_testimonials`.`title` FROM `tbl_testimonials` LEFT JOIN `tbl_testimonial_content` ON `tbl_testimonials`.`id` = `tbl_testimonial_content`.`testimonial_id` LEFT JOIN `tbl_testimonial_files` ON `tbl_testimonial_files`.`testimonial_id` = `tbl_testimonials`.`id` WHERE `tbl_testimonials`.`id` IN (SELECT `testimonial_id` FROM `tbl_testimonial_content`WHERE `subject` LIKE '%Aha%' OR `text` LIKE '%Aha%' ) AND `tbl_testimonials`.`lang_id` = '2'AND `tbl_testimonials`.`status` ='publish' GROUP BY `tbl_testimonials`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 05:26:54 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tbl_testimonials.lang_id' in 'where clause' [ SELECT *, `tbl_testimonials`.`id`, `tbl_testimonials`.`title` FROM `tbl_testimonials` LEFT JOIN `tbl_testimonial_content` ON `tbl_testimonials`.`id` = `tbl_testimonial_content`.`testimonial_id` LEFT JOIN `tbl_testimonial_files` ON `tbl_testimonial_files`.`testimonial_id` = `tbl_testimonials`.`id` WHERE `tbl_testimonials`.`id` IN (SELECT `testimonial_id` FROM `tbl_testimonial_content`WHERE `subject` LIKE '%Aha%' OR `text` LIKE '%Aha%' ) AND `tbl_testimonials`.`lang_id` = '2'AND `tbl_testimonials`.`status` ='publish' GROUP BY `tbl_testimonials`.`id`; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT *, `tbl_...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(137): Model_Search->query('SELECT *, `tbl_...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-08 14:33:01 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 154 ]
2014-07-08 14:33:01 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 154 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(154): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 154, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(94): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(193): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(88): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-08 14:33:18 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 154 ]
2014-07-08 14:33:18 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 154 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(154): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 154, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(94): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(193): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(88): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-08 16:31:20 --- ERROR: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_add.php [ 83 ]
2014-07-08 16:31:20 --- STRACE: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_add.php [ 83 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/views/testimonial/backend/testimonial_add.php(83): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 83, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(63): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-08 16:33:18 --- ERROR: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_add.php [ 83 ]
2014-07-08 16:33:18 --- STRACE: ErrorException [ 8 ]: Undefined index: default ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_add.php [ 83 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/views/testimonial/backend/testimonial_add.php(83): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 83, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(63): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-08 16:47:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/admin-cp/testimonial/aupdate_all/12/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 16:47:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/admin-cp/testimonial/aupdate_all/12/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-08 16:47:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/admin-cp/testimonial/aupdate_all/12/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 16:47:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/admin-cp/testimonial/aupdate_all/12/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-08 16:47:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/admin-cp/testimonial/aupdate_all/1/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 16:47:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/admin-cp/testimonial/aupdate_all/1/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-08 16:47:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/admin-cp/testimonial/aupdate_all/1/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 16:47:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/admin-cp/testimonial/aupdate_all/1/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-08 16:48:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/admin-cp/testimonial/aupdate_all/1/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 16:48:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/admin-cp/testimonial/aupdate_all/1/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-08 16:49:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/admin-cp/testimonial/aupdate_all/1/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 16:49:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/admin-cp/testimonial/aupdate_all/1/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-08 16:49:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/admin-cp/testimonial/aupdate_all/1/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 16:49:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/admin-cp/testimonial/aupdate_all/1/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-08 16:49:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/admin-cp/testimonial/aupdate_all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 16:49:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/admin-cp/testimonial/aupdate_all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-08 16:57:12 --- ERROR: ErrorException [ 8 ]: Undefined index: pid ~ MODPATH/_modules/testimonial/classes/controller/backend/testimonial.php [ 585 ]
2014-07-08 16:57:12 --- STRACE: ErrorException [ 8 ]: Undefined index: pid ~ MODPATH/_modules/testimonial/classes/controller/backend/testimonial.php [ 585 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/controller/backend/testimonial.php(585): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 585, Array)
#1 [internal function]: Controller_Backend_Testimonial->action_aupdate_all()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-08 16:57:14 --- ERROR: ErrorException [ 8 ]: Undefined index: pid ~ MODPATH/_modules/testimonial/classes/controller/backend/testimonial.php [ 585 ]
2014-07-08 16:57:14 --- STRACE: ErrorException [ 8 ]: Undefined index: pid ~ MODPATH/_modules/testimonial/classes/controller/backend/testimonial.php [ 585 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/controller/backend/testimonial.php(585): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 585, Array)
#1 [internal function]: Controller_Backend_Testimonial->action_aupdate_all()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-08 16:57:19 --- ERROR: ErrorException [ 8 ]: Undefined index: pid ~ MODPATH/_modules/testimonial/classes/controller/backend/testimonial.php [ 585 ]
2014-07-08 16:57:19 --- STRACE: ErrorException [ 8 ]: Undefined index: pid ~ MODPATH/_modules/testimonial/classes/controller/backend/testimonial.php [ 585 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/controller/backend/testimonial.php(585): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 585, Array)
#1 [internal function]: Controller_Backend_Testimonial->action_aupdate_all()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}