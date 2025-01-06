<?php

namespace App\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\HttpFoundation\File\File;


class FileToUploadedFileTransformer implements DataTransformerInterface
{

    public function transform($file)
    {
        // Transform the File instance to the string path
        if ($file instanceof File) {
            return $file->getPathname();
        }

        return null;
    }

    public function reverseTransform($path)
    {
        // Transform the string path to a File instance
        if ($path) {
            return new File($path);
        }

        return null;
    }
}