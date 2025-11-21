<?php

namespace App\Http\Controllers;

use App\Models\LecturasTurbidez;

use Illuminate\Http\Request;

class LecturasTurbidezController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lecturas = LecturasTurbidez::all();
        return response()->json($lecturas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(LecturasTurbidez $lecturasTurbidez)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LecturasTurbidez $lecturasTurbidez)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LecturasTurbidez $lecturasTurbidez)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LecturasTurbidez $lecturasTurbidez)
    {
        //
    }
}
