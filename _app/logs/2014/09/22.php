<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-22 03:20:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-09-22 03:20:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#3 {main}