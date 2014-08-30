<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-23 08:12:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/languages/id.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-23 08:12:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/languages/id.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-06-23 08:12:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/languages/us.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-23 08:12:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/languages/us.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-06-23 08:12:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/languages/id.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-23 08:12:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/languages/id.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-06-23 08:12:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/languages/us.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-23 08:12:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/languages/us.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-06-23 19:23:21 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/site/classes/controller/solution.php [ 211 ]
2014-06-23 19:23:21 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/site/classes/controller/solution.php [ 211 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(211): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 211, Array)
#1 [internal function]: Controller_Solution->action_category()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-23 19:23:28 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 147 ]
2014-06-23 19:23:28 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 147 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(147): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 147, Array)
#1 [internal function]: Controller_Solution->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-23 19:23:41 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 147 ]
2014-06-23 19:23:41 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 147 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(147): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 147, Array)
#1 [internal function]: Controller_Solution->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-23 19:26:43 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 147 ]
2014-06-23 19:26:43 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 147 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(147): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 147, Array)
#1 [internal function]: Controller_Solution->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-23 19:27:06 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 147 ]
2014-06-23 19:27:06 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 147 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(147): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 147, Array)
#1 [internal function]: Controller_Solution->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}