<?php

namespace App\Foundation\Core\Text;

/**
 * Class PlainText
 * @package App\Foundation\Core\Text
 */
class PlainText extends TextFormat
{

    /**
     * @var array
     */
    protected $allowable_tags = '<p><div>';

    /**
     * @param string $text
     * @return string
     */
    public function formatText(string $text): string
    {
        $text = parent::formatText($text);
        return strip_tags($text, $this->allowable_tags);
    }

}
