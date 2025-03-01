<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;

class Rate extends Model
{
    static function index($rates): JsonResponse
    {
        $stack = [];
        foreach ($rates as $rate) {
            $stack[] = [
                'status' => 'success',
                'code' => 200,
                'data' => $rate
            ];
        };
        return response()->json($stack);
    }
}
