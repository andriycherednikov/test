<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-23 10:43:29 --- CRITICAL: Kohana_Exception [ 0 ]: Directory DOCROOT\uploads/ must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php:48
2013-05-23 10:43:29 --- DEBUG: #0 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(48): Kohana_Upload::save(Array, NULL, 'C:\Program File...')
#1 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(21): Controller_Image->_save_image(Array)
#2 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Image->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#5 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php:48
2013-05-23 11:12:05 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Image::inser_image() ~ APPPATH\classes\Controller\Image.php [ 60 ] in :
2013-05-23 11:12:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 11:12:46 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_images' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in :
2013-05-23 11:12:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 11:14:57 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_images' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in :
2013-05-23 11:14:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 11:16:40 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Image::inser_image() ~ APPPATH\classes\Controller\Image.php [ 60 ] in :
2013-05-23 11:16:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 11:18:35 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method DB::inset() ~ APPPATH\classes\Model\Image.php [ 10 ] in :
2013-05-23 11:18:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 11:19:37 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_DB::insert() must be of the type array, string given, called in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Model\Image.php on line 10 and defined ~ MODPATH\database\classes\Kohana\DB.php [ 89 ] in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\modules\database\classes\Kohana\DB.php:89
2013-05-23 11:19:37 --- DEBUG: #0 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\modules\database\classes\Kohana\DB.php(89): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\Program File...', 89, Array)
#1 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Model\Image.php(10): Kohana_DB::insert('sample_image', 'name')
#2 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(61): Model_Image->insert_image('hx9t8tz7oq1bwv3...')
#3 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(21): Controller_Image->_save_image(Array)
#4 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Image->action_upload()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\modules\database\classes\Kohana\DB.php:89
2013-05-23 11:20:07 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be of the type array, string given, called in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Model\Image.php on line 10 and defined ~ MODPATH\database\classes\Kohana\Database\Query\Builder\Insert.php [ 80 ] in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\modules\database\classes\Kohana\Database\Query\Builder\Insert.php:80
2013-05-23 11:20:07 --- DEBUG: #0 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\modules\database\classes\Kohana\Database\Query\Builder\Insert.php(80): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\Program File...', 80, Array)
#1 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Model\Image.php(10): Kohana_Database_Query_Builder_Insert->values('fw5numrxknoqicy...')
#2 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(61): Model_Image->insert_image('fw5numrxknoqicy...')
#3 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(21): Controller_Image->_save_image(Array)
#4 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Image->action_upload()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\modules\database\classes\Kohana\Database\Query\Builder\Insert.php:80
2013-05-23 11:46:27 --- CRITICAL: View_Exception [ 0 ]: The requested view common/template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\View.php:137
2013-05-23 11:46:27 --- DEBUG: #0 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('common/template')
#1 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('common/template', NULL)
#2 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(9): Kohana_View::factory('common/template')
#3 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Controller.php(69): Controller_Image->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#6 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\View.php:137
2013-05-23 11:47:05 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Image.php [ 13 ] in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php:13
2013-05-23 11:47:05 --- DEBUG: #0 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(13): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\Program File...', 13, Array)
#1 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Image->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php:13
2013-05-23 11:48:17 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Image.php [ 17 ] in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php:17
2013-05-23 11:48:17 --- DEBUG: #0 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(17): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\Program File...', 17, Array)
#1 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Image->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php:17
2013-05-23 11:49:46 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Image.php [ 15 ] in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php:15
2013-05-23 11:49:46 --- DEBUG: #0 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(15): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\Program File...', 15, Array)
#1 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Image->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php:15
2013-05-23 11:50:08 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Image.php [ 15 ] in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php:15
2013-05-23 11:50:08 --- DEBUG: #0 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(15): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\Program File...', 15, Array)
#1 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Image->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php:15
2013-05-23 11:51:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\common\template.php [ 3 ] in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\views\common\template.php:3
2013-05-23 11:51:20 --- DEBUG: #0 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\views\common\template.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Program File...', 3, Array)
#1 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\View.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(16): Kohana_Response->body(Object(View))
#6 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Image->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#9 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\views\common\template.php:3
2013-05-23 20:47:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable:  ~ APPPATH\classes\Controller\Image.php [ 36 ] in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php:36
2013-05-23 20:47:14 --- DEBUG: #0 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Program File...', 36, Array)
#1 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Image->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\EasyPHP-12.1\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Program Files (x86)\EasyPHP-12.1\www\kohana\application\classes\Controller\Image.php:36