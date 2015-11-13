<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-04 08:44:56 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Auth_Usuario' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-04 08:44:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-04 10:24:28 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Auth_Usuario' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-04 10:24:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-04 13:38:41 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Auth_Usuario' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-04 13:38:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-04 13:40:03 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Auth_Usuario' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-04 13:40:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-04 13:41:13 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Auth_Usuario' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-04 13:41:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-04 13:41:43 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Auth_Usuario' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-04 13:41:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-04 13:42:26 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Auth_Usuario' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-04 13:42:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-04 13:42:39 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Auth_Usuario' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-04 13:42:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-04 13:42:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Acceso_Usuario::where() ~ APPPATH\classes\Model\Acceso\Usuario.php [ 45 ] in file:line
2014-07-04 13:42:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-04 13:44:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ',' or ';' ~ APPPATH\classes\Model\Acceso\Usuario.php [ 48 ] in file:line
2014-07-04 13:44:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-04 13:44:39 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Acceso_Usuario::where() ~ APPPATH\classes\Model\Acceso\Usuario.php [ 45 ] in file:line
2014-07-04 13:44:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-04 13:44:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',', expecting '{' ~ APPPATH\classes\Model\Acceso\Usuario.php [ 3 ] in file:line
2014-07-04 13:44:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-04 13:45:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting '{' ~ APPPATH\classes\Model\Acceso\Usuario.php [ 3 ] in file:line
2014-07-04 13:45:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-04 13:45:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',', expecting '{' ~ APPPATH\classes\Model\Acceso\Usuario.php [ 3 ] in file:line
2014-07-04 13:45:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-04 13:46:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',', expecting '{' ~ APPPATH\classes\Model\Acceso\Usuario.php [ 3 ] in file:line
2014-07-04 13:46:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-04 13:48:41 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$usu_usuario ~ APPPATH\classes\Model\Acceso\Usuario.php [ 50 ] in C:\Ampps\www\sav\application\classes\Model\Acceso\Usuario.php:50
2014-07-04 13:48:41 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Model\Acceso\Usuario.php(50): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 50, Array)
#1 C:\Ampps\www\sav\application\classes\Acceso\Usuario.php(23): Model_Acceso_Usuario::getUsuario('disenoAl')
#2 C:\Ampps\www\sav\application\classes\Controller\Login.php(14): Acceso_Usuario::acceso(Array)
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Login->action_initsession()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Ampps\www\sav\application\classes\Model\Acceso\Usuario.php:50
2014-07-04 13:48:47 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH\classes\Model\Acceso\Usuario.php [ 50 ] in file:line
2014-07-04 13:48:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-04 13:51:06 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Acceso\Tablatabla.php [ 15 ] in C:\Ampps\www\sav\application\classes\Model\Acceso\Tablatabla.php:15
2014-07-04 13:51:06 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Model\Acceso\Tablatabla.php(15): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\Ampps\www\sa...', 15, Array)
#1 C:\Ampps\www\sav\application\classes\Acceso\Usuario.php(31): Model_Acceso_Tablatabla->getNumLogeo()
#2 C:\Ampps\www\sav\application\classes\Controller\Login.php(14): Acceso_Usuario::acceso(Array)
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Login->action_initsession()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Ampps\www\sav\application\classes\Model\Acceso\Tablatabla.php:15
2014-07-04 13:51:48 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Acceso\Tablatabla.php [ 15 ] in C:\Ampps\www\sav\application\classes\Model\Acceso\Tablatabla.php:15
2014-07-04 13:51:48 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Model\Acceso\Tablatabla.php(15): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\Ampps\www\sa...', 15, Array)
#1 C:\Ampps\www\sav\application\classes\Acceso\Usuario.php(31): Model_Acceso_Tablatabla->getNumLogeo()
#2 C:\Ampps\www\sav\application\classes\Controller\Login.php(14): Acceso_Usuario::acceso(Array)
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Login->action_initsession()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Ampps\www\sav\application\classes\Model\Acceso\Tablatabla.php:15
2014-07-04 13:53:41 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Acceso\Tablatabla.php [ 15 ] in C:\Ampps\www\sav\application\classes\Model\Acceso\Tablatabla.php:15
2014-07-04 13:53:41 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Model\Acceso\Tablatabla.php(15): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\Ampps\www\sa...', 15, Array)
#1 C:\Ampps\www\sav\application\classes\Acceso\Usuario.php(31): Model_Acceso_Tablatabla->getNumLogeo()
#2 C:\Ampps\www\sav\application\classes\Controller\Login.php(14): Acceso_Usuario::acceso(Array)
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Login->action_initsession()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Ampps\www\sav\application\classes\Model\Acceso\Tablatabla.php:15
2014-07-04 13:54:15 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Acceso\Tablatabla.php [ 15 ] in C:\Ampps\www\sav\application\classes\Model\Acceso\Tablatabla.php:15
2014-07-04 13:54:15 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Model\Acceso\Tablatabla.php(15): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\Ampps\www\sa...', 15, Array)
#1 C:\Ampps\www\sav\application\classes\Acceso\Usuario.php(31): Model_Acceso_Tablatabla->getNumLogeo()
#2 C:\Ampps\www\sav\application\classes\Controller\Login.php(14): Acceso_Usuario::acceso(Array)
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Login->action_initsession()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Ampps\www\sav\application\classes\Model\Acceso\Tablatabla.php:15
2014-07-04 13:56:18 --- CRITICAL: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ APPPATH\classes\Acceso\Usuario.php [ 31 ] in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:31
2014-07-04 13:56:18 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Acceso\Usuario.php(31): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\Ampps\www\sa...', 31, Array)
#1 C:\Ampps\www\sav\application\classes\Controller\Login.php(14): Acceso_Usuario::acceso(Array)
#2 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Login->action_initsession()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#8 {main} in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:31
2014-07-04 13:57:06 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH\classes\Model\Acceso\Tablatabla.php [ 15 ] in file:line
2014-07-04 13:57:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-04 13:57:13 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Model\Acceso\Tablatabla.php [ 15 ] in C:\Ampps\www\sav\application\classes\Model\Acceso\Tablatabla.php:15
2014-07-04 13:57:13 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Model\Acceso\Tablatabla.php(15): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\Ampps\www\sa...', 15, Array)
#1 C:\Ampps\www\sav\application\classes\Acceso\Usuario.php(31): Model_Acceso_Tablatabla->getNumLogeo()
#2 C:\Ampps\www\sav\application\classes\Controller\Login.php(14): Acceso_Usuario::acceso(Array)
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Login->action_initsession()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Ampps\www\sav\application\classes\Model\Acceso\Tablatabla.php:15
2014-07-04 14:06:15 --- CRITICAL: ErrorException [ 1 ]: Interface 'Log_Ilog' not found ~ APPPATH\classes\Log\Log.php [ 3 ] in file:line
2014-07-04 14:06:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-04 14:09:49 --- ERROR: ssss in C:\Ampps\www\sav\application\classes\Controller\Login.php:14
2014-07-04 14:15:34 --- ERROR: sssssssssssssssssss in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:10
2014-07-04 14:16:31 --- ERROR: sssssssssssssssssssdisenoAl in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:10
2014-07-04 14:16:59 --- ERROR: Usuario disenoAlinválido in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:10
2014-07-04 14:17:33 --- ERROR: La contraseña asdasdasdel usuario disenoAl es incorrecto in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:39
2014-07-04 14:18:13 --- ERROR: Contraseña sdfsfsdfdfsdfinválida in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:18
2014-07-04 14:37:14 --- ERROR: Contraseña sdfsfsdfdfsdfinválida in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:18
2014-07-04 14:37:17 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Auth_Usuario' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-04 14:37:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-04 14:39:33 --- ERROR: Usuario  inválido in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:18
2014-07-04 14:39:38 --- ERROR: Usuario  inválido in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:18
2014-07-04 14:40:43 --- ERROR: Complete todos los campos in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:12
2014-07-04 15:18:03 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Auth_Usuario' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-04 15:18:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-04 15:24:26 --- ERROR: Complete todos los campos in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:12
2014-07-04 15:24:40 --- ERROR: Complete todos los campos in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:12
2014-07-04 15:24:43 --- ERROR: Complete todos los campos in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:12
2014-07-04 15:24:52 --- ERROR: Complete todos los campos in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:12
2014-07-04 15:25:25 --- ERROR: La contraseña sdfsfsdfdel usuario disenoAl es incorrecto in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:52
2014-07-04 15:28:28 --- ERROR: disenoAl :Usuario bloqueado, comuníquese con el administrador in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:38
2014-07-04 15:30:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Model\Acceso\Usuario.php [ 56 ] in file:line
2014-07-04 15:30:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-04 15:31:07 --- ERROR: disenoAl :Usuario bloqueado, comuníquese con el administrador in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:38
2014-07-04 15:31:18 --- ERROR: disenoAl :Usuario bloqueado, comuníquese con el administrador in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:38
2014-07-04 15:33:24 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\Model\Acceso\Usuario.php [ 55 ] in file:line
2014-07-04 15:33:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-04 15:33:50 --- ERROR: La contraseña sdfsdfdel usuario disenoAl es incorrecto in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:53
2014-07-04 15:33:56 --- ERROR: La contraseña sdfsfdfdel usuario disenoAl es incorrecto in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:53
2014-07-04 15:34:00 --- ERROR: disenoAl :Usuario bloqueado, comuníquese con el administrador in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:49
2014-07-04 15:34:07 --- ERROR: disenoAl :Usuario bloqueado, comuníquese con el administrador in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:38
2014-07-04 15:42:30 --- ERROR: disenoAl :Usuario bloqueado, comuníquese con el administrador in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:38
2014-07-04 15:42:42 --- ERROR: La contraseña Fisi2014del usuario alumnoDiseno es incorrecto in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:53
2014-07-04 15:47:09 --- ERROR: La contraseña 2014Disenodel usuario disenoAl es incorrecto in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:53
2014-07-04 15:47:23 --- ERROR: La contraseña 2014Disenodel usuario disenoAl es incorrecto in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:53
2014-07-04 15:47:43 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Auth_Usuario' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-04 15:47:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-04 15:52:03 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Auth_Usuario' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-04 15:52:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-04 15:52:15 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Auth_Usuario' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-04 15:52:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-04 15:55:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: usuario ~ APPPATH\classes\Acceso\Usuario.php [ 66 ] in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:66
2014-07-04 15:55:36 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Acceso\Usuario.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Ampps\www\sa...', 66, Array)
#1 C:\Ampps\www\sav\application\classes\Acceso\Usuario.php(28): Acceso_Usuario::getUsuario('disenoAl')
#2 C:\Ampps\www\sav\application\classes\Controller\Login.php(14): Acceso_Usuario::acceso(Array)
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Login->action_initsession()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:66
2014-07-04 15:56:00 --- ERROR: disenoAl :Usuario bloqueado, comuníquese con el administrador in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:49
2014-07-04 15:56:26 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Acceso_Usuario::get_usuario() ~ APPPATH\classes\Controller\Sav.php [ 19 ] in file:line
2014-07-04 15:56:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-04 15:57:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Auth_Usuario' not found ~ APPPATH\views\header.php [ 78 ] in file:line
2014-07-04 15:57:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-04 15:57:36 --- CRITICAL: ErrorException [ 1 ]: Class 'Auth_Usuario' not found ~ APPPATH\views\header.php [ 78 ] in file:line
2014-07-04 15:57:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-04 17:26:04 --- ERROR: disenoAl :Usuario bloqueado, comuníquese con el administrador in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:38
2014-07-04 17:26:09 --- ERROR: disenoAl :Usuario bloqueado, comuníquese con el administrador in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:38
2014-07-04 17:31:09 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$per_codigo ~ APPPATH\classes\Controller\Panel.php [ 8 ] in C:\Ampps\www\sav\application\classes\Controller\Panel.php:8
2014-07-04 17:31:09 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Panel.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 8, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Panel->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panel))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Panel.php:8
2014-07-04 17:32:00 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$usu_usuario ~ APPPATH\classes\Controller\Panel.php [ 8 ] in C:\Ampps\www\sav\application\classes\Controller\Panel.php:8
2014-07-04 17:32:00 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Panel.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 8, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Panel->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panel))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Panel.php:8
2014-07-04 17:32:10 --- CRITICAL: ErrorException [ 1 ]: Class 'Auth_Usuario' not found ~ APPPATH\views\header.php [ 78 ] in file:line
2014-07-04 17:32:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-04 17:39:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: perfil ~ APPPATH\views\panel.php [ 10 ] in C:\Ampps\www\sav\application\views\panel.php:10
2014-07-04 17:39:39 --- DEBUG: #0 C:\Ampps\www\sav\application\views\panel.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Ampps\www\sa...', 10, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#2 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#3 C:\Ampps\www\sav\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\Ampps\www\sav\application\views\template.php(21): Kohana_View->__toString()
#5 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#6 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#7 C:\Ampps\www\sav\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\Ampps\www\sav\application\classes\Controller\Sav.php(38): Kohana_Controller_Template->after()
#9 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(87): Controller_Sav->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panel))
#12 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#15 {main} in C:\Ampps\www\sav\application\views\panel.php:10
2014-07-04 17:39:40 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'curso_grupo.cur_codigo' in 'where clause' [ SELECT `curso_grupo`.`cg_codigo`, `tabla_tabla`.`tab_nombre` FROM `tabla_tabla` JOIN `curso_grupo` ON (`curso_grupo`.`tab_codigo` = `tabla_tabla`.`tab_codigo`) WHERE `curso_grupo`.`cur_codigo` IS NULL ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 17:39:40 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `curso_g...', false, Array)
#1 C:\Ampps\www\sav\application\classes\Model\Curso.php(26): Kohana_Database_Query->execute()
#2 C:\Ampps\www\sav\application\classes\Controller\Curso.php(15): Model_Curso::getGrupos(NULL)
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getGrupos()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 17:39:40 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$usu_usuario ~ APPPATH\classes\Controller\Curso.php [ 22 ] in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 17:39:40 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Curso.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 22, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getTipos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 17:40:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: perfil ~ APPPATH\views\panel.php [ 10 ] in C:\Ampps\www\sav\application\views\panel.php:10
2014-07-04 17:40:03 --- DEBUG: #0 C:\Ampps\www\sav\application\views\panel.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Ampps\www\sa...', 10, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#2 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#3 C:\Ampps\www\sav\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\Ampps\www\sav\application\views\template.php(21): Kohana_View->__toString()
#5 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#6 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#7 C:\Ampps\www\sav\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\Ampps\www\sav\application\classes\Controller\Sav.php(38): Kohana_Controller_Template->after()
#9 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(87): Controller_Sav->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panel))
#12 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#15 {main} in C:\Ampps\www\sav\application\views\panel.php:10
2014-07-04 17:40:04 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$usu_usuario ~ APPPATH\classes\Controller\Curso.php [ 22 ] in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 17:40:04 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Curso.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 22, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getTipos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 17:40:04 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'curso_grupo.cur_codigo' in 'where clause' [ SELECT `curso_grupo`.`cg_codigo`, `tabla_tabla`.`tab_nombre` FROM `tabla_tabla` JOIN `curso_grupo` ON (`curso_grupo`.`tab_codigo` = `tabla_tabla`.`tab_codigo`) WHERE `curso_grupo`.`cur_codigo` IS NULL ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 17:40:04 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `curso_g...', false, Array)
#1 C:\Ampps\www\sav\application\classes\Model\Curso.php(26): Kohana_Database_Query->execute()
#2 C:\Ampps\www\sav\application\classes\Controller\Curso.php(15): Model_Curso::getGrupos(NULL)
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getGrupos()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 17:43:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: perfil ~ APPPATH\views\panel.php [ 10 ] in C:\Ampps\www\sav\application\views\panel.php:10
2014-07-04 17:43:53 --- DEBUG: #0 C:\Ampps\www\sav\application\views\panel.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Ampps\www\sa...', 10, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#2 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#3 C:\Ampps\www\sav\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\Ampps\www\sav\application\views\template.php(21): Kohana_View->__toString()
#5 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#6 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#7 C:\Ampps\www\sav\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\Ampps\www\sav\application\classes\Controller\Sav.php(38): Kohana_Controller_Template->after()
#9 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(87): Controller_Sav->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panel))
#12 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#15 {main} in C:\Ampps\www\sav\application\views\panel.php:10
2014-07-04 17:43:54 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$usu_usuario ~ APPPATH\classes\Controller\Curso.php [ 22 ] in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 17:43:54 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Curso.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 22, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getTipos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 17:43:54 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'curso_grupo.cur_codigo' in 'where clause' [ SELECT `curso_grupo`.`cg_codigo`, `tabla_tabla`.`tab_nombre` FROM `tabla_tabla` JOIN `curso_grupo` ON (`curso_grupo`.`tab_codigo` = `tabla_tabla`.`tab_codigo`) WHERE `curso_grupo`.`cur_codigo` IS NULL ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 17:43:54 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `curso_g...', false, Array)
#1 C:\Ampps\www\sav\application\classes\Model\Curso.php(26): Kohana_Database_Query->execute()
#2 C:\Ampps\www\sav\application\classes\Controller\Curso.php(15): Model_Curso::getGrupos(NULL)
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getGrupos()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 17:44:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: perfil ~ APPPATH\views\panel.php [ 10 ] in C:\Ampps\www\sav\application\views\panel.php:10
2014-07-04 17:44:06 --- DEBUG: #0 C:\Ampps\www\sav\application\views\panel.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Ampps\www\sa...', 10, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#2 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#3 C:\Ampps\www\sav\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\Ampps\www\sav\application\views\template.php(21): Kohana_View->__toString()
#5 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#6 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#7 C:\Ampps\www\sav\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\Ampps\www\sav\application\classes\Controller\Sav.php(38): Kohana_Controller_Template->after()
#9 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(87): Controller_Sav->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panel))
#12 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#15 {main} in C:\Ampps\www\sav\application\views\panel.php:10
2014-07-04 17:44:06 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'curso_grupo.cur_codigo' in 'where clause' [ SELECT `curso_grupo`.`cg_codigo`, `tabla_tabla`.`tab_nombre` FROM `tabla_tabla` JOIN `curso_grupo` ON (`curso_grupo`.`tab_codigo` = `tabla_tabla`.`tab_codigo`) WHERE `curso_grupo`.`cur_codigo` IS NULL ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 17:44:06 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `curso_g...', false, Array)
#1 C:\Ampps\www\sav\application\classes\Model\Curso.php(26): Kohana_Database_Query->execute()
#2 C:\Ampps\www\sav\application\classes\Controller\Curso.php(15): Model_Curso::getGrupos(NULL)
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getGrupos()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 17:44:06 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$usu_usuario ~ APPPATH\classes\Controller\Curso.php [ 22 ] in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 17:44:06 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Curso.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 22, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getTipos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 17:44:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: perfil ~ APPPATH\views\panel.php [ 10 ] in C:\Ampps\www\sav\application\views\panel.php:10
2014-07-04 17:44:21 --- DEBUG: #0 C:\Ampps\www\sav\application\views\panel.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Ampps\www\sa...', 10, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#2 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#3 C:\Ampps\www\sav\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\Ampps\www\sav\application\views\template.php(21): Kohana_View->__toString()
#5 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#6 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#7 C:\Ampps\www\sav\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\Ampps\www\sav\application\classes\Controller\Sav.php(38): Kohana_Controller_Template->after()
#9 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(87): Controller_Sav->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panel))
#12 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#15 {main} in C:\Ampps\www\sav\application\views\panel.php:10
2014-07-04 17:44:21 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$usu_usuario ~ APPPATH\classes\Controller\Curso.php [ 22 ] in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 17:44:21 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Curso.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 22, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getTipos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 17:44:21 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'curso_grupo.cur_codigo' in 'where clause' [ SELECT `curso_grupo`.`cg_codigo`, `tabla_tabla`.`tab_nombre` FROM `tabla_tabla` JOIN `curso_grupo` ON (`curso_grupo`.`tab_codigo` = `tabla_tabla`.`tab_codigo`) WHERE `curso_grupo`.`cur_codigo` IS NULL ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 17:44:21 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `curso_g...', false, Array)
#1 C:\Ampps\www\sav\application\classes\Model\Curso.php(26): Kohana_Database_Query->execute()
#2 C:\Ampps\www\sav\application\classes\Controller\Curso.php(15): Model_Curso::getGrupos(NULL)
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getGrupos()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 17:45:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: perfil ~ APPPATH\views\panel.php [ 10 ] in C:\Ampps\www\sav\application\views\panel.php:10
2014-07-04 17:45:05 --- DEBUG: #0 C:\Ampps\www\sav\application\views\panel.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Ampps\www\sa...', 10, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#2 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#3 C:\Ampps\www\sav\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\Ampps\www\sav\application\views\template.php(21): Kohana_View->__toString()
#5 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#6 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#7 C:\Ampps\www\sav\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\Ampps\www\sav\application\classes\Controller\Sav.php(38): Kohana_Controller_Template->after()
#9 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(87): Controller_Sav->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panel))
#12 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#15 {main} in C:\Ampps\www\sav\application\views\panel.php:10
2014-07-04 17:45:05 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'curso_grupo.cur_codigo' in 'where clause' [ SELECT `curso_grupo`.`cg_codigo`, `tabla_tabla`.`tab_nombre` FROM `tabla_tabla` JOIN `curso_grupo` ON (`curso_grupo`.`tab_codigo` = `tabla_tabla`.`tab_codigo`) WHERE `curso_grupo`.`cur_codigo` IS NULL ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 17:45:05 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `curso_g...', false, Array)
#1 C:\Ampps\www\sav\application\classes\Model\Curso.php(26): Kohana_Database_Query->execute()
#2 C:\Ampps\www\sav\application\classes\Controller\Curso.php(15): Model_Curso::getGrupos(NULL)
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getGrupos()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 17:45:05 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$usu_usuario ~ APPPATH\classes\Controller\Curso.php [ 22 ] in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 17:45:05 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Curso.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 22, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getTipos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 17:45:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: permisos ~ APPPATH\views\panel.php [ 10 ] in C:\Ampps\www\sav\application\views\panel.php:10
2014-07-04 17:45:48 --- DEBUG: #0 C:\Ampps\www\sav\application\views\panel.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Ampps\www\sa...', 10, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#2 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#3 C:\Ampps\www\sav\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\Ampps\www\sav\application\views\template.php(21): Kohana_View->__toString()
#5 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#6 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#7 C:\Ampps\www\sav\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\Ampps\www\sav\application\classes\Controller\Sav.php(38): Kohana_Controller_Template->after()
#9 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(87): Controller_Sav->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panel))
#12 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#15 {main} in C:\Ampps\www\sav\application\views\panel.php:10
2014-07-04 17:45:49 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$usu_usuario ~ APPPATH\classes\Controller\Curso.php [ 22 ] in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 17:45:49 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Curso.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 22, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getTipos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 17:45:49 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'curso_grupo.cur_codigo' in 'where clause' [ SELECT `curso_grupo`.`cg_codigo`, `tabla_tabla`.`tab_nombre` FROM `tabla_tabla` JOIN `curso_grupo` ON (`curso_grupo`.`tab_codigo` = `tabla_tabla`.`tab_codigo`) WHERE `curso_grupo`.`cur_codigo` IS NULL ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 17:45:49 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `curso_g...', false, Array)
#1 C:\Ampps\www\sav\application\classes\Model\Curso.php(26): Kohana_Database_Query->execute()
#2 C:\Ampps\www\sav\application\classes\Controller\Curso.php(15): Model_Curso::getGrupos(NULL)
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getGrupos()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 17:46:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: permisos ~ APPPATH\views\panel.php [ 10 ] in C:\Ampps\www\sav\application\views\panel.php:10
2014-07-04 17:46:38 --- DEBUG: #0 C:\Ampps\www\sav\application\views\panel.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Ampps\www\sa...', 10, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#2 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#3 C:\Ampps\www\sav\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\Ampps\www\sav\application\views\template.php(21): Kohana_View->__toString()
#5 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#6 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#7 C:\Ampps\www\sav\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\Ampps\www\sav\application\classes\Controller\Sav.php(38): Kohana_Controller_Template->after()
#9 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(87): Controller_Sav->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panel))
#12 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#15 {main} in C:\Ampps\www\sav\application\views\panel.php:10
2014-07-04 17:46:38 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$usu_usuario ~ APPPATH\classes\Controller\Curso.php [ 22 ] in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 17:46:38 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Curso.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 22, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getTipos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 17:46:38 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'curso_grupo.cur_codigo' in 'where clause' [ SELECT `curso_grupo`.`cg_codigo`, `tabla_tabla`.`tab_nombre` FROM `tabla_tabla` JOIN `curso_grupo` ON (`curso_grupo`.`tab_codigo` = `tabla_tabla`.`tab_codigo`) WHERE `curso_grupo`.`cur_codigo` IS NULL ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 17:46:38 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `curso_g...', false, Array)
#1 C:\Ampps\www\sav\application\classes\Model\Curso.php(26): Kohana_Database_Query->execute()
#2 C:\Ampps\www\sav\application\classes\Controller\Curso.php(15): Model_Curso::getGrupos(NULL)
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getGrupos()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 17:47:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: permisos ~ APPPATH\views\panel.php [ 10 ] in C:\Ampps\www\sav\application\views\panel.php:10
2014-07-04 17:47:23 --- DEBUG: #0 C:\Ampps\www\sav\application\views\panel.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Ampps\www\sa...', 10, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#2 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#3 C:\Ampps\www\sav\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\Ampps\www\sav\application\views\template.php(21): Kohana_View->__toString()
#5 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#6 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#7 C:\Ampps\www\sav\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\Ampps\www\sav\application\classes\Controller\Sav.php(38): Kohana_Controller_Template->after()
#9 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(87): Controller_Sav->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panel))
#12 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#15 {main} in C:\Ampps\www\sav\application\views\panel.php:10
2014-07-04 17:47:23 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'curso_grupo.cur_codigo' in 'where clause' [ SELECT `curso_grupo`.`cg_codigo`, `tabla_tabla`.`tab_nombre` FROM `tabla_tabla` JOIN `curso_grupo` ON (`curso_grupo`.`tab_codigo` = `tabla_tabla`.`tab_codigo`) WHERE `curso_grupo`.`cur_codigo` IS NULL ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 17:47:23 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `curso_g...', false, Array)
#1 C:\Ampps\www\sav\application\classes\Model\Curso.php(26): Kohana_Database_Query->execute()
#2 C:\Ampps\www\sav\application\classes\Controller\Curso.php(15): Model_Curso::getGrupos(NULL)
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getGrupos()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 17:47:23 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$usu_usuario ~ APPPATH\classes\Controller\Curso.php [ 22 ] in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 17:47:23 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Curso.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 22, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getTipos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 17:48:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: permisos ~ APPPATH\views\panel.php [ 10 ] in C:\Ampps\www\sav\application\views\panel.php:10
2014-07-04 17:48:25 --- DEBUG: #0 C:\Ampps\www\sav\application\views\panel.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Ampps\www\sa...', 10, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#2 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#3 C:\Ampps\www\sav\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\Ampps\www\sav\application\views\template.php(21): Kohana_View->__toString()
#5 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#6 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#7 C:\Ampps\www\sav\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\Ampps\www\sav\application\classes\Controller\Sav.php(38): Kohana_Controller_Template->after()
#9 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(87): Controller_Sav->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panel))
#12 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#15 {main} in C:\Ampps\www\sav\application\views\panel.php:10
2014-07-04 17:48:26 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$usu_usuario ~ APPPATH\classes\Controller\Curso.php [ 22 ] in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 17:48:26 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Curso.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 22, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getTipos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 17:48:26 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'curso_grupo.cur_codigo' in 'where clause' [ SELECT `curso_grupo`.`cg_codigo`, `tabla_tabla`.`tab_nombre` FROM `tabla_tabla` JOIN `curso_grupo` ON (`curso_grupo`.`tab_codigo` = `tabla_tabla`.`tab_codigo`) WHERE `curso_grupo`.`cur_codigo` IS NULL ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 17:48:26 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `curso_g...', false, Array)
#1 C:\Ampps\www\sav\application\classes\Model\Curso.php(26): Kohana_Database_Query->execute()
#2 C:\Ampps\www\sav\application\classes\Controller\Curso.php(15): Model_Curso::getGrupos(NULL)
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getGrupos()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 17:57:28 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'opciones.opc_menu' in 'field list' [ SELECT `opciones`.`opc_menu` FROM `opciones` JOIN `perfil_opciones` ON (`perfil_opciones`.`opc_codigo` = `opciones`.`opc_codigo`) JOIN `perfil` ON (`perfil`.`per_codigo` = `perfil_opciones`.`per_codigo`) JOIN `usuario` ON (`usuario`.`per_codigo` = `perfil`.`per_codigo`) WHERE `usuario`.`usu_usuario` = 'disenoAlumno' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 17:57:28 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `opcione...', false, Array)
#1 C:\Ampps\www\sav\application\classes\Model\Acceso\Usuario.php(62): Kohana_Database_Query->execute()
#2 C:\Ampps\www\sav\application\classes\Acceso\Usuario.php(69): Model_Acceso_Usuario::getOpciones('disenoAlumno')
#3 C:\Ampps\www\sav\application\classes\Controller\Sav.php(19): Acceso_Usuario::getUsuario('disenoAlumno')
#4 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(69): Controller_Sav->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panel))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 18:00:14 --- CRITICAL: ErrorException [ 2 ]: array_search() expects parameter 2 to be array, object given ~ APPPATH\classes\Util.php [ 41 ] in file:line
2014-07-04 18:00:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_search() ...', 'C:\Ampps\www\sa...', 41, Array)
#1 C:\Ampps\www\sav\application\classes\Util.php(41): array_search('menu_panel_alum...', Object(stdClass))
#2 C:\Ampps\www\sav\application\views\panel.php(10): Util::hasMenu(Object(stdClass), 'menu_panel_alum...')
#3 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#4 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#5 C:\Ampps\www\sav\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 C:\Ampps\www\sav\application\views\template.php(21): Kohana_View->__toString()
#7 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#8 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#9 C:\Ampps\www\sav\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 C:\Ampps\www\sav\application\classes\Controller\Sav.php(38): Kohana_Controller_Template->after()
#11 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(87): Controller_Sav->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panel))
#14 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#17 {main} in file:line
2014-07-04 18:00:14 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'curso_grupo.cur_codigo' in 'where clause' [ SELECT `curso_grupo`.`cg_codigo`, `tabla_tabla`.`tab_nombre` FROM `tabla_tabla` JOIN `curso_grupo` ON (`curso_grupo`.`tab_codigo` = `tabla_tabla`.`tab_codigo`) WHERE `curso_grupo`.`cur_codigo` IS NULL ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 18:00:14 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `curso_g...', false, Array)
#1 C:\Ampps\www\sav\application\classes\Model\Curso.php(26): Kohana_Database_Query->execute()
#2 C:\Ampps\www\sav\application\classes\Controller\Curso.php(15): Model_Curso::getGrupos(NULL)
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getGrupos()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 18:00:14 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$usu_usuario ~ APPPATH\classes\Controller\Curso.php [ 22 ] in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 18:00:14 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Curso.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 22, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getTipos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 18:20:10 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$usu_usuario ~ APPPATH\classes\Controller\Curso.php [ 22 ] in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 18:20:10 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Curso.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 22, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getTipos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 18:20:10 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'curso_grupo.cur_codigo' in 'where clause' [ SELECT `curso_grupo`.`cg_codigo`, `tabla_tabla`.`tab_nombre` FROM `tabla_tabla` JOIN `curso_grupo` ON (`curso_grupo`.`tab_codigo` = `tabla_tabla`.`tab_codigo`) WHERE `curso_grupo`.`cur_codigo` IS NULL ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 18:20:10 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `curso_g...', false, Array)
#1 C:\Ampps\www\sav\application\classes\Model\Curso.php(26): Kohana_Database_Query->execute()
#2 C:\Ampps\www\sav\application\classes\Controller\Curso.php(15): Model_Curso::getGrupos(NULL)
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getGrupos()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 18:20:16 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$usu_usuario ~ APPPATH\classes\Controller\Curso.php [ 22 ] in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 18:20:16 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Curso.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 22, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getTipos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 18:20:16 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'curso_grupo.cur_codigo' in 'where clause' [ SELECT `curso_grupo`.`cg_codigo`, `tabla_tabla`.`tab_nombre` FROM `tabla_tabla` JOIN `curso_grupo` ON (`curso_grupo`.`tab_codigo` = `tabla_tabla`.`tab_codigo`) WHERE `curso_grupo`.`cur_codigo` IS NULL ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 18:20:16 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `curso_g...', false, Array)
#1 C:\Ampps\www\sav\application\classes\Model\Curso.php(26): Kohana_Database_Query->execute()
#2 C:\Ampps\www\sav\application\classes\Controller\Curso.php(15): Model_Curso::getGrupos(NULL)
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getGrupos()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 18:20:27 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'curso_grupo.cur_codigo' in 'where clause' [ SELECT `curso_grupo`.`cg_codigo`, `tabla_tabla`.`tab_nombre` FROM `tabla_tabla` JOIN `curso_grupo` ON (`curso_grupo`.`tab_codigo` = `tabla_tabla`.`tab_codigo`) WHERE `curso_grupo`.`cur_codigo` IS NULL ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 18:20:27 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `curso_g...', false, Array)
#1 C:\Ampps\www\sav\application\classes\Model\Curso.php(26): Kohana_Database_Query->execute()
#2 C:\Ampps\www\sav\application\classes\Controller\Curso.php(15): Model_Curso::getGrupos(NULL)
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getGrupos()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 18:20:27 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$usu_usuario ~ APPPATH\classes\Controller\Curso.php [ 22 ] in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 18:20:27 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Curso.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 22, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getTipos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 18:23:39 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'curso_grupo.cur_codigo' in 'where clause' [ SELECT `curso_grupo`.`cg_codigo`, `tabla_tabla`.`tab_nombre` FROM `tabla_tabla` JOIN `curso_grupo` ON (`curso_grupo`.`tab_codigo` = `tabla_tabla`.`tab_codigo`) WHERE `curso_grupo`.`cur_codigo` IS NULL ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 18:23:39 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `curso_g...', false, Array)
#1 C:\Ampps\www\sav\application\classes\Model\Curso.php(26): Kohana_Database_Query->execute()
#2 C:\Ampps\www\sav\application\classes\Controller\Curso.php(15): Model_Curso::getGrupos(NULL)
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getGrupos()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 18:23:40 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$usu_usuario ~ APPPATH\classes\Controller\Curso.php [ 22 ] in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 18:23:40 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Curso.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 22, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getTipos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 18:26:55 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'curso_grupo.cur_codigo' in 'where clause' [ SELECT `curso_grupo`.`cg_codigo`, `tabla_tabla`.`tab_nombre` FROM `tabla_tabla` JOIN `curso_grupo` ON (`curso_grupo`.`tab_codigo` = `tabla_tabla`.`tab_codigo`) WHERE `curso_grupo`.`cur_codigo` IS NULL ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 18:26:55 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `curso_g...', false, Array)
#1 C:\Ampps\www\sav\application\classes\Model\Curso.php(26): Kohana_Database_Query->execute()
#2 C:\Ampps\www\sav\application\classes\Controller\Curso.php(15): Model_Curso::getGrupos(NULL)
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getGrupos()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 18:26:55 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$usu_usuario ~ APPPATH\classes\Controller\Curso.php [ 22 ] in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 18:26:55 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Curso.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 22, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getTipos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 18:27:13 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'curso_grupo.cur_codigo' in 'where clause' [ SELECT `curso_grupo`.`cg_codigo`, `tabla_tabla`.`tab_nombre` FROM `tabla_tabla` JOIN `curso_grupo` ON (`curso_grupo`.`tab_codigo` = `tabla_tabla`.`tab_codigo`) WHERE `curso_grupo`.`cur_codigo` IS NULL ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 18:27:13 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `curso_g...', false, Array)
#1 C:\Ampps\www\sav\application\classes\Model\Curso.php(26): Kohana_Database_Query->execute()
#2 C:\Ampps\www\sav\application\classes\Controller\Curso.php(15): Model_Curso::getGrupos(NULL)
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getGrupos()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 18:27:13 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$usu_usuario ~ APPPATH\classes\Controller\Curso.php [ 22 ] in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 18:27:13 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Curso.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 22, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getTipos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 18:29:38 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Acceso\Usuario.php [ 43 ] in C:\Ampps\www\sav\application\classes\Model\Acceso\Usuario.php:43
2014-07-04 18:29:38 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Model\Acceso\Usuario.php(43): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\Ampps\www\sa...', 43, Array)
#1 C:\Ampps\www\sav\application\classes\Acceso\Usuario.php(68): Model_Acceso_Usuario::getUsuario(NULL)
#2 C:\Ampps\www\sav\application\classes\Controller\Sav.php(19): Acceso_Usuario::getUsuario(NULL)
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(69): Controller_Sav->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panel))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Ampps\www\sav\application\classes\Model\Acceso\Usuario.php:43
2014-07-04 18:30:38 --- ERROR: disenoAl :Usuario bloqueado, comuníquese con el administrador in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:38
2014-07-04 18:30:53 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Acceso\Usuario.php [ 43 ] in C:\Ampps\www\sav\application\classes\Model\Acceso\Usuario.php:43
2014-07-04 18:30:53 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Model\Acceso\Usuario.php(43): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\Ampps\www\sa...', 43, Array)
#1 C:\Ampps\www\sav\application\classes\Acceso\Usuario.php(68): Model_Acceso_Usuario::getUsuario(NULL)
#2 C:\Ampps\www\sav\application\classes\Controller\Sav.php(19): Acceso_Usuario::getUsuario(NULL)
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(69): Controller_Sav->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panel))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Ampps\www\sav\application\classes\Model\Acceso\Usuario.php:43
2014-07-04 18:30:53 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Acceso\Usuario.php [ 43 ] in C:\Ampps\www\sav\application\classes\Model\Acceso\Usuario.php:43
2014-07-04 18:30:53 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Model\Acceso\Usuario.php(43): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\Ampps\www\sa...', 43, Array)
#1 C:\Ampps\www\sav\application\classes\Acceso\Usuario.php(68): Model_Acceso_Usuario::getUsuario(NULL)
#2 C:\Ampps\www\sav\application\classes\Controller\Sav.php(19): Acceso_Usuario::getUsuario(NULL)
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(69): Controller_Sav->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panel))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Ampps\www\sav\application\classes\Model\Acceso\Usuario.php:43
2014-07-04 18:34:42 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Acceso\Usuario.php [ 46 ] in C:\Ampps\www\sav\application\classes\Model\Acceso\Usuario.php:46
2014-07-04 18:34:42 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Model\Acceso\Usuario.php(46): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\Ampps\www\sa...', 46, Array)
#1 C:\Ampps\www\sav\application\classes\Acceso\Usuario.php(68): Model_Acceso_Usuario::getUsuario(NULL)
#2 C:\Ampps\www\sav\application\classes\Controller\Sav.php(19): Acceso_Usuario::getUsuario(NULL)
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(69): Controller_Sav->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panel))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Ampps\www\sav\application\classes\Model\Acceso\Usuario.php:46
2014-07-04 18:36:44 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Acceso\Usuario.php [ 23 ] in C:\Ampps\www\sav\application\classes\Model\Acceso\Usuario.php:23
2014-07-04 18:36:44 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Model\Acceso\Usuario.php(23): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\Ampps\www\sa...', 23, Array)
#1 C:\Ampps\www\sav\application\classes\Acceso\Usuario.php(70): Model_Acceso_Usuario::getPerfil(NULL)
#2 C:\Ampps\www\sav\application\classes\Controller\Sav.php(19): Acceso_Usuario::getUsuario(NULL)
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(69): Controller_Sav->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panel))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Ampps\www\sav\application\classes\Model\Acceso\Usuario.php:23
2014-07-04 18:38:30 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Acceso\Usuario.php [ 23 ] in C:\Ampps\www\sav\application\classes\Model\Acceso\Usuario.php:23
2014-07-04 18:38:30 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Model\Acceso\Usuario.php(23): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\Ampps\www\sa...', 23, Array)
#1 C:\Ampps\www\sav\application\classes\Acceso\Usuario.php(70): Model_Acceso_Usuario::getPerfil(NULL)
#2 C:\Ampps\www\sav\application\classes\Controller\Sav.php(19): Acceso_Usuario::getUsuario(NULL)
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(69): Controller_Sav->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panel))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Ampps\www\sav\application\classes\Model\Acceso\Usuario.php:23
2014-07-04 18:41:05 --- CRITICAL: ErrorException [ 1 ]: Class 'Session_User' not found ~ SYSPATH\classes\Kohana\Session.php [ 54 ] in file:line
2014-07-04 18:41:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-04 18:41:44 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$usu_usuario ~ APPPATH\classes\Controller\Matricula.php [ 41 ] in C:\Ampps\www\sav\application\classes\Controller\Matricula.php:41
2014-07-04 18:41:44 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Matricula.php(41): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 41, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Matricula->action_alumnos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Matricula))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Matricula.php:41
2014-07-04 18:41:49 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$per_codigo ~ APPPATH\classes\Controller\Trabajo.php [ 7 ] in C:\Ampps\www\sav\application\classes\Controller\Trabajo.php:7
2014-07-04 18:41:49 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Trabajo.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 7, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Trabajo->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Trabajo))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Trabajo.php:7
2014-07-04 18:47:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\navbar.php [ 18 ] in file:line
2014-07-04 18:47:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-04 18:48:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: permisos ~ APPPATH\views\navbar.php [ 5 ] in C:\Ampps\www\sav\application\views\navbar.php:5
2014-07-04 18:48:13 --- DEBUG: #0 C:\Ampps\www\sav\application\views\navbar.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Ampps\www\sa...', 5, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#2 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#3 C:\Ampps\www\sav\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\Ampps\www\sav\application\views\template.php(8): Kohana_View->__toString()
#5 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#6 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#7 C:\Ampps\www\sav\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\Ampps\www\sav\application\classes\Controller\Sav.php(38): Kohana_Controller_Template->after()
#9 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(87): Controller_Sav->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Matricula))
#12 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#15 {main} in C:\Ampps\www\sav\application\views\navbar.php:5
2014-07-04 18:48:13 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'curso_grupo.cur_codigo' in 'where clause' [ SELECT `curso_grupo`.`cg_codigo`, `tabla_tabla`.`tab_nombre` FROM `tabla_tabla` JOIN `curso_grupo` ON (`curso_grupo`.`tab_codigo` = `tabla_tabla`.`tab_codigo`) WHERE `curso_grupo`.`cur_codigo` = '01' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 18:48:13 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `curso_g...', false, Array)
#1 C:\Ampps\www\sav\application\classes\Model\Curso.php(26): Kohana_Database_Query->execute()
#2 C:\Ampps\www\sav\application\views\matricula\list.php(37): Model_Curso::getGrupos('01')
#3 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#4 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#5 C:\Ampps\www\sav\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 C:\Ampps\www\sav\application\views\template.php(21): Kohana_View->__toString()
#7 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#8 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#9 C:\Ampps\www\sav\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 C:\Ampps\www\sav\application\classes\Controller\Sav.php(38): Kohana_Controller_Template->after()
#11 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(87): Controller_Sav->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Matricula))
#14 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#17 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 18:48:37 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'curso_grupo.cur_codigo' in 'where clause' [ SELECT `curso_grupo`.`cg_codigo`, `tabla_tabla`.`tab_nombre` FROM `tabla_tabla` JOIN `curso_grupo` ON (`curso_grupo`.`tab_codigo` = `tabla_tabla`.`tab_codigo`) WHERE `curso_grupo`.`cur_codigo` = '01' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 18:48:37 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `curso_g...', false, Array)
#1 C:\Ampps\www\sav\application\classes\Model\Curso.php(26): Kohana_Database_Query->execute()
#2 C:\Ampps\www\sav\application\views\matricula\list.php(37): Model_Curso::getGrupos('01')
#3 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#4 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#5 C:\Ampps\www\sav\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 C:\Ampps\www\sav\application\views\template.php(21): Kohana_View->__toString()
#7 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#8 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#9 C:\Ampps\www\sav\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 C:\Ampps\www\sav\application\classes\Controller\Sav.php(39): Kohana_Controller_Template->after()
#11 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(87): Controller_Sav->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Matricula))
#14 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#17 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 18:50:35 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'curso_grupo.cur_codigo' in 'where clause' [ SELECT `curso_grupo`.`cg_codigo`, `tabla_tabla`.`tab_nombre` FROM `tabla_tabla` JOIN `curso_grupo` ON (`curso_grupo`.`tab_codigo` = `tabla_tabla`.`tab_codigo`) WHERE `curso_grupo`.`cur_codigo` = '01' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 18:50:35 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `curso_g...', false, Array)
#1 C:\Ampps\www\sav\application\classes\Model\Curso.php(26): Kohana_Database_Query->execute()
#2 C:\Ampps\www\sav\application\views\matricula\list.php(37): Model_Curso::getGrupos('01')
#3 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#4 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#5 C:\Ampps\www\sav\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 C:\Ampps\www\sav\application\views\template.php(21): Kohana_View->__toString()
#7 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#8 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#9 C:\Ampps\www\sav\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 C:\Ampps\www\sav\application\classes\Controller\Sav.php(39): Kohana_Controller_Template->after()
#11 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(87): Controller_Sav->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Matricula))
#14 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#17 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 19:06:50 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'curso_grupo.cur_codigo' in 'where clause' [ SELECT `curso_grupo`.`cg_codigo`, `tabla_tabla`.`tab_nombre` FROM `tabla_tabla` JOIN `curso_grupo` ON (`curso_grupo`.`tab_codigo` = `tabla_tabla`.`tab_codigo`) WHERE `curso_grupo`.`cur_codigo` = '01' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 19:06:50 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `curso_g...', false, Array)
#1 C:\Ampps\www\sav\application\classes\Model\Curso.php(26): Kohana_Database_Query->execute()
#2 C:\Ampps\www\sav\application\views\matricula\list.php(37): Model_Curso::getGrupos('01')
#3 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#4 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#5 C:\Ampps\www\sav\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 C:\Ampps\www\sav\application\views\template.php(21): Kohana_View->__toString()
#7 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#8 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#9 C:\Ampps\www\sav\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 C:\Ampps\www\sav\application\classes\Controller\Sav.php(39): Kohana_Controller_Template->after()
#11 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(87): Controller_Sav->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Matricula))
#14 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#17 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 19:07:41 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'curso_grupo.cur_codigo' in 'where clause' [ SELECT `curso_grupo`.`cg_codigo`, `tabla_tabla`.`tab_nombre` FROM `tabla_tabla` JOIN `curso_grupo` ON (`curso_grupo`.`tab_codigo` = `tabla_tabla`.`tab_codigo`) WHERE `curso_grupo`.`cur_codigo` = '01' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 19:07:41 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `curso_g...', false, Array)
#1 C:\Ampps\www\sav\application\classes\Model\Curso.php(26): Kohana_Database_Query->execute()
#2 C:\Ampps\www\sav\application\views\matricula\list.php(37): Model_Curso::getGrupos('01')
#3 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#4 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#5 C:\Ampps\www\sav\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 C:\Ampps\www\sav\application\views\template.php(21): Kohana_View->__toString()
#7 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#8 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#9 C:\Ampps\www\sav\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 C:\Ampps\www\sav\application\classes\Controller\Sav.php(39): Kohana_Controller_Template->after()
#11 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(87): Controller_Sav->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Matricula))
#14 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#17 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 19:08:06 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'curso_grupo.cur_codigo' in 'where clause' [ SELECT `curso_grupo`.`cg_codigo`, `tabla_tabla`.`tab_nombre` FROM `tabla_tabla` JOIN `curso_grupo` ON (`curso_grupo`.`tab_codigo` = `tabla_tabla`.`tab_codigo`) WHERE `curso_grupo`.`cur_codigo` = '01' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 19:08:06 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `curso_g...', false, Array)
#1 C:\Ampps\www\sav\application\classes\Model\Curso.php(26): Kohana_Database_Query->execute()
#2 C:\Ampps\www\sav\application\views\matricula\list.php(37): Model_Curso::getGrupos('01')
#3 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#4 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#5 C:\Ampps\www\sav\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 C:\Ampps\www\sav\application\views\template.php(21): Kohana_View->__toString()
#7 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#8 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#9 C:\Ampps\www\sav\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 C:\Ampps\www\sav\application\classes\Controller\Sav.php(39): Kohana_Controller_Template->after()
#11 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(87): Controller_Sav->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Matricula))
#14 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#17 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 19:20:46 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$usu_usuario ~ APPPATH\classes\Controller\Matricula.php [ 24 ] in C:\Ampps\www\sav\application\classes\Controller\Matricula.php:24
2014-07-04 19:20:46 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Matricula.php(24): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 24, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Matricula->action_new()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Matricula))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Matricula.php:24
2014-07-04 19:21:09 --- CRITICAL: Kohana_Exception [ 0 ]: The mat_fecha_registro property does not exist in the Model_Matricula class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php:702
2014-07-04 19:21:09 --- DEBUG: #0 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('mat_fecha_regis...', '20140704192109')
#1 C:\Ampps\www\sav\application\classes\Controller\Matricula.php(26): Kohana_ORM->__set('mat_fecha_regis...', '20140704192109')
#2 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Matricula->action_new()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Matricula))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#8 {main} in C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php:702
2014-07-04 19:21:33 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$per_codigo ~ APPPATH\classes\Controller\Trabajo.php [ 7 ] in C:\Ampps\www\sav\application\classes\Controller\Trabajo.php:7
2014-07-04 19:21:33 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Trabajo.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 7, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Trabajo->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Trabajo))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Trabajo.php:7
2014-07-04 19:22:34 --- ERROR: La contraseña Fisisdfsdfdel usuario alumnoDiseno es incorrecto in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:53
2014-07-04 19:22:38 --- ERROR: Complete todos los campos in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:12
2014-07-04 19:24:02 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$per_codigo ~ APPPATH\classes\Controller\Trabajo.php [ 7 ] in C:\Ampps\www\sav\application\classes\Controller\Trabajo.php:7
2014-07-04 19:24:02 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Trabajo.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 7, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Trabajo->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Trabajo))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Trabajo.php:7
2014-07-04 19:24:53 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$usu_usuario ~ APPPATH\classes\Controller\Trabajo.php [ 10 ] in C:\Ampps\www\sav\application\classes\Controller\Trabajo.php:10
2014-07-04 19:24:53 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Trabajo.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 10, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Trabajo->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Trabajo))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Trabajo.php:10
2014-07-04 19:25:08 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$per_codigo ~ APPPATH\classes\Controller\Trabajo.php [ 14 ] in C:\Ampps\www\sav\application\classes\Controller\Trabajo.php:14
2014-07-04 19:25:08 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Trabajo.php(14): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 14, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Trabajo->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Trabajo))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Trabajo.php:14
2014-07-04 19:26:18 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$usu_usuario ~ APPPATH\classes\Controller\Matricula.php [ 37 ] in C:\Ampps\www\sav\application\classes\Controller\Matricula.php:37
2014-07-04 19:26:18 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Matricula.php(37): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 37, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Matricula->action_alumnos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Matricula))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Matricula.php:37
2014-07-04 19:26:22 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$usu_usuario ~ APPPATH\classes\Controller\Matricula.php [ 37 ] in C:\Ampps\www\sav\application\classes\Controller\Matricula.php:37
2014-07-04 19:26:22 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Matricula.php(37): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 37, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Matricula->action_alumnos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Matricula))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Matricula.php:37
2014-07-04 19:27:55 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$usu_usuario ~ APPPATH\classes\Controller\Trabajo.php [ 53 ] in C:\Ampps\www\sav\application\classes\Controller\Trabajo.php:53
2014-07-04 19:27:55 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Trabajo.php(53): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 53, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Trabajo->action_new()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Trabajo))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Trabajo.php:53
2014-07-04 20:21:30 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$usu_usuario ~ APPPATH\classes\Controller\Curso.php [ 22 ] in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 20:21:30 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Curso.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 22, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getTipos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 20:22:00 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$usu_usuario ~ APPPATH\classes\Controller\Curso.php [ 22 ] in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 20:22:00 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Curso.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 22, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getTipos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 20:49:08 --- ERROR: Complete todos los campos in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:12
2014-07-04 20:49:43 --- ERROR: 123 Contraseña inválida in C:\Ampps\www\sav\application\classes\Acceso\Usuario.php:24
2014-07-04 20:56:25 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$usu_usuario ~ APPPATH\classes\Controller\Curso.php [ 7 ] in C:\Ampps\www\sav\application\classes\Controller\Curso.php:7
2014-07-04 20:56:25 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Curso.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 7, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Curso.php:7
2014-07-04 21:03:25 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$usu_usuario ~ APPPATH\classes\Controller\Curso.php [ 22 ] in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 21:03:25 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Curso.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 22, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getTipos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 21:03:29 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$usu_usuario ~ APPPATH\classes\Controller\Curso.php [ 22 ] in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22
2014-07-04 21:03:29 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Controller\Curso.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Ampps\www\sa...', 22, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Curso->action_getTipos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curso))
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Ampps\www\sav\application\classes\Controller\Curso.php:22