<?php
namespace App\Http\Response;

use App\Constants\Messages\HttpErrors;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class Response
{
    public static function success($message, $data = [], $statusCode = 200): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data' => $data,
        ], $statusCode);
    }

    public static function error($message, $errors = [], $errorCode = HttpErrors::HTTP_400_BAD_REQUEST, $statusCode = 400): JsonResponse
    {
        return response()->json([
            'success' => false,
            'message' => $message,
            'error_code' => $errorCode,
            'errors' => $errors,
        ], $statusCode);
    }

    public static function errorException($message, $errors = [], $errorCode = HttpErrors::HTTP_400_BAD_REQUEST, $statusCode = 400)
    {
        throw new HttpResponseException(self::error($message, $errors, $errorCode, $statusCode));
    }
}
