<?php

namespace App\Http\Controllers;

use App\Models\LecturasCe;
use Illuminate\Http\Request;

class LecturasCeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lecturas = LecturasCe::all();
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
    public function show(LecturasCe $lecturasCe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LecturasCe $lecturasCe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LecturasCe $lecturasCe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LecturasCe $lecturasCe)
    {
        //
    }
}
