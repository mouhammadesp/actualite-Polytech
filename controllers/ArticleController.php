<?php
require_once 'models/Article.php';

class ArticleController {
    private $articleModel;

    public function __construct($pdo) {
        $this->articleModel = new Article($pdo);
    }

    public function article($articleId) {
        $article = $this->articleModel->getArticleById($articleId);
        include 'views/header.php';
        include 'views/article.php';
        include 'views/footer.php';
    }
}
?>
