<?php

    /**
    * Player Management
    * All route names are prefixed with 'admin.player'.
    */
    Route::group([
    'namespace' => 'Player',
    'middleware' => 'role:administrator',
    ], function () {
    /*
    * Player CRUD
    */
    Route::resource('player', 'PlayerController');
    Route::get('gem/{id}/players', 'PlayerController@gem')->name('player.gem');
    Route::get('box/{id}/players', 'PlayerController@box')->name('player.box');

});
