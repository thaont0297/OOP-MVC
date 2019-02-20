<?php
//Set root path
$rootPath = dirname(__FILE__); // thu muc goc
define('ROOT_PATH', $rootPath); // đặt hằng số
include ROOT_PATH . DIRECTORY_SEPARATOR . 'config.php'; // include file config.php
define('CONTROLLER_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR); //C

define('MODEL_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR); // M

define('VIEW_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR); // V

define('LIBRARY_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'libraries' . DIRECTORY_SEPARATOR); // thuvien

define('PUBLIC_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR);
//Dispatch
// round trong mvc
// file controller
$controller = isset($_GET['c']) ? $_GET['c'] : 'index';
// ham trong controller
$method = (isset($_GET['m']) && $_GET['m'] != '') ? $_GET['m'] : 'index';
$controllerName = @ucfirst($controller) . 'Controller'; // viet hoa chu dau tien
$controllerFile = CONTROLLER_PATH . $controllerName . '.php';
//echo ($controllerFile);

if (file_exists($controllerFile)) {	
	// goi file controller
	include $controllerFile;
	// khoi tao class tuong ung
	$c = new $controllerName();		
	$c->$method();
}
?>