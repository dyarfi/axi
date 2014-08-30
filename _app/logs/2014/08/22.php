<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-22 16:12:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-22 16:12:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#3 {main}
2014-08-22 16:15:09 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-22 16:15:09 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-22 16:26:40 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'level_id' in 'where clause' [ SELECT * FROM `tbl_user_levels` WHERE `id` != '1' AND `level_id` != '99' AND `status` = 'enable' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-08-22 16:26:40 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'level_id' in 'where clause' [ SELECT * FROM `tbl_user_levels` WHERE `id` != '1' AND `level_id` != '99' AND `status` = 'enable' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/userlevel.php(246): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/modulelist.php(33): Model_UserLevel->find(Array)
#2 [internal function]: Controller_Backend_ModuleList->before()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_ModuleList))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-08-22 16:28:08 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '2 '1' AND `status` = 'enable'' at line 1 [ SELECT * FROM `tbl_user_levels` WHERE id 2 '1' AND `status` = 'enable' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-08-22 16:28:08 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '2 '1' AND `status` = 'enable'' at line 1 [ SELECT * FROM `tbl_user_levels` WHERE id 2 '1' AND `status` = 'enable' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/userlevel.php(246): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/modulelist.php(33): Model_UserLevel->find(Array)
#2 [internal function]: Controller_Backend_ModuleList->before()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_ModuleList))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-08-22 16:37:10 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-22 16:37:10 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-22 17:43:47 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-22 17:43:47 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}