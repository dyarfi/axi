<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-12 01:07:06 --- ERROR: ErrorException [ 2 ]: preg_match(): Unknown modifier '+' ~ MODPATH/_modules/site/classes/controller/search.php [ 36 ]
2014-06-12 01:07:06 --- STRACE: ErrorException [ 2 ]: preg_match(): Unknown modifier '+' ~ MODPATH/_modules/site/classes/controller/search.php [ 36 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): U...', '/Volumes/Data/w...', 36, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(36): preg_match('[a-zA-Z0-9\-\_\...', '[a-zA-Z0-9\-\_\...')
#2 [internal function]: Controller_Search->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-12 01:07:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/site/classes/controller/search.php [ 36 ]
2014-06-12 01:07:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/site/classes/controller/search.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-12 02:35:13 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Backend_Authentication::redirect() ~ MODPATH/_modules/user/classes/controller/backend/authentication.php [ 37 ]
2014-06-12 02:35:13 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Backend_Authentication::redirect() ~ MODPATH/_modules/user/classes/controller/backend/authentication.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-12 02:35:21 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Backend_Authentication::redirect() ~ MODPATH/_modules/user/classes/controller/backend/authentication.php [ 37 ]
2014-06-12 02:35:21 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Backend_Authentication::redirect() ~ MODPATH/_modules/user/classes/controller/backend/authentication.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-12 04:22:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: filemanager/dialog.phpfield_id=fileName&akey=83f7b0c3f03f77b180cb3591ddd927df3e4f2752 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-12 04:22:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: filemanager/dialog.phpfield_id=fileName&akey=83f7b0c3f03f77b180cb3591ddd927df3e4f2752 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-06-12 04:22:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: filemanager/dialog.phpfield_id=fileName&akey=83f7b0c3f03f77b180cb3591ddd927df3e4f2752 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-12 04:22:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: filemanager/dialog.phpfield_id=fileName&akey=83f7b0c3f03f77b180cb3591ddd927df3e4f2752 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-06-12 05:52:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL filemanager/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-12 05:52:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL filemanager/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-12 07:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL filemanager/dialog.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-12 07:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL filemanager/dialog.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 /Volumes/Data/www/offistarindo/filemanager/config/config.php(2): include('/Volumes/Data/w...')
#4 /Volumes/Data/www/offistarindo/filemanager/dialog.php(2): include('/Volumes/Data/w...')
#5 {main}
2014-06-12 14:45:51 --- ERROR: ErrorException [ 8 ]: Undefined index: media ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 225 ]
2014-06-12 14:45:51 --- STRACE: ErrorException [ 8 ]: Undefined index: media ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 225 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(225): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 225, Array)
#1 [internal function]: Controller_Backend_Product->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-12 14:47:16 --- ERROR: ErrorException [ 8 ]: Undefined index: media ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 225 ]
2014-06-12 14:47:16 --- STRACE: ErrorException [ 8 ]: Undefined index: media ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 225 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(225): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 225, Array)
#1 [internal function]: Controller_Backend_Product->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-12 14:54:39 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH/classes/kohana/valid.php [ 39 ]
2014-06-12 14:54:39 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH/classes/kohana/valid.php [ 39 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/valid.php(39): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 39, Array)
#1 [internal function]: Kohana_Valid::regex(Array, '~(?:http|https|...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#3 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(208): Kohana_Validation->check()
#4 [internal function]: Controller_Backend_Product->action_add()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#9 {main}
2014-06-12 14:56:21 --- ERROR: ErrorException [ 2 ]: preg_match(): Unknown modifier '+' ~ SYSPATH/classes/kohana/valid.php [ 39 ]
2014-06-12 14:56:21 --- STRACE: ErrorException [ 2 ]: preg_match(): Unknown modifier '+' ~ SYSPATH/classes/kohana/valid.php [ 39 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): U...', '/Volumes/Data/w...', 39, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/valid.php(39): preg_match('[A-Za-z0-9\-\s\...', '')
#2 [internal function]: Kohana_Valid::regex(NULL, '[A-Za-z0-9\-\s\...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(210): Kohana_Validation->check()
#5 [internal function]: Controller_Backend_Product->action_add()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#10 {main}
2014-06-12 14:56:28 --- ERROR: ErrorException [ 2 ]: htmlentities() expects parameter 1 to be string, array given ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 228 ]
2014-06-12 14:56:28 --- STRACE: ErrorException [ 2 ]: htmlentities() expects parameter 1 to be string, array given ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 228 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'htmlentities() ...', '/Volumes/Data/w...', 228, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(228): htmlentities(Array)
#2 [internal function]: Controller_Backend_Product->action_add()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-12 17:13:23 --- ERROR: ErrorException [ 8 ]: Undefined index: _media ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 363 ]
2014-06-12 17:13:23 --- STRACE: ErrorException [ 8 ]: Undefined index: _media ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 363 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(363): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 363, Array)
#1 [internal function]: Controller_Backend_Product->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-12 17:13:24 --- ERROR: ErrorException [ 8 ]: Undefined index: _media ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 363 ]
2014-06-12 17:13:24 --- STRACE: ErrorException [ 8 ]: Undefined index: _media ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 363 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(363): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 363, Array)
#1 [internal function]: Controller_Backend_Product->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-12 17:30:58 --- ERROR: ErrorException [ 8 ]: Undefined index: media_clear ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 392 ]
2014-06-12 17:30:58 --- STRACE: ErrorException [ 8 ]: Undefined index: media_clear ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 392 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(392): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 392, Array)
#1 [internal function]: Controller_Backend_Product->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-12 18:02:24 --- ERROR: ErrorException [ 2 ]: array_merge(): Argument #1 is not an array ~ APPPATH/classes/controller/themes/defaultadmin.php [ 87 ]
2014-06-12 18:02:24 --- STRACE: ErrorException [ 2 ]: array_merge(): Argument #1 is not an array ~ APPPATH/classes/controller/themes/defaultadmin.php [ 87 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge(): ...', '/Volumes/Data/w...', 87, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(87): array_merge('http://localhos...', Array)
#2 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(64): Controller_Themes_DefaultAdmin->after()
#3 [internal function]: Controller_Backend_BaseAdmin->after()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-12 18:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/http:/localhost/offistarindo/offistarindo/assets/js/library/lib.jquery.1.7.1.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-12 18:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/http:/localhost/offistarindo/offistarindo/assets/js/library/lib.jquery.1.7.1.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-06-12 18:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/http:/localhost/offistarindo/offistarindo/assets/js/library/lib.jquery.1.7.1.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-12 18:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/http:/localhost/offistarindo/offistarindo/assets/js/library/lib.jquery.1.7.1.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-06-12 18:09:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/http:/localhost/offistarindo/assets/js/library/jplayer.playlist.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-12 18:09:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/http:/localhost/offistarindo/assets/js/library/jplayer.playlist.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-06-12 18:09:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/http:/localhost/offistarindo/assets/js/library/jplayer.playlist.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-12 18:09:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/http:/localhost/offistarindo/assets/js/library/jplayer.playlist.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-06-12 18:09:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/http:/localhost/offistarindo/assets/js/library/jplayer.playlist.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-12 18:09:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/http:/localhost/offistarindo/assets/js/library/jplayer.playlist.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-06-12 18:09:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/http:/localhost/offistarindo/assets/js/library/jplayer.playlist.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-12 18:09:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/http:/localhost/offistarindo/assets/js/library/jplayer.playlist.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-06-12 18:09:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/js/library/jplayer.playlist.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-12 18:09:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/js/library/jplayer.playlist.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-06-12 18:09:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/js/library/jplayer.playlist.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-12 18:09:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/js/library/jplayer.playlist.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-06-12 18:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/library/jplayer.playlist.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-12 18:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/library/jplayer.playlist.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-06-12 18:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/library/jplayer.playlist.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-12 18:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/library/jplayer.playlist.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-06-12 18:22:06 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/defaultadmin.php [ 144 ]
2014-06-12 18:22:06 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/defaultadmin.php [ 144 ]
--
#0 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(144): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 144, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#5 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(64): Controller_Themes_DefaultAdmin->after()
#6 [internal function]: Controller_Backend_BaseAdmin->after()
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#11 {main}
2014-06-12 18:22:38 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/defaultadmin.php [ 144 ]
2014-06-12 18:22:38 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/defaultadmin.php [ 144 ]
--
#0 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(144): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 144, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#5 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(64): Controller_Themes_DefaultAdmin->after()
#6 [internal function]: Controller_Backend_BaseAdmin->after()
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#11 {main}
2014-06-12 18:22:40 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/defaultadmin.php [ 144 ]
2014-06-12 18:22:40 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/defaultadmin.php [ 144 ]
--
#0 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(144): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 144, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#5 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(64): Controller_Themes_DefaultAdmin->after()
#6 [internal function]: Controller_Backend_BaseAdmin->after()
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#11 {main}
2014-06-12 18:23:03 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/defaultadmin.php [ 144 ]
2014-06-12 18:23:03 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/defaultadmin.php [ 144 ]
--
#0 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(144): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 144, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#5 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(64): Controller_Themes_DefaultAdmin->after()
#6 [internal function]: Controller_Backend_BaseAdmin->after()
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#11 {main}
2014-06-12 18:23:17 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/defaultadmin.php [ 144 ]
2014-06-12 18:23:17 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/defaultadmin.php [ 144 ]
--
#0 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(144): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 144, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#5 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(64): Controller_Themes_DefaultAdmin->after()
#6 [internal function]: Controller_Backend_BaseAdmin->after()
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#11 {main}
2014-06-12 18:23:37 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/defaultadmin.php [ 144 ]
2014-06-12 18:23:37 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/defaultadmin.php [ 144 ]
--
#0 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(144): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 144, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#5 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(64): Controller_Themes_DefaultAdmin->after()
#6 [internal function]: Controller_Backend_BaseAdmin->after()
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#11 {main}
2014-06-12 18:23:55 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/defaultadmin.php [ 145 ]
2014-06-12 18:23:55 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/defaultadmin.php [ 145 ]
--
#0 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(145): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 145, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#5 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(64): Controller_Themes_DefaultAdmin->after()
#6 [internal function]: Controller_Backend_BaseAdmin->after()
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#11 {main}
2014-06-12 18:26:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-12 18:26:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-12 18:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-12 18:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-12 18:34:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 70 ]
2014-06-12 18:34:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 70 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-12 19:27:52 --- ERROR: ErrorException [ 1 ]: Call to undefined method File::getExtension() ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 56 ]
2014-06-12 19:27:52 --- STRACE: ErrorException [ 1 ]: Call to undefined method File::getExtension() ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-12 19:29:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method File::getExtension() ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 56 ]
2014-06-12 19:29:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method File::getExtension() ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-12 19:30:29 --- ERROR: ErrorException [ 1 ]: Call to undefined method File::getExtension() ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 55 ]
2014-06-12 19:30:29 --- STRACE: ErrorException [ 1 ]: Call to undefined method File::getExtension() ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-12 19:30:39 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-06-12 19:30:39 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_view.php(55): Kohana_File::mime('/uploads/videos...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#6 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#10 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#11 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(64): Controller_Themes_DefaultAdmin->after()
#12 [internal function]: Controller_Backend_BaseAdmin->after()
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#14 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#17 {main}
2014-06-12 19:31:09 --- ERROR: ErrorException [ 1 ]: Call to undefined method File::isWritable() ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 55 ]
2014-06-12 19:31:09 --- STRACE: ErrorException [ 1 ]: Call to undefined method File::isWritable() ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-12 19:31:54 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 55 ]
2014-06-12 19:31:54 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-12 19:42:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/library/jPlayer/jplayer.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-12 19:42:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/library/jPlayer/jplayer.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-06-12 19:42:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/library/jPlayer/jplayer.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-12 19:42:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/library/jPlayer/jplayer.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-06-12 19:42:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/js/library/jPlayer/Jplayer.swf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-12 19:42:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/js/library/jPlayer/Jplayer.swf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-06-12 19:56:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '''' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 64 ]
2014-06-12 19:56:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '''' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 64 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-12 20:20:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/videos/Big_Buck_Bunny_Trailer.mp4 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-12 20:20:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/videos/Big_Buck_Bunny_Trailer.mp4 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-06-12 20:24:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: upload_dir ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 63 ]
2014-06-12 20:24:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: upload_dir ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 63 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_view.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 63, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(64): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-12 20:36:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/videos/Big_Buck_Bunny_Trailer.mp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-12 20:36:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/videos/Big_Buck_Bunny_Trailer.mp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-06-12 21:46:13 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 106 ]
2014-06-12 21:46:13 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 106 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_detail_page.php(106): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 106, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(98): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(173): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-12 22:07:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: files_upload_url ~ MODPATH/_modules/news/views/news/backend/news_edit.php [ 210 ]
2014-06-12 22:07:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: files_upload_url ~ MODPATH/_modules/news/views/news/backend/news_edit.php [ 210 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/news/views/news/backend/news_edit.php(210): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 210, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(64): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_News))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-12 22:08:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/c533289c0d46869c5216b7e5726d1dc3_crop_80x80.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-12 22:08:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/c533289c0d46869c5216b7e5726d1dc3_crop_80x80.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-06-12 22:08:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/c533289c0d46869c5216b7e5726d1dc3_crop_80x80.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-12 22:08:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/c533289c0d46869c5216b7e5726d1dc3_crop_80x80.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-06-12 22:08:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/c533289c0d46869c5216b7e5726d1dc3_crop_80x80.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-12 22:08:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/c533289c0d46869c5216b7e5726d1dc3_crop_80x80.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-06-12 22:08:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/c533289c0d46869c5216b7e5726d1dc3_crop_80x80.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-12 22:08:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/files/c533289c0d46869c5216b7e5726d1dc3_crop_80x80.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-06-12 22:08:55 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH/image/classes/kohana/image/gd.php [ 147 ]
2014-06-12 22:08:55 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH/image/classes/kohana/image/gd.php [ 147 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-12 23:50:39 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/user/classes/controller/backend/authentication.php [ 164 ]
2014-06-12 23:50:39 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/user/classes/controller/backend/authentication.php [ 164 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/authentication.php(164): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 164, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/authentication.php(25): Controller_Backend_Authentication->action_validate()
#2 [internal function]: Controller_Backend_Authentication->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}