<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($titre ?? 'Tom Troc', ENT_QUOTES, 'UTF-8') ?> | Tom Troc</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,300;0,400;0,600;1,400&family=Playfair+Display:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="entete">
    <a href="?route=accueil">
        <img class="logo" src="img/logo.svg" alt="Tom Troc">
    </a>
    <button class="burger" type="button" aria-label="Ouvrir le menu">
        <span></span>
        <span></span>
        <span></span>
    </button>
</header>
<main>
