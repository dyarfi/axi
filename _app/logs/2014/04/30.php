<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-30 14:27:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: upload_pref ~ MODPATH/_modules/news/views/news/backend/news_add.php [ 108 ]
2014-04-30 14:27:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: upload_pref ~ MODPATH/_modules/news/views/news/backend/news_add.php [ 108 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/news/views/news/backend/news_add.php(108): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 108, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_News))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 14:59:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: show_upload ~ MODPATH/_modules/page/views/page/backend/pagecategory_edit.php [ 227 ]
2014-04-30 14:59:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: show_upload ~ MODPATH/_modules/page/views/page/backend/pagecategory_edit.php [ 227 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/views/page/backend/pagecategory_edit.php(227): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 227, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 14:59:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: show_upload ~ MODPATH/_modules/page/views/page/backend/pagecategory_edit.php [ 227 ]
2014-04-30 14:59:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: show_upload ~ MODPATH/_modules/page/views/page/backend/pagecategory_edit.php [ 227 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/views/page/backend/pagecategory_edit.php(227): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 227, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 14:59:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: show_uploads ~ MODPATH/_modules/page/views/page/backend/pagecategory_edit.php [ 227 ]
2014-04-30 14:59:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: show_uploads ~ MODPATH/_modules/page/views/page/backend/pagecategory_edit.php [ 227 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/views/page/backend/pagecategory_edit.php(227): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 227, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 15:04:07 --- ERROR: ErrorException [ 8 ]: Undefined index: file_1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 77 ]
2014-04-30 15:04:07 --- STRACE: ErrorException [ 8 ]: Undefined index: file_1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 77 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(77): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 77, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 15:04:38 --- ERROR: ErrorException [ 8 ]: Undefined index: file_1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 77 ]
2014-04-30 15:04:38 --- STRACE: ErrorException [ 8 ]: Undefined index: file_1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 77 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(77): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 77, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 15:07:46 --- ERROR: ErrorException [ 8 ]: Undefined index: file_1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 77 ]
2014-04-30 15:07:46 --- STRACE: ErrorException [ 8 ]: Undefined index: file_1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 77 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(77): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 77, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 15:07:47 --- ERROR: ErrorException [ 8 ]: Undefined index: file_1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 77 ]
2014-04-30 15:07:47 --- STRACE: ErrorException [ 8 ]: Undefined index: file_1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 77 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(77): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 77, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 15:08:02 --- ERROR: ErrorException [ 8 ]: Undefined index: image_1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 77 ]
2014-04-30 15:08:02 --- STRACE: ErrorException [ 8 ]: Undefined index: image_1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 77 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(77): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 77, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 15:08:53 --- ERROR: ErrorException [ 8 ]: Undefined index: image_1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 77 ]
2014-04-30 15:08:53 --- STRACE: ErrorException [ 8 ]: Undefined index: image_1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 77 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(77): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 77, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 15:09:14 --- ERROR: ErrorException [ 8 ]: Undefined index: image_1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 77 ]
2014-04-30 15:09:14 --- STRACE: ErrorException [ 8 ]: Undefined index: image_1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 77 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(77): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 77, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 15:14:59 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'status' in 'where clause' [ SELECT * FROM `tbl_download_file_files` WHERE `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-04-30 15:14:59 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'status' in 'where clause' [ SELECT * FROM `tbl_download_file_files` WHERE `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadfilesfile.php(195): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(152): Model_DownloadFilesFile->find(Array)
#2 [internal function]: Controller_Backend_DownloadFile->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-30 15:25:06 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/views/download/backend/downloadfile_view.php [ 34 ]
2014-04-30 15:25:06 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/views/download/backend/downloadfile_view.php [ 34 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_view.php(34): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 34, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 15:25:25 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 397 ]
2014-04-30 15:25:25 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 397 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-30 15:25:48 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/views/download/backend/downloadfile_view.php [ 34 ]
2014-04-30 15:25:48 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/views/download/backend/downloadfile_view.php [ 34 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_view.php(34): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 34, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 15:26:16 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/views/download/backend/downloadfile_view.php [ 34 ]
2014-04-30 15:26:16 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/views/download/backend/downloadfile_view.php [ 34 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_view.php(34): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 34, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 15:26:54 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/views/download/backend/downloadfile_view.php [ 34 ]
2014-04-30 15:26:54 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/views/download/backend/downloadfile_view.php [ 34 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_view.php(34): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 34, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 15:28:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',' ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 408 ]
2014-04-30 15:28:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',' ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 408 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-30 15:28:57 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',' ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 409 ]
2014-04-30 15:28:57 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',' ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 409 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-30 15:29:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/mac_GitHub for Mac 87.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 15:29:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/mac_GitHub for Mac 87.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 15:30:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/mac_GitHub for Mac 87.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 15:30:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/mac_GitHub for Mac 87.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 15:30:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/mac_GitHub for Mac 87.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 15:30:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/mac_GitHub for Mac 87.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 15:34:24 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/views/download/backend/downloadfile_view.php [ 39 ]
2014-04-30 15:34:24 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/views/download/backend/downloadfile_view.php [ 39 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_view.php(39): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 39, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 15:34:42 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/views/download/backend/downloadfile_view.php [ 39 ]
2014-04-30 15:34:42 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/views/download/backend/downloadfile_view.php [ 39 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_view.php(39): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 39, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 15:43:35 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_DownloadFilesFile as array ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 77 ]
2014-04-30 15:43:35 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_DownloadFilesFile as array ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 77 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-30 16:10:08 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_DownloadFilesFile as array ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 77 ]
2014-04-30 16:10:08 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_DownloadFilesFile as array ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 77 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-30 16:14:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: files ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 86 ]
2014-04-30 16:14:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: files ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 86 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_edit.php(86): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 86, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 16:37:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: upload_pref ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 136 ]
2014-04-30 16:37:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: upload_pref ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 136 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(136): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 136, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 18:59:47 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_ProductCategory::findcp() ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 624 ]
2014-04-30 18:59:47 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_ProductCategory::findcp() ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 624 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-30 18:59:51 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_ProductCategory::find_cp() ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 624 ]
2014-04-30 18:59:51 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_ProductCategory::find_cp() ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 624 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-04-30 19:03:43 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 205 ]
2014-04-30 19:03:43 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 205 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(205): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 205, Array)
#1 [internal function]: Controller_Backend_DownloadFile->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-30 19:25:16 --- ERROR: ErrorException [ 8 ]: Undefined index: image_manipulation ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 313 ]
2014-04-30 19:25:16 --- STRACE: ErrorException [ 8 ]: Undefined index: image_manipulation ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 313 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(313): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 313, Array)
#1 [internal function]: Controller_Backend_DownloadFile->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-30 19:26:16 --- ERROR: ErrorException [ 8 ]: Undefined index: image ~ MODPATH/_modules/download/config/download.php [ 56 ]
2014-04-30 19:26:16 --- STRACE: ErrorException [ 8 ]: Undefined index: image ~ MODPATH/_modules/download/config/download.php [ 56 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/config/download.php(56): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 56, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/core.php(800): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/config/file/reader.php(49): Kohana_Core::load('/Volumes/Data/w...')
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('download')
#4 /Volumes/Data/www/offistarindo/_app/classes/lib.php(24): Kohana_Config->load('download.downlo...')
#5 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(33): Lib::config('download.downlo...')
#6 [internal function]: Controller_Backend_DownloadFile->before()
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#11 {main}
2014-04-30 19:27:12 --- ERROR: ErrorException [ 8 ]: Undefined index: image ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 313 ]
2014-04-30 19:27:12 --- STRACE: ErrorException [ 8 ]: Undefined index: image ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 313 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(313): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 313, Array)
#1 [internal function]: Controller_Backend_DownloadFile->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-30 19:33:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/28ab41beb75e82a45f6e56ac5c344bae.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 19:33:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/28ab41beb75e82a45f6e56ac5c344bae.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 19:39:19 --- ERROR: ErrorException [ 8 ]: Undefined index: image_manipulation ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 313 ]
2014-04-30 19:39:19 --- STRACE: ErrorException [ 8 ]: Undefined index: image_manipulation ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 313 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(313): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 313, Array)
#1 [internal function]: Controller_Backend_DownloadFile->action_add()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-30 19:43:28 --- ERROR: ErrorException [ 8 ]: Undefined index: label ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 73 ]
2014-04-30 19:43:28 --- STRACE: ErrorException [ 8 ]: Undefined index: label ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 73 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(73): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 73, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 19:43:47 --- ERROR: ErrorException [ 8 ]: Undefined index: label ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 73 ]
2014-04-30 19:43:47 --- STRACE: ErrorException [ 8 ]: Undefined index: label ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 73 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(73): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 73, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 19:44:51 --- ERROR: ErrorException [ 8 ]: Undefined index: label ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 73 ]
2014-04-30 19:44:51 --- STRACE: ErrorException [ 8 ]: Undefined index: label ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 73 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(73): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 73, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 19:44:52 --- ERROR: ErrorException [ 8 ]: Undefined index: label ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 73 ]
2014-04-30 19:44:52 --- STRACE: ErrorException [ 8 ]: Undefined index: label ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 73 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(73): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 73, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 19:45:59 --- ERROR: ErrorException [ 8 ]: Undefined index: label ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 73 ]
2014-04-30 19:45:59 --- STRACE: ErrorException [ 8 ]: Undefined index: label ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 73 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(73): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 73, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 19:46:26 --- ERROR: ErrorException [ 8 ]: Undefined index: label ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 73 ]
2014-04-30 19:46:26 --- STRACE: ErrorException [ 8 ]: Undefined index: label ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 73 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(73): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 73, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 19:46:44 --- ERROR: ErrorException [ 8 ]: Undefined index: label ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 74 ]
2014-04-30 19:46:44 --- STRACE: ErrorException [ 8 ]: Undefined index: label ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 74 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(74): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 74, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 19:46:50 --- ERROR: ErrorException [ 8 ]: Undefined index: label ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 76 ]
2014-04-30 19:46:50 --- STRACE: ErrorException [ 8 ]: Undefined index: label ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 76 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(76): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 76, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 19:46:55 --- ERROR: ErrorException [ 8 ]: Undefined index: file_type ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 136 ]
2014-04-30 19:46:55 --- STRACE: ErrorException [ 8 ]: Undefined index: file_type ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 136 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(136): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 136, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 19:47:17 --- ERROR: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 369 ]
2014-04-30 19:47:17 --- STRACE: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 369 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge(): ...', '/Volumes/Data/w...', 369, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(369): array_merge(Array, NULL)
#2 [internal function]: Controller_Backend_DownloadFile->action_add()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-30 19:47:36 --- ERROR: ErrorException [ 8 ]: Undefined index: file_type ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 136 ]
2014-04-30 19:47:36 --- STRACE: ErrorException [ 8 ]: Undefined index: file_type ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 136 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(136): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 136, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 19:47:51 --- ERROR: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 369 ]
2014-04-30 19:47:51 --- STRACE: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 369 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge(): ...', '/Volumes/Data/w...', 369, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(369): array_merge(Array, NULL)
#2 [internal function]: Controller_Backend_DownloadFile->action_add()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-30 19:47:56 --- ERROR: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 369 ]
2014-04-30 19:47:56 --- STRACE: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 369 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge(): ...', '/Volumes/Data/w...', 369, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(369): array_merge(Array, NULL)
#2 [internal function]: Controller_Backend_DownloadFile->action_add()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-30 19:48:01 --- ERROR: ErrorException [ 8 ]: Undefined index: file_type ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 136 ]
2014-04-30 19:48:01 --- STRACE: ErrorException [ 8 ]: Undefined index: file_type ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 136 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(136): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 136, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 19:48:04 --- ERROR: ErrorException [ 8 ]: Undefined index: file_type ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 136 ]
2014-04-30 19:48:04 --- STRACE: ErrorException [ 8 ]: Undefined index: file_type ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 136 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(136): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 136, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 19:48:48 --- ERROR: ErrorException [ 8 ]: Undefined index: file_type ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 136 ]
2014-04-30 19:48:48 --- STRACE: ErrorException [ 8 ]: Undefined index: file_type ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 136 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(136): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 136, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 19:49:08 --- ERROR: ErrorException [ 8 ]: Undefined index: file_type ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 139 ]
2014-04-30 19:49:08 --- STRACE: ErrorException [ 8 ]: Undefined index: file_type ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 139 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(139): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 139, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 19:50:40 --- ERROR: ErrorException [ 8 ]: Undefined index: label ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 79 ]
2014-04-30 19:50:40 --- STRACE: ErrorException [ 8 ]: Undefined index: label ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 79 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(79): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 79, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 19:50:49 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 79 ]
2014-04-30 19:50:49 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 79 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(79): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 79, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 19:50:57 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 79 ]
2014-04-30 19:50:57 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 79 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(79): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 79, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 19:52:18 --- ERROR: ErrorException [ 8 ]: Undefined index: file_type ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 136 ]
2014-04-30 19:52:18 --- STRACE: ErrorException [ 8 ]: Undefined index: file_type ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 136 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(136): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 136, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 19:54:09 --- ERROR: ErrorException [ 8 ]: Undefined index: file_type ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 136 ]
2014-04-30 19:54:09 --- STRACE: ErrorException [ 8 ]: Undefined index: file_type ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 136 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(136): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 136, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 19:54:42 --- ERROR: ErrorException [ 8 ]: Undefined index: file_type ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 136 ]
2014-04-30 19:54:42 --- STRACE: ErrorException [ 8 ]: Undefined index: file_type ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 136 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(136): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 136, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 19:56:06 --- ERROR: ErrorException [ 8 ]: Undefined index: file_type ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 137 ]
2014-04-30 19:56:06 --- STRACE: ErrorException [ 8 ]: Undefined index: file_type ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 137 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(137): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 137, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 19:56:12 --- ERROR: ErrorException [ 8 ]: Undefined index: file_type ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 137 ]
2014-04-30 19:56:12 --- STRACE: ErrorException [ 8 ]: Undefined index: file_type ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 137 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(137): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 137, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 19:56:22 --- ERROR: ErrorException [ 8 ]: Undefined index: file_type ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 138 ]
2014-04-30 19:56:22 --- STRACE: ErrorException [ 8 ]: Undefined index: file_type ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 138 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(138): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 138, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 19:57:23 --- ERROR: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 368 ]
2014-04-30 19:57:23 --- STRACE: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 368 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge(): ...', '/Volumes/Data/w...', 368, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(368): array_merge(Array, NULL)
#2 [internal function]: Controller_Backend_DownloadFile->action_add()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-30 19:58:42 --- ERROR: ErrorException [ 8 ]: Undefined index: image_1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 72 ]
2014-04-30 19:58:42 --- STRACE: ErrorException [ 8 ]: Undefined index: image_1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 72 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(72): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 72, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 19:59:52 --- ERROR: ErrorException [ 8 ]: Undefined index: image_1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 72 ]
2014-04-30 19:59:52 --- STRACE: ErrorException [ 8 ]: Undefined index: image_1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 72 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(72): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 72, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 20:04:45 --- ERROR: ErrorException [ 8 ]: Undefined index: image_1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 74 ]
2014-04-30 20:04:45 --- STRACE: ErrorException [ 8 ]: Undefined index: image_1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 74 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(74): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 74, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 20:05:49 --- ERROR: ErrorException [ 8 ]: Undefined index: image_1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 74 ]
2014-04-30 20:05:49 --- STRACE: ErrorException [ 8 ]: Undefined index: image_1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 74 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(74): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 74, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 20:05:57 --- ERROR: ErrorException [ 8 ]: Undefined index: image_1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 74 ]
2014-04-30 20:05:57 --- STRACE: ErrorException [ 8 ]: Undefined index: image_1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 74 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(74): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 74, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 20:06:14 --- ERROR: ErrorException [ 8 ]: Undefined index: image_1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 74 ]
2014-04-30 20:06:14 --- STRACE: ErrorException [ 8 ]: Undefined index: image_1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 74 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(74): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 74, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 20:06:21 --- ERROR: ErrorException [ 8 ]: Undefined index: image_1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 74 ]
2014-04-30 20:06:21 --- STRACE: ErrorException [ 8 ]: Undefined index: image_1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 74 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(74): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 74, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 20:06:25 --- ERROR: ErrorException [ 8 ]: Undefined index: image_1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 74 ]
2014-04-30 20:06:25 --- STRACE: ErrorException [ 8 ]: Undefined index: image_1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 74 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(74): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 74, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-04-30 20:08:21 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'description' in 'field list' [ INSERT INTO `tbl_download_file_files` (`download_id`, `field_name`, `file_name`, `file_type`, `caption`, `description`) VALUES (45, 'image_1', 'fc6ce90b29c7253cd824c20b7afecae9.jpg', 'image/jpeg', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-04-30 20:08:21 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'description' in 'field list' [ INSERT INTO `tbl_download_file_files` (`download_id`, `field_name`, `file_name`, `file_type`, `caption`, `description`) VALUES (45, 'image_1', 'fc6ce90b29c7253cd824c20b7afecae9.jpg', 'image/jpeg', '', '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `tb...', false, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadfilesfile.php(98): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(322): Model_DownloadFilesFile->add(Array)
#3 [internal function]: Controller_Backend_DownloadFile->action_add()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-04-30 20:09:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/2e473816db41f8f17f58c5d63fa0a269_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:09:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/2e473816db41f8f17f58c5d63fa0a269_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:09:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/2e473816db41f8f17f58c5d63fa0a269_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:09:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/2e473816db41f8f17f58c5d63fa0a269_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:10:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/99cc98ba3099fdaef269758ebf4279d5_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:10:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/99cc98ba3099fdaef269758ebf4279d5_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:10:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/99cc98ba3099fdaef269758ebf4279d5_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:10:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/99cc98ba3099fdaef269758ebf4279d5_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:20:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/99cc98ba3099fdaef269758ebf4279d5.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:20:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/99cc98ba3099fdaef269758ebf4279d5.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:20:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/99cc98ba3099fdaef269758ebf4279d5.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:20:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/99cc98ba3099fdaef269758ebf4279d5.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/99cc98ba3099fdaef269758ebf4279d5.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/99cc98ba3099fdaef269758ebf4279d5.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:21:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/99cc98ba3099fdaef269758ebf4279d5_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:21:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/99cc98ba3099fdaef269758ebf4279d5_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:21:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/99cc98ba3099fdaef269758ebf4279d5_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:21:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/99cc98ba3099fdaef269758ebf4279d5_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:22:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/8becf2a12a41e9c1d3c0d6f8d8dd16da_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:22:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/8becf2a12a41e9c1d3c0d6f8d8dd16da_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:22:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/8becf2a12a41e9c1d3c0d6f8d8dd16da_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:22:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/8becf2a12a41e9c1d3c0d6f8d8dd16da_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:22:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/8becf2a12a41e9c1d3c0d6f8d8dd16da.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:22:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/8becf2a12a41e9c1d3c0d6f8d8dd16da.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:22:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/8becf2a12a41e9c1d3c0d6f8d8dd16da.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:22:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/8becf2a12a41e9c1d3c0d6f8d8dd16da.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:22:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/8becf2a12a41e9c1d3c0d6f8d8dd16da_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:22:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/8becf2a12a41e9c1d3c0d6f8d8dd16da_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:22:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/8becf2a12a41e9c1d3c0d6f8d8dd16da_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:22:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/8becf2a12a41e9c1d3c0d6f8d8dd16da_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:22:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/8becf2a12a41e9c1d3c0d6f8d8dd16da_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:22:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/8becf2a12a41e9c1d3c0d6f8d8dd16da_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:22:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/8becf2a12a41e9c1d3c0d6f8d8dd16da_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:22:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/8becf2a12a41e9c1d3c0d6f8d8dd16da_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:22:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/7abd0f55566d8694362dc48e746ea1a1_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:22:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/7abd0f55566d8694362dc48e746ea1a1_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:22:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/7abd0f55566d8694362dc48e746ea1a1_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:22:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/7abd0f55566d8694362dc48e746ea1a1_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:23:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/7abd0f55566d8694362dc48e746ea1a1.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:23:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/7abd0f55566d8694362dc48e746ea1a1.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:23:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/7abd0f55566d8694362dc48e746ea1a1.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:23:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/7abd0f55566d8694362dc48e746ea1a1.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:24:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/4687498373d4bb5cb77c6dfdb75fd32d_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:24:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/4687498373d4bb5cb77c6dfdb75fd32d_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:24:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/4687498373d4bb5cb77c6dfdb75fd32d_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:24:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/4687498373d4bb5cb77c6dfdb75fd32d_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:24:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/182066857aa1f69c8612910ebffb7028_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:24:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/182066857aa1f69c8612910ebffb7028_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:24:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/182066857aa1f69c8612910ebffb7028_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:24:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/182066857aa1f69c8612910ebffb7028_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:24:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/24f0520f85e6da24f31ac1db739c2389_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:24:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/24f0520f85e6da24f31ac1db739c2389_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:24:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/24f0520f85e6da24f31ac1db739c2389_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:24:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/24f0520f85e6da24f31ac1db739c2389_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:26:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/24f0520f85e6da24f31ac1db739c2389_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:26:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/24f0520f85e6da24f31ac1db739c2389_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:26:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/24f0520f85e6da24f31ac1db739c2389_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:26:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/24f0520f85e6da24f31ac1db739c2389_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:26:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/a82914d45d1b67ee005a15ebdf4b057a_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:26:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/a82914d45d1b67ee005a15ebdf4b057a_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:26:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/a82914d45d1b67ee005a15ebdf4b057a_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:26:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/a82914d45d1b67ee005a15ebdf4b057a_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:28:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/5cc2d63aef6d40aea6e34d81184499a1_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:28:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/5cc2d63aef6d40aea6e34d81184499a1_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:28:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/5cc2d63aef6d40aea6e34d81184499a1_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:28:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/5cc2d63aef6d40aea6e34d81184499a1_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:28:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/97429755901f20fe89bb3d333bb0e2cb_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:28:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/97429755901f20fe89bb3d333bb0e2cb_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:28:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/97429755901f20fe89bb3d333bb0e2cb_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:28:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/97429755901f20fe89bb3d333bb0e2cb_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:31:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/df1828a8b374accb63019c013ad3a440_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:31:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/df1828a8b374accb63019c013ad3a440_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:31:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/df1828a8b374accb63019c013ad3a440_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:31:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/df1828a8b374accb63019c013ad3a440_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:34:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/thumbs/df1828a8b374accb63019c013ad3a440_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:34:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/thumbs/df1828a8b374accb63019c013ad3a440_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:34:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/thumbs/df1828a8b374accb63019c013ad3a440_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:34:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/thumbs/df1828a8b374accb63019c013ad3a440_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:35:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/thumbs/4c57d83ce4ff78f812168dc3ecf60396_resize_49x43.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:35:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/thumbs/4c57d83ce4ff78f812168dc3ecf60396_resize_49x43.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:35:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/thumbs/4c57d83ce4ff78f812168dc3ecf60396_resize_49x43.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:35:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/thumbs/4c57d83ce4ff78f812168dc3ecf60396_resize_49x43.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/75351d3d2769db7a7159cfe0d302bdee_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/75351d3d2769db7a7159cfe0d302bdee_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/75351d3d2769db7a7159cfe0d302bdee_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/75351d3d2769db7a7159cfe0d302bdee_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/75351d3d2769db7a7159cfe0d302bdee_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/75351d3d2769db7a7159cfe0d302bdee_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/75351d3d2769db7a7159cfe0d302bdee_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/75351d3d2769db7a7159cfe0d302bdee_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:44:03 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'download_id' in 'where clause' [ SELECT * FROM `tbl_download_files` WHERE `download_id` = '49' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-04-30 20:44:03 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'download_id' in 'where clause' [ SELECT * FROM `tbl_download_files` WHERE `download_id` = '49' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadfile.php(224): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(521): Model_DownloadFile->find(Array)
#2 [internal function]: Controller_Backend_DownloadFile->action_edit()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-04-30 20:45:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/2636eec0f6674383447bf455f6e12821_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:45:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/2636eec0f6674383447bf455f6e12821_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:45:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/2636eec0f6674383447bf455f6e12821_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:45:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/2636eec0f6674383447bf455f6e12821_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:45:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/2636eec0f6674383447bf455f6e12821_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:45:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/2636eec0f6674383447bf455f6e12821_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:45:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/2636eec0f6674383447bf455f6e12821_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:45:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/2636eec0f6674383447bf455f6e12821_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:46:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/d4735b0dc13cafe198f68c058c17eb05_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:46:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/d4735b0dc13cafe198f68c058c17eb05_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:46:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/d4735b0dc13cafe198f68c058c17eb05_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:46:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/d4735b0dc13cafe198f68c058c17eb05_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:47:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/d4735b0dc13cafe198f68c058c17eb05_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:47:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/d4735b0dc13cafe198f68c058c17eb05_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:47:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/d4735b0dc13cafe198f68c058c17eb05_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:47:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/d4735b0dc13cafe198f68c058c17eb05_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:47:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/86c754c3cd266cf48ab441d29ad71400_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:47:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/86c754c3cd266cf48ab441d29ad71400_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:47:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/86c754c3cd266cf48ab441d29ad71400_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:47:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/86c754c3cd266cf48ab441d29ad71400_resize_49x43.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:49:12 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_DownloadFile::$fileFiles ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 402 ]
2014-04-30 20:49:12 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_DownloadFile::$fileFiles ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 402 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(402): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 402, Array)
#1 [internal function]: Controller_Backend_DownloadFile->action_view()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-04-30 20:53:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/56f52d30e52874bbfebfeddc427312af_crop_248x158.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:53:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/56f52d30e52874bbfebfeddc427312af_crop_248x158.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:53:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/af0aa463d10f3555bcda20040ae33f89_crop_248x158.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:53:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/af0aa463d10f3555bcda20040ae33f89_crop_248x158.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:53:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/af0aa463d10f3555bcda20040ae33f89_crop_248x158.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:53:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/af0aa463d10f3555bcda20040ae33f89_crop_248x158.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:53:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/56f52d30e52874bbfebfeddc427312af_crop_248x158.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:53:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/56f52d30e52874bbfebfeddc427312af_crop_248x158.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:53:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/af0aa463d10f3555bcda20040ae33f89_crop_248x158.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:53:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/af0aa463d10f3555bcda20040ae33f89_crop_248x158.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:53:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/56f52d30e52874bbfebfeddc427312af_crop_248x158.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:53:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/56f52d30e52874bbfebfeddc427312af_crop_248x158.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:53:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/af0aa463d10f3555bcda20040ae33f89_crop_248x158.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:53:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/af0aa463d10f3555bcda20040ae33f89_crop_248x158.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:53:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/56f52d30e52874bbfebfeddc427312af_crop_248x158.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:53:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/56f52d30e52874bbfebfeddc427312af_crop_248x158.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:53:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/56f52d30e52874bbfebfeddc427312af_crop_248x158.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:53:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/af0aa463d10f3555bcda20040ae33f89_crop_248x158.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:53:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/56f52d30e52874bbfebfeddc427312af_crop_248x158.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:53:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/af0aa463d10f3555bcda20040ae33f89_crop_248x158.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:53:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/56f52d30e52874bbfebfeddc427312af_crop_248x158.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:53:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/56f52d30e52874bbfebfeddc427312af_crop_248x158.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-04-30 20:53:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/af0aa463d10f3555bcda20040ae33f89_crop_248x158.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-04-30 20:53:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/af0aa463d10f3555bcda20040ae33f89_crop_248x158.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}