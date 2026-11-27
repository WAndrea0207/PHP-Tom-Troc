<?php

declare(strict_types=1);

namespace App\Core;

/**
 * Affiche une vue entourée du layout commun (header + footer),
 * pour éviter de dupliquer ces éléments sur chaque page.
 */
class View
{
    /**
     * @param array<string, mixed> $data
     */
    public static function render(string $view, array $data = []): void
    {
        $viewsDir = __DIR__ . '/../../views/';
        extract($data, EXTR_SKIP);

        require $viewsDir . 'layout/header.php';
        require $viewsDir . $view . '.php';
        require $viewsDir . 'layout/footer.php';
    }
}
