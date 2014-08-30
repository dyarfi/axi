<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-29 01:54:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/error/invalid_request was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-29 01:54:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/error/invalid_request was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-29 01:56:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/error/invalid_request was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-29 01:56:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/error/invalid_request was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-29 01:56:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/error/invalid_request was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-29 01:56:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/error/invalid_request was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-29 02:00:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: default_order ~ MODPATH/_modules/product/classes/model/productcategory.php [ 142 ]
2014-04-29 02:00:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: default_order ~ MODPATH/_modules/product/classes/model/productcategory.php [ 142 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(142): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 142, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(33): Model_ProductCategory->find(Array)
#2 [internal function]: Controller_Backend_ProductCategory->before()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-29 02:00:34 --- ERROR: ErrorException [ 2 ]: array_merge(): Argument #1 is not an array ~ MODPATH/_modules/product/classes/model/productcategory.php [ 139 ]
2014-04-29 02:00:34 --- STRACE: ErrorException [ 2 ]: array_merge(): Argument #1 is not an array ~ MODPATH/_modules/product/classes/model/productcategory.php [ 139 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge(): ...', '/Volumes/Data/w...', 139, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(139): array_merge('', Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(97): Model_ProductCategory->find(Array, Array, 25, '')
#3 [internal function]: Controller_Backend_ProductCategory->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-04-29 02:04:01 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$category_id ~ MODPATH/_modules/product/classes/model/productcategory.php [ 222 ]
2014-04-29 02:04:01 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$category_id ~ MODPATH/_modules/product/classes/model/productcategory.php [ 222 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(222): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 222, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(33): Model_ProductCategory->find(Array)
#2 [internal function]: Controller_Backend_ProductCategory->before()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-29 15:36:29 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_SolutionCategory::_child_traversal() ~ MODPATH/_modules/solution/classes/model/solutioncategory.php [ 234 ]
2014-04-29 15:36:29 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_SolutionCategory::_child_traversal() ~ MODPATH/_modules/solution/classes/model/solutioncategory.php [ 234 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}