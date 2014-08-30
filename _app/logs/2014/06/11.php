<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-11 01:38:02 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_member' doesn't exist [ SELECT * FROM `tbl_member` WHERE `user_id` = '4'LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-11 01:38:02 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_member' doesn't exist [ SELECT * FROM `tbl_member` WHERE `user_id` = '4'LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/member/classes/model/member.php(242): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/member/classes/model/member.php(110): Model_Member->find(Array, '', 1)
#2 /Volumes/Data/www/offistarindo/_app/classes/acl.php(92): Model_Member->load('4')
#3 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(45): Acl->user_history('member', 'edit')
#4 /Volumes/Data/www/offistarindo/_mod/_modules/member/classes/controller/backend/member.php(19): Controller_Backend_BaseAdmin->before()
#5 [internal function]: Controller_Backend_Member->before()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#10 {main}
2014-06-11 01:42:02 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_member' doesn't exist [ SELECT * FROM `tbl_member` WHERE `user_id` = '4'LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-11 01:42:02 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_member' doesn't exist [ SELECT * FROM `tbl_member` WHERE `user_id` = '4'LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/member/classes/model/member.php(242): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/member/classes/model/member.php(110): Model_Member->find(Array, '', 1)
#2 /Volumes/Data/www/offistarindo/_app/classes/acl.php(92): Model_Member->load('4')
#3 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(45): Acl->user_history('member', 'edit')
#4 /Volumes/Data/www/offistarindo/_mod/_modules/member/classes/controller/backend/member.php(19): Controller_Backend_BaseAdmin->before()
#5 [internal function]: Controller_Backend_Member->before()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#10 {main}
2014-06-11 01:45:05 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_member' doesn't exist [ SELECT * FROM `tbl_member` WHERE `user_id` = '4'LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-11 01:45:05 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_member' doesn't exist [ SELECT * FROM `tbl_member` WHERE `user_id` = '4'LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/member/classes/model/member.php(242): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/member/classes/model/member.php(110): Model_Member->find(Array, '', 1)
#2 /Volumes/Data/www/offistarindo/_app/classes/acl.php(92): Model_Member->load('4')
#3 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(45): Acl->user_history('member', 'edit')
#4 /Volumes/Data/www/offistarindo/_mod/_modules/member/classes/controller/backend/member.php(19): Controller_Backend_BaseAdmin->before()
#5 [internal function]: Controller_Backend_Member->before()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#10 {main}
2014-06-11 01:45:06 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_member' doesn't exist [ SELECT * FROM `tbl_member` WHERE `user_id` = '4'LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-11 01:45:06 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_member' doesn't exist [ SELECT * FROM `tbl_member` WHERE `user_id` = '4'LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/member/classes/model/member.php(242): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/member/classes/model/member.php(110): Model_Member->find(Array, '', 1)
#2 /Volumes/Data/www/offistarindo/_app/classes/acl.php(92): Model_Member->load('4')
#3 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(45): Acl->user_history('member', 'edit')
#4 /Volumes/Data/www/offistarindo/_mod/_modules/member/classes/controller/backend/member.php(19): Controller_Backend_BaseAdmin->before()
#5 [internal function]: Controller_Backend_Member->before()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#10 {main}
2014-06-11 01:45:37 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_member' doesn't exist [ SELECT * FROM `tbl_member` WHERE `user_id` = '4'LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-11 01:45:37 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_member' doesn't exist [ SELECT * FROM `tbl_member` WHERE `user_id` = '4'LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/member/classes/model/member.php(242): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/member/classes/model/member.php(110): Model_Member->find(Array, '', 1)
#2 /Volumes/Data/www/offistarindo/_app/classes/acl.php(92): Model_Member->load('4')
#3 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(45): Acl->user_history('member', 'edit')
#4 /Volumes/Data/www/offistarindo/_mod/_modules/member/classes/controller/backend/member.php(19): Controller_Backend_BaseAdmin->before()
#5 [internal function]: Controller_Backend_Member->before()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#10 {main}
2014-06-11 01:46:28 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_member' doesn't exist [ SELECT * FROM `tbl_member` WHERE `user_id` = '4'LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-11 01:46:28 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_member' doesn't exist [ SELECT * FROM `tbl_member` WHERE `user_id` = '4'LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/member/classes/model/member.php(242): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/member/classes/model/member.php(110): Model_Member->find(Array, '', 1)
#2 /Volumes/Data/www/offistarindo/_app/classes/acl.php(92): Model_Member->load('4')
#3 /Volumes/Data/www/offistarindo/_app/classes/controller/backend/baseadmin.php(45): Acl->user_history('member', 'edit')
#4 /Volumes/Data/www/offistarindo/_mod/_modules/member/classes/controller/backend/member.php(19): Controller_Backend_BaseAdmin->before()
#5 [internal function]: Controller_Backend_Member->before()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#10 {main}
2014-06-11 09:51:21 --- ERROR: ErrorException [ 8 ]: Undefined index: church ~ MODPATH/_modules/member/views/member/backend/member_add.php [ 110 ]
2014-06-11 09:51:21 --- STRACE: ErrorException [ 8 ]: Undefined index: church ~ MODPATH/_modules/member/views/member/backend/member_add.php [ 110 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/member/views/member/backend/member_add.php(110): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 110, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-11 09:55:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _mod/_modules/member/classes/model/member.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-11 09:55:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _mod/_modules/member/classes/model/member.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-06-11 20:46:27 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 166 ]
2014-06-11 20:46:27 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 166 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(166): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 166, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-11 20:52:01 --- ERROR: ErrorException [ 8 ]: Undefined index: show_cover ~ MODPATH/_modules/page/views/page/backend/page_edit.php [ 47 ]
2014-06-11 20:52:01 --- STRACE: ErrorException [ 8 ]: Undefined index: show_cover ~ MODPATH/_modules/page/views/page/backend/page_edit.php [ 47 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/views/page/backend/page_edit.php(47): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 47, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-11 21:25:07 --- ERROR: ErrorException [ 8 ]: Undefined index: show_cover ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_edit.php [ 41 ]
2014-06-11 21:25:07 --- STRACE: ErrorException [ 8 ]: Undefined index: show_cover ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_edit.php [ 41 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/views/testimonial/backend/testimonial_edit.php(41): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 41, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-11 22:09:28 --- ERROR: ErrorException [ 8 ]: Use of undefined constant page_upload_path - assumed 'page_upload_path' ~ MODPATH/_modules/site/views/site/home_page.php [ 52 ]
2014-06-11 22:09:28 --- STRACE: ErrorException [ 8 ]: Use of undefined constant page_upload_path - assumed 'page_upload_path' ~ MODPATH/_modules/site/views/site/home_page.php [ 52 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(52): Kohana_Core::error_handler(8, 'Use of undefine...', '/Volumes/Data/w...', 52, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(98): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(80): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-11 22:09:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: page_upload_path ~ MODPATH/_modules/site/views/site/home_page.php [ 52 ]
2014-06-11 22:09:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: page_upload_path ~ MODPATH/_modules/site/views/site/home_page.php [ 52 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 52, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(98): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(80): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-11 22:16:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: page ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 24 ]
2014-06-11 22:16:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: page ~ MODPATH/_modules/testimonial/views/testimonial/backend/testimonial_view.php [ 24 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/views/testimonial/backend/testimonial_view.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 24, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-11 22:18:09 --- ERROR: ErrorException [ 8 ]: Undefined index: show_cover ~ MODPATH/_modules/testimonial/classes/controller/backend/testimonial.php [ 389 ]
2014-06-11 22:18:09 --- STRACE: ErrorException [ 8 ]: Undefined index: show_cover ~ MODPATH/_modules/testimonial/classes/controller/backend/testimonial.php [ 389 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/controller/backend/testimonial.php(389): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 389, Array)
#1 [internal function]: Controller_Backend_Testimonial->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-11 22:18:49 --- ERROR: ErrorException [ 8 ]: Undefined index: show_cover ~ MODPATH/_modules/testimonial/classes/controller/backend/testimonial.php [ 389 ]
2014-06-11 22:18:49 --- STRACE: ErrorException [ 8 ]: Undefined index: show_cover ~ MODPATH/_modules/testimonial/classes/controller/backend/testimonial.php [ 389 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/controller/backend/testimonial.php(389): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 389, Array)
#1 [internal function]: Controller_Backend_Testimonial->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Testimonial))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-11 22:58:20 --- ERROR: ErrorException [ 8 ]: Use of undefined constant testimonial_upload_path - assumed 'testimonial_upload_path' ~ MODPATH/_modules/site/views/site/home_page.php [ 78 ]
2014-06-11 22:58:20 --- STRACE: ErrorException [ 8 ]: Use of undefined constant testimonial_upload_path - assumed 'testimonial_upload_path' ~ MODPATH/_modules/site/views/site/home_page.php [ 78 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(78): Kohana_Core::error_handler(8, 'Use of undefine...', '/Volumes/Data/w...', 78, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(98): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(171): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(82): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}