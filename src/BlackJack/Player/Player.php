<?php

declare(strict_types = 1);

namespace BlackJack\Player;

use BlackJack\Card;
use BlackJack\Hand;

class Player
{
    /**
     * @var int
     */
    private $chips;

    /**
     * @var Hand
     */
    private $currentHand;

    public function __construct(int $chips)
    {
        $this->chips = $chips;
    }

    public function addCard(Card $card)
    {
        if (null === $this->currentHand) {
            $this->currentHand = new Hand();
        }

        $this->currentHand->addCard($card);
    }
}
