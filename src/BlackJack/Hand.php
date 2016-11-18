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
            $value = $card->getValue();
            switch($value) {
                case 'A':
                    $value = 11;
                    break;
                case 'J':
                case 'Q':
                case 'K':
                    $value = 10;
                    break;
                default:
                    $value = (int) $value;
            }

            $sum += $value;
        }

        return $sum;
    }
}
