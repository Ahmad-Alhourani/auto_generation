<?php

    /**
    * BoxSighting Management
    * All route names are prefixed with 'admin.box_sighting'.
    */
    Route::group([
    'namespace' => 'BoxSighting',
    'middleware' => 'role:administrator',
    ], function () {
    /*
    * BoxSighting CRUD
    */
    Route::resource('box_sighting', 'BoxSightingController');
    Route::get('player/{id}/box_sightings', 'BoxSightingController@player')->name('box_sighting.player');
    Route::get('box/{id}/box_sightings', 'BoxSightingController@box')->name('box_sighting.box');

});
