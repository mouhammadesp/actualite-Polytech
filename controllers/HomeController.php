<?php
require_once 'models/Article.php';
require_once 'models/Category.php';

class HomeController {
    private $articleModel;
    private $categoryModel;

    public function __construct($pdo) {
        $this->articleModel = new Article($pdo);
        $this->categoryModel = new Category($pdo);
    }

    public function home() {
        $categories = $this->categoryModel->getAllCategories();
        $articles = $this->articleModel->getAllArticles();
        include 'views/header.php';
        include 'views/home.php';
        include 'views/footer.php';
    }
}
?>
