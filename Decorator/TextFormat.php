<?php

namespace App\Foundation\Core\Text;

/**
 * Class TextFormat
 * @package App\Foundation\Core\Text
 */
class TextFormat implements InputFormat
{

    /**
     * @var
     */
    protected $inputFormat;

    /**
     * TextFormat constructor.
     * @param InputFormat $inputFormat
     */
    public function __construct(InputFormat $inputFormat)
    {
        $this->inputFormat = $inputFormat;
    }

    /**
     * @param string $text
     * @return string
     */
    public function formatText(string $text): string
    {
        return trim($this->inputFormat->formatText($text));
    }

}
