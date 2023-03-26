<?php

namespace App\Form;

use App\Entity\Order;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrderFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class,
            ['attr' => array(
                'class' => 'w-75',
                'placeholder' => 'Voornaam',
                'label' => 'Naam'
            )])
            ->add('address', TextType::class,
                ['attr' => array(
                    'class' => 'w-75',
                    'placeholder' => 'straatnaam huisnummer, postcode stadnaam',
                )])
//            ->add('order_status')
//            ->add('total_price')
//            ->add('date')
//            ->add('time')
            ->add('Bestellen', SubmitType::class,
                [
                    'attr' =>array(
                        'class' => 'bg-dark text-light px-5 py-2',
                    )
                ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Order::class,
        ]);
    }
}
