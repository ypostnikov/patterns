<?php

namespace App\Foundation\Core\Text;

/**
 * Class TextInput
 * @package App\Foundation\Core\Text
 */
class TextInput implements InputFormat
{

    /**
     * @param string $text
     * @return string
     */
    public function formatText(string $text): string
    {
        return $text;
    }

}
