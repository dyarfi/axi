<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-23 19:45:36 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php:79
2014-03-23 19:45:36 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#4 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php:79
2014-03-23 19:49:48 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-23 19:49:48 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-23 20:36:50 --- EMERGENCY: ErrorException [ 2 ]: is_dir() expects parameter 1 to be a valid path, array given ~ APPPATH/classes/Lib.php [ 325 ] in file:line
2014-03-23 20:36:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_dir() expect...', '/Volumes/Data/w...', 325, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/Lib.php(325): is_dir(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/Controller/Backend/Productcategory.php(307): Lib::_auto_image_manipulation(Array, Object(Model_ProductCategoryFile), Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_ProductCategory->action_view()
#4 [internal function]: Kohana_Controller->execute()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#9 {main} in file:line
2014-03-23 20:39:16 --- EMERGENCY: ErrorException [ 2 ]: is_dir() expects parameter 1 to be a valid path, array given ~ APPPATH/classes/Lib.php [ 325 ] in file:line
2014-03-23 20:39:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_dir() expect...', '/Volumes/Data/w...', 325, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/Lib.php(325): is_dir(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/Controller/Backend/Productcategory.php(307): Lib::_auto_image_manipulation(Array, Object(Model_ProductCategoryFile), Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_ProductCategory->action_view()
#4 [internal function]: Kohana_Controller->execute()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#9 {main} in file:line
2014-03-23 20:40:03 --- EMERGENCY: ErrorException [ 2 ]: is_dir() expects parameter 1 to be a valid path, array given ~ APPPATH/classes/Lib.php [ 325 ] in file:line
2014-03-23 20:40:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_dir() expect...', '/Volumes/Data/w...', 325, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/Lib.php(325): is_dir(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/Controller/Backend/Productcategory.php(307): Lib::_auto_image_manipulation(Array, Object(Model_ProductCategoryFile), Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_ProductCategory->action_view()
#4 [internal function]: Kohana_Controller->execute()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#9 {main} in file:line
2014-03-23 20:40:29 --- EMERGENCY: ErrorException [ 2 ]: is_dir() expects parameter 1 to be a valid path, array given ~ APPPATH/classes/Lib.php [ 325 ] in file:line
2014-03-23 20:40:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_dir() expect...', '/Volumes/Data/w...', 325, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/Lib.php(325): is_dir(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/Controller/Backend/Productcategory.php(307): Lib::_auto_image_manipulation(Array, Object(Model_ProductCategoryFile), Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_ProductCategory->action_view()
#4 [internal function]: Kohana_Controller->execute()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#9 {main} in file:line
2014-03-23 20:40:38 --- EMERGENCY: ErrorException [ 2 ]: mkdir() expects parameter 1 to be a valid path, array given ~ APPPATH/classes/Lib.php [ 326 ] in file:line
2014-03-23 20:40:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir() expects...', '/Volumes/Data/w...', 326, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/Lib.php(326): mkdir(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/Controller/Backend/Productcategory.php(307): Lib::_auto_image_manipulation(Array, Object(Model_ProductCategoryFile), Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_ProductCategory->action_view()
#4 [internal function]: Kohana_Controller->execute()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#9 {main} in file:line
2014-03-23 20:50:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 106 ] in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_index.php:106
2014-03-23 20:50:50 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_index.php(106): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 106, Array)
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
#16 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_index.php:106
2014-03-23 20:51:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 106 ] in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_index.php:106
2014-03-23 20:51:07 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_index.php(106): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 106, Array)
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
#16 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_index.php:106
2014-03-23 20:51:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 106 ] in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_index.php:106
2014-03-23 20:51:33 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_index.php(106): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 106, Array)
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
#16 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_index.php:106
2014-03-23 20:51:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 106 ] in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_index.php:106
2014-03-23 20:51:47 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_index.php(106): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 106, Array)
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
#16 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_index.php:106
2014-03-23 20:51:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 106 ] in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_index.php:106
2014-03-23 20:51:47 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_index.php(106): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 106, Array)
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
#16 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_index.php:106
2014-03-23 23:39:38 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-23 23:39:38 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#2 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php:975
2014-03-23 23:39:39 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_ProductCategory::_child_traversal() ~ MODPATH/_modules/product/classes/Model/ProductCategory.php [ 225 ] in file:line
2014-03-23 23:39:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line