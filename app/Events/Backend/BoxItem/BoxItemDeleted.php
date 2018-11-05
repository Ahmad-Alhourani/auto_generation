<?php namespace App\Events\Backend\BoxItem;

    use Illuminate\Queue\SerializesModels;
    /**
    * Class BoxItemDeleted.
    */

    class BoxItemDeleted
    {
            use SerializesModels;
            /**
            * @var
            */


            public $box_item ;

            /**
            * @param $box_item
            */
            public function __construct($box_item)
            {
                 $this->box_item = $box_item;
            }
    }
