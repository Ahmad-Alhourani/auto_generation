<?php
namespace App\Listeners\Backend;

/**
* Class LevelGemEventListener.
*/
/**
* Class LevelGemCreated.
*/
class LevelGemEventListener

{
    /**
    * @param $event
    */
    public function onCreated($event)
    {
    \Log::info('LevelGem Created');
    }

    /**
    * @param $event
    */
        public function onUpdated($event)
        {
        \Log::info('LevelGem  Updated');
        }

    /**
    * @param $event
    */
    public function onDeleted($event)
    {
    \Log::info('LevelGem Deleted');
    }

    /**
    * Register the listeners for the subscriber.
    *
    * @param \Illuminate\Events\Dispatcher $events
    */
    public function subscribe($events)
    {
            $events->listen(
            \App\Listeners\Backend\LevelGem\LevelGemCreated::class,
            'App\Listeners\Backend\LevelGemEventListener@onCreated'
            );

            $events->listen(
            \App\Listeners\Backend\LevelGem\LevelGemUpdated::class,
            'App\Listeners\Backend\LevelGemEventListener@onUpdated'
            );

            $events->listen(
            \App\Listeners\Backend\LevelGem\LevelGemDeleted::class,
            'App\Listeners\Backend\LevelGemEventListener@onDeleted'
            );
    }
}
