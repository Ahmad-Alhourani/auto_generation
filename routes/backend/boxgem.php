<?php

    /**
    * BoxGem Management
    * All route names are prefixed with 'admin.box_gem'.
    */
    Route::group([
    'namespace' => 'BoxGem',
    'middleware' => 'role:administrator',
    ], function () {
    /*
    * BoxGem CRUD
    */
    Route::resource('box_gem', 'BoxGemController');
    Route::get('gem/{id}/box_gems', 'BoxGemController@gem')->name('box_gem.gem');
    Route::get('box/{id}/box_gems', 'BoxGemController@box')->name('box_gem.box');

});
