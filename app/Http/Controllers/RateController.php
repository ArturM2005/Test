<?php

namespace App\Http\Controllers;

use App\Models\Rate;
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
        $rates = Http::get('https://api.coincap.io/v2/rates')->collect();
        return Rate::index($rates['data']);
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
