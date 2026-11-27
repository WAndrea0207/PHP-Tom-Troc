<?php

declare(strict_types=1);

namespace App\Controller;

use App\Core\View;

class AccueilController
{
    public function index(): void
    {
        View::render('accueil', [
            'titre' => 'Accueil',
        ]);
    }
}
