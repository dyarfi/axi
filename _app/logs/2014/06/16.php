<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-16 00:38:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/downloadtype/check_title/dsfdsfsdfsf was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-16 00:38:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/downloadtype/check_title/dsfdsfsdfsf was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-16 01:49:14 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 01:49:14 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cou...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(34): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 01:53:59 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 01:53:59 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cou...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(34): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 01:54:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication/redirect was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-16 01:54:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication/redirect was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-16 01:54:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication/redirect was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-16 01:54:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication/redirect was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-16 01:54:58 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 01:54:58 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cou...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(34): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 01:56:10 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 01:56:10 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cou...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(34): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 01:56:11 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 01:56:11 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cou...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(34): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 01:56:59 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Session::set(), called in /Volumes/Data/www/offistarindo/_app/classes/acl.php on line 66 and defined ~ SYSPATH/classes/kohana/session.php [ 243 ]
2014-06-16 01:56:59 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Session::set(), called in /Volumes/Data/www/offistarindo/_app/classes/acl.php on line 66 and defined ~ SYSPATH/classes/kohana/session.php [ 243 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/session.php(243): Kohana_Core::error_handler(2, 'Missing argumen...', '/Volumes/Data/w...', 243, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/acl.php(66): Kohana_Session->set('prev_url')
#2 /Volumes/Data/www/offistarindo/_app/classes/acl.php(17): Acl->__construct()
#3 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(18): Acl::instance()
#4 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#5 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Authentication->before()
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#11 {main}
2014-06-16 01:57:06 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 01:57:06 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cou...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(34): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 01:57:48 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 01:57:48 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cou...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(34): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 01:58:30 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 01:58:30 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cou...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(34): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 01:58:40 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 01:58:40 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cou...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(34): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 02:01:41 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 02:01:41 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cou...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(34): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 02:02:10 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 02:02:10 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cou...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(34): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 02:07:31 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 02:07:31 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cou...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(34): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 02:07:32 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 02:07:32 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cou...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(34): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 02:07:38 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 02:07:38 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cou...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(34): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 02:08:00 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 02:08:00 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cou...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(34): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 02:08:01 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 02:08:01 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cou...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(34): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 02:08:11 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 02:08:11 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cou...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(34): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 02:16:04 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 02:16:04 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cou...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(34): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 02:16:47 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 02:16:47 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cou...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(34): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 02:17:30 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 02:17:30 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cou...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(34): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 02:17:55 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 02:17:55 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cou...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(34): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 02:41:44 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 02:41:44 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cou...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(34): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 02:42:31 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 66 ]
2014-06-16 02:42:31 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 66 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 02:43:30 --- ERROR: Database_Exception [ 1054 ]: Unknown column '0' in 'where clause' [ SELECT * FROM `tbl_pages` WHERE `0` = 'about-us' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 02:43:30 --- STRACE: Database_Exception [ 1054 ]: Unknown column '0' in 'where clause' [ SELECT * FROM `tbl_pages` WHERE `0` = 'about-us' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(324): Model_Page->find(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(66): Model_Page->find_detail(Array, '', 1)
#3 [internal function]: Controller_Company->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-16 02:44:01 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 80 ]
2014-06-16 02:44:01 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 80 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(80): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 80, Array)
#1 [internal function]: Controller_Company->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 02:44:19 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 82 ]
2014-06-16 02:44:19 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 82 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(82): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 82, Array)
#1 [internal function]: Controller_Company->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 02:45:08 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/site/views/site/about_page.php [ 10 ]
2014-06-16 02:45:08 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/site/views/site/about_page.php [ 10 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/about_page.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 10, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-16 02:45:32 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Page::$subject ~ MODPATH/_modules/site/views/site/about_page.php [ 12 ]
2014-06-16 02:45:32 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Page::$subject ~ MODPATH/_modules/site/views/site/about_page.php [ 12 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/about_page.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 12, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-16 02:55:32 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 372 ]
2014-06-16 02:55:32 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 372 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 02:55:36 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 472 ]
2014-06-16 02:55:36 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 472 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 02:55:41 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 372 ]
2014-06-16 02:55:41 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 372 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 02:57:36 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 372 ]
2014-06-16 02:57:36 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 372 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 02:57:37 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 372 ]
2014-06-16 02:57:37 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 372 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 02:59:11 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/company.php [ 443 ]
2014-06-16 02:59:11 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/company.php [ 443 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(443): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 443, Array)
#1 [internal function]: Controller_Company->action_reseller()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 03:01:04 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 248 ]
2014-06-16 03:01:04 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 248 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(248): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 248, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(63): Model_PageCategory->find(Array, '', 1)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(361): Model_PageCategory->load(Array, '', 1)
#3 [internal function]: Controller_Company->action_reseller()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-16 03:01:32 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$description ~ MODPATH/_modules/site/classes/controller/company.php [ 443 ]
2014-06-16 03:01:32 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$description ~ MODPATH/_modules/site/classes/controller/company.php [ 443 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(443): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 443, Array)
#1 [internal function]: Controller_Company->action_reseller()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 03:01:46 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/reseller_page.php [ 10 ]
2014-06-16 03:01:46 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/reseller_page.php [ 10 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/reseller_page.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 10, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-16 03:02:34 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$description ~ MODPATH/_modules/site/views/site/reseller_page.php [ 32 ]
2014-06-16 03:02:34 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$description ~ MODPATH/_modules/site/views/site/reseller_page.php [ 32 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/reseller_page.php(32): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 32, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-16 03:09:13 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Reseller::$text ~ MODPATH/_modules/site/views/site/reseller_page.php [ 32 ]
2014-06-16 03:09:13 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Reseller::$text ~ MODPATH/_modules/site/views/site/reseller_page.php [ 32 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/reseller_page.php(32): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 32, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-16 03:11:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: per_page ~ MODPATH/_modules/site/classes/controller/company.php [ 398 ]
2014-06-16 03:11:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: per_page ~ MODPATH/_modules/site/classes/controller/company.php [ 398 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(398): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 398, Array)
#1 [internal function]: Controller_Company->action_reseller()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 03:17:03 --- ERROR: ErrorException [ 8 ]: Undefined index: banner_id ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 424 ]
2014-06-16 03:17:03 --- STRACE: ErrorException [ 8 ]: Undefined index: banner_id ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 424 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(424): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 424, Array)
#1 [internal function]: Controller_Backend_Reseller->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 03:20:06 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/page/classes/model/page.php [ 216 ]
2014-06-16 03:20:06 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/page/classes/model/page.php [ 216 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(216): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 216, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(324): Model_Page->find(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(388): Model_Page->find_detail(Array)
#3 [internal function]: Controller_Company->action_reseller()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-16 03:20:45 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/reseller/classes/model/reseller.php [ 155 ]
2014-06-16 03:20:45 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/reseller/classes/model/reseller.php [ 155 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/model/reseller.php(155): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 155, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/model/reseller.php(220): Model_Reseller->find(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(403): Model_Reseller->find_detail(Array, Array, 2, 4)
#3 [internal function]: Controller_Company->action_reseller()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-16 03:21:15 --- ERROR: ErrorException [ 2 ]: func_get_arg() expects exactly 1 parameter, 0 given ~ MODPATH/_modules/reseller/classes/model/reseller.php [ 219 ]
2014-06-16 03:21:15 --- STRACE: ErrorException [ 2 ]: func_get_arg() expects exactly 1 parameter, 0 given ~ MODPATH/_modules/reseller/classes/model/reseller.php [ 219 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'func_get_arg() ...', '/Volumes/Data/w...', 219, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/model/reseller.php(219): func_get_arg()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(403): Model_Reseller->find_detail(Array, Array, 2, 4)
#3 [internal function]: Controller_Company->action_reseller()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-16 03:25:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: per_page ~ MODPATH/_modules/site/classes/controller/company.php [ 403 ]
2014-06-16 03:25:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: per_page ~ MODPATH/_modules/site/classes/controller/company.php [ 403 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(403): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 403, Array)
#1 [internal function]: Controller_Company->action_reseller()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 03:25:38 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Reseller::$text ~ MODPATH/_modules/site/views/site/reseller_page.php [ 32 ]
2014-06-16 03:25:38 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Reseller::$text ~ MODPATH/_modules/site/views/site/reseller_page.php [ 32 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/reseller_page.php(32): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 32, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-16 03:30:55 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/solution.php [ 111 ]
2014-06-16 03:30:55 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/solution.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(111): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 111, Array)
#1 [internal function]: Controller_Solution->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 03:31:08 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 127 ]
2014-06-16 03:31:08 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 127 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 03:31:11 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 127 ]
2014-06-16 03:31:11 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 127 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 03:31:14 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 127 ]
2014-06-16 03:31:14 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 127 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 03:31:16 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 199 ]
2014-06-16 03:31:16 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 199 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 03:31:48 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 472 ]
2014-06-16 03:31:48 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 472 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 03:33:18 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/site/views/site/testimonial_page.php [ 10 ]
2014-06-16 03:33:18 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/site/views/site/testimonial_page.php [ 10 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/testimonial_page.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 10, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-16 03:33:49 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Page::$subject ~ MODPATH/_modules/site/views/site/testimonial_page.php [ 12 ]
2014-06-16 03:33:49 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Page::$subject ~ MODPATH/_modules/site/views/site/testimonial_page.php [ 12 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/testimonial_page.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 12, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-16 03:34:01 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Testimonial::$text ~ MODPATH/_modules/site/views/site/testimonial_page.php [ 34 ]
2014-06-16 03:34:01 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Testimonial::$text ~ MODPATH/_modules/site/views/site/testimonial_page.php [ 34 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/testimonial_page.php(34): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 34, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-16 03:34:19 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 494 ]
2014-06-16 03:34:19 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 494 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(494): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 494, Array)
#1 [internal function]: Controller_Company->action_testimonial()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 03:34:46 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 494 ]
2014-06-16 03:34:46 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 494 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(494): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 494, Array)
#1 [internal function]: Controller_Company->action_testimonial()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 03:34:57 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 494 ]
2014-06-16 03:34:57 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 494 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(494): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 494, Array)
#1 [internal function]: Controller_Company->action_testimonial()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 03:35:47 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 494 ]
2014-06-16 03:35:47 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 494 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(494): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 494, Array)
#1 [internal function]: Controller_Company->action_testimonial()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 03:36:28 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/testimonial_page.php [ 39 ]
2014-06-16 03:36:28 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/testimonial_page.php [ 39 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/testimonial_page.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 39, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-16 03:36:38 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 494 ]
2014-06-16 03:36:38 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 494 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(494): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 494, Array)
#1 [internal function]: Controller_Company->action_testimonial()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 03:37:37 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 493 ]
2014-06-16 03:37:37 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 493 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(493): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 493, Array)
#1 [internal function]: Controller_Company->action_testimonial()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 03:37:46 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 493 ]
2014-06-16 03:37:46 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 493 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(493): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 493, Array)
#1 [internal function]: Controller_Company->action_testimonial()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 03:40:01 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/testimonial_page.php [ 39 ]
2014-06-16 03:40:01 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/testimonial_page.php [ 39 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/testimonial_page.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 39, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-16 03:41:25 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_testimonials` WHERE `name` = 'positive-experience-in-working-with-offistar' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 03:41:25 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_testimonials` WHERE `name` = 'positive-experience-in-working-with-offistar' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(272): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(95): Model_Testimonial->find_count(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(543): Model_Testimonial->load_by_name('positive-experi...')
#3 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(456): Controller_Company->_read_testimonial('positive-experi...')
#4 [internal function]: Controller_Company->action_testimonial()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#9 {main}
2014-06-16 03:41:59 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_testimonials` WHERE `name` = 'positive-experience-in-working-with-offistar' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 03:41:59 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_testimonials` WHERE `name` = 'positive-experience-in-working-with-offistar' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(272): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(95): Model_Testimonial->find_count(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(543): Model_Testimonial->load_by_name('positive-experi...')
#3 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(456): Controller_Company->_read_testimonial('positive-experi...')
#4 [internal function]: Controller_Company->action_testimonial()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#9 {main}
2014-06-16 03:42:43 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_testimonials` WHERE `name` = 'positive-experience-in-working-with-offistar' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 03:42:43 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_testimonials` WHERE `name` = 'positive-experience-in-working-with-offistar' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(272): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(95): Model_Testimonial->find_count(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(543): Model_Testimonial->load_by_name('positive-experi...')
#3 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(456): Controller_Company->_read_testimonial('positive-experi...')
#4 [internal function]: Controller_Company->action_testimonial()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#9 {main}
2014-06-16 03:42:44 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_testimonials` WHERE `name` = 'positive-experience-in-working-with-offistar' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 03:42:44 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_testimonials` WHERE `name` = 'positive-experience-in-working-with-offistar' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(272): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(95): Model_Testimonial->find_count(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(543): Model_Testimonial->load_by_name('positive-experi...')
#3 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(456): Controller_Company->_read_testimonial('positive-experi...')
#4 [internal function]: Controller_Company->action_testimonial()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#9 {main}
2014-06-16 03:44:05 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'titla' in 'where clause' [ SELECT * FROM `tbl_testimonials` WHERE `titla` = 'positive-experience-in-working-with-offistar' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 03:44:05 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'titla' in 'where clause' [ SELECT * FROM `tbl_testimonials` WHERE `titla` = 'positive-experience-in-working-with-offistar' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(207): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(280): Model_Testimonial->find(Array, '', '', '')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(543): Model_Testimonial->find_detail(Array)
#3 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(456): Controller_Company->_read_testimonial('positive-experi...')
#4 [internal function]: Controller_Company->action_testimonial()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#9 {main}
2014-06-16 03:44:14 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 546 ]
2014-06-16 03:44:14 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 546 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 03:44:29 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 546 ]
2014-06-16 03:44:29 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 546 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 03:44:58 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/site/classes/controller/company.php [ 546 ]
2014-06-16 03:44:58 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/site/classes/controller/company.php [ 546 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 03:45:05 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$description ~ MODPATH/_modules/site/classes/controller/company.php [ 575 ]
2014-06-16 03:45:05 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$description ~ MODPATH/_modules/site/classes/controller/company.php [ 575 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(575): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 575, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(456): Controller_Company->_read_testimonial('positive-experi...')
#2 [internal function]: Controller_Company->action_testimonial()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 03:45:16 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/testimonial_detail_page.php [ 10 ]
2014-06-16 03:45:16 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/testimonial_detail_page.php [ 10 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/testimonial_detail_page.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 10, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-16 03:45:32 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/testimonial_detail_page.php [ 10 ]
2014-06-16 03:45:32 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/testimonial_detail_page.php [ 10 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/testimonial_detail_page.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 10, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-16 03:45:36 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$description ~ MODPATH/_modules/site/views/site/testimonial_detail_page.php [ 55 ]
2014-06-16 03:45:36 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$description ~ MODPATH/_modules/site/views/site/testimonial_detail_page.php [ 55 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/testimonial_detail_page.php(55): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 55, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-16 03:53:14 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 127 ]
2014-06-16 03:53:14 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 127 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 03:55:08 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 199 ]
2014-06-16 03:55:08 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 199 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 03:55:11 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 199 ]
2014-06-16 03:55:11 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 199 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 03:55:14 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 199 ]
2014-06-16 03:55:14 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 199 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 03:55:18 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 127 ]
2014-06-16 03:55:18 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 127 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 03:56:16 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 199 ]
2014-06-16 03:56:16 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 199 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 03:56:58 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/site/classes/controller/company.php [ 199 ]
2014-06-16 03:56:58 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/site/classes/controller/company.php [ 199 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 03:57:01 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/company.php [ 277 ]
2014-06-16 03:57:01 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/company.php [ 277 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(277): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 277, Array)
#1 [internal function]: Controller_Company->action_newsevent()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 03:57:08 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$text ~ MODPATH/_modules/site/classes/controller/company.php [ 277 ]
2014-06-16 03:57:08 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$text ~ MODPATH/_modules/site/classes/controller/company.php [ 277 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(277): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 277, Array)
#1 [internal function]: Controller_Company->action_newsevent()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 03:57:53 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/site/views/site/newsevent_page.php [ 10 ]
2014-06-16 03:57:53 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/site/views/site/newsevent_page.php [ 10 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/newsevent_page.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 10, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-16 03:59:28 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/site/views/site/newsevent_page.php [ 10 ]
2014-06-16 03:59:28 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/site/views/site/newsevent_page.php [ 10 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/newsevent_page.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 10, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-16 03:59:43 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/site/views/site/newsevent_page.php [ 10 ]
2014-06-16 03:59:43 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/site/views/site/newsevent_page.php [ 10 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/newsevent_page.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 10, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-16 03:59:51 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/site/views/site/newsevent_page.php [ 10 ]
2014-06-16 03:59:51 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Page::$name ~ MODPATH/_modules/site/views/site/newsevent_page.php [ 10 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/newsevent_page.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 10, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-16 04:00:08 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Page::$subject ~ MODPATH/_modules/site/views/site/newsevent_page.php [ 12 ]
2014-06-16 04:00:08 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Page::$subject ~ MODPATH/_modules/site/views/site/newsevent_page.php [ 12 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/newsevent_page.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 12, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-16 04:00:53 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Page::$subject ~ MODPATH/_modules/site/views/site/newsevent_page.php [ 12 ]
2014-06-16 04:00:53 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Page::$subject ~ MODPATH/_modules/site/views/site/newsevent_page.php [ 12 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/newsevent_page.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 12, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-16 04:00:54 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Page::$subject ~ MODPATH/_modules/site/views/site/newsevent_page.php [ 12 ]
2014-06-16 04:00:54 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Page::$subject ~ MODPATH/_modules/site/views/site/newsevent_page.php [ 12 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/newsevent_page.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 12, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-16 04:01:22 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Page::$subject ~ MODPATH/_modules/site/views/site/newsevent_page.php [ 12 ]
2014-06-16 04:01:22 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Page::$subject ~ MODPATH/_modules/site/views/site/newsevent_page.php [ 12 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/newsevent_page.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 12, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-16 04:01:31 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Page::$subject ~ MODPATH/_modules/site/views/site/newsevent_page.php [ 12 ]
2014-06-16 04:01:31 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Page::$subject ~ MODPATH/_modules/site/views/site/newsevent_page.php [ 12 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/newsevent_page.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 12, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-16 04:02:19 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_News::find_detail() ~ MODPATH/_modules/site/classes/controller/company.php [ 237 ]
2014-06-16 04:02:19 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_News::find_detail() ~ MODPATH/_modules/site/classes/controller/company.php [ 237 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 04:03:30 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/newsevent_page.php [ 43 ]
2014-06-16 04:03:30 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/newsevent_page.php [ 43 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/newsevent_page.php(43): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 43, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-16 04:03:54 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_news` WHERE `name` = 'test-five' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 04:03:54 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_news` WHERE `name` = 'test-five' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/model/news.php(312): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/model/news.php(103): Model_News->find_count(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(301): Model_News->load_by_name('test-five')
#3 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(182): Controller_Company->_read_news('test-five')
#4 [internal function]: Controller_Company->action_newsevent()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#9 {main}
2014-06-16 04:04:55 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH/_modules/site/classes/controller/company.php [ 301 ]
2014-06-16 04:04:55 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH/_modules/site/classes/controller/company.php [ 301 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 04:05:02 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/newsevent_detail_page.php [ 10 ]
2014-06-16 04:05:02 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/newsevent_detail_page.php [ 10 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/newsevent_detail_page.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 10, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-16 04:06:08 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 303 ]
2014-06-16 04:06:08 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 303 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(303): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 303, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(182): Controller_Company->_read_news('test-three')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 04:07:08 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 304 ]
2014-06-16 04:07:08 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 304 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(304): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 304, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(182): Controller_Company->_read_news('test-three')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 04:08:18 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 303 ]
2014-06-16 04:08:18 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 303 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(303): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 303, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(182): Controller_Company->_read_news('test-three')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 04:08:49 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 303 ]
2014-06-16 04:08:49 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 303 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(303): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 303, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(182): Controller_Company->_read_news('test-three')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 04:09:01 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 304 ]
2014-06-16 04:09:01 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 304 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(304): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 304, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(182): Controller_Company->_read_news('test-three')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 04:09:36 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 304 ]
2014-06-16 04:09:36 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 304 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(304): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 304, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(182): Controller_Company->_read_news('test-three')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 04:10:12 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 304 ]
2014-06-16 04:10:12 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 304 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(304): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 304, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(182): Controller_Company->_read_news('test-three')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 04:10:18 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 327 ]
2014-06-16 04:10:18 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 327 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(327): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 327, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(182): Controller_Company->_read_news('test-three')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 04:10:41 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 304 ]
2014-06-16 04:10:41 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 304 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(304): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 304, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(182): Controller_Company->_read_news('test-three')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 04:10:46 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 303 ]
2014-06-16 04:10:46 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 303 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(303): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 303, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(182): Controller_Company->_read_news('test-three')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 04:11:23 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 303 ]
2014-06-16 04:11:23 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 303 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(303): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 303, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(182): Controller_Company->_read_news('test-three')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 04:11:37 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 303 ]
2014-06-16 04:11:37 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 303 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(303): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 303, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(182): Controller_Company->_read_news('test-three')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 04:11:48 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 303 ]
2014-06-16 04:11:48 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 303 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(303): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 303, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(182): Controller_Company->_read_news('test-three')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 04:12:24 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 303 ]
2014-06-16 04:12:24 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 303 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(303): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 303, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(182): Controller_Company->_read_news('test-three')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 04:12:35 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 303 ]
2014-06-16 04:12:35 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 303 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(303): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 303, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(182): Controller_Company->_read_news('test-three')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 04:12:42 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 303 ]
2014-06-16 04:12:42 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 303 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(303): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 303, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(182): Controller_Company->_read_news('test-three')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 04:12:48 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 303 ]
2014-06-16 04:12:48 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 303 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(303): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 303, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(182): Controller_Company->_read_news('test-three')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 04:13:08 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 303 ]
2014-06-16 04:13:08 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 303 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(303): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 303, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(182): Controller_Company->_read_news('test-three')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 04:13:19 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 303 ]
2014-06-16 04:13:19 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 303 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(303): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 303, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(182): Controller_Company->_read_news('test-three')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 04:13:57 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/news/classes/model/news.php [ 271 ]
2014-06-16 04:13:57 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/news/classes/model/news.php [ 271 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/model/news.php(271): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 271, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(237): Model_News->find_detail(Array, Array, 16, '')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 04:14:10 --- ERROR: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/_modules/news/classes/model/news.php [ 271 ]
2014-06-16 04:14:10 --- STRACE: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/_modules/news/classes/model/news.php [ 271 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 04:14:17 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 248 ]
2014-06-16 04:14:17 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 248 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(248): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 248, Array)
#1 [internal function]: Controller_Company->action_newsevent()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 04:14:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'l' (T_STRING) ~ MODPATH/_modules/news/classes/model/news.php [ 271 ]
2014-06-16 04:14:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'l' (T_STRING) ~ MODPATH/_modules/news/classes/model/news.php [ 271 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 04:14:30 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 248 ]
2014-06-16 04:14:30 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 248 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(248): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 248, Array)
#1 [internal function]: Controller_Company->action_newsevent()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 04:15:05 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 303 ]
2014-06-16 04:15:05 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 303 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(303): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 303, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(182): Controller_Company->_read_news('test-five')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 04:19:02 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/solution.php [ 111 ]
2014-06-16 04:19:02 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/solution.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(111): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 111, Array)
#1 [internal function]: Controller_Solution->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 04:19:21 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 296 ]
2014-06-16 04:19:21 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/download/classes/model/downloadfile.php [ 296 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadfile.php(296): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 296, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/download.php(123): Model_DownloadFile->find_detail(Array, Array, 5, 15)
#2 [internal function]: Controller_Download->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Download))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 04:20:34 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/product/classes/model/product.php [ 186 ]
2014-06-16 04:20:34 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/product/classes/model/product.php [ 186 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/product.php(186): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 186, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/product.php(233): Model_Product->find(Array, 1, '', '')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(654): Model_Product->find_detail(Array, 1)
#3 [internal function]: Controller_Backend_DownloadFile->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-16 04:20:43 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/product/classes/model/product.php [ 186 ]
2014-06-16 04:20:43 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/product/classes/model/product.php [ 186 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/product.php(186): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 186, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/product.php(233): Model_Product->find(Array, 1, '', '')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(654): Model_Product->find_detail(Array, 1)
#3 [internal function]: Controller_Backend_DownloadFile->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-16 04:47:18 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_PageCategory::load_by_name() ~ MODPATH/_modules/site/classes/controller/contact.php [ 55 ]
2014-06-16 04:47:18 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_PageCategory::load_by_name() ~ MODPATH/_modules/site/classes/controller/contact.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 04:50:34 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$name ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_index.php [ 62 ]
2014-06-16 04:50:34 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$name ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_index.php [ 62 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solutioncategory_index.php(62): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 62, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 04:50:55 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/solution.php [ 111 ]
2014-06-16 04:50:55 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/solution.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(111): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 111, Array)
#1 [internal function]: Controller_Solution->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 04:51:07 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_PageCategory::load_by_name() ~ MODPATH/_modules/site/classes/controller/contact.php [ 55 ]
2014-06-16 04:51:07 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_PageCategory::load_by_name() ~ MODPATH/_modules/site/classes/controller/contact.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 04:52:20 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_PageCategory::load_by_name() ~ MODPATH/_modules/site/classes/controller/contact.php [ 55 ]
2014-06-16 04:52:20 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_PageCategory::load_by_name() ~ MODPATH/_modules/site/classes/controller/contact.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 04:52:22 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_PageCategory::load_by_name() ~ MODPATH/_modules/site/classes/controller/contact.php [ 55 ]
2014-06-16 04:52:22 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_PageCategory::load_by_name() ~ MODPATH/_modules/site/classes/controller/contact.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 04:53:39 --- ERROR: ErrorException [ 8 ]: Use of undefined constant id1 - assumed 'id1' ~ MODPATH/_modules/site/classes/controller/contact.php [ 55 ]
2014-06-16 04:53:39 --- STRACE: ErrorException [ 8 ]: Use of undefined constant id1 - assumed 'id1' ~ MODPATH/_modules/site/classes/controller/contact.php [ 55 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(55): Kohana_Core::error_handler(8, 'Use of undefine...', '/Volumes/Data/w...', 55, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 04:53:43 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 56 ]
2014-06-16 04:53:43 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 56 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(56): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 56, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 04:53:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$category_files' (T_VARIABLE) ~ MODPATH/_modules/site/classes/controller/contact.php [ 57 ]
2014-06-16 04:53:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$category_files' (T_VARIABLE) ~ MODPATH/_modules/site/classes/controller/contact.php [ 57 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 04:54:03 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 57 ]
2014-06-16 04:54:03 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 57 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(57): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 57, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 04:54:14 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$description ~ MODPATH/_modules/site/classes/controller/contact.php [ 82 ]
2014-06-16 04:54:14 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$description ~ MODPATH/_modules/site/classes/controller/contact.php [ 82 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(82): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 82, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 04:54:30 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 57 ]
2014-06-16 04:54:30 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 57 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(57): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 57, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 04:54:32 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 57 ]
2014-06-16 04:54:32 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 57 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(57): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 57, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 04:54:34 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 57 ]
2014-06-16 04:54:34 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 57 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(57): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 57, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 04:54:52 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 58 ]
2014-06-16 04:54:52 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 58 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(58): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 58, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 04:54:56 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 58 ]
2014-06-16 04:54:56 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 58 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(58): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 58, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 04:55:08 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 58 ]
2014-06-16 04:55:08 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 58 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(58): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 58, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 04:55:12 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 58 ]
2014-06-16 04:55:12 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 58 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(58): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 58, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 04:55:15 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 58 ]
2014-06-16 04:55:15 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 58 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(58): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 58, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 04:55:19 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 58 ]
2014-06-16 04:55:19 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 58 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(58): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 58, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 04:56:15 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 64 ]
2014-06-16 04:56:15 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 64 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(64): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 64, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 04:56:49 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 63 ]
2014-06-16 04:56:49 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 63 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(63): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 63, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 04:56:50 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 63 ]
2014-06-16 04:56:50 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 63 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(63): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 63, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 04:56:53 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 63 ]
2014-06-16 04:56:53 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 63 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(63): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 63, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 04:57:56 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$description ~ MODPATH/_modules/site/classes/controller/contact.php [ 87 ]
2014-06-16 04:57:56 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$description ~ MODPATH/_modules/site/classes/controller/contact.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(87): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 87, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 04:58:44 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$name ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_index.php [ 62 ]
2014-06-16 04:58:44 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$name ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_index.php [ 62 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solutioncategory_index.php(62): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 62, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 04:59:12 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/solution.php [ 111 ]
2014-06-16 04:59:12 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/solution.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(111): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 111, Array)
#1 [internal function]: Controller_Solution->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 04:59:51 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$description ~ MODPATH/_modules/site/classes/controller/solution.php [ 110 ]
2014-06-16 04:59:51 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$description ~ MODPATH/_modules/site/classes/controller/solution.php [ 110 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(110): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 110, Array)
#1 [internal function]: Controller_Solution->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 05:00:02 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$name ~ MODPATH/_modules/site/views/site/solution_page.php [ 10 ]
2014-06-16 05:00:02 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$name ~ MODPATH/_modules/site/views/site/solution_page.php [ 10 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 10, Array)
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
2014-06-16 05:00:12 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$name ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_index.php [ 62 ]
2014-06-16 05:00:12 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$name ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_index.php [ 62 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solutioncategory_index.php(62): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 62, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 05:01:25 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$name ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_index.php [ 62 ]
2014-06-16 05:01:25 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$name ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_index.php [ 62 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solutioncategory_index.php(62): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 62, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 05:02:14 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$name ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_index.php [ 62 ]
2014-06-16 05:02:14 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$name ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_index.php [ 62 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solutioncategory_index.php(62): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 62, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 05:02:58 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$subject ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_index.php [ 62 ]
2014-06-16 05:02:58 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$subject ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_index.php [ 62 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solutioncategory_index.php(62): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 62, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 05:03:15 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_SolutionCategory::find_detail() ~ MODPATH/_modules/solution/classes/controller/backend/solutioncategory.php [ 94 ]
2014-06-16 05:03:15 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_SolutionCategory::find_detail() ~ MODPATH/_modules/solution/classes/controller/backend/solutioncategory.php [ 94 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 05:05:55 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/solution/classes/model/solutioncategory.php [ 286 ]
2014-06-16 05:05:55 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/solution/classes/model/solutioncategory.php [ 286 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/model/solutioncategory.php(286): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 286, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/controller/backend/solutioncategory.php(94): Model_SolutionCategory->find_detail(Array, Array, 25, '', 'order')
#2 [internal function]: Controller_Backend_SolutionCategory->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 05:06:21 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/solution/classes/model/solutioncategory.php [ 286 ]
2014-06-16 05:06:21 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/solution/classes/model/solutioncategory.php [ 286 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/model/solutioncategory.php(286): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 286, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/controller/backend/solutioncategory.php(94): Model_SolutionCategory->find_detail(Array, Array, 25, '', 'order')
#2 [internal function]: Controller_Backend_SolutionCategory->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 05:09:04 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_solution_categories` WHERE `status` != 'deleted' AND `name` LIKE '%pac%' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 05:09:04 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_solution_categories` WHERE `status` != 'deleted' AND `name` LIKE '%pac%' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/model/solutioncategory.php(327): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/controller/backend/solutioncategory.php(92): Model_SolutionCategory->find_count(Array)
#2 [internal function]: Controller_Backend_SolutionCategory->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 05:10:11 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_index.php [ 59 ]
2014-06-16 05:10:11 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_index.php [ 59 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solutioncategory_index.php(59): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 59, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 05:10:41 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_index.php [ 59 ]
2014-06-16 05:10:41 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_index.php [ 59 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solutioncategory_index.php(59): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 59, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 05:10:52 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_index.php [ 59 ]
2014-06-16 05:10:52 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_index.php [ 59 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solutioncategory_index.php(59): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 59, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 05:15:34 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_SolutionCategory::$language_detail ~ MODPATH/_modules/solution/classes/controller/backend/solutioncategory.php [ 259 ]
2014-06-16 05:15:34 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_SolutionCategory::$language_detail ~ MODPATH/_modules/solution/classes/controller/backend/solutioncategory.php [ 259 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/controller/backend/solutioncategory.php(259): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 259, Array)
#1 [internal function]: Controller_Backend_SolutionCategory->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 05:15:46 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_add.php [ 21 ]
2014-06-16 05:15:46 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_add.php [ 21 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solutioncategory_add.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 21, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 05:16:01 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_add.php [ 21 ]
2014-06-16 05:16:01 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_add.php [ 21 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solutioncategory_add.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 21, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 05:19:55 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Controller_Backend_SolutionCategory' does not have a method '_unique_title' ~ SYSPATH/classes/kohana/validation.php [ 377 ]
2014-06-16 05:19:55 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Controller_Backend_SolutionCategory' does not have a method '_unique_title' ~ SYSPATH/classes/kohana/validation.php [ 377 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/Volumes/Data/w...', 377, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/validation.php(377): call_user_func_array(Array, Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/controller/backend/solutioncategory.php(166): Kohana_Validation->check()
#3 [internal function]: Controller_Backend_SolutionCategory->action_add()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-16 05:21:28 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'field list' [ INSERT INTO `tbl_solution_categories` (`parent_id`, `name`, `title`, `description`, `sub_level`, `is_system`, `user_id`, `order`, `count`, `status`, `added`, `modified`) VALUES (0, '', 'package-rental-house', '', 0, 0, '1', 3, 0, 'publish', 1402870888, 0) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 05:21:28 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'field list' [ INSERT INTO `tbl_solution_categories` (`parent_id`, `name`, `title`, `description`, `sub_level`, `is_system`, `user_id`, `order`, `count`, `status`, `added`, `modified`) VALUES (0, '', 'package-rental-house', '', 0, 0, '1', 3, 0, 'publish', 1402870888, 0) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `tb...', false, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/model/solutioncategory.php(118): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/controller/backend/solutioncategory.php(195): Model_SolutionCategory->add(Array)
#3 [internal function]: Controller_Backend_SolutionCategory->action_add()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-16 05:21:57 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$name ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_view.php [ 17 ]
2014-06-16 05:21:57 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$name ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_view.php [ 17 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solutioncategory_view.php(17): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 17, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 05:22:10 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$name ~ MODPATH/_modules/solution/classes/controller/backend/solutioncategory.php [ 516 ]
2014-06-16 05:22:10 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$name ~ MODPATH/_modules/solution/classes/controller/backend/solutioncategory.php [ 516 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/controller/backend/solutioncategory.php(516): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 516, Array)
#1 [internal function]: Controller_Backend_SolutionCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 05:22:18 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$name ~ MODPATH/_modules/solution/classes/controller/backend/solutioncategory.php [ 516 ]
2014-06-16 05:22:18 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$name ~ MODPATH/_modules/solution/classes/controller/backend/solutioncategory.php [ 516 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/controller/backend/solutioncategory.php(516): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 516, Array)
#1 [internal function]: Controller_Backend_SolutionCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 05:22:41 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_edit.php [ 19 ]
2014-06-16 05:22:41 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_edit.php [ 19 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solutioncategory_edit.php(19): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 19, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 05:23:07 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_edit.php [ 16 ]
2014-06-16 05:23:07 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_edit.php [ 16 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solutioncategory_edit.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 16, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 05:25:28 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_edit.php [ 16 ]
2014-06-16 05:25:28 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_edit.php [ 16 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solutioncategory_edit.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 16, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 05:28:30 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$name ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_view.php [ 17 ]
2014-06-16 05:28:30 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$name ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_view.php [ 17 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solutioncategory_view.php(17): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 17, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 05:30:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_view.php [ 7 ]
2014-06-16 05:30:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_view.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solutioncategory_view.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 05:30:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/solution/classes/controller/backend/solutioncategory.php [ 309 ]
2014-06-16 05:30:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/solution/classes/controller/backend/solutioncategory.php [ 309 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/controller/backend/solutioncategory.php(309): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 309, Array)
#1 [internal function]: Controller_Backend_SolutionCategory->action_view()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 05:39:12 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Solution::$name ~ MODPATH/_modules/solution/views/solution/backend/solution_index.php [ 62 ]
2014-06-16 05:39:12 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Solution::$name ~ MODPATH/_modules/solution/views/solution/backend/solution_index.php [ 62 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solution_index.php(62): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 62, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 05:40:32 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Solution::find_detail() ~ MODPATH/_modules/solution/classes/controller/backend/solution.php [ 136 ]
2014-06-16 05:40:32 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Solution::find_detail() ~ MODPATH/_modules/solution/classes/controller/backend/solution.php [ 136 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 05:44:22 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Solution::$name ~ MODPATH/_modules/solution/views/solution/backend/solution_index.php [ 62 ]
2014-06-16 05:44:22 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Solution::$name ~ MODPATH/_modules/solution/views/solution/backend/solution_index.php [ 62 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solution_index.php(62): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 62, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 05:44:40 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Solution::$name ~ MODPATH/_modules/solution/classes/controller/backend/solution.php [ 567 ]
2014-06-16 05:44:40 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Solution::$name ~ MODPATH/_modules/solution/classes/controller/backend/solution.php [ 567 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/controller/backend/solution.php(567): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 567, Array)
#1 [internal function]: Controller_Backend_Solution->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 05:46:16 --- ERROR: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/solution/views/solution/backend/solution_edit.php [ 13 ]
2014-06-16 05:46:16 --- STRACE: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/solution/views/solution/backend/solution_edit.php [ 13 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solution_edit.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 13, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 05:46:43 --- ERROR: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/solution/views/solution/backend/solution_edit.php [ 13 ]
2014-06-16 05:46:43 --- STRACE: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/solution/views/solution/backend/solution_edit.php [ 13 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solution_edit.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 13, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 05:47:03 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$name ~ MODPATH/_modules/site/views/site/solution_page.php [ 10 ]
2014-06-16 05:47:03 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$name ~ MODPATH/_modules/site/views/site/solution_page.php [ 10 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 10, Array)
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
2014-06-16 05:48:45 --- ERROR: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/solution/views/solution/backend/solution_edit.php [ 13 ]
2014-06-16 05:48:45 --- STRACE: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/solution/views/solution/backend/solution_edit.php [ 13 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solution_edit.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 13, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 05:49:53 --- ERROR: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/solution/views/solution/backend/solution_edit.php [ 13 ]
2014-06-16 05:49:53 --- STRACE: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/solution/views/solution/backend/solution_edit.php [ 13 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solution_edit.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 13, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 05:53:20 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH/_modules/solution/classes/controller/backend/solution.php [ 483 ]
2014-06-16 05:53:20 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH/_modules/solution/classes/controller/backend/solution.php [ 483 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/controller/backend/solution.php(483): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 483, Array)
#1 [internal function]: Controller_Backend_Solution->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 05:53:36 --- ERROR: ErrorException [ 8 ]: Undefined index: overview ~ MODPATH/_modules/solution/classes/controller/backend/solution.php [ 498 ]
2014-06-16 05:53:36 --- STRACE: ErrorException [ 8 ]: Undefined index: overview ~ MODPATH/_modules/solution/classes/controller/backend/solution.php [ 498 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/controller/backend/solution.php(498): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 498, Array)
#1 [internal function]: Controller_Backend_Solution->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 05:53:46 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Solution::$name ~ MODPATH/_modules/solution/views/solution/backend/solution_view.php [ 7 ]
2014-06-16 05:53:46 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Solution::$name ~ MODPATH/_modules/solution/views/solution/backend/solution_view.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solution_view.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 05:55:19 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Solution::$name ~ MODPATH/_modules/solution/views/solution/backend/solution_view.php [ 7 ]
2014-06-16 05:55:19 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Solution::$name ~ MODPATH/_modules/solution/views/solution/backend/solution_view.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solution_view.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 05:57:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: product ~ MODPATH/_modules/solution/views/solution/backend/solution_view.php [ 31 ]
2014-06-16 05:57:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: product ~ MODPATH/_modules/solution/views/solution/backend/solution_view.php [ 31 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solution_view.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 31, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 05:57:58 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_SolutionContent::$overview ~ MODPATH/_modules/solution/views/solution/backend/solution_edit.php [ 138 ]
2014-06-16 05:57:58 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_SolutionContent::$overview ~ MODPATH/_modules/solution/views/solution/backend/solution_edit.php [ 138 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solution_edit.php(138): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 138, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 05:59:43 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$subject ~ MODPATH/_modules/solution/views/solution/backend/solution_edit.php [ 52 ]
2014-06-16 05:59:43 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$subject ~ MODPATH/_modules/solution/views/solution/backend/solution_edit.php [ 52 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solution_edit.php(52): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 52, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 06:04:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/solution/views/solution/backend/solution_add.php [ 7 ]
2014-06-16 06:04:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/solution/views/solution/backend/solution_add.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solution_add.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 06:04:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/solution/views/solution/backend/solution_add.php [ 7 ]
2014-06-16 06:04:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/solution/views/solution/backend/solution_add.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solution_add.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 06:05:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/solution/views/solution/backend/solution_add.php [ 7 ]
2014-06-16 06:05:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/solution/views/solution/backend/solution_add.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solution_add.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 06:06:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/solution/views/solution/backend/solution_add.php [ 7 ]
2014-06-16 06:06:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/solution/views/solution/backend/solution_add.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solution_add.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 06:08:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/solution/views/solution/backend/solution_add.php [ 7 ]
2014-06-16 06:08:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/solution/views/solution/backend/solution_add.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solution_add.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 06:10:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/solution/check_title/Podium Stand was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-16 06:10:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/solution/check_title/Podium Stand was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-16 06:11:13 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'product_id' in 'field list' [ INSERT INTO `tbl_solution_content` (`solution_id`, `lang_id`, `subject`, `text`, `combination1`, `combination2`, `combination3`, `product_id`) VALUES (0, '1', 'Podium Stand', '\n	Podium Stand\n', '', '', '', 7) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 06:11:13 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'product_id' in 'field list' [ INSERT INTO `tbl_solution_content` (`solution_id`, `lang_id`, `subject`, `text`, `combination1`, `combination2`, `combination3`, `product_id`) VALUES (0, '1', 'Podium Stand', '\n	Podium Stand\n', '', '', '', 7) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `tb...', false, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/model/solutioncontent.php(111): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/controller/backend/solution.php(258): Model_SolutionContent->add(Array)
#3 [internal function]: Controller_Backend_Solution->action_add()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Solution))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-16 06:12:18 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$name ~ MODPATH/_modules/site/views/site/solution_page.php [ 10 ]
2014-06-16 06:12:18 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$name ~ MODPATH/_modules/site/views/site/solution_page.php [ 10 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 10, Array)
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
2014-06-16 06:13:22 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Solution::$subject ~ MODPATH/_modules/solution/views/solution/backend/solution_index.php [ 62 ]
2014-06-16 06:13:22 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Solution::$subject ~ MODPATH/_modules/solution/views/solution/backend/solution_index.php [ 62 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solution_index.php(62): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 62, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 06:13:57 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Solution::$subject ~ MODPATH/_modules/solution/views/solution/backend/solution_index.php [ 62 ]
2014-06-16 06:13:57 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Solution::$subject ~ MODPATH/_modules/solution/views/solution/backend/solution_index.php [ 62 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solution_index.php(62): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 62, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 06:14:41 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Solution::$subject ~ MODPATH/_modules/solution/views/solution/backend/solution_index.php [ 62 ]
2014-06-16 06:14:41 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Solution::$subject ~ MODPATH/_modules/solution/views/solution/backend/solution_index.php [ 62 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solution_index.php(62): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 62, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 06:17:32 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 06:17:32 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cou...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(34): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 06:18:37 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$name ~ MODPATH/_modules/site/views/site/solution_page.php [ 10 ]
2014-06-16 06:18:37 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$name ~ MODPATH/_modules/site/views/site/solution_page.php [ 10 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 10, Array)
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
2014-06-16 06:20:44 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/solution_page.php [ 10 ]
2014-06-16 06:20:44 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/solution_page.php [ 10 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 10, Array)
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
2014-06-16 06:20:52 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/solution_page.php [ 10 ]
2014-06-16 06:20:52 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/solution_page.php [ 10 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 10, Array)
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
2014-06-16 06:21:19 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/solution_page.php [ 12 ]
2014-06-16 06:21:19 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/solution_page.php [ 12 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 12, Array)
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
2014-06-16 06:21:23 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/solution_page.php [ 26 ]
2014-06-16 06:21:23 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/solution_page.php [ 26 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php(26): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 26, Array)
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
2014-06-16 06:21:40 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_solutions` WHERE `name` = 'aha-smart-podium' AND `status` = 'publish'LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 06:21:40 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_solutions` WHERE `name` = 'aha-smart-podium' AND `status` = 'publish'LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/model/solution.php(246): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/model/solution.php(95): Model_Solution->find(Array, '', 1)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(140): Model_Solution->load_by_name('aha-smart-podiu...')
#3 [internal function]: Controller_Solution->action_read()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-16 06:24:12 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_SolutionFile::find_detail() ~ MODPATH/_modules/site/classes/controller/solution.php [ 142 ]
2014-06-16 06:24:12 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_SolutionFile::find_detail() ~ MODPATH/_modules/site/classes/controller/solution.php [ 142 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 06:24:20 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 142 ]
2014-06-16 06:24:20 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 142 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(142): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 142, Array)
#1 [internal function]: Controller_Solution->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 06:24:31 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 142 ]
2014-06-16 06:24:31 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 142 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(142): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 142, Array)
#1 [internal function]: Controller_Solution->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 06:24:40 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 142 ]
2014-06-16 06:24:40 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 142 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(142): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 142, Array)
#1 [internal function]: Controller_Solution->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 06:24:48 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 143 ]
2014-06-16 06:24:48 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 143 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(143): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 143, Array)
#1 [internal function]: Controller_Solution->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 06:25:15 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$description ~ MODPATH/_modules/site/classes/controller/solution.php [ 175 ]
2014-06-16 06:25:15 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$description ~ MODPATH/_modules/site/classes/controller/solution.php [ 175 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(175): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 175, Array)
#1 [internal function]: Controller_Solution->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 06:25:28 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 11 ]
2014-06-16 06:25:28 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 11 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_detail_page.php(11): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 11, Array)
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
2014-06-16 06:26:07 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 11 ]
2014-06-16 06:26:07 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 11 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_detail_page.php(11): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 11, Array)
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
2014-06-16 06:26:23 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 13 ]
2014-06-16 06:26:23 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 13 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_detail_page.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 13, Array)
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
2014-06-16 06:26:57 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$description ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 38 ]
2014-06-16 06:26:57 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$description ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 38 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_detail_page.php(38): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 38, Array)
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
2014-06-16 06:27:44 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_solution_categories` WHERE `name` = 'package-offered-for-education-office-rental' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 06:27:44 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_solution_categories` WHERE `name` = 'package-offered-for-education-office-rental' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/model/solutioncategory.php(323): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/model/solutioncategory.php(97): Model_SolutionCategory->find_count(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(198): Model_SolutionCategory->load_by_name('package-offered...')
#3 [internal function]: Controller_Solution->action_category()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-16 06:27:48 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_solution_categories` WHERE `name` = 'package-offered-for-education-office' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 06:27:48 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_solution_categories` WHERE `name` = 'package-offered-for-education-office' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/model/solutioncategory.php(323): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/model/solutioncategory.php(97): Model_SolutionCategory->find_count(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(198): Model_SolutionCategory->load_by_name('package-offered...')
#3 [internal function]: Controller_Solution->action_category()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-16 06:28:17 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_solution_categories` WHERE `name` = 'package-offered-for-education-office' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 06:28:17 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_solution_categories` WHERE `name` = 'package-offered-for-education-office' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/model/solutioncategory.php(323): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/model/solutioncategory.php(97): Model_SolutionCategory->find_count(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(197): Model_SolutionCategory->load_by_name('package-offered...')
#3 [internal function]: Controller_Solution->action_category()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-16 06:28:51 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$description ~ MODPATH/_modules/site/classes/controller/solution.php [ 237 ]
2014-06-16 06:28:51 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$description ~ MODPATH/_modules/site/classes/controller/solution.php [ 237 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(237): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 237, Array)
#1 [internal function]: Controller_Solution->action_category()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-16 06:29:00 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/solution_category_page.php [ 10 ]
2014-06-16 06:29:00 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/solution_category_page.php [ 10 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_category_page.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 10, Array)
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
2014-06-16 06:29:50 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/solution_category_page.php [ 27 ]
2014-06-16 06:29:50 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/solution_category_page.php [ 27 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_category_page.php(27): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 27, Array)
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
2014-06-16 07:04:42 --- ERROR: ErrorException [ 8 ]: Undefined offset: 7 ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 26 ]
2014-06-16 07:04:42 --- STRACE: ErrorException [ 8 ]: Undefined offset: 7 ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 26 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_detail_page.php(26): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 26, Array)
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
2014-06-16 07:05:19 --- ERROR: ErrorException [ 8 ]: Undefined offset: 7 ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 26 ]
2014-06-16 07:05:19 --- STRACE: ErrorException [ 8 ]: Undefined offset: 7 ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 26 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_detail_page.php(26): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 26, Array)
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
2014-06-16 07:05:30 --- ERROR: ErrorException [ 8 ]: Undefined offset: 7 ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 26 ]
2014-06-16 07:05:30 --- STRACE: ErrorException [ 8 ]: Undefined offset: 7 ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 26 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_detail_page.php(26): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 26, Array)
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
2014-06-16 07:05:49 --- ERROR: ErrorException [ 8 ]: Undefined offset: 7 ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 26 ]
2014-06-16 07:05:49 --- STRACE: ErrorException [ 8 ]: Undefined offset: 7 ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 26 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_detail_page.php(26): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 26, Array)
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
2014-06-16 07:05:55 --- ERROR: ErrorException [ 8 ]: Undefined offset: 7 ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 26 ]
2014-06-16 07:05:55 --- STRACE: ErrorException [ 8 ]: Undefined offset: 7 ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 26 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_detail_page.php(26): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 26, Array)
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
2014-06-16 07:06:04 --- ERROR: ErrorException [ 8 ]: Undefined offset: 7 ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 27 ]
2014-06-16 07:06:04 --- STRACE: ErrorException [ 8 ]: Undefined offset: 7 ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 27 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_detail_page.php(27): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 27, Array)
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
2014-06-16 07:06:28 --- ERROR: ErrorException [ 8 ]: Undefined offset: 7 ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 26 ]
2014-06-16 07:06:28 --- STRACE: ErrorException [ 8 ]: Undefined offset: 7 ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 26 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_detail_page.php(26): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 26, Array)
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
2014-06-16 07:06:33 --- ERROR: ErrorException [ 8 ]: Undefined offset: 7 ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 26 ]
2014-06-16 07:06:33 --- STRACE: ErrorException [ 8 ]: Undefined offset: 7 ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 26 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_detail_page.php(26): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 26, Array)
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
2014-06-16 07:06:36 --- ERROR: ErrorException [ 8 ]: Undefined offset: 7 ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 26 ]
2014-06-16 07:06:36 --- STRACE: ErrorException [ 8 ]: Undefined offset: 7 ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 26 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_detail_page.php(26): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 26, Array)
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
2014-06-16 07:17:36 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 07:17:36 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cou...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(34): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 07:18:45 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) AS hits, subject FROM `tbl_solutions` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-16 07:18:45 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) AS hits, subject FROM `tbl_solutions` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cou...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(54): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-16 07:18:54 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$subject ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 9 ]
2014-06-16 07:18:54 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$subject ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 9 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/backend/userdashboard_index.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 9, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-16 07:19:40 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$subject ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 88 ]
2014-06-16 07:19:40 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$subject ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 88 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/backend/userdashboard_index.php(88): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 88, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}