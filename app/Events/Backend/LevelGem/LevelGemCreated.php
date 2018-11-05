<?php
    namespace App\Events\Backend\LevelGem;

    use Illuminate\Queue\SerializesModels;
    /**
    * Class LevelGemCreated.
    */
    class LevelGemCreated
    {
            use SerializesModels;
            /**
            * @var
            */


            public $level_gem ;

            /**
            * @param $level_gem
            */
            public function __construct($level_gem)
            {
                 $this->level_gem = $level_gem;
            }
    }
