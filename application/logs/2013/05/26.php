<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-26 07:17:19 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'sample'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:430
2013-05-26 07:17:19 --- DEBUG: #0 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\modules\database\classes\Kohana\Database\MySQL.php(430): Kohana_Database_MySQL->connect()
#1 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\modules\database\classes\Kohana\Database.php(478): Kohana_Database_MySQL->escape('m2tra78hpe57asq...')
#2 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\modules\database\classes\Kohana\Database\Query\Builder\Insert.php(146): Kohana_Database->quote('m2tra78hpe57asq...')
#3 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Insert->compile(Object(Database_MySQL))
#4 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Model\Image.php(12): Kohana_Database_Query->execute()
#5 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(99): Model_Image->insert_image('m2tra78hpe57asq...')
#6 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(57): Controller_Image->_save_image(Array)
#7 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Image->action_upload()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#10 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\modules\database\classes\Kohana\Database\MySQL.php:430
2013-05-26 07:37:18 --- CRITICAL: ErrorException [ 8 ]: Undefined index: fileselect ~ APPPATH\classes\Controller\Image.php [ 49 ] in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php:49
2013-05-26 07:37:18 --- DEBUG: #0 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(49): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Program File...', 49, Array)
#1 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Image->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php:49
2013-05-26 07:37:42 --- CRITICAL: ErrorException [ 8 ]: Undefined index: fileselect ~ APPPATH\classes\Controller\Image.php [ 49 ] in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php:49
2013-05-26 07:37:42 --- DEBUG: #0 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(49): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Program File...', 49, Array)
#1 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Image->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php:49
2013-05-26 07:37:52 --- CRITICAL: ErrorException [ 8 ]: Undefined index: fileselect ~ APPPATH\classes\Controller\Image.php [ 49 ] in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php:49
2013-05-26 07:37:52 --- DEBUG: #0 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(49): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Program File...', 49, Array)
#1 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Image->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php:49
2013-05-26 07:38:43 --- CRITICAL: ErrorException [ 8 ]: Undefined index: fileselect ~ APPPATH\classes\Controller\Image.php [ 49 ] in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php:49
2013-05-26 07:38:43 --- DEBUG: #0 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(49): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Program File...', 49, Array)
#1 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Image->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php:49
2013-05-26 17:26:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH\classes\Controller\Image.php [ 19 ] in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php:19
2013-05-26 17:26:58 --- DEBUG: #0 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Program File...', 19, Array)
#1 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Image->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php:19
2013-05-26 17:27:08 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Image::get_all(), called in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php on line 19 and defined ~ APPPATH\classes\Model\Image.php [ 21 ] in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Model\Image.php:21
2013-05-26 17:27:08 --- DEBUG: #0 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Model\Image.php(21): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\Program File...', 21, Array)
#1 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(19): Model_Image->get_all()
#2 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Image->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#5 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Model\Image.php:21
2013-05-26 17:27:22 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '' in 'order clause' [ SELECT * FROM `sample_image` ORDER BY `` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-05-26 17:27:22 --- DEBUG: #0 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Model\Image.php(24): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(19): Model_Image->get_all()
#3 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Image->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#6 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-05-26 17:32:23 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\image\index.php [ 2 ] in :
2013-05-26 17:32:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 17:32:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: after_scripts ~ APPPATH\views\common\template.php [ 9 ] in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\views\common\template.php:9
2013-05-26 17:32:59 --- DEBUG: #0 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\views\common\template.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Program File...', 9, Array)
#1 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\View.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(27): Kohana_Response->body(Object(View))
#6 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Image->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#9 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\views\common\template.php:9
2013-05-26 18:23:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: images ~ APPPATH\views\image\index.php [ 6 ] in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\views\image\index.php:6
2013-05-26 18:23:34 --- DEBUG: #0 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\views\image\index.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Program File...', 6, Array)
#1 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\View.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\views\common\template.php(8): Kohana_View->__toString()
#5 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\View.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Program File...', Array)
#7 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(42): Kohana_Response->body(Object(View))
#10 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Image->action_image_upload()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#13 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\index.php(118): Kohana_Request->execute()
#16 {main} in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\views\image\index.php:6
2013-05-26 18:24:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: images ~ APPPATH\views\image\index.php [ 6 ] in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\views\image\index.php:6
2013-05-26 18:24:28 --- DEBUG: #0 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\views\image\index.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Program File...', 6, Array)
#1 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\View.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\views\common\template.php(8): Kohana_View->__toString()
#5 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\View.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Program File...', Array)
#7 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(42): Kohana_Response->body(Object(View))
#10 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Image->action_image_upload()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#13 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\index.php(118): Kohana_Request->execute()
#16 {main} in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\views\image\index.php:6
2013-05-26 18:24:45 --- CRITICAL: View_Exception [ 0 ]: The requested view image/image_upload could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\View.php:137
2013-05-26 18:24:45 --- DEBUG: #0 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('image/image_upl...')
#1 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('image/image_upl...', NULL)
#2 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(35): Kohana_View::factory('image/image_upl...')
#3 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Image->action_image_upload()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#6 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\View.php:137
2013-05-26 18:58:32 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Image.php [ 79 ] in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php:79
2013-05-26 18:58:32 --- DEBUG: #0 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(79): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Program File...', 79, Array)
#1 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Image->action_change_tag()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php:79
2013-05-26 18:59:30 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Image.php [ 79 ] in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php:79
2013-05-26 18:59:30 --- DEBUG: #0 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(79): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Program File...', 79, Array)
#1 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Image->action_change_tag()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php:79
2013-05-26 19:00:40 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Image.php [ 79 ] in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php:79
2013-05-26 19:00:40 --- DEBUG: #0 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(79): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Program File...', 79, Array)
#1 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Image->action_change_tag()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php:79
2013-05-26 19:02:28 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Image.php [ 79 ] in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php:79
2013-05-26 19:02:28 --- DEBUG: #0 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(79): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Program File...', 79, Array)
#1 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Image->action_change_tag()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php:79
2013-05-26 19:03:54 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Image.php [ 79 ] in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php:79
2013-05-26 19:03:54 --- DEBUG: #0 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(79): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Program File...', 79, Array)
#1 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Image->action_change_tag()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php:79