<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-25 02:26:03 --- ERROR: ErrorException [ 8 ]: Undefined index: order ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_add.php [ 64 ]
2014-04-25 02:26:03 --- STRACE: ErrorException [ 8 ]: Undefined index: order ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_add.php [ 64 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/views/testimonial/backend/testimonial_add.php(64): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 64, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-25 13:26:40 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 76 ]
2014-04-25 13:26:40 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 76 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(76): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 76, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-25 13:26:55 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 76 ]
2014-04-25 13:26:55 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 76 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(76): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 76, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-25 13:29:08 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 76 ]
2014-04-25 13:29:08 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 76 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(76): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 76, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-25 13:31:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact/xhr_contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-04-25 13:31:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact/xhr_contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-25 13:33:15 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 76 ]
2014-04-25 13:33:15 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 76 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(76): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 76, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-25 13:34:19 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 76 ]
2014-04-25 13:34:19 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 76 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(76): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 76, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-25 13:36:42 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Api_Api::$setting ~ MODPATH/_modules/site/classes/controller/api/api.php [ 78 ]
2014-04-25 13:36:42 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Api_Api::$setting ~ MODPATH/_modules/site/classes/controller/api/api.php [ 78 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/api/api.php(78): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 78, Array)
#1 [internal function]: Controller_Api_Api->action_xhr_contact()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api_Api))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-25 13:37:48 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 76 ]
2014-04-25 13:37:48 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 76 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(76): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 76, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-25 13:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/xhr_contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-04-25 13:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/xhr_contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-25 13:39:17 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 76 ]
2014-04-25 13:39:17 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 76 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(76): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 76, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-25 13:52:26 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 76 ]
2014-04-25 13:52:26 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 76 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(76): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 76, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-25 13:53:18 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 76 ]
2014-04-25 13:53:18 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 76 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(76): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 76, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-25 13:54:21 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Api_Api::$setting ~ MODPATH/_modules/site/classes/controller/api/api.php [ 78 ]
2014-04-25 13:54:21 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Api_Api::$setting ~ MODPATH/_modules/site/classes/controller/api/api.php [ 78 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/api/api.php(78): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 78, Array)
#1 [internal function]: Controller_Api_Api->action_xhr_contact()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api_Api))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-25 13:55:04 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 76 ]
2014-04-25 13:55:04 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 76 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(76): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 76, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-25 13:55:29 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 76 ]
2014-04-25 13:55:29 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 76 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(76): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 76, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-25 13:55:52 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 76 ]
2014-04-25 13:55:52 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 76 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(76): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 76, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-25 13:57:00 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 76 ]
2014-04-25 13:57:00 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 76 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(76): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 76, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-25 13:57:35 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 76 ]
2014-04-25 13:57:35 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 76 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(76): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 76, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-25 13:58:28 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/controller/themes/defaultapi.php [ 40 ]
2014-04-25 13:58:28 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/controller/themes/defaultapi.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-25 14:52:32 --- ERROR: ErrorException [ 8 ]: Undefined index: corporate_phone.ext ~ MODPATH/_modules/site/classes/controller/api/api.php [ 175 ]
2014-04-25 14:52:32 --- STRACE: ErrorException [ 8 ]: Undefined index: corporate_phone.ext ~ MODPATH/_modules/site/classes/controller/api/api.php [ 175 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/api/api.php(175): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 175, Array)
#1 [internal function]: Controller_Api_Api->action_xhr_contact()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api_Api))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-25 14:52:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: name ~ MODPATH/_modules/site/views/email/contact_form_admin.php [ 79 ]
2014-04-25 14:52:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: name ~ MODPATH/_modules/site/views/email/contact_form_admin.php [ 79 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/email/contact_form_admin.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 79, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/api/api.php(199): Kohana_View->render()
#4 [internal function]: Controller_Api_Api->action_xhr_contact()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api_Api))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#9 {main}
2014-04-25 14:54:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: email ~ MODPATH/_modules/site/views/email/contact_form_admin.php [ 80 ]
2014-04-25 14:54:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: email ~ MODPATH/_modules/site/views/email/contact_form_admin.php [ 80 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/email/contact_form_admin.php(80): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 80, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/api/api.php(200): Kohana_View->render()
#4 [internal function]: Controller_Api_Api->action_xhr_contact()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api_Api))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#9 {main}
2014-04-25 14:56:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL xhr_contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-25 14:56:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL xhr_contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-25 14:56:59 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ MODPATH/_modules/site/classes/controller/contact.php [ 235 ]
2014-04-25 14:56:59 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ MODPATH/_modules/site/classes/controller/contact.php [ 235 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(235): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 235, Array)
#1 [internal function]: Controller_Contact->action_xhr_contact()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-25 14:58:38 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ MODPATH/_modules/site/classes/controller/contact.php [ 235 ]
2014-04-25 14:58:38 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ MODPATH/_modules/site/classes/controller/contact.php [ 235 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(235): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 235, Array)
#1 [internal function]: Controller_Contact->action_xhr_contact()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-25 14:59:01 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ MODPATH/_modules/site/classes/controller/contact.php [ 235 ]
2014-04-25 14:59:01 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ MODPATH/_modules/site/classes/controller/contact.php [ 235 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(235): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 235, Array)
#1 [internal function]: Controller_Contact->action_xhr_contact()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-25 14:59:29 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ MODPATH/_modules/site/classes/controller/contact.php [ 235 ]
2014-04-25 14:59:29 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ MODPATH/_modules/site/classes/controller/contact.php [ 235 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(235): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 235, Array)
#1 [internal function]: Controller_Contact->action_xhr_contact()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-25 15:11:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: mobile ~ MODPATH/_modules/site/views/email/contact_form_admin.php [ 82 ]
2014-04-25 15:11:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: mobile ~ MODPATH/_modules/site/views/email/contact_form_admin.php [ 82 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/email/contact_form_admin.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 82, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(223): Kohana_View->render()
#4 [internal function]: Controller_Contact->action_xhr_contact()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#9 {main}
2014-04-25 15:11:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: mobile ~ MODPATH/_modules/site/views/email/contact_form_admin.php [ 82 ]
2014-04-25 15:11:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: mobile ~ MODPATH/_modules/site/views/email/contact_form_admin.php [ 82 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/email/contact_form_admin.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 82, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(223): Kohana_View->render()
#4 [internal function]: Controller_Contact->action_xhr_contact()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#9 {main}
2014-04-25 16:15:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL setting/edit/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-25 16:15:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL setting/edit/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}