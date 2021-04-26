<?php

namespace App\Foundation\Core\ChannelCore;

use App\Tasks\Task;

/**
 * Class EmailChannel
 * @package App\Foundation\Core\Channel
 */
class EmailChannel implements Channel
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
