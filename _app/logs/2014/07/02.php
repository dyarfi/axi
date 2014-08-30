<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-02 04:22:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/1a812ce1fcac095aff86c73cffe447a4_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-02 04:22:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/1a812ce1fcac095aff86c73cffe447a4_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-02 04:22:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/f8e6aa13ade0efae66bc9f5c0aeb682d_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-02 04:22:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/f8e6aa13ade0efae66bc9f5c0aeb682d_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-02 04:22:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/f8e6aa13ade0efae66bc9f5c0aeb682d_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-02 04:22:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/f8e6aa13ade0efae66bc9f5c0aeb682d_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-02 04:22:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/1a812ce1fcac095aff86c73cffe447a4_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-02 04:22:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/1a812ce1fcac095aff86c73cffe447a4_crop_169x151.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-02 04:22:20 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 166 ]
2014-07-02 04:22:20 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 166 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(166): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 166, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-02 04:22:24 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 166 ]
2014-07-02 04:22:24 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 166 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(166): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 166, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-02 04:27:29 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/download_page.php [ 35 ]
2014-07-02 04:27:29 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/download_page.php [ 35 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/download_page.php(35): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 35, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(95): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(194): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Download))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-07-02 04:34:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/userhistory1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-02 04:34:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/userhistory1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-02 04:35:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/userhistory1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-02 04:35:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/userhistory1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-02 04:36:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/userhistory1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-02 04:36:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/userhistory1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-02 04:36:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/userhistory1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-02 04:36:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/userhistory1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-02 04:36:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/userhistory1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-02 04:36:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/userhistory1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-07-02 11:45:48 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',', expecting ')' ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 592 ]
2014-07-02 11:45:48 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',', expecting ')' ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 592 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-02 12:34:03 --- ERROR: Database_Exception [ 1054 ]: Unknown column '0' in 'where clause' [ SELECT * FROM `tbl_product_categories` WHERE `order` = '3' AND `0` = 'parent_id' ORDER BY `order` asc LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-02 12:34:03 --- STRACE: Database_Exception [ 1054 ]: Unknown column '0' in 'where clause' [ SELECT * FROM `tbl_product_categories` WHERE `order` = '3' AND `0` = 'parent_id' ORDER BY `order` asc LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(196): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(598): Model_ProductCategory->find(Array, Array, 1)
#2 [internal function]: Controller_Backend_ProductCategory->action_order()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-02 12:34:07 --- ERROR: Database_Exception [ 1054 ]: Unknown column '0' in 'where clause' [ SELECT * FROM `tbl_product_categories` WHERE `order` = '3' AND `0` = 'parent_id' ORDER BY `order` asc LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-02 12:34:07 --- STRACE: Database_Exception [ 1054 ]: Unknown column '0' in 'where clause' [ SELECT * FROM `tbl_product_categories` WHERE `order` = '3' AND `0` = 'parent_id' ORDER BY `order` asc LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(196): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(598): Model_ProductCategory->find(Array, Array, 1)
#2 [internal function]: Controller_Backend_ProductCategory->action_order()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-02 12:34:19 --- ERROR: Database_Exception [ 1054 ]: Unknown column '0' in 'where clause' [ SELECT * FROM `tbl_product_categories` WHERE `order` = '3' AND `0` = 'parent_id' ORDER BY `order` asc LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-02 12:34:19 --- STRACE: Database_Exception [ 1054 ]: Unknown column '0' in 'where clause' [ SELECT * FROM `tbl_product_categories` WHERE `order` = '3' AND `0` = 'parent_id' ORDER BY `order` asc LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(196): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(598): Model_ProductCategory->find(Array, Array, 1)
#2 [internal function]: Controller_Backend_ProductCategory->action_order()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-02 12:34:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ''parent_id'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 595 ]
2014-07-02 12:34:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ''parent_id'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 595 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-02 12:36:35 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$id ~ MODPATH/_modules/product/classes/model/productcategory.php [ 115 ]
2014-07-02 12:36:35 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$id ~ MODPATH/_modules/product/classes/model/productcategory.php [ 115 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(115): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 115, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(604): Model_ProductCategory->update()
#2 [internal function]: Controller_Backend_ProductCategory->action_order()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-02 12:36:48 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$id ~ MODPATH/_modules/product/classes/model/productcategory.php [ 115 ]
2014-07-02 12:36:48 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$id ~ MODPATH/_modules/product/classes/model/productcategory.php [ 115 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(115): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 115, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(604): Model_ProductCategory->update()
#2 [internal function]: Controller_Backend_ProductCategory->action_order()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-02 12:37:49 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$idl ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 602 ]
2014-07-02 12:37:49 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$idl ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 602 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(602): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 602, Array)
#1 [internal function]: Controller_Backend_ProductCategory->action_order()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-02 13:15:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: type ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 591 ]
2014-07-02 13:15:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: type ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 591 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(591): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 591, Array)
#1 [internal function]: Controller_Backend_ProductCategory->action_order()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-02 13:16:49 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Database_Query as array ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 594 ]
2014-07-02 13:16:49 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Database_Query as array ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 594 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-02 13:30:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: results ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 593 ]
2014-07-02 13:30:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: results ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 593 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(593): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 593, Array)
#1 [internal function]: Controller_Backend_ProductCategory->action_order()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-02 13:42:50 --- ERROR: ErrorException [ 2 ]: array_merge_recursive(): Argument #2 is not an array ~ MODPATH/_modules/product/classes/model/productcategory.php [ 424 ]
2014-07-02 13:42:50 --- STRACE: ErrorException [ 2 ]: array_merge_recursive(): Argument #2 is not an array ~ MODPATH/_modules/product/classes/model/productcategory.php [ 424 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge_rec...', '/Volumes/Data/w...', 424, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(424): array_merge_recursive(Array, Object(Model_ProductCategory))
#2 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(225): Model_ProductCategory->_child_traversal(0, Array)
#3 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(338): Model_ProductCategory->find(Array, '', '', '')
#4 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(31): Model_ProductCategory->find_detail(Array)
#5 [internal function]: Controller_Backend_ProductCategory->before()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#10 {main}
2014-07-02 13:54:10 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_ProductCategory::query() ~ MODPATH/_modules/product/classes/model/productcategory.php [ 439 ]
2014-07-02 13:54:10 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_ProductCategory::query() ~ MODPATH/_modules/product/classes/model/productcategory.php [ 439 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-02 13:54:41 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_ProductCategory::query() ~ MODPATH/_modules/product/classes/model/productcategory.php [ 439 ]
2014-07-02 13:54:41 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_ProductCategory::query() ~ MODPATH/_modules/product/classes/model/productcategory.php [ 439 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-02 14:09:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: single ~ MODPATH/_modules/product/classes/model/productcategory.php [ 240 ]
2014-07-02 14:09:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: single ~ MODPATH/_modules/product/classes/model/productcategory.php [ 240 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(240): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 240, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(354): Model_ProductCategory->find(Array, '', '', '')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(31): Model_ProductCategory->find_detail(Array)
#3 [internal function]: Controller_Backend_ProductCategory->before()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-07-02 14:11:13 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query::as_array() ~ MODPATH/_modules/product/classes/model/productcategory.php [ 313 ]
2014-07-02 14:11:13 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query::as_array() ~ MODPATH/_modules/product/classes/model/productcategory.php [ 313 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-02 14:11:18 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query::as_array() ~ MODPATH/_modules/product/classes/model/productcategory.php [ 313 ]
2014-07-02 14:11:18 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query::as_array() ~ MODPATH/_modules/product/classes/model/productcategory.php [ 313 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-02 14:11:21 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query::as_array() ~ MODPATH/_modules/product/classes/model/productcategory.php [ 313 ]
2014-07-02 14:11:21 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query::as_array() ~ MODPATH/_modules/product/classes/model/productcategory.php [ 313 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-02 14:13:15 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query::as_array() ~ MODPATH/_modules/product/classes/model/productcategory.php [ 311 ]
2014-07-02 14:13:15 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query::as_array() ~ MODPATH/_modules/product/classes/model/productcategory.php [ 311 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-02 14:13:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: page_index ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 74 ]
2014-07-02 14:13:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: page_index ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 74 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(74): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 74, Array)
#1 [internal function]: Controller_Backend_ProductCategory->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-02 14:21:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _mod/_modules/product/classes/model/productcategory.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-02 14:21:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _mod/_modules/product/classes/model/productcategory.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-02 14:21:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _mod/_modules/product/classes/model/productcategory.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-02 14:21:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _mod/_modules/product/classes/model/productcategory.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-07-02 14:28:23 --- ERROR: ErrorException [ 1 ]: Class 'MY_Page_Category' not found ~ MODPATH/_modules/product/classes/model/productcategory.php [ 322 ]
2014-07-02 14:28:23 --- STRACE: ErrorException [ 1 ]: Class 'MY_Page_Category' not found ~ MODPATH/_modules/product/classes/model/productcategory.php [ 322 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-02 14:30:47 --- ERROR: ErrorException [ 8 ]: Undefined index: no ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 68 ]
2014-07-02 14:30:47 --- STRACE: ErrorException [ 8 ]: Undefined index: no ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 68 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(68): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 68, Array)
#1 [internal function]: Controller_Backend_ProductCategory->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-02 14:33:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: page_index ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 74 ]
2014-07-02 14:33:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: page_index ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 74 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(74): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 74, Array)
#1 [internal function]: Controller_Backend_ProductCategory->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-02 14:40:04 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 61 ]
2014-07-02 14:40:04 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 61 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_index.php(61): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 61, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-02 14:40:20 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 61 ]
2014-07-02 14:40:20 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 61 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_index.php(61): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 61, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-02 14:40:32 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 61 ]
2014-07-02 14:40:32 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 61 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_index.php(61): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 61, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-02 14:40:41 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/classes/model/productcategory.php [ 435 ]
2014-07-02 14:40:41 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/classes/model/productcategory.php [ 435 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(435): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 435, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(336): Model_ProductCategory->_child_traversal('0', Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(92): Model_ProductCategory->find_cp(Array)
#3 [internal function]: Controller_Backend_ProductCategory->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-07-02 14:40:49 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 61 ]
2014-07-02 14:40:49 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 61 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_index.php(61): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 61, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-02 14:40:53 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 61 ]
2014-07-02 14:40:53 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 61 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_index.php(61): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 61, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-02 14:41:12 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 61 ]
2014-07-02 14:41:12 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 61 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_index.php(61): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 61, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-02 14:41:32 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 61 ]
2014-07-02 14:41:32 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 61 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_index.php(61): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 61, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-02 14:41:38 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 61 ]
2014-07-02 14:41:38 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 61 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_index.php(61): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 61, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-02 14:41:54 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 61 ]
2014-07-02 14:41:54 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 61 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_index.php(61): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 61, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-02 14:42:03 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 61 ]
2014-07-02 14:42:03 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 61 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_index.php(61): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 61, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-02 14:42:37 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 61 ]
2014-07-02 14:42:37 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 61 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_index.php(61): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 61, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-02 14:43:22 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 61 ]
2014-07-02 14:43:22 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 61 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_index.php(61): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 61, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-02 14:43:40 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 61 ]
2014-07-02 14:43:40 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 61 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_index.php(61): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 61, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-02 14:43:54 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 61 ]
2014-07-02 14:43:54 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 61 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_index.php(61): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 61, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-02 14:43:59 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 61 ]
2014-07-02 14:43:59 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 61 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_index.php(61): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 61, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-07-02 14:45:54 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$returns' (T_VARIABLE) ~ MODPATH/_modules/product/classes/model/productcategory.php [ 347 ]
2014-07-02 14:45:54 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$returns' (T_VARIABLE) ~ MODPATH/_modules/product/classes/model/productcategory.php [ 347 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-02 14:48:56 --- ERROR: ErrorException [ 2 ]: array_slice() expects parameter 2 to be long, string given ~ MODPATH/_modules/product/classes/model/productcategory.php [ 348 ]
2014-07-02 14:48:56 --- STRACE: ErrorException [ 2 ]: array_slice() expects parameter 2 to be long, string given ~ MODPATH/_modules/product/classes/model/productcategory.php [ 348 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_slice() e...', '/Volumes/Data/w...', 348, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(348): array_slice(Array, '', 27)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(92): Model_ProductCategory->find_cp(Array)
#3 [internal function]: Controller_Backend_ProductCategory->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-07-02 14:53:28 --- ERROR: ErrorException [ 1 ]: Class 'MY_Page_Category' not found ~ MODPATH/_modules/product/classes/model/productcategory.php [ 322 ]
2014-07-02 14:53:28 --- STRACE: ErrorException [ 1 ]: Class 'MY_Page_Category' not found ~ MODPATH/_modules/product/classes/model/productcategory.php [ 322 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-02 22:20:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: returns ~ MODPATH/_modules/product/classes/model/productcategory.php [ 424 ]
2014-07-02 22:20:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: returns ~ MODPATH/_modules/product/classes/model/productcategory.php [ 424 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(424): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 424, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(97): Model_ProductCategory->traversal(Array)
#2 [internal function]: Controller_Backend_ProductCategory->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-02 22:21:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: returns ~ MODPATH/_modules/product/classes/model/productcategory.php [ 424 ]
2014-07-02 22:21:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: returns ~ MODPATH/_modules/product/classes/model/productcategory.php [ 424 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(424): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 424, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(97): Model_ProductCategory->traversal(Array)
#2 [internal function]: Controller_Backend_ProductCategory->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-02 22:21:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: child ~ MODPATH/_modules/product/classes/model/productcategory.php [ 411 ]
2014-07-02 22:21:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: child ~ MODPATH/_modules/product/classes/model/productcategory.php [ 411 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(411): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 411, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(97): Model_ProductCategory->traversal(Array)
#2 [internal function]: Controller_Backend_ProductCategory->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-02 22:21:48 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/product/classes/model/productcategory.php [ 409 ]
2014-07-02 22:21:48 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/product/classes/model/productcategory.php [ 409 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(409): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 409, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(412): Model_ProductCategory->traversal('39', Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(97): Model_ProductCategory->traversal(Array)
#3 [internal function]: Controller_Backend_ProductCategory->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-07-02 22:22:14 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/product/classes/model/productcategory.php [ 409 ]
2014-07-02 22:22:14 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/product/classes/model/productcategory.php [ 409 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(409): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 409, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(412): Model_ProductCategory->traversal('39', Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(97): Model_ProductCategory->traversal(Array)
#3 [internal function]: Controller_Backend_ProductCategory->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-07-02 22:23:39 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/_modules/product/classes/model/productcategory.php [ 420 ]
2014-07-02 22:23:39 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/_modules/product/classes/model/productcategory.php [ 420 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-02 22:24:59 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/product/classes/model/productcategory.php [ 409 ]
2014-07-02 22:24:59 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/product/classes/model/productcategory.php [ 409 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(409): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 409, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(413): Model_ProductCategory->traversal('39', Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(97): Model_ProductCategory->traversal(Array)
#3 [internal function]: Controller_Backend_ProductCategory->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-07-02 22:25:10 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/product/classes/model/productcategory.php [ 409 ]
2014-07-02 22:25:10 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/product/classes/model/productcategory.php [ 409 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(409): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 409, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(413): Model_ProductCategory->traversal('39', Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(97): Model_ProductCategory->traversal(Array)
#3 [internal function]: Controller_Backend_ProductCategory->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}