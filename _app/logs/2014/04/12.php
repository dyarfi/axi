<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-12 01:27:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: file_name ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 251 ]
2014-04-12 01:27:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: file_name ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 251 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(251): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 251, Array)
#1 [internal function]: Controller_Backend_DownloadFile->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-12 01:27:32 --- ERROR: Database_Exception [ 1048 ]: Column 'caption' cannot be null [ INSERT INTO `tbl_download_files` (`type_id`, `category_id`, `product_id`, `name`, `title`, `description`, `field_name`, `file_name`, `file_type`, `caption`, `allow_comment`, `order`, `user_id`, `count`, `status`, `added`, `modified`) VALUES ('2', '25', '3', 'gmaps3-masters', 'GMAPS3 MASTERS', '\n	GMAPS3 MASTERS\n', '', 'http://localhost/uploads/download_files/brochures/gmaps-master.zip', '', NULL, 0, 3, '1', 0, 'publish', 1397240852, 0) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-04-12 01:27:32 --- STRACE: Database_Exception [ 1048 ]: Column 'caption' cannot be null [ INSERT INTO `tbl_download_files` (`type_id`, `category_id`, `product_id`, `name`, `title`, `description`, `field_name`, `file_name`, `file_type`, `caption`, `allow_comment`, `order`, `user_id`, `count`, `status`, `added`, `modified`) VALUES ('2', '25', '3', 'gmaps3-masters', 'GMAPS3 MASTERS', '\n	GMAPS3 MASTERS\n', '', 'http://localhost/uploads/download_files/brochures/gmaps-master.zip', '', NULL, 0, 3, '1', 0, 'publish', 1397240852, 0) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `tb...', false, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadfile.php(147): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(265): Model_DownloadFile->add(Array)
#3 [internal function]: Controller_Backend_DownloadFile->action_add()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-04-12 01:27:48 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-04-12 01:27:48 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/offistarindo/_app/classes/lib.php(61): Kohana_File::mime('uploads/downloa...')
#3 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(658): Lib::_download('uploads/downloa...')
#4 [internal function]: Controller_Backend_DownloadFile->action_download()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#9 {main}
2014-04-12 01:33:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: row_params ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 84 ]
2014-04-12 01:33:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: row_params ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 84 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_edit.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 84, Array)
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
2014-04-12 01:33:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: row_name ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 87 ]
2014-04-12 01:33:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: row_name ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_edit.php(87): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 87, Array)
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
2014-04-12 01:37:50 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-04-12 01:37:50 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/offistarindo/_app/classes/lib.php(61): Kohana_File::mime('uploads/downloa...')
#3 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(576): Lib::_download('uploads/downloa...')
#4 [internal function]: Controller_Backend_DownloadFile->action_download()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#9 {main}
2014-04-12 01:42:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL filemanager/dialog.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-12 01:42:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL filemanager/dialog.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 /Volumes/Data/www/offistarindo/filemanager/config/config.php(2): include('/Volumes/Data/w...')
#4 /Volumes/Data/www/offistarindo/filemanager/dialog.php(2): include('/Volumes/Data/w...')
#5 {main}
2014-04-12 01:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL filemanager/dialog.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-12 01:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL filemanager/dialog.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 /Volumes/Data/www/offistarindo/filemanager/config/config.php(2): include('/Volumes/Data/w...')
#4 /Volumes/Data/www/offistarindo/filemanager/dialog.php(2): include('/Volumes/Data/w...')
#5 {main}
2014-04-12 01:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL filemanager/dialog.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-12 01:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL filemanager/dialog.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 /Volumes/Data/www/offistarindo/filemanager/config/config.php(2): require('/Volumes/Data/w...')
#4 /Volumes/Data/www/offistarindo/filemanager/dialog.php(2): include('/Volumes/Data/w...')
#5 {main}
2014-04-12 02:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/__filemanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-12 02:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/__filemanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-12 02:09:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/filemanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-12 02:09:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/filemanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-12 02:10:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/filemanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-12 02:10:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/filemanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-12 02:10:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/filemanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-12 02:10:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/filemanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-12 02:10:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/filemanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-12 02:10:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/filemanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-12 02:10:53 --- ERROR: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH/classes/acl.php [ 168 ]
2014-04-12 02:10:53 --- STRACE: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH/classes/acl.php [ 168 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-12 02:11:50 --- ERROR: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH/classes/acl.php [ 168 ]
2014-04-12 02:11:50 --- STRACE: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH/classes/acl.php [ 168 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-12 02:12:15 --- ERROR: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH/classes/acl.php [ 168 ]
2014-04-12 02:12:15 --- STRACE: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH/classes/acl.php [ 168 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-12 02:12:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/__filemanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-12 02:12:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/__filemanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-12 02:12:28 --- ERROR: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH/classes/acl.php [ 168 ]
2014-04-12 02:12:28 --- STRACE: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH/classes/acl.php [ 168 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-12 02:12:35 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'filemanager' at 'MODPATH/_modules/__filemanager' ~ SYSPATH/classes/kohana/core.php [ 550 ]
2014-04-12 02:12:35 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'filemanager' at 'MODPATH/_modules/__filemanager' ~ SYSPATH/classes/kohana/core.php [ 550 ]
--
#0 /Volumes/Data/www/offistarindo/_app/bootstrap.php(140): Kohana_Core::modules(Array)
#1 /Volumes/Data/www/offistarindo/index.php(126): require('/Volumes/Data/w...')
#2 {main}
2014-04-12 02:12:42 --- ERROR: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH/classes/acl.php [ 168 ]
2014-04-12 02:12:42 --- STRACE: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH/classes/acl.php [ 168 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-12 02:12:58 --- ERROR: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH/classes/acl.php [ 168 ]
2014-04-12 02:12:58 --- STRACE: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH/classes/acl.php [ 168 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-12 02:13:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/__filemanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-12 02:13:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/__filemanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-12 02:13:22 --- ERROR: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH/classes/acl.php [ 168 ]
2014-04-12 02:13:22 --- STRACE: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH/classes/acl.php [ 168 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-12 02:15:28 --- ERROR: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH/classes/acl.php [ 168 ]
2014-04-12 02:15:28 --- STRACE: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH/classes/acl.php [ 168 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-12 02:15:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/__filemanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-12 02:15:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/__filemanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-12 02:15:44 --- ERROR: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH/classes/acl.php [ 168 ]
2014-04-12 02:15:44 --- STRACE: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH/classes/acl.php [ 168 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-12 02:17:18 --- ERROR: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH/classes/acl.php [ 168 ]
2014-04-12 02:17:18 --- STRACE: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH/classes/acl.php [ 168 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-12 02:17:22 --- ERROR: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH/classes/acl.php [ 168 ]
2014-04-12 02:17:22 --- STRACE: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH/classes/acl.php [ 168 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-12 02:17:23 --- ERROR: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH/classes/acl.php [ 168 ]
2014-04-12 02:17:23 --- STRACE: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH/classes/acl.php [ 168 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-12 02:17:38 --- ERROR: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH/classes/acl.php [ 168 ]
2014-04-12 02:17:38 --- STRACE: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH/classes/acl.php [ 168 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-12 02:20:48 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'filemanager' at 'MODPATH/_modules/__filemanager' ~ SYSPATH/classes/kohana/core.php [ 550 ]
2014-04-12 02:20:48 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'filemanager' at 'MODPATH/_modules/__filemanager' ~ SYSPATH/classes/kohana/core.php [ 550 ]
--
#0 /Volumes/Data/www/offistarindo/_app/bootstrap.php(140): Kohana_Core::modules(Array)
#1 /Volumes/Data/www/offistarindo/index.php(126): require('/Volumes/Data/w...')
#2 {main}
2014-04-12 02:21:29 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'filemanager' at 'MODPATH/_modules/__filemanager' ~ SYSPATH/classes/kohana/core.php [ 550 ]
2014-04-12 02:21:29 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'filemanager' at 'MODPATH/_modules/__filemanager' ~ SYSPATH/classes/kohana/core.php [ 550 ]
--
#0 /Volumes/Data/www/offistarindo/_app/bootstrap.php(140): Kohana_Core::modules(Array)
#1 /Volumes/Data/www/offistarindo/index.php(126): require('/Volumes/Data/w...')
#2 {main}
2014-04-12 02:21:30 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'filemanager' at 'MODPATH/_modules/__filemanager' ~ SYSPATH/classes/kohana/core.php [ 550 ]
2014-04-12 02:21:30 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'filemanager' at 'MODPATH/_modules/__filemanager' ~ SYSPATH/classes/kohana/core.php [ 550 ]
--
#0 /Volumes/Data/www/offistarindo/_app/bootstrap.php(140): Kohana_Core::modules(Array)
#1 /Volumes/Data/www/offistarindo/index.php(126): require('/Volumes/Data/w...')
#2 {main}
2014-04-12 02:21:31 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'filemanager' at 'MODPATH/_modules/__filemanager' ~ SYSPATH/classes/kohana/core.php [ 550 ]
2014-04-12 02:21:31 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'filemanager' at 'MODPATH/_modules/__filemanager' ~ SYSPATH/classes/kohana/core.php [ 550 ]
--
#0 /Volumes/Data/www/offistarindo/_app/bootstrap.php(140): Kohana_Core::modules(Array)
#1 /Volumes/Data/www/offistarindo/index.php(126): require('/Volumes/Data/w...')
#2 {main}
2014-04-12 02:21:31 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'filemanager' at 'MODPATH/_modules/__filemanager' ~ SYSPATH/classes/kohana/core.php [ 550 ]
2014-04-12 02:21:31 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'filemanager' at 'MODPATH/_modules/__filemanager' ~ SYSPATH/classes/kohana/core.php [ 550 ]
--
#0 /Volumes/Data/www/offistarindo/_app/bootstrap.php(140): Kohana_Core::modules(Array)
#1 /Volumes/Data/www/offistarindo/index.php(126): require('/Volumes/Data/w...')
#2 {main}
2014-04-12 02:21:31 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'filemanager' at 'MODPATH/_modules/__filemanager' ~ SYSPATH/classes/kohana/core.php [ 550 ]
2014-04-12 02:21:31 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'filemanager' at 'MODPATH/_modules/__filemanager' ~ SYSPATH/classes/kohana/core.php [ 550 ]
--
#0 /Volumes/Data/www/offistarindo/_app/bootstrap.php(140): Kohana_Core::modules(Array)
#1 /Volumes/Data/www/offistarindo/index.php(126): require('/Volumes/Data/w...')
#2 {main}
2014-04-12 02:27:10 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-04-12 02:27:10 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/offistarindo/_app/classes/lib.php(61): Kohana_File::mime('uploads/downloa...')
#3 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(576): Lib::_download('uploads/downloa...')
#4 [internal function]: Controller_Backend_DownloadFile->action_download()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#9 {main}
2014-04-12 15:29:24 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/site/classes/controller/download.php [ 110 ]
2014-04-12 15:29:24 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/site/classes/controller/download.php [ 110 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-12 15:36:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/site/classes/controller/download.php [ 83 ]
2014-04-12 15:36:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/site/classes/controller/download.php [ 83 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/download.php(83): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 83, Array)
#1 [internal function]: Controller_Download->before()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Download))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-12 15:55:56 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/classes/controller/search.php [ 96 ]
2014-04-12 15:55:56 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/classes/controller/search.php [ 96 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(96): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 96, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-12 15:56:40 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/classes/controller/search.php [ 96 ]
2014-04-12 15:56:40 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/classes/controller/search.php [ 96 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(96): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 96, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-12 15:57:26 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/classes/controller/search.php [ 96 ]
2014-04-12 15:57:26 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/classes/controller/search.php [ 96 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(96): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 96, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-12 16:02:38 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/classes/controller/search.php [ 96 ]
2014-04-12 16:02:38 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/classes/controller/search.php [ 96 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(96): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 96, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-12 16:36:01 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/classes/controller/search.php [ 96 ]
2014-04-12 16:36:01 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/classes/controller/search.php [ 96 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(96): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 96, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-12 16:36:37 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/classes/controller/search.php [ 96 ]
2014-04-12 16:36:37 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/classes/controller/search.php [ 96 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(96): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 96, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-12 16:37:21 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '\'i*\' IN BOOLEAN MODE) AND status ='publish'' at line 1 [ SELECT * FROM `tbl_page_categories` WHERE MATCH (name,title,description) AGAINST (\'i*\' IN BOOLEAN MODE) AND status ='publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-04-12 16:37:21 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '\'i*\' IN BOOLEAN MODE) AND status ='publish'' at line 1 [ SELECT * FROM `tbl_page_categories` WHERE MATCH (name,title,description) AGAINST (\'i*\' IN BOOLEAN MODE) AND status ='publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(42): Model_Search->manual_query('SELECT * FROM `...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-12 16:37:33 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/classes/controller/search.php [ 96 ]
2014-04-12 16:37:33 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/classes/controller/search.php [ 96 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(96): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 96, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-12 16:38:33 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$id ~ MODPATH/_modules/site/classes/controller/search.php [ 93 ]
2014-04-12 16:38:33 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$id ~ MODPATH/_modules/site/classes/controller/search.php [ 93 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(93): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 93, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-12 16:39:08 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/classes/controller/search.php [ 96 ]
2014-04-12 16:39:08 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/classes/controller/search.php [ 96 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(96): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 96, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-12 16:39:34 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'text' in 'where clause' [ SELECT * FROM `tbl_page_categories` WHERE MATCH (name,title,text) AGAINST ('o*' IN BOOLEAN MODE) AND status ='publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-04-12 16:39:34 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'text' in 'where clause' [ SELECT * FROM `tbl_page_categories` WHERE MATCH (name,title,text) AGAINST ('o*' IN BOOLEAN MODE) AND status ='publish'; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/model/search.php(287): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(42): Model_Search->manual_query('SELECT * FROM `...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-12 16:40:29 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 43 ]
2014-04-12 16:40:29 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/search.php [ 43 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(43): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 43, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-12 16:41:11 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/classes/controller/search.php [ 96 ]
2014-04-12 16:41:11 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/classes/controller/search.php [ 96 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(96): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 96, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-12 16:46:34 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/classes/controller/search.php [ 97 ]
2014-04-12 16:46:34 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/classes/controller/search.php [ 97 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(97): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 97, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-12 16:46:35 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/classes/controller/search.php [ 97 ]
2014-04-12 16:46:35 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/classes/controller/search.php [ 97 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(97): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 97, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-12 16:46:35 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/classes/controller/search.php [ 97 ]
2014-04-12 16:46:35 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/classes/controller/search.php [ 97 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(97): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 97, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-12 16:46:44 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/classes/controller/search.php [ 97 ]
2014-04-12 16:46:44 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/classes/controller/search.php [ 97 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(97): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 97, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-12 16:47:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL company/products was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-04-12 16:47:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL company/products was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}