<?php

namespace routes;

use controllers\Account;
use routes\base\Route;
use controllers\Main;
use controllers\ClientController;
use controllers\FicheController;
use utils\SessionHelpers;

class Web
{
    function __construct()
    {

        $main = new Main();
        $account = new Account();
        $clientControleur = new ClientController();
        $ficheControleur = new FicheController();
        
        Route::Add('/', [$main, 'home']);
        Route::Add('/about', [$main, 'about']);
        Route::Add('/login', [$account, 'login']);
        Route::Add('/register', [$account, 'register']);

        if (SessionHelpers::isLogin()) {
            Route::Add('/page/{id}', [$account, 'page']);
            Route::Add('/logout', [$account, 'logout']);
            Route::Add('/client', [$clientControleur, 'liste']);
            Route::Add('/ficheClient/{id}', [$ficheControleur, 'fiche']);
            Route::Add('/client/active', [$clientControleur, 'active']);
            Route::Add('/client/desactive', [$clientControleur, 'desactive']);
            Route::Add('/formulaire/client', [$clientControleur, 'formClient']);
            Route::Add('/formulaire/adresse/{id}', [$ficheControleur, 'formAdresse']);
        }
    }
}

