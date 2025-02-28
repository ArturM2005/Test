<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class RateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function rates()
    {
        $rates = Http::get('https://api.coincap.io/v2/rates')->json('data');
        return response()->json($rates, '200');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function convert(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
}
