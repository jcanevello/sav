<?php defined('SYSPATH') OR die('No direct script access.'); ?>

<<<<<<< HEAD
2014-06-27 01:13:28 --- CRITICAL: ErrorException [ 1 ]: Interface 'Auth' not found ~ APPPATH\classes\Auth\Usuario.php [ 3 ] in file:line
2014-06-27 01:13:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-27 01:13:46 --- CRITICAL: ErrorException [ 1 ]: Interface 'Auth' not found ~ APPPATH\classes\Auth\Usuario.php [ 3 ] in file:line
2014-06-27 01:13:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-27 01:13:49 --- CRITICAL: ErrorException [ 1 ]: Interface 'Auth' not found ~ APPPATH\classes\Auth\Usuario.php [ 3 ] in file:line
2014-06-27 01:13:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-27 01:13:50 --- CRITICAL: ErrorException [ 1 ]: Interface 'Auth' not found ~ APPPATH\classes\Auth\Usuario.php [ 3 ] in file:line
2014-06-27 01:13:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-27 01:14:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CLASS, expecting T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH\classes\Auth\Usuario.php [ 3 ] in file:line
2014-06-27 01:14:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-27 01:14:55 --- CRITICAL: Database_Exception [ 1146 ]: Table 'sav.usuario' doesn't exist [ SHOW FULL COLUMNS FROM `usuario` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php:359
2014-06-27 01:14:55 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
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
2014-06-27 02:58:38 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '05-documento-de-sistemas-y-análisis' for key 'slug_UNIQUE' [ INSERT INTO `trabajo` (`cgt_codigo`, `tra_nombre`, `tra_fecha_limite`, `tra_cantidad_alum`, `tab_codigo`, `tra_slug`, `tra_codigo`, `tra_fecha_registro`) VALUES ('05', 'Documento de sistemas y análisis', '20140626', 1, '15', '05-documento-de-sistemas-y-análisis', 16, '20140627025838') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-06-27 02:58:38 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `tr...', false, Array)
#1 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\Ampps\www\sav\application\classes\Controller\Trabajo.php(42): Kohana_ORM->save()
#4 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Trabajo->action_new()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Trabajo))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-06-27 03:14:53 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Auth_Usuario' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-06-27 03:14:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-27 03:15:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Auth_Usuario' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-06-27 03:15:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-27 03:17:11 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Auth_Usuario' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-06-27 03:17:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-27 03:18:04 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Auth_Usuario' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-06-27 03:18:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-27 03:18:04 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Auth_Usuario' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-06-27 03:18:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-27 03:18:08 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Auth_Usuario' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-06-27 03:18:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-27 03:18:11 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Auth_Usuario' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-06-27 03:18:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-27 03:18:11 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Auth_Usuario' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-06-27 03:18:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-27 03:18:16 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Auth_Usuario' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-06-27 03:18:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-27 03:59:43 --- CRITICAL: Database_Exception [ 1046 ]: No database selected ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php:75
2014-06-27 03:59:43 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('')
=======
2014-06-27 12:10:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 21 ] in C:\Ampps\www\sav\application\views\template.php:21
2014-06-27 12:10:46 --- DEBUG: #0 C:\Ampps\www\sav\application\views\template.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Ampps\www\sa...', 21, Array)
#1 C:\Ampps\www\sav\system\classes\Kohana\View.php(61): include('C:\Ampps\www\sa...')
#2 C:\Ampps\www\sav\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Ampps\www\sa...', Array)
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\Ampps\www\sav\application\classes\Controller\Sav.php(39): Kohana_Controller_Template->after()
#5 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(87): Controller_Sav->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Matricula))
#8 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#11 {main} in C:\Ampps\www\sav\application\views\template.php:21
2014-06-27 12:32:37 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Curso as array ~ APPPATH\views\matricula\alumnoporcurso.php [ 28 ] in file:line
2014-06-27 12:32:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-27 12:33:00 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Curso as array ~ APPPATH\views\matricula\alumnoporcurso.php [ 28 ] in file:line
2014-06-27 12:33:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-27 13:05:42 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'curso_grupo.cg_curso' in 'on clause' [ SELECT `matricula`.`usu_usuario` FROM `matricula` JOIN `curso_grupo` ON (`curso_grupo`.`cg_curso` = `matricula`.`cg_curso`) JOIN `cursogrupo_tipo` ON (`cursogrupo_tip`.`cg_curso` = `curso_grupo`.`cg_curso`) WHERE `cursogrupo_tipo`.`cgt_codigo` = '05' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-06-27 13:05:42 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `matricu...', false, Array)
#1 C:\Ampps\www\sav\application\classes\Model\Matricula.php(23): Kohana_Database_Query->execute()
#2 C:\Ampps\www\sav\application\classes\Controller\Matricula.php(49): Model_Matricula::getAlumnos('05')
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Matricula->action_getAlumnos()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Matricula))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-06-27 13:06:43 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'cursogrupo_tip.cg_codigo' in 'on clause' [ SELECT `matricula`.`usu_usuario` FROM `matricula` JOIN `curso_grupo` ON (`curso_grupo`.`cg_codigo` = `matricula`.`cg_codigo`) JOIN `cursogrupo_tipo` ON (`cursogrupo_tip`.`cg_codigo` = `curso_grupo`.`cg_codigo`) WHERE `cursogrupo_tipo`.`cgt_codigo` = '05' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-06-27 13:06:43 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `matricu...', false, Array)
#1 C:\Ampps\www\sav\application\classes\Model\Matricula.php(23): Kohana_Database_Query->execute()
#2 C:\Ampps\www\sav\application\classes\Controller\Matricula.php(49): Model_Matricula::getAlumnos('05')
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Matricula->action_getAlumnos()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Matricula))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-06-27 13:21:45 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''\'jcss08\',\'jcss09\''' at line 1 [ SELECT `auth_usuario`.`usu_usuario` AS `usu_usuario`, `auth_usuario`.`per_codigo` AS `per_codigo`, `auth_usuario`.`usu_contrasena` AS `usu_contrasena`, `auth_usuario`.`usu_nombre` AS `usu_nombre`, `auth_usuario`.`usu_apellido` AS `usu_apellido`, `auth_usuario`.`tab_codigo` AS `tab_codigo`, `auth_usuario`.`usu_fecha_registro` AS `usu_fecha_registro` FROM `usuario` AS `auth_usuario` WHERE `usu_usuario` IN '\'jcss08\',\'jcss09\'' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-06-27 13:21:45 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `auth_us...', 'Model_Auth_Usua...', Array)
#1 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\Ampps\www\sav\application\classes\Auth\Usuario.php(44): Kohana_ORM->find_all()
#4 C:\Ampps\www\sav\application\classes\Controller\Matricula.php(56): Auth_Usuario::getAlumnosData(''jcss08','jcss0...')
#5 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Matricula->action_getAlumnos()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Matricula))
#8 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#11 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-06-27 13:23:36 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''\'jcss08\',\'jcss09\''' at line 1 [ SELECT `auth_usuario`.`usu_usuario` AS `usu_usuario`, `auth_usuario`.`per_codigo` AS `per_codigo`, `auth_usuario`.`usu_contrasena` AS `usu_contrasena`, `auth_usuario`.`usu_nombre` AS `usu_nombre`, `auth_usuario`.`usu_apellido` AS `usu_apellido`, `auth_usuario`.`tab_codigo` AS `tab_codigo`, `auth_usuario`.`usu_fecha_registro` AS `usu_fecha_registro` FROM `usuario` AS `auth_usuario` WHERE `usu_usuario` IN '\'jcss08\',\'jcss09\'' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-06-27 13:23:36 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `auth_us...', 'Model_Auth_Usua...', Array)
#1 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\Ampps\www\sav\application\classes\Auth\Usuario.php(46): Kohana_ORM->find_all()
#4 C:\Ampps\www\sav\application\classes\Controller\Matricula.php(57): Auth_Usuario::getAlumnosData(''jcss08','jcss0...')
#5 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Matricula->action_getAlumnos()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Matricula))
#8 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#11 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-06-27 13:25:25 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''jcss08, jcss09'' at line 1 [ SELECT `auth_usuario`.`usu_usuario` AS `usu_usuario`, `auth_usuario`.`per_codigo` AS `per_codigo`, `auth_usuario`.`usu_contrasena` AS `usu_contrasena`, `auth_usuario`.`usu_nombre` AS `usu_nombre`, `auth_usuario`.`usu_apellido` AS `usu_apellido`, `auth_usuario`.`tab_codigo` AS `tab_codigo`, `auth_usuario`.`usu_fecha_registro` AS `usu_fecha_registro` FROM `usuario` AS `auth_usuario` WHERE `usu_usuario` IN 'jcss08, jcss09' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-06-27 13:25:25 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `auth_us...', 'Model_Auth_Usua...', Array)
#1 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\Ampps\www\sav\application\classes\Auth\Usuario.php(46): Kohana_ORM->find_all()
#4 C:\Ampps\www\sav\application\classes\Controller\Matricula.php(57): Auth_Usuario::getAlumnosData(''jcss08','jcss0...')
#5 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Matricula->action_getAlumnos()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Matricula))
#8 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#11 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-06-27 13:26:23 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''(\'jcss08\', \'jcss09\')'' at line 1 [ SELECT `auth_usuario`.`usu_usuario` AS `usu_usuario`, `auth_usuario`.`per_codigo` AS `per_codigo`, `auth_usuario`.`usu_contrasena` AS `usu_contrasena`, `auth_usuario`.`usu_nombre` AS `usu_nombre`, `auth_usuario`.`usu_apellido` AS `usu_apellido`, `auth_usuario`.`tab_codigo` AS `tab_codigo`, `auth_usuario`.`usu_fecha_registro` AS `usu_fecha_registro` FROM `usuario` AS `auth_usuario` WHERE `usu_usuario` IN '(\'jcss08\', \'jcss09\')' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-06-27 13:26:23 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `auth_us...', 'Model_Auth_Usua...', Array)
#1 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\Ampps\www\sav\application\classes\Auth\Usuario.php(46): Kohana_ORM->find_all()
#4 C:\Ampps\www\sav\application\classes\Controller\Matricula.php(57): Auth_Usuario::getAlumnosData(''jcss08','jcss0...')
#5 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Matricula->action_getAlumnos()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Matricula))
#8 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#11 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-06-27 13:28:12 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''(jcss08, jcss09)'' at line 1 [ SELECT `auth_usuario`.`usu_usuario` AS `usu_usuario`, `auth_usuario`.`per_codigo` AS `per_codigo`, `auth_usuario`.`usu_contrasena` AS `usu_contrasena`, `auth_usuario`.`usu_nombre` AS `usu_nombre`, `auth_usuario`.`usu_apellido` AS `usu_apellido`, `auth_usuario`.`tab_codigo` AS `tab_codigo`, `auth_usuario`.`usu_fecha_registro` AS `usu_fecha_registro` FROM `usuario` AS `auth_usuario` WHERE `usu_usuario` IN '(jcss08, jcss09)' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-06-27 13:28:12 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `auth_us...', 'Model_Auth_Usua...', Array)
#1 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\Ampps\www\sav\application\classes\Auth\Usuario.php(46): Kohana_ORM->find_all()
#4 C:\Ampps\www\sav\application\classes\Controller\Matricula.php(57): Auth_Usuario::getAlumnosData(''jcss08','jcss0...')
#5 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Matricula->action_getAlumnos()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Matricula))
#8 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#11 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-06-27 13:28:53 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''(\'jcss08\',\'jcss09\''' at line 1 [ SELECT `auth_usuario`.`usu_usuario` AS `usu_usuario`, `auth_usuario`.`per_codigo` AS `per_codigo`, `auth_usuario`.`usu_contrasena` AS `usu_contrasena`, `auth_usuario`.`usu_nombre` AS `usu_nombre`, `auth_usuario`.`usu_apellido` AS `usu_apellido`, `auth_usuario`.`tab_codigo` AS `tab_codigo`, `auth_usuario`.`usu_fecha_registro` AS `usu_fecha_registro` FROM `usuario` AS `auth_usuario` WHERE `usu_usuario` IN '(\'jcss08\',\'jcss09\'' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-06-27 13:28:53 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `auth_us...', 'Model_Auth_Usua...', Array)
#1 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\Ampps\www\sav\application\classes\Auth\Usuario.php(46): Kohana_ORM->find_all()
#4 C:\Ampps\www\sav\application\classes\Controller\Matricula.php(57): Auth_Usuario::getAlumnosData(''jcss08','jcss0...')
#5 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Matricula->action_getAlumnos()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Matricula))
#8 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#11 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-06-27 13:28:56 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''(\'jcss08\',\'jcss09\''' at line 1 [ SELECT `auth_usuario`.`usu_usuario` AS `usu_usuario`, `auth_usuario`.`per_codigo` AS `per_codigo`, `auth_usuario`.`usu_contrasena` AS `usu_contrasena`, `auth_usuario`.`usu_nombre` AS `usu_nombre`, `auth_usuario`.`usu_apellido` AS `usu_apellido`, `auth_usuario`.`tab_codigo` AS `tab_codigo`, `auth_usuario`.`usu_fecha_registro` AS `usu_fecha_registro` FROM `usuario` AS `auth_usuario` WHERE `usu_usuario` IN '(\'jcss08\',\'jcss09\'' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-06-27 13:28:56 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `auth_us...', 'Model_Auth_Usua...', Array)
#1 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\Ampps\www\sav\application\classes\Auth\Usuario.php(46): Kohana_ORM->find_all()
#4 C:\Ampps\www\sav\application\classes\Controller\Matricula.php(57): Auth_Usuario::getAlumnosData('''')
#5 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Matricula->action_getAlumnos()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Matricula))
#8 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#11 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-06-27 15:42:09 --- CRITICAL: Database_Exception [ 1046 ]: No database selected ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php:75
2014-06-27 15:42:09 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('')
>>>>>>> 64829a5cda5fa3f28ee3c6e43e724abd6a38dc5d
#1 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('usuario')
#4 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#5 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#6 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 C:\Ampps\www\sav\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 C:\Ampps\www\sav\application\classes\Auth\Usuario.php(30): Kohana_ORM::factory('Auth_Usuario')
#9 C:\Ampps\www\sav\application\classes\Controller\Sav.php(19): Auth_Usuario::get_usuario('fcs27')
#10 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(69): Controller_Sav->before()
#11 [internal function]: Kohana_Controller->execute()
<<<<<<< HEAD
#12 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Trabajo))
=======
#12 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panel))
>>>>>>> 64829a5cda5fa3f28ee3c6e43e724abd6a38dc5d
#13 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#16 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\MySQL.php:75
<<<<<<< HEAD
2014-06-27 04:09:40 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '07-dgdfdgdfgdfg' for key 'slug_UNIQUE' [ INSERT INTO `trabajo` (`cgt_codigo`, `tra_nombre`, `tra_fecha_limite`, `tra_cantidad_alum`, `tab_codigo`, `tra_slug`, `tra_codigo`, `tra_fecha_registro`) VALUES ('07', 'dgdfdgdfgdfg', '20140627', 1, '15', '07-dgdfdgdfgdfg', 25, '20140627040940') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-06-27 04:09:40 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `tr...', false, Array)
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
2014-06-27 04:11:39 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '07-primer-trabajo-de-investigaciónsdffsd' for key 'slug_UNIQUE' [ INSERT INTO `trabajo` (`cgt_codigo`, `tra_nombre`, `tra_fecha_limite`, `tra_cantidad_alum`, `tab_codigo`, `tra_slug`, `tra_codigo`, `tra_fecha_registro`) VALUES ('07', 'Primer trabajo de investigaciónsdffsd', '20140628', 1, '15', '07-primer-trabajo-de-investigaciónsdffsd', 26, '20140627041139') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-06-27 04:11:39 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `tr...', false, Array)
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
=======
2014-06-27 15:55:35 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'trabajo.ra_codigo' in 'field list' [ SELECT `trabajo`.`ra_codigo`, `trabajo`.`tra_nombre`, `curso`.`cur_nombre`, `curso_grupo`.`tab_codigo` AS `tab_codigo_grupo`, `cursogrupo_tipo`.`tab_codigo` AS `tab_codigo_tipo`, `trabajo`.`tra_fecha_limite` FROM `cursogrupo_tipo` JOIN `trabajo` ON (`trabajo`.`cgt_codigo` = `cursogrupo_tipo`.`cgt_codigo`) JOIN `curso_grupo` ON (`curso_grupo`.`cg_codigo` = `cursogrupo_tipo`.`cg_codigo`) JOIN `curso` ON (`curso`.`cur_codigo` = `curso_grupo`.`cur_codigo`) WHERE `usu_usuario` = 'fcs27' AND `trabajo`.`tra_fecha_limite` > '20140627' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
2014-06-27 15:55:35 --- DEBUG: #0 C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `trabajo...', false, Array)
#1 C:\Ampps\www\sav\application\classes\Model\Cursogrupotipo.php(16): Kohana_Database_Query->execute()
#2 C:\Ampps\www\sav\application\classes\Controller\Trabajo.php(8): Model_Cursogrupotipo::trabajosProfesor('fcs27')
#3 C:\Ampps\www\sav\system\classes\Kohana\Controller.php(84): Controller_Trabajo->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Ampps\www\sav\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Trabajo))
#6 C:\Ampps\www\sav\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Ampps\www\sav\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Ampps\www\sav\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Ampps\www\sav\modules\database\classes\Kohana\Database\Query.php:251
>>>>>>> 64829a5cda5fa3f28ee3c6e43e724abd6a38dc5d
