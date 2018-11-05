<?php
namespace App\Listeners\Backend;

/**
* Class PlayerEventListener.
*/
/**
* Class PlayerCreated.
*/
class PlayerEventListener

{
    /**
    * @param $event
    */
    public function onCreated($event)
    {
    \Log::info('Player Created');
    }

    /**
    * @param $event
    */
        public function onUpdated($event)
        {
        \Log::info('Player  Updated');
        }

    /**
    * @param $event
    */
    public function onDeleted($event)
    {
    \Log::info('Player Deleted');
    }

    /**
    * Register the listeners for the subscriber.
    *
    * @param \Illuminate\Events\Dispatcher $events
    */
    public function subscribe($events)
    {
            $events->listen(
            \App\Listeners\Backend\Player\PlayerCreated::class,
            'App\Listeners\Backend\PlayerEventListener@onCreated'
            );

            $events->listen(
            \App\Listeners\Backend\Player\PlayerUpdated::class,
            'App\Listeners\Backend\PlayerEventListener@onUpdated'
            );

            $events->listen(
            \App\Listeners\Backend\Player\PlayerDeleted::class,
            'App\Listeners\Backend\PlayerEventListener@onDeleted'
            );
    }
}
