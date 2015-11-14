<?php
/**
 * @link PHP Stack Framework
 * @author Samitha Hewawasam(underscore) <samithahewawasam@gmail.com>
 * @since 2015-11-13
 * @version 1.0
 */
require_once __DIR__.'/../Application/Bootstrap.php';

$model = new Stack\Application\Models\Model();

$controller = new Controller($model);

$view = new View($model);

echo $view->output();

?>
