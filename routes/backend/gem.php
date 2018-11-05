<?php

    /**
    * Gem Management
    * All route names are prefixed with 'admin.gem'.
    */
    Route::group([
    'namespace' => 'Gem',
    'middleware' => 'role:administrator',
    ], function () {
    /*
    * Gem CRUD
    */
    Route::resource('gem', 'GemController');
    Route::get('player/{id}/gems', 'GemController@player')->name('gem.player');
    Route::get('level/{id}/gems', 'GemController@level')->name('gem.level');
    Route::get('box/{id}/gems', 'GemController@box')->name('gem.box');

});
