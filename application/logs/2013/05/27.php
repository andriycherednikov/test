<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-27 06:54:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Image.php [ 81 ] in :
2013-05-27 06:54:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-27 06:55:34 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'sample'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2013-05-27 06:55:34 --- DEBUG: #0 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Model\Image.php(25): Kohana_Database_Query->execute()
#3 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(30): Model_Image->get_all()
#4 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Image->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2013-05-27 06:59:07 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'sample'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2013-05-27 06:59:07 --- DEBUG: #0 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Model\Image.php(25): Kohana_Database_Query->execute()
#3 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(30): Model_Image->get_all()
#4 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Image->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2013-05-27 06:59:10 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'sample'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2013-05-27 06:59:10 --- DEBUG: #0 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Model\Image.php(25): Kohana_Database_Query->execute()
#3 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(30): Model_Image->get_all()
#4 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Image->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2013-05-27 06:59:10 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'sample'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2013-05-27 06:59:10 --- DEBUG: #0 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Model\Image.php(25): Kohana_Database_Query->execute()
#3 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(30): Model_Image->get_all()
#4 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Image->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:171