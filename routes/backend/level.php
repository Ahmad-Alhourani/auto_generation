<?php

    /**
    * Level Management
    * All route names are prefixed with 'admin.level'.
    */
    Route::group([
    'namespace' => 'Level',
    'middleware' => 'role:administrator',
    ], function () {
    /*
    * Level CRUD
    */
    Route::resource('level', 'LevelController');
    Route::get('gem/{id}/levels', 'LevelController@gem')->name('level.gem');

});
