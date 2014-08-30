<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-13 22:52:45 --- ERROR: Kohana_Exception [ 0 ]: There is no table tbl_urls available ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 308 ]
2014-04-13 22:52:45 --- STRACE: Kohana_Exception [ 0 ]: There is no table tbl_urls available ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 308 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(76): Model_UserDashboard->find_top_count(Array)
#1 [internal function]: Controller_Backend_UserDashboard->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-13 22:54:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL html/support.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-13 22:54:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL html/support.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-13 22:55:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL html/support.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-13 22:55:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL html/support.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-13 22:55:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL html/support.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-13 22:55:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL html/support.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-13 22:55:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL html/loader.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-13 22:55:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL html/loader.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}