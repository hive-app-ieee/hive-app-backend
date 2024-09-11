<?php

namespace API\Support\Services\APIResponse;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Illuminate\Http\JsonResponse executed()
 * @method static \Illuminate\Http\JsonResponse failed()
 * @method static \Illuminate\Http\JsonResponse success($body, int $code = 200, array $extra = [])
 * @method static \Illuminate\Http\JsonResponse error($body, int $code = 400, array $extra = [])
 * @method static \Illuminate\Http\JsonResponse base()
 *
 * @see \API\Support\Services\APIResponse\JsonResponder
 */

class ApiResponse extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'api-responder';
    }
}
