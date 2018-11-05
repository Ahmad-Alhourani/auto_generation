<?php
namespace App\Listeners\Backend;

/**
* Class BoxSightingEventListener.
*/
/**
* Class BoxSightingCreated.
*/
class BoxSightingEventListener

{
    /**
    * @param $event
    */
    public function onCreated($event)
    {
    \Log::info('BoxSighting Created');
    }

    /**
    * @param $event
    */
        public function onUpdated($event)
        {
        \Log::info('BoxSighting  Updated');
        }

    /**
    * @param $event
    */
    public function onDeleted($event)
    {
    \Log::info('BoxSighting Deleted');
    }

    /**
    * Register the listeners for the subscriber.
    *
    * @param \Illuminate\Events\Dispatcher $events
    */
    public function subscribe($events)
    {
            $events->listen(
            \App\Listeners\Backend\BoxSighting\BoxSightingCreated::class,
            'App\Listeners\Backend\BoxSightingEventListener@onCreated'
            );

            $events->listen(
            \App\Listeners\Backend\BoxSighting\BoxSightingUpdated::class,
            'App\Listeners\Backend\BoxSightingEventListener@onUpdated'
            );

            $events->listen(
            \App\Listeners\Backend\BoxSighting\BoxSightingDeleted::class,
            'App\Listeners\Backend\BoxSightingEventListener@onDeleted'
            );
    }
}
