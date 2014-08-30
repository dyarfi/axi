<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-27 00:27:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: top_ten_products ~ MODPATH/_modules/user/classes/controller/backend/userdashboard.php [ 45 ]
2014-08-27 00:27:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: top_ten_products ~ MODPATH/_modules/user/classes/controller/backend/userdashboard.php [ 45 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/userdashboard.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 45, Array)
#1 [internal function]: Controller_Backend_UserDashboard->action_index()
#2 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#6 {main}
2014-08-27 00:27:47 --- ERROR: Kohana_Exception [ 0 ]: There is no table tbl_PageMenu available ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 308 ]
2014-08-27 00:27:47 --- STRACE: Kohana_Exception [ 0 ]: There is no table tbl_PageMenu available ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 308 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/userdashboard.php(45): Model_UserDashboard->find_top_count(Array)
#1 [internal function]: Controller_Backend_UserDashboard->action_index()
#2 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#6 {main}
2014-08-27 00:28:02 --- ERROR: Kohana_Exception [ 0 ]: There is no table tbl_page_menu available ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 308 ]
2014-08-27 00:28:02 --- STRACE: Kohana_Exception [ 0 ]: There is no table tbl_page_menu available ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 308 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/userdashboard.php(45): Model_UserDashboard->find_top_count(Array)
#1 [internal function]: Controller_Backend_UserDashboard->action_index()
#2 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#6 {main}
2014-08-27 00:28:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_top_ten ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 8 ]
2014-08-27 00:28:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_top_ten ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 8 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/views/user/backend/userdashboard_index.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 8, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/defaultadmin.php(96): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(108): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(63): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#15 {main}
2014-08-27 00:29:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: news_top_ten ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 50 ]
2014-08-27 00:29:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: news_top_ten ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 50 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/views/user/backend/userdashboard_index.php(50): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 50, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/defaultadmin.php(96): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(108): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(63): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#15 {main}
2014-08-27 00:29:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_top_ten ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 83 ]
2014-08-27 00:29:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_top_ten ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 83 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/views/user/backend/userdashboard_index.php(83): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 83, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/defaultadmin.php(96): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(108): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(63): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#15 {main}
2014-08-27 00:33:02 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$media ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 9 ]
2014-08-27 00:33:02 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$media ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 9 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/views/user/backend/userdashboard_index.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 9, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/defaultadmin.php(96): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(108): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(63): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#15 {main}
2014-08-27 00:38:12 --- ERROR: ErrorException [ 8 ]: Undefined index: where_cond ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 330 ]
2014-08-27 00:38:12 --- STRACE: ErrorException [ 8 ]: Undefined index: where_cond ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 330 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/userdashboard.php(330): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 330, Array)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/userdashboard.php(45): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-08-27 00:38:44 --- ERROR: ErrorException [ 8 ]: Undefined index: where_cond ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 330 ]
2014-08-27 00:38:44 --- STRACE: ErrorException [ 8 ]: Undefined index: where_cond ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 330 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/userdashboard.php(330): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 330, Array)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/userdashboard.php(45): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-08-27 00:39:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 402 ]
2014-08-27 00:39:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 402 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/userdashboard.php(402): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 402, Array)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/userdashboard.php(46): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-08-27 00:39:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 366 ]
2014-08-27 00:39:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 366 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 366, Array)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/userdashboard.php(46): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-08-27 00:39:51 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'GROUP BY title ORDER BY `count` DESC LIMIT 0, 10' at line 1 [ SELECT media, MAX(`count`) as `hits`, title FROM `tbl_page_menus` WHERE GROUP BY title ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-08-27 00:39:51 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'GROUP BY title ORDER BY `count` DESC LIMIT 0, 10' at line 1 [ SELECT media, MAX(`count`) as `hits`, title FROM `tbl_page_menus` WHERE GROUP BY title ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/userdashboard.php(405): Kohana_Database_MySQL->query(1, 'SELECT media, M...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/userdashboard.php(46): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-08-27 00:41:07 --- ERROR: Database_Exception [ 1103 ]: Incorrect table name 'tbl_page_menusGROUP BY title ORDER BY ' [ SELECT media, MAX(`count`) as `hits`, title FROM `tbl_page_menusGROUP BY title ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-08-27 00:41:07 --- STRACE: Database_Exception [ 1103 ]: Incorrect table name 'tbl_page_menusGROUP BY title ORDER BY ' [ SELECT media, MAX(`count`) as `hits`, title FROM `tbl_page_menusGROUP BY title ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/userdashboard.php(405): Kohana_Database_MySQL->query(1, 'SELECT media, M...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/userdashboard.php(46): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-08-27 00:41:15 --- ERROR: Database_Exception [ 1103 ]: Incorrect table name 'tbl_page_menus GROUP BY title ORDER BY ' [ SELECT media, MAX(`count`) as `hits`, title FROM `tbl_page_menus GROUP BY title ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-08-27 00:41:15 --- STRACE: Database_Exception [ 1103 ]: Incorrect table name 'tbl_page_menus GROUP BY title ORDER BY ' [ SELECT media, MAX(`count`) as `hits`, title FROM `tbl_page_menus GROUP BY title ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/userdashboard.php(405): Kohana_Database_MySQL->query(1, 'SELECT media, M...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/userdashboard.php(46): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-08-27 00:41:23 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE' at line 1 [  WHERE  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-08-27 00:41:23 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE' at line 1 [  WHERE  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/userdashboard.php(405): Kohana_Database_MySQL->query(1, ' WHERE ', true)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/userdashboard.php(46): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-08-27 00:41:32 --- ERROR: Database_Exception [ 1103 ]: Incorrect table name 'tbl_page_menus GROUP BY title ORDER BY ' [ SELECT media, MAX(`count`) as `hits`, title FROM `tbl_page_menus GROUP BY title ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-08-27 00:41:32 --- STRACE: Database_Exception [ 1103 ]: Incorrect table name 'tbl_page_menus GROUP BY title ORDER BY ' [ SELECT media, MAX(`count`) as `hits`, title FROM `tbl_page_menus GROUP BY title ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/userdashboard.php(405): Kohana_Database_MySQL->query(1, 'SELECT media, M...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/userdashboard.php(46): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-08-27 00:41:44 --- ERROR: Database_Exception [ 1103 ]: Incorrect table name 'tbl_page_menus GROUP BY title ORDER BY ' [ SELECT media, MAX(`count`) as `hits`, title FROM `tbl_page_menus GROUP BY title ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-08-27 00:41:44 --- STRACE: Database_Exception [ 1103 ]: Incorrect table name 'tbl_page_menus GROUP BY title ORDER BY ' [ SELECT media, MAX(`count`) as `hits`, title FROM `tbl_page_menus GROUP BY title ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/userdashboard.php(405): Kohana_Database_MySQL->query(1, 'SELECT media, M...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/userdashboard.php(46): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-08-27 00:41:52 --- ERROR: Database_Exception [ 1103 ]: Incorrect table name 'tbl_page_menus GROUP BY title ORDER BY ' [ SELECT media, MAX(`count`) as `hits`, title FROM `tbl_page_menus GROUP BY title ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-08-27 00:41:52 --- STRACE: Database_Exception [ 1103 ]: Incorrect table name 'tbl_page_menus GROUP BY title ORDER BY ' [ SELECT media, MAX(`count`) as `hits`, title FROM `tbl_page_menus GROUP BY title ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/userdashboard.php(405): Kohana_Database_MySQL->query(1, 'SELECT media, M...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/userdashboard.php(46): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-08-27 00:42:08 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE' at line 1 [  WHERE  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-08-27 00:42:08 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE' at line 1 [  WHERE  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/userdashboard.php(405): Kohana_Database_MySQL->query(1, ' WHERE ', true)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/userdashboard.php(46): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-08-27 00:42:14 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE' at line 1 [  WHERE  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-08-27 00:42:14 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE' at line 1 [  WHERE  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/userdashboard.php(405): Kohana_Database_MySQL->query(1, ' WHERE ', true)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/userdashboard.php(46): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-08-27 00:42:27 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'GROUP BY title ORDER BY `count` DESC LIMIT 0, 10' at line 1 [ SELECT media, MAX(`count`) as `hits`, title FROM `tbl_page_menus` WHERE GROUP BY title ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-08-27 00:42:27 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'GROUP BY title ORDER BY `count` DESC LIMIT 0, 10' at line 1 [ SELECT media, MAX(`count`) as `hits`, title FROM `tbl_page_menus` WHERE GROUP BY title ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/userdashboard.php(405): Kohana_Database_MySQL->query(1, 'SELECT media, M...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/userdashboard.php(46): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-08-27 00:43:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '1' (T_LNUMBER), expecting ')' ~ MODPATH/_modules/user/classes/controller/backend/userdashboard.php [ 40 ]
2014-08-27 00:43:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '1' (T_LNUMBER), expecting ')' ~ MODPATH/_modules/user/classes/controller/backend/userdashboard.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-27 00:44:03 --- ERROR: ErrorException [ 8 ]: Undefined index: where_cond ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 331 ]
2014-08-27 00:44:03 --- STRACE: ErrorException [ 8 ]: Undefined index: where_cond ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 331 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/userdashboard.php(331): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 331, Array)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/userdashboard.php(56): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-08-27 00:44:24 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'title' in 'field list' [ SELECT MAX(`count`) as `hits`, title FROM `tbl_news` WHERE `status` = 'publish'GROUP BY title ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-08-27 00:44:24 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'title' in 'field list' [ SELECT MAX(`count`) as `hits`, title FROM `tbl_news` WHERE `status` = 'publish'GROUP BY title ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/userdashboard.php(405): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cou...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/userdashboard.php(57): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-08-27 00:44:42 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'title' in 'field list' [ SELECT MAX(`count`) as `hits`, title FROM `tbl_news` WHERE `status` = 'publish'GROUP BY title ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-08-27 00:44:42 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'title' in 'field list' [ SELECT MAX(`count`) as `hits`, title FROM `tbl_news` WHERE `status` = 'publish'GROUP BY title ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/userdashboard.php(405): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cou...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/userdashboard.php(57): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-08-27 00:45:11 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'title' in 'field list' [ SELECT MAX(`count`) as `hits`, title FROM `tbl_news` WHERE `status`  = 'publish'GROUP BY title ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-08-27 00:45:11 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'title' in 'field list' [ SELECT MAX(`count`) as `hits`, title FROM `tbl_news` WHERE `status`  = 'publish'GROUP BY title ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/userdashboard.php(405): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cou...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/userdashboard.php(57): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-08-27 00:45:19 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'title' in 'field list' [ SELECT MAX(`count`) as `hits`, title FROM `tbl_news` WHERE `status`  = 'publish' GROUP BY title ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-08-27 00:45:19 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'title' in 'field list' [ SELECT MAX(`count`) as `hits`, title FROM `tbl_news` WHERE `status`  = 'publish' GROUP BY title ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/userdashboard.php(405): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cou...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/userdashboard.php(57): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-08-27 00:45:24 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'title' in 'field list' [ SELECT MAX(`count`) as `hits`, title FROM `tbl_news` WHERE `status`  = 'publish' GROUP BY title ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-08-27 00:45:24 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'title' in 'field list' [ SELECT MAX(`count`) as `hits`, title FROM `tbl_news` WHERE `status`  = 'publish' GROUP BY title ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/userdashboard.php(405): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cou...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/userdashboard.php(57): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-08-27 00:45:33 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'title' in 'group statement' [ SELECT MAX(`count`) as `hits`, name FROM `tbl_news` WHERE `status`  = 'publish' GROUP BY title ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-08-27 00:45:33 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'title' in 'group statement' [ SELECT MAX(`count`) as `hits`, name FROM `tbl_news` WHERE `status`  = 'publish' GROUP BY title ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/userdashboard.php(405): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cou...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/userdashboard.php(57): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-08-27 00:47:22 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$title ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 51 ]
2014-08-27 00:47:22 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$title ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 51 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/views/user/backend/userdashboard_index.php(51): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 51, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/defaultadmin.php(96): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(108): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(63): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#15 {main}
2014-08-27 00:53:31 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_News::$id ~ MODPATH/_modules/news/classes/model/news.php [ 144 ]
2014-08-27 00:53:31 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_News::$id ~ MODPATH/_modules/news/classes/model/news.php [ 144 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/news/classes/model/news.php(144): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 144, Array)
#1 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/xhr.php(36): Model_News->update()
#2 [internal function]: Controller_Xhr->action_read_news()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Xhr))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-08-27 00:56:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/site/classes/controller/xhr.php [ 37 ]
2014-08-27 00:56:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/site/classes/controller/xhr.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-27 01:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL facebook.com was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-27 01:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL facebook.com was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#3 {main}
2014-08-27 01:58:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-27 01:58:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#3 {main}
2014-08-27 02:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL linkedin.com was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-27 02:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL linkedin.com was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#3 {main}
2014-08-27 02:08:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL linkedin.com was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-27 02:08:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL linkedin.com was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#3 {main}
2014-08-27 02:10:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL linkedin.com was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-27 02:10:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL linkedin.com was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#3 {main}
2014-08-27 02:10:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL linkedin.com was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-27 02:10:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL linkedin.com was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#3 {main}
2014-08-27 08:39:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-27 08:39:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#3 {main}
2014-08-27 10:45:29 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Controller_Backend_Management' does not have a method '_valid_search_key' ~ SYSPATH/classes/kohana/validation.php [ 377 ]
2014-08-27 10:45:29 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Controller_Backend_Management' does not have a method '_valid_search_key' ~ SYSPATH/classes/kohana/validation.php [ 377 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/Volumes/Data/w...', 377, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/validation.php(377): call_user_func_array(Array, Array)
#2 /Volumes/Data/www/axi/_mod/_modules/management/classes/controller/backend/management.php(74): Kohana_Validation->check()
#3 [internal function]: Controller_Backend_Management->action_index()
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Management))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#8 {main}
2014-08-27 20:23:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-27 20:23:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#3 {main}
2014-08-27 21:42:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/management/change was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-08-27 21:42:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/management/change was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#3 {main}
2014-08-27 21:43:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: page_index ~ MODPATH/_modules/management/views/management/backend/management_index.php [ 38 ]
2014-08-27 21:43:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: page_index ~ MODPATH/_modules/management/views/management/backend/management_index.php [ 38 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/views/management/backend/management_index.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 38, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/defaultadmin.php(96): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(108): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(63): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Management))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#15 {main}
2014-08-27 21:43:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: page_index ~ MODPATH/_modules/management/views/management/backend/management_index.php [ 38 ]
2014-08-27 21:43:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: page_index ~ MODPATH/_modules/management/views/management/backend/management_index.php [ 38 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/management/views/management/backend/management_index.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 38, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/defaultadmin.php(96): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(108): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(63): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Management))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#15 {main}
2014-08-27 22:35:58 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/_modules/site/views/site/home_page.php [ 269 ]
2014-08-27 22:35:58 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/_modules/site/views/site/home_page.php [ 269 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}