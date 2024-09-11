<?php

namespace API\Http\Controllers;

use API\Support\Services\APIResponse\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

class APIController extends Controller
{
    public function success(mixed $message, int $code = 200, array $extra = []): JsonResponse
    {
        return ApiResponse::success($message, $code, $extra);
    }

    public function error(mixed $message, int $code = 400, array $extra = []): JsonResponse
    {
        return ApiResponse::error($message, $code, $extra);
    }

    public function executed(): JsonResponse
    {
        return ApiResponse::executed();
    }
}
