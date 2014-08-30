<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-01 02:29:36 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$subject ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 39 ]
2014-07-01 02:29:36 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$subject ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 39 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_view.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 39, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(63): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-01 02:30:58 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$subject ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 42 ]
2014-07-01 02:30:58 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$subject ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 42 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_view.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 42, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(63): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-01 02:31:13 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_ProductCategoryContent::$title ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 42 ]
2014-07-01 02:31:13 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_ProductCategoryContent::$title ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 42 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_view.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 42, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(63): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-01 02:31:55 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 42 ]
2014-07-01 02:31:55 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 42 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_view.php(42): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 42, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(63): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-01 02:32:04 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 42 ]
2014-07-01 02:32:04 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 42 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_view.php(42): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 42, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(63): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-01 02:32:17 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 42 ]
2014-07-01 02:32:17 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 42 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-01 02:32:22 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 42 ]
2014-07-01 02:32:22 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 42 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_view.php(42): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 42, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(63): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-01 03:25:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/1a812ce1fcac095aff86c73cffe447a4_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 03:25:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/f8e6aa13ade0efae66bc9f5c0aeb682d_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 03:25:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/1a812ce1fcac095aff86c73cffe447a4_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-01 03:25:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/f8e6aa13ade0efae66bc9f5c0aeb682d_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-01 04:29:58 --- ERROR: ErrorException [ 1 ]: Call to a member function update() on a non-object ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 597 ]
2014-07-01 04:29:58 --- STRACE: ErrorException [ 1 ]: Call to a member function update() on a non-object ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 597 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-01 04:36:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/productcategory/check_title/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-07-01 04:36:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/productcategory/check_title/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-01 17:07:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/f8e6aa13ade0efae66bc9f5c0aeb682d_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 17:07:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/1a812ce1fcac095aff86c73cffe447a4_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 17:07:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/f8e6aa13ade0efae66bc9f5c0aeb682d_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-01 17:07:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/1a812ce1fcac095aff86c73cffe447a4_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-01 19:21:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/1a812ce1fcac095aff86c73cffe447a4_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 19:21:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/1a812ce1fcac095aff86c73cffe447a4_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-01 19:21:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/f8e6aa13ade0efae66bc9f5c0aeb682d_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 19:21:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/f8e6aa13ade0efae66bc9f5c0aeb682d_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-01 19:21:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/1a812ce1fcac095aff86c73cffe447a4_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 19:21:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/1a812ce1fcac095aff86c73cffe447a4_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-01 19:21:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/f8e6aa13ade0efae66bc9f5c0aeb682d_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 19:21:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/f8e6aa13ade0efae66bc9f5c0aeb682d_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-01 19:33:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: filemanager/js/Jplayer.swf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 19:33:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: filemanager/js/Jplayer.swf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-01 19:34:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL filemanager/Jplayer.swf was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 19:34:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL filemanager/Jplayer.swf was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-01 23:20:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/1a812ce1fcac095aff86c73cffe447a4_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 23:20:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/f8e6aa13ade0efae66bc9f5c0aeb682d_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 23:20:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/f8e6aa13ade0efae66bc9f5c0aeb682d_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-01 23:20:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/1a812ce1fcac095aff86c73cffe447a4_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-01 23:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/f8e6aa13ade0efae66bc9f5c0aeb682d_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 23:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/f8e6aa13ade0efae66bc9f5c0aeb682d_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-01 23:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/1a812ce1fcac095aff86c73cffe447a4_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 23:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/1a812ce1fcac095aff86c73cffe447a4_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-01 23:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/1a812ce1fcac095aff86c73cffe447a4_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 23:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/1a812ce1fcac095aff86c73cffe447a4_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-01 23:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/f8e6aa13ade0efae66bc9f5c0aeb682d_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 23:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/f8e6aa13ade0efae66bc9f5c0aeb682d_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-01 23:20:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/f8e6aa13ade0efae66bc9f5c0aeb682d_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 23:20:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/f8e6aa13ade0efae66bc9f5c0aeb682d_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-01 23:20:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/1a812ce1fcac095aff86c73cffe447a4_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 23:20:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/1a812ce1fcac095aff86c73cffe447a4_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-01 23:20:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/1a812ce1fcac095aff86c73cffe447a4_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 23:20:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/1a812ce1fcac095aff86c73cffe447a4_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-01 23:20:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/f8e6aa13ade0efae66bc9f5c0aeb682d_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 23:20:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/f8e6aa13ade0efae66bc9f5c0aeb682d_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}