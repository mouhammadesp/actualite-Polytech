<?php
require_once 'models/Article.php';
require_once 'models/Category.php';

class CategoryController {
    private $articleModel;
    private $categoryModel;

    public function __construct($pdo) {
        $this->articleModel = new Article($pdo);
        $this->categoryModel = new Category($pdo);
    }

    public function category($categoryId) {
        $category = $this->categoryModel->getCategoryById($categoryId);
        $categories = $this->categoryModel->getAllCategories();
        $articles = $this->articleModel->getArticlesByCategory($categoryId);
        include 'views/header.php';
        include 'views/category.php';
        include 'views/footer.php';
    }
}
?>
