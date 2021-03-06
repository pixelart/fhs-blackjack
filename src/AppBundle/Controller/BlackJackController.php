<?php

declare(strict_types = 1);

namespace AppBundle\Controller;

use AppBundle\Entity\Game;
use AppBundle\Entity\Player;
use AppBundle\Form\Type\PlayerType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlackJackController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('blackjack/overview.html.twig');
    }

    /**
     * @Route("/game/new", name="game_new")
     */
    public function newGameAction()
    {
        $em = $this->getDoctrine()->getManager();

        $game = new Game();
        $em->persist($game);
        $em->flush();

        return $this->redirectToRoute('game', [
            'id' => $game->getId(),
        ]);
    }

    /**
     * @Route("/game/{id}", requirements={"id" = "\d+"}, name="game")
     */
    public function gameAction(Game $game)
    {
        $playerForm = $this->createForm(PlayerType::class, new Player());

        return $this->render('blackjack/game.html.twig', [
            'game' => $game,
            'player_form' => $playerForm->createView(),
        ]);
    }
}
