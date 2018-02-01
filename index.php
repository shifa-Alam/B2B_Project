<?php

// Required Variables
define( 'AAP', dirname(__FILE__) ); // AAP = Appliation Absolute Path
define( 'AAU', dirname($_SERVER['PHP_SELF']) ); // AAU = Appliation Absolute URL

require_once ('config' . DIRECTORY_SEPARATOR . 'config.php');
require_once ('app' . $DS . 'core' . $DS . 'core.php');


require_once ('app' . $DS . 'model' . $DS . 'model.php');
require_once($model_path);

require_once ('app' . $DS . 'controller' . $DS . 'controller.php');
require_once($controller_path);

require_once ('app' . $DS . 'view' . $DS . 'view.php');

require_once('app' . $DS . 'view' . $DS . 'template' . $DS . $APP_LAYOUT . $DS . 'layout.php');


//print_log();