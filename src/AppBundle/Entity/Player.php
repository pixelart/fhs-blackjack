<?php

declare(strict_types = 1);

namespace AppBundle\Entity;

use BlackJack\Card;
use BlackJack\Hand;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Player
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @var int
     */
    private $id;
    
    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    private $chips;

    /**
     * @var Hand
     */
    private $currentHand;

    public function __construct(string $name, int $chips)
    {
        $this->name = $name;
        $this->chips = $chips;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getChips(): int
    {
        return $this->chips;
    }

    public function addCard(Card $card)
    {
        if (null === $this->currentHand) {
            $this->currentHand = new Hand();
        }

        $this->currentHand->addCard($card);
    }
}
