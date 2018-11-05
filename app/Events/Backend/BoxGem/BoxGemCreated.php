<?php
    namespace App\Events\Backend\BoxGem;

    use Illuminate\Queue\SerializesModels;
    /**
    * Class BoxGemCreated.
    */
    class BoxGemCreated
    {
            use SerializesModels;
            /**
            * @var
            */


            public $box_gem ;

            /**
            * @param $box_gem
            */
            public function __construct($box_gem)
            {
                 $this->box_gem = $box_gem;
            }
    }
