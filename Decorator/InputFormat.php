<?php

namespace App\Foundation\Core\Text;

/**
 * Interface InputFormat
 * @package App\Foundation\Core\Text
 */
interface InputFormat
{

    /**
     * @param string $text
     * @return string
     */
    public function formatText(string $text): string;

}
