<?php

    /**
    * LevelGem Management
    * All route names are prefixed with 'admin.level_gem'.
    */
    Route::group([
    'namespace' => 'LevelGem',
    'middleware' => 'role:administrator',
    ], function () {
    /*
    * LevelGem CRUD
    */
    Route::resource('level_gem', 'LevelGemController');
    Route::get('gem/{id}/level_gems', 'LevelGemController@gem')->name('level_gem.gem');
    Route::get('level/{id}/level_gems', 'LevelGemController@level')->name('level_gem.level');

});
