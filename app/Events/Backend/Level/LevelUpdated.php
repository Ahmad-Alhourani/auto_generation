<?php namespace App\Events\Backend\Level;

    use Illuminate\Queue\SerializesModels;
    /**
    * Class LevelUpdated.
    */
    class LevelUpdated
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
