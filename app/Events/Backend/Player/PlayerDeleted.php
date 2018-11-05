<?php namespace App\Events\Backend\Player;

    use Illuminate\Queue\SerializesModels;
    /**
    * Class PlayerDeleted.
    */

    class PlayerDeleted
    {
            use SerializesModels;
            /**
            * @var
            */


            public $player ;

            /**
            * @param $player
            */
            public function __construct($player)
            {
                 $this->player = $player;
            }
    }
