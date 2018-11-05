<?php

    /**
    * BoxItem Management
    * All route names are prefixed with 'admin.box_item'.
    */
    Route::group([
    'namespace' => 'BoxItem',
    'middleware' => 'role:administrator',
    ], function () {
    /*
    * BoxItem CRUD
    */
    Route::resource('box_item', 'BoxItemController');
    Route::get('item/{id}/box_items', 'BoxItemController@item')->name('box_item.item');
    Route::get('box/{id}/box_items', 'BoxItemController@box')->name('box_item.box');

});
