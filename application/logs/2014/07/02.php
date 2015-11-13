<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-02 08:49:07 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-02 08:49:07 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('usuario')
#3 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\Ampps\www\sav\application\classes\Auth\Usuario.php(10): Kohana_ORM::factory('Auth_Usuario')
#8 C:\Ampps\www\sav\application\classes\Controller\Login.php(14): Auth_Usuario::acceso(Array)
#9 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Login->action_initsession()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#12 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#15 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-02 08:49:32 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-02 08:49:32 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('usuario')
#3 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\Ampps\www\sav\application\classes\Auth\Usuario.php(10): Kohana_ORM::factory('Auth_Usuario')
#8 C:\Ampps\www\sav\application\classes\Controller\Login.php(14): Auth_Usuario::acceso(Array)
#9 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Login->action_initsession()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#12 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#15 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-02 08:53:12 --- ERROR: aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa in C:\Ampps\www\sav\system\classes\Kohana\Controller.php:84
2014-07-02 08:53:12 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-02 08:53:12 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('usuario')
#3 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\Ampps\www\sav\application\classes\Auth\Usuario.php(10): Kohana_ORM::factory('Auth_Usuario')
#8 C:\Ampps\www\sav\application\classes\Controller\Login.php(16): Auth_Usuario::acceso(Array)
#9 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Login->action_initsession()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#12 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#15 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-02 08:53:44 --- ERROR: bbbbbbbbbbbbbbbbbbbbbbbbbbbbbb in C:\Ampps\www\sav\system\classes\Kohana\Controller.php:84
2014-07-02 09:58:33 --- DEBUG: bbbbbbbbbbbbbbbbbbbbbbbbbbbbbb in C:\Ampps\www\sav\system\classes\Kohana\Controller.php:84
2014-07-02 10:20:27 --- ERROR: 6 in C:\Ampps\www\sav\system\classes\Kohana\Controller.php:84
2014-07-02 10:39:15 --- ERROR: body in C:\Ampps\www\sav\system\classes\Kohana\Controller.php:84
2014-07-02 10:41:21 --- ERROR: body in C:\Ampps\www\sav\system\classes\Kohana\Controller.php:84
2014-07-02 10:41:38 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Login.php [ 14 ] in C:\Ampps\www\sav\application\classes\Controller\Login.php:14
2014-07-02 10:41:38 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Login.php(14): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\Ampps\www\sa...', 14, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Login->action_initsession()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Login.php:14
2014-07-02 11:28:28 --- ERROR: 6 in C:\Ampps\www\sav\system\classes\Kohana\Controller.php:84
2014-07-02 11:29:36 --- ERROR:  in C:\Ampps\www\sav\system\classes\Kohana\Controller.php:84
2014-07-02 11:30:08 --- ERROR: body in C:\Ampps\www\sav\system\classes\Kohana\Controller.php:84
2014-07-02 11:30:11 --- ERROR: body in C:\Ampps\www\sav\system\classes\Kohana\Controller.php:84
2014-07-02 11:30:25 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant Controller_Login - assumed 'Controller_Login' ~ APPPATH\classes\Controller\Login.php [ 14 ] in C:\Ampps\www\sav\application\classes\Controller\Login.php:14
2014-07-02 11:30:25 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Login.php(14): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\Ampps\www\sa...', 14, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Login->action_initsession()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Login.php:14
2014-07-02 11:31:29 --- ERROR: body in C:\Ampps\www\sav\system\classes\Kohana\Controller.php:84
2014-07-02 11:32:08 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Kohana_Exception::text() must be an instance of Exception, string given, called in C:\Ampps\www\sav\application\classes\Controller\Login.php on line 14 and defined ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 163 ] in C:\Ampps\www\sav\system\classes\Kohana\Kohana\Exception.php:163
2014-07-02 11:32:08 --- DEBUG: #0 C:\Ampps\www\sav\system\classes\Kohana\Kohana\Exception.php(163): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\Ampps\www\sa...', 163, Array)
#1 C:\Ampps\www\sav\application\classes\Controller\Login.php(14): Kohana_Kohana_Exception::text('ssssss')
#2 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Login->action_initsession()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#8 {main} in C:\Ampps\www\sav\system\classes\Kohana\Kohana\Exception.php:163
2014-07-02 11:39:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: e ~ APPPATH\classes\Controller\Login.php [ 14 ] in C:\Ampps\www\sav\application\classes\Controller\Login.php:14
2014-07-02 11:39:44 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Login.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Ampps\www\sa...', 14, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Login->action_initsession()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Login.php:14
2014-07-02 11:39:53 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Kohana_Exception::log() must be an instance of Exception, string given, called in C:\Ampps\www\sav\application\classes\Controller\Login.php on line 14 and defined ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 140 ] in C:\Ampps\www\sav\system\classes\Kohana\Kohana\Exception.php:140
2014-07-02 11:39:53 --- DEBUG: #0 C:\Ampps\www\sav\system\classes\Kohana\Kohana\Exception.php(140): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\Ampps\www\sa...', 140, Array)
#1 C:\Ampps\www\sav\application\classes\Controller\Login.php(14): Kohana_Kohana_Exception::log('zzzz')
#2 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Login->action_initsession()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#8 {main} in C:\Ampps\www\sav\system\classes\Kohana\Kohana\Exception.php:140
2014-07-02 11:41:21 --- ERROR: sss in C:\Ampps\www\sav\system\classes\Kohana\Controller.php:84
2014-07-02 11:45:56 --- CRITICAL: ErrorException [ 1 ]: Class 'Kohana_LogTest' not found ~ APPPATH\classes\Controller\Login.php [ 12 ] in file:line
2014-07-02 11:45:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-02 11:48:24 --- ERROR: sss in C:\Ampps\www\sav\system\classes\Kohana\Controller.php:84
2014-07-02 11:49:03 --- ERROR: sss in C:\Ampps\www\sav\system\classes\Kohana\Controller.php:84
2014-07-02 12:09:21 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_Log::add(), called in C:\Ampps\www\sav\application\classes\Controller\Login.php on line 12 and defined ~ SYSPATH\classes\Kohana\Log.php [ 123 ] in C:\Ampps\www\sav\system\classes\Kohana\Log.php:123
2014-07-02 12:09:21 --- DEBUG: #0 C:\Ampps\www\sav\system\classes\Kohana\Log.php(123): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\Ampps\www\sa...', 123, Array)
#1 C:\Ampps\www\sav\application\classes\Controller\Login.php(12): Kohana_Log->add()
#2 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Login->action_initsession()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#8 {main} in C:\Ampps\www\sav\system\classes\Kohana\Log.php:123
2014-07-02 12:09:35 --- ERROR:  in C:\Ampps\www\sav\system\classes\Kohana\Controller.php:84
2014-07-02 12:10:01 --- ERROR:  in C:\Ampps\www\sav\system\classes\Kohana\Controller.php:84
2014-07-02 12:10:01 --- CRITICAL: ErrorException [ 1 ]: Cannot access protected property Log::$_messages ~ APPPATH\classes\Controller\Login.php [ 14 ] in file:line
2014-07-02 12:10:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-02 12:10:07 --- ERROR:  in C:\Ampps\www\sav\system\classes\Kohana\Controller.php:84
2014-07-02 12:10:07 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Log as array ~ APPPATH\classes\Controller\Login.php [ 14 ] in file:line
2014-07-02 12:10:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-02 12:10:12 --- ERROR:  in C:\Ampps\www\sav\system\classes\Kohana\Controller.php:84
2014-07-02 12:10:24 --- ERROR:  in C:\Ampps\www\sav\system\classes\Kohana\Controller.php:84
2014-07-02 12:12:43 --- ERROR: La base de datos ha sido desconextada in C:\Ampps\www\sav\system\classes\Kohana\Controller.php:84
2014-07-02 12:12:59 --- ERROR: La base de datos ha sido desconectada in C:\Ampps\www\sav\system\classes\Kohana\Controller.php:84
2014-07-02 12:21:02 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-02 12:21:02 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('usuario')
#3 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\Ampps\www\sav\application\classes\Auth\Usuario.php(10): Kohana_ORM::factory('Auth_Usuario')
#8 C:\Ampps\www\sav\application\classes\Controller\Login.php(15): Auth_Usuario::acceso(Array)
#9 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Login->action_initsession()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#12 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#15 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-02 12:21:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: oUser ~ APPPATH\classes\Controller\Login.php [ 17 ] in C:\Ampps\www\sav\application\classes\Controller\Login.php:17
2014-07-02 12:21:11 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Login.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Ampps\www\sa...', 17, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Login->action_initsession()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Login.php:17
2014-07-02 12:21:24 --- ERROR: La base de datos ha sido desconectada in C:\Ampps\www\sav\system\classes\Kohana\Controller.php:84
2014-07-02 12:24:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\classes\Controller\Login.php [ 16 ] in C:\Ampps\www\sav\application\classes\Controller\Login.php:16
2014-07-02 12:24:44 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Login.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Ampps\www\sa...', 16, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Login->action_initsession()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Login.php:16
2014-07-02 12:25:00 --- CRITICAL: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ SYSPATH\classes\Kohana\Log.php [ 128 ] in file:line
2014-07-02 12:25:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(4096, 'Object of class...', 'C:\Ampps\www\sa...', 128, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Log.php(128): strtr('Could not locat...', Array)
#2 C:\Ampps\www\sav\application\classes\Controller\Login.php(17): Kohana_Log->add(4, 'Could not locat...', Array)
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Login->action_initsession()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-07-02 12:25:09 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$usu_nombre ~ APPPATH\classes\Controller\Login.php [ 17 ] in C:\Ampps\www\sav\application\classes\Controller\Login.php:17
2014-07-02 12:25:09 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Login.php(17): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 17, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Login->action_initsession()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Login.php:17
2014-07-02 12:25:27 --- ERROR: Could not locate user: jean carlo in C:\Ampps\www\sav\system\classes\Kohana\Controller.php:84
2014-07-02 12:25:40 --- ERROR: Could not locate user: jean carlo in C:\Ampps\www\sav\system\classes\Kohana\Controller.php:84
2014-07-02 19:24:26 --- CRITICAL: ErrorException [ 1 ]: Class 'Auth_Usuario' not found ~ APPPATH\classes\Controller\Sav.php [ 19 ] in file:line
2014-07-02 19:24:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line