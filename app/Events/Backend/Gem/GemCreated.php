<?php
    namespace App\Events\Backend\Gem;

    use Illuminate\Queue\SerializesModels;
    /**
    * Class GemCreated.
    */
    class GemCreated
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
