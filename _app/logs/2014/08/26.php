<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-26 13:05:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-26 13:05:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#3 {main}
2014-08-26 13:14:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-26 13:14:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#3 {main}
2014-08-26 15:06:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-26 15:06:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#3 {main}
2014-08-26 15:06:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-26 15:06:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#3 {main}
2014-08-26 19:26:50 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 19:26:50 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 19:32:30 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 19:32:30 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 19:33:53 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 19:33:53 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 19:37:10 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 19:37:10 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 19:37:59 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 19:37:59 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 19:38:45 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 19:38:45 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 19:40:11 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 19:40:11 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 19:42:17 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 19:42:17 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 19:43:14 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 19:43:14 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 19:48:56 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 19:48:56 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(142): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 19:53:42 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 19:53:42 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 20:00:14 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 20:00:14 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 20:01:24 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 20:01:24 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 20:02:29 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 20:02:29 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 20:03:33 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 20:03:33 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 20:03:46 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 20:03:46 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 20:04:51 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 20:04:51 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 20:06:15 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 20:06:15 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 20:06:40 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 20:06:40 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 20:12:14 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 20:12:14 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 20:38:32 --- ERROR: ErrorException [ 2 ]: Division by zero ~ MODPATH/_modules/site/views/site/home_page.php [ 59 ]
2014-08-26 20:38:32 --- STRACE: ErrorException [ 2 ]: Division by zero ~ MODPATH/_modules/site/views/site/home_page.php [ 59 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/site/home_page.php(59): Kohana_Core::error_handler(2, 'Division by zer...', '/Volumes/Data/w...', 59, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/views/themes/default.php(82): Kohana_View->__toString()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/axi/_app/classes/controller/themes/default.php(180): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(147): Controller_Themes_Default->after()
#10 [internal function]: Controller_Home->after()
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#15 {main}
2014-08-26 20:55:08 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 20:55:08 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 20:55:25 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 20:55:25 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 20:57:04 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 20:57:04 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 21:02:40 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 21:02:40 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 21:02:48 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 21:02:48 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 21:02:53 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 21:02:53 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 21:03:09 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 21:03:09 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 21:08:07 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 21:08:07 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 21:08:22 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 21:08:22 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 21:09:17 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 21:09:17 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 21:09:34 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 21:09:34 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 21:10:03 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 21:10:03 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 21:10:22 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 21:10:22 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 21:10:50 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 21:10:50 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 21:11:34 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 21:11:34 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 21:11:44 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 21:11:44 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 21:11:48 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 21:11:48 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 21:12:40 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 21:12:40 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 21:13:29 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 21:13:29 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 21:13:38 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 21:13:38 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 21:15:55 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 21:15:55 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 21:16:28 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 21:16:28 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 21:18:45 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 21:18:45 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 21:19:05 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 21:19:05 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 21:21:20 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 21:21:20 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 21:23:50 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 21:23:50 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 21:30:53 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 21:30:53 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 21:31:03 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 21:31:03 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 21:31:44 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 21:31:44 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 21:32:56 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 21:32:56 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 21:33:08 --- ERROR: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
2014-08-26 21:33:08 --- STRACE: ErrorException [ 2 ]: finfo::file(): Empty filename or path ~ SYSPATH/classes/kohana/file.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/Volumes/Data/w...', 45, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/file.php(45): finfo->file('')
#2 /Volumes/Data/www/axi/_app/classes/lib.php(74): Kohana_File::mime('r?')
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(143): Lib::_download('r?')
#4 [internal function]: Controller_Home->action_download()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-26 23:35:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-26 23:35:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#3 {main}
2014-08-26 23:55:23 --- ERROR: ErrorException [ 2 ]: preg_match(): Compilation failed: nothing to repeat at offset 1 ~ MODPATH/_modules/site/classes/controller/home.php [ 140 ]
2014-08-26 23:55:23 --- STRACE: ErrorException [ 2 ]: preg_match(): Compilation failed: nothing to repeat at offset 1 ~ MODPATH/_modules/site/classes/controller/home.php [ 140 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/Volumes/Data/w...', 140, Array)
#1 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(140): preg_match('/^?./', 'uploads/media_f...')
#2 [internal function]: Controller_Home->action_download()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}