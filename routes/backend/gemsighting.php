<?php

    /**
    * GemSighting Management
    * All route names are prefixed with 'admin.gem_sighting'.
    */
    Route::group([
    'namespace' => 'GemSighting',
    'middleware' => 'role:administrator',
    ], function () {
    /*
    * GemSighting CRUD
    */
    Route::resource('gem_sighting', 'GemSightingController');
    Route::get('gem/{id}/gem_sightings', 'GemSightingController@gem')->name('gem_sighting.gem');
    Route::get('player/{id}/gem_sightings', 'GemSightingController@player')->name('gem_sighting.player');

});
