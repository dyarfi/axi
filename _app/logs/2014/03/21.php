<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-21 00:05:56 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'portfolio_id' in 'field list' [ INSERT INTO `tbl_news_files` (`news_id`, `field_name`, `file_name`, `file_type`, `caption`, `portfolio_id`, `name`, `status`) VALUES (0, 'image_1', ('reseller-05.jpg'), ('image/jpeg'), '', '13', ('reseller-05.jpg'), 'publish') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Volumes/Data/www/offistarindo/_mod/database/classes/Kohana/Database/Query.php:251
2014-03-21 00:05:56 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `tb...', false, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Model/NewsFile.php(98): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(652): Model_NewsFile->add(Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#4 [internal function]: Kohana_Controller->execute()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#9 {main} in /Volumes/Data/www/offistarindo/_mod/database/classes/Kohana/Database/Query.php:251
2014-03-21 00:05:56 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'portfolio_id' in 'field list' [ INSERT INTO `tbl_news_files` (`news_id`, `field_name`, `file_name`, `file_type`, `caption`, `portfolio_id`, `name`, `status`) VALUES (0, 'image_1', ('reseller-07.jpg'), ('image/jpeg'), '', '13', ('reseller-07.jpg'), 'publish') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Volumes/Data/www/offistarindo/_mod/database/classes/Kohana/Database/Query.php:251
2014-03-21 00:05:56 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `tb...', false, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Model/NewsFile.php(98): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(652): Model_NewsFile->add(Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#4 [internal function]: Kohana_Controller->execute()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#9 {main} in /Volumes/Data/www/offistarindo/_mod/database/classes/Kohana/Database/Query.php:251
2014-03-21 00:05:56 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'portfolio_id' in 'field list' [ INSERT INTO `tbl_news_files` (`news_id`, `field_name`, `file_name`, `file_type`, `caption`, `portfolio_id`, `name`, `status`) VALUES (0, 'image_1', ('reseller-12.jpg'), ('image/jpeg'), '', '13', ('reseller-12.jpg'), 'publish') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Volumes/Data/www/offistarindo/_mod/database/classes/Kohana/Database/Query.php:251
2014-03-21 00:05:56 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `tb...', false, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Model/NewsFile.php(98): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(652): Model_NewsFile->add(Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#4 [internal function]: Kohana_Controller->execute()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#9 {main} in /Volumes/Data/www/offistarindo/_mod/database/classes/Kohana/Database/Query.php:251
2014-03-21 00:05:56 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'portfolio_id' in 'field list' [ INSERT INTO `tbl_news_files` (`news_id`, `field_name`, `file_name`, `file_type`, `caption`, `portfolio_id`, `name`, `status`) VALUES (0, 'image_1', ('reseller-13.jpg'), ('image/jpeg'), '', '13', ('reseller-13.jpg'), 'publish') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Volumes/Data/www/offistarindo/_mod/database/classes/Kohana/Database/Query.php:251
2014-03-21 00:05:56 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `tb...', false, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Model/NewsFile.php(98): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(652): Model_NewsFile->add(Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#4 [internal function]: Kohana_Controller->execute()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#9 {main} in /Volumes/Data/www/offistarindo/_mod/database/classes/Kohana/Database/Query.php:251
2014-03-21 00:06:46 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'name' in 'field list' [ INSERT INTO `tbl_news_files` (`news_id`, `field_name`, `file_name`, `file_type`, `caption`, `name`, `status`) VALUES ('13', 'image_1', ('reseller-14.jpg'), ('image/jpeg'), '', ('reseller-14.jpg'), 'publish') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Volumes/Data/www/offistarindo/_mod/database/classes/Kohana/Database/Query.php:251
2014-03-21 00:06:46 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `tb...', false, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Model/NewsFile.php(98): Kohana_Database_Query->execute()
#2 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(652): Model_NewsFile->add(Array)
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#4 [internal function]: Kohana_Controller->execute()
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#6 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#9 {main} in /Volumes/Data/www/offistarindo/_mod/database/classes/Kohana/Database/Query.php:251
2014-03-21 00:08:00 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 663 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:08:00 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(663): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 663, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:08:00 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 663 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:08:00 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(663): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 663, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:08:00 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 663 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:08:00 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(663): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 663, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:08:00 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 663 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:08:00 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(663): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 663, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:08:00 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 663 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:08:00 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(663): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 663, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:08:00 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 663 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:08:00 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(663): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 663, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:09:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: newsfile_upload_url ~ MODPATH/_modules/news/views/news/backend/news_view.php [ 172 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/views/news/backend/news_view.php:172
2014-03-21 00:09:09 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/views/news/backend/news_view.php(172): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 172, Array)
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
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#16 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/views/news/backend/news_view.php:172
2014-03-21 00:09:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: news_upload_url ~ MODPATH/_modules/news/views/news/backend/news_view.php [ 172 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/views/news/backend/news_view.php:172
2014-03-21 00:09:32 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/views/news/backend/news_view.php(172): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 172, Array)
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
#12 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#13 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#16 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/views/news/backend/news_view.php:172
2014-03-21 00:11:05 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 663 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:11:05 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(663): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 663, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:11:05 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 663 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:11:05 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(663): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 663, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:11:05 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 663 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:11:05 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(663): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 663, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:11:05 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 663 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:11:05 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(663): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 663, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:15:19 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 663 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:15:19 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(663): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 663, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:35:04 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 191 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:191
2014-03-21 00:35:04 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(191): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 191, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:191
2014-03-21 00:35:56 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 191 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:191
2014-03-21 00:35:56 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(191): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 191, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:191
2014-03-21 00:36:49 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 191 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:191
2014-03-21 00:36:49 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(191): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 191, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:191
2014-03-21 00:39:40 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 191 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:191
2014-03-21 00:39:40 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(191): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 191, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:191
2014-03-21 00:41:11 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 191 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:191
2014-03-21 00:41:11 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(191): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 191, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:191
2014-03-21 00:42:18 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 663 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:42:18 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(663): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 663, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:42:18 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 663 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:42:18 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(663): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 663, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:42:19 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 663 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:42:19 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(663): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 663, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:42:19 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 663 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:42:19 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(663): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 663, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:42:19 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 663 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:42:19 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(663): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 663, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:42:19 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 663 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:42:19 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(663): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 663, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:42:19 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 663 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:42:19 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(663): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 663, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:42:19 --- EMERGENCY: ErrorException [ 4096 ]: Object of class UploadHandler could not be converted to string ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 663 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 00:42:19 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(663): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 663, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:663
2014-03-21 01:56:29 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/news/classes/Controller/Backend/News.php [ 191 ] in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:191
2014-03-21 01:56:29 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php(191): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 191, Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Controller.php(84): Controller_Backend_News->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#7 {main} in /Volumes/Data/www/offistarindo/_mod/_modules/news/classes/Controller/Backend/News.php:191
2014-03-21 11:45:38 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php:79
2014-03-21 11:45:38 --- DEBUG: #0 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 /Volumes/Data/www/offistarindo/index.php(138): Kohana_Request->execute()
#4 {main} in /Volumes/Data/www/offistarindo/_sys/classes/Kohana/Request/Client/Internal.php:79