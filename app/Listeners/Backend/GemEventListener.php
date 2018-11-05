<?php
namespace App\Listeners\Backend;

/**
* Class GemEventListener.
*/
/**
* Class GemCreated.
*/
class GemEventListener

{
    /**
    * @param $event
    */
    public function onCreated($event)
    {
    \Log::info('Gem Created');
    }

    /**
    * @param $event
    */
        public function onUpdated($event)
        {
        \Log::info('Gem  Updated');
        }

    /**
    * @param $event
    */
    public function onDeleted($event)
    {
    \Log::info('Gem Deleted');
    }

    /**
    * Register the listeners for the subscriber.
    *
    * @param \Illuminate\Events\Dispatcher $events
    */
    public function subscribe($events)
    {
            $events->listen(
            \App\Listeners\Backend\Gem\GemCreated::class,
            'App\Listeners\Backend\GemEventListener@onCreated'
            );

            $events->listen(
            \App\Listeners\Backend\Gem\GemUpdated::class,
            'App\Listeners\Backend\GemEventListener@onUpdated'
            );

            $events->listen(
            \App\Listeners\Backend\Gem\GemDeleted::class,
            'App\Listeners\Backend\GemEventListener@onDeleted'
            );
    }
}
