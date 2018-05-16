<?php

Route::group(['prefix' => 'customer'], function() {
    Route::get('demo', 'Bantenprov\Customer\Http\Controllers\CustomerController@demo');
});
