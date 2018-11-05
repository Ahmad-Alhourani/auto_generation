<?php

    /**
    * Box Management
    * All route names are prefixed with 'admin.box'.
    */
    Route::group([
    'namespace' => 'Box',
    'middleware' => 'role:administrator',
    ], function () {
    /*
    * Box CRUD
    */
    Route::resource('box', 'BoxController');
    Route::get('gem/{id}/boxes', 'BoxController@gem')->name('box.gem');
    Route::get('player/{id}/boxes', 'BoxController@player')->name('box.player');
    Route::get('item/{id}/boxes', 'BoxController@item')->name('box.item');

});
