<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-22 02:03:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-22 02:03:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-22 02:39:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: class_name ~ MODPATH/_modules/setting/views/setting/backend/setting_index.php [ 46 ]
2014-07-22 02:39:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: class_name ~ MODPATH/_modules/setting/views/setting/backend/setting_index.php [ 46 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/setting/views/setting/backend/setting_index.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 46, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(108): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(63): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Setting))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-22 02:41:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: class_name ~ MODPATH/_modules/setting/views/setting/backend/setting_index.php [ 66 ]
2014-07-22 02:41:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: class_name ~ MODPATH/_modules/setting/views/setting/backend/setting_index.php [ 66 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/setting/views/setting/backend/setting_index.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 66, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(108): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(63): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Setting))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-22 14:00:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-22 14:00:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-22 15:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-22 15:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-22 16:14:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-22 16:14:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-22 16:15:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-22 16:15:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-22 16:28:09 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_module_lists' doesn't exist [ SELECT * FROM `tbl_module_lists` WHERE `module_link` = 'page/index' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-22 16:28:09 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_module_lists' doesn't exist [ SELECT * FROM `tbl_module_lists` WHERE `module_link` = 'page/index' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/modulelist.php(431): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/modulelist.php(468): Model_ModuleList->find(Array, '', 1)
#2 /Volumes/Data/www/axi/_app/classes/acl.php(205): Model_ModuleList->load_by_link('page/index')
#3 /Volumes/Data/www/axi/_app/classes/acl.php(36): Acl->check_module_menu('page/index')
#4 /Volumes/Data/www/axi/_app/classes/acl.php(17): Acl->__construct()
#5 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(18): Acl::instance()
#6 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#7 /Volumes/Data/www/axi/_mod/_modules/page/classes/controller/backend/page.php(16): Controller_Backend_BaseAdmin->before()
#8 [internal function]: Controller_Backend_Page->before()
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#10 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#13 {main}
2014-07-22 16:28:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_id ~ MODPATH/_modules/page/views/page/backend/page_index.php [ 2 ]
2014-07-22 16:28:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_id ~ MODPATH/_modules/page/views/page/backend/page_index.php [ 2 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/page_index.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 2, Array)
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
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-22 16:28:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_id ~ MODPATH/_modules/page/views/page/backend/page_index.php [ 2 ]
2014-07-22 16:28:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_id ~ MODPATH/_modules/page/views/page/backend/page_index.php [ 2 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/page_index.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 2, Array)
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
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-22 16:28:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_id ~ MODPATH/_modules/page/views/page/backend/page_index.php [ 2 ]
2014-07-22 16:28:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_id ~ MODPATH/_modules/page/views/page/backend/page_index.php [ 2 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/page_index.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 2, Array)
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
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-22 16:29:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: show_category_upload ~ MODPATH/_modules/page/views/page/backend/pagemenu_add.php [ 86 ]
2014-07-22 16:29:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: show_category_upload ~ MODPATH/_modules/page/views/page/backend/pagemenu_add.php [ 86 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/views/page/backend/pagemenu_add.php(86): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 86, Array)
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
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageMenu))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-22 16:40:42 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'menu_id' in 'order clause' [ SELECT * FROM `tbl_pages` WHERE `status` != 'deleted' ORDER BY `menu_id` ASC ,  `order` ASC  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-22 16:40:42 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'menu_id' in 'order clause' [ SELECT * FROM `tbl_pages` WHERE `status` != 'deleted' ORDER BY `menu_id` ASC ,  `order` ASC  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/model/page.php(274): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/page/classes/controller/backend/page.php(286): Model_Page->find(Array, Array)
#2 [internal function]: Controller_Backend_Page->action_add()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-22 16:41:08 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'menu_id' in 'order clause' [ SELECT * FROM `tbl_pages` WHERE `status` != 'deleted' ORDER BY `menu_id` ASC ,  `order` ASC  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-22 16:41:08 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'menu_id' in 'order clause' [ SELECT * FROM `tbl_pages` WHERE `status` != 'deleted' ORDER BY `menu_id` ASC ,  `order` ASC  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/page/classes/model/page.php(274): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/page/classes/controller/backend/page.php(286): Model_Page->find(Array, Array)
#2 [internal function]: Controller_Backend_Page->action_add()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#7 {main}