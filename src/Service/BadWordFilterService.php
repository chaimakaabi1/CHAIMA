<?php

namespace App\Service;

class BadWordFilterService
{
    private $badWords = ['horrible', 'shit', 'dunkey']; // Add your list of bad words

    public function filterBadWords(string $text): string
    {
        // Replace bad words with asterisks
        foreach ($this->badWords as $badWord) {
            $text = str_ireplace($badWord, '***', $text);
        }

        return $text;
    }
}