<?php

namespace App\Foundation\Core\Text;

/**
 * Class DangerousHTMLTagsFilter
 * @package App\Foundation\Core\Text
 */
class DangerousHTMLTagsFilter extends TextFormat
{

    /**
     * @var array contains dangerous string
     */
    protected $dangerousTagPatterns = [
        "/<script>/i", "/<.script>/i"
    ];

    /**
     * @param string $text
     * @return string
     */
    public function formatText(string $text): string
    {
        $text = html_entity_decode(parent::formatText($text));
        foreach ($this->dangerousTagPatterns as $pattern) {
            $text = preg_replace($pattern, '', $text);
        }
        return $text;
    }

}
