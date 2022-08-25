<?php
require 'system/config.php';
require CORE.'autoload.php';

$router = new Router();
$controller = $router->getController();
$method = $router->getmethod();
$params = $router->getParam();
                                   
require_once PATH_CONTROLLERS . "{$controller}/{$controller}Controller.php";
                                       
$controller .="Controller";
$controller_obj = new $controller();
$controller_obj->$method($params);

?>            