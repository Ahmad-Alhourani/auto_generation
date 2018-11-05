<?php
namespace App\Listeners\Backend;

/**
* Class LevelEventListener.
*/
/**
* Class LevelCreated.
*/
class LevelEventListener

{
    /**
    * @param $event
    */
    public function onCreated($event)
    {
    \Log::info('Level Created');
    }

    /**
    * @param $event
    */
        public function onUpdated($event)
        {
        \Log::info('Level  Updated');
        }

    /**
    * @param $event
    */
    public function onDeleted($event)
    {
    \Log::info('Level Deleted');
    }

    /**
    * Register the listeners for the subscriber.
    *
    * @param \Illuminate\Events\Dispatcher $events
    */
    public function subscribe($events)
    {
            $events->listen(
            \App\Listeners\Backend\Level\LevelCreated::class,
            'App\Listeners\Backend\LevelEventListener@onCreated'
            );

            $events->listen(
            \App\Listeners\Backend\Level\LevelUpdated::class,
            'App\Listeners\Backend\LevelEventListener@onUpdated'
            );

            $events->listen(
            \App\Listeners\Backend\Level\LevelDeleted::class,
            'App\Listeners\Backend\LevelEventListener@onDeleted'
            );
    }
}
