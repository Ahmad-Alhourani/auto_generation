<?php
namespace App\Listeners\Backend;

/**
* Class ItemEventListener.
*/
/**
* Class ItemCreated.
*/
class ItemEventListener

{
    /**
    * @param $event
    */
    public function onCreated($event)
    {
    \Log::info('Item Created');
    }

    /**
    * @param $event
    */
        public function onUpdated($event)
        {
        \Log::info('Item  Updated');
        }

    /**
    * @param $event
    */
    public function onDeleted($event)
    {
    \Log::info('Item Deleted');
    }

    /**
    * Register the listeners for the subscriber.
    *
    * @param \Illuminate\Events\Dispatcher $events
    */
    public function subscribe($events)
    {
            $events->listen(
            \App\Listeners\Backend\Item\ItemCreated::class,
            'App\Listeners\Backend\ItemEventListener@onCreated'
            );

            $events->listen(
            \App\Listeners\Backend\Item\ItemUpdated::class,
            'App\Listeners\Backend\ItemEventListener@onUpdated'
            );

            $events->listen(
            \App\Listeners\Backend\Item\ItemDeleted::class,
            'App\Listeners\Backend\ItemEventListener@onDeleted'
            );
    }
}
