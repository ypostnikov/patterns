<?php

namespace App\Foundation\Core\Text;

/**
 * Class HandleText
 * @package App\Foundation\Core\Text
 */
class HandleText
{

    /**
     * @var
     */
    protected $str;

    /**
     * HandleText constructor.
     * @param string $str
     */
    public function __construct(string $str)
    {
        $this->str = $str;
    }

    /**
     * @return string
     */
    public function handle(): string
    {
        $item = new TextComponent();
        $itemPlainText = $item->getText(new PlainText(new TextInput()), $this->str);
        $item = new TextComponent();
        return $item->getText(new DangerousHTMLTagsFilter(new TextInput()), $itemPlainText);
    }

}
