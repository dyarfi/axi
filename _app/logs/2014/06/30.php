<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-30 10:55:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/product/check_title/Test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-30 10:55:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/product/check_title/Test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-30 11:02:24 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/site/classes/controller/products.php [ 237 ]
2014-06-30 11:02:24 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/site/classes/controller/products.php [ 237 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(237): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 237, Array)
#1 [internal function]: Controller_Products->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-30 11:05:25 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/site/classes/controller/products.php [ 237 ]
2014-06-30 11:05:25 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/site/classes/controller/products.php [ 237 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(237): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 237, Array)
#1 [internal function]: Controller_Products->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-30 11:05:40 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/site/classes/controller/products.php [ 237 ]
2014-06-30 11:14:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/1a812ce1fcac095aff86c73cffe447a4_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-30 11:14:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/f8e6aa13ade0efae66bc9f5c0aeb682d_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-30 11:14:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/1a812ce1fcac095aff86c73cffe447a4_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-30 11:14:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/f8e6aa13ade0efae66bc9f5c0aeb682d_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-30 11:15:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/1a812ce1fcac095aff86c73cffe447a4_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-30 11:16:18 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_ProductCategory::findcp() ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 92 ]
2014-06-30 11:16:18 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_ProductCategory::findcp() ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 92 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-30 11:16:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: pagination ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 120 ]
2014-06-30 11:16:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: pagination ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 120 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(120): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 120, Array)
#1 [internal function]: Controller_Backend_ProductCategory->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-30 11:16:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: pagination ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 120 ]
2014-06-30 11:16:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: pagination ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 120 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(120): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 120, Array)
#1 [internal function]: Controller_Backend_ProductCategory->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-30 11:25:08 --- ERROR: View_Exception [ 0 ]: The requested view digg could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-06-30 11:25:08 --- STRACE: View_Exception [ 0 ]: The requested view digg could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('digg')
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(30): Kohana_View->__construct('digg', NULL)
#2 /Volumes/Data/www/offistarindo/_mod/pagination/classes/kohana/pagination.php(254): Kohana_View::factory('digg')
#3 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_index.php(135): Kohana_Pagination->render('digg')
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#7 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#12 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(63): Controller_Themes_DefaultAdmin->after()
#13 [internal function]: Controller_Backend_BaseAdmin->after()
#14 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#15 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#17 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#18 {main}
2014-06-30 11:25:14 --- ERROR: View_Exception [ 0 ]: The requested view digg could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-06-30 11:25:14 --- STRACE: View_Exception [ 0 ]: The requested view digg could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('digg')
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(30): Kohana_View->__construct('digg', NULL)
#2 /Volumes/Data/www/offistarindo/_mod/pagination/classes/kohana/pagination.php(254): Kohana_View::factory('digg')
#3 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_index.php(135): Kohana_Pagination->render('digg')
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#7 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#12 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(63): Controller_Themes_DefaultAdmin->after()
#13 [internal function]: Controller_Backend_BaseAdmin->after()
#14 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#15 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#17 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#18 {main}
2014-06-30 11:31:00 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_ProductCategory::$product ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 92 ]
2014-06-30 11:31:00 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_ProductCategory::$product ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 92 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(92): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 92, Array)
#1 [internal function]: Controller_Backend_ProductCategory->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-30 11:33:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '/' ~ MODPATH/_modules/product/classes/model/productcategory.php [ 219 ]
2014-06-30 11:33:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '/' ~ MODPATH/_modules/product/classes/model/productcategory.php [ 219 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-30 17:51:00 --- ERROR: ErrorException [ 8 ]: Undefined index: media ~ MODPATH/_modules/banner/classes/controller/backend/banner.php [ 227 ]
2014-06-30 17:51:00 --- STRACE: ErrorException [ 8 ]: Undefined index: media ~ MODPATH/_modules/banner/classes/controller/backend/banner.php [ 227 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/banner/classes/controller/backend/banner.php(227): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 227, Array)
#1 [internal function]: Controller_Backend_Banner->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Banner))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-30 17:52:25 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Banner::$product ~ MODPATH/_modules/banner/classes/controller/backend/banner.php [ 227 ]
2014-06-30 17:52:25 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Banner::$product ~ MODPATH/_modules/banner/classes/controller/backend/banner.php [ 227 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/banner/classes/controller/backend/banner.php(227): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 227, Array)
#1 [internal function]: Controller_Backend_Banner->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Banner))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-30 17:52:45 --- ERROR: Kohana_Exception [ 0 ]: Directory DOCROOT/uploads/banner/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
2014-06-30 17:52:45 --- STRACE: Kohana_Exception [ 0 ]: Directory DOCROOT/uploads/banner/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/banner/classes/controller/backend/banner.php(254): Kohana_Upload::save(Array, 'e8f1048ab54ceeb...', '/Volumes/Data/w...', 493)
#1 [internal function]: Controller_Backend_Banner->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Banner))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-30 18:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/banner/order/down/13/3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-30 18:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/banner/order/down/13/3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-30 18:01:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/banner/order/down/13/3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-30 18:01:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/banner/order/down/13/3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-30 18:01:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/banner/order/down/13/3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-30 18:01:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/banner/order/down/13/3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-30 18:12:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/productcategory/check_title/Test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-30 18:12:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/productcategory/check_title/Test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-30 18:36:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/solution/check_title/Tests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-30 18:36:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/solution/check_title/Tests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-30 18:38:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: listing ~ MODPATH/_modules/solution/views/solution/backend/solution_index.php [ 79 ]
2014-06-30 18:38:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: listing ~ MODPATH/_modules/solution/views/solution/backend/solution_index.php [ 79 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solution_index.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 79, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-30 18:38:50 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'category_id' in 'where clause' [ SELECT * FROM `tbl_solution_categories` WHERE `category_id` = '16' ORDER BY `order` ASC ,  `sub_level` ASC  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-30 18:38:50 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'category_id' in 'where clause' [ SELECT * FROM `tbl_solution_categories` WHERE `category_id` = '16' ORDER BY `order` ASC ,  `sub_level` ASC  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/model/solutioncategory.php(216): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/model/solutioncategory.php(253): Model_SolutionCategory->find(Array, '', '', '')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solution_index.php(79): Model_SolutionCategory->find_detail(Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#6 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#10 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#11 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(63): Controller_Themes_DefaultAdmin->after()
#12 [internal function]: Controller_Backend_BaseAdmin->after()
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Solution))
#14 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#17 {main}
2014-06-30 18:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/solution/check_title/Test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-30 18:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/solution/check_title/Test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-30 18:51:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/productcategory/check_title/tetetet was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-30 18:51:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/productcategory/check_title/tetetet was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}