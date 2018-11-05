<?php
namespace App\Listeners\Backend;

/**
* Class BoxItemEventListener.
*/
/**
* Class BoxItemCreated.
*/
class BoxItemEventListener

{
    /**
    * @param $event
    */
    public function onCreated($event)
    {
    \Log::info('BoxItem Created');
    }

    /**
    * @param $event
    */
        public function onUpdated($event)
        {
        \Log::info('BoxItem  Updated');
        }

    /**
    * @param $event
    */
    public function onDeleted($event)
    {
    \Log::info('BoxItem Deleted');
    }

    /**
    * Register the listeners for the subscriber.
    *
    * @param \Illuminate\Events\Dispatcher $events
    */
    public function subscribe($events)
    {
            $events->listen(
            \App\Listeners\Backend\BoxItem\BoxItemCreated::class,
            'App\Listeners\Backend\BoxItemEventListener@onCreated'
            );

            $events->listen(
            \App\Listeners\Backend\BoxItem\BoxItemUpdated::class,
            'App\Listeners\Backend\BoxItemEventListener@onUpdated'
            );

            $events->listen(
            \App\Listeners\Backend\BoxItem\BoxItemDeleted::class,
            'App\Listeners\Backend\BoxItemEventListener@onDeleted'
            );
    }
}
