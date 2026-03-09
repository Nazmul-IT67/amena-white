<?php
namespace App\Traits;

use Illuminate\Http\Request;

trait ApiResponse
{
    public function success($data = [], $message = 'Success', $code = 200)
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data'    => $data,
            'code'    => $code,
        ], $code);
    }

    public function error($message = 'Error', $code = 400)
    {
        return response()->json([
            'success' => false,
            'message' => $message,
            'data'    => null,
            'code'    => $code,
        ], $code);
    }
}
