

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Article - Actualités Polytechniciennes</title>
    <link rel="stylesheet" href="public/css/styles.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="article-content">
        <h1><?php echo htmlspecialchars($article['titre']); ?></h1>
        <p><?php echo htmlspecialchars($article['contenu']); ?></p>
        <p>Date de création : <?php echo htmlspecialchars($article['dateCreation']); ?></p>
        <p>Date de modification : <?php echo htmlspecialchars($article['dateModification']); ?></p>
        
        <!-- Affichage de la catégorie -->
        <h2>Catégorie : <?php echo htmlspecialchars($category['libelle']); ?></h2>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
