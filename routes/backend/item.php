<?php

    /**
    * Item Management
    * All route names are prefixed with 'admin.item'.
    */
    Route::group([
    'namespace' => 'Item',
    'middleware' => 'role:administrator',
    ], function () {
    /*
    * Item CRUD
    */
    Route::resource('item', 'ItemController');
    Route::get('box/{id}/items', 'ItemController@box')->name('item.box');

});
