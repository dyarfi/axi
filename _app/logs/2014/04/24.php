<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-24 00:42:32 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/download/views/download/backend/downloadtype_add.php [ 76 ]
2014-04-24 00:42:32 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/download/views/download/backend/downloadtype_add.php [ 76 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadtype_add.php(76): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 76, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadType))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-24 00:42:54 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/download/views/download/backend/downloadtype_add.php [ 76 ]
2014-04-24 00:42:54 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/download/views/download/backend/downloadtype_add.php [ 76 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadtype_add.php(76): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 76, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadType))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-24 00:51:44 --- ERROR: ErrorException [ 8 ]: Undefined index: filetype ~ MODPATH/_modules/download/views/download/backend/downloadtype_add.php [ 78 ]
2014-04-24 00:51:44 --- STRACE: ErrorException [ 8 ]: Undefined index: filetype ~ MODPATH/_modules/download/views/download/backend/downloadtype_add.php [ 78 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadtype_add.php(78): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 78, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadType))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-24 01:06:50 --- ERROR: ErrorException [ 8 ]: Undefined index: file_1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 191 ]
2014-04-24 01:06:50 --- STRACE: ErrorException [ 8 ]: Undefined index: file_1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 191 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_edit.php(191): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 191, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-24 01:24:43 --- ERROR: ErrorException [ 8 ]: Undefined index: file_1_caption ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 205 ]
2014-04-24 01:24:43 --- STRACE: ErrorException [ 8 ]: Undefined index: file_1_caption ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 205 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_edit.php(205): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 205, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-24 01:36:15 --- ERROR: ErrorException [ 8 ]: Undefined index: file_1_caption ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 205 ]
2014-04-24 01:36:15 --- STRACE: ErrorException [ 8 ]: Undefined index: file_1_caption ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 205 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_edit.php(205): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 205, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-24 01:48:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/error/invalid_request was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-24 01:48:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/error/invalid_request was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-24 01:59:29 --- ERROR: ErrorException [ 8 ]: Undefined offset: 2 ~ MODPATH/_modules/page/views/page/backend/page_index.php [ 74 ]
2014-04-24 01:59:29 --- STRACE: ErrorException [ 8 ]: Undefined offset: 2 ~ MODPATH/_modules/page/views/page/backend/page_index.php [ 74 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/views/page/backend/page_index.php(74): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 74, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-24 02:00:49 --- ERROR: ErrorException [ 8 ]: Undefined offset: 2 ~ MODPATH/_modules/page/views/page/backend/page_index.php [ 74 ]
2014-04-24 02:00:49 --- STRACE: ErrorException [ 8 ]: Undefined offset: 2 ~ MODPATH/_modules/page/views/page/backend/page_index.php [ 74 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/views/page/backend/page_index.php(74): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 74, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-24 03:41:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: page_upload_url ~ MODPATH/_modules/site/views/site/about_page.php [ 32 ]
2014-04-24 03:41:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: page_upload_url ~ MODPATH/_modules/site/views/site/about_page.php [ 32 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/about_page.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 32, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(218): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-24 03:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/8048516ae1e86ab7daa62a2786ae1a7b_crop_640x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 03:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/8048516ae1e86ab7daa62a2786ae1a7b_crop_640x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 03:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/8048516ae1e86ab7daa62a2786ae1a7b_crop_640x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 03:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/8048516ae1e86ab7daa62a2786ae1a7b_crop_640x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 03:46:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/8048516ae1e86ab7daa62a2786ae1a7b_crop_640x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 03:46:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/8048516ae1e86ab7daa62a2786ae1a7b_crop_640x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 03:54:14 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'title' in 'where clause' [ SELECT * FROM `tbl_solutions` WHERE `status` != 'deleted' AND `title` LIKE '%xcv%' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-04-24 03:54:14 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'title' in 'where clause' [ SELECT * FROM `tbl_solutions` WHERE `status` != 'deleted' AND `title` LIKE '%xcv%' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/model/solution.php(321): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/controller/backend/solution.php(136): Model_Solution->find_count(Array)
#2 [internal function]: Controller_Backend_Solution->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Solution))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-24 03:54:41 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'title' in 'where clause' [ SELECT * FROM `tbl_solutions` WHERE `status` != 'deleted' AND `title` LIKE '%sdsds%' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-04-24 03:54:41 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'title' in 'where clause' [ SELECT * FROM `tbl_solutions` WHERE `status` != 'deleted' AND `title` LIKE '%sdsds%' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/model/solution.php(321): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/controller/backend/solution.php(136): Model_Solution->find_count(Array)
#2 [internal function]: Controller_Backend_Solution->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Solution))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-24 12:59:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: default_order ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 224 ]
2014-04-24 12:59:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: default_order ~ MODPATH/_modules/page/classes/model/pagecategory.php [ 224 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(224): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 224, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(124): Model_PageCategory->find(Array, Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(10): Controller_Themes_Default->before()
#3 [internal function]: Controller_Search->before()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Search))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-04-24 15:53:41 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 415 ]
2014-04-24 15:53:41 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 415 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(415): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 415, Array)
#1 [internal function]: Controller_Company->action_reseller()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-24 15:58:21 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `tbl_page_categories` WHERE `status` != 'deleted' ORDER BY ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-04-24 15:58:21 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `tbl_page_categories` WHERE `status` != 'deleted' ORDER BY ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(284): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/pagecategory.php(29): Model_PageCategory->find(Array)
#2 [internal function]: Controller_Backend_PageCategory->before()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-24 15:58:34 --- ERROR: Database_Exception [ 1054 ]: Unknown column '0' in 'order clause' [ SELECT * FROM `tbl_page_categories` WHERE `status` = 'publish' AND `parent_id` = '0' ORDER BY `0`  ,  `id` ASC  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-04-24 15:58:34 --- STRACE: Database_Exception [ 1054 ]: Unknown column '0' in 'order clause' [ SELECT * FROM `tbl_page_categories` WHERE `status` = 'publish' AND `parent_id` = '0' ORDER BY `0`  ,  `id` ASC  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecategory.php(284): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(124): Model_PageCategory->find(Array, Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(10): Controller_Themes_Default->before()
#3 [internal function]: Controller_Search->before()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Search))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-04-24 16:14:55 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 415 ]
2014-04-24 16:14:55 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 415 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(415): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 415, Array)
#1 [internal function]: Controller_Company->action_reseller()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-24 16:15:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/reseller/themes/:/localhost/offistarindo/content/reseller-blank_crop_186x126.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 16:15:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/reseller/themes/:/localhost/offistarindo/content/reseller-blank_crop_186x126.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 16:15:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/reseller/themes/:/localhost/offistarindo/content/reseller-blank_crop_186x126.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 16:15:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/reseller/themes/:/localhost/offistarindo/content/reseller-blank_crop_186x126.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 16:15:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/reseller/themes/:/localhost/offistarindo/content/reseller-blank_crop_186x126.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 16:15:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/reseller/themes/:/localhost/offistarindo/content/reseller-blank_crop_186x126.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 16:15:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/reseller/reseller-blank_crop_186x126.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 16:15:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/reseller/reseller-blank_crop_186x126.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 16:15:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/reseller/reseller-blank_crop_186x126.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 16:15:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/reseller/reseller-blank_crop_186x126.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 16:18:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH/_modules/site/views/site/reseller_page.php [ 31 ]
2014-04-24 16:18:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH/_modules/site/views/site/reseller_page.php [ 31 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-24 16:19:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL reseller-blank.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-24 16:19:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL reseller-blank.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-24 16:19:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL reseller-blank.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-24 16:19:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL reseller-blank.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-24 16:19:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ MODPATH/_modules/site/views/site/reseller_page.php [ 37 ]
2014-04-24 16:19:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ MODPATH/_modules/site/views/site/reseller_page.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-24 16:19:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL themescontwn/reseller-blank.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-24 16:19:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL themescontwn/reseller-blank.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-24 16:19:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL themescontwn/reseller-blank.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-24 16:19:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL themescontwn/reseller-blank.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-24 16:19:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL themescontent/reseller-blank.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-24 16:19:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL themescontent/reseller-blank.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-24 16:19:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL themescontent/reseller-blank.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-24 16:19:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL themescontent/reseller-blank.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-24 16:19:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/content/reseller-blank.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 16:19:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/content/reseller-blank.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 16:19:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/content/reseller-blank.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 16:19:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/content/reseller-blank.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 16:20:08 --- ERROR: ErrorException [ 8 ]: Use of undefined constant ASSET - assumed 'ASSET' ~ MODPATH/_modules/site/views/site/reseller_page.php [ 37 ]
2014-04-24 16:20:08 --- STRACE: ErrorException [ 8 ]: Use of undefined constant ASSET - assumed 'ASSET' ~ MODPATH/_modules/site/views/site/reseller_page.php [ 37 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/reseller_page.php(37): Kohana_Core::error_handler(8, 'Use of undefine...', '/Volumes/Data/w...', 37, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(218): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-24 16:20:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: offistarindo/assets/themes/content/reseller-blank.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 16:20:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: offistarindo/assets/themes/content/reseller-blank.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 16:20:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: offistarindo/assets/themes/content/reseller-blank.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 16:20:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: offistarindo/assets/themes/content/reseller-blank.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 16:20:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/themes/content/reseller-blank.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 16:20:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/themes/content/reseller-blank.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 16:20:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/themes/content/reseller-blank.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 16:20:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/themes/content/reseller-blank.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 16:20:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/http:/localhost/offistarindo/assets/images/content/reseller-blank.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 16:20:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/http:/localhost/offistarindo/assets/images/content/reseller-blank.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 16:20:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/http:/localhost/offistarindo/assets/images/content/reseller-blank.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 16:20:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/http:/localhost/offistarindo/assets/images/content/reseller-blank.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 16:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/reseller-blank.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 16:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/reseller-blank.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 16:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/reseller-blank.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 16:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/reseller-blank.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 16:20:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/reseller-blank.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 16:20:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/reseller-blank.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 16:20:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/reseller-blank.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 16:20:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/content/reseller-blank.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/reseller/reseller-blank.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/reseller/reseller-blank.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 16:22:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/reseller/reseller-blank.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 16:22:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/reseller/reseller-blank.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 16:25:21 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 249 ]
2014-04-24 16:25:21 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 249 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(249): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 249, Array)
#1 [internal function]: Controller_Company->action_newsevent()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-24 16:25:23 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 249 ]
2014-04-24 16:25:23 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 249 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(249): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 249, Array)
#1 [internal function]: Controller_Company->action_newsevent()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-24 16:38:38 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 249 ]
2014-04-24 16:38:38 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 249 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(249): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 249, Array)
#1 [internal function]: Controller_Company->action_newsevent()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-24 16:38:55 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 249 ]
2014-04-24 16:38:55 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 249 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(249): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 249, Array)
#1 [internal function]: Controller_Company->action_newsevent()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-24 16:39:03 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_News::$file_name ~ MODPATH/_modules/site/views/site/newsevent_page.php [ 31 ]
2014-04-24 16:39:03 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_News::$file_name ~ MODPATH/_modules/site/views/site/newsevent_page.php [ 31 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/newsevent_page.php(31): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 31, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(218): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-24 16:44:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: filename ~ MODPATH/_modules/site/views/site/newsevent_page.php [ 33 ]
2014-04-24 16:44:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: filename ~ MODPATH/_modules/site/views/site/newsevent_page.php [ 33 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/newsevent_page.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 33, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(218): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-24 16:52:37 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_News::$file_name ~ MODPATH/_modules/site/views/site/newsevent_page.php [ 34 ]
2014-04-24 16:52:37 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_News::$file_name ~ MODPATH/_modules/site/views/site/newsevent_page.php [ 34 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/newsevent_page.php(34): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 34, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(218): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-24 16:53:06 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_News::$file_name ~ MODPATH/_modules/site/views/site/newsevent_page.php [ 32 ]
2014-04-24 16:53:06 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_News::$file_name ~ MODPATH/_modules/site/views/site/newsevent_page.php [ 32 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/newsevent_page.php(32): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 32, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(218): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-24 16:53:11 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_News::$file_name ~ MODPATH/_modules/site/views/site/newsevent_page.php [ 32 ]
2014-04-24 16:53:11 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_News::$file_name ~ MODPATH/_modules/site/views/site/newsevent_page.php [ 32 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/newsevent_page.php(32): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 32, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(218): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-24 16:53:30 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_News::$file_name ~ MODPATH/_modules/site/views/site/newsevent_page.php [ 32 ]
2014-04-24 16:53:30 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_News::$file_name ~ MODPATH/_modules/site/views/site/newsevent_page.php [ 32 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/newsevent_page.php(32): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 32, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(218): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-24 17:20:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/fc07ace58a5d1ded384d2f7705c47d3c_crop_80x80.pdf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 17:20:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/fc07ace58a5d1ded384d2f7705c47d3c_crop_80x80.pdf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 17:21:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/fc07ace58a5d1ded384d2f7705c47d3c_crop_80x80.pdf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 17:21:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/fc07ace58a5d1ded384d2f7705c47d3c_crop_80x80.pdf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 17:21:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/fc07ace58a5d1ded384d2f7705c47d3c_crop_80x80.pdf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 17:21:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/fc07ace58a5d1ded384d2f7705c47d3c_crop_80x80.pdf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 17:21:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/0fc09aaceb24c59aa03e6f64727fd030_crop_80x80.ai ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 17:21:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/0fc09aaceb24c59aa03e6f64727fd030_crop_80x80.ai ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 17:21:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/fc07ace58a5d1ded384d2f7705c47d3c_crop_80x80.pdf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 17:21:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/fc07ace58a5d1ded384d2f7705c47d3c_crop_80x80.pdf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 17:21:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/fc07ace58a5d1ded384d2f7705c47d3c_crop_80x80.pdf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 17:21:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/fc07ace58a5d1ded384d2f7705c47d3c_crop_80x80.pdf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 17:22:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/9f2941d6a8c3810309585fc2a6391f11_crop_80x80.xls ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 17:22:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/9f2941d6a8c3810309585fc2a6391f11_crop_80x80.xls ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 17:26:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/9f2941d6a8c3810309585fc2a6391f11_crop_80x80.xls ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 17:26:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/9f2941d6a8c3810309585fc2a6391f11_crop_80x80.xls ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 17:26:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/9f2941d6a8c3810309585fc2a6391f11_crop_80x80.xls ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 17:26:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/9f2941d6a8c3810309585fc2a6391f11_crop_80x80.xls ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 17:26:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/9f2941d6a8c3810309585fc2a6391f11_crop_80x80.xls ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 17:26:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/9f2941d6a8c3810309585fc2a6391f11_crop_80x80.xls ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 17:26:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/9f2941d6a8c3810309585fc2a6391f11_crop_80x80.xls ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 17:26:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/9f2941d6a8c3810309585fc2a6391f11_crop_80x80.xls ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 17:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/9f2941d6a8c3810309585fc2a6391f11_crop_80x80.xls ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 17:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/9f2941d6a8c3810309585fc2a6391f11_crop_80x80.xls ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 17:26:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/9f2941d6a8c3810309585fc2a6391f11_crop_80x80.xls ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 17:26:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/9f2941d6a8c3810309585fc2a6391f11_crop_80x80.xls ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 17:55:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.fileupload-audio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 17:55:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.fileupload-audio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 17:55:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.fileupload-video.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 17:55:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.fileupload-video.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 17:55:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.fileupload-video.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 17:55:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.fileupload-video.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 17:55:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.fileupload-audio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 17:55:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.fileupload-audio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 17:55:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.fileupload-audio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 17:55:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.fileupload-audio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 17:55:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.fileupload-video.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 17:55:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.fileupload-video.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 17:55:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.fileupload-video.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 17:55:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.fileupload-video.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 17:55:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.fileupload-audio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 17:55:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.fileupload-audio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 18:00:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/b3fdcbd0981958c994001ba88e32b13c_crop_80x80.pdf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 18:00:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/b3fdcbd0981958c994001ba88e32b13c_crop_80x80.pdf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 18:33:04 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::delete() ~ MODPATH/_modules/news/classes/model/news.php [ 154 ]
2014-04-24 18:33:04 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::delete() ~ MODPATH/_modules/news/classes/model/news.php [ 154 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-24 18:33:10 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::delete() ~ MODPATH/_modules/news/classes/model/news.php [ 154 ]
2014-04-24 18:33:10 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::delete() ~ MODPATH/_modules/news/classes/model/news.php [ 154 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-24 18:33:23 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::delete() ~ MODPATH/_modules/news/classes/model/news.php [ 154 ]
2014-04-24 18:33:23 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::delete() ~ MODPATH/_modules/news/classes/model/news.php [ 154 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-24 18:33:41 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::delete() ~ MODPATH/_modules/news/classes/model/news.php [ 154 ]
2014-04-24 18:33:41 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::delete() ~ MODPATH/_modules/news/classes/model/news.php [ 154 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-24 18:33:49 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::delete() ~ MODPATH/_modules/news/classes/model/news.php [ 154 ]
2014-04-24 18:33:49 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::delete() ~ MODPATH/_modules/news/classes/model/news.php [ 154 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-24 18:39:36 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_NewsFile::$id ~ MODPATH/_modules/news/classes/model/newsfile.php [ 154 ]
2014-04-24 18:39:36 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_NewsFile::$id ~ MODPATH/_modules/news/classes/model/newsfile.php [ 154 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/model/newsfile.php(154): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 154, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/controller/backend/news.php(907): Model_NewsFile->delete('18')
#2 [internal function]: Controller_Backend_News->action_delete()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-24 18:39:43 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/news/classes/controller/backend/news.php [ 197 ]
2014-04-24 18:39:43 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/news/classes/controller/backend/news.php [ 197 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/controller/backend/news.php(197): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 197, Array)
#1 [internal function]: Controller_Backend_News->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_News))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-24 18:40:27 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_NewsFile::$id ~ MODPATH/_modules/news/classes/model/newsfile.php [ 154 ]
2014-04-24 18:40:27 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_NewsFile::$id ~ MODPATH/_modules/news/classes/model/newsfile.php [ 154 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/model/newsfile.php(154): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 154, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/controller/backend/news.php(907): Model_NewsFile->delete('13')
#2 [internal function]: Controller_Backend_News->action_delete()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-24 18:42:41 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_NewsFile::$id ~ MODPATH/_modules/news/classes/model/newsfile.php [ 154 ]
2014-04-24 18:42:41 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_NewsFile::$id ~ MODPATH/_modules/news/classes/model/newsfile.php [ 154 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/model/newsfile.php(154): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 154, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/controller/backend/news.php(907): Model_NewsFile->delete('19')
#2 [internal function]: Controller_Backend_News->action_delete()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-24 18:43:45 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_NewsFile::$id ~ MODPATH/_modules/news/classes/model/newsfile.php [ 154 ]
2014-04-24 18:43:45 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_NewsFile::$id ~ MODPATH/_modules/news/classes/model/newsfile.php [ 154 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/model/newsfile.php(154): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 154, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/controller/backend/news.php(907): Model_NewsFile->delete('20')
#2 [internal function]: Controller_Backend_News->action_delete()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-24 18:45:17 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_NewsFile::$id ~ MODPATH/_modules/news/classes/model/newsfile.php [ 154 ]
2014-04-24 18:45:17 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_NewsFile::$id ~ MODPATH/_modules/news/classes/model/newsfile.php [ 154 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/model/newsfile.php(154): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 154, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/controller/backend/news.php(907): Model_NewsFile->delete('21')
#2 [internal function]: Controller_Backend_News->action_delete()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-24 18:46:42 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_NewsFile::$id ~ MODPATH/_modules/news/classes/model/newsfile.php [ 154 ]
2014-04-24 18:46:42 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_NewsFile::$id ~ MODPATH/_modules/news/classes/model/newsfile.php [ 154 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/model/newsfile.php(154): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 154, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/controller/backend/news.php(907): Model_NewsFile->delete('22')
#2 [internal function]: Controller_Backend_News->action_delete()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-24 23:11:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 23:11:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 23:11:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 23:11:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 23:11:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 23:11:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 23:16:57 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Maintenance::$setting ~ APPPATH/classes/controller/themes/defaultmaintenance.php [ 37 ]
2014-04-24 23:16:57 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Maintenance::$setting ~ APPPATH/classes/controller/themes/defaultmaintenance.php [ 37 ]
--
#0 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultmaintenance.php(37): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 37, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/maintenance.php(6): Controller_Themes_DefaultMaintenance->before()
#2 [internal function]: Controller_Backend_Maintenance->before()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Maintenance))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-24 23:19:06 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/backend/maintenance.php [ 12 ]
2014-04-24 23:19:06 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/backend/maintenance.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-24 23:19:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 23:19:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 23:20:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 23:20:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 23:20:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 23:20:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 23:20:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 23:20:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 23:20:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 23:20:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 23:20:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 23:20:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 23:20:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 23:20:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 23:20:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 23:20:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 23:21:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 23:21:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 23:21:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 23:21:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 23:22:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: current_page ~ APPPATH/views/themes/defaultmaintenance.php [ 44 ]
2014-04-24 23:22:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: current_page ~ APPPATH/views/themes/defaultmaintenance.php [ 44 ]
--
#0 /Volumes/Data/www/offistarindo/_app/views/themes/defaultmaintenance.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 44, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultmaintenance.php(167): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_DefaultMaintenance->after()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Maintenance))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#10 {main}
2014-04-24 23:22:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 23:22:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 23:22:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 23:22:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 23:23:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _mod/_modules/site/classes/controller/home.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-24 23:23:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _mod/_modules/site/classes/controller/home.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-24 23:24:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/backend/maintenance.php [ 42 ]
2014-04-24 23:24:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/backend/maintenance.php [ 42 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-24 23:24:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: banners ~ APPPATH/classes/controller/backend/maintenance.php [ 14 ]
2014-04-24 23:24:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: banners ~ APPPATH/classes/controller/backend/maintenance.php [ 14 ]
--
#0 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/maintenance.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 14, Array)
#1 [internal function]: Controller_Backend_Maintenance->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Maintenance))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-24 23:24:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: banners ~ MODPATH/_modules/site/views/site/home_page.php [ 9 ]
2014-04-24 23:24:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: banners ~ MODPATH/_modules/site/views/site/home_page.php [ 9 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 9, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultmaintenance.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultmaintenance.php(156): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultMaintenance->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Maintenance))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-24 23:24:32 --- ERROR: View_Exception [ 0 ]: The requested view site/maintenance could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-04-24 23:24:32 --- STRACE: View_Exception [ 0 ]: The requested view site/maintenance could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('site/maintenanc...')
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(30): Kohana_View->__construct('site/maintenanc...', NULL)
#2 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/maintenance.php(15): Kohana_View::factory('site/maintenanc...')
#3 [internal function]: Controller_Backend_Maintenance->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Maintenance))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-04-24 23:24:44 --- ERROR: View_Exception [ 0 ]: The requested view maintenance could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-04-24 23:24:44 --- STRACE: View_Exception [ 0 ]: The requested view maintenance could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('maintenance')
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(30): Kohana_View->__construct('maintenance', NULL)
#2 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/maintenance.php(15): Kohana_View::factory('maintenance')
#3 [internal function]: Controller_Backend_Maintenance->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Maintenance))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-04-24 23:25:00 --- ERROR: View_Exception [ 0 ]: The requested view site/maintenance could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-04-24 23:25:00 --- STRACE: View_Exception [ 0 ]: The requested view site/maintenance could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('site/maintenanc...')
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(30): Kohana_View->__construct('site/maintenanc...', NULL)
#2 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/maintenance.php(15): Kohana_View::factory('site/maintenanc...')
#3 [internal function]: Controller_Backend_Maintenance->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Maintenance))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-04-24 23:25:12 --- ERROR: View_Exception [ 0 ]: The requested view site/maintenance could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-04-24 23:25:12 --- STRACE: View_Exception [ 0 ]: The requested view site/maintenance could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('site/maintenanc...')
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(30): Kohana_View->__construct('site/maintenanc...', NULL)
#2 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/maintenance.php(15): Kohana_View::factory('site/maintenanc...')
#3 [internal function]: Controller_Backend_Maintenance->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Maintenance))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-04-24 23:32:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: data_search ~ APPPATH/views/themes/defaultmaintenance.php [ 93 ]
2014-04-24 23:32:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: data_search ~ APPPATH/views/themes/defaultmaintenance.php [ 93 ]
--
#0 /Volumes/Data/www/offistarindo/_app/views/themes/defaultmaintenance.php(93): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 93, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultmaintenance.php(162): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_DefaultMaintenance->after()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Maintenance))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#10 {main}
2014-04-24 23:32:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: data_search ~ APPPATH/views/themes/defaultmaintenance.php [ 94 ]
2014-04-24 23:32:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: data_search ~ APPPATH/views/themes/defaultmaintenance.php [ 94 ]
--
#0 /Volumes/Data/www/offistarindo/_app/views/themes/defaultmaintenance.php(94): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 94, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultmaintenance.php(162): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_DefaultMaintenance->after()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Maintenance))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#10 {main}