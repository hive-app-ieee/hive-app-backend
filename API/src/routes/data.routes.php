<?php

use API\Support\Services\APIResponse\ApiResponse;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'data'], static function () {
    Route::get('/test', function () {
        return ApiResponse::success('Hello, World!');
    })->withoutMiddleware('auth:sanctum');
});
