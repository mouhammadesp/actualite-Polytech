<?php
class Article {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllArticles() {
        $stmt = $this->pdo->query("SELECT * FROM Article ORDER BY dateCreation DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getArticleById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM Article WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getArticlesByCategory($categoryId) {
        $stmt = $this->pdo->prepare("SELECT * FROM Article WHERE categorie = :categoryId ORDER BY dateCreation DESC");
        $stmt->execute(['categoryId' => $categoryId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
