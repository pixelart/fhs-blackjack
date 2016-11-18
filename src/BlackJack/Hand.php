<?php

declare(strict_types = 1);

namespace BlackJack;

class Hand
{
    /**
     * @var Card[]
     */
    private $cards = [];

    public function addCard(Card $card)
    {
        $this->cards[] = $card;
    }

    public function getValue(): int
    {
        $sum = 0;
        foreach ($this->cards as $card) {
            $sum += $card->getValue();
        }

        return $sum;
    }
}
