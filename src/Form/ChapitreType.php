<?php

namespace App\Form;

use App\Entity\Chapitre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ChapitreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('creationdate')
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Text' => 0,
                    'Quizz' => 1,
                    'PDF' => 2,
                    'Image' => 3,
                    'Video' => 4,
                ]
                ,'data' => $options['data']->getType(), //sets the default selected item.
            ])
            //->add('courseid') //dont show course id
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Chapitre::class,
        ]);
    }
}
