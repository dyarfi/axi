<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-14 01:07:27 --- ERROR: ErrorException [ 8 ]: Undefined index: feature ~ MODPATH/_modules/product/views/product/backend/product_add.php [ 53 ]
2014-04-14 01:07:27 --- STRACE: ErrorException [ 8 ]: Undefined index: feature ~ MODPATH/_modules/product/views/product/backend/product_add.php [ 53 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_add.php(53): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 53, Array)
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
2014-04-14 01:09:40 --- ERROR: ErrorException [ 8 ]: Undefined index: feature ~ MODPATH/_modules/product/views/product/backend/product_add.php [ 53 ]
2014-04-14 01:09:40 --- STRACE: ErrorException [ 8 ]: Undefined index: feature ~ MODPATH/_modules/product/views/product/backend/product_add.php [ 53 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_add.php(53): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 53, Array)
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
2014-04-14 05:36:22 --- ERROR: ErrorException [ 8 ]: Undefined index: feature ~ MODPATH/_modules/product/views/product/backend/product_edit.php [ 53 ]
2014-04-14 05:36:22 --- STRACE: ErrorException [ 8 ]: Undefined index: feature ~ MODPATH/_modules/product/views/product/backend/product_edit.php [ 53 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_edit.php(53): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 53, Array)
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
2014-04-14 05:38:34 --- ERROR: ErrorException [ 8 ]: Undefined index: feature ~ MODPATH/_modules/product/views/product/backend/product_edit.php [ 56 ]
2014-04-14 05:38:34 --- STRACE: ErrorException [ 8 ]: Undefined index: feature ~ MODPATH/_modules/product/views/product/backend/product_edit.php [ 56 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_edit.php(56): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 56, Array)
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
2014-04-14 05:39:23 --- ERROR: ErrorException [ 8 ]: Undefined index: feature ~ MODPATH/_modules/product/views/product/backend/product_edit.php [ 53 ]
2014-04-14 05:39:23 --- STRACE: ErrorException [ 8 ]: Undefined index: feature ~ MODPATH/_modules/product/views/product/backend/product_edit.php [ 53 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_edit.php(53): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 53, Array)
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
2014-04-14 05:40:09 --- ERROR: ErrorException [ 8 ]: Undefined index: specification ~ MODPATH/_modules/product/views/product/backend/product_edit.php [ 64 ]
2014-04-14 05:40:09 --- STRACE: ErrorException [ 8 ]: Undefined index: specification ~ MODPATH/_modules/product/views/product/backend/product_edit.php [ 64 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_edit.php(64): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 64, Array)
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
2014-04-14 05:42:01 --- ERROR: ErrorException [ 8 ]: Undefined index: media ~ MODPATH/_modules/product/views/product/backend/product_edit.php [ 72 ]
2014-04-14 05:42:01 --- STRACE: ErrorException [ 8 ]: Undefined index: media ~ MODPATH/_modules/product/views/product/backend/product_edit.php [ 72 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_edit.php(72): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 72, Array)
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
2014-04-14 05:49:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 30 ]
2014-04-14 05:49:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 30 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_view.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 30, Array)
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
2014-04-14 05:50:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: fields ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 32 ]
2014-04-14 05:50:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: fields ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 32 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_view.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 32, Array)
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
2014-04-14 05:50:24 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Product as array ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 32 ]
2014-04-14 05:50:24 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Product as array ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-14 05:51:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: fields ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 32 ]
2014-04-14 05:51:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: fields ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 32 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_view.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 32, Array)
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
2014-04-14 05:56:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_category ~ MODPATH/_modules/site/classes/controller/products.php [ 133 ]
2014-04-14 05:56:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_category ~ MODPATH/_modules/site/classes/controller/products.php [ 133 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(133): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 133, Array)
#1 [internal function]: Controller_Products->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 05:56:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_category ~ MODPATH/_modules/site/classes/controller/products.php [ 160 ]
2014-04-14 05:56:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_category ~ MODPATH/_modules/site/classes/controller/products.php [ 160 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(160): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 160, Array)
#1 [internal function]: Controller_Products->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 06:07:20 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$subject ~ MODPATH/_modules/site/views/site/products_page.php [ 9 ]
2014-04-14 06:07:20 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$subject ~ MODPATH/_modules/site/views/site/products_page.php [ 9 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 9, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 06:08:21 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Product::load_by_name() ~ MODPATH/_modules/site/classes/controller/products.php [ 257 ]
2014-04-14 06:08:21 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Product::load_by_name() ~ MODPATH/_modules/site/classes/controller/products.php [ 257 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-14 06:08:36 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Product::load_by_name() ~ MODPATH/_modules/site/classes/controller/products.php [ 257 ]
2014-04-14 06:08:36 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Product::load_by_name() ~ MODPATH/_modules/site/classes/controller/products.php [ 257 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-14 06:08:39 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Product::load_by_name() ~ MODPATH/_modules/site/classes/controller/products.php [ 257 ]
2014-04-14 06:08:39 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Product::load_by_name() ~ MODPATH/_modules/site/classes/controller/products.php [ 257 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-14 06:10:03 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/products.php [ 258 ]
2014-04-14 06:10:03 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/products.php [ 258 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(258): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 258, Array)
#1 [internal function]: Controller_Products->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 06:15:37 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_ProductCategory::load_by_name() ~ MODPATH/_modules/site/classes/controller/products.php [ 174 ]
2014-04-14 06:15:37 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_ProductCategory::load_by_name() ~ MODPATH/_modules/site/classes/controller/products.php [ 174 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-14 06:16:05 --- ERROR: View_Exception [ 0 ]: The requested view site/products_detail_product could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-04-14 06:16:05 --- STRACE: View_Exception [ 0 ]: The requested view site/products_detail_product could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('site/products_d...')
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(30): Kohana_View->__construct('site/products_d...', NULL)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(280): Kohana_View::factory('site/products_d...')
#3 [internal function]: Controller_Products->action_read()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-04-14 06:17:06 --- ERROR: View_Exception [ 0 ]: The requested view site/products_detail_product could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-04-14 06:17:06 --- STRACE: View_Exception [ 0 ]: The requested view site/products_detail_product could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('site/products_d...')
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(30): Kohana_View->__construct('site/products_d...', NULL)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(280): Kohana_View::factory('site/products_d...')
#3 [internal function]: Controller_Products->action_read()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-04-14 06:17:07 --- ERROR: View_Exception [ 0 ]: The requested view site/products_detail_product could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-04-14 06:17:07 --- STRACE: View_Exception [ 0 ]: The requested view site/products_detail_product could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('site/products_d...')
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(30): Kohana_View->__construct('site/products_d...', NULL)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(280): Kohana_View::factory('site/products_d...')
#3 [internal function]: Controller_Products->action_read()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-04-14 06:17:26 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$text ~ MODPATH/_modules/site/classes/controller/products.php [ 286 ]
2014-04-14 06:17:26 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$text ~ MODPATH/_modules/site/classes/controller/products.php [ 286 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(286): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 286, Array)
#1 [internal function]: Controller_Products->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 06:17:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_category ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 8 ]
2014-04-14 06:17:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_category ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 8 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_detail_page.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 8, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 06:37:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: asdf ~ MODPATH/_modules/site/views/site/products_page.php [ 14 ]
2014-04-14 06:37:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: asdf ~ MODPATH/_modules/site/views/site/products_page.php [ 14 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 14, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 06:43:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: j ~ MODPATH/_modules/site/views/site/products_page.php [ 12 ]
2014-04-14 06:43:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: j ~ MODPATH/_modules/site/views/site/products_page.php [ 12 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 12, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 06:44:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: j ~ MODPATH/_modules/site/views/site/products_page.php [ 12 ]
2014-04-14 06:44:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: j ~ MODPATH/_modules/site/views/site/products_page.php [ 12 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 12, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 06:44:31 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH/_modules/site/views/site/products_page.php [ 12 ]
2014-04-14 06:44:31 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH/_modules/site/views/site/products_page.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-14 06:49:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ MODPATH/_modules/site/views/site/products_page.php [ 15 ]
2014-04-14 06:49:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ MODPATH/_modules/site/views/site/products_page.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-14 07:02:21 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/products.php [ 258 ]
2014-04-14 07:02:21 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/products.php [ 258 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(258): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 258, Array)
#1 [internal function]: Controller_Products->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 07:02:34 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/products.php [ 258 ]
2014-04-14 07:02:34 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/products.php [ 258 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(258): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 258, Array)
#1 [internal function]: Controller_Products->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 07:02:37 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/products.php [ 258 ]
2014-04-14 07:02:37 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/products.php [ 258 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(258): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 258, Array)
#1 [internal function]: Controller_Products->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 07:02:37 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/products.php [ 258 ]
2014-04-14 07:02:37 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/products.php [ 258 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(258): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 258, Array)
#1 [internal function]: Controller_Products->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 07:14:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ MODPATH/_modules/site/views/site/products_page.php [ 9 ]
2014-04-14 07:14:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ MODPATH/_modules/site/views/site/products_page.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-14 07:21:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ MODPATH/_modules/site/views/site/products_page.php [ 104 ]
2014-04-14 07:21:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ MODPATH/_modules/site/views/site/products_page.php [ 104 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-14 07:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL language-training-software was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-14 07:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL language-training-software was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-14 07:30:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL language-training-software was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-14 07:30:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL language-training-software was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-14 07:33:12 --- ERROR: ErrorException [ 8 ]: Use of undefined constant Model_ProductCategory - assumed 'Model_ProductCategory' ~ MODPATH/_modules/site/classes/controller/products.php [ 128 ]
2014-04-14 07:33:12 --- STRACE: ErrorException [ 8 ]: Use of undefined constant Model_ProductCategory - assumed 'Model_ProductCategory' ~ MODPATH/_modules/site/classes/controller/products.php [ 128 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(128): Kohana_Core::error_handler(8, 'Use of undefine...', '/Volumes/Data/w...', 128, Array)
#1 [internal function]: Controller_Products->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 07:33:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: child_category ~ MODPATH/_modules/site/classes/controller/products.php [ 149 ]
2014-04-14 07:33:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: child_category ~ MODPATH/_modules/site/classes/controller/products.php [ 149 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(149): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 149, Array)
#1 [internal function]: Controller_Products->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 07:35:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL language-training-software was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-14 07:35:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL language-training-software was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-14 07:36:34 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 17 ]
2014-04-14 07:36:34 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 17 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(17): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 17, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 07:37:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL promethean-iwb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-14 07:37:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL promethean-iwb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-14 07:52:18 --- ERROR: ErrorException [ 8 ]: Undefined offset: 17 ~ MODPATH/_modules/site/views/site/products_page.php [ 16 ]
2014-04-14 07:52:18 --- STRACE: ErrorException [ 8 ]: Undefined offset: 17 ~ MODPATH/_modules/site/views/site/products_page.php [ 16 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(16): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 16, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 07:52:28 --- ERROR: ErrorException [ 8 ]: Undefined offset: 17 ~ MODPATH/_modules/site/views/site/products_page.php [ 16 ]
2014-04-14 07:52:28 --- STRACE: ErrorException [ 8 ]: Undefined offset: 17 ~ MODPATH/_modules/site/views/site/products_page.php [ 16 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(16): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 16, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 07:52:29 --- ERROR: ErrorException [ 8 ]: Undefined offset: 17 ~ MODPATH/_modules/site/views/site/products_page.php [ 16 ]
2014-04-14 07:52:29 --- STRACE: ErrorException [ 8 ]: Undefined offset: 17 ~ MODPATH/_modules/site/views/site/products_page.php [ 16 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(16): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 16, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 07:52:30 --- ERROR: ErrorException [ 8 ]: Undefined offset: 17 ~ MODPATH/_modules/site/views/site/products_page.php [ 16 ]
2014-04-14 07:52:30 --- STRACE: ErrorException [ 8 ]: Undefined offset: 17 ~ MODPATH/_modules/site/views/site/products_page.php [ 16 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(16): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 16, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 07:52:44 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/products_page.php [ 16 ]
2014-04-14 07:52:44 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/products_page.php [ 16 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(16): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 16, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 07:58:52 --- ERROR: ErrorException [ 8 ]: Undefined offset: 27 ~ MODPATH/_modules/site/views/site/products_page.php [ 29 ]
2014-04-14 07:58:52 --- STRACE: ErrorException [ 8 ]: Undefined offset: 27 ~ MODPATH/_modules/site/views/site/products_page.php [ 29 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(29): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 29, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 08:00:01 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 32 ]
2014-04-14 08:00:01 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 32 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(32): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 32, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 08:00:22 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 32 ]
2014-04-14 08:00:22 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 32 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(32): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 32, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 08:00:29 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 32 ]
2014-04-14 08:00:29 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 32 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(32): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 32, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 08:00:30 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 32 ]
2014-04-14 08:00:30 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 32 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(32): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 32, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 08:03:21 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 33 ]
2014-04-14 08:03:21 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 33 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 33, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 08:03:25 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 33 ]
2014-04-14 08:03:25 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 33 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 33, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 08:03:30 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 33 ]
2014-04-14 08:03:30 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 33 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 33, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 08:03:34 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 33 ]
2014-04-14 08:03:34 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 33 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 33, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 08:03:44 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 33 ]
2014-04-14 08:03:44 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 33 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 33, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 08:03:58 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 32 ]
2014-04-14 08:03:58 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 32 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(32): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 32, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 08:04:13 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 34 ]
2014-04-14 08:04:13 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 34 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(34): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 34, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 08:04:18 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 34 ]
2014-04-14 08:04:18 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 34 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(34): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 34, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 08:04:30 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 34 ]
2014-04-14 08:04:30 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 34 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(34): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 34, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 08:04:35 --- ERROR: ErrorException [ 8 ]: Use of undefined constant eix - assumed 'eix' ~ MODPATH/_modules/site/views/site/products_page.php [ 32 ]
2014-04-14 08:04:35 --- STRACE: ErrorException [ 8 ]: Use of undefined constant eix - assumed 'eix' ~ MODPATH/_modules/site/views/site/products_page.php [ 32 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(32): Kohana_Core::error_handler(8, 'Use of undefine...', '/Volumes/Data/w...', 32, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 08:06:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL product/promethean-500pro was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-14 08:06:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL product/promethean-500pro was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-14 08:06:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL product/read/promethean-500pro was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-14 08:06:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL product/read/promethean-500pro was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-14 08:06:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_category ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 8 ]
2014-04-14 08:06:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_category ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 8 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_detail_page.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 8, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 08:07:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_category ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 8 ]
2014-04-14 08:07:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_category ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 8 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_detail_page.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 8, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 08:14:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: val1 ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 16 ]
2014-04-14 08:14:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: val1 ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 16 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_detail_page.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 16, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 08:37:26 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/products.php [ 296 ]
2014-04-14 08:37:26 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/products.php [ 296 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(296): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 296, Array)
#1 [internal function]: Controller_Products->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 08:38:07 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 76 ]
2014-04-14 08:38:07 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 76 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_detail_page.php(76): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 76, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 08:38:14 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 76 ]
2014-04-14 08:38:14 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 76 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_detail_page.php(76): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 76, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 08:38:20 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 76 ]
2014-04-14 08:38:20 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 76 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_detail_page.php(76): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 76, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 08:38:43 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 76 ]
2014-04-14 08:38:43 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 76 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_detail_page.php(76): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 76, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 08:47:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/a5a63c7afac8d82df7f0be63ea97c0f9_resize_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 08:47:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/a5a63c7afac8d82df7f0be63ea97c0f9_resize_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 08:47:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/a5a63c7afac8d82df7f0be63ea97c0f9_resize_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 08:47:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/a5a63c7afac8d82df7f0be63ea97c0f9_resize_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 08:50:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: page_upload_url ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 80 ]
2014-04-14 08:50:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: page_upload_url ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 80 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_detail_page.php(80): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 80, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 08:50:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: page_upload_url ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 80 ]
2014-04-14 08:50:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: page_upload_url ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 80 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_detail_page.php(80): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 80, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 08:50:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: about ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 80 ]
2014-04-14 08:50:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: about ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 80 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_detail_page.php(80): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 80, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 08:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/a5a63c7afac8d82df7f0be63ea97c0f9_crop_300x135.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 08:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/a5a63c7afac8d82df7f0be63ea97c0f9_crop_300x135.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 08:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/a5a63c7afac8d82df7f0be63ea97c0f9_crop_300x135.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 08:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/a5a63c7afac8d82df7f0be63ea97c0f9_crop_300x135.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 08:50:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/a5a63c7afac8d82df7f0be63ea97c0f9_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 08:50:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/a5a63c7afac8d82df7f0be63ea97c0f9_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 08:50:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/a5a63c7afac8d82df7f0be63ea97c0f9_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 08:50:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/a5a63c7afac8d82df7f0be63ea97c0f9_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 08:51:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/a5a63c7afac8d82df7f0be63ea97c0f9_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 08:51:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/a5a63c7afac8d82df7f0be63ea97c0f9_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 08:51:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/a5a63c7afac8d82df7f0be63ea97c0f9_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 08:51:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/a5a63c7afac8d82df7f0be63ea97c0f9_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 08:51:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/a5a63c7afac8d82df7f0be63ea97c0f9_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 08:51:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/a5a63c7afac8d82df7f0be63ea97c0f9_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 08:52:46 --- ERROR: ErrorException [ 8 ]: Undefined offset: 5 ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 78 ]
2014-04-14 08:52:46 --- STRACE: ErrorException [ 8 ]: Undefined offset: 5 ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 78 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_detail_page.php(78): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 78, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 09:04:43 --- ERROR: Kohana_Exception [ 0 ]: There is no table tbl_urls available ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 308 ]
2014-04-14 09:04:43 --- STRACE: Kohana_Exception [ 0 ]: There is no table tbl_urls available ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 308 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(76): Model_UserDashboard->find_top_count(Array)
#1 [internal function]: Controller_Backend_UserDashboard->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 09:04:58 --- ERROR: Kohana_Exception [ 0 ]: There is no table tbl_urls available ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 308 ]
2014-04-14 09:04:58 --- STRACE: Kohana_Exception [ 0 ]: There is no table tbl_urls available ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 308 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(76): Model_UserDashboard->find_top_count(Array)
#1 [internal function]: Controller_Backend_UserDashboard->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 09:12:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: files ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 583 ]
2014-04-14 09:12:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: files ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 583 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(583): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 583, Array)
#1 [internal function]: Controller_Backend_Product->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 09:12:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: files ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 583 ]
2014-04-14 09:12:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: files ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 583 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(583): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 583, Array)
#1 [internal function]: Controller_Backend_Product->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 10:07:54 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH/_modules/site/views/site/products_page.php [ 77 ]
2014-04-14 10:07:54 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH/_modules/site/views/site/products_page.php [ 77 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-14 10:08:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ MODPATH/_modules/site/views/site/products_page.php [ 80 ]
2014-04-14 10:08:50 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ MODPATH/_modules/site/views/site/products_page.php [ 80 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-14 10:08:57 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 79 ]
2014-04-14 10:08:57 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 79 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(79): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 79, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 10:09:04 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 79 ]
2014-04-14 10:09:04 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 79 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(79): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 79, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 10:09:07 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/site/views/site/products_page.php [ 79 ]
2014-04-14 10:09:07 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/site/views/site/products_page.php [ 79 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(79): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 79, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 10:10:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_detail ~ MODPATH/_modules/site/views/site/products_page.php [ 76 ]
2014-04-14 10:10:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_detail ~ MODPATH/_modules/site/views/site/products_page.php [ 76 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(76): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 76, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 10:10:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_detail ~ MODPATH/_modules/site/views/site/products_page.php [ 76 ]
2014-04-14 10:10:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_detail ~ MODPATH/_modules/site/views/site/products_page.php [ 76 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(76): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 76, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 10:10:39 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/site/views/site/products_page.php [ 79 ]
2014-04-14 10:10:39 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/site/views/site/products_page.php [ 79 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(79): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 79, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 10:11:34 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 81 ]
2014-04-14 10:11:34 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(81): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 81, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 10:11:38 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 81 ]
2014-04-14 10:11:38 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(81): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 81, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 10:11:44 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 81 ]
2014-04-14 10:11:44 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(81): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 81, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 10:11:55 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/site/views/site/products_page.php [ 81 ]
2014-04-14 10:11:55 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/site/views/site/products_page.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(81): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 81, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 10:12:02 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/site/views/site/products_page.php [ 81 ]
2014-04-14 10:12:02 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/site/views/site/products_page.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(81): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 81, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 10:17:27 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$title ~ MODPATH/_modules/site/views/site/products_page.php [ 81 ]
2014-04-14 10:17:27 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$title ~ MODPATH/_modules/site/views/site/products_page.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(81): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 81, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 10:19:00 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 80 ]
2014-04-14 10:19:00 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 80 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(80): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 80, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 10:19:04 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 80 ]
2014-04-14 10:19:04 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/products_page.php [ 80 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(80): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 80, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 10:21:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_detail ~ MODPATH/_modules/site/classes/controller/products.php [ 100 ]
2014-04-14 10:21:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_detail ~ MODPATH/_modules/site/classes/controller/products.php [ 100 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(100): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 100, Array)
#1 [internal function]: Controller_Products->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 10:24:39 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$title ~ MODPATH/_modules/site/views/site/products_page.php [ 84 ]
2014-04-14 10:24:39 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$title ~ MODPATH/_modules/site/views/site/products_page.php [ 84 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(84): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 84, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 10:25:43 --- ERROR: ErrorException [ 8 ]: Undefined offset: 9 ~ MODPATH/_modules/site/views/site/products_page.php [ 86 ]
2014-04-14 10:25:43 --- STRACE: ErrorException [ 8 ]: Undefined offset: 9 ~ MODPATH/_modules/site/views/site/products_page.php [ 86 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(86): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 86, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 10:26:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 0974d64e5a0b8f4ddd72ff4e0b6564d7.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-14 10:26:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 0974d64e5a0b8f4ddd72ff4e0b6564d7.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-14 10:26:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 11f49341ffd8da04c6e85107f3d0d926.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-14 10:26:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 11f49341ffd8da04c6e85107f3d0d926.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-14 10:26:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 3999bf2564374d0e0f3f3ac75e71c04c.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-14 10:26:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 3999bf2564374d0e0f3f3ac75e71c04c.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-14 10:26:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL b5c71cfea56acdab743efa31a73521f8.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-14 10:26:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL b5c71cfea56acdab743efa31a73521f8.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-14 10:26:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL a5a63c7afac8d82df7f0be63ea97c0f9.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-14 10:26:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL a5a63c7afac8d82df7f0be63ea97c0f9.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-14 10:26:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 3999bf2564374d0e0f3f3ac75e71c04c.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-14 10:26:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 3999bf2564374d0e0f3f3ac75e71c04c.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-14 10:26:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL b5c71cfea56acdab743efa31a73521f8.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-14 10:26:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL b5c71cfea56acdab743efa31a73521f8.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-14 10:26:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 11f49341ffd8da04c6e85107f3d0d926.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-14 10:26:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 11f49341ffd8da04c6e85107f3d0d926.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-14 10:26:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 0974d64e5a0b8f4ddd72ff4e0b6564d7.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-14 10:26:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 0974d64e5a0b8f4ddd72ff4e0b6564d7.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-14 10:26:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 0974d64e5a0b8f4ddd72ff4e0b6564d7.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-14 10:26:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 0974d64e5a0b8f4ddd72ff4e0b6564d7.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-14 10:26:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 11f49341ffd8da04c6e85107f3d0d926.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-14 10:26:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 11f49341ffd8da04c6e85107f3d0d926.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-14 10:26:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL a5a63c7afac8d82df7f0be63ea97c0f9.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-14 10:26:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL a5a63c7afac8d82df7f0be63ea97c0f9.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-14 10:26:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 3999bf2564374d0e0f3f3ac75e71c04c.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-14 10:26:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 3999bf2564374d0e0f3f3ac75e71c04c.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-14 10:26:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL b5c71cfea56acdab743efa31a73521f8.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-14 10:26:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL b5c71cfea56acdab743efa31a73521f8.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-14 10:26:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 0974d64e5a0b8f4ddd72ff4e0b6564d7.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-14 10:26:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 0974d64e5a0b8f4ddd72ff4e0b6564d7.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-14 10:28:27 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$file_name ~ MODPATH/_modules/site/views/site/products_page.php [ 84 ]
2014-04-14 10:28:27 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$file_name ~ MODPATH/_modules/site/views/site/products_page.php [ 84 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(84): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 84, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 10:28:42 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$file_name ~ MODPATH/_modules/site/views/site/products_page.php [ 84 ]
2014-04-14 10:28:42 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$file_name ~ MODPATH/_modules/site/views/site/products_page.php [ 84 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(84): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 84, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 10:29:35 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$text ~ MODPATH/_modules/site/views/site/products_page.php [ 84 ]
2014-04-14 10:29:35 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$text ~ MODPATH/_modules/site/views/site/products_page.php [ 84 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(84): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 84, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 10:29:45 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$file_name ~ MODPATH/_modules/site/views/site/products_page.php [ 85 ]
2014-04-14 10:29:45 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$file_name ~ MODPATH/_modules/site/views/site/products_page.php [ 85 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(85): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 85, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 10:30:09 --- ERROR: ErrorException [ 8 ]: Undefined offset: 9 ~ MODPATH/_modules/site/views/site/products_page.php [ 85 ]
2014-04-14 10:30:09 --- STRACE: ErrorException [ 8 ]: Undefined offset: 9 ~ MODPATH/_modules/site/views/site/products_page.php [ 85 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(85): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 85, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 10:30:10 --- ERROR: ErrorException [ 8 ]: Undefined offset: 9 ~ MODPATH/_modules/site/views/site/products_page.php [ 85 ]
2014-04-14 10:30:10 --- STRACE: ErrorException [ 8 ]: Undefined offset: 9 ~ MODPATH/_modules/site/views/site/products_page.php [ 85 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(85): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 85, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 10:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/0974d64e5a0b8f4ddd72ff4e0b6564d7_crop_186x126.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 10:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/0974d64e5a0b8f4ddd72ff4e0b6564d7_crop_186x126.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 10:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/b5c71cfea56acdab743efa31a73521f8_crop_186x126.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 10:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/b5c71cfea56acdab743efa31a73521f8_crop_186x126.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 10:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/11f49341ffd8da04c6e85107f3d0d926_crop_186x126.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 10:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/11f49341ffd8da04c6e85107f3d0d926_crop_186x126.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 10:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/3999bf2564374d0e0f3f3ac75e71c04c_crop_186x126.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 10:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/3999bf2564374d0e0f3f3ac75e71c04c_crop_186x126.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 10:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/a5a63c7afac8d82df7f0be63ea97c0f9_crop_186x126.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 10:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/a5a63c7afac8d82df7f0be63ea97c0f9_crop_186x126.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 10:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/a5a63c7afac8d82df7f0be63ea97c0f9_crop_186x126.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 10:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/a5a63c7afac8d82df7f0be63ea97c0f9_crop_186x126.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 10:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/11f49341ffd8da04c6e85107f3d0d926_crop_186x126.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 10:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/11f49341ffd8da04c6e85107f3d0d926_crop_186x126.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 10:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/0974d64e5a0b8f4ddd72ff4e0b6564d7_crop_186x126.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 10:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/0974d64e5a0b8f4ddd72ff4e0b6564d7_crop_186x126.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 10:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/3999bf2564374d0e0f3f3ac75e71c04c_crop_186x126.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 10:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/3999bf2564374d0e0f3f3ac75e71c04c_crop_186x126.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 10:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/b5c71cfea56acdab743efa31a73521f8_crop_186x126.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 10:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/products/b5c71cfea56acdab743efa31a73521f8_crop_186x126.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 10:44:25 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ MODPATH/_modules/site/views/site/products_page.php [ 89 ]
2014-04-14 10:44:25 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ MODPATH/_modules/site/views/site/products_page.php [ 89 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-14 10:44:31 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ MODPATH/_modules/site/views/site/products_page.php [ 104 ]
2014-04-14 10:44:31 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ MODPATH/_modules/site/views/site/products_page.php [ 104 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-14 11:02:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond_date ~ MODPATH/_modules/site/classes/controller/company.php [ 385 ]
2014-04-14 11:02:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond_date ~ MODPATH/_modules/site/classes/controller/company.php [ 385 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(385): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 385, Array)
#1 [internal function]: Controller_Company->action_reseller()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 11:02:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond_date ~ MODPATH/_modules/site/classes/controller/company.php [ 385 ]
2014-04-14 11:02:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond_date ~ MODPATH/_modules/site/classes/controller/company.php [ 385 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(385): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 385, Array)
#1 [internal function]: Controller_Company->action_reseller()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 11:03:04 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'news_date' in 'order clause' [ SELECT * FROM `tbl_resellers` WHERE `status` = 'publish' ORDER BY   `news_date` desc LIMIT 16 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-04-14 11:03:04 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'news_date' in 'order clause' [ SELECT * FROM `tbl_resellers` WHERE `status` = 'publish' ORDER BY   `news_date` desc LIMIT 16 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/model/reseller.php(193): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(397): Model_Reseller->find(Array, Array, 16, '')
#2 [internal function]: Controller_Company->action_reseller()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-14 11:27:52 --- ERROR: View_Exception [ 0 ]: The requested view site/solution_detail_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-04-14 11:27:52 --- STRACE: View_Exception [ 0 ]: The requested view site/solution_detail_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('site/solution_d...')
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(30): Kohana_View->__construct('site/solution_d...', NULL)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(161): Kohana_View::factory('site/solution_d...')
#3 [internal function]: Controller_Solution->action_read()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-04-14 11:29:07 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 137 ]
2014-04-14 11:29:07 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 137 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(137): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 137, Array)
#1 [internal function]: Controller_Solution->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 11:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solution-package/package-offered-for-education-office-rental was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-04-14 11:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solution-package/package-offered-for-education-office-rental was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-14 11:29:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solution-package/package-offered-for-education-office-rental was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-04-14 11:29:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solution-package/package-offered-for-education-office-rental was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-14 11:29:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solution-package/package-offered-for-education-office-rental was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-04-14 11:29:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solution-package/package-offered-for-education-office-rental was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-14 11:33:07 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 180 ]
2014-04-14 11:33:07 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 180 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(180): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 180, Array)
#1 [internal function]: Controller_Solution->action_category()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 11:33:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$where_cond' (T_VARIABLE) ~ MODPATH/_modules/site/classes/controller/solution.php [ 175 ]
2014-04-14 11:33:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$where_cond' (T_VARIABLE) ~ MODPATH/_modules/site/classes/controller/solution.php [ 175 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-14 11:33:31 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 181 ]
2014-04-14 11:33:31 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 181 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(181): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 181, Array)
#1 [internal function]: Controller_Solution->action_category()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 11:33:34 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 181 ]
2014-04-14 11:33:34 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 181 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(181): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 181, Array)
#1 [internal function]: Controller_Solution->action_category()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 11:33:49 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_SolutionCategory::load_by_name() ~ MODPATH/_modules/site/classes/controller/solution.php [ 176 ]
2014-04-14 11:33:49 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_SolutionCategory::load_by_name() ~ MODPATH/_modules/site/classes/controller/solution.php [ 176 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-14 11:33:56 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_SolutionCategory::load_by_title() ~ MODPATH/_modules/site/classes/controller/solution.php [ 176 ]
2014-04-14 11:33:56 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_SolutionCategory::load_by_title() ~ MODPATH/_modules/site/classes/controller/solution.php [ 176 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-14 11:34:37 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 180 ]
2014-04-14 11:34:37 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 180 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(180): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 180, Array)
#1 [internal function]: Controller_Solution->action_category()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 11:35:57 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 183 ]
2014-04-14 11:35:57 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 183 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(183): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 183, Array)
#1 [internal function]: Controller_Solution->action_category()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 11:36:08 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Solution::load_by_group() ~ MODPATH/_modules/site/classes/controller/solution.php [ 182 ]
2014-04-14 11:36:08 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Solution::load_by_group() ~ MODPATH/_modules/site/classes/controller/solution.php [ 182 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-14 11:36:51 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$id1 ~ MODPATH/_modules/site/classes/controller/solution.php [ 182 ]
2014-04-14 11:36:51 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$id1 ~ MODPATH/_modules/site/classes/controller/solution.php [ 182 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(182): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 182, Array)
#1 [internal function]: Controller_Solution->action_category()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 11:37:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: page_category ~ MODPATH/_modules/site/classes/controller/solution.php [ 200 ]
2014-04-14 11:37:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: page_category ~ MODPATH/_modules/site/classes/controller/solution.php [ 200 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(200): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 200, Array)
#1 [internal function]: Controller_Solution->action_category()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 11:37:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_files ~ MODPATH/_modules/site/classes/controller/solution.php [ 205 ]
2014-04-14 11:37:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_files ~ MODPATH/_modules/site/classes/controller/solution.php [ 205 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(205): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 205, Array)
#1 [internal function]: Controller_Solution->action_category()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 11:37:31 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 195 ]
2014-04-14 11:37:31 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 195 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(195): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 195, Array)
#1 [internal function]: Controller_Solution->action_category()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 11:37:38 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 195 ]
2014-04-14 11:37:38 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 195 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(195): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 195, Array)
#1 [internal function]: Controller_Solution->action_category()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 11:41:58 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/solution_category_page.php [ 20 ]
2014-04-14 11:41:58 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/solution_category_page.php [ 20 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_category_page.php(20): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 20, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Solution))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 11:42:22 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/solution_category_page.php [ 20 ]
2014-04-14 11:42:22 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/solution_category_page.php [ 20 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_category_page.php(20): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 20, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Solution))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 11:42:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: solution_category ~ MODPATH/_modules/site/views/site/solution_category_page.php [ 20 ]
2014-04-14 11:42:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: solution_category ~ MODPATH/_modules/site/views/site/solution_category_page.php [ 20 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_category_page.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 20, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Solution))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 11:52:31 --- ERROR: ErrorException [ 8 ]: Undefined index: combination1 ~ MODPATH/_modules/solution/views/solution/backend/solution_add.php [ 56 ]
2014-04-14 11:52:31 --- STRACE: ErrorException [ 8 ]: Undefined index: combination1 ~ MODPATH/_modules/solution/views/solution/backend/solution_add.php [ 56 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solution_add.php(56): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 56, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-14 11:53:15 --- ERROR: ErrorException [ 8 ]: Undefined index: combination1 ~ MODPATH/_modules/solution/views/solution/backend/solution_add.php [ 56 ]
2014-04-14 11:53:15 --- STRACE: ErrorException [ 8 ]: Undefined index: combination1 ~ MODPATH/_modules/solution/views/solution/backend/solution_add.php [ 56 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solution_add.php(56): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 56, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-14 12:13:57 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/site/classes/controller/solution.php [ 194 ]
2014-04-14 12:13:57 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/site/classes/controller/solution.php [ 194 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-14 12:14:06 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/solution_category_page.php [ 26 ]
2014-04-14 12:14:06 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/solution_category_page.php [ 26 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_category_page.php(26): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 26, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Solution))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 12:18:53 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Solution::$title ~ MODPATH/_modules/site/views/site/solution_category_page.php [ 26 ]
2014-04-14 12:18:53 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Solution::$title ~ MODPATH/_modules/site/views/site/solution_category_page.php [ 26 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_category_page.php(26): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 26, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Solution))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 12:22:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: active ~ MODPATH/_modules/site/views/site/solution_category_page.php [ 12 ]
2014-04-14 12:22:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: active ~ MODPATH/_modules/site/views/site/solution_category_page.php [ 12 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_category_page.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 12, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Solution))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 12:23:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: active ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 12 ]
2014-04-14 12:23:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: active ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 12 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_detail_page.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 12, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Solution))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 12:23:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: solution_category ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 20 ]
2014-04-14 12:23:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: solution_category ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 20 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_detail_page.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 20, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Solution))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 12:24:38 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 20 ]
2014-04-14 12:24:38 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 20 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_detail_page.php(20): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 20, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Solution))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 12:25:09 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 20 ]
2014-04-14 12:25:09 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 20 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_detail_page.php(20): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 20, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Solution))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 12:25:10 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 20 ]
2014-04-14 12:25:10 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 20 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_detail_page.php(20): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 20, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Solution))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 12:25:24 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 20 ]
2014-04-14 12:25:24 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 20 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_detail_page.php(20): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 20, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Solution))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 12:25:39 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 20 ]
2014-04-14 12:25:39 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 20 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_detail_page.php(20): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 20, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Solution))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 12:26:15 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Solution::$title ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 24 ]
2014-04-14 12:26:15 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Solution::$title ~ MODPATH/_modules/site/views/site/solution_detail_page.php [ 24 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_detail_page.php(24): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 24, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Solution))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 12:27:02 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 137 ]
2014-04-14 12:27:02 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 137 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(137): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 137, Array)
#1 [internal function]: Controller_Solution->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 12:34:07 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL:: site() ~ MODPATH/_modules/site/views/site/solution_category_page.php [ 32 ]
2014-04-14 12:34:07 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL:: site() ~ MODPATH/_modules/site/views/site/solution_category_page.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-14 12:34:16 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL:: site() ~ MODPATH/_modules/site/views/site/solution_category_page.php [ 32 ]
2014-04-14 12:34:16 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL:: site() ~ MODPATH/_modules/site/views/site/solution_category_page.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-14 12:34:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/8e1514b8a37220694e4e0a84562ad2fe.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 12:34:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/8e1514b8a37220694e4e0a84562ad2fe.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 12:34:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/cd68a885042890d13b22748a30c3c333.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 12:34:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/cd68a885042890d13b22748a30c3c333.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 12:34:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/cd68a885042890d13b22748a30c3c333.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 12:34:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/cd68a885042890d13b22748a30c3c333.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 12:34:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/8e1514b8a37220694e4e0a84562ad2fe.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 12:34:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/8e1514b8a37220694e4e0a84562ad2fe.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 12:38:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 12:38:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 12:38:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/8e1514b8a37220694e4e0a84562ad2fe_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 12:38:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/8e1514b8a37220694e4e0a84562ad2fe_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 12:38:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 12:38:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 12:38:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/8e1514b8a37220694e4e0a84562ad2fe_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 12:38:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/8e1514b8a37220694e4e0a84562ad2fe_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 12:38:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 12:38:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 12:38:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/8e1514b8a37220694e4e0a84562ad2fe_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 12:38:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/8e1514b8a37220694e4e0a84562ad2fe_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 12:38:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 12:38:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 12:38:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/8e1514b8a37220694e4e0a84562ad2fe_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 12:38:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/8e1514b8a37220694e4e0a84562ad2fe_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 12:38:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/8e1514b8a37220694e4e0a84562ad2fe_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 12:38:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/8e1514b8a37220694e4e0a84562ad2fe_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 12:38:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 12:38:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 12:38:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/8e1514b8a37220694e4e0a84562ad2fe_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 12:38:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/8e1514b8a37220694e4e0a84562ad2fe_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 12:38:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 12:38:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 12:38:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 12:38:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 12:38:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/8e1514b8a37220694e4e0a84562ad2fe_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 12:38:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/8e1514b8a37220694e4e0a84562ad2fe_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 12:38:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 12:38:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 12:38:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/8e1514b8a37220694e4e0a84562ad2fe_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 12:38:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/8e1514b8a37220694e4e0a84562ad2fe_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 12:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/8e1514b8a37220694e4e0a84562ad2fe_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 12:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/8e1514b8a37220694e4e0a84562ad2fe_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 12:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 12:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/solutions/cd68a885042890d13b22748a30c3c333_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 12:41:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: product ~ MODPATH/_modules/site/views/site/solution_category_page.php [ 36 ]
2014-04-14 12:41:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: product ~ MODPATH/_modules/site/views/site/solution_category_page.php [ 36 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_category_page.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 36, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Solution))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-14 12:51:19 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 137 ]
2014-04-14 12:51:19 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 137 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(137): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 137, Array)
#1 [internal function]: Controller_Solution->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 12:51:58 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 137 ]
2014-04-14 12:51:58 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 137 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(137): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 137, Array)
#1 [internal function]: Controller_Solution->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 12:52:01 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 137 ]
2014-04-14 12:52:01 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 137 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(137): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 137, Array)
#1 [internal function]: Controller_Solution->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 12:52:02 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 137 ]
2014-04-14 12:52:02 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 137 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(137): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 137, Array)
#1 [internal function]: Controller_Solution->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 12:52:42 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 137 ]
2014-04-14 12:52:42 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 137 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(137): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 137, Array)
#1 [internal function]: Controller_Solution->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 12:52:42 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 137 ]
2014-04-14 12:52:42 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 137 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(137): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 137, Array)
#1 [internal function]: Controller_Solution->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 12:59:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: solution_category ~ MODPATH/_modules/site/classes/controller/solution.php [ 77 ]
2014-04-14 12:59:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: solution_category ~ MODPATH/_modules/site/classes/controller/solution.php [ 77 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(77): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 77, Array)
#1 [internal function]: Controller_Solution->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 12:59:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: solution_category ~ MODPATH/_modules/site/classes/controller/solution.php [ 77 ]
2014-04-14 12:59:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: solution_category ~ MODPATH/_modules/site/classes/controller/solution.php [ 77 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(77): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 77, Array)
#1 [internal function]: Controller_Solution->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 12:59:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: solution ~ MODPATH/_modules/site/classes/controller/solution.php [ 94 ]
2014-04-14 12:59:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: solution ~ MODPATH/_modules/site/classes/controller/solution.php [ 94 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(94): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 94, Array)
#1 [internal function]: Controller_Solution->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 12:59:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/cd68a885042890d13b22748a30c3c333_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 12:59:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/cd68a885042890d13b22748a30c3c333_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 12:59:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/8e1514b8a37220694e4e0a84562ad2fe_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 12:59:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/8e1514b8a37220694e4e0a84562ad2fe_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 12:59:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/cd68a885042890d13b22748a30c3c333_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 12:59:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/cd68a885042890d13b22748a30c3c333_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 12:59:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/8e1514b8a37220694e4e0a84562ad2fe_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 12:59:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/8e1514b8a37220694e4e0a84562ad2fe_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 13:00:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/cd68a885042890d13b22748a30c3c333_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 13:00:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/cd68a885042890d13b22748a30c3c333_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 13:00:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/8e1514b8a37220694e4e0a84562ad2fe_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 13:00:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/8e1514b8a37220694e4e0a84562ad2fe_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 13:00:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/8e1514b8a37220694e4e0a84562ad2fe_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 13:00:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/8e1514b8a37220694e4e0a84562ad2fe_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 13:00:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/cd68a885042890d13b22748a30c3c333_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 13:00:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pages/cd68a885042890d13b22748a30c3c333_crop_169x151.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 13:05:15 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'site' (T_STRING) ~ MODPATH/_modules/site/classes/controller/company.php [ 174 ]
2014-04-14 13:05:15 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'site' (T_STRING) ~ MODPATH/_modules/site/classes/controller/company.php [ 174 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-14 13:07:59 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_News::$description ~ MODPATH/_modules/site/classes/controller/company.php [ 350 ]
2014-04-14 13:07:59 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_News::$description ~ MODPATH/_modules/site/classes/controller/company.php [ 350 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(350): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 350, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(182): Controller_Company->_read_news('test-news-one-t...')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-14 13:08:04 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_News::$title ~ MODPATH/_modules/site/classes/controller/company.php [ 352 ]
2014-04-14 13:08:04 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_News::$title ~ MODPATH/_modules/site/classes/controller/company.php [ 352 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(352): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 352, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(182): Controller_Company->_read_news('test-news-one-t...')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-14 13:11:28 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$subject ~ MODPATH/_modules/site/classes/controller/company.php [ 448 ]
2014-04-14 13:11:28 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$subject ~ MODPATH/_modules/site/classes/controller/company.php [ 448 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(448): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 448, Array)
#1 [internal function]: Controller_Company->action_reseller()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 13:11:38 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$text ~ MODPATH/_modules/site/classes/controller/company.php [ 446 ]
2014-04-14 13:11:38 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$text ~ MODPATH/_modules/site/classes/controller/company.php [ 446 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(446): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 446, Array)
#1 [internal function]: Controller_Company->action_reseller()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 13:13:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$type' (T_VARIABLE) ~ MODPATH/_modules/site/classes/controller/download.php [ 261 ]
2014-04-14 13:13:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$type' (T_VARIABLE) ~ MODPATH/_modules/site/classes/controller/download.php [ 261 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-14 13:14:10 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$title ~ MODPATH/_modules/site/classes/controller/download.php [ 261 ]
2014-04-14 13:14:10 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$title ~ MODPATH/_modules/site/classes/controller/download.php [ 261 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/download.php(261): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 261, Array)
#1 [internal function]: Controller_Download->action_type()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Download))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 13:17:25 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$title ~ MODPATH/_modules/site/classes/controller/products.php [ 359 ]
2014-04-14 13:17:25 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$title ~ MODPATH/_modules/site/classes/controller/products.php [ 359 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(359): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 359, Array)
#1 [internal function]: Controller_Products->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 13:17:33 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$title ~ MODPATH/_modules/site/classes/controller/products.php [ 359 ]
2014-04-14 13:17:33 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$title ~ MODPATH/_modules/site/classes/controller/products.php [ 359 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(359): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 359, Array)
#1 [internal function]: Controller_Products->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 13:19:16 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$subject ~ MODPATH/_modules/site/classes/controller/solution.php [ 232 ]
2014-04-14 13:19:16 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$subject ~ MODPATH/_modules/site/classes/controller/solution.php [ 232 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(232): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 232, Array)
#1 [internal function]: Controller_Solution->action_category()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 13:20:07 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Solution::$title ~ MODPATH/_modules/site/classes/controller/solution.php [ 173 ]
2014-04-14 13:20:07 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Solution::$title ~ MODPATH/_modules/site/classes/controller/solution.php [ 173 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(173): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 173, Array)
#1 [internal function]: Controller_Solution->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 13:27:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-14 13:27:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-14 13:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL company/about-us was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-04-14 13:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL company/about-us was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-14 13:37:04 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/classes/controller/search.php [ 113 ]
2014-04-14 13:37:04 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/classes/controller/search.php [ 113 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/search.php(113): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 113, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Search))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 13:37:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL product/read/test-two-learner was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-14 13:37:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL product/read/test-two-learner was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-14 13:49:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: class_name ~ MODPATH/_modules/page/views/page/backend/page_add.php [ 131 ]
2014-04-14 13:49:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: class_name ~ MODPATH/_modules/page/views/page/backend/page_add.php [ 131 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/views/page/backend/page_add.php(131): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 131, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-14 13:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 13:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 13:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 13:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 13:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 13:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 13:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 13:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 13:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 13:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 13:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 13:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 13:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 13:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/general.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 13:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 13:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 13:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-14 13:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-14 13:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL userhistory was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-14 13:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL userhistory was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-14 13:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL userhistory was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-14 13:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL userhistory was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-14 13:59:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL userhistory was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-14 13:59:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL userhistory was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-14 13:59:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL userhistory was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-14 13:59:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL userhistory was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-14 14:00:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL userhistory was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-14 14:00:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL userhistory was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-14 14:00:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL userhistory was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-14 14:00:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL userhistory was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-14 14:01:11 --- ERROR: Kohana_Exception [ 0 ]: There is no table tbl_urls available ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 308 ]
2014-04-14 14:01:11 --- STRACE: Kohana_Exception [ 0 ]: There is no table tbl_urls available ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 308 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(76): Model_UserDashboard->find_top_count(Array)
#1 [internal function]: Controller_Backend_UserDashboard->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 14:09:18 --- ERROR: Kohana_Exception [ 0 ]: There is no table tbl_urls available ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 308 ]
2014-04-14 14:09:18 --- STRACE: Kohana_Exception [ 0 ]: There is no table tbl_urls available ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 308 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(33): Model_UserDashboard->find_top_count(Array)
#1 [internal function]: Controller_Backend_UserDashboard->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 14:09:42 --- ERROR: Kohana_Exception [ 0 ]: There is no table tbl_product available ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 308 ]
2014-04-14 14:09:42 --- STRACE: Kohana_Exception [ 0 ]: There is no table tbl_product available ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 308 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(33): Model_UserDashboard->find_top_count(Array)
#1 [internal function]: Controller_Backend_UserDashboard->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 14:09:44 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'clicks' in 'field list' [ SELECT MAX(`clicks`) as `count`, keywords, url FROM `tbl_products` GROUP BY url ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-04-14 14:09:44 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'clicks' in 'field list' [ SELECT MAX(`clicks`) as `count`, keywords, url FROM `tbl_products` GROUP BY url ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cli...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(33): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-14 14:09:51 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'keywords' in 'field list' [ SELECT MAX(`count`) as `count`, keywords, url FROM `tbl_products` GROUP BY url ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-04-14 14:09:51 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'keywords' in 'field list' [ SELECT MAX(`count`) as `count`, keywords, url FROM `tbl_products` GROUP BY url ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cou...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(33): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-14 14:10:09 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'title' in 'field list' [ SELECT MAX(`count`) as `count`, title FROM `tbl_products` GROUP BY title ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-04-14 14:10:09 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'title' in 'field list' [ SELECT MAX(`count`) as `count`, title FROM `tbl_products` GROUP BY title ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cou...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(33): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-14 14:10:15 --- ERROR: Kohana_Exception [ 0 ]: There is no table tbl_url_logs available ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 308 ]
2014-04-14 14:10:15 --- STRACE: Kohana_Exception [ 0 ]: There is no table tbl_url_logs available ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 308 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(43): Model_UserDashboard->find_top_count(Array)
#1 [internal function]: Controller_Backend_UserDashboard->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 14:10:51 --- ERROR: Kohana_Exception [ 0 ]: There is no table tbl_url_logs available ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 308 ]
2014-04-14 14:10:51 --- STRACE: Kohana_Exception [ 0 ]: There is no table tbl_url_logs available ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 308 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(43): Model_UserDashboard->find_top_count(Array)
#1 [internal function]: Controller_Backend_UserDashboard->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 14:11:10 --- ERROR: Kohana_Exception [ 0 ]: There is no table tbl_url_logs available ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 308 ]
2014-04-14 14:11:10 --- STRACE: Kohana_Exception [ 0 ]: There is no table tbl_url_logs available ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 308 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(43): Model_UserDashboard->find_top_count(Array)
#1 [internal function]: Controller_Backend_UserDashboard->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 14:11:20 --- ERROR: Kohana_Exception [ 0 ]: There is no table tbl_url_newsevent available ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 308 ]
2014-04-14 14:11:20 --- STRACE: Kohana_Exception [ 0 ]: There is no table tbl_url_newsevent available ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 308 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(43): Model_UserDashboard->find_top_count(Array)
#1 [internal function]: Controller_Backend_UserDashboard->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 14:11:23 --- ERROR: Kohana_Exception [ 0 ]: There is no table tbl_url_newsevents available ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 308 ]
2014-04-14 14:11:23 --- STRACE: Kohana_Exception [ 0 ]: There is no table tbl_url_newsevents available ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 308 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(43): Model_UserDashboard->find_top_count(Array)
#1 [internal function]: Controller_Backend_UserDashboard->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 14:11:34 --- ERROR: Kohana_Exception [ 0 ]: There is no table tbl_url_news available ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 308 ]
2014-04-14 14:11:34 --- STRACE: Kohana_Exception [ 0 ]: There is no table tbl_url_news available ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 308 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(43): Model_UserDashboard->find_top_count(Array)
#1 [internal function]: Controller_Backend_UserDashboard->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 14:11:42 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'user_agent' in 'field list' [ SELECT COUNT(`user_agent`) as `count`, user_agent FROM `tbl_news` GROUP BY user_agent ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-04-14 14:11:42 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'user_agent' in 'field list' [ SELECT COUNT(`user_agent`) as `count`, user_agent FROM `tbl_news` GROUP BY user_agent ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`u...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(43): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-14 14:11:50 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'user_agent' in 'field list' [ SELECT COUNT(`count`) as `count`, user_agent FROM `tbl_news` GROUP BY user_agent ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-04-14 14:11:50 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'user_agent' in 'field list' [ SELECT COUNT(`count`) as `count`, user_agent FROM `tbl_news` GROUP BY user_agent ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`c...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(43): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-14 14:11:53 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'title' in 'field list' [ SELECT COUNT(`count`) as `count`, title FROM `tbl_news` GROUP BY user_agent ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-04-14 14:11:53 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'title' in 'field list' [ SELECT COUNT(`count`) as `count`, title FROM `tbl_news` GROUP BY user_agent ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`c...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(43): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-14 14:11:58 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'user_agent' in 'group statement' [ SELECT COUNT(`count`) as `count`, subject FROM `tbl_news` GROUP BY user_agent ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-04-14 14:11:58 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'user_agent' in 'group statement' [ SELECT COUNT(`count`) as `count`, subject FROM `tbl_news` GROUP BY user_agent ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`c...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(43): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-14 14:12:03 --- ERROR: Kohana_Exception [ 0 ]: There is no table tbl_url_logs available ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 308 ]
2014-04-14 14:12:03 --- STRACE: Kohana_Exception [ 0 ]: There is no table tbl_url_logs available ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 308 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(53): Model_UserDashboard->find_top_count(Array)
#1 [internal function]: Controller_Backend_UserDashboard->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 14:13:28 --- ERROR: Kohana_Exception [ 0 ]: There is no table tbl_solution available ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 308 ]
2014-04-14 14:13:28 --- STRACE: Kohana_Exception [ 0 ]: There is no table tbl_solution available ~ MODPATH/_modules/user/classes/model/userdashboard.php [ 308 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(53): Model_UserDashboard->find_top_count(Array)
#1 [internal function]: Controller_Backend_UserDashboard->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-14 14:13:31 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'title' in 'field list' [ SELECT COUNT(`count`) AS count, title FROM `tbl_solutions` GROUP BY ip_address ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-04-14 14:13:31 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'title' in 'field list' [ SELECT COUNT(`count`) AS count, title FROM `tbl_solutions` GROUP BY ip_address ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`c...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(53): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-14 14:13:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: article_top_ten_hits ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 8 ]
2014-04-14 14:13:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: article_top_ten_hits ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 8 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/backend/userdashboard_index.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 8, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-14 14:14:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: article_top_ten_hits ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 8 ]
2014-04-14 14:14:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: article_top_ten_hits ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 8 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/backend/userdashboard_index.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 8, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-14 14:14:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_top_ten_hits ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 8 ]
2014-04-14 14:14:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_top_ten_hits ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 8 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/backend/userdashboard_index.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 8, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-14 14:15:08 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$hits ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 10 ]
2014-04-14 14:15:08 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$hits ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 10 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/backend/userdashboard_index.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 10, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-14 14:15:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: media_top_ten_hits ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 50 ]
2014-04-14 14:15:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: media_top_ten_hits ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 50 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/backend/userdashboard_index.php(50): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 50, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-14 14:16:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: news_top_ten ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 50 ]
2014-04-14 14:16:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: news_top_ten ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 50 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/backend/userdashboard_index.php(50): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 50, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-14 14:16:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: news_top_ten ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 50 ]
2014-04-14 14:16:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: news_top_ten ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 50 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/backend/userdashboard_index.php(50): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 50, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-14 14:16:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: download_top_ten_hits ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 87 ]
2014-04-14 14:16:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: download_top_ten_hits ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/backend/userdashboard_index.php(87): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 87, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-14 14:18:55 --- ERROR: View_Exception [ 0 ]: The requested view userdashboard/widget/stats_dashboard could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-04-14 14:18:55 --- STRACE: View_Exception [ 0 ]: The requested view userdashboard/widget/stats_dashboard could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('userdashboard/w...')
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(30): Kohana_View->__construct('userdashboard/w...', NULL)
#2 /Volumes/Data/www/offistarindo/_app/classes/widget.php(38): Kohana_View::factory('userdashboard/w...')
#3 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/backend/userdashboard_index.php(159): Widget->load('stats_dashboard', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#7 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#12 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(65): Controller_Themes_DefaultAdmin->after()
#13 [internal function]: Controller_Backend_BaseAdmin->after()
#14 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#15 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#17 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#18 {main}
2014-04-14 14:19:47 --- ERROR: View_Exception [ 0 ]: The requested view userdashboard/widget/stats_dashboard could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-04-14 14:19:47 --- STRACE: View_Exception [ 0 ]: The requested view userdashboard/widget/stats_dashboard could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('userdashboard/w...')
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(30): Kohana_View->__construct('userdashboard/w...', NULL)
#2 /Volumes/Data/www/offistarindo/_app/classes/widget.php(38): Kohana_View::factory('userdashboard/w...')
#3 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/backend/userdashboard_index.php(159): Widget->load('stats_dashboard', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#7 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#12 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(65): Controller_Themes_DefaultAdmin->after()
#13 [internal function]: Controller_Backend_BaseAdmin->after()
#14 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#15 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#17 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#18 {main}
2014-04-14 14:20:05 --- ERROR: View_Exception [ 0 ]: The requested view userdashboard/widget/stats_dashboard could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-04-14 14:20:05 --- STRACE: View_Exception [ 0 ]: The requested view userdashboard/widget/stats_dashboard could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('userdashboard/w...')
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(30): Kohana_View->__construct('userdashboard/w...', NULL)
#2 /Volumes/Data/www/offistarindo/_app/classes/widget.php(38): Kohana_View::factory('userdashboard/w...')
#3 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/backend/userdashboard_index.php(159): Widget->load('stats_dashboard', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#7 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#12 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(65): Controller_Themes_DefaultAdmin->after()
#13 [internal function]: Controller_Backend_BaseAdmin->after()
#14 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#15 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#17 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#18 {main}
2014-04-14 14:20:28 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$hits ~ MODPATH/_modules/user/views/User/widget/stats_dashboard.php [ 19 ]
2014-04-14 14:20:28 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$hits ~ MODPATH/_modules/user/views/User/widget/stats_dashboard.php [ 19 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/User/widget/stats_dashboard.php(19): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 19, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/backend/userdashboard_index.php(159): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#13 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(65): Controller_Themes_DefaultAdmin->after()
#14 [internal function]: Controller_Backend_BaseAdmin->after()
#15 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#16 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#18 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#19 {main}
2014-04-14 14:21:00 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$hits ~ MODPATH/_modules/user/views/user/widget/stats_dashboard.php [ 19 ]
2014-04-14 14:21:00 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$hits ~ MODPATH/_modules/user/views/user/widget/stats_dashboard.php [ 19 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/widget/stats_dashboard.php(19): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 19, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/backend/userdashboard_index.php(159): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#13 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(65): Controller_Themes_DefaultAdmin->after()
#14 [internal function]: Controller_Backend_BaseAdmin->after()
#15 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#16 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#18 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#19 {main}
2014-04-14 14:21:11 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$hits ~ MODPATH/_modules/user/views/user/widget/stats_file_dashboard.php [ 19 ]
2014-04-14 14:21:11 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$hits ~ MODPATH/_modules/user/views/user/widget/stats_file_dashboard.php [ 19 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/widget/stats_file_dashboard.php(19): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 19, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/backend/userdashboard_index.php(169): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#13 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(65): Controller_Themes_DefaultAdmin->after()
#14 [internal function]: Controller_Backend_BaseAdmin->after()
#15 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#16 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#18 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#19 {main}
2014-04-14 14:21:19 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$file_name ~ MODPATH/_modules/user/views/user/widget/stats_file_dashboard.php [ 20 ]
2014-04-14 14:21:19 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$file_name ~ MODPATH/_modules/user/views/user/widget/stats_file_dashboard.php [ 20 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/widget/stats_file_dashboard.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 20, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/backend/userdashboard_index.php(169): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#13 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(65): Controller_Themes_DefaultAdmin->after()
#14 [internal function]: Controller_Backend_BaseAdmin->after()
#15 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#16 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#18 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#19 {main}
2014-04-14 14:21:41 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$hits ~ MODPATH/_modules/user/views/user/widget/stats_dashboard.php [ 19 ]
2014-04-14 14:21:41 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$hits ~ MODPATH/_modules/user/views/user/widget/stats_dashboard.php [ 19 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/widget/stats_dashboard.php(19): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 19, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/backend/userdashboard_index.php(159): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#13 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(65): Controller_Themes_DefaultAdmin->after()
#14 [internal function]: Controller_Backend_BaseAdmin->after()
#15 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#16 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#18 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#19 {main}
2014-04-14 14:38:50 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 246 ]
2014-04-14 14:38:50 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 246 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(246): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 246, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(148): Controller_Solution->_count_viewers('3')
#2 [internal function]: Controller_Solution->action_read()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-14 14:39:15 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH/_modules/site/classes/controller/solution.php [ 244 ]
2014-04-14 14:39:15 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH/_modules/site/classes/controller/solution.php [ 244 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-14 14:39:16 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 246 ]
2014-04-14 14:39:16 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 246 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(246): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 246, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(148): Controller_Solution->_count_viewers('3')
#2 [internal function]: Controller_Solution->action_read()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-14 14:39:29 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 246 ]
2014-04-14 14:39:29 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 246 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(246): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 246, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(148): Controller_Solution->_count_viewers('3')
#2 [internal function]: Controller_Solution->action_read()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-14 14:39:45 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 246 ]
2014-04-14 14:39:45 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 246 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(246): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 246, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(148): Controller_Solution->_count_viewers('3')
#2 [internal function]: Controller_Solution->action_read()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-14 14:40:14 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 247 ]
2014-04-14 14:40:14 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 247 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(247): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 247, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(148): Controller_Solution->_count_viewers('3')
#2 [internal function]: Controller_Solution->action_read()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-14 14:41:27 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 248 ]
2014-04-14 14:41:27 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 248 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(248): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 248, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(148): Controller_Solution->_count_viewers('3')
#2 [internal function]: Controller_Solution->action_read()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-14 14:41:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '/' ~ MODPATH/_modules/site/classes/controller/solution.php [ 246 ]
2014-04-14 14:41:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '/' ~ MODPATH/_modules/site/classes/controller/solution.php [ 246 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-14 14:41:39 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 248 ]
2014-04-14 14:41:39 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 248 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(248): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 248, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(148): Controller_Solution->_count_viewers('3')
#2 [internal function]: Controller_Solution->action_read()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-14 14:41:50 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 248 ]
2014-04-14 14:41:50 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 248 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(248): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 248, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(148): Controller_Solution->_count_viewers('3')
#2 [internal function]: Controller_Solution->action_read()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-14 14:41:50 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 248 ]
2014-04-14 14:41:50 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 248 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(248): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 248, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(148): Controller_Solution->_count_viewers('3')
#2 [internal function]: Controller_Solution->action_read()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-14 14:41:58 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 248 ]
2014-04-14 14:41:58 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 248 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(248): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 248, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(148): Controller_Solution->_count_viewers('3')
#2 [internal function]: Controller_Solution->action_read()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-14 14:42:18 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 248 ]
2014-04-14 14:42:18 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 248 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(248): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 248, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(148): Controller_Solution->_count_viewers('3')
#2 [internal function]: Controller_Solution->action_read()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-14 14:44:40 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$count ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 10 ]
2014-04-14 14:44:40 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$count ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 10 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/backend/userdashboard_index.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 10, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-14 14:48:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: news_event ~ MODPATH/_modules/site/classes/controller/company.php [ 324 ]
2014-04-14 14:48:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: news_event ~ MODPATH/_modules/site/classes/controller/company.php [ 324 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(324): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 324, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(182): Controller_Company->_read_news('test-news-one-t...')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}