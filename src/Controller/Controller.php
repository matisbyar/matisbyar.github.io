<?php

class Controller
{

    /**
     * Methode qui permet d'afficher une vue
     * @param string $cheminVue
     * @param array $parametres
     * @return void
     */
    protected static function afficheVue(string $cheminVue, array $parametres = []): void
    {
        extract($parametres); // Crée des variables à partir du tableau $parametres
        require __DIR__ . "/../view/$cheminVue"; // Charge la vue
    }

    /**
     * Methode qui permet d'afficher une vue avec un message flash
     * @param string $chemin
     * @return void
     */
    protected static function redirige(string $chemin): void
    {
        header("Location: $chemin");
        exit();
    }


    public static function home(): void
    {

    }
}