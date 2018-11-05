<?php
namespace App\Listeners\Backend;

/**
* Class BoxEventListener.
*/
/**
* Class BoxCreated.
*/
class BoxEventListener

{
    /**
    * @param $event
    */
    public function onCreated($event)
    {
    \Log::info('Box Created');
    }

    /**
    * @param $event
    */
        public function onUpdated($event)
        {
        \Log::info('Box  Updated');
        }

    /**
    * @param $event
    */
    public function onDeleted($event)
    {
    \Log::info('Box Deleted');
    }

    /**
    * Register the listeners for the subscriber.
    *
    * @param \Illuminate\Events\Dispatcher $events
    */
    public function subscribe($events)
    {
            $events->listen(
            \App\Listeners\Backend\Box\BoxCreated::class,
            'App\Listeners\Backend\BoxEventListener@onCreated'
            );

            $events->listen(
            \App\Listeners\Backend\Box\BoxUpdated::class,
            'App\Listeners\Backend\BoxEventListener@onUpdated'
            );

            $events->listen(
            \App\Listeners\Backend\Box\BoxDeleted::class,
            'App\Listeners\Backend\BoxEventListener@onDeleted'
            );
    }
}
