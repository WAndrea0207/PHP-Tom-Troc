-- Base de données Tom Troc
CREATE DATABASE IF NOT EXISTS tom_troc
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE tom_troc;

CREATE TABLE utilisateur (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    pseudo VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    mot_de_passe VARCHAR(255) NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE livre (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    auteur VARCHAR(255) NOT NULL,
    description TEXT NULL,
    disponible TINYINT(1) NOT NULL DEFAULT 1,
    utilisateur_id INT UNSIGNED NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_livre_utilisateur
        FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE message (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    contenu TEXT NOT NULL,
    envoye_le DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    expediteur_id INT UNSIGNED NOT NULL,
    destinataire_id INT UNSIGNED NOT NULL,
    CONSTRAINT fk_message_expediteur
        FOREIGN KEY (expediteur_id) REFERENCES utilisateur (id)
        ON DELETE CASCADE,
    CONSTRAINT fk_message_destinataire
        FOREIGN KEY (destinataire_id) REFERENCES utilisateur (id)
        ON DELETE CASCADE
) ENGINE=InnoDB;
