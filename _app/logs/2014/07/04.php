<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-04 08:12:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: object_vars ~ MODPATH/_modules/product/classes/model/productcategory.php [ 297 ]
2014-07-04 08:12:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: object_vars ~ MODPATH/_modules/product/classes/model/productcategory.php [ 297 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(297): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 297, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(96): Model_ProductCategory->find_cp(Array, Array)
#2 [internal function]: Controller_Backend_ProductCategory->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-04 08:27:17 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$id ~ MODPATH/_modules/product/classes/model/productcategory.php [ 109 ]
2014-07-04 08:27:17 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$id ~ MODPATH/_modules/product/classes/model/productcategory.php [ 109 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(109): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 109, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(609): Model_ProductCategory->update()
#2 [internal function]: Controller_Backend_ProductCategory->action_order()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-04 12:55:23 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/site/classes/controller/products.php [ 239 ]
2014-07-04 12:55:23 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/site/classes/controller/products.php [ 239 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(239): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 239, Array)
#1 [internal function]: Controller_Products->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-04 13:03:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_detail ~ MODPATH/_modules/site/classes/controller/products.php [ 293 ]
2014-07-04 13:03:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_detail ~ MODPATH/_modules/site/classes/controller/products.php [ 293 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(293): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 293, Array)
#1 [internal function]: Controller_Products->action_browse()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-04 13:03:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: page_category ~ MODPATH/_modules/site/classes/controller/products.php [ 300 ]
2014-07-04 13:03:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: page_category ~ MODPATH/_modules/site/classes/controller/products.php [ 300 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(300): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 300, Array)
#1 [internal function]: Controller_Products->action_browse()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-04 13:03:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: child_category ~ MODPATH/_modules/site/classes/controller/products.php [ 310 ]
2014-07-04 13:03:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: child_category ~ MODPATH/_modules/site/classes/controller/products.php [ 310 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(310): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 310, Array)
#1 [internal function]: Controller_Products->action_browse()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-04 13:04:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: child_category ~ MODPATH/_modules/site/classes/controller/products.php [ 310 ]
2014-07-04 13:04:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: child_category ~ MODPATH/_modules/site/classes/controller/products.php [ 310 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(310): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 310, Array)
#1 [internal function]: Controller_Products->action_browse()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-04 13:04:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_category ~ MODPATH/_modules/site/classes/controller/products.php [ 315 ]
2014-07-04 13:04:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_category ~ MODPATH/_modules/site/classes/controller/products.php [ 315 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(315): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 315, Array)
#1 [internal function]: Controller_Products->action_browse()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-04 13:04:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: products ~ MODPATH/_modules/site/classes/controller/products.php [ 316 ]
2014-07-04 13:04:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: products ~ MODPATH/_modules/site/classes/controller/products.php [ 316 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(316): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 316, Array)
#1 [internal function]: Controller_Products->action_browse()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-04 13:04:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_detail ~ MODPATH/_modules/site/classes/controller/products.php [ 332 ]
2014-07-04 13:04:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_detail ~ MODPATH/_modules/site/classes/controller/products.php [ 332 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(332): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 332, Array)
#1 [internal function]: Controller_Products->action_browse()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-04 13:05:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_detail ~ MODPATH/_modules/site/views/site/products_browse_page.php [ 7 ]
2014-07-04 13:05:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_detail ~ MODPATH/_modules/site/views/site/products_browse_page.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_browse_page.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(95): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(194): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-07-04 13:06:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_detail ~ MODPATH/_modules/site/views/site/products_browse_page.php [ 7 ]
2014-07-04 13:06:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_detail ~ MODPATH/_modules/site/views/site/products_browse_page.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_browse_page.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(95): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(194): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-07-04 13:07:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_detail ~ MODPATH/_modules/site/views/site/products_browse_page.php [ 7 ]
2014-07-04 13:07:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_detail ~ MODPATH/_modules/site/views/site/products_browse_page.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_browse_page.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(95): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(194): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-07-04 13:07:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_detail ~ MODPATH/_modules/site/views/site/products_browse_page.php [ 7 ]
2014-07-04 13:07:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_detail ~ MODPATH/_modules/site/views/site/products_browse_page.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_browse_page.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(95): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(194): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-07-04 13:08:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_detail ~ MODPATH/_modules/site/views/site/products_browse_page.php [ 7 ]
2014-07-04 13:08:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_detail ~ MODPATH/_modules/site/views/site/products_browse_page.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_browse_page.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(95): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(194): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-07-04 13:09:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_detail ~ MODPATH/_modules/site/views/site/products_browse_page.php [ 7 ]
2014-07-04 13:09:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_detail ~ MODPATH/_modules/site/views/site/products_browse_page.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_browse_page.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(95): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(194): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-07-04 13:09:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_files ~ MODPATH/_modules/site/classes/controller/products.php [ 162 ]
2014-07-04 13:09:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_files ~ MODPATH/_modules/site/classes/controller/products.php [ 162 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(162): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 162, Array)
#1 [internal function]: Controller_Products->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-04 13:11:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_files ~ MODPATH/_modules/site/classes/controller/products.php [ 290 ]
2014-07-04 13:11:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_files ~ MODPATH/_modules/site/classes/controller/products.php [ 290 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(290): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 290, Array)
#1 [internal function]: Controller_Products->action_browse()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-04 13:11:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_detail ~ MODPATH/_modules/site/views/site/products_browse_page.php [ 7 ]
2014-07-04 13:11:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_detail ~ MODPATH/_modules/site/views/site/products_browse_page.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_browse_page.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(95): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(194): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-07-04 13:11:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_detail ~ MODPATH/_modules/site/views/site/products_browse_page.php [ 10 ]
2014-07-04 13:11:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_detail ~ MODPATH/_modules/site/views/site/products_browse_page.php [ 10 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_browse_page.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 10, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(95): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(194): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-07-04 13:12:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_detail ~ MODPATH/_modules/site/views/site/products_browse_page.php [ 10 ]
2014-07-04 13:12:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_detail ~ MODPATH/_modules/site/views/site/products_browse_page.php [ 10 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_browse_page.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 10, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(95): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(194): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-07-04 13:12:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_detail ~ MODPATH/_modules/site/views/site/products_browse_page.php [ 10 ]
2014-07-04 13:12:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_detail ~ MODPATH/_modules/site/views/site/products_browse_page.php [ 10 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_browse_page.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 10, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(95): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(194): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-07-04 13:12:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_detail ~ MODPATH/_modules/site/views/site/products_browse_page.php [ 60 ]
2014-07-04 13:12:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_detail ~ MODPATH/_modules/site/views/site/products_browse_page.php [ 60 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_browse_page.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 60, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(95): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(194): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-07-04 13:13:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: child_category ~ MODPATH/_modules/site/classes/controller/products.php [ 162 ]
2014-07-04 13:13:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: child_category ~ MODPATH/_modules/site/classes/controller/products.php [ 162 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(162): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 162, Array)
#1 [internal function]: Controller_Products->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-04 13:35:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: products ~ MODPATH/_modules/site/classes/controller/products.php [ 336 ]
2014-07-04 13:35:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: products ~ MODPATH/_modules/site/classes/controller/products.php [ 336 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(336): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 336, Array)
#1 [internal function]: Controller_Products->action_browse()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-04 13:39:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/site/classes/controller/products.php [ 293 ]
2014-07-04 13:39:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/site/classes/controller/products.php [ 293 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-04 13:42:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_detail ~ MODPATH/_modules/site/classes/controller/products.php [ 226 ]
2014-07-04 13:42:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_detail ~ MODPATH/_modules/site/classes/controller/products.php [ 226 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(226): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 226, Array)
#1 [internal function]: Controller_Products->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-04 13:43:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_files ~ MODPATH/_modules/site/classes/controller/products.php [ 222 ]
2014-07-04 13:43:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_files ~ MODPATH/_modules/site/classes/controller/products.php [ 222 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(222): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 222, Array)
#1 [internal function]: Controller_Products->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-04 13:43:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: products ~ MODPATH/_modules/site/classes/controller/products.php [ 242 ]
2014-07-04 13:43:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: products ~ MODPATH/_modules/site/classes/controller/products.php [ 242 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(242): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 242, Array)
#1 [internal function]: Controller_Products->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-04 14:09:34 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/site/views/site/download_page.php [ 35 ]
2014-07-04 14:09:34 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/site/views/site/download_page.php [ 35 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/download_page.php(35): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 35, Array)
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
2014-07-04 14:21:58 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''39' AND `status` = 'publish' ORDER BY `order` desc' at line 1 [ SELECT * FROM `tbl_product_categories` WHERE `parent_id` IN '39' AND `status` = 'publish' ORDER BY `order` desc  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-04 14:21:58 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''39' AND `status` = 'publish' ORDER BY `order` desc' at line 1 [ SELECT * FROM `tbl_product_categories` WHERE `parent_id` IN '39' AND `status` = 'publish' ORDER BY `order` desc  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(189): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(319): Model_ProductCategory->find(Array, Array, '', '')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(242): Model_ProductCategory->find_detail(Array, Array)
#3 [internal function]: Controller_Products->action_browse()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-07-04 14:25:29 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/product/classes/model/product.php [ 296 ]
2014-07-04 14:25:29 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/product/classes/model/product.php [ 296 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/product.php(296): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 296, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(262): Model_Product->find_count(Array)
#2 [internal function]: Controller_Products->action_browse()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-04 14:25:37 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/product/classes/model/product.php [ 296 ]
2014-07-04 14:25:37 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/product/classes/model/product.php [ 296 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/product.php(296): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 296, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(262): Model_Product->find_count(Array)
#2 [internal function]: Controller_Products->action_browse()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-04 14:25:54 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/product/classes/model/product.php [ 296 ]
2014-07-04 14:25:54 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/product/classes/model/product.php [ 296 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/product.php(296): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 296, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(262): Model_Product->find_count(Array)
#2 [internal function]: Controller_Products->action_browse()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-04 14:25:58 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/product/classes/model/product.php [ 296 ]
2014-07-04 14:25:58 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/product/classes/model/product.php [ 296 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/product.php(296): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 296, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(262): Model_Product->find_count(Array)
#2 [internal function]: Controller_Products->action_browse()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-04 14:26:28 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/product/classes/model/product.php [ 296 ]
2014-07-04 14:26:28 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/product/classes/model/product.php [ 296 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/product.php(296): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 296, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(262): Model_Product->find_count(Array)
#2 [internal function]: Controller_Products->action_browse()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-04 14:26:41 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/product/classes/model/product.php [ 294 ]
2014-07-04 14:26:41 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/product/classes/model/product.php [ 294 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 294, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/product.php(294): implode('', '', Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(262): Model_Product->find_count(Array)
#3 [internal function]: Controller_Products->action_browse()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-07-04 14:26:49 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/product/classes/model/product.php [ 294 ]
2014-07-04 14:26:49 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/product/classes/model/product.php [ 294 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 294, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/product.php(294): implode('', '', Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(262): Model_Product->find_count(Array)
#3 [internal function]: Controller_Products->action_browse()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-07-04 14:27:06 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/product/classes/model/product.php [ 294 ]
2014-07-04 14:27:06 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/product/classes/model/product.php [ 294 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 294, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/product.php(294): implode('', '', Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(262): Model_Product->find_count(Array)
#3 [internal function]: Controller_Products->action_browse()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-07-04 14:29:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_ids ~ MODPATH/_modules/site/classes/controller/products.php [ 253 ]
2014-07-04 14:29:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_ids ~ MODPATH/_modules/site/classes/controller/products.php [ 253 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(253): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 253, Array)
#1 [internal function]: Controller_Products->action_browse()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-04 14:29:22 --- ERROR: ErrorException [ 1 ]: [] operator not supported for strings ~ MODPATH/_modules/site/classes/controller/products.php [ 247 ]
2014-07-04 14:29:22 --- STRACE: ErrorException [ 1 ]: [] operator not supported for strings ~ MODPATH/_modules/site/classes/controller/products.php [ 247 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-04 14:29:26 --- ERROR: ErrorException [ 1 ]: [] operator not supported for strings ~ MODPATH/_modules/site/classes/controller/products.php [ 248 ]
2014-07-04 14:29:26 --- STRACE: ErrorException [ 1 ]: [] operator not supported for strings ~ MODPATH/_modules/site/classes/controller/products.php [ 248 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-04 18:48:14 --- ERROR: ErrorException [ 8 ]: Undefined index: categoryContent ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-07-04 18:48:14 --- STRACE: ErrorException [ 8 ]: Undefined index: categoryContent ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-04 18:50:05 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'publish' at line 1 [ SELECT * FROM `tbl_pages` WHERE `category_id` = '15' ORDER BY `status` publish  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-04 18:50:05 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'publish' at line 1 [ SELECT * FROM `tbl_pages` WHERE `category_id` = '15' ORDER BY `status` publish  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(252): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(325): Model_Page->find(Array, Array, '', '')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/sitemap.php(39): Model_Page->find_detail(Array, Array)
#3 [internal function]: Controller_Sitemap->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Sitemap))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-07-04 18:50:11 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/page/classes/model/page.php [ 217 ]
2014-07-04 18:50:11 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/page/classes/model/page.php [ 217 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(217): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 217, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(325): Model_Page->find(Array, '', '', '')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/sitemap.php(39): Model_Page->find_detail(Array)
#3 [internal function]: Controller_Sitemap->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Sitemap))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}