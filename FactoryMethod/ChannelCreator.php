<?php

namespace App\Foundation\Core\ChannelCore;

use App\Tasks\Task;

/**
 * Class ChannelCreator
 * @package App\Foundation\Core\ChannelCore
 */
class ChannelCreator extends AbstractCreator
{

    /**
     * @var
     */
    protected $task;

    /**
     * @var array
     */
    protected $types = [self::NOTIFICATION, self::TELEGRAM, self::EMAIL];

    /**
     * ChannelCreator constructor.
     * @param Task $task
     */
    public function __construct(Task $task)
    {
        $this->task = $task;
    }

    /**
     * @param string $type
     * @return EmailChannel|NotificationChannel|TelegramChannel
     */
    public function create(string $type)
    {

        if (!in_array($type, $this->types)) {
            //some action exception and etc...
        }

        switch ($type) {
            case self::NOTIFICATION:
                return new NotificationChannel($this->task);
            case self::TELEGRAM:
                return new TelegramChannel($this->task);
            case self::EMAIL:
                return new EmailChannel($this->task);
        }

    }

}
