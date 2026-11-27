<?php

declare(strict_types=1);

namespace App\Core;

use App\Controller\AccueilController;

/**
 * Routeur simple : associe le paramètre "route" de l'URL à un contrôleur.
 */
class Router
{
    /** @var array<string, array{0: class-string, 1: string}> */
    private array $routes = [
        'accueil' => [AccueilController::class, 'index'],
    ];

    public function dispatch(string $route): void
    {
        if (!array_key_exists($route, $this->routes)) {
            $this->notFound();
            return;
        }

        [$controllerClass, $method] = $this->routes[$route];
        $controller = new $controllerClass();
        $controller->$method();
    }

    private function notFound(): void
    {
        http_response_code(404);
        View::render('errors/404', ['titre' => 'Page introuvable']);
    }
}
