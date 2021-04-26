<?php

namespace App\Foundation\Core\ChannelCore;

use App\Tasks\Task;

/**
 * Class NotificationChannel
 * @package App\Foundation\Core\ChannelCore
 */
class NotificationChannel implements Channel
{

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
