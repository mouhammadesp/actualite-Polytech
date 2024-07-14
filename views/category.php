
<div class="articles-grid">
    <?php if (isset($articles) && !empty($articles)): ?>
        <?php foreach ($articles as $article): ?>
            <div class="article-box">
                <h2><?php echo htmlspecialchars($article['titre']); ?></h2>
                <p><?php echo htmlspecialchars(substr($article['contenu'], 0, 100)); ?>...</p>
                <a href="index.php?action=article&id=<?php echo $article['id']; ?>">Lire la suite</a>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Aucun article trouvé pour cette catégorie.</p>
    <?php endif; ?>
</div>
