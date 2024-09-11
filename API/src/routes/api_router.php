<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'domains'], static function () {
    require __DIR__.'/domains/auth.routes.php';

    Route::group(['middleware' => ['auth:sanctum']], static function () {
        require __DIR__.'/domains/workspace.routes.php';
        require __DIR__.'/domains/booking.routes.php';
    });
});

Route::group(['middleware' => ['auth:sanctum']], static function () {
    require __DIR__.'/data.routes.php';
    require __DIR__.'/actions.routes.php';
});
