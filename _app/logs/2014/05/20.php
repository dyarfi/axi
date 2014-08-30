<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-20 02:20:11 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/news/classes/controller/backend/news.php [ 587 ]
2014-05-20 02:20:11 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/news/classes/controller/backend/news.php [ 587 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/controller/backend/news.php(587): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 587, Array)
#1 [internal function]: Controller_Backend_News->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_News))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-20 02:20:17 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/news/classes/controller/backend/news.php [ 587 ]
2014-05-20 02:20:17 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/news/classes/controller/backend/news.php [ 587 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/controller/backend/news.php(587): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 587, Array)
#1 [internal function]: Controller_Backend_News->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_News))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-20 02:25:13 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_LanguageTranslate::$acl ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 24 ]
2014-05-20 02:25:13 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_LanguageTranslate::$acl ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 24 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(24): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 24, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->before()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-20 02:25:20 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_LanguageTranslate::$acl ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 24 ]
2014-05-20 02:25:20 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_LanguageTranslate::$acl ~ MODPATH/_modules/language/classes/controller/backend/languagetranslate.php [ 24 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/controller/backend/languagetranslate.php(24): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 24, Array)
#1 [internal function]: Controller_Backend_LanguageTranslate->before()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_LanguageTranslate))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-20 02:26:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/languagetranslate/news/11 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-05-20 02:26:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/languagetranslate/news/11 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-05-20 02:27:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/languagetranslate/news/11 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-05-20 02:27:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/languagetranslate/news/11 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-05-20 02:28:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/languagetranslate/news/11 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-05-20 02:28:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/languagetranslate/news/11 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-05-20 02:28:09 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/controller/themes/defaultblank.php [ 104 ]
2014-05-20 02:28:09 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/controller/themes/defaultblank.php [ 104 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-20 02:29:03 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2014-05-20 02:29:03 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-20 02:29:09 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2014-05-20 02:29:09 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-20 02:32:25 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2014-05-20 02:32:25 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-20 02:32:37 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2014-05-20 02:32:37 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-20 02:34:38 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2014-05-20 02:34:38 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-20 02:44:38 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 166 ]
2014-05-20 02:44:38 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 166 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(166): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 166, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-20 02:44:45 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 166 ]
2014-05-20 02:44:45 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 166 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(166): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 166, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-05-20 23:34:41 --- ERROR: ErrorException [ 8 ]: Undefined property: Acl::$acl ~ APPPATH/classes/acl.php [ 61 ]
2014-05-20 23:34:41 --- STRACE: ErrorException [ 8 ]: Undefined property: Acl::$acl ~ APPPATH/classes/acl.php [ 61 ]
--
#0 /Volumes/Data/www/offistarindo/_app/classes/acl.php(61): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 61, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/acl.php(17): Acl->__construct()
#2 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(18): Acl::instance()
#3 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(22): Controller_Themes_DefaultAdmin->before()
#4 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#5 [internal function]: Controller_Backend_Authentication->before()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#10 {main}
2014-05-20 23:34:42 --- ERROR: ErrorException [ 8 ]: Undefined property: Acl::$acl ~ APPPATH/classes/acl.php [ 61 ]
2014-05-20 23:34:42 --- STRACE: ErrorException [ 8 ]: Undefined property: Acl::$acl ~ APPPATH/classes/acl.php [ 61 ]
--
#0 /Volumes/Data/www/offistarindo/_app/classes/acl.php(61): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 61, Array)
#1 /Volumes/Data/www/offistarindo/_app/classes/acl.php(17): Acl->__construct()
#2 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(18): Acl::instance()
#3 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(22): Controller_Themes_DefaultAdmin->before()
#4 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/authentication.php(8): Controller_Backend_BaseAdmin->before()
#5 [internal function]: Controller_Backend_Authentication->before()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#10 {main}
2014-05-20 23:53:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: news ~ MODPATH/_modules/news/views/news/backend/news_index.php [ 96 ]
2014-05-20 23:53:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: news ~ MODPATH/_modules/news/views/news/backend/news_index.php [ 96 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/news/views/news/backend/news_index.php(96): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 96, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/defaultadmin.php(62): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultadmin.php(102): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(64): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_News))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}