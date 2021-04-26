<?php

namespace App\Foundation\Core\ChannelCore;

/**
 * Class AbstractCreator
 * @package App\Foundation\Core\ChannelCore
 */
abstract class AbstractCreator
{

    const TELEGRAM = 'telegram';
    const NOTIFICATION = 'notification';
    const EMAIL = 'email';

    /**
     * @param string $type
     * @return mixed
     */
    abstract public function create(string $type);

}
