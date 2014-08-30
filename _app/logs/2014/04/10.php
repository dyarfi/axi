<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-10 00:52:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: email_contact ~ MODPATH/_modules/site/classes/controller/contact.php [ 56 ]
2014-04-10 00:52:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: email_contact ~ MODPATH/_modules/site/classes/controller/contact.php [ 56 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 56, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-10 01:35:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: no_contact ~ MODPATH/_modules/site/views/site/contact_page.php [ 172 ]
2014-04-10 01:35:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: no_contact ~ MODPATH/_modules/site/views/site/contact_page.php [ 172 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/contact_page.php(172): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 172, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(75): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(218): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Contact))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-04-10 01:46:38 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Setting::load_by_paramater() ~ MODPATH/_modules/site/classes/controller/contact.php [ 48 ]
2014-04-10 01:46:38 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Setting::load_by_paramater() ~ MODPATH/_modules/site/classes/controller/contact.php [ 48 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-10 02:27:53 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Contact::$settings ~ MODPATH/_modules/site/classes/controller/contact.php [ 177 ]
2014-04-10 02:27:53 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Contact::$settings ~ MODPATH/_modules/site/classes/controller/contact.php [ 177 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(177): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 177, Array)
#1 [internal function]: Controller_Contact->action_xhr_contact()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-10 02:28:11 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Contact::$settings ~ MODPATH/_modules/site/classes/controller/contact.php [ 177 ]
2014-04-10 02:28:11 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Contact::$settings ~ MODPATH/_modules/site/classes/controller/contact.php [ 177 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(177): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 177, Array)
#1 [internal function]: Controller_Contact->action_xhr_contact()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-10 02:29:10 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Contact::$settings ~ MODPATH/_modules/site/classes/controller/contact.php [ 33 ]
2014-04-10 02:29:10 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Contact::$settings ~ MODPATH/_modules/site/classes/controller/contact.php [ 33 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(33): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 33, Array)
#1 [internal function]: Controller_Contact->before()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-10 02:29:21 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Contact::$settings ~ MODPATH/_modules/site/classes/controller/contact.php [ 33 ]
2014-04-10 02:29:21 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Contact::$settings ~ MODPATH/_modules/site/classes/controller/contact.php [ 33 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(33): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 33, Array)
#1 [internal function]: Controller_Contact->before()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-10 02:31:31 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Contact::$setting ~ MODPATH/_modules/site/classes/controller/contact.php [ 69 ]
2014-04-10 02:31:31 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Contact::$setting ~ MODPATH/_modules/site/classes/controller/contact.php [ 69 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(69): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 69, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-10 02:32:48 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 101 ]
2014-04-10 02:32:48 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 101 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-10 02:33:22 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Contact::$settings ~ MODPATH/_modules/site/classes/controller/contact.php [ 100 ]
2014-04-10 02:33:22 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Contact::$settings ~ MODPATH/_modules/site/classes/controller/contact.php [ 100 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(100): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 100, Array)
#1 [internal function]: Controller_Contact->action_xhr_contact()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-10 02:34:16 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Contact::$settings ~ MODPATH/_modules/site/classes/controller/contact.php [ 100 ]
2014-04-10 02:34:16 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Contact::$settings ~ MODPATH/_modules/site/classes/controller/contact.php [ 100 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(100): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 100, Array)
#1 [internal function]: Controller_Contact->action_xhr_contact()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-10 02:34:42 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Contact::$settings ~ MODPATH/_modules/site/classes/controller/contact.php [ 100 ]
2014-04-10 02:34:42 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Contact::$settings ~ MODPATH/_modules/site/classes/controller/contact.php [ 100 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(100): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 100, Array)
#1 [internal function]: Controller_Contact->action_xhr_contact()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-10 02:34:48 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Contact::$settings ~ MODPATH/_modules/site/classes/controller/contact.php [ 100 ]
2014-04-10 02:34:48 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Contact::$settings ~ MODPATH/_modules/site/classes/controller/contact.php [ 100 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(100): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 100, Array)
#1 [internal function]: Controller_Contact->action_xhr_contact()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-10 02:35:21 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 101 ]
2014-04-10 02:35:21 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 101 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-10 02:35:34 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 101 ]
2014-04-10 02:35:34 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 101 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-10 03:19:11 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ MODPATH/email/classes/email.php [ 65 ]
2014-04-10 03:19:11 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ MODPATH/email/classes/email.php [ 65 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/email/classes/email.php(65): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Volumes/Data/w...', 65, Array)
#1 /Volumes/Data/www/offistarindo/_mod/email/classes/email.php(85): Email::instance(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(213): Email::send(Array, 'noreply@www.off...', 'Contact dari - ...', '<!DOCTYPE html>...', true)
#3 [internal function]: Controller_Contact->action_xhr_contact()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-04-10 03:19:18 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ MODPATH/email/classes/email.php [ 65 ]
2014-04-10 03:19:18 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ MODPATH/email/classes/email.php [ 65 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/email/classes/email.php(65): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Volumes/Data/w...', 65, Array)
#1 /Volumes/Data/www/offistarindo/_mod/email/classes/email.php(85): Email::instance(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(213): Email::send(Array, 'noreply@www.off...', 'Contact dari - ...', '<!DOCTYPE html>...', true)
#3 [internal function]: Controller_Contact->action_xhr_contact()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-04-10 03:21:38 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 76 ]
2014-04-10 03:21:38 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 76 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(76): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 76, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-10 03:31:23 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 76 ]
2014-04-10 03:31:23 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/contact.php [ 76 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(76): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 76, Array)
#1 [internal function]: Controller_Contact->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-10 03:53:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 03:53:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 03:55:17 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 129 ]
2014-04-10 03:55:17 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 129 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(129): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 129, Array)
#1 [internal function]: Controller_Solution->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-10 03:56:17 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 129 ]
2014-04-10 03:56:17 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 129 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(129): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 129, Array)
#1 [internal function]: Controller_Solution->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-10 03:57:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_files ~ MODPATH/_modules/site/classes/controller/solution.php [ 123 ]
2014-04-10 03:57:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_files ~ MODPATH/_modules/site/classes/controller/solution.php [ 123 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(123): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 123, Array)
#1 [internal function]: Controller_Solution->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-10 03:57:20 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 144 ]
2014-04-10 03:57:20 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 144 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(144): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 144, Array)
#1 [internal function]: Controller_Solution->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-10 03:57:27 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 143 ]
2014-04-10 03:57:27 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/solution.php [ 143 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(143): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 143, Array)
#1 [internal function]: Controller_Solution->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-10 03:58:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: about_pages ~ MODPATH/_modules/site/views/site/about_page.php [ 9 ]
2014-04-10 03:58:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: about_pages ~ MODPATH/_modules/site/views/site/about_page.php [ 9 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/about_page.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 9, Array)
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
2014-04-10 03:59:27 --- ERROR: View_Exception [ 0 ]: The requested view site/solution_detail_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-04-10 03:59:27 --- STRACE: View_Exception [ 0 ]: The requested view site/solution_detail_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('site/solution_d...')
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(30): Kohana_View->__construct('site/solution_d...', NULL)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(143): Kohana_View::factory('site/solution_d...')
#3 [internal function]: Controller_Solution->action_read()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-04-10 03:59:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: solution_categories ~ MODPATH/_modules/site/views/site/solution_page.php [ 9 ]
2014-04-10 03:59:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: solution_categories ~ MODPATH/_modules/site/views/site/solution_page.php [ 9 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/solution_page.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 9, Array)
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
2014-04-10 04:03:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:03:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:03:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:03:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:03:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:03:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:03:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:03:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:03:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:03:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:03:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:03:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:04:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:04:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:04:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:04:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:05:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:05:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:05:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:05:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:05:58 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Solution::$category ~ MODPATH/_modules/solution/views/solution/backend/solution_index.php [ 66 ]
2014-04-10 04:05:58 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Solution::$category ~ MODPATH/_modules/solution/views/solution/backend/solution_index.php [ 66 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solution_index.php(66): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 66, Array)
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
2014-04-10 04:06:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:06:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:06:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:06:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:07:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:07:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:07:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:07:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:07:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:07:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:07:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:07:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:08:41 --- ERROR: ErrorException [ 2048 ]: Non-static method Model_SolutionCategory::load() should not be called statically ~ MODPATH/_modules/solution/views/solution/backend/solution_index.php [ 66 ]
2014-04-10 04:08:41 --- STRACE: ErrorException [ 2048 ]: Non-static method Model_SolutionCategory::load() should not be called statically ~ MODPATH/_modules/solution/views/solution/backend/solution_index.php [ 66 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solution_index.php(66): Kohana_Core::error_handler(2048, 'Non-static meth...', '/Volumes/Data/w...', 66, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solution_index.php(66): Model_SolutionCategory::load()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#10 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(65): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Solution))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#16 {main}
2014-04-10 04:08:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting ',' or ';' ~ MODPATH/_modules/solution/views/solution/backend/solution_index.php [ 66 ]
2014-04-10 04:08:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting ',' or ';' ~ MODPATH/_modules/solution/views/solution/backend/solution_index.php [ 66 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-10 04:16:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_index.php [ 5 ]
2014-04-10 04:16:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_index.php [ 5 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solutioncategory_index.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 5, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-10 04:16:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_index.php [ 5 ]
2014-04-10 04:16:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_index.php [ 5 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solutioncategory_index.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 5, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-10 04:17:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH/_modules/solution/views/solution/backend/solution_index.php [ 75 ]
2014-04-10 04:17:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH/_modules/solution/views/solution/backend/solution_index.php [ 75 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solution_index.php(75): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 75, Array)
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
2014-04-10 04:17:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_index.php [ 110 ]
2014-04-10 04:17:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_index.php [ 110 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solutioncategory_index.php(110): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 110, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-10 04:18:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_index.php [ 110 ]
2014-04-10 04:18:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH/_modules/solution/views/solution/backend/solutioncategory_index.php [ 110 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/solution/views/solution/backend/solutioncategory_index.php(110): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 110, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_SolutionCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-10 04:23:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:23:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:23:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:23:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:24:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:24:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:24:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:24:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:25:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:25:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:28:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:28:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:28:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:28:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:28:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:28:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:29:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:29:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:29:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:29:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:29:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:29:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:29:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:29:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:29:46 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 285 ]
2014-04-10 04:29:46 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 285 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(285): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 285, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(182): Controller_Company->_read_news('loader.gif')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-10 04:29:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/opa75.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:29:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/opa75.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:29:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:29:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/opa75.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/opa75.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:29:58 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 285 ]
2014-04-10 04:29:58 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 285 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(285): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 285, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(182): Controller_Company->_read_news('loader.gif')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-10 04:30:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:30:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:30:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/opa75.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:30:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/opa75.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:30:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:30:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:30:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:30:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:30:07 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 285 ]
2014-04-10 04:30:07 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 285 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(285): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 285, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(182): Controller_Company->_read_news('loader.gif')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-10 04:30:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:30:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:30:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:30:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:30:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/opa75.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:30:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/opa75.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:30:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:30:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:30:09 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 285 ]
2014-04-10 04:30:09 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 285 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(285): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 285, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(182): Controller_Company->_read_news('loader.gif')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-10 04:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/opa75.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/opa75.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:30:11 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 285 ]
2014-04-10 04:30:11 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 285 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(285): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 285, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(182): Controller_Company->_read_news('loader.gif')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-10 04:30:12 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 285 ]
2014-04-10 04:30:12 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 285 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(285): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 285, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(182): Controller_Company->_read_news('loader.gif')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-10 04:30:13 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 285 ]
2014-04-10 04:30:13 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 285 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(285): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 285, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(182): Controller_Company->_read_news('loader.gif')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-10 04:30:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:30:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:30:18 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 285 ]
2014-04-10 04:30:18 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 285 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(285): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 285, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(182): Controller_Company->_read_news('loader.gif')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-10 04:30:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:30:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:30:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:30:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:30:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/opa75.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:30:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/opa75.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:30:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/opa75.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:30:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/opa75.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:30:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:30:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:30:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:30:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:30:22 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 285 ]
2014-04-10 04:30:22 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 285 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(285): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 285, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(182): Controller_Company->_read_news('loader.gif')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-10 04:30:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:30:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:31:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:31:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:31:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:31:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:31:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/opa75.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:31:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/opa75.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:31:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:31:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:31:05 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 285 ]
2014-04-10 04:31:05 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 285 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(285): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 285, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(182): Controller_Company->_read_news('loader.gif')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-10 04:31:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:31:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:31:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:31:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:31:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:31:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:35:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: offset ~ MODPATH/_modules/site/classes/controller/company.php [ 229 ]
2014-04-10 04:35:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: offset ~ MODPATH/_modules/site/classes/controller/company.php [ 229 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(229): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 229, Array)
#1 [internal function]: Controller_Company->action_newsevent()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-10 04:36:20 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Company::$_class_name ~ MODPATH/_modules/site/classes/controller/company.php [ 232 ]
2014-04-10 04:36:20 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Company::$_class_name ~ MODPATH/_modules/site/classes/controller/company.php [ 232 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(232): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 232, Array)
#1 [internal function]: Controller_Company->action_newsevent()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-10 04:36:29 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'category_id' in 'where clause' [ SELECT * FROM `tbl_news` WHERE `id` != '1' AND `category_id` = '15' AND `status` = 'publish' ORDER BY   `news_date` desc LIMIT 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-04-10 04:36:29 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'category_id' in 'where clause' [ SELECT * FROM `tbl_news` WHERE `id` != '1' AND `category_id` = '15' AND `status` = 'publish' ORDER BY   `news_date` desc LIMIT 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/model/news.php(223): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(234): Model_News->find(Array, Array, 4, '')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-10 04:37:16 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'category_id' in 'where clause' [ SELECT * FROM `tbl_news` WHERE `id` != '1' AND `category_id` = '15' AND `status` = 'publish' ORDER BY   `news_date` desc LIMIT 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-04-10 04:37:16 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'category_id' in 'where clause' [ SELECT * FROM `tbl_news` WHERE `id` != '1' AND `category_id` = '15' AND `status` = 'publish' ORDER BY   `news_date` desc LIMIT 4 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/model/news.php(223): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(234): Model_News->find(Array, Array, 4, '')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-10 04:37:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: total_rows ~ MODPATH/_modules/site/classes/controller/company.php [ 239 ]
2014-04-10 04:37:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: total_rows ~ MODPATH/_modules/site/classes/controller/company.php [ 239 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(239): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 239, Array)
#1 [internal function]: Controller_Company->action_newsevent()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-10 04:37:51 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Company::$user ~ MODPATH/_modules/site/classes/controller/company.php [ 223 ]
2014-04-10 04:37:51 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Company::$user ~ MODPATH/_modules/site/classes/controller/company.php [ 223 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(223): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 223, Array)
#1 [internal function]: Controller_Company->action_newsevent()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-10 04:38:08 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'category_id' in 'where clause' [ SELECT * FROM `tbl_news` WHERE `id` != '1' AND `category_id` = '15' AND `status` = 'publish' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-04-10 04:38:08 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'category_id' in 'where clause' [ SELECT * FROM `tbl_news` WHERE `id` != '1' AND `category_id` = '15' AND `status` = 'publish' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/model/news.php(288): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(223): Model_News->find_count(Array)
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-10 04:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:39:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:39:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:40:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:40:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:40:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:40:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:40:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:40:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:40:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:40:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:40:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:40:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:40:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:40:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:40:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:40:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:40:53 --- ERROR: View_Exception [ 0 ]: The requested view digg could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-04-10 04:40:53 --- STRACE: View_Exception [ 0 ]: The requested view digg could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('digg')
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(30): Kohana_View->__construct('digg', NULL)
#2 /Volumes/Data/www/offistarindo/_mod/pagination/classes/kohana/pagination.php(254): Kohana_View::factory('digg')
#3 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/newsevent_page.php(37): Kohana_Pagination->render('digg')
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#7 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Themes_Default->after()
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#14 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#17 {main}
2014-04-10 04:40:58 --- ERROR: View_Exception [ 0 ]: The requested view default could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-04-10 04:40:58 --- STRACE: View_Exception [ 0 ]: The requested view default could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('default')
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(30): Kohana_View->__construct('default', NULL)
#2 /Volumes/Data/www/offistarindo/_mod/pagination/classes/kohana/pagination.php(254): Kohana_View::factory('default')
#3 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/newsevent_page.php(37): Kohana_Pagination->render('default')
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#7 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Themes_Default->after()
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#14 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#17 {main}
2014-04-10 04:42:26 --- ERROR: View_Exception [ 0 ]: The requested view site could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-04-10 04:42:26 --- STRACE: View_Exception [ 0 ]: The requested view site could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('site')
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(30): Kohana_View->__construct('site', NULL)
#2 /Volumes/Data/www/offistarindo/_mod/pagination/classes/kohana/pagination.php(254): Kohana_View::factory('site')
#3 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/newsevent_page.php(37): Kohana_Pagination->render('site')
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#7 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(73): Kohana_View->__toString()
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(219): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Themes_Default->after()
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Company))
#14 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#17 {main}
2014-04-10 04:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:44:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:44:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:44:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:44:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:44:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:44:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:45:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:45:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:45:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:45:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:45:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:45:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:46:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:46:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:46:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:46:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:46:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:46:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:46:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:46:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:46:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:46:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:47:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:47:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:47:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:47:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:47:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:47:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:47:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:47:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:47:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:47:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:47:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:47:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:47:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:47:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:48:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:48:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:48:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:48:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:48:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:48:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:48:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:48:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:48:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:48:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:48:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:48:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:48:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:48:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:48:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:48:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:48:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:48:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:49:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:49:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:49:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:49:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:50:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:50:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:50:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:50:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:50:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:50:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:50:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:50:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:51:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:51:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:51:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:51:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:51:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:51:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:51:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:51:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:52:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:52:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:53:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:53:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:53:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:53:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:54:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:54:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:54:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:54:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:54:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:54:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:55:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:55:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:55:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:55:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:55:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:55:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:55:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:55:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:55:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:55:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:56:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:56:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:56:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:56:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:56:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:56:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:57:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:57:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:57:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:57:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:59:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:59:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:59:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:59:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:59:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:59:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:59:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:59:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:59:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:59:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:59:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:59:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:59:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:59:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 04:59:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 04:59:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:00:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:00:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:00:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:00:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:00:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:00:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:00:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:00:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:01:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:01:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:01:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:01:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:01:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:01:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:03:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:03:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:03:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:03:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:03:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:03:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:03:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:03:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:03:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:03:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:03:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:03:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/assets/images/themes/material/list-submenu2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:07:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL html/support.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-10 05:07:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL html/support.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-10 05:17:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-10 05:17:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-10 05:17:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-04-10 05:17:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-04-10 05:44:19 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 299 ]
2014-04-10 05:44:19 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 299 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(299): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 299, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(179): Controller_Company->_read_news('loader.gif')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-10 05:44:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:44:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:44:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:44:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/icon-arr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:44:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/opa75.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:44:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/opa75.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:44:21 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 299 ]
2014-04-10 05:44:21 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 299 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(299): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 299, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(179): Controller_Company->_read_news('loader.gif')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-10 05:45:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/opa75.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:45:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/opa75.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:45:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/icon-arr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:45:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/icon-arr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:45:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/icon-arr2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:45:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/icon-arr2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:45:42 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 299 ]
2014-04-10 05:45:42 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 299 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(299): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 299, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(179): Controller_Company->_read_news('loader.gif')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-10 05:45:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/icon-arr2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:45:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/icon-arr2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:45:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/icon-arr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:45:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/icon-arr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:45:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/opa75.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:45:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/opa75.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:45:49 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 299 ]
2014-04-10 05:45:49 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 299 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(299): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 299, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(179): Controller_Company->_read_news('loader.gif')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-10 05:45:51 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 299 ]
2014-04-10 05:45:51 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 299 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(299): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 299, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(179): Controller_Company->_read_news('loader.gif')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-10 05:45:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/icon-arr2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:45:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/icon-arr2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:45:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/icon-arr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:45:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/icon-arr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:45:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/icon-arr2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:45:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/icon-arr2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:45:53 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 299 ]
2014-04-10 05:45:53 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 299 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(299): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 299, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(179): Controller_Company->_read_news('loader.gif')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-10 05:46:03 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 299 ]
2014-04-10 05:46:03 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 299 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(299): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 299, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(179): Controller_Company->_read_news('loader.gif')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-10 05:46:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/icon-arr2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:46:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/icon-arr2.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:46:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/icon-arr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:46:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/icon-arr.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:46:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/opa75.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 05:46:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/material/opa75.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 05:47:01 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 299 ]
2014-04-10 05:47:01 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 299 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(299): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 299, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(179): Controller_Company->_read_news('loader.gif')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-10 05:47:04 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 299 ]
2014-04-10 05:47:04 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 299 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(299): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 299, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(179): Controller_Company->_read_news('loader.gif')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-10 05:47:07 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 299 ]
2014-04-10 05:47:07 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/company.php [ 299 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(299): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 299, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/company.php(179): Controller_Company->_read_news('loader.gif')
#2 [internal function]: Controller_Company->action_newsevent()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Company))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-10 06:01:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/b614054cd4f5509dd49dbf26736bdae7.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-10 06:01:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/news/b614054cd4f5509dd49dbf26736bdae7.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-10 21:22:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH/_modules/download/config/download.php [ 89 ]
2014-04-10 21:22:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH/_modules/download/config/download.php [ 89 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}