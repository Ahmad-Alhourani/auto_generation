<?php namespace App\Events\Backend\Item;

    use Illuminate\Queue\SerializesModels;
    /**
    * Class ItemDeleted.
    */

    class ItemDeleted
    {
            use SerializesModels;
            /**
            * @var
            */


            public $item ;

            /**
            * @param $item
            */
            public function __construct($item)
            {
                 $this->item = $item;
            }
    }
