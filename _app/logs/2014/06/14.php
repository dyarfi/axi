<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-14 00:24:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/testimonial/check_title/Test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-14 00:24:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/testimonial/check_title/Test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-14 00:25:12 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_testimonials` WHERE `name` = '' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-14 00:25:12 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_testimonials` WHERE `name` = '' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(272): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/controller/backend/testimonial.php(620): Model_Testimonial->find_count(Array)
#2 [internal function]: Controller_Backend_Testimonial->_unique_name(Object(Validation), 'name', 'name')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/validation.php(377): call_user_func_array(Array, Array)
#4 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/controller/backend/testimonial.php(230): Kohana_Validation->check()
#5 [internal function]: Controller_Backend_Testimonial->action_add()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#10 {main}
2014-06-14 00:28:08 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Testimonial::$name ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 9 ]
2014-06-14 00:28:08 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Testimonial::$name ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 9 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/views/testimonial/backend/testimonial_view.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 9, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 00:29:27 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Testimonial::$name ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 9 ]
2014-06-14 00:29:27 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Testimonial::$name ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 9 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/views/testimonial/backend/testimonial_view.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 9, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 00:29:31 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Testimonial::$name ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 9 ]
2014-06-14 00:29:31 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Testimonial::$name ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 9 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/views/testimonial/backend/testimonial_view.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 9, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 00:29:50 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Testimonial::$description ~ MODPATH/_modules/site/views/site/home_page.php [ 83 ]
2014-06-14 00:29:50 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Testimonial::$description ~ MODPATH/_modules/site/views/site/home_page.php [ 83 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(83): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 83, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(102): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 00:32:22 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Testimonial::$description ~ MODPATH/_modules/site/views/site/home_page.php [ 83 ]
2014-06-14 00:32:22 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Testimonial::$description ~ MODPATH/_modules/site/views/site/home_page.php [ 83 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(83): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 83, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(114): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 00:34:26 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 83 ]
2014-06-14 00:34:26 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 83 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(83): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 83, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(114): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 00:47:59 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Testimonial::$name ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 9 ]
2014-06-14 00:47:59 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Testimonial::$name ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 9 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/views/testimonial/backend/testimonial_view.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 9, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 00:48:45 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Testimonial::$name ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 9 ]
2014-06-14 00:48:45 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Testimonial::$name ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 9 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/views/testimonial/backend/testimonial_view.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 9, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 00:50:08 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Testimonial::$name ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 9 ]
2014-06-14 00:50:08 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Testimonial::$name ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 9 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/views/testimonial/backend/testimonial_view.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 9, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 00:58:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 7 ]
2014-06-14 00:58:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/views/testimonial/backend/testimonial_view.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 00:59:39 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Testimonial::$bannercontent ~ MODPATH/_modules/testimonial/classes/controller/backend/testimonial.php [ 323 ]
2014-06-14 00:59:39 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Testimonial::$bannercontent ~ MODPATH/_modules/testimonial/classes/controller/backend/testimonial.php [ 323 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/controller/backend/testimonial.php(323): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 323, Array)
#1 [internal function]: Controller_Backend_Testimonial->action_view()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 00:59:56 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Testimonial::$banner ~ MODPATH/_modules/testimonial/classes/controller/backend/testimonial.php [ 323 ]
2014-06-14 00:59:56 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Testimonial::$banner ~ MODPATH/_modules/testimonial/classes/controller/backend/testimonial.php [ 323 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/controller/backend/testimonial.php(323): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 323, Array)
#1 [internal function]: Controller_Backend_Testimonial->action_view()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 01:00:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: banner ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 38 ]
2014-06-14 01:00:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: banner ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 38 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/views/testimonial/backend/testimonial_view.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 38, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 01:02:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: product ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 230 ]
2014-06-14 01:02:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: product ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 230 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/views/testimonial/backend/testimonial_view.php(230): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 230, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 01:06:36 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/products.php [ 186 ]
2014-06-14 01:06:36 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/products.php [ 186 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(186): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 186, Array)
#1 [internal function]: Controller_Products->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 01:06:42 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/products.php [ 361 ]
2014-06-14 01:06:42 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/products.php [ 361 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(361): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 361, Array)
#1 [internal function]: Controller_Products->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 01:06:45 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/products.php [ 361 ]
2014-06-14 01:06:45 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/products.php [ 361 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(361): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 361, Array)
#1 [internal function]: Controller_Products->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 01:06:47 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/products.php [ 361 ]
2014-06-14 01:06:47 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/products.php [ 361 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(361): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 361, Array)
#1 [internal function]: Controller_Products->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 01:08:36 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 164 ]
2014-06-14 01:08:36 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 164 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(164): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 164, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(118): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 01:09:29 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 164 ]
2014-06-14 01:09:29 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 164 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(164): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 164, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(118): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 01:10:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: testimoni ~ MODPATH/_modules/site/views/site/home_page.php [ 2 ]
2014-06-14 01:10:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: testimoni ~ MODPATH/_modules/site/views/site/home_page.php [ 2 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 2, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(118): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 01:10:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: testimoni ~ MODPATH/_modules/site/views/site/home_page.php [ 2 ]
2014-06-14 01:10:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: testimoni ~ MODPATH/_modules/site/views/site/home_page.php [ 2 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 2, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(118): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 01:10:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: testimonials ~ MODPATH/_modules/site/views/site/home_page.php [ 2 ]
2014-06-14 01:10:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: testimonials ~ MODPATH/_modules/site/views/site/home_page.php [ 2 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 2, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(118): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 01:10:54 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/site/views/site/home_page.php [ 2 ]
2014-06-14 01:10:54 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/site/views/site/home_page.php [ 2 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(2): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 2, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(118): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 01:11:12 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/site/views/site/home_page.php [ 4 ]
2014-06-14 01:11:12 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/site/views/site/home_page.php [ 4 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(4): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 4, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(118): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 01:11:20 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 166 ]
2014-06-14 01:11:20 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 166 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(166): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 166, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(118): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 01:12:12 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 166 ]
2014-06-14 01:12:12 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 166 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(166): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 166, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(118): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 01:12:13 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 166 ]
2014-06-14 01:12:13 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 166 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(166): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 166, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(118): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 01:12:48 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 166 ]
2014-06-14 01:12:48 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 166 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(166): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 166, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(120): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 01:13:12 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 166 ]
2014-06-14 01:13:12 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 166 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(166): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 166, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(120): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 01:14:01 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 166 ]
2014-06-14 01:14:01 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 166 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(166): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 166, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(120): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 01:15:52 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 165 ]
2014-06-14 01:15:52 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 165 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(165): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 165, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(120): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 01:16:21 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 165 ]
2014-06-14 01:16:21 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 165 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(165): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 165, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(120): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 01:16:57 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 164 ]
2014-06-14 01:16:57 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 164 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(164): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 164, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(120): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 01:17:11 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 163 ]
2014-06-14 01:17:11 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(163): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 163, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(120): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 01:17:30 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 164 ]
2014-06-14 01:17:30 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 164 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(164): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 164, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(120): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 01:18:31 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 162 ]
2014-06-14 01:18:31 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 162 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(162): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 162, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(120): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 01:19:36 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
2014-06-14 01:19:36 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/site/classes/controller/home.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 81, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 01:20:45 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/site/classes/controller/home.php [ 83 ]
2014-06-14 01:20:45 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/_modules/site/classes/controller/home.php [ 83 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(83): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 83, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 01:21:00 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 163 ]
2014-06-14 01:21:00 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(163): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 163, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(122): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 01:21:23 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 163 ]
2014-06-14 01:21:23 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(163): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 163, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(122): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 01:21:52 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 163 ]
2014-06-14 01:21:52 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 163 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(163): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 163, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(122): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 01:24:41 --- ERROR: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 166 ]
2014-06-14 01:24:41 --- STRACE: ErrorException [ 8 ]: Undefined offset: 10 ~ MODPATH/_modules/site/views/site/home_page.php [ 166 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(166): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 166, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(123): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 01:32:31 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '?' ~ MODPATH/_modules/site/views/site/home_page.php [ 166 ]
2014-06-14 01:32:31 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '?' ~ MODPATH/_modules/site/views/site/home_page.php [ 166 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-14 01:39:45 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/solution.php [ 111 ]
2014-06-14 01:39:45 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/solution.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(111): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 111, Array)
#1 [internal function]: Controller_Solution->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 02:26:00 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 127 ]
2014-06-14 02:26:00 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Page::load_by_name() ~ MODPATH/_modules/site/classes/controller/company.php [ 127 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-14 04:04:43 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/products.php [ 186 ]
2014-06-14 04:04:43 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/products.php [ 186 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(186): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 186, Array)
#1 [internal function]: Controller_Products->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 04:05:03 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$title ~ MODPATH/_modules/user/views/user/widget/stats_dashboard.php [ 20 ]
2014-06-14 04:05:03 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$title ~ MODPATH/_modules/user/views/user/widget/stats_dashboard.php [ 20 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/widget/stats_dashboard.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 20, Array)
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
#12 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#13 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#14 [internal function]: Controller_Backend_BaseAdmin->after()
#15 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#16 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#18 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#19 {main}
2014-06-14 04:10:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: pagination ~ MODPATH/_modules/page/classes/controller/backend/page.php [ 171 ]
2014-06-14 04:10:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: pagination ~ MODPATH/_modules/page/classes/controller/backend/page.php [ 171 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/page.php(171): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 171, Array)
#1 [internal function]: Controller_Backend_Page->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 04:18:21 --- ERROR: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/page/views/page/backend/page_add.php [ 13 ]
2014-06-14 04:18:21 --- STRACE: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/page/views/page/backend/page_add.php [ 13 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/views/page/backend/page_add.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 13, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 04:20:17 --- ERROR: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/page/views/page/backend/page_add.php [ 13 ]
2014-06-14 04:20:17 --- STRACE: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/page/views/page/backend/page_add.php [ 13 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/views/page/backend/page_add.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 13, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 04:21:51 --- ERROR: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/page/views/page/backend/page_add.php [ 13 ]
2014-06-14 04:21:51 --- STRACE: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/page/views/page/backend/page_add.php [ 13 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/views/page/backend/page_add.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 13, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 04:23:18 --- ERROR: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/page/views/page/backend/page_add.php [ 13 ]
2014-06-14 04:23:18 --- STRACE: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/page/views/page/backend/page_add.php [ 13 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/views/page/backend/page_add.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 13, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 04:23:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/page/views/page/backend/page_add.php [ 7 ]
2014-06-14 04:23:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/page/views/page/backend/page_add.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/views/page/backend/page_add.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 04:24:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: class_name ~ MODPATH/_modules/page/views/page/backend/page_add.php [ 25 ]
2014-06-14 04:24:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: class_name ~ MODPATH/_modules/page/views/page/backend/page_add.php [ 25 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/views/page/backend/page_add.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 25, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 04:24:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: page ~ MODPATH/_modules/page/views/page/backend/page_add.php [ 25 ]
2014-06-14 04:24:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: page ~ MODPATH/_modules/page/views/page/backend/page_add.php [ 25 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/views/page/backend/page_add.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 25, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 04:24:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: page ~ MODPATH/_modules/page/views/page/backend/page_add.php [ 350 ]
2014-06-14 04:24:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: page ~ MODPATH/_modules/page/views/page/backend/page_add.php [ 350 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/views/page/backend/page_add.php(350): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 350, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 04:25:27 --- ERROR: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/page/views/page/backend/page_add.php [ 13 ]
2014-06-14 04:25:27 --- STRACE: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/page/views/page/backend/page_add.php [ 13 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/views/page/backend/page_add.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 13, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 04:25:37 --- ERROR: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/page/views/page/backend/page_add.php [ 34 ]
2014-06-14 04:25:37 --- STRACE: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/page/views/page/backend/page_add.php [ 34 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/views/page/backend/page_add.php(34): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 34, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 04:27:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_content ~ MODPATH/_modules/page/views/page/backend/page_add.php [ 48 ]
2014-06-14 04:27:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_content ~ MODPATH/_modules/page/views/page/backend/page_add.php [ 48 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/views/page/backend/page_add.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 48, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 04:28:49 --- ERROR: ErrorException [ 8 ]: Undefined index: contact-us ~ MODPATH/_modules/page/views/page/backend/page_add.php [ 48 ]
2014-06-14 04:28:49 --- STRACE: ErrorException [ 8 ]: Undefined index: contact-us ~ MODPATH/_modules/page/views/page/backend/page_add.php [ 48 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/views/page/backend/page_add.php(48): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 48, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 04:40:04 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'category_id' in 'field list' [ INSERT INTO `tbl_page_content` (`page_id`, `lang_id`, `subject`, `synopsis`, `text`, `category_id`) VALUES (0, '1', 'Test Three English Subject', 'Test Three English Synopsis', '\n	Test Three English Text\n', 4) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-14 04:40:04 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'category_id' in 'field list' [ INSERT INTO `tbl_page_content` (`page_id`, `lang_id`, `subject`, `synopsis`, `text`, `category_id`) VALUES (0, '1', 'Test Three English Subject', 'Test Three English Synopsis', '\n	Test Three English Text\n', 4) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `tb...', false, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/pagecontent.php(107): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/controller/backend/page.php(267): Model_PageContent->add(Array)
#3 [internal function]: Controller_Backend_Page->action_add()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-14 04:41:29 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/products.php [ 186 ]
2014-06-14 04:41:29 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/products.php [ 186 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(186): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 186, Array)
#1 [internal function]: Controller_Products->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 04:43:13 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/products.php [ 186 ]
2014-06-14 04:43:13 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/products.php [ 186 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(186): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 186, Array)
#1 [internal function]: Controller_Products->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 04:48:35 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Reseller::$subject ~ MODPATH/_modules/reseller/views/reseller/backend/reseller_index.php [ 77 ]
2014-06-14 04:48:35 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Reseller::$subject ~ MODPATH/_modules/reseller/views/reseller/backend/reseller_index.php [ 77 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/views/reseller/backend/reseller_index.php(77): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 77, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 04:50:36 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_reseller_content' doesn't exist [ SELECT * FROM `tbl_reseller_content` WHERE `lang_id` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-14 04:50:36 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_reseller_content' doesn't exist [ SELECT * FROM `tbl_reseller_content` WHERE `lang_id` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/model/resellercontent.php(198): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(130): Model_ResellerContent->find(Array)
#2 [internal function]: Controller_Backend_Reseller->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-14 04:51:30 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_module_lists' doesn't exist [ SELECT * FROM `tbl_module_lists` WHERE `module_link` = 'authentication/logout' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-14 04:51:30 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_module_lists' doesn't exist [ SELECT * FROM `tbl_module_lists` WHERE `module_link` = 'authentication/logout' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/modulelist.php(431): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/modulelist.php(468): Model_ModuleList->find(Array, '', 1)
#2 /Volumes/Data/www/offistarindo/_app/classes/acl.php(210): Model_ModuleList->load_by_link('authentication/...')
#3 /Volumes/Data/www/offistarindo/_app/classes/acl.php(36): Acl->check_module_menu('authentication/...')
#4 /Volumes/Data/www/offistarindo/_app/classes/acl.php(17): Acl->__construct()
#5 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(18): Acl::instance()
#6 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#7 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#8 [internal function]: Controller_Backend_Authentication->before()
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#13 {main}
2014-06-14 04:52:13 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_module_lists' doesn't exist [ SELECT * FROM `tbl_module_lists` WHERE `module_link` = 'authentication/logout' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-14 04:52:13 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_module_lists' doesn't exist [ SELECT * FROM `tbl_module_lists` WHERE `module_link` = 'authentication/logout' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/modulelist.php(431): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/modulelist.php(468): Model_ModuleList->find(Array, '', 1)
#2 /Volumes/Data/www/offistarindo/_app/classes/acl.php(210): Model_ModuleList->load_by_link('authentication/...')
#3 /Volumes/Data/www/offistarindo/_app/classes/acl.php(36): Acl->check_module_menu('authentication/...')
#4 /Volumes/Data/www/offistarindo/_app/classes/acl.php(17): Acl->__construct()
#5 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(18): Acl::instance()
#6 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#7 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#8 [internal function]: Controller_Backend_Authentication->before()
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#13 {main}
2014-06-14 04:52:22 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_module_lists' doesn't exist [ SELECT * FROM `tbl_module_lists` WHERE `module_link` = 'authentication/logout' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-14 04:52:22 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_module_lists' doesn't exist [ SELECT * FROM `tbl_module_lists` WHERE `module_link` = 'authentication/logout' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/modulelist.php(431): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/modulelist.php(468): Model_ModuleList->find(Array, '', 1)
#2 /Volumes/Data/www/offistarindo/_app/classes/acl.php(210): Model_ModuleList->load_by_link('authentication/...')
#3 /Volumes/Data/www/offistarindo/_app/classes/acl.php(36): Acl->check_module_menu('authentication/...')
#4 /Volumes/Data/www/offistarindo/_app/classes/acl.php(17): Acl->__construct()
#5 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(18): Acl::instance()
#6 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#7 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#8 [internal function]: Controller_Backend_Authentication->before()
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#13 {main}
2014-06-14 04:52:31 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_module_lists' doesn't exist [ SELECT * FROM `tbl_module_lists` WHERE `module_link` = 'authentication/logout' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-14 04:52:31 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_module_lists' doesn't exist [ SELECT * FROM `tbl_module_lists` WHERE `module_link` = 'authentication/logout' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/modulelist.php(431): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/modulelist.php(468): Model_ModuleList->find(Array, '', 1)
#2 /Volumes/Data/www/offistarindo/_app/classes/acl.php(210): Model_ModuleList->load_by_link('authentication/...')
#3 /Volumes/Data/www/offistarindo/_app/classes/acl.php(36): Acl->check_module_menu('authentication/...')
#4 /Volumes/Data/www/offistarindo/_app/classes/acl.php(17): Acl->__construct()
#5 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(18): Acl::instance()
#6 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#7 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#8 [internal function]: Controller_Backend_Authentication->before()
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#13 {main}
2014-06-14 04:52:55 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_module_lists' doesn't exist [ SELECT * FROM `tbl_module_lists` WHERE `module_link` = 'authentication/logout' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-14 04:52:55 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_module_lists' doesn't exist [ SELECT * FROM `tbl_module_lists` WHERE `module_link` = 'authentication/logout' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/modulelist.php(431): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/modulelist.php(468): Model_ModuleList->find(Array, '', 1)
#2 /Volumes/Data/www/offistarindo/_app/classes/acl.php(210): Model_ModuleList->load_by_link('authentication/...')
#3 /Volumes/Data/www/offistarindo/_app/classes/acl.php(36): Acl->check_module_menu('authentication/...')
#4 /Volumes/Data/www/offistarindo/_app/classes/acl.php(17): Acl->__construct()
#5 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(18): Acl::instance()
#6 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#7 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#8 [internal function]: Controller_Backend_Authentication->before()
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#13 {main}
2014-06-14 04:52:56 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_module_lists' doesn't exist [ SELECT * FROM `tbl_module_lists` WHERE `module_link` = 'authentication/logout' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-14 04:52:56 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_module_lists' doesn't exist [ SELECT * FROM `tbl_module_lists` WHERE `module_link` = 'authentication/logout' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/modulelist.php(431): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/modulelist.php(468): Model_ModuleList->find(Array, '', 1)
#2 /Volumes/Data/www/offistarindo/_app/classes/acl.php(210): Model_ModuleList->load_by_link('authentication/...')
#3 /Volumes/Data/www/offistarindo/_app/classes/acl.php(36): Acl->check_module_menu('authentication/...')
#4 /Volumes/Data/www/offistarindo/_app/classes/acl.php(17): Acl->__construct()
#5 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(18): Acl::instance()
#6 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#7 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#8 [internal function]: Controller_Backend_Authentication->before()
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#13 {main}
2014-06-14 04:53:13 --- ERROR: ErrorException [ 8 ]: Undefined property: Acl::$session ~ APPPATH/classes/acl.php [ 25 ]
2014-06-14 04:53:13 --- STRACE: ErrorException [ 8 ]: Undefined property: Acl::$session ~ APPPATH/classes/acl.php [ 25 ]
--
#0 /Volumes/Data/www/offistarindo/_app/classes/acl.php(25): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 25, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/acl.php(17): Acl->__construct()
#2 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(18): Acl::instance()
#3 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(23): Controller_Themes_DefaultAdmin->before()
#4 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#5 [internal function]: Controller_Backend_Authentication->before()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#10 {main}
2014-06-14 04:53:27 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/acl.php [ 26 ]
2014-06-14 04:53:27 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/acl.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-14 04:53:56 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$title ~ MODPATH/_modules/user/views/user/widget/stats_dashboard.php [ 20 ]
2014-06-14 04:53:56 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$title ~ MODPATH/_modules/user/views/user/widget/stats_dashboard.php [ 20 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/widget/stats_dashboard.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 20, Array)
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
#12 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#13 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#14 [internal function]: Controller_Backend_BaseAdmin->after()
#15 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#16 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#18 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#19 {main}
2014-06-14 04:54:01 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Reseller::$subject ~ MODPATH/_modules/reseller/views/reseller/backend/reseller_index.php [ 77 ]
2014-06-14 04:54:01 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Reseller::$subject ~ MODPATH/_modules/reseller/views/reseller/backend/reseller_index.php [ 77 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/views/reseller/backend/reseller_index.php(77): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 77, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 04:54:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _mod/_modules/reseller/views/reseller/backend/reseller_view.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-14 04:54:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _mod/_modules/reseller/views/reseller/backend/reseller_view.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-06-14 04:55:24 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH/_modules/reseller/views/reseller/backend/reseller_index.php [ 76 ]
2014-06-14 04:55:24 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH/_modules/reseller/views/reseller/backend/reseller_index.php [ 76 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/views/reseller/backend/reseller_index.php(76): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 76, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 05:00:31 --- ERROR: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/reseller/views/reseller/backend/reseller_add.php [ 25 ]
2014-06-14 05:00:31 --- STRACE: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/reseller/views/reseller/backend/reseller_add.php [ 25 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/views/reseller/backend/reseller_add.php(25): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 25, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 05:01:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: prefix ~ MODPATH/_modules/reseller/views/reseller/backend/reseller_add.php [ 62 ]
2014-06-14 05:01:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: prefix ~ MODPATH/_modules/reseller/views/reseller/backend/reseller_add.php [ 62 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/views/reseller/backend/reseller_add.php(62): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 62, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 05:02:46 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Reseller::$name ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 465 ]
2014-06-14 05:02:46 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Reseller::$name ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 465 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(465): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 465, Array)
#1 [internal function]: Controller_Backend_Reseller->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 05:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/reseller/check_title was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-14 05:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/reseller/check_title was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-14 05:04:25 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 223 ]
2014-06-14 05:04:25 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 223 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(223): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 223, Array)
#1 [internal function]: Controller_Backend_Reseller->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 05:05:19 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 223 ]
2014-06-14 05:05:19 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 223 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(223): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 223, Array)
#1 [internal function]: Controller_Backend_Reseller->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 05:05:34 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'reseller_id' in 'field list' [ INSERT INTO `tbl_resellers` (`title`, `sub_level`, `is_system`, `user_id`, `order`, `count`, `status`, `added`, `modified`, `reseller_id`, `lang_id`, `subject`, `text`) VALUES ('', 0, 0, 0, 0, 0, '', 1402697134, 0, 16, '1', 'Test Three English Subject', '\n	Test Three English Subject\n') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-14 05:05:34 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'reseller_id' in 'field list' [ INSERT INTO `tbl_resellers` (`title`, `sub_level`, `is_system`, `user_id`, `order`, `count`, `status`, `added`, `modified`, `reseller_id`, `lang_id`, `subject`, `text`) VALUES ('', 0, 0, 0, 0, 0, '', 1402697134, 0, 16, '1', 'Test Three English Subject', '\n	Test Three English Subject\n') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `tb...', false, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/model/reseller.php(94): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(238): Model_Reseller->add(Array)
#3 [internal function]: Controller_Backend_Reseller->action_add()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-14 05:06:22 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Reseller::$name ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 476 ]
2014-06-14 05:06:22 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Reseller::$name ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 476 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(476): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 476, Array)
#1 [internal function]: Controller_Backend_Reseller->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 05:07:22 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'reseller_id' in 'field list' [ INSERT INTO `tbl_resellers` (`title`, `sub_level`, `is_system`, `user_id`, `order`, `count`, `status`, `added`, `modified`, `reseller_id`, `lang_id`, `subject`, `text`) VALUES ('', 0, 0, 0, 0, 0, '', 1402697242, 0, 17, '1', 'Test Four English Subject', '\n	Test Four English Text\n') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-14 05:07:22 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'reseller_id' in 'field list' [ INSERT INTO `tbl_resellers` (`title`, `sub_level`, `is_system`, `user_id`, `order`, `count`, `status`, `added`, `modified`, `reseller_id`, `lang_id`, `subject`, `text`) VALUES ('', 0, 0, 0, 0, 0, '', 1402697242, 0, 17, '1', 'Test Four English Subject', '\n	Test Four English Text\n') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `tb...', false, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/model/reseller.php(94): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(238): Model_Reseller->add(Array)
#3 [internal function]: Controller_Backend_Reseller->action_add()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-14 05:08:55 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'reseller_id' in 'field list' [ INSERT INTO `tbl_resellers` (`title`, `sub_level`, `is_system`, `user_id`, `order`, `count`, `status`, `added`, `modified`, `reseller_id`, `lang_id`, `subject`, `text`) VALUES ('', 0, 0, 0, 0, 0, '', 1402697335, 0, 18, '1', 'Test Five English Subject', '\n	Test Five English Text\n') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-14 05:08:55 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'reseller_id' in 'field list' [ INSERT INTO `tbl_resellers` (`title`, `sub_level`, `is_system`, `user_id`, `order`, `count`, `status`, `added`, `modified`, `reseller_id`, `lang_id`, `subject`, `text`) VALUES ('', 0, 0, 0, 0, 0, '', 1402697335, 0, 18, '1', 'Test Five English Subject', '\n	Test Five English Text\n') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `tb...', false, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/model/reseller.php(94): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(238): Model_Reseller->add(Array)
#3 [internal function]: Controller_Backend_Reseller->action_add()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-14 05:10:09 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Reseller::$name ~ MODPATH/_modules/reseller/views/reseller/backend/reseller_view.php [ 9 ]
2014-06-14 05:10:09 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Reseller::$name ~ MODPATH/_modules/reseller/views/reseller/backend/reseller_view.php [ 9 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/views/reseller/backend/reseller_view.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 9, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 05:10:23 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Reseller::$name ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 476 ]
2014-06-14 05:10:23 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Reseller::$name ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 476 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(476): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 476, Array)
#1 [internal function]: Controller_Backend_Reseller->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 05:10:30 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Reseller::$name ~ MODPATH/_modules/reseller/views/reseller/backend/reseller_view.php [ 9 ]
2014-06-14 05:10:30 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Reseller::$name ~ MODPATH/_modules/reseller/views/reseller/backend/reseller_view.php [ 9 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/views/reseller/backend/reseller_view.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 9, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 05:12:33 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Reseller::$name ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 476 ]
2014-06-14 05:12:33 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Reseller::$name ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 476 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(476): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 476, Array)
#1 [internal function]: Controller_Backend_Reseller->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 05:16:45 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Reseller::$name ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 493 ]
2014-06-14 05:16:45 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Reseller::$name ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 493 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(493): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 493, Array)
#1 [internal function]: Controller_Backend_Reseller->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 05:17:00 --- ERROR: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/reseller/views/reseller/backend/reseller_edit.php [ 25 ]
2014-06-14 05:17:00 --- STRACE: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/reseller/views/reseller/backend/reseller_edit.php [ 25 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/views/reseller/backend/reseller_edit.php(25): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 25, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 05:18:20 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Reseller::$detail_data ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 527 ]
2014-06-14 05:18:20 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Reseller::$detail_data ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 527 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(527): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 527, Array)
#1 [internal function]: Controller_Backend_Reseller->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 05:18:28 --- ERROR: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/reseller/views/reseller/backend/reseller_edit.php [ 25 ]
2014-06-14 05:18:28 --- STRACE: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/reseller/views/reseller/backend/reseller_edit.php [ 25 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/views/reseller/backend/reseller_edit.php(25): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 25, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 05:19:06 --- ERROR: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/reseller/views/reseller/backend/reseller_edit.php [ 46 ]
2014-06-14 05:19:06 --- STRACE: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/reseller/views/reseller/backend/reseller_edit.php [ 46 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/views/reseller/backend/reseller_edit.php(46): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 46, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 05:20:04 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 392 ]
2014-06-14 05:20:04 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 392 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(392): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 392, Array)
#1 [internal function]: Controller_Backend_Reseller->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 05:20:29 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Reseller::$name ~ MODPATH/_modules/reseller/views/reseller/backend/reseller_view.php [ 9 ]
2014-06-14 05:20:29 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Reseller::$name ~ MODPATH/_modules/reseller/views/reseller/backend/reseller_view.php [ 9 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/views/reseller/backend/reseller_view.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 9, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 05:21:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 327 ]
2014-06-14 05:21:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: detail_data ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 327 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(327): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 327, Array)
#1 [internal function]: Controller_Backend_Reseller->action_view()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 05:21:45 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Reseller::$banner ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 325 ]
2014-06-14 05:21:45 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Reseller::$banner ~ MODPATH/_modules/reseller/classes/controller/backend/reseller.php [ 325 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(325): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 325, Array)
#1 [internal function]: Controller_Backend_Reseller->action_view()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 05:21:49 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'banner_id' in 'where clause' [ SELECT * FROM `tbl_reseller_content` WHERE `lang_id` IN ('1', '2') AND `banner_id` = '15' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-14 05:21:49 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'banner_id' in 'where clause' [ SELECT * FROM `tbl_reseller_content` WHERE `lang_id` IN ('1', '2') AND `banner_id` = '15' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/model/resellercontent.php(198): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/classes/controller/backend/reseller.php(325): Model_ResellerContent->find(Array)
#2 [internal function]: Controller_Backend_Reseller->action_view()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-14 05:21:55 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Reseller::$name ~ MODPATH/_modules/reseller/views/reseller/backend/reseller_view.php [ 9 ]
2014-06-14 05:21:55 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Reseller::$name ~ MODPATH/_modules/reseller/views/reseller/backend/reseller_view.php [ 9 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/views/reseller/backend/reseller_view.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 9, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 05:22:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: prefix ~ MODPATH/_modules/reseller/views/reseller/backend/reseller_view.php [ 32 ]
2014-06-14 05:22:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: prefix ~ MODPATH/_modules/reseller/views/reseller/backend/reseller_view.php [ 32 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/reseller/views/reseller/backend/reseller_view.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 32, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Reseller))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 05:24:50 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/products.php [ 186 ]
2014-06-14 05:24:50 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/products.php [ 186 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(186): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 186, Array)
#1 [internal function]: Controller_Products->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 05:26:05 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 49 ]
2014-06-14 05:26:05 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 49 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(49): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 49, Array)
#1 [internal function]: Controller_Backend_Product->before()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 05:26:20 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 49 ]
2014-06-14 05:26:20 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 49 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(49): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 49, Array)
#1 [internal function]: Controller_Backend_Product->before()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 05:27:49 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 49 ]
2014-06-14 05:27:49 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 49 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(49): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 49, Array)
#1 [internal function]: Controller_Backend_Product->before()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 05:28:16 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 49 ]
2014-06-14 05:28:16 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 49 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(49): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 49, Array)
#1 [internal function]: Controller_Backend_Product->before()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 05:29:07 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 49 ]
2014-06-14 05:29:07 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 49 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(49): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 49, Array)
#1 [internal function]: Controller_Backend_Product->before()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 05:30:10 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 49 ]
2014-06-14 05:30:10 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 49 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(49): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 49, Array)
#1 [internal function]: Controller_Backend_Product->before()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 05:45:12 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$title ~ MODPATH/_modules/user/views/user/widget/stats_dashboard.php [ 20 ]
2014-06-14 05:45:12 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$title ~ MODPATH/_modules/user/views/user/widget/stats_dashboard.php [ 20 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/widget/stats_dashboard.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 20, Array)
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
#12 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#13 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#14 [internal function]: Controller_Backend_BaseAdmin->after()
#15 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#16 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#18 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#19 {main}
2014-06-14 05:45:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/download/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-14 05:45:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/download/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-14 05:50:18 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_download_type_content' doesn't exist [ SELECT * FROM `tbl_download_type_content` WHERE `lang_id` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-14 05:50:18 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_download_type_content' doesn't exist [ SELECT * FROM `tbl_download_type_content` WHERE `lang_id` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtypecontent.php(198): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadtype.php(132): Model_DownloadTypeContent->find(Array)
#2 [internal function]: Controller_Backend_DownloadType->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadType))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-14 05:51:29 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$title ~ MODPATH/_modules/user/views/user/widget/stats_dashboard.php [ 20 ]
2014-06-14 05:51:29 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$title ~ MODPATH/_modules/user/views/user/widget/stats_dashboard.php [ 20 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/widget/stats_dashboard.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 20, Array)
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
#12 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#13 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#14 [internal function]: Controller_Backend_BaseAdmin->after()
#15 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#16 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#18 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#19 {main}
2014-06-14 05:53:09 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'order clause' [ SELECT * FROM `tbl_download_types` WHERE `status` != 'deleted' ORDER BY `subject` asc LIMIT 25 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-14 05:53:09 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'order clause' [ SELECT * FROM `tbl_download_types` WHERE `status` != 'deleted' ORDER BY `subject` asc LIMIT 25 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(222): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadtype.php(124): Model_DownloadType->find(Array, Array, 25, '')
#2 [internal function]: Controller_Backend_DownloadType->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadType))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-14 05:53:48 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'order clause' [ SELECT * FROM `tbl_download_types` WHERE `status` != 'deleted' ORDER BY `subject` asc LIMIT 25 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-14 05:53:48 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'order clause' [ SELECT * FROM `tbl_download_types` WHERE `status` != 'deleted' ORDER BY `subject` asc LIMIT 25 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(222): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadtype.php(124): Model_DownloadType->find(Array, Array, 25, '')
#2 [internal function]: Controller_Backend_DownloadType->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadType))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-14 05:53:52 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'order clause' [ SELECT * FROM `tbl_download_types` WHERE `status` != 'deleted' ORDER BY `subject` asc LIMIT 25 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-14 05:53:52 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'order clause' [ SELECT * FROM `tbl_download_types` WHERE `status` != 'deleted' ORDER BY `subject` asc LIMIT 25 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(222): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadtype.php(124): Model_DownloadType->find(Array, Array, 25, '')
#2 [internal function]: Controller_Backend_DownloadType->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadType))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-14 05:54:14 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/_modules/download/views/download/backend/downloadtype_index.php [ 65 ]
2014-06-14 05:54:14 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/_modules/download/views/download/backend/downloadtype_index.php [ 65 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadtype_index.php(65): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 65, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadType))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 05:57:14 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_index.php [ 158 ]
2014-06-14 05:57:14 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_index.php [ 158 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_index.php(158): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 158, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 05:57:47 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/classes/controller/backend/downloadtype.php [ 509 ]
2014-06-14 05:57:47 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/classes/controller/backend/downloadtype.php [ 509 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadtype.php(509): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 509, Array)
#1 [internal function]: Controller_Backend_DownloadType->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadType))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 12:11:56 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$title ~ MODPATH/_modules/user/views/user/widget/stats_dashboard.php [ 20 ]
2014-06-14 12:11:56 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$title ~ MODPATH/_modules/user/views/user/widget/stats_dashboard.php [ 20 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/widget/stats_dashboard.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 20, Array)
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
#12 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#13 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#14 [internal function]: Controller_Backend_BaseAdmin->after()
#15 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#16 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#18 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#19 {main}
2014-06-14 12:12:14 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_index.php [ 158 ]
2014-06-14 12:12:14 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_index.php [ 158 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_index.php(158): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 158, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 12:12:21 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 24 ]
2014-06-14 12:12:21 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 24 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(24): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 24, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 12:12:41 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/classes/controller/backend/downloadtype.php [ 509 ]
2014-06-14 12:12:41 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/classes/controller/backend/downloadtype.php [ 509 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadtype.php(509): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 509, Array)
#1 [internal function]: Controller_Backend_DownloadType->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadType))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 12:14:08 --- ERROR: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/download/views/download/backend/downloadtype_edit.php [ 7 ]
2014-06-14 12:14:08 --- STRACE: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/download/views/download/backend/downloadtype_edit.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadtype_edit.php(7): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadType))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 12:14:55 --- ERROR: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/download/views/download/backend/downloadtype_edit.php [ 7 ]
2014-06-14 12:14:55 --- STRACE: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/download/views/download/backend/downloadtype_edit.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadtype_edit.php(7): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadType))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 12:16:16 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadTypeContent::$id ~ MODPATH/_modules/download/classes/controller/backend/downloadtype.php [ 536 ]
2014-06-14 12:16:16 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadTypeContent::$id ~ MODPATH/_modules/download/classes/controller/backend/downloadtype.php [ 536 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadtype.php(536): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 536, Array)
#1 [internal function]: Controller_Backend_DownloadType->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadType))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 12:16:34 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadTypeContent::$id ~ MODPATH/_modules/download/classes/controller/backend/downloadtype.php [ 536 ]
2014-06-14 12:16:34 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadTypeContent::$id ~ MODPATH/_modules/download/classes/controller/backend/downloadtype.php [ 536 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadtype.php(536): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 536, Array)
#1 [internal function]: Controller_Backend_DownloadType->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadType))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 12:16:58 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_DownloadType::$downloadType ~ MODPATH/_modules/download/classes/controller/backend/downloadtype.php [ 536 ]
2014-06-14 12:16:58 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_DownloadType::$downloadType ~ MODPATH/_modules/download/classes/controller/backend/downloadtype.php [ 536 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadtype.php(536): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 536, Array)
#1 [internal function]: Controller_Backend_DownloadType->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadType))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 12:17:31 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_DownloadType::$downloadyype ~ MODPATH/_modules/download/classes/controller/backend/downloadtype.php [ 536 ]
2014-06-14 12:17:31 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_DownloadType::$downloadyype ~ MODPATH/_modules/download/classes/controller/backend/downloadtype.php [ 536 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadtype.php(536): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 536, Array)
#1 [internal function]: Controller_Backend_DownloadType->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadType))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 12:17:39 --- ERROR: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/download/views/download/backend/downloadtype_edit.php [ 7 ]
2014-06-14 12:17:39 --- STRACE: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/download/views/download/backend/downloadtype_edit.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadtype_edit.php(7): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadType))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 12:18:03 --- ERROR: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/download/views/download/backend/downloadtype_edit.php [ 7 ]
2014-06-14 12:18:03 --- STRACE: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/download/views/download/backend/downloadtype_edit.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadtype_edit.php(7): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadType))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 12:18:29 --- ERROR: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/download/views/download/backend/downloadtype_edit.php [ 7 ]
2014-06-14 12:18:29 --- STRACE: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/download/views/download/backend/downloadtype_edit.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadtype_edit.php(7): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadType))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 12:18:39 --- ERROR: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/download/views/download/backend/downloadtype_edit.php [ 7 ]
2014-06-14 12:18:39 --- STRACE: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/download/views/download/backend/downloadtype_edit.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadtype_edit.php(7): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadType))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 12:23:33 --- ERROR: ErrorException [ 8 ]: Undefined index: visible ~ MODPATH/_modules/download/classes/controller/backend/downloadtype.php [ 401 ]
2014-06-14 12:23:33 --- STRACE: ErrorException [ 8 ]: Undefined index: visible ~ MODPATH/_modules/download/classes/controller/backend/downloadtype.php [ 401 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadtype.php(401): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 401, Array)
#1 [internal function]: Controller_Backend_DownloadType->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadType))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 12:24:31 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_DownloadType::$banner ~ MODPATH/_modules/download/classes/controller/backend/downloadtype.php [ 413 ]
2014-06-14 12:24:31 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_DownloadType::$banner ~ MODPATH/_modules/download/classes/controller/backend/downloadtype.php [ 413 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadtype.php(413): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 413, Array)
#1 [internal function]: Controller_Backend_DownloadType->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadType))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-14 12:24:48 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadtype_view.php [ 12 ]
2014-06-14 12:24:48 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadtype_view.php [ 12 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadtype_view.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 12, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadType))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 12:27:26 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadtype_view.php [ 12 ]
2014-06-14 12:27:26 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadtype_view.php [ 12 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadtype_view.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 12, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadType))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 12:29:07 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'banner_id' in 'where clause' [ SELECT * FROM `tbl_download_type_content` WHERE `lang_id` IN ('1', '2') AND `banner_id` = '3' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-14 12:29:07 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'banner_id' in 'where clause' [ SELECT * FROM `tbl_download_type_content` WHERE `lang_id` IN ('1', '2') AND `banner_id` = '3' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtypecontent.php(198): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadtype.php(329): Model_DownloadTypeContent->find(Array)
#2 [internal function]: Controller_Backend_DownloadType->action_view()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadType))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-14 12:29:16 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadtype_view.php [ 12 ]
2014-06-14 12:29:16 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadtype_view.php [ 12 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadtype_view.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 12, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadType))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 12:30:39 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadtype_view.php [ 12 ]
2014-06-14 12:30:39 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadtype_view.php [ 12 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadtype_view.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 12, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadType))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 12:31:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: banner ~ MODPATH/_modules/download/views/download/backend/downloadtype_view.php [ 16 ]
2014-06-14 12:31:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: banner ~ MODPATH/_modules/download/views/download/backend/downloadtype_view.php [ 16 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadtype_view.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 16, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadType))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 12:31:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: prefix ~ MODPATH/_modules/download/views/download/backend/downloadtype_view.php [ 48 ]
2014-06-14 12:31:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: prefix ~ MODPATH/_modules/download/views/download/backend/downloadtype_view.php [ 48 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadtype_view.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 48, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadType))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 12:34:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/download/views/download/backend/downloadtype_add.php [ 7 ]
2014-06-14 12:34:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/download/views/download/backend/downloadtype_add.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadtype_add.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadType))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 12:35:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/download/views/download/backend/downloadtype_add.php [ 7 ]
2014-06-14 12:35:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/download/views/download/backend/downloadtype_add.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadtype_add.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadType))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 12:36:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/download/views/download/backend/downloadtype_add.php [ 7 ]
2014-06-14 12:36:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/download/views/download/backend/downloadtype_add.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadtype_add.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadType))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 12:37:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/download/views/download/backend/downloadtype_add.php [ 7 ]
2014-06-14 12:37:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/download/views/download/backend/downloadtype_add.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadtype_add.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadType))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 12:38:04 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_index.php [ 158 ]
2014-06-14 12:38:04 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_index.php [ 158 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_index.php(158): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 158, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 12:38:13 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_index.php [ 158 ]
2014-06-14 12:38:13 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_index.php [ 158 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_index.php(158): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 158, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-14 23:56:58 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$title ~ MODPATH/_modules/user/views/user/widget/stats_dashboard.php [ 20 ]
2014-06-14 23:56:58 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$title ~ MODPATH/_modules/user/views/user/widget/stats_dashboard.php [ 20 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/views/user/widget/stats_dashboard.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 20, Array)
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
#12 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(109): Kohana_Controller_Template->after()
#13 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(62): Controller_Themes_DefaultAdmin->after()
#14 [internal function]: Controller_Backend_BaseAdmin->after()
#15 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#16 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#18 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#19 {main}