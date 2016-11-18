<?php

declare(strict_types = 1);

namespace AppBundle\Form\Type;

use AppBundle\Entity\Player;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PlayerType extends AbstractType
{
    public function buildForm(
        FormBuilderInterface $builder,
        array $options
    ) {
        $builder
            ->add('name')
            ->add('chips')
            ->add('submit', SubmitType::class, [
                'label' => 'player.add',
            ])
        ;
    }

    public function configureOptions(
        OptionsResolver $resolver
    ) {
        $resolver->setDefaults([
            'data_class' => Player::class,
            'translation_domain' => 'blackjack',
        ]);
    }
}
