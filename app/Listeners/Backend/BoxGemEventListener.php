<?php
namespace App\Listeners\Backend;

/**
* Class BoxGemEventListener.
*/
/**
* Class BoxGemCreated.
*/
class BoxGemEventListener

{
    /**
    * @param $event
    */
    public function onCreated($event)
    {
    \Log::info('BoxGem Created');
    }

    /**
    * @param $event
    */
        public function onUpdated($event)
        {
        \Log::info('BoxGem  Updated');
        }

    /**
    * @param $event
    */
    public function onDeleted($event)
    {
    \Log::info('BoxGem Deleted');
    }

    /**
    * Register the listeners for the subscriber.
    *
    * @param \Illuminate\Events\Dispatcher $events
    */
    public function subscribe($events)
    {
            $events->listen(
            \App\Listeners\Backend\BoxGem\BoxGemCreated::class,
            'App\Listeners\Backend\BoxGemEventListener@onCreated'
            );

            $events->listen(
            \App\Listeners\Backend\BoxGem\BoxGemUpdated::class,
            'App\Listeners\Backend\BoxGemEventListener@onUpdated'
            );

            $events->listen(
            \App\Listeners\Backend\BoxGem\BoxGemDeleted::class,
            'App\Listeners\Backend\BoxGemEventListener@onDeleted'
            );
    }
}
