<?php defined('SYSPATH') OR die('No direct script access.'); ?>

<<<<<<< HEAD
2014-06-29 14:30:16 --- CRITICAL: Database_Exception [ 1146 ]: Table 'sav.usuario' doesn't exist [ SHOW FULL COLUMNS FROM `usuario` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php:359
2014-06-29 14:30:16 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
=======
2014-06-29 11:16:36 --- CRITICAL: Database_Exception [ 1146 ]: Table 'sav.usuario' doesn't exist [ SHOW FULL COLUMNS FROM `usuario` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php:359
2014-06-29 11:16:36 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
>>>>>>> 64829a5cda5fa3f28ee3c6e43e724abd6a38dc5d
#1 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('usuario')
#2 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\Ampps\www\sav\application\classes\Auth\Usuario.php(30): Kohana_ORM::factory('Auth_Usuario')
#7 C:\Ampps\www\sav\application\classes\Controller\Sav.php(19): Auth_Usuario::get_usuario(NULL)
#8 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(69): Controller_Sav->before()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panel))
#11 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#14 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php:359
<<<<<<< HEAD
2014-06-29 14:30:17 --- CRITICAL: Database_Exception [ 1146 ]: Table 'sav.usuario' doesn't exist [ SHOW FULL COLUMNS FROM `usuario` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php:359
2014-06-29 14:30:17 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
=======
2014-06-29 11:16:36 --- CRITICAL: Database_Exception [ 1146 ]: Table 'sav.usuario' doesn't exist [ SHOW FULL COLUMNS FROM `usuario` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php:359
2014-06-29 11:16:36 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
>>>>>>> 64829a5cda5fa3f28ee3c6e43e724abd6a38dc5d
#1 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('usuario')
#2 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\Ampps\www\sav\application\classes\Auth\Usuario.php(30): Kohana_ORM::factory('Auth_Usuario')
#7 C:\Ampps\www\sav\application\classes\Controller\Sav.php(19): Auth_Usuario::get_usuario(NULL)
#8 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(69): Controller_Sav->before()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panel))
#11 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#14 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php:359
<<<<<<< HEAD
2014-06-29 16:12:15 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '07-tew' for key 'slug_UNIQUE' [ INSERT INTO `trabajo` (`cgt_codigo`, `tra_nombre`, `tra_fecha_limite`, `tra_cantidad_alum`, `tab_codigo`, `tra_slug`, `tra_codigo`, `tra_fecha_registro`) VALUES ('07', 'tew', '20140630', 1, '15', '07-tew', 28, '20140629161215') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-06-29 16:12:15 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `tr...', false, Array)
#1 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\Ampps\www\sav\application\classes\Controller\Trabajo.php(45): Kohana_ORM->save()
#4 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Trabajo->action_new()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Trabajo))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-06-29 16:19:33 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '05-documento-de-diseño' for key 'slug_UNIQUE' [ INSERT INTO `trabajo` (`cgt_codigo`, `tra_nombre`, `tra_fecha_limite`, `tra_cantidad_alum`, `tab_codigo`, `tra_slug`, `tra_codigo`, `tra_fecha_registro`) VALUES ('05', 'Documento de diseño', '20140629', 1, '15', '05-documento-de-diseño', 29, '20140629161933') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-06-29 16:19:33 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `tr...', false, Array)
#1 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\Ampps\www\sav\application\classes\Controller\Trabajo.php(45): Kohana_ORM->save()
#4 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Trabajo->action_new()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Trabajo))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-06-29 16:19:57 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '05-documento-de-diseño' for key 'slug_UNIQUE' [ INSERT INTO `trabajo` (`cgt_codigo`, `tra_nombre`, `tra_fecha_limite`, `tra_cantidad_alum`, `tab_codigo`, `tra_slug`, `tra_codigo`, `tra_fecha_registro`) VALUES ('05', 'Documento de diseño', '20140702', 1, '15', '05-documento-de-diseño', 29, '20140629161957') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-06-29 16:19:57 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `tr...', false, Array)
#1 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\Ampps\www\sav\application\classes\Controller\Trabajo.php(45): Kohana_ORM->save()
#4 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Trabajo->action_new()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Trabajo))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-06-29 16:28:27 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '05-documento-de-diseño' for key 'slug_UNIQUE' [ INSERT INTO `trabajo` (`cgt_codigo`, `tra_nombre`, `tra_fecha_limite`, `tra_cantidad_alum`, `tab_codigo`, `tra_slug`, `tra_codigo`, `tra_fecha_registro`) VALUES ('05', 'Documento de diseño', '20140702', '5', '16', '05-documento-de-diseño', 29, '20140629162827') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-06-29 16:28:27 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `tr...', false, Array)
#1 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\Ampps\www\sav\application\classes\Controller\Trabajo.php(45): Kohana_ORM->save()
#4 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Trabajo->action_new()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Trabajo))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-06-29 16:28:36 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '05-documento-de-diseño' for key 'slug_UNIQUE' [ INSERT INTO `trabajo` (`cgt_codigo`, `tra_nombre`, `tra_fecha_limite`, `tra_cantidad_alum`, `tab_codigo`, `tra_slug`, `tra_codigo`, `tra_fecha_registro`) VALUES ('05', 'Documento de diseño', '20140702', '5', '16', '05-documento-de-diseño', 29, '20140629162836') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-06-29 16:28:36 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `tr...', false, Array)
#1 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\Ampps\www\sav\application\classes\Controller\Trabajo.php(45): Kohana_ORM->save()
#4 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Trabajo->action_new()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Trabajo))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-06-29 18:03:24 --- CRITICAL: Database_Exception [ 1146 ]: Table 'sav.usuario' doesn't exist [ SHOW FULL COLUMNS FROM `usuario` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php:359
2014-06-29 18:03:24 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
=======
2014-06-29 11:27:37 --- CRITICAL: ErrorException [ 2 ]: filesize() [function.filesize]: stat failed for g7xrnoiogg.png ~ APPPATH\classes\Util.php [ 25 ] in file:line
2014-06-29 11:27:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'filesize() [<a ...', 'C:\Ampps\www\sa...', 25, Array)
#1 C:\Ampps\www\sav\application\classes\Util.php(25): filesize('g7xrnoiogg.png')
#2 C:\Ampps\www\sav\application\views\archivo\descarga.php(1): Util::download_file('g7xrnoiogg.png')
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
#13 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Archivo))
#14 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#17 {main} in file:line
2014-06-29 15:20:56 --- CRITICAL: Database_Exception [ 1146 ]: Table 'sav.usuario' doesn't exist [ SHOW FULL COLUMNS FROM `usuario` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php:359
2014-06-29 15:20:56 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
>>>>>>> 64829a5cda5fa3f28ee3c6e43e724abd6a38dc5d
#1 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('usuario')
#2 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\Ampps\www\sav\application\classes\Auth\Usuario.php(30): Kohana_ORM::factory('Auth_Usuario')
<<<<<<< HEAD
#7 C:\Ampps\www\sav\application\classes\Controller\Sav.php(19): Auth_Usuario::get_usuario('abcde')
=======
#7 C:\Ampps\www\sav\application\classes\Controller\Sav.php(19): Auth_Usuario::get_usuario('fcs27')
>>>>>>> 64829a5cda5fa3f28ee3c6e43e724abd6a38dc5d
#8 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(69): Controller_Sav->before()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panel))
#11 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
<<<<<<< HEAD
#14 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php:359
2014-06-29 21:07:46 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Trabajo.php [ 39 ] in C:\Ampps\www\sav\application\classes\Model\Trabajo.php:39
2014-06-29 21:07:46 --- DEBUG: #0 C:\Ampps\www\sav\application\classes\Model\Trabajo.php(39): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\Ampps\www\sa...', 39, Array)
#1 C:\Ampps\www\sav\application\classes\Controller\Archivo.php(51): Model_Trabajo::formaTrabajo('100')
#2 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Archivo->action_new()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Archivo))
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#8 {main} in C:\Ampps\www\sav\application\classes\Model\Trabajo.php:39
=======
#14 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php:359
>>>>>>> 64829a5cda5fa3f28ee3c6e43e724abd6a38dc5d
