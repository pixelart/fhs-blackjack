<?php

declare(strict_types = 1);

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlackJackController extends Controller
{
    /**
     * @Route("/")
     */
    public function gameAction()
    {
        return $this->render('blackjack/game.html.twig');
    }
}
