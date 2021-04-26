<?php

namespace App\Foundation\Core\ChannelCore;

use App\Tasks\Task;

/**
 * Class TelegramChannel
 * @package App\Foundation\Core\ChannelCore
 */
class TelegramChannel implements Channel
{
    /**
     * some vars
     */

    /**
     * NotificationChannel constructor.
     * @param Task $task
     */
    public function __construct(Task $task)
    {
    }

    /**
     * @return mixed|void
     */
    public function send()
    {
    }

}
