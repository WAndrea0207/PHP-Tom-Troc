<?php

declare(strict_types=1);

// Point d'entrée unique : toutes les pages passent par ce fichier.
spl_autoload_register(static function (string $class): void {
    $prefix = 'App\\';
    if (strncmp($class, $prefix, strlen($prefix)) !== 0) {
        return;
    }
    $file = __DIR__ . '/../src/' . str_replace('\\', '/', substr($class, strlen($prefix))) . '.php';
    if (is_file($file)) {
        require $file;
    }
});

use App\Core\Router;

$router = new Router();
$router->dispatch($_GET['route'] ?? 'accueil');
