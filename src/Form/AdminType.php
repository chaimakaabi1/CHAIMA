<?php

namespace App\Form;

use App\Entity\Admin;
use App\Form\DataTransformer\FileToUploadedFileTransformer;
use App\Validator\Constraints\UniqueUserDetails;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Exception\TransformationFailedException;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\HttpFoundation\File\File;



class AdminType extends AbstractType
{
    private $fileTransformer;
    public function __construct(FileToUploadedFileTransformer $fileTransformer)
    {
        $this->fileTransformer = $fileTransformer;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username', TextType::class, [
                'constraints' => [
                    new UniqueEntity([
                        'fields' => 'username',
                        'message' => 'This username is already in use.',
                        'groups' => 'registration',
                    ]),

                ],
            ])
            ->add('password')
            ->add('email', TextType::class, [
                'constraints' => [
                    new UniqueEntity([
                        'fields' => 'email',
                        'message' => 'This email is already in use.',
                        'groups' => 'registration',
                    ]),

                ],
            ])
            ->add('firstName')
            ->add('lastName')
            ->add('dateOfBirth', DateType::class, [
                'widget' => 'single_text',
                'html5' => true,
            ])
            ->add('gender', ChoiceType::class, [
                'choices' => [
                    'Male' => 'male',
                    'Female' => 'female',
                ],
                'expanded' => true, // Render as radio buttons
            ])
            ->add('address')
            ->add('phoneNumber', TextType::class, [
                'constraints' => [
                    new UniqueEntity([
                        'fields' => 'phoneNumber',
                        'message' => 'This phone number is already in use.',
                        'groups' => 'registration',
                    ]),

                ],
            ])
            ->add('profilePicture', FileType::class, [
                'required' => false, // Allow blank values when editing
                'data' => $options['current_profile_picture'], // Set the default value
            ]);

        $builder->get('profilePicture')->addViewTransformer($this->fileTransformer);



    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Admin::class,
            'current_profile_picture' => 'uploads/', // Add a custom option to pass the current profile picture path
        ]);
    }
}
