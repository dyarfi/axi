<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-21 00:29:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-21 00:29:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-21 02:34:41 --- ERROR: View_Exception [ 0 ]: The requested view career/backend/careerapplicant_add could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-07-21 02:34:41 --- STRACE: View_Exception [ 0 ]: The requested view career/backend/careerapplicant_add could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('career/backend/...')
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(30): Kohana_View->__construct('career/backend/...', NULL)
#2 /Volumes/Data/www/axi/_mod/_modules/career/classes/controller/backend/careerapplicant.php(350): Kohana_View::factory('career/backend/...')
#3 [internal function]: Controller_Backend_CareerApplicant->action_add()
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_CareerApplicant))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/axi/index.php(132): Kohana_Request->execute()
#8 {main}