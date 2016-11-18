<?php

declare(strict_types = 1);

namespace BlackJack;

class Card
{
    /**
     * @var string
     */
    private $symbol;

    /**
     * @var string
     */
    private $value;

    public function __construct(string $symbol, string $value)
    {
        if (!in_array(
            $symbol,
            ['clubs', 'spades', 'hearts', 'diamonds'],
            true
        )) {
            throw new \DomainException('Wrong symbol');
        }

        if (!in_array(
            $value,
            ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'],
            true
        )) {
            throw new \DomainException('Wrong value');
        }

        $this->symbol = $symbol;
        $this->value = $value;
    }

    public function getSymbol(): string
    {
        return $this->symbol;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
