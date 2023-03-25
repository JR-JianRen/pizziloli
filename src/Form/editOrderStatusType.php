<?php

namespace App\Form;

use App\Entity\Order;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class editOrderStatusType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('order_status',
                ChoiceType::class,
                [
                    'choices' => [
                        'Bezig' => 'Bezig',
                        'Onderweg' => 'Onderweg',
                        'Bezorgd' => 'Bezorgd',
                    ],
                ])
            ->add('Save', SubmitType::class,
                [
                    'attr' =>array(
                        'class' => 'offset-3 bg-primary text-light fw-bold',
                    )
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Order::class,
        ]);
    }
}
