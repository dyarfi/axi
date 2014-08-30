<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-07 01:54:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH/classes/controller/themes/defaultblank.php [ 139 ]
2014-07-07 01:54:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH/classes/controller/themes/defaultblank.php [ 139 ]
--
#0 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultblank.php(139): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 139, Array)
#1 [internal function]: Controller_Themes_DefaultBlank->after()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-07 01:54:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: config ~ APPPATH/classes/controller/themes/defaultblank.php [ 136 ]
2014-07-07 01:54:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: config ~ APPPATH/classes/controller/themes/defaultblank.php [ 136 ]
--
#0 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/defaultblank.php(136): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 136, Array)
#1 [internal function]: Controller_Themes_DefaultBlank->after()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-07 18:59:04 --- ERROR: ErrorException [ 2 ]: print_r() expects at most 2 parameters, 4 given ~ MODPATH/_modules/site/classes/controller/contact.php [ 252 ]
2014-07-07 18:59:04 --- STRACE: ErrorException [ 2 ]: print_r() expects at most 2 parameters, 4 given ~ MODPATH/_modules/site/classes/controller/contact.php [ 252 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'print_r() expec...', '/Volumes/Data/w...', 252, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(252): print_r('Contact dari - ...', '<!DOCTYPE html>...', 'noreply@www.off...', Array)
#2 [internal function]: Controller_Contact->action_xhr_contact()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-07 18:59:11 --- ERROR: ErrorException [ 2 ]: print_r() expects at most 2 parameters, 4 given ~ MODPATH/_modules/site/classes/controller/contact.php [ 252 ]
2014-07-07 18:59:11 --- STRACE: ErrorException [ 2 ]: print_r() expects at most 2 parameters, 4 given ~ MODPATH/_modules/site/classes/controller/contact.php [ 252 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'print_r() expec...', '/Volumes/Data/w...', 252, Array)
#1 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(252): print_r('Contact dari - ...', '<!DOCTYPE html>...', 'noreply@www.off...', Array)
#2 [internal function]: Controller_Contact->action_xhr_contact()
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#7 {main}
2014-07-07 18:59:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'print_r' (T_STRING) ~ MODPATH/_modules/site/classes/controller/contact.php [ 255 ]
2014-07-07 18:59:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'print_r' (T_STRING) ~ MODPATH/_modules/site/classes/controller/contact.php [ 255 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-07 19:03:23 --- ERROR: HTTP_Exception_408 [ 408 ]: Connecting to mailserver timed out: Expected response code 220 but got code "", with message "" ~ MODPATH/email/classes/email.php [ 154 ]
2014-07-07 19:03:23 --- STRACE: HTTP_Exception_408 [ 408 ]: Connecting to mailserver timed out: Expected response code 220 but got code "", with message "" ~ MODPATH/email/classes/email.php [ 154 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(257): Email::send('default', 'Contact dari - ...', '<!DOCTYPE html>...', 'noreply@www.off...', Array, true)
#1 [internal function]: Controller_Contact->action_xhr_contact()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-07 19:03:38 --- ERROR: HTTP_Exception_408 [ 408 ]: Connecting to mailserver timed out: Connection could not be established with host  [php_network_getaddresses: getaddrinfo failed: nodename nor servname provided, or not known #0] ~ MODPATH/email/classes/email.php [ 154 ]
2014-07-07 19:03:38 --- STRACE: HTTP_Exception_408 [ 408 ]: Connecting to mailserver timed out: Connection could not be established with host  [php_network_getaddresses: getaddrinfo failed: nodename nor servname provided, or not known #0] ~ MODPATH/email/classes/email.php [ 154 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(257): Email::send('default', 'Contact dari - ...', '<!DOCTYPE html>...', 'noreply@www.off...', Array, true)
#1 [internal function]: Controller_Contact->action_xhr_contact()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-07 19:22:57 --- ERROR: HTTP_Exception_408 [ 408 ]: Connecting to mailserver timed out: Connection could not be established with host  [php_network_getaddresses: getaddrinfo failed: nodename nor servname provided, or not known #0] ~ MODPATH/email/classes/email/core.php [ 143 ]
2014-07-07 19:22:57 --- STRACE: HTTP_Exception_408 [ 408 ]: Connecting to mailserver timed out: Connection could not be established with host  [php_network_getaddresses: getaddrinfo failed: nodename nor servname provided, or not known #0] ~ MODPATH/email/classes/email/core.php [ 143 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(257): Email_Core::send(Array, 'noreply@www.off...', 'Contact dari - ...', '<!DOCTYPE html>...', true)
#1 [internal function]: Controller_Contact->action_xhr_contact()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-07 19:23:30 --- ERROR: HTTP_Exception_408 [ 408 ]: Connecting to mailserver timed out: Connection could not be established with host  [php_network_getaddresses: getaddrinfo failed: nodename nor servname provided, or not known #0] ~ MODPATH/email/classes/email/core.php [ 143 ]
2014-07-07 19:23:30 --- STRACE: HTTP_Exception_408 [ 408 ]: Connecting to mailserver timed out: Connection could not be established with host  [php_network_getaddresses: getaddrinfo failed: nodename nor servname provided, or not known #0] ~ MODPATH/email/classes/email/core.php [ 143 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(257): Email_Core::send(Array, 'noreply@www.off...', 'Contact dari - ...', '<!DOCTYPE html>...', true)
#1 [internal function]: Controller_Contact->action_xhr_contact()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-07 19:26:45 --- ERROR: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [default] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
2014-07-07 19:26:45 --- STRACE: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [default] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(264): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('default')
#1 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(108): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(65): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleHeaderFactory.php(60): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleHeaderSet.php(70): Swift_Mime_SimpleHeaderFactory->createMailboxHeader('To', Array)
#5 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMessage.php(323): Swift_Mime_SimpleHeaderSet->addMailboxHeader('To', Array)
#6 /Volumes/Data/www/offistarindo/_mod/email/classes/email/core.php(91): Swift_Mime_SimpleMessage->setTo('default')
#7 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(284): Email_Core::send('default', 'Contact dari - ...', '<!DOCTYPE html>...', 'noreply@www.off...', 'defrian.yarfi@g...', true)
#8 [internal function]: Controller_Contact->action_xhr_contact()
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#13 {main}
2014-07-07 19:27:34 --- ERROR: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [default] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
2014-07-07 19:27:34 --- STRACE: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [default] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(264): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('default')
#1 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(108): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(65): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleHeaderFactory.php(60): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleHeaderSet.php(70): Swift_Mime_SimpleHeaderFactory->createMailboxHeader('To', Array)
#5 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMessage.php(323): Swift_Mime_SimpleHeaderSet->addMailboxHeader('To', Array)
#6 /Volumes/Data/www/offistarindo/_mod/email/classes/email/core.php(91): Swift_Mime_SimpleMessage->setTo('default')
#7 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(284): Email_Core::send('default', 'Contact dari - ...', '<!DOCTYPE html>...', 'noreply@www.off...', 'defrian.yarfi@g...', true)
#8 [internal function]: Controller_Contact->action_xhr_contact()
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#13 {main}
2014-07-07 19:28:39 --- ERROR: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [default] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
2014-07-07 19:28:39 --- STRACE: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [default] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(264): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('default')
#1 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(108): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(65): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleHeaderFactory.php(60): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleHeaderSet.php(70): Swift_Mime_SimpleHeaderFactory->createMailboxHeader('To', Array)
#5 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMessage.php(323): Swift_Mime_SimpleHeaderSet->addMailboxHeader('To', Array)
#6 /Volumes/Data/www/offistarindo/_mod/email/classes/email/core.php(91): Swift_Mime_SimpleMessage->setTo('default')
#7 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(284): Email_Core::send('default', 'Contact dari - ...', '<!DOCTYPE html>...', 'noreply@www.off...', 'defrian.yarfi@g...', true)
#8 [internal function]: Controller_Contact->action_xhr_contact()
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#13 {main}
2014-07-07 19:29:08 --- ERROR: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [default] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
2014-07-07 19:29:08 --- STRACE: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [default] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(264): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('default')
#1 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(108): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(65): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleHeaderFactory.php(60): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleHeaderSet.php(70): Swift_Mime_SimpleHeaderFactory->createMailboxHeader('To', Array)
#5 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMessage.php(323): Swift_Mime_SimpleHeaderSet->addMailboxHeader('To', Array)
#6 /Volumes/Data/www/offistarindo/_mod/email/classes/email/core.php(91): Swift_Mime_SimpleMessage->setTo('default')
#7 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(284): Email_Core::send('default', 'Contact dari - ...', '<!DOCTYPE html>...', 'noreply@www.off...', 'defrian.yarfi@g...', true)
#8 [internal function]: Controller_Contact->action_xhr_contact()
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#13 {main}
2014-07-07 19:31:41 --- ERROR: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [default] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
2014-07-07 19:31:41 --- STRACE: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [default] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(264): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('default')
#1 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(108): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(65): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleHeaderFactory.php(60): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleHeaderSet.php(70): Swift_Mime_SimpleHeaderFactory->createMailboxHeader('To', Array)
#5 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMessage.php(323): Swift_Mime_SimpleHeaderSet->addMailboxHeader('To', Array)
#6 /Volumes/Data/www/offistarindo/_mod/email/classes/email/core.php(91): Swift_Mime_SimpleMessage->setTo('default')
#7 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(286): Email_Core::send('default', 'Contact dari - ...', '<!DOCTYPE html>...', 'noreply@www.off...', 'defrian.yarfi@g...', true)
#8 [internal function]: Controller_Contact->action_xhr_contact()
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#13 {main}
2014-07-07 19:32:28 --- ERROR: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [default] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
2014-07-07 19:32:28 --- STRACE: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [default] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(264): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('default')
#1 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(108): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(65): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleHeaderFactory.php(60): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleHeaderSet.php(70): Swift_Mime_SimpleHeaderFactory->createMailboxHeader('To', Array)
#5 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMessage.php(323): Swift_Mime_SimpleHeaderSet->addMailboxHeader('To', Array)
#6 /Volumes/Data/www/offistarindo/_mod/email/classes/email/core.php(91): Swift_Mime_SimpleMessage->setTo('default')
#7 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(286): Email_Core::send('default', 'Contact dari - ...', '<!DOCTYPE html>...', 'noreply@www.off...', 'defrian.yarfi@g...', true)
#8 [internal function]: Controller_Contact->action_xhr_contact()
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#13 {main}
2014-07-07 19:32:56 --- ERROR: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [default] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
2014-07-07 19:32:56 --- STRACE: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [default] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(264): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('default')
#1 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(108): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(65): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleHeaderFactory.php(60): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleHeaderSet.php(70): Swift_Mime_SimpleHeaderFactory->createMailboxHeader('To', Array)
#5 /Volumes/Data/www/offistarindo/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMessage.php(323): Swift_Mime_SimpleHeaderSet->addMailboxHeader('To', Array)
#6 /Volumes/Data/www/offistarindo/_mod/email/classes/email/core.php(91): Swift_Mime_SimpleMessage->setTo('default')
#7 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(286): Email_Core::send('default', 'Contact dari - ...', '<!DOCTYPE html>...', 'noreply@www.off...', 'defrian.yarfi@g...', true)
#8 [internal function]: Controller_Contact->action_xhr_contact()
#9 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#10 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#13 {main}
2014-07-07 19:33:25 --- ERROR: HTTP_Exception_408 [ 408 ]: Connecting to mailserver timed out: Connection could not be established with host  [php_network_getaddresses: getaddrinfo failed: nodename nor servname provided, or not known #0] ~ MODPATH/email/classes/email/core.php [ 143 ]
2014-07-07 19:33:25 --- STRACE: HTTP_Exception_408 [ 408 ]: Connecting to mailserver timed out: Connection could not be established with host  [php_network_getaddresses: getaddrinfo failed: nodename nor servname provided, or not known #0] ~ MODPATH/email/classes/email/core.php [ 143 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(259): Email_Core::send('defrian.yarfi@g...', 'noreply@offista...', 'Contact dari - ...', '<!DOCTYPE html>...', true)
#1 [internal function]: Controller_Contact->action_xhr_contact()
#2 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#6 {main}
2014-07-07 21:07:57 --- ERROR: Database_Exception [ 2 ]: mysql_pconnect(): No such file or directory ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2014-07-07 21:07:57 --- STRACE: Database_Exception [ 2 ]: mysql_pconnect(): No such file or directory ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/configuration.php(186): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/configuration.php(67): Model_Configuration->find(Array, '', 1)
#3 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(23): Model_Configuration->load('maintenance')
#4 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(13): Controller_Themes_Default->before()
#5 [internal function]: Controller_Contact->before()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Contact))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#10 {main}
2014-07-07 21:09:02 --- ERROR: Database_Exception [ 2 ]: mysql_pconnect(): No such file or directory ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2014-07-07 21:09:02 --- STRACE: Database_Exception [ 2 ]: mysql_pconnect(): No such file or directory ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Volumes/Data/www/offistarindo/_mod/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/configuration.php(186): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#2 /Volumes/Data/www/offistarindo/_mod/_modules/user/classes/model/configuration.php(67): Model_Configuration->find(Array, '', 1)
#3 /Volumes/Data/www/offistarindo/_app/classes/controller/themes/default.php(23): Model_Configuration->load('maintenance')
#4 /Volumes/Data/www/offistarindo/_mod/_modules/site/classes/controller/contact.php(13): Controller_Themes_Default->before()
#5 [internal function]: Controller_Contact->before()
#6 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Contact))
#7 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/offistarindo/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/offistarindo/index.php(132): Kohana_Request->execute()
#10 {main}