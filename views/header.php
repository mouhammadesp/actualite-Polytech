<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Actualités Polytechniciennes</title>
    <link rel="stylesheet" href="public/css/styles.css">
</head>
<body>
    <header>
        <div class="header-content">
            <img src="public/img/esp.jpeg" alt="Logo de l'école" class="logo">
            <h1>Bienvenue sur <span>ACTUALITÉS POLYTECHNICIENNES</span></h1>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="index.php" class="active">Accueil</a></li>
            <?php if (isset($categories) && !empty($categories)): ?>
                <?php foreach ($categories as $category): ?>
                    <li><a href="index.php?action=category&id=<?php echo $category['id']; ?>"><?php echo htmlspecialchars($category['libelle']); ?></a></li>
                <?php endforeach; ?>
            <?php else: ?>
                <li>Aucune catégorie trouvée</li>
            <?php endif; ?>
        </ul>
    </nav>
    <main>
