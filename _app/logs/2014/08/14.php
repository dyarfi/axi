<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-14 15:16:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-14 15:16:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#3 {main}
2014-08-14 16:49:19 --- ERROR: Kohana_Exception [ 0 ]: The specified file, , was not found. ~ MODPATH/captcha/classes/captcha.php [ 132 ]
2014-08-14 16:49:19 --- STRACE: Kohana_Exception [ 0 ]: The specified file, , was not found. ~ MODPATH/captcha/classes/captcha.php [ 132 ]
--
#0 /Volumes/Data/www/axi/_mod/captcha/classes/captcha.php(70): Captcha->__construct('default')
#1 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/home.php(25): Captcha::instance()
#2 [internal function]: Controller_Home->action_index()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-08-14 17:39:58 --- ERROR: ErrorException [ 8 ]: Undefined index: contact ~ MODPATH/_modules/site/classes/controller/xhr.php [ 118 ]
2014-08-14 17:39:58 --- STRACE: ErrorException [ 8 ]: Undefined index: contact ~ MODPATH/_modules/site/classes/controller/xhr.php [ 118 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/xhr.php(118): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 118, Array)
#1 [internal function]: Controller_Xhr->action_contact()
#2 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Xhr))
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#6 {main}
2014-08-14 17:40:13 --- ERROR: ErrorException [ 8 ]: Undefined index: contact ~ MODPATH/_modules/site/classes/controller/xhr.php [ 118 ]
2014-08-14 17:40:13 --- STRACE: ErrorException [ 8 ]: Undefined index: contact ~ MODPATH/_modules/site/classes/controller/xhr.php [ 118 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/xhr.php(118): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 118, Array)
#1 [internal function]: Controller_Xhr->action_contact()
#2 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Xhr))
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#6 {main}
2014-08-14 17:40:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: contact ~ MODPATH/_modules/site/views/email/contact_form_admin.php [ 80 ]
2014-08-14 17:40:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: contact ~ MODPATH/_modules/site/views/email/contact_form_admin.php [ 80 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/views/email/contact_form_admin.php(80): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 80, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/xhr.php(141): Kohana_View->render()
#4 [internal function]: Controller_Xhr->action_contact()
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Xhr))
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#9 {main}
2014-08-14 17:41:44 --- ERROR: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [default] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
2014-08-14 17:41:44 --- STRACE: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [default] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
--
#0 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(264): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('default')
#1 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(108): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(65): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleHeaderFactory.php(60): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleHeaderSet.php(70): Swift_Mime_SimpleHeaderFactory->createMailboxHeader('To', Array)
#5 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMessage.php(323): Swift_Mime_SimpleHeaderSet->addMailboxHeader('To', Array)
#6 /Volumes/Data/www/axi/_mod/email/classes/email/core.php(91): Swift_Mime_SimpleMessage->setTo('default')
#7 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/xhr.php(154): Email_Core::send('default', 'Contact dari - ...', '<!DOCTYPE html>...', 'noreply@http://...', Array, true)
#8 [internal function]: Controller_Xhr->action_contact()
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Xhr))
#10 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#13 {main}
2014-08-14 17:43:12 --- ERROR: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [noreply@http://xprins.com] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
2014-08-14 17:43:12 --- STRACE: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [noreply@http://xprins.com] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
--
#0 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(264): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('noreply@http://...')
#1 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(108): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(65): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMimeEntity.php(588): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMessage.php(214): Swift_Mime_SimpleMimeEntity->_setHeaderFieldModel('From', Array)
#5 /Volumes/Data/www/axi/_mod/email/classes/email/core.php(128): Swift_Mime_SimpleMessage->setFrom('noreply@http://...')
#6 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/xhr.php(154): Email_Core::send(Array, 'noreply@http://...', 'Contact dari - ...', '<!DOCTYPE html>...', true)
#7 [internal function]: Controller_Xhr->action_contact()
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Xhr))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#12 {main}
2014-08-14 17:46:30 --- ERROR: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [.com] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
2014-08-14 17:46:30 --- STRACE: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [.com] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
--
#0 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(264): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('.com')
#1 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(108): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(65): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMimeEntity.php(588): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMessage.php(214): Swift_Mime_SimpleMimeEntity->_setHeaderFieldModel('From', Array)
#5 /Volumes/Data/www/axi/_mod/email/classes/email/core.php(128): Swift_Mime_SimpleMessage->setFrom('.com')
#6 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/xhr.php(154): Email_Core::send(Array, '.com', 'Contact dari - ...', '<!DOCTYPE html>...', true)
#7 [internal function]: Controller_Xhr->action_contact()
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Xhr))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#12 {main}
2014-08-14 17:49:39 --- ERROR: HTTP_Exception_408 [ 408 ]: Connecting to mailserver timed out: Connection to localhost:25 Timed Out ~ MODPATH/email/classes/email/core.php [ 143 ]
2014-08-14 17:49:39 --- STRACE: HTTP_Exception_408 [ 408 ]: Connecting to mailserver timed out: Connection to localhost:25 Timed Out ~ MODPATH/email/classes/email/core.php [ 143 ]
--
#0 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/xhr.php(154): Email_Core::send(Array, 'noreply@xprins....', 'Contact dari - ...', '<!DOCTYPE html>...', true)
#1 [internal function]: Controller_Xhr->action_contact()
#2 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Xhr))
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#6 {main}
2014-08-14 18:57:46 --- ERROR: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, array given ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Transport/SendmailTransport.php [ 52 ]
2014-08-14 18:57:46 --- STRACE: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, array given ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Transport/SendmailTransport.php [ 52 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'strpos() expect...', '/Volumes/Data/w...', 52, Array)
#1 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Transport/SendmailTransport.php(52): strpos(Array, ' -bs')
#2 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mailer.php(80): Swift_Transport_SendmailTransport->start()
#3 /Volumes/Data/www/axi/_mod/email/classes/email/core.php(138): Swift_Mailer->send(Object(Swift_Message))
#4 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/xhr.php(154): Email_Core::send(Array, 'noreply@xprins....', 'Contact dari - ...', '<!DOCTYPE html>...', true)
#5 [internal function]: Controller_Xhr->action_contact()
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Xhr))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#10 {main}
2014-08-14 18:58:38 --- ERROR: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [noreply@http://xprins.com] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
2014-08-14 18:58:38 --- STRACE: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [noreply@http://xprins.com] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
--
#0 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(264): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('noreply@http://...')
#1 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(108): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(65): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMimeEntity.php(588): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMessage.php(214): Swift_Mime_SimpleMimeEntity->_setHeaderFieldModel('From', Array)
#5 /Volumes/Data/www/axi/_mod/email/classes/email/core.php(128): Swift_Mime_SimpleMessage->setFrom('noreply@http://...')
#6 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/xhr.php(184): Email_Core::send('defrian.yarfi@g...', 'noreply@http://...', 'Contact dari - ...', '<!DOCTYPE html>...', true)
#7 [internal function]: Controller_Xhr->action_contact()
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Xhr))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#12 {main}
2014-08-14 19:02:46 --- ERROR: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [noreply@http://xprins.com] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
2014-08-14 19:02:46 --- STRACE: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [noreply@http://xprins.com] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
--
#0 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(264): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('noreply@http://...')
#1 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(108): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(65): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMimeEntity.php(588): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMessage.php(214): Swift_Mime_SimpleMimeEntity->_setHeaderFieldModel('From', Array)
#5 /Volumes/Data/www/axi/_mod/email/classes/email/core.php(128): Swift_Mime_SimpleMessage->setFrom('noreply@http://...')
#6 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/xhr.php(154): Email_Core::send(Array, 'noreply@http://...', 'Contact dari - ...', '<!DOCTYPE html>...', true)
#7 [internal function]: Controller_Xhr->action_contact()
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Xhr))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#12 {main}
2014-08-14 19:02:53 --- ERROR: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [noreply@http://xprins.com] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
2014-08-14 19:02:53 --- STRACE: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [noreply@http://xprins.com] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
--
#0 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(264): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('noreply@http://...')
#1 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(108): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(65): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMimeEntity.php(588): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMessage.php(214): Swift_Mime_SimpleMimeEntity->_setHeaderFieldModel('From', Array)
#5 /Volumes/Data/www/axi/_mod/email/classes/email/core.php(128): Swift_Mime_SimpleMessage->setFrom('noreply@http://...')
#6 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/xhr.php(154): Email_Core::send(Array, 'noreply@http://...', 'Contact dari - ...', '<!DOCTYPE html>...', true)
#7 [internal function]: Controller_Xhr->action_contact()
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Xhr))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#12 {main}
2014-08-14 19:03:28 --- ERROR: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [noreply@http://xprins.com] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
2014-08-14 19:03:28 --- STRACE: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [noreply@http://xprins.com] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
--
#0 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(264): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('noreply@http://...')
#1 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(108): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(65): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMimeEntity.php(588): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMessage.php(214): Swift_Mime_SimpleMimeEntity->_setHeaderFieldModel('From', Array)
#5 /Volumes/Data/www/axi/_mod/email/classes/email/core.php(128): Swift_Mime_SimpleMessage->setFrom('noreply@http://...')
#6 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/xhr.php(154): Email_Core::send(Array, 'noreply@http://...', 'Contact dari - ...', '<!DOCTYPE html>...', true)
#7 [internal function]: Controller_Xhr->action_contact()
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Xhr))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#12 {main}
2014-08-14 19:04:45 --- ERROR: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [noreply@http://xprins.com] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
2014-08-14 19:04:45 --- STRACE: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [noreply@http://xprins.com] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
--
#0 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(264): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('noreply@http://...')
#1 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(108): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(65): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMimeEntity.php(588): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMessage.php(214): Swift_Mime_SimpleMimeEntity->_setHeaderFieldModel('From', Array)
#5 /Volumes/Data/www/axi/_mod/email/classes/email/core.php(128): Swift_Mime_SimpleMessage->setFrom('noreply@http://...')
#6 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/xhr.php(154): Email_Core::send(Array, 'noreply@http://...', 'Contact dari - ...', '<!DOCTYPE html>...', true)
#7 [internal function]: Controller_Xhr->action_contact()
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Xhr))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#12 {main}
2014-08-14 19:05:59 --- ERROR: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [noreply@http://xprins.com] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
2014-08-14 19:05:59 --- STRACE: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [noreply@http://xprins.com] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
--
#0 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(264): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('noreply@http://...')
#1 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(108): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(65): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMimeEntity.php(588): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMessage.php(214): Swift_Mime_SimpleMimeEntity->_setHeaderFieldModel('From', Array)
#5 /Volumes/Data/www/axi/_mod/email/classes/email/core.php(128): Swift_Mime_SimpleMessage->setFrom('noreply@http://...')
#6 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/xhr.php(154): Email_Core::send(Array, 'noreply@http://...', 'Contact dari - ...', '<!DOCTYPE html>...', true)
#7 [internal function]: Controller_Xhr->action_contact()
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Xhr))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#12 {main}
2014-08-14 19:07:38 --- ERROR: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
2014-08-14 19:07:38 --- STRACE: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
--
#0 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(264): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('')
#1 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(108): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(65): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMimeEntity.php(588): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMessage.php(214): Swift_Mime_SimpleMimeEntity->_setHeaderFieldModel('From', Array)
#5 /Volumes/Data/www/axi/_mod/email/classes/email/core.php(128): Swift_Mime_SimpleMessage->setFrom('')
#6 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/xhr.php(156): Email_Core::send(Array, '', 'Contact dari - ...', '<!DOCTYPE html>...', true)
#7 [internal function]: Controller_Xhr->action_contact()
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Xhr))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#12 {main}
2014-08-14 19:07:57 --- ERROR: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [noreply@http://xprins.com] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
2014-08-14 19:07:57 --- STRACE: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [noreply@http://xprins.com] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php [ 352 ]
--
#0 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(264): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('noreply@http://...')
#1 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(108): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php(65): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMimeEntity.php(588): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 /Volumes/Data/www/axi/_mod/email/vendor/swiftmailer/lib/classes/Swift/Mime/SimpleMessage.php(214): Swift_Mime_SimpleMimeEntity->_setHeaderFieldModel('From', Array)
#5 /Volumes/Data/www/axi/_mod/email/classes/email/core.php(128): Swift_Mime_SimpleMessage->setFrom('noreply@http://...')
#6 /Volumes/Data/www/axi/_mod/_modules/site/classes/controller/xhr.php(156): Email_Core::send(Array, 'noreply@http://...', 'Contact dari - ...', '<!DOCTYPE html>...', true)
#7 [internal function]: Controller_Xhr->action_contact()
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Xhr))
#9 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#12 {main}
2014-08-14 19:19:15 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH/_modules/site/classes/controller/home.php [ 117 ]
2014-08-14 19:19:15 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH/_modules/site/classes/controller/home.php [ 117 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-14 19:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL captcha_reload was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-14 19:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL captcha_reload was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#3 {main}
2014-08-14 20:19:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_Language' not found ~ APPPATH/classes/controller/themes/defaultmaintenance.php [ 43 ]
2014-08-14 20:19:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_Language' not found ~ APPPATH/classes/controller/themes/defaultmaintenance.php [ 43 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-14 20:20:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_PageCategory' not found ~ APPPATH/classes/controller/themes/defaultmaintenance.php [ 94 ]
2014-08-14 20:20:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_PageCategory' not found ~ APPPATH/classes/controller/themes/defaultmaintenance.php [ 94 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-14 20:20:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_PageCategoryFile' not found ~ APPPATH/classes/controller/themes/defaultmaintenance.php [ 96 ]
2014-08-14 20:20:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_PageCategoryFile' not found ~ APPPATH/classes/controller/themes/defaultmaintenance.php [ 96 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-14 20:20:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_PageCategory' not found ~ APPPATH/classes/controller/themes/defaultmaintenance.php [ 94 ]
2014-08-14 20:20:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_PageCategory' not found ~ APPPATH/classes/controller/themes/defaultmaintenance.php [ 94 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-14 20:20:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: pageCategory ~ APPPATH/views/themes/defaultmaintenance.php [ 51 ]
2014-08-14 20:20:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: pageCategory ~ APPPATH/views/themes/defaultmaintenance.php [ 51 ]
--
#0 /Volumes/Data/www/axi/_app/views/themes/defaultmaintenance.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 51, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultmaintenance.php(153): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_DefaultMaintenance->after()
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Maintenance))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#10 {main}
2014-08-14 20:21:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: menus ~ APPPATH/views/themes/defaultmaintenance.php [ 60 ]
2014-08-14 20:21:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: menus ~ APPPATH/views/themes/defaultmaintenance.php [ 60 ]
--
#0 /Volumes/Data/www/axi/_app/views/themes/defaultmaintenance.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 60, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultmaintenance.php(153): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_DefaultMaintenance->after()
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Maintenance))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#10 {main}
2014-08-14 20:22:25 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Maintenance::$menu ~ APPPATH/classes/controller/themes/defaultmaintenance.php [ 94 ]
2014-08-14 20:22:25 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Maintenance::$menu ~ APPPATH/classes/controller/themes/defaultmaintenance.php [ 94 ]
--
#0 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultmaintenance.php(94): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 94, Array)
#1 /Volumes/Data/www/axi/_app/classes/controller/backend/maintenance.php(6): Controller_Themes_DefaultMaintenance->before()
#2 [internal function]: Controller_Backend_Maintenance->before()
#3 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Maintenance))
#4 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#7 {main}
2014-08-14 20:22:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: css ~ APPPATH/views/themes/defaultmaintenance.php [ 96 ]
2014-08-14 20:22:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: css ~ APPPATH/views/themes/defaultmaintenance.php [ 96 ]
--
#0 /Volumes/Data/www/axi/_app/views/themes/defaultmaintenance.php(96): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 96, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultmaintenance.php(159): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_DefaultMaintenance->after()
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Maintenance))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#10 {main}
2014-08-14 20:23:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: css ~ APPPATH/views/themes/defaultmaintenance.php [ 96 ]
2014-08-14 20:23:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: css ~ APPPATH/views/themes/defaultmaintenance.php [ 96 ]
--
#0 /Volumes/Data/www/axi/_app/views/themes/defaultmaintenance.php(96): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 96, Array)
#1 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/axi/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/axi/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/axi/_app/classes/controller/themes/defaultmaintenance.php(159): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_DefaultMaintenance->after()
#6 /Volumes/Data/www/axi/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Maintenance))
#7 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#10 {main}
2014-08-14 22:08:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-14 22:08:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL favicon.ico was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#3 {main}
2014-08-14 22:43:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-14 22:43:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/axi/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/axi/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/axi/index.php(138): Kohana_Request->execute()
#3 {main}
2014-08-14 22:43:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-14 22:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-14 22:44:35 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/errors/404.php [ 32 ]
2014-08-14 22:44:35 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/errors/404.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-14 22:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-14 22:44:51 --- ERROR: ErrorException [ 1 ]: Class 'Model_Menus' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2014-08-14 22:44:51 --- STRACE: ErrorException [ 1 ]: Class 'Model_Menus' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-14 22:44:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-14 22:44:54 --- ERROR: ErrorException [ 1 ]: Class 'Model_PageMenus' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2014-08-14 22:44:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_PageMenus' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-14 22:44:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-14 22:45:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-14 22:45:58 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/errors/404.php [ 36 ]
2014-08-14 22:45:58 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/errors/404.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-08-14 22:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-14 22:47:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-14 22:47:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-14 22:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-14 22:48:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-14 22:48:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-08-14 22:49:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]