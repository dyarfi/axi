<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-22 00:59:27 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php:79
2014-03-22 00:59:27 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#4 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php:79
2014-03-22 01:04:55 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-22 01:04:55 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-22 01:04:57 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-22 01:04:57 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-22 01:08:17 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 191 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:191
2014-03-22 01:08:17 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(191): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 191, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:191
2014-03-22 01:23:36 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 663 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-22 01:23:36 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(663): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 663, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-22 01:26:14 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 663 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-22 01:26:14 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(663): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 663, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-22 01:26:58 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-22 01:26:58 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-22 01:26:58 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php:79
2014-03-22 01:26:58 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#4 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php:79
2014-03-22 01:30:57 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 663 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-22 01:30:57 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(663): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 663, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-22 01:31:42 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 663 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-22 01:31:42 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(663): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 663, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-22 01:32:38 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 663 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-22 01:32:38 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(663): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 663, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-22 01:32:38 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 663 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-22 01:32:38 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(663): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 663, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-22 01:44:40 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 663 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-22 01:44:40 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(663): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 663, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-22 02:21:01 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-22 02:21:01 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-22 02:21:02 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-22 02:21:02 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-22 02:21:03 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-22 02:21:03 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-22 02:21:05 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-22 02:21:05 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-22 02:21:05 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-22 02:21:05 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-22 02:21:06 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-22 02:21:06 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-22 02:21:07 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-22 02:21:07 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-22 02:21:08 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-22 02:21:08 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-22 02:21:09 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-22 02:21:09 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-22 02:24:13 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 663 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-22 02:24:13 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(663): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 663, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-22 02:27:04 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 664 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:664
2014-03-22 02:27:04 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(664): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 664, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:664
2014-03-22 02:38:55 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-22 02:38:55 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-22 02:39:59 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-22 02:39:59 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-22 02:43:22 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-22 02:43:22 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-22 02:43:37 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 663 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-22 02:43:37 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(663): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 663, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-22 02:44:01 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 663 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-22 02:44:01 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(663): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 663, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-22 02:44:20 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 663 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-22 02:44:20 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(663): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 663, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663