<?php
require_once 'config/config.php';
require_once 'controllers/HomeController.php';
require_once 'controllers/CategoryController.php';
require_once 'controllers/ArticleController.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'home';
$id = isset($_GET['id']) ? $_GET['id'] : null;

switch ($action) {
    case 'home':
        $controller = new HomeController($pdo);
        $controller->home();
        break;
    case 'category':
        $controller = new CategoryController($pdo);
        $controller->category($id);
        break;
    case 'article':
        $controller = new ArticleController($pdo);
        $controller->article($id);
        break;
    default:
        $controller = new HomeController($pdo);
        $controller->home();
        break;
}
?>
