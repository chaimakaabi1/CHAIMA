<?php

namespace App\Form;

use App\Entity\Course;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class CourseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('price')
            ->add('image', FileType::class, [
                'label' => 'Course Image',
                'mapped' => true,
                'required' => false,
            ])
            ->add('isActive')
            ->add('courseContent')
            ->add('instructorId')
            ->add('instructorName');

        // Add the data transformer for the "image" field
        $builder->get('image')->addModelTransformer(new class() implements DataTransformerInterface {
            public function transform($value)
            {
                // Transform the File instance to a string (file path)
                return null;
            }

            public function reverseTransform($value)
            {
                // Transform the string (file path) to a File instance
                if ($value instanceof UploadedFile) {
                    return $value;
                }

                // Add your logic to handle the existing file path
                // For example, create a new File instance from the file path
                return new File($value);
            }
        });
    }
    public function transform($value)
    {
        // Transform the File instance to a string (file path)
        if ($value instanceof File) {
            return $value->getPathname();
        }

        return null;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Course::class,
        ]);
    }
}
