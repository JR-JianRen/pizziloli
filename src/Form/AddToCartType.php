<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddToCartType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('amount', IntegerType::class,
                ['attr' => array(
                    'label' => 'Aantal'
                )])
            ->add('size',
                ChoiceType::class,
                [
                    'choices' => [
                        'Medium (25 cm)' => 'medium',
                        'Large (35 cm)' => 'large',
                        'Calzone' => 'calzone',
                    ],
                    'expanded' => true
                ])
            ->add('toevoegen', SubmitType::class,
                [
                'attr' =>array(
                    'class' => 'bg-light text-dark',
                )
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {

    }
}
