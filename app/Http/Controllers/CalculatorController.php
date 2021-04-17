<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    //
    public function add(Request $request) 
    {
        $valA = intval($request->input('valA'));
        $valB = intval($request->input('valB'));

        $result = $valA + $valB;
        return response()->json([
            'valA' => $valA,
            'valB' => $valB,
            'result' => $result
        ]);
    }
    public function subtract(Request $request) 
    {
        $valA = intval($request->input('valA'));
        $valB = intval($request->input('valB'));

        $result = $valA - $valB;
        return response()->json([
            'valA' => $valA,
            'valB' => $valB,
            'result' => $result
        ]);
    }
    public function mutliply(Request $request) 
    {
        $valA = intval($request->input('valA'));
        $valB = intval($request->input('valB'));

        $result = $valA * $valB;
        return response()->json([
            'valA' => $valA,
            'valB' => $valB,
            'result' => $result
        ]);
    }
    public function divide(Request $request) 
    {
        $valA = intval($request->input('valA'));
        $valB = intval($request->input('valB'));

        $result = $valA / $valB;
        return response()->json([
            'valA' => $valA,
            'valB' => $valB,
            'result' => $result
        ]);
    }
}
