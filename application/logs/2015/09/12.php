<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-12 16:52:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH/classes/Controller/Ajax.php [ 107 ] in /var/www/html/application/classes/Controller/Ajax.php:107
2015-09-12 16:52:52 --- DEBUG: #0 /var/www/html/application/classes/Controller/Ajax.php(107): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 107, Array)
#1 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_gallery()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(57): Kohana_Request->execute()
#7 {main} in /var/www/html/application/classes/Controller/Ajax.php:107