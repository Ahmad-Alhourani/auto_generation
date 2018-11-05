<?php namespace App\Events\Backend\Gem;

    use Illuminate\Queue\SerializesModels;
    /**
    * Class GemDeleted.
    */

    class GemDeleted
    {
            use SerializesModels;
            /**
            * @var
            */


            public $gem ;

            /**
            * @param $gem
            */
            public function __construct($gem)
            {
                 $this->gem = $gem;
            }
    }
