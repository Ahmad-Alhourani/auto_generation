<?php
    namespace App\Events\Backend\Level;

    use Illuminate\Queue\SerializesModels;
    /**
    * Class LevelCreated.
    */
    class LevelCreated
    {
            use SerializesModels;
            /**
            * @var
            */


            public $level ;

            /**
            * @param $level
            */
            public function __construct($level)
            {
                 $this->level = $level;
            }
    }
