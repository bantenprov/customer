<?php

Route::group(['prefix' => '/', 'middleware' => ['web']], function() {
    Route::resource('customer', 'Bantenprov\Customer\Http\Controllers\CustomerController');
});
