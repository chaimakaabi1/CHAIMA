<?php

namespace App\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use Symfony\Component\HttpFoundation\File\File;

class FileToSymfonyTransformer implements DataTransformerInterface
{
    public function transform($value): ?File
    {
        if (null === $value) {
            return null;
        }

        return new File($value);
    }

    public function reverseTransform($value): ?string
    {
        if (null === $value) {
            return null;
        }

        if (!$value instanceof File) {
            throw new TransformationFailedException('Expected a "Symfony\Component\HttpFoundation\File\File".');
        }

        return $value->getFilename();
    }
}
