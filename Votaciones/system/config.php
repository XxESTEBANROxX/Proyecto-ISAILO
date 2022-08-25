<?php

define('URI',$_SERVER['REQUEST_URI']);
define('REQUEST_METHOD', $_SERVER['REQUEST_METHOD']);

define('FOLDER_PATH', '/votaciones');
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
define('PATH_CONTROLLERS', 'app/controllers/');
define('PATH_VIEWS', FOLDER_PATH . '/app/views/html/');
define('PATH_MODELS', ROOT . FOLDER_PATH . '/app/models/');

define('CORE','system/core/');
define('DEFAULT_CONTROLLER', 'Login');

define('DATABASE_SERVER','mysql');
define('HOST','localhost');
define('CHARSET','utf8');
define('DATABASE_NAME','votaciones');
define('USER','root');
define('PASS','');

