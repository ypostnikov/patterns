
**Structual**

Factory Method 

Пространства имен условны

Example:

<pre>
   $channel = new ChannelCreator($task);
    $bundle = [
        $channel->create(ChannelCreator::NOTIFICATION),
        $channel->create(ChannelCreator::EMAIL),
        $channel->create(ChannelCreator::TELEGRAM)
    ];
    foreach ($bundle as $item) {
      $item->send();
    }
</pre>