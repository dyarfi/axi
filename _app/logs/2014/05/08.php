<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-08 03:35:25 --- ERROR: ErrorException [ 8 ]: Undefined offset: 2 ~ MODPATH/_modules/product/views/product/backend/product_index.php [ 74 ]
2014-05-08 03:35:25 --- STRACE: ErrorException [ 8 ]: Undefined offset: 2 ~ MODPATH/_modules/product/views/product/backend/product_index.php [ 74 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_index.php(74): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 74, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(65): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-05-08 04:03:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/http:/localhost/offistarindo/admin-cp/pagecategory/order/up/10/8/0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-08 04:03:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/http:/localhost/offistarindo/admin-cp/pagecategory/order/up/10/8/0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-05-08 04:03:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/http:/localhost/offistarindo/admin-cp/pagecategory/order/up/10/8/0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-08 04:03:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/http:/localhost/offistarindo/admin-cp/pagecategory/order/up/10/8/0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-05-08 04:04:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/http:/localhost/offistarindo/admin-cp/pagecategory/order/up/10/8/0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-08 04:04:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/http:/localhost/offistarindo/admin-cp/pagecategory/order/up/10/8/0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-05-08 04:04:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/http:/localhost/offistarindo/admin-cp/pagecategory/order/up/12/3/0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-08 04:04:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/http:/localhost/offistarindo/admin-cp/pagecategory/order/up/12/3/0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-05-08 04:04:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/http:/localhost/offistarindo/admin-cp/pagecategory/order/up/12/3/0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-08 04:04:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/http:/localhost/offistarindo/admin-cp/pagecategory/order/up/12/3/0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-05-08 04:04:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/http:/localhost/offistarindo/admin-cp/pagecategory/order/up/13/5/0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-08 04:04:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/http:/localhost/offistarindo/admin-cp/pagecategory/order/up/13/5/0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-05-08 04:05:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/http:/localhost/offistarindo/admin-cp/pagecategory/order/up/13/6/0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-08 04:05:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/http:/localhost/offistarindo/admin-cp/pagecategory/order/up/13/6/0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-05-08 04:06:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/pagecategoryindex was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-08 04:06:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/pagecategoryindex was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-05-08 04:06:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/pagecategoryindex was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-08 04:06:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/pagecategoryindex was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-05-08 04:07:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/pagecategoryindex was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-08 04:07:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/pagecategoryindex was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-05-08 05:07:37 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'http://www.zvzxv.com/embed/TV5aHiDGlRU' not found ~ SYSPATH/classes/kohana/validation.php [ 377 ]
2014-05-08 05:07:37 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'http://www.zvzxv.com/embed/TV5aHiDGlRU' not found ~ SYSPATH/classes/kohana/validation.php [ 377 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/Volumes/Data/w...', 377, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/validation.php(377): call_user_func_array(Array, Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(406): Kohana_Validation->check()
#3 [internal function]: Controller_Backend_Product->action_edit()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-05-08 05:40:16 --- ERROR: ErrorException [ 2 ]: Missing argument 3 for Kohana_Valid::range() ~ SYSPATH/classes/kohana/valid.php [ 478 ]
2014-05-08 05:40:16 --- STRACE: ErrorException [ 2 ]: Missing argument 3 for Kohana_Valid::range() ~ SYSPATH/classes/kohana/valid.php [ 478 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/valid.php(478): Kohana_Core::error_handler(2, 'Missing argumen...', '/Volumes/Data/w...', 478, Array)
#1 [internal function]: Kohana_Valid::range('0', '/^[1-9]/uD')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#3 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(410): Kohana_Validation->check()
#4 [internal function]: Controller_Backend_Product->action_edit()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#9 {main}
2014-05-08 18:41:24 --- ERROR: ErrorException [ 1 ]: Call to a member function detect_uri() on a non-object ~ APPPATH/classes/acl.php [ 55 ]
2014-05-08 18:41:24 --- STRACE: ErrorException [ 1 ]: Call to a member function detect_uri() on a non-object ~ APPPATH/classes/acl.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}