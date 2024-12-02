<?php

require_once 'vendor/autoload.php';

use Quochuy\Poo\Cards;
use Quochuy\Poo\ListCards;

function demanderNombreCartes(): int
{
    do {
        $input = readline('Combien de cartes voulez-vous? ');
        $nombre = filter_var($input, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]);
        if ($nombre === false) {
            echo "Veuillez entrer un nombre positif.\n";
        }
    } while ($nombre === false);
    return $nombre;
}


// Collecte les questions et réponses des cartes, puis les affiche.
function collecterCartes(): void
{
    $nombreDeCartes = demanderNombreCartes();
    $nbCards = [];

    for ($i = 0; $i < $nombreDeCartes; $i++) {
        $question = readline("Entrez la question pour la carte " . ($i + 1) . ": ");
        $answer = readline("Entrez la réponse pour la carte " . ($i + 1) . ": ");
        $nbCards[] = new Cards($question, $answer);
    }
    $listCards = new ListCards($nbCards);
    $listCards->printCards();
}
collecterCartes();
