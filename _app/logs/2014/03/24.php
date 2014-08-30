<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-24 00:01:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: key ~ MODPATH/_modules/product/views/product/backend/productcategory_edit.php [ 330 ] in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_edit.php:330
2014-03-24 00:01:18 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_edit.php(330): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 330, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/DefaultAdmin.php(100): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/Controller/Backend/BaseAdmin.php(65): Controller_Themes_DefaultAdmin->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Backend_BaseAdmin->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#16 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_edit.php:330
2014-03-24 00:01:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: key ~ MODPATH/_modules/product/views/product/backend/productcategory_edit.php [ 330 ] in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_edit.php:330
2014-03-24 00:01:37 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_edit.php(330): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 330, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/DefaultAdmin.php(100): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/Controller/Backend/BaseAdmin.php(65): Controller_Themes_DefaultAdmin->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Backend_BaseAdmin->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#16 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_edit.php:330
2014-03-24 00:44:55 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 00:44:55 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 00:44:56 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 00:44:56 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 00:45:10 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 00:45:10 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 00:45:11 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 00:45:11 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 00:45:19 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 00:45:19 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 00:45:19 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 00:45:19 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 00:45:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: category_id ~ MODPATH/_modules/product/views/product/backend/product_index.php [ 2 ] in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_index.php:2
2014-03-24 00:45:34 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_index.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 2, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/DefaultAdmin.php(100): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/Controller/Backend/BaseAdmin.php(65): Controller_Themes_DefaultAdmin->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Backend_BaseAdmin->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#16 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_index.php:2
2014-03-24 00:47:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: class_name ~ MODPATH/_modules/product/views/Product/backend/Product_add.php [ 9 ] in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/Product/backend/Product_add.php:9
2014-03-24 00:47:17 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/Product/backend/Product_add.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 9, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/DefaultAdmin.php(100): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/Controller/Backend/BaseAdmin.php(65): Controller_Themes_DefaultAdmin->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Backend_BaseAdmin->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#16 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/Product/backend/Product_add.php:9
2014-03-24 00:47:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: class_name ~ MODPATH/_modules/product/views/product/backend/product_add.php [ 9 ] in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_add.php:9
2014-03-24 00:47:38 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_add.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 9, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/DefaultAdmin.php(100): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/Controller/Backend/BaseAdmin.php(65): Controller_Themes_DefaultAdmin->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Backend_BaseAdmin->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#16 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_add.php:9
2014-03-24 00:48:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: class_name ~ MODPATH/_modules/product/views/product/backend/product_add.php [ 9 ] in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_add.php:9
2014-03-24 00:48:00 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_add.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 9, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/DefaultAdmin.php(100): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/Controller/Backend/BaseAdmin.php(65): Controller_Themes_DefaultAdmin->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Backend_BaseAdmin->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#16 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_add.php:9
2014-03-24 00:48:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: class_name ~ MODPATH/_modules/product/views/product/backend/product_add.php [ 9 ] in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_add.php:9
2014-03-24 00:48:16 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_add.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 9, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/DefaultAdmin.php(100): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/Controller/Backend/BaseAdmin.php(65): Controller_Themes_DefaultAdmin->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Backend_BaseAdmin->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#16 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_add.php:9
2014-03-24 00:48:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: class_name ~ MODPATH/_modules/product/views/product/backend/product_add.php [ 9 ] in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_add.php:9
2014-03-24 00:48:46 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_add.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 9, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/DefaultAdmin.php(100): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/Controller/Backend/BaseAdmin.php(65): Controller_Themes_DefaultAdmin->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Backend_BaseAdmin->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#16 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_add.php:9
2014-03-24 00:49:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: class_name ~ MODPATH/_modules/product/views/product/backend/product_add.php [ 9 ] in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_add.php:9
2014-03-24 00:49:00 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_add.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 9, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/DefaultAdmin.php(100): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/Controller/Backend/BaseAdmin.php(65): Controller_Themes_DefaultAdmin->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Backend_BaseAdmin->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#16 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_add.php:9
2014-03-24 00:49:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: class_name ~ MODPATH/_modules/product/views/product/backend/product_add.php [ 9 ] in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_add.php:9
2014-03-24 00:49:06 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_add.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 9, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/DefaultAdmin.php(100): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/Controller/Backend/BaseAdmin.php(65): Controller_Themes_DefaultAdmin->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Backend_BaseAdmin->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#16 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_add.php:9
2014-03-24 00:49:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: description ~ MODPATH/_modules/product/views/product/backend/product_add.php [ 45 ] in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_add.php:45
2014-03-24 00:49:49 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_add.php(45): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/DefaultAdmin.php(100): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/Controller/Backend/BaseAdmin.php(65): Controller_Themes_DefaultAdmin->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Backend_BaseAdmin->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#16 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_add.php:45
2014-03-24 00:51:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: description ~ MODPATH/_modules/product/views/product/backend/product_add.php [ 45 ] in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_add.php:45
2014-03-24 00:51:08 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_add.php(45): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/DefaultAdmin.php(100): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/Controller/Backend/BaseAdmin.php(65): Controller_Themes_DefaultAdmin->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Backend_BaseAdmin->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#16 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_add.php:45
2014-03-24 00:54:26 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'synopsis' in 'field list' [ INSERT INTO `tbl_products` (`category_id`, `name`, `subject`, `description`, `sub_level`, `is_system`, `user_id`, `order`, `count`, `status`, `added`, `modified`, `synopsis`, `attribute`, `publish_date`, `unpublish_date`, `allow_comment`, `tags`) VALUES ('25', 'promethean-300pro', 'Promethean 300Pro', '\n	Promethean 300Pro\n', 0, 0, 0, 0, 0, 'publish', 1395597266, 0, '', '', '0000-00-00', '0000-00-00', 0, '') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Volumes/Data/www/offistarindo/_mod/database/classes/Kohana/Database/Query.php:251
2014-03-24 00:54:26 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `tb...', false, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/Model/Product.php(100): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/Controller/Backend/Product.php(233): Model_Product->add(Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_Product->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#9 {main} in /Volumes/Data/www/offistarindo/_mod/database/classes/Kohana/Database/Query.php:251
2014-03-24 00:56:00 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'attribute' in 'field list' [ INSERT INTO `tbl_products` (`category_id`, `name`, `subject`, `description`, `sub_level`, `is_system`, `user_id`, `order`, `count`, `status`, `added`, `modified`, `attribute`, `publish_date`, `unpublish_date`, `allow_comment`, `tags`) VALUES ('25', 'promethean-300pro', 'Promethean 300Pro', '\n	Promethean 300Pro\n', 0, 0, 0, 0, 0, 'publish', 1395597360, 0, '', '0000-00-00', '0000-00-00', 0, '') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Volumes/Data/www/offistarindo/_mod/database/classes/Kohana/Database/Query.php:251
2014-03-24 00:56:00 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `tb...', false, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/Model/Product.php(100): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/Controller/Backend/Product.php(231): Model_Product->add(Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_Product->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#9 {main} in /Volumes/Data/www/offistarindo/_mod/database/classes/Kohana/Database/Query.php:251
2014-03-24 00:59:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: class_name ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 5 ] in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_view.php:5
2014-03-24 00:59:00 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_view.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 5, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/DefaultAdmin.php(100): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/Controller/Backend/BaseAdmin.php(65): Controller_Themes_DefaultAdmin->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Backend_BaseAdmin->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#16 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_view.php:5
2014-03-24 00:59:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: upload_path ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 31 ] in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_view.php:31
2014-03-24 00:59:42 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_view.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 31, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/DefaultAdmin.php(100): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/Controller/Backend/BaseAdmin.php(65): Controller_Themes_DefaultAdmin->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Backend_BaseAdmin->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#16 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_view.php:31
2014-03-24 00:59:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: class_name ~ MODPATH/_modules/product/views/product/backend/product_edit.php [ 6 ] in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_edit.php:6
2014-03-24 00:59:45 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_edit.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 6, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/DefaultAdmin.php(100): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/Controller/Backend/BaseAdmin.php(65): Controller_Themes_DefaultAdmin->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Backend_BaseAdmin->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#16 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_edit.php:6
2014-03-24 01:00:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: upload_path ~ MODPATH/_modules/product/views/product/backend/product_edit.php [ 60 ] in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_edit.php:60
2014-03-24 01:00:15 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_edit.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 60, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/DefaultAdmin.php(100): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/Controller/Backend/BaseAdmin.php(65): Controller_Themes_DefaultAdmin->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Backend_BaseAdmin->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#16 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_edit.php:60
2014-03-24 01:01:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: upload_url ~ MODPATH/_modules/product/views/product/backend/product_edit.php [ 64 ] in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_edit.php:64
2014-03-24 01:01:37 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_edit.php(64): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 64, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/DefaultAdmin.php(100): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/Controller/Backend/BaseAdmin.php(65): Controller_Themes_DefaultAdmin->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Backend_BaseAdmin->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#16 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_edit.php:64
2014-03-24 01:02:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: upload_path ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 31 ] in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_view.php:31
2014-03-24 01:02:03 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_view.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 31, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/DefaultAdmin.php(100): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/Controller/Backend/BaseAdmin.php(65): Controller_Themes_DefaultAdmin->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Backend_BaseAdmin->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#16 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_view.php:31
2014-03-24 01:46:54 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/Controller/Company.php [ 243 ] in /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Company.php:243
2014-03-24 01:46:54 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Company.php(243): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 243, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Company->action_reseller()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Company.php:243
2014-03-24 01:53:45 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/Controller/Company.php [ 243 ] in /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Company.php:243
2014-03-24 01:53:45 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Company.php(243): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 243, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Company->action_reseller()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Company.php:243
2014-03-24 01:53:49 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php:79
2014-03-24 01:53:49 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#4 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php:79
2014-03-24 02:38:53 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/Controller/Company.php [ 56 ] in /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Company.php:56
2014-03-24 02:38:53 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Company.php(56): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 56, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Company->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Company.php:56
2014-03-24 02:38:57 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/Controller/Solution.php [ 55 ] in /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Solution.php:55
2014-03-24 02:38:57 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Solution.php(55): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 55, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Solution->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Solution.php:55
2014-03-24 02:39:00 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/Controller/Company.php [ 56 ] in /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Company.php:56
2014-03-24 02:39:00 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Company.php(56): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 56, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Company->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Company.php:56
2014-03-24 02:39:04 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 02:39:04 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 02:39:05 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/captcha.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 02:39:05 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 02:39:06 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/Controller/Company.php [ 56 ] in /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Company.php:56
2014-03-24 02:39:06 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Company.php(56): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 56, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Company->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Company.php:56
2014-03-24 02:39:52 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/Controller/Company.php [ 56 ] in /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Company.php:56
2014-03-24 02:39:52 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Company.php(56): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 56, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Company->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Company.php:56
2014-03-24 02:41:17 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/site/classes/Controller/Company.php [ 55 ] in file:line
2014-03-24 02:41:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-24 02:41:27 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 02:41:27 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 02:41:31 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/Controller/Company.php [ 119 ] in /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Company.php:119
2014-03-24 02:41:31 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Company.php(119): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 119, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Company->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Company.php:119
2014-03-24 02:41:34 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 02:41:34 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 02:41:53 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/Controller/Solution.php [ 55 ] in /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Solution.php:55
2014-03-24 02:41:53 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Solution.php(55): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 55, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Solution->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Solution.php:55
2014-03-24 03:34:16 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/Controller/Solution.php [ 55 ] in /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Solution.php:55
2014-03-24 03:34:16 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Solution.php(55): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 55, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Solution->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Solution.php:55
2014-03-24 12:34:11 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php:79
2014-03-24 12:34:11 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#4 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php:79
2014-03-24 13:16:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: others ~ MODPATH/_modules/site/views/site/solution_page.php [ 40 ] in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php:40
2014-03-24 13:16:35 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 40, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/Default.php(213): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Themes_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#15 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php:40
2014-03-24 13:16:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$subject ~ MODPATH/_modules/site/views/site/solution_page.php [ 40 ] in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php:40
2014-03-24 13:16:42 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php(40): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 40, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/Default.php(213): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Themes_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#15 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php:40
2014-03-24 13:16:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$subject ~ MODPATH/_modules/site/views/site/solution_page.php [ 40 ] in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php:40
2014-03-24 13:16:44 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php(40): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 40, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/Default.php(213): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Themes_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#15 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php:40
2014-03-24 13:16:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$subject ~ MODPATH/_modules/site/views/site/solution_page.php [ 40 ] in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php:40
2014-03-24 13:16:50 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php(40): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 40, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/Default.php(213): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Themes_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#15 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php:40
2014-03-24 13:16:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$subject ~ MODPATH/_modules/site/views/site/solution_page.php [ 40 ] in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php:40
2014-03-24 13:16:51 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php(40): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 40, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/Default.php(213): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Themes_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#15 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php:40
2014-03-24 13:17:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$subject ~ MODPATH/_modules/site/views/site/solution_page.php [ 40 ] in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php:40
2014-03-24 13:17:12 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php(40): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 40, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/Default.php(213): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Themes_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#15 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php:40
2014-03-24 13:17:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$subject ~ MODPATH/_modules/site/views/site/solution_page.php [ 40 ] in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php:40
2014-03-24 13:17:14 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php(40): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 40, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/Default.php(213): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Themes_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#15 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php:40
2014-03-24 13:18:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: pages ~ MODPATH/_modules/site/views/site/solution_page.php [ 10 ] in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php:10
2014-03-24 13:18:12 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 10, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/Default.php(213): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Themes_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#15 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php:10
2014-03-24 13:18:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$subject ~ MODPATH/_modules/site/views/site/solution_page.php [ 12 ] in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php:12
2014-03-24 13:18:17 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 12, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/Default.php(213): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Themes_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#15 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php:12
2014-03-24 14:03:35 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/Controller/Solution.php [ 122 ] in /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Solution.php:122
2014-03-24 14:03:35 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Solution.php(122): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 122, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Solution->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Solution.php:122
2014-03-24 14:03:56 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/Controller/Solution.php [ 122 ] in /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Solution.php:122
2014-03-24 14:03:56 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Solution.php(122): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 122, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Solution->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Solution.php:122
2014-03-24 14:04:17 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/Controller/Solution.php [ 122 ] in /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Solution.php:122
2014-03-24 14:04:17 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Solution.php(122): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 122, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Solution->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Solution.php:122
2014-03-24 14:33:44 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 14:33:44 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 14:33:57 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/Controller/Solution.php [ 122 ] in /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Solution.php:122
2014-03-24 14:33:57 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Solution.php(122): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 122, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Solution->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Solution.php:122
2014-03-24 14:40:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: product ~ MODPATH/_modules/solution/views/solution/backend/solution_view.php [ 5 ] in /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solution_view.php:5
2014-03-24 14:40:40 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solution_view.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 5, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/DefaultAdmin.php(100): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/Controller/Backend/BaseAdmin.php(65): Controller_Themes_DefaultAdmin->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Backend_BaseAdmin->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Solution))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#16 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solution_view.php:5
2014-03-24 14:43:35 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 14:43:35 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 14:43:35 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 14:43:35 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 14:44:39 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/solution_page.php [ 26 ] in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php:26
2014-03-24 14:44:39 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php(26): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 26, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/Default.php(213): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Themes_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#15 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php:26
2014-03-24 14:44:48 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/solution_page.php [ 26 ] in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php:26
2014-03-24 14:44:48 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php(26): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 26, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/Default.php(213): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Themes_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#15 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php:26
2014-03-24 14:44:56 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/solution_page.php [ 26 ] in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php:26
2014-03-24 14:44:56 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php(26): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 26, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/Default.php(213): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Themes_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#15 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php:26
2014-03-24 14:45:23 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/solution_page.php [ 26 ] in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php:26
2014-03-24 14:45:23 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php(26): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 26, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/Default.php(213): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Themes_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#15 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php:26
2014-03-24 14:45:44 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/solution_page.php [ 26 ] in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php:26
2014-03-24 14:45:44 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php(26): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 26, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/Default.php(213): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Themes_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#15 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php:26
2014-03-24 14:46:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Solution::find_by_name() ~ MODPATH/_modules/site/classes/Controller/Solution.php [ 76 ] in file:line
2014-03-24 14:46:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-24 14:47:42 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Solution::find_by_name() ~ MODPATH/_modules/site/classes/Controller/Solution.php [ 76 ] in file:line
2014-03-24 14:47:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-24 14:47:42 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Solution::find_by_name() ~ MODPATH/_modules/site/classes/Controller/Solution.php [ 76 ] in file:line
2014-03-24 14:47:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-24 14:47:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Solution::find_by_name() ~ MODPATH/_modules/site/classes/Controller/Solution.php [ 76 ] in file:line
2014-03-24 14:47:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-24 14:47:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_Solution::$text ~ MODPATH/_modules/site/views/site/solution_page.php [ 27 ] in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php:27
2014-03-24 14:47:49 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php(27): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 27, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/Default.php(213): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Themes_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#15 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php:27
2014-03-24 14:51:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_SolutionCategory::$subject ~ MODPATH/_modules/site/views/site/solution_page.php [ 26 ] in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php:26
2014-03-24 14:51:29 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php(26): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 26, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/Default.php(213): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Themes_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#15 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php:26
2014-03-24 14:55:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: namem ~ MODPATH/_modules/solution/classes/Model/Solution.php [ 99 ] in /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/Model/Solution.php:99
2014-03-24 14:55:28 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/Model/Solution.php(99): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 99, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/Controller/Solution.php(77): Model_Solution->load_by_name('aha-smart-podiu...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Solution->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Solution))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#8 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/solution/classes/Model/Solution.php:99
2014-03-24 14:55:33 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH/_modules/site/views/site/solution_page.php [ 33 ] in file:line
2014-03-24 14:55:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-24 15:13:09 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 664 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:664
2014-03-24 15:13:09 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(664): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 664, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:664
2014-03-24 15:14:46 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 664 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:664
2014-03-24 15:14:46 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(664): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 664, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:664
2014-03-24 15:14:46 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 664 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:664
2014-03-24 15:14:46 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(664): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 664, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:664
2014-03-24 15:14:47 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 664 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:664
2014-03-24 15:14:47 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(664): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 664, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:664
2014-03-24 15:14:47 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 664 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:664
2014-03-24 15:14:47 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(664): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 664, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:664
2014-03-24 16:14:44 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 664 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:664
2014-03-24 16:14:44 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(664): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 664, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:664
2014-03-24 16:15:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: UploadHandler::$files ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 664 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:664
2014-03-24 16:15:22 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(664): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 664, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:664
2014-03-24 16:24:20 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 664 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:664
2014-03-24 16:24:20 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(664): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 664, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:664
2014-03-24 16:34:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_ModuleList::$level_id_2 ~ MODPATH/_modules/user/views/user/backend/modulelist_index.php(46) : eval()'d code [ 1 ] in /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/backend/modulelist_index.php(46) : eval()'d code:1
2014-03-24 16:34:56 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/backend/modulelist_index.php(46) : eval()'d code(1): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 1, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/backend/modulelist_index.php(46): eval()
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/DefaultAdmin.php(100): Kohana_Controller_Template->after()
#10 /Volumes/Data/www/offistarindo/_app/classes/Controller/Backend/BaseAdmin.php(65): Controller_Themes_DefaultAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Backend_BaseAdmin->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_ModuleList))
#14 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#17 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/backend/modulelist_index.php(46) : eval()'d code:1
2014-03-24 16:35:51 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 16:35:51 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 16:35:51 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 16:35:51 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 16:35:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_ModuleList::$level_id_2 ~ MODPATH/_modules/user/views/user/backend/modulelist_index.php(46) : eval()'d code [ 1 ] in /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/backend/modulelist_index.php(46) : eval()'d code:1
2014-03-24 16:35:52 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/backend/modulelist_index.php(46) : eval()'d code(1): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 1, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/backend/modulelist_index.php(46): eval()
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/Controller/Themes/DefaultAdmin.php(100): Kohana_Controller_Template->after()
#10 /Volumes/Data/www/offistarindo/_app/classes/Controller/Backend/BaseAdmin.php(65): Controller_Themes_DefaultAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(87): Controller_Backend_BaseAdmin->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_ModuleList))
#14 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#17 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/backend/modulelist_index.php(46) : eval()'d code:1
2014-03-24 16:42:36 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 664 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:664
2014-03-24 16:42:36 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(664): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 664, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:664
2014-03-24 16:43:39 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 664 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:664
2014-03-24 16:43:39 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(664): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 664, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:664
2014-03-24 16:59:47 --- EMERGENCY: ErrorException [ 2 ]: mkdir(): Permission denied ~ APPPATH/classes/UploadHandler.php [ 1031 ] in file:line
2014-03-24 16:59:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): Permis...', '/Volumes/Data/w...', 1031, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/UploadHandler.php(1031): mkdir('/Volumes/Data/w...', 493, true)
#2 /Volumes/Data/www/offistarindo/_app/classes/UploadHandler.php(1282): UploadHandler->handle_file_upload('/private/var/tm...', '____PerfectMOTO...', 941331, 'image/jpeg', 0, 0, NULL)
#3 /Volumes/Data/www/offistarindo/_app/classes/UploadHandler.php(173): UploadHandler->post()
#4 /Volumes/Data/www/offistarindo/_app/classes/UploadHandler.php(157): UploadHandler->initialize()
#5 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(656): UploadHandler->__construct()
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#7 [internal function]: Kohana_Controller->execute()
#8 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#9 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#12 {main} in file:line
2014-03-24 17:00:37 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/____PerfectMOTOR_____by_j4y_0n3.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:00:37 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:00:43 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/5ae8e7b08fb3127b91f64501c76ba07f.png ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:00:43 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:00:43 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/____PerfectMOTOR_____by_j4y_0n3.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:00:43 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:00:44 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/5ae8e7b08fb3127b91f64501c76ba07f.png ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:00:44 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:00:44 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/____PerfectMOTOR_____by_j4y_0n3.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:00:44 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:01:13 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/69d3b8bb503fee7c6f9e379100472c7a.png ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:01:13 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:01:13 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/____PerfectMOTOR_____by_j4y_0n3.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:01:13 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:01:13 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/3c701b5c4aeb252718cf6b46f4399f8d.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:01:13 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:01:13 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/0756b71f66190f6b802c6559efd6fb68.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:01:13 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:01:13 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/5ae8e7b08fb3127b91f64501c76ba07f.png ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:01:13 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:01:13 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/6e6f61ecbf144735bd43dfad70981a1d.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:01:13 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:01:13 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/0756b71f66190f6b802c6559efd6fb68.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:01:13 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:01:13 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/3c701b5c4aeb252718cf6b46f4399f8d.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:01:13 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:01:13 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/5ae8e7b08fb3127b91f64501c76ba07f.png ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:01:13 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:01:13 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/6e6f61ecbf144735bd43dfad70981a1d.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:01:13 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:01:13 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/____PerfectMOTOR_____by_j4y_0n3.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:01:13 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:01:13 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/69d3b8bb503fee7c6f9e379100472c7a.png ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:01:13 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:02:43 --- EMERGENCY: ErrorException [ 2 ]: mkdir(): Permission denied ~ APPPATH/classes/UploadHandler.php [ 1031 ] in file:line
2014-03-24 17:02:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): Permis...', '/Volumes/Data/w...', 1031, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/UploadHandler.php(1031): mkdir('/Volumes/Data/w...', 493, true)
#2 /Volumes/Data/www/offistarindo/_app/classes/UploadHandler.php(1282): UploadHandler->handle_file_upload('/private/var/tm...', '3_cottage_lane_...', 69668, 'image/jpeg', 0, 0, NULL)
#3 /Volumes/Data/www/offistarindo/_app/classes/UploadHandler.php(173): UploadHandler->post()
#4 /Volumes/Data/www/offistarindo/_app/classes/UploadHandler.php(157): UploadHandler->initialize()
#5 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(662): UploadHandler->__construct()
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#7 [internal function]: Kohana_Controller->execute()
#8 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#9 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#12 {main} in file:line
2014-03-24 17:03:07 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/3_cottage_lane_s2_by_vinzdelacalzada.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:03:07 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:03:08 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/3_cottage_lane_s2_by_vinzdelacalzada.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:03:08 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:12:00 --- EMERGENCY: ErrorException [ 2 ]: mkdir(): Permission denied ~ APPPATH/classes/UploadHandler.php [ 1031 ] in file:line
2014-03-24 17:12:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): Permis...', '/Volumes/Data/w...', 1031, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/UploadHandler.php(1031): mkdir('/Volumes/Data/w...', 493, true)
#2 /Volumes/Data/www/offistarindo/_app/classes/UploadHandler.php(1282): UploadHandler->handle_file_upload('/private/var/tm...', '5ae8e7b08fb3127...', 313823, 'image/png', 0, 0, NULL)
#3 /Volumes/Data/www/offistarindo/_app/classes/UploadHandler.php(173): UploadHandler->post()
#4 /Volumes/Data/www/offistarindo/_app/classes/UploadHandler.php(157): UploadHandler->initialize()
#5 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(662): UploadHandler->__construct()
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#7 [internal function]: Kohana_Controller->execute()
#8 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#9 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#12 {main} in file:line
2014-03-24 17:12:26 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/5ae8e7b08fb3127b91f64501c76ba07f.png ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:12:26 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:12:27 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/5ae8e7b08fb3127b91f64501c76ba07f.png ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:12:27 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:12:35 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/5ae8e7b08fb3127b91f64501c76ba07f.png ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:12:35 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:12:35 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/4e99fdf9e11c0c491087e5b6371a4646.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:12:35 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:12:35 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/4e99fdf9e11c0c491087e5b6371a4646.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:12:35 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:12:35 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/5ae8e7b08fb3127b91f64501c76ba07f.png ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:12:35 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:12:41 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/4e99fdf9e11c0c491087e5b6371a4646.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:12:41 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:12:41 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/3advert_Layout_by_tenniedobry.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:12:41 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:12:41 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/5ae8e7b08fb3127b91f64501c76ba07f.png ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:12:41 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:12:41 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/3advert_Layout_by_tenniedobry.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:12:41 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:12:41 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/4e99fdf9e11c0c491087e5b6371a4646.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:12:41 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:12:41 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/5ae8e7b08fb3127b91f64501c76ba07f.png ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:12:41 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:21:32 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 666 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:666
2014-03-24 17:21:32 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(666): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 666, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:666
2014-03-24 17:26:37 --- EMERGENCY: ErrorException [ 2 ]: move_uploaded_file(/Volumes/Data/www/offistarindo/uploads4a99e6883364f015bbe37207ea9bc536.jpg): failed to open stream: Permission denied ~ APPPATH/classes/UploadHandler.php [ 1045 ] in file:line
2014-03-24 17:26:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', '/Volumes/Data/w...', 1045, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/UploadHandler.php(1045): move_uploaded_file('/private/var/tm...', '/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_app/classes/UploadHandler.php(1282): UploadHandler->handle_file_upload('/private/var/tm...', '4a99e6883364f01...', 410121, 'image/jpeg', 0, 0, NULL)
#3 /Volumes/Data/www/offistarindo/_app/classes/UploadHandler.php(173): UploadHandler->post()
#4 /Volumes/Data/www/offistarindo/_app/classes/UploadHandler.php(157): UploadHandler->initialize()
#5 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(664): UploadHandler->__construct(Array)
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#7 [internal function]: Kohana_Controller->execute()
#8 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#9 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#12 {main} in file:line
2014-03-24 17:27:05 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/4a99e6883364f015bbe37207ea9bc536.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:27:05 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:27:06 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/4a99e6883364f015bbe37207ea9bc536.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:27:06 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:28:30 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/4a99e6883364f015bbe37207ea9bc536.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:28:30 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:28:30 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/4a99e6883364f015bbe37207ea9bc536.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:28:30 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:28:41 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/4a99e6883364f015bbe37207ea9bc536.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:28:41 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:28:41 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/4a99e6883364f015bbe37207ea9bc536.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:28:41 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:28:43 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/4a99e6883364f015bbe37207ea9bc536.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:28:43 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:28:44 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/4a99e6883364f015bbe37207ea9bc536.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:28:44 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:29:06 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/4a99e6883364f015bbe37207ea9bc536.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:29:06 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:29:09 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/4a99e6883364f015bbe37207ea9bc536.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:29:09 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:29:10 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/4a99e6883364f015bbe37207ea9bc536.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:29:10 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:29:16 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/4a99e6883364f015bbe37207ea9bc536.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:29:16 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:29:19 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/4a99e6883364f015bbe37207ea9bc536.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:29:19 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:29:24 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/4a99e6883364f015bbe37207ea9bc536.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:29:24 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:29:54 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/4a99e6883364f015bbe37207ea9bc536.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:29:54 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:29:55 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/4a99e6883364f015bbe37207ea9bc536.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:29:55 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:29:58 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/4a99e6883364f015bbe37207ea9bc536.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:29:58 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:29:59 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/4a99e6883364f015bbe37207ea9bc536.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:29:59 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:30:00 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/4a99e6883364f015bbe37207ea9bc536.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:30:00 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:30:01 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/4a99e6883364f015bbe37207ea9bc536.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:30:01 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 17:39:21 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 667 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:667
2014-03-24 17:39:21 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(667): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 667, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:667
2014-03-24 17:42:31 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php:79
2014-03-24 17:42:31 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#4 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php:79
2014-03-24 17:42:56 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php:79
2014-03-24 17:42:56 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#4 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php:79
2014-03-24 17:43:40 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php:79
2014-03-24 17:43:40 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#4 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php:79
2014-03-24 17:43:52 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php:79
2014-03-24 17:43:52 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#4 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php:79
2014-03-24 17:45:43 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php:79
2014-03-24 17:45:43 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#4 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php:79
2014-03-24 17:46:52 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php:79
2014-03-24 17:46:52 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#4 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php:79
2014-03-24 18:42:51 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/3_cottage_lane_s2_by_vinzdelacalzada.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 18:42:51 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 19:56:04 --- EMERGENCY: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/Kohana/Image.php [ 107 ] in /Volumes/Data/www/offistarindo/_mod/image/classes/Kohana/Image/GD.php:91
2014-03-24 19:56:04 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/image/classes/Kohana/Image/GD.php(91): Kohana_Image->__construct('/Volumes/Data/w...')
#1 /Volumes/Data/www/offistarindo/_mod/image/classes/Kohana/Image.php(54): Kohana_Image_GD->__construct('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_app/classes/Lib.php(222): Kohana_Image::factory('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(660): Lib::_auto_image_manipulation('/Volumes/Data/w...', Object(Model_NewsFilesFile), Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#5 [internal function]: Kohana_Controller->execute()
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#10 {main} in /Volumes/Data/www/offistarindo/_mod/image/classes/Kohana/Image/GD.php:91
2014-03-24 19:56:04 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/9d73fc482eaecb68c488ceb26ee9861d.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 19:56:04 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 19:56:04 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/9d73fc482eaecb68c488ceb26ee9861d.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 19:56:04 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 19:56:09 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/9d73fc482eaecb68c488ceb26ee9861d.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 19:56:09 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 19:56:09 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/thumbnail/9d73fc482eaecb68c488ceb26ee9861d.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 19:56:09 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 21:15:32 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/view/admin-cp/news/filechange/uploads/news/thumbnail/2e88e7205f7a3479c75f4c211fe12c1c (1).jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 21:15:32 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 23:20:59 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/glyphicons/edit_button.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 23:20:59 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 23:20:59 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/glyphicons/delete_button.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 23:20:59 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 23:21:43 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/glyphicons/edit_button.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 23:21:43 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 23:21:43 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/glyphicons/delete_button.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 23:21:43 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 23:21:46 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/glyphicons/delete_button.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 23:21:46 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 23:21:47 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/glyphicons/edit_button.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 23:21:47 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 23:21:48 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/glyphicons/delete_button.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 23:21:48 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 23:22:24 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/edit_button.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 23:22:24 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 23:22:24 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/delete_button.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 23:22:24 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 23:22:31 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/edit_button.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 23:22:31 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 23:22:31 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/edit_button.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 23:22:31 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 23:22:32 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/delete_button.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 23:22:32 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 23:22:51 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/button_delete.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 23:22:51 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 23:22:56 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/button_delete.jpg ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-24 23:22:56 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975