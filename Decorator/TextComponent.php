<?php

namespace App\Foundation\Core\Text;

/**
 * Class TextComponent
 * @package App\Foundation\Core\Text
 */
class TextComponent
{

    /**
     * @param InputFormat $inputFormat
     * @param string $text
     * @return string
     */
    public function getText(InputFormat $inputFormat, string $text): string
    {
        return $inputFormat->formatText($text);
    }

}