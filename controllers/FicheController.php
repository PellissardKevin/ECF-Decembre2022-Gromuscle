<?php
namespace controllers;

use controllers\base\WebController;
use utils\Template;
use models\ClientsModele;

class FicheController extends WebController
{
    protected ClientsModele $clientModele;

    function __construct()
    {
        $this->clientModele = new ClientsModele();
    }

    public function fiche($id="")
    {
        $clientModele = new ClientsModele();
        $leClient = $clientModele->getByClientId($id);
        $_GET['id'] = $id;
        return Template::render("views/liste/ficheClient.php", ["leClient" => $leClient]);
    }
}