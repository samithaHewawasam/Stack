<?php
/**
 * @link PHP Stack Framework
 * @author Samitha Hewawasam(underscore) <samithahewawasam@gmail.com>
 * @since 2015-11-13
 * @version 1.0
 */

/**
 * @var namespace alais
 */

 use Stack\Application\Models;
 use Stack\Application\Views;
 use Stack\Application\Controllers;

 require_once __DIR__.'/../Application/Bootstrap.php';

 $model = new Models\Model();

 $controller = new Controllers\Controller($model);

 $view = new  Views\View($model);

 echo $view->output();

?>
