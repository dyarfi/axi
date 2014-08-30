<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-15 00:21:55 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_index.php [ 158 ]
2014-06-15 00:21:55 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_index.php [ 158 ]
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
2014-06-15 01:08:43 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_index.php [ 158 ]
2014-06-15 01:08:43 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_index.php [ 158 ]
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
2014-06-15 01:14:06 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_index.php [ 158 ]
2014-06-15 01:14:06 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_index.php [ 158 ]
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
2014-06-15 01:14:37 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_index.php [ 158 ]
2014-06-15 01:14:37 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_index.php [ 158 ]
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
2014-06-15 01:16:19 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH/_modules/download/views/download/backend/downloadfile_index.php [ 69 ]
2014-06-15 01:16:19 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH/_modules/download/views/download/backend/downloadfile_index.php [ 69 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_index.php(69): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 69, Array)
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
2014-06-15 01:18:34 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadFile::$description ~ MODPATH/_modules/download/views/download/backend/downloadfile_index.php [ 157 ]
2014-06-15 01:18:34 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadFile::$description ~ MODPATH/_modules/download/views/download/backend/downloadfile_index.php [ 157 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_index.php(157): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 157, Array)
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
2014-06-15 01:18:53 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadFile::$description ~ MODPATH/_modules/download/views/download/backend/downloadfile_index.php [ 156 ]
2014-06-15 01:18:53 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadFile::$description ~ MODPATH/_modules/download/views/download/backend/downloadfile_index.php [ 156 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_index.php(156): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 156, Array)
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
2014-06-15 01:19:13 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH/_modules/download/views/download/backend/downloadfile_index.php [ 156 ]
2014-06-15 01:19:13 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH/_modules/download/views/download/backend/downloadfile_index.php [ 156 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_index.php(156): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 156, Array)
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
2014-06-15 01:38:14 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadFile::$name ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 623 ]
2014-06-15 01:38:14 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadFile::$name ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 623 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(623): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 623, Array)
#1 [internal function]: Controller_Backend_DownloadFile->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 01:56:26 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 20 ]
2014-06-15 01:56:26 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 20 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_edit.php(20): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 20, Array)
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
2014-06-15 01:59:21 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 33 ]
2014-06-15 01:59:21 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 33 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_edit.php(33): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 33, Array)
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
2014-06-15 01:59:36 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 33 ]
2014-06-15 01:59:36 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 33 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_edit.php(33): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 33, Array)
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
2014-06-15 01:59:44 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$title ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 63 ]
2014-06-15 01:59:44 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$title ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 63 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_edit.php(63): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 63, Array)
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
2014-06-15 01:59:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: prefix ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 119 ]
2014-06-15 01:59:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: prefix ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 119 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_edit.php(119): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 119, Array)
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
2014-06-15 13:25:13 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$title ~ MODPATH/_modules/user/views/user/widget/stats_dashboard.php [ 20 ]
2014-06-15 13:25:13 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$title ~ MODPATH/_modules/user/views/user/widget/stats_dashboard.php [ 20 ]
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
2014-06-15 13:29:23 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
2014-06-15 13:29:23 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(187): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 187, Array)
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
2014-06-15 13:49:17 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadFileContent::$id ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 518 ]
2014-06-15 13:49:17 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadFileContent::$id ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 518 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(518): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 518, Array)
#1 [internal function]: Controller_Backend_DownloadFile->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 13:52:29 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 393 ]
2014-06-15 13:52:29 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 393 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(393): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 393, Array)
#1 [internal function]: Controller_Backend_DownloadFile->action_view()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 13:54:05 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 393 ]
2014-06-15 13:54:05 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 393 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(393): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 393, Array)
#1 [internal function]: Controller_Backend_DownloadFile->action_view()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 13:54:48 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 24 ]
2014-06-15 13:54:48 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 24 ]
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
2014-06-15 13:55:27 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadFileContent::$title ~ MODPATH/_modules/download/views/download/backend/downloadfile_index.php [ 69 ]
2014-06-15 13:55:27 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadFileContent::$title ~ MODPATH/_modules/download/views/download/backend/downloadfile_index.php [ 69 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_index.php(69): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 69, Array)
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
2014-06-15 13:58:58 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 24 ]
2014-06-15 13:58:58 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 24 ]
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
2014-06-15 14:05:30 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_index.php [ 69 ]
2014-06-15 14:05:30 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_index.php [ 69 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_index.php(69): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 69, Array)
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
2014-06-15 14:05:40 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_index.php [ 69 ]
2014-06-15 14:05:40 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/_modules/download/views/download/backend/downloadfile_index.php [ 69 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_index.php(69): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 69, Array)
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
2014-06-15 14:09:55 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 393 ]
2014-06-15 14:09:55 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 393 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(393): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 393, Array)
#1 [internal function]: Controller_Backend_DownloadFile->action_view()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 14:38:47 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 24 ]
2014-06-15 14:38:47 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 24 ]
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
2014-06-15 14:39:47 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 24 ]
2014-06-15 14:39:47 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 24 ]
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
2014-06-15 14:45:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 7 ]
2014-06-15 14:45:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 7, Array)
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
2014-06-15 14:46:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 7 ]
2014-06-15 14:46:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 7, Array)
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
2014-06-15 14:46:34 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 49 ]
2014-06-15 14:46:34 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 49 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(49): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 49, Array)
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
2014-06-15 14:49:59 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'caption' in 'field list' [ INSERT INTO `tbl_download_files` (`type_id`, `category_id`, `product_id`, `title`, `field_name`, `file_name`, `file_type`, `allow_comment`, `order`, `user_id`, `count`, `status`, `added`, `modified`, `caption`) VALUES ('1', '22', '7', 'asdasdasd-asdadasd', '', '/brochures/fabric.js-1.4.4.zip', '', 0, 3, '1', 0, 'publish', 1402818599, 0, '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-15 14:49:59 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'caption' in 'field list' [ INSERT INTO `tbl_download_files` (`type_id`, `category_id`, `product_id`, `title`, `field_name`, `file_name`, `file_type`, `allow_comment`, `order`, `user_id`, `count`, `status`, `added`, `modified`, `caption`) VALUES ('1', '22', '7', 'asdasdasd-asdadasd', '', '/brochures/fabric.js-1.4.4.zip', '', 0, 3, '1', 0, 'publish', 1402818599, 0, '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `tb...', false, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadfile.php(131): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(296): Model_DownloadFile->add(Array)
#3 [internal function]: Controller_Backend_DownloadFile->action_add()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 14:50:29 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 396 ]
2014-06-15 14:50:29 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 396 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(396): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 396, Array)
#1 [internal function]: Controller_Backend_DownloadFile->action_view()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 14:51:26 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
2014-06-15 14:51:26 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(187): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 187, Array)
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
2014-06-15 14:52:23 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 396 ]
2014-06-15 14:52:23 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 396 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(396): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 396, Array)
#1 [internal function]: Controller_Backend_DownloadFile->action_view()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 14:52:53 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadFile::$name ~ MODPATH/_modules/download/views/download/backend/downloadfile_view.php [ 13 ]
2014-06-15 14:52:53 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadFile::$name ~ MODPATH/_modules/download/views/download/backend/downloadfile_view.php [ 13 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_view.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 13, Array)
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
2014-06-15 14:54:28 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadFile::$name ~ MODPATH/_modules/download/views/download/backend/downloadfile_view.php [ 13 ]
2014-06-15 14:54:28 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadFile::$name ~ MODPATH/_modules/download/views/download/backend/downloadfile_view.php [ 13 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_view.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 13, Array)
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
2014-06-15 14:57:13 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH/_modules/download/views/download/backend/downloadfile_view.php [ 31 ]
2014-06-15 14:57:13 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH/_modules/download/views/download/backend/downloadfile_view.php [ 31 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_view.php(31): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 31, Array)
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
2014-06-15 15:03:44 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
2014-06-15 15:03:44 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(187): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 187, Array)
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
2014-06-15 15:34:27 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
2014-06-15 15:34:27 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(187): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 187, Array)
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
2014-06-15 15:35:27 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
2014-06-15 15:35:27 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(187): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 187, Array)
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
2014-06-15 15:42:19 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_DownloadType::find_detail() ~ MODPATH/_modules/site/classes/controller/home.php [ 63 ]
2014-06-15 15:42:19 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_DownloadType::find_detail() ~ MODPATH/_modules/site/classes/controller/home.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 15:48:59 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_DownloadType::find_detail() ~ MODPATH/_modules/site/classes/controller/home.php [ 63 ]
2014-06-15 15:48:59 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_DownloadType::find_detail() ~ MODPATH/_modules/site/classes/controller/home.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 15:49:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN) ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 244 ]
2014-06-15 15:49:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN) ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 244 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 15:50:11 --- ERROR: ErrorException [ 1 ]: Function name must be a string ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 244 ]
2014-06-15 15:50:11 --- STRACE: ErrorException [ 1 ]: Function name must be a string ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 244 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 15:50:16 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
2014-06-15 15:50:16 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(187): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 187, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 15:50:30 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
2014-06-15 15:50:30 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(187): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 187, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 15:50:55 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
2014-06-15 15:50:55 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(187): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 187, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 15:51:01 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
2014-06-15 15:51:01 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(187): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 187, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 15:51:03 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
2014-06-15 15:51:03 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(187): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 187, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 15:52:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_TypeContent' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2014-06-15 15:52:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_TypeContent' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 15:52:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_Model_TypeContent' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2014-06-15 15:52:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_Model_TypeContent' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 15:52:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_Model_TypeContent' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2014-06-15 15:52:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_Model_TypeContent' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 15:52:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_Model_DownloadTypeContent' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2014-06-15 15:52:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_Model_DownloadTypeContent' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 15:52:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_Model_DownloadTypeContent' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2014-06-15 15:52:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_Model_DownloadTypeContent' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 15:52:34 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
2014-06-15 15:52:34 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(187): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 187, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 15:53:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_TypeContent' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2014-06-15 15:53:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_TypeContent' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 15:53:36 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
2014-06-15 15:53:36 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(187): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 187, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 15:54:48 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$_model_varse ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 248 ]
2014-06-15 15:54:48 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$_model_varse ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 248 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(248): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 248, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(63): Model_DownloadType->find_detail(Array, 'en')
#2 [internal function]: Controller_Home->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-15 15:54:57 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$_model_var ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 248 ]
2014-06-15 15:54:57 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$_model_var ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 248 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(248): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 248, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(63): Model_DownloadType->find_detail(Array, 'en')
#2 [internal function]: Controller_Home->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-15 15:55:05 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
2014-06-15 15:55:05 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(187): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 187, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 15:56:04 --- ERROR: ErrorException [ 2 ]: array_combine(): Both parameters should have an equal number of elements ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 248 ]
2014-06-15 15:56:04 --- STRACE: ErrorException [ 2 ]: array_combine(): Both parameters should have an equal number of elements ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 248 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_combine()...', '/Volumes/Data/w...', 248, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(248): array_combine(Array, Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(63): Model_DownloadType->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 15:57:05 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
2014-06-15 15:57:05 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(187): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 187, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 15:57:13 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
2014-06-15 15:57:13 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(187): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 187, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 15:57:32 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
2014-06-15 15:57:32 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(187): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 187, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 15:57:49 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
2014-06-15 15:57:49 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(187): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 187, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 15:58:28 --- ERROR: ErrorException [ 2 ]: array_merge(): Argument #1 is not an array ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 248 ]
2014-06-15 15:58:28 --- STRACE: ErrorException [ 2 ]: array_merge(): Argument #1 is not an array ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 248 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge(): ...', '/Volumes/Data/w...', 248, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(248): array_merge(Object(Model_DownloadType), Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(63): Model_DownloadType->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 15:58:48 --- ERROR: ErrorException [ 2 ]: array_keys() expects parameter 1 to be array, object given ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 248 ]
2014-06-15 15:58:48 --- STRACE: ErrorException [ 2 ]: array_keys() expects parameter 1 to be array, object given ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 248 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_keys() ex...', '/Volumes/Data/w...', 248, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(248): array_keys(Object(Model_DownloadType))
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(63): Model_DownloadType->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 15:59:24 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
2014-06-15 15:59:24 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(187): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 187, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:00:14 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
2014-06-15 16:00:14 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(187): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 187, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:00:19 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
2014-06-15 16:00:19 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/home_page.php [ 187 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(187): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 187, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:02:31 --- ERROR: ErrorException [ 2 ]: array_combine(): Both parameters should have an equal number of elements ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 249 ]
2014-06-15 16:02:31 --- STRACE: ErrorException [ 2 ]: array_combine(): Both parameters should have an equal number of elements ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 249 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_combine()...', '/Volumes/Data/w...', 249, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(249): array_combine(Array, Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(63): Model_DownloadType->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 16:02:43 --- ERROR: ErrorException [ 2 ]: array_fill() expects exactly 3 parameters, 2 given ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 249 ]
2014-06-15 16:02:43 --- STRACE: ErrorException [ 2 ]: array_fill() expects exactly 3 parameters, 2 given ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 249 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_fill() ex...', '/Volumes/Data/w...', 249, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(249): array_fill(Array, Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(63): Model_DownloadType->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 16:03:39 --- ERROR: ErrorException [ 2 ]: array_intersect(): Argument #1 is not an array ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 249 ]
2014-06-15 16:03:39 --- STRACE: ErrorException [ 2 ]: array_intersect(): Argument #1 is not an array ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 249 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_intersect...', '/Volumes/Data/w...', 249, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(249): array_intersect(Object(Model_DownloadType), Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(63): Model_DownloadType->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 16:03:45 --- ERROR: ErrorException [ 2 ]: array_merge(): Argument #1 is not an array ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 249 ]
2014-06-15 16:03:45 --- STRACE: ErrorException [ 2 ]: array_merge(): Argument #1 is not an array ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 249 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge(): ...', '/Volumes/Data/w...', 249, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(249): array_merge(Object(Model_DownloadType), Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(63): Model_DownloadType->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 16:03:54 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:03:54 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:04:00 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:04:00 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:04:09 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:04:09 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:04:30 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:04:30 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:04:36 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:04:36 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:05:14 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:05:14 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:06:10 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:06:10 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:06:35 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:06:35 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:08:09 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:08:09 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:08:37 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:08:37 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:10:28 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:10:28 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:10:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: val ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 248 ]
2014-06-15 16:10:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: val ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 248 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(248): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 248, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(63): Model_DownloadType->find_detail(Array, 'en')
#2 [internal function]: Controller_Home->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-15 16:11:01 --- ERROR: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 248 ]
2014-06-15 16:11:01 --- STRACE: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 248 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge(): ...', '/Volumes/Data/w...', 248, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(248): array_merge(Array, Object(Model_DownloadType))
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(63): Model_DownloadType->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 16:11:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 248 ]
2014-06-15 16:11:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 248 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 16:11:08 --- ERROR: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 248 ]
2014-06-15 16:11:08 --- STRACE: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 248 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge(): ...', '/Volumes/Data/w...', 248, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(248): array_merge(Array, 'brochures')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(63): Model_DownloadType->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 16:11:14 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:11:14 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:11:53 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:11:53 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:13:01 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:13:01 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:13:32 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:13:32 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:15:59 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:15:59 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:16:46 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:16:46 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:16:50 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:16:50 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:19:14 --- ERROR: ErrorException [ 2 ]: array_merge(): Argument #1 is not an array ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 254 ]
2014-06-15 16:19:14 --- STRACE: ErrorException [ 2 ]: array_merge(): Argument #1 is not an array ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 254 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge(): ...', '/Volumes/Data/w...', 254, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(254): array_merge(Object(Model_DownloadType), Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(63): Model_DownloadType->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 16:19:31 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:19:31 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:21:57 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:21:57 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:22:34 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:22:34 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:22:42 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:22:42 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:23:26 --- ERROR: ErrorException [ 2 ]: get_object_vars() expects parameter 1 to be object, array given ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 253 ]
2014-06-15 16:23:26 --- STRACE: ErrorException [ 2 ]: get_object_vars() expects parameter 1 to be object, array given ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 253 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'get_object_vars...', '/Volumes/Data/w...', 253, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(253): get_object_vars(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(63): Model_DownloadType->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 16:23:34 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:23:34 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:24:15 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:24:15 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:25:18 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:25:18 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:25:28 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 254 ]
2014-06-15 16:25:28 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 254 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(254): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 254, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(63): Model_DownloadType->find_detail(Array, 'en')
#2 [internal function]: Controller_Home->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-15 16:25:41 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:25:41 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:26:16 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:26:16 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:26:36 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 254 ]
2014-06-15 16:26:36 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 254 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(254): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 254, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(63): Model_DownloadType->find_detail(Array, 'en')
#2 [internal function]: Controller_Home->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-15 16:27:09 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:27:09 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:27:19 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:27:19 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:27:31 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:27:31 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:28:04 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:28:04 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:28:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: detail_vars ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 259 ]
2014-06-15 16:28:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: detail_vars ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 259 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(259): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 259, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(63): Model_DownloadType->find_detail(Array, 'en')
#2 [internal function]: Controller_Home->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-15 16:28:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: detail_vars ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 259 ]
2014-06-15 16:28:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: detail_vars ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 259 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(259): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 259, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(63): Model_DownloadType->find_detail(Array, 'en')
#2 [internal function]: Controller_Home->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-15 16:29:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: detail_vars ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 259 ]
2014-06-15 16:29:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: detail_vars ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 259 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(259): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 259, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(63): Model_DownloadType->find_detail(Array, 'en')
#2 [internal function]: Controller_Home->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-15 16:29:34 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_DownloadTypeContent as array ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 255 ]
2014-06-15 16:29:34 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_DownloadTypeContent as array ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 255 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 16:29:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: detail_vars ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 259 ]
2014-06-15 16:29:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: detail_vars ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 259 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(259): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 259, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(63): Model_DownloadType->find_detail(Array, 'en')
#2 [internal function]: Controller_Home->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-15 16:29:52 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:29:52 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:30:36 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:30:36 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:31:27 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:31:27 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:31:28 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:31:28 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:32:06 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:32:06 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:33:24 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:33:24 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:33:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: _detail_vars ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 250 ]
2014-06-15 16:33:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: _detail_vars ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 250 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(250): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 250, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(63): Model_DownloadType->find_detail(Array, 'en')
#2 [internal function]: Controller_Home->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-15 16:34:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: _detail_vars ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 250 ]
2014-06-15 16:34:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: _detail_vars ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 250 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(250): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 250, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(63): Model_DownloadType->find_detail(Array, 'en')
#2 [internal function]: Controller_Home->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-15 16:34:13 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:34:13 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:34:24 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:34:24 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:35:02 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:35:02 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:35:09 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:35:09 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:38:51 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:38:51 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:39:12 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:39:12 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:39:35 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:39:35 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:40:21 --- ERROR: ErrorException [ 2 ]: array_diff_ukey(): at least 3 parameters are required, 2 given ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 257 ]
2014-06-15 16:40:21 --- STRACE: ErrorException [ 2 ]: array_diff_ukey(): at least 3 parameters are required, 2 given ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 257 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_diff_ukey...', '/Volumes/Data/w...', 257, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(257): array_diff_ukey(Array, Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(63): Model_DownloadType->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 16:40:30 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:40:30 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:40:37 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:40:37 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:40:54 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:40:54 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:41:41 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:41:41 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:41:53 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:41:53 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:41:56 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:41:56 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:44:01 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:44:01 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:44:32 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:44:32 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:44:55 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:44:55 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:45:29 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:45:29 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:45:59 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:45:59 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:46:26 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:46:26 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:46:57 --- ERROR: ErrorException [ 2 ]: get_object_vars() expects parameter 1 to be object, array given ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 260 ]
2014-06-15 16:46:57 --- STRACE: ErrorException [ 2 ]: get_object_vars() expects parameter 1 to be object, array given ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 260 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'get_object_vars...', '/Volumes/Data/w...', 260, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(260): get_object_vars(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(63): Model_DownloadType->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 16:47:01 --- ERROR: ErrorException [ 2 ]: get_object_vars() expects parameter 1 to be object, array given ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 260 ]
2014-06-15 16:47:01 --- STRACE: ErrorException [ 2 ]: get_object_vars() expects parameter 1 to be object, array given ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 260 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'get_object_vars...', '/Volumes/Data/w...', 260, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(260): get_object_vars(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(63): Model_DownloadType->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 16:47:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(array)' (array) (T_ARRAY_CAST), expecting ')' ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 259 ]
2014-06-15 16:47:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(array)' (array) (T_ARRAY_CAST), expecting ')' ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 259 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 16:47:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(array)' (array) (T_ARRAY_CAST) ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 260 ]
2014-06-15 16:47:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(array)' (array) (T_ARRAY_CAST) ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 260 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 16:47:22 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(array)' (array) (T_ARRAY_CAST) ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 260 ]
2014-06-15 16:47:22 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(array)' (array) (T_ARRAY_CAST) ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 260 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 16:47:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(array)' (array) (T_ARRAY_CAST) ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 259 ]
2014-06-15 16:47:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(array)' (array) (T_ARRAY_CAST) ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 259 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 16:47:41 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:47:41 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:47:58 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:47:58 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:48:19 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:48:19 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:48:28 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:48:28 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:49:19 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:49:19 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:49:42 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:49:42 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:49:44 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:49:44 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:49:45 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:49:45 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:49:56 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:49:56 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:50:06 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:50:06 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:50:17 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:50:17 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:51:11 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:51:11 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:51:25 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:51:25 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:52:47 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:52:47 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:53:49 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:53:49 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:55:09 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:55:09 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:55:50 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:55:50 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:56:12 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:56:12 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:57:32 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 258 ]
2014-06-15 16:57:32 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 258 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(258): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 258, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(63): Model_DownloadType->find_detail(Array, 'id')
#2 [internal function]: Controller_Home->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-15 16:57:54 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 259 ]
2014-06-15 16:57:54 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 259 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(259): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 259, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(63): Model_DownloadType->find_detail(Array, 'id')
#2 [internal function]: Controller_Home->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-15 16:58:05 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 258 ]
2014-06-15 16:58:05 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 258 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(258): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 258, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(63): Model_DownloadType->find_detail(Array, 'id')
#2 [internal function]: Controller_Home->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-15 16:58:12 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 259 ]
2014-06-15 16:58:12 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 259 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(259): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 259, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(63): Model_DownloadType->find_detail(Array, 'id')
#2 [internal function]: Controller_Home->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-15 16:58:34 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:58:34 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:59:15 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:59:15 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 16:59:34 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 16:59:34 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 17:03:22 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 17:03:22 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 17:03:46 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 17:03:46 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 17:04:31 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 17:04:31 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 17:04:47 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 17:04:47 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 17:04:51 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 17:04:51 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 17:04:53 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 17:04:53 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 17:04:56 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 17:04:56 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 17:05:30 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 17:05:30 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 17:05:48 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
2014-06-15 17:05:48 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/site/views/site/home_page.php [ 185 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(185): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 17:06:35 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 186 ]
2014-06-15 17:06:35 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 186 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(186): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 186, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 17:06:56 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 186 ]
2014-06-15 17:06:56 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 186 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(186): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 186, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 17:07:01 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 186 ]
2014-06-15 17:07:01 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 186 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(186): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 186, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 17:07:10 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 186 ]
2014-06-15 17:07:10 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 186 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(186): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 186, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 17:07:13 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 186 ]
2014-06-15 17:07:13 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 186 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(186): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 186, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 17:08:09 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 186 ]
2014-06-15 17:08:09 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 186 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(186): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 186, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(124): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 17:24:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: _data_vars ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 254 ]
2014-06-15 17:24:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: _data_vars ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 254 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(254): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 254, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(63): Model_DownloadType->find_detail(Array, 'en')
#2 [internal function]: Controller_Home->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-15 17:28:12 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '\' (T_NS_SEPARATOR) ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 249 ]
2014-06-15 17:28:12 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '\' (T_NS_SEPARATOR) ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 249 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 17:29:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: _data_vars ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 255 ]
2014-06-15 17:29:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: _data_vars ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 255 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(255): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 255, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(63): Model_DownloadType->find_detail(Array, 'en')
#2 [internal function]: Controller_Home->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-15 17:31:44 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/classes/model/language.php [ 255 ]
2014-06-15 17:31:44 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/classes/model/language.php [ 255 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/language.php(255): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 255, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/language.php(113): Model_Language->find_count(Array)
#2 /Volumes/Data/www/offistarindo/_app/classes/lang.php(55): Model_Language->load_by_prefix(Array)
#3 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(296): Lang::_lang_id(Array)
#4 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, Array, 1)
#5 [internal function]: Controller_Home->action_index()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#10 {main}
2014-06-15 17:32:24 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/classes/model/language.php [ 255 ]
2014-06-15 17:32:24 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/classes/model/language.php [ 255 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/language.php(255): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 255, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/language.php(113): Model_Language->find_count(Array)
#2 /Volumes/Data/www/offistarindo/_app/classes/lang.php(55): Model_Language->load_by_prefix(Array)
#3 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(298): Lang::_lang_id(Array)
#4 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, Array, 1)
#5 [internal function]: Controller_Home->action_index()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#10 {main}
2014-06-15 17:32:42 --- ERROR: ErrorException [ 2 ]: func_get_arg() expects exactly 1 parameter, 0 given ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 281 ]
2014-06-15 17:32:42 --- STRACE: ErrorException [ 2 ]: func_get_arg() expects exactly 1 parameter, 0 given ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 281 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'func_get_arg() ...', '/Volumes/Data/w...', 281, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(281): func_get_arg()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, Array, 1)
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 17:32:56 --- ERROR: ErrorException [ 2 ]: func_get_arg() expects parameter 1 to be long, array given ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 281 ]
2014-06-15 17:32:56 --- STRACE: ErrorException [ 2 ]: func_get_arg() expects parameter 1 to be long, array given ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 281 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'func_get_arg() ...', '/Volumes/Data/w...', 281, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(281): func_get_arg(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, Array, 1)
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 17:33:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: query ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 282 ]
2014-06-15 17:33:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: query ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 282 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(282): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 282, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, Array, 1)
#2 [internal function]: Controller_Home->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-15 17:33:22 --- ERROR: ErrorException [ 2 ]: func_get_arg() expects exactly 1 parameter, 0 given ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 281 ]
2014-06-15 17:33:22 --- STRACE: ErrorException [ 2 ]: func_get_arg() expects exactly 1 parameter, 0 given ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 281 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'func_get_arg() ...', '/Volumes/Data/w...', 281, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(281): func_get_arg()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, Array, 1)
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 17:33:27 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/classes/model/language.php [ 255 ]
2014-06-15 17:33:27 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/classes/model/language.php [ 255 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/language.php(255): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 255, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/language.php(113): Model_Language->find_count(Array)
#2 /Volumes/Data/www/offistarindo/_app/classes/lang.php(55): Model_Language->load_by_prefix(Array)
#3 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(298): Lang::_lang_id(Array)
#4 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, Array, 1)
#5 [internal function]: Controller_Home->action_index()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#10 {main}
2014-06-15 17:34:09 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/classes/model/language.php [ 255 ]
2014-06-15 17:34:09 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/classes/model/language.php [ 255 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/language.php(255): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 255, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/language.php(113): Model_Language->find_count(Array)
#2 /Volumes/Data/www/offistarindo/_app/classes/lang.php(55): Model_Language->load_by_prefix(Array)
#3 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(298): Lang::_lang_id(Array)
#4 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, Array, 1, 'en')
#5 [internal function]: Controller_Home->action_index()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#10 {main}
2014-06-15 17:40:28 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/classes/model/language.php [ 255 ]
2014-06-15 17:40:28 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/classes/model/language.php [ 255 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/language.php(255): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 255, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/language.php(113): Model_Language->find_count(Array)
#2 /Volumes/Data/www/offistarindo/_app/classes/lang.php(55): Model_Language->load_by_prefix(Array)
#3 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(298): Lang::_lang_id(Array)
#4 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, Array, 1, 'en')
#5 [internal function]: Controller_Home->action_index()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#10 {main}
2014-06-15 17:41:49 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/classes/model/language.php [ 255 ]
2014-06-15 17:41:49 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/language/classes/model/language.php [ 255 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/language.php(255): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 255, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/language/classes/model/language.php(113): Model_Language->find_count(Array)
#2 /Volumes/Data/www/offistarindo/_app/classes/lang.php(55): Model_Language->load_by_prefix(Array)
#3 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(298): Lang::_lang_id(Array)
#4 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, Array, 1)
#5 [internal function]: Controller_Home->action_index()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#10 {main}
2014-06-15 17:42:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',', expecting ')' ~ MODPATH/_modules/site/classes/controller/home.php [ 47 ]
2014-06-15 17:42:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',', expecting ')' ~ MODPATH/_modules/site/classes/controller/home.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 17:42:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',', expecting ')' ~ MODPATH/_modules/site/classes/controller/home.php [ 47 ]
2014-06-15 17:42:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',', expecting ')' ~ MODPATH/_modules/site/classes/controller/home.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 17:42:52 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 173 ]
2014-06-15 17:42:52 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 173 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(173): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 173, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(282): Model_Testimonial->find(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array)
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 17:44:11 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 173 ]
2014-06-15 17:44:11 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 173 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(173): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 173, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(283): Model_Testimonial->find(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 17:44:43 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 173 ]
2014-06-15 17:44:43 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 173 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(173): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 173, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(283): Model_Testimonial->find(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 17:44:44 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 173 ]
2014-06-15 17:44:44 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 173 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(173): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 173, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(283): Model_Testimonial->find(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 17:44:44 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 173 ]
2014-06-15 17:44:44 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 173 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(173): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 173, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(283): Model_Testimonial->find(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 17:44:55 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 173 ]
2014-06-15 17:44:55 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 173 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(173): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 173, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(283): Model_Testimonial->find(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 17:45:04 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 173 ]
2014-06-15 17:45:04 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 173 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(173): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 173, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(284): Model_Testimonial->find(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 17:45:16 --- ERROR: ErrorException [ 2 ]: func_get_arg() expects exactly 1 parameter, 0 given ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 281 ]
2014-06-15 17:45:16 --- STRACE: ErrorException [ 2 ]: func_get_arg() expects exactly 1 parameter, 0 given ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 281 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'func_get_arg() ...', '/Volumes/Data/w...', 281, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(281): func_get_arg()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 17:45:27 --- ERROR: ErrorException [ 2 ]: func_get_arg() expects parameter 1 to be long, array given ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 281 ]
2014-06-15 17:45:27 --- STRACE: ErrorException [ 2 ]: func_get_arg() expects parameter 1 to be long, array given ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 281 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'func_get_arg() ...', '/Volumes/Data/w...', 281, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(281): func_get_arg(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 17:45:35 --- ERROR: ErrorException [ 2 ]: func_get_arg() expects parameter 1 to be long, array given ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 281 ]
2014-06-15 17:45:35 --- STRACE: ErrorException [ 2 ]: func_get_arg() expects parameter 1 to be long, array given ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 281 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'func_get_arg() ...', '/Volumes/Data/w...', 281, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(281): func_get_arg(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 17:45:41 --- ERROR: ErrorException [ 2 ]: func_get_arg() expects parameter 1 to be long, array given ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 281 ]
2014-06-15 17:45:41 --- STRACE: ErrorException [ 2 ]: func_get_arg() expects parameter 1 to be long, array given ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 281 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'func_get_arg() ...', '/Volumes/Data/w...', 281, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(281): func_get_arg(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 17:47:01 --- ERROR: ErrorException [ 2 ]: func_get_arg() expects parameter 1 to be long, array given ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 281 ]
2014-06-15 17:47:01 --- STRACE: ErrorException [ 2 ]: func_get_arg() expects parameter 1 to be long, array given ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 281 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'func_get_arg() ...', '/Volumes/Data/w...', 281, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(281): func_get_arg(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 17:47:07 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 173 ]
2014-06-15 17:47:07 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 173 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(173): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 173, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(285): Model_Testimonial->find(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 17:47:17 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 173 ]
2014-06-15 17:47:17 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 173 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(173): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 173, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(285): Model_Testimonial->find(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 17:47:32 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 173 ]
2014-06-15 17:47:32 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 173 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(173): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 173, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(285): Model_Testimonial->find(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 17:47:33 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 173 ]
2014-06-15 17:47:33 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 173 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(173): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 173, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(285): Model_Testimonial->find(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 17:47:42 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 173 ]
2014-06-15 17:47:42 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 173 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(173): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 173, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(285): Model_Testimonial->find(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 17:48:10 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 283 ]
2014-06-15 17:48:10 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 283 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 283, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(283): implode(',', Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 17:48:52 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 173 ]
2014-06-15 17:48:52 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 173 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(173): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 173, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(285): Model_Testimonial->find(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 17:49:15 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/site/classes/controller/home.php [ 47 ]
2014-06-15 17:49:15 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/site/classes/controller/home.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 17:49:25 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 173 ]
2014-06-15 17:49:25 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 173 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(173): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 173, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(285): Model_Testimonial->find(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 17:49:35 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 173 ]
2014-06-15 17:49:35 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 173 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(173): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 173, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(285): Model_Testimonial->find(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 17:49:48 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 173 ]
2014-06-15 17:49:48 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 173 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(173): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 173, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(285): Model_Testimonial->find(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 17:50:04 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 173 ]
2014-06-15 17:50:04 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 173 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(173): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 173, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(285): Model_Testimonial->find(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 17:50:21 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 283 ]
2014-06-15 17:50:21 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 283 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/Volumes/Data/w...', 283, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(283): explode('.', Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 17:50:23 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 283 ]
2014-06-15 17:50:23 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 283 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/Volumes/Data/w...', 283, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(283): explode(',', Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 17:50:30 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 283 ]
2014-06-15 17:50:30 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 283 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 283, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(283): implode(',', Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 17:51:29 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 283 ]
2014-06-15 17:51:29 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 283 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 283, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(283): implode(',', Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 17:51:42 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 283 ]
2014-06-15 17:51:42 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 283 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 283, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(283): implode(',', Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 17:52:11 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 284 ]
2014-06-15 17:52:11 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 284 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 284, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(284): implode(',', Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, 'en')
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 17:53:32 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ MODPATH/_modules/site/classes/controller/home.php [ 47 ]
2014-06-15 17:53:32 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ MODPATH/_modules/site/classes/controller/home.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 17:53:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: lang ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 300 ]
2014-06-15 17:53:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: lang ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 300 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(300): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 300, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(47): Model_Testimonial->find_detail(Array, Array, 1)
#2 [internal function]: Controller_Home->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-15 17:55:31 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Testimonial::lang() ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 285 ]
2014-06-15 17:55:31 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Testimonial::lang() ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 285 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 17:55:38 --- ERROR: ErrorException [ 1 ]: Undefined class constant 'lang' ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 285 ]
2014-06-15 17:55:38 --- STRACE: ErrorException [ 1 ]: Undefined class constant 'lang' ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 285 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 17:56:06 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::lang() ~ MODPATH/_modules/site/classes/controller/home.php [ 47 ]
2014-06-15 17:56:06 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::lang() ~ MODPATH/_modules/site/classes/controller/home.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 17:59:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: _detail_vars ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 258 ]
2014-06-15 17:59:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: _detail_vars ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 258 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(258): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 258, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(62): Model_DownloadType->find_detail(Array)
#2 [internal function]: Controller_Home->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-15 17:59:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: _detail_vars ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 258 ]
2014-06-15 17:59:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: _detail_vars ~ MODPATH/_modules/download/classes/model/downloadtype.php [ 258 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(258): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 258, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(62): Model_DownloadType->find_detail(Array)
#2 [internal function]: Controller_Home->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-15 18:06:03 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/solution.php [ 111 ]
2014-06-15 18:06:03 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/solution.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(111): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 111, Array)
#1 [internal function]: Controller_Solution->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 18:08:05 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'order clause' [ SELECT * FROM `tbl_products` WHERE `status` != 'deleted' ORDER BY   `subject` asc LIMIT 25 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-15 18:08:05 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'order clause' [ SELECT * FROM `tbl_products` WHERE `status` != 'deleted' ORDER BY   `subject` asc LIMIT 25 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/product.php(205): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(130): Model_Product->find(Array, Array, 25, '')
#2 [internal function]: Controller_Backend_Product->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-15 18:10:49 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'order clause' [ SELECT * FROM `tbl_products` WHERE `status` != 'deleted' ORDER BY   `subject` asc LIMIT 25 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-15 18:10:49 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'order clause' [ SELECT * FROM `tbl_products` WHERE `status` != 'deleted' ORDER BY   `subject` asc LIMIT 25 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/product.php(205): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(131): Model_Product->find(Array, Array, 25, '')
#2 [internal function]: Controller_Backend_Product->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-15 18:11:06 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'title' in 'order clause' [ SELECT * FROM `tbl_products` WHERE `status` != 'deleted' ORDER BY   `title` asc LIMIT 25 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-15 18:11:06 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'title' in 'order clause' [ SELECT * FROM `tbl_products` WHERE `status` != 'deleted' ORDER BY   `title` asc LIMIT 25 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/product.php(205): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(131): Model_Product->find(Array, Array, 25, '')
#2 [internal function]: Controller_Backend_Product->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-15 18:11:23 --- ERROR: ErrorException [ 8 ]: Undefined offset: 7 ~ MODPATH/_modules/product/views/product/backend/product_index.php [ 80 ]
2014-06-15 18:11:23 --- STRACE: ErrorException [ 8 ]: Undefined offset: 7 ~ MODPATH/_modules/product/views/product/backend/product_index.php [ 80 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_index.php(80): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 80, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 18:12:17 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$name ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 568 ]
2014-06-15 18:12:17 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$name ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 568 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(568): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 568, Array)
#1 [internal function]: Controller_Backend_Product->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 18:15:13 --- ERROR: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/product/views/product/backend/product_edit.php [ 17 ]
2014-06-15 18:15:13 --- STRACE: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/product/views/product/backend/product_edit.php [ 17 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_edit.php(17): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 17, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 18:16:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/product/views/product/backend/product_edit.php [ 7 ]
2014-06-15 18:16:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/product/views/product/backend/product_edit.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_edit.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 7, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 18:28:45 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$name ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 9 ]
2014-06-15 18:28:45 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$name ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 9 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_view.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 9, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 18:31:11 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Product::$banner ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 608 ]
2014-06-15 18:31:11 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Product::$banner ~ MODPATH/_modules/product/classes/controller/backend/product.php [ 608 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/product.php(608): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 608, Array)
#1 [internal function]: Controller_Backend_Product->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 18:35:57 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$name ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 9 ]
2014-06-15 18:35:57 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$name ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 9 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_view.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 9, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 18:36:03 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$name ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 9 ]
2014-06-15 18:36:03 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$name ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 9 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_view.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 9, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 18:38:35 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$name ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 28 ]
2014-06-15 18:38:35 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$name ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 28 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_view.php(28): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 28, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 18:39:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: banner ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 31 ]
2014-06-15 18:39:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: banner ~ MODPATH/_modules/product/views/product/backend/product_view.php [ 31 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_view.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 31, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 18:58:22 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$subject ~ MODPATH/_modules/site/classes/controller/api/api.php [ 50 ]
2014-06-15 18:58:22 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$subject ~ MODPATH/_modules/site/classes/controller/api/api.php [ 50 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/api/api.php(50): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 50, Array)
#1 [internal function]: Controller_Api_Api->action_productlookup()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api_Api))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 18:58:31 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/products.php [ 186 ]
2014-06-15 18:58:31 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/products.php [ 186 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(186): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 186, Array)
#1 [internal function]: Controller_Products->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 19:02:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_CategoryProductContent' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2014-06-15 19:02:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_CategoryProductContent' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 19:03:21 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_product_category_content' doesn't exist [ SELECT * FROM `tbl_product_category_content` WHERE `category_id` = '23' AND `lang_id` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-15 19:03:21 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_offistarindo2014.tbl_product_category_content' doesn't exist [ SELECT * FROM `tbl_product_category_content` WHERE `category_id` = '23' AND `lang_id` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategorycontent.php(198): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(344): Model_ProductCategoryContent->find(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(60): Model_ProductCategory->find_detail(Array)
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 19:07:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: detai ~ MODPATH/_modules/product/classes/model/productcategory.php [ 335 ]
2014-06-15 19:07:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: detai ~ MODPATH/_modules/product/classes/model/productcategory.php [ 335 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(335): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 335, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(60): Model_ProductCategory->find_detail(Array)
#2 [internal function]: Controller_Home->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-15 19:09:07 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'order clause' [ SELECT * FROM `tbl_product_categories` WHERE `status` != 'deleted' ORDER BY `name` asc LIMIT 25 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-15 19:09:07 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'order clause' [ SELECT * FROM `tbl_product_categories` WHERE `status` != 'deleted' ORDER BY `name` asc LIMIT 25 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(194): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(94): Model_ProductCategory->find(Array, Array, 25, '')
#2 [internal function]: Controller_Backend_ProductCategory->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-15 19:09:46 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$name ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 64 ]
2014-06-15 19:09:46 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$name ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 64 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_index.php(64): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 64, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 19:11:28 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_ProductCategory::$productcategorycontent ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 101 ]
2014-06-15 19:11:28 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_ProductCategory::$productcategorycontent ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 101 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(101): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 101, Array)
#1 [internal function]: Controller_Backend_ProductCategory->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 19:12:03 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$name ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 64 ]
2014-06-15 19:12:03 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$name ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 64 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_index.php(64): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 64, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 19:12:39 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$name ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 64 ]
2014-06-15 19:12:39 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$name ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 64 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_index.php(64): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 64, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 19:13:14 --- ERROR: ErrorException [ 8 ]: Undefined offset: 20 ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 64 ]
2014-06-15 19:13:14 --- STRACE: ErrorException [ 8 ]: Undefined offset: 20 ~ MODPATH/_modules/product/views/product/backend/productcategory_index.php [ 64 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_index.php(64): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 64, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 19:13:45 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$name ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 451 ]
2014-06-15 19:13:45 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$name ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 451 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(451): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 451, Array)
#1 [internal function]: Controller_Backend_ProductCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 19:14:41 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$name ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 451 ]
2014-06-15 19:14:41 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$name ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 451 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(451): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 451, Array)
#1 [internal function]: Controller_Backend_ProductCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 19:15:53 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$name ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 451 ]
2014-06-15 19:15:53 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$name ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 451 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(451): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 451, Array)
#1 [internal function]: Controller_Backend_ProductCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 19:16:22 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_ProductCategory::$banner ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 465 ]
2014-06-15 19:16:22 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_ProductCategory::$banner ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 465 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(465): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 465, Array)
#1 [internal function]: Controller_Backend_ProductCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 19:16:23 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_ProductCategory::$banner ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 465 ]
2014-06-15 19:16:23 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_ProductCategory::$banner ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 465 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(465): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 465, Array)
#1 [internal function]: Controller_Backend_ProductCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 19:16:23 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_ProductCategory::$banner ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 465 ]
2014-06-15 19:16:23 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_ProductCategory::$banner ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 465 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(465): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 465, Array)
#1 [internal function]: Controller_Backend_ProductCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 19:16:35 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_ProductCategory::$banner ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 465 ]
2014-06-15 19:16:35 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_ProductCategory::$banner ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 465 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(465): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 465, Array)
#1 [internal function]: Controller_Backend_ProductCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 19:16:41 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH/_modules/product/views/product/backend/productcategory_edit.php [ 16 ]
2014-06-15 19:16:41 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH/_modules/product/views/product/backend/productcategory_edit.php [ 16 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_edit.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 16, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 19:16:44 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH/_modules/product/views/product/backend/productcategory_edit.php [ 16 ]
2014-06-15 19:16:44 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH/_modules/product/views/product/backend/productcategory_edit.php [ 16 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_edit.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 16, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 19:17:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: prefix ~ MODPATH/_modules/product/views/product/backend/productcategory_edit.php [ 81 ]
2014-06-15 19:17:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: prefix ~ MODPATH/_modules/product/views/product/backend/productcategory_edit.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_edit.php(81): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 81, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 19:20:01 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-15 19:20:01 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'field list' [ SELECT MAX(`count`) as `hits`, subject FROM `tbl_products` GROUP BY subject ORDER BY `count` DESC LIMIT 0, 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/userdashboard.php(366): Kohana_Database_MySQL->query(1, 'SELECT MAX(`cou...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/controller/backend/userdashboard.php(34): Model_UserDashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-15 19:23:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: sub_level ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 421 ]
2014-06-15 19:23:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: sub_level ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 421 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(421): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 421, Array)
#1 [internal function]: Controller_Backend_ProductCategory->action_edit()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 19:24:50 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$name ~ MODPATH/_modules/product/views/product/backend/productcategory_view.php [ 17 ]
2014-06-15 19:24:50 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$name ~ MODPATH/_modules/product/views/product/backend/productcategory_view.php [ 17 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_view.php(17): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 17, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 19:26:19 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_ProductCategory::$banner ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 310 ]
2014-06-15 19:26:19 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_ProductCategory::$banner ~ MODPATH/_modules/product/classes/controller/backend/productcategory.php [ 310 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/controller/backend/productcategory.php(310): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 310, Array)
#1 [internal function]: Controller_Backend_ProductCategory->action_view()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 19:26:26 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$name ~ MODPATH/_modules/product/views/product/backend/productcategory_view.php [ 17 ]
2014-06-15 19:26:26 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$name ~ MODPATH/_modules/product/views/product/backend/productcategory_view.php [ 17 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_view.php(17): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 17, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 19:27:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: banner ~ MODPATH/_modules/product/views/product/backend/productcategory_view.php [ 37 ]
2014-06-15 19:27:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: banner ~ MODPATH/_modules/product/views/product/backend/productcategory_view.php [ 37 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_view.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 37, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 19:28:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: banner ~ MODPATH/_modules/product/views/product/backend/productcategory_view.php [ 37 ]
2014-06-15 19:28:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: banner ~ MODPATH/_modules/product/views/product/backend/productcategory_view.php [ 37 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_view.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 37, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 20:05:13 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$subject ~ MODPATH/_modules/site/classes/controller/api/api.php [ 50 ]
2014-06-15 20:05:13 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$subject ~ MODPATH/_modules/site/classes/controller/api/api.php [ 50 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/api/api.php(50): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 50, Array)
#1 [internal function]: Controller_Api_Api->action_productlookup()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api_Api))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 20:05:58 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/products.php [ 186 ]
2014-06-15 20:05:58 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/products.php [ 186 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(186): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 186, Array)
#1 [internal function]: Controller_Products->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 20:13:44 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 51 ]
2014-06-15 20:13:44 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 51 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(51): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 51, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 20:13:53 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 51 ]
2014-06-15 20:13:53 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 51 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(51): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 51, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 20:13:55 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 51 ]
2014-06-15 20:13:55 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 51 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(51): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 51, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 20:13:55 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 51 ]
2014-06-15 20:13:55 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 51 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(51): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 51, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 20:13:57 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 51 ]
2014-06-15 20:13:57 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 51 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(51): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 51, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 20:16:06 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 51 ]
2014-06-15 20:16:06 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 51 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(51): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 51, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 20:16:33 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 51 ]
2014-06-15 20:16:33 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 51 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(51): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 51, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 20:16:47 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 51 ]
2014-06-15 20:16:47 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 51 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(51): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 51, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 20:17:59 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'category_id' in 'where clause' [ SELECT * FROM `tbl_testimonial_content` WHERE `category_id` = '10' AND `lang_id` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-15 20:17:59 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'category_id' in 'where clause' [ SELECT * FROM `tbl_testimonial_content` WHERE `category_id` = '10' AND `lang_id` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonialcontent.php(198): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(292): Model_TestimonialContent->find(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(46): Model_Testimonial->find_detail(Array, Array, 1)
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 20:20:05 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 51 ]
2014-06-15 20:20:05 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 51 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(51): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 51, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 20:21:10 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 52 ]
2014-06-15 20:21:10 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 52 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(52): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 52, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 20:21:24 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 52 ]
2014-06-15 20:21:24 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 52 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(52): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 52, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 20:21:34 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 52 ]
2014-06-15 20:21:34 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 52 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(52): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 52, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 20:21:37 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 52 ]
2014-06-15 20:21:37 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 52 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(52): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 52, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 20:21:40 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 52 ]
2014-06-15 20:21:40 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 52 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(52): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 52, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 20:21:49 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 52 ]
2014-06-15 20:21:49 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 52 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(52): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 52, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 20:23:00 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 52 ]
2014-06-15 20:23:00 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 52 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(52): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 52, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 20:23:51 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 52 ]
2014-06-15 20:23:51 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 52 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(52): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 52, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 20:24:08 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 52 ]
2014-06-15 20:24:08 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 52 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(52): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 52, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 20:24:27 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 52 ]
2014-06-15 20:24:27 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 52 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(52): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 52, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 20:24:33 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 52 ]
2014-06-15 20:24:33 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 52 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(52): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 52, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 20:26:02 --- ERROR: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 302 ]
2014-06-15 20:26:02 --- STRACE: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 302 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 20:26:11 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 281 ]
2014-06-15 20:26:11 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 281 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 20:26:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 281 ]
2014-06-15 20:26:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 281 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 20:26:18 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(object)' (object) (T_OBJECT_CAST) ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 281 ]
2014-06-15 20:26:18 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(object)' (object) (T_OBJECT_CAST) ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 281 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 20:26:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 282 ]
2014-06-15 20:26:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 282 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 20:26:48 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 282 ]
2014-06-15 20:26:48 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 282 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 20:26:54 --- ERROR: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 304 ]
2014-06-15 20:26:54 --- STRACE: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 304 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 20:27:14 --- ERROR: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 311 ]
2014-06-15 20:27:14 --- STRACE: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 311 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 20:27:50 --- ERROR: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/_modules/site/views/site/home_page.php [ 163 ]
2014-06-15 20:27:50 --- STRACE: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/_modules/site/views/site/home_page.php [ 163 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 20:28:16 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 304 ]
2014-06-15 20:28:16 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 304 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/testimonial/classes/model/testimonial.php(304): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 304, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(46): Model_Testimonial->find_detail(Array, Array, 1)
#2 [internal function]: Controller_Home->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-15 20:28:23 --- ERROR: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/_modules/site/views/site/home_page.php [ 163 ]
2014-06-15 20:28:23 --- STRACE: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/_modules/site/views/site/home_page.php [ 163 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 20:28:39 --- ERROR: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/_modules/site/views/site/home_page.php [ 163 ]
2014-06-15 20:28:39 --- STRACE: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/_modules/site/views/site/home_page.php [ 163 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 20:29:56 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/product/classes/model/productcategory.php [ 354 ]
2014-06-15 20:29:56 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/product/classes/model/productcategory.php [ 354 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/productcategory.php(354): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 354, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(59): Model_ProductCategory->find_detail(Array)
#2 [internal function]: Controller_Home->action_index()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-06-15 20:30:04 --- ERROR: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/_modules/site/views/site/home_page.php [ 163 ]
2014-06-15 20:30:04 --- STRACE: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/_modules/site/views/site/home_page.php [ 163 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 20:35:09 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/page/classes/model/page.php [ 214 ]
2014-06-15 20:35:09 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/page/classes/model/page.php [ 214 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(214): Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 214, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/page/classes/model/page.php(77): Model_Page->find(Array, '', 1)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(35): Model_Page->load(Array)
#3 [internal function]: Controller_Home->action_index()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 20:35:20 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Page::find_detail() ~ MODPATH/_modules/site/classes/controller/home.php [ 35 ]
2014-06-15 20:35:20 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Page::find_detail() ~ MODPATH/_modules/site/classes/controller/home.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 20:36:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: page_content ~ MODPATH/_modules/site/classes/controller/home.php [ 76 ]
2014-06-15 20:36:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: page_content ~ MODPATH/_modules/site/classes/controller/home.php [ 76 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(76): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 76, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 20:36:38 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$id ~ MODPATH/_modules/site/views/site/home_page.php [ 53 ]
2014-06-15 20:36:38 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$id ~ MODPATH/_modules/site/views/site/home_page.php [ 53 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(53): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 53, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(101): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 20:37:50 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/views/site/home_page.php [ 53 ]
2014-06-15 20:37:50 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/views/site/home_page.php [ 53 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(53): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 53, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(101): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 20:38:35 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/views/site/home_page.php [ 53 ]
2014-06-15 20:38:35 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/views/site/home_page.php [ 53 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(53): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 53, Array)
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
2014-06-15 20:39:04 --- ERROR: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/_modules/page/classes/model/page.php [ 352 ]
2014-06-15 20:39:04 --- STRACE: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/_modules/page/classes/model/page.php [ 352 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 20:39:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '0' (T_LNUMBER), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ MODPATH/_modules/page/classes/model/page.php [ 352 ]
2014-06-15 20:39:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '0' (T_LNUMBER), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ MODPATH/_modules/page/classes/model/page.php [ 352 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 20:39:15 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/views/site/home_page.php [ 53 ]
2014-06-15 20:39:15 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/views/site/home_page.php [ 53 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(53): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 53, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(103): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 20:39:28 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ MODPATH/_modules/page/classes/model/page.php [ 352 ]
2014-06-15 20:39:28 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ MODPATH/_modules/page/classes/model/page.php [ 352 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 20:39:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ MODPATH/_modules/page/classes/model/page.php [ 352 ]
2014-06-15 20:39:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ MODPATH/_modules/page/classes/model/page.php [ 352 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 20:39:39 --- ERROR: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/_modules/page/classes/model/page.php [ 352 ]
2014-06-15 20:39:39 --- STRACE: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/_modules/page/classes/model/page.php [ 352 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 20:39:42 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/views/site/home_page.php [ 53 ]
2014-06-15 20:39:42 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/views/site/home_page.php [ 53 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(53): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 53, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(103): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 20:39:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ MODPATH/_modules/page/classes/model/page.php [ 352 ]
2014-06-15 20:39:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ MODPATH/_modules/page/classes/model/page.php [ 352 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 20:39:55 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '0' (T_LNUMBER), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ MODPATH/_modules/page/classes/model/page.php [ 352 ]
2014-06-15 20:39:55 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '0' (T_LNUMBER), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ MODPATH/_modules/page/classes/model/page.php [ 352 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 20:39:58 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ''0'' (T_CONSTANT_ENCAPSED_STRING), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ MODPATH/_modules/page/classes/model/page.php [ 352 ]
2014-06-15 20:39:58 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ''0'' (T_CONSTANT_ENCAPSED_STRING), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ MODPATH/_modules/page/classes/model/page.php [ 352 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 20:40:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '0' (T_LNUMBER), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ MODPATH/_modules/page/classes/model/page.php [ 352 ]
2014-06-15 20:40:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '0' (T_LNUMBER), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ MODPATH/_modules/page/classes/model/page.php [ 352 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 20:40:12 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/views/site/home_page.php [ 53 ]
2014-06-15 20:40:12 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$text ~ MODPATH/_modules/site/views/site/home_page.php [ 53 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(53): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 53, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(103): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 20:40:34 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 53 ]
2014-06-15 20:40:34 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 53 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(53): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 53, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(103): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 20:40:54 --- ERROR: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/_modules/page/classes/model/page.php [ 345 ]
2014-06-15 20:40:54 --- STRACE: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/_modules/page/classes/model/page.php [ 345 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 20:40:59 --- ERROR: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/_modules/page/classes/model/page.php [ 345 ]
2014-06-15 20:40:59 --- STRACE: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/_modules/page/classes/model/page.php [ 345 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 20:41:10 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 53 ]
2014-06-15 20:41:10 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 53 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(53): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 53, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(103): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 20:41:15 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 53 ]
2014-06-15 20:41:15 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 53 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(53): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 53, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(103): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 20:42:21 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 175 ]
2014-06-15 20:42:21 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 175 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(175): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 175, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(103): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 20:42:39 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 175 ]
2014-06-15 20:42:39 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 175 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(175): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 175, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(103): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 20:42:54 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 175 ]
2014-06-15 20:42:54 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 175 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(175): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 175, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(103): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 20:43:07 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 175 ]
2014-06-15 20:43:07 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 175 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(175): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 175, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(103): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 20:43:25 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 175 ]
2014-06-15 20:43:25 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 175 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(175): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 175, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(103): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 20:44:31 --- ERROR: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/_modules/page/classes/model/page.php [ 351 ]
2014-06-15 20:44:31 --- STRACE: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/_modules/page/classes/model/page.php [ 351 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 20:44:59 --- ERROR: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/_modules/page/classes/model/page.php [ 352 ]
2014-06-15 20:44:59 --- STRACE: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/_modules/page/classes/model/page.php [ 352 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 20:45:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'exit' (T_EXIT) ~ MODPATH/_modules/page/classes/model/page.php [ 352 ]
2014-06-15 20:45:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'exit' (T_EXIT) ~ MODPATH/_modules/page/classes/model/page.php [ 352 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 20:46:45 --- ERROR: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 303 ]
2014-06-15 20:46:45 --- STRACE: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 303 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 20:46:51 --- ERROR: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 303 ]
2014-06-15 20:46:51 --- STRACE: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH/_modules/testimonial/classes/model/testimonial.php [ 303 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 20:47:00 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 53 ]
2014-06-15 20:47:00 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 53 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(53): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 53, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 20:47:25 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 55 ]
2014-06-15 20:47:25 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 55 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(55): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 55, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 20:47:31 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 55 ]
2014-06-15 20:47:31 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 55 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(55): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 55, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 20:48:29 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 154 ]
2014-06-15 20:48:29 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 154 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(154): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 154, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(106): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 20:48:43 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 154 ]
2014-06-15 20:48:43 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/views/site/home_page.php [ 154 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(154): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 154, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(106): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 20:50:05 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$file_name ~ MODPATH/_modules/site/views/site/home_page.php [ 64 ]
2014-06-15 20:50:05 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$file_name ~ MODPATH/_modules/site/views/site/home_page.php [ 64 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(64): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 64, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(106): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 20:50:30 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$file_name ~ MODPATH/_modules/site/views/site/home_page.php [ 65 ]
2014-06-15 20:50:30 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$file_name ~ MODPATH/_modules/site/views/site/home_page.php [ 65 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/home_page.php(65): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 65, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(106): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 20:54:21 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$subject ~ MODPATH/_modules/site/classes/controller/api/api.php [ 50 ]
2014-06-15 20:54:21 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$subject ~ MODPATH/_modules/site/classes/controller/api/api.php [ 50 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/api/api.php(50): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 50, Array)
#1 [internal function]: Controller_Api_Api->action_productlookup()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api_Api))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 20:54:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: qry_product ~ MODPATH/_modules/site/classes/controller/home.php [ 68 ]
2014-06-15 20:54:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: qry_product ~ MODPATH/_modules/site/classes/controller/home.php [ 68 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/home.php(68): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 68, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 20:58:44 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/products.php [ 186 ]
2014-06-15 20:58:44 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/products.php [ 186 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(186): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 186, Array)
#1 [internal function]: Controller_Products->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 20:58:49 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/products.php [ 186 ]
2014-06-15 20:58:49 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/products.php [ 186 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(186): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 186, Array)
#1 [internal function]: Controller_Products->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 21:01:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/product/views/product/backend/productcategory_add.php [ 7 ]
2014-06-15 21:01:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/product/views/product/backend/productcategory_add.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_add.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 7, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 21:03:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/product/views/product/backend/productcategory_add.php [ 7 ]
2014-06-15 21:03:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/product/views/product/backend/productcategory_add.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_add.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 7, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 21:04:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/product/views/product/backend/productcategory_add.php [ 7 ]
2014-06-15 21:04:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/product/views/product/backend/productcategory_add.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_add.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 7, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 21:05:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/product/views/product/backend/productcategory_add.php [ 7 ]
2014-06-15 21:05:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: language_data ~ MODPATH/_modules/product/views/product/backend/productcategory_add.php [ 7 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/productcategory_add.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 7, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_ProductCategory))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 21:05:35 --- ERROR: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/product/views/product/backend/product_add.php [ 17 ]
2014-06-15 21:05:35 --- STRACE: ErrorException [ 8 ]: Undefined index: subject ~ MODPATH/_modules/product/views/product/backend/product_add.php [ 17 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_add.php(17): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 17, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 21:08:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: prefix ~ MODPATH/_modules/product/views/product/backend/product_add.php [ 70 ]
2014-06-15 21:08:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: prefix ~ MODPATH/_modules/product/views/product/backend/product_add.php [ 70 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/views/product/backend/product_add.php(70): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 70, Array)
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
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Product))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#15 {main}
2014-06-15 21:10:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/product/check_title/Aha ELF 22D was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-15 21:10:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/product/check_title/Aha ELF 22D was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-15 21:11:17 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/products.php [ 186 ]
2014-06-15 21:11:17 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/products.php [ 186 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(186): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 186, Array)
#1 [internal function]: Controller_Products->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 21:16:04 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$subject ~ MODPATH/_modules/site/classes/controller/api/api.php [ 50 ]
2014-06-15 21:16:04 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$subject ~ MODPATH/_modules/site/classes/controller/api/api.php [ 50 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/api/api.php(50): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 50, Array)
#1 [internal function]: Controller_Api_Api->action_productlookup()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api_Api))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 21:18:55 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/lang.php [ 57 ]
2014-06-15 21:18:55 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/lang.php [ 57 ]
--
#0 /Volumes/Data/www/offistarindo/_app/classes/lang.php(57): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 57, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/product.php(246): Lang::_lang_id('en-us')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/api/api.php(43): Model_Product->find_detail(Array)
#3 [internal function]: Controller_Api_Api->action_productlookup()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api_Api))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 21:19:39 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/lang.php [ 57 ]
2014-06-15 21:19:39 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/lang.php [ 57 ]
--
#0 /Volumes/Data/www/offistarindo/_app/classes/lang.php(57): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 57, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/product.php(246): Lang::_lang_id('en-us')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/api/api.php(43): Model_Product->find_detail(Array)
#3 [internal function]: Controller_Api_Api->action_productlookup()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api_Api))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 21:20:41 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/lang.php [ 57 ]
2014-06-15 21:20:41 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/lang.php [ 57 ]
--
#0 /Volumes/Data/www/offistarindo/_app/classes/lang.php(57): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 57, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/product.php(246): Lang::_lang_id('en-us')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/api/api.php(43): Model_Product->find_detail(Array)
#3 [internal function]: Controller_Api_Api->action_productlookup()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api_Api))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 21:21:40 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/lang.php [ 57 ]
2014-06-15 21:21:40 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/lang.php [ 57 ]
--
#0 /Volumes/Data/www/offistarindo/_app/classes/lang.php(57): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 57, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/product.php(246): Lang::_lang_id('en-us')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/api/api.php(43): Model_Product->find_detail(Array)
#3 [internal function]: Controller_Api_Api->action_productlookup()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api_Api))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 21:22:05 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/lang.php [ 57 ]
2014-06-15 21:22:05 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/lang.php [ 57 ]
--
#0 /Volumes/Data/www/offistarindo/_app/classes/lang.php(57): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 57, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/product.php(246): Lang::_lang_id('en-us')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/api/api.php(43): Model_Product->find_detail(Array)
#3 [internal function]: Controller_Api_Api->action_productlookup()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api_Api))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 21:38:26 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$name ~ MODPATH/_modules/site/views/site/download_page.php [ 10 ]
2014-06-15 21:38:26 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$name ~ MODPATH/_modules/site/views/site/download_page.php [ 10 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/download_page.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 10, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Download))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-15 21:38:44 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$name ~ MODPATH/_modules/site/views/site/download_page.php [ 10 ]
2014-06-15 21:38:44 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$name ~ MODPATH/_modules/site/views/site/download_page.php [ 10 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/download_page.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 10, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Download))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-15 21:38:51 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/products.php [ 186 ]
2014-06-15 21:38:51 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/products.php [ 186 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(186): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 186, Array)
#1 [internal function]: Controller_Products->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 21:39:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/productcategory/check_title/test-three was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-15 21:39:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/productcategory/check_title/test-three was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-15 21:40:43 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_PageCategory::load_by_name() ~ MODPATH/_modules/site/classes/controller/contact.php [ 55 ]
2014-06-15 21:40:43 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_PageCategory::load_by_name() ~ MODPATH/_modules/site/classes/controller/contact.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 21:43:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/productcategory/check_title/Test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-15 21:43:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/productcategory/check_title/Test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-15 21:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/productcategory/check_title/test-three was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-15 21:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/productcategory/check_title/test-three was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#3 {main}
2014-06-15 22:22:51 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/products.php [ 186 ]
2014-06-15 22:22:51 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/products.php [ 186 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(186): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 186, Array)
#1 [internal function]: Controller_Products->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 22:24:24 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$description ~ MODPATH/_modules/site/classes/controller/products.php [ 187 ]
2014-06-15 22:24:24 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$description ~ MODPATH/_modules/site/classes/controller/products.php [ 187 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(187): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 187, Array)
#1 [internal function]: Controller_Products->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 22:24:36 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$name ~ MODPATH/_modules/site/views/site/products_page.php [ 35 ]
2014-06-15 22:24:36 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$name ~ MODPATH/_modules/site/views/site/products_page.php [ 35 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(35): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 35, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-15 22:24:41 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$name ~ MODPATH/_modules/site/views/site/products_page.php [ 35 ]
2014-06-15 22:24:41 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$name ~ MODPATH/_modules/site/views/site/products_page.php [ 35 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(35): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 35, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-15 22:25:19 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/products_page.php [ 16 ]
2014-06-15 22:25:19 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/products_page.php [ 16 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 16, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-15 22:25:46 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/products_page.php [ 35 ]
2014-06-15 22:25:46 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/products_page.php [ 35 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(35): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 35, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-15 22:25:57 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/products_page.php [ 54 ]
2014-06-15 22:25:57 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/products_page.php [ 54 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(54): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 54, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-15 22:26:12 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/products_page.php [ 76 ]
2014-06-15 22:26:12 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/products_page.php [ 76 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(76): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 76, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-15 22:26:26 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/products_page.php [ 84 ]
2014-06-15 22:26:26 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/products_page.php [ 84 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_page.php(84): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 84, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-15 22:29:45 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_products` WHERE `name` = 'promethean-300' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-15 22:29:45 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_products` WHERE `name` = 'promethean-300' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/product.php(303): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/product.php(93): Model_Product->find_count(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(323): Model_Product->load_by_name('promethean-300')
#3 [internal function]: Controller_Products->action_read()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 22:31:49 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_products` WHERE `name` = 'promethean-300' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-15 22:31:49 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_products` WHERE `name` = 'promethean-300' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/product.php(303): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/product/classes/model/product.php(93): Model_Product->find_count(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(324): Model_Product->load_by_name('promethean-300')
#3 [internal function]: Controller_Products->action_read()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 22:32:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ MODPATH/_modules/site/classes/controller/products.php [ 324 ]
2014-06-15 22:32:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ MODPATH/_modules/site/classes/controller/products.php [ 324 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 22:32:36 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$description ~ MODPATH/_modules/site/classes/controller/products.php [ 363 ]
2014-06-15 22:32:36 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$description ~ MODPATH/_modules/site/classes/controller/products.php [ 363 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(363): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 363, Array)
#1 [internal function]: Controller_Products->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 22:32:50 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$name ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 35 ]
2014-06-15 22:32:50 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$name ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 35 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_detail_page.php(35): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 35, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-15 22:34:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: page_category ~ MODPATH/_modules/site/classes/controller/products.php [ 330 ]
2014-06-15 22:34:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: page_category ~ MODPATH/_modules/site/classes/controller/products.php [ 330 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(330): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 330, Array)
#1 [internal function]: Controller_Products->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 22:34:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_files ~ MODPATH/_modules/site/classes/controller/products.php [ 336 ]
2014-06-15 22:34:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_files ~ MODPATH/_modules/site/classes/controller/products.php [ 336 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(336): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 336, Array)
#1 [internal function]: Controller_Products->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 22:34:56 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$name ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 35 ]
2014-06-15 22:34:56 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$name ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 35 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_detail_page.php(35): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 35, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-15 22:35:31 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$subject ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 10 ]
2014-06-15 22:35:31 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$subject ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 10 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_detail_page.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 10, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-15 22:35:40 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$subject ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 10 ]
2014-06-15 22:35:40 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_ProductCategory::$subject ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 10 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_detail_page.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 10, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-15 22:36:04 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$subject ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 19 ]
2014-06-15 22:36:04 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$subject ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 19 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_detail_page.php(19): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 19, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-15 22:36:41 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 35 ]
2014-06-15 22:36:41 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 35 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_detail_page.php(35): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 35, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-15 22:36:57 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 54 ]
2014-06-15 22:36:57 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 54 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_detail_page.php(54): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 54, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-15 22:37:06 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$description ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 87 ]
2014-06-15 22:37:06 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$description ~ MODPATH/_modules/site/views/site/products_detail_page.php [ 87 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/products_detail_page.php(87): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 87, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Products))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-15 22:45:40 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$name ~ MODPATH/_modules/site/views/site/download_page.php [ 10 ]
2014-06-15 22:45:40 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$name ~ MODPATH/_modules/site/views/site/download_page.php [ 10 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/download_page.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 10, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Download))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-15 22:46:47 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_DownloadFile::find_detail() ~ MODPATH/_modules/site/classes/controller/download.php [ 123 ]
2014-06-15 22:46:47 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_DownloadFile::find_detail() ~ MODPATH/_modules/site/classes/controller/download.php [ 123 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 22:46:55 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$name ~ MODPATH/_modules/site/views/site/download_page.php [ 10 ]
2014-06-15 22:46:55 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$name ~ MODPATH/_modules/site/views/site/download_page.php [ 10 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/download_page.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 10, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Download))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-15 22:47:04 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/download_page.php [ 10 ]
2014-06-15 22:47:04 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ MODPATH/_modules/site/views/site/download_page.php [ 10 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/download_page.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 10, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Download))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-15 22:47:32 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadFile::$description ~ MODPATH/_modules/site/views/site/download_page.php [ 27 ]
2014-06-15 22:47:32 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadFile::$description ~ MODPATH/_modules/site/views/site/download_page.php [ 27 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/download_page.php(27): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 27, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Download))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-15 22:47:45 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadFile::$text ~ MODPATH/_modules/site/views/site/download_page.php [ 27 ]
2014-06-15 22:47:45 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadFile::$text ~ MODPATH/_modules/site/views/site/download_page.php [ 27 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/download_page.php(27): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 27, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Download))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-15 22:47:52 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadFile::$description ~ MODPATH/_modules/site/views/site/download_page.php [ 27 ]
2014-06-15 22:47:52 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadFile::$description ~ MODPATH/_modules/site/views/site/download_page.php [ 27 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/download_page.php(27): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 27, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Download))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-15 22:48:05 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_DownloadFile::find_detail() ~ MODPATH/_modules/site/classes/controller/download.php [ 123 ]
2014-06-15 22:48:05 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_DownloadFile::find_detail() ~ MODPATH/_modules/site/classes/controller/download.php [ 123 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 22:50:48 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 166 ]
2014-06-15 22:50:48 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 166 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(166): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 166, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 22:51:37 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_download_types` WHERE `name` = 'brochures' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-15 22:51:37 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_download_types` WHERE `name` = 'brochures' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(313): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(100): Model_DownloadType->find_count(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/download.php(199): Model_DownloadType->load_by_name('brochures')
#3 [internal function]: Controller_Download->action_type()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Download))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 22:55:42 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_download_types` WHERE `name` = 'brochures' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-15 22:55:42 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_download_types` WHERE `name` = 'brochures' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(313): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(100): Model_DownloadType->find_count(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/download.php(199): Model_DownloadType->load_by_name('brochures')
#3 [internal function]: Controller_Download->action_type()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Download))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 22:56:32 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/download_page.php [ 10 ]
2014-06-15 22:56:32 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/views/site/download_page.php [ 10 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/download_page.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 10, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Download))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-15 22:56:56 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadFile::$subject ~ MODPATH/_modules/site/views/site/download_page.php [ 26 ]
2014-06-15 22:56:56 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadFile::$subject ~ MODPATH/_modules/site/views/site/download_page.php [ 26 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/download_page.php(26): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 26, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Download))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-15 22:57:08 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadFile::$text ~ MODPATH/_modules/site/views/site/download_page.php [ 27 ]
2014-06-15 22:57:08 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadFile::$text ~ MODPATH/_modules/site/views/site/download_page.php [ 27 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/download_page.php(27): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 27, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Download))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-15 22:57:27 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_download_types` WHERE `name` = 'brochures' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-15 22:57:27 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_download_types` WHERE `name` = 'brochures' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(313): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(100): Model_DownloadType->find_count(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/download.php(199): Model_DownloadType->load_by_name('brochures')
#3 [internal function]: Controller_Download->action_type()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Download))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 22:57:59 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_download_types` WHERE `name` = 'brochures' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-15 22:57:59 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_download_types` WHERE `name` = 'brochures' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(313): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(100): Model_DownloadType->find_count(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/download.php(199): Model_DownloadType->load_by_name('brochures')
#3 [internal function]: Controller_Download->action_type()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Download))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 22:58:01 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_download_types` WHERE `name` = 'brochures' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-15 22:58:01 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_download_types` WHERE `name` = 'brochures' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(313): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(100): Model_DownloadType->find_count(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/download.php(199): Model_DownloadType->load_by_name('brochures')
#3 [internal function]: Controller_Download->action_type()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Download))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 22:58:23 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_download_types` WHERE `name` = 'brochures' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-15 22:58:23 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_download_types` WHERE `name` = 'brochures' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(313): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(100): Model_DownloadType->find_count(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/download.php(199): Model_DownloadType->load_by_name('brochures')
#3 [internal function]: Controller_Download->action_type()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Download))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 22:58:35 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_download_types` WHERE `name` = 'brochures' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-15 22:58:35 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_download_types` WHERE `name` = 'brochures' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(313): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(100): Model_DownloadType->find_count(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/download.php(199): Model_DownloadType->load_by_name('brochures')
#3 [internal function]: Controller_Download->action_type()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Download))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 22:58:40 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_download_types` WHERE `name` = 'brochures' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-15 22:58:40 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT * FROM `tbl_download_types` WHERE `name` = 'brochures' AND `status` != 'deleted' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(313): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(100): Model_DownloadType->find_count(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/download.php(199): Model_DownloadType->load_by_name('brochures')
#3 [internal function]: Controller_Download->action_type()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Download))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 22:58:55 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_DownloadType::load_by_title() ~ MODPATH/_modules/site/classes/controller/download.php [ 199 ]
2014-06-15 22:58:55 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_DownloadType::load_by_title() ~ MODPATH/_modules/site/classes/controller/download.php [ 199 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 22:59:32 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/classes/controller/download.php [ 258 ]
2014-06-15 22:59:32 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/site/classes/controller/download.php [ 258 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/download.php(258): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 258, Array)
#1 [internal function]: Controller_Download->action_type()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Download))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 22:59:46 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'brochures' in 'where clause' [ SELECT * FROM `tbl_download_types` WHERE brochures ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-15 22:59:46 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'brochures' in 'where clause' [ SELECT * FROM `tbl_download_types` WHERE brochures ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(228): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(256): Model_DownloadType->find('brochures')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/download.php(199): Model_DownloadType->find_detail('brochures')
#3 [internal function]: Controller_Download->action_type()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Download))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 23:00:15 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'brochures' in 'where clause' [ SELECT * FROM `tbl_download_types` WHERE brochures ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-15 23:00:15 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'brochures' in 'where clause' [ SELECT * FROM `tbl_download_types` WHERE brochures ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(228): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(256): Model_DownloadType->find('brochures')
#2 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/download.php(199): Model_DownloadType->find_detail('brochures')
#3 [internal function]: Controller_Download->action_type()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Download))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 23:00:45 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadFile::$subject ~ MODPATH/_modules/site/views/site/download_page.php [ 26 ]
2014-06-15 23:00:45 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadFile::$subject ~ MODPATH/_modules/site/views/site/download_page.php [ 26 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/views/site/download_page.php(26): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 26, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/offistarindo/_app/views/themes/default.php(97): Kohana_View->__toString()
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(178): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Download))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#14 {main}
2014-06-15 23:01:42 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 166 ]
2014-06-15 23:01:42 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 166 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(166): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 166, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 23:01:48 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 166 ]
2014-06-15 23:01:48 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 166 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(166): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 166, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 23:02:40 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/solution.php [ 111 ]
2014-06-15 23:02:40 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/solution.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(111): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 111, Array)
#1 [internal function]: Controller_Solution->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 23:02:48 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 77 ]
2014-06-15 23:02:48 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 77 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(77): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 77, Array)
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
2014-06-15 23:07:13 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/api/api.php [ 48 ]
2014-06-15 23:07:13 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/api/api.php [ 48 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/api/api.php(48): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 48, Array)
#1 [internal function]: Controller_Api_Api->action_productlookup()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api_Api))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 23:07:56 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 83 ]
2014-06-15 23:07:56 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 83 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_edit.php(83): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 83, Array)
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
2014-06-15 23:26:19 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_DownloadFilesFile::find_detail() ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 450 ]
2014-06-15 23:26:19 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_DownloadFilesFile::find_detail() ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 450 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 23:26:41 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 83 ]
2014-06-15 23:26:41 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 83 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_edit.php(83): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 83, Array)
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
2014-06-15 23:27:17 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$subject ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 713 ]
2014-06-15 23:27:17 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$subject ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 713 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(713): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 713, Array)
#1 [internal function]: Controller_Backend_DownloadFile->action_productlookup()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 23:29:40 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 53 ]
2014-06-15 23:29:40 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_DownloadType::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 53 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_edit.php(53): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 53, Array)
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
2014-06-15 23:33:42 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 77 ]
2014-06-15 23:33:42 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 77 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(77): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 77, Array)
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
2014-06-15 23:34:24 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Product::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 77 ]
2014-06-15 23:34:24 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Product::$subject ~ MODPATH/_modules/download/views/download/backend/downloadfile_add.php [ 77 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_add.php(77): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 77, Array)
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
2014-06-15 23:35:55 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 712 ]
2014-06-15 23:35:55 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 712 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(712): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 712, Array)
#1 [internal function]: Controller_Backend_DownloadFile->action_productlookup()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 23:37:42 --- ERROR: ErrorException [ 8 ]: Undefined offset: 2 ~ MODPATH/_modules/download/views/download/backend/downloadfile_view.php [ 119 ]
2014-06-15 23:37:42 --- STRACE: ErrorException [ 8 ]: Undefined offset: 2 ~ MODPATH/_modules/download/views/download/backend/downloadfile_view.php [ 119 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_view.php(119): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 119, Array)
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
2014-06-15 23:37:47 --- ERROR: ErrorException [ 8 ]: Undefined offset: 2 ~ MODPATH/_modules/download/views/download/backend/downloadfile_view.php [ 119 ]
2014-06-15 23:37:47 --- STRACE: ErrorException [ 8 ]: Undefined offset: 2 ~ MODPATH/_modules/download/views/download/backend/downloadfile_view.php [ 119 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_view.php(119): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Data/w...', 119, Array)
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
2014-06-15 23:39:09 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 712 ]
2014-06-15 23:39:09 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 712 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(712): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 712, Array)
#1 [internal function]: Controller_Backend_DownloadFile->action_productlookup()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 23:39:20 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 712 ]
2014-06-15 23:39:20 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 712 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(712): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 712, Array)
#1 [internal function]: Controller_Backend_DownloadFile->action_productlookup()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 23:39:32 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 712 ]
2014-06-15 23:39:32 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 712 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(712): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 712, Array)
#1 [internal function]: Controller_Backend_DownloadFile->action_productlookup()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 23:40:05 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 712 ]
2014-06-15 23:40:05 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/classes/controller/backend/downloadfile.php [ 712 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(712): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 712, Array)
#1 [internal function]: Controller_Backend_DownloadFile->action_productlookup()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 23:40:44 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 81 ]
2014-06-15 23:40:44 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 81 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_edit.php(81): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 81, Array)
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
2014-06-15 23:41:27 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 83 ]
2014-06-15 23:41:27 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 83 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_edit.php(83): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 83, Array)
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
2014-06-15 23:42:59 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 84 ]
2014-06-15 23:42:59 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 84 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_edit.php(84): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 84, Array)
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
2014-06-15 23:43:14 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 84 ]
2014-06-15 23:43:14 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 84 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_edit.php(84): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 84, Array)
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
2014-06-15 23:44:17 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/products.php [ 317 ]
2014-06-15 23:44:17 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/products.php [ 317 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/products.php(317): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 317, Array)
#1 [internal function]: Controller_Products->action_read()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 23:46:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: product ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 82 ]
2014-06-15 23:46:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: product ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 82 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_edit.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 82, Array)
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
2014-06-15 23:46:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: product ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 82 ]
2014-06-15 23:46:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: product ~ MODPATH/_modules/download/views/download/backend/downloadfile_edit.php [ 82 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/views/download/backend/downloadfile_edit.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 82, Array)
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
2014-06-15 23:51:47 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 166 ]
2014-06-15 23:51:47 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 166 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/member.php(166): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 166, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 23:52:11 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/solution.php [ 111 ]
2014-06-15 23:52:11 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$description ~ MODPATH/_modules/site/classes/controller/solution.php [ 111 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/solution.php(111): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 111, Array)
#1 [internal function]: Controller_Solution->action_index()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Solution))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-06-15 23:54:00 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'type_id' in 'where clause' [ SELECT * FROM `tbl_download_types` WHERE `type_id` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-15 23:54:00 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'type_id' in 'where clause' [ SELECT * FROM `tbl_download_types` WHERE `type_id` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(228): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/model/downloadtype.php(256): Model_DownloadType->find(Array)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/download/classes/controller/backend/downloadfile.php(395): Model_DownloadType->find_detail(Array)
#3 [internal function]: Controller_Backend_DownloadFile->action_view()
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_DownloadFile))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#8 {main}
2014-06-15 23:58:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/e04cf2d79054ac2bb46d5997d8125cbf_resize_400x600.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-15 23:58:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/e04cf2d79054ac2bb46d5997d8125cbf_resize_400x600.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}
2014-06-15 23:58:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/e04cf2d79054ac2bb46d5997d8125cbf_resize_400x600.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-15 23:58:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/download_files/e04cf2d79054ac2bb46d5997d8125cbf_resize_400x600.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#1 {main}