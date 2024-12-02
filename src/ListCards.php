<?php

namespace Quochuy\Poo;

class ListCards
{
    private  $listCards;

    public function __construct(array $listCards)
    {
        $this->listCards = $listCards;
    }

    public function printCards()
    {
        $info = 1;
        foreach ($this->listCards as $card) {
            echo "Infos sur la carte n°" . $info . ":" . PHP_EOL;
            echo "Question : " . $card->getQuestion() . PHP_EOL; // Affiche la question 
            echo "Réponse : " . $card->getAnswer() . PHP_EOL; // Affiche la réponse
            $info++;
        }
    }
}
