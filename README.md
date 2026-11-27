# Tom Troc

Site de partage et d'échange de livres (projet P6 - développeur web PHP).

## Prérequis
- PHP 8.1 ou supérieur
- MySQL ou MariaDB

## Installation

1. Créer la base de données :
   ```bash
   mysql -u root -p < sql/schema.sql
   ```
2. Copier le fichier de configuration et renseigner ses identifiants :
   ```bash
   cp config/database.example.php config/database.php
   ```
3. Lancer le serveur de développement depuis la racine du projet :
   ```bash
   php -S localhost:8000 -t public
   ```
4. Ouvrir `http://localhost:8000` dans le navigateur.

## Structure
- `public/` : point d'entrée (`index.php`), CSS et images
- `src/Core/` : routeur, vues, connexion BDD
- `src/Controller/` : contrôleurs
- `src/Model/` : entités et managers (à venir)
- `views/` : pages et layout commun (header, footer)
- `sql/` : schéma de la base de données
- `config/` : configuration (identifiants non versionnés)

## Routes
Les pages sont appelées par le paramètre `route` : `?route=accueil`. Une route inconnue renvoie une page 404.
