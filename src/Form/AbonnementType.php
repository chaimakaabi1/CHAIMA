<?php

namespace App\Form;

use App\Entity\Abonnement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType; // Corrected import
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AbonnementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('user', TextType::class, [
                'label' => 'User',
            ])
            ->add('cours', TextType::class, [
                'label' => 'Cours',
            ])
            ->add('typeAbonnement', ChoiceType::class, [
                'label' => 'Type Abonnement',
                'choices' => [
                    'Monthly' => 'monthly',
                    'Yearly' => 'yearly',
                ],
            ])
            ->add('price', MoneyType::class)
            ->add('dateDebut', DateType::class, [
                'label' => 'Date Debut',
                'widget' => 'single_text',
                // Add more options if needed
            ])
            ->add('dateExpiration', DateType::class, [
                'label' => 'Date Expiration',
                'widget' => 'single_text',
                // Add more options if needed
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Abonnement::class,
        ]);
    }
}
