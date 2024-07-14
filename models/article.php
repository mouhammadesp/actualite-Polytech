<?php
class Article {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllArticles() {
        $stmt = $this->pdo->prepare('SELECT * FROM Article ORDER BY dateCreation DESC');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getArticlesByCategory($categoryId) {
        $stmt = $this->pdo->prepare('SELECT * FROM Article WHERE categorie = :categoryId ORDER BY dateCreation DESC');
        $stmt->bindParam(':categoryId', $categoryId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getArticleById($articleId) {
        $stmt = $this->pdo->prepare('SELECT * FROM Article WHERE id = :articleId');
        $stmt->bindParam(':articleId', $articleId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
