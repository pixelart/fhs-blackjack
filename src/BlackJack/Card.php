<?php

declare(strict_types = 1);

namespace BlackJack;

class Card
{
    /**
     * @var int
     */
    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}
