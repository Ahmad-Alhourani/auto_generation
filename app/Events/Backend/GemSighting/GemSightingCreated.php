<?php
    namespace App\Events\Backend\GemSighting;

    use Illuminate\Queue\SerializesModels;
    /**
    * Class GemSightingCreated.
    */
    class GemSightingCreated
    {
            use SerializesModels;
            /**
            * @var
            */


            public $gem_sighting ;

            /**
            * @param $gem_sighting
            */
            public function __construct($gem_sighting)
            {
                 $this->gem_sighting = $gem_sighting;
            }
    }
