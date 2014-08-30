<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-09 01:27:04 --- ERROR: Database_Exception [ 2 ]: mysql_pconnect(): No such file or directory ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2014-05-09 01:27:04 --- STRACE: Database_Exception [ 2 ]: mysql_pconnect(): No such file or directory ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/configuration.php(186): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/configuration.php(67): Model_Configuration->find(Array, '', 1)
#3 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(23): Model_Configuration->load('maintenance')
#4 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(12): Controller_Themes_Default->before()
#5 [internal function]: Controller_Solution->before()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Solution))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#10 {main}
2014-05-09 01:32:35 --- ERROR: Database_Exception [ 2 ]: mysql_pconnect(): No such file or directory ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2014-05-09 01:32:35 --- STRACE: Database_Exception [ 2 ]: mysql_pconnect(): No such file or directory ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/configuration.php(186): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/configuration.php(67): Model_Configuration->find(Array, '', 1)
#3 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(23): Model_Configuration->load('maintenance')
#4 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(12): Controller_Themes_Default->before()
#5 [internal function]: Controller_Solution->before()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Solution))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#10 {main}
2014-05-09 01:32:36 --- ERROR: Database_Exception [ 2 ]: mysql_pconnect(): No such file or directory ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2014-05-09 01:32:36 --- STRACE: Database_Exception [ 2 ]: mysql_pconnect(): No such file or directory ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/configuration.php(186): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/configuration.php(67): Model_Configuration->find(Array, '', 1)
#3 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(23): Model_Configuration->load('maintenance')
#4 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(12): Controller_Themes_Default->before()
#5 [internal function]: Controller_Solution->before()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Solution))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#10 {main}
2014-05-09 01:43:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_Setting' not found ~ MODPATH/_modules/member/classes/controller/backend/member.php [ 101 ]
2014-05-09 01:43:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_Setting' not found ~ MODPATH/_modules/member/classes/controller/backend/member.php [ 101 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-09 01:44:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_Setting' not found ~ MODPATH/_modules/member/classes/controller/backend/member.php [ 101 ]
2014-05-09 01:44:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_Setting' not found ~ MODPATH/_modules/member/classes/controller/backend/member.php [ 101 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-09 01:45:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_Setting' not found ~ MODPATH/_modules/member/classes/controller/backend/member.php [ 101 ]
2014-05-09 01:45:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_Setting' not found ~ MODPATH/_modules/member/classes/controller/backend/member.php [ 101 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-09 01:50:13 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::delete() ~ MODPATH/_modules/user/classes/model/userlevel.php [ 177 ]
2014-05-09 01:50:13 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::delete() ~ MODPATH/_modules/user/classes/model/userlevel.php [ 177 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-09 02:13:50 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/_modules/site/views/site/download_page.php [ 3 ]
2014-05-09 02:13:50 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/_modules/site/views/site/download_page.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-09 02:13:54 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/_modules/site/views/site/download_page.php [ 3 ]
2014-05-09 02:13:54 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/_modules/site/views/site/download_page.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-09 02:13:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: members ~ MODPATH/_modules/site/views/site/download_page.php [ 3 ]
2014-05-09 02:13:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: members ~ MODPATH/_modules/site/views/site/download_page.php [ 3 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/download_page.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 3, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(156): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Download))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-05-09 02:15:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-05-09 02:15:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-05-09 02:15:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-05-09 02:15:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-05-09 02:17:06 --- ERROR: View_Exception [ 0 ]: The requested view site/login_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-05-09 02:17:06 --- STRACE: View_Exception [ 0 ]: The requested view site/login_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('site/login_page')
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(30): Kohana_View->__construct('site/login_page', NULL)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(157): Kohana_View::factory('site/login_page')
#3 [internal function]: Controller_Member->action_login()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-09 02:17:07 --- ERROR: View_Exception [ 0 ]: The requested view site/login_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-05-09 02:17:07 --- STRACE: View_Exception [ 0 ]: The requested view site/login_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('site/login_page')
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(30): Kohana_View->__construct('site/login_page', NULL)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(157): Kohana_View::factory('site/login_page')
#3 [internal function]: Controller_Member->action_login()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-09 02:17:29 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 02:17:29 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 02:17:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-09 02:17:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-05-09 02:17:37 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 02:17:37 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 02:17:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-09 02:17:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-05-09 02:17:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-09 02:17:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-05-09 02:19:05 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 02:19:05 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 02:19:08 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 02:19:08 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 02:19:10 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 02:19:10 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 02:19:13 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 02:19:13 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 02:19:40 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 02:19:40 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 02:26:13 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 02:26:13 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 02:26:51 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 02:26:51 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 02:27:05 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 02:27:05 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 02:27:17 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 02:27:17 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 02:31:36 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 02:31:36 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 02:31:58 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 02:31:58 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 02:32:13 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 02:32:13 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 02:32:21 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 02:32:21 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 02:32:28 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 02:32:28 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 02:32:35 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 02:32:35 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 02:32:46 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 02:32:46 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 02:32:55 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 02:32:55 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 02:38:01 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 02:38:01 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 02:58:07 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 02:58:07 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 03:00:26 --- ERROR: View_Exception [ 0 ]: The requested view site/login_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-05-09 03:00:26 --- STRACE: View_Exception [ 0 ]: The requested view site/login_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('site/login_page')
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(30): Kohana_View->__construct('site/login_page', NULL)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(157): Kohana_View::factory('site/login_page')
#3 [internal function]: Controller_Member->action_login()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-09 03:15:45 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 03:15:45 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 03:16:41 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 03:16:41 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 03:16:43 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 03:16:43 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 03:16:44 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 03:16:44 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 03:17:05 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 03:17:05 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 03:17:14 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 03:17:14 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 03:17:21 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 03:17:21 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 03:22:25 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 03:22:25 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 03:55:19 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/defaultadmin.php [ 73 ]
2014-05-09 03:55:19 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/defaultadmin.php [ 73 ]
--
#0 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(73): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 73, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#5 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(65): Controller_Themes_DefaultAdmin->after()
#6 [internal function]: Controller_Backend_BaseAdmin->after()
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#11 {main}
2014-05-09 03:57:00 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/defaultadmin.php [ 73 ]
2014-05-09 03:57:00 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/defaultadmin.php [ 73 ]
--
#0 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(73): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 73, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#5 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(65): Controller_Themes_DefaultAdmin->after()
#6 [internal function]: Controller_Backend_BaseAdmin->after()
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#11 {main}
2014-05-09 03:57:01 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/defaultadmin.php [ 73 ]
2014-05-09 03:57:01 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/defaultadmin.php [ 73 ]
--
#0 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(73): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 73, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#5 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(65): Controller_Themes_DefaultAdmin->after()
#6 [internal function]: Controller_Backend_BaseAdmin->after()
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#11 {main}
2014-05-09 03:57:22 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/defaultadmin.php [ 73 ]
2014-05-09 03:57:22 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/defaultadmin.php [ 73 ]
--
#0 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(73): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 73, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#5 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(65): Controller_Themes_DefaultAdmin->after()
#6 [internal function]: Controller_Backend_BaseAdmin->after()
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#11 {main}
2014-05-09 03:57:36 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/defaultadmin.php [ 73 ]
2014-05-09 03:57:36 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/defaultadmin.php [ 73 ]
--
#0 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(73): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 73, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#5 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(65): Controller_Themes_DefaultAdmin->after()
#6 [internal function]: Controller_Backend_BaseAdmin->after()
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#11 {main}
2014-05-09 12:12:19 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 12:12:19 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 12:14:31 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 12:14:31 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 12:16:01 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 12:16:01 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 12:17:23 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 12:17:23 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 12:17:25 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 12:17:25 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 12:17:38 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 12:17:38 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 12:18:02 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 12:18:02 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 12:18:21 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 12:18:21 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 12:18:44 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 12:18:44 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 12:18:56 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 12:18:56 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 12:19:29 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 12:19:29 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 12:19:49 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 12:19:49 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 12:20:02 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 12:20:02 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 12:20:09 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 12:20:09 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 12:20:23 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 12:20:23 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 12:20:32 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 12:20:32 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 12:20:53 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 12:20:53 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 12:21:08 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 12:21:08 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 12:21:15 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 12:21:15 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 12:21:26 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 12:21:26 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 12:21:33 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 12:21:33 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 12:21:39 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 12:21:39 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 12:22:16 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 12:22:16 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 12:22:22 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 12:22:22 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 12:22:44 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 12:22:44 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 12:22:51 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 12:22:51 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 14:18:43 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 14:18:43 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 14:18:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-09 14:18:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-05-09 16:45:46 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 16:45:46 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 17:53:25 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2014-05-09 17:53:25 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-09 18:27:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-09 18:27:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}