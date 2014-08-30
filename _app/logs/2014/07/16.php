<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-16 18:52:05 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_configurations' doesn't exist [ SELECT * FROM `tbl_configurations` WHERE `parameter` = 'maintenance'LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 18:52:05 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_configurations' doesn't exist [ SELECT * FROM `tbl_configurations` WHERE `parameter` = 'maintenance'LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/configuration.php(186): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/configuration.php(67): Model_Configuration->find(Array, '', 1)
#2 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(23): Model_Configuration->load('maintenance')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#4 [internal function]: Controller_Home->before()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#9 {main}
2014-07-16 18:52:12 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_users' doesn't exist [ SELECT * FROM `tbl_users` WHERE `id` = '1'LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 18:52:12 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_users' doesn't exist [ SELECT * FROM `tbl_users` WHERE `id` = '1'LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/user.php(240): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/user.php(84): Model_User->find(Array, '', 1)
#2 /Volumes/Data/www/axi/_app/classes/acl.php(31): Model_User->load('1')
#3 /Volumes/Data/www/axi/_app/classes/acl.php(17): Acl->__construct()
#4 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(18): Acl::instance()
#5 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#6 [internal function]: Controller_Backend_BaseAdmin->before()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_BaseAdmin))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-07-16 18:52:48 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 18:52:48 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/language/classes/model/language.php(211): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_app/classes/lang.php(8): Model_Language->find(Array)
#2 /Volumes/Data/www/axi/_app/classes/lang.php(112): Lang::_get_lang()
#3 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(32): Lang::_get_language()
#4 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#5 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Authentication->before()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-07-16 18:52:49 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 18:52:49 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/language/classes/model/language.php(211): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_app/classes/lang.php(8): Model_Language->find(Array)
#2 /Volumes/Data/www/axi/_app/classes/lang.php(112): Lang::_get_lang()
#3 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(32): Lang::_get_language()
#4 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#5 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Authentication->before()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-07-16 18:52:51 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 18:52:51 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/language/classes/model/language.php(211): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_app/classes/lang.php(8): Model_Language->find(Array)
#2 /Volumes/Data/www/axi/_app/classes/lang.php(112): Lang::_get_lang()
#3 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(32): Lang::_get_language()
#4 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#5 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Authentication->before()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-07-16 18:52:53 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 18:52:53 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/language/classes/model/language.php(211): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_app/classes/lang.php(8): Model_Language->find(Array)
#2 /Volumes/Data/www/axi/_app/classes/lang.php(112): Lang::_get_lang()
#3 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(32): Lang::_get_language()
#4 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#5 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Authentication->before()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-07-16 18:52:59 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 18:52:59 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/language/classes/model/language.php(211): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_app/classes/lang.php(8): Model_Language->find(Array)
#2 /Volumes/Data/www/axi/_app/classes/lang.php(112): Lang::_get_lang()
#3 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(32): Lang::_get_language()
#4 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#5 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Authentication->before()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-07-16 18:53:03 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 18:53:03 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/language/classes/model/language.php(211): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_app/classes/lang.php(8): Model_Language->find(Array)
#2 /Volumes/Data/www/axi/_app/classes/lang.php(112): Lang::_get_lang()
#3 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(32): Lang::_get_language()
#4 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#5 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Authentication->before()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-07-16 18:53:04 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 18:53:04 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/language/classes/model/language.php(211): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_app/classes/lang.php(8): Model_Language->find(Array)
#2 /Volumes/Data/www/axi/_app/classes/lang.php(112): Lang::_get_lang()
#3 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(32): Lang::_get_language()
#4 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#5 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Authentication->before()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-07-16 18:53:04 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 18:53:04 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/language/classes/model/language.php(211): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_app/classes/lang.php(8): Model_Language->find(Array)
#2 /Volumes/Data/www/axi/_app/classes/lang.php(112): Lang::_get_lang()
#3 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(32): Lang::_get_language()
#4 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#5 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Authentication->before()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-07-16 18:53:04 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 18:53:04 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/language/classes/model/language.php(211): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_app/classes/lang.php(8): Model_Language->find(Array)
#2 /Volumes/Data/www/axi/_app/classes/lang.php(112): Lang::_get_lang()
#3 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(32): Lang::_get_language()
#4 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#5 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Authentication->before()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-07-16 18:53:04 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 18:53:04 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/language/classes/model/language.php(211): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_app/classes/lang.php(8): Model_Language->find(Array)
#2 /Volumes/Data/www/axi/_app/classes/lang.php(112): Lang::_get_lang()
#3 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(32): Lang::_get_language()
#4 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#5 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Authentication->before()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-07-16 18:53:07 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_configurations' doesn't exist [ SELECT * FROM `tbl_configurations` WHERE `parameter` = 'maintenance'LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 18:53:07 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_configurations' doesn't exist [ SELECT * FROM `tbl_configurations` WHERE `parameter` = 'maintenance'LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/configuration.php(186): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/configuration.php(67): Model_Configuration->find(Array, '', 1)
#2 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(23): Model_Configuration->load('maintenance')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#4 [internal function]: Controller_Home->before()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#9 {main}
2014-07-16 18:53:12 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 18:53:12 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/language/classes/model/language.php(211): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_app/classes/lang.php(8): Model_Language->find(Array)
#2 /Volumes/Data/www/axi/_app/classes/lang.php(112): Lang::_get_lang()
#3 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(32): Lang::_get_language()
#4 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#5 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Authentication->before()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-07-16 18:54:07 --- ERROR: ErrorException [ 2 ]: session_destroy(): Trying to destroy uninitialized session ~ APPPATH/classes/acl.php [ 25 ]
2014-07-16 18:54:07 --- STRACE: ErrorException [ 2 ]: session_destroy(): Trying to destroy uninitialized session ~ APPPATH/classes/acl.php [ 25 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'session_destroy...', '/Volumes/Data/w...', 25, Array)
#1 /Volumes/Data/www/axi/_app/classes/acl.php(25): session_destroy()
#2 /Volumes/Data/www/axi/_app/classes/acl.php(17): Acl->__construct()
#3 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(18): Acl::instance()
#4 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#5 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Authentication->before()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-07-16 18:54:27 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 18:54:27 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/language/classes/model/language.php(211): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_app/classes/lang.php(8): Model_Language->find(Array)
#2 /Volumes/Data/www/axi/_app/classes/lang.php(112): Lang::_get_lang()
#3 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(32): Lang::_get_language()
#4 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#5 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Authentication->before()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-07-16 18:54:29 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 18:54:29 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/language/classes/model/language.php(211): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_app/classes/lang.php(8): Model_Language->find(Array)
#2 /Volumes/Data/www/axi/_app/classes/lang.php(112): Lang::_get_lang()
#3 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(32): Lang::_get_language()
#4 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#5 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Authentication->before()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-07-16 18:54:29 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 18:54:29 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/language/classes/model/language.php(211): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_app/classes/lang.php(8): Model_Language->find(Array)
#2 /Volumes/Data/www/axi/_app/classes/lang.php(112): Lang::_get_lang()
#3 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(32): Lang::_get_language()
#4 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#5 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Authentication->before()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-07-16 18:54:39 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 18:54:39 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/language/classes/model/language.php(211): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_app/classes/lang.php(8): Model_Language->find(Array)
#2 /Volumes/Data/www/axi/_app/classes/lang.php(112): Lang::_get_lang()
#3 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(32): Lang::_get_language()
#4 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#5 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Authentication->before()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-07-16 18:54:41 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 18:54:41 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/language/classes/model/language.php(211): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_app/classes/lang.php(8): Model_Language->find(Array)
#2 /Volumes/Data/www/axi/_app/classes/lang.php(112): Lang::_get_lang()
#3 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(32): Lang::_get_language()
#4 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#5 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Authentication->before()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-07-16 18:54:56 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 18:54:56 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/language/classes/model/language.php(211): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_app/classes/lang.php(8): Model_Language->find(Array)
#2 /Volumes/Data/www/axi/_app/classes/lang.php(112): Lang::_get_lang()
#3 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(32): Lang::_get_language()
#4 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#5 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Authentication->before()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-07-16 18:55:29 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 18:55:29 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/language/classes/model/language.php(211): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_app/classes/lang.php(8): Model_Language->find(Array)
#2 /Volumes/Data/www/axi/_app/classes/lang.php(112): Lang::_get_lang()
#3 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(32): Lang::_get_language()
#4 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#5 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Authentication->before()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-07-16 18:55:31 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 18:55:31 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/language/classes/model/language.php(211): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_app/classes/lang.php(8): Model_Language->find(Array)
#2 /Volumes/Data/www/axi/_app/classes/lang.php(112): Lang::_get_lang()
#3 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(32): Lang::_get_language()
#4 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#5 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Authentication->before()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-07-16 18:55:42 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 18:55:42 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/language/classes/model/language.php(211): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_app/classes/lang.php(8): Model_Language->find(Array)
#2 /Volumes/Data/www/axi/_app/classes/lang.php(113): Lang::_get_lang()
#3 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(32): Lang::_get_language()
#4 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#5 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Authentication->before()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-07-16 18:56:01 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 18:56:01 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/language/classes/model/language.php(211): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_app/classes/lang.php(8): Model_Language->find(Array)
#2 /Volumes/Data/www/axi/_app/classes/lang.php(113): Lang::_get_lang()
#3 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(32): Lang::_get_language()
#4 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#5 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Authentication->before()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-07-16 18:56:04 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 18:56:04 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/language/classes/model/language.php(211): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_app/classes/lang.php(8): Model_Language->find(Array)
#2 /Volumes/Data/www/axi/_app/classes/lang.php(113): Lang::_get_lang()
#3 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(32): Lang::_get_language()
#4 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#5 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Authentication->before()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-07-16 18:56:05 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 18:56:05 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/language/classes/model/language.php(211): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_app/classes/lang.php(8): Model_Language->find(Array)
#2 /Volumes/Data/www/axi/_app/classes/lang.php(113): Lang::_get_lang()
#3 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(32): Lang::_get_language()
#4 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#5 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Authentication->before()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-07-16 18:56:18 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 18:56:18 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/language/classes/model/language.php(211): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_app/classes/lang.php(8): Model_Language->find(Array)
#2 /Volumes/Data/www/axi/_app/classes/lang.php(113): Lang::_get_lang()
#3 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(32): Lang::_get_language()
#4 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#5 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Authentication->before()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-07-16 18:56:22 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 18:56:22 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/language/classes/model/language.php(211): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_app/classes/lang.php(8): Model_Language->find(Array)
#2 /Volumes/Data/www/axi/_app/classes/lang.php(113): Lang::_get_lang()
#3 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(32): Lang::_get_language()
#4 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#5 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Authentication->before()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-07-16 18:56:29 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_configurations' doesn't exist [ SELECT * FROM `tbl_configurations` WHERE `parameter` = 'maintenance'LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 18:56:29 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_configurations' doesn't exist [ SELECT * FROM `tbl_configurations` WHERE `parameter` = 'maintenance'LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/configuration.php(186): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/configuration.php(67): Model_Configuration->find(Array, '', 1)
#2 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(23): Model_Configuration->load('maintenance')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#4 [internal function]: Controller_Home->before()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#9 {main}
2014-07-16 18:56:33 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 18:56:33 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/language/classes/model/language.php(211): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_app/classes/lang.php(8): Model_Language->find(Array)
#2 /Volumes/Data/www/axi/_app/classes/lang.php(113): Lang::_get_lang()
#3 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(32): Lang::_get_language()
#4 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#5 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Authentication->before()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-07-16 18:56:47 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 18:56:47 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/language/classes/model/language.php(211): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_app/classes/lang.php(8): Model_Language->find(Array)
#2 /Volumes/Data/www/axi/_app/classes/lang.php(113): Lang::_get_lang()
#3 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(32): Lang::_get_language()
#4 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#5 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Authentication->before()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-07-16 18:56:50 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 18:56:50 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_languages' doesn't exist [ SELECT * FROM `tbl_languages` WHERE `status` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/language/classes/model/language.php(211): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_app/classes/lang.php(8): Model_Language->find(Array)
#2 /Volumes/Data/www/axi/_app/classes/lang.php(113): Lang::_get_lang()
#3 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultadmin.php(32): Lang::_get_language()
#4 /Volumes/Data/www/axi/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#5 /Volumes/Data/www/axi/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Authentication->before()
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#11 {main}
2014-07-16 18:57:14 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_configurations' doesn't exist [ SELECT * FROM `tbl_configurations` WHERE `parameter` = 'maintenance'LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 18:57:14 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_configurations' doesn't exist [ SELECT * FROM `tbl_configurations` WHERE `parameter` = 'maintenance'LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/configuration.php(186): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/configuration.php(67): Model_Configuration->find(Array, '', 1)
#2 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(23): Model_Configuration->load('maintenance')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#4 [internal function]: Controller_Home->before()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#9 {main}
2014-07-16 19:12:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/bootstrap/css/bootstrap.custom.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 19:12:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/bootstrap/css/bootstrap.custom.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 19:25:41 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_configurations' doesn't exist [ SELECT * FROM `tbl_configurations` WHERE `parameter` = 'maintenance'LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 19:25:41 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_configurations' doesn't exist [ SELECT * FROM `tbl_configurations` WHERE `parameter` = 'maintenance'LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/configuration.php(186): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/configuration.php(67): Model_Configuration->find(Array, '', 1)
#2 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(23): Model_Configuration->load('maintenance')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#4 [internal function]: Controller_Home->before()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#9 {main}
2014-07-16 19:33:57 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_configurations' doesn't exist [ SELECT * FROM `tbl_configurations` WHERE `parameter` = 'maintenance'LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 19:33:57 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_configurations' doesn't exist [ SELECT * FROM `tbl_configurations` WHERE `parameter` = 'maintenance'LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/configuration.php(186): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/configuration.php(67): Model_Configuration->find(Array, '', 1)
#2 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(23): Model_Configuration->load('maintenance')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#4 [internal function]: Controller_Home->before()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#9 {main}
2014-07-16 19:34:49 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_configurations' doesn't exist [ SELECT * FROM `tbl_configurations` WHERE `parameter` = 'maintenance' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 19:34:49 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_configurations' doesn't exist [ SELECT * FROM `tbl_configurations` WHERE `parameter` = 'maintenance' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/configuration.php(186): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/configuration.php(67): Model_Configuration->find(Array, '', 1)
#2 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(23): Model_Configuration->load('maintenance')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#4 [internal function]: Controller_Home->before()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#9 {main}
2014-07-16 23:34:54 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_configurations' doesn't exist [ SELECT * FROM `tbl_configurations` WHERE `parameter` = 'maintenance' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 23:34:54 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_configurations' doesn't exist [ SELECT * FROM `tbl_configurations` WHERE `parameter` = 'maintenance' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/configuration.php(186): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/configuration.php(67): Model_Configuration->find(Array, '', 1)
#2 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(23): Model_Configuration->load('maintenance')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#4 [internal function]: Controller_Home->before()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#9 {main}
2014-07-16 23:36:02 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_configurations' doesn't exist [ SELECT * FROM `tbl_configurations` WHERE `parameter` = 'maintenance' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 23:36:02 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_configurations' doesn't exist [ SELECT * FROM `tbl_configurations` WHERE `parameter` = 'maintenance' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/configuration.php(186): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/configuration.php(67): Model_Configuration->find(Array, '', 1)
#2 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(23): Model_Configuration->load('maintenance')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#4 [internal function]: Controller_Home->before()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#9 {main}
2014-07-16 23:41:42 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_configurations' doesn't exist [ SELECT * FROM `tbl_configurations` WHERE `parameter` = 'maintenance' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-16 23:41:42 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_axi2014.tbl_configurations' doesn't exist [ SELECT * FROM `tbl_configurations` WHERE `parameter` = 'maintenance' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/configuration.php(186): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/axi/_mod/_modules/user/classes/model/configuration.php(67): Model_Configuration->find(Array, '', 1)
#2 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(23): Model_Configuration->load('maintenance')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#4 [internal function]: Controller_Home->before()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#9 {main}
2014-07-16 23:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tml was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tml was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/reset.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/reset.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/embed_font.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/jquery.fancybox.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/style.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/style.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/jquery.fancybox.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/embed_font.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/bootstrap-responsive.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/bootstrap-responsive.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/bootstrap.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/bootstrap.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/jquery.alert.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/jquery.alert.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/owl.carousel.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/owl.carousel.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/jquery.jscrollpane.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/jquery.jscrollpane.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/animate.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/animate.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_scrollReveal.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_scrollReveal.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_cycle.all.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_cycle.all.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_fancybox.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_fancybox.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_1.7.2.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_1.7.2.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_bootstrap.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_bootstrap.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_jscrollpane.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_jscrollpane.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_TimeMax.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_TimeMax.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_mousewheel.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_mousewheel.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_stellar.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_stellar.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/menu/jquery_bootstrap-collapse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/menu/jquery_bootstrap-collapse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_owl.carousel.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_owl.carousel.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_function.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_function.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_easing.1.3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_easing.1.3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_waypoints.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_waypoints.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_alert.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_alert.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_validate.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_validate.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/logo-b.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/logo-b.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_validate.additional.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_validate.additional.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/logo-a.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/logo-a.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/management/person_1.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/management/person_1.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/management/person_2.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/management/person_2.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/management/person_3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/management/person_3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_3.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_3.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/management/person_4.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_bootstrap.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_bootstrap.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/management/person_4.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/xprins-1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/xprins-1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/LayanGerak-1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/LayanGerak-1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/logo2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/logo2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/LayanGerakExpress-1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/LayanGerakExpress-1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/news/news-1.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/news/news-1.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/logo3.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/logo3.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/logo4.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/logo4.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/news/news-3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/news/news-3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/girls.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/girls.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/section_footer.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/section_footer.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_8.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_8.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/news/news-2.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/news/news-2.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_10.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_10.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_cycle.all.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_cycle.all.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_scrollReveal.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_scrollReveal.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_fancybox.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_fancybox.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_TimeMax.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_TimeMax.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_mousewheel.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_mousewheel.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_jscrollpane.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_jscrollpane.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_owl.carousel.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_owl.carousel.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/menu/jquery_bootstrap-collapse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/menu/jquery_bootstrap-collapse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_stellar.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_stellar.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_waypoints.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_waypoints.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_easing.1.3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_easing.1.3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_function.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_function.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_alert.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_alert.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_validate.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_validate.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_validate.additional.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_validate.additional.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/style.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/style.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/bootstrap-responsive.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/bootstrap-responsive.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/jquery.fancybox.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/jquery.fancybox.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/embed_font.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/embed_font.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/bootstrap.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/bootstrap.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/reset.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/reset.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/owl.carousel.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/owl.carousel.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/jquery.jscrollpane.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/jquery.jscrollpane.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/animate.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/animate.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/jquery.alert.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/jquery.alert.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_scrollReveal.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_scrollReveal.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_1.7.2.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_1.7.2.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_bootstrap.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_bootstrap.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_fancybox.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_fancybox.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_cycle.all.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_cycle.all.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_TimeMax.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_TimeMax.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_mousewheel.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_mousewheel.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_jscrollpane.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_jscrollpane.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_owl.carousel.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_owl.carousel.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_stellar.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_stellar.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/menu/jquery_bootstrap-collapse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/menu/jquery_bootstrap-collapse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_waypoints.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_waypoints.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_easing.1.3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_easing.1.3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_function.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_function.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_alert.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_alert.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_validate.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_validate.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/logo-a.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/logo-a.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_validate.additional.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_validate.additional.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/logo-b.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/logo-b.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_3.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_3.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/management/person_2.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/management/person_2.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/management/person_1.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/management/person_1.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_bootstrap.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_bootstrap.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/management/person_3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/management/person_3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/xprins-1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/xprins-1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/logo2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/logo2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/management/person_4.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/management/person_4.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/LayanGerak-1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/LayanGerak-1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/logo4.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/logo4.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/news/news-1.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/news/news-1.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/logo3.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/logo3.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/LayanGerakExpress-1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/LayanGerakExpress-1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/news/news-2.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/news/news-2.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/news/news-3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/news/news-3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_8.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_8.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/girls.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/girls.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_10.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_10.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/section_footer.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/section_footer.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_cycle.all.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_cycle.all.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_scrollReveal.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_scrollReveal.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_fancybox.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_fancybox.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_TimeMax.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_TimeMax.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_mousewheel.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_mousewheel.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_jscrollpane.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_jscrollpane.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_owl.carousel.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_owl.carousel.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/menu/jquery_bootstrap-collapse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/menu/jquery_bootstrap-collapse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_stellar.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_stellar.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_waypoints.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_waypoints.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_easing.1.3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_easing.1.3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_function.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_function.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_alert.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_alert.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_validate.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_validate.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_validate.additional.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_validate.additional.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/reset.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/bootstrap.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/bootstrap.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/style.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/style.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/reset.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/bootstrap-responsive.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/bootstrap-responsive.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/embed_font.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/embed_font.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/jquery.fancybox.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/jquery.fancybox.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/owl.carousel.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/owl.carousel.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/jquery.jscrollpane.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/jquery.jscrollpane.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/jquery.alert.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/jquery.alert.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/animate.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/animate.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_scrollReveal.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_scrollReveal.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_bootstrap.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_bootstrap.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_1.7.2.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_1.7.2.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_fancybox.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_fancybox.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_cycle.all.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_cycle.all.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_TimeMax.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_TimeMax.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_mousewheel.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_mousewheel.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_jscrollpane.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_jscrollpane.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_waypoints.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_waypoints.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/menu/jquery_bootstrap-collapse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/menu/jquery_bootstrap-collapse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_stellar.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_stellar.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_owl.carousel.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_owl.carousel.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_easing.1.3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_easing.1.3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_function.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_function.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_validate.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_validate.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_alert.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_alert.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_validate.additional.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_validate.additional.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/logo-a.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/logo-a.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/logo-b.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/logo-b.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/management/person_1.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/management/person_1.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_3.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_3.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_bootstrap.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_bootstrap.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/management/person_2.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/management/person_2.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/management/person_3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/management/person_3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/xprins-1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/xprins-1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/logo2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/logo2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/LayanGerak-1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/LayanGerak-1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/management/person_4.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/management/person_4.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/logo3.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/logo3.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/LayanGerakExpress-1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/LayanGerakExpress-1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/news/news-1.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/news/news-1.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/news/news-2.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/news/news-2.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/logo4.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/logo4.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/news/news-3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/news/news-3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/girls.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/girls.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_8.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_8.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_10.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_10.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/section_footer.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/section_footer.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_cycle.all.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_cycle.all.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_scrollReveal.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_scrollReveal.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_fancybox.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_fancybox.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_TimeMax.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_TimeMax.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_mousewheel.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_mousewheel.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_jscrollpane.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_jscrollpane.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_owl.carousel.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_owl.carousel.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/menu/jquery_bootstrap-collapse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/menu/jquery_bootstrap-collapse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_stellar.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_stellar.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_waypoints.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_waypoints.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_easing.1.3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_easing.1.3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_function.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_function.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_alert.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_alert.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_validate.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_validate.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_validate.additional.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_validate.additional.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/reset.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/reset.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/style.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/style.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/jquery.fancybox.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/jquery.fancybox.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/embed_font.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/embed_font.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/bootstrap.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/bootstrap.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/bootstrap-responsive.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/bootstrap-responsive.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/jquery.jscrollpane.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/jquery.jscrollpane.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/owl.carousel.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/owl.carousel.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/jquery.alert.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/jquery.alert.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL css/animate.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL css/animate.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_scrollReveal.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_scrollReveal.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_1.7.2.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_1.7.2.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_bootstrap.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_bootstrap.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_cycle.all.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_cycle.all.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_fancybox.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_fancybox.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_TimeMax.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_TimeMax.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_mousewheel.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_mousewheel.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/menu/jquery_bootstrap-collapse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/menu/jquery_bootstrap-collapse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_jscrollpane.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_jscrollpane.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_owl.carousel.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_owl.carousel.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_waypoints.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_waypoints.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_stellar.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_stellar.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_easing.1.3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_easing.1.3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_function.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_function.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_alert.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_alert.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/logo-a.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/logo-a.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_validate.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_validate.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_validate.additional.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_validate.additional.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/logo-b.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/logo-b.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/management/person_1.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/management/person_1.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/management/person_2.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/management/person_2.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_3.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_3.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/management/person_3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/management/person_3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/xprins-1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/xprins-1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/management/person_4.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/management/person_4.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/LayanGerak-1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/LayanGerak-1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/logo2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/logo2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/LayanGerakExpress-1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/LayanGerakExpress-1.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/logo3.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/logo3.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/news/news-1.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/news/news-1.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/news/news-3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/news/news-3.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/logo4.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/logo4.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/news/news-2.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/news/news-2.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_8.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_8.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/girls.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/girls.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_10.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/content/section_10.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/section_footer.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/section_footer.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_bootstrap.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_bootstrap.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_cycle.all.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_cycle.all.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_scrollReveal.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_scrollReveal.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_fancybox.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_fancybox.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_TimeMax.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_TimeMax.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_mousewheel.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_mousewheel.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_jscrollpane.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_jscrollpane.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_owl.carousel.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_owl.carousel.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/menu/jquery_bootstrap-collapse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/menu/jquery_bootstrap-collapse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_stellar.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_stellar.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_waypoints.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_waypoints.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_easing.1.3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-16 23:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll/jquery_easing.1.3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-16 23:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_function.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_function.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_alert.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_alert.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_validate.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_validate.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-16 23:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_validate.additional.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-16 23:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/jquery_validate.additional.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}