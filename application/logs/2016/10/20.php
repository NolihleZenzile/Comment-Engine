<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-10-20 03:08:08 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\wamp64\www\final_one\system\classes\Kohana\Cookie.php:67
2016-10-20 03:08:08 --- DEBUG: #0 C:\wamp64\www\final_one\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 C:\wamp64\www\final_one\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp64\www\final_one\system\classes\Kohana\Cookie.php:67
2016-10-20 03:11:37 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\wamp64\www\final_one\system\classes\Kohana\Cookie.php:67
2016-10-20 03:11:37 --- DEBUG: #0 C:\wamp64\www\final_one\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 C:\wamp64\www\final_one\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp64\www\final_one\system\classes\Kohana\Cookie.php:67
2016-10-20 03:15:17 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\wamp64\www\final_one\system\classes\Kohana\Cookie.php:67
2016-10-20 03:15:17 --- DEBUG: #0 C:\wamp64\www\final_one\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 C:\wamp64\www\final_one\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp64\www\final_one\system\classes\Kohana\Cookie.php:67
2016-10-20 03:17:48 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\wamp64\www\final_one\system\classes\Kohana\Cookie.php:67
2016-10-20 03:17:48 --- DEBUG: #0 C:\wamp64\www\final_one\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 C:\wamp64\www\final_one\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp64\www\final_one\system\classes\Kohana\Cookie.php:67
2016-10-20 04:18:47 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\wamp64\www\final_one\system\classes\Kohana\View.php:145
2016-10-20 04:18:47 --- DEBUG: #0 C:\wamp64\www\final_one\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\wamp64\www\final_one\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp64\www\final_one\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp64\www\final_one\system\classes\Kohana\View.php:145
2016-10-20 04:24:09 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\wamp64\www\final_one\system\classes\Kohana\View.php:145
2016-10-20 04:24:09 --- DEBUG: #0 C:\wamp64\www\final_one\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\wamp64\www\final_one\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp64\www\final_one\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp64\www\final_one\system\classes\Kohana\View.php:145
2016-10-20 04:24:11 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\wamp64\www\final_one\system\classes\Kohana\View.php:145
2016-10-20 04:24:11 --- DEBUG: #0 C:\wamp64\www\final_one\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\wamp64\www\final_one\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp64\www\final_one\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp64\www\final_one\system\classes\Kohana\View.php:145
2016-10-20 04:24:28 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\wamp64\www\final_one\system\classes\Kohana\View.php:145
2016-10-20 04:24:28 --- DEBUG: #0 C:\wamp64\www\final_one\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\wamp64\www\final_one\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp64\www\final_one\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp64\www\final_one\system\classes\Kohana\View.php:145
2016-10-20 04:24:29 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\wamp64\www\final_one\system\classes\Kohana\View.php:145
2016-10-20 04:24:29 --- DEBUG: #0 C:\wamp64\www\final_one\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\wamp64\www\final_one\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp64\www\final_one\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp64\www\final_one\system\classes\Kohana\View.php:145
2016-10-20 04:26:36 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\wamp64\www\final_one\system\classes\Kohana\View.php:145
2016-10-20 04:26:36 --- DEBUG: #0 C:\wamp64\www\final_one\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\wamp64\www\final_one\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp64\www\final_one\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp64\www\final_one\system\classes\Kohana\View.php:145
2016-10-20 04:31:34 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\wamp64\www\final_one\system\classes\Kohana\View.php:145
2016-10-20 04:31:34 --- DEBUG: #0 C:\wamp64\www\final_one\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\wamp64\www\final_one\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp64\www\final_one\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp64\www\final_one\system\classes\Kohana\View.php:145
2016-10-20 04:31:35 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\wamp64\www\final_one\system\classes\Kohana\View.php:145
2016-10-20 04:31:35 --- DEBUG: #0 C:\wamp64\www\final_one\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\wamp64\www\final_one\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp64\www\final_one\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp64\www\final_one\system\classes\Kohana\View.php:145
2016-10-20 18:09:03 --- CRITICAL: ErrorException [ 1 ]: Call to a member function body() on null ~ APPPATH\classes\Controller\Welcome.php [ 11 ] in file:line
2016-10-20 18:09:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-20 18:11:25 --- CRITICAL: View_Exception [ 0 ]: The requested view sit could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\wamp64\www\final_one\system\classes\Kohana\View.php:145
2016-10-20 18:11:25 --- DEBUG: #0 C:\wamp64\www\final_one\system\classes\Kohana\View.php(145): Kohana_View->set_filename('sit')
#1 C:\wamp64\www\final_one\system\classes\Kohana\View.php(30): Kohana_View->__construct('sit', NULL)
#2 C:\wamp64\www\final_one\application\classes\Controller\Welcome.php(11): Kohana_View::factory('sit')
#3 C:\wamp64\www\final_one\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\wamp64\www\final_one\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp64\www\final_one\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp64\www\final_one\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp64\www\final_one\system\classes\Kohana\View.php:145
2016-10-20 18:56:07 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Database' not found ~ APPPATH\classes\Model\comments.php [ 3 ] in file:line
2016-10-20 18:56:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-20 19:25:34 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Model\comments.php [ 3 ] in file:line
2016-10-20 19:25:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-20 19:27:53 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Model\comments.php [ 3 ] in file:line
2016-10-20 19:27:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line