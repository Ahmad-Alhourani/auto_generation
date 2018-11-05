<?php
namespace App\Listeners\Backend;

/**
* Class GemSightingEventListener.
*/
/**
* Class GemSightingCreated.
*/
class GemSightingEventListener

{
    /**
    * @param $event
    */
    public function onCreated($event)
    {
    \Log::info('GemSighting Created');
    }

    /**
    * @param $event
    */
        public function onUpdated($event)
        {
        \Log::info('GemSighting  Updated');
        }

    /**
    * @param $event
    */
    public function onDeleted($event)
    {
    \Log::info('GemSighting Deleted');
    }

    /**
    * Register the listeners for the subscriber.
    *
    * @param \Illuminate\Events\Dispatcher $events
    */
    public function subscribe($events)
    {
            $events->listen(
            \App\Listeners\Backend\GemSighting\GemSightingCreated::class,
            'App\Listeners\Backend\GemSightingEventListener@onCreated'
            );

            $events->listen(
            \App\Listeners\Backend\GemSighting\GemSightingUpdated::class,
            'App\Listeners\Backend\GemSightingEventListener@onUpdated'
            );

            $events->listen(
            \App\Listeners\Backend\GemSighting\GemSightingDeleted::class,
            'App\Listeners\Backend\GemSightingEventListener@onDeleted'
            );
    }
}
