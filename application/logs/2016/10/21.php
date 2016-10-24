<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-10-21 02:51:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\comments.php [ 17 ] in file:line
2016-10-21 02:51:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-21 02:51:50 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Model\comments.php [ 3 ] in file:line
2016-10-21 02:51:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-21 02:53:02 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'construct' ~ APPPATH\classes\Model\comments.php [ 7 ] in file:line
2016-10-21 02:53:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-21 02:53:16 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'construct' ~ APPPATH\classes\Model\comments.php [ 7 ] in file:line
2016-10-21 02:53:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-21 03:11:05 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Model\comments.php [ 3 ] in file:line
2016-10-21 03:11:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-21 03:11:51 --- CRITICAL: Database_Exception [ 1146 ]: Table 'commentstestdb.commentses' doesn't exist [ SHOW FULL COLUMNS FROM `commentses` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\wamp64\www\final_one\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-10-21 03:11:51 --- DEBUG: #0 C:\wamp64\www\final_one\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp64\www\final_one\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('commentses')
#2 C:\wamp64\www\final_one\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\wamp64\www\final_one\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\wamp64\www\final_one\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp64\www\final_one\application\classes\Controller\Welcome.php(11): Kohana_ORM->__construct()
#6 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp64\www\final_one\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-10-21 03:25:54 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQLi_Result could not be converted to string ~ APPPATH\views\site.php [ 34 ] in C:\wamp64\www\final_one\application\views\site.php:34
2016-10-21 03:25:54 --- DEBUG: #0 C:\wamp64\www\final_one\application\views\site.php(34): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\\wamp64\\www\\f...', 34, Array)
#1 C:\wamp64\www\final_one\system\classes\Kohana\View.php(62): include('C:\\wamp64\\www\\f...')
#2 C:\wamp64\www\final_one\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp64\\www\\f...', Array)
#3 C:\wamp64\www\final_one\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\wamp64\www\final_one\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp64\www\final_one\application\classes\Controller\Welcome.php(14): Kohana_Response->body(Object(View))
#6 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp64\www\final_one\application\views\site.php:34
2016-10-21 03:27:56 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Comments as array ~ APPPATH\views\site.php [ 37 ] in file:line
2016-10-21 03:27:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-21 03:40:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: comment ~ APPPATH\classes\Controller\Welcome.php [ 15 ] in C:\wamp64\www\final_one\application\classes\Controller\Welcome.php:15
2016-10-21 03:40:11 --- DEBUG: #0 C:\wamp64\www\final_one\application\classes\Controller\Welcome.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp64\\www\\f...', 15, Array)
#1 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp64\www\final_one\application\classes\Controller\Welcome.php:15
2016-10-21 03:43:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: comment ~ APPPATH\views\site.php [ 42 ] in C:\wamp64\www\final_one\application\views\site.php:42
2016-10-21 03:43:48 --- DEBUG: #0 C:\wamp64\www\final_one\application\views\site.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp64\\www\\f...', 42, Array)
#1 C:\wamp64\www\final_one\system\classes\Kohana\View.php(62): include('C:\\wamp64\\www\\f...')
#2 C:\wamp64\www\final_one\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp64\\www\\f...', Array)
#3 C:\wamp64\www\final_one\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\wamp64\www\final_one\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp64\www\final_one\application\classes\Controller\Welcome.php(17): Kohana_Response->body(Object(View))
#6 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp64\www\final_one\application\views\site.php:42
2016-10-21 03:48:37 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Comments as array ~ APPPATH\classes\Controller\Welcome.php [ 16 ] in file:line
2016-10-21 03:48:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-21 03:49:50 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Comments as array ~ APPPATH\classes\Controller\Welcome.php [ 16 ] in file:line
2016-10-21 03:49:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-21 03:56:34 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Comments as array ~ APPPATH\views\site.php [ 43 ] in file:line
2016-10-21 03:56:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-21 03:59:10 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Comments as array ~ APPPATH\views\site.php [ 43 ] in file:line
2016-10-21 03:59:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-21 03:59:12 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Comments as array ~ APPPATH\views\site.php [ 43 ] in file:line
2016-10-21 03:59:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-21 04:30:05 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'comments.id' in 'field list' [ SELECT COUNT(`comments`.`id`) AS `records_found` FROM `comments` AS `comments` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\wamp64\www\final_one\modules\database\classes\Kohana\Database\Query.php:251
2016-10-21 04:30:05 --- DEBUG: #0 C:\wamp64\www\final_one\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT COUNT(`c...', false, Array)
#1 C:\wamp64\www\final_one\modules\orm\classes\Kohana\ORM.php(1648): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\wamp64\www\final_one\application\classes\Model\comments.php(25): Kohana_ORM->count_all()
#3 C:\wamp64\www\final_one\application\classes\Controller\Welcome.php(15): Model_Comments->get_comments()
#4 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp64\www\final_one\modules\database\classes\Kohana\Database\Query.php:251
2016-10-21 04:30:55 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'comments.id' in 'field list' [ SELECT COUNT(`comments`.`id`) AS `records_found` FROM `comments` AS `comments` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\wamp64\www\final_one\modules\database\classes\Kohana\Database\Query.php:251
2016-10-21 04:30:55 --- DEBUG: #0 C:\wamp64\www\final_one\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT COUNT(`c...', false, Array)
#1 C:\wamp64\www\final_one\modules\orm\classes\Kohana\ORM.php(1648): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\wamp64\www\final_one\application\classes\Model\comments.php(25): Kohana_ORM->count_all()
#3 C:\wamp64\www\final_one\application\classes\Controller\Welcome.php(15): Model_Comments->get_comments()
#4 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp64\www\final_one\modules\database\classes\Kohana\Database\Query.php:251
2016-10-21 04:37:11 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2016-10-21 04:37:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-21 04:38:14 --- CRITICAL: ErrorException [ 4096 ]: Object of class Model_Comments could not be converted to string ~ MODPATH\orm\classes\Kohana\ORM.php [ 44 ] in C:\wamp64\www\final_one\modules\orm\classes\Kohana\ORM.php:44
2016-10-21 04:38:14 --- DEBUG: #0 C:\wamp64\www\final_one\modules\orm\classes\Kohana\ORM.php(44): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\\wamp64\\www\\f...', 44, Array)
#1 C:\wamp64\www\final_one\application\classes\Controller\Welcome.php(12): Kohana_ORM::factory(Object(Model_Comments))
#2 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp64\www\final_one\modules\orm\classes\Kohana\ORM.php:44
2016-10-21 04:41:44 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant Model_Comments - assumed 'Model_Comments' ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in C:\wamp64\www\final_one\application\classes\Controller\Welcome.php:12
2016-10-21 04:41:44 --- DEBUG: #0 C:\wamp64\www\final_one\application\classes\Controller\Welcome.php(12): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\wamp64\\www\\f...', 12, Array)
#1 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp64\www\final_one\application\classes\Controller\Welcome.php:12
2016-10-21 05:38:25 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2016-10-21 05:38:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-21 05:41:39 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQLi_Result could not be converted to string ~ SYSPATH\classes\Kohana\Response.php [ 160 ] in C:\wamp64\www\final_one\system\classes\Kohana\Response.php:160
2016-10-21 05:41:39 --- DEBUG: #0 C:\wamp64\www\final_one\system\classes\Kohana\Response.php(160): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\\wamp64\\www\\f...', 160, Array)
#1 C:\wamp64\www\final_one\application\classes\Controller\Welcome.php(14): Kohana_Response->body(Object(Database_MySQLi_Result))
#2 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp64\www\final_one\system\classes\Kohana\Response.php:160
2016-10-21 05:44:38 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in C:\wamp64\www\final_one\application\classes\Controller\Welcome.php:8
2016-10-21 05:44:38 --- DEBUG: #0 C:\wamp64\www\final_one\application\classes\Controller\Welcome.php(8): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\\wamp64\\www\\f...', 8, Array)
#1 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp64\www\final_one\application\classes\Controller\Welcome.php:8
2016-10-21 05:46:41 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in C:\wamp64\www\final_one\application\classes\Controller\Welcome.php:7
2016-10-21 05:46:41 --- DEBUG: #0 C:\wamp64\www\final_one\application\classes\Controller\Welcome.php(7): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\\wamp64\\www\\f...', 7, Array)
#1 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp64\www\final_one\application\classes\Controller\Welcome.php:7
2016-10-21 06:00:46 --- CRITICAL: Kohana_Exception [ 0 ]: The body property does not exist in the Model_Comments class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp64\www\final_one\modules\orm\classes\Kohana\ORM.php:603
2016-10-21 06:00:46 --- DEBUG: #0 C:\wamp64\www\final_one\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('body')
#1 C:\wamp64\www\final_one\application\classes\Controller\Welcome.php(7): Kohana_ORM->__get('body')
#2 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp64\www\final_one\modules\orm\classes\Kohana\ORM.php:603
2016-10-21 06:03:51 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQLi_Result::getComments() ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in file:line
2016-10-21 06:03:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-21 06:04:25 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQLi_Result::body() ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in file:line
2016-10-21 06:04:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-21 06:04:39 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQLi_Result::$body ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in C:\wamp64\www\final_one\application\classes\Controller\Welcome.php:7
2016-10-21 06:04:39 --- DEBUG: #0 C:\wamp64\www\final_one\application\classes\Controller\Welcome.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\wamp64\\www\\f...', 7, Array)
#1 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp64\www\final_one\application\classes\Controller\Welcome.php:7
2016-10-21 06:06:28 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQLi_Result::$comment ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in C:\wamp64\www\final_one\application\classes\Controller\Welcome.php:7
2016-10-21 06:06:28 --- DEBUG: #0 C:\wamp64\www\final_one\application\classes\Controller\Welcome.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\wamp64\\www\\f...', 7, Array)
#1 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp64\www\final_one\application\classes\Controller\Welcome.php:7
2016-10-21 06:22:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::comment() ~ APPPATH\classes\Controller\Welcome.php [ 10 ] in file:line
2016-10-21 06:22:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-21 06:24:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH\classes\Controller\Welcome.php [ 9 ] in C:\wamp64\www\final_one\application\classes\Controller\Welcome.php:9
2016-10-21 06:24:58 --- DEBUG: #0 C:\wamp64\www\final_one\application\classes\Controller\Welcome.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp64\\www\\f...', 9, Array)
#1 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp64\www\final_one\application\classes\Controller\Welcome.php:9
2016-10-21 06:31:33 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function bind() ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in file:line
2016-10-21 06:31:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-21 06:34:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: comment ~ APPPATH\views\site.php [ 46 ] in C:\wamp64\www\final_one\application\views\site.php:46
2016-10-21 06:34:32 --- DEBUG: #0 C:\wamp64\www\final_one\application\views\site.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp64\\www\\f...', 46, Array)
#1 C:\wamp64\www\final_one\system\classes\Kohana\View.php(62): include('C:\\wamp64\\www\\f...')
#2 C:\wamp64\www\final_one\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp64\\www\\f...', Array)
#3 C:\wamp64\www\final_one\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\wamp64\www\final_one\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp64\www\final_one\application\classes\Controller\Welcome.php(10): Kohana_Response->body(Object(View))
#6 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp64\www\final_one\application\views\site.php:46
2016-10-21 06:38:42 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: comment ~ SYSPATH\classes\Kohana\View.php [ 179 ] in C:\wamp64\www\final_one\application\classes\Controller\Welcome.php:9
2016-10-21 06:38:42 --- DEBUG: #0 C:\wamp64\www\final_one\application\classes\Controller\Welcome.php(9): Kohana_View->__get('comment')
#1 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp64\www\final_one\application\classes\Controller\Welcome.php:9
2016-10-21 06:39:27 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in C:\wamp64\www\final_one\application\classes\Controller\Welcome.php:8
2016-10-21 06:39:27 --- DEBUG: #0 C:\wamp64\www\final_one\application\classes\Controller\Welcome.php(8): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\\wamp64\\www\\f...', 8, Array)
#1 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp64\www\final_one\application\classes\Controller\Welcome.php:8
2016-10-21 06:56:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: comment ~ APPPATH\views\site.php [ 46 ] in C:\wamp64\www\final_one\application\views\site.php:46
2016-10-21 06:56:58 --- DEBUG: #0 C:\wamp64\www\final_one\application\views\site.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp64\\www\\f...', 46, Array)
#1 C:\wamp64\www\final_one\system\classes\Kohana\View.php(62): include('C:\\wamp64\\www\\f...')
#2 C:\wamp64\www\final_one\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp64\\www\\f...', Array)
#3 C:\wamp64\www\final_one\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\wamp64\www\final_one\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp64\www\final_one\application\classes\Controller\Welcome.php(12): Kohana_Response->body(Object(View))
#6 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp64\www\final_one\application\views\site.php:46
2016-10-21 07:36:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: comment ~ APPPATH\views\site.php [ 46 ] in C:\wamp64\www\final_one\application\views\site.php:46
2016-10-21 07:36:46 --- DEBUG: #0 C:\wamp64\www\final_one\application\views\site.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp64\\www\\f...', 46, Array)
#1 C:\wamp64\www\final_one\system\classes\Kohana\View.php(62): include('C:\\wamp64\\www\\f...')
#2 C:\wamp64\www\final_one\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp64\\www\\f...', Array)
#3 C:\wamp64\www\final_one\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\wamp64\www\final_one\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp64\www\final_one\application\classes\Controller\Welcome.php(12): Kohana_Response->body(Object(View))
#6 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp64\www\final_one\application\views\site.php:46
2016-10-21 07:36:46 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'comments.id' in 'field list' [ SELECT COUNT(`comments`.`id`) AS `records_found` FROM `comments` AS `comments` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\wamp64\www\final_one\modules\database\classes\Kohana\Database\Query.php:251
2016-10-21 07:36:46 --- DEBUG: #0 C:\wamp64\www\final_one\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT COUNT(`c...', false, Array)
#1 C:\wamp64\www\final_one\modules\orm\classes\Kohana\ORM.php(1648): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\wamp64\www\final_one\application\classes\Controller\Welcome.php(13): Kohana_ORM->count_all()
#3 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp64\www\final_one\modules\database\classes\Kohana\Database\Query.php:251
2016-10-21 07:38:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: comment ~ APPPATH\views\site.php [ 46 ] in C:\wamp64\www\final_one\application\views\site.php:46
2016-10-21 07:38:02 --- DEBUG: #0 C:\wamp64\www\final_one\application\views\site.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp64\\www\\f...', 46, Array)
#1 C:\wamp64\www\final_one\system\classes\Kohana\View.php(62): include('C:\\wamp64\\www\\f...')
#2 C:\wamp64\www\final_one\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp64\\www\\f...', Array)
#3 C:\wamp64\www\final_one\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\wamp64\www\final_one\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp64\www\final_one\application\classes\Controller\Welcome.php(12): Kohana_Response->body(Object(View))
#6 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp64\www\final_one\application\views\site.php:46
2016-10-21 07:38:02 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'comments.id' in 'field list' [ SELECT COUNT(`comments`.`id`) AS `records_found` FROM `comments` AS `comments` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\wamp64\www\final_one\modules\database\classes\Kohana\Database\Query.php:251
2016-10-21 07:38:02 --- DEBUG: #0 C:\wamp64\www\final_one\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT COUNT(`c...', false, Array)
#1 C:\wamp64\www\final_one\modules\orm\classes\Kohana\ORM.php(1648): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\wamp64\www\final_one\application\classes\Controller\Welcome.php(13): Kohana_ORM->count_all()
#3 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp64\www\final_one\modules\database\classes\Kohana\Database\Query.php:251
2016-10-21 07:38:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: comment ~ APPPATH\views\site.php [ 46 ] in C:\wamp64\www\final_one\application\views\site.php:46
2016-10-21 07:38:34 --- DEBUG: #0 C:\wamp64\www\final_one\application\views\site.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp64\\www\\f...', 46, Array)
#1 C:\wamp64\www\final_one\system\classes\Kohana\View.php(62): include('C:\\wamp64\\www\\f...')
#2 C:\wamp64\www\final_one\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp64\\www\\f...', Array)
#3 C:\wamp64\www\final_one\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\wamp64\www\final_one\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp64\www\final_one\application\classes\Controller\Welcome.php(12): Kohana_Response->body(Object(View))
#6 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp64\www\final_one\application\views\site.php:46
2016-10-21 07:46:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQLi_Result::find_all() ~ APPPATH\classes\Controller\Welcome.php [ 10 ] in file:line
2016-10-21 07:46:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-21 07:57:28 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'comments.id' in 'field list' [ SELECT COUNT(`comments`.`id`) AS `records_found` FROM `comments` AS `comments` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\wamp64\www\final_one\modules\database\classes\Kohana\Database\Query.php:251
2016-10-21 07:57:28 --- DEBUG: #0 C:\wamp64\www\final_one\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT COUNT(`c...', false, Array)
#1 C:\wamp64\www\final_one\modules\orm\classes\Kohana\ORM.php(1648): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\wamp64\www\final_one\application\classes\Controller\Welcome.php(8): Kohana_ORM->count_all()
#3 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp64\www\final_one\modules\database\classes\Kohana\Database\Query.php:251
2016-10-21 08:01:53 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'comments.id' in 'field list' [ SELECT COUNT(`comments`.`id`) AS `records_found` FROM `comments` AS `comments` WHERE `comment_ID` = 'comment_ID' ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\wamp64\www\final_one\modules\database\classes\Kohana\Database\Query.php:251
2016-10-21 08:01:53 --- DEBUG: #0 C:\wamp64\www\final_one\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT COUNT(`c...', false, Array)
#1 C:\wamp64\www\final_one\modules\orm\classes\Kohana\ORM.php(1648): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\wamp64\www\final_one\application\classes\Controller\Welcome.php(8): Kohana_ORM->count_all()
#3 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp64\www\final_one\modules\database\classes\Kohana\Database\Query.php:251
2016-10-21 08:01:58 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'comments.id' in 'field list' [ SELECT COUNT(`comments`.`id`) AS `records_found` FROM `comments` AS `comments` WHERE `comment_ID` = 'comment_ID' ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\wamp64\www\final_one\modules\database\classes\Kohana\Database\Query.php:251
2016-10-21 08:01:58 --- DEBUG: #0 C:\wamp64\www\final_one\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT COUNT(`c...', false, Array)
#1 C:\wamp64\www\final_one\modules\orm\classes\Kohana\ORM.php(1648): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\wamp64\www\final_one\application\classes\Controller\Welcome.php(8): Kohana_ORM->count_all()
#3 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp64\www\final_one\modules\database\classes\Kohana\Database\Query.php:251